<?php

namespace App\Http\Controllers;
use App\seller;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    function show(seller $seller){
        return view('seller.show',compact('seller'));
    }
    //
}
