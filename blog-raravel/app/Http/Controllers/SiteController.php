<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SiteController extends Controller
{
    public function hello(){
      return 'hello! Jessie';
    }
    public function dashboard_test(){
      return view('dashboard');
    }
    public function hello_forcast(){
      $date= '11/18';
      $weather='多雲';
      return view('ViewToController_variable',compact('date','weather'));
    }
    public function section_test(){
      return view('section_test');
    }
    public function demo(){
      echo url()->current();
    }
    public function demo1(request $request){
      //Ex1:
      // dd($request->except('x'));
      // dd($request->all());
      //使用postmen
      return $request->all();

    }


}
