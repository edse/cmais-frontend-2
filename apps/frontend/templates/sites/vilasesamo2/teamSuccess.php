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
        <div class="element q-pers-01" data-order="1"></div>
        <div class="element q-pers-02" data-order="2"></div>
        <div class="element q-pers-03" data-order="3"></div>
        <div class="element q-pers-04" data-order="4"></div>
        <div class="element q-pers-01" data-order="5"></div>
        <div class="element q-pers-02" data-order="6"></div>
        <div class="element q-pers-03" data-order="7"></div>
        <div class="element q-pers-04" data-order="8"></div>
      </div>
    </div>
  </section>
</div>
<script src="/portal/js/isotope/jquery.isotope.min.js"></script>
<script>
  var $container = $('#container-personagens');

  $container.isotope({
    itemSelector : '.element'
  });
  var classes = new Array();
  
  $('#toggle-sizes').click(function(){
    var cont = 0;
    var contA = 0;
    var contB = 0;
    var contC = 0; 
    var contD = 0;
    var number = 0;
    var contWhile = 0; 
    var vetor = 0;
    $container.find('.element').each(function(i){
      cont = i;
    });
    console.log(cont)

    while(contWhile<cont){
      number = Math.floor((Math.random()*4)+1);
      if(number==1)contA++;
      if(number==2)contB++;
      if(number==3)contC++;
      if(number==4)contD++; 
      
      if(contA >=2 || contB >=2 || contC >=2 || contD >=2){
        contWhile--;
      }else{
        classes[vetor] = number;
        vetor++;
      } 
      contWhile++;
    }
  
    console.log(contA +"/"+ contB +"/"+contC+"/"+contD)
    console.log(classes)
  });
</script>  