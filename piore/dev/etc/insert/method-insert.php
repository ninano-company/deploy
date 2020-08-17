\<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_method(name) VALUES('')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_method(name) VALUES('현금')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_method(name) VALUES('카드')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_method(name) VALUES('이체')";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
