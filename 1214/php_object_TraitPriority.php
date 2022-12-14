<?php
//設一個 Drive (驅動) 的 Trait(特徵),包含:$carName(車名) 和一行為 deiving(駕駛)

trait Drive
{
    public $carName = 'Benz';
    public function hello()
    {
        echo "hello drive <br>";
    }
    public function driving()
    {
        echo "drivng 從 Drive <br>";
    }
}
class Person
{
    public function hello()
    {
        echo "hello person <br>";
    }

}
class Student extends Person
{
    use Drive; //在class 裡使用Trait
    public function hello()
    {
        echo "hello student <br>";
    }
    public function study()
    {
        echo "studying <br>";
    }
    // public function driving()
    // {
    //     echo "drivng 從 person <br>";
    // }
}
$student = new Student;
$student->hello(); //student 自己的方法優先
$student->driving(); // trait的方法第二優先