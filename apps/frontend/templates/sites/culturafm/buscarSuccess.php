<script type="text/javascript" src="http://cmais.com.br/portal/js/culturafm.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/sites/culturafm-home2013.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => @$asset, 'section' => $section)) ?>


<!-- container -->
<div role="container">
  
  <!--header principal-->
  <header id="main-header" role="main" role="banner" >
    
    <!--logo-->
    <h1>
      <a href="http://culturafm.cmais.com.br" title="">
        <img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
      </a>
    </h1>
    <!--/logo-->
    
    <!-- network -->
    <?php if(isset($program) && $program->id > 0): ?>
    <?php include_partial_from_folder('sites/culturafm','global/social-network', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
    <?php endif;?>
    <!-- network -->
    
    <!--box ouça as rádios -->
    <div id="listen">
      <h1>Ouça as rádios</h1>
      <a href="javascript: window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" title="Rádio Cultura Brasil" class="link-radio cbrasil">Cultura brasil</a>
      <a href="javascript: window.open('http://culturafm.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" title="Rádio Cultura FM" class="link-radio cfm">Cultura FM</a>
    </div>  
    <!--/box ouça as rádios -->
    
    <?php if(isset($siteSections)): ?>
    <!-- main-nav -->    
    <nav role="navigation" id="main-nav">
      <?php //include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>
      <?php include_partial_from_folder('sites/culturafm','global/menuNovo', array('siteSections' => $siteSections))?>
    </nav>
    <!-- /main-nav -->
    <?php endif;?>
    
  </header>
  <!--/header principal-->

  <!--content-holder-->
  <div id="content-holder" style="text-align: left">
    <h2 id="titulo_pagina">Resultado da Busca</h2>
    <!--GOOGLE SEARCH -->
	<script>
	  (function() {
	    var cx = '005232987476052626260:ceaovm3l31c';
	    var gcse = document.createElement('script');
	    gcse.type = 'text/javascript';
	    gcse.async = true;
	    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
	        '//www.google.com/cse/cse.js?cx=' + cx;
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(gcse, s);
	  })();
	</script>
	<gcse:searchresults-only>Buscando...</gcse:searchresults-only>
    <!--GOOGLE SEARCH -->
    
    <script>
		function getURLParameter(name) {
		    return decodeURI(
		        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
		    );
		}
		if(getURLParameter("busca") != "null" || getURLParameter("busca") != ""){
			var busca = getURLParameter("busca");
			$('#titulo_pagina').text('Resultados da busca por "' + busca + '"');
			$('#search_field').val(busca);
		}
    </script>
    
  </div>  
  <!--/content-holder-->
    
</div>
<!-- /container-->