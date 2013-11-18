<?php

header("Content-Type: text/html;charset=utf8");
include_once("wsTrabalheConosco.class.php");

if(!empty($_GET['cod_curriculo'])){

	$service = "seleciona_historicos";    
	$cod_curriculo = $_GET['cod_curriculo'];
	$arguments = array('seleciona_historicos' => array('cod_curriculo' => $cod_curriculo));

	$acao = new wsTrabalheConosco();
	$acao->executeWebService($service, $arguments);
	$result_function = $service."Result";
	$xml = $acao->result->$result_function->any;
	$xml = simplexml_load_string($xml);
	
	$historicos = null;
	
	foreach ($xml->NewDataSet->historicos as $x){
		
		$d_adm = explode("-", $x->ql_dtadmis);
		$d_dem = explode("-", $x->ql_dtdemis);
		
		$ql_dtadmis = substr($d_adm[2],-11, 2)."/".$d_adm[1]."/".$d_adm[0];
		$ql_dtdemis = substr($d_dem[2],-11, 2)."/".$d_dem[1]."/".$d_dem[0];
		
	$historicos[] = array("historicos" => 
									array(//"ql_curric" 	=> 	(string)$x->ql_curric, 
										    "ql_codigo" 	=>  (string)$x->ql_codigo,
												"ql_dtadmis" 	=>  $ql_dtadmis,
												"ql_dtdemis" 	=>  $ql_dtdemis,
										 		"ql_experiencia" =>  (string)$x->ql_experiencia,
												"ql_empresa" 	=>  (string)$x->ql_empresa,
												"ql_funcini" 	=>  (string)$x->ql_funcini,
												"ql_funcao" 	=>  (string)$x->ql_funcao,
										)
							);
	}
	
	$output = json_encode(array("data" => $historicos));

	if(isset($_GET['callback'])){
		$callback = $_GET['callback'];
		echo $callback.'('. $output . ');';	
	}	
  
}else{
	//echo "Informe o código do currículo";
}   
	 
	 
?>
