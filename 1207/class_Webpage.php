<?php
	class WebPage   //雙駝峰、大駝峰
	{
		public $title;
		public function show()
		{
			echo <<<HTML_TEXT
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$this->title</title>
</head>
<body><p>WebPage 類別</p></body>
</html>
HTML_TEXT;
		}
	}

$page1 = new WebPage;
$page1->title ="這是第一頁";
$page1->show();
?>