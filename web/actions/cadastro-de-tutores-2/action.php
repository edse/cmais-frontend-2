<?php
$cpf = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
$cpf = ltrim($cpf, "0");
$rg = str_replace(array('.','-'),"",$_REQUEST["rg"]);

if($_REQUEST["captcha"]) {
  if($cpf){
    if(exec('grep "^'.$cpf.'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/control/cpf-alunos.txt')){
      die("2");
    }
    else if(exec('grep "^'.$cpf.'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/control/cpf-tutores.txt')){
      die("3");
    }
    else {
      $csvFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cadastro-melhor-gestao-melhor-ensino2.csv";
      $csvContent = $_REQUEST["disciplina"] . "," .
                    $_REQUEST["nome"] . "," .
                    $cpf . "," .
                    $rg . "," .
                    $_REQUEST["email"] . "," .
                    $_REQUEST["telefone"] . "," .
                    $_REQUEST["celular"] . "," .
                    $_REQUEST["formacao"] . "," .
                    $_REQUEST["participou"] . "," .
                    $_REQUEST["fpavinculo"] . "," .
                    $_REQUEST["localdeprova"] . "," .
                    $_REQUEST["exp_coord_tutoria"] . "," .
                    $_REQUEST["atuacao_sup"] . "," .
                    $_REQUEST["part_encontro"] . "\n";
      $csvFp = fopen($csvFile, 'a+');
      if(fwrite($csvFp, $csvContent)){
        $txtFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/control/cpf-tutores.txt";
        $txtContent = $cpf . "\n";
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