<?php
  $priceDictionary = array("oringnal" => 100,"VIP" => 200, "employee" => 300);
  foreach($priceDictionary as $key => $value ){
    ${'price'.$key} = $value;
  }

  echo $priceoringnal . "<br>"
?>