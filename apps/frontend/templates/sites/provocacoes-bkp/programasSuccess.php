<script type="text/javascript" src="http://cmais.com.br/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/ui-lightness/jquery-ui-1.8.11.custom.css" rel="stylesheet" />	

<?php
  $sites = Doctrine_Query::create() -> select('s.*') -> from('Site s') -> where("s.slug IN ('rodaviva','metropolis','cartaoverde','vitrine','culturaretro','manoseminas','provocacoes','jornaldacultura')") -> orderBy('s.title asc') -> limit(9) -> execute();?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php  echo $section -> Site -> getSlug();?>.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<script type="text/javascript">$( function() {
    //carrossel
    $('.carrossel').jcarousel({
      wrap: "both",
      scroll: 1
    });
  });</script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<!-- / CAPA SITE -->
<div id="capa-site">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  <!-- BARRA SITE -->
  <div id="barra-site">
    <?php if(isset($program) && $program->id > 0): ?>
    <div class="topo-programa">
      <h2>
      <a href="<?php echo $program->retriveUrl() ?>">
      <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
      </a>
      </h2>
      <?php endif;?>
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif;?>
      <?php if(isset($program) && $program->id > 0): ?>
      <!-- horario -->
      <div id="horario">
        <p>
          <?php echo html_entity_decode($program->getSchedule()) ?>
        </p>
      </div>
      <!-- /horario -->
    </div>
    <?php endif;?>
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
      <?php endif;?>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
    <?php endif;?>
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <div id="menu-rodape" class="grid3">
        <ul class="abas">
          <li class="neutro">
            <a href="videos">Todos os V&iacute;deos</a>
            <span></span>
          </li>
          <!-- li class="vistos"><a title="+ Vistos" href="#vistos">+ Vistos</a><span class="decoracao"></span></li -->
          <!--li class="recentes"><p title="+ Recentes" href="#recentes" class="ativo">+ Recentes</p><span class="decoracao"></span></li-->
        </ul>
        <div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
          <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos3.css" type="text/css" />
          <div class="busca">
            <form id="busca" name="busca" action="" method="post">
  				  	<input type="hidden" name="ordem" id="ordem" value="" />
  				  	<input type="hidden" name="sequencia" id="sequencia" value="" />
              <div class="palavra-chave">
                <input type="hidden" value="<?php if(isset($_REQUEST['site_id']))
            echo $_REQUEST['site_id'];?>" name="site_id" id="site_id" />
                <label class="busque">
                  Busque por
                  <span>palavra-chave</span>
                </label>
                <input type="text" class="campo-busca" name="palavra" id="campo-busca" value="<?php if(isset($_REQUEST['palavra']))
            echo $_REQUEST['palavra'];?>" style="width:150px" />
                <input type="submit" class="buscar" name="buscar" id="buscar" value="buscar" style="cursor:pointer" />
              </div>
              <div class="filtro">
								<script type="text/javascript">
								  $(function(){ //onready
								    // Datepicker
								    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
								    $('.datepicker').datepicker({
								      dateFormat: 'yy-mm-dd',
								      changeYear: true,
								      yearRange: '1987:c'
								    });
								  });
								</script>
              	
                <input type="checkbox" id="filtrar_por" />
                <label for="filtrar_periodo" class="periodo">
                  Filtrar por Período
                </label>
                <label for="de">
                  de
                </label>
                <input type="text" class="text datepicker" id="de" name="de" value="<?php if(isset($_REQUEST['de'])) echo $_REQUEST['de'] ?>" />
                <label for="ate">
                  até
                </label>
                <input type="text" class="text datepicker" id="ate" name="ate" value="<?php if(isset($_REQUEST['ate'])) echo $_REQUEST['ate'] ?>" />
                <input type="submit" class="buscar" name="buscar" id="filtrar" value="filtrar" style="cursor:pointer" />
              </div>
              <div class="organizar" style="width:290px">
                <label>
                  Organizar por
                </label>
                <!-- class ATIVO somente quando for selecionado! -->
                <a onclick="$('#busca #ordem').attr('value','cronologica'); $('#busca #sequencia').attr('value','<?php if($_REQUEST['sequencia'] == 'asc'): ?>desc<?php else: ?>asc<?php endif; ?>'); $('#busca').submit()" <?php if($_REQUEST['ordem'] == 'cronologica'): ?>onmouseover="$(this).html('inverter seleção')" onmouseout="$(this).html('ordem cronológica')" class="ativo"<?php endif; ?> style="padding-right:5px; border-right: 1px solid #f63; cursor:pointer">Ordem Cronol&oacute;gica</a>
                <a onclick="$('#busca #ordem').attr('value','alfabetica'); $('#busca #sequencia').attr('value','<?php if($_REQUEST['sequencia'] == 'asc'): ?>desc<?php else: ?>asc<?php endif; ?>'); $('#busca').submit()" <?php if($_REQUEST['ordem'] == 'alfabetica'): ?>onmouseover="$(this).html('inverter seleção')" onmouseout="$(this).html('ordem alfabética')" class="ativo"<?php endif; ?> style="padding-left:5px; cursor:pointer">Ordem Alfab&eacute;tica</a>
                
              </div>
            </form>
          </div>
          <div id="todas" class="filho blocos" style="display:block;">
            <div class="capa">
              <ul>
                <?php if(count($pager) > 0): ?>
                <?php foreach($pager->getResults() as $d): ?>
                  <?php $videos = $d->retriveRelatedAssetsByAssetTypeId(6); ?>
                <li class="conteudo-lista">
                  <a href="<?php echo $d->retriveUrl() ?>" class="bg" title="<?php echo $d->getTitle() ?>">
                  <!--img class="" src="<?php echo $d->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $d->getTitle() ?>" /-->
                  <img class="" src="http://img.youtube.com/vi/<?php echo $videos[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
                  <span></span>
                  </a>
                  <a href="<?php echo $d->retriveUrl() ?>" class="titulos" title="<?php echo $d->getTitle() ?>">
                  <?php echo $d->getTitle() ?>
                  </a>
                  <a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?>
                  </a>
                </li>
                <?php endforeach;?>
                <?php endif;?>
              </ul>
            </div>
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
          <form id="page_form" action="" method="post">
          	<input type="hidden" name="return_url" value="<?php if (isset($_REQUEST['url'])) echo $_REQUEST['url'] ?>" />
          	<input type="hidden" name="page" id="page" value="" />
          	<input type="hidden" name="palavra" id="palavra" value="<?php if(isset($_REQUEST['palavra'])) echo $_REQUEST['palavra'] ?>" />
          	<input type="hidden" name="ordem" id="ordem" value="<?php if(isset($_REQUEST['ordem'])) echo $_REQUEST['ordem'] ?>" />
          	<input type="hidden" name="sequencia" id="sequencia" value="<?php if(isset($_REQUEST['sequencia'])) echo $_REQUEST['sequencia'] ?>" />
          	<input type="hidden" name="de" id="de" value="<?php if(isset($_REQUEST['de'])) echo $_REQUEST['de'] ?>" />
          	<input type="hidden" name="ate" id="ate" value="<?php if(isset($_REQUEST['ate'])) echo $_REQUEST['ate'] ?>" />
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
        <script type='text/javascript'>GA_googleFillSlot("cmais-assets-728x90");</script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- / CAPA SITE -->