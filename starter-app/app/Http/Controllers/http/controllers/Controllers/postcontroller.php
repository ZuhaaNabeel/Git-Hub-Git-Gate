<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function index(){
        return view('welcome');
    
    }
    public function detailpost(){
        return view('join');
    
    }

}
