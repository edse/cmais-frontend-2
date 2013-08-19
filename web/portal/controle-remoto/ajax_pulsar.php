<?php
$jsonurl = "pulsar.json";
$json = file_get_contents($jsonurl);
$json_output = json_decode($json);
//$json = array();

foreach ($json_output as $j) {
  //$json['interprete'] = $j->interprete->{0};
  //$json['titulo'] = $j->titulo->{0};
  //$json['duracao'] = $j->duracao->{0};

  if($j->interprete->{0} == "") $interprete = "-";
  if($j->titulo->{0} == "") $titulo = "-";
  if($j->duracao->{0} == "") $duracao = " ";
  
  $json = array(musica =>
                array(interprete => $interprete,
                      titulo => $titulo,
                      duracao => $duracao
           ));
}

$json = json_encode($json);
echo $json;

?>