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
     
    $service = "insere_curso";
    $cod_curriculo = 51901;
   
    $arguments = array('insere_curso' => array('cod_curriculo' => $cod_curriculo,
                                                'entidade' => "FATEC TESTE",
                                                'data' => "04/10/2000",
                                                'cod_curso' => "00020",    
                                                'cod_tipo' => "003",
                                                'cod_escolar' => "02"));

    $acao = new wsTrabalheConosco();
    $acao->executeWebService($service, $arguments);
    
    $result_function = $service."Result";//NOME DO METOD DE RESULTADO
    
    $xml = $acao->result->$result_function;
    
    //header("Content-Type: text/xml;charset=utf8");
    
    print_r($xml);
    //$xml = simplexml_load_string($xml);
    //echo $xml; 
        //$array = $xml->NewDataSet->seleciona_cursosResult;
      
   // }else{
      
     // echo "erro ao inserir histórico";
  // }
  
    
?>