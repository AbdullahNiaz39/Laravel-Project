<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable=['name','description','price','type','image','seller_id'];
    function seller(){
        return $this->belongsTo(seller::class);
        }

        function tags(){
            return $this->belongsToMany(tag::class);
            }
}
