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
  <section id="categoria-box-pais" class="filtro row-fluid incluir-brincando-colecao categorias">
    
    
      
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
             A <b style="letter-spacing: -1px;font-size: medium;"> Coleção Incluir Brincando</b> reúne materiais destinados aos profissionais que trabalham na Educação Infantil etodas as pessoas que se interessam pelos temas: desenvolvimento inclusivo, brincar e infância.<br><br>
 
						Nela você encontra referenciais teóricos e práticos para promover o desenvolvimento integral das crianças, sensibilizando toda a comunidade sobre o direito à brincadeira segura e inclusiva.<br><br>
						 
						Os materiais da Coleção buscam estabelecer um diálogo entre os conteúdos do <b style="letter-spacing: -1px;font-size: medium;">Curso de Formação Incluir Brincando</b> e as práticas lúdicas promovidas pelos educadores no cotidiano das crianças.

            </p>
       
            
					</div>
					<div class="asset">
						<img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/img_incluir.jpg">
					</div>
					
          <div class="btns-download">
          	<h3>Materiais disponíveis para download gratuito:</h3>
            	<div class="pdf pdf-incluir">
            		<a href="http://midia.cmais.com.br/assets/file/original/ac143cf466819d5d8fe00db24db62750a4825894.pdf" target="_blank">
									<p>Dicas para Incluir Brincando</p>
									
								</a>
							</div>
							
            	<div class="pdf pdf-caderno">
								<a href="http://midia.cmais.com.br/assets/file/original/7bb0700d26b34670ed3baef95e405c9dee83b7d9.pdf" target="_blank">
								<p>Caderno de Formação - Incluir Brincando</p>
								</a>
							</div>
							
            	<!--div class="pdf audio-caderno">
								<a href="">
								<p>Audiobook Dicas + Caderno de Formação</p>
								</a>
							</div>
							
            	<div class="pdf audio-descricao">
								<a href="">
								<p>Áudiodescrição dos Personagens: Bel, Garibaldo e Sivan</p>
								</a>
							</div-->
							
						</div>
              
        </div>

     
           
</div>
<!--/content--> 
</section>
<!--paginacao-->
<?php //include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,  'pager'=>$pager , 'pager2'=>$pager2, 'parent'=>$parent)) ?>
<!--/paginacao-->
</div>
