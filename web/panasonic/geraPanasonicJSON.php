<?php

//LE JSON GERAL
$jsonurl = "http://200.136.27.50/sony/panasonic.json";
$json = file_get_contents($jsonurl);
$json_output = json_decode($json);

//CRIA ARRAYS PARA PROGRAMAS E VIDEOS
$category_collection = array();
$lista_videos_programa = array();
  
if(isset($_GET['program'])){
  //RETORNA JSON COM TODOS OS PROGRAMAS
  foreach ( $json_output->category as $program ){
    $category = array(
      "text"     => $program->name,
      "action"    => $program->program_id,
    );
    array_push($category_collection, $category);
  }
  
  $output = array("data" => array("list" => $category_collection));    
  echo json_encode($output);
}else if(isset($_GET['program_id'])){
  //PEGA TODOS OS ASSETS DO ID DO PROGRAMA E RETORNA JSON
  $limit = 50;
  $id = $_GET['program_id'];
  $list1 = "";
  
  foreach ( $json_output->category as $asset ){
     if($id == $asset->program_id){
       foreach($asset->videos as $av){
          if($limit > 0){
              /*  
              $list1.= "<div style='float: left; height:400px;width: 330px; font: 13px arial; margin:10px ; text-decoration:none; border: 3px solid gray'>
                  <a href=".$av->sources.">
                  ".$asset->name."<br/><br/>
                  <img src=".$av->thumb." border=0 width=240 height=180><br/><br/>
                  ".$av->title."<br/>
                  ".$av->subtitle."<br/>
                  ".$av->description."<br/>
                </a></div>
               ";
              */
            $list = array( "src"       => $av->thumb,  //ok
                             "label"     => $av->subtitle, //ok
                             "titulo"    => $asset->name, 
                             "subtitulo" => $av->subtitle,
                             "descricao" => $av->description, 
                             "url_video" => $av->sources, 
                             "destaque"  => "S",
                             //"imagem_destaque" => $av->thumb,
                             "duracao" => $av->duration,
                             "imagem_destaque"  =>$av->still,
                            );
            array_push($lista_videos_programa, $list);
            $limit--;
         }
       }
     }
  }
  
  //RETORNA JSON COM TODOS OS PROGRAMAS
  $output = array("data" => array("list" => $lista_videos_programa));
  //$output = array("data" => array("name" => $asset->name,"program_id"=> $asset->program_id,"list" => $lista_videos_programa));
  echo json_encode($output);
  echo $list1;

}else if(isset($_GET['palavra']) && !empty($_GET['palavra'])){
  //FAZ A BUSCA DE VÍDEOS COM A PALAVRA CHAVE 
  $limit = 50;
  $palavra = strtolower($_GET['palavra']);
  
  foreach ( $json_output->category as $asset ){
     foreach($asset->videos as $av){
        //VERIFICA SE A PALAVRA BUSCADA ESTÁ NO NOME DO PROGRAMA, TITULO, SUBTITULO OU DESCRIÇÃO
        if(stristr($asset->name, $palavra) == FALSE && stristr($av->title, $palavra) == FALSE && stristr($av->subtitle, $palavra) == FALSE && stristr($av->description, $palavra) == FALSE) {
          //echo 'Palavra não encontrada';
        }else{
          if($limit > 0){
              /*
              $list1.= "<div style='float: left; height:400px;width: 330px; font: 13px arial; margin:10px ; text-decoration:none; border: 3px solid gray'>
                  <a href=".$av->sources.">
                  ".$asset->name."<br/><br/>
                  <img src=".$av->thumb." border=0 width=240 height=180><br/><br/>
                  ".$av->title."<br/>
                  ".$av->subtitle."<br/>
                  ".$av->description."<br/>
                </a></div>
               ";
               */           
            
            $list = array( "src"       => $av->thumb, 
                           "label"     => $av->subtitle, //ok
                           "titulo"    => $asset->name, 
                           "subtitulo" => $av->subtitle,
                           "descricao" => $av->description, 
                           "url_video" => $av->sources, 
                           "destaque"  => "S",
                           //"imagem_destaque" => $av->thumb,
                           "duracao" => $av->duration,
                           "imagem_destaque"  =>$av->still,
                          );
            array_push($lista_videos_programa, $list);
            $limit--;
          }
        }
     }
  } 
  //RETORNA JSON COM TODOS OS PROGRAMAS
  $output = array("data" => array("list" => $lista_videos_programa));
  //$output = array("data" => array("name" => $asset->name,"program_id"=> $asset->program_id,"list" => $lista_videos_programa));
  echo json_encode($output);
  //echo $list1;
  
}else{
  echo "Nenhum parametro enviado";
}
?>