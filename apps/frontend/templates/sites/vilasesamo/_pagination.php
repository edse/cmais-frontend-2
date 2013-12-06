
<?php if(intval($pager2) <= intval(count($pager)/9)):?>
<nav>
  <div id="page_nav" class="container-ajax-loader">
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
  <input type="hidden" class="no-repeat" value="1">
  <a href="javascript:vilaSesamoGetContents();" class="mais">Carregar mais<i class="icones-sprite-interna  <?php echo $icone ?>"></i></a>
</nav>
<?php endif; ?>
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
<script>
  contentPage = 1;
  var no_repeat = "";
  quantPage = <?php echo intval($pager2) ?> + 1;
  $('.mais').click(function(){
    contentPage++;
    no_repeat = $('.no-repeat').attr("value");
  });
  
  vilaSesamoGetContents();
  function vilaSesamoGetContents() {
    $.ajax({
      url: "<?php //echo url_for("@homepage") ?>/ajax/vilasesamogetcontents",
      data: "page="+contentPage+"&items=9&site=<?php echo $site->getSlug(); ?>&siteId=<?php echo (int)$site->id ?>&sectionId=<?php echo $section->getId(); ?>&section=<?php echo $section->getSlug(); ?>&sectionP=<?php echo $section->getParentSectionId(); ?>&no-repeat="+no_repeat,
      beforeSend: function(){
          //$('#page-nav a.mais').hide();
          $('#page-nav #ajax-loader').show();
        },
      success: function(data){
        $('#page-nav #ajax-loader').hide();
        if (data != "") {
          var newEls = $(data).appendTo('#container');
          $("#container").isotope().isotope('appended',newEls);
          if(contentPage >= quantPage){
            $('#page_nav').fadeOut('fast');
          }
        }else{
          $('#page_nav').fadeOut('slow').slideUp("fast");
        }
      }
    });
  }
   

</script>