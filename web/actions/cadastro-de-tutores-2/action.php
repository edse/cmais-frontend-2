<?php
$_REQUEST["cpf"] = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
$_REQUEST["rg"] = str_replace(array('.','-'),"",$_REQUEST["rg"]);

if($_REQUEST["captcha"]) {
  if($_REQUEST["cpf"]){
    if(exec('grep "^'.$_REQUEST["cpf"].'$" cpf-alunos.txt')){
      die("2");
    }
    elseif(exec('grep "^'.$_REQUEST["cpf"].'$" cpf-tutores.txt')){
      die("3");
    }
    else{
      $csvFile = "/var/frontend/web/actions/cadastro-de-tutores-2/cadastro-de-tutores.csv";
      $csvContent = "";
      while(list($campo, $valor) = each($_REQUEST)) {
        if(!in_array($campo, array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
          $csvContent .= $valor . ",";
      }
      $csvContent .= "\n";
      $csvFp = fopen($csvFile, 'a+');
      if(fwrite($csvFp, $csvContent)){
        $txtFile = "/var/frontend/web/actions/cadastro-de-tutores-2/cpf-tutores.txt";
        $txtFp = fopen($txtFile, 'a+');
        fwrite($txtFp, $txtContent);
        die("0");
      }
      else{
        die("1");
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