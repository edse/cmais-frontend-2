<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'term'=>$term)) ?>

<!-- section miolo -->
<section class="miolo">
  
  <!--container-->
  <div class="container">
  
    <?php // include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
    
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <?php if($section->Site->getSlug() == "culturabrasil"): ?>
        <li><a href="/"><?php echo $site->getTitle() ?></a> <span class="divider">»</span></li>
        <li><?php echo $section->getTitle(); ?> </li>
        <?php else: ?>
        <li><a href="/programas">Programas</a> <span class="divider">»</span></li>
        <li><?php echo $site->getTitle(); ?> </li>
        <?php endif; ?>         
      </ul>
    </div>
    <!--/breadcrumb-->

    <div class="row-fluid">
      <div class="destaque-cultura">
        <div class="busca-titulo">
          <h1 class="resultadoo">
            Resultado da Busca
          </h1>
         
         <?php
          /*
            <h2 class="encontradas">
            <?php if(isset($term)): ?>
              <?php if(count($pager) > 0): ?>
                Foram encontrados <?php echo count($pager) ?> resultados com a expressão “<?php if (isset($term)) echo $term ?>”
              <?php else: ?>
                Sua pesquisa - <?php if (isset($term)) echo $term ?> - não encontrou nenhum documento correspondente
              <?php endif; ?>
            <?php endif; ?>
            </h2>
          */
          ?>
          
        </div>
      </div>

    
    <!--clounaprincipal-->
    <div class="row-fluid" style="clear: both;">
 
      <!--lista assets-->
      <div class="lista-assets span8" style="*margin-left:0px;">
        <script>
          (function() {
            var cx = '005232987476052626260:fa_a_oppnxc';
            var gcse = document.createElement('script');
            gcse.type = 'text/javascript';
            gcse.async = true;
            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//www.google.com/cse/cse.js?cx=' + cx;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(gcse, s);
          })();
        </script>
         <gcse:searchresults-only>Carregando...</gcse:searchresults-only>
      
      </div>
      
      
      	<!-- TERMO BUSCA -->
		<script>
			function getURLParameter(name) {
			    return decodeURI(
			        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
			    );
			}
			if(getURLParameter("term") != "" && getURLParameter("term") != "null"){
				var busca = getURLParameter("term");
				$('#term').val(busca);
			}
		</script>      
     	<!-- TERMO BUSCA -->
      
      
      <?php
      /*
      <div class="lista-assets span8" style="*margin-left:0px;">
        
        <?php if(count($pager) > 0): ?>
          <?php foreach($pager->getResults() as $d): ?>
            <a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>">
                <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if ($related[0]->retriveImageUrlByImageUsage("culturabrasil-thumb1")): ?>
                <div class="row-fluid titulo">
                  
                </div>
                <?php endif;?>
            <div class="row-fluid" style="margin-left:10px">
              <div class="span3" style="margin-left:0px">
                <h6><?php if ($d->AssetContent->getHeadlineShort()): ?><?php echo $d->AssetContent->getHeadlineShort(); ?><?php else: ?>Cultura Brasil<?php endif; ?></h6>
                <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if ($related[0]->retriveImageUrlByImageUsage("culturabrasil-thumb1")): ?>
                <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("culturabrasil-thumb1") ?>" alt=" <?php echo $d->getTitle(); ?>" class="thumb">
                <?php else: ?>
                <img src="http://cmais.com.br/portal/images/capaPrograma/culturabrasil/defaultThumbnail<?php echo rand(1,8) ?>.jpg" alt="<?php echo $d->getTitle(); ?>" class="thumb">
                <?php endif; ?>
              </div>
              <div class="span9">
                <h2><?php echo $d->getTitle(); ?></h2>
                <p>
                  <?php echo $d->getDescription(); ?>
                </p>  
              </div>
            </div>    
           </a>
            
          <?php endforeach; ?>
        <?php else: ?>
        <div class="row-fluid busca-titulo" style="clear: both;">
          <h1 class="resultadoo">Sugestões</h1>
          <h2 class="encontradas">Certifique-se de que todas as palavras estejam escritas corretamente.</h2>
          <h2 class="encontradas">Tente palavras-chave diferentes.</h2>
          <h2 class="encontradas">Tente palavras-chave mais genéricas.</h2>
        </div>
        <?php endif; ?>
        <!--paginador-->
        <?php include_partial_from_folder('sites/culturabrasil', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
        <!--paginador-->
      </div>
      <!--listaAssets>
      */
      ?>
      
      
      <!--coluna direita-->
      <div class="lista-assets redes span4">
        
        <div class="row-fluid">      
          <div class="span12 direita">
            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("home-geral300x250");
              </script>
            </div>
          </div>
        </div>
      </div>
      <!--/coluna-direita-->
      
    </div>
    <!--/coluna principal-->
    
    
    </div>
    
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 
