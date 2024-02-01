<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\User;
// use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);

Route::get('/about', function () {
    return view('/contact/test1');
});
Route::get('/about/test2', function () {
    return view('/contact/test2');
});

Route::get('name/{name}', [HomeController::class,'get_name']);

// Route::get('home?name={id}',function($id){
//     return $id;
// });
// Route::match(['get','post'],'home',function (){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('home',function(Request $request){
//     echo $request->method();
// });
Route::prefix('contact')->group(function () {
    Route::get('/test1/{id?}', function ($id = null) {
        return "ID LA ". $id;
    })->where(
        [
            'id' => '[0-9]+' // chỉ cho phép số nguyên tăng dần;
        ]
    )->name("contact.test1");
    Route::get('test2', function(){
        return view('contact/test2');
    });
});

Route::prefix('admin')->group(function(){
    Route::get("/login",function(){
         return view('contact/test2');
    })->name(
        'login-aaddmin'
    );
});
