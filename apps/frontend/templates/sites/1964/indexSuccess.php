<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<!--link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/univesptv/css/cursos.css" /-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
	<div id="capa-site" class="a1964">
     	<!-- BARRA SITE -->
  		<div id="barra-site">
					<a href="<?php echo $site->retriveUrl() ?>"><img src="http://cmais.com.br/portal/images/timeline/topo.png"></a>
					
				
				<!-- TOPO -->
		    <div class="topo-programa">
		    	
	    		<!-- MENU -->
					          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna grid3">
            <?php foreach($siteSections as $s): ?>
              <?php if($s->getSlug() == "programasNAO"): ?>
                <?php 
                $programs = Doctrine_Query::create()
                  ->select('p.*')
                  ->from('Program p, ChannelProgram cp, Site s')
                  ->where('p.id = cp.program_id AND s.id = p.site_id')
                  ->andWhere('cp.channel_id = ?', (int)6)
                  ->andWhere('p.is_in_menu = 1')
                  ->orderBy('p.title')
                  ->execute();
                ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="http://culturafm.cmais.com.br/<?php echo $s->getSlug()?>" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none; width: auto;">
                    <ul style="display:block;">
                    <?php foreach($programs as $p): ?>
                      <li><a href="http://culturafm.cmais.com.br/<?php echo $p->getSlug()?>"><?php echo $p->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <?php $subsections = $s->subsections(); ?>
                <?php if(count($subsections) > 0): ?>
                  <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                    <div class="submenu-interna toggle-menu" style="display:none; width: auto;">
                      <ul style="display:block;">
                      <?php foreach($subsections as $s): ?>
                        <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                      <?php endforeach; ?>
                      </ul>
                    </div>
                  </li>
                <?php else: ?>
                  <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
                <?php endif; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>

					
		    <!-- / TOPO -->  
		    </div>
		  <!-- /BARRA SITE -->  
      </div>
       
      <!-- MIOLO -->
   	  <div id="miolo">
   	   	
   	    <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!--CONTEUDO-->
        <div id="conteudo-pagina">
	         
	         <!-- CAPA 3-->
         	 <div class="capa grid3">
         	 	
         	 	<!-- DESTAQUES -->
						<?php if (isset($displays['destaque-principal'])): ?>      
							<?php if (count($displays['destaque-principal']) > 0): ?>      
			      <div id="destaque" class="destaque destaque-3c grid3">
			        <ul class="abas-conteudo conteudo">
								<?php foreach($displays['destaque-principal'] as $k=>$d): ?>
			          <li style="display: block;" id="bloco<?php echo $k ?>" class="filho">
			          	<a class="media" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			          		<div class="subs"><h2><?php echo $d->getTitle() ?></h2></div>
			          		<img src="<?php echo $d->retriveImageUrlByImageUsage('image-10-b') ?>" alt="<?php echo $d->getTitle() ?>">
			          	</a>
			          	
			         	</li>
			        	<?php endforeach; ?>
			        </ul>
			        <ul class="abas-menu pag-bola destaque1">
			        	<?php foreach($displays['destaque-principal'] as $k=>$d): ?>
			        		<?php if($k==0): ?>
			          <li class="ativo">
			          	<?php else: ?>
			          <li>
			          	<?php endif; ?>
			          	<a href="#bloco<?php echo $k ?>" title="<?php echo $d->getTitle() ?>"></a>
			          </li>
			          <?php endforeach; ?>
			        </ul>
			      </div>
			      	<?php endif; ?>
			      <?php endif; ?>
		      <!-- /DESTAQUES -->
		      
		      <div class="conteudo-box">
		      	
		      <!-- /DESTAQUES HOME SEÇÕES -->
  				<?php if (isset($displays['destaque-home-secoes'])): ?>
	            	<?php if (count($displays['destaque-home-secoes']) > 0): ?>
	            <div class="span10 cursos">
	              <ul class="thumbnails">
	              	<?php foreach($displays['destaque-home-secoes'] as $k=>$d): ?>
	                <li class="span3">
	                <div class="thumbnail">
	                  <a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>">
	                  	<img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-13') ?>">
	                  </a>
	                  <div class="caption">
	                    <h5><a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></h5>
	                    <a href="<?php echo $d->retriveUrl(); ?>"><?php echo $d->getDescription(); ?></a>
	                  </div>
	                </div>
	                </li>
	                <?php endforeach; ?>
	              </ul>
	            </div>
	            	<?php endif; ?>          
	            <?php endif; ?>
		      <!-- /DESTAQUES HOME SEÇÕES-->
		      
         	 	</div>
         	 	<!--TITULO-->
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
			               source: "http://univesptv.cmais.com.br/1964/linha-do-tempo.jsonp",
			               start_at_end: true,//começa do ultimo asset star_at_slide: 0 começa do asset tal, no caso, 0
			               start_zoom_adjust: 2,
			               embed_id: "tvcultura-embed",
			               css: "http://cmais.com.br/portal/js/timeline/1964.css",
			               lang: "http://cmais.com.br/portal/js/timeline/pt-br.js",
			               js: "http://cmais.com.br/portal/js/timeline/timeline-min.js"
			              }
			            </script>
			            <script type="text/javascript" src="http://cmais.com.br/portal/js/timeline/storyjs-embed.js"></script>
		            </div>
		            <!-- /FIM TIMELINE -->
	            		         
     		</div><!--/CAPA-->
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

   			 <!--?php include_partial_from_folder('sites/univesptv', 'global/apoio') ?-->
	         <!-- APOIO -->
         	
        </div><!--/CONTEUDO-->
        
      </div><!--/MIOLO -->
      
    </div><!-- /CAPA SITE -->


 