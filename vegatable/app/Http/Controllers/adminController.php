<?php

namespace App\Http\Controllers;
use App\admin;
use App\contact;
use App\about;
use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function index()
    {
        $admins=\DB::table('users')->paginate(8);
        return view('admin.adminuser',compact('admins'));
        
    }
/*   function edit($id)
    {
            $admin=\DB::select('select * from users where id = ?',[$id]);
        return view('admin.edituser',['admin'=> $admin]);
    }
    */

 function editing($id)
 {
    $admin=User::find($id);
    return view('admin.edituser',compact('admin','id'));
 }

 public function updated(Request $request, $id)
 {
     $name1=$request->input('name');
     $email1=$request->input('email');
     $password1=$request->input('password');
     $email_verified_at1=$request->input('email_verified_at');
     \DB::update('update users set name = ? , email = ? , password = ? , email_verified_at = ?  where id = ?'
         ,[$name1,$email1,$password1,$email_verified_at1,$id]);

    return redirect('/admin/adminuser')->with('success','Data updated');
}




 /*function update(admin $admin)
 {
    $validated= \request()->validate(['name'=>'required','email'=>'required','password'=>'required']);
     $admin->update($validated);
     return redirect('/admin/adminuser')->with('success','Data updated');
}*/



    public function delete($id)
 {
\DB::delete('delete from users where id =?',[$id]);
return redirect('/admin/adminuser')->with('danger','deleted sucessfully');
 }

}
