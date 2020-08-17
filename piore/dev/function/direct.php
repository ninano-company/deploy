<?php
  function goBack( $alert ) {
    $script = "<script>";
    $script .= "alert('" . $alert . "');";
    $script .= "history.back();";
    $script .= "</script>";

    echo $script;
  }

  function goBackRefresh() {
    $script = "<script>";
    $script .= "history.back();";
    $script .= "location.reload();";
    $script .= "</script>";

    echo $script;
  }

  function goDirect( $alert, $place ) {
    $script = "<script>";
    $script .= "alert('" . $alert . "');";
    $script .= "history.go( ".$place." );";
    $script .= "</script>";

    echo $script;
  }

  function windowClose() {
    $script = "<script>";
    $script .= "window.close();";
    $script .= "</script>";

    echo $script;
  }
?>
