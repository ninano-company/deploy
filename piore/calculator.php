<?php
  $all = 1000000;
  $can = 2400;
  $we = 12;
  $sum = 1;

  for ( $i = 0 ; $i < $can ; $i++) {
    $sum *= ($all - $we - $i) / ($all - $i);
  }
  echo $sum;

?>
