<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $fillable=['name','email','password','phonenumber'];
    //

    protected $casts = [
        'permissions' => 'json',
    ];
}
