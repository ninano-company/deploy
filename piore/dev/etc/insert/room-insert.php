<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('101', 1, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('102', 0, 23)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('103', 2, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('104', 0, 25)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('201', 0, 25)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('202', 6, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('203', 8, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('204', 0, 23)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('301', 4, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('302', 9, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('303', 10, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('304', 0, 25)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('401', 0, 23)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('402', 7, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('403', 3, 24)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_room(num, service_id, status_id) VALUES('404', 5, 24)";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
