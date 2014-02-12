<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Voc&ecirc; Sabia? - +crian&ccedil;a - cmais+ O portal de conteúdo da Cultura</title>
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link href="http://cmais.com.br/portal/maiscrianca/css/geralCrianca.css?nocache=1234" type="text/css" rel="stylesheet">
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
      //self.location.href = '/maiscrianca/vocesabia?d='+d;
      send(d);
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
                <p class="breadcrumb">Mais Crian&ccedil;a &gt;&gt; <span>Voc&ecirc; Sabia</span></p>
              </div>
              <div class="conteudo-wrapper">
                <div class="conteudoVoce-sabia">

                  <div class="conteudoVoce-sabiaWrapper">
                    <div class="pagTit">
                      <a href=""><h1>Voc&ecirc; Sabia</h1></a>
                    </div>
                    <ul class="dropdown">
                      <li><a class="categoria" href=""><span>Categorias</span><span class="icoBig"></span></a>
                        <ul class="categoriaBox">
                        <?php foreach(Doctrine::getTable('Section')->find(692)->Children as $s): ?>
                          <li><a href="/maiscrianca/vocesabia/<?php echo $s->getSlug()?>"><?php echo $s->getTitle()?></a></li>
                        <?php endforeach; ?>
                        </ul>
                      </li>
                    </ul>
                    <hr />
                    
                    <div class="lista">
                    <?php if(count($pager) > 0): ?>
                      <?php foreach($pager->getResults() as $d): ?>
                        <div class="item">
                          <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                          <a href="<?php echo $d->retriveUrl() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" /></a>
                          <?php endif; ?>
                          <span class="chapeu"><?php echo $d->retriveLabel() ?></span>
                          <a href="<?php echo $d->retriveUrl() ?>" class="resumo"><span class="nome"><?php echo $d->AssetContent->getHeadline() ?></span></a>
                        </div>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    </div>

                    <?php if(isset($pager)): ?>
                      <?php if($pager->haveToPaginate()): ?>
                      <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
              <div class="paginacao pag3 grid2">
                <p class="txt-12">P&aacute;gina <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></p>
                <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo"></a>
                <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior"></a>
              </div>
              <form id="page_form" action="" method="post">
              	<input type="hidden" name="return_url" value="<?php echo $url?>" />
              	<input type="hidden" name="page" id="page" value="" />
              </form>
              <script>
              	function goToPage(i){
                	$("#page").val(i);
                	$("#page_form").submit();
              	}
              </script>
                      <?php endif; ?>
                    <?php endif; ?>

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

              <hr />
            </div>
          </div>
          <hr />
          
          <?php //include_partial_from_folder('sites/maiscrianca', 'global/footer') ?>
          
        </div>
        <div class="cerca"></div>
      </div>
      <div class="rodapeTvCultura">
        <?php include_partial_from_folder('blocks', 'global/footer') ?>
      </div>
        </div>

    <form id="send" action="" method="post">
      <input type="hidden" name="d" id="d" value="<?php echo $d ?>" />
    </form>
    <script>
      function send(d){
        $("#d").val(d);
        $("#send").submit();
      }
    </script>    
              
    </body>
</html>