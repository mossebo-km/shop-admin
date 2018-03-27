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

    'positions' => "Позиция сохранена.",
];