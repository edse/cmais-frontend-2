<?php
header('Content-Type: text/html; charset=utf-8');

$t = "-+Produção+da+série+de+documentários+Raízes+da+Gastronomia+Brasileira%2C+da+Ong+Slowfood.+(2013)%0D%0ARotina%3A+pesquisar+sobre+o+assunto%2C+fazer+entrevistas+ao+telefone%2C+apurar+informações%2C+produzir+a+viagem+da+equipe+de+gravação.+Um+dos+documentários+produzidos+pode+ser+visualizado%3A+http%3A%2F%2Fzip.net%2FbjlMBW%0D%0A-+Pauta%2C+produção+e+edição+de+texto%2C+Programa+Ação%2C+TV+Globo.%0D%0ARotina%3A+propor+pauta%2C+apurar+informações%2C+entrevistar+por+telefone%2C+escrever+roteiro+de+gravação+e+pauta%2C+produzir+viagens%2C+decupar+material+gravado+e+roteirizar.";
echo "<br>".strlen($t);

//$result_2 = mb_convert_encoding($t, "UTF-8", mb_detect_encoding($t,"auto",true));
echo "<br>".strlen(urldecode($t)); 
