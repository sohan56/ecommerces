<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class contactController extends Controller
{
    public function message_store()
    {
    	$data =request()->validate([
    		'name'=>'required',
    		'email'=>'required | email',
    		'message'=>'required',


    	]);
    	Mail::to('shopifys2019@gmail.com')->send(new ContactMessage($data));
    }
}
