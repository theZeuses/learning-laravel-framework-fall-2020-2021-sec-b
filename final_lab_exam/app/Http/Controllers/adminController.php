<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class adminController extends Controller
{
    public function home(Request $req){
    	return view('admin.home',['username'=>$req->session()->get('username')]);
    }

    public function addEmployer(){
    	return view('employer.add');
    }
}
