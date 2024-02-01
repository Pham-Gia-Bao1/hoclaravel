<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('/home');
    }

    public function get_name($name){
        if(isset($_GET['name'])){
            echo $_GET['name'];
        }else{
            echo $name;
        }
    }
}

// $home = new HomeController();
// $home->get_name();
