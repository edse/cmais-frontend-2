<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          <?php $mainSite = Doctrine::getTable('Site')->findOneBySlug('univesptv'); ?>
          <h2><a href="<?php echo $mainSite->retriveUrl() ?>"><img title="<?php echo $mainSite->getTitle() ?>" alt="<?php echo $mainSite->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $mainSite->getImageThumb() ?>" /></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?> 
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
          </div>
          <!-- /horario -->
          <?php endif; ?>

        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
           <!-- CAPA -->
            <div class="capa grid3">
              
                <!-- ESQUERDA -->
                <div id="esquerda" class="grid2">
                  <h3><a href="<?php echo $site->retriveUrl() ?>"><?php echo $site->getTitle() ?></a></h3>
                  <p class="bold" style="margin-bottom: 10px;"><?php echo html_entity_decode($program->getSchedule()) ?></p>
                    
                  <?php if(count($pager) > 0): ?>
                    <?php $asset = null; foreach($pager->getResults() as $asset): ?>

                    <!-- NOTICIA INTERNA -->
                    <div class="box-interna grid2">

                      <!-- PAGINACAO -->
                      <?php if(isset($pager)): ?>
                        <?php if($pager->haveToPaginate()): ?>
                        <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
                        <div class="paginacao pag3 grid2">
                          <?php if($page != $pager->getNextPage()): ?>
                          <!--a href="<?php echo $site->retriveUrl(); ?>?page=<?php echo $pager->getNextPage() ?>" class="btn proximo"></a-->
                          <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo"></a>
                          <?php endif; ?>
                          <a href="#" class="titulos">Epis&oacute;dio <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></a>
                          <?php if(($page!="")&&($page != $pager->getPreviousPage())): ?>
                          <!--a href="<?php echo $site->retriveUrl(); ?>?page=<?php echo $pager->getPreviousPage() ?>" class="btn anterior"></a-->
                          <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior"></a>
                          <?php endif; ?>
                        </div>
				        <form id="page_form" action="" method="post">
				          <input type="hidden" name="return_url" value="<?php echo $url?>" />
				          <input type="hidden" name="page" id="page" value="" />
				        </form>
				        <script>
				          function goToPage(i){
				          	$("#page").val(i);
				          	$("#page_form").submit();
				          }
				        </script> 
                        <?php endif; ?>
                      <?php endif; ?>
                      <!-- PAGINACAO -->

                      <?php 
                      $video = $asset->retriveRelatedAssetsByAssetTypeId(6);
                      if(!$video) $video = $asset->retriveRelatedAssetsByAssetTypeId(7);
                      ?>
                      <?php if(($video)&&(count($video)>0)): ?>
                      <div class="media grid2">
                        <?php include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $video[0], 'ipad' => $ipad)) ?>
                      </div>
                      <?php endif; ?>
                                            
                      <div class="texto">
                        <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
                      </div>
                      
                    </div>
                    <!-- /NOTICIA INTERNA -->

                    <?php endforeach; ?>
                  <?php endif; ?>

                  <!-- comentario facebook -->
                  <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
                  <!-- /comentario facebook -->
                    
                </div>
                <!-- /ESQUERDA -->
                
                <!-- DIREITA -->
                <div id="direita" class="grid1">
                  
                  <!-- BOX PADRAO NOTICIAS -->
                  <?php
                  $asset = $pager->getCurrent();
									/*
                  $assets = Doctrine_Query::create()
                    ->select('a.*')
                    ->from('Asset a')
                    ->where('a.site_id = ?', (int)$site->getId())
                    ->andWhere('a.is_active = ?', 1)
                    ->andWhere('a.asset_type_id = ?', 1)
                    ->orderBy('a.created_at desc')
                    ->limit(60)
                    ->execute();
									 * 
									 */
						      if($section->getSlug() != "home"){
						        $assets = Doctrine_Query::create()
						          ->select('a.*')
						          ->from('Asset a, SectionAsset sa')
						          ->where('sa.section_id = ?', (int)$section->getId())
						          ->andWhere('sa.asset_id = a.id')
						          ->orderBy('sa.display_order')
	                  	->limit(200)
	                  	->execute();
						      }
						      else{
						        if(count($section->getAssets()) > 0){
						          $assets = Doctrine_Query::create()
						            ->select('a.*')
						            ->from('Asset a, SectionAsset sa')
						            ->where('sa.section_id = ?', (int)$section->getId())
						            ->andWhere('sa.asset_id = a.id')
						            ->orderBy('sa.display_order')
						            ->limit(200)
												->execute();
						        }else{
						          $assets = Doctrine_Query::create()
						            ->select('a.*')
						            ->from('Asset a')
						            ->where('a.site_id = ?', (int)$site->getId())
						            ->orderBy('a.created_at asc')
						            ->limit(200)
												->execute();
						        }
						      }
									 									
                  if($assets): 
                  ?>
                  <div id="box-videos" class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4>lista de programas</h4>
                      </div>
                      </div>
                    <div class="">
                      <ul class="sem-borda">
                        <?php foreach($assets as $k=>$d): ?>
                          <?php $k++ ?>
                            <li class="conteudo-lista" style="height:auto;"><a href="javascript: goToPage(<?php echo $k ?>);" class="titulos" <?php if($k == $page): ?>style="color:#ff6625"<?php endif; ?>><?php echo $d->getTitle(); ?></a></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->
                  
                  <!-- BOX PUBLICIDADE -->
                  <div class="box-publicidade grid1">
                    <!-- univesptv-300x250 -->
					<script type='text/javascript'>
					GA_googleFillSlot("univesptv-300x250");
					</script>
                  </div>
                  <!-- / BOX PUBLICIDADE -->

                  <!-- BOX PADRAO NOTICIAS -->
                  <?php if((isset($displays["sobre-o-programa"]))&&(count($displays["sobre-o-programa"]) > 0)): ?>
                  <div class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php if(isset($displays["sobre-o-programa"])) echo $displays["sobre-o-programa"][0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if(isset($displays["sobre-o-programa"])) include_partial_from_folder('blocks','global/display1c-news2', array('displays' => $displays["sobre-o-programa"])) ?>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->

                  <!-- BOX PADRAO NOTICIAS -->
                  <?php if((isset($displays["proximo-programa"]))&&(count($displays["proximo-programa"]) > 0)): ?>
                  <div class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php if(isset($displays["proximo-programa"])) echo $displays["proximo-programa"][0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if(isset($displays["proximo-programa"])) include_partial_from_folder('blocks','global/display1c-news2', array('displays' => $displays["proximo-programa"])) ?>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->

                  <!-- BOX PADRAO NOTICIAS -->
                  <?php if((isset($displays["saiba-mais"]))&&(count($displays["saiba-mais"]) > 0)): ?>
                  <div class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php if(isset($displays["saiba-mais"])) echo $displays["saiba-mais"][0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if(isset($displays["saiba-mais"])) include_partial_from_folder('blocks','global/display1c-news2', array('displays' => $displays["saiba-mais"])) ?>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->

                  <!-- /BOX NOTICIA -->

                  <!-- BOX PADRAO LINKS -->
                  <?php if((isset($displays["links-uteis"]))&&(count($displays["links-uteis"]) > 0)): ?>
                  <div class="box-padrao box-borda grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4>Links Úteis</h4>
                      </div>
                    </div>
                    <?php if(isset($displays["links-uteis"])) include_partial_from_folder('blocks','global/radios', array('displays' => $displays["links-uteis"])) ?>
                    <div class="detalhe-borda grid1">
                    </div>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO LINKS -->
                    
                </div>
                <!-- /DIREITA -->
                
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
	          <!-- APOIO -->
                
            </div>
            <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->    