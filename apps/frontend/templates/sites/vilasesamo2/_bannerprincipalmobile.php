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
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
            <li>
              <a href="/vila-sesamo/beto" title="Bel" class="btn-bel">
                <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
              </a>
            </li>
          </ul>
          <!--slider-mask-->
          <div class="clearit"></div>
        </div>
      </div>
      <!--slider-mask-wrap--> 
      <!--slider-nav-->
      <div class="slider-nav">
        <div class="arrow-left arrow"><span title="Back"></span></div>
        <div class="arrow-right arrow"><span title="Next"></span></div>
      </div> 
      <!--slider-nav-->
    </div>
    <!--/slider-->
  </div>
  <!--/inicio carrossel--> 
  <!--seletor carrossel-->
    <ul id="selector-mobile">
      <li><a href="#" rel="frame_0"></a></li>
      <li><a href="#" rel="frame_1"></a></li>
      <li><a href="#" rel="frame_2"></a></li>
      <li><a href="#" rel="frame_3"></a></li>
      <li><a href="#" rel="frame_4"></a></li>
      <li><a href="#" rel="frame_5"></a></li>
    </ul>

  <!--/seletor carrossel-->   
</section>
<!--scripts e css carrossel-->
<script type="text/javascript" src="/portal/js/modernizr/modernizr.min.js"></script>
<script type="text/javascript" src="/portal/js/hammer.min.js"></script>
<script type="text/javascript" src="/portal/js/responsive-carousel/script.js"></script>
<script>
//carrossel mobile
var total=0;
$('#selector-mobile li').each(function(i){
  var width = $(this).width();
  total = width + total + 13; 
});

$('#selector-mobile').css('width', total);

$('#carrossel-mobile').responsiveCarousel({
    unitWidth:          'inherit',
    target:             '#carrossel-mobile .slider-target',
    unitElement:        '#carrossel-mobile .slider-target > li',
    mask:               '#carrossel-mobile .slider-mask',
    arrowLeft:          '#carrossel-mobile .arrow-left',
    arrowRight:         '#carrossel-mobile .arrow-right',
    dragEvents:         true,
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
  //ev.preventDefault();
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
