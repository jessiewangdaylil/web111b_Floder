<?php
//取得前台資料
$user = $_GET["user"]; //$_GET[接收前台的哪個變數名稱]
$email = $_GET["email"];
$Edu = $_GET["Edu"];
$hobbys = $_GET["hobbys"];

//方法二
$h = implode(",",$hobbys);
echo "使用者是 {$user} 他的郵件是 {$email} <br> 學歷是 {$Edu} 嗜好有:{$h}";
?>