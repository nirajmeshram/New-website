<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "Hello world from test";
    }

    public function multiplication()
    {
        $x = 12;
        $y = 10;
        $z = 30;
        echo $x * $y * $z;
    }
    public function add(){
        $a = 10;
        $b = 20;
        $sum = $a+$b;
        echo $sum;
    }
}
