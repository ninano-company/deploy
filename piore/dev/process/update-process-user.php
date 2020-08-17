<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if($_SESSION['class'] > 5){
      require_once('connection.php');
      require_once('../function/makeProcess.php');

      $phone = str_replace("-", "", $_POST['phone']);

      $condition = '';
      $condition .= makeUpdate( 'name', $_POST['name'] );
      $condition .= makeUpdate( 'phone', $phone );
      $condition .= makeUpdate( 'status', $_POST['status'] );
      $condition .= makeUpdate( 'birth', $_POST['birth'] );
      $condition .= makeUpdate( 'joined', $_POST['joined'] );
      $condition .= makeUpdate( 'class', $_POST['class'] );
      $condition .= makeUpdate( 'email', $_POST['email'] );
      $condition .= makeUpdate( 'address', $_POST['address'] );
      $condition .= makeUpdate( 'pass', $_POST['pass'] );
      $condition .= makeUpdatee( 'uname', $_POST['uname'] );

      $sql="
      UPDATE n_user
      SET
      {$condition}
      WHERE id = {$_GET['id']}";
      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{
        header('Location: ../profileUser.php?id='.$_GET['id']);
      }
    }else{
      die( '<script> history.back(); alert("권한이 없습니다.")</script>' );
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
