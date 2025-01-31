<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function login(){
        return view(view:"auth.login");
    }
    function index(){
        return view(view:"welcome");
    }
}
