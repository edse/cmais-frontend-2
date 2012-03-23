<?php
//transito
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/ecovias http://cmais.com.br:81/portal/cams.php?s=ecovias');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/ecopistas http://cmais.com.br:81/portal/cams.php?s=ecopistas');

//cmais menu
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_tvcultura http://cmais.com.br:81/index.php/ajax/menuTv?content=tvcultura');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_univesptv http://cmais.com.br:81/index.php/ajax/menuTv?content=univesptv');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_multicultura http://cmais.com.br:81/index.php/ajax/menuTv?content=multicultura');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_tvrtb http://cmais.com.br:81/index.php/ajax/menuTv?content=tvrtb');

echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_radioam http://cmais.com.br:81/index.php/ajax/menuTv?content=radioam');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_radiofm http://cmais.com.br:81/index.php/ajax/menuTv?content=radiofm');

echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_noar_tvcultura http://cmais.com.br:81/index.php/ajax/menuTv?content=no-ar-tvcultura');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_noar_univesptv http://cmais.com.br:81/index.php/ajax/menuTv?content=no-ar-univesptv');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_noar_multicultura http://cmais.com.br:81/index.php/ajax/menuTv?content=no-ar-multicultura');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/index.php/ajax/menu_noar_tvrtb http://cmais.com.br:81/index.php/ajax/menuTv?content=no-ar-tvrtb');



//cmais/aovivo
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/aovivo/index.html http://cmais.com.br:81/aovivo');

//cmais streaming
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/ajax/streaming http://cmais.com.br:81/ajax/streaming');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/cmais.com.br/ajax/streamingend http://cmais.com.br:81/ajax/streamingend');

//univesp streaming
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/univesptv.cmais.com.br/ajax/streamingunivesp http://univesptv.cmais.com.br:81/ajax/streamingunivesp');
echo "\n".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/univesptv.cmais.com.br/ajax/streamingendunivesp http://univesptv.cmais.com.br:81/ajax/streamingendunivesp');

