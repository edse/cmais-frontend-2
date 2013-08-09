<?php
//$cpf = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
//$cpf = ltrim($cpf, "0");
//$rg = str_replace(array('.','-'),"",$_REQUEST["rg"]);


if($_REQUEST["captcha"]) {
  if($_REQUEST["cpf"]){
    if(date("Y-m-d H:i:s") < "2014-01-01 00:00:00") {
      if(exec('grep "^'.$_REQUEST["cpf"].'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/control/cpf.txt')){
        die("3");
      }
      else {
        $csvFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/cadastro2.csv";
        $csvContent = str_replace(","," ",$_REQUEST["nome"]) . "," .
                      str_replace(","," ",$_REQUEST["cpf"]) . "," .
                      str_replace(","," ",$_REQUEST["rg"]) . "," .
                      str_replace(","," ", $_REQUEST["datanasc"]) . "," .
                      str_replace(","," ",$_REQUEST["email"]) . "," .
                      str_replace(","," ",$_REQUEST["telefone"]) . "," .
                      str_replace(","," ",$_REQUEST["celular"]) . "," .
                      str_replace(","," ",$_REQUEST["sms"]) . "," .
                      str_replace(","," ",$_REQUEST["diretoria"]) . "," .
                      str_replace(","," ",$_REQUEST["endereco"]) . "," .
                      str_replace(","," ",$_REQUEST["numero"]) . "," .
                      str_replace(","," ",$_REQUEST["bairro"]) . "," .
                      str_replace(","," ",$_REQUEST["complemento"]) . "," .
                      str_replace(","," ",$_REQUEST["cep"]) . "," .
                      str_replace(","," ",$_REQUEST["cidade"]) . "," .
                      str_replace(","," ",$_REQUEST["estado"]) . "," .
                      str_replace(","," ",$_REQUEST["formacao"]) . "," .
                      str_replace(","," ",$_REQUEST["experiente_ava_efap"]) . "," .
                      str_replace(","," ",$_REQUEST["inscrito_serra_negra"]) . "," .
                      str_replace(","," ",$_REQUEST["contrato_fpa"]) . "," .
                      str_replace(","," ",$_REQUEST["experiente_tutor"]) . "," .
                      str_replace(","," ",$_REQUEST["curso_tutoria_profort_efap"]) . "," .
                      str_replace(","," ",$_REQUEST["vinculado_rede_ensino_sp"]) . "," .
                      str_replace(","," ",$_REQUEST["rede_ensino_sp_tempo"]) . "," .
                      str_replace(","," ",$_REQUEST["rede_ensino_sp_funcao"]) . "," .
                      str_replace(","," ",$_REQUEST["em_exercicio_ensino_fundamental"]) . "," .
                      (($_REQUEST['concordo'] == "on") ? "sim" : "não") . "\n";
        $csvFp = fopen($csvFile, 'a+');
        if(fwrite($csvFp, $csvContent)){
          $txtFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/control/cpf.txt";
          $txtContent = $_REQUEST["cpf"] . "\n";
          $txtFp = fopen($txtFile, 'a+');
          fwrite($txtFp, $txtContent);
          die("0");
          //enviar email de confirmacao para inscrito e para tutoria
        }
        else{
          die("4");
        }
      }
    }
    else {
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