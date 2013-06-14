<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
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
	<div class="bg-site videos">

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
          <div id="menu-rodape" class="grid3">
          	
          	<ul class="abas">
          	  <li class="neutro"><a href="javascript:;" onclick="$('#busca-galeria #section').attr('value',''); $('#busca-galeria').submit()">Todos os V&iacute;deos</a><span></span></li>
          	</ul>
          	
          	<div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
          		
          	  <div class="busca">
          	    
                <ul>
                  <!--li><a href="javascript:;" onclick="$('#busca-galeria #section').attr('value',''); $('#busca-galeria').submit()" <?php if($_REQUEST['section'] == ''): ?>class="ativo"<?php endif; ?>><strong>Todos</strong></a></li-->
                  <?php
                  //echo $section->id;
                    $subsections = Doctrine_Query::create()
                      ->select('s.*')
                      ->from('Section s')
                      ->where('s.parent_section_id = ?', (int)$section->id)
                      ->orderBy('s.display_order')
                      ->limit(10)
                      ->execute();
                                    
                  ?>
                  <?php foreach($subsections as $s): ?>                   
                  <li><a href="javascript:;" onclick="$('#busca-galeria #section').attr('value','<?php echo $s->getId(); ?>'); $('#busca-galeria').submit()" <?php if($_REQUEST['section'] == $s->getId()): ?>class="ativo"<?php endif; ?>><strong><?php echo $s->getTitle(); ?></strong></a></li>
                  <?php endforeach; ?>
                </ul>
          	    
          	  	<form id="busca-galeria" name="busca" action="" method="post">
          	  	  <label class="busque">Busque por <span>palavra-chave</span></label>
          	  	  <input type="text" class="campo-busca" name="busca" id="campo-busca" value="<?php if(isset($_REQUEST['busca'])) echo $_REQUEST['busca']; ?>"/>
                  <input type="hidden" name="section" id="section" value="<?php if(isset($_REQUEST['section'])) echo $_REQUEST['section']; ?>"/>
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
          	  <div class="box-publicidade" style="width: 250px; position: absolute; top:222px; left:5px;">
          	  	<!-- cmais-assets-250x250 -->
        				<script type='text/javascript'>
        				GA_googleFillSlot("maiscrianca");
        				</script>
    		      </div>
          	 
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
                <input type="hidden" name="return_url" value="<?php echo $url ?>" />
                <input type="hidden" name="page" id="page" value="" />
                <input type="hidden" name="section" id="section" value="<?php if(isset($_REQUEST['section'])) echo $_REQUEST['section']; ?>" />
                <input type="hidden" name="busca" id="busca" value="<?php if(isset($_REQUEST['busca'])) echo $_REQUEST['busca']; ?>" />
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
		      GA_googleFillSlot("maiscrianca");
		    </script>
		  </div>
		  <!-- / BOX PUBLICIDADE 2 -->

        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
    </div>