<?php
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");

  if(!empty($_GET['tipo']) && isset($_GET['callback'])) {
    $service = "cursos";         
    $arguments = array('cursos' => array('tipo' => $_GET['tipo']));
    $acao = new wsTrabalheConosco();
    $acao->executeWebService($service, $arguments);
    $result_function = $service."Result";//NOME DO METOD DE RESULTADO
    $xml = $acao->result->$result_function->any;
	  $xml = simplexml_load_string($xml);
		$cursos = null;
		
		foreach ($xml->NewDataSet->cursos as $x){
			$cursos[] = array("cursos" => 
									array("qt_curso" => (string)$x->QT_CURSO, 
										    "qt_descric" =>  (string)trim($x->QT_DESCRIC))
								);		
		}
		$output = json_encode(array("data" => $cursos));
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
  }
?>

 