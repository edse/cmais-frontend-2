<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

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
    
    <link rel="stylesheet" href="/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="/portal/quintal/css/geralQuintal.css" type="text/css" />
    
    <!-- scripts -->
    <script type="text/javascript" src="/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/portal/js/portal.js"></script>

    <script src="/portal/quintal/js/jquery.carousel.js" type="text/javascript"></script>

    <script type="text/javascript">
      //carrocel
      $(function(){
		$('.btn-imagens').hide();
		$('.btn-imagens, .btn-video').click(function()
			{
				if ($(this).is('.btn-video'))
				{
					$(this).hide();
					$('.btn-imagens').show();
				}
				else
				{
					$(this).hide();
					$('.btn-video').show();
				}
			}
		);
		
        $('.carrossel').jcarousel({
        wrap: "both"      
        });
      })
      $(document).ready(function() {
        $('#my-carousel-1').carousel();
        $('#my-carousel-3').carousel({
          itemsPerPage: 3,
          itemsPerTransition: 3,
          easing: 'linear',
          noOfRows: 2
        })
      });
	  $(document).bind('ready', function(){
			var thumbnails = $('#my-carousel-3 ul li a img');
			thumbnails.live('click', function(){
			$('#my-carousel-1').data('carousel').itemIndex = thumbnails.index($(this));
			$('#my-carousel-1').data('carousel').animate();
			return false;
		});
	 });
    </script>
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

  <div class="allWrapper">

  <?php
  // section assets
  if(isset($s)){
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a')
      ->where('a.site_id = ?', (int)$s->getId())
      ->andWhere('a.asset_type_id = 3')
      ->orderBy('a.id desc')
      ->execute();
  }
  else{
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, Site s')
      ->where('s.type = ? OR s.id=67', 'Programa Infantil')
      ->andWhere('a.site_id = s.id')
      ->andWhere('a.asset_type_id = 3')
      ->orderBy('a.id desc')
      ->execute();
  }
  if(!isset($asset)){
    $asset = $assets[0];
  }
  ?>

  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

      <div class="contentWrapper" align="center">

      <div class="content">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
        <hr />

        <div class="conteudo">

          <div class="conteudoWrapper">
          <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
            <div class="menuVoltar">
              <a class="voltar" href="/quintaldacultura"><span class="ico-voltar"></span><span class="tit">Quintal</span></a>
              <a class="voltarBig" href="/sid/turminha-do-sid"><span class="ico-voltar"></span><span class="tit">Imagens</span></a>
              <p><?php echo $asset->getTitle() ?></p>
            </div>
            <hr />
            <div class="atividadesBox inter igm imagensInter">

              <div class="imagensTxt" id="textS" style="display: none">
                <div class="imagensTxtWrapper">
                  <h2><?php echo $asset->AssetImageGallery->getHeadline() ?></h2>
                  <!-- <h3>Argentina, Itália e Brasil</h3> -->
                  <p><?php echo $asset->AssetImageGallery->getText() ?></p>
                </div>
              </div>

              <div id="my-carousel-1" class="carousel module">
                <ul>
                  <?php 
                  $images = $asset->retriveRelatedAssetsByAssetTypeId(2);
                  if((count($images)<=0)&&($asset->AssetType->getSlug()=="image"))
                    $images = array($asset);
                  ?>
                  <?php if(count($images)>0): ?>
                    <?php foreach($images as $d): ?>
                      <li><img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" /></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="btn-change">
                <?php $video = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                <?php if(count($video)>0): ?>
                  <a class="btn-video" href="javascript:;" onclick="$('#videoS').fadeIn();$('#imageS').fadeOut();"><span>ver v&iacute;deo</span></a><!--quando este aparece, o carrocel de imagens aparece também-->
                <?php endif; ?>
                <a class="btn-imagens" href="javascript:;" onclick="$('#videoS').fadeOut();$('#imageS').fadeIn();$('#my-carousel-1').fadeIn();$('#textS').fadeOut();"><span>ver imagens</span></a><!--quando este aparece, o vídeo aparece também-->
              </div>
              <div class="videoIntrucao" id="imageS">
                <div class="wrapperImg">
                  <div id="my-carousel-3" class="carousel2 module">
                    <ul>
                  <?php if(count($images)>0): ?>
                    <?php foreach($images as $d): ?>
                      <li><a href=""><img src="<?php echo $d->retriveImageUrlByImageUsage('image-1') ?>" alt="<?php echo $d->getTitle() ?>" /></a></li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="videoIntrucao" id="videoS" style="display: none">
                <?php if(count($video)>0): ?>
                <div class="videoWrapperSmall">
                  <object style="height:310px; width: 186px">
                    <param name="movie" value="http://www.youtube.com/v/<?php echo $video[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0">
                    <param name="allowFullScreen" value="true">
                    <param name="allowScriptAccess" value="always">
                    <param name="wmode" value="opaque">
                    <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $video[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="310" height="186"></embed>
                  </object>
                </div>
                <?php endif; ?>
              </div>
            <?php if(($asset->AssetType->getSlug() == "image-gallery") && ($asset->AssetImageGallery->getHeadline() != "")): ?>
              <a href="javascript:;" onclick="$('#my-carousel-1').fadeOut();$('#textS').fadeIn();"><span class="conheca">Conheça Mais</span></a>
            <?php endif; ?>
            <!--<span class="palhaca"></span>
            <span class="palhaco"></span>-->
          </div>
        </div>
        
        <div class="allpages">
          <div class="carrossel activo">
            <ul>
            <?php if($assets): ?>
              <?php if(count($assets) > 0): ?>
                <?php foreach($assets as $k=>$d): ?>
                  <li>
                    <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
                    <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 200px;" />
                    <?php endif; ?><span class="bottom"><span class="text2">ver</span></span></a>
                  </li>
                <?php endforeach; ?>
              <?php endif; ?>
            <?php endif; ?>
            </ul>
          </div>
          <hr />
          
          <!--div class="boxDestaque pagImag">
            <div class="destaque jg">
              <span class="minhoca"></span>
              <h2><span class="ico-cross"></span><span class="tit">Artes</span></h2>
              <div class="boxVideos">
                <div class="videoThumbs">
                  <ul>
                  <?php
                  if(!isset($displays['destaque-artes'])){
                    $block = Doctrine::getTable('Block')->findOneById(325);
                    if($block)
                      $artes = $block->retriveDisplays();
                  }else
                      $artes = $displays['destaque-artes'];
                  ?>
                  <?php if(isset($artes)): ?>
                    <?php if(count($artes) > 0): ?>
                      <?php foreach($artes as $k=>$d): ?>
                        <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                          <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  </ul>
                </div>

                <div class="videoBig">
                <?php if(isset($artes[0])): ?>
                  <?php if($artes[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                    <a href="<?php echo $artes[0]->retriveUrl() ?>"><img src="<?php echo $artes[0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $artes[0]->getTitle() ?>" style="width:310px" /></a>
                  <?php endif; ?>
                <?php endif; ?>
                </div>
              
              </div>
            </div>

                <?php
                if(!isset($curiosidades)){
                  $block = Doctrine::getTable('Block')->findOneById(332);
                  if($block)
                    $curiosidades = $block->retriveDisplays();
                }
                ?>
                <?php if(isset($curiosidades[0])): ?>
                <div class="curiosidades">
                  <p><?php echo $curiosidades[0]->getDescription() ?></p>
                  <h3><?php echo $curiosidades[0]->getTitle() ?></h3>
                </div>
                <?php endif; ?>

            <hr />
          
          </div-->
          <!--QUINTAL NOVOS JOGUINHOS DO PEIXONAUTA-->
          <?php  include_partial_from_folder('sites/quintaldacultura', 'global/novos-joguinhos-peixonauta') ?>
          <!--/QUINTAL NOVOS JOGUINHOS DO PEIXONAUTA-->
        
        </div>
      </div>
      <hr />
    </div>

    <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?>

  </div>
  <?php include_partial_from_folder('blocks', 'global/footer') ?>
  
</div>

<div id="miolo"></div>
<div class="box-lateral"></div>

<script type='text/javascript'>
var _sf_async_config={};
/** CONFIGURATION START **/
_sf_async_config.uid = 30538;
_sf_async_config.domain = 'cmais.com.br';
_sf_async_config.sections = '<?php echo $site->getTitle()?> - <?php $asset->getTitle()?>';  //CHANGE THIS
_sf_async_config.authors = 'cmais+';    //CHANGE THIS
/** CONFIGURATION END **/
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (('https:' == document.location.protocol) ? 'https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/' : 'http://static.chartbeat.com/') +
       'js/chartbeat.js');
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();
</script>


</body>
</html>