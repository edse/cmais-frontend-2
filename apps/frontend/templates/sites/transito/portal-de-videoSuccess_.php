<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/transito.css" type="text/css" />
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

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="../" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
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
          
          <div style="text-align: left;">
            <h5>Está parado no trânsito? Flagrou algum problema nas vias da cidade? Faça uma gravação do seu celular e envie para nós.</h5>
            <h6 style="text-decoration: underline;">Importante: não use o celular enquanto estiver ao volante.</h6>
          </div>

          <!-- CAPA -->
          <div class="capa grid3">
            
            <div class="mapa-sao-paulo grid3">
                  
              <!--CONTEUDOS -->
              <ul class="conteudos" style="height: 730px;">
                     
               <!--PORTAL DE VIDEOS-->
               <li class="conteudo-portal-de-videos" style=""> 

                  <a name="ytd">
                  <script type="text/javascript" src="https://cmais-tvcultura.appspot.com/js/ytd-embed.js"></script>
                  <script type="text/javascript">
                  var ytdInitFunction = function() {
                    var ytd = new Ytd();
                    ytd.setAssignmentId("1001");
                    ytd.setCallToAction("callToActionId-1001");
                    var containerWidth = 350;
                    var containerHeight = 550;
                    ytd.setYtdContainer("ytdContainer-1001", containerWidth, containerHeight);
                    ytd.ready();
                  };
                  if (window.addEventListener) {
                    window.addEventListener("load", ytdInitFunction, false);
                  } else if (window.attachEvent) {
                    window.attachEvent("onload", ytdInitFunction);
                  }
                  </script>
                  </a><div class="youtube"><a name="ytd">
                    </a><a id="callToActionId-1001" href="javascript:void(0);" class="upload"></a>
                    <div id="ytdContainer-1001"></div>
                    
                  </div>
                  <div class="participe">
                    <div class="img-enviar"></div>
                    <a href="#" class="titulos">Participe! Envie seu vídeo.</a>
                    <!--a href="#">Duis lectus nibh, venenatis sed consectetur id, interdum vel ante. Nam suscipit, massa hendrerit consectetur auctor, erat quam tempor quam, eget aliquam diam metus eget lorem. Cras id arcu nisi, eget lobortis urna. Aenean consectetur mattis iaculis. Maecenas euismod massa eget dui tincidunt viverra. </a-->
                  </div>
                  
                  
                   </li>
                   <!--PORTAL DE VIDEOS-->      
                </ul>
                <!--CONTEUDOS -->         
            </div>
  
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->