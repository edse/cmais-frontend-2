<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<!--Carousel-->
<link rel="stylesheet" href="http://cmais.com.br/js/touchcarousel/touchcarousel.css" />
<link rel="stylesheet" href="http://cmais.com.br/js/touchcarousel/minimal-light-skin/minimal-light-skin.css" />  
<link rel="stylesheet" href="http://cmais.com.br/js/touchcarousel/three-d-skin/three-d-skin.css" />
<link rel="stylesheet" href="http://cmais.com.br/js/touchcarousel/black-and-white-skin/black-and-white-skin.css" />
<link rel="stylesheet" href="http://cmais.com.br/js/touchcarousel/grey-blue-skin/grey-blue-skin.css" />
<!--/Carousel-->

<!--PAGINA INDEX-->
<div id="cmais"  data-fullscreen="true">
	
	<?php include_partial_from_folder('sites/m','global/display5c', array('site'=>$site)); ?>
    
  <?php include_partial_from_folder('sites/m', 'global/schedules', array('site'=>$site)); ?> 
  
  <!-- mobile320x50 -->
  <div id="banner-320x50" class="banner">
    <script type='text/javascript'>
    GA_googleFillSlot("mobile2-320x50");
    </script>
  </div>
  <!-- mobile320x50 -->
  
</div>
<!--/PAGINA INDEX-->



<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site)) ?>
<!--/footer-->