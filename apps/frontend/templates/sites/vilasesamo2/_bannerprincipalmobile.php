
<section id="carrossel-destaque-mobile">
   <!--div id="carrossel-mobile">
      <div class="slider">
        <div class="slider-mask-wrap">
          <div class="slider-mask">
            <ul class="slider-target">
              <li>
                <div class="inner">
                  <a href="/vilasesamo2/beto" title="Bel" class="btn-bel">
                    <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
                  </a>
                </div>
              </li>
              <li>
                <div class="inner">
                  <a href="/vilasesamo2/beto" title="Beto" class="btn-beto">
                    <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
                  </a>
                </div>
              </li>
              <li>
                <div class="inner">
                  <a href="/vilasesamo2/beto" title="Come-come" class="btn-comecome">
                    <img src="/portal/images/capaPrograma/vilasesamo2/vs_1-home_m-w640.png" alt="Personagem" />
                  </a>
                </div>
              </li>
            </ul>
            <div class="clearit"></div>
          </div>
        </div>
        <div class="slider-nav">
          <div class="arrow-left arrow destaque-mobile">
            <span title="Back" class="sprite-seta-esquerda banner"></span>
          </div>
          <div class="arrow-right arrow destaque-mobile">
            <span title="Next" class="sprite-seta-direita banner"></span>
          </div>
        </div>
      </div>
    </div>
    <div>
      <ul id="selector">
      </ul>
    </div--> 
    <div class="examples" id="example-2">
      <div class="slider">
        <div class="slider-mask-wrap">
          <div class="slider-mask">
            <ul class="slider-target">
              <li><div class="inner">One</div></li>
              <li><div class="inner">Two</div></li>
              <li><div class="inner">Three</div></li>
              <li><div class="inner">Four</div></li>
              <li><div class="inner">Five</div></li>
              <li><div class="inner">Six</div></li>
              <li><div class="inner">Seven</div></li>
              <li><div class="inner">Eight</div></li>
              <li><div class="inner">Nine</div></li>
              <li><div class="inner">Ten</div></li>
            </ul>
            <div class="clearit"></div>
          </div>
        </div>
        <div class="slider-nav">
          <div class="arrow-left arrow"><span title="Back"></span></div>
          <div class="arrow-right arrow"><span title="Next"></span></div>
        </div>    
      </div>
    </div>
    <div>
      <ul id="selector">
        <li><a href="#" rel="frame_0"></a></li>
        <li><a href="#" rel="frame_1"></a></li>
        <li><a href="#" rel="frame_2"></a></li>
        <li><a href="#" rel="frame_3"></a></li>
        <li><a href="#" rel="frame_4"></a></li>
        <li><a href="#" rel="frame_5"></a></li>
        <li><a href="#" rel="frame_6"></a></li>
        <li><a href="#" rel="frame_7"></a></li>
        <li><a href="#" rel="frame_8"></a></li>
        <li><a href="#" rel="frame_9"></a></li>
      </ul>
    </div>   
</section>
<!--scripts e css carrossel-->
<script type="text/javascript" src="/portal/js/modernizr/modernizr.min.js"></script>
<script type="text/javascript" src="/portal/js/hammer.min.js"></script>
<script type="text/javascript" src="/portal/js/responsive-carousel/script.js"></script>
<script>
$('#carrossel-mobile').responsiveCarousel({
  arrowLeft: '.arrow-left span.banner',
  arrowRight: '.arrow-right span.banner',
  target:'#carrossel-mobile .slider-target',
  unitElement:'#carrossel-mobile .slider-target > li',
  mask:'#carrossel-mobile .slider-mask',
  easing:'linear',
  //dragEvents:true,
  speed:200,
  slideSpeed:1000,
  dragEvents: Modernizr.touch,
  responsiveUnitSize:function () {
      return 1;
  },
  step:-1,
  onShift:function (i) {
      var $current = $('#selector li a[rel=frame_' + i + ']');
      $('#selector li a').removeClass('current');
      $current.addClass('current');
  }
});

$('#example-2').responsiveCarousel({
    unitWidth:          'inherit',
    target:             '#example-2 .slider-target',
    unitElement:        '#example-2 .slider-target > li',
    mask:               '#example-2 .slider-mask',
    arrowLeft:          '#example-2 .arrow-left',
    arrowRight:         '#example-2 .arrow-right',
    dragEvents:         true,
    responsiveUnitSize:function () {
        return 1;
    },
    step:-1,
    onShift:function (i) {
        var $current = $('#selector li a[rel=frame_' + i + ']');
        $('#selector li a').removeClass('current');
        $current.addClass('current');
    }
});
/* this next part toggles the "auto slide show" option. */
$('#toggle-slide-show').on('click', function (ev) {
    ev.preventDefault();
    $('#example-2').responsiveCarousel('toggleSlideShow');
});

/* this lets us jump to a slide */
$('#selector a').on('click', function (ev) {
    ev.preventDefault();
    var i = /\d/.exec($(this).attr('rel'));
    $('#example-2').responsiveCarousel('goToSlide', i);
});

/* bleh... CSS media queries seem to be applied sometime after the document.ready and before the
window.load events.  If you are using the "onRedraw" callback, you should call it again after the page
is finished loading. Not my fault! Blame your browser! :-) */
$(window).on('load',function(){
    $('.examples').responsiveCarousel('redraw');
});
</script>
