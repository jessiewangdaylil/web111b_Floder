<?php
class Peo{
	public $peoName;

	public function __construct($str)   //建構子
	{
		$this->peoName = $str;
		echo "已經建立名字為:".$this->peoName."的物件!<br>";
	}

	public function __destruct()   //解構子:不能有參數和回傳值 用途:在程式還沒結束前想提前釋放
	{
			$this->peoName = null; //清除員工的名字
			echo "物件已釋放<br>";
	}
}
$peo = new Peo('Joe');
$peo2 = new Peo('Joe');
$peo2->peoName = 'Jessie';

echo $peo->peoName."<br>";
echo $peo2->peoName ."<br>";
//不用解構式強迫釋放
//$pro = null
?>