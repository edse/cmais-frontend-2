<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script>
  $("body").addClass("interna");

</script>
<style>
 #container-personagens{width:950px;height:750px;}
 .conteudo-asset {padding: 0;}
 .q-pers-01{width: 140px; height:140px; margin:5px;background:#000000;}
 .q-pers-02{ width: 200px; height:200px; margin:5px;background:blue;}
 .q-pers-03{ width: 300px; height:300px; margin:5px;background:red;}
 .q-pers-04{ width: 350px; height:350px; margin:5px;background:yellow;}
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
        <div class="element q-pers-03" data-order="1"></div>
        <div class="element q-pers-04" data-order="2"></div>
        <div class="element q-pers-01" data-order="3"></div>
        <div class="element q-pers-02" data-order="4"></div>
        <div class="element q-pers-02" data-order="5"></div>
        <div class="element q-pers-01" data-order="6"></div>
        <div class="element q-pers-04" data-order="7"></div>
        <div class="element q-pers-03" data-order="8"></div>
      </div>
    </div>
  </section>
</div>
<script src="/portal/js/isotope/jquery.isotope.min.js"></script>
<script>
  var $container = $('#container-personagens');
  $container.isotope({
    itemSelector : '.element',
    masonry : {
      columnWidth : 120
    },
    masonryHorizontal : {
      rowHeight: 120
    },
    cellsByRow : {
      columnWidth : 240,
      rowHeight : 240
    },
    cellsByColumn : {
      columnWidth : 240,
      rowHeight : 240
    }
  });
  /*
  $container.isotope({
    itemSelector : '.element',
    layoutMode: 'masonryHorizontal'
  });*/
  
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
      $(this).removeClass('q-pers-01');
      $(this).removeClass('q-pers-02');
      $(this).removeClass('q-pers-03');
      $(this).removeClass('q-pers-04');
      cont = i;
    });
    console.log(cont)

    while(contWhile==0){
      number = Math.floor((Math.random()*4)+1);
      if(number==1 && contA < 2){
        contA++;
        classes[vetor] = 'q-pers-0'+number; 
        vetor++;
        }
      if(number==2 && contB < 2){
        contB++;
        classes[vetor] = 'q-pers-0'+number; 
        vetor++;
        }
      if(number==3 && contC < 2){
        contC++;
        classes[vetor] = 'q-pers-0'+number; 
        vetor++;
        }
      if(number==4 && contD < 2){
        contD++;
        classes[vetor] = 'q-pers-0'+number; 
        vetor++;
        }
      
      if(contA >=2 && contB >=2 && contC >=2 && contD >=2){
        contWhile++;
      } 
    }
    $container.find('.element').each(function(j){
      $(this).addClass(classes[j]);
      console.log(classes[j])
    });
    $container.isotope('reLayout');
    console.log(contA +"/"+ contB +"/"+contC+"/"+contD)
    console.log(classes)
  });
</script>  