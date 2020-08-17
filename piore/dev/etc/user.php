<?php
  require_once('connection.php');
  $sql = "
  SELECT
    mom.id, mom.name, service.id, baby.id, baby.name
    FROM n_mom AS mom LEFT JOIN n_service AS service ON service.mom_id = mom.id LEFT JOIN n_baby AS baby ON baby.service_id = service.id";
  // $sql="SELECT service.id, mom.id, mom.name, baby.id, baby.name, baby.sexual_id, baby.birth, service.start_date, mom.address, mom.phone, con.id, con.name, codi.id, codi.name FROM service LEFT JOIN user as mom ON mom_id=mom.id LEFT JOIN baby ON baby_id=baby.id LEFT JOIN user as con ON con_id=con.id LEFT JOIN user as codi ON codi_id = codi.id LEFT JOIN region ON mom.region_id=region.id WHERE service.progress_id='1' ORDER BY service.created";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)){
    echo "<p>{$row['0']}, {$row['1']}, {$row['2']}, {$row['3']}, {$row['4']}</p>";
  }
 ?>
