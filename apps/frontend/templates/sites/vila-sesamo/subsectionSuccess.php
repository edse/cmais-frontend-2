<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna <?php echo $section->getSlug() ?>");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
<!--section-->
<section class="filtro row-fluid">
  <!--span12-->
  <div class="span12" role="main">
    
    <!--h3><i class="sprite-icon-colorir-med"></i>Atividades</h3-->
    <h1 title="Destaque"><i class="sprite-icon-colorir-med"></i><?php echo $section->getTitle() ?></h1>
    
    <?php if(isset($displays['destaque-1']) || isset($displays['destaque-2'])): ?>
      <?php if(count($displays['destaque-1']) > 0 || count($displays['destaque-2']) > 0): ?>
    <!--destaque-filtro-->
    <div class="span10 destaque-filtro">
      <!--/destaques-->
      <div class="aba1">
        <?php if(isset($displays['destaque-1'])): ?>
          <?php if(count($displays['destaque-1']) > 0): ?>
        <h2 aria-describedby="Novidade">
          <article class="span6 clipes">
            <a class="img-destaque" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>">
              <span class="sprite-selo">Novidade!</span>
              <img src="<?php echo $displays['destaque-1'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" />
              <p><?php echo $displays['destaque-1'][0]->getTitle() ?></p> 
            </a> 
          </article>
        </h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($displays['destaque-2'])): ?>
          <?php if(count($displays['destaque-2']) > 0): ?>
        <h2 aria-describedby="Novidade">
          <article class="span6 clipes">
            <a class="img-destaque" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>">
              <span class="sprite-selo">Novidade!</span>
              <img src="<?php echo $displays['destaque-2'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" />
              <p><?php echo $displays['destaque-2'][0]->getTitle() ?></p> 
            </a> 
          </article>
        </h2>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--/destaques-->
    </div>
    <!--destaque-filtro-->
      <?php endif; ?>
    <?php endif; ?>
    
    <?php include_partial_from_folder('sites/vilasesamo', 'global/sidebar-personagens') ?>
        
  </div>
  <!--/span12-->
</section>
<!--/section-->
<span class="divisa"></span>


<!--/section-->
<section class="todos-itens ">
  <!--lista-->
  <ul role="contentinfo" id="container" class="row-fluid">
    <li class="span4 element bel"> 
      <a href="#" title="">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
        <i class="sprite-icons-new sprite-icone_atividade"></i>
        <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo1 Nomejogo3 Nomejogo3</div>
      </a>
    </li>
    <li class="span4 element bel"> 
      <a href="#" title="">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
        <i class="sprite-icons-new sprite-icone_atividade"></i>
        <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo2 Nomejogo3 Nomejogo3</div>
      </a>
    </li>
    <li class="span4 element bel"> 
      <a href="#" title="">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
        <i class="sprite-icons-new sprite-icone_atividade"></i>
        <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo3 Nomejogo3 Nomejogo3</div>
      </a>
    </li>
    <li class="span4 element bel"> 
      <a href="#" title="">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
        <i class="sprite-icons-new sprite-icone_atividade"></i>
        <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo4 Nomejogo3 Nomejogo3</div>
      </a>
    </li>
    <li class="span4 element bel"> 
      <a href="#" title="">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
        <i class="sprite-icons-new sprite-icone_atividade"></i>
        <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo5 Nomejogo3 Nomejogo3</div>
      </a>
    </li>
    <li class="span4 element bel"> 
      <a href="#" title="">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" />
        <i class="sprite-icons-new sprite-icone_atividade"></i>
        <div><img src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/>Nome jogo6 Nomejogo3 Nomejogo3</div>
      </a>
    </li>
  </ul> 
  <!--lista-->  
</section>
<!--/section-->

</div>
<!--/content-->
  


<input type="hidden" id="filter-choice" value="">
<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="sprite-icon-mais"></i></a>
</nav>

<!--scripts-->
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
