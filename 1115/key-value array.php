<?php
//key-value array
//建立方法一
$arr["Key"] = "value";
$arr["number"] = 2;
$arr["name"] = "Jessie";
//建立方法二:使用建構式
$arr = array("key"=>"value","number"=>2,"name"=>"Jessie");
//isset($變數) 回傳布林方法:偵測$變數是否存在
if(!isset($arr["color"])){
	$arr["color"] = "Yellow";
}
//unset
unset($arr["color"]);
foreach($arr as $key => $value){
	echo $key. '=>' .$value."<br>";//"$key=>$value <br>"
  //echo "$key=>$value <br>";

}
?>