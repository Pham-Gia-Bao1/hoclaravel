<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('contact.test1');
    }

    public function getOneCategory($id) {

        return view('categories.viewOnew', ['id' => $id]);

    }


    public function add(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');

        return view('categories.add', ['id' => $id, 'name' => $name]);
    }



}
