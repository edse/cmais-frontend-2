<?php   
  //sleep(3);
  header("Content-Type: text/html;charset=utf8");

  include_once("wsTrabalheConosco.class.php");
  
    header("Content-Type: text/xml;charset=utf8");
    		//$cpf = @strip_tags($_REQUEST['cpf']);
        //$data = @strip_tags($_REQUEST['data']);
				$cpf = "34078146821";
				$data = "04/02/1987";
				
        //RETORNAR OS DADOS DO CURRÍCULO RELACIONADO AO CPF/DATA
        $service = "seleciona_curriculo";
        $arguments = array('seleciona_curriculo' => array('cpf' => $cpf, 'data_nascimento' => $data));
        $acao = new wsTrabalheConosco();
        $acao->executeWebService($service, $arguments);
        $result_function = $service."Result";//NOME DO METOD DE RESULTADO
        $xml = $acao->result->$result_function->any;
        print_r($xml);

?>