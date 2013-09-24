<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />
    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />
    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/css/ie-only.css" />
    <![endif]-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script type="text/javascript">//carrocel
		$( function() {
			$('.carrossel').jcarousel({
				wrap: "both"
			});
		})</script>
  </head>
  <script type="text/javascript">var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-22770265-1']);
	_gaq.push(['_setDomainName', '.cmais.com.br']);
	_gaq.push(['_trackPageview']);
	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();</script>
  <body>
  	<!-- bg algum -->
  	<div class="bg-album">
  	  <div class="img-superior-esquerda"></div>
	  <div class="img-superior-direita"></div>
	  <div class="img-inferior"></div>
    <div id="fb-root">
    </div>
    <script>window.fbAsyncInit = function() {
			FB.init({
				appId: '124792594261614',
				status: true,
				cookie: true,
				xfbml: true
			});
		};
		( function() {
			var e = document.createElement('script');
			e.async = true;
			e.src = document.location.protocol +
			'//connect.facebook.net/pt_BR/all.js';
			document.getElementById('fb-root').appendChild(e);
		}());</script>
    <!--linh nova-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/album-ferias.css" type="text/css" />
    <!--linh nova-->
    <!-- TOPO PORTAL -->
    <div id="topo-portal" class="topo-geral capa-topo">
      <!-- Barra Portal -->
      <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
      <!-- /Barra Portal -->
    </div>
    <!-- /TOPO PORTAL -->
    <!-- CAPA SITE -->
  
      <div id="capa-site">
        
        <!-- BARRA SITE -->
        <div id="barra-site">
          <div class="topo-programa">
            <h2>
            <a href="http://cmais.com.br/quintaldacultura">
            <img title="Quintal da Cultura" alt="Quintal da Cultura" src="http://cmais.com.br/portal/quintal/images/logo_QuintalAlbum.png">
            </a>
            </h2>
            <img class="imgTitulo" src="http://cmais.com.br/portal/quintal/images/album-de-ferias.png" title="Álbum de Férias" alt="Álbum de Férias" />
            <a href="http://cmais.com.br/quintaldacultura/album-de-ferias" name="Álbum de Férias" title="Álbum de Férias" style="display:block; overflow:hidden;"></a>
            <a class="icoVeja" href="http://cmais.com.br/quintaldacultura/album-de-ferias"></a>
          </div>
        </div>
        <!-- /BARRA SITE -->
        <style>
	    #menuFloat { *left:80px; } 
	    .formulario {margin-left:185px; margin-top:0; }
	    </style>
        <!-- MIOLO -->
        <div id="miolo">
          <?php include_partial_from_folder('blocks','global/shortcuts') ?>
          <!-- CONTEUDO PAGINA -->
          <div id="conteudo-pagina exceptionn">
            <!-- CAPA -->
            <div class="capa grid3 exceptionn">
              <div class="albumWrapper">
                <div class="formulario">
                  <div class="formularioWrapper">
                    <div class="boxWrapper">
                      <h3 class="obrigado">Agradecemos a sua participação!</h3>
                      <p>
                        Sua foto foi enviada com sucesso e em breve aparecerá aqui no álbum!
                      </p>
                      <p class="enquanto">
                        Enquanto isso...
                      </p>
                      <a href="http://cmais.com.br/quintaldacultura/jogos">Brinque no quintal</a>
                    </div>
                  </div>
                </div>
                <div class="bg-bottom">
                </div>
              </div>
            </div>
          </div>
          <!-- /CONTEUDO PAGINA -->
        </div>
        <!-- /MIOLO -->
      </div>
    </div>
    <!-- / CAPA SITE -->
    <!-- RODAPE -->
    <?php include_partial_from_folder('blocks', 'global/footer') ?>
    <!-- /RODAPE -->
  </body>
</html>