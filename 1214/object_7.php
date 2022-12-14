<?php
class Peo
{
    public $peoName;

    public function __construct($str)
    {
        $this->peoName = $str;
    }
}
$obj = new Peo("Kally"); //令 obj 指向 peoName 屬性為 kally 的案例
$obj2 = new Peo('kally '); //令 obj2 指向 peoName 屬性為 kally 的案例
$obj3 = $obj; //令 obj3 指向 obj 所指向的案例

if ($obj2 == $obj) {
    echo '$obj2 的成員與值和$obj1 相同' . '<br>';
} else {
    echo '$obj2 的成員與值和$obj1 不同' . '<br>';
}

if ($obj2 === $obj) {
    echo '$obj2 $obj1 指向相同案例' . '<br>';
} else {
    echo '$obj2 $obj1 指向相不同案例' . '<br>';
}

if ($obj3 === $obj) {
    echo '$obj3 $obj 指向相同案例' . '<br>';
} else {
    echo '$obj3 $obj 指向相不同案例' . '<br>';
}