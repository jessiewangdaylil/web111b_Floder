<?php
class Circle{
	const pi = 3.1415;
	public $radius;
	public function showArea()
	{
		echo '圓面積為'.pow($this->radius,2)*self::pi."<br>";
	}
}
echo "<br>圓周率為"  .Circle::pi."<br>";
$circle = new Circle;
$circle->radius = 10;
$circle->showArea();

?>