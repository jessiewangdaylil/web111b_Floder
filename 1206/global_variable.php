<?php
$num = 100;
//宣告並建立fun.
function func(){
	global $num; //調用global variable
	echo $num."<br>";
	$num++;
}
func();//使用fun
func();
func();
?>
//輸出 100 101 102