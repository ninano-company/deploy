<?php
  require_once('connection.php');
  $sql = "SELECT * FROM hnt_list ORDER BY id";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_assoc($result)){
    echo "<p>{$row['id']}, {$row['des']}</p>";
  }
?>
