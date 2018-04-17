<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    App\Models\Product::class => [
        'status' => [
            'enabled' => 'Товар #:id показан.',
            'disabled' => 'Товар #:id скрыт.',
        ],
        'created' => 'Товар #:id успешно создан.',
        'updated' => 'Товар #:id успешно изменен.',
        'deleted' => 'Товар #:id был удален.',
    ],

    App\Models\Category::class => [
        'status' => [
            'enabled' => 'Категория #:id показана.',
            'disabled' => 'Категория #:id скрыта.',
        ],
        'created' => 'Категория #:id успешно создана.',
        'updated' => 'Категория #:id успешно изменена.',
        'deleted' => 'Категория #:id была удалена.',
    ],

    App\Models\Supplier::class => [
        'status' => [
            'enabled' => 'Поставщик #:id показан.',
            'disabled' => 'Поставщик #:id скрыт.',
        ],
        'created' => 'Поставщик #:id успешно создан.',
        'updated' => 'Поставщик #:id успешно изменен.',
        'deleted' => 'Поставщик #:id был удален.',
    ],

    App\Models\Attribute::class => [
        'status' => [
            'enabled' => 'Аттрибут #:id показан.',
            'disabled' => 'Аттрибут #:id скрыт.',
        ],
        'created' => 'Аттрибут #:id успешно создан.',
        'updated' => 'Аттрибут #:id успешно изменен.',
        'deleted' => 'Аттрибут #:id был удален.',
    ],

    'positions' => "Позиция сохранена.",


    'ImageEditor' => [
        'rotate' => 'Невозможно повернуть на заданный угол.',

    ]
];