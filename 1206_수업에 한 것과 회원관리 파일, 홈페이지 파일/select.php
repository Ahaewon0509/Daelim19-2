<?php
  $con = mysqli_connect("localhost", "hwstd2234", "QQ!!09023", "hwstd2234") or die("MySQL 접속 실패!!");

  $sql ="
     SELECT * FROM userTBL
  ";

  $ret = mysqli_query($con, $sql);

  if($ret) {
    echo mysqli_num_rows($ret), "건이 검색됨.<br><br>";
  }
  else {
    echo "userTBL 데이터 검색 실패!!!","<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<H1>회원 검색 결과</H1>";
  echo "<table border=1>";
  echo "<TR>";
  echo "<TH>아이디</TH> <TH>이름</TH> <TH>출생연도</TH> <TH>지역</TH> <TH>국번</TH>";
  echo "<TH>전화번호</TH> <TH>키</TH> <TH>가입일</TH> <TH>수정</TH> <TH>삭제</TH>";
  echo "</TR>";
  while($row = mysqli_fetch_array($ret)) {
  echo "<TR>";
  echo "<TD>", $row['userID'],"</TD>";
  echo "<TD>", $row['userNAME'],"</TD>";
  echo "<TD>", $row['birthYear'],"</TD>";
  echo "<TD>", $row['addr'],"</TD>";
  echo "<TD>", $row['mobile1'],"</TD>";
  echo "<TD>", $row['mobile2'],"</TD>";
  echo "<TD>", $row['mDate'],"</TD>";
  echo "<TD>", "<A href='update.php?userID=", $row['userID'], ">수정</A></TD>";
  echo "<TD>", "<A href='delete.php?userID=", $row['userID'], ">삭제</A></TD>";
  echo "</TR>";
  }

  mysqli_close($con);
  echo "</table>";
  echo "<BR> <A href = 'main.html'> <..초기 화면</A>";
?>