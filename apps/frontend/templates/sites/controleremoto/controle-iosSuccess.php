<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Controle Remoto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--bootstrap-->
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/controleremoto/normalize.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/controleremoto/player.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--/bootstrap-->
    <!--<script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <!-- banner-->
    <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
    <script type='text/javascript'>
      GS_googleAddAdSenseService("ca-pub-6681834746443470");
      GS_googleEnableAllServices();
    </script>
    <script type='text/javascript'>
      GA_googleAddSlot("ca-pub-6681834746443470", "banner-controle-remoto");
    </script>
    <script type='text/javascript'>
      GA_googleFetchAds();
    </script>
    <!-- /banner-->
    <script src="http://cmais.com.br/portal/js/bootstrap/jquery.js"></script>
    <link href="/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cmais.com.br/js/audioplayer/jquery.jplayer.min.js"></script>
    
  </head>
  <body data-spy="scroll" data-target=".subnav" data-offset="50" data-twttr-rendered="true" screen_capture_injected="true">
    <!--container-->
    <div id="controle-remoto" class="container">
      <!--header controle remoto -->
      <div id="header">
        <img class="imgHeader"src="http://cmais.com.br/portal/images/capaPrograma/controleremoto/header-controleremoto.jpg" alt="Controle Remoto" class="header-jpg"/>
      </div>

      <!--radios-->
      <div id="mioloRadio" class="row">
        <!--accordion de radios-->
        <div id="accordion2" class="accordion">
          <!--radio-1-->
          <div class="accordion-group">
            <!--head-1-->
            <div class="accordion-heading">
              <a href="#culturaBrasil" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle" name="8001"><i class="icon-chevron-right pull-right"></i>Cultura Brasil</a>
            </div>
            <!--/head-1-->
            <!--body-1-->
            <div class="accordion-body collapse" id="culturaBrasil">
              <!--accordion-inner-->
              <div class="accordion-inner">
                <script>
                  $(document).ready(function() {
                    $("#jquery_jplayer_1").jPlayer({
                      ready : function() {
                        $(this).jPlayer("setMedia", {
                          mp3 : "http://midiaserver.tvcultura.com.br:8001/;stream/1"
                        }).jPlayer("pause");
                      },
                      //swfPath : "http://cmais.com.br/js/audioplayer",
                      volume : 0.7,
                      supplied : "mp3",
                      solution : "html"
                    });
                  });
                </script>
                <!--player--> 
                <div id="player">
                  <!--jquery_player-->
                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                  <!--/jquery_player-->
                  <!--jquery-audio-->
                  <div class="jp-audio" style="width:310px;">
                    <!--jquery-playlist-->
                    <div class="jp-type-playlist">
                      <!--jp-interface-1-->
                      <div id="jp_interface_1" class="jp-interface" style="width:170px; height:70px; margin-left:75px; margin-top:40px;">
                        <!--jp-controls-->
                        <ul class="jp-controls">
                          <li>
                            <a href="#" class="jp-play" tabindex="1" style="left:10px;top:20px;">play</a>
                          </li>
                          <li>
                            <a href="#" class="jp-pause" tabindex="1" style="left:10px;top:20px;">pause</a>
                          </li>
                        </ul>
                        <!--/jp-controls-->
                      </div>
                      <!--/jp-interface-1-->
                    </div>
                    <!--/jquery-playlist-->
                  </div>
                  <!--/jquery-audio-->
                </div>
                <!--/player-->
                <!--programa / música / artista-->
                <div id="linhaDivisoria"></div>
                <h2>você está ouvindo</h2>
                <div class="row desc">
                  <p>Programa: Galeria</p>
                  <p>Música: Oração ao Tempo</p>
                  <p>Artista: Caetano Veloso</p>
                </div>
                <!--/programa / música / artista-->
                <!--redes-->
                <div id="linhaDivisoria"></div>
                <div class="curtir">
                  <div class="g-plusone" data-size="medium" data-annotation="none" data-href="https://plus.google.com/+CulturaBrasil"></div>
                  <div class="fb-like" data-href="http://www.facebook.com/culturabrasil" data-send="true" data-layout="button_count" data-width="160" data-show-faces="true" style="top: -3px;margin-left: 10px;margin-right: 10px;"></div>
                  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.com/culturabrasil2">Tweet</a>
                </div>
                <!--/redes-->
                <!--links-->
                <div id="linhaDivisoria"></div>
                <ul class="nav">
                  <li class="pull-left"><a href="http://www.culturabrasil.com.br/programacao" target="_blank" title="Confira a programação">Confira a programação »</a></li>
                  <li class="pull-right"><a href="http://www.culturabrasil.com.br/programas" target="_blank" title="Edições anteriores">Edições anteriores »</a></li>
                </ul>
                <!--/links-->
                <!--a seguir-->
                <div id="linhaDivisoria"></div>
                <h2>A seguir</h2>
                <div class="row seguir">
                  <p>Programa: Todos os Sons</p>
                </div>
                <!--/a seguir-->
              </div>
              <!--/accordion-inner-->
            </div>
            <!--/body-1-->
          </div>
          <!--/radio-1-->
          <!--radio-2-->
          <div class="accordion-group">
            <!--head-2-->
            <div class="accordion-heading">
              <a href="#culturaFm" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle" name="8003"><i class="icon-chevron-right pull-right"></i>Cultura Fm</a>
            </div>
            <!--/head-2-->
            <!--body-2-->
            <div class="accordion-body collapse" id="culturaFm">
              <!--accordion-inner-->
              <div class="accordion-inner">
                <!--programa / música / artista-->
                <div id="linhaDivisoria"></div>
                <h2>você está ouvindo</h2>
                <div class="row desc">
                  <p>Programa: Galeria</p>
                  <p>Música: Oração ao Tempo</p>
                  <p>Artista: Caetano Veloso</p>
                </div>
                <!--/programa / música / artista-->
                <!--redes-->
                <div id="linhaDivisoria"></div>
                <div class="curtir">
                  <div class="g-plusone" data-size="medium" data-annotation="none" data-href="https://plus.google.com/u/0/b/109016902461199467278/109016902461199467278/posts"></div>
                  <div class="fb-like" data-href="http://www.facebook.com/culturafmoficial" data-send="true" data-layout="button_count" data-width="160" data-show-faces="true" style="top: -3px;margin-left: 10px;margin-right: 10px;"></div>
                  <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://twitter.com/_CulturaFM">Tweet</a>
                </div>
                <!--/redes-->
                <!--links-->
                <div id="linhaDivisoria"></div>
                <ul class="nav">
                  <li class="pull-left"><a href="http://culturafm.cmais.com.br/grade-de-programacao" target="_blank" title="Confira a programação">Confira a programação »</a></li>
                  <li class="pull-right"><a href="http://culturafm.cmais.com.br/programas" target="_blank" title="Edições anteriores">Edições anteriores »</a></li>
                </ul>
                <!--/links-->
                <!--a seguir-->
                <div id="linhaDivisoria"></div>
                <h2>A seguir</h2>
                <div class="row seguir">
                  <p>Programa: Todos os Sons</p>
                </div>
                <!--/a seguir-->
              </div>
              <!--/accordion-inner-->
            </div>
            <!--/body-2-->
          </div>
          <!--/radio-2-->
          
        </div>
        <!--accordion de radios-->
      </div>
      <!--/radios-->
      <!--banner-->
      <div class="row">
        <!--a class="destaque">
          <img src="http://cmais.com.br/portal/images/capaPrograma/controleremoto/destaque.jpg" alt="destaque" />
        </a-->
        <!-- banner-controle-remoto -->
        <script type='text/javascript'>
          GA_googleFillSlot("banner-controle-remoto");
        </script>
      </div>
      <!--/banner-->
      <!--rodape-->
      <div class="row rodape">
        <p class="pull-left">Copyright © 1996 - 2012 Fundação Padre Anchieta</p>
        <p>
          <a href="#modalAjuda" class="pull-right" data-toggle="modal">Ajuda?</a>
        </p>
      </div>
      <!--rodape-->
    </div>
    <!--/container-->
    <!--facebook-->
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--/facebook-->
    <!--twitter-->
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
    <!--/twitter-->
    <!--google plus-->
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
    <!--/google plus-->
    <!-- bootstrap -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

    <script src="http://cmais.com.br/portal/js/bootstrap/modal.js"></script>
    <script src="http://cmais.com.br/portal/js/bootstrap/collapse.js"></script>
    <!-- /bootstrap -->
    <!--Modal-->
    <div id="modalAjuda" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <div class="modal-body" style="">
   
        <p>O Controle Remoto permite que você ouça em tempo real a programação das rádios Cultura Brasil, dedicada à música brasileira, e à Cultura FM, dedicada à música de concerto. Escolha a rádio que gostaria de ouvir e aperte o play. Certifique-se de que seu navegador esteja atualizado.</p>
        <br>
        <p>Você pode escolher a qualidade da transmissão (128k ou 56k) de acordo com velocidade de sua internet. Para conferir a programação completa das emissoras, basta clicar em ‘Programação’. Caso não consiga utilizar o Controle Remoto, entre em contato conosco pelo endereço: <a href="http://www2.tvcultura.com.br/faleconosco" target="_blank" title="Fale Conosco">http://www2.tvcultura.com.br/faleconosco</a></p>
        <br>
        <p>Além do Controle Remoto, também é possível ouvir as rádios Cultura Brasil e Cultura FM nas frequências 1200 kHz e 103.3 MHz e pelo <a href="https://itunes.apple.com/br/app/radio-cultura/id370066053?mt=8" title="Aplicativo Rádio Cultura" target="_blank">aplicativo gratuito para iPhone, iPad e iPod.</a></p>
      </div>
    </div>
    <!--Modal-->
  </body>
</html>
