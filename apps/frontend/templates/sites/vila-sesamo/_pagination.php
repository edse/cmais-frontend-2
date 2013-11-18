<nav id="page_nav">
  <div class="container-ajax-loader">
    <img id="ajax-loader" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sprites/ajax-loader.gif" alt="" style="display:none;">
  </div>
  <a href="javascript:vilaSesamoGetContents();" class="mais">Carregar mais<i class="icones-sprite-interna icone-carregar-br-grande"></i></a>
</nav>
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<!--script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script-->
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
<script>
  videoPage = 1;
  contentPage = 1;
  function vilaSesamoGetContents() {
    $.ajax({
      url: "<?php echo url_for("@homepage") ?>ajax/vilasesamogetcontents",
      data: "page="+contentPage+"&items=9&site=<?php echo $site->getSlug(); ?>&siteId=<?php echo (int)$site->id ?>&sectionId=<?php echo $section->getId(); ?>&section=<?php echo $section->getSlug(); ?>",
      beforeSend: function(){
          $('#page-nav a.mais').hide();
          $('#page-nav #ajax-loader').show();
        },
      success: function(data){
        $('#page-nav #ajax-loader').hide();
        if (data != "") {
          //console.log(data);
          //$('#container').isotope().append($newEls).isotope('reloadItems').isotope({ sortBy:'original-order'});
          var newEls = $(data).appendTo('#container');
          $("#container").isotope().isotope('appended',newEls);
          contentPage++;
        }else{
          
          //$('#page_nav').html('<span class="mais">fim da listagem.</span>')
          //console.log("fim da listagem");
        }
      }
    });
  }
  $(document).ready(function(){
   vilaSesamoGetContents();
  });
</script>