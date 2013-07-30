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

 


<!--section miolo--> 
<section class="miolo programa">
  <!-- container miolo -->
  <div class="container row-fluid">
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <li><a href="/">Cultura Brasil</a><span class="divider">»</span></li>
        <li>Entrevistas </li>
      </ul>
    </div>
    <!--/breadcrumb-->
    <!-- coluna esquerda -->
    <div class="span8">
      
      <!-- titulo -->
      <h1>Grade de programação</h1>
      <p class="horario">Sábado, às 23h15 <br /> Horário alternativo: Terça, à 1h45</p>
      <!--titulo-->
      
              
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4 box-direita">
      
      <!--banner -->
      <div class="banner-culturabrasil">
        <script type='text/javascript'>
          GA_googleFillSlot("home-geral300x250");
        </script>
      </div>
      <!-- /banner -->  
      
    </div>
    <!--/coluna direita -->
    
  </div>  
  <!-- /container miolo -->  

</section>
<!--/section miolo-->

  

