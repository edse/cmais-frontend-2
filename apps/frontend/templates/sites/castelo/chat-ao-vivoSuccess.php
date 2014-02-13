<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/interna.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>
<script>
function updateTweets(){
  $.ajax({
    url: "/index.php/ajax/tweetmonitor",
    data: "monitor_id=10",
    success: function(data) {
      $('#twitter').html(data);
    }
  });
}
$(function(){ //onready
  updateTweets();
  var t=setTimeout("updateTweets()",10000);
});
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>

<!--CASTELO-->
<div id="chat2">
  
    <!-- CAPA SITE -->
    <div id="capa-site">      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          
          <h2>
            <a href="http://cmais.com.br/castelo" style="text-decoration: none;">
							<img src="http://cmais.com.br/portal/images/capaPrograma/castelo/img-logo-castelo.png" class="logo" alt="Castelo Ra Tim Bum" />
            </a>
          </h2>
          

					<?php include_partial_from_folder('sites/castelo','global/like', array('uri' => $uri)) ?>          
          
          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('sites/castelo','global/menu', array('siteSections' => $siteSections, 'section' => $section)) ?>

         
        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->
      <div class="bg-video"></div>

      <!-- MIOLO -->
      <div id="miolo">
        
        

      <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              
              <?php include_partial_from_folder('sites/castelo','global/display-2c', array('displays' => $displays["destaque-principal"])) ?>

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
             
            	<?php if(isset($displays['chat'])): ?>
	            <!-- COVERIT LIVE --> 
	            <div class="box-padrao">
	              <?php echo html_entity_decode($displays['chat'][0]->getHtml()); ?>
	            </div>	
	            <!--/ COVERIT LIVE -->
            	<?php endif; ?>
              
	            <?php if(isset($displays['twitter'])): ?>
	            <!-- BOX TWITTER -->
	          	<div class="grid1 box-padrao">
								<a href="http://twitter.com/tvcultura" class="twitter-follow-button" target="_blank">Siga @tvcultura</a>
								<div id="twitter"></div>
								<hr />
							</div>
	            <!-- /BOX TWITTER -->
	            <?php endif; ?>
              
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
          <!--APOIO-->
          <?php if(isset($displays["rodape-interno"])) include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
        
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->