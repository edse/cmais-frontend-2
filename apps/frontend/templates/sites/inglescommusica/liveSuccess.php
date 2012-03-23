<link rel="stylesheet" href="/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<script type="text/javascript" src="/portal/js/mediaplayer/swfobject.js"></script>

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
    //start streaming
    checkStreamingStart();
    //timerStart();
  });
  
  function checkStreamingStart(){
    $.ajax({
      url: "/ajax/streaming",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }

  function checkStreamingEnd(){
    $.ajax({
      url: "/ajax/streamingend",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }

  function timerStart(){
    $.ajax({
      url: "/ajax/timer",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }
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
        
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        
        <h3 class="tit-pagina">Ao vivo</h3>
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
              
              <div id="livestream2"></div>

              <!-- lista calendario -->
              <?php include_partial_from_folder('blocks','global/display-2c-broadcast2', array('live_id' => $schedules[0]->id)) ?>
              <!-- /lista calendario -->

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
              
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
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site)) ?>

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
