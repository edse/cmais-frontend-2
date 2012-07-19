<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

//turn off WSDP caching if not in a production environment
$ini = ini_set("soap.wsdl_cache_enabled","0");
//instantiate the SOAP client
$client = new SoapClient("http://intranet.tvcultura.com.br/crm_webservices/crm.asmx?WSDL");

if(!isset($_REQUEST["step"]))
  $_REQUEST["step"] = 0;

if(($_REQUEST["step"]==1)&&(isset($_REQUEST["f1_email"]) || isset($_REQUEST["email"]))){
   
  $email = (isset($_REQUEST["email"]) && $_REQUEST["email"] != "")? $_REQUEST["email"] : $_REQUEST["f1_email"];
   
  //CHECK EMAIL
  $result = $client->valida_email(array('email'=>$email));
  $xml = simplexml_load_string($result->valida_emailResult->any);
  $usuario = $xml->NewDataSet->usuario;

  if($usuario){
    
    if($usuario->valido == "true"){
      
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

      $script = "";
      $script .= '$("#email22").val(\''.$email.'\');$("#f3_email2").val(\''.$email.'\');$("#f4_email").val(\''.$email.'\');$("#f4_email2").val(\''.$email.'\');$("#row1").hide();$("#row4").show();$("#f4_mensagem").val("");$("f1_email").val("");';
      echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form2'));
    }
    else{
      $script = '$("#row1").hide();$("#row2").hide();$("#row3").hide();$("#row5").show();$("f1_email").val("");';
      echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
    }
  }else{

    //UF 
    $result = $client->uf();
    $uf = simplexml_load_string($result->ufResult->any);
    $uf_options = '<option value="">--</option>';
    foreach($uf->NewDataSet->uf as $item){
      $uf_options .= '<option value="'.$item->uf.'">'.$item->uf.'</option>';
    }

    $script = '$("#f2_email2").val(\''.$email.'\');$("#f2_email").val(\''.$email.'\');$("#f3_email2").val(\''.$email.'\');$("#f3_email").val(\''.$email.'\');$("#f2_estado").append(\''.$uf_options.'\');$("#f3_estado").append(\''.$uf_options.'\');$("#row1").hide();$("#row2").show();$("#f2_mensagem").val("");$("f1_email").val("");';
    echo json_encode(array('script'=>$script,'title'=>'Usuário não cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form2'));
  }
  die();
}




if(($_REQUEST["step"]==2)&&(isset($_REQUEST["f2_nome"]) || isset($_REQUEST["f3_nome"]))){
  if($_REQUEST["email"]){
    $ddd = "";
    $telefone = "";
    if(isset($_REQUEST["f2_telefone"])){
      $ddd = substr($_REQUEST["f2_telefone"], 1, 2);
      $telefone = substr($_REQUEST["f2_telefone"], 5, 9);
    }
    else if(isset($_REQUEST["f3_telefone"])){
      $ddd = substr($_REQUEST["f3_telefone"], 1, 2);
      $telefone = substr($_REQUEST["f3_telefone"], 5, 9);
    }
    $arr = array(
      'nome'                  =>  (isset($_REQUEST["f2_nome"]))? $_REQUEST["f2_nome"] : $_REQUEST["f3_nome"], 
      'documento'             =>  (isset($_REQUEST["f2_cpf"]))? $_REQUEST["f2_cpf"] : $_REQUEST["f3_cnpj"], 
      'email'                 =>  (isset($_REQUEST["email"]))? $_REQUEST["email"] : "", 
      'estado'                =>  (isset($_REQUEST["f2_estado"]))? $_REQUEST["f2_estado"] : $_REQUEST["f3_estado"],
      'local'                 =>  (isset($_REQUEST["f2_local"]))? $_REQUEST["f2_local"] : $_REQUEST["f3_local"],
      'cod_sexo'              =>  (isset($_REQUEST["f2_cod_sexo"]))? $_REQUEST["f2_cod_sexo"] : "3",
      'endereco'              =>  (isset($_REQUEST["f2_endereco"]))? $_REQUEST["f2_endereco"] : $_REQUEST["f3_endereco"],
      'complemento'           =>  (isset($_REQUEST["f2_complemento"]))? $_REQUEST["f2_complemento"] : $_REQUEST["f3_complemento"],
      'numero'                =>  (isset($_REQUEST["f2_numero"]))? $_REQUEST["f2_numero"] : $_REQUEST["f3_numero"],
      'ddd'                   =>  $ddd,
      'telefone'              =>  $telefone,
      'cep'                   =>  (isset($_REQUEST["f2_cep"]))? $_REQUEST["f2_cep"] : $_REQUEST["f3_cep"],
      'bairro'                =>  (isset($_REQUEST["f2_bairro"]))? $_REQUEST["f2_bairro"] : $_REQUEST["f3_bairro"]
    );
    
    $result = $client->cadastra_pessoa_sic($arr);
    //var_dump($arr);
    //var_dump($result);

    if($result->cadastra_pessoa_sicResult > 0){
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row6, #row8, #row9").hide();$("#row7").show();';
      echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Email valido', 'form'=>'form3'));
    }
    else{
      $script = '$("#row1, #row2, #row3, #row4, #row6, #row7, #row8, #row9").hide();$("#row5").show();';
      echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado e não validado','msg'=>'Email não validado', 'form'=>'form5'));
    }
  }
  die();
}


if(($_REQUEST["step"]==4)&&($_REQUEST["f4_descricao"]!="")){
  $result = $client->valida_email(array('email'=>$_REQUEST["email"]));
  $xml = simplexml_load_string($result->valida_emailResult->any);
  $usuario = $xml->NewDataSet->usuario;
  if(isset($usuario->codigo) && $usuario->codigo > 0 && $usuario->valido == "true"){    
    // Inseri mensagem
    $arr = array(
      'cod_programa'          =>  24,
      'cod_pessoa'            =>  (string)$usuario->codigo,
      'cod_assunto'           =>  (isset($_REQUEST["f4_cod_assunto"]))? $_REQUEST["f4_cod_assunto"] : "",
      'mensagem'              =>  (isset($_REQUEST["f4_descricao"]))? $_REQUEST["f4_descricao"] : ""
    );
    //var_dump($arr);
    $result = $client->insere_mensagem_sic($arr);
    //var_dump($result);
    if($result->insere_mensagem_sicResult > 0){
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row7, #row8, #row9").hide();$("#protocolo").html("'.$result->insere_mensagem_sicResult.'");$("#protocolo2").html("'.$result->insere_mensagem_sicResult.'");$("#row6").show();';
      $title = 'Solicitação enviada';
      echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Solicitação enviada', 'form'=>'form6'));
    }else{
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row6, #row7, #row9").hide();$("#row8").show();';
      $title = 'Erro! Solicitação não enviada';
      echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Erro! Solicitação não enviada', 'form'=>'form8'));
    }
  }else{
    alert('erro! #314');
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
  echo json_encode(array('script'=>$script));
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
  echo json_encode(array('script'=>$script));
}
