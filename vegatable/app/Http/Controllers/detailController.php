<?php

namespace App\Http\Controllers;
Use App\card;
use Illuminate\Http\Request;

class detailController extends Controller
{
    //
    function index($id)
    {
            $detail=\DB::select('select * from card where id = ?',[$id]);
        return view('detail.index',['detail'=> $detail]);
    }
    

    function show(about $about)
    {
       return view('about.show',compact('about'));

    }

}
