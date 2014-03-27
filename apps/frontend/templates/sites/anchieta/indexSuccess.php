<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<div class="bg-site">
</div>

    <!-- CAPA SITE -->
    <div id="capa-site">      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
            </a>
          </h2>
          <?php else: ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($site->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="<?php echo $site->getTitle() ?>" title="<?php echo $site->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $site->getTitle() ?></h3>
              <?php endif; ?>
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
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
            	
              
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
              	
                <!-- BOX PADRAO Enquete -->
                <?php if(isset($displays["destaque-enquete-1"])) include_partial_from_folder('blocks','global/display-1c-poll', array('displays' => $displays["destaque-enquete-1"])) ?>
                <!-- /BOX PADRAO Enquete -->
                
                <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador"])) ?>
                
                <?php include_partial_from_folder('blocks','global/display-1c-hosts', array('displays' => $displays["destaque-apresentadores"])) ?>

                <?php include_partial_from_folder('blocks','global/display-1c-gallery', array('displays' => $displays["destaque-galeria-1"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-1"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-3"])) ?>

                <?php //include_partial_from_folder('blocks','global/display-1c-gallery', array('displays' => $displays["destaque-5"])) ?>
                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-5"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-7"])) ?>
                
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
            
            	<?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">
                
                <?php if(isset($displays["destaque-multiplo-1"])): ?>
                <!-- BOX PADRAO Mais recentes -->
                <div class="box-padrao grid1">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php if($site->getSlug() == "mostra") echo "Próximos Filmes"; else echo "Conte&uacute;dos + recentes"; ?></h4>
                      <a href="/<?php echo $site->getSlug() ?>/feed" class="rss" title="rss" style="display: block"></a>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-multiplo-1"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-multiplo-1"])) ?>
                </div>
                <!-- BOX PADRAO Mais recentes -->
                <?php endif; ?>
                
                <?php if(isset($displays["destaque-apresentador-2"])) include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-2"])) ?>

                <?php if(isset($displays["destaque-apresentador-3"])) include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-3"])) ?>
                	
                <?php include_partial_from_folder('blocks','global/display-1c-poll', array('displays' => $displays["destaque-enquete"])) ?>

                <?php include_partial_from_folder('blocks','global/display-1c-gallery', array('displays' => $displays["destaque-galeria-2"])) ?>
                
                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-2"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-4"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-6"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-8"])) ?>
                
                <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
            
            	<?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>

              </div>
              <!-- /col-dir -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <?php include_partial_from_folder('blocks','global/display-1c-vertical-multiple', array('displays' => $displays["destaque-secundario"])) ?>

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-homepage-300x250 -->
                <script type='text/javascript'>
                <?php if($site->slug == "classicos"): ?>
                	GA_googleFillSlot("culturafm-300x250");
                <?php else: ?>
                	GA_googleFillSlot("cmais-assets-300x250");
                <?php endif;?>
                </script>
              </div>                                        
              <!-- / BOX PUBLICIDADE -->

              <?php if(isset($displays["destaque-links"])): ?>
                <!-- BOX PADRAO + Visitados -->
                <div class="box-padrao mais-visitados grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php if(isset($displays["destaque-links"])) echo $displays["destaque-links"][0]->Block->getTitle() ?></h4>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-links"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links"])) ?>
                </div>
                <!-- /BOX PADRAO + Visitados -->
              <?php endif; ?> 

              <?php if(isset($displays["twitter"])) include_partial_from_folder('blocks','global/twitter-1c', array('site' => $site, 'uri' => $uri)) ?>
              
              <?php  if(isset($displays["twitter-carnaval"])):
              				foreach ($displays["twitter-carnaval"] as $k => $d): 
												echo html_entity_decode($d->html);				        	
					            endforeach;
            		endif;
            	?>
              
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'uri' => $uri)) ?>
              
            </div>
            <!-- /DIREITA -->
            
            <div class="box-interna grid2">
			   	   <h2>Linha do Tempo</h2>
		   	   	 </div>
		   	   	 <!--TITULO-->
		   	   	
		          <!-- INICIO TIMELINE -->
		          <div class="timeline">
			            <div id="tvcultura-embed"></div>
			            <script type="text/javascript">
			              var timeline_config = {
			               width: "100%",
			               height: "100%",
			               source: "http://cmais.com.br/anchieta/linha-do-tempo.jsonp",
			               start_at_end: true, //start_at_end: true,começa do ultimo asset
			               start_zoom_adjust: 2,
			               embed_id: "tvcultura-embed",
			               css: "http://cmais.com.br/portal/js/anchieta/anchieta.css",
			               lang: "http://cmais.com.br/portal/js/anchieta/pt-br.js",
			               js: "http://cmais.com.br/portal/js/anchieta/timeline-min.js"
			              }
			            </script>
			            <script type="text/javascript" src="http://cmais.com.br/portal/js/timeline/storyjs-embed.js"></script>
		            </div>
		            <!-- /FIM TIMELINE -->
            
          </div>
          <!-- /CAPA -->
          
					<?php if (isset($displays["rodape-interno"])): ?>
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          <?php endif; ?>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
    				
    </div>
    <!-- /CAPA SITE -->
    
