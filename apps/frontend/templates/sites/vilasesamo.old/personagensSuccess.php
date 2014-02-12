<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />
<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
?> 
<script>
  $("body").addClass("interna personagens");
</script>
<?php echo $noscript; ?>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  <!--Explicação acessibilidade-->
  <h1 tabindex="0" class="ac-explicacao">
	 <?php echo $section->getDescription(); ?>
  </h1>
  
  <!--section-->
  <section class="filtro row-fluid">
    <h1><span class="icones-sprite-interna icone-personagem-grande"></span><?php echo $section->getTitle() ?></h1>
    
    <!--conteudo-asset-->
    <div class="conteudo-asset">
      
      <div id="container-personagens" class="asset">
        <?php foreach($section->subsections() as $p): ?>     
        <div class="element q-pers inner <?php echo $p->getSlug() ?>"  >
          <a href="/<?php echo $site->getSlug() ?>/<?php echo $section->getslug() ?>/<?php echo $p->getSlug() ?>" >
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/vs_personagem_<?php echo $p->getSlug() ?>.png" alt="<?php echo $p->getTitle() ?>" />
            <p><?php echo $p->getTitle() ?></p>
          </a>
        </div>
        <?php endforeach;?>  
      </div>
      
    </div>
    <!--conteudo-asset-->
    
  </section>
  <!--section-->
  
</div>
<!--/content-->

<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<?php echo $noscript; ?>

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
<?php echo $noscript; ?>

<script>
$('#container-personagens p').each(function(index) {
  $(this).attr('tabindex', -1).attr("aria-hidden","true");
});
</script>
<?php echo $noscript; ?>