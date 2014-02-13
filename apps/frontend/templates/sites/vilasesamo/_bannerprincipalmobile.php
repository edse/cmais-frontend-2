    <?php
    $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
    ?> 
  <!-- carrossel desktop-->
  <section id="carrossel-destaque-mobile">
    <!--Inicio-->
    <div id="slider-mobile">
      <!--lista-->
      <ul aria-hidden="true" tabindex="-1">
        <!--item bem vindo-->
        
        <?php if($displays):?>
          <?php if(count($displays) > 0):?>
            <?php foreach($displays as $k=>$d): ?>
              <li class="slide0<?php echo $k; ?>" data-easing="easeInExpo" data-transition="slideLeft" style="background: url(<?php echo "http://midia.cmais.com.br/displays/".$d->getImage(); ?>) no-repeat center center; background-size:90%">
                <div class="mpc_ls_slide_item" data-x="0" data-y="0" data-delay="10" data-duration="100" data-easing="easeOutBack" data-effect="slideLeft" data-fade="on" style="position:absolute;width:100%; height:100%; display:block;" >
                  <a href="<?php echo $d->getUrl(); ?>" title="<?php echo $d->getTitle(); ?>" style="display: block; position:absolute; width:300%; height: 100%!important" >
                    <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                  </a>
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>
        
        <!--/item bem vindo-->
      </ul>
      <!--/lista-->
    </div>
    <!--/Inicio-->
  </section>
  <!-- /carrossel desktop-->

 
  <script>
    //banner principal 
    $('#slider-mobile').mpcLayerSlider({
      'pauseOnHover' : false,
      'slideshow' : true,
      'uiStyle': 'style02',
      'delay': 6000,
      'showThumbTooltip':false, 
      'arrowsOffset': 0,
      'showControlsOnHover': false,
      'controlsOpacity': 1.0,
      'swipeGesture':false,
      'bulletsVerticalOffset':0
    });
    $('.mpc_ls_shadow.style01').hide();

  </script>
  <?php echo $noscript; ?>

    