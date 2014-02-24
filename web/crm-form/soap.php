<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

//turn off WSDP caching if not in a production environment
$ini = ini_set("soap.wsdl_cache_enabled","0");
//instantiate the SOAP client
$client = new SoapClient("http://intranet3/crm_webservices/crm.asmx?WSDL");

if(!isset($_REQUEST["step"]))
  $_REQUEST["step"] = 0;

if(($_REQUEST["step"]==1)&&($_REQUEST["f1_email"]!="")){

  //CHECK EMAIL
  $result = $client->valida_email(array('email'=>$_REQUEST["f1_email"]));
  $xml = simplexml_load_string($result->valida_emailResult->any);
  $usuario = $xml->NewDataSet->usuario;

  if($usuario){
    
    if($usuario->valido == "true"){
        
      //FAIXA ETARIA
      $result = $client->faixaetaria();
      $idade = simplexml_load_string($result->faixaetariaResult->any);
      $idade_options = '<option value="">--</option>';
      foreach($idade->NewDataSet->faixaetaria as $item){
        $selected = "";
        if((string)$usuario->cod_faixaetaria == (string)$item->codigo){
          $selected = ' selected="selected"';
        }
        $idade_options .=  '<option value="'.$item->codigo.'"'.$selected.'>'.$item->faixa.'</option>';
      }
    
      //RECEPÇÃO 
      $result = $client->recepcaodesinal();
      $recepcao = simplexml_load_string($result->recepcaodesinalResult->any);
      $recepcao_options = '<option value="">--</option>';
      foreach($recepcao->NewDataSet->recepcao as $item){
        $selected = "";
        if((string)$usuario->cod_recepcaodesinal == (string)$item->codigo)
          $selected = ' selected="selected"';
        $recepcao_options .= '<option value="'.$item->codigo.'"'.$selected.'>'.$item->recepcaodesinal.'</option>';
      }
      
      //SEXO 
      $result = $client->sexo();
      $sexo = simplexml_load_string($result->sexoResult->any);
      $sexo_options = '<option value="">--</option>';
      foreach($sexo->NewDataSet->sexo as $item){
        $selected = "";
        if((string)$usuario->cod_sexo == (string)$item->codigo)
          $selected = ' selected="selected"';
        $sexo_options .= '<option value="'.$item->codigo.'"'.$selected.'>'.$item->sexo.'</option>';
      }
      
      //EXTERIOR
      $exterior_options = '<option value="">--</option>';
      $exterior_options .= '<option value="false"';
      if((!$usuario->exterior)||((string)$usuario->exterior == "false")) $exterior_options .= ' selected="selected"';
      $exterior_options .= '>Não</option><option value="true"';
      if((string)$usuario->exterior == "true") $exterior_options .= ' selected="selected"';
      $exterior_options .= '>Sim</option>';
    
      //User Local
      $result = $client->pega_municipio(array('codigo'=>$usuario->local));
      $local = simplexml_load_string($result->pega_municipioResult->any);
      foreach($local->NewDataSet->municipio as $item){
        $usuario->estado = $item->uf;
      }
  
      //UF 
      $result = $client->uf();
      $uf = simplexml_load_string($result->ufResult->any);
      $uf_options = '<option value="">--</option>';
      foreach($uf->NewDataSet->uf as $item){
        $selected = "";
        if((string)$usuario->estado == (string)$item->uf)
          $selected = ' selected="selected"';
        $uf_options .= '<option value="'.$item->uf.'"'.$selected.'>'.$item->uf.'</option>';
      }
      
      //MUNICIPIOS
      $result = $client->municipios(array('uf'=>$usuario->estado));
      $municipio = simplexml_load_string($result->municipiosResult->any);
      $municipio_options = '<option value="">--</option>';
      if(count($municipio->NewDataSet->municipios) > 0){
        foreach($municipio->NewDataSet->municipios as $item){
          $selected = "";
          if((string)$usuario->local == (string)$item->codigo)
            $selected = ' selected="selected"';
          $municipio_options .= '<option value="'.$item->codigo.'"'.$selected.'>'.$item->municipio.'</option>';
        }
        $municipio_options = str_replace("'", "\'", $municipio_options);
      }
      
      //VEICULO
      $result = $client->veiculo();
      $veiculo = simplexml_load_string($result->veiculoResult->any);
      $veiculo_options = '<option value="">--</option>';
      foreach($veiculo->NewDataSet->veiculo as $item){
        $veiculo_options .= '<option value="'.$item->codigo.'">'.$item->veiculo.'</option>';
      }  
      //$script = '$("#f4_cod_veiculo").children().remove();$("#f4_cod_veiculo").append(\''.$veiculo_options.'\');';
      //echo json_encode(array('script'=>$script));
      
      //CONTAS
      /*
      $result = $client->todas_contas();
      $conta = simplexml_load_string($result->todas_contasResult->any);
      $contas_options = '<option value="">--</option>';
      foreach($conta->NewDataSet->contas as $item){
        $contas_options .=  '<option value="'.$item->cod_programa.'">'.$item->conta.'</option>';
      }
      */
      $script = "";
      //die('>>>'.$usuario->local);
      if($usuario->local == "99999")
        $script = '$("#f4_localexterior").val(\''.$usuario->pais.'\');$("#f4_exterior").attr("checked", true);';
        if($_REQUEST["step"]==1 && !isset($_REQUEST["validacao"])!=1){
          $script .= '$("#email22").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email").val(\''.$_REQUEST["f1_email"].'\');$("#f4_nome").val("'.$usuario->nome.'");$("#f4_endereco").val(\''.$usuario->endereco.'\');$("#f4_numero").val(\''.$usuario->numero.'\');$("#f4_complemento").val(\''.$usuario->complemento.'\');$("#f4_cep").val(\''.$usuario->cep.'\');$("#f4_bairro").val(\''.$usuario->bairro.'\');$("#f4_telefone").val(\'('.$usuario->ddd.') '.$usuario->telefone.'\');$("#f4_twitter").val(\''.$usuario->twitter.'\');$("#f4_cod_faixaetaria").append(\''.$idade_options.'\');$("#f4_cod_sexo").append(\''.$sexo_options.'\');$("#f4_localexterior").val("'.$usuario->localexterior.'");$("#f4_cod_recepcaodesinal").append(\''.$recepcao_options.'\');$("#f4_estado").append(\''.$uf_options.'\');$("#f4_local").append(\''.$municipio_options.'\');$("#f4_sms").attr(\'checked\', '.$usuario->sms.');$("#f4_newsletter").attr(\'checked\', '.$usuario->newsletter.');$("#f4_convite").attr(\'checked\', '.$usuario->convite.');$("#f4_terceiros").attr(\'checked\', '.$usuario->terceiros.');$("#f4_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email").val(\''.$_REQUEST["f1_email"].'\');$("#row1").hide();$("#f4_cod_veiculo").children().remove();$("#f4_cod_veiculo").append(\''.$veiculo_options.'\');$("#f4_cod_programa").find("option").attr("value", "");$("#f4_mensagem").val("");toggleExterior();$("f1_email").val("");$("select").each(function(i){$("option").each(function(j){/*console.log($(this).text())*/if($(this).text()=="SIC")$(this).remove()});});var email = "http://cmais.com.br/central-de-relacionamento?step=4&email="+$("#f4_email2").val();$(".mensagem-validada").attr("href",email)';
        }else{
          $script .= '$("#email22").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email").val(\''.$_REQUEST["f1_email"].'\');$("#f4_nome").val("'.$usuario->nome.'");$("#f4_endereco").val(\''.$usuario->endereco.'\');$("#f4_numero").val(\''.$usuario->numero.'\');$("#f4_complemento").val(\''.$usuario->complemento.'\');$("#f4_cep").val(\''.$usuario->cep.'\');$("#f4_bairro").val(\''.$usuario->bairro.'\');$("#f4_telefone").val(\'('.$usuario->ddd.') '.$usuario->telefone.'\');$("#f4_twitter").val(\''.$usuario->twitter.'\');$("#f4_cod_faixaetaria").append(\''.$idade_options.'\');$("#f4_cod_sexo").append(\''.$sexo_options.'\');$("#f4_localexterior").val("'.$usuario->localexterior.'");$("#f4_cod_recepcaodesinal").append(\''.$recepcao_options.'\');$("#f4_estado").append(\''.$uf_options.'\');$("#f4_local").append(\''.$municipio_options.'\');$("#f4_sms").attr(\'checked\', '.$usuario->sms.');$("#f4_newsletter").attr(\'checked\', '.$usuario->newsletter.');$("#f4_convite").attr(\'checked\', '.$usuario->convite.');$("#f4_terceiros").attr(\'checked\', '.$usuario->terceiros.');$("#f4_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email").val(\''.$_REQUEST["f1_email"].'\');$("#row1").hide();$("#f4_cod_veiculo").children().remove();$("#f4_cod_veiculo").append(\''.$veiculo_options.'\');$("#f4_cod_programa").find("option").attr("value", "");$("#f4_mensagem").val("");toggleExterior();$("f1_email").val("");$("select").each(function(i){$("option").each(function(j){/*console.log($(this).text())*/if($(this).text()=="SIC")$(this).remove()});});$("#row4").fadeIn("fast");';
        }
        /*$script .= '$("#email22").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email").val(\''.$_REQUEST["f1_email"].'\');$("#f4_nome").val("'.$usuario->nome.'");$("#f4_endereco").val(\''.$usuario->endereco.'\');$("#f4_numero").val(\''.$usuario->numero.'\');$("#f4_complemento").val(\''.$usuario->complemento.'\');$("#f4_cep").val(\''.$usuario->cep.'\');$("#f4_bairro").val(\''.$usuario->bairro.'\');$("#f4_telefone").val(\'('.$usuario->ddd.') '.$usuario->telefone.'\');$("#f4_twitter").val(\''.$usuario->twitter.'\');$("#f4_cod_faixaetaria").append(\''.$idade_options.'\');$("#f4_cod_sexo").append(\''.$sexo_options.'\');$("#f4_localexterior").val("'.$usuario->localexterior.'");$("#f4_cod_recepcaodesinal").append(\''.$recepcao_options.'\');$("#f4_estado").append(\''.$uf_options.'\');$("#f4_local").append(\''.$municipio_options.'\');$("#f4_sms").attr(\'checked\', '.$usuario->sms.');$("#f4_newsletter").attr(\'checked\', '.$usuario->newsletter.');$("#f4_convite").attr(\'checked\', '.$usuario->convite.');$("#f4_terceiros").attr(\'checked\', '.$usuario->terceiros.');$("#f4_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f4_email").val(\''.$_REQUEST["f1_email"].'\');$("#row1").hide();$("#row4").show();$("#f4_cod_programa").append(\''.$contas_options.'\');$("#f4_mensagem").val("");toggleExterior();$("f1_email").val("");';*/
      //echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form4'));
			$json = json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form4'));
		  $callback = $_REQUEST['callback'];
		  echo $callback.'('. $json . ');';	 		
    }
    else{
      $script = '$("#row1").hide();$("#row2").hide();$("#row3").hide();$("#row5").show();$("f1_email").val("");';
      //echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
		  $json = json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
		  $callback = $_REQUEST['callback'];
		  echo $callback.'('. $json . ');';	 					
    }
  }else{
    //FAIXA ETARIA
    $result = $client->faixaetaria();
    $idade = simplexml_load_string($result->faixaetariaResult->any);
    $idade_options = '<option value="">--</option>';
    foreach($idade->NewDataSet->faixaetaria as $item){
      $idade_options .=  '<option value="'.$item->codigo.'">'.$item->faixa.'</option>';
    }

    //RECEPÇÃO 
    $result = $client->recepcaodesinal();
    $recepcao = simplexml_load_string($result->recepcaodesinalResult->any);
    $recepcao_options = '<option value="">--</option>';
    foreach($recepcao->NewDataSet->recepcao as $item){
      $recepcao_options .= '<option value="'.$item->codigo.'">'.$item->recepcaodesinal.'</option>';
    }

    //UF 
    $result = $client->uf();
    $uf = simplexml_load_string($result->ufResult->any);
    $uf_options = '<option value="">--</option>';
    foreach($uf->NewDataSet->uf as $item){
      $uf_options .= '<option value="'.$item->uf.'">'.$item->uf.'</option>';
    }

    //SEXO 
    $result = $client->sexo();
    $sexo = simplexml_load_string($result->sexoResult->any);
    $sexo_options = '<option value="">--</option>';
    foreach($sexo->NewDataSet->sexo as $item){
      $sexo_options .= '<option value="'.$item->codigo.'">'.$item->sexo.'</option>';
    }

    //EXTERIOR
    //$exterior_options = '<option value="">--</option>';
    //$exterior_options .= '<option value="false">Não</option><option value="true">Sim</option>';
    //$("#f2_exterior").append(\''.$exterior_options.'\');
    //die('>>>'.$usuario->local);
    //$script = "";
    //if($usuario->local == "99999")
    //  $script = '$("#f2_localexterior").val(\''.$usuario->pais.'\');$("#f2_exterior").attr("checked", true);';
    $script = '$("#f2_email2").val(\''.$_REQUEST["f1_email"].'\');$("#f2_email").val(\''.$_REQUEST["f1_email"].'\');$("#f2_cod_faixaetaria").append(\''.$idade_options.'\');$("#f2_cod_sexo").append(\''.$sexo_options.'\');$("#f2_cod_recepcaodesinal").append(\''.$recepcao_options.'\');$("#f2_estado").append(\''.$uf_options.'\');$("#row1").hide();$("#row2").show();$("#f2_mensagem").val("");toggleExterior();$("f1_email").val("");$("select").each(function(i){$("option").each(function(j){/*console.log($(this).text())*/if($(this).text()=="SIC")$(this).remove()});});';
		// echo json_encode(array('script'=>$script,'title'=>'Usuário não cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form2'));
	  $json = json_encode(array('script'=>$script,'title'=>'Usuário não cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form2'));
	  $callback = $_REQUEST['callback'];
	  echo $callback.'('. $json . ');';	 		
  }
  die();
}
else if(($_REQUEST["step"]==2)&&($_REQUEST["f2_nome"]!="")){
  if($_REQUEST["email"]){
    $ddd = "";
    $telefone = "";
    if(isset($_REQUEST["f2_telefone"])){
      $ddd = substr($_REQUEST["f2_telefone"], 1, 2);
      $telefone = substr($_REQUEST["f2_telefone"], 5, 9);
    }
    $arr = array(
      'nome'                  =>  (isset($_REQUEST["f2_nome"]))? $_REQUEST["f2_nome"] : "", 
      'email'                 =>  (isset($_REQUEST["email"]))? $_REQUEST["email"] : "", 
      'cod_faixaetaria'       =>  (isset($_REQUEST["f2_cod_faixaetaria"]))? $_REQUEST["f2_cod_faixaetaria"] : "",
      'documento'             =>  "",
      'exterior'              =>  (isset($_REQUEST["f2_exterior"]))? true : false,  
      'localexterior'         =>  (isset($_REQUEST["f2_exterior"]))? $_REQUEST["f2_localexterior"] : "", 
      'estado'                =>  (isset($_REQUEST["f2_exterior"]))? "" : $_REQUEST["f2_estado"],
      'local'                 =>  (isset($_REQUEST["f2_exterior"]))? "99999" : $_REQUEST["f2_local"],
      'cod_recepcaodesinal'   =>  (isset($_REQUEST["f2_cod_recepcaodesinal"]))? $_REQUEST["f2_cod_recepcaodesinal"] : "",
      'cod_sexo'              =>  (isset($_REQUEST["f2_cod_sexo"]))? $_REQUEST["f2_cod_sexo"] : "1",
      'endereco'              =>  (isset($_REQUEST["f2_endereco"]))? $_REQUEST["f2_endereco"] : "",
      'complemento'           =>  (isset($_REQUEST["f2_complemento"]))? $_REQUEST["f2_complemento"] : "",
      'numero'                =>  (isset($_REQUEST["f2_numero"]))? $_REQUEST["f2_numero"] : "",
      'ddd'                   =>  $ddd,
      'telefone'              =>  $telefone,
      'cep'                   =>  (isset($_REQUEST["f2_cep"]))? $_REQUEST["f2_cep"] : "",
      'bairro'                =>  (isset($_REQUEST["f2_bairro"]))? $_REQUEST["f2_bairro"] : "",
      'sms'                   =>  (isset($_REQUEST["f2_sms"]))? true : false,
      'newsletter'            =>  (isset($_REQUEST["f2_newsletter"]))? true : false,
      'convite'               =>  (isset($_REQUEST["f2_convite"]))? true : false,
      'terceiros'             =>  (isset($_REQUEST["f2_terceiros"]))? true : false,
      'twitter'               =>  (isset($_REQUEST["f2_twitter"]))? $_REQUEST["f2_twitter"] : "",
    );
    
    $result = $client->cadastra_pessoa($arr);

    if($result->cadastra_pessoaResult > 0){
      /*
      //CONTAS
      $result = $client->todas_contas();
      $conta = simplexml_load_string($result->todas_contasResult->any);
      $contas_options = '<option value="">--</option>';
      foreach($conta->NewDataSet->contas as $item){
        $contas_options .=  '<option value="'.$item->cod_programa.'">'.$item->conta.'</option>';
      }
      */
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row6, #row8, #row9").hide();$("#row7").show();';
      //echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Email valido', 'form'=>'form5'));
		  $json = json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Email valido', 'form'=>'form5'));
		  $callback = $_REQUEST['callback'];
		  echo $callback.'('. $json . ');';			
    }
    else{
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row6, #row7, #row8").hide();$("#row9").show();';
      //echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
		  $json = json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
		  $callback = $_REQUEST['callback'];
		  echo $callback.'('. $json . ');';
    }
  }
  die();
}
else if(($_REQUEST["step"]==3)&&($_REQUEST["nome"]!="")){
  die('?????');
  /*
  if($_REQUEST["email"]){
    $result = $client->valida_email(array('email'=>$_REQUEST["email"]));
    $xml = simplexml_load_string($result->valida_emailResult->any);
    $usuario = $xml->NewDataSet->usuario;

    if(($usuario->codigo > 0)&&($usuario->valido)){
      $arr = array(
        'codigo'                =>  (string)$usuario->codigo,
        'nome'                  =>  (isset($_REQUEST["nome"]))? $_REQUEST["nome"] : "", 
        'email'                 =>  (isset($_REQUEST["email"]))? $_REQUEST["email"] : "", 
        'cod_faixaetaria'       =>  (isset($_REQUEST["cod_faixaetaria"]))? $_REQUEST["cod_faixaetaria"] : "",

        'exterior'              =>  (isset($_REQUEST["exterior"]))? true : false,  
        'localexterior'         =>  (isset($_REQUEST["exterior"]))? $_REQUEST["localexterior"] : "", 
        'local'                 =>  (isset($_REQUEST["exterior"]))? "99999" : $_REQUEST["local"],

        'exterior'              =>  ($_REQUEST["exterior"] != "true")? false : true,  
        'localexterior'         =>  (isset($_REQUEST["localexterior"]))? $_REQUEST["localexterior"] : "",
        'estado'                =>  (isset($_REQUEST["estado"])&&$_REQUEST["estado"]!="")? $_REQUEST["estado"] : "",
        'local'                 =>  (isset($_REQUEST["local"])&&$_REQUEST["local"]!="")? $_REQUEST["local"] : "99999",
        'cod_recepcaodesinal'   =>  (isset($_REQUEST["cod_recepcaodesinal"]))? $_REQUEST["cod_recepcaodesinal"] : "",
        'cod_sexo'              =>  (isset($_REQUEST["cod_sexo"]))? $_REQUEST["cod_sexo"] : "1",
        'endereco'              =>  (isset($_REQUEST["endereco"]))? $_REQUEST["endereco"] : "",
        'complemento'           =>  (isset($_REQUEST["complemento"]))? $_REQUEST["complemento"] : "",
        'numero'                =>  (isset($_REQUEST["numero"]))? $_REQUEST["numero"] : "",
        'ddd'                   =>  (isset($_REQUEST["ddd"]))? $_REQUEST["ddd"] : "",
        'telefone'              =>  (isset($_REQUEST["telefone"]))? $_REQUEST["telefone"] : "",
        'cep'                   =>  (isset($_REQUEST["cep"]))? $_REQUEST["cep"] : "",
        'bairro'                =>  (isset($_REQUEST["bairro"]))? $_REQUEST["bairro"] : "",
        'sms'                   =>  (isset($_REQUEST["sms"])&&$_REQUEST["sms"] != "true")? false : "true", 
        'newsletter'            =>  (isset($_REQUEST["newsletter"])&&$_REQUEST["newsletter"] != "true")? false : "true", 
        'convite'               =>  (isset($_REQUEST["convite"])&&$_REQUEST["convite"] != "true")? false : "true", 
        'terceiros'             =>  (isset($_REQUEST["terceiros"])&&$_REQUEST["terceiros"] != "true")? false : "true", 
        'twitter'               =>  (isset($_REQUEST["twitter"]))? $_REQUEST["twitter"] : "",
      );
      $result = $client->altera_pessoa($arr);

      //var_dump($arr);
      //die();

      if($result->altera_pessoaResult > 0){
        //CONTAS
        $result = $client->todas_contas();
        $conta = simplexml_load_string($result->todas_contasResult->any);
        $contas_options = '<option value="">--</option>';
        foreach($conta->NewDataSet->contas as $item){
          $contas_options .=  '<option value="'.$item->cod_programa.'">'.$item->conta.'</option>';
        }
        $script = "";
        //die('>>>'.$usuario->local);
        if($usuario->local == "99999")
          $script = '$("#f4_localexterior").val(\''.$usuario->pais.'\');$("#f4_exterior").attr("checked", true);';
        $script .= '$("#f4_email2").val(\''.$_REQUEST["email"].'\');$("#f4_email").val(\''.$_REQUEST["email"].'\');$("#f4_cod_programa").append(\''.$contas_options.'\');$("#row1").hide();$("#row2").hide();$("#row3").hide();$("#row4").show();toggleExterior();';
        echo json_encode(array('script'=>$script,'title'=>'Usuário atualizado','msg'=>'Usuário atualizado', 'form'=>'form4'));
      }else{
        $script = '$("#row1").hide();$("#row2").hide();$("#row3").hide();$("#row5").show();';
        echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
      }
      die();
    }
    else {
      $script = '$("#row1").hide();$("#row2").hide();$("#row3").hide();$("#row5").show();';
      echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
    }
  }
  die();
  */
}
else if(($_REQUEST["step"]==4)&&($_REQUEST["f4_cod_programa"]!="--")){
  $result = $client->valida_email(array('email'=>$_REQUEST["email"]));
  $xml = simplexml_load_string($result->valida_emailResult->any);
  $usuario = $xml->NewDataSet->usuario;
  if(isset($usuario->codigo) && $usuario->codigo > 0 && $usuario->valido == "true"){    
    // Inseri mensagem
    $arr = array(
      'cod_pessoa'            =>  (string)$usuario->codigo,
      'cod_veiculo'           =>  (isset($_REQUEST["f4_cod_veiculo"]))? $_REQUEST["f4_cod_veiculo"] : "", //jefferson
      'cod_programa'          =>  (isset($_REQUEST["f4_cod_programa"]))? $_REQUEST["f4_cod_programa"] : "", 
      'cod_assunto'           =>  (isset($_REQUEST["f4_cod_assunto"]))? $_REQUEST["f4_cod_assunto"] : "", 
      'mensagem'              =>  (isset($_REQUEST["f4_mensagem"]))? $_REQUEST["f4_mensagem"] : ""
    );
    $result = $client->insere_mensagem($arr);
    if(count($result->insere_mensagemResult) > 0){
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row7, #row8, #row9").hide();$("#row6").show();';
      $title = 'Mensagem enviada';
      if(isset($_REQUEST["f4_mais"]))
        $title = 'Cadastro atualizado e mensagem enviada';
      echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Mensagem enviada', 'form'=>'form6'));
    }else{
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row6, #row7, #row9").hide();$("#row8").show();';
      $title = 'Mensagem não enviada';
      echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Mensagem não enviada', 'form'=>'form8'));
    }
  }else{
    alert('erro! #380');
  }
}

else if(($_REQUEST["step"]==4)&&($_REQUEST["f4_mais"]!="")){
  $result = $client->valida_email(array('email'=>$_REQUEST["email"]));
  $xml = simplexml_load_string($result->valida_emailResult->any);
  $usuario = $xml->NewDataSet->usuario;
  if(isset($usuario->codigo) && $usuario->codigo > 0 && $usuario->valido == "true"){
    $ddd = "";
    $telefone = "";
    if(isset($_REQUEST["f4_telefone"])){
      $ddd = substr($_REQUEST["f4_telefone"], 1, 2);
      $telefone = substr($_REQUEST["f4_telefone"], 5, 9);
    }
    // Altera cadastro
    $arr = array(
      'documento'             =>  "",
      'codigo'                =>  (string)$usuario->codigo,
      'nome'                  =>  (isset($_REQUEST["f4_nome"]))? $_REQUEST["f4_nome"] : "", 
      'email'                 =>  (isset($_REQUEST["email"]))? $_REQUEST["email"] : "", 
      'cod_faixaetaria'       =>  (isset($_REQUEST["f4_cod_faixaetaria"]))? $_REQUEST["f4_cod_faixaetaria"] : "",
      'exterior'              =>  (isset($_REQUEST["f4_exterior"]))? true : false,  
      'localexterior'         =>  (isset($_REQUEST["f4_exterior"]))? $_REQUEST["f4_localexterior"] : "", 
      'estado'                =>  (isset($_REQUEST["f4_exterior"]))? "" : $_REQUEST["f4_estado"],
      'local'                 =>  (isset($_REQUEST["f4_exterior"]))? "99999" : $_REQUEST["f4_local"],
      'cod_recepcaodesinal'   =>  (isset($_REQUEST["f4_cod_recepcaodesinal"]))? $_REQUEST["f4_cod_recepcaodesinal"] : "",
      'cod_sexo'              =>  (isset($_REQUEST["f4_cod_sexo"]))? $_REQUEST["f4_cod_sexo"] : "1",
      'endereco'              =>  (isset($_REQUEST["f4_endereco"]))? $_REQUEST["f4_endereco"] : "",
      'complemento'           =>  (isset($_REQUEST["f4_complemento"]))? $_REQUEST["f4_complemento"] : "",
      'numero'                =>  (isset($_REQUEST["f4_numero"]))? $_REQUEST["f4_numero"] : "",
      'ddd'                   =>  $ddd,
      'telefone'              =>  $telefone,
      'cep'                   =>  (isset($_REQUEST["f4_cep"]))? $_REQUEST["f4_cep"] : "",
      'bairro'                =>  (isset($_REQUEST["f4_bairro"]))? $_REQUEST["f4_bairro"] : "",
      'twitter'               =>  (isset($_REQUEST["f4_twitter"]))? $_REQUEST["f4_twitter"] : "",
      'sms'                   =>  (isset($_REQUEST["f4_sms"]))? true : false, 
      'newsletter'            =>  (isset($_REQUEST["f4_newsletter"]))? true : false, 
      'convite'               =>  (isset($_REQUEST["f4_convite"]))? true : false, 
      'terceiros'             =>  (isset($_REQUEST["f4_terceiros"]))? true : false 
    );
    $result = $client->altera_pessoa($arr);
    
    if($result->altera_pessoaResult > 0){
      //$script = '$("#f4_cod_programa option").attr("value", "");$(".control-group").removeClass("error");$(".f4_cod_programa").removeAttr("selected");$(".salvar-alteracoes").hide();$("#f4_cod_veiculo, #f4_cod_assunto, #f4_mensagem").removeAttr("disabled");$("#row4, #message, .control-group.f4_mais, #row9").show();$("#f4_maisinfo, #btn5").hide();set_checked(false);$("#row9").delay(3000).slideUp("fast");$("#row4").find(".success").each(function(){$(this).removeClass("success")});$("#row4").find("label.valid").each(function(){$(this).remove()});';
      $script = '$("#f4_mais").attr("checked","false");$("#row1, #row2, #row3, #row4, #row5, #row6, #row7, #row8").hide();$("#row9").show();';
      $title = 'Cadastro atualizado';
      //echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Seu cadastro foi alterado com sucesso.', 'form'=>'form9'));
		  $json = json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Seu cadastro foi alterado com sucesso.', 'form'=>'form9'));
		  $callback = $_REQUEST['callback'];
		  echo $callback.'('. $json . ');';	 						
    }else{
      $script = '$("#f4_mais").attr("checked","false");$("#row1, #row2, #row3, #row4, #row5, #row6, #row7, #row9").hide();$("#row8").show();';
      $title = 'Cadastro não atualizado';
      //echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Seu cadastro não foi alterado.', 'form'=>'form8'));
		  $json = json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Seu cadastro não foi alterado.', 'form'=>'form8'));
		  $callback = $_REQUEST['callback'];
		  echo $callback.'('. $json . ');';	 			
    }
  }else{
    alert('erro! #380');
  }

}
else if($_REQUEST["action"]=="municipios" && $_REQUEST["uf"]!=""){    //MUNICIPIOS
  $result = $client->municipios(array('uf'=>strtolower($_REQUEST["uf"])));
  $municipio = simplexml_load_string($result->municipiosResult->any);
  $municipio_options = '<option value="">--</option>';
  if(count($municipio->NewDataSet->municipios) > 0){
    foreach($municipio->NewDataSet->municipios as $item){
      $municipio_options .= '<option value="'.$item->codigo.'">'.$item->municipio.'</option>';
    }
    $municipio_options = str_replace("'", "\'", $municipio_options);
  }
  
  $script = '$("#'.$_REQUEST["form"].'_local").children().remove();$("#'.$_REQUEST["form"].'_local").append(\''.$municipio_options.'\');';
  //echo json_encode(array('script'=>$script));
  $json = json_encode(array('script'=>$script));
  $callback = $_REQUEST['callback'];
  echo $callback.'('. $json . ');';	 	
}

else if($_REQUEST["action"]=="contas" && $_REQUEST["cod_veiculo"]!=""){    //VEICULO->CONTA
  //VEICULO->CONTA
  $result = $client->contas(array('cod_veiculo'=>$_REQUEST["cod_veiculo"]));
  $contas = simplexml_load_string($result->contasResult->any);
  $contas_options = '<option value="">--</option>';
  //echo count($contas);
  if(count($contas)>0){
    foreach($contas->NewDataSet->contas as $item){
      $contas_options .= '<option value="'.$item->codigo.'">'.$item->programa.'</option>';
    }
  }
  $script = '$("#f4_cod_programa").children().remove();$("#f4_cod_programa").append(\''.$contas_options.'\');';
  //echo json_encode(array('script'=>$script));
  $json = json_encode(array('script'=>$script));
  $callback = $_REQUEST['callback'];
  echo $callback.'('. $json . ');';	
}
else if($_REQUEST["action"]=="assuntos" && $_REQUEST["cod_programa"]!=""){    //ASSUNTOS
  //ASSUNTOS
  $result = $client->assunto(array('cod_programa'=>$_REQUEST["cod_programa"]));
  $assunto = simplexml_load_string($result->assuntoResult->any);
  $assunto_options = '<option value="">--</option>';
  foreach($assunto->NewDataSet->assunto as $item){
    $assunto_options .= '<option value="'.$item->codigo.'">'.$item->assunto.'</option>';
  }  
  $script = '$("#f4_cod_assunto").children().remove();$("#f4_cod_assunto").append(\''.$assunto_options.'\');';
  //echo json_encode(array('script'=>$script));
  $json = json_encode(array('script'=>$script));
  $callback = $_REQUEST['callback'];
  echo $callback.'('. $json . ');';	 
}
