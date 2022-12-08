<?php
	class Peo
	{
		//聲明類別常數(變數名稱不能改，但值不能改)
		const peoNeed = "eat";
		//聲明靜態變數(變數名稱不能改，但值可以改)
		static $peoAge = 18;
	}

echo "1:".Peo::peoNeed."<br>";
echo "2:".Peo::$peoAge."<br>";

$peo = new Peo;
//無法執行
$peo->peoAge = 20;
echo "3:".$peo->peoAge."<br>";
//無法執行
echo  "4:".Peo::$peoAge ++."<br>";
echo  "5:".Peo::$peoAge = 19 ."<br>";
echo  "6:".Peo::$peoAge."<br>";

?>