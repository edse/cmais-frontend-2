<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script>
  $("body").addClass("interna");

</script>
<style>
.q-pers-01{display:block; width: 140px; height:140px; background:#000000;}
.q-pers-02{display:block; width: 200px; height:200px; background:blue;}
.q-pers-03{display:block; width: 300px; height:300px; background:red;}
.q-pers-04{display:block; width: 350px; height:350px; background:yellow;}
</style>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->
<div id="content">
  <section class="filtro row-fluid">
    <h3><span class="sprite-icon-jogos-med"></span>Jogos<a class="todos-assets" href="/vilasesamo2/jogos"><span class="sprite-btn-voltar-jogos"></span><p>todos os jogos</p></a></h3>
    <div class="conteudo-asset">
      <h2>Personagens</h2>
      <a href="javascript:;" id="toggle-sizes">teste</a>
      
      <div id="container-personagens" class="asset">
        <div class="element" data-order="1"></div>
        <div class="element" data-order="2"></div>
        <div class="element" data-order="3"></div>
        <div class="element" data-order="4"></div>
        <div class="element" data-order="5"></div>
        <div class="element" data-order="6"></div>
        <div class="element" data-order="7"></div>
        <div class="element" data-order="8"></div>
      </div>
    </div>
  </section>
</div>
<script src="/portal/js/isotope/jquery.isotope.min.js"></script>
<script>
  var $container = $('#container-personagens');
  
  // add randomish size classes
  $container.find('.element').each(function(){
    var $this = $(this),
    number = parseInt( $this.attr('data-order'));
    if ( number == 1 || number == 5 ) {
      $this.addClass('q-pers-01');
    }
    if ( number == 2 || number == 6 ) {
      $this.addClass('q-pers-02');
    }
    if ( number == 3 || number == 7 ) {
      $this.addClass('q-pers-03');
    }
    if ( number == 4 || number == 8 ) {
      $this.addClass('q-pers-04');
    }
  });
  
  $container.isotope({
    itemSelector : '.element',
    masonryHorizontal: {
      rowHeight: 360
    }
  });
  
  $('#toggle-sizes').click(function(){
    console.log('clk');
    $container.isotope('reLayout');
    return false;
  });
</script>  