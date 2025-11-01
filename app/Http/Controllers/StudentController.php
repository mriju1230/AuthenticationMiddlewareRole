<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentLogin(){
        return view('frontend.pages.login');
    }
    
    public function studentReg(){
        return view('frontend.pages.register');
    }
}
