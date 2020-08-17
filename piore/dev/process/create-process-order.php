<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if(isset($_POST['save'])){
      require_once('connection.php');
      require_once('../function/makeProcess.php');
      require_once('../function/direct.php');

      for ( $step=0; $step <  count($pid); $step++ ) {
        $condition1 = "";
        $condition2 = "";

        $condition1 .= makeCreatea( 'service_id', $_GET['id'] );
        $condition2 .= makeCreateb( $_GET['id'] );

        $condition1 .= makeCreatea( 'subproduct', $pid[$step] );
        $condition2 .= makeCreateb( $pid[$step] );

        $condition1 .= makeCreatea( 'quantity', $qty[$step] );
        $condition2 .= makeCreateb( $qty[$step] );

        $condition1 .= makeCreatea( 'method', $method[$step] );
        $condition2 .= makeCreateb( $method[$step] );

        $condition1 .= makeCreateae( 'paid', $paid[$step] );
        $condition2 .= makeCreatebe( $paid[$step] );

        $sql="
        INSERT INTO n_ordered(
          ". $condition1 ."
          )VALUES(
            ". $condition2 ."
          )
        ";

        $result=mysqli_query($conn, $sql);
        if($result === false){
          echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
          error_log(mysqli_error($conn));
          echo mysqli_error($conn);
          die();
        }
      }
      windowClose();
    }
  }
?>
