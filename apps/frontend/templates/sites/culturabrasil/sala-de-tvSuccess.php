<?php use_helper('I18N', 'Date')?>

<!-- Le styles-->
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
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
  <div class="row-fluid container twitter">
    <!--transmissao ao vivo -->
    <div class="span6" style="*margin-left:0px;">
       <div class="page-header ao-vivo">
        <h4>Transmiss&atilde;o ao vivo</h4>
      </div>
      <!-- video player -->
      <?php
      /*
      <div id="videoPlayer">
        <span class="falta-flash"> Você precisa ter o flash instalado em seu computador<br/> para acessar esse site.<br/> <a href="http://get.adobe.com/br/flashplayer/"  target="blank" title="Download Flash Player">Clique aqui para fazer o download</a>. </span>
      </div>
      <script src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js" type="text/javascript"></script>
      <script>
        var so = new SWFObject("/portal/js/mediaplayer/player.swf", "cam1", "450", "338", "9");
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
       * 
       */
       ?>
      <!--share-->
      <div class="share" style="margin-top: 5px;">
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
    </div>
    <div class="span6">
      
      <div class="page-header ao-vivo">
        <h4>Facebook</h4>
      </div>
      <iframe width='490' height='340' frameborder='0' src='http://cmais.com.br/widgets/culturabrasil/iframe-facebook.html' ></iframe>
      
    </div>
  </div>

 
     <div class="row-fluid container" style="margin-top:25px;">
    <div class="span6" style="*margin-left:0px;">    
     
      <div class="page-header" style="margin:0;">
        <h4>Bate Papo</h4>
      </div>
      <iframe src="http://cmais.com.br/chat/culturabrasil" scrolling="no" height="680px" width="493px" frameborder="0" allowtransparency="true"></iframe>
     <!--iframe width='520' height='2000' frameborder='0' src='http://cmais.com.br/culturabrasil/iframe-google.html' style="overflow:hidden;"></iframe-->
    </div>

   
    <div id="comments-container" class="span6" style="*margin-left:0px;">    
      <!--share-->
      <div class="page-header" style="margin: 0;">
        <h4>Twitter</h4>
      </div>
      <div class="ao-vivo">
        <a class="twitter-timeline" href="https://twitter.com/culturabrasil2" data-widget-id="370274710744862720">Tweets by @culturabrasil2</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
      
      <!--/share-->
    </div>    
    
  </div>
</section>
<!--/Linha Central-->

<script>
  //TIMER TRANSMISSAO
  
  function timer1(){
    var request = $.ajax({
      data: {
        asset_id: '145270',
        url_in: 'http://tvcultura.cmais.com.br/culturalivre/aovivo'
      },
      dataType: 'jsonp',
      success: function(data) {
        eval(data);
      },
      url: '/ajax/timer'
    });
  }
  
  $(window).load(function(){
    var t=setInterval("timer1()",5000);
  });
  
</script>

