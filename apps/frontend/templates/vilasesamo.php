<!DOCTYPE html>
<!--html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" lang="pt-br"-->
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página</noscript>"
?>
<html lang="pt-br"> 
  <head>
    
    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>
    <meta name="mobile-view" content="HandheldFriendly" content="true"/>
    <meta name="mobile-view" content="MobileOptimized" content="320" />
    <meta name="mobile-view"content="viewport" content="width=980, maximum-scale=2, minimum-scale=2, initial-scale=2, user-scalable=false" /> 
    <!--META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE"-->
    <!-- Le styles -->  
    <link href="http://cmais.com.br/portal/js/bootstrap-v2.3.1/css/bootstrap.css" rel="stylesheet" type="text/css">
    <!--link rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/acessibilidade.css" type="text/css" /-->
    <!--link rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/geral.css" type="text/css" /-->
    <?php if(strstr($user_agent, 'iPhone') == true || (strstr($user_agent, 'Android') == true && strstr($user_agent, 'Mobile') == true) || (strstr($user_agent, 'Windows Phone') == true && strstr($user_agent, 'IEMobile') == true)): ?> 
      <link title="mobile-css" rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/acessibilidade.css" type="text/css" />
      <link title="mobile-css" rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/geral.css" type="text/css" />
      <link title="mobile-css" rel="stylesheet" media="screen" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/media_smal_screen.css" />
    <?php else:?>
      <link rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/acessibilidade.css" type="text/css" />
      <link rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/geral.css" type="text/css" />
      <link title="mobile-css" rel="stylesheet" media="only screen and (min-width:501px) and (max-width:979px)" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/media_medium_screen.css" />
      <link title="mobile-css" rel="stylesheet" media="only screen and (min-width:50px) and (max-width:500px)" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/media_smal_screen.css" /> 
    <?php endif; ?>
    
    
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <?php echo $noscript; ?>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
    <?php echo $noscript; ?>
   
    <script src="http://cmais.com.br/portal/js/bootstrap-v2.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <?php echo $noscript; ?>
    
     <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
     <!--[if lt IE 9]>
       <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
        
     <!--[if lte IE 8]>
       <link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/ie.css" />
     <![endif]-->
    
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
    
    <!--Pular navegação-->
    <a href="#content" aria-label="pular Menu principal e ir direto para o conteudo" class="ac-pular" tabindex="2">pular começo</a>
    
    <!--header mobile-->
    <header id="header-mobile" class="header-mobile">  
      
      <!-- Menu Mobile mapa site  -->
      <a href="#" title="Vila Sésamo" class="logo-mobile">
        <img src="/portal/images/capaPrograma/vilasesamo2/mobile/logo-mobile.png"  alt="Logo Vila Sésamo">
      </a>
      
      <button id="alca" class="alca" data-header="teste">&nbsp;</button>
      
      <div class="imagem-topo">
        <img src="http://172.20.16.219/portal/images/capaPrograma/vilasesamo2/mobile/img_topo_mobile.png" />
      </div>
      
      <a href="#" title="menu Vila Sésamo" class="btn-menu">
       <img src="/portal/images/capaPrograma/vilasesamo2/mobile/icon_menu_mobile.png" alt="Menu Vila Sésamo">
      </a> 
      <nav id="nav-mobile" class="nav-mobile">
        <div class="search-mobile">
          <form action="http://cmais.com.br/vilasesamo/busca" method="get">
            <input type="text" class="search-query" onfocus="this.value='';" title="Encontre no site" name="term" placeholder="BUSQUE NO SITE" >
            <button type="submit" class="icones-sprite-menu icone-busca" title="buscar no site vila sesamo" aria-hidden="true"></button>
          </form>
        </div>
        <a href="http://cmais.com.br/vilasesamo/pais-e-educadores" title="Site Vila Sésamo" target="_self">
          Pais e Educadores
          <img src="/portal/images/capaPrograma/vilasesamo2/pais.png">
        </a>
        <a href="http://cmais.com.br/vilasesamo/na-tv" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/natv.png">
          Na TV
        </a>
        <a href="http://cmais.com.br/vilasesamo/acessibilidade" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/acessibilidade.png">
          Acessibilidade
        </a>
        <a href="http://cmais.com.br/vilasesamo/jogos" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/jogos.png">
          Jogos
        </a>
        <a href="http://cmais.com.br/vilasesamo/videos" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/videos.png">
          Vídeos
        </a>
        <a href="http://cmais.com.br/vilasesamo/atividades" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/atividades.png">
          Atividades
        </a>
        <a href="http://cmais.com.br/vilasesamopersonagens" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/personagens.png">
          Personagens
        </a>
        <!--a class="last"title="Site Vila Sésamo" target="_self">
          Fechar
        </a-->
      </nav>
 
    </header>
    <!-- /header mobile -->
    
    <!-- header tablet -->
    <header id="header-tablet" class="header-tablet">
      <!-- Menu Mobile mapa site  -->
      <a href="#" title="Vila Sésamo" class="logo-mobile">
        <img src="/portal/images/capaPrograma/vilasesamo2/mobile/logo-mobile.png"  alt="Logo Vila Sésamo">
      </a>
      
      <button id="alca" class="alca" data-header="teste">&nbsp;</button>
      
      <div class="imagem-topo">
        <img src="http://172.20.16.219/portal/images/capaPrograma/vilasesamo2/mobile/img_topo_mobile.png" />
      </div>
      
      <a href="#" title="menu Vila Sésamo" class="btn-menu">
       <img src="/portal/images/capaPrograma/vilasesamo2/mobile/icon_menu_mobile.png" alt="Menu Vila Sésamo">
      </a> 
      
      <nav id="nav-tablet" class="nav-mobile">
        <div class="search-mobile">
          <form action="http://cmais.com.br/vilasesamo/busca" method="get">
            <input type="text" class="search-query" onfocus="this.value='';" title="Encontre no site" name="term" placeholder="BUSQUE NO SITE" >
            <button type="submit" class="icones-sprite-menu icone-busca" title="buscar no site vila sesamo" aria-hidden="true"></button>
          </form>
        </div>
        <a href="http://cmais.com.br/vilasesamo/pais-e-educadores" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/pais.png">
          Pais e Educadores
        </a>
        <a href="http://cmais.com.br/vilasesamo/na-tv" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/natv.png">
          Na TV
        </a>
        <a href="http://cmais.com.br/vilasesamo/acessibilidade" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/acessibilidade.png">
          Acessibilidade
        </a>
        <a href="http://cmais.com.br/vilasesamo/jogos" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/jogos.png">
          Jogos
        </a>
        <a href="http://cmais.com.br/vilasesamo/videos" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/videos.png">
          Vídeos
        </a>
        <a href="http://cmais.com.br/vilasesamo/atividades" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/atividades.png">
          Atividades
        </a>
        <a href="http://cmais.com.br/vilasesamopersonagens" title="Site Vila Sésamo" target="_self">
          <img src="/portal/images/capaPrograma/vilasesamo2/personagens.png">
          Personagens
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
    
    <?php echo $sf_content ?>
    
    <!--footer mobile-->
    <footer id="mobile" aria-label="você está no rodapé da pagina. com links para as páginas e sites relacionados" tabindex="0" >
      
      <div class="copyright" role="presentation" aria-hidden="true" >
        <small>© 2013 - Vila Sésamo</small>
      </div>
      
      <!--container-->
      <div class="container row-fluid">
        
        <!--section-->  
        <section aria-label="Você está entrando no rodapé da página">
          
          <!--logos-->
          <nav class="logos">
              <a href="http://cmais.com.br/vilasesamo" title="Site Vila Sésamo" target="_self">
                <img src="/portal/images/capaPrograma/vila-sesamo/vila-sesamo-mobile.jpg">
              </a>
           
              <a class="habitos" href="http://cmais.com.br/vilasesamo/categorias/habitos-saudaveis" title="Hábitos Saudáveis" target="_self">
                <img src="/portal/images/capaPrograma/vila-sesamo/habitos-saudaveis-mobile.jpg">
              </a>
          
              <a class="habitos" href="http://cmais.com.br/vilasesamo/categorias/incluir-brincando" title="Incluir Brincando" target="_self">
                <img src="/portal/images/capaPrograma/vila-sesamo/incluir-brincando-mobile.jpg">
              </a>
          
            <img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" />
          </nav>
          <!--/logos-->
          
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
          
          <img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" />
        </section>
        <!--/section-->
        <section class="relacionados" aria-label="sites relacionados" tabindex="0">
          <h1>Sites relacionados</h1>
          <nav class="relacionados-mobile">
            <a href="http://tvcultura.cmais.com.br/" target="_self" title="TV Cultura"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-cultura.jpg"></a>
            <a href="http://tvratimbum.cmais.com.br/" target="_self" title="TV Rá Tim Bum"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-tv-ratimbum.jpg"></a>
            <a class="fifty" href="http://cmais.com.br/maiscrianca" target="_self" title="Mais Criança"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-mais-crianca.jpg"></a>
          </nav>
          <nav class="relacionados-mobile">
            <a class="cocoh" href="http://tvcultura.cmais.com.br/cocorico" target="_self" title="TV Cocoricó"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-cocorico.jpg"></a>
            <a class="castelo" href="http://tvcultura.cmais.com.br/castelo" target="_self" title="Castelo Rá Tim Bum"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-castelo.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/cartaozinho" target="_self" title="Cartãozinho"><img src="/portal/images/capaPrograma/vilasesamo2/mb-logo-cartao-verde.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/quintaldacultura" target="_self" title="Quintal da Cultura"><img src="/portal/images/capaPrograma/vilasesamo2/ma-lg-quintal.jpg"></a>
          </nav>
        </section>
      
      </div>
      <!--/container-->
      
      
    </footer>
    <!--/footer mobile-->
    
    
    <!-- Footer > 640 -->    
    <footer id="no-mobile" aria-label="você está no rodapé da pagina. com links para as páginas e sites relacionados" tabindex="0" >
      
      <div class="copyright" role="presentation" aria-hidden="true" >
        <small>© 2013 - Vila Sésamo</small>
      </div>
      
      <!--container-->
      <div class="container row-fluid">
        
        <!--section-->  
        <section aria-label="Você está entrando no rodapé da página">
          
          <!--logos-->
          <ul class="logos">
            <li class="col-esq">
              <a href="http://cmais.com.br/vilasesamo" title="Site Vila Sésamo" target="_self">
                <img src="/portal/images/capaPrograma/vila-sesamo/vila-sesamo-mobile.jpg">
              </a>
            </li>
            <li class="col-central habitos">
              <a href="http://cmais.com.br/vilasesamo/categorias/habitos-saudaveis" title="Hábitos Saudáveis" target="_self">
                <img src="/portal/images/capaPrograma/vila-sesamo/habitos-saudaveis-mobile.jpg">
              </a>
            </li>
            <li class="col-dir incluir">
              <a href="http://cmais.com.br/vilasesamo/categorias/incluir-brincando" title="Incluir Brincando" target="_self">
                <img src="/portal/images/capaPrograma/vila-sesamo/incluir-brincando-mobile.jpg">
              </a>
            </li>
            <img class="sombra" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sombra-rodape.jpg" alt="" />
          </ul>
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
                  <a href="http://cmais.com.br/vilasesamo/personagens/zoe" title="Zoe" target="_self" aria-hidden="true" tabindex="-1">Zoe</a>
                </li>
              </ul>
            </nav> 
            <!--/nav Personagens-->
            
            <!--nav-->
            <nav class="span12">
              <a href="/vilasesamo/pais-e-educadores" class="col-esq " title="">Pais e Educadores</a><!--cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/na-tv" class="col-central" title=""><i class="icones-rodape icone-triangulo-claro"></i>Na TV</a><!-- natv-footer - cuidadores-footer - classe criada para quando tiver somente dois itens na lista -->
              <a href="/vilasesamo/acessibilidade" class="col-dir" title=""><i class="icones-rodape icone-triangulo-medio"></i>Acessibilidade</a>
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
            <li><a href="http://tvcultura.cmais.com.br/" target="_self" title="TV Cultura"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-cultura.png"></a></li>
            <li><a href="http://tvratimbum.cmais.com.br/" target="_self" title="TV Rá Tim Bum"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-tv-ratimbum.png"></a></li>
            <li class="fiftypercent mais"><a href="http://cmais.com.br/maiscrianca" target="_self" title="Mais Criança"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-mais-crianca.png"></a></li>
          </ul>
          <ul>
            <li class="cocorico"><a href="http://tvcultura.cmais.com.br/cocorico" target="_self" title="TV Cocoricó"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-cocorico.png"></a></li>
            <li class="castelo"><a href="http://tvcultura.cmais.com.br/castelo" target="_self" title="Castelo Rá Tim Bum"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-castelo.png"></a></li>
            <li class="cartaozinho"><a href="http://tvcultura.cmais.com.br/cartaozinho" target="_self" title="Cartãozinho"><img src="/portal/images/capaPrograma/vilasesamo2/mb-logo-cartao-verde.png"></a></li>
            <li class="last quintal"><a href="http://tvcultura.cmais.com.br/quintaldacultura" target="_self" title="Quintal da Cultura"><img src="/portal/images/capaPrograma/vilasesamo2/ma-lg-quintal.png"></a></li>
          </ul>
          <nav class="relacionados-mobile">
            <a href="http://tvcultura.cmais.com.br/" target="_self" title="TV Cultura"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-cultura.jpg"></a>
            <a href="http://tvratimbum.cmais.com.br/" target="_self" title="TV Rá Tim Bum"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-tv-ratimbum.jpg"></a>
            <a class="fifty" href="http://cmais.com.br/maiscrianca" target="_self" title="Mais Criança"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-mais-crianca.jpg"></a>
          </nav>
          <nav class="relacionados-mobile">
            <a class="cocoh" href="http://tvcultura.cmais.com.br/cocorico" target="_self" title="TV Cocoricó"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-cocorico.jpg"></a>
            <a class="castelo" href="http://tvcultura.cmais.com.br/castelo" target="_self" title="Castelo Rá Tim Bum"><img src="/portal/images/capaPrograma/vilasesamo2/mb-lg-castelo.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/cartaozinho" target="_self" title="Cartãozinho"><img src="/portal/images/capaPrograma/vilasesamo2/mb-logo-cartao-verde.jpg"></a>
            <a href="http://tvcultura.cmais.com.br/quintaldacultura" target="_self" title="Quintal da Cultura"><img src="/portal/images/capaPrograma/vilasesamo2/ma-lg-quintal.jpg"></a>
          </nav>
        </section>
      
      </div>
      <!--/container-->
      
    </footer>
    <!--/footer > 640-->
    
    
    
    
    <!-- scripts -->
    <script type="text/javascript" src="http://172.20.16.219/portal/js/vilasesamo2/vilasesamo.js"></script>
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
    
    <script>
      window.fbAsyncInit = function() {
        FB.init({appId: '124792594261614', status: true, cookie: true, xfbml: true});
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/pt_BR/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
      
    </script>
    <?php echo $noscript; ?>

    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <?php echo $noscript; ?>
    
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
    <?php echo $noscript; ?>
    <script>
    function getURLParameter(name){
      return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
    }
    
    if(getURLParameter("m") == 2143){
      $('.header-mobile,.header-tablet, #mobile').remove()
    }
    </script>
      
       
  </body>
</html>  