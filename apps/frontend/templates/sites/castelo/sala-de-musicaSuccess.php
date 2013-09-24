<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/sala-de-musica.css" type="text/css" />

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
            
           <!--tudo-->            
           <div class="tudo">
            
                        
            <?php if(isset($displays["penelope"])): ?>
              <?php if(count($displays["penelope"]) > 0): ?>
            <!--penelope-->
              <div class="botao-penelope">
                <div class="gif-penelope"></div>
              </div>
              
              <a href="<?php echo $displays["penelope"][0]->retriveUrl()?>" title="<?php echo $displays["penelope"][0]->getTitle()?>" class="botao-penelope-over" name="over-penelope" style="display:none"></a>  
            <!--/penelope-->
              <?php endif; ?>  
            <?php endif; ?>
            
            <!--papeis de parede-->
            <a href="http://tvratimbum.cmais.com.br/casteloratimbum/castelo-1" target="_blank" title="Papéis de Parede" class="ppb"></a> 
            <div class="papeis-de-parede-over" style="display:none;"></div> 
            <div class="papeis-de-parede"></div>
            <!--/papeis de parede-->
            
            <script>
              $(document).ready(function(){
                
                $('.ppb').hover(function(){
                  $('.papeis-de-parede').fadeOut('fast');
                  $('.papeis-de-parede-over').fadeIn('fast');
                });
                $('.ppb').mouseleave(function(){
                  $('.papeis-de-parede').fadeIn('fast');
                  $('.papeis-de-parede-over').fadeOut('fast');
                });
              });
            </script>
            
            </div> 
            <!--tudo-->

            
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

