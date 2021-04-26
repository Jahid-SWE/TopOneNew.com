<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{

    public function index(){
        return view('welcome');
    }
    public function test(){
        return view('test.one');
    } public function demo(){
        return view('test.sojib-fahim');
    }
}
