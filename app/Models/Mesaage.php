<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesaage extends Model
{
    //

    protected $fillable = [
        'name',
        'email',
        'message',
        'phone',
    ];
}
