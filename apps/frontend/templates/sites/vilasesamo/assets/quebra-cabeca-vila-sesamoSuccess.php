<!DOCTYPE html>
<!--html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" lang="pt-br"-->
<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página</noscript>"
?>
<html lang="pt-br"> 
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE"-->
   
    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <?php echo $noscript; ?> 
   <script>
   //determinando se é mobile, tablet ou desktop - para não ter cache
    function getURLParameter(name){
      return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
    }
    var view="";
    var html = "";
      
    //verificando navegador
    $userAgent = navigator.userAgent;
    //console.log($userAgent);
    var str = $userAgent;
    if(str.indexOf("iPhone") != -1 || str.indexOf("iPod") != -1 || str.indexOf("Android") != -1 && str.indexOf("Mobile") != -1 || str.indexOf("Windows Phone") != -1 && str.indexOf("IEMobile") != -1)  {
      view += '<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/acessibilidade.css" type="text/css" />';
      view += '<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/geral.css" type="text/css" />';
      view += '<link rel="stylesheet" media="screen" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_smal_screen.css" />';
    }else{
      view += '<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/acessibilidade.css" type="text/css" />';
      view += '<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/geral.css" type="text/css" />';
      view += '<link rel="stylesheet" media="only screen and (min-width:501px) and (max-width:979px)" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_medium_screen.css" />';
      view += '<link rel="stylesheet" media="only screen and (min-width:50px) and (max-width:500px)" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_smal_screen.css" />';
    }

    //view += '<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/acessibilidade.css" type="text/css" />';
    //view += '<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/geral.css" type="text/css" />';
  
    $('head').prepend(view);
    </script>
    <?php echo $noscript; ?> 
    <script src="http://cmais.com.br/portal/js/bootstrap-v2.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <?php echo $noscript; ?> 
    <link href="http://cmais.com.br/portal/js/bootstrap-v2.3.1/css/bootstrap.css" rel="stylesheet" type="text/css">
    <?php echo $noscript; ?>
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/animate.css">
        

     
     <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
     <!--[if lt IE 9]>
       <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
        
     <!--[if lte IE 8]>
       <link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/ie.css" />
     <![endif]-->
    
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />
    
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://cmais.com.br/portal/images/icon/cmais-favico_144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cmais.com.br/portal/images/icon/cmais-favico_114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png">
    
    <link rel="apple-touch-icon" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png" />
    <link rel="SHORTCUT ICON" href="http://cmais.com.br/portal/images/icon/favicon.ico" type="image/x-icon">
    
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
    <?php echo $noscript; ?>
    
    <!--banner vila sesamo 2013-->
    <script type='text/javascript'>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
      (function() {
      var gads = document.createElement('script');
      gads.async = true;
      gads.type = 'text/javascript';
      var useSSL = 'https:' == document.location.protocol;
      gads.src = (useSSL ? 'https:' : 'http:') + 
      '//www.googletagservices.com/tag/js/gpt.js';
      var node = document.getElementsByTagName('script')[0];
      node.parentNode.insertBefore(gads, node);
      })();
    </script>
    <?php echo $noscript; ?>
    
    <script type='text/javascript'>
      googletag.cmd.push(function() {
      googletag.defineSlot('/4079539/vilasesamo', [300, 250], 'div-gpt-ad-1385748525978-0').addService(googletag.pubads());
      googletag.pubads().enableSingleRequest();
      googletag.enableServices();
      });
    </script>
    <?php echo $noscript; ?>
    <!--/banner vila sesamo 2013-->
  </head>
  
  <body>
    <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--Pular navegação-->
    <a href="#content" aria-label="pular Menu principal e ir direto para o conteudo" class="ac-pular" tabindex="2">pular começo</a>
    
    <!--header mobile-->
    <header id="header-mobile" class="header-mobile header--fixed">  
      
      <!-- Menu Mobile mapa site  -->
      <a href="http://cmais.com.br/vilasesamo" title="Vila Sésamo" class="logo-mobile">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mobile/logo-mobile.png"  alt="Logo Vila Sésamo">
      </a>
      
      <!--button id="alca" class="alca" data-header="teste">&nbsp;</button-->
      
      <div class="imagem-topo">
        <!--img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mobile/img_topo_mobile.png" /-->
      </div>
      
      <a href="#" title="menu Vila Sésamo" class="btn-menu">
       <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mobile/icon_menu_mobile.png" alt="Menu Vila Sésamo">
      </a> 
      <nav id="nav-mobile" class="nav-mobile">
        <div class="search-mobile">
          <form action="http://cmais.com.br/vilasesamo/busca" method="get">
            <input type="text" class="search-query" onfocus="this.value='';" title="Encontre no site" name="term" placeholder="BUSQUE NO SITE" >
            <button type="submit" class="icones-sprite-menu icone-busca" title="buscar no site vila sesamo" aria-hidden="true"></button>
          </form>
        </div>
        <a href="http://cmais.com.br/vilasesamo/jogos" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/jogos.png">
          Jogos
        </a>
        <a href="http://cmais.com.br/vilasesamo/videos" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/videos.png">
          Vídeos
        </a>
        <a href="http://cmais.com.br/vilasesamo/atividades" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/atividades.png">
          Atividades
        </a>
        <a href="http://cmais.com.br/vilasesamo/personagens" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens.png">
          Personagens
        </a>
        <a href="http://cmais.com.br/vilasesamo/pais-e-educadores" title="Site Vila Sésamo" target="_self">
          Pais e Educadores
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/pais.png">
        </a>
        <a href="http://cmais.com.br/vilasesamo/na-tv" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/natv.png">
          Na TV
        </a>
        <a href="http://cmais.com.br/vilasesamo/acessibilidade" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/acessibilidade.png">
          Acessibilidade
        </a>
        <a href="http://cmais.com.br/vilasesamo/historia" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/icon-mobile-historia.png">
          História
        </a>
        <!--a class="last"title="Site Vila Sésamo" target="_self">
          Fechar
        </a-->
      </nav>
 
    </header>
    <!-- /header mobile -->
    
    <!-- header tablet -->
    <header id="header-tablet" class="header-tablet header--fixed">
      <!-- Menu Mobile mapa site  -->
      <a href="#" title="Vila Sésamo" class="logo-mobile">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mobile/logo-mobile.png"  alt="Logo Vila Sésamo">
      </a>
      
      <button id="alca" class="alca" data-header="teste">&nbsp;</button>
      
      <div class="imagem-topo">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mobile/img_topo_mobile.png" />
      </div>
      
      <a href="#" title="menu Vila Sésamo" class="btn-menu">
       <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mobile/icon_menu_mobile.png" alt="Menu Vila Sésamo">
      </a> 
      
      <nav id="nav-tablet" class="nav-mobile">
        <div class="search-mobile">
          <form action="http://cmais.com.br/vilasesamo/busca" method="get">
            <input type="text" class="search-query" onfocus="this.value='';" title="Encontre no site" name="term" placeholder="BUSQUE NO SITE" >
            <button type="submit" class="icones-sprite-menu icone-busca" title="buscar no site vila sesamo" aria-hidden="true"></button>
          </form>
        </div>
        <a href="http://cmais.com.br/vilasesamo/jogos" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/jogos.png">
          Jogos
        </a>
        <a href="http://cmais.com.br/vilasesamo/videos" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/videos.png">
          Vídeos
        </a>
        <a href="http://cmais.com.br/vilasesamo/atividades" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/atividades.png">
          Atividades
        </a>
        <a href="http://cmais.com.br/vilasesamo/personagens" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens.png">
          Personagens
        </a>
        <a href="http://cmais.com.br/vilasesamo/pais-e-educadores" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/pais.png">
          Pais e Educadores
        </a>
        <a href="http://cmais.com.br/vilasesamo/na-tv" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/natv.png">
          Na TV
        </a>
        <a href="http://cmais.com.br/vilasesamo/acessibilidade" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/acessibilidade.png">
          Acessibilidade
        </a>
        <a href="http://cmais.com.br/vilasesamo/historia" title="Site Vila Sésamo" target="_self">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/icon-mobile-historia.png">
          História
        </a>
        <!--a class="last"title="Site Vila Sésamo" target="_self">
          Fechar
        </a-->
      </nav>
    </header>  
    <!-- /header tablet -->
    
    <!-- header desktop -->
    <header class="navbar navbar-inverse navbar-fixed-top header-desktop">
      
      <!--topo-vila-->
      <div class="navbar-inner topo-vila">
        <!--/container-->
        <div class="container">

          <!--nav--> 
          <nav class="nav-collapse collapse" title="menu principal Vila Sésamo">
            <!--ul.nav-->
            <ul class="nav">
              <li>
                <i class="icones-sprite-menu icone-cuidadores"></i>
                <a class="btn-cuidadores-topo" href="http://cmais.com.br/vilasesamo/pais-e-educadores" title="Pais e Educadores" target="_self" aria-label="Pais e Educadores. Dicas, conteúdos para os pais e ediucadores. Leia, participe, compartilhe.">Pais e Educadores</a>
                <span class="sprite-menu-ball"></span>
              </li>
              <li>
                <i class="icones-sprite-menu icone-natv-peqno-verde"></i> 
                <a class="btn-na-tv-topo" href="http://cmais.com.br/vilasesamo/na-tv" title="Na TV" target="_self" aria-label="Na TV. Resuminho da história do Vila Sésamo e seus horários de exibição no Canal TV Cultura e TV Rá-Tim-Bum">Na TV</a>
                <span class="sprite-menu-ball"></span>
              </li>
               <li>  
                <i class="icones-sprite-menu icone-acessibilidade-pqno-verde"></i>
                <a class="btn-acessibilidade-topo" href="http://cmais.com.br/vilasesamo/acessibilidade" title="Acessibilidade" target="_self" aria-label="Acessibilidade. Explicação do que estamos fazendo para deixar a cada dia o site do Vila Sésamo mais e mais acessível">Acessibilidade</a>
                <span class="sprite-menu-ball"></span>
              </li>  
              <li>  
                <i class="icones-sprite-menu icone-historia-pqno-verde"></i>
                <a class="btn-historia-topo" href="http://cmais.com.br/vilasesamo/historia" title="Historia" target="_self" aria-label="História. Conheça um pouco mais sobre a história do Vila Sésamo">História</a>
                <!--span class="sprite-menu-ball"></span-->
              </li>  
             
              <!--li>
                <a href="/vilasesamo2/historia" title="História" target="_self">História</a>
              </li-->            
            </ul> 
            <!--ul.nav-->
            
            <!--form-->
            <form class="form-search" action="http://cmais.com.br/vilasesamo/busca" method="get">
              <input type="text" class="input-large search-query" value="Encontre no site Vila Sésamo" onfocus="this.value='';" title="Encontre no site" name="term" accesskey="Ctrl+b" >
              <button type="submit" class="icones-sprite-menu icone-busca" title="buscar no site vila sesamo" aria-hidden="true"></button>
            </form>
            <!--/form-->
          </nav>
          <!--/nav-->
        </div>
        <!--/container-->
      </div>
      <!--/topo-vila-->
            
    </header>
    <!-- /header --> 
    
    <!--conteudo Game -->
    <?php
    /*
   * Pega a campanha (seção filha de "campanhas") e as categorias (seçao filha de "categorias") as quais o asset pertence
   */
  $categories = array();
  $sections = $asset->getSections();
  foreach($sections as $s) {
    if($s->getParentSectionId() > 0) {
      $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
      if($parentSection->getSlug() == "categorias") {
        $categories[] = $s;
      }
    }
  }
  $campaign = false;
  foreach($sections as $s) {
    if($s->getParentSectionId() > 0) {
      $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
      if($parentSection->getSlug() == "campanhas") {
        if($s->getIsActive() == 1) { 
          $campaign = $s;
          break;
        }
      }
    }
  }
      
?>
<style>
object{height:460px!important;}
</style>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<?php echo $noscript; ?>
<script src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<?php echo $noscript; ?>
<script src="http://cmais.com.br/portal/js/hammer.min.js" type="text/javascript"></script>
<?php echo $noscript; ?>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<?php echo $noscript; ?>
<script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/paiseeducadores.js"></script>
<?php echo $noscript; ?>
<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap-fileupload.js"></script>
<?php echo $noscript; ?>

<script>
  $("body").addClass("interna jogos");
</script>
<?php echo $noscript; ?>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  <h1 tabindex="0" class="ac-explicacao">
    Você está na jogo <?php echo $asset->getTitle() ?>
  </h1>
  
  <!--section -->
  <section class="filtro row-fluid">
    <h1 tabindex="0" class="ac-explicacao">
      Você está na atividade <?php echo $asset->getTitle() ?>
    </h1>
    <h1>
      <i class="icones-sprite-interna icone-jogos-grande"></i>
      <?php echo $section->getTitle() ?>
      <a class="todos-assets" title="voltar para todas jogos" href="/<?php echo $site->getSlug()?>/<?php echo $section->getSlug()?>" target="_self" >
        <i class="icones-setas icone-voltar-jogos"></i>
        <p aria-hidden="true" tabindex="-1">todos os jogos</p>
      </a>
    </h1>
    
    <!--conteudo-asset-->
    <div class="conteudo-asset">
      
        <h2  tabindex="0"><?php echo $asset->getTitle() ?></h2>
          <?php
          /*
           * Este código serve apenas para pegar o selo (imagem) que indica que o asset pertence a uma categoria especial (entenda categoria como subseção de "categorias").
           * Este selo é um destaque de imagem - pode ser genérico! - dentro do bloco "selo" de cada categoria.
           * Todas as categorias tem este bloco, mas somente as marcadas como "is homepage" serão consideradas como especiais, tais como "Incluir Brincando" e "Hábitos Saudáveis".
           */
          ?>
          <p aria-label="Jogo: <?php echo $asset->getDescription() ?>"  tabindex="0">
          
            <span aria-hidden="true" style="width: 70%;float: left;"><?php echo $asset->getDescription() ?></span>
            <?php if(isset($categories)): ?>
            <?php if(count($categories) > 0): ?>
              <?php
                foreach($categories as $c) {
                  if($c->getIsHomepage() == 1) { // A seção filha de "categorias" precisa estar com a opção "is Homepage" marcada para ser considerada especial, tais como "Hábitos Saudáveis" e "Incluir Brincando".
                    $seloTitle = $c->getTitle(); // pega o título da secão filha
                    $seloUrl = $c->retriveUrl(); // pega a url da seção filha
                    $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($c->getId(), "selo"); // Pega o bloco "selo" da seção filha
                    $category_displays["selo"] = $block->retriveDisplays(); // Pega os destaques do bloco "selo"
                    $seloImageUrl = $category_displays["selo"][0]->retriveImageUrlByImageUsage("original"); // Pega a imagem do destaque
                  }
                }
              ?>
              <?php if(isset($seloImageUrl)): ?>
                <a  href="<?php echo $seloUrl ?>" title="<?php echo $seloTitle ?>">
                  <img src="<?php echo $seloImageUrl ?>" alt="<?php echo $seloTitle ?>" />
                </a>
              <?php endif; ?>
            <?php endif; ?>
          <?php endif; ?>
          </p>
          
          
          <?php if(isset($asset)): ?>
          <div class="turn-the-cell-please" style="display:none;">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/vire-celular.png" alt=""/>
          </div>
       
          <div class="asset" style="display:none;">
            <?php //echo html_entity_decode($asset->AssetContent->render()) ?>
            <!--GAME-->
            <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a id="play-top" href="#"> <span class="glyphicon glyphicon-play"></span> Play</a></li>
                </ul>
                <h3 class="text-muted">HTML5 d</h3>
            </div>

            <div class="jumbotron">
                <h1>HTML5 Shape Puzzle</h1>
                <p class="lead">HTML5 Version of the game the preschool kids love!</p>


                <p>
                  <button id="play-btn-lg" type="button" class="btn btn-success btn-lg">
                    <span class="glyphicon glyphicon-play"></span> PLAY
                  </button>
                </p>
            </div>

        </div>
        
        <ul class="nav nav-pills abs">
          <li id="home">
            <button id="btn-home" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-home"></span> Home</button>
          </li>
          <li id="play">
            <button id="btn-play" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-play"></span> Play</button>
          </li>
          <li id="pause" class="control">
            <button id="btn-pause" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-pause"></span> Pause</button>
          </li>
          <li id="fullscreen" class="control">
            <button id="btn-fullscreen" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-fullscreen"></span> Fullscreen</button>
          </li>
          <li id="exitfullscreen" class="control">
            <button id="btn-exitfullscreen" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-resize-small"></span> Exit Fullscreen</button>
          </li>
          <li id="bgm" class="control">
            <button id="btn-bmg-on" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-volume-up"></span> BGM On</button>
          </li>
          <li id="bgmoff" class="control">
            <button id="btn-bmg-off" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-volume-off"></span> BGM Off</button>
          </li>
          <li id="sfx" class="control">
            <button id="btn-sfx-on" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-volume-up"></span> SFX On</button>
          </li>
          <li id="sfxoff" class="control">
            <button id="btn-sfx-off" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-volume-off"></span> SFX Off</button>
          </li>
          <li id="autosnap" class="control">
            <button id="btn-autosnap-on" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-remove"></span> Auto-Snap On</button>
          </li>
          <li id="autosnapoff" class="control">
            <button id="btn-autosnap-off" type="button" class="btn btn-xs btn-default"> <span class="glyphicon glyphicon-ok"></span> Auto-Snap Off</button>
          </li>
        </ul>

        <!-- Game modal -->
        <div id="modal-success" class="modal show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="myModalLabel">Yes, you did it!</h1>
              </div>
              <div class="modal-body">
                <p><span id="stage" class="label label-success">Stage 1 completed!</span></p>
                <p><span id="pieces" class="label label-warning">4 pieces in 30s</span></p>
                <hr />
                <p>
                  <!-- Responsive Ad #2 -->
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6794644097825747" data-ad-slot="1396510736" data-ad-format="auto"></ins>
                  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                </p>
              </div>
              <div class="modal-footer">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary" id="btn_voice">Voice</button>
                  <button type="button" class="btn btn-primary" id="btn_sound">Sound</button>
                  <button type="button" class="btn btn-danger" id="next">Next Stage</button>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    
    <!-- Game canvas -->
    <div id="game">
      <canvas id="canvas" style="display:none"></canvas>
      <canvas id="canvas_bg" style="display:none"></canvas>
    </div>

    <!-- DEBUG -->
    <div id="debug" style="display:none">
      <div>
        pieces: <input type="text" name="p" id="p" />
        pieces placed: <input type="text" name="pp" id="pp" />
        lines: <input type="text" name="l" id="l" />
        Pieces width: <input type="text" name="pw" id="pw" />
        Pieces height: <input type="text" name="ph" id="ph" />
      </div>
      <div>
        moving: <input type="text" name="moving" id="moving" />
        over: <input type="text" name="over" id="over" />
        selected: <input type="text" name="selected" id="selected" />
      </div>
      <div>
        x: <input type="text" name="mx" id="mx" />
        y: <input type="text" name="my" id="my" />
      </div>
      <div>
        p1 x: <input type="text" name="px" id="px" />
        p1 y: <input type="text" name="py" id="py" />
      </div>
      <div>
        h1 x: <input type="text" name="hx" id="hx" />
        h1 y: <input type="text" name="hy" id="hy" />
      </div>
      <div>
        h2 x: <input type="text" name="hx2" id="hx2" />
        h2 y: <input type="text" name="hy2" id="hy2" />
      </div>
    </div>
    <!-- /DEBUG -->

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="bower_components/jquery/jquery.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
            <!--GAME-->
            teste3
          </div>
          <input class="top" type="hidden" value="false">
          <?php endif; ?>
          
        </div>
      </section>
      <!--/section-->
    
      <?php include_partial_from_folder('sites/vilasesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
  
      <?php include_partial_from_folder('sites/vilasesamo', 'global/brinque-tambem-com', array("site" => $site, "section" => $section, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
      
      <?php include_partial_from_folder('sites/vilasesamo', 'global/para-os-pais', array("site" => $site, "asset" => $asset, "categories" => $categories, "uri" => $uri)) ?>
    
    </div>
    <!--/content-->
    <script>
    $(document).find('object').before('<span class="sorryFlash" aria-label="Desculpe amiguinho, esse jogo esta sem acessibilidade mas você pode chamar o papai e a mamãe ou um amiguinho pra vocês brincarem juntos, é divertido ou continue navegando e descobrindo as várias formas de se divertir! Até mais!" tabindex="0"></span>').find('embed').after('<noembed>esse jogo usa plugin flash</noembed>');
    $('.sorryFlash').focus();
    </script>
    <?php echo $noscript ?>  
    
    <script>
    setInterval(function(){
      updateOrientation();  
    },500);
    
    
    function updateOrientation(){  
      var screenWidth = screen.width;
      var windowWidth = window.innerWidth;
      //alert(windowWidth)
      //console.log("oiiiii");
      if (windowWidth > 470 || (screenWidth > 470 && windowWidth > 470 && window.orientation == 90) || (screenWidth > 470 && windowWidth > 470 && window.orientation == -90) || navigator.platform == "Win32" || navigator.platform == "Win64") {  
        $('.asset').fadeIn('fast');
        $('.turn-the-cell-please').hide();
        //goTopGame('header');
      } else {  
        $('.asset').hide();
        $('.turn-the-cell-please').fadeIn('fast'); 
        //goTopGame('#gameIntro'); 
      } 
    }
    
    function goTopGame(el){
      alert($(el).offset().top)
      $('html, body').animate({
        scrollTop:parseInt($(el).offset().top)
      }, "fast");
      
    }
    </script>
    <?php echo $noscript; ?>
    <!--conteudo Game -->
    
    <!--footer mobile-->
    <footer id="mobile" aria-label="você está no rodapé da pagina. com links para as páginas e sites relacionados" tabindex="0" >
      
      <div class="copyright" role="presentation" aria-hidden="true" >
        <small>© 2014 - Vila Sésamo</small>
      </div>
      
      <!--container-->
      <div class="container row-fluid">
        
        <!--section-->  
        <section aria-label="Você está entrando no rodapé da página">
          
          <!--logos-->
          <nav class="logos">
              <!--a href="http://cmais.com.br/vilasesamo" title="Site Vila Sésamo" target="_self">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vila-sesamo-mobile.jpg">
              </a-->
           <ul>
             <li>
               <a class="habitos" href="http://cmais.com.br/vilasesamo/categorias/habitos-saudaveis" title="Hábitos Saudáveis" target="_self">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/habitos-saudaveis-mobile.jpg">
              </a>
             </li>
             <li>
               <a class="habitos" href="http://cmais.com.br/vilasesamo/categorias/incluir-brincando" title="Incluir Brincando" target="_self">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/incluir-brincando-mobile.jpg">
              </a>
             </li>
           </ul>  
            <!--img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" /-->
          </nav>
          <!--/logos-->
          
          <?php
          /*
          <!--mapa-->
          <div class="mapa">
            
            <!--nav sites Vila Sesamo-->
            <nav class="span12" title="Sites Vila Sésamo" aria-disabled="true">
              <a href="http://cmais.com.br/vilasesamo/jogos" class="col-esq cuidadores-footer" title="Jogos" target="_self">Jogos</a>
              <a href="http://cmais.com.br/vilasesamo/videos" class="col-central natv-footer" title="Videos" target="_self"><i class="icones-rodape icone-triangulo-claro"></i>Vídeos</a>
            </nav>
            <!--nav sites Vila Sesamo-->
            
            <!--nav-->
            <nav class="span12">
              <a href="/vilasesamo/personagens" class="col-esq cuidadores-footer" title="">Atividades</a><!--cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/pais-e-educadores" class="col-central natv-footer" title=""><i class="icones-rodape icone-triangulo-claro"></i>Pais e Educadores</a><!-- natv-footer - cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
            </nav>
            <nav class="span12">
              <a href="/vilasesamo/na-tv" class="col-esq cuidadores-footer" title="">Na TV</a><!--cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/acessibilidade" class="col-central natv-footer" title=""><i class="icones-rodape icone-triangulo-claro"></i>Acessibilidade</a><!-- natv-footer - cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <!--a href="/vilasesamo/acessibilidade" class="col-dir" title=""><i class="icones-rodape icone-triangulo-medio"></i>Acessibilidade</a>
              <a href="/vilasesamo2/atividades" class="col-dir" title=""><span class="sprite-destalhe-amarelo1"></span>História</a-->
            </nav>
            <!--/nav-->
                  
          </div>
          <!--/mapa-->
           * */
           
          ?>
          <img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" />
          <!--Logo TV rodapé mobile-->
          <div class="logotv-mobile">
            <a href="http://tvcultura.cmais.com.br/" target="_blank"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/icon-tvcultura.png"></a>
          </div>
        </section>
        <!--/section-->
        <section class="relacionados" aria-label="sites relacionados" tabindex="0">
          <h1>Sites relacionados</h1>
          <nav class="relacionados-mobile">
            <a href="http://tvcultura.cmais.com.br/" target="_self" title="TV Cultura"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-cultura.jpg"></a>
            <a href="http://tvratimbum.cmais.com.br/" target="_self" title="TV Rá Tim Bum"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-tv-ratimbum.jpg"></a>
            <a class="fifty" href="http://cmais.com.br/maiscrianca" target="_self" title="Mais Criança"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-mais-crianca.jpg"></a>
          </nav>
          <nav class="relacionados-mobile">
            <a class="cocoh" href="http://tvcultura.cmais.com.br/cocorico" target="_self" title="TV Cocoricó"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-cocorico.jpg"></a>
            <a class="castelo" href="http://tvcultura.cmais.com.br/castelo" target="_self" title="Castelo Rá Tim Bum"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-castelo.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/cartaozinho" target="_self" title="Cartãozinho"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-logo-cartao-verde.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/quintaldacultura" target="_self" title="Quintal da Cultura"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/ma-lg-quintal.jpg"></a>
          </nav>
        </section>
      
      </div>
      <!--/container-->
      
      
    </footer>
    <!--/footer mobile-->
    
    
    <!-- Footer > 640 -->    
   <footer id="no-mobile" aria-label="você está no rodapé da pagina. com links para as páginas e sites relacionados" tabindex="0" >
      
     
      <!--container-->
      <div class="container row-fluid">
        
        <!--section-->  
        <section aria-label="Você está entrando no rodapé da página">
          
          <!--logos-->
          <!--ul class="logos">
            <li class="col-esq">
              <a href="http://cmais.com.br/vilasesamo" title="Site Vila Sésamo" target="_self">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/vila-sesamo-mobile.jpg">
              </a>
            </li>
            <li class="col-central habitos">
              <a href="http://cmais.com.br/vilasesamo/categorias/habitos-saudaveis" title="Hábitos Saudáveis" target="_self">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/habitos-saudaveis-mobile.jpg">
              </a>
            </li>
            <li class="col-dir incluir">
              <a href="http://cmais.com.br/vilasesamo/categorias/incluir-brincando" title="Incluir Brincando" target="_self">
                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/incluir-brincando-mobile.jpg">
              </a>
            </li>
            <img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" />
          </ul-->
          <!--/logos-->
          
          <!--mapa-->
          <div class="mapa">
            
            <!--nav sites Vila Sesamo-->
            <nav class="span12" title="Sites Vila Sésamo" aria-disabled="true">
              <a href="http://cmais.com.br/vilasesamo/jogos" class="col-esq" title="Jogos" target="_self">Jogos</a>
              <a href="http://cmais.com.br/vilasesamo/videos" class="col-central" title="Jogos" target="_self"><i class="icones-rodape icone-triangulo-claro"></i>Vídeos</a>
              <a href="http://cmais.com.br/vilasesamo/atividades" class="col-dir" title="Jogos" target="_self"><i class="icones-rodape icone-triangulo-medio"></i>Atividades</a>
            </nav>
            <!--nav sites Vila Sesamo-->
            
            <!--nav Personagens-->
            <nav class="span12 personagens-rodape" id="personagens-rodape" title="Menu Personagens" aria-hidden="true" tabindex="-1">
              <!--<h3>PERSONAGENS:</h3>-->
              <span class="titulo">PERSONAGENS:</span>
              <ul>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/garibaldo" title="Garibaldo" target="_self" aria-hidden="true" tabindex="-1">Garibaldo</a><span>,</span>
                </li>
                <li aria-hidden="true" tabindex="-1">
                  <a href="http://cmais.com.br/vilasesamo/personagens/bel" title="Bel" target="_self" aria-hidden="true" tabindex="-1">Bel</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/elmo" title="Elmo" target="_self" aria-hidden="true" tabindex="-1">Elmo</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/grover" title="Grover" target="_self" aria-hidden="true" tabindex="-1">Grover</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/beto" title="Beto" target="_self" aria-hidden="true" tabindex="-1">Beto</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/enio" title="Ênio" target="_self" aria-hidden="true" tabindex="-1">Ênio</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/come-come" title="Come-Come" target="_self" aria-hidden="true" tabindex="-1">Come-Come</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/zoe" title="Zoe" target="_self" aria-hidden="true" tabindex="-1">Zoe</a><span>,</span>
                </li>
                <li>
                  <a href="http://cmais.com.br/vilasesamo/personagens/sivan" title="Sivan" target="_self" aria-hidden="true" tabindex="-1">Sivan</a>
                </li>
              </ul>
            </nav> 
            <!--/nav Personagens-->
            
            <!--nav-->
            <nav class="span12">
              <a href="/vilasesamo/historia" class="col-um " title="">História</a><i class="icones-rodape icone-triangulo-escuro"></i><!--cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/pais-e-educadores" class="col-dois " title=""></i>Pais e Educadores</a><!--cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/na-tv" class="col-tres" title=""><i class="icones-rodape icone-triangulo-claro"></i>Na TV</a><!-- natv-footer - cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/acessibilidade" class="col-quatro" title=""><i class="icones-rodape icone-triangulo-medio"></i>Acessibilidade</a>
              <!--a href="/vilasesamo2/atividades" class="col-dir" title=""><span class="sprite-destalhe-amarelo1"></span>História</a-->
            </nav>
            <!--/nav-->
                  
          </div>
          <!--/mapa-->
          
          <img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" />
        </section>
        <!--/section-->
        <section class="relacionados" aria-label="sites relacionados" tabindex="0">
          <h1>Sites relacionados</h1>
          <ul>
            <li><a href="http://tvcultura.cmais.com.br/" target="_self" title="TV Cultura"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-cultura.png"></a></li>
            <li><a href="http://tvratimbum.cmais.com.br/" target="_self" title="TV Rá Tim Bum"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-tv-ratimbum.png"></a></li>
            <li class="fiftypercent mais"><a href="http://cmais.com.br/maiscrianca" target="_self" title="Mais Criança"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-mais-crianca.png"></a></li>
          </ul>
          <ul>
            <li class="cocorico"><a href="http://tvcultura.cmais.com.br/cocorico" target="_self" title="TV Cocoricó"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-cocorico.png" style="margin-top: 15px"></a></li>
            <li class="castelo"><a href="http://tvcultura.cmais.com.br/castelo" target="_self" title="Castelo Rá Tim Bum"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-castelo.png"></a></li>
            <li class="cartaozinho"><a href="http://tvcultura.cmais.com.br/cartaozinho" target="_self" title="Cartãozinho"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-logo-cartao-verde.png"></a></li>
            <li class="last quintal"><a href="http://tvcultura.cmais.com.br/quintaldacultura" target="_self" title="Quintal da Cultura"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/ma-lg-quintal.png"></a></li>
          </ul>
          
          <nav class="relacionados-mobile">
            <a href="http://tvcultura.cmais.com.br/" target="_self" title="TV Cultura"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-cultura.jpg"></a>
            <a href="http://tvratimbum.cmais.com.br/" target="_self" title="TV Rá Tim Bum"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-tv-ratimbum.jpg"></a>
            <a class="fifty" href="http://cmais.com.br/maiscrianca" target="_self" title="Mais Criança"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-mais-crianca.jpg" style="margin-top: 5px"></a>
          </nav>
          <nav class="relacionados-mobile">
            <a class="cocoh" href="http://tvcultura.cmais.com.br/cocorico" target="_self" title="TV Cocoricó"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-cocorico.jpg"></a>
            <a class="castelo" href="http://tvcultura.cmais.com.br/castelo" target="_self" title="Castelo Rá Tim Bum"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-lg-castelo.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/cartaozinho" target="_self" title="Cartãozinho"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/mb-logo-cartao-verde.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/quintaldacultura" target="_self" title="Quintal da Cultura"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/ma-lg-quintal.jpg"></a>
          </nav>
        </section>
        <!--Copyright-->
        <div class="copyright" role="presentation" aria-hidden="true" >
            <small>© 2014 - Vila Sésamo</small>
        </div>
      
      </div>
      <!--/container-->
      
    </footer>
    <!--/footer > 640-->
    
    <!--headroom - hide header mobile-->
    <script  type="text/javascript"  src="http://cmais.com.br/portal/js/headroom/headroom.js"></script> 
    <?php echo $noscript; ?>     
    <script  type="text/javascript"  src="http://cmais.com.br/portal/js/headroom/jQuery.headroom.js"></script>
    <?php echo $noscript; ?>
    
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/vilasesamo2/vilasesamo.js"></script>
    <?php echo $noscript; ?>
    
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
    <?php echo $noscript; ?>
    <!-- /scripts -->
    
    <div id="fb-root"></div>
    

    <?php echo $noscript; ?>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <?php echo $noscript; ?>
    
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
    <?php echo $noscript; ?>
    
    
      
       
  </body>
</html>   