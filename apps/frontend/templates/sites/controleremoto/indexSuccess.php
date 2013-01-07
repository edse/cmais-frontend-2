<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('/Linux/',$agent)) $os = 'Linux';
elseif(preg_match('/Win/',$agent)) $os = 'Windows';
elseif(preg_match('/Mob/',$agent)) $os = 'Mobile';
elseif(preg_match('/Mac/',$agent)) $os = 'Mac';
else $os = 'UnKnown';

if($os!='Mobile'):
  header( 'Location: /controleremoto/controle-web' ) ;
  exit;
else:
  header( 'Location: /controleremoto/controle-ios' ) ;
  exit;
endif;
?>
<html></html>