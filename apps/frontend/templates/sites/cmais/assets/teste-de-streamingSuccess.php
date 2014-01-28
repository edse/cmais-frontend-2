<link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/controle-remoto/css/controleremoto.css">
<link href="http://cmais.com.br/portal/controle-remoto/css/jPlayer.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/controle-remoto/css/jplayer.blue.monday.css" type="text/css" media="all" />
<script src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js" type="text/javascript"></script>
<style>
  body{
    background-image: none;
  }
  .f{
    float: left;
    width: 440px;
    margin: 15px;
  }
  .f2{
    width: 440px;
  }
</style>

<!--<h3 class="f">TV Cultura</h3>-->
<div class="f" id="livestream1"><video controls="controls" height="294" src="http://200.136.27.12/hls-live/livepkgr/_definst_/liveevent/tvcultura2.m3u8" width="440"></video></div>

<!--<h3 class="f">UnivespTV</h3>-->
<div class="f" id="livestream2">&nbsp;</div>

<!--<h3 class="f">Rádio Cultura Brasil</h3>-->
<div class="f" id="livestream3">&nbsp;</div>

<script>
var so = new SWFObject("http://cmais.com.br/portal/js/mediaplayer/player.swf","cam1","440","294","9");
so.addParam("allowscriptaccess","always");
so.addParam("allowfullscreen","true");
so.addParam("wmode","transparent");
so.addVariable("volume", "75");
so.addVariable("controlbar", "over");
so.addVariable("autostart", "true");
so.addVariable("streamer", "rtmp://200.136.27.12/livepkgr");
so.addVariable("file", "tvcultura2?adbe-live-event=liveevent");
so.addVariable("type", "video");
so.write("livestream1");

var so = new SWFObject("http://cmais.com.br/portal/js/mediaplayer/player.swf","cam1","440","294","9");
so.addParam("allowscriptaccess","always");
so.addParam("allowfullscreen","true");
so.addParam("wmode","transparent");
so.addVariable("volume", "75");
so.addVariable("controlbar", "over");
so.addVariable("autostart", "true");
so.addVariable("streamer", "rtmp://200.136.27.12/live");
so.addVariable("file", "univesptv");
so.addVariable("type", "video");
so.write("livestream2");

var so = new SWFObject("http://cmais.com.br/portal/js/mediaplayer/player.swf","cam1","440","294","9");
so.addParam("allowscriptaccess","always");
so.addParam("allowfullscreen","true");
so.addParam("wmode","transparent");
so.addVariable("volume", "75");
so.addVariable("controlbar", "over");
so.addVariable("autostart", "true");
so.addVariable("streamer", "rtmp://200.136.27.12/live");
so.addVariable("file", "galeria");
so.addVariable("type", "video");
so.write("livestream3");
</script>



<!--<h3>Rádio Cultura Brasil</h3>-->
<div class="f" id="div_player">            
  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <div id="jp_container_1" class="jp-audio">
      <div class="jp-type-single">
        <div class="jp-gui jp-interface">
          <ul class="jp-controls">
            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
            <li><a href="javascript:;" id="btn-brasil" class="pl" title="Cultura Brasil" >Cultura Brasil</a></li>
            <li><a href="javascript:;" class="jp-pause" tabindex="1" title="Pause">pause</a></li>
            <!--li><a href="javascript:;" class="jp-stop" tabindex="1" title="Stop">stop</a></li-->
            <div class="jp-volume_controls">
              <li><a href="javascript:;" class="jp-mute" tabindex="1" title="Mute">mute</a></li>
              <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="">unmute</a></li>
              <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="Volume Máximo">max volume</a></li>
            </div>
          </ul>
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-volume-bar">
            <div class="jp-volume-bar-value"></div>
          </div>
          <div class="jp-time-holder">
            <div class="jp-current-time"></div>
          </div>
        </div>
      </div>
   </div>  
</div>


<!--<h3>Rádio Cultura FM</h3>-->
<div class="f" id="div_player2">            
  <div id="jquery_jplayer_2" class="jp-jplayer"></div>
    <div id="jp_container_2" class="jp-audio">
      <div class="jp-type-single">
        <div class="jp-gui jp-interface">
          <ul class="jp-controls">
            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
            <li><a href="javascript:;" id="btn-brasil" class="pl" title="Cultura Brasil" >Cultura Brasil</a></li>
            <li><a href="javascript:;" class="jp-pause" tabindex="1" title="Pause">pause</a></li>
            <!--li><a href="javascript:;" class="jp-stop" tabindex="1" title="Stop">stop</a></li-->
            <div class="jp-volume_controls">
              <li><a href="javascript:;" class="jp-mute" tabindex="1" title="Mute">mute</a></li>
              <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="">unmute</a></li>
              <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="Volume Máximo">max volume</a></li>
            </div>
          </ul>
          <div class="jp-progress">
            <div class="jp-seek-bar">
              <div class="jp-play-bar"></div>
            </div>
          </div>
          <div class="jp-volume-bar">
            <div class="jp-volume-bar-value"></div>
          </div>
          <div class="jp-time-holder">
            <div class="jp-current-time"></div>
          </div>
        </div>
      </div>
   </div>  
</div>
   
      <script src="http://cmais.com.br/portal/controle-remoto/js/jquery.min.js" type="text/javascript"></script>
      <script src="http://cmais.com.br/portal/controle-remoto/js/main.js" type="text/javascript"></script>
      
      <script src="http://cmais.com.br/portal/controle-remoto/js/jquery.min-1.8.js" type="text/javascript"></script>
      <script src="http://cmais.com.br/portal/controle-remoto/js/jquery.jplayer.js" type="text/javascript"></script>
      
      <script src="http://cmais.com.br/portal/controle-remoto/js/flash_detect.js" type="text/javascript"></script>
            
      <script type="text/javascript" src="http://cmais.com.br/portal/controle-remoto/js/jquery.jplayer.inspector.js"></script>
      <script type="text/javascript" src="http://cmais.com.br/portal/controle-remoto/flowplayer/flowplayer-3.2.12.min.js"></script>
      <script type="text/javascript">
      //<![CDATA[
       $(document).ready(function(){
        $("#rodape-portal").hide();
        function supportsAudio() {
            //return !!document.createElement('audio').canPlayType;
            var a = document.createElement('audio');
            return !!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''));
        }

        if(FlashDetect.installed && FlashDetect.major >= 10){
          $(".cr-player").css("padding","15px 20px");
          $("#div_player").html('<div id="audio" style="display:block;width:100%;height:25px;background-color:#000000;"> </div>');
          $("#div_player2").html('<div id="audio2" style="display:block;width:100%;height:25px;background-color:#000000;"> </div>');

          //AM
          $f("audio", 
            {
              src: "/portal/controle-remoto/flowplayer/flowplayer-3.2.16.swf", 
              title: "Rádio Cultura Brasil",
              bgcolor: "#000000"
            },
            {
               plugins:
               {
                  rtmp: {
                    url: "/portal/controle-remoto/flowplayer/flowplayer.rtmp-3.2.12.swf",
                    netConnectionUrl: "rtmp://200.136.27.12/live",
                    failOverDelay: 4000
                  },
                  
                  controls: {
                    scrubber: true,
                    fullscreen: false,
                    autoHide: false,
                    height: 25,
                    timeFontSize: 15,
                    backgroundColor: "#000000",
                    backgroundGradient: [0.3, 0]
                  }
                },
            clip: {
              url: "radioam",
              provider: "rtmp",
              live: true
            }
          });

          //FM
          $f("audio2", 
            {
              src: "/portal/controle-remoto/flowplayer/flowplayer-3.2.16.swf", 
              title: "Rádio Cultura FM",
              bgcolor: "#000000"
            },
            {
               plugins:
               {
                  rtmp: {
                    url: "/portal/controle-remoto/flowplayer/flowplayer.rtmp-3.2.12.swf",
                    netConnectionUrl: "rtmp://200.136.27.12/live",
                    failOverDelay: 4000
                  },
                  
                  controls: {
                    scrubber: true,
                    fullscreen: false,
                    autoHide: false,
                    height: 25,
                    timeFontSize: 15,
                    backgroundColor: "#000000",
                    backgroundGradient: [0.3, 0]
                  }
                },
            clip: {
              url: "radiofm",
              provider: "rtmp",
              live: true
            }
          });
        }else{

          if(window.screen.width <= 1024){
            $(".jp-volume_controls").hide();
            $(".jp-volume-bar").hide();
          }
        
          if(supportsAudio() == true) {
            //AM
            $("#jquery_jplayer_1").jPlayer({
              ready: function () {
                $(this).jPlayer("setMedia", {
                  mp3: "http://midiaserver.tvcultura.com.br:8001/;stream/1"
                }).jPlayer("play");
              },
              swfPath: "/portal/controle-remoto/swf",
              supplied: "mp3",
              solution: 'html',
              cssSelectorAncestor: "#jp_container_1",
              wmode: "window"
            });
            //FM
            $("#jquery_jplayer_2").jPlayer({
              ready: function () {
                $(this).jPlayer("setMedia", {
                  mp3: "http://midiaserver.tvcultura.com.br:8003/;stream/1"
                }).jPlayer("play");
              },
              swfPath: "/portal/controle-remoto/swf",
              supplied: "mp3",
              solution: 'html',
              cssSelectorAncestor: "#jp_container_2",
              wmode: "window"
            });

          }else{
            //NAO SUPORTA FLASH E HTML5
            $("#div_player").html('Não foi possível carregar o Player do Audio pois o seu navegador não suporta HTML5 e o plugin do Adobe Flash também não está instalado/atualizado. <a href="http://get.adobe.com/br/flashplayer/" target="_blank">Clique aqui</a> para instalar/atualizar plugin do Adobe Flash.');
            $("#div_player2").html('Não foi possível carregar o Player do Audio pois o seu navegador não suporta HTML5 e o plugin do Adobe Flash também não está instalado/atualizado. <a href="http://get.adobe.com/br/flashplayer/" target="_blank">Clique aqui</a> para instalar/atualizar plugin do Adobe Flash.');
            $(".cr-header-pgm").hide();
          }
        }

      });

      //]]>
      </script>
