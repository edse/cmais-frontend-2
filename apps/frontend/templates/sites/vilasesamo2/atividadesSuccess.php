<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna atividades");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
<!--section-->
<section class="filtro row-fluid">
  <!--span12-->
  <div class="span12" role="navigation">
    
    <!--h3><i class="sprite-icon-colorir-med"></i>Atividades</h3-->
    <h1 title="Destaque Atividades"><i class="sprite-icon-colorir-med"></i>Atividades</h1>
    
    <!--destaque-filtro-->
    <div class="span10 destaque-filtro">
      <!--/destaques-->
      <div class="aba1">
        <h2 aria-describedby="Novidade Atividade">
          <article class="span6 clipes">
            <a class="img-destaque" href="/vilasesamo2/atividades">
              <span class="sprite-selo">Novidade!</span>
              <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/img350x350.jpg" alt="Descrição Figura destaque 1" />
              <p>Para Colorir</p> 
            </a> 
          </article>
        </h2>
        <h2 aria-describedby="Novidade Atividade 2">
          <article class="span6 clipes">
            <a class="img-destaque" href="/vilasesamo2/atividades">
              <span class="sprite-selo">Novidade!</span>
              <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/img350x350.jpg" alt="Descrição Figura destaque 2" />
              <p>Para Colorir</p> 
            </a> 
          </article>
        </h2>
      </div>
      <!--/destaques-->
    </div>
    <!--destaque-filtro-->
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
  <!--/span12-->
</section>
<!--/section-->
<span class="divisa"></span>

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
