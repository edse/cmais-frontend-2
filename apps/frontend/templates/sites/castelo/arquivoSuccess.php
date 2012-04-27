<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/arquivo.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>

<!--CASTELO-->
<div id="bg" >
  
    <!-- CAPA SITE -->
    <div id="capa-site">      

      <!-- BARRA SITE -->
      <div id="barra-site">
        
        
        <div class="topo-programa">
          
          <h2>
            <a href="http://cmais.com.br/castelo" style="text-decoration: none;">
          
                <img src="/portal/images/capaPrograma/castelo/img-logo-castelo.png" class="logo" alt="Castelo Ra Tim Bum" />
              
            </a>
          </h2>
          

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('sites/castelo','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

         <div class="castelo18">
           <img src="/portal/images/capaPrograma/castelo/img-menu-hashtag.png" alt="#castelo18anos">
           <a href="https://twitter.com/#!/search/realtime/castelo18anos" target="_blank"><img src="/portal/images/capaPrograma/castelo/btn-menu-twitter.png" alt="Twitter"></a>
           <a href="#" target="_blank"><img src="/portal/images/capaPrograma/castelo/btn-menu-instagram.png" alt="Instangram"></a>

         </div>
         
        </div>
        <!-- /box-topo -->
        
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            
            <!--NAVEGAÇÃO PG A PG-->
            <a hef="#" class="nav-Esquerda" title="Anterior">
              <img src="/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" style="display: none;" />
            </a>
            <a hef="#" class="nav-Direita" title="Próxima">
              <img src="/portal/images/capaPrograma/castelo/btn-tela-proxima.png" alt="Próxima Tela" style="display: none;"/>
            </a>
            <!--/NAVEGAÇÃO PG A PG-->
            
           <div class="tudo">
            
            <!--arquivo1-->
              <div class="botao-arquivo1"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo1-over" name="over-arquivo1" style="display:none"></a>  
            <!--/arquivo1-->
            
            <!--arquivo2-->
              <div class="botao-arquivo2"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo2-over" name="over-arquivo2" style="display:none"></a>  
            <!--/arquivo2-->  
            
            <!--arquivo3-->
              <div class="botao-arquivo3"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo3-over" name="over-arquivo3" style="display:none"></a>  
            <!--/arquivo3-->  
            
            <!--arquivo4-->
              <div class="botao-arquivo4"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo4-over" name="over-arquivo4" style="display:none"></a>  
            <!--/arquivo4-->  
            
            <!--arquivo5-->
              <div class="botao-arquivo5"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo5-over" name="over-arquivo5" style="display:none"></a>  
            <!--/arquivo5-->  
            
            <!--arquivo6-->
              <div class="botao-arquivo6"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo6-over" name="over-arquivo6" style="display:none"></a>  
            <!--/arquivo2-->  
            
            <!--arquivo7-->
              <div class="botao-arquivo7"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-arquivo7-over" name="over-arquivo7" style="display:none"></a>  
            <!--/arquivo2-->  
            
            <!--gato-->
              <div class="botao-gato"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-gato-over" name="over-gato" style="display:none"></a>  
            <!--/gato-->  
            
            <!--pedro-->
              <div class="botao-pedro"></div>
              <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" class="botao-pedro-over" name="over-pedro" style="display:none"></a>  
            <!--/pedro-->  
            
            </div> 
            
            
            <!-- MENU NAVEGAÇÃO-->
            <?php include_partial_from_folder('sites/castelo','global/casteloMenuInternas') ?> 
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

