<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if($_SESSION['class'] > 5){
      require_once('connection.php');
      require_once('../function/makeProcess.php');

      $phone = str_replace("-", "", $_POST['phone']);

      $condition1 = '';
      $condition1 .= makeUpdate( 'name', $_POST['name'] );
      $condition1 .= makeUpdate( 'phone', $phone );
      $condition1 .= makeUpdate( 'birth', $_POST['birth'] );
      $condition1 .= makeUpdate( 'email', $_POST['email'] );
      $condition1 .= makeUpdatee( 'address', $_POST['address'] );

      $condition2 = '';
      $condition2 .= makeUpdate( 'name', $_POST['bname'] );
      $condition2 .= makeUpdate( 'bbirth', $_POST['bbirth'] );
      $condition2 .= makeUpdate( 'dayin', $_POST['dayin'] );
      $condition2 .= makeUpdate( 'dayout', $_POST['dayout'] );
      $condition2 .= makeUpdate( 'hospital', $_POST['hospital'] );
      $condition2 .= makeUpdate( 'birthform', $_POST['birthform'] );
      $condition2 .= makeUpdate( 'gestation', $_POST['gestation'] );
      $condition2 .= makeUpdate( 'weightbirth', $_POST['weightbirth'] );
      $condition2 .= makeUpdate( 'weightin', $_POST['weightin'] );
      $condition2 .= makeUpdate( 'progress', $_POST['progress'] );
      $condition2 .= makeUpdatee( 'sexual', $_POST['bsex'] );

      $sql="
        UPDATE n_mom
          SET
            {$condition1}
          WHERE id = {$_POST['mid']}";

      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{

        $sql="
          UPDATE n_service
            SET
              {$condition2}
            WHERE id = {$_GET['id']}";

        $result=mysqli_query($conn, $sql);
        if($result === false){
          echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
          error_log(mysqli_error($conn));
          echo mysqli_error($conn);
        }else{
          header('Location: ../profile.mom.php?id='.$_GET['id']);
        }
      }
    }else{
      die( '<script> history.back(); alert("권한이 없습니다.")</script>' );
    }
  }
?>
