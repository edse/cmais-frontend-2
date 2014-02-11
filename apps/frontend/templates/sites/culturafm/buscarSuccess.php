<script type="text/javascript" src="http://cmais.com.br/portal/js/culturafm.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm-home2013.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>


<!-- container -->
<div role="container">
  
  <?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>
  

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