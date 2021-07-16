<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;

use App\card;

use Illuminate\Http\Request;

class cardController extends Controller
{
    function index()
    {
        $cards=\DB::table('cards')->paginate(8);
        return view('about.index',compact('cards'));
        
    }

    function create()
    {
        return view('card.create');
    }

    function show(card $card)
    {
       return view('card.show',compact('card'));

    }
    function store()
    {   $filePath="upload/".date('ymdHis').".jpg";
        Image::make(\request()->image)->resize(300, 200)->save($filePath);
        $validated= \request()->validate(['name'=>'required','description'=>'required','price'=>'required']);
        $validated['image']=$filePath;
        card::create($validated);
       return redirect('/abouts');
    }



    //
}
