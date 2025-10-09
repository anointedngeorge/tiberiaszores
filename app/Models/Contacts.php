<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    public $fillable = [
        'name',
        'email',
        'subject',
        'content',
        'phone'
    ];
}
