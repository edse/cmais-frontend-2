<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

//turn off WSDP caching if not in a production environment
$ini = ini_set("soap.wsdl_cache_enabled","0");
//instantiate the SOAP client
$client = new SoapClient("http://intranet.tvcultura.com.br/crm_webservices/crm.asmx?WSDL");

if(!isset($_REQUEST["step"]))
  $_REQUEST["step"] = 0;

if(($_REQUEST["step"]==1)&&($_REQUEST["f1_email"]!="" || $_REQUEST["email"]!="")){
  
  $email = ($_REQUEST["email"]!="")? $_REQUEST["email"] : $_REQUEST["f1_email"];
  $protocolo = ($_REQUEST["protocolo"]!="")? $_REQUEST["protocolo"] : $_REQUEST["f1_protocolo"];
  
  //CHECK STATUS
  $result = $client->sic_andamento(array('email'=>$email, 'protocolo'=>$protocolo));
  $xml = simplexml_load_string($result->sic_andamentoResult->any);
  $andamento = $xml->NewDataSet->andamento;
  $mensagem = $xml->NewDataSet->mensagem;
  $flag = $xml->NewDataSet->flag;
  //var_dump($xml);

  if($andamento!=NULL && $mensagem!=NULL){
    $last = end($andamento);
    $script = '$("#row1").hide();$("#row2").show();$("#row3").hide();$("#row5").hide();$("f1_email").val("");';
    
    $data1 = new DateTime($andamento[0]->data_envio);
    $data2 = new DateTime($andamento[count($andamento)-1]->data_entrega);
    $status = $andamento[count($andamento)-1]->status;

    $html = "<table class='table table-striped table-bordered table-condensed'><thead><tr><th>Data</th><th>Email</th><th>Protocolo</th><th>Status</th></tr></thead><tbody>";
    $html .= '<tr><td>'.$data1->format('d/m/Y H:i:s').'</td><td>'.$email.'</td><td>'.$protocolo.'</td><td>'.$status.'</td></tr>';
    $script .= '$("#dados-html").html("'.$html.'");';

    $html = "<table class='table table-striped table-bordered table-condensed'><thead><tr><th>Data</th><th>Status</th><th>Data Limite</th><th>Justificativa</th></tr></thead><tbody>";
    $data1 = new DateTime($andamento[0]->data_envio);
    $data2 = new DateTime($andamento[count($andamento)-1]->data_entrega);
    $status = $andamento[count($andamento)-1]->status;
    foreach($andamento as $a){
      $d1 = new DateTime($a->data_envio);
      $d2 = new DateTime($a->data_entrega);
      if(!$a->justificativa)
        $a->justificativa = "-";
      $html .= '<tr><td>'.$d1->format('d/m/Y H:i:s').'</td><td>'.$a->status.'</td><td>'.$d2->format('d/m/Y H:i:s').'</td><td>'.$a->justificativa.'</td></tr>';
    }
    $html .= '</tbody></table>';
    $script .= '$("#status-html").html("'.$html.'");';

    $html = "<table class='table table-striped table-bordered table-condensed'><thead><tr><th colspan=2>Mensagem</th><th colspan=2>Resposta</th></tr></thead><tbody>";
    foreach($mensagem as $m){
      $dm = new DateTime($m->data_mensagem);
      $dr = new DateTime($m->data_resposta);
      $html .= '<tr><td>'.$dm->format('d/m/Y H:i:s').'</td><td>'.$m->mensagem.'</td>';
      if($m->resposta)
        $html .= '<td>'.$dr->format('d/m/Y H:i:s').'</td><td>'.$m->resposta.'</td></tr>';
      else
        $html .= '<td>-</td><td>-</td></tr>';
    }
    $script .= '$("#mensagem-html").html("'.str_replace("\n", "<br />", $html).'");';

    $script .= '$("#f2_email").val("'.$email.'");$("#f2_protocolo").val("'.$protocolo.'");$("#protocolo_td, #protocolo2").html("'.$protocolo.'");$("#status_td").html("'.$status.'");';
    if($flag->flag == "1")
      $script .= '$("#recurso_holder").show();';
    echo json_encode(array('script'=>$script,'title'=>'Usuário cadastrado','msg'=>'Preencha os campos abaixo.', 'form'=>'form2'));
  }else{
    $script = '$("#row1").hide();$("#row2").hide();$("#row3").show();$("#row5").hide();$("f1_email").val("");';
    echo json_encode(array('script'=>$script,'title'=>'Email e/ou protocolo não conferem','msg'=>'Email e/ou protocolo não conferem', 'form'=>'form3'));
  }
  die();
}

if(($_REQUEST["step"]==2)&&($_REQUEST["f2_descricao"]!="")){
  
  if($_REQUEST["f2_email"] && $_REQUEST["f2_protocolo"]){
    $result = $client->valida_email(array('email'=>$_REQUEST["f2_email"]));
    $xml = simplexml_load_string($result->valida_emailResult->any);
    $usuario = $xml->NewDataSet->usuario;
    $arr = array(
      'protocolo'            =>  (string)$_REQUEST["f2_protocolo"],
      'cod_assunto'           =>  $_REQUEST["f2_cod_assunto"],
      'mensagem'              =>  $_REQUEST["f2_descricao"]
    );
    $result = $client->insere_recurso_sic($arr);
    //var_dump($arr);
    //var_dump($result->insere_recurso_sicResult);
    if($result->insere_recurso_sicResult){
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row7, #row8, #row9").hide();$("#protocolo_r").html("'.$_REQUEST["f2_protocolo"].'");$("#protocolo_r2").html("'.$_REQUEST["f2_protocolo"].'");$("#row5").show();';
      $title = 'Solicitação enviada';
      echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Solicitação enviada', 'form'=>'form6'));
    }else{
      $script = '$("#row1, #row2, #row3, #row4, #row5, #row6, #row7, #row9").hide();$("#row4").show();';
      $title = 'Erro! Solicitação não enviada';
      echo json_encode(array('script'=>$script,'title'=>$title,'msg'=>'Erro! Solicitação não enviada', 'form'=>'form8'));
    }
  }
  die();
}

if($_REQUEST["action"]=="assuntos" && $_REQUEST["cod_programa"]!=""){    //ASSUNTOS
  //ASSUNTOS
  $result = $client->assunto(array('cod_programa'=>$_REQUEST["cod_programa"]));
  $assunto = simplexml_load_string($result->assuntoResult->any);
  $assunto_options = '<option value="">--</option>';
  foreach($assunto->NewDataSet->assunto as $item){
    $assunto_options .= '<option value="'.$item->codigo.'">'.$item->assunto.'</option>';
  }  
  $script = '$("#f2_cod_assunto").children().remove();$("#f2_cod_assunto").append(\''.$assunto_options.'\');';
  echo json_encode(array('script'=>$script));
}
