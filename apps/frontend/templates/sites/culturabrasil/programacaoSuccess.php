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
<section class="miolo">
  
      <!-- coluna esquerda -->
      <div class="span9">
        coluna esquerda
      </div>  
      <!-- /coluna esquerda -->
      
      <!--coluna direita -->
      <div class="span3">
        
        <!--banner -->
        <div class="banner-culturabrasil">
          <script type='text/javascript'>
            GA_googleFillSlot("home-geral300x250");
          </script>
        </div>
        <!-- banner -->  
        
      </div>
      <!--/coluna direita -->

</section>
<!--/section miolo-->

<!--section rodape--> 
<section class="rodape">

  <div class="container row-fluid">
    
    <!-- faceebook -->
    <div class="span4" style="margin-left: 0;">
      <span>Redes Sociais</span><i class="borda-titulo clara"></i>
      <div class="box-facebook">
        <fb:like-box href="https://www.facebook.com/culturabrasil" width="310" height="260" show_faces="true" border_color="#DDDDDD" background_color="#FFFFFF" stream="false" header="true"></fb:like-box>
      </div>
    </div>  
    <!-- / facebook -->
    
    <!-- googleplus -->
    <div class="span4 ">
      <div class="google">
        <!-- Place this tag where you want the widget to render. -->
        <div class="g-page" data-width="310" data-href="https://plus.google.com/105992922006548285318" data-showtagline="false" data-showcoverphoto="false" data-rel="publisher"></div>
        
        <!-- Place this tag after the last widget tag. -->
        <script type="text/javascript">
          window.___gcfg = {lang: 'pt-BR'}; 
        
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
      </div>
    </div> 
    <!-- /googleplus -->
    
    <!-- twiter -->
    <div class="span4 twitter">
      <a class="twitter-timeline" href="https://twitter.com/culturabrasil2" data-widget-id="360106760419287041">Tweets de @culturabrasil2</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div> 
    <!-- /twiter -->
    
    
    
  </div>
  
</section>
<!--section rodape-->  
<script>
$(document).ready(function(){
  $('#carrossel-radar').mouseenter(function(){
    $('.carousel-control').fadeIn("fast");
  });
  $('#carrossel-radar').mouseleave(function(){
    $('.carousel-control').fadeOut("fast");
  });
});
</script>  
