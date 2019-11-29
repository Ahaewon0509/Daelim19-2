<?php 
  $db_host = "localhost";
  $db_user = "hwstd2234";
  $db_password = "QQ!!09023";
  $db_name = "hwstd2234";
  $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  if(mysqli_connect_error($con)) {
    echo "MySQL 접속 실패!!", "<BR>";
    echo "오류 원인 : ", mysqli_connect_error();
    exit();
  }
  echo "MySQL 접속 완전히 성공!";
  mysqli_close($con);
?>