<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if($_SESSION['class'] > 5){
      require_once('/copaki/www/piore/dev/process/connection.php');
      require_once('/copaki/www/piore/dev/function/makeProcess.php');

      $phone = str_replace("-", "", $_POST['phone']);

      $condition1 = '';
      $condition1 .= makeUpdatee('note', $_POST['note']);

      $sql="
        UPDATE n_{$_GET['update']}
          SET
            {$condition1}
          WHERE id = {$_GET['id']}
      ";
      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo $sql;
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{
        if ( $_GET['update'] == 'user' ) {
          header('Location: ../profileUser.php?id='.$_GET['id']);
        } else {
          header('Location: ../profile.mom.php?id='.$_GET['id']);
        }
      }
    }else{
      die( '<script> history.back(); alert("권한이 없습니다.")</script>' );
    }
  }
?>
