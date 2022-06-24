<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;

    public function choices()
    {
        return $this->hasMany('App\Choice')->where('hide', 0);
    }
}
