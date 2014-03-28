<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug(); ?>.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<script type="text/javascript">
$(function(){
  //carrossel
    $('.carrossel').jcarousel({
        wrap: "both",
        scroll: 1
    });
});
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

	<div class="bg-chamada">
	  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
	</div>
	<div class="bg-site"></div>

    <!-- / CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
      	
        <?php if(isset($program) && $program->id > 0): ?>
        <div class="topo-programa">
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
        </div>
        <?php endif; ?>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/videos" title="Vídeos">Vídeos</a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
        	<?php/*
          <div id="menu-rodape" class="grid3">
          	
          	<ul class="abas">
          	  <li class="neutro"><a href="videos">Todos os V&iacute;deos</a><span></span></li>
          	  <!-- li class="vistos"><a title="+ Vistos" href="#vistos">+ Vistos</a><span class="decoracao"></span></li -->
          	  <!--li class="recentes"><a title="+ Recentes" href="#recentes">+ Recentes</a><span class="decoracao"></span></li-->
          	</ul>
          	
          	<div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
          		
              <div class="busca">
                <form id="busca-galeria" name="busca" action="" method="get">
                  <label class="busque">Busque por <span>palavra-chave</span></label>
                  <input type="text" class="campo-busca" name="busca" id="campo-busca" />
                  <input type="submit" class="buscar" id="buscar" value="buscar" style="cursor:pointer" />
                </form>
              </div>
          	  
          	  <div id="todas" class="filho blocos" style="display:block;">
          	  	<div class="capa" style="display:none">
          	  	  <ul>
                  <?php if(count($pager) > 0): ?>
                    <?php foreach($pager->getResults() as $d): ?>
	          			<?php 
		                    if($d->AssetType->getSlug() == "video-gallery"){
							  $videos = $d->retriveRelatedAssetsByAssetTypeId(6);
							  $youtubeid = $videos[0]->AssetVideo->getYoutubeId();
							  $url = 	"http://img.youtube.com/vi/".$youtubeid."/0.jpg";
							}else{
		                      $url = $d->retriveImageUrlByImageUsage("image-3");
							}
	                    ?>             	
	          	  	  	<li class="conteudo-lista">
	          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="bg" title="<?php echo $d->getTitle() ?>"><img class="" src="<?php echo $url ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
	          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="titulos" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a>
	          	  	  	</li>
          	  	  	<?php endforeach; ?>
          	  	  <?php endif; ?>
          	      </ul>
          	    </div>
          	    
          	    <?php
	          	    if($site->getSlug() == "materiadecapa")   $code_search = "005232987476052626260:vkawbzjvfoq";
	          	    if($site->getSlug() == "jornaldacultura") $code_search = "005232987476052626260:5urer8wgbji";
									if($site->getSlug() == "viola") 	  	  $code_search = "005232987476052626260:rjkecerv2xm";
									if($site->getSlug() == "ensaio") 	  	  $code_search = "005232987476052626260:t9jlojqtnng";
									if($site->getSlug() == "entrelinhas") 	  $code_search = "005232987476052626260:46hjnvta1yg";
									if($site->getSlug() == "mobile") 		  $code_search = "005232987476052626260:xzm1zokhe9i";
									
									if($code_search == "") $code_search = ""; //BUSCA DE VÍDEOS DO CMAIS
          	    ?>
          	    
                <div id="google_search" style="display:none">
									<script>
									  (function() {
									    var cx = '<?php echo $code_search ?>';
									    var gcse = document.createElement('script');
									    gcse.type = 'text/javascript';
									    gcse.async = true;
									    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
									        '//www.google.com/cse/cse.js?cx=' + cx;
									    var s = document.getElementsByTagName('script')[0];
									    s.parentNode.insertBefore(gcse, s);
									  })();
									</script>
									<gcse:searchresults-only>Buscando...</gcse:searchresults-only>
               	</div>    
               	     
          	  </div>
          	   <div class="box-publicidade" style="width: 250px; position: absolute; top:97px; left:5px;">
          	  	<!-- cmais-assets-250x250 -->
								<script type='text/javascript'>
								GA_googleFillSlot("cmais-assets-250x250");
								</script>
							</div>
          	  
          	  <!--div id="recentes" class="filho blocos" style="display:none;">
          	    <div class="capa">
          	      <ul>
          	      	<li class="conteudo-lista ativo">
          	      	  <a href="#" class="bg"><img class="" src="images/exemplo5.jpg" alt="200x120" /><span></span></a>
          	      	  <a href="#" class="titulos">As aventuras e dicas para curtir o show de Paul McCartney</a>
          	      	</li>
          	      </ul>
          	    </div>
          	  </div>
          	  
          	  <div id="vistos" class="filho blocos" style="display:none;">
          	    <div class="capa">
          	      <ul>
          	      	<li class="conteudo-lista ativo">
          	      	  <a href="#" class="bg"><img class="" src="images/exemplo5.jpg" alt="200x120" /><span></span></a>
          	      	  <a href="#" class="titulos">As aventuras e dicas para curtir o show de Paul McCartney</a>
          	      	</li>
          	      </ul>
          	    </div>
          	  </div -->
          	  
              <?php if(isset($pager)): ?>
                <?php if($pager->haveToPaginate()): ?>
          	  <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
          	  <div class="paginacao grid3" style="display:none">
          	    <div class="centraliza">
          	      <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
          	      <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
          	      <ul>
                    <?php foreach ($pager->getLinks() as $page): ?>
                      <?php if ($page == $pager->getPage()): ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
                      <?php else: ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
          	      </ul>
          	      <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
          	      <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
          	    </div>
          	  </div>
		      <!-- PAGINACAO -->
              <form id="page_form" action="" method="post">
              	<input type="hidden" name="return_url" value="<?php echo $url?>" />
              	<input type="hidden" name="page" id="page" value="" />
              </form>
              <script>
              	function goToPage(i){
                	$("#page").val(i);
                	$("#page_form").submit();
              	}
              </script>
		      <!-- PAGINACAO -->
		        <?php endif; ?>
		      <?php endif; ?>
		      
				<script>
					function getURLParameter(name) {
					    return decodeURI(
					        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
					    );
					}
					if(getURLParameter("busca") == "null" || getURLParameter("busca") == ""){
						$('.capa').show();
						$('.paginacao').show();
					}else{
						var busca = getURLParameter("busca");
						$('#campo-busca').val(busca);
						$('#google_search').show();
						$('.paginacao').hide();
					}
				</script>
		
			</div>
		  </div>
		
*/?>		  <!-- BOX PUBLICIDADE 2 -->
		  <div class="box-publicidade pub-grd grid3">
		    <!-- programas-assets-728x90 -->
		    <script type='text/javascript'>
		      GA_googleFillSlot("cmais-assets-728x90");
		    </script>
		  </div>
		  <!-- / BOX PUBLICIDADE 2 -->

        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->