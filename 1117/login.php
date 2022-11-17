<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body {
    text-align: center;
  }

  div.welcome {
    color: green;
  }

  div.error {
    color: red;
  }

  div.sign {
    color: yellow;
  }
  </style>
</head>

<body>
  <!--靜態寫法-->
  <!--	  <div class= "welcome"></div>
	  <div class= "error"></div> -->
</body>

</html>

<?php
 $user_pass = array(
		'Merry'=>'12345',
		'Ton'=>'12345'
);

if(!$_POST['uname'] || !$_POST['upass'] ){
	echo " <div class='error'> 請輸入帳號密碼! </div>";//echo " <div class=\"error\">請輸入帳號密碼!</div>";
} else{
$user_name = $_POST['uname'];
$user_password = $_POST['upass'];
$count = 1;
  foreach ($user_pass as $key => $value) {
    if ($key == $user_name && $value == $user_password ){
      break;
    }else if ($count == count($user_pass) ){
         echo "<div class='error'> 帳號密碼不符  </div>";
         //header('Location:login.html ');
          return;//exit

    }
    $count++;
  }

  if($user_pass[$user_name] == $user_password){
  	echo "<div class= 'welcome'>$user_name 會員你好!<br>";
    echo "你有新留言 </div> "; //<div class= \"welcome\"></div>
  // echo "<div class= 'welcome'>$username 會員你好! <br> 你有新留言 </div>";
  }
}


?>