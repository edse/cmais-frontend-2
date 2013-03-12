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
      })
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
	  $(document).ready(function(){
			$("#jquery_jplayer_1").jPlayer({
				ready: function () {
					$(this).jPlayer("setMedia", {
						m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
						oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
					}).jPlayer("pause");
				},
				ended: function (event) {
					$(this).jPlayer("play");
				},
				swfPath: "js",
				supplied: "m4a, oga"
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
    <body>
        <div class="allWrapper">
          
  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

  <?php
  // section assets
  if(!$section){
    if(count($assets)<=0){
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->whereIn('sa.section_id', array(97, 765, 764, 763, 762))
        ->andWhere('sa.asset_id = a.id')
        ->orderBy('a.id desc')
        ->execute();
    }
  }else{
    if(isset($pager))
      $assets = $pager->getResults();
    if(count($assets)<=0){
      if($section->id != 766){
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->Where('sa.section_id = ?', $section->id)
          ->andWhere('sa.asset_id = a.id')
          ->orderBy('a.id desc')
          ->execute();
      }
      else{
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->whereIn('sa.section_id', array(97, 765, 764, 763, 762))
          ->andWhere('sa.asset_id = a.id')
          ->orderBy('a.id desc')
          ->execute();
      }
    }
  }
  if(!isset($asset))
    $asset = $assets[0];
  ?>

      <div class="contentWrapper" align="center">
        <div class="content">
          
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
          <hr />
          <div class="conteudo">

            <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
                          

            <div class="menuVoltar">
              <a class="voltar" href="/quintaldacultura"><span class="ico-voltar"></span><span class="tit">Quintal</span></a>
              <a class="voltarBig" href="/quintaldacultura/baixar"><span class="ico-voltar"></span><span class="tit">Baixar</span></a>
              <p><?php echo $asset->getTitle() ?></p>
            </div>
            <hr />
                            <div class="jogosBox papel">
                              

                      <?php if($section->getSlug() == "carinhas"):?>
                        <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
                        <div class="baixar-carinha">
                          <div class="baixar-carinhaWrapper">
                            <?php if(count($download) > 0): ?>
                            <ul>
                              <?php foreach($download as $k=>$d): ?>
                                <li><a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><img alt="" src="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>"></a></li>
                              <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                          </div>  
                        </div>
                        <span class="baixarCarinha">clique para baixar carinhas!</span>
                        <!--span class="palhaca"></span-->
                      <?php elseif($section->getSlug() == "papel-de-parede"):?>
                        <div class="papelParede">
                          <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
                          <?php if(count($preview) > 0): ?>
                            <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $preview[0]->getTitle() ?>" />
                          <?php endif; ?>
                        </div>
                        <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
                        <?php if(count($download) > 0): ?>
                        <div class="tamanhoWallpaper">
                          <?php foreach($download as $k=>$d): ?>
                            <?php if($k==0):?>
                              <a class="tamanhoA" href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><span>1280 X 1024</span></a>
                            <?php elseif($k==1):?>
                              <a class="tamanhoB" href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><span>1024 X 768</span></a>
                            <?php elseif($k==2):?>
                              <a class="tamanhoC" href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><span>800 X 600</span></a>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endif; ?>
                        </div>
                      <?php else:?>
                        <div class="papelParede">
                          <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
                          
                          <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
                          <?php if(count($preview) > 0): ?>
                            
                            <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $download[0]->AssetImage->getOriginalFile() ?>" target="_blank">
                            <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $preview[0]->getTitle() ?>" />
                            </a>
                          <?php endif; ?>
                        </div>
                        <!-- /////////////////se falhar usar isto
                        <?php if(count($download) > 0): ?>
                          <?php if($download[0]->AssetType->getSlug() == "image"): ?>
                            
                          <?php elseif($download[0]->AssetType->getSlug() == "file"): ?>
                            <a href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" target="_blank">
                          <?php endif; ?>
                          
                        <?php endif; ?>
                        -->
                        <span class="baixarPapelParede">clique para baixar</span>
                      <?php endif;?>

						
								
								<span class="palhaco"></span>
                                
                            </div>
                      </div>
                        <div class="allpages">
                          <div class="carrosselWrapper">
                              <div class="categorias">
                                  <a class="mais" href="/quintaldacultura/baixar"><span class="icoBtn"></span><span class="tit">Baixar</span></a>
                                  <p class="categoriaSelecionada"><?php if($section) echo $section->getTitle(); else echo "Tudo";?></p>
                                </div>
                                <div class="carrossel">
                                  <ul>
                                  <?php if($assets): ?>
                                    <?php if(count($assets) > 0): ?>
                                      <?php foreach($assets as $k=>$d): ?>
                                        <li>
                                          <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
                                          <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                                            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 200px;" />
                                          <?php endif; ?><span class="bottom"><span class="text2">ver</span></span></a>
                                        </li>
                                      <?php endforeach; ?>
                                    <?php endif; ?>
                                  <?php endif; ?>
                                  </ul>
                                </div>
                            </div>

                            <hr />
                            <!--div class="boxDestaque inter">
                              <div class="destaque jg">

                                  <span class="minhoca"></span>
                                    <h2><span class="ico-cross"></span><span class="tit">Atividades</span></h2>
                                    <div class="boxVideos">
                                      <div class="videoThumbs">
                                          <ul>
                                          <?php
                                          if(!isset($atividades)){
                                            $block = Doctrine::getTable('Block')->findOneById(328);
                                            if($block)
                                              $atividades = $block->retriveDisplays();
                                          }
                                          ?>
                                          <?php if(isset($atividades)): ?>
                                            <?php if(count($atividades) > 0): ?>
                                              <?php foreach($atividades as $k=>$d): ?>
                                                <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                                                  <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>
                                          <?php endif; ?>
                                            </ul>
                                        </div>
                                        <div class="videoBig">
                                        <?php if(isset($atividades[0])): ?>
                                          <?php if($atividades[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                                            <a href="<?php echo $atividades[0]->retriveUrl() ?>"><img src="<?php echo $atividades[0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $atividades[0]->getTitle() ?>" style="width:310px" /></a>
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