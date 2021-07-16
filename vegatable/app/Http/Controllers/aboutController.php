<?php

namespace App\Http\Controllers;
use App\about;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    function index()
    {
        $abouts=\DB::table('abouts')->paginate(8);
        return view('admin.index',compact('abouts'));
        
    }

    function show(about $about)
    {
       return view('about.show',compact('about'));

    }

    function create()
    {
        return view('about.create');
    }
    function store()
    {
        $validated= \request()->validate(['name'=>'required','email'=>'required','password'=>'required','phonenumber'=>'required']);
        about::create($validated);
       return redirect('about/confirm');
    }

 /*function edit($id)
    {
            $about=\DB::select('select * from abouts where id = ?',[$id]);
        return view('admin.edit',['about'=> $about]);
    }*/
    function edit(about $about)
    {
        return view('admin.edit',compact('about'));
    }
    function update(about $about)
    {
       $validated= \request()->validate(['name'=>'required','email'=>'required','password'=>'required','phonenumber'=>'required']);
        $about->update($validated);
        return redirect('/admin/abouts')->with('success','Data updated');
 }

    // function edit(about $about)
   // {
    //    return view('about.edit',compact('about'));
   // }

    // function update(about $about)
    // {
    //    $validated= \request()->validate(['name'=>'required','email'=>'required','password'=>'required','phonenumber'=>'required']);
        // about::update($validated);
        // return redirect('/abouts/'.$about->id);
//  }

/*public function update(Request $request, $id)
    {
        $name1=$request->input('name');
        $email1=$request->input('email');
        $password1=$request->input('password');
        $phonenumber1=$request->input('phonenumber');
        \DB::update('update abouts set name = ? , email = ? , password = ? , phonenumber = ? where id = ?'
            ,[$name1,$email1,$password1,$phonenumber1,$id]);

       return redirect('/admin/abouts')->with('success','Data updated');
    }*/
 public function save( Request $request)
 {
     $name1=$request->input('name');
     $email1=$request->input('email');
     $password1=$request->input('password');
     $phonenumber1=$request->input('phonenumber');
     \DB::insert('insert into abouts (name , email  , password  , phonenumber) values(?,?,?,?)'
         ,[$name1,$email1,$password1,$phonenumber1]);
     return redirect('/admin/abouts')->with('success','Data Inserted');
 }
 public function insertform()
 {
     return view('/admin/insert');
 }
 public function delete($id)
 {
\DB::delete('delete from abouts where id =?',[$id]);
return redirect('/admin/abouts')->with('danger','deleted sucessfully');
 }
    

}

