<?php use_helper('I18N', 'Date') ?>
<?php
$u = explode("/", $url);
array_pop($u);
$base_url = str_replace("/index.php", "", implode("/", $u));
$nextDateUrl = $base_url."/".str_replace("/","-",$nextDate); 
$prevDateUrl = $base_url."/".str_replace("/","-",$prevDate); 
?>
<!-- Le styles--> 
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

<!--section miolo--> 
<section class="miolo grade">
  <!-- container miolo -->
  <div class="container row-fluid">
    <!-- coluna esquerda -->
    <div class="span8" style="*margin-left: 0px;">
      
      <!-- titulo -->
      <h1><?php echo $section->getTitle() ?></h1>
      <div>
        <a href="<?php echo $prevDateUrl ?>" class="data-btn" title="anterior">
          <i class="seta-grade esquerda"></i>
        </a>
        <p class="data-grade" ><?php echo format_date($date, 'P') ?></p>
        <a href="<?php echo $nextDateUrl ?>" class="data-btn" title="próximo">
          <i class="seta-grade direita"></i>
        </a>
      </div>
      <!--titulo-->
      
      <?php if(isset($schedules)): ?>
      <!--lista grade -->
      <div class="lista-grade">
        
        <!--accordion-->
        <div class="accordion" id="accordion2">

          <?php foreach($schedules as $k=>$d): ?>
          <?php
            $now = false;
            if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd()))) {
              $now = true;
            }
          ?>

          <!--item-->
          <div class="accordion-group">
            <?php if($now): ?>
            <a name="agora" id="agora"></a>
            <script>
              $(function(){
                $('html, body').animate({scrollTop: $("#agora").offset().top},'slow');
              });
            </script>
            <?php endif; ?> 

            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $k ?>">
                <span class="hora"><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></span>
                <span class="programa-grade"><?php echo $d->Program->getTitle() ?></span>
                <i class="seta-grade<?php if($now): ?> baixo<?php else: ?> cima<?php endif; ?>"></i>
              </a>
              <!--linha pontilhada-->
              <div class="borda-pontilhada"></div>
              <!--/linha pontilhada-->
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapse<?php echo $k ?>" class="accordion-body collapse<?php if($now): ?> in<?php endif; ?>" style="overflow:hidden;">
              <div class="accordion-inner">
                <p><?php echo $d->retriveTitle() ?><br><br>
                <?php echo $d->retriveDescription() ?></p>
                <a href="<?php echo $d->retriveUrl() ?>" class="btn-body" title="">acesse o site<i class="borda-titulo borda-grade"></i></a>
                <a href="#" class="btn-body controle-remoto" title="">ouça ao vivo pela web<i class="borda-titulo borda-grade"></i></a>
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          <?php endforeach; ?>
          
        </div>
        <!--/accordion-->
        
      </div>
      <!--/lista grade -->
      <?php endif; ?>
        
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4 box-direita">
      
      <!-- CALENDARIO -->
      <div class="destaque-playlist" style="width:300px; height:300px; display: block; ">
        <h1>Calendário</h1>
        <div id="datepicker"></div>
      </div>
      <!-- /CALENDARIO -->
      
      <!--banner -->
      <div class="banner-culturabrasil">
        <script type='text/javascript'>
          GA_googleFillSlot("home-geral300x250");
        </script>
      </div>
      <!-- /banner -->  
      
    </div>
    <!--/coluna direita -->
    
  </div>  
  <!-- /container miolo -->  

</section>
<!--/section miolo-->
<script type="text/javascript" src="http://cmais.com.br/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/jquery-ui-i18n.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
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
      dateFormat: 'yy-mm-dd',
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
      opts=opts +"&channel_id=<?php if($sChannel->id): ?><?php echo $sChannel->id ?><?php endif; ?>";
      // opts=opts +"&day="+ (date.getDate());
      // we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded

      $.ajax({
        url: "http://app.cmais.com.br/ajax/getdays",
        data: opts,
        dataType: "jsonp",
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
  $(function(){
    $('#accordion2 .accordion-toggle').click(function(){
      $(this).parent().next().on("show",function(){
        $('.accordion-toggle').find('i').removeClass('baixo').addClass('cima');
        $(this).prev().children('.accordion-toggle').find('i').removeClass('cima').addClass('baixo')
      });
    });
    $('#accordion2 .accordion-toggle').click(function(){
      $(this).parent().next().on("hide",function(){
        $('.accordion-toggle').find('i').removeClass('baixo').addClass('cima');
      });
    });
  });
</script>

<form id="send" action="" method="post">
  <input type="hidden" name="c" id="c" value="<?php echo $sChannel->getSlug() ?>" />
  <input type="hidden" name="d" id="d" value="<?php echo $d?>" />
</form>
<script>
  function send(c,d){
    $("#c").val(c);
    $("#d").val(d);
    $("#send").submit();
  }
</script>
<script>
var controle = null;
$('.controle-remoto').click(function(){
  if(controle == null || controle.closed){
    controle = window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=400,height=640,scrollbars=no');
  } else {
    controle.focus();
  }
});
</script>
