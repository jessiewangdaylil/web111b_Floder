<?php
//1. 直接賦值
$array2d[][]=123;
$array2d[0][1]="abc";
//2.使用 array() 函式嵌套

// 建立row 方向的2D array
$row0 = array(64,65);
$row1 = array(77,81);
$row2 = array(89,93);
$grades = array($row0,$row1,$row2);//使用1D array 生成2D array
print_r($grades);// 直接顯示所有array 的內容
echo "<br>";
$grades[1][0] = 30; //更改array $grades 指定位置的資料內容
//
	$total =0;
	$row = 0;
foreach($grades as $martrix ){
	$sum = 0;
	foreach($martrix as $grades_data){
		$sum += $grades_data;
	}
	$total += $sum;
	$row++;
	echo "第".$row + 1 ."行小計為:"."$sum". "<br>"; //小計
}
	echo "總計為:". $total. "<br>";
?>