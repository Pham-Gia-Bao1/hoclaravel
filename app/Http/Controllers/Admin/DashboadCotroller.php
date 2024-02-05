<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboadCotroller extends Controller
{
    //action method
    public function index(){
        $name = 'Bao';
        $age = 19;
        $email = "bao.nguyen@gmail.com";
        $infor = [
            'Name' =>$name,
            'Age'=>$age,
            'Email' => $email
        ];
        return view('Admin/AdminView',$infor);
    }

}