<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
      
      <!--topo menu/alert/logo-->
      <div class="row-fluid">
        <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
      </div>
      <div class="row-fluid">  
        <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
      </div>
      <!--/topo menu/alert/logo-->
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
      <!--Linha Central-->
      <div class="row-fluid">
        <!--transmissao ao vivo -->
        <div class="span6">  
          <div class="page-header ao-vivo">
            <h4>Transmiss&atilde;o ao vivo</h4>
          </div>
          <div id="videoPlayer"></div>
          <script src="http://www.culturabrasil.com.br//_libs/mediaplayer/swfobject.js" type="text/javascript"></script>
  
          <script>
          var so = new SWFObject("http://www.culturabrasil.com.br/_libs/mediaplayer/player.swf","cam1","450","338","9");
          so.addParam("pluginspage","http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash");
          so.addParam("allowscriptaccess","always");
          so.addParam("allowfullscreen","true");
          so.addParam("wmode","transparent");
          so.addVariable('volume', "75");
          so.addVariable('controlbar', "over");
          so.addVariable('autostart', "true");
          so.addVariable('streamer', 'rtmp://200.136.27.12/live');
          so.addVariable('file', "galeria");
          so.addVariable('type', 'video');
          so.write("videoPlayer");
          </script>
          <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
          <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>
         <!-- comentario facebook -->
         <fb:comments href="http://cmais.com.br" numposts="3" width="495" publish_feed="true" style="margin-top:30px;"></fb:comments>
         <hr />
         <!-- /comentario facebook -->
         </div>      
         <!--/transmissao ao vivo -->
         <!--Bate papo-->
         <div class="span6">
           <div class="page-header ao-vivo">
            <h4>Bate Papo</h4>
           </div> 
           <iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=aa92a56e37/height=680/width=467" scrolling="no" height="680px" width="467px" frameBorder ="0" allowTransparency="true"  ><a href="http://www.coveritlive.com/mobile.php/option=com_mobile/task=viewaltcast/altcast_code=aa92a56e37" >Rádio Cultura Brasil</a></iframe>
         </div>
         <!--/Bate papo-->
         <!--banner horizontal-->    
         <div class="container">
           <div class="banner-radio horizontal">
             <script type='text/javascript'>
               GA_googleFillSlot("cmais-assets-728x90");
             </script>
           </div>
         </div>
         <!--banner horizontal-->
       </div>
       <!--/Linha Central-->
    </div>
    <!--container-->