    <link rel="stylesheet" href="http://cmais.com.br/portal/css/cmais.css" type="text/css" />
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

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
          
          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>
      
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
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
            
            <h3 class="tit-pagina"><?php echo $section->getTitle() ?></h3>
            <div class="linguas">
              <a href="cultura-marcas" class="pt" title="Português">Português</a>
              <a href="cultura-marcas-en" class="en" title="English">English</a>
            </div>            
            <!-- MARCAS -->
            <div id="revista" class="grid3">
              <div class="destaque-revista">
                <?php if(count($section->Blocks) > 0): ?>
                <ul id="menu-revista">
                  <?php foreach($section->Blocks as $k=>$b): ?>
                  <li class="item<?php echo $k; ?>"><a id="item<?php echo $k; ?>" href="javascript:;"><?php echo $b->getTitle(); ?></a></li>
                  <?php endforeach; ?>
                </ul>
                <div id="conteudo-revista">
                  <?php foreach($section->Blocks as $k=>$b): ?>
                  <div class="capa-conteudo filho" id="conteudo-item<?php echo $k; ?>">
                    <?php $b->Displays = $b->retriveDisplays() ?>
                    <?php foreach($b->Displays as $i=>$d): ?>
                    <div class="mini-destaque">
                      <a class="media" href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b"); ?>" /></a>
                      <div class="bg"></div>
                      <div class="descricao">
                        <h3 class="titulo"><a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></h3>
                        <p><?php echo $d->getDescription(); ?></p>
                      </div>
                    </div>
                    <?php endforeach; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <!-- /MARCAS-->
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->

     <script>
    $(document).ready( function() {
      // comportamento inicial
      var currentItem = $('.destaque-revista ul#menu-revista li:first');
      $(currentItem).addClass('ativo');
      var currentContent = $('.destaque-revista div#conteudo-revista div:first');
      $(currentContent).fadeIn('slow').addClass('ativo');
      
      
      // evento click
      $('.destaque-revista ul#menu-revista li a').click( function() {
        if($(this).attr('id') != currentItem){
          $(this).parent().addClass('ativo');
          $(currentItem).removeClass('ativo');
          currentItem = $(this).parent();
          _currentContent = $(this).attr('id');
          $(this).parent().parent().next().find('div.ativo').fadeOut('slow', function(){
            $('div#conteudo-'+_currentContent+'').fadeIn('normal').addClass('ativo');
          }).removeClass('ativo');
        }
      });
      
      $('.mini-destaque').hover(function(){
        $(this).find('.bg').toggle();
        $(this).find('.descricao').toggle();
      });
    })
    </script>
