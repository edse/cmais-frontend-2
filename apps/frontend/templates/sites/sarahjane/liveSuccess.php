<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<script>
function stream1() {
  var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','640','364','9');
  so.addVariable('controlbar', 'bottom');
  so.addVariable('autostart', 'true');
  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
  so.addVariable('file', 'tv');
  so.addVariable('type', 'video');
  so.addParam('allowscriptaccess','always');
  so.addParam('allowfullscreen','true');
  so.addParam('wmode','transparent');
  so.write('live');
}

function stream2() {
  var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','640','364','9');
  so.addVariable('controlbar', 'bottom');
  so.addVariable('autostart', 'true');
  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
  so.addVariable('file', 'eventual');
  so.addVariable('type', 'video');
  so.addParam('allowscriptaccess','always');
  so.addParam('allowfullscreen','true');
  so.addParam('wmode','transparent');
  so.write('live');
}
$(function(){
  var request = $.ajax({
    success: function(data) {
      if(data == "true")
        $('#liveholder').html('<p>Este conteúdo não está liberado para a sua região.</p>')
      else
      stream1();
    },
    url: '/doctorwho/check_streaming.php'
  });
});

      
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">

  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

     
</div>
<div class="bg-site">
</div>

    
        <!-- CAPA SITE -->
    <div id="capa-site">      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        <ul class="abas-menu abas">
            <li class="neutro">
              <p>Assista</p>
              <span></span>
            </li>
            <li class="ativo dublado" id="stream1">
              <a href="javascript: stream1();" onclick="$('#stream1').addClass('ativo'); $('#stream2').removeClass('ativo');" title="Versão Dublada" >Versão Dublada</a>
              <span class="decoracao"></span>
            </li>
            <li class="original" id="stream2">
              <a href="javascript: stream2();" onclick="$('#stream2').addClass('ativo'); $('#stream1').removeClass('ativo');" title="Áudio original">Áudio original</a>
              <span class="decoracao"></span>
            </li>
          </ul>
          <!-- scripts -->
          <script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
          <!-- scripts -->
         
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              
              
             <!-- NOTICIA INTERNA -->
            <div class="box-interna grid2">
              <div id="liveholder">
                <div id="live"></div>
              </div>

              <a href="#" class="titulos">Sarah Jane na TV Cultura</a>
              <p>Acompanhe as histórias da jornalista investigativa e ex-companheira do Doutor (de Doctor Who) em suas aventuras para defender a Terra de ameaças alienígenas, sempre com a ajuda do robô K-9 e de uma galerinha muito esperta. Ah, e também dá pra assistir à série com o áudio em inglês: basta clicar em “Áudio original”, acima do vídeo!</p>
            </div>
            <!-- /NOTICIA INTERNA -->
            <div class="box-compartilhar grid2">
              <div style="width: auto;" class="btn-compartilhar">
                <p class="compartilhar">Compartilhar</p>
                <div style="display:block; width:545px;" class="face">
                  <div style="display:block; float: left; margin-right:10px;">
                    <div style="height: 20px; width: 32px; display: inline-block; text-indent: 0pt; margin: 0pt; padding: 0pt; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline;" id="___plusone_0">
                      <iframe width="100%" scrolling="no" frameborder="0" allowtransparency="true" hspace="0" id="I1_1328286265338" marginheight="0" marginwidth="0" name="I1_1328286265338" src="https://plusone.google.com/_/+1/fastbutton?url=http%3A%2F%2Ftvcultura.cmais.com.br%2Frodaviva&amp;size=medium&amp;count=false&amp;annotation=&amp;hl=pt-BR&amp;jsh=m%3B%2F_%2Fapps-static%2F_%2Fjs%2Fgapi%2F__features__%2Frt%3Dj%2Fver%3DO8v2EQ8nyPM.en.%2Fsv%3D1%2Fam%3D!uXA1SJUHioGIFdxJYA%2Fd%3D1%2F#id=I1_1328286265338&amp;parent=http%3A%2F%2Ftvcultura.cmais.com.br&amp;rpctoken=425021818&amp;_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart" style="position: static; left: 0pt; top: 0pt; width: 32px; margin: 0px; border-style: none; height: 20px; visibility: visible;" tabindex="-1" vspace="0" title="+1">
                      </iframe>
                    </div>
                  </div>
                  <fb:like show_faces="true" width="75" layout="button_count" send="false" href="https://www.facebook.com/pages/Dr-Who/341430049210852" class=" fb_edge_widget_with_comment fb_iframe_widget">
                    
                  </fb:like>
                  <iframe scrolling="no" frameborder="0" title="Twitter Tweet Button" style="width: 110px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="http://platform.twitter.com/widgets/tweet_button.1326407570.html#_=1328286265242&amp;_version=2&amp;count=horizontal&amp;enableNewSizing=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Ftvcultura.cmais.com.br%2Frodaviva&amp;size=m&amp;text=Roda%20Viva%20-%20cmais%2B%20O%20portal%20de%20conte%C3%BAdo%20da%20Cultura&amp;url=http%3A%2F%2Ftvcultura.cmais.com.br%2Frodaviva&amp;via=rodaviva" allowtransparency="true">
                  </iframe>
                </div>
              </div>
            </div>
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
             

            
              
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'uri' => $uri)) ?>
              
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
          <?php if (isset($displays["rodape-interno"])): ?>
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          <?php endif; ?>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->

    
