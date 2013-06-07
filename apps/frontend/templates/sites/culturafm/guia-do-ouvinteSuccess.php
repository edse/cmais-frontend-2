<link rel="stylesheet" href="/portal/css/tvcultura/secoes/programas.css" type="text/css" />
<!-- <link rel="stylesheet" href="/js/jquery-ui-1.8.7/css/ui-lightness/jquery-ui-1.8.7.custom.css" type="text/css" /> -->
<link rel="stylesheet" href="/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<link type="text/css" href="/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>


<script type="text/javascript">
$(function(){
  // Datepicker
  $('#datepicker').datepicker({
    //beforeShowDay: dateLoading,
    onSelect: redirect,
    <?php if((isset($date)) && ($date != "")): ?>defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),<?php endif; ?>
    dateFormat: 'yy/mm/dd',
    altFormat: 'yy-mm-dd',
    inline: true
  });
});

function redirect(d){
	send('<?php echo $sChannel->getSlug() ?>',d);
	//self.location.href = '<?php echo $url ?>?d='+d;
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
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a>

	 <div id="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
       
          <h2><a href="http://culturafm.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          <div id="horario">
          	<a href="javascript: window.open('http://www.culturabrasil.com.br/controle-remoto?start=fm','controle','width=300,height=600,scrollbars=no');void(0);" class="aovivo">ao vivo</a>
          </div>         
        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/<?php echo $section->getSlug()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
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

            <h3 class="tit-pagina grid2">
            	<?php echo $section->getTitle() ?>
            </h3>           
            
            <!-- menu-calendario -->
            <div class="menu-calendario">
              <div class="box-padrao grid1 carrossel-menu">
                <div class="nav-menu2 topo">
                  <a href="javascript: send('<?php echo $sChannel->getSlug() ?>','<?php echo $nextDate ?>');" class="btn proximo"></a>
                  <a href="javascript: send('<?php echo $sChannel->getSlug() ?>','<?php echo $prevDate ?>');" class="btn anterior"></a>
                </div>
                <ul class="nav-conteudo conteudo">
                  <li class="filho ativo"><?php echo format_date($date, 'P') ?></li>
                </ul>
              </div>
            </div>
            <!-- menu-calendario -->

            <!-- lista calendario -->
            <?php if(isset($schedules)): ?>
              <?php foreach($schedules as $k=>$d): ?>
            <ul class="lista-calendario grid2" style="margin-bottom: 10px;">
            	<li>
                  <?php if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd()))): ?>
                      <a name="agora" id="agora" style="height:60px; width:10px; display:block;"></a>
                      <!--script>
                      $(function(){
                        $('html, body').animate({scrollTop: $("#agora").offset().top},'slow');
                      });
                      </script-->
                  <?php endif; ?>	
	              <div class="barra-grade">                    
                    <p class="hora"><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></p>
                    <a href="<?php echo $d->retriveUrl() ?>" class="tit"><?php echo $d->Program->getTitle() ?></a>
                    <a href="<?php echo $d->retriveUrl() ?>" class="botao"></a>
                  </div>
                  <div class="grade" style="display: block;">
                    <div class="capa-foto">
                      <img src="<?php echo $d->retriveLiveImage() ?>" alt="<?php echo $d->retriveTitle() ?>" />
                      <?php if($d->image_source != ""): ?><p class="legenda"><?php echo $d->image_source ?></p><?php endif; ?>
                    </div>
                    <?php if($d->getTitle() != ""): ?>
                      <p><?php echo $d->getTitle() ?></p>
                    <?php endif; ?>
                    <p><?php echo html_entity_decode(nl2br($d->retriveDescription3())) ?></p>
                    <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo urlencode($d->Program->getTitle()) ?>&dates=<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->getDateStart())->format('Ymd\THis') ?>/<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->getDateStart())->format('Ymd\THis') ?>&details=<?php echo ($d->Program->getLongDescription()) ?>&location=<?php echo "culturafm.cmais.com.br" ?>&trp=false&showTz=0&sprop=http%3A%2F%2Fcmais.com.br&sprop=name:TV%20Cultura" target="_blank" class="google-agenda"><img src="http://www.google.com/calendar/images/ext/gc_button1.gif" border=0 style="width:100px;height:25px;" /></a>
                  </div>
                  
                </li> 
              </ul>
                <?php endforeach; ?>
                
              <!-- /lista calendario -->
            <?php endif; ?>
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">

            <!-- CALENDARIO -->
            <div class="box-padrao grid1">
            	<div id="datepicker"></div>
            </div>
            <!-- /CALENDARIO -->
            
              <?php if(isset($displays["destaque-podcast"])): ?>
              <!-- BOX PADRAO
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>Para ouvir</h4>
                  </div>
                </div>
                <ul class="bg-cinza" style="padding-bottom:20px;">
               	  <?php foreach($displays["destaque-podcast"] as $d): ?>
               	  <li><a href="<?php echo $d->retriveUrl() ?>" name="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a></li>
               	  <?php endforeach; ?>
                </ul>
              </div>
              -->
              <!-- BOX PADRAO -->
              <?php endif; ?>
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- culturafm-300x250 -->
								<script type='text/javascript'>
								GA_googleFillSlot("culturafm-300x250");
								</script>
              </div>
              <!-- / BOX PUBLICIDADE -->
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->

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