<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script>
  $("body").addClass("interna personagens");
</script>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->
<div id="content">
  <section class="filtro row-fluid">
    <h3><span class="sprite-icon-personagens-med"></span>Personagens</h3>
    <div class="conteudo-asset">
      <a href="javascript:;" id="toggle-sizes">teste</a>
      
      <div id="container-personagens" class="asset">
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_bel.png" alt="Bel" />
            <p>Bel</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_beto.png" alt="Beto" />
            <p>Beto</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_comecome.png" alt="Come-Come" />
            <p>Come-Come</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_elmo.png" alt="Elmo" />
            <p>Elmo</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_enio.png" alt="Enio" />
            <p>Enio</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_garibaldo.png" alt="Garibaldo" />
            <p>Garibaldo</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_grover.png" alt="Grover" />
            <p>Grover</p>
          </a>
        </div>
        <div class="element q-pers" data-order="1">
          <a href="#">
            <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/personagenss/vs_personagem_zoe.png" alt="Zoe" />
            <p>Zoe</p>
          </a>
        </div>
        
      </div>
    </div>
  </section>
</div>
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<script>
  var $container = $('#container-personagens');
  $container.isotope({
    itemSelector : '.element',
    masonryHorizontal : {
      rowHeight: 360
    },

  });
  /*
  $container.isotope({
    itemSelector : '.element',
    layoutMode: 'masonryHorizontal'
  });*/
  
  var classes = new Array();
  $('#toggle-sizes').click(function(){
    $container.isotope('shuffle');
    /*
    var cont = 0;
    var contA = 0;
    var contB = 0;
    var contC = 0; 
    var contD = 0;
    var number = 0;
    var contWhile = 0; 
    var vetor = 0;
    
    $container.find('.element').each(function(i){
      //$(this).removeClass('q-pers-01');
      //$(this).removeClass('q-pers-02');
      //$(this).removeClass('q-pers-03');
      //$(this).removeClass('q-pers-04');
      cont = i;
    });
    //console.log(cont)

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
      //console.log(classes[j])
    });
    */
    //$container.isotope('mansory');
    //console.log(contA +"/"+ contB +"/"+contC+"/"+contD)
    //console.log(classes)
  });
</script>  