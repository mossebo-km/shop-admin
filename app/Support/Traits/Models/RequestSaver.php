<?php

namespace App\Support\Traits\Models;

trait RequestSaver
{
    /**
     * Сохранение, используя данные, полученные из запроса.
     *
     * @param array $data
     * @return self
     */
    public function saveFromRequestData(array $data): self
    {
        \DB::transaction(function() use($data) {
            $fillable = $this->getFillableData($data);

            foreach (array_keys($fillable) as $toUnset) {
                unset($data[$toUnset]);
            }

            $this->handleRelationData($data);

            if ($this->id) {
                $this->update($fillable);
            }
            else {
                $this->fill($fillable)->save();
            }
        });

        return $this;
    }

    /**
     * Сохранение связанных моделей, либо данных, требующих дополнительной обработки.
     *
     * @param array $data
     */
    protected function handleRelationData(array $data): void
    {
        foreach ($this->needsToSaveFromRequest ?: [] as $stepName) {
            $methodName = '_save' . camelize($stepName);
            $stepData = isset($data[$stepName]) ? $data[$stepName] : null;

            if (method_exists($this, $methodName)) {
                call_user_func([$this, $methodName], $stepData);
            }
        }
    }
}
