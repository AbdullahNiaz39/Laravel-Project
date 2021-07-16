<?php

namespace App\Http\Controllers;
use App\Mail\info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
class infoController extends Controller
{
    //
    function mail(){
        
        $mail=new info(Auth::user()->name);
        Mail::to(\request('email'))->send($mail);
         return redirect(route('home'))->with('email_sent','SuccessFully, Email are sent');
    }
}
