<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<script>
  var t;
  function checkStreamingStart(){
    var request = $.ajax({
      dataType: 'jsonp',
      success: function(data) {
        eval(data);
      },
      url: 'http://app.cmais.com.br/ajax/streamingunivesp'
    });
  }
  function checkStreamingEnd(){
    var request = $.ajax({
      dataType: 'jsonp',
      success: function(data) {
        eval(data);
      },
      url: 'http://app.cmais.com.br/ajax/streamingendunivesp'
    });
  }
  $(window).load(function(){
    checkStreamingStart();
    te=setInterval("checkStreamingEnd()",60000);
  });
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/univesptv/images/logo-univesptv.png" /></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
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
              <?php if(isset($displays["destaque-playlist"])) include_partial_from_folder('blocks','global/display-2c-playlist2', array('displays' => $displays["destaque-playlist"])) ?>
          
              <!-- PLAYLIST -->
              
              <!-- col-esq -->
              <div class="col-esq grid1">

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
                <!-- /BOX NOTICIA -->
                
                <?php /* 
                <!-- BOX PADRAO Mais recentes -->
                <div class="box-padrao grid1">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>Blog da programação</h4>
                      <a href="/feed" class="rss" title="rss" style="display: block"></a>
                    </div>
                  </div>
                  <?php if(isset($displays["blog-da-programacao"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["blog-da-programacao"])) ?>
                </div>
                <!-- BOX PADRAO Mais recentes -->
                */?>

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
                                
                <?php /*
                <!-- BOX YOUTUBE DIRECT -->
                <div class="box-padrao ytb-direct grid1">
                    <img src="../images/ytb-direct.jpg" alt="Youtube Direct" /><p>Participe!</p>
                    <p>Envie seus v&iacute;deos e entrevistas. Colabore e fa&ccedil;a parte do 
                        conte&uacute;do cultura.</p>
                    <a class="enviar-video">envie seu v&iacute;deo</a>
                </div>
                <!-- /BOX YOUTUBE DIRECT -->
                */ ?>
                                
              </div>
              <!-- /col-dir -->
                            
            </div>
            <!-- /ESQUERDA -->
                        
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <?php include_partial_from_folder('blocks','global/display-1c-live-univesptv') ?> 
              
              <?php include_partial_from_folder('blocks','global/display-1c-coming-univesptv') ?>
              
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
                <!-- univesptv-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("univesptv-300x250");
				</script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              <?php /* 
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="/feed" class="rss" title="rss" style="display: block"></a>
                  </div>
                </div>
                <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              */ ?>
                            
              <!-- BOX FACEBOOK -->
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
              <!-- /BOX FACEBOOK -->
              
              <!-- BOX TWITTER -->
              <div class="box-padrao twitter grid1">
                  <script type="text/javascript">
                  </script>
              </div>
              <!-- /BOX TWITTER -->
                            
            </div>
            <!-- /DIREITA -->
                        
            <!-- APOIO -->
	          <ul id="apoio" class="grid3">
	              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
	              <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
	              <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
	              <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
	              <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
	              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
	              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
	          </ul>
	          <!-- APOIO -->
  
          </div><!-- /CAPA -->
                      
        </div><!-- /CONTEUDO PAGINA -->
                  
      </div><!-- /MIOLO -->
            
    </div><!-- /CAPA SITE -->


