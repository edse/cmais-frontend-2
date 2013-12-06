<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
} 


//if(isset($date))
//	die($date);
?>

<script type="text/javascript">
$(function(){
  // Datepicker
  $('#datepicker').datepicker({
		beforeShowDay: dateLoading,
		onSelect: redirect,
		//defaultDate: "13-12-05",
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
		
    var dia = String(date.getDate());
    if(dia.length <= 1) dia = "0"+dia; //dias que possuem apenas um caracteres (de 1 a 9)
    var year_month_day = ""+ year_month+"-"+ dia+"";
    
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
            //console.log(cached_months.length);
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
  

$(document).ready(function(){
<?php if(isset($date)): ?>
	var newdate = new Date ("<?php echo str_replace("-", ",", $date)?>");
<?php else: ?> 
	var newdate = new Date();
<?php endif;?>

$("#datepicker").datepicker("setDate", newdate);  
	
});
  
  
</script>

<?php
	$now = date('Y-m-d H:i:s');
	$schedules = Doctrine_Query::create()
	  ->select('s.*')
	  ->from('Schedule s')
	  ->andWhere('s.date_start <= ?', $now)
	  ->andWhere('s.date_end >= ?', $now)  
	  ->andWhere('s.channel_id = ?', 1)
		->limit(1)
	  ->execute();

	$live = $schedules[0]->Program->Site->getSlug(); //Slug do Programa Atual

	//BLOCO DO MENU PROGRAMAS
	$displays = null;	
	$block = Doctrine::getTable('Block')->findOneById(2096); // SEÇÃO NOVO-JORNALISMO
	if($block) $displays['destaque-menu-programas'] = $block->retriveDisplays();
?>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />

<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/jornalismo-novo2013.css" type="text/css" />
  
  
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => @$asset, 'section' => $section)) ?>

<?php $btn_live = '<span class="live"><i class="ico-setas ico-seta-cima"></i>AO VIVO</span>'; ?>

<!--MENU-PROGRAMAS-->
<div id="menu-programas">
  <div class="menu-programas">
    <h1>Jornalismo</h1>
		<?php if(isset($displays["destaque-menu-programas"])): ?>
			<ul>
				<?php foreach ($displays["destaque-menu-programas"] as $k => $d): ?>
		      <li class="<?php echo $d->getHeadline()?>">
		        <a class="btn-programas btn-<?php echo $d->getHeadline()?><?php if($live == $d->getHeadline()) echo " active"?> " href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>"></a>
			      <?php if($live == $d->getHeadline()) echo $btn_live?> 
		      </li>
				<?php endforeach;?>
			</ul>
		<?php endif;?>      
  </div>
</div>
<!--/MENU-PROGRAMAS-->

<!-- CAPA SITE -->
<div id="capa-site">
  <!-- MIOLO -->
  <div id="miolo">
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">

					<h2>Todas as notícias</h2>
					
	        <?php if(count($pager) > 0): ?>
	          <!-- BOX LISTAO -->
	          <div class="box-listao grid2">
	            <?php if(isset($date)): ?>
	            <h3><?php echo format_date(strtotime($date),"D") ?></h3>
	            <?php endif ?>
	            <ul>
	              <?php foreach($pager->getResults() as $d): ?>
	                <li>
	                  <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
	                  <a class="img" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
	                    <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" />
	                  </a>
	                  <?php endif; ?>
	                  <div class="box-texto grid2">
	                    <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="<?php echo $d->AssetType->getSlug() ?>"></span><?php echo $d->getTitle() ?></a>
	                    <p><?php echo $d->getDescription() ?></p>
	                    <p class="fonte"><a href="#"><?php echo $d->retriveLabel() ?></a> | <?php echo format_datetime($d->getCreatedAt(),"P") ?> | <?php echo format_datetime($d->getCreatedAt(),"t") ?></p>
	                  </div>
	                </li>
	              <?php endforeach; ?>
	            </ul>
	          </div>
	          <!-- /BOX LISTAO -->
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