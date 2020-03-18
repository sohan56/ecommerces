<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index(){

	    $main = view('pages.main');
	       return view('home')
	         ->with('main',$main);
    }
    public function mens_wear(){

	  $mens_wear = view('mens.mens_wear');
     return view('home')
            ->with('mens_wear',$mens_wear);
    }
    public function womens_wear(){

	  $womens_wear = view('womens.womens_wear');
     return view('home')
            ->with('womens_wear',$womens_wear);
    }
    public function electronics(){

	  $electronics = view('electronics.electronics');
     return view('home')
            ->with('electronics',$electronics);
    }
    public function contact(){

	  $contact = view('pages.contact');
     return view('home')
            ->with('contact',$contact);
    }
}
