<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<script>
function stream1() {
  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
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
  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
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

function broadcastEnd(){
  var request = $.ajax({
    data: {
      channel_id: <?php echo $site->Program->Channel->id ?>,
      program_id: <?php echo $site->Program->id ?>,
      url_out: '<?php echo $site->retriveUrl() ?>'
    },
    dataType: 'jsonp',
    success: function(data) {
      eval(data.data);
    },
    url: 'http://app.cmais.com.br/ajax/broadcastend'
  });
}

$(function(){
  /*
  var request = $.ajax({
    success: function(data) {
      if(data == "true")
        $('#liveholder').html('<p>Este conteúdo não está liberado para a sua região.</p>')
      else
      stream1();
    },
    url: '/doctorwho/check_streaming.php'
  });
  */
  stream1();
  
  broadcastEnd();
  var t2=setInterval("broadcastEnd()", 60000);
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
            <?php include_partial_from_folder('blocks','global/share-2c-close', array('site' => $site, 'uri' => $uri)) ?>

              <style type="text/css">
                #esquerda .box-compartilhar .comentar { text-indent:-9999px; }
                #esquerda .box-compartilhar .comentar span {display:none;}  
                #esquerda .btn-compartilhar {float:left;}
              </style>
              
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

    
