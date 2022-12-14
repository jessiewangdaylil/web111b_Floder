<?php
//抽象類別的抽象方法
abstract class Pay
{
    public $EmpNme;
    abstract public function payment($hours, $payRate);
    //不能實作 何謂實作:public function payment() {實作內容}
}
//實作抽象方法
class BounsPay extends Pay
{
    public function payment($hours, $payRate)
    {
        return $hours * $payRate + 5000;
    }
}
// 實作物件
$obj = new BounsPay;
echo '加上獎金的薪資為' . $obj->payment(100, 80);