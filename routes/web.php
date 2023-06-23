<?php

use App\Http\Controllers\FacebookLoginContoller;
use Illuminate\Support\Facades\Route;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Facebook_login',[FacebookLoginContoller::class,'get_track']) ;
Route::post('/Facebook_login',[FacebookLoginContoller::class,'create_track']) ;

Route::get('/img', function () {
    return view('img');
});


