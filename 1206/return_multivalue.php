<?php
	function Expvalue($x)
	{
		$result[0] = $x;
		$result[1] = $x * $x;
		$result[2] = $x * $x * $x;
		return $result;
	}
	$resultArray = Expvalue(8);
	foreach($resultArray as $value)
	{
	echo $value."<br>";
	}
?>