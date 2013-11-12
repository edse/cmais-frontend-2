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
     
   /*
     * 
     *  SELECIONA CURSOS 
     * 
   */
  
  //$cod_curriculo = 51903;
  if(!empty($_GET['cod_curriculo'])){
    $cod_curriculo = $_GET['cod_curriculo'];
    $service = "seleciona_cursos";
    $arguments = array('seleciona_cursos' => array('cod_curriculo' => $cod_curriculo));
  
    $acao = new wsTrabalheConosco();
    $acao->executeWebService($service, $arguments);
    
    $result_function = $service."Result";
   
    $xml = $acao->result->$result_function->any;
    
    header("Content-Type: text/xml;charset=utf8");
    
    print_r($xml);
    $xml = simplexml_load_string($xml);
        
    //$array = $xml->NewDataSet->seleciona_cursosResult;
      
   }else{
     echo "Informe o código do currículo";
   } 
    
    
    
?>
       




