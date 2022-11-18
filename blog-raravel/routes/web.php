<?php

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
//user group
Route::prefix('/user')->group(function(){
//1
//2
//3
//4
});

// 11/11 group
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/1111')->group(function(){

Route::get('/hello','App\Http\Controllers\SiteController@hello');//1
Route::get('dashboard_test','App\Http\Controllers\SiteController@dashboard_test');//2
Route::get('/','App\Http\Controllers\UserController@user');//3
Route::get('/{post}/comments/{comments}',function($post,$comment){
    return "post $post , comments $comment";
    }); //4
});

// 11/18 group
Route::prefix('/1118')->group(function(){
Route::get('forecast1','App\Http\Controllers\SiteController@hello_forcast');//1
//2
//3
//4
Route::resource('posts','App\Http\Controllers\PostController');
});