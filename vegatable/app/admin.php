<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable=['name','email','password','email_verified_at'];
    //
    protected $casts = [
        'permissions' => 'json',
    ];
}
