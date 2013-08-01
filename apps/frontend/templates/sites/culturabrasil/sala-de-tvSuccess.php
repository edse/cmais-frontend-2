<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
      


<!--Linha Central-->
<section class="container">
  
  <div class="row-fluid container">
  <!--transmissao ao vivo -->
  <div class="span6">  
    <div class="page-header ao-vivo">
      <h4>Transmiss&atilde;o ao vivo</h4>
    </div>
   
   <!-- comentario facebook -->
   <fb:comments href="<?php echo $uri?>" numposts="3" width="495" publish_feed="true" style="margin-top:30px;"></fb:comments>
   <hr />
   <!-- /comentario facebook -->
   </div>      
   <!--/transmissao ao vivo -->
   <!--Bate papo-->
   <div class="span6">
     <div class="page-header ao-vivo">
      <h4>Bate Papo</h4>
     </div> 
   </div>
   <!--/Bate papo-->
   
   </div>
 </section>
 <!--/Linha Central-->
 