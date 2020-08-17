<?php
  require_once('connection.php');
  $sql = "SELECT * FROM n_daily ORDER BY id";
  $result = mysqli_query($conn, $sql);
  while($row=mysqli_fetch_array($result)){
    echo "<p>{$row['0']}, {$row['1']}, {$row['2']}, {$row['3']}, {$row['4']}, {$row['5']}, {$row['6']}, {$row['7']}, {$row['8']}, {$row['9']}, {$row['10']}, {$row['11']}, {$row['12']}</p>";
  }
?>
