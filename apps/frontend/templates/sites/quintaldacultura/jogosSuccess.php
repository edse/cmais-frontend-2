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
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>

    <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
        wrap: "both"
      });
    })
    </script>
  </head>
  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']);
   
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script> 
  <body>


  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

      <div class="contentWrapper" align="center">


      <div class="content internas">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
           <div class="conteudo">

          <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
       
        <ul class="sidebar">
          <li class="sprite-balao-categoria">Escolha por <br/>categoria</li>
          
          <li <?php if($section->getSlug() == "todos" || $section->getSlug() == "jogos") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos" title="Todos">Todos</a></li>
          <li <?php if($section->getSlug() == "joguinhosdopeixonauta") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos/joguinhosdopeixonauta" title="Peixonauta">Peixonauta</a></li>
          <li <?php if($section->getSlug() == "desafio") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos/desafio" title="Desafio">Desafio</a></li>
          <li <?php if($section->getSlug() == "habilidade") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos/habilidade" title="Habilidade">Habilidade</a></li>
          <li <?php if($section->getSlug() == "aventura") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos/aventura" title="Aventura">Aventura</a></li>
          <li <?php if($section->getSlug() == "esportes") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos/esportes" title="Esportes">Esportes</a></li>
          <li <?php if($section->getSlug() == "gui-e-estopa") echo 'class="ativo" ';?>><a href="/quintaldacultura/jogos/gui-e-estopa" title="Gui e Estopa">Gui e Estopa</a></li>
          <li><a href="http://cmais.com.br/vilasesamo/jogos/index.html" title="Vila Sésamo">Vila Sésamo</a></li>
        </ul>
        
        <div class="lista">
          <ul class="navegacao">
            <li><a href="/quintaldacultura" title="Quintal da Cultura">Quintal da Cultura</a></li>
            <?php if($section->getSlug() != "jogos" || @$_GET["search"] != "" ): ?>     
            	<li><span>/</span><a href="/quintaldacultura/jogos" title="Jogos">Jogos</a></li>
            <?php endif; ?>
          </ul>
          
		<h2 id="titulo_pagina"><?php echo $section->getTitle()?></h2>
          
          <!-- BUSCA -->
          <form id="busca" method="get">
            <input type="text" name="search" id="search" placeholder="Pesquisar" value="" />
            <button class="sprite-ico-busca"></button>
          </form>
          <!-- BUSCA -->
		
		<ul class="assets">          
          	<div id="google_search" style="display:none">
				<script>
				  (function() {
				    var cx = '005232987476052626260:czy5dx_z-m4';
				    var gcse = document.createElement('script');
				    gcse.type = 'text/javascript';
				    gcse.async = true;
				    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
				        '//www.google.com/cse/cse.js?cx=' + cx;
				    var s = document.getElementsByTagName('script')[0];
				    s.parentNode.insertBefore(gcse, s);
				  })();
				</script>
				<gcse:searchresults-only></gcse:searchresults-only>	 
			</div>
			
			<div id="resultados_busca" style="display:none">
		            <?php if(count($pager) > 0): ?>
		              <?php foreach($pager->getResults() as $d): ?>
		                <?php $related = $d->retriveRelatedAssetsByRelationType('preview'); ?>
		                <li>
		                 	 <a href="/quintaldacultura<?php if($section->slug != "jogos") echo "/jogos/".$section->slug ?>/<?php echo $d->slug ?>" title="<?php echo $d->getTitle() ?>">
			                      <?php if(strlen($d->getTitle()) > 19):?> 
			                      	<h3><?php echo substr($d->getTitle(),0,15) ?>...</h3>
								  <?php else: ?>
								  	<h3><?php echo $d->getTitle() ?></h3>
								  <?php	endif;?>
			          			  <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>" alt="<?php echo $d->getTitle() ?>" />
			          			  <p><?php echo $d->getDescription() ?></p>
			          			  <p class="btn">Jogar</p>
		        		  	</a>
		                </li>
		              <?php endforeach; ?>
		        	<?php endif; ?> 
        	</div>
        </ul>
		
		<?php include_partial_from_folder('sites/quintaldacultura', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
		        
          </div>
        </div>
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?>
        </div>
        </div>
        
<script>
	function ExecuteSearch(){
		$("#busca").submit();
	}

	function getURLParameter(name) {
	    return decodeURI(
	        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
	    );
	}
	if(getURLParameter("search") == "null" || getURLParameter("search") == ""){
		$('#resultados_busca').show();
		$('.paginacao').show();
	}else{
		var busca = getURLParameter("search");
		$('#titulo_pagina').text(busca);
		$('#search').val(busca);
		
		$('#resultados_busca').hide();
		$('#google_search').show();
	}
</script>
              

    </div>

    <?php include_partial_from_folder('blocks', 'global/footer') ?>

  <div id="miolo"></div>
  <div class="box-lateral"></div>
  

  
</body>
</html>