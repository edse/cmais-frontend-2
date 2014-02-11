<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />
<script type="text/javascript">
	$(function() {

		// charges caruso
		$('.fancybox').fancybox();
		//$('#gallery ul li:last').remove();

	});

</script>
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))
?>

<!-- CAPA SITE -->
<div class="bg-provocacoes">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
      	topo teste
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
        ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule())
          ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <!-- box-topo -->
      <div class="box-topo grid3">
        <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
      </div>
      <!-- /box-topo -->
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo">
      <!-- BOX LATERAL -->
      <?php include_partial_from_folder('blocks','global/shortcuts') ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <div class="centroRV">
              <div class="video-interna">
                <ul>
                  <li class="voltarJa"><a href="javascript:history.back(1);"><span>Voltar</span></a></li>
                  
                </ul>
                <div class="boxVideo">
                  <?php
                  $videos = $asset->retriveRelatedAssetsByAssetTypeId('6');
                  ?>
                  <?php if(count($videos) > 1): ?>
                  <div class="boxVideoWrapper">
                    <object style="height:390px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $videos[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0"ghghgh>
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $videos[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                    </object>
                  </div>
                  <span class="faixa"></span>
                  <h3><?php echo $videos[0]->getTitle();  ?></h3>
                  <p class="dataPost">Programa exibido em <?php echo format_date($videos[0]->getCreatedAt(),'D') ?></p>
                  <p class="post"><?php echo $videos[0]->getDescription();  ?></p>
                  <?php endif; ?>
                  <!-- barra compartilhar -->
                  <?php //include_partial_from_folder('sites/provocacoes','global/share-2c') ?>
                  <?php include_partial_from_folder('blocks','global/share-2c-close', array('site' => $site, 'uri' => $uri)) ?>
                  <!-- /barra compartilhar -->
                  
                </div>
                <div class="veja">
                  <p class="btn-veja"><span>Veja também</span></p>
                  <div class="vejaTambem">
                    <ul>
                                         
                       <?php foreach($videos as $k=>$d): ?>
                              <?php if(($k > 0) && ($k % 3 == 0)): ?>
                                </li><li>
                              <?php endif; ?>
                      <li>
                        <?php if($d->retriveImageUrlByImageUsage('image-7')): ?>
                  <a class="aImg<?php if($d->getId() == (int)$asset->id): ?> ativo<?php endif; ?>" href="<?php echo $d->retriveUrl() ?>">
                    <img src="<?php echo $d->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
                    <span class="ico"></span>
                  </a>
                  <?php endif; ?>
                  <a class="aTxt" href="<?php echo $d->retriveUrl() ?>">
                    <span class="nomeRlacionado"><?php echo $d->getTitle() ?></span>
                    <!-- span class="nomeTxt"><?php echo $d->getDescription() ?></span-->
                  </a>
                </li>
              <?php endforeach; ?> 
                    </ul>
                    <a href="/provocacoes/programas" class="sugestoes"><span>mais vídeos</span></a>
                  </div>
                  <div class="publicidade">
                          <!-- tvcultura-homepage-300x250 -->
                          <script type='text/javascript'>
                            GA_googleFillSlot("cmais-assets-300x250");
                          </script>
                  </div>
                  <div class="charges">
               <?php
                    
                   
                      $galeria = $asset->retriveRelatedAssetsByAssetTypeId(3);
                      
                      if(count($galeria)>0) {
                        $images = $galeria[0]->retriveRelatedAssetsByAssetTypeId(2);
                      }
                    
                 ?>     
                 <?php if(isset($images)): ?> 
                  <?php if(count($images)>0): ?>
                  <div class="charges">
                    <h3>Fotos do Programa</h3>
                    <div class="box-charges">
                      <div id="gallery">
                    <ul>
                      <?php foreach($images as $k=>$d): ?>
                        <li>
                            <a class="fancybox" href="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>" title="<?php echo $d->getTitle() ?>" rel="charges_caruso">
                                <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" />
                            </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                </div>
                
                
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endif; ?>
                  </div>
                 
                </div>
               
              </div>
                  
            </div>
          </div>
          <span class="bordaBottomRV"></span>
        </div>
        <!-- capa-->
      </div>
      <!-- / conteudo pagina -->
    </div>
    <!-- /miolo-->
  </div>
  <!-- /capa site -->
</div>
<!-- / bg-provoca -->

