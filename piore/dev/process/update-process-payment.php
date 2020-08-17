<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if($_SESSION['class'] > 5){
      require_once('connection.php');
      require_once('../function/makeProcess.php');

      $book_dep = str_replace( ",", "", $_POST['book_dep'] );

      $condition = makeUpdate( 'book_dep', $book_dep );
      $condition .= makeUpdate( 'book_method', $_POST['book_method'] );
      $condition .= makeUpdate( 'book_date', $_POST['book_date'] );
      $condition .= makeUpdate( 'ext_method', $_POST['ext_method'] );
      $condition .= makeUpdate( 'ext_date', $_POST['ext_date'] );
      $condition .= makeUpdatee( 'product', $_POST['pid'] );

      $sql="
        UPDATE n_service
          SET
            {$condition}
          WHERE id = {$_GET['id']}
      ";
      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      } else {
        header( "Location: ../profile.mom.php?id=" . $_GET['id'] . "&updated=2");
      }
    }else{
      die( '<script> history.back(); alert("권한이 없습니다.")</script>' );
    }
  }
?>
