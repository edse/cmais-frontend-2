<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

//turn off WSDP caching if not in a production environment
$ini = ini_set("soap.wsdl_cache_enabled","0");
//instantiate the SOAP client
$client = new SoapClient("http://intranet3/crm_webservices/crm.asmx?WSDL");

$arr = array(
  'nome'                  =>  "asd fads", 
  'email'                 =>  "asdfasdfasdf@asdfasdf.com", 
  'documento'             =>  "",
  'cod_faixaetaria'       =>  1,
  'exterior'              =>  false,
  'localexterior'         =>  "", 
  'local'                 =>  27057,
  'cod_recepcaodesinal'   =>  1,
  'cod_sexo'              =>  1,
  'endereco'              =>  "",
  'complemento'           =>  "",
  'numero'                =>  "",
  'ddd'                   =>  "11",
  'telefone'              =>  "1234567",
  'cep'                   =>  "",
  'bairro'                =>  "",
  'sms'                   =>  false,
  'newsletter'            =>  false,
  'convite'               =>  false,
  'terceiros'             =>  false,
  'twitter'               =>  "",
);

$result = $client->cadastra_pessoa($arr);

echo "<h3>Values:</h3>";
echo "<pre>";
var_dump($arr);
echo "</pre>";
echo "<h3>Result:</h3>";
echo "<pre>";
var_dump($result->cadastra_pessoaResult);
die();
