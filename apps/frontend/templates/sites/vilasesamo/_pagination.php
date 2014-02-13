<?php $pageQuant = intval(count($pager)/9); ?>
<?php if(intval($pager2) <= $pageQuant):?>
<nav id="page_nav">
  <div class="container-ajax-loader">
    <img id="ajax-loader" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sprites/ajax-loader.gif" alt="" style="display:none;">
  </div>
  <?php
  if($section->getSlug() == "cuidadores"):
    $icone = "icone-carregar-ve-grande";
  elseif(isset($parent)):
    if($parent == "categorias"):
      $icone = "icone-carregar-lj-grande";
    elseif($parent=="personagens"):
      $icone = "icone-carregar-br-grande";
    endif;   
  else: 
    $icone = "icone-carregar-br-grande";
  endif;    
  ?>
  <input type="hidden" class="quantidade-itens" value="">
  <input type="hidden" class="no-repeat" value="">
  <a href="javascript:vilaSesamoGetContents();" class="mais">Carregar mais<i class="icones-sprite-interna  <?php echo $icone ?>"></i></a>
</nav>
<?php endif; ?>
<?php $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>" ?>

<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<?php echo $noscript ?>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
<?php echo $noscript ?>
<script>

  var firstCount = 0;
  contentPage = 1;
  var no_repeat = "";
  quantPage = <?php echo $pageQuant ?>  + 1;
  $('.mais').click(function(){
    contentPage++;
    no_repeat = $('.no-repeat').attr("value");
    $('li').removeClass('first').removeClass('count');
    $('.firstDescription').remove();
    
    var carregarMais = "";
    
    
  });
  vilaSesamoGetContents();
  
  function countAssets(){
    
    var countItens = 0;
    $('.count').each(function(i){
      countItens = countItens + 1;
    });
    //console.log(countItens);
    <?php
      $selectDescription = "";
      if($section->Parent->getSlug()=="personagens"){
        $selectDescription = "brincadeiras da Personagem " . $section->getSlug();
      }else if($section->Parent->getSlug()=="categorias"){
        $selectDescription = "itens da Categoria" . $section->getSlug();
      }else if($section->getSlug()=="pais-e-educadores"){
        $selectDescription = "artigos da página " . $section->getSlug();
      }else if($section->getSlug()=="campanhas"){
        $selectDescription = "figuras da campanha " . $section->getSlug();
      }else{
        $selectDescription = $section->getSlug();
        if($section->getSlug() == "videos") $os="os";
        else $os="as";
      }
      
      ?>
      if(countItens == 0){
        $('#container li:first').addClass('first');
        $('.first').before("<span class='firstDescription' aria-label='que pena acabou <?php echo  $selectDescription ?> . Você está no primeiro item da lista <?php echo $selectDescription; ?>, divirta-se com estes por enqunanto, boa diversão amiguinho.' tabindex='0'>");
        $('#page_nav').fadeOut('fast');
      }else if(countItens < 9){
        carregarMais=". que pena! não tem mais itens <?php echo $selectDescription; ?> pra carregar.";
        $('#page_nav').fadeOut('fast');
        $('.first').before("<span class='firstDescription' aria-label='você carregou mais "+ countItens +" <?php echo $selectDescription; ?>, você está no primeiro item carregado "+carregarMais+"' tabindex='0'>");
      }else{
        $('.first').before("<span class='firstDescription' aria-label='você carregou mais "+ countItens +" <?php echo $selectDescription; ?>, você está no primeiro item carregado' tabindex='0'>");
      }
      
      
      $('#container li').each(function(i){
        firstCount = firstCount + 1
      });
      
      if(firstCount > 9){
        $('.firstDescription').focus(); 
        
        setTimeout(function(){
          //alert("fui");
          $('#container').find('li.first a').focus();
          $('.firstDescription').remove();
        },5000);
      }
      
      //console.log(firstCount);
      
     
  }
  
  function vilaSesamoGetContents() {
    $.ajax({
      url: "<?php //echo url_for("@homepage") ?>/ajax/vilasesamogetcontents",
      data: "page="+contentPage+"&items=9&site=<?php echo $site->getSlug(); ?>&siteId=<?php echo (int)$site->id ?>&sectionId=<?php echo $section->getId(); ?>&section=<?php echo $section->getSlug(); ?>&sectionP=<?php echo $section->getParentSectionId(); ?>&no-repeat="+no_repeat,
      beforeSend: function(){
          $('#ajax-loader').show();
        },
      success: function(data){
        $('#ajax-loader').hide();
        if (data != "") {
          var newEls = $(data).appendTo('#container');
           
          $("#container").isotope().isotope('appended',newEls);
          
          setTimeout(function(){
            countAssets();
          }, 800);   
        }else{
          $('#page_nav').fadeOut('fast');
        }
      }
    });
  }
   

</script>
<?php echo $noscript ?>