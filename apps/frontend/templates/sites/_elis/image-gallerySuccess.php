<link type="text/css" href="/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet" />
<script type="text/javascript" src="/portal/js/orbit/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/programaVideosInterna.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">
//carrossel
$(function(){
  $('.carrossel').jcarousel({
      wrap: "both"
  });

  //hover states on the static widgets
  $('#dialog_link, ul#icons li').hover(
    function() { $(this).addClass('ui-state-hover'); }, 
    function() { $(this).removeClass('ui-state-hover'); }
  );
  
});

$(window).load(function() {
  $('#featured').orbit({
    'bullets' : true,   
    'bulletThumbs': true
  });
});
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
	<div class="bg-chamada">
		<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
	</div>
	<div class="bg-site"></div>
    <!-- CAPA SITE -->
    <div id="capa-site">
      
     

     <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0): ?>
      <h2>
      <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
      <?php if($program->getImageThumb() != ""): ?>
      <img src="http://cmais.com.br/portal/images/capaPrograma/elis/logo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
      <?php	else:?>
      <h3 class="tit-pagina grid1">
      <?php echo $program->getTitle() ?>
      </h3>
      <?php	endif;?>
      </a>
      </h2>
      <?php	endif;?>
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php	endif;?>
    </div>
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
            <h3 class="tit-pagina grid3"><?php echo $asset->getTitle()?></h3>
            <div id="esquerda" class="grid2">
              
              <div class="box-interna grid2" style="margin-bottom:0px;">
                
                <a href="#" class="txt-16"><?php echo $asset->getDescription() ?></a>
                <p><?php echo $asset->AssetImageGallery->getText()?></p>
                <!-- 
                <div class="assinatura grid2">
                  <p class="sup">Cristina Hallogallo <span>Nome da categoria</span></p>
                  <p class="inf">10/11/2010 09h30 - Atualizado em 10/11/2010 11h29</p>
                  <div class="acessibilidade">
                    <a href="#" class="zoom">+A</a>
                    <a href="#" class="zoom">-A</a>
                  </div>
                </div>
                -->
              </div>

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
              
              <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              <!-- /barra compartilhar -->

            </div>
            
            <div id="direita" class="grid1 direitaMais">
              
              <?php $people = $asset->retriveRelatedAssetsByAssetTypeId(20); ?>
              <?php if(count($people)>0): ?>
                <?php $author = $people[0]; ?>
                <!-- BOX PADRAO INFORMACOES -->
                <div class="box-padrao grid1 informacao">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>informa&ccedil;&otilde;es do artista</h4>
                    </div>
                  </div>
                  <div class="conteudo">
                    <p class="titulos"><?php echo $author->AssetPerson->getName() ?></p>
                    <p class="txt-12 bold"><?php echo $author->AssetPerson->getHeadline() ?></p>
                    <!-- <p class="txt-12 bold">Nasceu em: <span>30/10/1980, S&atilde;o Paulo.</span></p> -->
                    <p class="txt-16 bold">Biografia</p>
                    <p class="txt"><?php echo $author->AssetPerson->getBio() ?></p>  
                  </div>
                </div>
                <!-- BOX PADRAO INFORMACOES -->
              <?php endif; ?>

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("programas-assets-300x250");
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

          </div>
          <!-- CAPA -->

          <!-- MENU-RODAPE -->
          <?php if(isset($displays["galerias-recentes"])) include_partial_from_folder('blocks','global/display-3c-last-galleries', array('displays' => $displays["galerias-recentes"])) ?>
          <!-- /MENU-RODAPE -->

          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- programas-assets-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("programas-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->
          
          </div>
          <!-- /CONTEUDO PAGINA -->
        
        </div>
        <!-- /MIOLO -->
      
      </div>
      <!-- / CAPA SITE -->
