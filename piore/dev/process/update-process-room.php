<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if($_SESSION['class'] > 5){
      require_once('connection.php');
      require_once('../function/makeProcess.php');
      require_once('../function/direct.php');

      $condition1 = '';
      $condition2 = '';

      if ( isset($_GET['in']) ) {
        $condition1 .=makeUpdate( 'status_id', 24 );
        $condition1 .=makeUpdatee( 'service_id', $_GET['service'] );

        // $sql = "
        //   SELECT product.period
        //    FROM n_service AS service
        //    LEFT JOIN n_product AS product ON product.id = service.product
        //    WHERE service.id = {$_GET['service']}
        // ";
        // $result = mysqli_query( $conn, $sql );
        // if ( $period = mysqli_fetch_array($result) ) {
        //   $date = new DateTime("Y-m-d");
        //   $dayin = $date;
        //   $dateDifferance = 'P'.$period[0].'D';
        //   $dayout = $date->add(new DateInterval($dateDifferance);
        // } else {
        //   $date = new DateTime("Y-m-d");
        //   $dayin = $date;
        //   $dayout = $date->add(new DateInterval('P14D'));
        // }

        $condition2 .=makeUpdatee( 'progress', 11 );
      }

      if ( isset($_GET['pending']) ) {
        $condition1 .= makeUpdatee( 'status_id', 25 );
      }

      if ( isset($_GET['out']) ) {
        $condition1 .= makeUpdate( 'service_id', 0 );
        $condition1 .= makeUpdatee( 'status_id', 23 );

        $condition2 .= makeUpdatee( 'progress', 12 );
      }

      $sql="
      UPDATE n_room
      SET
      {$condition1}
      WHERE num = {$_GET['room']}
      ";
      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }
      if( $condition2 != '' ) {
        $sql="
        UPDATE n_service
        SET
        {$condition2}
        WHERE id = {$_GET['service']}
        ";

        $result=mysqli_query($conn, $sql);
        if($result === false){
          echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
          error_log(mysqli_error($conn));
          echo mysqli_error($conn);
        } else {
          if ( isset($_GET['in']) ) {
            echo "
                  <script>
                    opener.location.reload();
                    window.close();
                  </script>
            ";
          } else {
            goBack('요청이 완료되었습니다.');
          }
        }
      } else {
        goBack('요청이 완료되었습니다.');
      }
    }else{
      goBack('접근 권한이 제한되었습니다.');
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
