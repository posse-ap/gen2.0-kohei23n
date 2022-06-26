<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function languages()
    {
        return $this->hasMany('App\Language');
    }

    public function content()
    {
        return $this->hasMany('App\Content');
    }
}
