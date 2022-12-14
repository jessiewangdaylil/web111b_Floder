<?php
namespace my\name1;

//父類別
class Payroll
{
    public $Name;
    public static function payment($hours, $payRate)
    {
        return $hours * $payRate;
    }

}
class BonusPayroll extends Payroll
{
    // Override複寫 父類別方法中的內容
    public static function payment($hours, $payRate)
    {
        // 方法一靜態類別 static 操作
        return $hours * $payRate + 5000;
        // 方法二使用 parent 操作
        return parent::payment($hours, $payRate) + 5000;
        // 方法三使用 父類別名稱 操作
        return Payroll::payment($hours, $payRate) + 5000;
    }
}
echo '尚未加上獎金的薪資為' . Payroll::payment(100, 80) . "<br>";
echo '加上獎金的薪資為' . BonusPayroll::payment(100, 80) . "<br>";