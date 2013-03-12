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

    <script type="text/javascript" src="/portal/quintal/js/jPlayer/js/jquery.jplayer.min.js"></script>

    <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
        wrap: "both"
      });
      $("ul.dropdown li").hover(function(){
          $(this).addClass("hover");
          $('ul:first', this).css('visibility','visible');
      },
      function(){
          $(this).removeClass("hover");
          $('ul:first',this).css('visibility', 'hidden');
      });
      $("ul.dropdown li ul li:has(ul)").find("a:first").append("  ");
    })
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
            </div>
            <hr />

              <div class="videosBox imagensBox">
                <span class="palhaco"></span>
                  <div class="rodaGigante">
                    <a class="todosVideos" href="/quintaldacultura/imagens/todas"><span>Todas as Imagens</span></a>
                      <div class="boxVideo">

                        <ul class="dropdown">
                          <li><a href=""><span class="esq"></span><span class="centro">Ou escolha pelo desenho</span><span class="dir"></span></a>
                            <ul class="carinha" style="visibility: visible;">
							    <li><a href="/quintaldacultura/imagens?s=7"><img src="/portal/maiscrianca/images/icones/123_logo.jpg" alt="" /></a></li>
							    <li><a href="/quintaldacultura/imagens?s=10"><img src="/portal/maiscrianca/images/icones/albumnat_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=45"><img src="/portal/maiscrianca/images/icones/cacalivros_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=19"><img src="/portal/maiscrianca/images/icones/Castelo_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=46"><img src="/portal/maiscrianca/images/icones/ecotur_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=98"><img src="/portal/maiscrianca/images/icones/escola-para-cachorro_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=32"><img src="/portal/maiscrianca/images/icones/Glub_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=34"><img src="/portal/maiscrianca/images/icones/gravidez_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=34"><img src="/portal/maiscrianca/images/icones/ilha_logo.jpg" alt="" /></a></li>
							    <li><a href="/quintaldacultura/imagens?s=38"><img src="/portal/maiscrianca/images/icones/kiara_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=44"><img src="/portal/maiscrianca/images/icones/oqvouser_logo.jpg" alt="" /></a></li>
	                            <li><a href="/quintaldacultura/imagens?s=43"><img src="/portal/maiscrianca/images/icones/papel_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=49"><img src="/portal/maiscrianca/images/icones/passeio_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=50"><img src="/portal/maiscrianca/images/icones/pequenos_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=105"><img src="/portal/maiscrianca/images/icones/sid_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=57"><img src="/portal/maiscrianca/images/icones/simao_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=55"><img src="/portal/maiscrianca/images/icones/djcao_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=101"><img src="/portal/maiscrianca/images/icones/timmy_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=104"><img src="/portal/maiscrianca/images/icones/Toot_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=62"><img src="/portal/maiscrianca/images/icones/tracando-arte_logo.jpg" alt="" /></a></li>
      							<li><a href="/quintaldacultura/imagens?s=64"><img src="/portal/maiscrianca/images/icones/vila-sesamo_logo.jpg" alt="" /></a></li>
                            </ul>                                                                                                                                      
                          </li>
                        </ul>

                      </div>
                    </div>
                    <span class="palhaca"></span>
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
                                          <?php if(isset($displays['destaque-artes'])): ?>
                                            <?php if(count($displays['destaque-artes']) > 0): ?>
                                              <?php foreach($displays['destaque-artes'] as $k=>$d): ?>
                                                <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                                                  <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>
                                          <?php endif; ?>
                                          </ul>
                                        </div>

                                        <div class="videoBig">
                                        <?php if(isset($displays['destaque-artes'][0])): ?>
                                          <?php if($displays['destaque-artes'][0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                                            <a href="<?php echo $displays['destaque-artes'][0]->retriveUrl() ?>"><img src="<?php echo $displays['destaque-artes'][0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $displays['destaque-artes'][0]->getTitle() ?>" style="width:310px" /></a>
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
                            <!--DESTAQUE JOGUINHOS -->
                            <?php include_partial_from_folder('sites/quintaldacultura', 'global/destaque-joguinhos') ?>
                            <!--DESTAQUE JOGUINHOS -->
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
  

  
</body>
</html>