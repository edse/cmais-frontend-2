<?php
header("Content-Type: text/html;charset=utf8");
include_once("wsTrabalheConosco.class.php");

if(isset($_GET['callback']) && !empty($_GET['qg_curric']) && !empty($_GET['qm_codigo']) && !empty($_GET['qm_entidad']) && !empty($_GET['qm_data']) && !empty($_GET['qm_curso']) && !empty($_GET['qm_tcurso']) && !empty($_GET['qm_escolar']) && !empty($_GET['qm_dscout'])){
	$service = "altera_curso";    
	$arguments = array('altera_curso' 
											=> array(	 'codigo'					=> 	$_GET['qm_codigo'],
																 'cod_curriculo'	=> 	$_GET['qg_curric'], 
                                 'entidade' 			=> 	$_GET['qm_entidad'],
                                 'data' 					=> 	$_GET['qm_data'],
                                 'cod_curso' 			=> 	$_GET['qm_curso'],
                                 'cod_tipo' 			=> 	$_GET['qm_tcurso'],
                                 'cod_escolar' 		=> 	$_GET['qm_escolar'],
                                 'descricao' 			=> 	$_GET['qm_dscout']
                     ));

	  $acao = new wsTrabalheConosco();
	  $acao->executeWebService($service, $arguments);
	  $result_function = $service."Result";//NOME DO METOD DE RESULTADO
	  $resultado = $acao->result->$result_function;
		$output = json_encode(array("data" => $resultado));
	
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
}
?>
