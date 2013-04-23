<?php
//$cpf = str_replace(array('.','-'),"",$_REQUEST["cpf"]);
//$cpf = ltrim($cpf, "0");
//$rg = str_replace(array('.','-'),"",$_REQUEST["rg"]);

$email = strtolower($_REQUEST["email"]);
$string = "";

if($_REQUEST["captcha"]) {
  if($email){
    if(exec('grep "^'.$email.'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/control/emails-to-complete-registration.txt')){
      if(exec('grep "^'.$email.'$" /var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/control/emails-had-completed-registration.txt')){
        die("4");
      }
      else {
        
        $file1_csv = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cadastro-melhor-gestao-melhor-ensino-complementar.csv";
        $file1_newData = $email . "," .
                         $_REQUEST["exp_coord_tutoria"] . "," .
                         $_REQUEST["atuacao_sup"] . "," .
                         $_REQUEST["part_encontro"] . "\n";
  
        $file1_csvFp = fopen($file1_csv, 'a+');
        
        if(!fwrite($file1_csvFp, $file1_newData)){
          die("2");
        }
        else {
          fclose($file1_csvFp);
          $txtFile = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/control/emails-had-completed-registration.txt";
          $txtContent = $email . "\n";
          $txtFp = fopen($txtFile, 'a+');
          fwrite($txtFp, $txtContent);
          fclose($txtFp);
          
          // Até esse ponto o objetivo já foi atingido. A partir daqui é uma tentativa de resolver tudo sem precisar consolidar posteriormente os arquivos
          $file2_csv = "/var/frontend/web/tutores-2013/melhor-gestao-melhor-ensino/cadastro-melhor-gestao-melhor-ensino-consolidado.csv";
          $file2_newData = $_REQUEST["exp_coord_tutoria"] . "," .
                           $_REQUEST["atuacao_sup"] . "," .
                           $_REQUEST["part_encontro"];
          $file2_csvFp = fopen($file2_csv,'r+');
          if ($file2_csvFp) {
            while(true) {
              $line = fgets($file2_csvFp);
              if ($line==null) break;
              
              if(preg_match("/$email/", $line)) {
                $string .= $line . $newData;
              } else {
                $string.= $line;
              }
            }
            rewind($file2_csvFp);
            ftruncate($file2_csvFp, 0);
            if (!fwrite($file2_csvFp, $string))
              die("5");
            fclose($file2_csvFp);
          }
          //sucesso
          die("0");
        }
      }
    }
    else {
      die("3");
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