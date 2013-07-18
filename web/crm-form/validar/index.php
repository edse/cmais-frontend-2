<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

if(!$_REQUEST["id"]){
  header("Location: http://cmais.com.br");
}

//turn off WSDP caching if not in a production environment
$ini = ini_set("soap.wsdl_cache_enabled","0");
//instantiate the SOAP client
$client = new SoapClient("http://intranet3/crm_webservices/crm.asmx?WSDL");

//CHECK EMAIL
$result = $client->valida_usuario(array('id'=>$_REQUEST["id"]));
if($result->valida_usuarioResult != " " && $result->valida_usuarioResult != ""){
  //header("Location: http://172.20.17.129/frontend_dev.php/central-de-relacionamento?step=1&email=".$result->valida_usuarioResult);
  header("Location: http://cmais.com.br/frontend_dev.php/central-de-relacionamento?step=1&email=".$result->valida_usuarioResult);
}
else{
  //header("Location: http://172.20.17.129/frontend_dev.php/central-de-relacionamento?erro=1");
  header("Location: http://cmais.com.br/frontend_dev.php/central-de-relacionamento?erro=1");
}
die();
