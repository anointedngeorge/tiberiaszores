<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    public $fillable = [
        'title',
        'content',
        'image'
    ];
}
