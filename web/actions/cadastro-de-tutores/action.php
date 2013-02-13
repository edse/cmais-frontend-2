<?php
$campos["nome"] = $_REQUEST["nome"];
$campos["cpf"] = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
$campos["cidade"] = $_REQUEST["cidade"];
$campos["captcha"] = $_REQUEST["captcha"];

if($campos['captcha']) {
  if($campos["cpf"]){
    if(exec('grep "^'.$campos["cpf"].'$" cpf.txt')){
      $filename = "/var/frontend/web/tutores-2013/local-de-prova.csv";
      $content = $campos['nome'] . ", " . $campos['cpf'] . ", " . $campos['cidade'] . "\n";
      $fp = fopen($filename, 'a+');
      if(fwrite($fp, $content)){
        die("0");
      }
      else{
        die("1");
      }
    }
    else{
      die("2");
    } 
  }
  else {
    die("1");
  }
}
else{
  die("1");
}

?>