<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    require_once('connection.php');
    require_once('../function/makeProcess.php');

    $date = date("Y-m-d");

    $sql = "
    SELECT id
      FROM n_dailyst
      WHERE n_dailyst.service_id = {$_GET['id']} AND n_dailyst.created >= '{$date}' AND n_dailyst.created < '{$date}' + INTERVAL 1 DAY
      ";
    $result = mysqli_query( $conn, $sql );
    if( $row = mysqli_fetch_array($result) ){

      $script = "<script>";
      $script .= "alert('금일 일일기록지가 이미 생성되어있습니다.');";
      $script .= "history.back();";
      $script .= "</script>";

      echo $script;

    }else{

      $sql = "
      SELECT a.id, a.weight FROM n_dailyst AS a
      	INNER JOIN (SELECT max(id) AS mid, service_id FROM n_dailyst GROUP BY service_id) AS b ON a.id = b.mid
        WHERE a.service_id = {$_GET['id']}
      ";
      $result = mysqli_query( $conn, $sql );

      if ( $row = mysqli_fetch_array( $result ) ) {
        $weight = $row['weight'];
      } else {
        $weight = '';
      }

      $condition1 = makeCreatea( 'weight', $weight );
      $condition2 = makeCreateb( $weight );
      $condition1 .= makeCreateae( 'service_id', $_GET['id'] );
      $condition2 .= makeCreatebe( $_GET['id'] );

      $sql = "
      INSERT INTO n_dailyst(".$condition1.")
        VALUES(".$condition2.")
      ";

      $result = mysqli_query( $conn, $sql );

      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{

        $sql = "
        SELECT max(id)
          FROM n_dailyst
          WHERE service_id = {$_GET['id']}";
        $result = mysqli_query( $conn, $sql );
        if ( $row = mysqli_fetch_array( $result ) ) {
          header('Location: ../daily.chart.php?id=' . $_GET['id'] . '&updated=' . $row['max(id)'] );
        } else {

          $script = "<script>";
          $script .= "alert('일일기록지가 생성되지 못했습니다. 같은 오류가 반복될 시 관리자에게 문의하세요.');";
          $script .= "</script>";
          echo $script;
          header('Location: ../daily.chart.php?id=' . $_GET['id'] );
        }
      }

    }
  }
?>
