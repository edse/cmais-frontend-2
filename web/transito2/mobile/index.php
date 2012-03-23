<?php
  $xmlTransitoAgoraCET = file_get_contents('http://cetsp1.cetsp.com.br/monitransmapa/xmltransitoagora.asp');
  try {
    $transitoagora = new SimpleXMLElement($xmlTransitoAgoraCET);
  }
  catch (Exception $e) {}
?>
<!DOCTYPE html> 
<html> 
  <head> 
  <title>Trânsito</title> 
  
  <!--HEADER PADRAO JQUERY MOBILE-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
  <!--CSS PAGINA TRANSITO-->
  <link rel="stylesheet" href="css/transito.css" />
  <!--/CSS PAGINA TRANSITO-->
  
  <!--GOOGLE ANALYTICS-->
  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
  <!--/GOOGLE ANALYTICS-->  
  
  <!--BUBBLE BOOKMARK-->
  <link rel="stylesheet" href="css/add2home.css">
  <link rel="apple-touch-icon" href="images/ico-transito-final.png">
  <script type="text/javascript">
  var addToHomeConfig = {
    autostart:true,
    animationIn: 'bubble',
    animationOut: 'drop',
    lifespan:20000,
    expire:0,
    touchIcon:true,
    arrow:true,
    message:'. Instale esta Web App no seu <strong>%device</strong>. Clique em %icon e <strong>Adicionar à Tela Início</strong> .'
  };
  </script>
  <script type="application/javascript" src="js/add2home.js"></script>
  <!--BUBBLE BOOKMARK-->
  
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
  <!--/HEADER PADRAO JQUERY MOBILE-->
</head>

<body> 

<!--PAGINA INDEX-->
<div id="index" data-role="page" data-fullscreen="true" >
  
  <!--TOPO-->
  <div data-role="header" class="header">
    
      <h1 class="tituloHeader">
  
        <img src="images/logo_cmais.png"/>
  
      </h1>
      
      <!--ESCOLHA UMA REGIAO / CAMERA AO VIVO-->
      <div class="barra">
        <p class="texto-zona w40 flLeft">Escolha a Região:</p>
        <p class="texto-zona w40 flRight texAligRight">Câmeras ao vivo</p>
      </div>
      <!--/ESCOLHA UMA REGIAO / CAMERA AO VIVO-->
  
  </div>
  <!--/TOPO-->
  
  <!--CORPO-->
  <div id="container" data-role="content" align="center"> 
    
    <!--MENU REGIÕES-->
    <ul class="menuZonas">
      <li>
        <!--Botao Zona -->
        <a href="todas.html" class="" >
            <span class="local">Todas</span>
            <!--Congestionamento-->
            <div class="quadrado <?php echo strtolower($transitoagora->tendenciacidade); ?>">
                <span class="km"><?php echo $transitoagora->lentidaocidade; ?> km</span>
                <div class="status"><img src="images/ico-seta-transito-<?php echo strtolower($transitoagora->tendenciacidade); ?>.png"></div>
            </div>
            <!--/Congestionamento-->
        </a>
        <!--/Botao Zona -->
      </li>
      <?php foreach($transitoagora->regiao as $k=>$r): ?>
      <li>
        <!--Botao Zona -->
        <a href="<?php echo strtolower($r->Attributes()->ID); ?>.html" class="" >
          <?php if ($r->Attributes()->ID == 'Centro'): ?>
            <span class="local"><?php echo $r->Attributes()->ID; ?></span>
          <?php else: ?>
            <span class="local">Zona <?php echo $r->Attributes()->ID; ?></span>
          <?php endif; ?>
            <!--Congestionamento-->
            <div class="quadrado <?php echo strtolower($r->tendencia) ?>">
                <span class="km"><?php echo $r->lentidao; ?> Km</span>
                <div class="status"><img src="images/ico-seta-transito-<?php echo strtolower($r->tendencia) ?>.png"></div>
            </div>
            <!--/Congestionamento-->
        </a>
        <!--/Botao Zona -->
      </li>
      <?php endforeach; ?>
      <li>
        <!--Botao Zona -->
        <a href="estradas.html" class="" data-ajax="false">
            <span class="local">Estradas</span>
            
        </a>
        <!--/Botao Zona -->
      </li>
      <li>
        <!--Botao Zona -->
        <a href="balsas.html" class="" style="border-bottom: none;" data-ajax="false" >
            <span class="local">Balsas</span>
        </a>
        <!--/Botao Zona -->
      </li>
    </ul>
    
    <!--MENU REGIÕES-->
    <!--PARTICIPE / MAPAS-->
      <div id="btn-nav" align="center">
        <a href="participe.html" id="btn-participe" class="flLeft" data-ajax="false" >Participe</a>
        <a href="cmaisgoogle.html" id="btn-mapa" class="flRight" data-ajax="false" >
          <div class="w100">
            <div class="cont-btn-mapa">
               Mapas
            </div>
          </div>
        </a>
      </div>
      <!--PARTICIPE / MAPAS-->
 
  </div>
  <!--CORPO-->
  
</div>
<!--PAGINA INDEX--> 


</body>
</html>