<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <link href="/feed" type="application/atom+xml" rel="alternate" title="cmais+ feed" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css" type="text/css" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/css/ie-only.css" />
    <![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

    <title>Álbum de Natal - Quintal da Cultura</title>
    <meta name="title" content="Álbum de Natal - Quintal da Cultura - cmais+ - O portal de conteúdo da Cultura" />
<meta name="description" content="Quintal da Cultura - cmais+ O portal de conteúdo da Cultura" />
<meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
<meta name="language" content="pt_BR" />
<meta name="robots" content="index, follow" />
<meta property="og:title" content="Álbum de Natal - Quintal da Cultura - cmais+ - O portal de conteúdo da Cultura" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Portal cmais+ - cmais+ O portal de conteúdo da Cultura" />
<meta property="og:url" content="http://tvcultura.cmais.com.br/quintaldacultura/album-de-natal" />
<meta property="og:site_name" content="Quintal da Cultura" />
<meta property="og:image" content="http://tvcultura.cmais.com.br/portal/quintal/images/albumNatal.png" />

    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />

    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>

    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>

    <!--linh nova--><script type="text/javascript" src="http://cmais.com.br/portal/quintal/js/jquery.lightbox-0.5.js"></script><!--linh nova-->
    <!--linh nova--><script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script><!--linh nova-->
    <!--linh nova--><script type="text/javascript" src="http://cmais.com.br/portal/quintal/js/jquery.nivo.slider.pack.js"></script><!--linh nova-->
    <!--linh nova--><script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script><!--linh nova-->
    <!--linh nova--><link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/albumQuintal.css" type="text/css" /><!--linh nova-->
    <script src="http://cmais.com.br/portal/tvratimbum/js/scroll.jquery.js" type="text/javascript"></script>

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
    <!-- /scripts -->
  </head>
  <body>
	  
	  <script>
		  function loadScroll(){
		    var page = 2;
		    $('#infinite_scroll').scrollLoad({
		      url : 'http://app.cmais.com.br/ajax/infinitescroll',
		      getData : function() {
		        return "page="+$('#pag').val()+"&asset_id=49018";
		      },
		      start : function() {
		        $('<div class="loading"><img src="http://cmais.com.br/portal/quintal/images/loading.gif"/></div>').appendTo(this);
		      },
		      ScrollAfterHeight : 95,     //this is the height in percentage
		      onload : function( data ) {
		        $(this).append( data );
		        $('.loading').remove();
		        $('#pag').val(parseInt($('#pag').val())+1);
		      },
		      continueWhile : function( resp ) {
		        if( $(this).children('li').length >= 100 ) {
		          return false;
		        }
		        return true;
		      }
		    });
		  }
		  $(document).ready(function(){
		    $.ajax({
		      url: "http://cmais.com.br<?php echo url_for("@homepage") ?>ajax/infinitescroll",
		      data: "page=1&asset_id=49018",
		      success: function(data){
		        $('#infinite_scroll').html(data);
		        loadScroll();
		      }
		    });
		  });
		</script>
		<input type="hidden" name="pag" id="pag" value="1" />
		<style>
		  #infinite_scroll{height:900px;width:900px;overflow-y:scroll;overflow-x:hidden;margin-top:50px;}
		  #infinite_scroll a{font-weight:bold;}
		  #infinite_scroll p{margin-bottom:20px;width:600px;}
		  .loading{text-align:right;margin-top:-100px;}
		</style>

    <!-- TOPO PORTAL -->
    <div id="topo-portal" class="topo-geral capa-topo">

      <!-- Barra Portal -->
      <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
      <!-- /Barra Portal -->

    </div>
    <!-- /TOPO PORTAL -->

    
    <!-- CAPA SITE -->
  <div class="bg-album">
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
      <div class="topo-programa">
      <h2><a href="http://tvcultura.cmais.com.br/quintaldacultura"><img title="Quintal da Cultura" alt="Quintal da Cultura" src="http://cmais.com.br/portal/quintal/images/logo_QuintalAlbum.png"></a></h2>
      <img class="imgTitulo" src="http://cmais.com.br/portal/quintal/images/albumNatal.png" title="Álbum de Natal" alt="Álbum de Natal" />

      <a href="http://tvcultura.cmais.com.br/quintaldacultura/album-de-natal" name="Álbum de Natal" title="Álbum de Natal" style="display:block; overflow:hidden;"><span class="luz"></span></a>
      <span class="balao"></span>
      <a class="icoEnvie" href="http://cmais.com.br/quintaldacultura/participe"></a>
    </div>
  </div>
      <!-- /BARRA SITE -->
      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina exceptionn">
          <!-- CAPA -->
          <div class="capa grid3 exceptionn">

            <div class="albumWrapper">
            
            <div id="infinite_scroll"></div>
              
              <a class="topo" href="#">Topo</a>
								<div class="bg-bottom">
	                <!--<a class="maisFotos" href="#">carregar mais fotos</a>-->
	              </div>	
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