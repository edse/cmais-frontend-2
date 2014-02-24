<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script type="text/javascript">
  $(function(){
    //carrossel
    $('.carrossel').jcarousel({
        wrap: "both"
    });
    // comportamento inicial da grade
    $('.btn-toggle:first').parent().addClass('escura');
    $('.btn-toggle:first').parent().next().slideDown(400);
    //hover states on the static widgets
    $('#dialog_link, ul#icons li').hover(
      function() { $(this).addClass('ui-state-hover'); }, 
      function() { $(this).removeClass('ui-state-hover'); }
    );
  });
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- barra site --> 
      <div id="barra-site">

      <!-- box-topo -->
      <div class="box-topo grid3">
        <h3 class="tit-pagina">Ao vivo</h3>
        <div class="navegacao txt-10">
          <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
          <span>&gt;</span>
          <a href="javascript:;" title="Ao vivo">Ao vivo</a>
        </div>
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
              
              <!-- lista calendario -->
              <div id="livestream"></div>
              <script>
                  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
                  so.addVariable('controlbar', 'over');
                  so.addVariable('autostart', 'true');
                  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                  so.addVariable('file', 'tv');
                  so.addVariable('type', 'video');
                  so.addParam('allowscriptaccess','always');
                  so.addParam('allowfullscreen','true');
                  so.addParam('wmode','transparent');
                  so.write("livestream");
              </script>
              <!-- /lista calendario -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <!-- BOX TWITTER #TAG -->
              <div class="box-padrao twitter-aovivo grid1">

              <ul class="abas-menu abas">
                <li class="twitter ativo"><a href="#" title="Twitter">twitter</a><span class="decoracao"></span></li>
              </ul>
              <?php include_partial_from_folder('blocks','global/twitter-1c-search') ?>
              </div>
              <!-- /BOX TWITTER #TAG -->

            </div>
            <!-- /DIREITA -->

          </div>
          <!-- /CAPA -->

          <!-- MENU-RODAPE -->
          <?php if(isset($displays["videos-recentes"])) include_partial_from_folder('blocks','global/display-3c-last-videos', array('displays' => $displays["videos-recentes"])) ?>
          <!-- /MENU-RODAPE -->
          
          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- univesptv-728x90 -->
			<script type='text/javascript'>
			GA_googleFillSlot("univesptv-728x90");
			</script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->

        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->
