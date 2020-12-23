<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployerRequest;
use App\Models\User;
use App\Models\Employer;

class adminController extends Controller
{
    public function home(Request $req){
    	return view('admin.home',['username'=>$req->session()->get('username')]);
    }

    public function addEmployer(){
    	return view('employer.add');
    }

    public function storeEmployer(EmployerRequest $req){
    	$user = new User();
    	$employer = new Employer();

    	$user->username = $req->username;
    	$user->password = $req->password;
    	$user->type = $req->type;

    	$employer->employername = $req->employername;
    	$employer->companyname = $req->companyname;
    	$employer->contactno = $req->contactno;
    	$employer->username = $req->username;
    	$employer->type = $req->type;

    	$user->save();
    	$employer->save();

    	return redirect()->route('employer.list');
    }

    public function listEmployer(){
    	$employers = Employer::all();
    	return view('employer.list',['employers'=>$employers]);
    }

    public function editEmployer($id){
    	$employer = Employer::find($id);
    	$user = User::where('username', $employer->username)->first();
    	$employer->password = $user->password;
    	return view('employer.edit', $employer);
    }

    public function updateEmployer(EmployerRequest $req, $id){
    	$employer = Employer::find($id);

    	$user = User::where('username', $employer->username)->first();

    	$user->username = $req->username;
    	$user->password = $req->password;
    	$user->type = $req->type;

    	$employer->employername = $req->employername;
    	$employer->companyname = $req->companyname;
    	$employer->contactno = $req->contactno;
    	$employer->username = $req->username;
    	$employer->type = $req->type;

    	$user->save();
    	$employer->save();

    	return redirect()->route('employer.list');
    }

    public function deleteEmployer($id){
    	$employer = Employer::find($id)->first();
    	return view('employer.delete', ['name'=>$employer->employername]);
    }

    public function removeEmployer($id){
    	$employer = Employer::find($id);
    	$employer->delete();

    	return redirect()->route('employer.list');
    }
}
