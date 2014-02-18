<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/arquivo.css" type="text/css" />

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
            
            <?php if(isset($displays["arquivo1"])): ?>
              <?php if(count($displays["arquivo1"]) > 0): ?>
            <!--arquivo1-->
              <div class="botao-arquivo1"></div>
              <a href="<?php echo $displays["arquivo1"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo1"][0]->getTitle()?>" class="botao-arquivo1-over" name="over-arquivo1" style="display:none"></a>  
            <!--/arquivo1-->
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["arquivo2"])): ?>
              <?php if(count($displays["arquivo2"]) > 0): ?>
            <!--arquivo2-->
              <div class="botao-arquivo2"></div>
              <a href="<?php echo $displays["arquivo2"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo2"][0]->getTitle()?>" class="botao-arquivo2-over" name="over-arquivo2" style="display:none"></a>  
            <!--/arquivo2-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["arquivo3"])): ?>
              <?php if(count($displays["arquivo3"]) > 0): ?>
            <!--arquivo3-->
              <div class="botao-arquivo3"></div>
              <a href="<?php echo $displays["arquivo3"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo3"][0]->getTitle()?>" class="botao-arquivo3-over" name="over-arquivo3" style="display:none"></a>  
            <!--/arquivo3-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["arquivo4"])): ?>
              <?php if(count($displays["arquivo4"]) > 0): ?>
            <!--arquivo4-->
              <div class="botao-arquivo4"></div>
              <a href="<?php echo $displays["arquivo4"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo4"][0]->getTitle()?>" class="botao-arquivo4-over" name="over-arquivo4" style="display:none"></a>  
            <!--/arquivo4-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["arquivo5"])): ?>
              <?php if(count($displays["arquivo5"]) > 0): ?>
            <!--arquivo5-->
              <div class="botao-arquivo5"></div>
              <a href="<?php echo $displays["arquivo5"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo5"][0]->getTitle()?>" class="botao-arquivo5-over" name="over-arquivo5" style="display:none"></a>  
            <!--/arquivo5-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["arquivo6"])): ?>
              <?php if(count($displays["arquivo6"]) > 0): ?>
            <!--arquivo6-->
              <div class="botao-arquivo6"></div>
              <a href="<?php echo $displays["arquivo6"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo6"][0]->getTitle()?>" class="botao-arquivo6-over" name="over-arquivo6" style="display:none"></a>  
            <!--/arquivo2-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["arquivo7"])): ?>
              <?php if(count($displays["arquivo7"]) > 0): ?>
            <!--arquivo7-->
              <div class="botao-arquivo7"></div>
              <a href="<?php echo $displays["arquivo7"][0]->retriveUrl()?>" title="<?php echo $displays["arquivo7"][0]->getTitle()?>" class="botao-arquivo7-over" name="over-arquivo7" style="display:none"></a>  
            <!--/arquivo2-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["gato"])): ?>
              <?php if(count($displays["gato"]) > 0): ?>
            <!--gato-->
              <div class="botao-gato">
                <div class="gif-olho"></div>
              </div>
              <a href="<?php echo "/" . $site->getSlug() . '/' . $displays["gato"][0]->Asset->getSlug() ?>" class="botao-gato-over" name="over-gato" style="display:none"></a>  
            <!--/gato-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["pedro"])): ?>
              <?php if(count($displays["pedro"]) > 0): ?>
            <!--pedro-->
              <div class="botao-pedro">
                <div class="gif-pedro"></div>
              </div>
              <a href="<?php echo "/" . $site->getSlug() . '/' . $displays["pedro"][0]->Asset->getSlug() ?>" title="<?php echo $displays["pedro"][0]->getTitle()?>" class="botao-pedro-over" name="over-pedro" style="display:none"></a>  
            <!--/pedro-->  
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

