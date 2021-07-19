<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Home;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Favourite;
use App\Http\Controllers\Delete;
use App\Http\Controllers\Edit;
use App\Http\Controllers\Register;
use App\Http\Controllers\displayFav;
use App\Http\Middleware\UserAuth;
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

Route::view('/','login');
Route::post('/user/login_submit',[Login::class,'login_submit']);
Route::post('/register',[Register::class,'addUser']);

Route::get('/logout',function(){
    session()->forget('CRECLUB_USER_ID');
    session()->forget('CRECLUB_USER_Name');
    return redirect('/');
});
Route::view('/signup','register');

Route::group(['middleware'=>['user_auth']], function (){
    Route::get('/user/home',[Home::class,'getAllPost']);
    Route::get('/dashboard',[Dashboard::class,'list']);
    Route::get('/user/specificImg/{id}',[Home::class,'getPostById']);
    Route::post('/user/favourite',[Favourite::class,'addFav']);
    Route::get('/user/delete/{id}',[Delete::class,'deleteFav']);
    Route::get('/user/edit/{id}',[Edit::class,'editFav']);
    Route::post('/user/update/{id}',[Edit::class,'updateFav']);
    Route::get('/user/showPost/{id}',[displayFav::class,'displayFavPost']);
});
