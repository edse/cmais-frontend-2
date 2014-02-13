<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaPersonagens.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna grid3">
            
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <div class="navegacao txt-10">
            <a href="./<?php echo $section->getSlug() ?>" title="<?php echo $section->getTitle() ?>"><?php echo $section->getTitle() ?></a>
          </div>

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

            <div id="esquerda" class="grid2">
                        
              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">

                <?php if(!isset($asset) && isset($pager)): ?>
                <?php $asset = $pager->getCurrent(); ?>
                <?php endif; ?>

                <?php if($asset): ?>
                  <?php if($asset->retriveImageUrlByImageUsage("image-3-b") != ""): ?>
                  <div class="box-relacionados grid1">
                    <a href="<?php echo $url."?p=".$asset->getSlug() ?>"><img class="310x186" src="<?php echo $asset->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $asset->getTitle() ?>" /></a>
                  </div>
                  <?php endif; ?>
  
                  <div class="texto">
                  <?php if($asset->AssetType->getSlug() == "content"): ?>
                    <?php echo html_entity_decode($asset->AssetContent->getContent()) ?>
                  <?php else: ?>
                    <?php echo html_entity_decode($asset->AssetPerson->getBio()) ?>
                  <?php endif; ?>
                  </div>

                <?php endif; ?>

              </div>
              <!-- /NOTICIA INTERNA -->

              <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              <!-- /barra compartilhar -->

            </div>

            <div id="direita" class="grid1">

              <!-- BOX PADRAO GALERIA -->
              <div class="box-padrao grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>personagens</h4>
                  </div>
                </div>
                <?php if(isset($pager)): ?>
                  <?php if(count($pager) > 0): ?>
                      <div class="conteudo galeria ">
                        <ul class="destaques">
                        <?php foreach($pager->getResults() as $d): ?>
                          <li><a href="<?php echo $url."?p=".$d->getSlug() ?>" style="text-align: center;"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
                              <div class="tooltip">
                                <span></span>
                                <a href="<?php echo $url."?p=".$d->getSlug() ?>"><?php echo $d->getTitle() ?></a>
                              </div>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                      </div>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              <!-- /BOX PADRAO GALERIA -->

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->

            </div>
          
          </div>
          <!-- /CAPA -->

        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!--/CAPA SITE -->
    

