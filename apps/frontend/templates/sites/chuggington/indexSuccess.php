<script type="text/javascript" src="/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<!-- <link rel="stylesheet" href="/js/jquery-ui-1.8.7/css/ui-lightness/jquery-ui-1.8.7.custom.css" type="text/css" /> -->
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />

<script type="text/javascript">
  $(function(){
    // comportamento inicial da grade
    $('.btn-toggle:first').parent().addClass('escura');
    $('.btn-toggle:first').parent().next().slideDown(400);
  });
  $(function(){ //onready
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    // Datepicker
    $('#datepicker').datepicker({
      beforeShowDay: dateLoading,
      onSelect: redirect,
      dateFormat: 'yy/mm/dd',
      altFormat: 'yy-mm-dd',
      <?php if($date): ?>defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),<?php endif; ?>
      inline: true
    });
    //hover states on the static widgets
    $('#dialog_link, ul#icons li').hover(
      function() { $(this).addClass('ui-state-hover'); }, 
      function() { $(this).removeClass('ui-state-hover'); }
    );
  });
</script>
<script type="text/javascript">
  function redirect(d){
    self.location.href = '<?php echo $url ?>?d='+d;
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
      opts=opts +"&program_id=<?php echo $site->Program->id ?>";
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

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
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

          <?php /*
          <div class="navegacao txt-10">
            <a href="./<?php echo $section->getSlug() ?>" title="<?php echo $section->getTitle() ?>"><?php echo $section->getTitle() ?></a>
          </div>
          */ ?>

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
          
          <!-- ESQUERDA -->
          <div id="esquerda" class="grid2">
            
            <!-- menu-calendario -->
            <div class="menu-calendario">
              <div class="box-padrao grid1 carrossel-menu">
                <div class="nav-menu2 topo">
                  <a href="/<?php echo $site->getSlug()?>?d=<?php echo $nextDate ?>" class="btn proximo"></a>
                  <a href="/<?php echo $site->getSlug()?>?d=<?php echo $prevDate ?>" class="btn anterior"></a>
                </div>
                <ul class="nav-conteudo conteudo">
                  <li class="filho ativo"><?php echo format_date($date, 'P') ?></li>
                </ul>
              </div>
            </div>
            <!-- menu-calendario -->

            <?php if(isset($schedules)): ?>
            <!-- lista calendario -->
            <ul class="lista-calendario grid2">
              <?php foreach($schedules as $k=>$d): ?>
                <li>
                  <div class="barra-grade">
                    <p class="hora"><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></p>
                    <a href="#" class="btn-toggle"><?php echo $d->Program->getTitle() ?></a>
                    <a href="#" class="botao btn-toggle"></a>
                  </div>
                  <div style="display:none; width:619px; padding-bottom:25px;" class="grade toggle">
                    <div class="capa-foto">
                      <!-- <p class="reprise">18:30 - Reprise deste episódio</p> -->
                      <img src="<?php echo $d->retriveLiveImage() ?>" alt="<?php echo $d->retriveTitle() ?>" />
                      <?php if($d->image_source != ""): ?><p class="legenda"><?php echo $d->image_source ?></p><?php endif; ?>
                    </div>
                    <h5><?php echo $d->retriveTitle() ?></h5>
                    <p><?php echo html_entity_decode($d->retriveDescription3()) ?></p>
                    <?php if($d->url != ""): ?>
                    <a class="mais" href="<?php echo $d->url ?>">saiba mais...</a>
                    <?php endif; ?>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
            <!-- /lista calendario -->
            <?php else: ?>
            <ul class="lista-calendario grid2">
              <li>
                <div class="barra-grade"> </div>
                <div class="grade toggle" style="display:none; width:100%; padding-bottom:25px;"> </div>
              </li>
            </ul>
            
          <?php if(count($pager) > 0): ?>
              <!-- BOX LISTAO -->
              <div class="box-listao grid2">
                <?php if(isset($date)): ?>
                <h3><?php //echo format_date(strtotime($date),"D") ?></h3>
                <?php endif ?>
                <ul>
                  <?php foreach($pager->getResults() as $d): ?>
                    <li>
                      <?php if(isset($date)): ?>
                      <p class="titulos"><?php //echo format_date(strtotime($d->getCreatedAt()),"t") ?></p>
                      <?php endif ?>
                      <h3 class="chapeu"><?php echo $d->retriveLabel() ?></h3>
                      <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="texto"></span><?php echo $d->title ?></a>
                      <p><?php echo $d->getDescription() ?></p>
                      <img src="<?php echo $d->retriveImageUrlByImageUsage('image-4-b'); ?>">
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <!-- /BOX LISTAO -->
            <?php endif; ?>
               
              
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
              <!-- PAGINACAO -->
              <?php endif; ?>
            <?php endif; ?>
            
            
            
            
            <?php endif; ?>
            
            <!--?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?-->
            
          </div>
          <!-- /ESQUERDA -->
          
          <!-- DIREITA -->
          <div id="direita" class="grid1">
            
            <!-- BOX PUBLICIDADE -->
            <div class="box-publicidade grid1">
              <!-- programas-homepage-300x250 -->
              <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-300x250");
              </script>
            </div>    
            <!-- / BOX PUBLICIDADE -->

            <!-- CALENDARIO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>Arquivo</h4>
                </div>
              </div>
              <div id="datepicker"></div>
            </div>
            <!-- /CALENDARIO -->

          </div>
          <!-- /DIREITA -->
          
        </div>
        <!-- CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->

