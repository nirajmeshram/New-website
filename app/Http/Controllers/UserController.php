<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $test ="This text is from main branch";
        $h = "Hello world";
        return "Hello world from test";
    }
}
