<?php

$xml = simplexml_load_file("/var/pulsar/PULSAR.XML");

foreach ($xml as $musica) {
	echo $musica->interprete."<br>";
  echo $musica->titulo."<br>";
  echo $musica->duracao."<br>";
}


?>