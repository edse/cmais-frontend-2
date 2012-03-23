<?php
if(isset($pager)){
  header("Location: ".$pager->getCurrent()->retriveUrl());
  die();
} 
?>