<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Language extends Base\BaseModel
{
    use SoftDeletes;

    protected $tableIdentif = 'Languages';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at'
    ];

    public static function enabled()
    {
        return self::where('enabled', 1)->get();
    }
}
