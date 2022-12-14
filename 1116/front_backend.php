<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form name="form1" action="http://web111b.com:6080/1116/front_backend.php" method="get" align="le">
    使用者:<input type="text" name="user"><br>
    郵件使用者:<input type="email" name="email"><br>
    學歷:<select name="Edu">

      <option value="Elementary">國小</option>
      <!--keyboard 中打option*4-->
      <option value="Junior">國中</option>
      <option value="senior">高中</option>
      <option value="University">大學</option>
      <option value="else">其他</option>
      <!--shift +alt+向下鍵 copy功能-->
      <!--input:checkbox-->
    </select><br>
    興趣:
    <input type="checkbox" name="hobbys[]" value="eat">吃<br>
    &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobbys[]" value="drink">喝<br>
    &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobbys[]" value="play">玩<br>
    &emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="hobbys[]" value="fun">樂<br>
    <!--&emsp半形字空白  &emsp;全行字空白-->
    <input type="reset" value="取消"><input type="submit" value="送出">
  </form>
</body>

</html>


<?php
if( isset($_GET['user']) && isset($_GET['email']) && isset($_GET['Edu']) && isset($_GET['hobbys'])
&& !empty($_GET['user'])&& !empty($_GET['email'])&& !empty($_GET['Edu'])&& !empty($_GET['hobbys'])){
//取得前台資料
$user = $_GET["user"]; //$_GET[接收前台的哪個變數名稱]
$email = $_GET["email"];
$Edu = $_GET["Edu"];
$hobbys = $_GET["hobbys"];

//方法二
$h = implode(",",$hobbys);
echo "使用者是 {$user} 他的郵件是 {$email} <br> 學歷是 {$Edu} 嗜好有:{$h}";}
?>
