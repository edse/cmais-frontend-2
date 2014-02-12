<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
?> 
<script>
  $("body").addClass("na-tv");
  <?php if($section->getSlug()=="na-tv"):?>
    $(document).ready(function(){
      $(".btn-na-tv-topo").addClass("active");
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
  <section class="filtro row-fluid">
    
    <!--container conteudo-->
    <div class="b-verde borda-arredonda">
      <h1 title="Na tv">
        <span class="icones-sprite-interna icone-na-tv-grande"></span>
        <?php echo $section->getTitle() ?>
      </h1>
      
      <!--container-->
      <section><!--só leu qndo tirei o aria-hidden e o tabindex -1-->
        <div class="container-na-tv">
          <h2 class="ola" tabindex="0" aria-label="Olá">Olá!</h2>
          
          <?php if(isset($displays['historia'])): ?>
            <?php if(count($displays['historia']) > 0): ?>
              <?php echo html_entity_decode($displays['historia'][0]->Asset->AssetContent->render()) ?>
            <?php endif; ?>
          <?php endif; ?>
          <!--Explicação acessibilidade visite o site da Vila Sesamo nos EUA-->
		  <a href="http://www.sesameworkshop.org/" tabindex="0" class="ac-link" aria-label="Visite o site da Vila Sésamo nos Estados Unidos"></a>

          
          <?php if(isset($displays['programacao-na-tv'])): ?>
            <?php if(count($displays['programacao-na-tv']) > 0): ?>
                     
            <!--container-horario-->
            <div class="container-horarios" accesskey="h">
              
              <!--box-horario-->
              <?php foreach($displays['programacao-na-tv'] as $k=>$d):?>
              <?php  $aria = $d->getDescription(); ?>  
                 
              <div class="box-horario <?php if($k==0) echo "sem-margem-l"?>">
                
                <div class="box-logo">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                    <span class="img-logo">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" aria-label="<?php echo $d->getTitle() .". ".$aria ?>" />
                    </span>
                    <span class="icones-na-tv icone-seta-box"></span>
                  </a>  
                 </div>
                  
                  <h2><?php echo $d->getTitle() ?></h2> 
                  <?php
                  $aria2= html_entity_decode($d->getHtml());
                  $aria2= str_replace( "<br>", " ", $aria2);
                  ?>
                  <p aria-label="<?php echo "Horário na ".$d->getTitle(). ". " . $aria2 ?>" ><?php echo html_entity_decode($d->getHtml()) ?></p>
              </div>
              <?php endforeach?>
              <!--/box-horario-->
              
            </div>
            <!--/container-horario-->
            <?php endif; ?>
          <?php endif; ?>
          
           
        </div>
        <!--/container-->
      </section>
      <span class="fundo-na-tv" aria-label="Imagem do Garibaldo com a Bel dizendo: Olá!" tabindex="0"></span> 
    </div>
    <!--/container conteudo-->
    
    <script>
    $('.container-na-tv p').each(function(index) {
      $(this).attr('tabindex', 0);
    });
    </script>
    <?php echo $noscript; ?>
    <script>
    $('.container-na-tv p > a').each(function(index) {
      $(this).attr('tabindex', -1).attr("aria-hidden","true");
    });
    </script>
    <?php echo $noscript; ?>
   
    
       

  </section>
  <!--/section -->
</div>
<!--div-->      
