<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="http://localhost:6080/1207/preg_math.php" method="get">
    電話 <input type="text" name="telephone" id=""><br>
    身分證字號<input type="text" name="id_no" id=""><br>
    <input type="reset" value="取消"><input type="submit" value="送出">
  </form>

</body>

</html>


<?php



if( isset($_GET["id_no"]) && isset($_GET["telephone"])&& !empty($_GET["id_no"])&& !empty($_GET["telephone"]))
{
  $id_no = $_GET["id_no"]; //$_GET[接收前台的哪個變數名稱]
  $telephone = $_GET["telephone"];


  if (!preg_match('/^[0-9]{2}-[0-9]{8}$/', $telephone)) {
    echo '您輸入的電話是:'.$telephone.'  電話號碼格式錯誤!'."<br>";

  }
  if(!preg_match('/^[A-Za-z][1-2]\d{8} $/',$id_no))
  {
    echo '您輸入的身分證字號是:'.$id_no.'  身份證字號的格式有錯誤!'."<br>";
  }
}

?>