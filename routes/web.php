<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DashboadCotroller;
use App\Http\Controllers\Admin\AdminCommentController;

use App\Http\Controllers\Client\HomeClientController;
use App\Http\Controllers\Expert\HomeExpertController;




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
})->name('home');

Route::middleware('auth.role.admin')->prefix('/admin')->group(function(){
    // Route::get('/dashboard','App\Http\Controllers\Admin\DashboadCotroller@index') -> name ('dashboard');
    Route::get('/',[DashboadCotroller::class, 'index']);

    Route::get('/home',[DashboadCotroller::class, 'index']);
    Route::get('/comment', [AdminCommentController::class, 'index']);

});
Route::get('/client', [HomeClientController::class, 'index']);
Route::post('/client', [HomeClientController::class, 'index']);

Route::get('/client', [HomeClientController::class, 'get_name']);
Route::post('/client', [HomeClientController::class, 'get_name']);


Route::get('/expert', [HomeExpertController::class, 'index']);


