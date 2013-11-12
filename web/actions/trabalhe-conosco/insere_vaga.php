<?php
	header("Content-Type: text/html;charset=utf8");
	include_once("wsTrabalheConosco.class.php");

	if(isset($_GET['callback']) && !empty($_GET['qg_curric']) && !empty($_GET['cod_vaga'])){	
		$service = "insere_vaga";
		$arguments = array('insere_vaga' 
												=> array('cod_curriculo'	=> $_GET['qg_curric'], 
	                                 'cod_vaga' 		=> $_GET['cod_vaga'],
																));
	  $acao = new wsTrabalheConosco();
	  $acao->executeWebService($service, $arguments);
	  $result_function = $service."Result";
	  $resultado = trim($acao->result->$result_function);

		if($resultado == "000000000000"){
			$resultado = "Você já se cadastrou para esta vaga";
		}else if(substr($resultado, 0,4) == "erro" || $resultado == false){
			$resultado = "Vaga selecionada já foi finalizada";	
		}else if(strlen($resultado) < 0){
			$resultado = "Erro no código do currículo";
		}else{
			$resultado = "Vaga cadastrada com sucesso";
		}
		$output = json_encode(array("data" => $resultado));
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}
		
?>




