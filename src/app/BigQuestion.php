<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    public $timestamps = false;

    protected $attributes = [
        'hide' => 0,
    ];

}
