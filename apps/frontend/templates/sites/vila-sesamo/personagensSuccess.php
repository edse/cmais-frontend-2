<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script>
  $("body").addClass("interna personagens");
</script>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->
<div id="content">
  <section class="filtro row-fluid">
    <h1><span class="icones-sprite-interna icone-personagem-grande"></span><?php echo $section->getTitle() ?></h1>
    <div class="conteudo-asset">
      
            
      <div id="container-personagens" class="asset">
        <div class="element q-pers inner bel"  >
          <a href="/<?php echo $site->getSlug() ?>/personagens/bel" >
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_bel.png" alt="Bel" />
            <p>Bel</p>
          </a>
        </div>
        <div class="element q-pers inner beto" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/beto">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_beto.png" alt="Beto" />
            <p>Beto</p>
          </a>
        </div>
        <div class="element q-pers inner come-come" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/come-come">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_comecome.png" alt="Come-Come" />
            <p>Come-Come</p>
          </a>
        </div>
        <div class="element q-pers inner elmo" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/elmo">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_elmo.png" alt="Elmo" />
            <p>Elmo</p>
          </a>
        </div>
        <div class="element q-pers inner enio" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/enio">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_enio.png" alt="Enio" />
            <p>Enio</p>
          </a>
        </div>
        <div class="element q-pers inner garibaldo" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/garibaldo">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_garibaldo.png" alt="Garibaldo" />
            <p>Garibaldo</p>
          </a>
        </div>
        <div class="element q-pers inner grover" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/grover">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_grover.png" alt="Grover" />
            <p>Grover</p>
          </a>
        </div>
        <div class="element q-pers inner zoe" >
          <a href="/<?php echo $site->getSlug() ?>/personagens/zoe">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_zoe.png" alt="Zoe" />
            <p>Zoe</p>
          </a>
        </div>
        
      </div>
    </div>
  </section>
</div>
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<script>
  var $container = $('#container-personagens');
  $container.isotope({
    itemSelector : '.element',
  });

  
  var classes = new Array();
  $container.isotope('shuffle');
  
  setInterval(function() {
    $container.isotope('shuffle'); 
  }, 5000);  
  
</script>  