<?php
	class Peo
	{
		//屬性
		public $peoName ="JOE";
		//封裝方法
		private function showSelf()
		{
	     echo 'Hello! My name"'.$this->peoName.' "Nice to meet you!'."<br>";
		}
		//聲明公開方法
		Public function canUsefunc(){
			//$this 是一個虛擬物件，表示未來正在調用這個方法的物件
			$this->peoName;
			$this->showSelf();
		}
	}
$peo = new Peo;
$peo->peoName ='JOJO';
$peo->canUsefunc();
print_r($peo);

?>