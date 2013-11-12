<?php
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  
  if(isset($_GET['callback']) && !empty($_GET['codigo'])){
		$service = "deleta_curso";    
		$codigo = $_GET['codigo'];
		$arguments = array('deleta_curso' 
                    => array('codigo' => $codigo));
	  
	  $acao = new wsTrabalheConosco();
	  $acao->executeWebService($service, $arguments);
	  $result_function = $service."Result";
	  $resultado = $acao->result->$result_function;
		
		$output = json_encode(array("data" => $resultado));
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';
	}else{
		echo "Informe o código do histórico";
	}
?>
