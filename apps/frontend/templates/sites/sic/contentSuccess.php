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

          <h2>
            Titulo Asset
          </h2>
          
          <p>
            Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
          </p>
       
          
        </div>
        <!-- /COLUNA ESQUERDA -->
     </div>  
     <!-- /CORPO SITE -->
  </div>
  <!-- / CAPA SITE -->


  