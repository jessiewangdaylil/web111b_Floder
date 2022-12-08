<?php
	function circleArea($r){
		echo '半徑為'.$r."的圓面積為".($r *$r *3.14)."<br>";
	}
	function squareArea($l){
		echo '長度為'.$l."的正方形面積為".($l *$l)."<br>";
	}
$func = 'circleArea';
$func(10);
$func = 'squareArea';
$func(10);
?>