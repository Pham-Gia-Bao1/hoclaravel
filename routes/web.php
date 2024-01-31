<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\User;

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

Route::get('/home', function () {
    return view('home');
});

// Route::get('/about', function () {
//     return view('/contact/test1');
// });
// Route::get('/about/test2', function () {
//     return view('/contact/test2');
// });

// Route::match(['get','post'],'home',function (){
//     return $_SERVER['REQUEST_METHOD'];
// });

// Route::any('home',function(Request $request){
//     echo $request->method();
// });
Route::prefix('contact')->group(function () {
    Route::get('/test1', function () {
        return view('/contact/test1');
    });
});
