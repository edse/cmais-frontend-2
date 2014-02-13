<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>

    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />

    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>

    <script type="text/javascript" src="http://cmais.com.br/portal/js/jPlayer/js/jquery.jplayer.min.js"></script>

    <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
        wrap: "both"      
      });
    });
    /*
    //relógio   
    var timeID=null;
    var timerRunning=false;
    function stopclock(){
      if(timerRunning)
        clearTimeout(timerID);
      timerRunning=false;
    }
    function startclock(){
      stopclock();
      showtime();
    }
    function showtime() {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var timeValue = "" + hours;
      timeValue += ((minutes<10) ? ":0" : ":") + minutes;
    
      document.clock.face.value= timeValue;
      timerID = setTimeout("showtime()",1000);
      timerRunning = true;
    }
    */
     $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function() {
          $(this).jPlayer("setMedia", {
            mp3: "http://200.136.27.181/uploads/assets/audio/default/<?php echo $displays['destaque-audio'][0]->Asset->AssetAudio->getFile() ?>.mp3"
          }).jPlayer("pause");
        },
        ended: function(event) {
          $(this).jPlayer("play");
        },
        swfPath: "http://cmais.com.br/portal/js/jPlayer/js",
        supplied: "mp3"
      });
      //startclock();
    });

   </script>
  </head>
  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']);
   
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script> 
  <body>

  <div class="allWrapper">

  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <div class="contentWrapper" align="center">

      <div class="content">
        
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>          
        <hr />

        <div class="conteudo">

          <p class="breadcrumb"><a href="/">cmais</a> &gt;&gt; Quintal da Cultura</p>

          <div class="conteudoWrapper">

            <div class="videoWrapper">
            <?php if(isset($displays['destaque-principal'])): ?>
              <?php if(count($displays['destaque-principal']) > 0): ?>
              <object style="height:390px; width: 640px">
                <param name="movie" value="http://www.youtube.com/v/<?php echo $displays['destaque-principal'][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                <param name="allowFullScreen" value="true">
                <param name="allowScriptAccess" value="always">
                <param name="wmode" value="opaque">
                <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $displays['destaque-principal'][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
              </object>
              <?php endif; ?>
            <?php endif; ?>
            </div>
                           
			<div class="destaque carta">
              <a href="http://cmais.com.br/quintaldacultura/como-escrever-uma-cartinha-para-a-turma-do-quintal">
                <h3>Quintal da Cultura</h3>
              	<p>caixa postal: 11544 <br /> cep: 05036-900 <br /> são paulo - sp</p>
              </a>
         </div>
         <!--teste -->
             
            <!--div class="destaque-home carnaval">
              <a href="http://cmais.com.br/quintaldacultura/mascaras-de-carnaval">Carnaval</a>
            </div-->  
              
            <!--div class="album">
              	<a href="http://cmais.com.br/quintaldacultura/participe">Redação</a>
             </div-->  
            
			<!--
            <div class="radioCarro">
              <span class="farolEsq"></span>
              <span class="farolDir"></span>
              <div class="relogio">
                <form name="clock" onsubmit="0">
                    <input class="hora" type="button" value="" name="face" />
                </form>
              </div>
              
              <div class="radioControl">
                <div id="container" class="playlist">
                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                  <div class="jp-audio">
                    <div class="jp-type-playlist">
                      <div id="jp_interface_1" class="jp-interface">
                        <ul class="jp-controls">
                          <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                          <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                          <li><a href="#" class="jp-previous" tabindex="1">previous</a></li>
                          <li><a href="#" class="jp-next" tabindex="1">next</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="placa" comentar>
                  <p>
                    <script type="text/javascript">

                      var currentTime = new Date()
                      var month = currentTime.getMonth() + 1
                      var day = currentTime.getDate()
                      var year = currentTime.getFullYear()
                      document.write(day + "- " + month + "- " + year)
                      
                    </script>
                  </p>
                </div>
                <hr />
              </div>
				
            </div>
           -->
          </div>

          <div class="allpages">
            <div class="carrossel">
              <ul>
              <?php if(isset($displays['destaque-carrocel'])): ?>
                <?php if(count($displays['destaque-carrocel']) > 0): ?>
                  <?php foreach($displays['destaque-carrocel'] as $k=>$d): ?>
                    <li>
                      <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
                      <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 200px;" />
                      <?php endif; ?><span class="bottom"><span class="text2">brincar</span></span></a>
                    </li>
                  <?php endforeach; ?>
                <?php endif; ?>
              <?php endif; ?>
              </ul>
            </div>
            <hr />

            <div class="boxDestaque">
              <div class="destaque">
                <span class="minhoca"></span>
                <h2><span class="ico-cross"></span><span class="tit">Clipes</span></h2>
                <div class="boxVideos">
                  <div class="videoThumbs">
                    <ul>
                    <?php if(isset($displays['destaque-clipes'])): ?>
                      <?php if(count($displays['destaque-clipes']) > 0): ?>
                        <?php foreach($displays['destaque-clipes'] as $k=>$d): ?>
                          <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                            <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    <?php endif; ?>
                    </ul>
                  </div>
                  
                  <div class="videoBig">
                  <?php if(isset($displays['destaque-clipes'][0])): ?>
                    <object style="height:186px; width: 310px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $displays['destaque-clipes'][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $displays['destaque-clipes'][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="310" height="186"></embed>
                    </object>
                  <?php endif; ?>
                  </div>

                </div>
              </div>

              <?php if(isset($displays['destaque-curiosidade'][0])): ?>
              <div class="curiosidades">
                <p><?php echo $displays['destaque-curiosidade'][0]->getDescription() ?></p>
                <h3><?php echo $displays['destaque-curiosidade'][0]->getTitle() ?></h3>
              </div>
              <?php endif; ?>
              <hr />

            </div>

          </div>
            
        </div>
        <hr />

      </div>Clipes

      <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?>

    </div>

    <?php include_partial_from_folder('blocks', 'global/footer') ?>

  </div>
  <div id="miolo"></div>
  <div class="box-lateral"></div>
</body>
</html>