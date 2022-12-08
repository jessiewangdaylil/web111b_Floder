<?php
	$numg1 = 1;
	$numg2 = 100;

function swap($num1,$num2){
$temp= $num1;
$num1 = $num2;
$num2 = $temp;
echo '{after}'."<br>";
echo '$num1='.$num1."<br>";
echo '$num2='.$num2."<br><br>";
return [$num1,$num2];
}
echo '{Before}'."<br>";
echo '$num1='.$numg1."<br>";
echo '$num2='.$numg2."<br><br>";
swap($numg1,$numg2);  //傳值呼叫 (call by value) 不影響原本的變數

echo '{After call by value}'."<br>";
echo '$num1='.$numg1."<br>";
echo '$num2='.$numg2."<br><br>";

?>