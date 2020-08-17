<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if(isset( $_POST['submit'] )){
      require_once('connection.php');
      require_once('../function/makeProcess.php');
      require_once('../function/direct.php');

      $sql="
      SELECT id
      FROM n_chartIn
      WHERE service_id = {$_GET['id']}
      ";
      $result = mysqli_query( $conn, $sql );
      if ( $row = mysqli_fetch_array($result) ) {
        $id = $row[0];
      } else {
        $sql = "
        INSERT INTO n_chartIn(service_id)
        VALUES({$_GET['id']})
        ";
        $result = mysqli_query( $conn, $sql );
        $sql = "
        SELECT id
        FROM n_chartIn
        WHERE service_id = {$_GET['id']}
        ";
        $result = mysqli_query( $conn, $sql );
        if ( $row = mysqli_fetch_array($result) ) {
          $id = $row[0];
        } else {
          die("Have an Error with INSERT chartIn and SELECT chartIn.ID");
        }
      }

      $condition1 = '';
      $condition1 .= makeUpdate('dayin', $_POST['dayin' ]);
      $condition1 .= makeUpdate('bbirth', $_POST['bbirth' ]);
      $condition1 .= makeUpdate('sexual', $_POST['gender' ]);
      $condition1 .= makeUpdate('hospital', $_POST['hospital' ]);
      $condition1 .= makeUpdate('birthform', $_POST['birthform' ]);
      $condition1 .= makeUpdate('gestation', $_POST['gestation' ]);
      $condition1 .= makeUpdate('bloodTypeF', $_POST['bloodTypeF' ]);
      $condition1 .= makeUpdate('bloodTypeM', $_POST['bloodTypeM' ]);
      $condition1 .= makeUpdate('bloodTypeB', $_POST['bloodTypeB' ]);
      $condition1 .= makeUpdate('weightbirth', $_POST['weightbirth' ]);
      $condition1 .= makeUpdate('weightin', $_POST['weightin' ]);
      $condition1 .= makeUpdate('name', $_POST['bname' ]);
      $condition1 .= makeUpdate('progress', 11);
      $condition1 .= makeUpdatee('bbirth', $_POST['bbirth' ]);

      $sql="
      UPDATE n_service
      SET
      {$condition1}
      WHERE id = {$_GET['id']}";
      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo $sql;
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{

        $feedTime = $_POST['feedTime'];


        $condition2 = '';
        $condition2 .= makeUpdate( 'symptoms', $_POST['symptoms'] );
        $condition2 .= makeUpdate( 'feedTimeLast', $_POST['feedLast'] );
        $condition2 .= makeUpdate( 'feedQty', $_POST['feedQtyLast'] );
        $condition2 .= makeUpdate( 'feedStoreQty', $_POST['holdMilk'] );
        $condition2 .= makeUpdate( 'feedExperiance', $_POST['experianceFeed'] );
        $condition2 .= makeUpdatee( 'feedTimeAvailable', $feedTime );


        $sql = "
        UPDATE n_chartIn
        SET
        {$condition2}
        WHERE service_id = {$_GET['id']}
        ";

        $result=mysqli_query($conn, $sql);
        if($result === false){
          echo $sql;
          echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
          error_log(mysqli_error($conn));
          echo mysqli_error($conn);
        }else {
          goDirect( '저장이 완료되었습니다.', -3 );
        }
      }

    } else {
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
