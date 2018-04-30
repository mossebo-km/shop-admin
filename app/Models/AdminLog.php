<?php

namespace App\Models;

class AdminLog extends Base\BaseModel
{
    protected $tableIdentif = 'AdminLogs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'type', 'message',
    ];

    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'admin_id');
    }
}
