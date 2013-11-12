<?php

  header("Content-Type: text/html;charset=utf8");

  //CLASS WEB SERVICE
  class wsTrabalheConosco{
    public $client;
    public $options;
    public $result;
    //FUNÇÃO PARA CONSULTAR WEBSERVICE
    public function executeWebService($service,$arguments){
      $this->client  = new SoapClient("http://intranetantiga/ws_curriculos/Curriculos.asmx?WSDL");
      $this->options  = array('location' => 'http://intranetantiga/ws_curriculos/Curriculos.asmx');
      $this->result =  $this->client->__soapCall($service, $arguments, $this->options);    
    } 
  } 
     
  $service = "departamentos";         
  $arguments = array('');
  
  $acao = new wsTrabalheConosco();
  $acao->executeWebService($service, $arguments);
  
  $result_function = $service."Result";//NOME DO METOD DE RESULTADO
   
  $xml = $acao->result->$result_function->any;
    
  header("Content-Type: text/xml;charset=utf8");
  
  print_r($xml);
  //$xml = simplexml_load_string($xml);
  
  //$array = $xml->NewDataSet;

  //print_r($array);
    
?>
