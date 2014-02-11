<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/<?php echo $section->Parent->getSlug() ?>.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(function(){
  // Datepicker
  $('#datepicker').datepicker({
    beforeShowDay: dateLoading,
    onSelect: redirect,
    <?php if((isset($date)) && ($date != "")): ?>defaultDate: new Date("<?php echo $date ?>"),<?php endif; ?>
    dateFormat: 'yy-mm-dd',
    inline: true
  });
});
</script>
<script type="text/javascript">
  function redirect(d){
    //self.location.href = './<?php echo $section->getSlug() ?>?d='+d;
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
      <?php if ($category): ?>
      opts=opts +"&category_id=<?php if($category): ?><?php echo $category->getId() ?><?php endif; ?>";
      <?php else: ?>
      opts=opts +"&section_id=<?php if($section): ?><?php echo $section->getId() ?><?php endif; ?>";
      <?php endif; ?>
      // opts=opts +"&day="+ (date.getDate());
      // we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded

      $.ajax({
        url: "/ajax/getdays",
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



<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important)) ?>

  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
            </a>
          </h2>
          <?php elseif(isset($site) && $site->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($site->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="<?php echo $site->getTitle() ?>" title="<?php echo $site->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $site->getTitle() ?></h3>
              <?php endif; ?>
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
        </div>
        
        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../<?php echo $section->Site->getSlug() ?>" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>

          <!-- h3 class="tit-pagina"><a href="#" class="<?php echo $section->getSlug() ?>"><?php echo $section->getTitle() ?></a></h3 -->
          
          <?php if($section->getDescription() != ""): ?>
          <h2 style="text-align: left; margin-bottom:15px;clear: both;"><?php echo $section->getDescription() ?></h2>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <?php if(count($pager) > 0): ?>        
                <?php foreach($pager->getResults() as $k=>$d): ?>
                     
              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                <h3><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h3>
                <p><?php echo $d->getDescription() ?></p>
                <div class="assinatura grid2">
                  <p class="sup"><?php echo $d->AssetContent->getAuthor() ?> <span><?php echo $d->retriveLabel() ?></span></p>
                  <p class="inf"><?php echo format_date($d->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($d->getUpdatedAt(), "g") ?></p>

                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $d->retriveUrl())) ?>

                </div>
                
                <div class="texto">
                  <?php echo html_entity_decode($d->AssetContent->render()) ?>
                </div>
                
                <?php $relacionados = $d->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
                <?php if(count($relacionados) > 0): ?>
                  
                  
                  <!-- SAIBA MAIS -->
                  <div class="box-padrao grid2" style="margin-bottom: 20px;">
                    <div id="saibamais">                                                            
                    <h4>saiba +</h4>                                                            
                    <ul class="conteudo">
                      <?php foreach($relacionados as $k2=>$d2): ?>
                        <li style="width: auto;">
                          <a class="titulos" href="<?php echo $d2->retriveUrl()?>" style="width: auto;"><?php echo $d2->getTitle()?></a>
                          <!--
                          <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                            <a href="<?php echo $d->retriveUrl()?>" class="img-90x54" style="width: auto">
                              <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                            </a>
                          <?php endif; ?>
                          -->
                          <!--p><?php echo $d->getDescription()?></p-->
                        </li>
                      <?php endforeach; ?>
                    </ul>
                   </div>
                  </div>
                  <!-- SAIBA MAIS -->
                <?php endif; ?>
                
                <p>Permalink: <a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->retriveUrl() ?></a></p>
                <?php /* include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $d->retriveUrl())) */ ?>

              </div>
              
              <?php if($k < (count($pager)-1)): ?>
              <hr />
              <?php endif; ?>
              
              <!-- /NOTICIA INTERNA -->
                <?php endforeach; ?>
              <?php endif; ?>

            <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
              <div class="paginacao grid2">
                <div class="centraliza">
                  <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
                  <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
                  <ul>
                    <?php foreach ($pager->getLinks() as $page): ?>
                      <?php if ($page == $pager->getPage()): ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
                      <?php else: ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                  <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
                  <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
                </div>
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
              <!--// PAGINACAO -->
              <?php endif; ?>
            <?php endif; ?>
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              <!-- CALENDARIO -->
              <div class="box-padrao grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>arquivo</h4>
                  </div>
                </div>
                <div id="datepicker"></div>
              </div>
              <!-- /CALENDARIO -->
              
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
          <?php if (isset($displays["rodape-interno"])): ?>
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          <?php endif; ?>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
    
    <form id="send" action="" method="post">
      <input type="hidden" name="d" id="d" value="<?php echo $d ?>" />
    </form>
    <script>
      function send(d){
        $("#d").val(d);
        $("#send").submit();
      }
    </script>    
    