<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

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
Route::group(["middleware"=>["auth"]], function()
{
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    //route to offer wall
    Route::get('/offerwall',[HomeController::class,'offerwall'])->name('offerwall');
    Route::get('/users',[ UserController::class,'index'])->name('users');
//For storing a user
Route::post('/store-user',[ UserController::class,'store'])->name('users.store');
//For deleting a user
Route::get('/destroy-user/{id}',[ UserController::class,'destroy'])->name('users.delete');
//For view editing page of a user
Route::get('/edit-user/{id}',[ UserController::class,'edit'])->name('users.edit');
//For view editing page of a user
Route::post('/update-user/{id}',[ UserController::class,'update'])->name('users.update');

});

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
