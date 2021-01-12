<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show(){
        return view('layout.main');
    }

    public function login(){
        return view('layout.login');
    }
}
