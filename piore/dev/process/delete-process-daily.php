<?php

session_start();
if(!isset($_SESSION['User'])){
  header("Location:login.php");
}else{
  if ( isset( $_GET['delete'] ) ) {

    require_once('connection.php');
    require_once('../function/makeProcess.php');

    $sql = '
    DELETE FROM n_dailyst WHERE id = '. $_GET['delete'] . '
    ';
    $result = mysqli_query( $conn, $sql );
    if ( $result === false ) {
      echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
      error_log(mysqli_error($conn));
      echo mysqli_error($conn);
    } else {
      $sql = '
      DELETE FROM n_dailynd WHERE service_id = ' . $_GET['id'] . ' AND created >= \'' . $_GET['date'] . '\' AND created < \'' . $_GET['date'] . '\' + INTERVAL 1 DAY
      ';

      $result = mysqli_query( $conn, $sql );
      if ( $result === false ) {
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      } else {
        header( "Location: ../daily.chart.php?id=" . $_GET['id'] );
      }

    }
  } else {
    $script = "<script>";
    $script .= "alert('비정상적인 경로로 접근하였습니다.');";
    $script .= "history.back();";
    $script .= "</script>";

    echo $script;
  }
}




?>
