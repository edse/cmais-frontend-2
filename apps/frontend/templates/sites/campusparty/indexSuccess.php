<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

    <!-- scripts -->                    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
    
	<script type="text/javascript">
  //TIMER TRANSMISSAO
  function timer1(){
    var request = $.ajax({
      data: {
        asset_id: '52819',
        url_in: 'http://tvcultura.cmais.com.br/jornaldacultura/ao-vivo'
      },
      dataType: 'jsonp', 
      success: function(data) {
        if(data != ''){
          $('#live').html('<object width="640" height="390"><param name="movie" value="https://s3.amazonaws.com/campuschannel/playercampus_es.swf" /><param name="allowFullScreen" value="true" /><param name="allowscriptaccess" value="always" /><embed src="https://s3.amazonaws.com/campuschannel/playercampus_es.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="360"></embed></object>');
        }
      },
      url: 'http://app.cmais.com.br/ajax/timer'
    });
  }
  $(window).load(function(){
    timer1();
    var t=setInterval("timer1()",60000);
  });
</script>

    
<script>
  // Update Twitter Statuses
  function updateTweets(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/tweetmonitor",
      data: "monitor_id=6",
      success: function(data) {
        $('#twitter').html(data);
      }
    });
  }
  
  $(function(){ //onready
    updateTweets();
    var t=setInterval("updateTweets()",60000);
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
          <?php if(isset($site) && $site->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="<?php echo $site->getTitle() ?>" title="<?php echo $site->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?> 

          <?php if(isset($site) && $site->id > 0): ?>
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
				<?php /*
                <div style="position: absolute; top: 323px; left: 46px; color: black;"><a href="http://twitter.com/jornal_cultura" target="_blank" style="color: black;">@jornal_cultura</a></div>
                <div style="position: absolute; top: 324px; left: 45px; color: white;"><a href="http://twitter.com/jornal_cultura" target="_blank" style="color: white;">@jornal_cultura</a></div>

                <div style="position: absolute; top: 253px; right: 334px; color: black;">AO VIVO</div>
                <div style="position: absolute; top: 254px; right: 335px; color: white;">AO VIVO</div>
                <div style="position: absolute; top: 270px; right: 330px;"><img style="" src="http://midia.cmais.com.br/programs/f37ca62623a12e323f1b20b5d7c26ba0a6fbba84.png"></div>
				*/ ?>
                <div id="live">
                	<?php include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["videos"])) ?>
                </div>
                <script>
                //self.location.href='http://cmais.com.br/aovivo';
                /*
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
                */
                </script>

                <p><?php echo $section->getDescription() ?></p>

              </div>
              <!-- /NOTICIA INTERNA -->

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            
            <div id="direita" class="grid1" style="margin-top:0;">

              <!-- BOX TWITTER -->
                <div class="grid1">
                  <a href="http://twitter.com/cpbr5" class="twitter-follow-button" target="_blank">Acompanhe #cpbr5</a>
                  <style>
                    #twitter {border:1px solid #666}
                    #twitter .topo-fb { background-color:#666; overflow:hidden; padding:10px;}
                    #twitter .avatar { margin-right:10px; float:left; }
                    #twitter .topo-fb img { width:31px; }
                    #twitter .topo-fb h3 {font-size:11px; color:#fff;}
                    #twitter .topo-fb h4 a {font-size:14px; color:#fff; font-weith:bold;}
                    #twitter ul {background:#fff; height:360px; overflow:hidden;}
                    #twitter ul img {width:30px;}
                    #twitter ul li {border-bottom:1px dotted #ddd; padding-top:5px;}
                    #twitter ul .avatar {margin: 10px;}
                    #twitter ul li a { color:#ff6633;}
                    #twitter ul li a,
                    #twitter ul li p {font-size:12px; line-height:16px; margin-bottom:5px;}
                    #twitter ul li p {margin-left:50px; padding-right:10px;}
                    #twitter ul li:last-child {border:none; margin-bottom:10px;}
                    #twitter .respiro {background:#ffffff; height:20px;}
                  </style>
                  <div id="twitter"></div>
                  
                </div>
              <!-- /BOX TWITTER -->              

              <?php if(isset($displays["publicidade-300x250"])) include_partial_from_folder('blocks','global/banner-300x250', array('displays' => $displays["publicidade-300x250"])) ?>

            </div>

          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
