<?php
  $score = [[101,102,104,105,106],[200,201,203,205,300]];
  $value = [0,0];

  for ($i=0;$i < count($score);$i++){
    for ($j=0;$j < count($score[0]);$j++){
       $value[$i] = $value[$i] + $score[$i][$j];
    }
    echo '小計:'. $value[$i]."<br>";
  }
  echo '總計:'.$value[0]+$value[1];

?>