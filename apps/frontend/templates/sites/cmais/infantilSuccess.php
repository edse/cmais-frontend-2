<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <?php include_title() ?>
    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/favicon.ico" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />
    
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geralCrianca.css" type="text/css" />

    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>    
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
  <script type="text/javascript">
  $(function(){
    //carrossel
    $('.carrossel').jcarousel({
        wrap: "both"
    });
    //hover states on the static widgets
    $('#dialog_link, ul#icons li').hover(
      function() { $(this).addClass('ui-state-hover'); }, 
      function() { $(this).removeClass('ui-state-hover'); }
    );
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
  </script> 
  <body>
  

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

      <div class="contentWrapper" align="center">
        
        <div class="content"> 
        
          <div class="cabecalho">
            <?php /*
            <!-- menu interna -->
            <?php if(count($siteSections) > 0): ?>
              <div class="menu">
                <ul>
                <?php foreach($siteSections as $s): ?>
                  <li><a href="<?php echo $s->retriveUrl()?>" class="<?php echo $s->getSlug() ?>"><span><?php echo $s->getTitle() ?></span></a></li>
                <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
            <!-- /menu interna -->
             */ ?>

          <?php if(isset($displays['destaque-programas'])): ?>
            <?php if(count($displays['destaque-programas']) > 0): ?>
            <div class="carrossel">
              <ul>
                <?php foreach($displays['destaque-programas'] as $k=>$d): ?>
                <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" /></a></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <?php endif; ?>
          <?php endif; ?>
 
          </div>
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
                  <a href="">Recadinhos</a>
                </div>
                
                <div class="palhacos">
                  <a href="/quintaldacultura">quintal da tv</a>
                </div>
                
              </div>
              
              <div class="voceSabiaBox">
                <h2>voc&ecirc; sabia?</h2>
                <h3><?php if(isset($displays["destaque-texto"])): ?><?php echo $displays["destaque-texto"][0]->getTitle() ?><?php endif; ?></h3>
                <p><?php if(isset($displays["destaque-texto"])): ?><?php echo $displays["destaque-texto"][0]->getDescription() ?><?php endif; ?></p>
              </div>
              <hr />
              
            </div>

          </div>
          <hr />
          
          <div class="rodape">
            
            <!-- 
            <div class="menu-rodape">
              <ul class="dropdown">
                <li><a class="prog" href="">Programas<span></span></a>
                  <ul>
                    <li><a href="">Quintal da Cultura</a></li>

                    <li><a href="">TV R&aacute; Tim Bum</a></li>
                    <li><a href="">Cocoric&oacute;</a></li>
                    <li><a href="">X-Tudo</a></li>
                  </ul>
                </li>
                <li><a class="sit" href="">Sites<span></span></a>

                  <ul class="sitBox">
                    <li><a href="">Vitrine</a></li>
                    <li><a href="">Zoom</a></li>
                    <li><a href="">Manos e Minas</a></li>
                    <li><a href="">X-Tudo</a></li>
                  </ul>
                </li>

                <li></li>
                <a class="right" href=""><span></span>Voltar</a>
              </ul>
            </div>  
            <hr />
            -->
            <div class="rodapeBox">
              
              <div class="rodape-topo">
                <h1>Para os Pais</h1>
                <ul>
                  <li><a class="rss" href="">rss</a></li>
                  <li><a class="facebook" href="">facebook</a></li>
                  <li><a class="twitter" href="">twitter</a></li>
                  <li><a class="youtube" href="">youtube</a></li>
                  <li><a class="flicker" href="">flicker</a></li>
                </ul>
              </div>
              
              <div class="conteudo-rodape">
                
                <div class="colunaUm">
                  <div class="wrapperColunaUma">
                <?php if(isset($displays["destaque-publicidade-1"])): ?>
                  <?php if(count($displays["destaque-publicidade-1"]) > 0): ?>
                    <?php echo html_entity_decode($displays["destaque-publicidade-1"][0]->getHtml()) ?>
                  <?php endif; ?>
                <?php endif; ?>
                  </div>
                </div>
                
                <div class="colunaDois">
              <?php if(isset($displays["destaque-noticias"])): ?>
                <?php if(count($displays["destaque-noticias"]) > 0): ?>
                  <h1>&Uacute;ltimas Not&iacute;cias</h1>
                  <!-- <a href="">Todas</a> -->
                  <div class="noticia boxNoticias">
                    <span class="borderTop"></span>
                    <hr />
                    <?php foreach($displays["destaque-noticias"] as $k=>$d): ?>
                    <div class="noticiaImg">
                      <h3 style="text-align:left;"><?php echo $d->getTitle() ?></h3>
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" style="width:64px;" />
                      <p style="width:210px; margin-top:5px;"><?php echo $d->getDescription() ?></p>
                    </div>
                    <hr />
                    <?php endforeach; ?>
                    <span class="borderBottom"></span>
                  </div>
                <?php endif; ?>
              <?php endif; ?>

                  <div class="faleConosco">
                    <a href="">fale conosco</a>
                  </div>
                </div>
                
                <div class="colunaTres">
                <?php if(isset($displays["destaque-publicidade-2"])): ?>
                  <?php if(count($displays["destaque-publicidade-2"]) > 0): ?>
                  <div class="merchan1">
                    <?php echo html_entity_decode($displays["destaque-publicidade-2"][0]->getHtml()) ?>
                  </div>
                  <hr />
                  <?php endif; ?>
                <?php endif; ?>
              
                <?php if(isset($displays["destaque-publicidade-3"])): ?>
                  <?php if(count($displays["destaque-publicidade-3"]) > 0): ?>
                  <div class="merchan2">
                    <?php echo html_entity_decode($displays["destaque-publicidade-3"][0]->getHtml()) ?>
                  </div>
                  <?php endif; ?>
                <?php endif; ?>
                </div>
                
              </div>
              <hr />
              
            </div>
            
          </div>

        </div>
        <div class="cerca"></div>
      </div>

    </div>

    <?php include_partial_from_folder('blocks', 'global/footer') ?>

      </div>

    </div>


    </body>
</html>