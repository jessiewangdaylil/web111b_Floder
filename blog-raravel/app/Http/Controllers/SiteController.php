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

}
