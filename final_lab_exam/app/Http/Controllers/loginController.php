<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function verify(Request $req){

        $user  = User::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();

    	if($user != null){

            $req->session()->put('username', $req->username);
            $req->session()->put('type', $user->type);

            if($user->type == "admin"){
            	return redirect('/admin');
            }else{
            	return redirect('/employer');
            }          
    		
    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
}
