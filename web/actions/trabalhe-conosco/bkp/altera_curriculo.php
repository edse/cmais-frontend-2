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
     
  $service = "altera_curriculo";    
           
  if(!empty($_GET['qg_curric']) && !empty($_GET['data']) && !empty($_GET['qg_nome']) && !empty($_GET['qg_cep'])){
    $qg_curric   =  $_GET['qg_curric'];
    
    if(!empty($_GET['qg_trabde']) && !empty($_GET['qg_trabat'])){
      $trabalhou_fpa_de = $_GET['qg_trabde'];
      $trabalhou_fpa_ate =$_GET['qg_trabat'];
    }else{
      //DEFAULT
      $trabalhou_fpa_de   = '01/01/1900';
      $trabalhou_fpa_ate  = '01/01/1900';
    }
    
    $arguments = array('altera_curriculo' 
                    => array('cod_curriculo' => $qg_curric,
                            'deficiente' => $_GET['qg_defic'],  
                            'nome' => $_GET['qg_nome'],  
                            'endereco' => $_GET['qg_enderec'], 
                            'complemento' => $_GET['qg_complem'], 
                            'bairro' => $_GET['qg_bairro'], 
                            'municipio' => $_GET['qg_municip'], 
                            'estado' => $_GET['qg_estado'], 
                            'cep' => $_GET['qg_cep'], 
                            'celular' => $_GET['qg_fonece'], 
                            'fone_residencial' => $_GET['qg_fonere'], 
                            'fone_comercial' => $_GET['qg_foneco'], 
                            'email' => $_GET['qg_mail'], 
                            'sexo' => $_GET['qg_sexo'], 
                            'data_nascimento' => $_GET['data'], 
                            'natural' => $_GET['qg_natural'],
                            'nacionalidade' => $_GET['qg_naciona'],  
                            'ano_chegada' => $_GET['qg_anocheg'],
                            'rg' => $_GET['qg_rg'], 
                            'rg_origem' => $_GET['qg_rgorg'], 
                            'pai' => $_GET['qg_pai'], 
                            'mae' => $_GET['qg_mae'], 
                            'estado_civil' => $_GET['qg_estciv'], 
                            'carteira_profissional' => $_GET['qg_numcp'], 
                            'carteira_serie' => $_GET['qg_sercp'], 
                            'carteira_uf' => $_GET['qg_ufcp'], 
                            'pis' => $_GET['qg_pis'], 
                            'habilitacao' => $_GET['qg_habilit'], 
                            'habilitacao_categoria' => $_GET['qg_cathab'],
                            'reservista' => $_GET['qg_reserv'], 
                            'titulo_eleitor' => $_GET['qg_tituloe'], 
                            'titulo_zona' => $_GET['qg_zonasec'],
                             
                            'area' => $_GET['qg_are'], 
                            'cargo' => $_GET['qg_cargo'], 
                            'salario_pretencao' => $_GET['qg_pretsal'], 
                            'salario_ultimo' => $_GET['qg_ultsal'], 
                            'experiencia' => $_GET['qg_memo2'], 
                            'parentes' => $_GET['qg_tempar'],
                            'trabalhou_fpa' => $_GET['qg_trabal'], 
                            
                            
                            'trabalhou_fpa_de' => $trabalhou_fpa_de,
                            'trabalhou_fpa_ate' => $trabalhou_fpa_ate,

                            'motivo_saida' => $_GET['qg_motsai'], 
                            'grupo' => $_GET['qg_grupo'])
                      );

    $result = new wsTrabalheConosco();
    $result->executeWebService($service, $arguments);
    $resultado = $result->result->altera_curriculoResult;
    echo $resultado;
    
    }  
?>
       




