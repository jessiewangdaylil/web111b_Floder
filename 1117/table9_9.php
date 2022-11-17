<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>九九乘法表</title>
  <table align="center" border="1" style="border-collapse: collapse;">
    <?php
        for($r = 0 ; $r < 10 ; $r++){
          echo "<tr>";
          for($c = 0 ; $c < 10 ; $c++){
            echo "<td> $r * $c =". $r*$c."</td>";
          }
           echo "</tr>";
        }
      ?>
  </table>
</head>

<body>

</body>

</html>