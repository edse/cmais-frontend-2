<?php
	$site = Doctrine::getTable('Site')->findOneBySlug('cmais');
?>

<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<script>
	videoPage = 1;
	contentPage = 1;
	function mobileGetContents() {
    $.ajax({
      url: "<?php echo url_for("@homepage") ?>ajax/mobilegetcontents",
      data: "page="+contentPage+"&items=5&site=<?php echo (int)$site->id ?>",
      success: function(data){
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
    <a href="javascript:mobileGetContents()" class="mais">
      mais notícias
    </a>  
  </div>

</div>
<!--/NOTICIAS-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob') ?>
<!--/footer-->