<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/grade.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/radiofm/geral.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/jquery-ui-i18n.min.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(function(a){a.datepicker.regional["pt-BR"]={closeText:"Fechar",prevText:"&#x3c;Anterior",nextText:"Pr&oacute;ximo&#x3e;",currentText:"Hoje",monthNames:["Janeiro","Fevereiro","Mar&ccedil;o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],dayNames:["Domingo","Segunda-feira","Ter&ccedil;a-feira","Quarta-feira","Quinta-feira","Sexta-feira","S&aacute;bado"],dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","S&aacute;b"],dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","S&aacute;b"],weekHeader:"Sm",dateFormat:"dd/mm/yy",firstDay:0,isRTL:false,showMonthAfterYear:false,yearSuffix:""};a.datepicker.setDefaults(a.datepicker.regional["pt-BR"])});
  
  $(function(){
    // comportamento inicial da grade
    $('.now').parent().addClass('escura');
    $('.now').parent().next().slideDown(400);
  });

  $(function(){ //onready
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    // Datepicker
    $('#datepicker').datepicker({
      //beforeShowDay: dateLoading,
      onSelect: redirect,
      dateFormat: 'yy/mm/dd',
      altFormat: 'yy-mm-dd',
      defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),
      inline: true
    });
    //hover states on the static widgets
    $('#dialog_link, ul#icons li').hover(
      function() { $(this).addClass('ui-state-hover'); }, 
      function() { $(this).removeClass('ui-state-hover'); }
    );
  });

  function redirect(d){
    self.location.href = './diario-de-programacao?c=6&d='+d;
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
      opts=opts +"&channel_id=6";
      // opts=opts +"&day="+ (date.getDate());
      // we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded

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

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<!--a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião" style="display: none;">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a-->

  	 <div id="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

    <?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>

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
                  <a href="/diario-de-programacao?c=6&d=<?php echo $nextDate ?>" class="btn proximo"></a>
                  <a href="/diario-de-programacao?c=6&d=<?php echo $prevDate ?>" class="btn anterior"></a>
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
                    <?php if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd()))): ?>
                      <a name="agora" id="agora"></a>
                      <script>
                      $(function(){
                        $('html, body').animate({scrollTop: $("#agora").offset().top},'slow');
                      });
                      </script>
                    <?php endif; ?>
                    <p class="hora"><?php echo format_datetime($d->getDateStart(), "d/M HH:mm") ?></p>
                    <a href="#" class="btn-toggle tit<?php if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd())))  echo " now"; ?>"><?php echo $d->Program->getTitle() ?></a>
                    <a href="#" class="botao btn-toggle"></a>
                  </div>
                  <div class="grade toggle" style="display:none; width:auto; padding-bottom:25px;">
                    <div class="capa-foto">
                      <!-- <p class="reprise">18:30 - Reprise deste episódio</p> -->
                      <img src="<?php echo $d->retriveLiveImage() ?>" alt="<?php echo $d->retriveTitle() ?>" />
                      <?php if($d->image_source != ""): ?><p class="legenda"><?php echo $d->image_source ?></p><?php endif; ?>
                    </div>
                    <?php if($d->getTitle() != ""): ?>
                      <p class="bold"><?php echo $d->getTitle() ?></p>
                    <?php endif; ?>
                    <p><?php echo html_entity_decode($d->retriveDescription3()) ?></p>
                    <!--
                    <p class="bold"><?php //echo $d->AssetBroadcast->getHeadline() ?></p>
                    <p class="bold"><?php //echo $d->AssetBroadcast->getHeadlineLong() ?></p>
                    -->
                    <a class="site" href="<?php echo $d->retriveUrl() ?>">ir ao site</a>
                    <?php if($d->getIsLive()): ?>
                    <br />
                    <a class="site" href="/aovivo">assista ao vivo pela web</a>
                    <?php endif; ?>
                    <br />
                    <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo urlencode($d->retriveTitle()) ?>&dates=<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->getDateStart())->format('Ymd\THis\Z') ?>/<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->getDateStart())->format('Ymd\THis\Z') ?>&details=&location=<?php echo urlencode($d->Program->getTitle()) ?>&trp=false&sprop=http%3A%2F%2Fcmais.com.br&sprop=name:TV%20Cultura" target="_blank" class="google-agenda"><img src="http://www.google.com/calendar/images/ext/gc_button1.gif" border=0 style="width:100px;height:25px;" /></a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
            <!-- /lista calendario -->
            <?php endif; ?>
            
            <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
            
          </div>
          <!-- /ESQUERDA -->
          
          <!-- DIREITA -->
          <div id="direita" class="grid1">
            
            <!-- CALENDARIO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>arquivo</h4>
                </div>
              </div>
              <div id="datepicker">
              </div>
            </div>
            <!-- /CALENDARIO -->
            
            <!-- BOX PUBLICIDADE -->
             <div class="box-publicidade grid1">
              <!-- cmais-grade-300x250 -->
              <script type='text/javascript'>
              GA_googleFillSlot("culturafm-300x250");
              </script>
             </div>                                   
            <!-- / BOX PUBLICIDADE -->

          </div>
          <!-- /DIREITA -->
          
        </div>
        <!-- CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->

