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
     *  INSERE HISTÓRICOS
     * 
   */
  // if(!empty($_GET['codigo']) && !empty($_GET['funcao']) && !empty($_GET['data_admissao']) && !empty($_GET['data_demissao']) && !empty($_GET['experiencia']) && !empty($_GET['empresa']) && !empty($_GET['funcao_inicial'])){
     
  
     
     $service = "altera_historico";    
     $arguments = array('altera_historico' 
                    => array( 'codigo' => 114061,
                              'data_admissao' => "10/12/2010",  
                              'data_demissao' => "12/12/2011",  
                              'experiencia' => "Websites", 
                              'empresa' => "Terra", 
                              'funcao' => "Teste", 
                              'funcao_inicial' => "Inicial", 
                          ));
  
      $result = new wsTrabalheConosco();
      $result->executeWebService($service, $arguments);
      $resultado = $result->result->altera_historicoResult;
     
      echo $resultado;
      
      if($resultado == 1){
         echo " - Inserido com sucesso" ; 
      }//else{
        //echo "Erro ao inserir histórico";
     // }
     
  // }else{
     //echo "Informe os dados para cadastro do histórico";
     
  // }
   

?>
