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
    <link rel="stylesheet" href="/portal/quintal/css/videosQuintal.css" type="text/css" />
        
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
  <style>
    .rodape.rodVid {margin-top: -317px !important;*margin-top: -297px !important;}
    .allWrapper #rodape-portal{margin-top: 53px !important;*margin-top: -21px !important;}
  </style>
  </style> 
  <body>

  <div class="allWrapper">
  	
	<?php
  // section assets
  if(isset($s)){
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, AssetVideo av')
      ->where('sa.section_id = ?', (int)$s->getId())
      ->andWhere('sa.asset_id = a.id')
      ->andWhere('av.asset_id = a.id')
      ->andWhere('a.is_active = ?', 1)
      ->andWhere('av.youtube_id IS NOT NULL')
      ->orderBy('a.id desc')
      ->limit(160)
      ->execute();
    /*
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a')
      ->where('a.site_id = ?', (int)$s->getId())
      ->andWhere('a.asset_type_id = 6')
      ->orderBy('a.id desc')
      ->execute();
    */
  }
  else{
  	if (isset($section)) {
	  	if ($section->getSlug() != 'todos') {
	  	  
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, AssetVideo av')
          ->where('sa.section_id = ?', 93)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('av.youtube_id != ""')
          ->orderBy('a.id desc')
          ->limit(160)
          ->execute();

         /*
		    $assets = Doctrine_Query::create()
		      ->select('a.*')
		      ->from('Asset a, Site s')
		      ->where('s.type = ? OR s.id=67', 'Programa Infantil')
		      ->andWhere('a.site_id = s.id')
		      ->andWhere('a.asset_type_id = 6')
		      ->orderBy('a.id desc')
		      ->limit(80)
		      ->execute();
         */
			} else {
			  
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, AssetVideo av')
          ->where('sa.section_id = ?', 93)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('av.youtube_id != ""')
          ->orderBy('a.id desc')
          ->limit(160)
          ->execute();
          
        /*
		    $assets = Doctrine_Query::create()
		      ->select('a.*')
		      ->from('Asset a, Site s')
		      ->where('s.type = ? OR s.id=67', 'Programa Infantil')
		      ->andWhere('a.site_id = s.id')
		      ->andWhere('a.asset_type_id = 6')
		      ->orderBy('a.id desc')
		      ->limit(80)
		      ->execute();
        */
			}
		}
		else {
		  /*
	    $assets = Doctrine_Query::create()
	      ->select('a.*')
	      ->from('Asset a, Site s')
	      ->where('s.type = ? OR s.id=67', 'Programa Infantil')
	      ->andWhere('a.site_id = s.id')
	      ->andWhere('a.asset_type_id = 6')
	      ->orderBy('a.id desc')
	      ->limit(80)
	      ->execute();
      */
   
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa, AssetVideo av')
        ->where('sa.section_id = ?', 93)
        ->andWhere('sa.asset_id = a.id')
        ->andWhere('av.asset_id = a.id')
        ->andWhere('a.is_active = ?', 1)
        ->andWhere('av.youtube_id != ""')
        ->orderBy('a.id desc')
        ->limit(160)
        ->execute();
   
		}
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
              <a href="/quintaldacultura" class="voltar"><span class="ico-voltar"></span><span class="tit">Quintal</span></a>
              <a href="/quintaldacultura/videos/todos" class="voltarBig"><span class="ico-voltar"></span><span class="tit">Vídeos</span></a>
              <p><?php echo $asset->getTitle() ?></p>
            </div>
            <hr />
            <div class="jogosBox papel video1">
              <div class="videointerna">
                <iframe width="640" height="390" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
                <?php /*
                <object style="height:390px; width: 640px">
                  <param name="movie" value="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0<?php echo $asset->AssetVideo->retriveStartFromParameter(); ?>">
                  <param name="allowFullScreen" value="true">
                  <param name="allowScriptAccess" value="always">
                  <param name="wmode" value="opaque">
                  <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0<?php echo $asset->AssetVideo->retriveStartFromParameter(); ?>" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                </object>
                */ ?>
              </div>
			        <!--
              <a class="assitir" href="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>" onclick="NovaJanela(this.href,'nomeJanela','640','390','yes');return false">Assitir na janelinha</a>
              <span class="palhaca"></span>
              <span class="palhaco"></span>
              --> 
              <img class="palhacoVideo" src="/portal/quintal/images/img-teobaldo.png" border="0" />
              <!--<map name="Map" id="Map">
                <area shape="poly" title="Conheça nosso canal no Youtube" target="_blank" href="http://www.youtube.com/user/quintaldacultura/videos" coords="169,501,116,494,133,265,106,263,96,248,64,236,18,238,10,152,116,143,129,98,114,74,154,13,209,25,230,79,212,119,261,133,363,9,386,22,341,100,318,188,287,187,269,210,255,217,324,353,339,456,357,497,354,522,170,541,165,529" href="#" />
              </map>-->
              <!--div class="boxDesenho">
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
              </div-->
            </div>
          </div>
          
          <div class="allpages">
            <div class="categorias">
                <a class="mais" href="/quintaldacultura/videos/todos"><span class="icoBtn"></span><span class="tit">V&iacute;deos</span></a>
                <!--p class="categoriaSelecionada"><?php //echo $section->getTitle() ?></p-->
            </div>
            <div class="carrosselWrapper">
            
            <div class="tampa"></div> 
              <div class="carrossel">
                <ul>
                  <?php if($assets): ?>
                    <?php 
                    $contador=0;
                    $medida  = 0;
                    $qtdLeft = 220;
                    
                    $total	 = count($assets);
                    if($total%2 != 0) $total++;
                    $total = round($total/6);

                    ?> 
                    <script>
                    	$(document).ready(function(){
                    		
                    		total = <?php echo $total ?>;
                    		
                    		
                    		$('.jcarousel-prev').hide();
                    		$('.tampa').hide();
                    		
                    		var cont = -1;
                    		
                    		$('.jcarousel-next').click(function(){
                    			cont++;
                    			$('.tampa').show().delay(1000).fadeOut(200);
                    			
                    			if(cont>-1){
                    				$('.jcarousel-prev').fadeIn('slow');
                    			}
                    			
                    			if(cont== total){
                    				$('.jcarousel-next').fadeOut('slow');
                    				cont== total;
                    			}
                    			
                    		});
                    		
                    		$('.jcarousel-prev').click(function(){
                    			cont--;
                    			$('.tampa').show().delay(1000).fadeOut(200);
                    			
                    			if(cont<total){
                    				$('.jcarousel-next').fadeIn('slow');
                    			}
                    			if(cont== -1){
                    				$('.jcarousel-prev').fadeOut('slow');
                    				cont= -1;
                    			}
                    		});
                    		
                    	})
                    </script>
                    <?php if(count($assets) > 0): ?>
                      <?php foreach($assets as $k=>$d): ?>
                        <li class="<?php if(($k > 0) && ($k % 2 != 0)){ echo "topo";}else{ echo "embaixo";}?>" style="left:<?php if($contador <2){echo "0";}else{echo $medida;} ?>px" >
						              <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
						                <?php echo $d->getThumbnail() ?>
                          <span class="bottom"><span class="text2">assistir</span></span></a>
                        </li>
						<?php
						$contador++;
						if($contador%2==0){
                          
                          $medida = $medida + $qtdLeft;
                        }
						?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
            <hr />
            
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