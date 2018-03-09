<?php

namespace App\Http\Collectors\Base;

use App\Models;

class BaseCollector
{
    protected $fields = [];

    public function collect($dataObj)
    {
        $result = [];

        foreach ($this->fields as $fieldName) {
            $methodName = '_get' . ucfirst($fieldName);

            if (method_exists($this, $methodName)) {
                $result[$paramName] = call_user_func([$this, $methodName], $dataObj);
            }
            elseif (isset($dataObj[$fieldName])) {
                $result[$fieldName] = $dataObj->$fieldName;
            }
        }

        return $result;
    }
}