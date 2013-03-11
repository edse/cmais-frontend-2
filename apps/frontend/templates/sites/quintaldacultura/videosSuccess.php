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
    <style>
    .rodape.rodVid {*margin-top: -10px !important;}
    .allWrapper #rodape-portal{margin-top: 53px !important;*margin-top: 88px !important;}
  </style>
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
   <link rel="stylesheet" href="/portal/quintal/css/videosQuintal.css" type="text/css" />
  <div class="allWrapper">

  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

      <div class="contentWrapper" align="center">


      <div class="content videos">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
        <hr />

        <div class="conteudo">

          <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
            <div class="menuVoltar">
                <a class="voltar" href="/quintaldacultura"><span class="ico-voltar"></span><span class="tit">Quintal</span></a>
            </div>
            <hr />

            <div class="videosBox">
              <span class="palhaco"></span>
                <div class="rodaGigante">
                  <a class="todosVideos" href="/quintaldacultura/videos/todos" title="Todos os vídeos"><span>Todos os V&iacute;deos</span></a>
                  <a class="musicasquintal" href="/quintaldacultura/videos/musicas-do-quintal" title="Músicas da Quintal">Músicas do Quintal</a>
                  <a class="historiadesenhada" href="/quintaldacultura/videos/historia-desenhada" title="História Desenhada">História Desenhada</a>
                  <a class="momentofabuloso" href="/quintaldacultura/videos/momento-fabuloso" title="Momento Fabuloso">Momento Fabuloso</a>
                  <a class="historiapraboi" href="/quintaldacultura/videos/historias-pra-boi-nao-dormir" title="Histórias pra boi não dormir">Histórias pra Boi não dormir</a>
                  <a class="quintaldascriancas" href="/quintaldacultura/videos/quintal-das-criancas" title="Quintal das crianças">Quintal das crianças</a>

                    
                </div>
                <span class="palhaca"></span>
            </div>


                      </div>
                        <div class="allpages">
                          
                          <!--div class="carrossel activo">
                          <?php
                          // section assets
                          $assets = Doctrine_Query::create()
                            ->select('a.*')
                            ->from('Asset a, Site s')
                            ->where('s.type = ? OR s.id=67', 'Programa Infantil')
                            ->andWhere('a.site_id = s.id')
                            ->andWhere('a.asset_type_id = 6')
                            ->andWhere('a.is_active = 1')
                            ->orderBy('a.id desc')
                            ->execute();
                          ?>
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
                            <hr />
                            <div class="boxDestaque" align="center">
                              <div class="destaque jg">
                                  <span class="minhoca"></span>
                                    <h2><span class="ico-cross"></span><span class="tit">Jogos</span></h2>

                                    <div class="boxVideos">
                                      <div class="videoThumbs">
                                        <ul>
                                          <?php if(isset($displays['destaque-jogos'])): ?>
                                            <?php if(count($displays['destaque-jogos']) > 0): ?>
                                              <?php foreach($displays['destaque-jogos'] as $k=>$d): ?>
                                                <?php if(($d->retriveImageUrlByImageUsage("image-1") != "")&&($k>0)): ?>
                                                  <li><a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width:90px" /></a></li>
                                                <?php endif; ?>
                                              <?php endforeach; ?>
                                            <?php endif; ?>
                                          <?php endif; ?>
                                        </ul>
                                        </div>
                                        <div class="videoBig">
                                        <?php if(isset($displays['destaque-jogos'][0])): ?>
                                          <?php if($displays['destaque-jogos'][0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                                            <a href="<?php echo $displays['destaque-jogos'][0]->retriveUrl() ?>"><img src="<?php echo $displays['destaque-jogos'][0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $displays['destaque-jogos'][0]->getTitle() ?>" style="width:310px" /></a>
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


  
</body>
</html>