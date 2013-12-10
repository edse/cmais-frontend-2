<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
<style>
  ul{margin:0;padding:0;}
  #mapa-sp-legenda{display:block;width: 194px;height:314px;position:absolute;left:0;top:0;background: #dfdfdf;}
  #mapa-sp-legenda li{list-style: none;height: 42px;padding-top: 3px;width: 150px;width:190px\0; border-radius: 2px;text-align:left;margin-left: 12px;padding-left: 15px;margin-bottom: 5px;} 
  #mapa-sp-legenda .norte {background-color: #fc724b !important; top:114px;}
  #mapa-sp-legenda .leste {background-color: #237876 !important; top: 216px;}
  #mapa-sp-legenda .centro{background-color: #4b9af4 !important; margin-top: 16px}
  #mapa-sp-legenda .oeste {background-color: #712378 !important; top:165px;}
  #mapa-sp-legenda .sul	  {background-color: #85a32c !important; top: 63px;}
  #mapa-sp-legenda .alta{ background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verm.png) no-repeat 0 0;}
  #mapa-sp-legenda .baixa{ background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png) no-repeat 0 0;}
  #mapa-sp-legenda .estavel{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png) no-repeat 0 0;}
  #mapa-sp-legenda .setatamanho{width:15px;height: 19px;position:absolute;right:24px;margin-top: -36px;}
  #mapa-sp-legenda .baixa{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verm.png) no-repeat 0 0}
  #mapa-sp-legenda .media{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png) no-repeat 0 0}
  #mapa-sp-legenda li .seta{width:15px;height: 19px;position:absolute;left: 9px;margin-top: -26px;}
  #mapa-sp-legenda li .pos-norte{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-setinhas.png) no-repeat 0 0;}
  #mapa-sp-legenda li .pos-leste{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-setinhas.png) no-repeat 0px -22px;}
  #mapa-sp-legenda li .pos-centro{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-setinhas.png) no-repeat 0px -41px;}
  #mapa-sp-legenda li .pos-oeste{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-setinhas.png) no-repeat 0px -60px;}
  #mapa-sp-legenda li .pos-sul{background: url(http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-setinhas.png) no-repeat 0px -79px;}
  #mapa-sp-legenda a{font-family:Arial, Helvetica, sans-serif;display:block;text-decoration:none;width:165px;position:absolute;background-color:#333;padding-top:3px;padding-bottom:3px;color:#FFF;text-align: center;font-size:13px;font-weight:bold;border-radius: 2px}
  #mapa-sp-legenda a.pos02{bottom:16px;right:10px;z-index:11;text-align:left;padding-left:12px;}
  #mapa-sp-legenda p{color:#FFF !important;font-size:12px;text-transform: capitalize; font-weight:normal;margin-top: -15px;}
  #mapa-sp-legenda h4 {font-family:Arial, Helvetica, sans-serif;margin-top: 0px;color: #fff;font-size: 14px;text-transform: uppercase;padding-top: 3px;}
  #mapa-sp-legenda p {font-family:Arial, Helvetica, sans-serif;color: #FFF !important;font-size: 12px;text-transform: capitalize;font-weight: normal;}
</style>
</head>
<body>
	<?php
	  $xmlTransitoAgoraCET = file_get_contents('http://cetsp1.cetsp.com.br/monitransmapa/xmltransitoagora.asp');
	  try {
	    $transitoagora = new SimpleXMLElement($xmlTransitoAgoraCET);
	  } catch (Exception $e) {}
	?>
	    
	<div id="mapa-sp-legenda"> 
		<ul>
			<?php foreach($transitoagora->regiao as $k=>$r): ?>
			<li class="<?php echo strtolower($r->Attributes()->ID); ?>">
				<h4><?php echo $r->Attributes()->ID; ?></h4>
				<p>Lentidão: <?php echo $r->lentidao; ?> Km (<?php echo $r->percent; ?>%)</p>
				<span class="<?php echo strtolower($r->tendencia) ?> setatamanho"></span>  
			</li>
			<?php endforeach; ?>
		</ul>
		<a class="pos02" href="http://cmais.com.br/transito" name="modal" title="Lentidão dos Corredores" target="_blank">Lentidão dos Corredores</a>
	</div>
</body>
</html>