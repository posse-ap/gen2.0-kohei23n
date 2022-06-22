<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    public $timestamps = false;

    protected $attributes = [
        'hide' => 0,
    ];

    public function getSortIDAttribute()
    {
        return $this->id + 100;
    }
}
