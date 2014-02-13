<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

    <!-- scripts -->                    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
    
<script type="text/javascript">
  //TIMER TRANSMISSAO
  /*
  function timer1(){
    var request = $.ajax({
      data: {
        asset_id: '52646',
        url_out: 'http://tvcultura.cmais.com.br/jornaldacultura'
      },
      dataType: 'jsonp', 
      success: function(data) {
        eval(data);
      },
      url: 'http://app.cmais.com.br/ajax/timer'
    });
  }
  $(window).load(function(){
    timer1();
    var t=setInterval("timer1()",60000);
  });
  */
 
 var test = getParameterByName('test');

  function broadcastEnd(){
    var request = $.ajax({
      data: {
        channel_id: <?php echo $site->Program->Channel->id ?>,
        program_id: <?php echo $site->Program->id ?>,
        url_out: '<?php echo $site->retriveUrl() ?>',
        test: test
      },
      dataType: 'jsonp',
      success: function(data) {
        //eval(data);
      },
      url: 'http://app.cmais.com.br/ajax/broadcastend'
    });
  }
  
  jQuery(document).ready(function() {
    broadcastEnd();
    var t2=setInterval("broadcastEnd()", 60000);
  });   
  

</script>
    
    <!-- scripts -->
    <style>
    @import "/portal/css/tvcultura/geral.css";
    #direita {
        margin-top: 10px;
    }
    #esquerda .stream {
        float: left;
        margin-top: 5px;
    }
    #esquerda .stream a {
        background: none repeat scroll 0 0 #FF6633;
        clear: none;
        color: #FFFFFF;
        float: left;
        margin-right: 5px;
        padding: 0 3px;
        width: auto;
    }
    #esquerda .stream a.ativo, #esquerda .stream a:hover {
        background: none repeat scroll 0 0 #333333;
        text-decoration: none;
    }
    </style>    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
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

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="../" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>
          
          <h3 class="tit-pagina grid3"><?php echo $section->getTitle() ?></h3>

        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">

            <div id="esquerda" class="grid2">
              
              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">

                
                <!--<div style="position: absolute; top: 323px; left: 46px; color: black;"><a href="http://twitter.com/jornal_cultura" target="_blank" style="color: black;">@jornal_cultura</a></div>
                <div style="position: absolute; top: 324px; left: 45px; color: white;"><a href="http://twitter.com/jornal_cultura" target="_blank" style="color: white;">@jornal_cultura</a></div>

                <div style="position: absolute; top: 253px; right: 334px; color: black;">AO VIVO</div>
                <div style="position: absolute; top: 254px; right: 335px; color: white;">AO VIVO</div>
                <div style="position: absolute; top: 270px; right: 330px;"><img style="" src="http://midia.cmais.com.br/programs/f37ca62623a12e323f1b20b5d7c26ba0a6fbba84.png"></div>-->
               
                <iframe width="640" height="364" src="http://www.youtube.com/embed/<?php echo $displays["yt-live"][0]->getTitle() ?>" frameborder="0" allowfullscreen></iframe>
                <?php /*
                <div id="live"></div>
                <script>
                //self.location.href='http://cmais.com.br/aovivo';
                jQuery(document).ready(function(){
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
                });
                </script>
                */ ?>

                <p><?php echo $section->getDescription() ?></p>

              </div>
              <!-- /NOTICIA INTERNA -->

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            
            <div id="direita" class="grid1" style="margin-top:0; text-align: left;">

              <!--iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=d41fb385ab/height=490/width=310" scrolling="no" height="490px" width="310px" frameBorder ="0" allowTransparency="true"  ><a href="http://www.coveritlive.com/mobile.php/option=com_mobile/task=viewaltcast/altcast_code=d41fb385ab" >Pronto Atendimento - Previdência</a></iframe-->

              <!--a href="http://cmais.com.br/segundatela" target="_blank" style="margin-bottom: 10px;"><b>Clique aqui para acessar o aplicativo de segunda tela do Jornal da Cultura e receba informações complementares em tempo real.</b></a><br /><br /-->

              <?php /*if(isset($displays["segunda-tela"])): ?>
                <?php if(count($displays["segunda-tela"]) > 0): ?>
                  <?php if($displays["segunda-tela"][0]->Asset->AssetType->getSlug() == "image"): ?>
                  <a href="<?php echo $displays["segunda-tela"][0]->getUrl() ?>" title="<?php echo $displays["segunda-tela"][0]->getTitle() ?>" target="_blank" style="display:block; margin-bottom:10px"><img src="<?php echo $displays["segunda-tela"][0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["segunda-tela"][0]->getTitle() ?>" /></a>
                  <?php endif; ?> 
                <?php endif; ?>
              <?php endif; */ ?>
              
              <!--a class="twitter-timeline" href="https://twitter.com/jornal_cultura" data-widget-id="311256597148073986">Tweets de @jornal_cultura</a-->
              <a class="twitter-timeline" href="https://twitter.com/jornal_cultura" data-widget-id="316640392126808065">Tweets de @jornal_cultura</a>
              <script>
                ! function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if(!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                  }
                }(document, "script", "twitter-wjs");
              </script>
              
              <?php /*
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-homepage-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>                                        
              <!-- / BOX PUBLICIDADE -->
               */ ?>
            </div>

          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
