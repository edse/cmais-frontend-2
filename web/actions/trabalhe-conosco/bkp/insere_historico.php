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
   if(!empty($_GET['cod_curriculo']) && !empty($_GET['funcao']) && !empty($_GET['data_admissao']) && !empty($_GET['data_demissao']) && !empty($_GET['experiencia']) && !empty($_GET['empresa']) && !empty($_GET['funcao_inicial'])){
     
     $cod_curriculo = $_GET['cod_curriculo'];
     $data_admissao = $_GET['data_admissao'];
     $data_demissao = $_GET['data_demissao'];
     $experiencia = $_GET['experiencia'];
     $empresa = $_GET['empresa'];
     $funcao = $_GET['funcao'];
     $funcao_inicial = $_GET['funcao_inicial'];
     
     $service = "insere_historico";    
     $arguments = array('insere_historico' 
                    => array( 'cod_curriculo' => $cod_curriculo,
                              'data_admissao' => $data_admissao,  
                              'data_demissao' => $data_demissao,  
                              'experiencia' => $experiencia, 
                              'empresa' => $empresa, 
                              'funcao' => $funcao, 
                              'funcao_inicial' => $funcao_inicial, 
                          ));
  
      $result = new wsTrabalheConosco();
      $result->executeWebService($service, $arguments);
      $resultado = $result->result->insere_historicoResult;
     
      echo $resultado;
      
      if($resultado == 1){
         //echo "Inserido com sucesso" ; 
      }else{
        //echo "Erro ao inserir histórico";
      }
     
   }else{
     //echo "Informe os dados para cadastro do histórico";
     
   }
   

?>
