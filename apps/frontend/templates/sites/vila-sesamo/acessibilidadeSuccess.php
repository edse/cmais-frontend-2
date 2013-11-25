<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("na-tv acessibilidade");
  <?php if($section->getSlug()=="na-tv"):?>
    $(document).ready(function(){
      $(".btn-acessibilidade-topo").addClass("active");
    });  
  <?php endif; ?>
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
        <span class="icone-acessibilidade"></span>
        <?php echo $section->getTitle() ?>
      </h1>
      
      <!--container-->
      <div class="container-na-tv">
        <!--h2 class="ola"><?php echo $section->getDescription() ?></h2-->
        
        <?php $asset = $section->getAssets(); ?>
        <?php if(isset($asset)):?>  
          <?php if(count($asset) > 0):?>
            <div class="box-acessibilidade">
              <?php echo html_entity_decode($asset[0]->AssetContent->render()) ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>  
        
            
                  
         
      </div>
      <!--/container-->
      <span class="fundo-acessibilidade"></span> 
    </div>
    <!--/container conteudo-->
    
    
    
       

  </section>
  <!--/section -->
</div>
<!--div-->      
