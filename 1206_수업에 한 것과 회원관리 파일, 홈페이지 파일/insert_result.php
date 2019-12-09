<?php
  $con = mysqli_connect("localhost", "hwstd2234", "QQ!!09023", "hwstd2234") or die("MySQL 접속 실패!!");

  $userID = $_POST['userID'];
  $userName = $_POST['userName'];
  $birthYear = $_POST['birthYear'];
  $addr = $_POST['addr'];
  $mobile1 = $_POST['mobile1'];
  $mobile2 = $_POST['mobile2'];
  $height = $_POST['height'];
  $mDate = $_POST['Y-m-j'];

  $sql = "INSERT INTO "

?>