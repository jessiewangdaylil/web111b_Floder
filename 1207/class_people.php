<?php
	class Peo
	{
		//屬性
		public $peoName ="JOE";
		//方法
		public function showSelf()
		{
	     echo 'Hello! My name"'.$this->peoName.' "Nice to meet you!'."<br>";
		}
	}
$peo = new Peo;
$peo->peoName ='JOJO';
$peo->showSelf();
print_r($peo);

?>