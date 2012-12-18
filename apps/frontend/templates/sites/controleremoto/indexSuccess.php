<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>player radio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/controleremoto/normalize.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/controleremoto/player.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
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
  </head>
  <body data-spy="scroll" data-target=".subnav" data-offset="50" data-twttr-rendered="true" screen_capture_injected="true">
    <!--container-->
    <div id="controle-remoto" class="container">
      <!--header controle remoto -->
        <img src="/portal/images/capaPrograma/controleremoto/header-controleremoto.jpg" alt="Controle Remoto" class="header-jpg"/>
      <!--radio player-->
      <div id="musicPlayer" class="row">
        <!--/header controle remoto -->
        <script type="text/javascript" src="/portal/js/mediaplayer-6/jwplayer.js"></script>
        <!-- Add-On Info Here -->
        <div id="tampa"></div>
        <div id='mediaplayer'></div>
        <div class="qualidade pull-right">
          <span>Qualidade:</span> <a href="#" class="selected" title="Alta">Alta</a> | <a class="" href="baxa">Baixa</a>
        </div>
        
        <script type="text/javascript">
          $(document).ready(function(){
            //perfumaria
            $(".qualidade").css('display','none');
            
            //default começa na "radioam"(culturabrasil)
            $('#tampa').css('display','block').delay(500).fadeOut('fast'); 
            playerControle("radioam32");
            
            //troca radios
            $(".accordion-toggle").click(function() {
              //liga / troca e desliga radio
              $(this).parent().parent().on('shown', function () {
                var radio = $(this).find("a.accordion-toggle").attr('name')
                $('.qualidade').css('display','block');
                $('#tampa').css('display','block').delay(800).fadeOut('fast');
                
                //verifica se não tem media player duplicado
                var j=0;
                $('#mediaplayer_wrapper').each(function(){
                  j++;
                });
                if(j<=0){
                  $('.qualidade').before('<div id="mediaplayer" class="media"></div>');
                }else{
                  $('.media').remove();
                }
                
                //toca a radio selecionada
                playerControle(radio);
              });
              $(this).parent().parent().on('hide', function () {
                $("#mediaplayer_wrapper").remove()
                $(".qualidade").css('display','none');
              });
              
              //controle seta "down" e "right"
              $(".accordion").find("i").removeClass("icon-chevron-right").addClass("icon-chevron-down");
              $(this).find("i").removeClass("icon-chevron-down").addClass("icon-chevron-right");
              if($(this).parent().next().attr("class")=="accordion-body in"||$(this).parent().next().attr("class")=="accordion-body collapse in" || $(this).parent().next().attr("class")=="accordion-body on in"){
                $(this).find("i").removeClass("icon-chevron-right").addClass("icon-chevron-down");
              }
              
              //controle cor de fundo
              $(".accordion-group").removeClass("color-open");
              if($(this).parent().next().height()==0){
                $(this).parent().parent().addClass("color-open");
              }else{
                $(this).parent().parent().removeClass("color-open");
              }
              
              //perfumaria
              //$('.accordion-group').removeClass('in');
              //$('#tampa').show().delay(1000).fadeOut('fast');
            });
            function playerControle(radio){
              jwplayer('mediaplayer').setup({
                'flashplayer' : '/portal/js/mediaplayer-5.10/player.swf',
                'id' : 'playerID',
                'screencolor' : '333333',
                'controlbar' : 'none',
                'autostart' : 'true',
                'width' : '415',
                'height' : '35',
                'file' : radio, //escolha da radio
                'streamer' : 'rtmp://200.136.27.12/live',
                'plugins' : {
                  'audiolivestream-1' : {
                    format : 'Playing: %track',
                    buffer : 'Buffering: %perc%',
                    backgroundCss : false,
                    trackCss : 'color: #fff; font-size: 11px;'
                  }
                }
              });
            }
          });
        </script>
      </div>
      <!--/radio player-->
      <!--radios-->
      <div id="mioloRadio" class="row">
        <!--accordion de radios-->
        <div id="accordion2" class="accordion">
          <!--radio-1-->
          <div class="accordion-group">
            <!--head-1-->
            <div class="accordion-heading">
              <a href="#culturaBrasil" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle" name="radioam"><i class="icon-chevron-right pull-right"></i>Cultura Brasil</a>
            </div>
            <!--/head-1-->
            <!--body-1-->
            <div class="accordion-body collapse" id="culturaBrasil">
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
                  <iframe width="100%" scrolling="no" frameborder="0" allowtransparency="true" hspace="0" marginheight="0" marginwidth="0" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I0_1346782352061" name="I0_1346782352061" src="https://plusone.google.com/_/+1/fastbutton?bsv=pr&amp;count=false&amp;size=medium&amp;hl=pt-BR&amp;origin=http%3A%2F%2Ftvcultura.cmais.com.br&amp;url=http%3A%2F%2Ftvcultura.cmais.com.br&amp;jsh=m%3B%2F_%2Fapps-static%2F_%2Fjs%2Fgapi%2F__features__%2Frt%3Dj%2Fver%3DRBhkOT6X6WM.pt_BR.%2Fsv%3D1%2Fam%3D!m3hYDEuUO3iYnBI2Aw%2Fd%3D1%2Frs%3DAItRSTPV1GPZOGSQQ-l_QJCAiI-nGz2XWA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled&amp;id=I0_1346782352061&amp;parent=http%3A%2F%2Ftvcultura.cmais.com.br" title="+1"></iframe>
                  <fb:like max-width="180" send="true" show_faces="false" layout="button_count" href="http://tvcultura.cmais.com.br" class=" fb_edge_widget_with_comment fb_iframe_widget">
                    <span><iframe scrolling="no" id="f2a6cc8122d5dee" name="f3240e03192b4fe" style="border: medium none; overflow: hidden; height: 20px; max-width: 180px;" title="Like this content on Facebook." class="fb_ltr " src="http://www.facebook.com/plugins/like.php?channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D11%23cb%3Df2c937387d89aec%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff29c9c5cfdc4564%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;extended_social_context=false&amp;href=http%3A%2F%2Ftvcultura.cmais.com.br&amp;layout=button_count&amp;locale=pt_BR&amp;node_type=link&amp;sdk=joey&amp;send=true&amp;show_faces=false&amp;width=160"></iframe></span>
                  </fb:like>
                  <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1346314371.html#_=1346782351661&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Ftvcultura.cmais.com.br&amp;size=m&amp;text=Pel%C3%A9%20-%20cmais%2B%20O%20portal%20de%20conte%C3%BAdo%20da%20Cultura&amp;url=http%3A%2F%2Ftvcultura.cmais.com.br&amp;via=tvcultura" class="twitter-share-button twitter-count-horizontal" style="width: 107px; height: 20px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
                </div>
                <!--/redes-->
                <!--links-->
                <div id="linhaDivisoria"></div>
                <ul class="nav">
                  <li class="pull-left"><a href="#" title="Confira a programação">Confira a programação »</a></li>
                  <li class="pull-right"><a href="#" title="Edições anteriores">Edições anteriores »</a></li>
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
              <a href="#culturaFm" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle" name="radiofm"><i class="icon-chevron-right pull-right"></i>Cultura Fm</a>
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
                  <iframe width="100%" scrolling="no" frameborder="0" allowtransparency="true" hspace="0" marginheight="0" marginwidth="0" style="position: static; top: 0px; width: 32px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I0_1346782352061" name="I0_1346782352061" src="https://plusone.google.com/_/+1/fastbutton?bsv=pr&amp;count=false&amp;size=medium&amp;hl=pt-BR&amp;origin=http%3A%2F%2Ftvcultura.cmais.com.br&amp;url=http%3A%2F%2Ftvcultura.cmais.com.br&amp;jsh=m%3B%2F_%2Fapps-static%2F_%2Fjs%2Fgapi%2F__features__%2Frt%3Dj%2Fver%3DRBhkOT6X6WM.pt_BR.%2Fsv%3D1%2Fam%3D!m3hYDEuUO3iYnBI2Aw%2Fd%3D1%2Frs%3DAItRSTPV1GPZOGSQQ-l_QJCAiI-nGz2XWA#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled&amp;id=I0_1346782352061&amp;parent=http%3A%2F%2Ftvcultura.cmais.com.br" title="+1"></iframe>
                  <fb:like max-width="180" send="true" show_faces="false" layout="button_count" href="http://tvcultura.cmais.com.br" class=" fb_edge_widget_with_comment fb_iframe_widget">
                    <span><iframe scrolling="no" id="f2a6cc8122d5dee" name="f3240e03192b4fe" style="border: medium none; overflow: hidden; height: 20px; max-width: 180px;" title="Like this content on Facebook." class="fb_ltr " src="http://www.facebook.com/plugins/like.php?channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D11%23cb%3Df2c937387d89aec%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff29c9c5cfdc4564%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;extended_social_context=false&amp;href=http%3A%2F%2Ftvcultura.cmais.com.br&amp;layout=button_count&amp;locale=pt_BR&amp;node_type=link&amp;sdk=joey&amp;send=true&amp;show_faces=false&amp;width=160"></iframe></span>
                  </fb:like>
                  <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1346314371.html#_=1346782351661&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Ftvcultura.cmais.com.br&amp;size=m&amp;text=Pel%C3%A9%20-%20cmais%2B%20O%20portal%20de%20conte%C3%BAdo%20da%20Cultura&amp;url=http%3A%2F%2Ftvcultura.cmais.com.br&amp;via=tvcultura" class="twitter-share-button twitter-count-horizontal" style="width: 107px; height: 20px;" title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
                </div>
                <!--/redes-->
                <!--links-->
                <div id="linhaDivisoria"></div>
                <ul class="nav">
                  <li class="pull-left"><a href="#" title="Confira a programação">Confira a programação »</a></li>
                  <li class="pull-right"><a href="#" title="Edições anteriores">Edições anteriores »</a></li>
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
          <img src="/portal/images/capaPrograma/controleremoto/destaque.jpg" alt="destaque" />
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
          <a href="#" class="pull-right">Ajuda?</a>
        </p>
      </div>
      <!--rodape-->
    </div>
    <!--/container-->
    <!-- bootstrap -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="/portal/js/bootstrap/jquery.js"></script>
    <script src="/portal/js/bootstrap/transition.js"></script>
    <script src="/portal/js/bootstrap/alert.js"></script>
    <script src="/portal/js/bootstrap/modal.js"></script>
    <script src="/portal/js/bootstrap/dropdown.js"></script>
    <script src="/portal/js/bootstrap/scrollspy.js"></script>
    <script src="/portal/js/bootstrap/tab.js"></script>
    <script src="/portal/js/bootstrap/tooltip.js"></script>
    <script src="/portal/js/bootstrap/popover.js"></script>
    <script src="/portal/js/bootstrap/button.js"></script>
    <script src="/portal/js/bootstrap/collapse.js"></script>
    <script src="/portal/js/bootstrap/carousel.js"></script>
    <script src="/portal/js/bootstrap/typeahead.js"></script>
    <script src="/portal/js/bootstrap/application.js"></script>
    <!-- /bootstrap -->
  </body>
</html>