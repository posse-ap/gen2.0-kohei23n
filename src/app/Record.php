<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'study_date', 'study_time', 'language_id', 'content_id'
    ];

    protected $casts = [
        'study_date' => 'array', 
        'study_time' => 'array', 
        'language_id' => 'array', 
        'content_id' => 'array'
    ];
}
