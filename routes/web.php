<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\TransactionController;
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
//Route::get('/destroy-user/{id}/by/{user}',[ TransactionController::class,'create'])->name('transaction.delete');
Route::get('/destroy-user/{id}/by/{user}/{uid}',[ UserController::class,'destroy'])->name('users.delete');

//For view editing page of a user
Route::get('/edit-user/{id}',[ UserController::class,'edit'])->name('users.edit');
//For view editing page of a user
Route::post('/update-user/{id}',[ UserController::class,'update'])->name('users.update');
Route::get('/ban/{id}/by/{user}/{uid}',[ UserController::class,'ban'])->name('users.ban');
Route::get('/active/{id}/by/{user}/{uid}',[ UserController::class,'active'])->name('users.active');


// some transaction routes
Route::get('/transaction',[ TransactionController::class,'index'])->name('transaction');

});

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);
