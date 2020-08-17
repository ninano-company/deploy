<?php
  session_start();
  require_once('connection.php');
  if (isset($_POST['Login'])) {
    if (empty($_POST['uname']) || empty($_POST['password'])) {
      header("Location: ../login.php?Empty=계정 정보를 입력해주세요");
    }else {
      $sql="
      SELECT
        user.uname, user.name, user.id, user.class, class.name, user.image
        FROM n_user AS user
        LEFT JOIN n_select AS class ON class.id = user.class
        WHERE uname='{$_POST['uname']}' AND pass=password('{$_POST['password']}')";
      $result=mysqli_query($conn, $sql);
      if($row = mysqli_fetch_array($result)){
        $_SESSION['User']=$_POST['uname'];
        $_SESSION['name']=$row[1];
        $_SESSION['id']=$row[2];
        $_SESSION['class']=$row[3];
        $_SESSION['classn']=$row[4];
        $_SESSION['image']=$row[5];
        header("Location: ../index.php");
      }else{
        header("Location: ../login.php?Invalid=아이디 혹은 비밀번호가 올바르지 않습니다.");
      }
    }
    echo 'Working Now';
  }else{
    header("Location: ../login.php");
  }

?>
//password 입력을 password 보안으로 추가하기, test상에서는 작동에러로 임시로 풀어둠.
