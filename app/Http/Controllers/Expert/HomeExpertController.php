<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeExpertController extends Controller
{
    //
    public function index(){
        return view('Expert/ExpertView');
    }
}
