<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug(); ?>.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/videos.css" type="text/css" />
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
<div class="bg-site">
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0): ?>
      <h2>
      <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
      <?php if($program->getImageThumb() != ""): ?>
      <img src="http://cmais.com.br/portal/images/capaPrograma/chicoanysio/logo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
      <?php	else:?>
      <h3 class="tit-pagina grid1">
      <?php echo $program->getTitle() ?>
      </h3>
      <?php	endif;?>
      </a>
      </h2>
      <?php	endif;?>
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php	endif;?>
    </div>
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
          	  <!--li class="recentes"><a title="+ Recentes" href="#recentes">+ Recentes</a><span class="decoracao"></span></li-->
          	</ul>
          	
          	<div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
          		
          	  <div class="busca">
          	  	<form id="busca-galeria" name="busca" action="" method="post">
          	  	  <label class="busque">Busque por <span>palavra-chave</span></label>
          	  	  <input type="text" class="campo-busca" name="busca" id="campo-busca" value="<?php if(isset($_REQUEST['busca'])) echo $_REQUEST['busca']; ?>"/>
          	  	  <input type="submit" class="buscar" name="buscar" id="buscar" value="buscar" style="cursor:pointer" />
          	  	</form>
          	  </div>
          	  
          	  <div id="todas" class="filho blocos" style="display:block;">
          	  	<div class="capa">
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
          	  <!-- PAGINACAO -->
          	  <div class="paginacao grid3">
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
              	<input type="hidden" name="busca" id="busca" value="<?php echo $busca ?>" />
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
		     
		      
			</div>
		  </div>
		
		  <!-- BOX PUBLICIDADE 2 -->
		  <div class="box-publicidade pub-grd grid3">
		    <!-- programas-assets-728x90 -->
		    <script type='text/javascript'>
		      GA_googleFillSlot("programas-assets-728x90");
		    </script>
		  </div>
		  <!-- / BOX PUBLICIDADE 2 -->

        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->