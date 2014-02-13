    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <!-- scripts -->                    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
    <!-- scripts -->
    <style>
    @import "http://cmais.com.br/portal/css/tvcultura/geral.css";
    #direita {
        margin-top: 10px;
    }
    #esquerda .stream {
        float: left;
        margin-top: 5px;
    }
    #esquerda .stream a {
        background: none repeat scroll 0 0 #FF6633;
        clear: none;
        color: #FFFFFF;
        float: left;
        margin-right: 5px;
        padding: 0 3px;
        width: auto;
    }
    #esquerda .stream a.ativo, #esquerda .stream a:hover {
        background: none repeat scroll 0 0 #333333;
        text-decoration: none;
    }
    </style>    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="../" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>
          
          <h3 class="tit-pagina grid3"><?php echo $asset->getTitle() ?></h3>

        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">

            <div id="esquerda" class="grid2">

							<!-- 
              <div class="stream">
                <a href="javascript: stream1();">Chat</a>
                <a href="javascript: stream2();">TV Cultura</a>
              </div>
              -->

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">

                <!-- 
                <div style="position: absolute; top: 346px; left: 46px; color: black;"><a href="http://twitter.com/carlafiorito" target="_blank" style="color: black;">@carlafiorito</a></div>
                <div style="position: absolute; top: 345px; left: 45px; color: white;"><a href="http://twitter.com/carlafiorito" target="_blank" style="color: white;">@carlafiorito</a></div>

                <div style="position: absolute; top: 304px; left: 615px; color: black;">AO VIVO</div>
                <div style="position: absolute; top: 303px; left: 616px; color: white;">AO VIVO</div>
                <div style="position: absolute; top: 307px; left: 475px;"><img style="" src="http://midia.cmais.com.br/programs/15000af716f40ab1697e7aa6336c1dfdb57bcb9d.png"></div>
                -->

                <div id="live"></div>
                <script>
                jQuery(document).ready(function(){
                  stream1();
                });
                function stream1(){
                  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
                  so.addVariable('controlbar', 'bottom');
                  so.addVariable('autostart', 'true');
                  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                  so.addVariable('file', 'tecnologia');
                  so.addVariable('type', 'video');
                  so.addParam('allowscriptaccess','always');
                  so.addParam('allowfullscreen','true');
                  so.addParam('wmode','transparent');
                  so.write('live');
                }
                </script>

                <a href="<?php echo $asset->retriveUrl() ?>" class="titulos"><?php echo $asset->getTitle() ?></a>
                <p><?php echo $asset->getDescription() ?></p>

              </div>
              <!-- /NOTICIA INTERNA -->

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            
            <div id="direita" class="grid1" style="margin-top: 0px;">
            
            	<iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=e3ee0488bf/height=490/width=310" scrolling="no" height="490px" width="310px" frameBorder ="0" ><a href="http://www.coveritlive.com/mobile.php/option=com_mobile/task=viewaltcast/altcast_code=e3ee0488bf" >Especial Tecnologia</a></iframe>

              <?php /* <iframe src="http://www.coveritlive.com/index2.php/option=com_altcaster/task=viewaltcast/altcast_code=a3d255ec3d/height=490/width=310" scrolling="no" height="490px" width="310px" frameBorder="0" allowTransparency="true"></iframe> */ ?>

              <?php if(isset($displays["publicidade-300x250"])) include_partial_from_folder('blocks','global/banner-300x250', array('displays' => $displays["publicidade-300x250"])) ?>

              <?php $relacionados = array(); if($asset) $relacionados = $asset->retriveRelatedAssets2(); ?>
              <?php if(count($relacionados) > 0): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>relacionadas</h4>
                    <a href="#" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(count($relacionados) > 0) include_partial_from_folder('blocks','global/recent-news', array('displays' => $relacionados)) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

            </div>

          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->

