<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Rádio Cultura FM - cmais+ O portal de conteúdo da Cultura</title>
    <meta name="title" content="Rádio Cultura FM - cmais+ O portal de conteúdo da Cultura" />
    <meta name="description" content="Portal Rádio Cultura FM - cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    <meta name="language" content="pt_BR" />
    <meta name="robots" content="index, follow" />
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/js/jquery-ui-1.8.7/jquery-1.4.4.min.js"></script>
    <link href="http://cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cmais.com.br/js/audioplayer/jquery.jplayer.min.js"></script>
    <style>
      body {
        text-align: center;
        margin: 0;
        padding: 0;
      }
      #bg {
        background-image: url("http://cmais.com.br/portal/images/capaPrograma/culturafm/bkg-radiofm.jpg");
        width: 320px;
        height: 480px;
        text-align: center;
        border: 1px solid #CCC;
        vertical-align: middle;
        margin: auto;
      }
      #logo {
        padding-top: 35px;
      }
      #logo_img {
        width: 50%;
      }
      #txt {
        font-size: 12px;
        font-weight: bold;
        color: gray;
        margin-top: 2px;
      }
      #btn_img {
        width: 50%;
        margin-top: 55px;
      }
      #ad_img {
        margin-top: 85px;
        border: 1px solid #CCC;
      }
    </style>
    <script>
      $(document).ready(function() {
        $("#jquery_jplayer_1").jPlayer({
          ready : function() {
            $(this).jPlayer("setMedia", {
              mp3 : "http://midiaserver.tvcultura.com.br:8003/;stream/1"
            }).jPlayer("play");
          },
          swfPath : "http://cmais.com.br/js/audioplayer",
          volume : 0.7,
          supplied : "mp3",
          solution : "flash, html"
        });
      });
    </script>
  </head>
  <body>
    <div id="bg">
      <div id="logo">
        <img id="logo_img" src="http://cmais.com.br/portal/images/capaPrograma/culturafm/logo-cultura-fm.png" />
      </div>
      <div id="player">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div class="jp-audio" style="width:310px;">
          <div class="jp-type-playlist">
            <div id="jp_interface_1" class="jp-interface" style="width:170px; height:70px; margin-left:75px; margin-top:40px;">
              <div id="txt">
                OUÇA A RÁDIO
              </div>
              <ul class="jp-controls">
                <li>
                  <a href="#" class="jp-play" tabindex="1" style="left:10px;top:20px;">play</a>
                </li>
                <li>
                  <a href="#" class="jp-pause" tabindex="1" style="left:10px;top:20px;">pause</a>
                </li>
                <li>
                  <a href="#" class="jp-mute" tabindex="1" style="left:80px;top:32px;">mute</a>
                </li>
                <li>
                  <a href="#" class="jp-unmute" tabindex="1" style="left:80px;top:32px;">unmute</a>
                </li>
              </ul>
              <div class="jp-volume-bar" style="left:110px;top:37px;">
                <div class="jp-volume-bar-value"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="botao">
        <a href="http://culturafm.cmais.com.br?w=1" alt="Versão web" title="Versão web"><img id="btn_img" src="http://cmais.com.br/portal/images/capaPrograma/culturafm/btn-versao-web.png" /></a>
      </div>
      <!--
      <div id="ad">
        <a href="http://cmais.com.br" alt="cmais+ o portal de conteúdo da Cultura" title="cmais+ o portal de conteúdo da Cultura"><img id="ad_img" src="http://cmais.com.br/images/banner_iphone2.gif" /></a>
      </div>
      -->
    </div>
  </body>
</html>
