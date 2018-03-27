<?php

namespace App\Support\Traits\Models;

trait Sluggable
{
    /**
     * Проверка доступности slug для таблицы.
     *
     * @param  string
     * @param  mixed
     * @return bool
     */
    public static function slugAvailableForTable(string $slug, $excluded = false): bool
    {
        $query = self::where('slug', $slug);

        if ($excluded !== false) {
            $query->where((new static)->primaryKey, '!=', $excluded);
        }

        return ! $query->exists();
    }

    /**
     * Проверка доступности slug для текущей модели.
     *
     * @param  string
     * @return bool
     */
    public function slugAvailableForModel(string $slug): bool
    {
        return self::slugAvailableForTable($slug, $this->id);
    }
}
