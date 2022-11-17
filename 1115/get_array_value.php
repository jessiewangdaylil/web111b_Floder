<?php
//拆解陣列函式
//implode('分割字元',陣列);
$courses = ["HTML","PHP","CSS","JS"];
$s = implode(",", $courses);
echo $s . "<br>";
foreach ($courses as $course){
	echo $course. "<br>";
}

?>