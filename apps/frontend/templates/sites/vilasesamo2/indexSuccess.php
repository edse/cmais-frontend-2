
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/home.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="/portal/js/responsive-carousel/style-vilasesamo.css"/>

<!--scripts e css banner-->
<script type="text/javascript" src="/portal/js/layer-slider/jQuery.layerSlider.js"></script>
<script src="/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/portal/js/hammer.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/portal/js/responsive-carousel/script.js"></script>
<link rel="stylesheet" href="/portal/js/layer-slider/model06/jquery.layerSlider.css">
<link rel="stylesheet" href="/portal/js/layer-slider/model06/main.css">




<div id="content">
  <!-- HEADER -->
  <?php
  include_partial_from_folder('sites/vilasesamo2', 'global/mobile_detect'); 
  $detect = new Mobile_Detect(); 
  if ($detect->isTablet()) {
      // Any tablet device. 
      
      //banner           
      include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal');
      
    }else if($detect->isMobile()){
      // Any mobile device. 
      
      //banner
      include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipalmobile');  
      
    }else{
      // Any desktop
      
      //banner 
      include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));
      include_partial_from_folder('sites/vilasesamo2', 'global/bannerprincipal');  
 
    }
   ?>
  <!-- /HEADER -->

  <!--carrossel personagens-->
  <?php include_partial_from_folder('sites/vilasesamo2', 'global/menupersonagens', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
  <!--carrossel personagens-->
  
  <!-- link seções -->
  <section class="bgtotal">
    <span class="divisa1"></span>
    <div class="destaques row-fluid container">
      <section class="span8">
        <article class="span6 jogo">
          <a href="/vilasesamo2/jogos" title="Jogo">
            <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Jogos" />
          </a> 
          <h3><a href="/vilasesamo2/jogos" title="Jogos"><i class="sprite-icon-jogos-grd"></i>Jogo</a></h3>       
        </article>
        <article class="span6 video">
          <a href="/vilasesamo2/clipes" title="Clipes">
            <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Clipes" />
          </a> 
          <h3><a href="/vilasesamo2/clipes" title="Clipes"><i class="sprite-icon-clipes-grd"></i>Clipe</a></h3>       
        </article>
        <article class="span6 atividade">
          <a href="/vilasesamo2/atividades" title="Para Colorir">
            <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="Para Colorir" />
          </a> 
          <h3><a href="/vilasesamo2/atividades" title="Para Colorir"><i class="sprite-icon-colorir-grd"></i>Para Colorir</a></h3>       
        </article>
      
      </section>
      <div class="span4 banner" >
        <a href="#" title=""><img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /></a>
      </div>
    </div>
  </section>
  <!-- link seções -->
  
</div>




