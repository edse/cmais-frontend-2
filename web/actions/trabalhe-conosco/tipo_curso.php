<?php

  header("Content-Type: text/html;charset=utf8");

  include_once("wsTrabalheConosco.class.php");
	 
	$service = "tipo_curso";
	$arguments = array('');
	  
	$acao = new wsTrabalheConosco();
	$acao->executeWebService($service, $arguments);
	$result_function = $service."Result";//NOME DO METOD DE RESULTADO
  $xml = $acao->result->$result_function->any;
  
  $xml = simplexml_load_string($xml);

	$tipos = null;
	
	foreach ($xml->NewDataSet->tipos as $x){
		$tipos[] = array("tipos" => 
								array("qx_codigo" => (string)$x->QX_CODIGO, 
									    "qx_desc" =>  (string)trim($x->QX_DESC))
							);		
	}
	
	$output = json_encode(array("data" => $tipos));

	if(isset($_GET['callback'])){
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}	
    
?>

 