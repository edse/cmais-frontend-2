<?php
  if($_REQUEST["file"]) {
    $file = $_REQUEST['file'];
    header("Content-disposition: attachment; filename={$file}");
    header("Content-type: image/jpg");
    readfile("{$file}");
  }
  /*
  else {
    die("parameter 'file' needed!");
  }
   * 
   */
?>
