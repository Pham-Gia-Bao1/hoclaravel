<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeExpertController extends Controller
{
    //
    public function index()
    {

        return view('Expert/ExpertView');
    }
    public function get_file(Request $request){
        if (isset($request)) {
            $file = $request->file('photo')->path();
            // $img = $request->file('photo')->store('images');
            // $rename_img = $request->file('photo')->storeAs('images','main-img.png');
            $name_file = $request->file('photo')->getClientOriginalName();

            // dd($file);
            return view('Expert/ExpertView',compact('name_file'));
        }
    }
}
