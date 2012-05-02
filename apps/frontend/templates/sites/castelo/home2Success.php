<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-site">
</div>


<!--CASTELO--> 
<div id="castelo" >
    
    <!--FANCYBOX-->
    <script type="text/javascript" src="/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js" ></script>
    <link rel="stylesheet" href="/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <!--/FANCYBOX-->
  
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
            
            
            

            
            <!--PERGUNTA-->
            <!--PORTEIRO-->
            <div class="balao" style="display:none" >
              
              <div class="senha" style="display:none"></div>
              <div class="pergunta1" style="display:none"></div>
              
            </div>
            
            <div class="botao-porteiro"></div>
            <div class="gif-porteiro"></div>
            <a href="javascript:" class="botao-porteiro-over"  name="over-porteiro"style="display:none"></a>
            <!--/PORTEIRO-->
            
            <?php if(isset($displays["dr-abobrinha"])): ?>
            	<?php if(count($displays["dr-abobrinha"]) > 0): ?>
            <!--DR.ABROBINHA-->
            <div class="botao-dr-abobrinha"></div>
            <div class="gif-dr-abobrinha"></div>
            <a href="<?php echo $displays["dr-abobrinha"][0]->retriveUrl()?>" title="<?php echo $displays["dr-abobrinha"][0]->getTitle()?>" class="botao-dr-abobrinha-over" name="over-dr-abobrinha" style="display:none"></a>  
            <!--/DR.ABROBINHA-->
            	<?php endif; ?>
            <?php endif; ?>  
            
            
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

