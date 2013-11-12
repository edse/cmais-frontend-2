<?php
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  $service = "nacionalidade";         
  $arguments = array('');
  $acao = new wsTrabalheConosco();
  $acao->executeWebService($service, $arguments);
  $result_function = $service."Result";//NOME DO METOD DE RESULTADO
  $xml = $acao->result->$result_function->any;
 	
 	$xml = simplexml_load_string($xml);
	$nacionalidade = null;
	foreach ($xml->NewDataSet->nacionalidade as $x){
		$nacionalidade[] = array("nacionalidade" => 
								array("uf" => (string)$x->UF, 
									    "estado" =>  (string)trim($x->ESTADO))
							);		
	}
	$output = json_encode(array("data" => $nacionalidade));
	if(isset($_GET['callback'])){
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}	
	
?>
