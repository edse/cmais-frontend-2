<?php

	header("Content-Type: text/html;charset=utf8");
	include_once("wsTrabalheConosco.class.php");

	$service = "consulta_vagas";
	$arguments = array('consulta_vagas' => array('consulta_vagas' => ""));
	
	$acao = new wsTrabalheConosco();
	$acao->executeWebService($service, $arguments);
	$result_function = $service."Result";
	$xml = $acao->result->$result_function->any;
	$xml = simplexml_load_string($xml);
	
	$vagas = null;
	
	foreach ($xml->NewDataSet->vagas as $x){
		$vagas[] = array("vaga" => array("codigo" => (string)$x->codigo, 
						"descricao" => (string)trim($x->descricao),  
						"inicio" => (string)$x->inicio,  
						"fim" => (string)$x->fim,  
						"departamento" => (string)$x->departamento,   
						"descricao_processo" => (string)$x->descricao_processo));		
	}
	
	$output = json_encode(array("data" => $vagas));

	if(isset($_GET['callback'])){
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}else{
		//echo $output;
	}
	
?>
