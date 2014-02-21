<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página.</noscript>"
?>
<script>
  $("body").addClass("na-tv acessibilidade");
  <?php if($section->getSlug()=="acessibilidade"):?>
    $(document).ready(function(){
      $(".btn-acessibilidade-topo").addClass("active");
    });  
  <?php endif; ?>
</script>
<?php echo $noscript; ?>


<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--Explicação acessibilidade-->
  <h1 tabindex="0" class="ac-explicacao">
   <?php echo $section->getDescription(); ?>
  </h1>
  
  
  <!--section -->
  <section class="filtro ">
    
    <!--container conteudo-->
    <div class="b-verde borda-arredonda">
      <h1>
        <span class="icone-acessibilidade"></span>
        <?php echo $section->getTitle() ?>
      </h1>
      
      <!--container-->
      <div class="container-na-tv">
      
        <?php $asset = $section->getAssets(); ?>
        <?php if(isset($asset)):?>  
          <?php if(count($asset) > 0):?>
            <div class="box-acessibilidade">
              <?php echo html_entity_decode($asset[0]->AssetContent->render()) ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>  
        
         <!--Explicação acessibilidade visite o site da Laramara-->
      <a href="http://laramara.org.br/" tabindex="0" class="ac-link" aria-label="Visite o site da LARAMARA"></a>
      <span class="fundo-acessibilidade" aria-label="Imagem da Bel e Groove felizes por terem um site acessível" tabindex="0">
        <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagens/img_acessibilidade.png" />
      </span>
         
      </div>
      <!--/container-->
    </div>
    <!--/container conteudo-->
    
  <script>
  $('.box-acessibilidade p').each(function(index) {
    $(this).attr('tabindex', 0);
  });
  </script>
  <?php echo $noscript; ?>
  <script>
    $('.box-acessibilidade p > a').each(function(index) {
      $(this).attr('tabindex', -1).attr("aria-hidden","true");
    });
    </script>
    <?php echo $noscript; ?>
       

  </section>
  <!--/section -->
</div>
<!--div-->      
