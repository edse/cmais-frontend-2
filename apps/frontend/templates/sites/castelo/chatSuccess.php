<?php 
header("Location: http://cmais.com.br/castelo/chat-ao-vivo");
die();
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/interna.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>

<!--CASTELO-->
<div id="chat" >
  
    <!-- CAPA SITE -->
    <div id="capa-site">      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          
          <h2>
            <a href="http://cmais.com.br/castelo" style="text-decoration: none;">
          
                <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/img-logo-castelo.png" class="logo" alt="Castelo Ra Tim Bum" />
              
            </a>
          </h2>
          

					<?php include_partial_from_folder('sites/castelo','global/like', array('uri' => $uri)) ?>          
          
          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('sites/castelo','global/menu', array('siteSections' => $siteSections, 'section' => $section)) ?>

         
        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->
      

      <!-- MIOLO -->
      <div id="miolo">
        
        

       <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
           <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <?php include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["destaque-principal"])) ?>

            </div>
            <!-- /ESQUERDA -->
            <?php if(isset($displays['assista-aos-episodios'])) include_partial_from_folder('sites/castelo','global/display-videos',array('displays' => $displays["assista-aos-episodios"])) ?>
        </div>
        <!-- /CONTEUDO PAGINA -->
        
        
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->