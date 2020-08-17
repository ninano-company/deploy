<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('김선지', '19800227', '01012345678', '경상북도 김천시 율곡동')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('전지현', '19811030', '01054682137', '서울특별시 일산구')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('이하늬', '19830302', '01089734568', '서울특별시 서초구')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('공효진', '19800404', '01072231544', '서울특별시 강남구')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('Emma Watson', '19900415', '01011214355', '서울특별시 동작구')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('김태희', '19800329', '01078366211', '서울특별시 용산구')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('고소영', '19721006', '01084224513', '경기도 수원시')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('신민아', '19840405', '01094356441', '경기도 일산시')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('이영애', '19710131', '01075388841', '경기도 오산시')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('한예슬', '19810918', '01094852123', '서울특별시 강남구')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('수애', '19790916', '01084755364', '경기도 일산시')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_mom(name, birth, phone, address) VALUES('이효리', '19790510', '01094847235', '서울특별시 용산구')";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
