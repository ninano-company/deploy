<?php

// if($_POST['feeded']|=""){
//   $condition1 .= "feeded,";
//   $condition2 .= "'{$_POST['feeded']}',";
// }

  function makeCreatea( $var, $value ){
    if ( $value |= "" ){
      return "{$var}, ";
    } else {
      return '';
    }
  }

  function makeCreateae( $var, $value ){
    if ( $value |= "" ){
      return "{$var}";
    } else {
      return '';
    }
  }

  function makeCreateb( $var ){
    if ( $var |= "" ){
      return "'{$var}', ";
    } else {
      return '';
    }
  }

  function makeCreatebe( $var ){
    if ( $var |= "" ){
      return "'{$var}'";
    } else {
      return '';
    }
  }

  function makeUpdate( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = '{$post}',";
    } else {
      return '';
    }
  }

  function makeUpdatee( $name, $post ){
    if( $post |= "" ) {
      return "{$name} = '{$post}'";
    } else {
      return '';
    }
  }

?>
