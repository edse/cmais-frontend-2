<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/cozinha.css" type="text/css" />

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
            
            <?php if(isset($displays["bongo"])): ?>
              <?php if(count($displays["bongo"]) > 0): ?>
            <!--nino-->
              <div class="botao-bongo"></div>
              <a href="<?php echo $displays["bongo"][0]->retriveUrl()?>" title="<?php echo $displays["bongo"][0]->getTitle()?>" class="botao-bongo-over" name="over-bongo" style="display:none"></a>  
            <!--/nino-->
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["caipora"])): ?>
              <?php if(count($displays["caipora"]) > 0): ?>
            <!--zeca-->
              <div class="botao-caipora"></div>
              <a href="<?php echo $displays["caipora"][0]->retriveUrl()?>" title="<?php echo $displays["caipora"][0]->getTitle()?>" class="botao-caipora-over" name="over-caipora" style="display:none"></a>  
            <!--/zeca-->  
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["dedolandia"])): ?>
              <?php if(count($displays["dedolandia"]) > 0): ?>
            <!--biba-->
              <div class="botao-dedolandia"></div>
              <a href="<?php echo $displays["dedolandia"][0]->retriveUrl()?>" title="<?php echo $displays["dedolandia"][0]->getTitle()?>" class="botao-dedolandia-over" name="over-dedolandia" style="display:none"></a>  
            <!--/biba-->
              <?php endif; ?>
            <?php endif; ?>
            
            <?php if(isset($displays["lavarmaos"])): ?>
              <?php if(count($displays["lavarmaos"]) > 0): ?>
            <!--biba-->
              <div class="botao-lavarmaos"></div>
              <a href="<?php echo $displays["lavarmaos"][0]->retriveUrl()?>" title="<?php echo $displays["lavarmaos"][0]->getTitle()?>" class="botao-lavarmaos-over" name="over-lavarmaos" style="display:none"></a>  
            <!--/biba-->
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

