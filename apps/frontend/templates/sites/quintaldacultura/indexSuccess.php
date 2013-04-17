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

    <link rel="shortcut icon" href="/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="/portal/images/logoCMAIS.jpg" />

    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />

    <link rel="stylesheet" href="/portal/css/geral.css?nocache=<?php echo time ?>" type="text/css" />
    <link rel="stylesheet" href="/portal/quintal/css/geralQuintal.css?nocache=<?php echo time ?>" type="text/css" />
    <link rel="stylesheet" href="/portal/quintal/css/indexQuintal.css?nocache=<?php echo time ?>" type="text/css" />
    <!-- scripts -->

    <script type="text/javascript" src="/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/portal/js/portal.js"></script>
    <script type="text/javascript" src="/portal/js/jPlayer/js/jquery.jplayer.min.js"></script>

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
  <!--ALLWRAPPER-->
  <div class="allWrapper">

  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!--CONTENT WRAPPER-->
    <div class="contentWrapper" align="center">

      <!--CONTENT-->
      <div class="content">

        <!--MENU QUINTAL-->
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
        <?php /*
        <div class="cabecalho">
          <h1><a href="http://cmais.com.br/quintaldacultura">Quintal da Cultura</a></h1>
          <ul>
            <li><a class="musica" href="http://tvratimbum.cmais.com.br/radio"><span>M&uacute;sica</span></a></li>
            <li><a class="cultura" href="http://tvcultura.cmais.com.br/" title="Cmais +"><span>Cmais+</span></a></li>
          </ul>
          <a href="/paraospais" class="paraPais"><span>Para os pais</span></a>
        </div>         
        <!--/MENU QUINTAL-->
         */ ?>
        <hr />
        

        <!--CONTEUDO-->
        <div class="conteudo">
          <!--p class="breadcrumb"><a href="/">cmais</a> &gt;&gt; Quintal da Cultura</p-->

          <!--CONTEUDO WRAPPER-->
          <div class="conteudoWrapper">

            <!--ITENS BACKGROUND-->
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
            <!--/ITENS BACKGROUND-->

            <!--MENU PRINCIPAL-->
            <div id="menu-quintal-principal">
              <div id="anos"></div>
              <div id="niver-principal">
                <div class="niver-esquerda">
                  <p>
                    <span class="niver-texto">O <span style="color:yellow">Quintal da Cultura</span>  já vai fazer</span><br> 
                    <span class="niver-texto">2 anos,da pra acreditar? E nessa</span>
                    <span class="niver-texto">Quinta-feira, dia 18 de Março,</span><br>
                    <span class="niver-texto">tem festa pra comemorar!</span><br>
                    <span class="niver-texto">Mas é surpresa, então não conta</span><br>
                    <span class="niver-texto">pra eles tá bom?</span>
                  </p>
                  <span class="niver-combinado">TÁ COMBINADO</span>
                  <span class="vela"></span>
                </div>
                <div class="niver-direita">
                  <iframe width="460" height="285" src="http://www.youtube.com/embed/hbpORsyPFWM?feature=player_embedded&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>  
              </div>                
            </div>
            <!--/MENU PRINCIPAL-->               

         

          </div>

          <!--/CONTEUDO WRAPPER-->

          

         <!--DESTAQUE JOGUINHOS -->
          <?php include_partial_from_folder('sites/quintaldacultura', 'global/destaque-joguinhos') ?>
          <!--DESTAQUE JOGUINHOS -->

           

        </div>

        <!--/CONTEUDO-->



      </div>Clipes

      <!--/CONTENT-->

      

      <!--FOOTER QUINTAL-->

      <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?> 

      <!--/FOOTER QUINTAL-->

    

    </div>

    <!--/CONTENT WRAPPER-->

    

    <!--FOOTER-->    

    <?php include_partial_from_folder('blocks', 'global/footer') ?>

    <!--/FOOTER-->

    

  </div>

  <!--/ALLWRAPPER-->



</body>

</html>