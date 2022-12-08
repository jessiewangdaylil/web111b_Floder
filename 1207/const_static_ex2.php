<?php
class MyMath
{
	public static function cubic($x)
	{
		return pow($x,3);
	}
}

echo '5的三次方為'.MyMath::cubic(5);
?>