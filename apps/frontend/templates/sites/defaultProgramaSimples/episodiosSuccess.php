<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaSimplesEpisodios.css" type="text/css" />
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

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <h3 class="tit-pagina grid2">Epis&oacute;dios - <?php echo $season->Asset->getTitle() ?></h3>

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                
                <a href="<?php echo $url ?>" class="titulos"><?php echo $episode->Asset->getTitle() ?></a>
                <div class="texto"> 
                  <p><?php echo $episode->Asset->getDescription() ?></p>

                  <div class="media grid2">
                    <?php $vid = $episode->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                    <?php if(count($vid) > 0): ?>
                    <object style="height:384px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $vid[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $vid[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="384"></embed>
                    </object>
                    <?php endif; ?>

                  </div>

                  <!-- PAGINACAO
                  <div class="paginacao pag3 grid2">
                      <a href="#" class="btn proximo"></a>
                      <a class="titulos">Epis&oacute;dio 2</a>
                      <a href="#" class="btn anterior"></a>
                  </div>
                  -->
                  <!-- PAGINACAO -->

                </div>

              </div>
              <!-- /NOTICIA INTERNA -->

              <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              <!-- /barra compartilhar -->
            
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PADRAO NOTICIAS -->
              <div id="box-videos" class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>lista de epis&oacute;dios</h4>
                  </div>
                </div>
                <div class="">
                <?php if(isset($displays)): ?>
                  <?php if(count($displays) > 0): ?>

                  <ul class="sem-borda">
                  <?php foreach($episodes as $k => $d): ?>
                    <li class="conteudo-lista">
                      <a class="episodio ativo">Epis&oacute;dio<span><?php echo $k+1 ?></span></a>
                      <a href="./episodios?e=<?php echo $d->Asset->getSlug() ?>" class="titulos"><?php echo $d->Asset->getTitle() ?></a>
                      <a href="./episodios?e=<?php echo $d->Asset->getSlug() ?>"><?php echo $d->Asset->getDescription() ?></a>
                    </li>
                  <?php endforeach; ?>
                  </ul>

                  <?php endif; ?>
                <?php endif; ?>
                </div>
                
              </div>
              <!-- /BOX PADRAO NOTICIAS -->
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
            </div>
            <!-- /DIREITA -->

          </div>
          <!-- /CAPA -->

        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->

