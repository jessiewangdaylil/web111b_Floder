<?php
namespace my\name; //必須在最前面

use my\name1\Payroll;

//在此命名空間內定義 類別

class MyClass
{
    public function myFunction()
    {

    }
}

//在此命名空間內定義 常數
const MyConst = 1;
//有命名空間
$x = new \my\name\MyClass;
$y = \my\name\MyConst;
//無命名空間
$x = new MyClass;
$y = MyConst;

echo $y . "<br>";
include "object_9.php";
$a = new Payroll; //include"object_9.php"