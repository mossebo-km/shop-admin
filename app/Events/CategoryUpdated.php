<?php

namespace App\Events;

use App\Models\Category;
use Illuminate\Queue\SerializesModels;

class CategoryUpdated
{
    use SerializesModels;

    public $category;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->$category = $category;
    }
}
