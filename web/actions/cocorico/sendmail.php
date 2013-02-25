<?php

header('location: http://tvcultura.cmais.com.br/cocorico/tvcocorico?error=1');
die();

$to = "maiscriancatvcultura@gmail.com, cristovamruizjr@gmail.com";

$email = strip_tags($request->getParameter('email'));
$name = strip_tags($request->getParameter('nome'));
$subject = '[Cocoricó][TV Cocoricó] '.$name.' <'.$email.'>';




            
?>                