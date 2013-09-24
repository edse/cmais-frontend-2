<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/hall.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>

<!--CASTELO-->
<div id="bg" >
  
    <!-- CAPA SITE -->
    <div id="capa-site"> 
      
      <!--FANCYBOX-->
      <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js" ></script>
      <link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
      <!--/FANCYBOX-->     
     

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
          
          <!-- CAPA -->
          <div class="capa grid3">
            
                       
           <div class="tudo">
            
            <?php if(isset($displays["relogio"])): ?>
              <?php if(count($displays["relogio"]) > 0): ?>
            <!--relogio-->
              <div class="botao-relogio"></div>
              <a href="<?php echo $displays["relogio"][0]->retriveUrl()?>" title="<?php echo $displays["relogio"][0]->getTitle()?>" class="botao-relogio-over" name="over-relogio" style="display:none"></a>  
            <!--/relogio-->
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["ratinho"])): ?>
              <?php if(count($displays["ratinho"]) > 0): ?>
            <!--ratinho-->
              <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/gif-personagem-ratinho.gif" class="antena">
              <div class="botao-ratinho">
                <img class="gif-ratinho" src="http://cmais.com.br/portal/images/capaPrograma/castelo/gif-personagem-ratinho.png" width="100%">
              </div>
              <script type="text/javascript">
              
              </script>
              <a href="<?php echo $displays["ratinho"][0]->retriveUrl()?>" title="<?php echo $displays["ratinho"][0]->getTitle()?>" class="botao-ratinho-over" name="over-ratinho" style="display:none"></a>  
            <!--/ratinho-->
              <?php endif; ?>  
            <?php endif; ?>
            
            <?php if(isset($displays["godofredo"])): ?>
              <?php if(count($displays["godofredo"]) > 0): ?>
            <!--godofredo-->
              <div class="botao-godofredo"></div>
              <a href="<?php echo $displays["godofredo"][0]->retriveUrl()?>" title="<?php echo $displays["godofredo"][0]->getTitle()?>" class="botao-godofredo-over" name="over-godofredo" style="display:none"></a>  
            <!--/godofredo-->
              <?php endif; ?> 
            <?php endif; ?>
            
            
            
            </div> 
            
            <!--NAVEGAÇÃO PG A PG-->
            <a href="/castelo/home" class="nav-Esquerda" title="Anterior" target="_self">
              <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" style="display: none;" />
            </a>
            <a href="/castelo/arvore" class="nav-Direita" title="Próxima" target="_self">
              <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-proxima.png" alt="Próxima Tela" style="display: none;"/>
            </a>
            <!--/NAVEGAÇÃO PG A PG-->
            
            <!-- MENU NAVEGAÇÃO-->
             <?php include_partial_from_folder('sites/castelo','global/casteloMenuInternas', array('site'=>$site, 'section'=>$section)) ?> 
            <!--/MENU NAVEGAÇÃO-->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
</div>   
<!--/CASTELO-->

