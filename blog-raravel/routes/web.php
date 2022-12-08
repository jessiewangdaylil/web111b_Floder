<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SiteController;//方法三 :到Controller 複製
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

//public
Route::get('/', function () {
    return view('welcome');
});

//user group
Route::prefix('/user')->group(function(){
//1
//2
//3
//4
});

// 11/11 group
Route::prefix('/1111')->group(function(){
  //控制器位置:App\Http\Controllers
  Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/hello','SiteController@hello');//1
    Route::get('dashboard_test','SiteController@dashboard_test');//2
    Route::get('/','UserController@user');//3
  });

  Route::get('/{post}/comments/{comments}',function($post,$comment){
    return "post $post , comments $comment";
    }); //4
});

// 11/18 group
Route::prefix('/1118')->group(function(){
  Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('forecast1','SiteController@hello_forcast');//1
    Route::get('sectionTest','SiteController@section_test');//2
    //3
    //4
    Route::resource('posts','siteController');//resource 1
  });


});


// 11/28 group
//
Route::get('/demo','App\Http\Controllers\SiteController@demo');

//方法一
// Route::get('demo',function(){
//   return view('demo');
// });
//方法二
// Route::get('demo',function(){
//   return view('demo');
// })->name('mydemo');
Route::get('/url',function(){
  //方法一
  //return url('demo');
  //方法二
  // return route('mydemo');
  //方法三
  return action([SiteController::class,'demo']);
});
//Request 取得請求資料
Route::get('/demo1','App\Http\Controllers\SiteController@demo1');
Route::Post('/posts','App\Http\Controllers\PostController@store');


// 11/30 group
Route::prefix('/1130')->group(function(){
  //控制器位置:App\Http\Controllers
  Route::namespace('App\Http\Controllers')->group(function(){
    Route::resource('posts','PostController');//resource 1
    //2
    //3
    //
  });
});
// Jessie 的模板
// 12/02 group
Route::prefix('/1202')->group(function(){
  //控制器位置:App\Http\Controllers
  Route::namespace('App\Http\Controllers')->group(function(){
    Route::resource('article','ArticleController');//resource 1
    //2
    //3
    //

  });

});





//Jessie 的模板
// // 11/18 group
// Route::prefix('/1111')->group(function(){
//   //控制器位置:App\Http\Controllers
  // Route::namespace('App\Http\Controllers')->group(function(){
  //   //1
  //   //2
  //   //3
  //   //

  // });

// });
