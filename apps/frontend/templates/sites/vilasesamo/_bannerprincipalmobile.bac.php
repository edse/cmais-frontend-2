



<section id="carrossel-destaque-mobile">
  <!--inicio carrossel--> 
  <div id="carrossel-mobile">
    <!--slider-->
    <div class="slider">
      <!--slider-mask-wrap-->
      <div class="slider-mask-wrap">
        <!--slider-mask-->
        <div class="slider-mask">
          <!--slider-mask-wrap--> 
          <ul class="slider-target">
            <?php if($displays):?>
              <?php if(count($displays) > 0):?>
                <?php foreach($displays as $d): ?>
                  <li>
                    <a href="<?php echo $d->getUrl(); ?>" title="<?php echo $d->getTitle(); ?>">
                      <img src="<?php echo "http://midia.cmais.com.br/displays/".$d->getImage(); ?>" alt="<?php echo $d->getTitle(); ?>" />
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php endif; ?>
            <?php endif; ?>  
          </ul>
          <!--slider-mask-->
          <div class="clearit"></div>
        </div>
      </div>
      <!--slider-mask-wrap--> 
      <!--slider-nav-->
      <div class="slider-nav">
        <div class="arrow-left arrow"><span title="Anterior" class="back"></span></div>
        <div class="arrow-right arrow"><span title="Proximo" class="next"></span></div>
      </div> 
      <!--slider-nav-->
    </div>
    <!--/slider-->
  </div>
  <!--/inicio carrossel--> 
  <!--seletor carrossel-->
    <ul id="selector-mobile">
      <?php if($displays):?>
        <?php if(count($displays) > 0):?>
          <?php foreach($displays as $k=>$d): ?>
            <li><a href="#" rel="frame_<?php echo $k ?>"></a></li>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>  
    </ul>

  <!--/seletor carrossel-->   
</section>
<!--scripts e css carrossel-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/hammer.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<script>
//carrossel mobile
var total=0;
$('#selector-mobile li').each(function(i){
  var width = $(this).width();
  total = width + total + 14; 
});

$('#selector-mobile').css('width', total);

$('#carrossel-mobile').responsiveCarousel({
    unitWidth:          'inherit',
    target:             '#carrossel-mobile .slider-target',
    unitElement:        '#carrossel-mobile .slider-target > li',
    mask:               '#carrossel-mobile .slider-mask',
    arrowLeft:          '#carrossel-mobile .arrow-left',
    arrowRight:         '#carrossel-mobile .arrow-right',
    dragEvents:         false,
    responsiveUnitSize:function () {
        return 1;
    },
    step:-1,
    onShift:function (i) {
        var $current = $('#selector-mobile li a[rel=frame_' + i + ']');
        $('#selector-mobile li a').removeClass('current');
        $current.addClass('current');
    }
});

$('.arrow, #selector-mobile a').click(function(){
  slideShow(); 
});

$('#selector-mobile a').on('click', function (ev) {
  ev.preventDefault();
  var i = /\d/.exec($(this).attr('rel'));
  $('#carrossel-mobile').responsiveCarousel('goToSlide', i);
});

$(window).on('load', function (ev) {
  $('#carrossel-mobile').responsiveCarousel('redraw');
  slideShow();
});

slideShow = function(ev){
  //ev.preventDefault();
  $('#carrossel-mobile').responsiveCarousel('toggleSlideShow');
};
//carrossel mobile
</script>
