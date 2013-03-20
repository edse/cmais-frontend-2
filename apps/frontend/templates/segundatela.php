<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Le styles -->
    <link href="/portal/js/bootstrap-v2.3.1/css/bootstrap.css" rel="stylesheet">
    <link href="/portal/js/bootstrap-v2.3.1/css/bootstrap-responsive.css" rel="stylesheet">
    
    
    <script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="/portal/js/bootstrap-v2.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
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
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://cmais.com.br/portal/images/icon/cmais-favico_144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cmais.com.br/portal/images/icon/cmais-favico_114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png">
    
    <link rel="apple-touch-icon" href="http://h.imguol.com/icon-touch.png" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/icon/cmais-favico_72.png" />
    <link rel="SHORTCUT ICON" href="http://cmais.com.br/portal/images/icon/favicon.ico" type="image/x-icon">
       
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
  </head>
  <body>
    <?php echo $sf_content ?>
    <!-- scripts -->
    
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /scripts -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({appId: '124792594261614', status: true, cookie: true, xfbml: true});
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/pt_BR/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>
    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/websocket-js/swfobject.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/websocket-js/web_socket.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/json2.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/segundatela.js"></script>
    
    <script type="text/javascript">
    /*
    //yotube API
    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    //arrays para players multiplos
    var player = new Array();
    var cont = 0;
    var players = new Array();
    var playing = false; 

    $('.accordion-body').on('show', function() {
      console.log(playing);
      if(playing)
        playing.pauseVideo();
    });

    function checkState(res){
      if(res.data==1){
        playing=players[i].attr("id");
      }
    }

    function onYouTubeIframeAPIReady() {
    
      $('.accordion-body iframe').each(function(i){
        $(this).attr("id","player"+i);
        players[i] = $("#player"+i);
      })
    
      for(var i=0; i < players.length; i++){
        player[i] = new YT.Player(players[i].attr("id"));
        player[i].addEventListener("onStateChange", function(res){
          if(res.data == 1){
            var i = res.target.a.id.substring(6,7);
            playing = player[i];
          }
        });
      }
    }  

    $('#myTab a').click(function(e) {
      e.preventDefault();
      $(this).tab('show');
    });

    // colocando e tirando ativo
    $('.accordion-body').on('hidden', function() {
      //remove barra ativa
      $(this).prev().find('a').removeClass('ativo');
    });

    $('.accordion-body').on('show', function() {
      //remove barra ativa
      $(this).prev().find('a').addClass('ativo');
    });

    //subindo pro topo
    $('.accordion-body').on('shown', function(){
      var el = $(this).parent();
      $('html, body').animate({
        scrollTop: el.offset().top
      }, "fast");
    });

// padding ultimo conteudo
$('.accordion-body').each(function() {
    $(this).find('p:last').css('padding-bottom', '15px');
  });
*/
</script>

  </body>
</html>