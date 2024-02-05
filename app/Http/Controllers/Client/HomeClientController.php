<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeClientController extends Controller
{
    //
    public function index(){

        return view('Client/ClientView');
    }

    public function get_name(Request $request){
        $url = $request->url();
        $name = $request->all()['name'];
        $method = $request->method();
       
        return view('Client/ClientView',compact('name','url','method'));
    }
}
