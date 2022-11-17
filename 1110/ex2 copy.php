<?php
   $score = [[101,102,104,105,106],[200,201,203,205,300],[200,201,203,205,300],[200,201,203,205,300],[0,0],[0]];
   for ($i=0;$i < count($score)-3;$i++){
     for ($j=0;$j < count($score[$i]);$j++){
        $score[count($score)-2][$i] += $score[$i][$j];
     }
    echo '小計:'. $score[count($score)-2][$i]."<br>";
	 	$score[count($score)-1][0] += $score[count($score)-2][$i];
   }
   echo '總計:'.$score[count($score)-1][0];
?>