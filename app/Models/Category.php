<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\PositionChangeable;
use App\Support\Traits\Models\Sluggable;

class Category extends Base\BaseModelI18
{
    use StatusChangeable, PositionChangeable, Sluggable;

    protected $tableIdentif = 'Categories';
    protected $translateRelationField = 'category_id';

    protected $fillable = [
        'parent_id', 'slug', 'enabled', 'position'
    ];

    public function categoryProducts()
    {
        return $this->hasMany(CategoryProducts::class, 'category_id');
    }

    public function products()
    {
        return $this->hasManyThrough(
            Product::class,
            CategoryProducts::class,
            'product_id',
            'category_id',
            'id',
            'id'
        );
    }

    public function delete()
    {
        \DB::transaction(function() {
            self::where('parent_id', $this->id)->update(['parent_id' => 0]);
            parent::delete();
        });
    }


    /**
     * Сохранение товара, используя данные, полученные из запроса.
     *
     * @param  Array
     * @return Product
     */
    public function saveFromRequestData(Array $data): self
    {
        \DB::transaction(function() use($data) {
            $fillableData = $this->getFillableData($data);

            $fillableData['parent_id'] = (int) $fillableData['parent_id'];

            if ($this->id) {
                $this->update($fillableData);
            }
            else {
                $this->fill($this->getFillableData($data))->save();
            }

            $whatNeedsToSave = ['i18'];

            foreach ($whatNeedsToSave as $stepName) {
                $methodName = '_save' . ucfirst($stepName);
                $stepData = isset($data[$stepName]) ? $data[$stepName] : [];

                if (method_exists($this, $methodName)) {
                    call_user_func([$this, $methodName], $stepData);
                }
            }
        });

        return $this;
    }
}