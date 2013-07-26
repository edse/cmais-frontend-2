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
      
      <!--lista grade -->
      <div class="lista-grade">
        
        <!--accordion-->
        <div class="accordion" id="accordion2">
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Collapsible Group Item #1<i class="setagrade cima"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                Anim pariatur cliche...
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
                Collapsible Group Item #2<i class="setagrade baixo"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapse2" class="accordion-body collapse in">
              <div class="accordion-inner">
                Anim pariatur cliche...
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Collapsible Group Item #3<i class="setagrade baixo"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                Anim pariatur cliche...
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
          <!--item-->
          <div class="accordion-group">
            
            <!--titulo-->
            <div class="accordion-heading">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                Collapsible Group Item #4<i class="setagrade baixo"></i>
              </a>
            </div>
            <!--titulo-->
            
            <!--corpo-->
            <div id="collapseOne" class="accordion-body collapse in">
              <div class="accordion-inner">
                Anim pariatur cliche...
              </div>
            </div>
            <!--corpo-->
            
          </div>
          <!--/item-->
          
        </div>
        <!--/accordion-->
        
      </div>
      <!--/lista grade -->
        
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


  

