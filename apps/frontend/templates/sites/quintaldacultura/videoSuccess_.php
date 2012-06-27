<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
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
	var win = null;
		function NovaJanela(pagina,nome,w,h,scroll){
			LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
			TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
			settings = 'height=390px'+h+',width=680px'+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
			win = window.open(pagina,nome,settings);
		}
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
      ->andWhere('a.asset_type_id = 6')
      ->orderBy('a.id desc')
      ->execute();
  }
  else{
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, Site s')
      ->where('s.type = ? OR s.id=67', 'Programa Infantil')
      ->andWhere('a.site_id = s.id')
      ->andWhere('a.asset_type_id = 6')
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
            <div class="menuVoltar">
              <a href="/quintaldacultura" class="voltar"><span class="ico-voltar"></span><span class="tit">Quintal</span></a>
              <a href="/quintaldacultura/videos" class="voltarBig"><span class="ico-voltar"></span><span class="tit">Vídeos</span></a>
              <p><?php echo $asset->getTitle() ?></p>
            </div>
            <hr />
            <div class="jogosBox papel video1">
              <div class="videointerna">
                <object style="height:390px; width: 640px">
                  <param name="movie" value="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0<?php echo $asset->AssetVideo->retriveStartFromParameter(); ?>">
                  <param name="allowFullScreen" value="true">
                  <param name="allowScriptAccess" value="always">
                  <param name="wmode" value="opaque">
                  <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0<?php echo $asset->AssetVideo->retriveStartFromParameter(); ?>" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                </object>
              </div>
			 <a class="assitir" href="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>" onclick="NovaJanela(this.href,'nomeJanela','640','390','yes');return false">Assitir na janelinha</a>	
              <span class="palhaca"></span>
              <span class="palhaco"></span>
              <div class="boxDesenho">
                <ul class="dropdown">
                  <li class="">
                    <a href="" class=""><span class="esq"></span><span class="centro">Ou escolha pelo desenho</span><span class="dir"></span></a>
                    <ul class="carinha" style="visibility: hidden;">
                      <li><a href="/quintaldacultura/videos?s=7"><img src="/portal/maiscrianca/images/icones/123_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=10"><img src="/portal/maiscrianca/images/icones/albumnat_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=137"><img src="/portal/maiscrianca/images/icones/logo_arthur.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=143"><img src="/portal/maiscrianca/images/icones/bob-logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=99"><img src="/portal/maiscrianca/images/icones/brincadeiras-musicais_destaque_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=45"><img src="/portal/maiscrianca/images/icones/cacalivros_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=181"><img src="/portal/maiscrianca/images/icones/logo_carrapatos-e-catapultas.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=19"><img src="/portal/maiscrianca/images/icones/Castelo_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=142"><img src="/portal/maiscrianca/images/icones/logo_cyberchase.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=100"><img src="/portal/maiscrianca/images/icones/dora_logo1.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=132"><img src="/portal/maiscrianca/images/icones/logo_doug.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=46"><img src="/portal/maiscrianca/images/icones/ecotur_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=98"><img src="/portal/maiscrianca/images/icones/escola-para-cachorro_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=32"><img src="/portal/maiscrianca/images/icones/Glub_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=34"><img src="/portal/maiscrianca/images/icones/gravidez_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=34"><img src="/portal/maiscrianca/images/icones/ilha_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=38"><img src="/portal/maiscrianca/images/icones/kiara_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=138"><img src="/portal/maiscrianca/images/icones/logo_jackers.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=135"><img src="/portal/maiscrianca/images/icones/logo_miss-spider.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=136"><img src="/portal/maiscrianca/images/icones/logo_os7monstrinhos.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=41"><img src="/portal/maiscrianca/images/icones/MundodaLua_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=44"><img src="/portal/maiscrianca/images/icones/oqvouser_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=43"><img src="/portal/maiscrianca/images/icones/papel_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=124"><img src="/portal/maiscrianca/images/icones/logo_princesasdomar.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=121"><img src="/portal/maiscrianca/images/icones/logo_pingu.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=54"><img src="/portal/maiscrianca/images/icones/ratimbum_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=129"><img src="/portal/maiscrianca/images/icones/logo-superfofos.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=49"><img src="/portal/maiscrianca/images/icones/passeio_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=50"><img src="/portal/maiscrianca/images/icones/pequenos_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=105"><img src="/portal/maiscrianca/images/icones/sid_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=57"><img src="/portal/maiscrianca/images/icones/simao_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=55"><img src="/portal/maiscrianca/images/icones/djcao_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=59"><img src="/portal/maiscrianca/images/icones/tamanho_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=61"><img src="/portal/maiscrianca/images/icones/teatro_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=101"><img src="/portal/maiscrianca/images/icones/timmy_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=180"><img src="/portal/maiscrianca/images/icones/logo_tromba-trem.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=104"><img src="/portal/maiscrianca/images/icones/Toot_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=62"><img src="/portal/maiscrianca/images/icones/tracando-arte_logo.jpg" alt="" /></a></li>
                      <li><a href="/quintaldacultura/videos?s=64"><img src="/portal/maiscrianca/images/icones/vila-sesamo_logo.jpg" alt="" /></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="allpages">
            <div class="carrosselWrapper">
              <div class="categorias">
                <a class="mais" href="/quintaldacultura/videos"><span class="icoBtn"></span><span class="tit">V&iacute;deos</span></a>
                <p class="categoriaSelecionada"><?php if(isset($s)) echo $s->getTitle(); else echo "Todos";?></p>
              </div>
              <div class="carrossel">
                <ul>
                  <?php if($assets): ?>
                    <?php if(count($assets) > 0): ?>
                      <?php foreach($assets as $k=>$d): ?>
                        <li>
                          <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
                          <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 200px;" />
                          <?php endif; ?><span class="bottom"><span class="text2">assistir</span></span></a>
                        </li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
            <hr />
            <div class="boxDestaque inter">
              <div class="destaque jg">
                <span class="minhoca"></span>
                <h2><span class="ico-cross"></span><span class="tit">Atividades</span></h2>
                <div class="boxVideos">
                  <div class="videoThumbs">
                    <ul>
                      <?php
                      if(!isset($displays['destaque-jogos'])){
                        $block = Doctrine::getTable('Block')->findOneById(317);
                        if($block)
                          $jogos = $block->retriveDisplays();
                      }else
                          $jogos = $displays['destaque-jogos'];
                      ?>
                      <?php if(isset($jogos)): ?>
                        <?php if(count($jogos) > 0): ?>
                          <?php foreach($jogos as $k=>$d): ?>
                            <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                              <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      <?php endif; ?>
                    </ul>
                  </div>
                  <div class="videoBig">
                  <?php if(isset($jogos[0])): ?>
                    <?php if($jogos[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                      <a href="<?php echo $jogos[0]->retriveUrl() ?>"><img src="<?php echo $jogos[0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $jogos[0]->getTitle() ?>" style="width:310px" /></a>
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
          </div>
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