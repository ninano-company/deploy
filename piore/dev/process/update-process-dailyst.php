<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if(isset( $_POST['revise'] )){
      require_once('connection.php');
      require_once('../function/makeProcess.php');

      $condition1 = '';
      $condition1 .= makeUpdate('created', $_POST['date' ]);
      $condition1 .= makeUpdate('cord', $_POST['cord' ]);
      $condition1 .= makeUpdate('test', $_POST['test' ]);
      $condition1 .= makeUpdate('weight', $_POST['weight' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('tempd', $_POST['tempd' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('tempe', $_POST['tempe' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('tempn', $_POST['tempn' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('pulsed', $_POST['pulsed' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('pulsee', $_POST['pulsee' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('pulsen', $_POST['pulsen' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('respd', $_POST['respd' . $_POST['stid'] ]);
      $condition1 .= makeUpdate('respe', $_POST['respe' . $_POST['stid'] ]);
      $condition1 .= makeUpdatee('respn', $_POST['respn' . $_POST['stid'] ]);

      $sql="
        UPDATE n_dailyst
          SET
            {$condition1}
          WHERE id = {$_POST['stid']}";

      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo $sql;
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{
        header( 'Location: ../daily.chart.php?id=' . $_POST['id'] . '&updated=' . $_POST['stid'] );
      }
    }else{
      die( '<script> history.back(); alert("권한이 없습니다.")</script>' );
    }
  }
?>
