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
        <!--topo menu/alert/logo-->
     
     <div class="row span5">  
        <div class="page-header">
          <h4>Transmiss&atilde;o ao vivo</h4>
        </div>
        <div class="container">
          <div id="videoPlayer"></div>
        </div>
        <script src="http://www.culturabrasil.com.br//_libs/mediaplayer/swfobject.js" type="text/javascript"></script>

        <script>
        var so = new SWFObject("http://www.culturabrasil.com.br/_libs/mediaplayer/player.swf","cam1","450","338","9");
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

        <div class="row container span4 pull-left">
            <div style="float:left; margin:0 5px 0 0; ">
              <div id="fb-root"></div><script src="http://connect.facebook.net/pt_BR/all.js#appId=117801368309710&amp;xfbml=1"></script><fb:like href="http://www.culturabrasil.com.br/sala-de-tv" send="false" layout="button_count" width="200" show_faces="true" font=""></fb:like>
              <g:plusone size="medium" count="true"></g:plusone>
              <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" style="float:right; display:block">Tweet</a>
            </div>
       </div>
        
        <!-- comentario facebook -->
             
                <fb:comments href="http://cmais.com.br" numposts="3" width="450" publish_feed="true"></fb:comments>
                <hr />
              
              <!-- /comentario facebook -->
       </div>
         <div class="row span5 pull-right">
         <div class="page-header">
          <h4>Bate Papo</h4>
         </div> 
         <iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=aa92a56e37/height=680/width=467" scrolling="no" height="680px" width="467px" frameBorder ="0" allowTransparency="true"  ><a href="http://www.coveritlive.com/mobile.php/option=com_mobile/task=viewaltcast/altcast_code=aa92a56e37" >Rádio Cultura Brasil</a></iframe>
       </div>
        
        <div class="container pull-left">
          <div class="banner-radio horizontal">
            <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
        </div>

     </div>