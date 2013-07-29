<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

 


<!--section miolo--> 
<section class="miolo grade">
  <!-- container miolo -->
  <div class="container row-fluid">
    <!-- coluna esquerda -->
    <div class="span8">
      
      <!-- titulo -->
      <h1>Grade de programação</h1>
      <div>
        <a href="#" class="data-btn" title="dia anterior">
          <i class="seta-grade esquerda"></i>
        </a>
        <p class="data-grade" >23 de julho de 2013</p>
        <a href="#" class="data-btn" title="dia anterior">
          <i class="seta-grade direita"></i>
        </a>
      </div>
      <!--titulo-->
      
      <!--lista grade -->
      <div class="lista-grade">
        
        <!--accordion-->
        <div class="accordion" id="accordion2">
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                <span class="hora">05:45</span>
                <span class="programa-grade">Novo Telecurso Ensino Fundamental</span>
                <i class="setagrade cima"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                <p>Matemática 23<br><br>
                Nesta teleaula 23 você verá que fração é um número que representa parte de um todo que foi dividido em partes exatamente iguais. Além disso, verá alguns exemplos de frações, como 2/3 do total de votos, meia laranja, 1/4 de 12 bolas de futebol.</p>
                <a href="#" title="">acesseo site</a>
                <a href="#" title="">ouça ao vivo pela web</a>
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                <span class="hora">05:45</span>
                <span class="programa-grade">Novo Telecurso Ensino Fundamental</span>
                <i class="setagrade cima"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapse2" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Matemática 23<br><br>
                Nesta teleaula 23 você verá que fração é um número que representa parte de um todo que foi dividido em partes exatamente iguais. Além disso, verá alguns exemplos de frações, como 2/3 do total de votos, meia laranja, 1/4 de 12 bolas de futebol.</p>
                <a href="#" title="">acesseo site</a>
                <a href="#" title="">ouça ao vivo pela web</a>
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
                <span class="hora">05:45</span>
                <span class="programa-grade">Novo Telecurso Ensino Fundamental</span>
                <i class="setagrade cima"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapse3" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Matemática 23<br><br>
                Nesta teleaula 23 você verá que fração é um número que representa parte de um todo que foi dividido em partes exatamente iguais. Além disso, verá alguns exemplos de frações, como 2/3 do total de votos, meia laranja, 1/4 de 12 bolas de futebol.</p>
                <a href="#" title="">acesseo site</a>
                <a href="#" title="">ouça ao vivo pela web</a>
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
                <span class="hora">05:45</span>
                <span class="programa-grade">Novo Telecurso Ensino Fundamental</span>
                <i class="setagrade cima"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapse4" class="accordion-body collapse">
              <div class="accordion-inner">
                <p>Matemática 23<br><br>
                Nesta teleaula 23 você verá que fração é um número que representa parte de um todo que foi dividido em partes exatamente iguais. Além disso, verá alguns exemplos de frações, como 2/3 do total de votos, meia laranja, 1/4 de 12 bolas de futebol.</p>
                <a href="#" title="">acesseo site</a>
                <a href="#" title="">ouça ao vivo pela web</a>
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
        </div>
        <!--/accordion-->
        
      </div>
      <!--/lista grade -->
        
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4">
      
      <!-- CALENDARIO -->
      <div class="destaque-playlist">
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
    //self.location.href = './grade?c=<?php echo $sChannel->getSlug() ?>&d='+d;
    send('<?php echo $sChannel->getSlug() ?>',d);
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
  

