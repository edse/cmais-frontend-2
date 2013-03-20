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

            <div class="jogosBox">
              <!--<span class="palhaca"></span>-->
              <span class="ludovico"></span>
                <div class="rodaGigante">
                  <a class="todosJogos" href="/quintaldacultura/jogos/todos"><span>Todos os jogos</span></a>
                  <a class="vila" href="http://cmais.com.br/vilasesamo/jogos/index.html"><span>Vila Sesamo</span></a>
                  <a class="desafio" href="/quintaldacultura/jogos/desafio"><span>Desafio</span></a>
                  <a class="habilidade" href="/quintaldacultura/jogos/habilidade"><span>Habilidade</span></a>
                  <a class="aventura" href="/quintaldacultura/jogos/aventura"><span>Aventura</span></a>
                  <a class="educativo" href="/quintaldacultura/jogos/gui-e-estopa"><span>Gui e Estopa <span></a>
                  <a class="esporte" href="/quintaldacultura/jogos/esportes"><span>Esportes</span></a>
                  <a class="peixonauta" href="/quintaldacultura/jogos/joguinhosdopeixonauta"><span>Peixonauta</span></a>
                </div>
              <!--<span class="palhaco"></span>-->
            </div>
            
            
          </div>

          <div class="allpages">

            <?php
            $assets = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa')
              ->whereIn('sa.section_id',  array(92, 98, 99, 100, 101))
              ->andWhere('sa.asset_id = a.id')
              ->orderBy('a.id desc')
              ->execute();
            ?>

            <div class="carrossel activo">
              <ul>
                <?php if($assets): ?>
                  <?php if(count($assets) > 0): ?>
                    <?php foreach($assets as $k=>$d): ?>
                      <li>
                        <a href="<?php echo $d->retriveUrl() ?>"><span class="top"><span class="text1"><?php echo $d->getTitle() ?></span></span></span>
                        <?php if($d->retriveImageUrlByImageUsage("image-2-b") != ""): ?>
                          <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 200px;" />
                        <?php endif; ?><span class="bottom"><span class="text2">brincar</span></span></a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php endif; ?>
              </ul>
            </div>
            
            <!--QUINTAL PERGUNTE FILOMENA-->
            <?php /*include_partial_from_folder('sites/quintaldacultura', 'global/perg-filomena') */ ?>
            <!--/QUINTAL PERGUNTE-->
            <hr />
            <!--div class="boxDestaque">
              <div class="destaque jg">
                <span class="minhoca"></span>
                  <h2><span class="ico-cross"></span><span class="tit">Atividades</span></h2>
                  <div class="boxVideos">
                    <div class="videoThumbs">
                      <ul>
                      <?php if(isset($displays['destaque-atividades'])): ?>
                        <?php if(count($displays['destaque-atividades']) > 0): ?>
                          <?php foreach($displays['destaque-atividades'] as $k=>$d): ?>
                            <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                              <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      <?php endif; ?>
                      </ul>
                    </div>
                    <div class="videoBig">
                    <?php if(isset($displays['destaque-atividades'][0])): ?>
                      <?php if($displays['destaque-atividades'][0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                        <a href="<?php echo $displays['destaque-atividades'][0]->retriveUrl() ?>"><img src="<?php echo $displays['destaque-atividades'][0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $displays['destaque-atividades'][0]->getTitle() ?>" style="width:310px" /></a>
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