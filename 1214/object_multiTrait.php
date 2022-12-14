<?php
trait Trait1
{
    public function hello()
    {
        echo "{Trait1 上的hello()} <br>";
    }
    public function hi()
    {
        echo "{Trait1 上的hi()} <br>";
    }

}
trait Trait2
{
    public function hello()
    {
        echo "{Trait2 上的hello()} <br>";
    }
    public function hi()
    {
        echo "{Trait2 上的hi()} <br>";
    }

}

//使用 insteadof 解決碰撞
class Class1
{
    use Trait1, Trait2 {
        //使用Trait2 取代Trait1 上的 hello()
        Trait2::hello insteadof Trait1;
        //使用Trait1 取代Trait2上的 hello()
        Trait1::hi insteadof Trait2;
    }
}
echo 'class1' . "<br>";
$class1 = new Class1;
$class1->hello();
$class1->hi();

// 使用insteadof 或 as  解決碰撞
class Class2
{
    use Trait1, Trait2 {
        //給Trait2 hi() 一個別名 hei
        Trait2::hi as hei;
        //給Trait1 hello() 一個別名 halow
        Trait1::hello as halow;
        //使用Trait2 取代Trait1 上的 hello()
        Trait2::hello insteadof Trait1;
        //使用Trait1 取代Trait2上的 hello()
        Trait1::hi insteadof Trait2;
    }
}
echo 'class2' . "<br>";
$class2 = new Class2;
$class2->hello();
$class2->hi();
$class2->halow();
$class2->hei();