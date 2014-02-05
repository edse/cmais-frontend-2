<link type="text/css" href="http://cmais.com.br/portal/css/geral.css" rel="stylesheet" />
<!--link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/univesptv/css/cursos.css" /-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
	<div id="capa-site" class="a1964">
     	<!-- BARRA SITE -->
  		<div id="barra-site" onclick=location="home" title="<?php echo $section->getTitle() . "  ". $section->getDescription() ?>">
				
				<!-- TOPO -->
		    <div class="topo-programa">
		    	
	    		<!-- MENU -->
					<?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections))?>
					<!--/ MENU -->
					
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
	         	 	<div id="direita"class="grid1">
									<?php	echo $asset_quality->AssetContent->render(); ?>
							</div>
	         	 	
		   	   	 <div class="box-interna grid2">
				   	   	<?php  $asset_quality = Doctrine::getTable('Asset')->findOneById(160756); ?>
								<h2><?php echo $asset_quality->getTitle();?></h2>
								<p><?php echo $asset_quality->getDescription();?></p>
								<div class="duas-colunas destaque grid2">
								
								<div id="player"><iframe title="Washington Olivetto: “A TV Cultura tem uma busca de qualidade histórica”" width="640" height="390" src="http://www.youtube.com/embed/DD3hR-qhz_c?wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen=""></iframe></div>
									<script>
										function changeVideo(id){
										  $('#player').html('<iframe width="640" height="390" src="http://www.youtube.com/embed/'+id+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>');
										}
									</script>
								
									<ul class="box-playlist grid2">
										<li>
											<a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
												<img src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
											</a>
										</li>
										<li>
											<a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
												<img src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
											</a>
										</li>
										<li>
											<a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
												<img src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
											</a>
										</li>
										<li>
											<a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
												<img src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
											</a>
										</li>
										<li>
											<a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
												<img src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
											</a>
										</li>
										<li>
											<a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
												<img src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
											</a>
										</li>
										
									</ul>
								</div>
								
		   	   	 </div>
		   	   	 <!--TITULO-->
		   	   	
		          <!-- INICIO TIMELINE -->
		          <div class="timeline">
			            <div id="tvcultura-embed"></div>
			            <script type="text/javascript">
			              var timeline_config = {
			               width: "100%",
			               height: "100%",
			               source: "http://cmais.com.br<?php echo url_for('homepage')?>qualidade/linha-do-tempo.jsonp",
			               start_at_slide: 0,
			               start_zoom_adjust: 2,
			               embed_id: "tvcultura-embed",
			               css: "http://cmais.com.br/portal/js/qualidade/qualidade.css",
			               lang: "http://cmais.com.br/portal/js/qualidade/pt-br.js",
			               js: "http://cmais.com.br/portal/js/qualidade/timeline-min.js"
			              }
			            </script>
			            <script type="text/javascript" src="http://cmais.com.br/portal/js/qualidade/storyjs-embed.js"></script>
		            </div>
		            <!-- /FIM TIMELINE -->
	            		         
     		</div><!--/CAPA-->

	         <!-- APOIO -->
         	
        </div><!--/CONTEUDO-->
        
      </div><!--/MIOLO -->
      
    </div><!-- /CAPA SITE -->


 