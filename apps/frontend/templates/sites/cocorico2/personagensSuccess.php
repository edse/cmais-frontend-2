<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
/* tooltip*/
</style>
<!-- container-->
<div class="container tudo" id="lista">

<?php
$home = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1149, 'home');
$bloco = $home->retriveBlockBySlug('destaque-topo');
$displays['destaque-topo'] = $bloco->retriveDisplays('destaque-topo');
?>

  <!-- row-->
  <div class="row-fluid">
     <?php if(isset($displays['destaque-topo'])): ?>
      <?php if(count($displays['destaque-topo']) > 0): ?>
    <div class="span12">
      <div id="myCarousel" class="carousel slide span12">
        <!-- Carousel items -->
        <div class="carousel-inner"> 
          <?php foreach($displays['destaque-topo'] as $k=>$d): ?>  
          <div class="<?php if($k==0): ?>active <?php endif; ?>item ">
            <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="span12"/></a>
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
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav">
          <li class="personagens"><a href="/cocorico/personagens" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="voltar"></a></li>
          <li class="joguinhos"><a class="icon" href="/cocorico/joguinhos" title="Joguinhos"></a><a href="/cocorico/joguinhos" title="Joguinhos">Joguinhos</a><span></span></li>
          <li class="brincadeiras"><a class="icon"  href="/cocorico/brincadeiras" title="Brincadeiras"></a><a href="/cocorico/brincadeiras" title="Brincadeiras">Brincadeiras</a><span></span></li>
          <li class="tvcoco"><a class="icon"  href="/cocorico/tvcocorico" title="TV Cocoricó"></a><a href="/cocorico/tvcocorico" title="TV Cocoricó">TV Cocoricó</a><span></span></li>
          <li class="diario"><a class="icon"  href="/cocorico/diario-do-julio" title="Diário do Júlio"></a><a href="/cocorico/diario-do-julio" title="Diário do Júlio">Diário do Júlio</a><span></span></li>
          <li class="familia"><a  href="/cocorico/em-familia" title="Em família">Em família</a></li>
        </ul>
      </div>
      <div class="lista-personagens">
        <h2>Conheça toda a turminha do cocoricó!</h2>
        <ul>
        <?php
        $sections = $section->subsections(); 
        if(count($sections) > 0): ?>
          <?php foreach($sections as $s): ?>
            <?php
            $block = $s->retriveBlockBySlug('icone');
            $icone = $block->retriveDisplays();
            if(count($icone) > 0): ?>
          <li><a href="<?php echo $s->retriveUrl() ?>" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="<?php echo $s->getTitle() ?>"><img src="<?php echo $icone[0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $s->getTitle() ?>" /></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php endif; ?>       
        </ul>
      </div>
    </div>
  </div>
  <!-- /row-->

  
  <!-- rodape-->
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape') ?>
  <!-- /rodape-->
  
</div>
<!-- /container-->