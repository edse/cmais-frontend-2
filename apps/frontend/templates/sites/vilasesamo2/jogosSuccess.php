<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<script>
  $("body").addClass("interna");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->
<div id="content">
  <section class="filtro row-fluid">
    <div class="span12">
      <?php
        include_partial_from_folder('sites/vilasesamo2', 'global/mobile_detect'); 
        $detect = new Mobile_Detect(); 
        if ($detect->isTablet() || $detect->isMobile()) {
            // Any tablet device.
      ?> 
         <!--script--> 
         <script type="text/javascript" src="http://cmais.com.br/portal/js/smint/jquery.smint.js"></script>  
         <script type="text/javascript" src="http://cmais.com.br/portal/js/superscrollorama/greensock/TweenMax.min.js"></script> 
         <script type="text/javascript" src="http://cmais.com.br/portal/js/superscrollorama/jquery.superscrollorama.js"></script>
         
         <section class="scroll barra-topo row-fluid" >
           <a href="#content"></a>
           <h3>
             <i class="sprite-icon-jogos-med"></i>Jogos<i class="seta-scroll sprite-scroll-jogos"></i>
           </h3>
         </section>
         
         <script type="text/javascript">
       
            var controller = $.superscrollorama({reverse:true, triggerAtCenter:false}); 
            controller.addTween('.filtro', TweenMax.from( $('.barra-topo'), .5, {css:{opacity: 0}}));
            $('.barra-topo').smint();
         </script> 
        <?php
        }
        ?>   
      
      <h3><i class="sprite-icon-jogos-med"></i>Jogos</h3>
      
      <div class="span10 destaque-filtro">
        <article class="span6 atividade">
          <a class="img-destaque" href="/vilasesamo2/atividades" title="Para Colorir">
            <span class="sprite-selo">Novidade!</span>
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/img350x350.jpg" alt="Para Colorir" /> 
          </a> 
          <h1><a href="/vilasesamo2/atividades" title="Para Colorir">Para Colorir</a></h1>
        </article>
        <article class="span6 atividade">
          <a class="img-destaque" href="/vilasesamo2/atividades" title="Para Colorir"> 
            <span class="sprite-selo">Novidade!</span>
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/img350x350.jpg" alt="Para Colorir" /> 
          </a>
          <h1><a href="/vilasesamo2/atividades" title="Para Colorir">Para Colorir</a></h1>
        </article>
      </div>
      <nav class="span2">
        <p>escolha por personagem<span class="sprite-seta-down"></span></p>
        
        <ul class="filtro-personagem">
         
         <li>
          <div class="inner bel">
            <a href="/vilasesamo2/personagens/bel" title="Bel" class="btn-bel" data-filter=".bel">
              <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/bel_personagem.png" alt="Personagem" />
             </a>
          </div>
         </li>
          <li>
            <div class="inner beto">
              <a href="/vilasesamo2/personagens/beto" title="Beto" class="btn-beto" data-filter=".beto"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/beto_personagem.png" alt="Personagem" /></a>
            </div>
          </li>
          <li>
            <div class="inner comecome">
              <a href="/vilasesamo2/personagens/come-come" title="Come-come" class="btn-comecome" data-filter=".come-come"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/comecome_personagem.png" alt="Personagem" /></a>
            </div>
          </li>
          <li>
            <div class="inner elmo">
              <a href="/vilasesamo2/personagens/elmo" title="Elmo" class="btn-elmo" data-filter=".elmo"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/elmo_personagem.png" alt="Personagem" /></a>
            </div>
          </li>
          <li>
            <div class="inner enio">
              <a href="/vilasesamo2/personagens/enio" title="Ênio" class="btn-enio" data-filter=".enio"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/enio_personagem.png" alt="Personagem" /></a>
             </div>
          </li>
          <li>
            <div class="inner garibaldo">
              <a href="/vilasesamo2/personagens/garibaldo" title="Garibaldo" class="btn-garibaldo" data-filter=".garibaldo"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/garibaldo_personagem.png" alt="Personagem" /></a>
            </div>
          </li>
          <li>
            <div class="inner grover">
              <a href="/vilasesamo2/personagens/grover" title="Grover" class="btn-grover" data-filter=".grover"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/grover_personagem.png" alt="Personagem" /></a>
            </div>
          </li>
          <li>
            <div class="inner zoe">
              <a href="/vilasesamo2/personagens/zoe" title="Zoe" class="btn-zoe" data-filter=".zoe"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/botoes-carrossel/zoe_personagem.png" alt="Personagem" /></a>
             </div>
          </li>
        </ul>
      </nav>
    </div>
    
  </section>

  <span class="divisa"></span>

  <section class="todos-itens ">
    <ul  id="container" class="row-fluid">
      <li class="span4 element">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="element span4">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="element span4">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="element span4">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
      <li class="span4 element">
        <a href="#" title=""><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
        <h2><a>Nome jogo</a></h2>
      </li>
    </ul>
  </section>
  
  <span class="divisa"></span>
</div> 

<input type="hidden" id="filter-choice" value="">
<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="sprite-icon-mais"></i></a>
</nav>
<!--scripts-->

<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
<>