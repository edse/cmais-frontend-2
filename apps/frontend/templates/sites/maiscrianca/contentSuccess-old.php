<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
    <link href="http://cmais.com.br/portal/maiscrianca/css/geralCrianca.css?nocache=1234" type="text/css" rel="stylesheet">
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
  </head>
  <script type="text/javascript">
    //carrossel
    $(function(){
      $('.carrossel').jcarousel({
      wrap: "both"      
      });
    })
    //carrossel-curtinhas
    $(function(){
      $('.carrossel-curtinhas').jcarousel({
      wrap: "both",
      scroll: 1   
      });
    })
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
        $(".aba:first").show();
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
  <script type="text/javascript">
    $(function(){
      // Datepicker
      $('#datepicker').datepicker({
        beforeShowDay: dateLoading,
        onSelect: redirect,
        <?php if((isset($date)) && ($date != "")): ?>defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),<?php endif; ?>
        dateFormat: 'yy/mm/dd',
        altFormat: 'yy-mm-dd',
        inline: true
      });
    });
    function redirect(d){
      self.location.href = '/maiscrianca/vocesabia?d='+d;
    }
  
    //cache the days and months
    var cached_days = [];
    var cached_months = [];
  
    function dateLoading(date) { 
      var year_month = ""+ (date.getFullYear()) +"-"+ (date.getMonth()+1) +"";
      var year_month_day = ""+ year_month+"-"+ date.getDate()+"";
      var opts = "";
      var i = 0;
      var ret = false;
      i = 0;
      ret = false;
  
      for (i in cached_months) {
        if (cached_months[i] == year_month){
          // if found the month in the cache
          ret = true;
          break;
        }
      }
  
      // check if the month was not cached 
      if (ret == false) {
        //  load the month via .ajax
        opts= "month="+ (date.getMonth()+1);
        opts=opts +"&year="+ (date.getFullYear());
        opts=opts +"&section_id=692";
        $.ajax({
          url: "http://app.cmais.com.br/ajax/getdays",
          data: opts,
          dataType: "json",
          async: false,
          success: function(data){
            // add the month to the cache
            cached_months[cached_months.length]= year_month ;
            $.each(data.days, function(i, day){
              cached_days[cached_days.length]= year_month +"-"+ day.day +"";
            });
          }
        });
      }
      i = 0;
      ret = false;
      // check if date from datapicker is in the cache otherwise return false
      // the .ajax returns only days that exists
      for (i in cached_days) {
        if (year_month_day == cached_days[i]) {
          ret = true;
        }
      }
      return [ret, ''];
    }
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
                <p class="breadcrumb">Mais Crian&ccedil;a &gt;&gt; <span>Voc&ecirc; Sabia</span> &gt;&gt; <span><?php echo $asset->getTitle()?></span></p>
              </div>
              <div class="conteudo-wrapper">

                <div class="conteudoVoce-sabia">
                  <div class="conteudoVoce-sabiaWrapper">
                    <div class="pagTit">
                      <a href=""><h1>Voc&ecirc; Sabia?</h1></a>
                    </div>
                    <ul class="dropdown">
                      <li><a class="categoria" href=""><span>Categorias</span><span class="icoBig"></span></a>
                        <ul class="categoriaBox">
                        <?php foreach(Doctrine::getTable('Section')->find(692)->Children as $s): ?>
                          <li><a href="/maiscrianca/voce-sabia/<?php echo $s->getSlug()?>"><?php echo $s->getTitle()?></a></li>
                        <?php endforeach; ?>
                        </ul>
                      </li>
                    </ul> 
                    <hr />
                    <div class="conteudoInterno">
                      <div class="conteudoInternoWrapper">  
                        <h1><?php echo $asset->getTitle()?></h1>
                        <hr />
                        <div class="infos">
                          <p class="nome"><?php echo $asset->AssetContent->getAuthor() ?></p>
                          <p class="data-post"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
                          <!--<div class="compartilhar">
                            <a class="fontUp" href="">A+</a>
                            <a class="fontDown" href="">A-</a>
                            <p><span>Compartilhar</span></p>
                            <a class="impressora" href="">Imprime</a>
                            <a class="email">E-mail</a>
                          </div>-->
                        </div>
                        <hr />
                        <div class="todoConteudo">
                          <?php echo html_entity_decode($asset->AssetContent->render()) ?>
                        </div>
                        <?php /* 
                        <div class="tag">
                          <ul>
                            <li>Tags:</li>
                            <li><a href="">Politica</a>,</li>
                            <li><a href="">Aprendizado</a>,</li>
                            <li><a href="">Dinheiro</a>,</li>
                            <li><a href="">Rap</a></li>
                          </ul>
                        </div>
                        */ ?>
                      </div>
                      <?php /*
                      <div class="paginacao">
                        <p>P&aacute;gina 5 de 10</p>
                        <a href="" class="pagRight">ir</a>
                        <a href="" class="pagLeft">vir</a>
                      </div>
                      */ ?>
                    </div>
                  </div>
               
                <div class="rightWrapper">
                  <div class="calendario">
                    <h2>Folhinha</h2>

                    <div id="datepicker"></div>
                  </div>
                  <div class="curtinha">
                    <h2>Curtinhas</h2>
                    <hr>
                    <?php
                      $curtas = Doctrine_Query::create()
                        ->select('a.id, a.created_at')
                        ->from('Asset a, SectionAsset sa')
                        ->where('sa.section_id = ?', 696)
                        ->andWhere('sa.asset_id = a.id')
                        ->andWhere('a.is_active = ?', 1)
                        ->orderby('a.id desc')
                        ->limit(60)
                        ->execute();
                    ?>
                    <?php if($curtas): ?>
                    <div class="carrossel-curtinhas">
                      <ul>
                      <?php if(count($curtas) > 0): ?>
                          <li>
                          <?php foreach($curtas as $k=>$d): ?>
                            <?php if(($k > 0) && ($k % 3 == 0)): ?>
                              </li><li>
                            <?php endif; ?>
                            <div class="curtas">
                              <h3><?php echo $d->getTitle() ?></h3>
                              <p><?php echo $d->getDescription() ?></p>
                            </div>
                        <?php endforeach; ?>
                      <?php endif; ?>
                          </li>
                      </ul>
                    </div>
                    <?php endif; ?>
                    <hr />
                  </div>
                  <a href="http://quintaldacultura.com.br" class="quintal">brinque no quintal!</a>
                   </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
          <hr>
          
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