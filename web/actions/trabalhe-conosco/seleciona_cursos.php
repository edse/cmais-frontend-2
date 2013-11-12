<?php
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  if(!empty($_GET['qg_curric']) && isset($_GET['callback'])){
    $cod_curriculo = $_GET['qg_curric'];
    $service = "seleciona_cursos";
    $arguments = array('seleciona_cursos' => array('cod_curriculo' => $cod_curriculo));
    $acao = new wsTrabalheConosco();
    $acao->executeWebService($service, $arguments);
    $result_function = $service."Result";
    $xml = $acao->result->$result_function->any;
	  $xml = simplexml_load_string($xml);
		$cursos = null;
		foreach ($xml->NewDataSet->cursos as $x){
			
			$data = explode("-", $x->qm_data);
			$qm_data = substr($data[2],-11, 2)."/".$data[1]."/".$data[0];			
			
			$cursos[] = array("cursos" => 
									array("qm_codigo" => (string)$x->qm_codigo, 
										    "qm_entidad" =>  (string)trim($x->qm_entidad),
												"qm_data" =>  (string)trim($qm_data),
												"qm_dscout" =>  (string)trim($x->qm_dscout),
												"qm_escolar" =>  (string)trim($x->qm_escolar),
												"qm_curso" =>  (string)trim($x->qm_curso),
												"qm_tcurso" =>  (string)trim($x->qm_tcurso),
												)
								);		
		}
		//$cursos = array_reverse($cursos);
		
		$output = json_encode(array("data" => $cursos));
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	} 
    
?>
