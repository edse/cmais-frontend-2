<?php
$filename = $_REQUEST["fpa_cpf"]."_".$_REQUEST["fpa_pis"].".pdf";
$link 		= "cmais.com.br/fpa/informe-de-rendimentos/downloads";
$file 		= "/var/frontend/web/cache/".$link."/".$filename;
//$file = "/var/frontend/web/cache/".$link."/".88239794556_012345678910.pdf";

if(is_file($file)){
	$return = "http:/".$link."/".$filename;
}else{
	$return = "0";
}

if(isset($_REQUEST["callback"])){
	$callback = $_REQUEST["callback"];
	$json = json_encode(array("data"=>$return));
	echo $callback . "(". $json .")";
}
