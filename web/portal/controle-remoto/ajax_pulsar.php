<?php
$jsonurl = "pulsar.json";
$json = file_get_contents($jsonurl);
$json_output = json_decode($json);
//$json = array();

foreach ($json_output as $j) {
  //$j->interprete->{0} = $interprete;
  //$j->titulo->{0}     = $titulo;
  //$j->duracao->{0}    = $duracao;
  
  $json = array(musica =>
                array(interprete => $j->interprete->{0},
                titulo => $j->titulo->{0},
                duracao => $j->duracao->{0}
           ));
}

$json = json_encode($json);
echo $json;

?>