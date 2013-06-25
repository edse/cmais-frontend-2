    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    
    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

        <?php if(isset($program) && $program->id > 0): ?>
        <div class="topo-programa">
          <!--h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2-->
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if($program->getSchedule()): ?>
            <!-- horario -->
            <div id="horario">
              <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
            </div>
            <!-- /horario -->
        </div>
        <?php endif; ?>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="../" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>
          
          <h3 class="tit-pagina grid3"><?php echo $section->getTitle() ?></h3>

        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">

        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <?php if(isset($displays["galerias"])) include_partial_from_folder('blocks','global/display-3c-gallery', array('displays' => $displays["galerias"])) ?>

            <!-- MENU-RODAPE -->
            <?php if(isset($displays["galerias-recentes"])) include_partial_from_folder('blocks','global/display-3c-last-galleries', array('displays' => $displays["galerias-recentes"])) ?>
            <!-- /MENU-RODAPE -->

            <!-- BOX PUBLICIDADE 2 -->
            <div class="box-publicidade pub-grd grid3">
              <!-- cmais-assets-728x90 -->
              <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-728x90");
              </script>
            </div>
            <!-- / BOX PUBLICIDADE 2 -->

          </div>
          <!-- /CAPA -->
        
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->

