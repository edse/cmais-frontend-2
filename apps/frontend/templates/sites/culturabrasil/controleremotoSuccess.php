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
    <link rel="stylesheet" type="text/css" href="/portal/controle-remoto/css/controleremoto.css">
    <link href="/portal/controle-remoto/css/jPlayer.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/portal/controle-remoto/css/jplayer.blue.monday.css" type="text/css" media="all" />    
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

      <script src="/portal/controle-remoto/js/jquery.min.js" type="text/javascript"></script>
      <script src="/portal/controle-remoto/js/main.js" type="text/javascript"></script>
      
      <script src="/portal/controle-remoto/js/jquery.min-1.8.js" type="text/javascript"></script>
      <script src="/portal/controle-remoto/js/jquery.jplayer.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="/portal/controle-remoto/js/jquery.jplayer.inspector.js"></script>
      <script type="text/javascript">
      //<![CDATA[
      $(document).ready(function(){
        
        if(window.screen.width < 1024){
          $(".jp-volume_controls").hide();
          $(".jp-volume-bar").hide();
        }
        
        $("#jquery_jplayer_2").jPlayer({
          ready: function () {
            $(this).jPlayer("setMedia", {
              mp3: "http://midiaserver.tvcultura.com.br:8001/;stream/1"
            }).jPlayer("play");
          },
          swfPath: "/portal/controle-remoto/swf",
          supplied: "mp3",
          //solution: 'flash, html',
          cssSelectorAncestor: "#jp_container_2",
          wmode: "window"
        });
      
        //$("#jplayer_inspector_2").jPlayerInspector({jPlayer:$("#jquery_jplayer_2")});
        
      });
      //]]>
      </script>    
    
    
    <!-- /scripts -->
    
    <title>Cultura Brasil - Controle Remoto</title>
    
    <!-- Le styles--> 
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    
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
            <li><a href="javascript:;" title="Cultura Brasil">cultura brasil</a></li>
            <li><a href="javascript:;" title="Cultura FM">cultura fm</a></li>
          </ul>  
          <!-- /radios -->
        </div>    
      </section>
      <!--/topo menu -->
      
      <!-- player -->
      <section class="cr-player">
        
        
          
    <div id="jquery_jplayer_2" class="jp-jplayer"></div>
      <div id="jp_container_2" class="jp-audio">
        <div class="jp-type-single">
          <div class="jp-gui jp-interface">
            <ul class="jp-controls">
              <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
              <li><a href="javascript:;" id="btn-brasil" class="pl" title="Cultura Brasil" >Cultura Brasil</a></li>
              <li><a href="javascript:;" class="jp-pause" tabindex="1" title="Pause">pause</a></li>
              <li><a href="javascript:;" class="jp-stop" tabindex="1" title="Stop">stop</a></li>
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
        
        
        
      </section>
      <!-- /player -->
      
      <!-- descrição programa -->
      <section class="cr-pgm">
        
        <!-- header -->
        <div class="cr-header-pgm">
          <span>você esta ouvindo</span>
        </div>
        <!-- /header -->
        
        
        
        
   <?php if(isset($schedules)):?>
        

          <?php foreach($schedules as $k=>$d): ?>
          <?php
            $now = false;
            if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd()))) {
              $now = true;
            }

            if($now):
            
            endif; 

          echo $k ?>
                <?php echo format_datetime($d->getDateStart(), "HH:mm") ?>
                <?php echo $d->Program->getTitle() ?>
                <i class="seta-grade<?php if($now): ?> baixo<?php else: ?> cima<?php endif; ?>
            
            <div id="collapse<?php echo $k ?>" class="accordion-body collapse<?php if($now): ?> in<?php endif; ?>" style="overflow:hidden;">
                <p><?php echo $d->retriveTitle() ?><br><br>
                <?php echo $d->retriveDescription() ?></p>
                <a href="<?php echo $d->retriveUrl() ?>" class="btn-body" title="">acesse o site<i class="borda-titulo borda-grade"></i></a>
                <a href="#" class="btn-body" title="">ouça ao vivo pela web<i class="borda-titulo borda-grade"></i></a>
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          <?php endforeach; ?>
          
        </div>
        <!--/accordion-->
        
      </div>
      <!--/lista grade -->
      <?php endif; ?>
      
      
      
      
        
        <!-- imagem -->
        <div class="cr-img-pgm">
          <img src="/portal/controle-remoto/css/cr-img-layout.jpg" alt="Nome Pgm" />
        </div>  
        <!-- /imagem -->
        
        <!-- descricao programa -->
        <div class="cr-desc-pgm">
          <h2>todos os sons</h2>
          
          <!-- detalhe musica -->
          <div class="cr-det-mus-pgm">
            
            <h3>música</h3>
            <p>Oração ao Tempo</p>
            
            <h3>intérprete</h3>
            <p>Caetano Veloso</p>
              
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
        <ul>
          <!-- item -->
          <li class="par">
            <h5>Supertônica</h5>
            <p class="hora">15:30 h</p>
          </li>
          <!-- item -->
          
          <!-- item -->
          <li class="impar">
            <h5>Reggae de Bamba</h5>
            <p class="hora">16:20 h</p>
          </li>
          <!-- item -->
          
          <!-- item -->
          <li class="par">
            <h5>Galeria</h5>
            <p class="hora">16:50 h</p>
          </li>
          <!-- item -->
          
          <!-- item -->
          <li class="impar">
            <h5>Programa de Estudante</h5>
            <p class="hora">17:30 h</p>
          </li>
          <!-- item -->
          
          <!-- item -->
          <li class="par">
            <h5>Seleção do Ouvinte</h5>
            <p class="hora">18:00 h</p>
          </li>
          <!-- item -->
          
          <!-- item -->
          <li class="impar">
            <h5>Cultura Livre</h5>
            <p class="hora">19:00 h</p>
          </li>
          <!-- item -->
          
          <!-- item -->
          <li class="par">
            <h5>Bossamoderna</h5>
            <p class="hora">19:45 h</p>
          </li>
          <!-- item -->
          
        </ul>  
        <!-- /lista itens -->
        
        <div class="cr-linha"></div>
        
        <a href="http://cmais.com.br/culturabrasil/programacao" class="cr-pgm-completa" title="Veja nossa programação completa">programação completa » </a>
        
      </section>  
      <!-- /lista a seguir -->
      
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
      $('.cr-box-escolha span').delay(10000).fadeOut("slow");
      
      //ativo menu radios
      $('.cr-btn-radio').click(function(){
        $(this).toggleClass('ativo');
        $('.cr-radios').toggleClass('ativo');
      })
    </script>
  </body>
</html>