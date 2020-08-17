<?php
  require_once('connection.php');
  $sql = "SELECT * FROM n_select ORDER BY id";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_assoc($result)){
    echo "<p>{$row['id']}, {$row['name']}</p>";
  }
?>
