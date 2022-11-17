<?php
$courses = "HTML CSS JS PHP";
$arr = explode(" ",$courses);
echo count($arr)."<br>";
$count = 0;
foreach($arr as $value){
	echo '$arr['.$count.'] = '. $value ."<br>";
  $count++;
}
?>