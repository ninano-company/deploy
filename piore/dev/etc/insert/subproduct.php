<?php
  require_once('connection.php');
  $sql = "INSERT INTO n_subproduct(id, name, image, kind, price, description) VALUES( 1, '치킨마요', '1.jpg', '식사', 4000, '짭짤한 간장소스와 고소한 마요소스, 쫄깃한 닭고기로 맛없을 수 없는 조합의 덮밥')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(id, name, image, kind, price, description) VALUES( 2, '스팸마요', '2.jpg', '식사', 4000, '짭짜구리하고 달다구리한 간장마요소스와 스팸의 숟가락을 당기는 덮밥')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(id, name, image, kind, price, description) VALUES( 3, '떡볶이', '3.jpg', '분식', 3000, '매콤단짠의 대명사 식욕을 당기는 빨간양념의 떡볶이')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(id, name, image, kind, price, description) VALUES( 4, '튀김만두', '4.jpg', '분식', 2500, '바삭하게 튀겨 겉바속촉의 결정체')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(id, name, image, kind, price, description) VALUES( 5, '탕수육', '5.jpg', '요리', 5500, '겉은 바삭, 속은 촉촉, 고기는 쫄깃, 소스는 새콤달콤한 탕수육')";
  $result=mysqli_query($conn, $sql);
  $sql = "INSERT INTO n_subproduct(id, name, image, kind, price, description) VALUES( 6, '유린기', '6.jpg', '요리', 5000, '소스따윈 필요없는 바삭한 튀김과 촉촉한 고기로 승부하는 유린기')";
  $result=mysqli_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
  }else{
    echo 'well done';
  }
?>
