<?php
  $score = [101,102,104,105,106];
  $math = ['+','+','+','+','='];
  $value = 0;
  for ($i=0;$i < count($score);$i++){
    echo $score[$i];
    echo $math[$i];
    $value = $value + $score[$i];
  }
  echo $value;
?>