<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
} 
?>

<link href="/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">
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

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
       <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia') ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico">Em família</a> <span class="divider">&rsaquo;</span></li>
     <li>Agenda</li>
     <li class="active"></li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">agenda</h2>
  
     <?php if(count($pager) > 0): ?>
  <!--row lista-->
  <div id="agenda" class="row-fluid conteudo ">
    <div class="span8">
    	
 
      <!-- lista -->
      <ul class="lista">
        <!-- item -->
        <?php foreach($pager->getResults() as $d): ?>
        <li class="item-lista">
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <h3><?php echo $d->getTitle() ?></h3>
            <?php if(isset($date)): ?>
            <span><?php echo format_date(strtotime($date),"D") ?></span>
            <?php endif ?>
          </a>
       	 </li>       
          <!-- pontilhado -->
          <li><hr></li>
        <!-- /item -->
        <?php endforeach; ?>
      </ul>
      <!-- lista -->
       <?php endif; ?>
            
            
      <!-- paginacao -->
      <?php if(isset($pager)): ?>
      <?php if($pager->haveToPaginate()): ?>
      	
      <div class="pagination pagination-centered"> 
        <ul>
          <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
          <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
          <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);" title="<?php echo $page ?>"><?php echo $page ?></a></li>
          <?php endif; ?>
          <?php endforeach; ?>
          <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
        </ul>
      </div>
      <!-- paginacao -->
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
             
      
      
    </div>
     <?php endif; ?>
    <?php endif; ?>
            
    <div class="span4 acontece">
      <!-- topo acontece -->
      <div class="topo">
          <div class="bac-blue">
            <h3>
              <i class="ico-naweb ico-acontece"></i>
              Acontece
              <i class="ico-seta-titulo seta-acontece"></i>
           </h3>
         </div>
       </div>
       <!-- /topo acontece -->
        <?php include_partial_from_folder('sites/cocorico', 'global/display-1-destaque') ?>
       <!-- banner -->
       <div class="">
         <!-- portal-cocorico-300x250 -->
         <script type='text/javascript'>
           GA_googleFillSlot("portal-cocorico-300x250");
         </script>
       </div>
       <!-- banner -->
    </div>
  </div>
  
  <!--/row lista-->
  <!--row-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /row-->
</div>
<!-- /container-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>