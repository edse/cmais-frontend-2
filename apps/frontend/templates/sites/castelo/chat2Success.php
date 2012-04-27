<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/interna.css" type="text/css" />
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
          
                <img src="/portal/images/capaPrograma/castelo/img-logo-castelo.png" class="logo" alt="Castelo Ra Tim Bum" />
              
            </a>
          </h2>
          

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('sites/castelo','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

         <div class="castelo18">
           <img src="/portal/images/capaPrograma/castelo/img-menu-hashtag.png" alt="#castelo18anos">
           <a href="https://twitter.com/#!/search/realtime/castelo18anos" target="_blank"><img src="/portal/images/capaPrograma/castelo/btn-menu-twitter.png" alt="Twitter"></a>
           <a href="#" target="_blank"><img src="/portal/images/capaPrograma/castelo/btn-menu-instagram.png" alt="Instangram"></a>

         </div>
         
        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->
      <div class="bg-video"></div>

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

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>

            
            	
              
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
             <div class="box-padrao">
               <iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=e3ee0488bf/height=490/width=310" scrolling="no" height="490px" width="310px" frameBorder ="0" ><a href="http://www.coveritlive.com/mobile.php/option=com_mobile/task=viewaltcast/altcast_code=e3ee0488bf" >Castelo</a></iframe>
			 </div>	
              

             <!-- BOX TWITTER -->
          <div class="grid1 box-padrao">
                           
                <a href="http://twitter.com/tvcultura" class="twitter-follow-button" target="_blank">Siga @tvcultura</a>
                 
                  <div id="twitter"></div>
                  <hr />
            </div>
            <!-- /BOX TWITTER -->
              
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
        
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->