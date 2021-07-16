<?php

namespace App\Http\Controllers;
use App\inform;

use Illuminate\Http\Request;

class informController extends Controller
{
    function index()
    {
        $informs=\DB::table('informs')->paginate(8);
        return view('admin.inform',compact('informs'));
        
    }

    function show(inform $inform)
    {
       return view('inform.show',compact('inform'));

    }

    function create()
    {
        return view('inform.create');
    }
    function store()
    {
        $validated= \request()->validate(['name'=>'required','email'=>'required','message'=>'required']);
        inform::create($validated);
       return redirect('informs/confirm');
    }

    public function delete($id)
 {
\DB::delete('delete from informs where id =?',[$id]);
return redirect('admin/informs')->with('danger','deleted sucessfully');
 }
    //
}
