<?php
  //CLASS WEB SERVICE
  class wsTrabalheConosco{
    public $client;
    public $options;
    public $result;
    //FUNÇÃO PARA CONSULTAR WEBSERVICE
    public function executeWebService($service,$arguments){
      $this->client  = new SoapClient("http://intranet.tvcultura.com.br/curriculos_webservices/curriculos.asmx?WSDL");
      $this->options  = array('location' => 'http://intranet.tvcultura.com.br/curriculos_webservices/curriculos.asmx');
      $this->result =  $this->client->__soapCall($service, $arguments, $this->options);    
    } 
  } 
?>