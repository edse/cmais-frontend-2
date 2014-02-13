<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script> 
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
      
<script>
/*
 *old twitter monitor
// Update Twitter Statuses
function updateTweets(){
  $.ajax({
    url: "http://app.cmais.com.br/ajax/tweetmonitor",
    data: "monitor_id=5",
    success: function(data) {
      $('#twitter').html(data);
    }
  });
}


$(function(){ //onready
  updateTweets();
  var t=setInterval("updateTweets()",60000);
});
*/
</script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          <!--
          <h2><img src="http://cmais.com.br/portal/images/capaPrograma/teleton/logo.png" /></h2>-->
            <a href="http://teleton.org.br/welcome.html" title="Teleton" target="_blank" class="numeros"></a>          
          </div>     
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                <h3><?php echo $displays['destaque-principal'][0]->getTitle() ?></h3>
                <div class="assinatura grid2">
                  <p class="sup"></p>
                  <div class="box-compartilhar cp-sembg grid2">                  
            <div class="btn-compartilhar">
              <p class="compartilhar">Compartilhar</p>
              <!--a class="print" href="JavaScript:window.print();"></a-->      
              <a class="twt" href="http://twitter.com/TeletonOficial" target="_blank"></a>
              <a class="fb" href="https://www.facebook.com/tvcultura" target="_blank"></a>
              <div class="gplus">
              <!-- Place this tag where you want the +1 button to render. -->
              <div class="g-plusone" data-size="small" ></div>
              
             
              </div>
            </div>        
          </div>
                </div>
                
                <div class="texto">
               
            <?php if(isset($displays['destaque-principal'])): ?>
              <!-- DESTAQUE 2 COLUNAS -->
              <div class="duas-colunas destaque grid2">
                <?php echo html_entity_decode($displays['destaque-principal'][0]->Asset->AssetContent->render()) ?> 
                <!--<iframe width="640" height="360" src="http://www.youtube.com/embed/9hgSRNhKPlY?rel=0&wmode=transparent#t=0m0s?version=3&amp;hl=en_US&amp;fs=1" frameborder="0" allowfullscreen></iframe>-->
                <!--iframe width="640" height="360" src="http://www.youtube.com/embed/VVO6Mu6sFvQ?rel=0&wmode=transparent#t=0m0s?version=3&amp;hl=en_US&amp;fs=1" frameborder="0" allowfullscreen></iframe-->
                <?php if($displays['destaque-principal'][0]->Asset->AssetType->getSlug() == "video"): ?>
                    <iframe title="<?php echo $displays['destaque-principal'][0]->getTitle() ?>" width="640" height="384" src="http://www.youtube.com/embed/<?php echo $displays['destaque-principal'][0]->Asset->AssetVideo->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>    
                <!--p class="titulos" style="margin-bottom:0px"><?php echo $displays['destaque-principal'][0]->getTitle() ?></p-->
                <!--p><?php echo $displays['destaque-principal'][0]->getDescription() ?></p-->
              </div>
              <!-- /DESTAQUE 2 COLUNAS -->
          <?php endif; ?>
          
          
                </div>
                
                <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>

              </div>
              <!-- /NOTICIA INTERNA -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!--h3>Bastidores</h3--> 
                <?php
                /*
                <div id="canal" class="grid1">
                  <!-- BOX CANAL YOUTUBE -->
                  <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=culturanoteleton&synd=open&w=300&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>
                  <!-- /BOX CANAL YOUTUBE -->
                </div>
                 */
                ?>  
                <!-- BOX TWITTER -->
                <div class="grid1">
                  <?php
                  /*
                   * old twitter monitor
                  <a href="http://twitter.com/teletonoficial" class="twitter-follow-button" target="_blank">Siga @teletonoficial</a>
                  <div id="twitter"></div>
                  */
                  ?>
                  <a class="twitter-timeline" href="https://twitter.com/search?q=%23TeletonBrasil2013+%23FamiliaTeleton" data-widget-id="393407348665880576">Tweets about "#TeletonBrasil2013 #FamiliaTeleton"</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
              <!-- /BOX TWITTER -->              
            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- /CAPA SITE -->
     <!-- Place this tag after the last +1 button tag. -->
              <script type="text/javascript">
                window.___gcfg = {lang: 'pt-BR'};
              
                (function() {
                  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                  po.src = 'https://apis.google.com/js/plusone.js';
                  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
              </script>

