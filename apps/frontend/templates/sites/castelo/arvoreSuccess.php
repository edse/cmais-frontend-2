
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/arvore.css" type="text/css" />

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
            
            <!--NAVEGAÇÃO PG A PG-->
            <a hef="#" class="nav-Esquerda" title="Anterior">
              <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" style="display: none;" />
            </a>
            <a hef="#" class="nav-Direita" title="Próxima">
              <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-proxima.png" alt="Próxima Tela" style="display: none;"/>
            </a>
            <!--/NAVEGAÇÃO PG A PG-->
            
           <div class="tudo">
            
            <?php if(isset($displays["celeste"])): ?>
              <?php if(count($displays["celeste"]) > 0): ?>
            <!--celeste-->
              <div class="botao-celeste"></div>
              <a href="<?php echo $displays["celeste"][0]->retriveUrl()?>" title="<?php echo $displays["celeste"][0]->getTitle()?>" class="botao-celeste-over" name="over-celeste" style="display:none"></a>  
            <!--/celeste-->
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["lanaelara"])): ?>
              <?php if(count($displays["lanaelara"]) > 0): ?>
            <!--lanaelara-->
              <div class="botao-lanaelara"></div>
              <a href="<?php echo $displays["lanaelara"][0]->retriveUrl()?>" title="<?php echo $displays["lanaelara"][0]->getTitle()?>" class="botao-lanaelara-over" name="over-lanaelara" style="display:none"></a>  
            <!--/lanaelara-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["joaodebarro"])): ?>
              <?php if(count($displays["joaodebarro"]) > 0): ?>
            <!--joaodebarro-->
              <div class="botao-joaodebarro"></div>
              <a href="<?php echo $displays["joaodebarro"][0]->retriveUrl()?>" title="<?php echo $displays["joaodebarro"][0]->getTitle()?>" class="botao-joaodebarro-over" name="over-joaodebarro" style="display:none"></a>  
            <!--/joaodebarro-->
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["etevaldo"])): ?>
              <?php if(count($displays["etevaldo"]) > 0): ?>
             <!--etevaldo-->
              <div class="botao-etevaldo"></div>
              <a href="<?php echo $displays["etevaldo"][0]->retriveUrl()?>" title="<?php echo $displays["etevaldo"][0]->getTitle()?>" class="botao-etevaldo-over" name="over-etevaldo" style="display:none"></a>  
            <!--/etevaldo-->    
              <?php endif; ?>
            <?php endif; ?>            
            
            
            </div> 
            
            
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

