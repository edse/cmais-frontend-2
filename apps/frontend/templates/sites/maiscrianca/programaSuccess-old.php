<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $site->getTitle() ?> - +crian&ccedil;a - cmais+ O portal de conteúdo da Cultura</title>
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
      wrap: "both"
      });
    })
    //carrossel-personagem
    $(function(){
      $('.carrossel-personagem').jcarousel({
      wrap: "both",
      scroll: 1   
      });
    })
    // Datepicker
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
        $("#na-web").hide();
        $("#na-tv").show();
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
            <div class="voce-sabia">
              <div class="topo">

                <a href="/maiscrianca"><span></span>Home</a><hr />
                <p class="breadcrumb">Mais Crian&ccedil;a &gt;&gt; <span>Na TV</span> &gt;&gt; <span><?php echo $site->getTitle() ?></span></p>
              </div>
              <div class="conteudo-wrapper programa">
                <div class="conteudoVoce-sabia">

                  <div class="conteudoVoce-sabiaWrapper">
                    <div class="pagTit">
                      <a href=""><h1>Na TV</h1></a>
                    </div>
                    <a class="programacao" href="http://cmais.com.br/grade"><span>Veja a programa&ccedil;&atilde;o completa</span></a>
                    <hr />
                    <div class="conteudoInterno">

                      <h1><?php echo $site->getTitle() ?></h1>
                      <hr />
                      <div class="infos">
                        <!--<div class="compartilhar">
                          <a class="fontUp" href="">A+</a>
                          <a class="fontDown" href="">A-</a>
                          <p><span>Compartilhar</span></p>

                          <a class="impressora" href="">Imprime</a>
                          <a class="email">E-mail</a>
                        </div>-->
                      </div>
                      <div class="todoConteudo">
                        <?php if(isset($character)): ?>
                          <h2><?php echo $character->getTitle() ?></h2>
                          <?php if($character->retriveImageUrlByImageUsage("image-3") != ""): ?>
                            <img src="<?php echo $character->retriveImageUrlByImageUsage("image-6-b") ?>" alt="<?php echo $character->getTitle() ?>" />
                          <?php endif; ?>
                          <p><?php echo $character->AssetPerson->getBio() ?></p>
                        <?php else: ?>
                        <?php
                          $asset = Doctrine_Query::create()
                            ->select('a.*')
                            ->from('Asset a, SectionAsset sa')
                            ->where('sa.section_id = ?', $section->id)
                            ->andWhere('sa.asset_id = a.id')
                            ->andWhere('a.is_active = ?', 1)
                            ->andWhere('a.asset_type_id = ?', 1)
                            ->orderBy('a.id desc')
                            ->limit(1)
                            ->fetchOne();
                        ?>
                        <?php if($asset) echo $asset->AssetContent->render(); ?>
                        <?php endif; ?>
                          <hr />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="rightWrapper">
                  <?php
                    $team = Doctrine_Query::create()
                      ->select('a.*')
                      ->from('Asset a')
                      ->where('a.site_id = ?', $site->id)
                      ->andWhere('a.is_active = ?', 1)
                      ->andWhere('a.asset_type_id = ?', 20)
                      ->orderBy('a.title')
                      ->limit(50)
                      ->execute();
                  ?>
                  <?php if(($team)&&(count($team)>0)): ?>
                  <div class="boxPersonagens">
                    <h2>Personagens</h2>
                    <hr />
                    <div class="carrossel-personagem">
                      <ul>
                        <li>
                      <?php foreach($team as $k=>$d): ?>
                        <?php if(($k > 0) && ($k % 15 == 0)): ?>
                        </li><li>
                        <?php endif; ?>
                        <div class="boxPersonagens-tip">
                          <a href="<?php echo $site->getUrl() ?>?p=<?php echo $d->getSlug() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" /><span><?php echo $d->getTitle() ?></span><span class="ponta"></span></a>
                        </div>
                      <?php endforeach; ?>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>
                  <a href="http://quintaldacultura.com.br" class="quintal">brinque no quintal!</a>
                </div>
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