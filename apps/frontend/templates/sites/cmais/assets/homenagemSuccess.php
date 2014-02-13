<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>    
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- barra site --> 
      <div id="barra-site">

      <!-- box-topo -->
      <div class="box-topo grid3">

        <h3 class="tit-pagina"><?php echo $asset->getTitle() ?></h3>

        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        
      </div>
      <!-- /box-topo -->
      
      </div>
      <!-- /barra site -->

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
              <div id="live"><p>Seu browser não suporta Flash.</p></div>
                <script>
                jQuery(document).ready(function(){                 
                  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
                  so.addVariable('controlbar', 'bottom');
                  so.addVariable('autostart', 'true');
                  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                  so.addVariable('file', 'homenagem');
                  so.addVariable('type', 'video');
                  so.addParam('allowscriptaccess','always');
                  so.addParam('allowfullscreen','true');
                  so.addParam('wmode','transparent');
                  so.write('live');
                });
                </script>
                
                <br />
                <p style="text-align: left;"><?php echo $asset->getDescription() ?></p>
                <br />
                <div class="texto" style="text-align: left;">
                  <?php echo html_entity_decode($asset->AssetContent->render()) ?>
                </div>
              
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1" style="margin-top:0">
             
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
              <style>
                .facebook {margin-top:0;}
              </style>

            </div>
            <!-- /DIREITA -->

          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->

