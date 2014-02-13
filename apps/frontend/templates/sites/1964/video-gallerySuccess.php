<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/js/timeline/<?php echo $site->getSlug() ?>.css" type="text/css" />

<script type="text/javascript">
$(function(){
  //carrossel
    $('.carrossel').jcarousel({
        wrap: "both",
        scroll: 1
    });
});
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<?php
  $vid1 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.site_id = ?', (int)$site->id)
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(90)
    ->orderBy('a.created_at desc')
    ->execute();

  $vid2 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(30)
    ->orderBy('a.created_at desc')
    ->execute();
?>

	<!-- / CAPA SITE -->
    <div id="capa-site" class="a1964">

     <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
  		  		<div id="barra-site" title="<?php echo $section->getTitle() . "  ". $section->getDescription() ?>">
					<a href="#"><img src="http://cmais.com.br/portal/images/timeline/topo.png"></a>
					
				
				<!-- TOPO -->
		    <div class="topo-programa">
		    	
	    		<!-- MENU -->
					<?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections))?>
					<!--/ MENU -->
					
		    <!-- / TOPO -->  
		    </div>
		  <!-- /BARRA SITE -->  
      </div>

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="texto">

              <?php if(isset($asset)) include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $asset, 'ipad' => $ipad)) ?>
              
              <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
              <?php if(count($relacionados) > 0): ?>
                  <p class="tit">Posts Relacionados</p>
                  <ul class="posts">
                    <?php foreach($relacionados as $k=>$d): ?>
                    <li><a href="<?php echo $d->retriveUrl()?>"><?php echo $d->getTitle()?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php if(count($asset->getTags()) > 0): ?>
                    <p class="tags">Tags:
                    <?php foreach($asset->getTags() as $t): ?>
                      <a href="#"><span><?php echo $t?></span></a>
                    <?php endforeach; ?>
                    </p>
                  <?php endif; ?>
              <?php endif; ?>

              </div>

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>

            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <?php include_partial_from_folder('blocks','global/display-1c-list-carrossel', array('displays' => $vid1)) ?>
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              <?php if(isset($displays["destaque-noticias"])): ?>
              <!-- BOX PADRAO Noticia -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>Not&iacute;cias + recentes</h4>
                    <!-- <a href="#" class="rss" title="rss"></a> -->
                  </div>
                </div>
                <?php include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias"])) ?>
              </div>
              <!-- /BOX PADRAO Noticia -->
              <?php endif; ?>

            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->


          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- programas-assets-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->
          
					<!-- APOIO -->
					<ul id="apoio" class="grid3">
              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
              <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
              <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
              <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
              <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
          </ul>
					<!-- /APOIO -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->

