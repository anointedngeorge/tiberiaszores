<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MEvents extends Model
{
    public $fillable = [
        'title',
        'content',
        'start',
        'end',
        'address',
        'date',
        'image',
        'time'
    ];
}
