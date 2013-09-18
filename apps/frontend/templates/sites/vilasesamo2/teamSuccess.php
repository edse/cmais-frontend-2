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
        <div class="element">1</div>
        <div class="element">2</div>
        <div class="element">3</div>
        <div class="element">4</div>
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
    number = parseInt( $this.text(), 10 );
    if ( number % 7 % 2 === 1 ) {
      $this.addClass('q-pers-01');
    }
    if ( number % 3 === 0 ) {
      $this.addClass('q-pers-02');
    }
  });
  
  $container.isotope({
    itemSelector : '.element'
  });
  
  $('#toggle-sizes').click(function(){
    $container
      .toggleClass('variable-sizes')
      .isotope('reLayout');
    return false;
  });
</script>  