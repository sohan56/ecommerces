<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;

class PasswordController extends Controller
{
     public function password_change()
    {
        return view('pages.password_change');
    }
    public function update_password(Request $request)
    {
    	$password = Auth::user();
    	$old_pass = $request->old_pass;
    	if ($old_pass==$password){
    		$user=User::find(Auth::customer_id());
    		$user->save();
    		Auth::logout();
    		return Redirect('login');
    	}
    	else{
    		return Redirect()
    		->back();
    	}
    }
}
