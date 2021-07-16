<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    function products(){
        return $this->belongsToMany(product::class);
    }
    //
}
