<?php
$_REQUEST["cpf"] = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
$_REQUEST["rg"] = str_replace(array('.','-'),"",$_REQUEST["rg"]);

if($_REQUEST["captcha"]) {
  if($_REQUEST["cpf"]){
    if(exec('grep "^'.$_REQUEST["cpf"].'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cpf-alunos.txt')){
      die("2");
    }
    elseif(exec('grep "^'.$_REQUEST["cpf"].'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cpf-tutores.txt')){
      die("3");
    }
    else{
      $csvFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cadastro-melhor-gestao-melhor-ensino.csv";
      $csvContent = $_REQUEST["disciplina1"] . "," .
                    $_REQUEST["disciplina2"] . "," .
                    $_REQUEST["disciplina3"] . "," .
                    $_REQUEST["nome"] . "," .
                    $_REQUEST["cpf"] . "," .
                    $_REQUEST["rg"] . "," .
                    $_REQUEST["email"] . "," .
                    $_REQUEST["telefone"] . "," .
                    $_REQUEST["celular"] . "," .
                    $_REQUEST["formacao1"] . "," .
                    $_REQUEST["formacao2"] . "," .
                    $_REQUEST["formacao3"] . "," .
                    $_REQUEST["participou"] . "," .
                    $_REQUEST["fpavinculo"] . "," .
                    $_REQUEST["localdeprova"] . ",\n";
      $csvFp = fopen($csvFile, 'a+');
      if(fwrite($csvFp, $csvContent)){
        $txtFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cpf-tutores.txt";
        $txtContent = $_REQUEST["cpf"] . "\n";
        $txtFp = fopen($txtFile, 'a+');
        fwrite($txtFp, $txtContent);
        die("0");
      }
      else{
        die("4");
      }
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