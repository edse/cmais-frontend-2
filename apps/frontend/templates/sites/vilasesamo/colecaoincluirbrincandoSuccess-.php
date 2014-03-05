<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página.</noscript>"
?> 

<script>
  $("body").addClass("interna campanhas categorias");
  
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
  <section id="categoria-box-pais" class="filtro row-fluid pais categorias">
    
    
      
    <!--container conteudo-->
    <div class="b-amarelo borda-arredonda">
      <h1>
        <?php echo $section->getTitle() ?>
      </h1>
      
      
  
       
        <div class="container-campanhas" tabindex="0" aria-label="" tabindex="0""> 
          <!-- selo -->

                <img class="" src="http://midia.cmais.com.br/assets/image/original/ffe37ac4ab595d3e01c4ed5e9f5ead27a21a104e.jpg" alt="img_titulo_incluir-brincando">

          <!--/selo-->
          
          
         
          <div class="texto col-incluir ">
            <p>
              Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. <br> <br>
              Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris
               qui num significa nadis i pareci latim. <br> <br>Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Mussum ipsum cacilds, vidis litro abertis. 
               Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in 
               elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim.<br> <br>
                Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. <br> <br>
                Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
                amistosis quis leo. <br> <br>Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia 
                ce receita de bolis, mais bolis eu num gostis.
            </p>
       
            
					</div>
					
          <div class="btns-download">
          	<h3>Baixe os arquivos:</h3>
            	<div class="pdf pdf-incluir">
            		<a href="http://midia.cmais.com.br/assets/file/original/ac143cf466819d5d8fe00db24db62750a4825894.pdf">
									<p>Dicas para Incluir Brincando</p>
									
								</a>
							</div>
							
            	<div class="pdf pdf-caderno">
								<a href="http://midia.cmais.com.br/assets/file/original/7bb0700d26b34670ed3baef95e405c9dee83b7d9.pdf">
								<p>Caderno de Formação - Incluir Brincando</p>
								</a>
							</div>
							
            	<div class="pdf audio-caderno">
								<a href="">
								<p>Audiobook Dicas + Caderno de Formação - Incluir Brincando</p>
								</a>
							</div>
							
            	<div class="pdf audio-descricao">
								<a href="">
								<p>Áudiodescrição dos Personagens: Bel, Garibaldo e Sivan</p>
								</a>
							</div>
							
						</div>
              
        </div>
       
     
           
</div>
<!--/content--> 
</section>
<!--paginacao-->
<?php //include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,  'pager'=>$pager , 'pager2'=>$pager2, 'parent'=>$parent)) ?>
<!--/paginacao-->
</div>
