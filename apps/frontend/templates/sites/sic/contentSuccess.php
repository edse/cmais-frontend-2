<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $site->getTitle()." - ".$asset->getTitle() ?></title>
	<!-- SCRIPTS -->
    <script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput-1.3.min.js"></script>
    <script src="http://cmais.com.br/portal/js/libs/modernizr-2.5.3-respond-1.1.0.min.js" type="text/javascript"></script>
  	<script>
      $(".collapse").collapse();
      
      $(document).ready(function(){
        $(".dicas").click(function(){
          $(this).prev().toggleClass('icon-minus');
        });
        $('.formas').click(function(){
          $(this).prev().toggleClass('icon-circle-arrow-down');
        });
      });
    </script>  
	<!-- /SCRIPTS -->
      
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/style.css">
    <!-- /CSS BOOTSTRAP -->
      
    <!-- CSS SIC -->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/sic.css" type="text/css" />
    <!-- /CSS SIC-->
</head>
<body>
 
    <!-- DIV CRIADA SOMENTE PRA MUDAR O RESIZE DA PG -->
    <div id="centralizar">  
        <!-- CAPA SITE -->
        <div id="capa-site">
          
          <?php include_partial_from_folder('sites/sic', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
          <!-- CORPO SITE -->
      <div id="corpo-sic">
        <!-- COLUNA ESQUERDA -->
        <div class="float col-640-sic">

          <h2><?php echo $asset->getTitle() ?></h2>
          
					<?php echo html_entity_decode($asset->AssetContent->render()) ?>       
          
        </div>
        <!-- /COLUNA ESQUERDA -->
     </div>  
     <!-- /CORPO SITE -->
          </div>
    
    </div>
         	

</body>
</html>