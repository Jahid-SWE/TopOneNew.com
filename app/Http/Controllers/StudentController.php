<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{

    public  $students=[];
    public function studentInfo(){
        $this->students=student::studentInfo();
        return view('student.student', ['students'=> $this->students]);

    }
}
