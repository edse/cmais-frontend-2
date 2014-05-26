<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/castelo/morgana.css" type="text/css" />

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
            
                        
            <?php if(isset($displays["morgana"])): ?>
              <?php if(count($displays["morgana"]) > 0): ?>
            <!--morgana-->
              <div class="botao-morgana"></div>
              <div class="gif-morgana"></div>
              <a href="<?php echo $displays["morgana"][0]->retriveUrl()?>" title="<?php echo $displays["morgana"][0]->getTitle()?>" class="botao-morgana-over" name="over-morgana" style="display:none"></a>  
            <!--/morgana-->
              <?php endif; ?>  
            <?php endif; ?>
            
            <?php if(isset($displays["adelaide"])): ?>
              <?php if(count($displays["adelaide"]) > 0): ?>
            <!--adelaide-->
              <div class="botao-adelaide">
                 <div class="gif-adelaide"></div>
              </div>
              <a href="<?php echo $displays["adelaide"][0]->retriveUrl()?>" title="<?php echo $displays["adelaide"][0]->getTitle()?>" class="botao-adelaide-over" name="over-adelaide" style="display:none"></a>  
            <!--/adelaide-->
              <?php endif; ?>  
            <?php endif; ?>
            

            <!--valdirene-->
              <div class="botao-valdirene">
                <div class="gif-valdirene"></div>
              </div>
              <!--a href="http://tvratimbum.cmais.com.br/casteloratimbum/carinhas-castelo-ra-tim-bum-1" target="_blank" title="Carinhas - Castelo Ra Tim Bum" class="botao-valdirene-over" name="over-valdirene" style="display:none"></a-->
              <a href="#" target="_self" title="Carinhas - Castelo Ra Tim Bum" class="botao-valdirene-over" name="over-valdirene" style="display:none"></a>  
            <!--/valdirene-->
                       
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

