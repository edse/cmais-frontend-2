<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- SCRIPTS -->
    <script src="/portal/js/bootstrap/bootstrap.min.js"></script>
    <!-- /SCRIPTS -->
    
    <!-- CSS --> 
    
      <!-- CSS TOPO CMAIS -->
      <link rel="stylesheet" href="/portal/css/geral.css">
      <!-- /CSS TOPO CMAIS -->
      
      <!-- CSS BOOTSTRAP -->
      <link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap-responsive.min.css">
      <link rel="stylesheet" href="/portal/js/bootstrap/css/style.css">
      <!-- /CSS BOOTSTRAP -->
      
      <!-- CSS SIC -->
      <link rel="stylesheet" href="/portal/css/tvcultura/sites/sic.css" type="text/css" />
      <!-- /CSS SIC-->
      
    <!-- /CSS -->
      
    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <?php include_partial_from_folder('sites/sic', 'global/topo', array('site' => $site,'siteSections' => $siteSections)) ?>
                
      <!-- CORPO SITE -->
      <div id="corpo-sic">
        <!-- COLUNA ESQUERDA -->
        <div class="float col-585-sic">

          <h2><?php echo $asset->AssetContent->getTitle() ?></h2>
          
					<?php echo html_entity_decode($asset->AssetContent->render()) ?>       
          
        </div>
        <!-- /COLUNA ESQUERDA -->
     </div>  
     <!-- /CORPO SITE -->
  </div>
  <!-- / CAPA SITE -->


  