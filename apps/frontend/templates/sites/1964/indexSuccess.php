<link type="text/css" href="/portal/univesptv/css/geral.css" rel="stylesheet" />
<script type="text/javascript" src="/portal/js/mediaplayer/swfobject.js"></script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
	<div id="capa-site">
     	<!-- BARRA SITE -->
  		<div id="barra-site">
	       <div class="topo-programa">
		           <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/43cfb180f75e0cbc2c2823f4cfb603643151ab5a.png" /></a></h2>
		          
		          <!-- curtir -->
		          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri)) ?>
		          <!-- /curtir -->
		                    
		          <!-- horario -->
		          <div id="horario">
		            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
		          </div>
		          <!-- /horario -->
	          
	        </div>
			<!-- box-topo -->
	        <div class="box-topo grid3">
		       	<!-- menu interna -->
		       	<?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>
		        <!-- /menu interna -->                 
	    	</div>
	   		<!-- /box-topo -->
		  </div>	
	      <!-- /BARRA SITE -->
      
      <!-- MIOLO -->
   	  <div id="miolo">
   	   	
   	    <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!--CONTEUDO-->
        <div id="conteudo-pagina">
	         
	         <!-- CAPA 3-->
         	 <div class="capa grid3">
         	 	
         	 	<!--TITULO-->
		   	   	 <div class="box-interna grid2">
			   	   	<h3><?php echo $section->getTitle() ?></h3>
	                <p><?php echo $section->getDescription() ?></p>
		   	   	 </div>
		   	   	 <!--TITULO-->
		   	   	
		          <!-- INICIO TIMELINE -->
		          <div class="" style="height: 500px;">
			            <div id="tvcultura-embed"></div>
			            <script type="text/javascript">
			              var timeline_config = {
			               width: "100%",
			               height: "100%",
			               source: '/ajax/1964contents.jsonp',
			               start_at_slide: 0,
			               start_zoom_adjust: 2,
			               embed_id: "tvcultura-embed",
			               css: "/portal/js/timeline/1964.css",
			              /* css: "http://172.20.1.79:8080/tela2/js/timelinejs/css/timeline.css",*/
			               js: "/portal/js/timeline/timeline-min.js"
			              }
			            </script>
			            <script type="text/javascript" src="/portal/js/timeline/storyjs-embed.js"></script>
		            </div>
		            <!-- /FIM TIMELINE -->
	            		         
     		</div><!--/CAPA-->
             <!-- APOIO -->
   			 <?php include_partial_from_folder('sites/univesptv', 'global/apoio') ?>
	         <!-- APOIO -->
         	
        </div><!--/CONTEUDO-->
        
      </div><!--/MIOLO -->
      
    </div><!-- /CAPA SITE -->


