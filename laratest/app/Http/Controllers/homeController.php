<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

    /*	$user = ['name'=> 'alamin', 'id'=>12];
    	return view('home.index', $user);*/

    	/*
    	$name = 'alamin';
    	$id = 33;
    	$cgpa = 4;
    	return view('home.index', compact('name', 'id', 'cgpa'));*/

    /*	return view('home.index')
    			->with('name', 'alamin')
    			->with('id', '66');*/

    	/*return view('home.index')
    			->withName('alamin')
    			->withId('66');*/

    	/*$v = view('home.index');
    	$v->withName('alamin');
    	$v->withId('12');
    	return $v;*/

    	return view('home.index');
	}
	
	private $studentList = [
		['id'=> 1, 'name'=> 'alamin', 'cgpa'=>1.2, 'email'=> 'alamin@aiub.edu'],
		['id'=> 2, 'name'=> 'CYZ', 'cgpa'=>2.2, 'email'=> 'CYZ@aiub.edu'],
		['id'=> 3, 'name'=> 'XYZ', 'cgpa'=>3.2, 'email'=> 'XYZ@aiub.edu'],
		['id'=> 4, 'name'=> 'ABC', 'cgpa'=>3.4, 'email'=> 'ABC@aiub.edu'],
		['id'=> 5, 'name'=> 'PQE', 'cgpa'=>3.6, 'email'=> 'PQE@aiub.edu'],
		['id'=> 6, 'name'=> 'PQR', 'cgpa'=>4, 'email'=> 'PQR@aiub.edu'],
		['id'=> 7, 'name'=> 'asd', 'cgpa'=>2.5, 'email'=> 'asd@aiub.edu']
	];

    public function stdlist(){
    	$students = $this->getStudentlist();
    	return view('home.stdlist')->with('students', $students);
    }

	public function details($id){
    	
    	$student = $this->findStudentById($id);
		return view('home.details')->with('student',$student[0]);
    }

    public function create(){
    
    	return view('home.create');
    }

    public function insert(Request $req){
		
		if(strlen($req->name) != 0 && strlen($req->cgpa) != 0 && strlen($req->email) != 0){
			$students = $this->getStudentlist();
			array_push($students, ['id' => count($students)+1, 'name' => $req->name, 'cgpa' => $req->cgpa, 'email' => $req->email]);
			$updatedStudents = $this->updateStudentlist($students);
			return view('home.stdlist')->with('students', $updatedStudents);
		}else{
			return view('home.create');
		} 	
    }

    public function edit($id){   	
		$student = $this->findStudentById($id);
		return view('home.edit')->with('student',$student[0]);
    }

    public function update(Request $req, $id){
    	
    	if(strlen($req->name) != 0 && strlen($req->cgpa) != 0 && strlen($req->email) != 0){
			$students = $this->getStudentlist();
			$index = $this->findStudentIndexById($id);
			$students[$index]['name'] = $req->name;
			$students[$index]['cgpa'] = $req->cgpa;
			$students[$index]['email'] = $req->email;
			$updatedStudents = $this->updateStudentlist($students);
			return view('home.stdlist')->with('students', $updatedStudents);
		}else{
			$student = $this->findStudentById($id);
			return view('home.edit')->with('student',$student[0]);
		} 
    }

    public function delete($id){
    	
    	$student = $this->findStudentById($id);
		return view('home.delete')->with('student',$student[0]);
    }

    public function destroy($id){
		$students = $this->getStudentlist();
		$index = $this->findStudentIndexById($id);
		array_splice($students, $index, 1);
		$updatedStudents = $this->updateStudentlist($students);
		return view('home.stdlist')->with('students', $updatedStudents);
    }

    private function getStudentlist(){

    	return $this->studentList;
	}
	
	private function updateStudentlist($students){

		$this->studentList = $students;
		return $this->studentList;
	}
	
	private function findStudentById($id){
		$students = $this->getStudentlist();
		array_filter($students, function($value, $key) use($id){
			return $key == 'id' && $value == $id;
		}, ARRAY_FILTER_USE_BOTH);
		return $students;
	}
	
	private function findStudentIndexById($id){
		$students = $this->getStudentlist();
		for($i = 0; $i < count($students); $i++){
			if($students[$i]['id'] == $id){
				return $i;
			}
		}
		return -1;
    }
}
