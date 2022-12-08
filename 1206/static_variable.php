<?php
	$res = 0;
	function counter($res= 0){
		static $res;
		$res++;
		echo $res."<br>";
	}
 counter();
 counter();
 counter();
?>