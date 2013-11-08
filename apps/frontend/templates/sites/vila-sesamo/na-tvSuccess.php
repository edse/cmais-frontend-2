<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("na-tv");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container conteudo-->
    <div class="b-verde borda-arredonda">
      <h1>
        <span class="icones-sprite-interna icone-na-tv-grande"></span>
        <?php echo $section->getTitle() ?>
      </h1>
      
      <!--container-->
      <div class="container-na-tv">
        <h2 class="ola">Olá!</h2>
        
        <?php if(isset($displays['historia'])): ?>
          <?php if(count($displays['historia']) > 0): ?>
            <?php echo html_entity_decode($displays['historia'][0]->Asset->AssetContent->render()) ?>
          <?php endif; ?>
        <?php endif; ?>
                  
        <!--container-horario-->
        <div class="container-horarios">
          
          <!--box-horario-->
          <div class="box-horario sem-margem-l">
            
            <div class="box-logo">
              <span class="icones-na-tv icone-tv-cultura"></span>
              <span class="icones-na-tv icone-seta-box"></span>
            </div>
            
            
            <h2>TV CULTURA</h2> 
            <p>Sábados - 8h<br>No Quintal da Cultura</p>
              
          </div>
          <!--/box-horario-->
          
          <!--box-horario-->
          <div class="box-horario">
            
            <div class="box-logo">
              <span class="icones-na-tv icone-tv-ratim-bum"></span>
              <span class="icones-na-tv icone-seta-box"></span>
            </div>
            
            <h2>TV Rá-tim-bum</h2>
            <p>Todos os dias - 6h e 0h<br>Na Nome da Faixa</p>
                
          </div>
          <!--/box-horario-->
          
        </div>
        <!--/container-horario-->
        
         
      </div>
      <!--/container-->
      <span class="fundo-na-tv"></span> 
    </div>
    <!--/container conteudo-->
    
    
    
       

  </section>
  <!--/section -->
</div>
<!--div-->      
