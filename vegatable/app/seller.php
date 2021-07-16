<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    //
    protected $fillable=['name','seller_id'];

    function products(){
    return $this->hasMany(product::class);
    }
}
