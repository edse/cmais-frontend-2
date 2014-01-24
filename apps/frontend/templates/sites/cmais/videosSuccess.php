<?php
$sites = Doctrine_Query::create()
  ->select('s.*')
  ->from('Site s')
  ->where("s.slug IN ('cartaoverde','cartaozinho','ensaio','jornaldacultura','materiadecapa','metropolis','provocacoes','reisdarua','rodaviva','srbrasil','viola')")//,'vitrine','culturaretro','manoseminas'
  ->orderBy('s.title asc')
  ->limit(15)
  ->execute();
?>
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

    <!-- / CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE --> 
      <div id="barra-site">
      	
      	<h3 class="tit-pagina" style="margin-top:30px;">Vídeos</h3>
      	
       <?php if(isset($program) && $program->id > 0): ?>
                  <div class="topo-programa">
           
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
          <div id="menu-rodape" class="grid3">
          	
          	<ul class="abas">
          	  <li class="neutro"><a href="videos">Todos os V&iacute;deos</a><span></span></li>
          	  <!-- li class="vistos"><a title="+ Vistos" href="#vistos">+ Vistos</a><span class="decoracao"></span></li -->
          	  <!--li class="recentes"><p title="+ Recentes" href="#recentes" class="ativo">+ Recentes</p><span class="decoracao"></span></li-->
          	</ul>
          	
          	<div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
          		
          	  <div class="busca">
          	  	<ul>
          	  	  <!-- <li><a href="javascript:;" onclick="$('#busca-galeria #site_id').attr('value',''); $('#busca-galeria').submit()" class="<?php if($_REQUEST['site_id'] == ''): ?>ativo<?php endif; ?>"><strong>Todos os Programas</strong></a></li> -->
          	  	  <?php foreach($sites as $s): ?>
          	  	  <!-- <li><a href="javascript:;" onclick="$('#busca-galeria #site_id').attr('value','<?php echo $s->id; ?>'); $('#busca-galeria').submit()" class="<?php if(isset($_REQUEST['site_id'])): ?><?php if($_REQUEST['site_id'] == $s->id): ?>ativo<?php endif; ?><?php endif; ?>"><?php echo $s->getTitle() ?></a></li> -->
          	  	  <li><a href="/<?php echo $site->slug."/".$s->slug?>"> <?php echo $s->getTitle(); ?></strong></a></li>	
          	  	  <?php endforeach; ?>
          	  	</ul>
          	  		
          	  	<form id="busca-video" name="busca-video" action="" method="get">
          	  	  <label class="busque">Busque por <span>palavra-chave</span></label>
          	  	  <input type="text" class="campo-busca" name="busca" id="campo-busca" />
          	  	  <input type="submit" class="buscar" id="buscar" value="buscar" style="cursor:pointer" />
          	  	</form>
          	  	
          	  	<form id="busca-galeria" name="busca-galeria" action="videos" method="post">
          	  	  <input type="hidden" name="site_id" id="site_id" />
          	  	</form>
          	  	
          	  </div>
          	  
          	  <div id="todas" class="filho blocos" style="display:block;">
          	  	<div class="capa" style="display:none;">
          	  	  <ul>
                  <?php if(count($pager) > 0): ?>
                    <?php foreach($pager->getResults() as $d): ?>
          	  	  	<li class="conteudo-lista">
          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="bg" title="<?php echo $d->getTitle() ?>"><img class="" src="<?php echo $d->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="titulos" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a>
          	  	  	</li>
          	  	  	<?php endforeach; ?>
          	  	  <?php endif; ?>
          	      </ul>
          	    </div>
          	    
                <div id="google_search" style="display:none">
					<script>
					  (function() {
					    var cx = '005232987476052626260:jbpyp4bzle0';
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
          	  <div class="box-publicidade" style="width: 250px; position: absolute; top:450px; left:5px;">
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
          	  <div class="paginacao grid3" style="display: none">
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
		
		  <!-- BOX PUBLICIDADE 2 -->
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