<?php use_helper('I18N', 'Date') ?>
<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <link href="http://cmais.com.br/feed" type="application/atom+xml" rel="alternate" title="cmais+ feed" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />
    <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/controle-remoto/css/controleremoto.css">
    <link href="http://cmais.com.br/portal/controle-remoto/css/jPlayer.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/controle-remoto/css/jplayer.blue.monday.css" type="text/css" media="all" />
    
    <!--script type="text/javascript" src="http://jwpsrv.com/library/CSQ2LAE6EeOsRSIACusDuQ.js"></script-->
        
    <!--DFP -->
    <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
    <script type='text/javascript'>
    GS_googleAddAdSenseService("ca-pub-6681834746443470");
    GS_googleEnableAllServices();
    </script>
    <script type='text/javascript'>
    GA_googleAddSlot("ca-pub-6681834746443470", "cultura-brasil");
    </script>
    <script type='text/javascript'>
    GA_googleFetchAds();
    </script>
    <!-- /DFP -->

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
        $(".cr-det-mus-pgm").hide();        
        
        
        function supportsAudio() {
            //return !!document.createElement('audio').canPlayType;
            var a = document.createElement('audio');
            return !!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''));
        }
        
        //if (navigator.mimeTypes["application/x-shockwave-flash"] != undefined && navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){
        if(FlashDetect.installed && FlashDetect.major >= 10){ 
          /*jwplayer("div_player").setup({
              file: "rtmp://200.136.27.12/live/radioam",
              width: 360,
              height: 30,
              autostart: true,
              title: "Rádio Cultura Brasil"
          });
          
          */
          $(".cr-player").css("padding","15px 20px");
          $("#div_player").html('<div id="audio" style="display:block;width:360px;height:25px;background-color:#000000;"> </div>');
          
          //TESTE FLOWPLAYER
          $f("audio", 
                  {
                    src: "http://cmais.com.br/portal/controle-remoto/flowplayer/flowplayer-3.2.16.swf", 
                    title: "Rádio Cultura Brasil",
                    bgcolor: "#000000"
                  },
                   
                  {
                     plugins:
                     {
                        rtmp: {
                          url: "http://cmais.com.br/portal/controle-remoto/flowplayer/flowplayer.rtmp-3.2.12.swf",
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
                //play: null // no need to load the play button
                });

        }else{

          if(window.screen.width <= 1024){
            $(".jp-volume_controls").hide();
            $(".jp-volume-bar").hide();
          }
        
          if(supportsAudio() == true) {
            $("#jquery_jplayer_2").jPlayer({
              ready: function () {
                $(this).jPlayer("setMedia", {
                  mp3: "http://midiaserver.tvcultura.com.br:8001/;stream/1"
                }).jPlayer("play");
              },
              swfPath: "http://cmais.com.br/portal/controle-remoto/swf",
              supplied: "mp3",
              solution: 'html',
              cssSelectorAncestor: "#jp_container_2",
              wmode: "window"
            });
          }else{
            //NAO SUPORTA FLASH E HTML5
            $("#div_player").html('Não foi possível carregar o Player do Audio pois o seu navegador não suporta HTML5 e o plugin do Adobe Flash também não está instalado/atualizado. <a href="http://get.adobe.com/br/flashplayer/" target="_blank">Clique aqui</a> para instalar/atualizar plugin do Adobe Flash.');
            $(".cr-header-pgm").hide();
          }
        }
        //$("#jplayer_inspector_2").jPlayerInspector({jPlayer:$("#jquery_jplayer_2")});
        function LoadInfoMusica(){
          time = new Date().getTime();
          $.ajax({
             url: "http://culturabrasil.cmais.com.br/pulsar.json?no-cache="+time, 
             dataType: "json",
             success: function(json){
               if((json.musica.interprete == null && json.musica.titulo == null) || (json.musica.interprete == "" && json.musica.titulo == "")){
                 $(".cr-det-mus-pgm").hide();
               }else{
                 //$("#nome_musica_atual").text(json.musica.titulo+" - "+json.musica.duracao);
                 $("#nome_interprete_atual").text(json.musica.interprete);
                 $("#nome_musica_atual").text(json.musica.titulo);               
                 $(".cr-det-mus-pgm").show();  
               }
             }
           }); 
        }

        function LoadProgramacao(){
         time = new Date().getTime();
         $.ajax({
           url: "http://app.cmais.com.br/ajax/programacao-radio?channel_id=5&no-cache="+time,// 5 = Cultura Brasil 
           dataType: "jsonp",
           success: function(json){
             //No Ar
             $("#titulo_pgm_atual").text(json.noar[0].titulo); 
             $("#img_pgm_atual").attr("src",json.noar[0].imagem);
             
             //A seguir
             var style = 1;
             var tipo = "im";
             var conteudo = "";
             
             $(json.aseguir).each(function(index, program){
               if(style==0){ style++;tipo = "im";}else{style=0;tipo = "";}
               conteudo+=  '<li class="'+tipo+'par"> <h5>'+program.titulo+'</h5> <p class="hora">' + program.data+ 'h</p></li>';
             });
              
             $("#lista_pgm_a_seguir").html(conteudo);
             
             }
          }); 
        }
        
        LoadInfoMusica();
        LoadProgramacao();
        
        //Você está ouvindo
        setInterval(function(){
          LoadInfoMusica();
         }, 10000);
         
        //No ar e A Seguir
        setInterval(function(){         
          LoadProgramacao();
         }, 60000);
         
      });
      //]]>
      </script>    
    
    
    <!-- /scripts -->
    
    <title>Cultura Brasil - Controle Remoto</title>
    
    <!-- Le styles--> 
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    
  </head>
  
  <body>
    <!-- /container -->
    <section class="container">
      <!--topo menu -->
      <section class="cr-topo">
        <h1>
          controle remoto
        </h1>
        <div class="cr-box-escolha pull-right">
          <span class="cr-escolha">escolha uma </span><span>rádio</span>
          <a href="javascript:;" class="cr-btn-radio" title="Escolha uma rádio"></a>
          <!-- radios -->
          <ul class="cr-radios">
            <li><a href="http://culturabrasil.cmais.com.br/controleremoto" title="Cultura Brasil">cultura brasil</a></li>
            <li><a href="http://culturafm.cmais.com.br/controleremoto" title="Cultura FM">cultura fm</a></li>
          </ul>  
          <!-- /radios -->
        </div>    
      </section>
      <!--/topo menu -->
      
      <!-- player -->
      <section class="cr-player">
        
        
 <div id="div_player">            
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
        
      </section>
      <!-- /player -->
      
      <!-- descrição programa -->
      <section class="cr-pgm">
            <!-- header -->
            <div class="cr-header-pgm">
              <span>você está ouvindo</span>
            </div>
            <!-- /header -->          
            
            <!-- imagem -->  
            <div class="cr-img-pgm">
              <img src="" alt="" id="img_pgm_atual" />
            </div>  
            <!-- /imagem -->
            
            <!-- descricao programa -->
            <div class="cr-desc-pgm">
              <a class="cr-links cr-logo-cultura-brasil" href="http://culturabrasil.cmais.com.br/" title="Cultura Brasil" target="_blank"></a>
              <h2 id="titulo_pgm_atual"></h2>
              
              <!-- detalhe musica -->
              <div class="cr-det-mus-pgm">
                
                <span class="titulo">música</span>
                <p id="nome_musica_atual"></p>
                
                <span class="titulo">intérprete</span>
                <p id="nome_interprete_atual"></p>
                  
              </div>
              <!-- /detalhe musica -->
                
            </div>
            <!-- descricao programa -->
            
          </section>
          <!-- /descrição programa -->              
              
        <!-- lista a seguir -->
      <section class="cr-lista-a-seguir">
        <h4>a Seguir</h4>
        <div class="cr-linha"></div>

        <!-- lista itens -->
        <ul id="lista_pgm_a_seguir">
            <!-- item -->
            <li class="par">
              <h5></h5>
              <p class="hora"> h</p>
            </li>
            <!-- item -->
          
        </ul>  
        <!-- /lista itens -->
        
        <div class="cr-linha"></div>
        <!-- redes -->
        <div class="cr-redes">
          <a class="cr-links cr-facebook" href="https://www.facebook.com/culturabrasil" title="facebook" target="_blank"></a>
          <a class="cr-links cr-twitter" href="https://twitter.com/culturabrasil2" title="twitter" target="_blank"></a>
          <a class="cr-links cr-google" href="https://plus.google.com/u/0/+CulturaBrasil/posts" title="google" target="_blank"></a>
        </div>
        <!-- /redes -->
        <a href="http://cmais.com.br/culturabrasil/programacao" class="cr-pgm-completa" title="Veja nossa programação completa" target="_blank">programação completa » </a>
        
      </section>  
      <!-- /lista a seguir -->
      <section class="duvidas">
        <a href="https://docs.google.com/forms/d/1CWq8uyNNxMQTUpAA5dNSK-PXj6kPoF_zJ-uCAIoFDok/viewform" class="cr-problemas" title="Está com problemas? Dê a sua opinião" target="_blank">Estamos fazendo atualizações no Controle Remoto.<br> Está com problemas? Dê a sua opinião!</a>
      </section>
      <!-- banner -->
      <section class="cr-banner">
        
        <div class="cr-box-banner">
          
          <script type='text/javascript'>
            GA_googleFillSlot("cultura-brasil");
          </script>
          
        </div>
        
      </section>
      <!-- /banner -->
      
    </section>
    <!-- /container -->
    <script>
      //fade escolha uma rádio
      /*
      $('.cr-box-escolha span').delay(10000).fadeOut("slow");
      */
      //ativo menu radios
      $('.cr-btn-radio').click(function(){
        $(this).toggleClass('ativo');
        $('.cr-radios').toggleClass('ativo');
      })
      
    </script>
  </body>
</html>