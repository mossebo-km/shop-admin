<?php

namespace App\Listeners\Entity;

use Auth;
use App\Contracts\Events\EntityChangeEvent;
use App\Models\AdminLog;

class EntityChangeNeedsLogListener
{
    protected $event;
    protected $eventName;
    protected $entityName;
    protected $model;
    protected $messages = [
        'ProductCreated'         => 'Товар #:id: создан.',
        'ProductUpdated'         => 'Товар #:id: отредактирован.',
        'ProductDeleted'         => 'Товар #:id: удален.',
        'ProductStatusChanged'   => [
            'enabled' => [
                0 => 'Товар #:id: скрыт.',
                1 => 'Товар #:id: показан.'
            ]
        ],

        'CategoryCreated'        => 'Категория #:id: создана.',
        'CategoryUpdated'        => 'Категория #:id: отредактирована.',
        'CategoryDeleted'        => 'Категория #:id: удалена.',
        'CategoryStatusChanged'  => [
            'enabled' => [
                0 => 'Категория #:id: скрыта.',
                1 => 'Категория #:id: показана.'
            ]
        ],

        'SupplierCreated'        => 'Поставщик #:id: создан.',
        'SupplierUpdated'        => 'Поставщик #:id: отредактирован.',
        'SupplierDeleted'        => 'Поставщик #:id: удален.',
        'SupplierStatusChanged'  => [
            'enabled' => [
                0 => 'Поставщик #:id: скрыт.',
                1 => 'Поставщик #:id: показан.'
            ]
        ],

        'AttributeCreated'       => 'Аттрибут #:id: создан.',
        'AttributeUpdated'       => 'Аттрибут #:id: отредактирован.',
        'AttributeDeleted'       => 'Аттрибут #:id: удален.',
        'AttributeStatusChanged' => [
            'enabled' => [
                0 => 'Аттрибут #:id: скрыт.',
                1 => 'Аттрибут #:id: показан.'
            ]
        ],
    ];

    /**
     * Handle the event.
     *
     * @param  EntityChangeEvent  $event
     * @return void
     */
    public function handle(EntityChangeEvent $event)
    {
        $this->event = $event;
        $this->model = $event->getModel();
        $this->eventName = $event->getName();
        $this->entityName = $event->getEntityName();

        Auth::guard()->user()->adminLog()->save(new AdminLog([
            'type' => $this->getType(),
            'message' => $this->getMessage()
        ]));
    }

    protected function getType()
    {
        return $this->entityName . ucfirst($this->eventName);
    }

    protected function getMessage()
    {
        $messages = &$this->messages;

        $type = $this->getType();

        if (!isset($messages[$type])) {
            return json_encode($this->model, JSON_UNESCAPED_UNICODE);
        }

        $message = $messages[$type];

        if (is_array($message)) {
            reset($message);
            $firstKey = key($message);

            $message = $message[$firstKey][$this->model[$firstKey]];
        }

        return $this->replaceVars($message);
    }

    protected function replaceVars($message)
    {
        foreach ($this->model->toArray() as $key => $value) {
            $keyName = ":{$key}:";
            if (strpos($message, $keyName) !== false) {
                $message = str_replace($keyName, $value, $message);
            }
        }

        return $message;
    }
}
