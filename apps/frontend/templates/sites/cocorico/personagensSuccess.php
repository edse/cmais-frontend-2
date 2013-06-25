<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; margin-top:-5px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;  margin-top:-5px;}
/* tooltip*/
</style>
<!-- container-->
<div class="container tudo" id="lista">

<?php
$home = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1149, 'home');
$bloco = $home->retriveBlockBySlug('destaque-topo');
$destaque_topo = $bloco->retriveDisplays('destaque-topo');
?>

  <!-- row-->
  <div class="row-fluid">
     <?php if(isset($destaque_topo)): ?>
      <?php if(count($destaque_topo) > 0): ?>
    <div class="span12">
      <div id="myCarousel" class="carousel slide span12">
        <!-- Carousel items -->
        <div class="carousel-inner"> 
          <?php foreach($destaque_topo as $k=>$d): ?>  
          <div class="<?php if($k==0): ?>active <?php endif; ?>item ">
            <a href="<?php echo $d->getUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="span12"/></a>
          </div>
           <?php endforeach; ?>       
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
    </div>
      <?php endif; ?>
    <?php endif; ?>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->

  <!-- row-->
  <div class="row-fluid menu listao">
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site, 'section'=>$section)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->

  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
</div>
<!-- /container-->