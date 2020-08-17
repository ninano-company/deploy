<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('모유마사지', '에스테틱', 70800)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('전신마사지', '에스테틱', 200000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('프리미엄 전신마사지', '에스테틱', 280000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('식사 추가', '식사', 24000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('nCOZA 아기침대', '비품', 230000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('Foxyn 놀이매트(9p)', '비품', 108000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('Foxyn 놀이매트(16p)', '비품', 176000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('Foxyn 놀이매트(25p)', '비품', 250000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(name, kind, price) VALUES('분유', '비품', 20800)";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
