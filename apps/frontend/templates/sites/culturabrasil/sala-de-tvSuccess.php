<?php use_helper('I18N', 'Date')?>

<!-- Le styles-->
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>
<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section))?>

<!--Linha Central-->
<section class="container saladetv">
  <!--breadcrumb-->
  <div class="row-fluid pontilhada">
    <ul class="breadcrumb">
      <li><a href="/">Cultura Brasil</a><span class="divider">»</span></li>
      <li><?php echo $section -> getTitle();?></li>
    </ul>
  </div>
  <!--/breadcrumb-->
  <div class="row-fluid container">
    <!--transmissao ao vivo -->
    <div class="span12" style="*margin-left:0px;">
      <div class="page-header ao-vivo">
        <h4>Transmiss&atilde;o ao vivo</h4>
      </div>
      <!-- video player -->
      <div id="videoPlayer">
        <span class="falta-flash"> Você precisa ter o flash instalado em seu computador<br/> para acessar esse site.<br/> <a href="http://get.adobe.com/br/flashplayer/"  target="blank" title="Download Flash Player">Clique aqui para fazer o download</a>. </span>
      </div>
      <script src="http://www.culturabrasil.com.br//_libs/mediaplayer/swfobject.js" type="text/javascript"></script>
      <script>
        var so = new SWFObject("http://www.culturabrasil.com.br/_libs/mediaplayer/player.swf", "cam1", "640", "480", "9");

        so.addParam("allowscriptaccess", "always");
        so.addParam("allowfullscreen", "true");
        so.addParam("wmode", "transparent");
        so.addVariable('volume', "75");
        so.addVariable('controlbar', "over");
        so.addVariable('autostart', "true");
        so.addVariable('streamer', 'rtmp://200.136.27.12/live');
        so.addVariable('file', "galeria");
        so.addVariable('type', 'video');
        so.write("videoPlayer");

      </script>
      <!-- /videoplayer -->
      <!--share-->
      <div class="share">
        <div class="google">
          <g:plusone size="medium" annotation="none" href="https://plus.google.com/u/0/+CulturaBrasil/posts "></g:plusone>
        </div>
        <div class="twt">
          <a href="https://twitter.com/culturabrasil2" class="twitter-follow-button" data-show-count="false" data-lang="pt">Seguir @radarcultura</a>
        </div>
        <div class="fb">
          <fb:like href="https://facebook.com/culturabrasil" layout="button_count" width="200" send="true" show_faces="false"></fb:like>
        </div>
      </div>
      <!--/share-->
      <h4>Redes Sociais</h4>
    </div>
    <!--/transmissao ao vivo -->
   
    <!--share-->
    <div class="share span6">
      <!-- comentario facebook -->
      <fb:comments href="<?php echo $uri?>" numposts="3" width="490" publish_feed="true" style="margin-top:11px;"></fb:comments>
      <!-- /comentario facebook -->
    </div>
    <!--/share-->
    <!--Bate papo-->
    <div class="span6">
      <div class="ao-vivo">
        <?php //echo html_entity_decode($displays["chat"][0]->getHtml());?>
        <a class="twitter-timeline" href="https://twitter.com/culturabrasil2" data-widget-id="369476510362521600">Tweets by @culturabrasil2</a>
        <script>
          ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if(!d.getElementById(id)) {
              js = d.createElement(s);
              js.id = id;
              js.src = p + "://platform.twitter.com/widgets.js";
              fjs.parentNode.insertBefore(js, fjs);
            }
          }(document, "script", "twitter-wjs");

        </script>
      </div>
    </div>
    <!--/Bate papo-->
  </div>
</section>
<!--/Linha Central-->
