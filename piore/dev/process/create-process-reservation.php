<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if(isset($_POST['create'])){
      require_once('connection.php');

      $condition1 = "";
      $condition2 = "";
      if($_POST['bbirth']|=""){
        $condition1 .= "bbirth,";
        $condition2 .= "'{$_POST['bbirth']}',";
      }
      if($_POST['rdate']|=""){
        $condition1 .= "consult_date,";
        $condition2 .= "'{$_POST['rdate']}',";
      }
      if($_POST['progress']|=""){
        $condition1 .= "progress,";
        $condition2 .= "'{$_POST['progress']}',";
      }
      $sql="
      INSERT INTO n_mom(
        name,
        phone
        )VALUES(
          '{$_POST['name']}',
          '{$_POST['phone']}'
          )";
      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{
        $sql="
        SELECT id
          FROM n_mom
          WHERE phone='{$_POST['phone']}'";
        $result=mysqli_query($conn, $sql);
        if( $row = mysqli_fetch_array($result) ){
          $sql="
          INSERT INTO n_service(
            mom_id,
            ".$condition1."
            note
            )VALUES(
              '{$row['id']}',
              ".$condition2."
              '{$_POST['note']}'
              )";
          $result=mysqli_query($conn, $sql);
          if($result === false){
            echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
            error_log(mysqli_error($conn));
            echo mysqli_error($conn);
          }else{
            header('Location: ../list.service.reservation.php');
          }
        }
      }
    }
  }
?>
