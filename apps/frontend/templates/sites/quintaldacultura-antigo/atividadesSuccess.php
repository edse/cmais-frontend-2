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

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />

    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />

    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>

    <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
        wrap: "both"
      });
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

            <div class="atividadesBox">
              
              <div class="rodaGigante">
                <a class="todosJogos ativit" href="/quintaldacultura/atividades/todas"><span>Todas as atividades</span></a>
                <a class="experiencias" href="/quintaldacultura/atividades/experiencia"><span>Experi&ecirc;ncia</span></a>
                <a class="colorir" href="/quintaldacultura/atividades/para-colorir"><span>Colorir</span></a>
                <a class="artes" href="/quintaldacultura/atividades/artes"><span>Artes</span></a>
                <a class="brincadeiras" href="/quintaldacultura/atividades/brincadeiras"><span>Brincadeiras do Quintal</span></a>
                <a class="receitinhas" href="/quintaldacultura/atividades/receitas"><span>receitinhas</span></a>
              </div>
              <!--
              <span class="palhaca"></span>
              <span class="palhaco"></span>
              -->
              <span class="palhaco-osorio"></span>
            </div>

          </div>
          
                        <?php
                          $assets = Doctrine_Query::create()
                            ->select('a.id')
                            ->from('Asset a, SectionAsset sa')
                            ->whereIn('sa.section_id', array(94, 103, 106, 104, 105, 107, 127))
                            ->andWhere('sa.asset_id = a.id')
                            ->andWhere('a.is_active = ?', 1)
                            ->orderby('a.id desc')
                            ->limit(60)
                            ->execute();
                        ?>
                        <div class="allpages">
                          <div class="carrossel activ">
                            <ul>
                              <?php if($assets): ?>
                                <?php if(count($assets) > 0): ?>
                                  <?php foreach($assets as $k=>$d): ?>
                                    <li>
                                      <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
                                      <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 200px;" />
                                      <?php endif; ?><span class="bottom"><span class="text2">fazer</span></span></a>
                                    </li>
                                  <?php endforeach; ?>
                                <?php endif; ?>
                              <?php endif; ?>
                            </ul>
                            </div>
                            <hr />
                            <!--div class="boxDestaque activ">

                              <div class="destaque jg">
                                  <span class="minhoca"></span>

                                    <h2><span class="ico-cross"></span><span class="tit">Fotos</span></h2>
                                    <div class="boxVideos">
                                      <div class="videoThumbs">
                                        <ul>
                                        <?php
                                        if(!isset($fotos)){
                                          $block = Doctrine::getTable('Block')->findOneById(321);
                                          if($block)
                                            $fotos = $block->retriveDisplays();
                                        }
                                        ?>
                                        <?php if(isset($fotos)): ?>
                                          <?php if(count($fotos) > 0): ?>
                                            <?php foreach($fotos as $k=>$d): ?>
                                              <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                                                <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                          <?php endif; ?>
                                        <?php endif; ?>
                                        </ul>
                                      </div>

                                      <div class="videoBig">
                                      <?php if(isset($fotos[0])): ?>
                                        <?php if($fotos[0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                                          <a href="<?php echo $fotos[0]->retriveUrl() ?>"><img src="<?php echo $fotos[0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $fotos[0]->getTitle() ?>" style="width:310px" /></a>
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