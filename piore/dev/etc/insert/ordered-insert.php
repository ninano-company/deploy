<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 3, 1, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 5, 1, 3, 1, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 4, 2, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 1, 1, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 4, 2, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 1, 1, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 7, 1, 3, 1, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 4, 1, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_ordered(service_id, subproduct, quantity, method, paid, created) VALUES(1, 9, 2, 3, 2, '2019-11-07')";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
