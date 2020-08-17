<?php
  $date1 = date_create('20191101');
  $date2 = date_create('20191115');
  $diff = date_diff($date1, $date2);
  print_r($diff);
  $dif = date_interval_format(date_diff($date1, $date2), "%a");
  echo $dif;
?>
