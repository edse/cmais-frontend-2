<link type="text/css" href="http://cmais.com.br/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/orbit/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaVideosInterna.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />
<script type="text/javascript">
	$(window).load(function() {
		$('#featured').orbit({
			'bullets' : true,
			'bulletThumbs' : true
		});
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
      <?php include_partial_from_folder('blocks','global/shortcuts')
      ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
        	<!-- tudo provoca-->
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <!-- centro-->
            <div class="centroRV">
              <!-- video interna-->	
              <div class="video-interna">
                <ul>
                  <li class="voltarJa"><a href="javascript:back()"><span>Voltar</span></a></li>
                   <li class="voltarJa"><a href="../programas"><span>Mais Fotos</span></a></li>
                </ul>
                <div class="boxVideo">
                 
                 <!-- GALERIA DE FOTOS -->
              <div class="container galeriaNew" style="float: left; margin-bottom: 10px; width: 640px;">
                <div id="featured">
                <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if(count($related)>0): ?>
                  <?php foreach($related as $d): ?>
                  <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" data-thumb="<?php echo $d->retriveImageUrlByImageUsage('image-1') ?>" data-caption="#html<?php echo $d->getSlug() ?>" />
                  <?php endforeach; ?>
                <?php endif; ?>
                </div>

                <!-- THUMBNAILS -->
              <?php if(count($related)>0): ?>
                <?php foreach($related as $d): ?>
                <?php $related_content = $d->retriveRelatedAssetsByAssetTypeId(1); ?>
                <span class="orbit-caption" id="html<?php echo $d->getSlug() ?>">
                  <span class="espaco">
                    <?php echo $d->getDescription() ?><?php if($d->AssetImage->getHeadline()!="") echo "<br>".$d->AssetImage->getHeadline() ?><?php if($d->AssetImage->getAuthor()!="") echo "<br>Foto: ".$d->AssetImage->getAuthor() ?>
                    <?php if(count($related_content)>0): ?>
                    <br /><a href="<?php echo $related_content[0]->retriveUrl()?>" target="_blank">Saiba mais</a>
                    <?php endif; ?>
                  </span>
                </span>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
              <!-- /GALERIA DE FOTOS -->
               
                  <span class="faixa"></span>
                  <h3><?php echo $asset->getTitle();  ?></h3>
                  <p class="dataPost">Programa exibido em <?php echo format_date($asset->getCreatedAt(),'D') ?></p>
                  <p class="post"><?php echo $asset->getDescription();  ?></p><p>
                 <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
              <!-- /barra compartilhar -->

                  </div>
                  
                   <div class="box-publicidade">
                    <!-- tvcultura-homepage-300x250 -->
                    <script type="text/javascript">
            GA_googleFillSlot("cmais-assets-300x250");
                    </script>
                    </div>
                </div>
               
                </div>
                
                           
               
               
              <!-- video interna-->	
            </div>
            <!-- centro-->
          </div>
          <!-- tudo provoca-->
          <span class="bordaBottomRV"></span>
        </div>
        <!--/capa-->
      </div>
      <!-- conteudo pagina -->
    </div>
    <!-- /miolo -->
  </div>
  <!-- /capa-site -->

</div>
<!-- bg provoca-->
