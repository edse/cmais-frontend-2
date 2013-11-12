<?php

  header("Content-Type: text/html;charset=utf8");

  //CLASS WEB SERVICE
  class wsTrabalheConosco{
    public $client;
    public $options;
    public $result;
    //FUNÇÃO PARA CONSULTAR WEBSERVICE
    public function executeWebService($service,$arguments){
      $this->client  = new SoapClient("http://intranetnova/ws_curriculos/Curriculos.asmx?WSDL");
      $this->options  = array('location' => 'http://intranetnova/ws_curriculos/Curriculos.asmx');
      $this->result =  $this->client->__soapCall($service, $arguments, $this->options);    
    } 
  } 
     

        
  if(!empty($_GET['codigo'])){
    
    $codigo = $_GET['codigo'];
    
    $service = "seleciona_historico";
    $arguments = array('seleciona_historico' => array('codigo' => $codigo));

    $acao = new wsTrabalheConosco();
    $acao->executeWebService($service, $arguments);
    
    $result_function = $service."Result";//NOME DO METOD DE RESULTADO
   
    $xml = $acao->result->$result_function->any;
    
    header("Content-Type: text/xml;charset=utf8");
    
    print_r($xml);
    //$xml = simplexml_load_string($xml);
  
   }else{
     echo "Informe o código do currículo";
   }  
    
?>
       




