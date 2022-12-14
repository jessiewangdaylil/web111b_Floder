<?php
//設一個 Drive (驅動) 的 Trait(特徵),包含:$carName(車名) 和一行為 deiving(駕駛)

trait Drive
{
    public $carName = 'Benz';
    public function driving()
    {
        echo "drivng {$this->carName} <br>";
    }
}

class Person
{
    public function eat()
    {
        echo "eating" . " <br>";
    }
}

class Student extends Person
{
    use Drive; //在class 裡使用Trait
    public function study()
    {
        echo "studying" . " <br>";
    }
}
$student = new Student;
$student->study(); //student 自己的方法
$student->eat(); // student 父類別的方法
$student->driving(); // student 使用trait的方法