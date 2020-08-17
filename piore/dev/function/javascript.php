<?php
  function AddCommas( $id ) {
    $js = $id . ' = document.getElementById("' . $id . '").value;';
		$js .= '$(\'#' . $id . '\').val(' . $id . '.replace(/\B(?=(\d{3})+(?!\d))/g, ","));';
    return $js;
  }

?>
