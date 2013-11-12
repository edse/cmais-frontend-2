<?php   
  //sleep(3);
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
  
  
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if(!empty($_REQUEST['service'])){
    
      // METHOD VALIDA_USUARIO - 13914773405
      $service = $_REQUEST['service'];
              
      if($service == 'valida_usuario'){
        
        if(!empty($_REQUEST['cpf']) && !empty($_REQUEST['data'])){
          
          $cpf = @strip_tags($_REQUEST['cpf']);
          $data = @strip_tags($_REQUEST['data']);

          $service = "valida_usuario";
          $arguments = array('valida_usuario' => array('cpf' => $cpf, 'data' => $data));
          
          $result = new wsTrabalheConosco();
          $result->executeWebService($service, $arguments);
          //$result_function = $service."Result";
          $resultado = $result->result->valida_usuarioResult;
          //$_SESSION['resultado'] = $resultado;    
          //print_r($resultado);
          
            
          if($resultado == 2){ //SE ENCONTRAR O CADASTRO
            //echo $resultado;    
              
            //RETORNAR OS DADOS DO CURRÍCULO RELACIONADO AO CPF/DATA
            $service = "seleciona_curriculo";
            $arguments = array('seleciona_curriculo' => array('cpf' => $cpf, 'data_nascimento' => $data));

            $acao = new wsTrabalheConosco();
            $acao->executeWebService($service, $arguments);
            
            $result_function = $service."Result";//NOME DO METOD DE RESULTADO
           
            $xml = $acao->result->$result_function->any;
            
            header("Content-Type: text/xml;charset=utf8");
            
            print_r($xml);
            $xml = simplexml_load_string($xml);
            
            $array = $xml->NewDataSet->curriculo;
            //print_r($array);
          }else{
            echo "Usuário Não Registrado";
          }

        }else{
          echo "Preencha os CPF e Data de Nascimento Corretamente";
        }

        // METHOD CADASTRA CURRÍCULO     
       }else if($service == 'cadastra_curriculo'){
        
        
          //if(!empty($_GET['cpf']) && !empty($_GET['data']) && !empty($_GET['qg_nome']) && !empty($_GET['qg_cep']) && !empty($_GET['qg_fonece'])){
          if(!empty($_GET['cpf']) && !empty($_GET['data'])){
                  
            $cpf         =  $_GET['cpf'];
            $data        =  $_GET['data'];
           //$qg_curric   =  $_GET[''];
            $qg_defic    =  $_GET['qg_defic'];
            $qg_nome     =  $_GET['qg_nome'];
            $qg_enderec  =  $_GET['qg_enderec'];
            $qg_complem  =  $_GET['qg_complem'];
            $qg_bairro   =  $_GET['qg_bairro'];
            $qg_municip  =  $_GET['qg_municip'];
            $qg_estado   =  $_GET['qg_estado'];
            $qg_cep      =  $_GET['qg_cep'];
            $qg_fonece   =  $_GET['qg_fonece'];
            $qg_fonere   =  $_GET['qg_fonere'];
            $qg_mail     =  $_GET['qg_mail'];
   
            $qg_sexo     =  $_GET['qg_sexo'];
            $qg_natural  =  $_GET['qg_natural'];;
            $qg_naciona  =  $_GET['qg_naciona'];
            $qg_rg       =  $_GET['qg_rg'];
            $qg_rgorg    =  $_GET['qg_rgorg'];
            $qg_pai      =  $_GET['qg_pai'];
            $qg_mae      =  $_GET['qg_mae'];
            $qg_estciv   =  $_GET['qg_estciv'];
            $qg_numcp    =  $_GET['qg_numcp'];
            $qg_sercp    =  $_GET['qg_sercp'];
            $qg_ufcp     =  $_GET['qg_ufcp'];
            $qg_pis      =  $_GET['qg_pis'];
            $qg_habilit  =  $_GET['qg_habilit'];
            $qg_cathab   =  $_GET['qg_cathab'];
            
            $qg_reserv   =  $_GET['qg_reserv'];
            $qg_tituloe  =  $_GET['qg_tituloe'];
            $qg_zonasec  =  $_GET['qg_zonasec'];
            //$qg_are      =  $_GET['qg_are'];
            //$qg_cargo    =  $_GET['qg_cargo'];
            $qg_are      =  "Multimidia";
            $qg_cargo    =  "Analista Programador";            
            $qg_pretsal  =  $_GET['qg_pretsal'];
            $qg_ultsal   =  $_GET['qg_ultsal'];
            $qg_memo2    =  $_GET['qg_memo2'];
            $qg_tempar   =  $_GET['qg_tempar'];
            $qg_trabal   =  $_GET['qg_trabal'];
            $qg_motsai   =  $_GET['qg_motsai'];
            $qg_grupo    =  $_GET['qg_grupo'];
            
            $service = "cadastra_curriculo";
           
           /* $arguments = array('cadastra_curriculo' => array('cpf' => $cpf, 'data_nascimento' => $data, 'deficiente' => $qg_defic, 'nome' => $qg_nome, 
            'endereco' => $qg_enderec, 'complemento' => $qg_complem, 'bairro' => $qg_bairro, 'municipio' => $qg_municip, 'estado' => $qg_estado, 
            'cep' => $qg_cep, 'celular' => $qg_fonece, 'fone_residencial' => $qg_fonere, 'email' => $qg_mail, 'sexo' => $qg_sexo, 'natural' => $qg_natural,
            'nacionalidade' => $qg_naciona,
            'rg' => $qg_rg, 'rg_origem' => $qg_rgorg, 'pai' => $qg_pai, 'mae' => $qg_mae, 'estado_civil' => $qg_estciv, 'carteira_profissional' => $qg_numcp, 
            'carteira_serie' => $qg_sercp, 'carteira_uf' => $qg_ufcp, 'pis' => $qg_pis, 'habilitacao' => $qg_habilit, 'habilitacao_categoria' => $qg_cathab,
            'reservista' => $qg_reserv, 'titulo_eleitor' => $qg_tituloe, 'titulo_zona' => $qg_zonasec, 'area' => $qg_are, 'cargo' => $qg_cargo, 
            'salario_pretencao' => $qg_pretsal, 'salario_ultimo' => $qg_ultsal, 'experiencia' => $qg_memo2, 'parentes' => $qg_tempar,
            'trabalhou_fpa' => $qg_trabal, 'motivo_saida' => $qg_motsai, 'grupo' => $qg_grupo));
            */

            
            $arguments = array('cadastra_curriculo' => array( 'cpf' => '67132493701',
                                                              'deficiente' => '1',  
                                                              'nome' => 'nome',  
                                                              'endereco' => 'minha rua', 
                                                              'complemento' => 'casa', 
                                                              'bairro' => 'bairro', 
                                                              'municipio' => 'municipio', 
                                                              'estado' => 'estado', 
                                                              'cep' => 'cep', 
                                                              'celular' => '9999-9999', 
                                                              'fone_residencial' => '5555-5555', 
                                                              'fone_comercial' => '2222-2222', 
                                                              'email' => 'email@provedor', 
                                                              'sexo' => 'M', 
                                                              'data_nascimento' =>  '04/03/1980', 
                                                              'natural' => 'campo-formoso',
                                                              'nacionalidade' => 'brasileira',  
                                                              'ano_chegada' => '2000',
                                                              'rg' => '4455577700', 
                                                              'rg_origem' => 'ssp', 
                                                              'pai' => 'nome do pai', 
                                                              'mae' => 'nome da me', 
                                                              'estado_civil' => 'solteiro', 
                                                              'carteira_profissional' => '123', 
                                                              'carteira_serie' => '298', 
                                                              'carteira_uf' => 'sp', 
                                                              'pis' => '12345', 
                                                              'habilitacao' => '341543', 
                                                              'habilitacao_categoria' => 'AE',
                                                              'reservista' => '12', 
                                                              'titulo_eleitor' => '3', 
                                                              'titulo_zona' => '4', 
                                                              'area' => '9', 
                                                              'cargo' => '8', 
                                                              'salario_pretencao' => '490', 
                                                              'salario_ultimo' => '330', 
                                                              'experiencia' => 'minhas experiencias', 
                                                              'parentes' => 'N',
                                                              'trabalhou_fpa' => 'N', 
                                                              'trabalhou_fpa_de' => '04/03/2007', 
                                                              'trabalhou_fpa_ate' => '04/03/2008', 
                                                              'motivo_saida' => '0', 
                                                              'grupo' => '01'));
            
            //echo ($arguments);
            //CAMPOS RESTANTES DO FORM
            //fone_comercial, ano_chegada,trabalhou_fpa_de, trabalhou_fpa_ate
         
            $result = new wsTrabalheConosco();
            $result->executeWebService($service, $arguments);
            $resultado = $result->result->cadastra_curriculoResult;
            print_r($result);
            //echo $resultado;  
            
          }else{
              echo "Preencha todos os dados corretamente";
          }
        
        
        
        }else{
          echo "Serviço ".$_REQUEST['service']." não existe";
        }
         
      }else{
        //echo "Nenhum serviço selecionado";
      }
    }else{
      echo "Requisição Inválida";
    }
    
?>