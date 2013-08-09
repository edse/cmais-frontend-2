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
        $csvFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino-ciencias/cadastro.csv";
        $csvContent = $_REQUEST["nome"] . "," .
                      $_REQUEST["cpf"] . "," .
                      $_REQUEST["rg"] . "," .
                      $_REQUEST["datanasc"] . "," .
                      $_REQUEST["email"] . "," .
                      $_REQUEST["telefone"] . "," .
                      $_REQUEST["celular"] . "," .
                      $_REQUEST["sms"] . "," .
                      $_REQUEST["diretoria"] . "," .
                      $_REQUEST["endereco"] . "," .
                      $_REQUEST["formacao"] . "," .
                      $_REQUEST["experiente_ava_efap"] . "," .
                      $_REQUEST["inscrito_serra_negra"] . "," .
                      $_REQUEST["contrato_fpa"] . "," .
                      $_REQUEST["experiente_tutor"] . "," .
                      $_REQUEST["curso_tutoria_profort_efap"] . "," .
                      $_REQUEST["vinculado_rede_ensino_sp"] . "," .
                      $_REQUEST["rede_ensino_sp_tempo"] . "," .
                      $_REQUEST["rede_ensino_sp_funcao"] . "," .
                      $_REQUEST["em_exercicio_ensino_fundamental"] . "," .
                      $_REQUEST["concordo"] . "\n";
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