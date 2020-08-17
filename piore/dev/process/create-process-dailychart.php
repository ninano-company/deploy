<?php
  session_start();
  if(!isset($_SESSION['User'])){
    header("Location:login.php");
  }else{
    if(isset($_POST['submit'])){
      require_once('connection.php');
      require_once('../function/makeProcess.php');

      $date = date($_POST['date']);

      $sql = "
      SELECT id
        FROM n_dailyst
        WHERE n_dailyst.service_id = {$_GET['id']} AND n_dailyst.created >= '{$date}' AND n_dailyst.created < '{$date}' + INTERVAL 1 DAY
        ";
      $result = mysqli_query( $conn, $sql );
      if( $row = mysqli_fetch_array($result) ){
        $id = $row['id'];
      }else{
        $sql = "
        SELECT a.id, a.weight FROM n_dailyst AS a
        	INNER JOIN (SELECT max(id) AS mid, service_id FROM n_dailyst GROUP BY service_id) AS b ON a.id = b.mid
          WHERE a.service_id = {$_GET['id']}
        ";

        $result = mysqli_query( $conn, $sql );
        if ( $row = mysqli_fetch_array( $result ) ) {
          $weight = $row['weight'];
        } else {
          $weight = '';
        }



        $condition1 = makeCreatea( 'weight', $weight );
        $condition2 = makeCreateb( $weight );
        $condition1 = makeCreatea( 'created', $_POST['date'] );
        $condition2 = makeCreateb( $_POST['date'] );
        $condition1 .= makeCreateae( 'service_id', $_GET['id'] );
        $condition2 .= makeCreatebe( $_GET['id'] );

        $sql = "
        INSERT INTO n_dailyst(".$condition1.")
          VALUES(".$condition2.")
        ";

        $result = mysqli_query( $conn, $sql );
        if($result === false){
          echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
          error_log(mysqli_error($conn));
          echo mysqli_error($conn);
        } else {

          $sql = "
          SELECT max(id) AS id
            FROM n_dailyst
            WHERE n_dailyst.service_id = {$_GET['id']}
          ";

          $result = mysqli_query( $conn, $sql );
          while ( $row = mysqli_fetch_array( $result ) ) {
            $id = $row['id'];
          }
        }
      }

      if ( $_POST['feeded'] == 2 ) {
        $_POST['feed'] = NULL;
      }

      $created = $_POST['date'] . ' ' . $_POST['time'] . ':00';

      $condition1 = makeCreatea( 'feeded', $_POST['feeded'] );
      $condition2 = makeCreateb( $_POST['feeded'] );
      $condition1 .= makeCreatea( 'breastfeed', $_POST['breastfeed'] );
      $condition2 .= makeCreateb( $_POST['breastfeed'] );
      $condition1 .= makeCreatea( 'feed', $_POST['feed'] );
      $condition2 .= makeCreateb( $_POST['feed'] );
      $condition1 .= makeCreatea( 'omit', $_POST['omit'] );
      $condition2 .= makeCreateb( $_POST['omit'] );
      $condition1 .= makeCreatea( 'pee', $_POST['pee'] );
      $condition2 .= makeCreateb( $_POST['pee'] );
      $condition1 .= makeCreatea( 'feedkind', $_POST['feedkind'] );
      $condition2 .= makeCreateb( $_POST['feedkind'] );
      $condition1 .= makeCreatea( 'feces', $_POST['feces'] );
      $condition2 .= makeCreateb( $_POST['feces'] );
      $condition1 .= makeCreatea( 'service_id', $_GET['id'] );
      $condition2 .= makeCreateb( $_GET['id'] );
      $condition1 .= makeCreatea( 'emp_id', $_SESSION['id'] );
      $condition2 .= makeCreateb( $_SESSION['id'] );
      $condition1 .= makeCreatea( 'remarks', $_POST['remarks'] );
      $condition2 .= makeCreateb( $_POST['remarks'] );
      $condition1 .= makeCreateae( 'created', $created );
      $condition2 .= makeCreatebe( $created );

      $sql="
      INSERT INTO n_dailynd(
        ".$condition1."
        )
        VALUES(
          ".$condition2."
          )";

      $result=mysqli_query($conn, $sql);
      if($result === false){
        echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
        error_log(mysqli_error($conn));
        echo mysqli_error($conn);
      }else{
        header( 'Location: ../daily.chart.php?id=' . $_GET['id'] . '&updated=' . $id );
      }
    }
  }
?>
