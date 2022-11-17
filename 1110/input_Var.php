<?php
$name[] ='123abc';
$name[] = 3;
$name[] = True;
for($i=0; $i< count($name); $i++){
  echo '$name[' . "$i" . ']=' . $name[$i]. "<br>"; //
}

//------------------------------------\\
$name2[] ='123abc';
$name2[] = 3;
$name2[] = True;
foreach ($name2 as $value ){
 echo $value."<br>";

}
//字串連接
echo "我是字串1"."$name[1]".'我是字串2'.$name[1]."<br>";
?>