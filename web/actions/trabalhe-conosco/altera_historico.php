<?php
	header("Content-Type: text/xml;charset=utf8");
	include_once("wsTrabalheConosco.class.php");
	if(isset($_GET['callback']) && !empty($_GET['ql_codigo']) && !empty($_GET['ql_dtadmis']) && !empty($_GET['ql_dtdemis']) && !empty($_GET['ql_dtdemis']) && !empty($_GET['ql_experiencia']) && !empty($_GET['ql_empresa']) && !empty($_GET['ql_funcini'])){
		$service = "altera_historico";    
		$arguments = array('altera_historico' 
	               => array( 'codigo' => $_GET['ql_codigo'],
	                         'data_admissao' => $_GET['ql_dtadmis'],  
	                         'data_demissao' => $_GET['ql_dtdemis'],  
	                         'experiencia' => urldecode($_GET['ql_experiencia']), 
	                         'empresa' => $_GET['ql_empresa'], 
	                         'funcao' => $_GET['ql_funcini'], 
	                         'funcao_inicial' => $_GET['ql_funcao'], 
	                     ));
	  
		foreach($arguments["altera_historico"] as $key=>$value){
			//$arguments["altera_historico"][$key] = urldecode($value);
		}	 

		$result = new wsTrabalheConosco();
		$result->executeWebService($service, $arguments);
		$resultado = $result->result->altera_historicoResult;

		$output = json_encode(array("data" => $resultado));
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}
?>
