<?php
	for($i = 0 ;$i < 5; $i++){
	$j++;
	}
echo $j."<br>";

// $msg = "Hello, This is outside of func1()"."<br>";
// echo $msg."<br>";
Func1();
echo $msg."<br>";

function func1()
{
	$msg = "Hello, This is inside of func1()"."<br>";
	echo $msg."<br>" ;
}
//顯示:
//"Hello, This is outside of func1()"
//"Hello, This is inside of func1()"
//"Hello, This is outside of func1()"

?>