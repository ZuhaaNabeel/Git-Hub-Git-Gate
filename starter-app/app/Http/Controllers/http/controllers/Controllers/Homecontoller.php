<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    function home(){
        $items=User::all();
        return view('home',compact('items'));
    }
}