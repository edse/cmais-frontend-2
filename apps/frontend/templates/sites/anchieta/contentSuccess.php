<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/js/timeline/1964.css" type="text/css" />
<script type="text/javascript">
$(function(){
  //hover states on the static widgets
  $('#dialog_link, ul#icons li').hover(
    function() { $(this).addClass('ui-state-hover'); }, 
    function() { $(this).removeClass('ui-state-hover'); }
  );
  $('.comentario-fb').show();
});
</script> 

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
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
      
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
        	
          
          <!-- CAPA -->
          <div class="capa grid3">
         	 <div class="span10">
          	

            <!-- ESQUERDA -->
            <div class="span7 esq">

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
              	<ul class="breadcrumb">
		              <li><a href="/<?php echo $site->getSlug() ?>"><?php echo $site->getTitle() ?></a><span class="divider">&gt;</span></li>
             			<li class="active"> <?php echo $asset->getTitle() ?> </li>
		            </ul>
		              
             	 <p class="titulos"><?php echo $asset->getTitle(); ?></p>
               <?php
									if($asset->AssetType->getSlug() == "content") 
									echo html_entity_decode($asset->AssetContent->render());
								?>
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
			                <?php endif; ?>
											<?php if(isset($assetNext)): ?>              	
			                <a href="<?php echo $assetNext->retriveUrl() ?>" class="btn" title="Próximo">Próximo<i class="icon-chevron-right icon-white"></i></a>
			                <?php endif; ?>
			              </div>
			          <?php endif; ?>
			          <!--/ BOTÕES -->
			          <div class="fb-like" data-send="false" data-width="450" data-show-faces="false" data-action="recommend"></div>
	              <div class="descricao">
	                <p><?php echo $asset->getDescription() ?></p>
	              </div>
								
                
                <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
                <?php if(count($relacionados) > 0): ?>
                  <!-- SAIBA MAIS -->
                  <div class="box-padrao grid2" style="margin-bottom: 20px;">
                  	<div id="saibamais">                                                            
                  	<h4>saiba +</h4>                                                            
                    <ul class="conteudo">
                      <?php foreach($relacionados as $k=>$d): ?>
                        <li style="width: auto;">
                          <a class="titulos" href="<?php echo $d->retriveUrl()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
                          <!--
                          <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                            <a href="<?php echo $d->retriveUrl()?>" class="img-90x54" style="width: auto">
                              <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                            </a>
                          <?php endif; ?>
                          -->
                          <!--p><?php echo $d->getDescription()?></p-->
                        </li>
                      <?php endforeach; ?>
                    </ul>
                   </div>
                  </div>
                  <!-- SAIBA MAIS -->
                <?php endif; ?>

                <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>

              </div>
              <!-- /NOTICIA INTERNA -->
              
            </div>
            <!-- /ESQUERDA -->
            
             <!-- DIREITA -->
            <div class="span3 dir">

              <!-- BOX PADRAO -->
              <?php if(isset($displays["destaque-apresentadores"])) include_partial_from_folder('blocks','global/display-1c-hosts', array('displays' => $displays["destaque-apresentadores"])) ?>
              <!-- /BOX PADRAO -->
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("univesptv-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              <!--BOX DICAS DE COMPRA
              <?php //include_partial_from_folder('blocks','global/box-dicas', array('section'=> $section)) ?>-->

              <?php $relacionados = array(); if($asset) $relacionados = $asset->retriveRelatedAssets2(); ?>
              <?php if(count($relacionados) > 0): ?>
              <?php //$relacionados = $relatedAssets; if(count($relacionados) > 0): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>relacionadas</h4>
                    <a href="/feed" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(count($relacionados) > 0) include_partial_from_folder('blocks','global/recent-news', array('displays' => $relacionados)) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-noticias-recentes"])): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="/feed" class="rss" title="rss" style="display: block"></a>
                  </div>
                </div>
                <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-categorias"])): ?>
              <!-- BORDA 02 -->
              <div class="box-padrao box-borda grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-categorias"])) echo $displays["destaque-categorias"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <div class="conteudo top tipo2">
                  <?php if(isset($displays["destaque-categorias"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-categorias"])) ?>
                </div>
                <div class="detalhe-borda grid1"></div>
              </div>
              <!-- /BORDA 02 -->
              <?php endif; ?>
              
              <?php if(isset($displays["destaque-links"])): ?>
              <!-- BOX PADRAO + Visitados -->
              <div class="box-padrao mais-visitados grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-links"])) echo $displays["destaque-links"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <?php if(isset($displays["destaque-links"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links"])) ?>
              </div>
              <!-- /BOX PADRAO + Visitados -->
              <?php endif; ?>

            </div>
            <!-- /DIREITA -->
            
            </div>
            <!-- /span10 -->
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
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
 