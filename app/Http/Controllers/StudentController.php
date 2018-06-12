<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function viewform(){
        return view('095049.student');
    }
    public function register(){
        $student=new Student();
        $student->StudentNo=request('Sno');
        $student->Fullname=request('names');
        $student->DOB=request('DOB');
        $student->Address=request('Address');
        $student->save();
        return redirect('/');
    }
}
