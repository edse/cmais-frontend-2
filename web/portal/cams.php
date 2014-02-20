<?php
if($_REQUEST["s"]=="ecovias"){
  $url = 'http://www.ecovias.com.br';
  preg_match_all('/<img src=\'([^\']*)\' alt=\'([^\']*)\' title=\'([^\']*)\' onError="([^"]*)" \/>/', file_get_contents('http://www.ecovias.com.br/Mapa-Interativo/Cameras'), $matches);
}
else{
  $url = 'http://www.ecopistas.com.br';
  preg_match_all('/<img src=\'([^\']*)\' alt=\'([^\']*)\' title=\'([^\']*)\' onError="([^"]*)" \/>/', file_get_contents('http://www.ecopistas.com.br/Mapa-Interativo/Cameras'), $matches);
}

foreach($matches[0] as $m){
  //echo "<br />".$m;
  $t = explode(' onError', $m);
  $w = explode("'", $t[0]);
  //echo "<br />".$w[1]." - ".$w[3];
  $r['title'] = $w[3];
  $r['src'] = $url.$w[1];
  $return[] = $r;
}
/*
foreach($matches2[0] as $m){
  //echo "<br />".$m;
  $t = explode(' onError', $m);
  $w = explode("'", $t[0]);
  //echo "<br />".$w[1]." - ".$w[3];
  $r['title'] = $w[3];
  $r['src'] = 'http://www.ecopistas.com.br'.$w[1];
  $return[] = $r;
}
*/

if($_REQUEST["test"]){
  print "<pre>";
  var_dump($return);
  print "</pre>";
}
else{
	$content_return = array("data" => $return);
	$content = json_encode($content_return);
	echo $content;
}