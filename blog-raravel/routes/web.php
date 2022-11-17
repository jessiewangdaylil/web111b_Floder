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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello','App\Http\Controllers\SiteController@hello');

Route::get('dashboard_test','App\Http\Controllers\SiteController@dashboard_test');

Route::prefix('/user')->group(function(){
Route::get('/','App\Http\Controllers\UserController@user');
//Route::get('/user','App\Http\Controllers\UserController@user');

Route::get('/{post}/comments/{comments}',function($post,$comment){
  return "post $post , comments $comment";
});

//Route::get('/user/{post}/comments/{comments}',function($post,$comment){
 // return "post $post , comments $comment";

});