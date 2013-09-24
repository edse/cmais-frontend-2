<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home - +crian&ccedil;a - cmais+ O portal de conteúdo da Cultura</title>
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link href="http://cmais.com.br/portal/maiscrianca/css/geralCrianca.css" type="text/css" rel="stylesheet">
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
  </head>
  <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
      wrap: "both",
	  scroll: 8
      });
    })
    $(function(){ //onready
      //hover states on the static widgets
      $('#dialog_link, ul#icons li').hover(
        function() { $(this).addClass('ui-state-hover'); }, 
        function() { $(this).removeClass('ui-state-hover'); }
      );
    });
    //menu drop down
    $(function(){
        $("ul.dropdown li").hover(function(){
            $(this).addClass("hover");
            $('ul:first', this).css('visibility','visible');
        },
        function(){
            $(this).removeClass("hover");
            $('ul:first',this).css('visibility', 'hidden');
        });
        $("ul.dropdown li ul li:has(ul)").find("a:first").append("  ");
    });
    //menu topo
    $(function(){
        $(".aba:first").show();
        $(".menu a").click(function(){ 
            $(".aba").hide();
            var div = $(this).attr('href');
            $(div).fadeIn("");
                $(".menu a").removeClass('current');
                $(this).addClass('current');
            return false;
        })
    });
  </script>
    <body>
      <div class="allWrapper">
        <div class="topoTvCultura">
          <?php use_helper('I18N', 'Date') ?>
          <?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important, 'asset' => $asset, 'section' => $section)) ?>
        </div>

      <div class="contentWrapper" align="center">
        <div class="content">
          <?php include_partial_from_folder('sites/maiscrianca', 'global/menu') ?>
          <hr />
          <div class="conteudo">
            <div class="logo"></div>
            <hr />
            <div class="casa">
              <hr />
              <div class="janelaWrapper">

                <div class="janela um">
                  <?php if($displays["destaque-1"][0]->Asset->AssetType->getSlug() == "image"): ?>
                    <a href="<?php echo $displays["destaque-1"][0]->retriveUrl() ?>" class="media<?php if($displays["destaque-1"][0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                      <img src="<?php echo $displays["destaque-1"][0]->retriveImageUrlByImageUsage('image-4') ?>" alt="<?php echo $displays["destaque-1"][0]->getTitle() ?>" name="<?php echo $displays["destaque-1"][0]->getTitle() ?>" />
                    </a>
                  <?php elseif($displays["destaque-1"][0]->Asset->AssetType->getSlug() == "content"): ?>
                    <?php $imgs = $displays["destaque-1"][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                    <?php if(count($imgs) > 0): ?>
                      <a href="<?php echo $displays["destaque-1"][0]->retriveUrl() ?>" class="media<?php if($displays["destaque-1"][0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                        <img src="<?php echo $displays["destaque-1"][0]->retriveImageUrlByImageUsage('image-4') ?>" alt="<?php echo $displays["destaque-1"][0]->getTitle() ?>" name="<?php echo $displays["destaque-1"][0]->getTitle() ?>" />
                      </a>
                    <?php endif; ?>
                  <?php elseif($displays["destaque-1"][0]->Asset->AssetType->getSlug() == "video"): ?>
                    <object style="height:252px; width: 420px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $displays["destaque-1"][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $displays["destaque-1"][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="420" height="252"></embed>
                    </object>
                  <?php else: ?>
                    <div style="width:420px; height:252px;"><h2><?php echo $displays["destaque-1"][0]->getTitle() ?></h2><h4><?php echo $displays["destaque-1"][0]->getDescription() ?></h4></div>
                  <?php endif; ?>
                </div>

                <div class="janela dois">
                  <?php if($displays["destaque-2"][0]->Asset->AssetType->getSlug() == "image"): ?>
                    <a href="<?php echo $displays["destaque-2"][0]->retriveUrl() ?>" class="media<?php if($displays["destaque-2"][0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                      <img src="<?php echo $displays["destaque-2"][0]->retriveImageUrlByImageUsage('image-4') ?>" alt="<?php echo $displays["destaque-2"][0]->getTitle() ?>" name="<?php echo $displays["destaque-2"][0]->getTitle() ?>" />
                    </a>
                  <?php elseif($displays["destaque-2"][0]->Asset->AssetType->getSlug() == "content"): ?>
                    <?php $imgs = $displays["destaque-2"][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                    <?php if(count($imgs) > 0): ?>
                      <a href="<?php echo $displays["destaque-2"][0]->retriveUrl() ?>" class="media<?php if($displays["destaque-2"][0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                        <img src="<?php echo $displays["destaque-2"][0]->retriveImageUrlByImageUsage('image-4') ?>" alt="<?php echo $displays["destaque-2"][0]->getTitle() ?>" name="<?php echo $displays["destaque-2"][0]->getTitle() ?>" />
                      </a>
                    <?php endif; ?>
                  <?php elseif($displays["destaque-2"][0]->Asset->AssetType->getSlug() == "video"): ?>
                    <object style="height:252px; width: 420px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $displays["destaque-2"][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $displays["destaque-2"][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="420" height="252"></embed>
                    </object>
                  <?php else: ?>
                    <div style="width:420px; height:252px;"><h2><?php echo $displays["destaque-2"][0]->getTitle() ?></h2><h4><?php echo $displays["destaque-2"][0]->getDescription() ?></h4></div>
                  <?php endif; ?>
                </div>

                <div class="janela tres">
                  <?php if($displays["destaque-3"][0]->Asset->AssetType->getSlug() == "image"): ?>
                    <a href="<?php echo $displays["destaque-3"][0]->retriveUrl() ?>" class="media<?php if($displays["destaque-3"][0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                      <img src="<?php echo $displays["destaque-3"][0]->retriveImageUrlByImageUsage('image-4') ?>" alt="<?php echo $displays["destaque-3"][0]->getTitle() ?>" name="<?php echo $displays["destaque-3"][0]->getTitle() ?>" />
                    </a>
                  <?php elseif($displays["destaque-3"][0]->Asset->AssetType->getSlug() == "content"): ?>
                    <?php $imgs = $displays["destaque-3"][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                    <?php if(count($imgs) > 0): ?>
                      <a href="<?php echo $displays["destaque-3"][0]->retriveUrl() ?>" class="media<?php if($displays["destaque-3"][0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
                        <img src="<?php echo $displays["destaque-3"][0]->retriveImageUrlByImageUsage('image-4') ?>" alt="<?php echo $displays["destaque-3"][0]->getTitle() ?>" name="<?php echo $displays["destaque-3"][0]->getTitle() ?>" />
                      </a>
                    <?php endif; ?>
                  <?php elseif($displays["destaque-3"][0]->Asset->AssetType->getSlug() == "video"): ?>
                    <object style="height:252px; width: 420px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $displays["destaque-3"][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $displays["destaque-3"][0]->Asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="420" height="252"></embed>
                    </object>
                  <?php else: ?>
                    <div style="width:420px; height:252px;"><h2><?php echo $displays["destaque-3"][0]->getTitle() ?></h2><h4><?php echo $displays["destaque-3"][0]->getDescription() ?></h4></div>
                  <?php endif; ?>
                </div>

                <div class="recadinhosTree">
                  <a href="/maiscrianca/recadinhos">Recadinhos</a>
                </div>

                
                
              </div>

              <div class="voceSabiaBox">
                <a href="<?php echo $displays["destaque-texto"][0]->retriveUrl() ?>"><h2>você sabia?</h2></a>
                <?php if($displays["destaque-texto"][0]->retriveImageUrlByImageUsage("image-2") != ""): ?>
                  <img src="<?php echo $displays["destaque-texto"][0]->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $displays["destaque-texto"][0]->getTitle() ?>" />
                <?php endif; ?>
                <div class="voceSabiaBoxWrapper">
                  <a href="<?php echo $displays["destaque-texto"][0]->retriveUrl() ?>">
                    <h3><?php echo $displays["destaque-texto"][0]->getTitle() ?></h3>
                    <p><?php echo $displays["destaque-texto"][0]->getDescription() ?></p>
                  </a>
                </div>
              </div>
              <div class="palhacos">
            	<a href="http://quintaldacultura.com.br">quintal da tv</a>
            </div>
              <hr />
            </div>
          </div>
          <hr />
          <?php include_partial_from_folder('sites/maiscrianca', 'global/footer') ?>

        </div>
        <div class="cerca"></div>
      </div>
      
      <div class="rodapeTvCultura">
        <?php include_partial_from_folder('blocks', 'global/footer') ?>
      </div>

        </div>               
    </body>
</html>
