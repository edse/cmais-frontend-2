<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site"> 

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <!--a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
            </a-->
            <a href="#"><img src="http://cmais.com.br/portal/images/capaPrograma/captacao/logo-captacao.png" alt="Captação" /></a>
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
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
            
            
            <!-- DIREITA -->
            <div id="direita" class="grid1" style="margin:0">
              <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador"])) ?>
              <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-2"])) ?>
              <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-3"])) ?>
              <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-4"])) ?>
              
            </div>
            <!-- /DIREITA -->
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2" style="margin:0 0 0 20px">
            	
              
              <?php include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["destaque-principal"])) ?>

              <?php include_partial_from_folder('blocks','global/share-2c-close', array('site' => $site, 'uri' => $uri)) ?>

              <?php include_partial_from_folder('blocks','global/display-2c-playlist', array('displays' => $displays["destaque-playlist"])) ?>
				
				<style type="text/css">
            		#esquerda .box-compartilhar .comentar { text-indent:-9999px; }
            		#esquerda .box-compartilhar .comentar span {display:none;}  
            		#esquerda .btn-compartilhar {float:left;}
            	</style>
            	
              <!-- col-esq -->
              <div class="col-esq grid1">
               <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-5"])) ?>
               <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-7"])) ?> 
               
              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">
                
                <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-6"])) ?>
                <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-8"])) ?>
                
              </div>
              <!-- /col-dir -->
              
            </div>
            <!-- /ESQUERDA -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->