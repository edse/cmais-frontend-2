<?php
/*
 * Busca endereço por CEP
*/

if(!empty($_GET["cep"])){
  //$cep = "01310-200" //- Av. Paulista
  $cep = $_GET["cep"];
  
  //Cria a URL com os dados para POST
  $postdata = http_build_query(array( 'cepEntrada' => $cep, 'tipoCep' => '', 'cepTemp' => '','metodo'=>'buscarCep'));
  
  //Insere os método, header e o array com os dados
  $opts = array('http' => array('method'  => 'POST', 'header'  => 'Content-type: application/x-www-form-urlencoded','content' => $postdata));
  
  //Controla o fluxo de dados e as informações de acordo com os parametros enviados
  $context  = stream_context_create($opts);
  
  //Captura o resultado html da página
  $result = file_get_contents('http://m.correios.com.br/movel/buscaCepConfirma.do', false, $context);
  
  //Define o delimitador para separar os resultados
  $search = '<span class="respostadestaque">';
  
  //
  $dados = explode($search, $result);
  
  if(count($dados) > 3){
    //echo count($dados);
    
    //Captura o Endereço e Formata
    $endereco = explode("</span>", $dados[1]);
    $endereco = trim($endereco[0]);
    
    // Verifica se o endereço possui o " - "  até x do lado ímpar ou par
    if(strpos($endereco, " - ")){
      $endereco1 = explode(" - ", $endereco);
      $endereco = $endereco1[0];
    }
    
    $endereco = utf8_encode(trim($endereco));
      
    //Captura o Bairro
    $bairro = explode("</span>", $dados[2]);
    $bairro = utf8_encode(trim($bairro[0]));
     
    //Captura o Cidade e Estado
    $city_and_state = explode("</span>", $dados[3]);
    $cidade_e_uf = explode("/", $city_and_state[0]);
    
    $cidade = utf8_encode(trim($cidade_e_uf[0]));
    $uf = utf8_encode(trim($cidade_e_uf[1]));
    
    $resultados = array("cep" =>
                        array(
                        "endereco" => $endereco, 
                        "bairro" => $bairro,
                        "cidade" => $cidade, 
                        "uf" => $uf)
    );
    
    //Gera o JSON
    
    //echo json_encode($resultados);
    $json = json_encode($resultados);
    $callback = $_REQUEST['callback'];
    echo $callback.'('. $json . ');';		
		
    
  }else{
    echo utf8_decode("CEP incorreto ou não encontrado!");
  }
}else{
  echo utf8_decode("CEP não foi informado!");  
}

?>