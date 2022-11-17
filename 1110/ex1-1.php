<?php

  $score = [101,102,104,105,106];
  $value = 0;

  for ($i=0;$i < count($score)-1;$i++){
    $value = $value + $score[$i];
    echo $score[$i].'+';
  }
  $j = count($score)-1;
  $value = $value + $score[$j];
  echo $score[$j]."=".$value;

?>