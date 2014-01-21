<?php
	header("Content-Type: text/html;charset=utf8");
	include_once("wsTrabalheConosco.class.php");

	if(isset($_GET['callback']) && !empty($_GET['qg_curric']) && !empty($_GET['qm_entidad']) && !empty($_GET['qm_data']) && !empty($_GET['qm_curso']) && !empty($_GET['qm_tcurso']) && !empty($_GET['qm_escolar'])){
			
		$qm_dscout = " ";
		if(@$_GET['qm_dscout'] != "" ) $qm_dscout = $_GET['qm_dscout'];
				
		$service = "insere_curso";
		$arguments = array('insere_curso' 
												=> array('cod_curriculo'	=> $_GET['qg_curric'], 
	                                 'entidade' 		=> urldecode($_GET['qm_entidad']),
	                                 'data' 				=> $_GET['qm_data'],
	                                 'cod_curso' 		=> $_GET['qm_curso'],
	                                 'cod_tipo' 		=> $_GET['qm_tcurso'],
	                                 'cod_escolar' 	=> $_GET['qm_escolar'],
	                                 'descricao' 		=> urldecode($qm_dscout)));
	  
		
		foreach($arguments["insere_curso"] as $key=>$value){
			//$arguments["insere_curso"][$key] = urldecode($value);
		}	  
	  
	  $acao = new wsTrabalheConosco();
	  $acao->executeWebService($service, $arguments);
	  $result_function = $service."Result";//NOME DO METOD DE RESULTADO
	  $resultado = $acao->result->$result_function;
		$output = json_encode(array("data" => $resultado));
	
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}
?>