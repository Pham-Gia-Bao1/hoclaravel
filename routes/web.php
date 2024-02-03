<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [CategoryController::class, 'index'])->name('home');
Route::get('/home', function () {
    $id = request('id');
    $controller = new CategoryController();
    $result = $controller->getOneCategory($id);
});

Route::prefix('categories')->group(function () {



    Route::get('view', function () {
        return  view('/categories/viewOnew');
        // $id = request('id');
        // if (isset($id)) {
        //     $controller = new CategoryController();
        //     $result = $controller->getOneCategory($id);
        //     return $result;
        // }else{
        //     return redirect()->route("home");
        // }
    });

    Route::get('add', [CategoryController::class, 'add']);
});
