<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
    <!-- Le styles--> 
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
      
      <!--topo menu/alert/logo-->
      <div class="row-fluid">  
        <?php //include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          <?php include_partial_from_folder('blocks', 'global/menu_reduzido_abrace', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
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
          <div id="videoPlayer">
            <span class="falta-flash">
              Você precisa ter o flash instalado em seu computador<br/> para acessar esse site.<br/>
              <a href="http://get.adobe.com/br/flashplayer/"  target="blank" title="Download Flash Player">Clique aqui para fazer o download</a>.
            </span>
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
         <!-- comentario facebook -->
         <fb:comments href="<?php echo $uri?>" numposts="3" width="495" publish_feed="true" style="margin-top:30px;"></fb:comments>
         <hr />
         <!-- /comentario facebook -->
         </div>      
         <!--/transmissao ao vivo -->
         <!--Bate papo-->
         <div class="span6">
           <div class="page-header ao-vivo">
            <h4>Bate Papo</h4>
           </div> 
           <?php echo html_entity_decode($displays["chat"][0]->getHtml()); ?>
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