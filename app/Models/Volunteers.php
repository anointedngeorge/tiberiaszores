<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteers extends Model
{
    public $fillable = [
        'name',
        'phone',
        'email',
        'occupation',
        'dob',
        'tag',
        'address',
        'content',
        'image',
    ];


    
}
