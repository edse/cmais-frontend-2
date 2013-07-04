<?php use_helper('I18N', 'Date') ?>

<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna <?php echo $section->getSlug() ?>");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->
<div id="content">
  <section class="scroll row-fluid">
    <h3><i class="sprite-icon-<?php echo $section->getSlug() ?>-med"></i><?php echo $section->getTitle() ?><i class="seta-scroll sprite-scroll-<?php echo $section->getSlug() ?>"></i></h3>
  </section>
  <section class="filtro row-fluid">
    <div class="span12">
      <h3><i class="sprite-icon-<?php echo $section->getSlug() ?>-med"></i><?php echo $section->getTitle() ?></h3>
      
      <div class="span10 destaque-filtro especial">
        <?php
          //if($section->getParentSectionId())
          $parentSection = Doctrine::getTable('Section')->findOneById(2388);
          $subsections = $parentSection->subsections();
          foreach($subsections as $k=>$s)
            echo $k;
        ?>
        <?php /*
        <?php if(isset($parentSection)): ?>
        <?php if($parentSection->subsections()): ?>
        <ul class="nav nav-tabs" id="myTab">
          <?php foreach($parentSection->subsections() as $k=>$s): ?>
            <?php $k++; ?>
          <li class="<?php if($s->getId() == $section->getId()): ?>active <?php endif; ?>aba<?php echo $k ?>"><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <?php endif; ?>
         */ ?>
         
 
        <div class="tab-content">
          
          <div class="tab-pane active">
            <?php if(isset($displays['destaque-1'])): ?>
              <?php if(count($displays['destaque-1']) > 0): ?>
            <article class="span6">
              <a class="img-destaque" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-1'][0]->getTitle() ?>">
                <span class="sprite-selo">Novidade!</span>
                <img src="<?php echo $displays['destaque-1'][0]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" /> 
              </a> 
              <h1><a href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-1'][0]->getTitle() ?>"><?php echo $displays['destaque-1'][0]->getTitle() ?></a></h1>
            </article>
              <?php endif; ?>
            <?php endif; ?>
            <?php if(isset($displays['destaque-2'])): ?>
              <?php if(count($displays['destaque-2']) > 0): ?>
            <article class="span6">
              <a class="img-destaque" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-2'][0]->getTitle() ?>">
                <span class="sprite-selo">Novidade!</span>
                <img src="<?php echo $displays['destaque-2'][0]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" /> 
              </a> 
              <h1><a href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-2'][0]->getTitle() ?>"><?php echo $displays['destaque-2'][0]->getTitle() ?></a></h1>
            </article>
              <?php endif; ?>
            <?php endif; ?>
          </div>
          
        </div>
       
      </div>
      <nav class="span2">
        <p>escolha o jogo por personagem<span class="sprite-seta-down"></span></p>
        <ul class="filtro-personagem">
          <li><a href="#" title="" data-filter=".bel"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".beto"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".come-come"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".elmo"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".enio"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".garibaldo"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".grover"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          <li><a href="#" title="" data-filter=".zoe"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a></li>
          
        </ul>
      </nav> 
    </div>
    
  </section>
  <span class="divisa"></span>
  <section class="todos-itens ">
    <ul  id="container" class="row-fluid">
      <li class="span4 element beto">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element come-come">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element elmo">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element enio">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element enio">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="element span4 garibaldo">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="element span4 grover">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="element span4 zoe">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element bel">
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
    </ul>
  </section>
  <span class="divisa"></span>
</div>

<input type="hidden" id="filter-choice" value="">
<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais"><i class="sprite-icon-mais"></i>Carregar mais jogos</a>
</nav>
<!--scripts-->

<script src="/portal/js/isotope/jquery.isotope.min.js"></script>
<script src="/portal/js/isotope/jquery.infinitescroll.min.js"></script>
<script src="/portal/js/vilasesamo2/internas-isotope.js"></script>

