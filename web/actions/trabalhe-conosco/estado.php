<?php
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  $service = "estado";         
  $arguments = array('');
  $acao = new wsTrabalheConosco();
  $acao->executeWebService($service, $arguments);
  $result_function = $service."Result";//NOME DO METOD DE RESULTADO
  $xml = $acao->result->$result_function->any;
  $xml = simplexml_load_string($xml);
	$estados = null;
	foreach ($xml->NewDataSet->estados as $x){
		$estados[] = array("estados" => 
								 			array("uf" => (string)$x->UF, 
									    	"estado" => (string)trim($x->ESTADO))
							);		
	}
	$output = json_encode(array("data" => $estados));
	if(isset($_GET['callback'])){
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}	
    
?>

 