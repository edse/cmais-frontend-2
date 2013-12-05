<?php
$u = explode("/", $url);
array_pop($u);
$base_url = str_replace("/index.php", "", implode("/", $u));
$nextDateUrl = $base_url."/".str_replace("/","-",$nextDate); 
$prevDateUrl = $base_url."/".str_replace("/","-",$prevDate); 
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    $('#accordion').accordion();
  })
</script>
<script type="text/javascript">
  jQuery(function(a){a.datepicker.regional["pt-BR"]={closeText:"Fechar",prevText:"&#x3c;Anterior",nextText:"Pr&oacute;ximo&#x3e;",currentText:"Hoje",monthNames:["Janeiro","Fevereiro","Mar&ccedil;o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],dayNames:["Domingo","Segunda-feira","Ter&ccedil;a-feira","Quarta-feira","Quinta-feira","Sexta-feira","S&aacute;bado"],dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","S&aacute;b"],dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","S&aacute;b"],weekHeader:"Sm",dateFormat:"dd/mm/yy",firstDay:0,isRTL:false,showMonthAfterYear:false,yearSuffix:""};a.datepicker.setDefaults(a.datepicker.regional["pt-BR"])});
  
  $(function(){ //onready
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    // Datepicker
    $('#datepicker').datepicker({
      //beforeShowDay: dateLoading,
      onSelect: redirect,
      dateFormat: 'yy-mm-dd',
      altFormat: 'yy-mm-dd',
      defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),
      inline: true
    });
  });

  function redirect(d){
    //send('<?php echo $sChannel->getSlug() ?>',d);
    self.location.href = '<?php echo $base_url ?>/'+d;
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
      opts=opts +"&event=1";
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

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>

    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p>TV Rá Tim Bum</p><span>&gt;&gt;</span><a href="/grade">Programação</a>
        </div>
        <div id="box-programas-programacao">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="" class="enunciado">Programação</a>
            </div>
            <div class="btn-episodio">
              <span class="pontaBarra"><a href="<?php echo $prevDateUrl ?>"><span class="setaEsquerda">Anterior</span></a></span>
              <span class="nome"><?php echo format_date($date, 'P') ?></span>
              <span class="caudaBarra"><a href="<?php echo $nextDateUrl ?>"><span class="setaDireita">Próximo</span></a></span>
            </div>
            <div id="accordion">
            <?php if(isset($schedules)): ?>
                <?php foreach($schedules as $d): ?>
                <h3><a href=""><span class="horario"><?php echo format_datetime($d->getDateStart(), "HH:mm") ?> - </span><?php echo $d->Program->getTitle() ?></a></h3>
                <div class="accordionConteudo">
                  <a href="<?php echo $site->retriveUrl()?>"><img src="<?php echo $d->retriveLiveImage() ?>" alt="<?php echo $d->retriveTitle() ?>" /></a>
                  <p><?php echo html_entity_decode($d->retriveDescription5()) ?></p>
                  <?php /*
                  <div class="horarioAlternativo">
                    <p><span>Hor&aacute;rio Alternativo:</span> 7h45 - 18h30</p>
                    <span class="picote"></span>
                  </div>
                  <hr />
                  */ ?>
                  <?php if($d->getDescription()!="" && $d->getDescription()!=$d->retriveDescription5()):?>
                  <div class="nesteEpisodio">
                    <h4>>> Neste Epis&oacute;dio:</h4>
                    <p><?php echo html_entity_decode($d->getDescription()) ?></p>
                  </div>
                  <?php endif;?>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      </div>
      <div class="coluna">
        <div id="box-programas-calendario">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="" class="enunciado">Calendário</a>
            </div>
            <div id="datepicker"></div>
            <!--<span class="picote"></span>
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="/grade">Ver a programação completa</a>
              <span class="caudaBarra"></span>
            </div>-->
            <span class="picote"></span>
            <?php include_partial_from_folder('tvratimbum','global/important') ?>
            <span class="picote"></span>
          </div>
        </div>
      </div>
    </div>
    
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>
    <form id="send" action="" method="post">
      <input type="hidden" name="c" id="c" value="<?php echo $sChannel->getSlug() ?>" />
      <input type="hidden" name="d" id="d" value="<?php echo $d ?>" />
    </form>
    <script>
      function send(c,d){
        $("#c").val(c);
        $("#d").val(d);
        $("#send").submit();
      }
    </script>    
