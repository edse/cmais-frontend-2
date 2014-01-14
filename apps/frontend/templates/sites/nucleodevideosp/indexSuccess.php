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
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          	  <!-- curtir -->
	          <div class="redes">
	            <div class="curtir">
	              <div style="display:block; float: left; margin-right:10px;">
	              <g:plusone size="medium" count="false"></g:plusone>
	              </div>
	              <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
	            </div>
	            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
	          </div>
	          <!-- /curtir -->
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
          <!-- curtir -->           
	          <div class="redes" style="width:auto; margin:0;">	           	           	           
	            <ul>
	              <li><a class="fb" href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?>http://facebook.com/tvcultura<?php endif; ?>" title="Facebook">Facebook</a></li>
	              <li><a class="twt" href="<?php if($site->getTwitterUrl()): ?><?php echo $site->getTwitterUrl() ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" title="Twitter">Twitter</a></li>
	              <li><a class="ytb" href="http://youtube.com/<?php if($site->getYoutubeChannel()): ?><?php echo $site->getYoutubeChannel() ?><?php else: ?>cultura<?php endif; ?>" title="YouTube">YouTube</a></li>
	              <li><a class="orkut" href="http://www.orkut.com.br/Main#Profile?uid=4382339673666352959" title="Orkut">Orkut</a></li>
	              <li><a class="rss" href="/<?php echo $site->getSlug() ?>/feed" title="RSS">RSS</a></li>
	            </ul>
	          </div>	         
	          <!-- /curtir -->

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

              <!-- barra compartilhar -->
              <div class="box-compartilhar grid2">
                <a href="javascript:;" class="comentar" style="display:none"><span></span>Coment&aacute;rios</a>
                <div class="btn-compartilhar" style="width: auto;">
                  <p class="compartilhar">Compartilhar</p>
                  <div class="face">
                    <div style="display:block; float: left;">
                      <g:plusone size="medium" count="false"></g:plusone>
                    </div>
                    <!-- Google Orkut Share Element -->
					<div id="orkut_share"></div><script src="http://www.google.com/jsapi" type="text/javascript"></script><script type="text/javascript">google.load('orkut.share', '1');google.setOnLoadCallback(function(){new google.orkut.share.Button({style:'regular'}).draw('orkut_share');}, true);</script>
                    <div style="display:block; float: left; margin-right: 0px;">
                      <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
                    </div>
                    <div style="display:block; float: left; text-align: left;">
                      <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
                    </div>
                  </div>  
                </div>
              </div>
              <!-- /barra compartilhar -->
             
              <?php include_partial_from_folder('blocks','global/display-2c-playlist', array('displays' => $displays["destaque-playlist"])) ?>
				
				<style type="text/css">
            		#esquerda .box-compartilhar .comentar { text-indent:-9999px; }
            		#esquerda .box-compartilhar .comentar span {display:none;}  
            		#esquerda .btn-compartilhar {float:left;}
            	</style>
            	
              <!-- col-esq -->
              <div class="col-esq grid1">
                
                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-1"])) ?>

                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-3"])) ?>

              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">
                
                <?php if(isset($displays["destaque-multiplo-1"])): ?>
                <!-- BOX PADRAO Mais recentes -->
                <div class="box-padrao grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php if($site->getSlug() == "mostra") echo "Pr&oacute;ximos Filmes"; else echo "Conte&uacute;dos + recentes"; ?></h4>
                      <a href="/<?php echo $site->getSlug() ?>/feed" class="rss" title="rss" style="display: block"></a>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-multiplo-1"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-multiplo-1"])) ?>
                </div>
                <!-- BOX PADRAO Mais recentes -->
                <?php endif; ?>
                               
              </div>
              <!-- /col-dir -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <?php include_partial_from_folder('blocks','global/display-1c-vertical-multiple', array('displays' => $displays["destaque-secundario"])) ?>

              <!-- BOX PUBLICIDADE -->
              <div style="width: 300px; height: 50px; overflow: hidden" class="box-publicidade grid1">
                  <a target="_blank" href="http://www.educacao.sp.gov.br" name="Veja nossos v&iacute;deos no portal da Secretaria de Educa&ccedil;&atilde;o" title="Veja nossos v&iacute;deos no portal da Secretaria de Educa&ccedil;&atilde;o">
                  	<img src="http://cmais.com.br/portal/images/capaPrograma/nucleodevideosp/banner-educacao.gif" alt="Veja nossos v&iacute;deos no portal da Secretaria de Educa&ccedil;&atilde;o">
                  </a>
              </div>
                                                
              <!-- / BOX PUBLICIDADE -->
              
              <?php include_partial_from_folder('blocks','global/display-1c-gallery', array('displays' => $displays["destaque-galeria-1"])) ?>
               
            </div>
            <!-- /DIREITA -->
            
            <!-- APOIO -->
	          <ul id="apoio" class="grid3">
	              <li><a href="http://www.fde.sp.gov.br" target="_blank"><img src="http://cmais.com.br/portal/images/capaPrograma/nucleodevideosp/logo-fde.png" alt="FDE" /></a></li>
	              <li><a href="http://www.saopaulo.sp.gov.br/" target="_blank"><img src="http://cmais.com.br/portal/images/capaPrograma/nucleodevideosp/logo-sp.png" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
		      </ul>
	          <!-- APOIO -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->

