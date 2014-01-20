<?php

  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  $service = "cadastra_curriculo";    
           
if(!empty($_GET['qg_nome']) && !empty($_GET['qg_nome']) && !empty($_GET['qg_cep']) && isset($_GET['callback'])){	
	$qg_pretsal = "";
	$qg_ultsal = "";
	
	if($_GET['qg_pretsal']){
		$qg_pretsal = str_replace(".", "", $_GET['qg_pretsal']);
	  $qg_pretsal = str_replace(",", ".", $qg_pretsal);
		$qg_pretsal = number_format($qg_pretsal, 2 ,'.','');
	}
	
	if($_GET['qg_ultsal']){
		$qg_ultsal = str_replace(".", "", $_GET['qg_ultsal']);
		$qg_ultsal = str_replace(",", ".", $qg_ultsal);
		$qg_ultsal = number_format($qg_ultsal, 2 ,'.','');
	}
	
 	if(!empty($_GET['qg_trabde']) && !empty($_GET['qg_trabate'])){
    $trabalhou_fpa_de = $_GET['qg_trabde'];
    $trabalhou_fpa_ate =$_GET['qg_trabate'];
  }else{
    //DEFAULT
    $trabalhou_fpa_de   = '01/01/1900';
    $trabalhou_fpa_ate  = '01/01/1900';
  }
		
		
  $arguments = array('cadastra_curriculo' 
                    => array(
                			'cpf'		 	=> $_GET['cpf'],
                        	'deficiente' 	=> $_GET['qg_defic'],  
                            'nome' 			=> $_GET['qg_nome'],  
                            'endereco' 		=> $_GET['qg_enderec'], 
                            'complemento'   => $_GET['qg_complem'], 
                            'bairro' 		=> $_GET['qg_bairro'], 
                            'municipio' 	=> $_GET['qg_municip'], 
                            'estado' 		=> $_GET['qg_estado'], 
                            'cep' 			=> $_GET['qg_cep'], 
                            'celular' 		=> $_GET['qg_fonece'], 
                         'fone_residencial' => $_GET['qg_fonere'], 
                         'fone_comercial'   => $_GET['qg_foneco'], 
 							
                            'email' 		=> $_GET['qg_mail'], 
                            'sexo' 			=> $_GET['qg_sexo'], 
                          'data_nascimento' => $_GET['data'], 
                            'natural' 		=> $_GET['qg_natural'],
                            'nacionalidade' => $_GET['qg_naciona'],  
                            'ano_chegada' 	=> $_GET['qg_anocheg'],
                            'rg' 			=> $_GET['qg_rg'], 
                            'rg_origem' 	=> $_GET['qg_rgorg'], 
                            'pai' 			=> $_GET['qg_pai'], 
                            'mae' 			=> $_GET['qg_mae'], 
                            'estado_civil' 	=> $_GET['qg_estciv'], 
                    'carteira_profissional' => $_GET['qg_numcp'], 
                    'carteira_serie' 		=> $_GET['qg_sercp'], 
                    'carteira_uf' 			=> $_GET['qg_ufcp'], 
                    'pis' 					=> $_GET['qg_pis'], 
                    'habilitacao' 			=> $_GET['qg_habilit'], 
                    'habilitacao_categoria' => $_GET['qg_cathab'],
                    'reservista' 			=> $_GET['qg_reserv'], 
                    'titulo_eleitor' 		=> $_GET['qg_tituloe'], 
                    'titulo_zona' 			=> $_GET['qg_zonasec'],
                     
                        'area' 				=> "999", 
                        //'cargo' 			=> $_GET['qg_cargo'], 
                        'salario_pretencao' => $_GET['qg_pretsal'], 
                        'salario_ultimo' 	=> $_GET['qg_ultsal'], 
                        'experiencia' 		=> urldecode($_GET['qg_memo2']), 
                        'parentes' 			=> $_GET['qg_tempar'],
                        'trabalhou_fpa' 	=> $_GET['qg_trabal'], 

                        'trabalhou_fpa_de' 	=> $trabalhou_fpa_de,
                        'trabalhou_fpa_ate' => $trabalhou_fpa_ate,

                        'motivo_saida' 		=> $_GET['qg_motsai'], 
                        'grupo' 			=> $_GET['qg_grupo']));

		foreach($arguments["cadastra_curriculo"] as $key=>$value){
			//$arguments["cadastra_curriculo"][$key] = urldecode($value);
		}	  

    $result = new wsTrabalheConosco();
    $result->executeWebService($service, $arguments);
    $resultado = $result->result->cadastra_curriculoResult;
    
	$output = json_encode(array("data" => $resultado));
	$callback = $_GET['callback'];
	echo $callback.'('. $output . ');';	
}	
?>
       
