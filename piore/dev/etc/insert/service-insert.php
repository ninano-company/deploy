<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(1, '20191101', '20191121', 1, '땡이', '20191028', 16, 2)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(2, '20191105', '20191125', 1, '사랑이', '20190910', 16, 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(3, '20191102', '20191122', 1, '율', '20181210', 16, 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(4, '20191107', '20191127', 1, '지우', '20190503', 15, 2)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(5, '20191110', '20191130', 1, 'Cathy', '20190726', 16, 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(6, '20191028', '20191118', 1, '서희', '20191015', 16, 2)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(7, '20191104', '20191124', 1, '별이', '20190319', 15, 2)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(8, '20191026', '20191116', 1, '영이', '20181229', 15, 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(9, '20191109', '20191129', 1, '설이', '20190219', 16, 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(10, '20191111', '20191201', 1, '보리', '20190609', 15, 2)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(11, '20190707', '20190720', 1, '복덩이', '20190705', 15, 3)";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_service(mom_id, dayin, dayout, product, name, bbirth, sexual, birthform) VALUES(12, '20190415', '20190428', 1, '봉봉이', '20190413', 16, 2)";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
