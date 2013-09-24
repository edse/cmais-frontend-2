<?php
	$site = Doctrine::getTable('Site')->findOneBySlug('cmais');
?>

<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<script>
	contentPage = 1;
	function mobileGetContents() {
    $.ajax({
      url: "<?php echo url_for("@homepage") ?>ajax/mobilegetcontents",
      data: "page="+contentPage+"&items=5&site=<?php echo (int)$site->id ?>",
      beforeSend: function(){
				$('.mais').hide();
				$('#maisnoticiasLoader').show();
      },
      success: function(data){
				$('#maisnoticiasLoader').hide();
				$('.mais').show();
        $('#contentList').append(data);
        contentPage++;
      }
    });
	}
	$(document).ready(function(){
  	mobileGetContents();
  });
</script>


<!--NOTICIAS-->
<div id="cmais"  data-fullscreen="true">

  <div class="noticias" >
    <ul id="contentList">
    	<?php /*
      <!--NOTICIA ITEM-->
      <li>
        <a href="http://172.20.18.133/frontend_dev.php/m/teste-de-conteudo-1" data-transition="slide" rel="external">
        
          <fieldset class="ui-grid-a">
            <h4 class="cor2">Música</h4>
            <!--FOTO-->
            <div class="ui-block-a">
              <div class="fotinho">
                <img src="http://midia.cmais.com.br/programs/c77bb4b2793cc78e24374f845de35fa798dd636f.jpg" width="100%">
              </div>
            </div>
            <!--/FOTO-->
            
            <!--MANCHETE-->
            <div class="ui-block-b">
              
              <p class="foto">
                Max B.O. apresenta o programa que dá espaço para a cultura das periferias
              </p>
              
            </div>  
            <!--/MANCHETE-->   
          </fieldset>
          <div class="linha2"></div>
        </a>
      
      </li>
      <!--/NOTICIA ITEM-->
			*/ ?>
    </ul> 
    <img class="loader" id="maisnoticiasLoader" src="http://cmais.com.br/portal/images/capaPrograma/mob/ajax-loader.gif" style="display:none">
    <a href="javascript:mobileGetContents()" class="mais">
      mais notícias
    </a>  
  </div>
  
  <!-- mobile320x50 -->
  <div id="banner-320x50" class="banner">
    <script type='text/javascript'>
    GA_googleFillSlot("mobile2-320x50");
    </script>
  </div>
  <!-- mobile320x50 -->

</div>
<!--/NOTICIAS-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site)) ?>
<!--/footer-->