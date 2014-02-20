<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<script type="text/javascript">
  var ts = null;
  var te = null;

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
    //start streaming
    //timerStart();
  });
  
  function checkStreamingStart(){
    var request = $.ajax({
      dataType: 'jsonp',
      success: function(data) {
        eval(data.data);
      },
      url: 'http://app.cmais.com.br/ajax/streaming'
    });
  }

  function checkStreamingEnd(){
    var request = $.ajax({
      dataType: 'jsonp',
      success: function(data) {
        eval(data.data);
      },
      url: 'http://app.cmais.com.br/ajax/streamingend'
    });
  }
  
  $(window).load(function(){
    checkStreamingStart();
    te=setInterval("checkStreamingEnd()",60000);
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
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        <div class="navegacao txt-10">
          <a href="http://cmais.com.br" title="Home">Home</a>
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
              
              <div id="livestream2" style="display: none;"><p>Seu browser não suporta Flash.</p></div>

              <!-- lista calendario -->
              <?php include_partial_from_folder('blocks','global/display-2c-broadcast2', array('live_id' => $schedules[0]->id)) ?>
              <!-- /lista calendario -->

              <!--?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?-->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <!-- BOX TWITTER #TAG -->
              <!--
              <div class="box-padrao twitter-aovivo grid1">

              <ul class="abas-menu abas">
                <li class="twitter ativo"><a href="#" title="Twitter">twitter</a><span class="decoracao"></span></li>
              </ul>
              <?php include_partial_from_folder('blocks','global/twitter-1c-search') ?>
              </div>
              -->
              <!-- /BOX TWITTER #TAG -->
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-aovivo-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->

            </div>
            <!-- /DIREITA -->

          </div>
          <!-- /CAPA -->

          <!-- MENU-RODAPE -->
          <?php if(isset($displays["videos-recentes"])) include_partial_from_folder('blocks','global/display-3c-last-videos', array('displays' => $displays["videos-recentes"])) ?>
          <!-- /MENU-RODAPE -->
          
          <!-- publicidade -->
          <div class="box-publicidade pub-grd grid3">
            <!-- cmais-aovivo-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- /publicidade -->

        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->

