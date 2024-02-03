<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('/home');
    }

    public function get_name(){
       echo 'hello';
    }

    public function get_id(){
        echo "123456789";
    }
}

// $home = new HomeController();
// $home->get_name();
