<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if(isset($_POST['create'])){
      require_once('connection.php');

      $sql="SELECT uname FROM n_user WHERE uname='{$_POST['uname']}'";
      $result=mysqli_query($conn, $sql);
      if($row = mysqli_fetch_assoc($result)){
        die("<script>history.back();alert('계정이름이 중복되었습니다');</script>");
      }else{
        $condition1 = "";
        $condition2 = "";
        if($_POST['birth']|=""){
          $condition1 .= "birth,";
          $condition2 .= "'{$_POST['birth']}',";
        }
        if($_POST['joined']|=""){
          $condition1 .= "joined,";
          $condition2 .= "'{$_POST['joined']}',";
        }
        $sql="
        INSERT INTO n_user(
          uname,
          pass,
          name,
          ".$condition1."
          address,
          phone,
          class,
          note
          )
          VALUES(
            '{$_POST['uname']}',
            '{$_POST['pass']}',
            '{$_POST['name']}',
            ".$condition2."
            '{$_POST['address']}',
            '{$_POST['phone']}',
            '{$_POST['class']}',
            '{$_POST['note']}'
            )";
        $result=mysqli_query($conn, $sql);
        if($result === false){
          echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
          error_log(mysqli_error($conn));
          echo mysqli_error($conn);
        }else{
          header('Location: ../list.emp.php');
        }
      }
    }
  }
?>
