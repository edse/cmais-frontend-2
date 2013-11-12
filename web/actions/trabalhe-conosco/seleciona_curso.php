<?php
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  
  if(!empty($_GET['codigo']) && isset($_GET['callback'])){
    $cod_curriculo = $_GET['codigo'];
    $service = "seleciona_curso";
    $arguments = array('seleciona_curso' => array('codigo' => $cod_curriculo));
    $acao = new wsTrabalheConosco();
    $acao->executeWebService($service, $arguments);
    $result_function = $service."Result";
    $xml = $acao->result->$result_function->any;
	  $xml = simplexml_load_string($xml);
		$curso = null;
		foreach ($xml->NewDataSet->curso as $x){
			
			$data = explode("-", $x->qm_data);
			$qm_data = substr($data[2],-11, 2)."/".$data[1]."/".$data[0];
						
			$curso = array("curso" => 
									array("qm_codigo" 	=> (string)$x->qm_codigo, 
										    "qm_entidad" 	=>  (string)trim($x->qm_entidad),
												"qm_data" 		=>  (string)trim($qm_data),
												"qm_dscout" 	=>  (string)trim($x->qm_dscout),
												"qm_escolar" 	=>  (string)trim($x->qm_escolar),
												"qm_curso" 		=>  (string)trim($x->qm_curso),
												"qm_tcurso" 	=>  (string)trim($x->qm_tcurso),
												)
								);		
		}
		$output = json_encode(array("data" => $curso));
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	} 
    
?>
