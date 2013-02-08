<?php

$campos["nome"] = $_REQUEST["nome"];
$campos["cpf"] = $_REQUEST["cpf"];
$campos["cidade"] = $_REQUEST["cidade"];
$campos["captcha"] = $_REQUEST["captcha"];

if($campos['captcha']) {
  if($campos["cpf"]){
    if(exec('grep "^'.$campos["cpf"].'$" cpf.txt')){
      $filename = "/var/frontend/web/tutores-2013/local-de-prova.csv";
      $content = $campos['nome'] . ", " . $campos['cpf'] . ", " . $campos['cidade'] . "\n";
      $fp = fopen($filename, 'a+');
      if(fwrite($fp, $content)){
        header("location: http://cmais.com.br/cadastro-de-tutores-2013-sucesso");
        die();
      }
      else{
        header("location: http://cmais.com.br/cadastro-de-tutores-2013-erro");
        die();
      }
    }
    else{
      header("location: http://cmais.com.br/cadastro-de-tutores-2013-cpf-invalido");
      die();
    } 
  }
  else {
    header("location: http://cmais.com.br/cadastro-de-tutores-2013-erro.php");
    die();
  }
}
?>