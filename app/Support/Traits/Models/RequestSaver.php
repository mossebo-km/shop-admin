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
    public function saveFromRequestData(Array $data): self
    {
        \DB::transaction(function() use($data) {
            if ($this->id) {
                $this->update($this->getFillableData($data));
            }
            else {
                $this->fill($this->getFillableData($data))->save();
            }

            $this->handleRelationData($data);
        });

        return $this;
    }

    /**
     * Сохранение связанных моделей, либо данных, требующих дополнительной обработки.
     *
     * @param array $data
     */
    protected function handleRelationData(Array $data): void
    {
        foreach ($this->needsToSaveFromRequest ?: [] as $stepName) {
            $methodName = '_save' . ucfirst($stepName);
            $stepData = isset($data[$stepName]) ? $data[$stepName] : [];

            if (method_exists($this, $methodName)) {
                call_user_func([$this, $methodName], $stepData);
            }
        }
    }
}
