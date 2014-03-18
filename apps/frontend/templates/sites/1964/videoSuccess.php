<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/js/timeline/<?php echo $site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">
$(function(){
  //carrossel
    $('#carrossel1').jcarousel({
        wrap: "both",
        scroll: 1
    });
    //carrossel
    $('#carrossel4').jcarousel({
        wrap: "both",
        scroll: 4
    });
});
</script>

<?php
  $vid1 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.site_id = ?', (int)$site->id)
    ->andWhere('a.is_active = 1')
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(90)
    ->orderBy('a.id desc')
    ->execute();
  if(!isset($asset)) $asset = $vid1[0];

  $vid2 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.is_active = 1')
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(30)
    ->orderBy('a.id desc')
    ->execute();
?>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- / CAPA SITE -->
    <div id="capa-site" class="a1964">

     <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
	  		<div id="barra-site" title="<?php echo $section->getTitle() . "  ". $section->getDescription() ?>">
						<a href="<?php echo $site->retriveUrl() ?>"><img src="http://cmais.com.br/portal/images/timeline/topo.png"></a>
					
				
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
              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
              	<ul class="breadcrumb">
		              <li><a href="/<?php echo $site->getSlug() ?>"><?php echo $site->getTitle() ?></a><span class="divider">&gt;</span></li>
             			<li class="active"> <?php echo $asset->getTitle() ?> </li>
		            </ul>
		              
             	 <p class="titulos"><?php echo $asset->getTitle() ?> </p>
              <?php include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $asset)) ?>
              
								<!-- BOTÕES -->
								<?php if(isset($assetPrev) && isset($assetNext)): ?>
			              <div class="botoes">
			               	<a href="<?php echo $assetPrev->retriveUrl() ?>" class="btn" title="Anterior"><i class="icon-chevron-left icon-white"></i> Anterior</a>
			                <a href="<?php echo $assetNext->retriveUrl() ?>" class="btn" title="Próximo">Próximo<i class="icon-chevron-right icon-white"></i></a>
			              </div>
										<?php else: ?>
			              <div class="botoes">
											<?php if(isset($assetPrev)): ?>              	
			                	<a href="<?php echo $assetPrev->retriveUrl() ?>" class="btn" title="Anterior"><i class="icon-chevron-left icon-white"></i> Anterior</a>
			                <?php else: ?>
			                	<a href="javascript:;" class="btn disabled" title="Anterior"><i class="icon-chevron-left icon-white"></i> Anterior</a>
			                <?php endif; ?>
											<?php if(isset($assetNext)): ?>              	
			                <a href="<?php echo $assetNext->retriveUrl() ?>" class="btn" title="Próximo">Próximo<i class="icon-chevron-right icon-white"></i></a>
			                <?php else: ?>
			                <a href="javascript:;" class="btn disabled" title="Próximo">Próximo<i class="icon-chevron-right icon-white"></i></a>
			                <?php endif; ?>
			              </div>
			          <?php endif; ?>
			          <!--/ BOTÕES -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
							
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("univesptv-300x250");
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


