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
     *  DELETA HISTORICO
     * 
   */
   
   if(!empty($_GET['codigo'])){

     $service = "deleta_historico";    
     
     $codigo = $_GET['codigo'];
     $arguments = array('deleta_historico' 
                    => array( 'codigo' => $codigo));
  
      $result = new wsTrabalheConosco();
      $result->executeWebService($service, $arguments);
      $resultado = $result->result->deleta_historicoResult;
      echo $resultado;
      
      if($resultado == 1){
         //echo "Excluído com sucesso" ; 
      }else{
        //echo "Erro ao excluído histórico";
      }
     
   }else{
     echo "Informe o código do currículo";
     
   }
   

?>
