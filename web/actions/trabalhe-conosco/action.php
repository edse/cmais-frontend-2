<?php   
  header("Content-Type: text/html;charset=utf8");
  include_once("wsTrabalheConosco.class.php");
  if(!empty($_GET['service']) && !empty($_GET['callback']) && !empty($_GET['fpa_cpf']) && !empty($_GET['fpa_data'])){
      // METHOD VALIDA_USUARIO - 13914773405
      $callback = $_GET['callback'];
      $service = $_GET['service'];
      if($service == 'valida_usuario'){
		     	$cpf = @strip_tags($_GET['fpa_cpf']);
		      $data = @strip_tags($_GET['fpa_data']);
		      $service = "valida_usuario";
		      $arguments = array('valida_usuario' => array('cpf' => $cpf, 'data' => $data));
		      $result = new wsTrabalheConosco();
		      $result->executeWebService($service, $arguments);
		      $result_function = $service."Result";
		      $resultado = $result->result->$result_function;
		  	  //SE ENCONTRAR O CADASTRO
	  	    if($resultado == 2){
		        //RETORNAR OS DADOS DO CURRÍCULO RELACIONADO AO CPF/DATA
		        $service = "seleciona_curriculo";
		        $arguments = array('seleciona_curriculo' => array('cpf' => $cpf, 'data_nascimento' => $data));
		        $acao = new wsTrabalheConosco();
		        $acao->executeWebService($service, $arguments);
		        $result_function = $service."Result";
		        $xml = $acao->result->$result_function->any;
					  $xml = simplexml_load_string($xml);
						$curriculo = null;
					
						foreach ($xml->NewDataSet->curriculo as $x){
							$data_de 		= explode("-", $x->qg_trabde);
							$d_ate 			= explode("-", $x->qg_trabate);
							$qg_trabde 	= substr($d_ate[2],-11, 2)."/".$d_ate[1]."/".$d_ate[0];
							$qg_trabate = substr($d_ate[2],-11, 2)."/".$d_ate[1]."/".$d_ate[0];
							
		 					$curriculo = array("curriculo" => 
										array( 
										"qg_curric" 	=> (string)$x->qg_curric,
										//"qg_cic" 		=> (string)$x->qg_cic,
										//"qg_dtalt" 	=> (string)$x->qg_dtalt,
										//"qg_dtcad" 	=> (string)$x->qg_dtcad,
										"qg_defic" 		=> (string)$x->qg_defic,
										"qg_nome" 		=> (string)$x->qg_nome,
										"qg_enderec"	=> (string)$x->qg_enderec,
										"qg_complem" 	=> (string)$x->qg_complem,
										"qg_bairro" 	=> (string)$x->qg_bairro,
										"qg_municip" 	=> (string)$x->qg_municip,
										"qg_estado"	 	=> (string)$x->qg_estado,
										"qg_cep" 			=> (string)$x->qg_cep,
										"qg_fonece" 	=> (string)$x->qg_fonece,
										"qg_fonere" 	=> (string)$x->qg_fonere,
										"qg_foneco" 	=> (string)$x->qg_foneco,
										"qg_mail" 		=> (string)$x->qg_mail,
										"qg_sexo" 		=> (string)$x->qg_sexo,
										//"qg_dtnasc" => (string)$x->qg_dtnasc,
										"qg_natural" 	=> (string)$x->qg_natural,
										"qg_naciona" 	=> (string)$x->qg_naciona,
										"qg_rg" 			=> (string)$x->qg_rg,
										"qg_rgorg" 		=> (string)$x->qg_rgorg,
										"qg_anocheg" 	=> (string)$x->qg_anocheg,
										"qg_pai" 			=> (string)$x->qg_pai,
										"qg_mae" 			=> (string)$x->qg_mae,
										"qg_estciv" 	=> (string)$x->qg_estciv,
										"qg_numcp" 		=> (string)$x->qg_numcp,
										"qg_sercp" 		=> (string)$x->qg_sercp,
										"qg_ufcp" 		=> (string)$x->qg_ufcp,
										"qg_pis" 			=> (string)$x->qg_pis,
										"qg_habilit" 	=> (string)$x->qg_habilit,
										"qg_cathab" 	=> (string)$x->qg_cathab,
										"qg_reserv" 	=> (string)$x->qg_reserv,
										"qg_tituloe" 	=> (string)$x->qg_tituloe,
										"qg_zonasec" 	=> (string)$x->qg_zonasec,
										"qg_are" 			=> (string)$x->qg_are,
										//"qg_cargo" 	=> (string)$x->qg_cargo,
										"qg_pretsal"	=> (string)$x->qg_pretsal,
										"qg_ultsal" 	=> (string)$x->qg_ultsal,
										"qg_memo2" 		=> (string)$x->qg_memo2,
										"qg_tempar" 	=> (string)$x->qg_tempar,
										"qg_trabal" 	=> (string)$x->qg_trabal,
										"qg_trabde" 	=> $qg_trabde,
										"qg_trabate" 	=> $qg_trabate,
										"qg_motsai"	 	=> (string)$x->qg_motsai,
										"qg_grupo" 		=> (string)$x->qg_grupo)
								);	
							
							}
							
							$output = json_encode(array("data" => $curriculo));
							echo $callback.'('. $output . ');';							
					}else{
				 			$resultado = 999;
				 			$output = json_encode(array("data" => $resultado));
							echo $callback.'('. $output . ');';
					}
  		}
	}
?>