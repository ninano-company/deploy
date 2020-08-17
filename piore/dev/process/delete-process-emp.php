<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location: ../login.php");
  }else{
    if(isset($_GET['delete'])){
      require_once('connection.php');
      die();
      $sql="DELETE FROM n_user WHERE id = {$_GET['id']}";
      $result = mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{
        header('Location: ../list.emp.php');
      }
    }
  }
?>
