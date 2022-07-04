<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $casts = [
        'language'  => 'json',
        'colour'  => 'json',
    ];
}
