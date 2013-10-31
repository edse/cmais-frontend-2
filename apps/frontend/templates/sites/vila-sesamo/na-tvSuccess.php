<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("cuidadores");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container carrossel-->
    <div class="container-carrossel b-verde borda-arredonda">
      <h1>
        <span class="icones-sprite-interna icone-cuidadores-grande"></span>
        <?php echo $section->getTitle() ?>
      </h1>
    </div>
    <!--/container carrossel-->
    
  </section>
  <!--/section -->
</div>
<!--div-->      

<?php
/*
<!-- barra do titulo da seção -->
<div>
  <span><?php echo $section->getTitle() ?></span>
</div>
<!--/barra do titulo da seção -->

 * programado

<!-- destaques -->
<div>
  <?php if(isset($displays['historia'])): ?>
    <?php if(count($displays['historia']) > 0): ?>
  <div>
      <?php echo html_entity_decode($displays['historia']->Asset->AssetContent->render()) ?>
  </div>

      <?php if(isset($displays['programacao-na-tv'])): ?>
        <?php if(count($displays['programacao-na-tv']) > 0): ?>
  <div>
    <a href="<?php echo $displays['programacao-na-tv'][0]->retriveUrl() ?>" title="<?php echo $displays['programacao-na-tv'][0]->getTitle() ?>">
      <img src="<?php echo $displays['programacao-na-tv'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['programacao-na-tv'][0]->getTitle() ?>" />
      <span><?php echo $displays['programacao-na-tv'][0]->getTitle() ?></span>
      <span><?php echo $displays['programacao-na-tv'][0]->getHtml() ?></span>
    </a>
  </div>
  
  <div>
    <a href="<?php echo $displays['programacao-na-tv'][1]->retriveUrl() ?>" title="<?php echo $displays['programacao-na-tv'][1]->getTitle() ?>">
      <img src="<?php echo $displays['programacao-na-tv'][1]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['programacao-na-tv'][1]->getTitle() ?>" />
      <span><?php echo $displays['programacao-na-tv'][1]->getTitle() ?></span>
      <span><?php echo $displays['programacao-na-tv'][1]->getHtml() ?></span>
    </a>
  </div>          
        <?php endif; ?>  
      <?php endif; ?>  

    <?php endif; ?>  
  <?php endif; ?>  
</div>
<!--/destaques-->

 */
?>



