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
     
   $service = "cadastra_curriculo";    
           
   $arguments = array('cadastra_curriculo' 
                    => array('cpf' => "67132493701",
                            'deficiente' => "1",  
                            'nome' => 'Joseval Carvalho Lima',  
                            'endereco' => 'Manuel Álvares Pimentel, 200', 
                            'complemento' => 'casa13', 
                            'bairro' => 'Itaim Paulista', 
                            'municipio' => 'São Paulo', 
                            'estado' => 'SP', 
                            'cep' => '08141-000', 
                            'celular' => '11-98319-4313', 
                            'fone_residencial' => '11-98319-4313', 
                            'fone_comercial' => '11-2025-0436', 
                            'email' => 'josevals@terra.com.br', 
                            'sexo' => 'M', 
                            'data_nascimento' => '04/02/1980', 
                            'natural' => 'BA',
                            'nacionalidade' => '10',  
                            'ano_chegada' => '2000',
                            'rg' => '33865258-9/SSP', 
                            'rg_origem' => 'ssp', 
                            'pai' => 'Irailson Alves Lima', 
                            'mae' => 'Mariazinha de Carvalho Lima', 
                            'estado_civil' => 'S', 
                            'carteira_profissional' => '061579', 
                            'carteira_serie' => '294', 
                            'carteira_uf' => 'sp', 
                            'pis' => '13501798937', 
                            'habilitacao' => '3577439917', 
                            'habilitacao_categoria' => 'AE',
                            'reservista' => '040074005782', 
                            'titulo_eleitor' => '328299930167', 
                            'titulo_zona' => '398/0009', 
                            'area' => "067", 
                            'cargo' => "00322", 
                            'salario_pretencao' => 3400, 
                            'salario_ultimo' => 2450, 
                            'experiencia' => 'Analista de Publicidade', 
                            'parentes' => 'N',
                            'trabalhou_fpa' => 'N', 
                            'trabalhou_fpa_de' => '04/03/2007', 
                            'trabalhou_fpa_ate' => '04/03/2008', 
                            'motivo_saida' => '0', 
                            'grupo' => '01'));


    $result = new wsTrabalheConosco();
    $result->executeWebService($service, $arguments);
    $resultado = $result->result->cadastra_curriculoResult;
    //print_r($result);
    //print_r($arguments);
    echo $resultado;
    //print_r($result);  
?>
       




