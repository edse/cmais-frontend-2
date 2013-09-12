<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<script>
  $("body").addClass("interna");

</script>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>
<!-- /HEADER -->
<div id="content">
  <section class="pais incluir">
    <span class="divisa"></span>
    <h2>Incluir Brincando</h2>
    <ul class="dropdown-menu">
      <li><a href="#">categoria 01</a></li>
      <li><a href="#">categoria 02</a></li>
      <li><a href="#">categoria 03</a></li>
      <li><a href="#">categoria 04</a></li>
    </ul>
    <div class="content span12 row-fluid">
      <div class="span4 dica">
        <span class="sprite-aspa-esquerda"></span>
        <h2><a href="#">Nome da Dica</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellentesque sodales cursus elit, ac suscipit eros consectetur nec.
        Aenean at metus.</p>
        <span class="sprite-aspa-direita"></span>
        <button type="submit" class="btn">
          baixar
        </button>
      </div>
      <div class="span4 box-select">
        <a href="#" title=""> <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="thumb do jogo" /> </a>
        <h2><a>Nome jogo</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend.</p>
      </div>
      <div class="span4">
        <p>Conheça nossos parceiros:</p>
        <a class="publicidade" href="#" title="Publicidade"> <img src="/portal/images/capaPrograma/vilasesamo2/banner-sesc.png" alt="Sesc" /> </a>
        <a class="publicidade" href="#" title="Publicidade"> <img src="/portal/images/capaPrograma/vilasesamo2/banner-mapa.png" alt="Mapa do Brincar" /> </a>
        <p>Você também pode escolher o jogo de acordo com as preferências da criança:</p>
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret sprite-seta-down-amarela"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">categoria 01</a></li>
            <li><a href="#">categoria 02</a></li>
            <li><a href="#">categoria 03</a></li>
            <li><a href="#">categoria 04</a></li>
          </ul>
        </div>
      </div>
      <h2 class="fechar-toogle ativo"><span class="sprite-seta-up"></span></h2>
    </div>
    <span class="linha"></span>
  </section>
  <section class="filtro row-fluid">
    <div class="span12">
      <?php 
      include_partial_from_folder('sites/vilasesamo2', 'global/mobile_detect');
      $detect = new Mobile_Detect();
      if ($detect->isTablet() || $detect->isMobile()) {
      // Any tablet device.
      ?>
      <!--script-->
      <script type="text/javascript" src="/portal/js/smint/jquery.smint.js"></script>
      <script type="text/javascript" src="/portal/js/superscrollorama/greensock/TweenMax.min.js"></script>
      <script type="text/javascript" src="/portal/js/superscrollorama/jquery.superscrollorama.js"></script>
      <section class="scroll barra-topo row-fluid" >
        <a href="#content"></a>
        <h3><i class="sprite-icon-jogos-med"></i>Jogos<i class="seta-scroll sprite-scroll-jogos"></i></h3>
      </section>
      <script type="text/javascript">
        var controller = $.superscrollorama({
          reverse : true,
          triggerAtCenter : false
        });
        controller.addTween('.filtro', TweenMax.from($('.barra-topo'), .5, {
          css : {
            opacity : 0
          }
        }));
        $('.barra-topo').smint();

      </script>
      <?php      }      ?>

      <h3><i class="sprite-icon-jogos-med"></i>Jogos</h3>
      <div class="span10 destaque-filtro">
        <article class="span6 atividade">
          <a class="img-destaque" href="/vilasesamo2/atividades" title="Para Colorir"> <span class="sprite-selo">Novidade!</span> <img src="/portal/images/capaPrograma/vilasesamo2/img350x350.jpg" alt="Para Colorir" /> </a>
          <h1><a href="/vilasesamo2/atividades" title="Para Colorir">Para Colorir</a></h1>
        </article>
        <article class="span6 atividade">
          <a class="img-destaque" href="/vilasesamo2/atividades" title="Para Colorir"> <span class="sprite-selo">Novidade!</span> <img src="/portal/images/capaPrograma/vilasesamo2/img350x350.jpg" alt="Para Colorir" /> </a>
          <h1><a href="/vilasesamo2/atividades" title="Para Colorir">Para Colorir</a></h1>
        </article>
      </div>
      <nav class="span2">
        <p>escolha o jogo por personagem<span class="sprite-seta-down"></span></p>
        <ul class="filtro-personagem">
          <li><a href="javascript:;" title="" data-filter=".bel"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".beto"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".come-come"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".elmo"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".enio"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".garibaldo"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".grover"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
          <li><a href="javascript:;" title="" data-filter=".zoe"><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="personagem" /></a></li>
        </ul>
      </nav>
    </div>
  </section>
  <span class="divisa"></span>
  <section class="todos-itens ">
    <ul  id="container" class="row-fluid">
      <li class="span4 element beto"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 element come-come"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 element elmo"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 element enio"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 element enio"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="element span4 garibaldo"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="element span4 grover"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="element span4 zoe"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
      <li class="span4 element bel"><a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a><h2><a>Nome jogo</a></h2></li>
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
