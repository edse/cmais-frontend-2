<link type="text/css" href="http://cmais.com.br/portal/multicultura/css/geral.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/multicultura/images/logo-multicultura.png" /></a></h2>
          
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
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

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
                          
              <!-- DESTAQUE 2 COLUNAS -->
              <div id="livestream2">
              <?php if(isset($displays["destaque-principal"])) include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["destaque-principal"])) ?>
              </div>
              <!-- /DESTAQUE 2 COLUNAS -->
              
              <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c-close', array('site' => $site, 'uri' => $uri)) ?>
              <!-- /barra compartilhar -->
              
              <!-- PLAYLIST -->
              <?php if(isset($displays["destaque-playlist"])) include_partial_from_folder('blocks','global/display-2c-playlist', array('displays' => $displays["destaque-playlist"])) ?>
              <!-- PLAYLIST -->
              
              <!-- col-esq -->
              <div class="col-esq grid1">

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
                <!-- /BOX NOTICIA -->

              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">
                                
                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-5"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
                <!-- /BOX NOTICIA -->
                                
              </div>
              <!-- /col-dir -->
                            
            </div>
            <!-- /ESQUERDA -->
                        
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <?php include_partial_from_folder('blocks','global/display-1c-live-multicultura') ?> 
              
              <?php include_partial_from_folder('blocks','global/display-1c-coming-multicultura') ?>
              
              <?php /*
              <!-- BOX PADRAO AGENDA -->
              <div id="agenda" class="box-padrao grid1">
                  <div class="abas-conteudo">
                      <ul id="dom" class="filho" style="display:block">
                          <li class="ativo">
                              <div class="hora">
                                  <p class="noar">no ar</p>
                                  <a href="#">18:00</a>
                              </div>
                              <div class="txt-padrao">
                                  <a class="titulos" href="#">Domingo</a>
                                  <a href="#">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                      when an unknown printer took a galley of type and scrambled it to make a type 
                                      specimen book</a>
                              </div>
                          </li>
                          <li class="last">
                              <div class="hora">
                                  <a href="#">18:00</a>
                              </div>
                              <div class="txt-padrao">
                                  <a class="titulos" href="#">Domingo</a>
                                  <a href="#">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                      when an unknown printer took a galley of type and scrambled it to make a type 
                                      specimen book</a>
                              </div>
                          </li>
                      </ul>
                      <a href="/grade" class="completa">grade completa</a>
                  </div>
              </div>
              <!-- /BOX PADRAO AGENDA -->
              */ ?>
                            
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
               <!-- multicultura-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("multicultura-300x250");
				</script>
              </div>
              <!-- / BOX PUBLICIDADE -->
                            
              <!-- BOX FACEBOOK -->
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
              <!-- /BOX FACEBOOK -->
              
              <!-- BOX TWITTER -->
              <div class="box-padrao twitter grid1">
                  <script type="text/javascript"></script>
              </div>
              <!-- /BOX TWITTER -->
                            
            </div>
            <!-- /DIREITA -->
  
          </div><!-- /CAPA -->
                      
        </div><!-- /CONTEUDO PAGINA -->
                  
      </div><!-- /MIOLO -->
            
    </div><!-- /CAPA SITE -->


