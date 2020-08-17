<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_product(name, kind, period, price) VALUES('디럭스룸(14일)', '조리원', 14, 2500000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_product(name, kind, period, price) VALUES('디럭스룸(10일)', '조리원', 10, 2000000)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_product(name, kind, period, price) VALUES('디럭스룸(5일)', '조리원', 5, 1500000)";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
