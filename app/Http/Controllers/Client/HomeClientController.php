<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
// use DB;

class HomeClientController extends Controller
{
    //
    public function index()
    {

        return view('Client/ClientView');
    }

    public function get_name(Request $request)
    {
        $url = $request->url();
        $path = $request->path();
        // $name = $request->all()['name'];
        $check = $request->is('client');
        $full_url = $request->fullUrl();

        // input data
        $name = $request->input();
        // query string parameters
        // Retrieve all input values
        $info = $request->all(); // return an array that contain all query string parameters
        $name = $info['name'];
        $id = $info['id'];
        // retrieve only specified input values parameters
        $only_name =    $request->only(['name', 'id']);
        // retrieve all input values parameters except  specified ones.
        $except_values = $request->except('name'); // is an array contain all values except specified ones, this array not contain key

        // HTTP method
        //  Get the HTTP request method
        $method = $request->method();
        //  Check if the request method is a specific one
        $isMethodPost =   $request->isMethod('get');

        // url and path
        // get url
        $request->path(); //:// Get the path of the current request.;
        $request->url(); //: Get the full URL of the current request.
        $request->fullUrl(); //: Get the full URL with query parameters

        // get ip
        // get client's ip address
        $ip = $request->ip();
        $client_ip = $request->getClientIp();

        // header
        $hearder = $request->header();

        // helper
        $age =request()->age;

        // assess in input value
        $name1 = request()->name;
        // check inpout value is exit
        $check_query = request()->has('name');
        echo $check_query;

        return view('Client/ClientView', compact('url','age', 'ip','client_ip', 'method', 'id', 'name1', 'check', 'path', 'full_url', 'name', 'only_name', 'except_values', 'isMethodPost'));
    }
    public function get_all_videos(Request $request)
    {

        $name = $request->get('name');
        return view('Client/ClientView', compact('name'));
    }
}
