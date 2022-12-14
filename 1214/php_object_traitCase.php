<?php
trait Hello
{
    public function sayHello()
    {
        echo "Hello (from trait Hello) <br>";
    }
}
trait world
{
    use Hello;
    public function sayWorld()
    {
        echo "World (from trait world) <br>";
    }
//抽象方法
    abstract public function getWorld();
    public function inc()
    {
        static $c = 0;
        $c++;
        echo "$c (from trait inc abstract method) <br>";
    }
    public static function doSomething()
    {
        echo "Doing something (from trait world)<br>";
    }
}
class HelloWorld
{
    use World;
//實現抽象方法
    public function getWorld()
    {
        return 'get World';
    }
}
$helloWorld = new HelloWorld;
$helloWorld->sayHello();
$helloWorld->sayworld();
$helloWorld->doSomething();
$helloWorld->inc();