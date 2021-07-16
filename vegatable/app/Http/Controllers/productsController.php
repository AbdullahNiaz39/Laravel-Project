<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;

use App\product;
use App\tag;

use Illuminate\Http\Request;

class productsController extends Controller
{
    function index(Request $request){  
        $tag=null;
        if($request->has('tag'))
         { 
           $id= $request->get('tag') ;
            $tag=tag::findOrFail($id);
            $products=$tag->products;
         }
        else
            $products=product::get();
        return view('product.index',compact('products'));
    }
    function create()
    {
        return view('product.create')->with('tags', tag::all());
    }

    function show(product $product)
    {
       return view('product.show',compact('product'));

    }
    function store()
    {   $filePath="upload/".date('ymdHis').".jpg";
        Image::make(\request()->image)->resize(300, 200)->save($filePath);
        $validated= \request()->validate(['name'=>'required','description'=>'required','price'=>'required','type'=>'required']);
        $validated['image']=$filePath;
        $validated['seller_id']=1;
        $product=product::create($validated);
        $product->tags()->attach(\request()->tags);
       return redirect('/');

    }

    //
}
