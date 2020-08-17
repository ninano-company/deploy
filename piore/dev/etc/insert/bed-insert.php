<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B01', 1)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B02', 5)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B03', 4)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B04', 6)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B05', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B06', 12)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B07', 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B08', 9)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B09', 11)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B10', 10)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B11', 2)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B12', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B13', 7)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B14', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B15', 8)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B16', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B17', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B18', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B19', 0)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_bed(name, service_id) VALUES('B20', 0)";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
