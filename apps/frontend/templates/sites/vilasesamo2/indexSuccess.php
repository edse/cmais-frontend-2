<script type="text/javascript" src="http://cmais.com.br/portal/js/layer-slider/jQuery.layerSlider.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/layer-slider/model06/jquery.layerSlider.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/layer-slider/model06/main.css">

<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/js/responsive-carousel/style-vilasesamo.css"/>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />

<!--content-->
<div id="content">
  <!--menu principal && banner promocional-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)); ?>
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal'); ?>
  <!--/menu principal && banner promocional-->
  
  <!--carrossel personagens-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menupersonagens', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
  <!--carrossel personagens-->
</div>
<!--/content-->

<!--scripts e css banner-->

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>

