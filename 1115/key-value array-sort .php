<?php
echo "<pre>";
$arr = array("key1"=>"value1","number"=>2,"name"=>"Jessie");
print_r($arr);

//--------------------------sort-----------------------------\\
echo "--- sort --- <br>";
sort($arr);
print_r($arr);
foreach($arr as $key => $value){
	echo $key. '=>' .$value."<br>";//"$key=>$value <br>"
  //echo "$key=>$value <br>";
}
$arr = array("key1"=>"value1","number"=>2,"name"=>"Jessie");
//--------------------------sort-----------------------------\\
echo "--- rsort --- <br>";
rsort($arr);
foreach($arr as $keye => $value){
	echo $value. '=>' .$key."<br>";//"$key=>$value <br>"
  //echo "$key=>$value <br>";
}
$arr = array("key"=>"value","number"=>2,"name"=>"Jessie");
?>