<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(1, '미정', 'birthform')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(2, '제왕절개', 'birthform')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(3, '자연분만', 'birthform')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(4, '산후조리사', 'class')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(5, 'PRN', 'class')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(6, '부서장', 'class')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(7, '관리자', 'class')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(8, '예약요청', 'progress')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(9, '상담대기', 'progress')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(10, '내원대기', 'progress')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(11, '내원', 'progress')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(12, '퇴원', 'progress')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(13, '중도퇴원', 'progress')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(14, '모름', 'sex')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(15, '남아', 'sex')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(16, '여아', 'sex')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(17, '업무 중', 'ready')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(18, '대기', 'ready')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(19, '휴식 기간', 'ready')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(20, '미납', 'checked')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(21, '계약금 납부 완료', 'checked')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(22, '잔금 납부 완료', 'checked')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(23, '공실', 'status')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(24, '내실', 'status')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(25, '대기', 'status')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(26, '', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(27, 'A+', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(28, 'B+', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(29, 'O+', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(30, 'AB+', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(31, 'A-', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(32, 'B-', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(33, 'O-', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(34, 'AB-', 'bloodType')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(35, '근무대기', 'statusEmp')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(36, '근무중', 'statusEmp')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(37, '휴가', 'statusEmp')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(38, '휴직', 'statusEmp')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_select(id, name, cate) VALUES(38, '퇴사', 'statusEmp')";
  $result=mysqli_query($conn, $sql);

  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
