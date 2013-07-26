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
<section class="miolo grade">
  <!-- container miolo -->
  <div class="container row-fluid">
    <!-- coluna esquerda -->
    <div class="span9">
      
      <!-- titulo -->
      <h1>Grade de programação</h1>
      <div>
        <i class="seta-grade esquerda"></i>
        <p>23 de julho de 2013</p>
        <i class="seta-grade direita"></i>
      </div>
      <!--titulo-->
      
      <div class="lista-grade">
        
        <div class="accordion" id="accordion2">
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Collapsible Group Item #1
              </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                Anim pariatur cliche...
              </div>
            </div>
          </div>
          <div class="accordion-group">
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                Collapsible Group Item #2
              </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner">
                Anim pariatur cliche...
              </div>
            </div>
          </div>
        </div>
      <div>  
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4">
      
      <!--banner -->
      <div class="banner-culturabrasil">
        <script type='text/javascript'>
          GA_googleFillSlot("home-geral300x250");
        </script>
      </div>
      <!-- banner -->  
      
    </div>
    <!--/coluna direita -->
  </div>  
  <!-- container miolo -->  

</section>
<!--/section miolo-->


  

