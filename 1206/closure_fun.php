<?php
	$res = 0;
	$counter = function ($res= 0){
		static $res;
		$res++;
		echo $res."<br>";
	};

$counter();
$counter();
?>