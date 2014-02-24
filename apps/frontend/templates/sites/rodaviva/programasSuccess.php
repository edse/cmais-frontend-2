<?php
/*
$apresentador = Doctrine_Query::create()
 ->select('a.title')
 ->from('Asset a, RelatedAsset ra')
 ->where('ra.asset_id = a.id')
 ->andWhere("ra.type = 'Apresentador'")
 ->andWhere('a.site_id = ?', (int)$site->id)
 ->andWhere('a.asset_type_id = 20')
 ->groupBy('a.title')
 ->orderBy('a.title asc')
 ->limit(50)
 ->execute();
 *
 */
?>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/jquery-ui-i18n.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/ui-lightness/jquery-ui-1.8.11.custom.css" rel="stylesheet" />


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<!-- CAPA SITE -->
<div class="bg-rodaviva">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0): ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0): ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0): ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <div class="box-topo grid3">
        <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
      </div>
      <!-- /box-topo -->
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo">
      <!-- BOX LATERAL -->
      <?php include_partial_from_folder('blocks','global/shortcuts') ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
          <div class="tudo-Rodaviva">
            <span class="bordaTopRV"></span>
            <div class="centroRV excp">
              <div class="video">
                <div class="cabecalho">
                  <h2><?php echo $section->getTitle() ?></h2>
                </div>
                <div class="busca">
                  <form class="chave" name="busca" id="busca" method="get">
                    <div class="palavra-chave">
                      <p>Buscar palavra-chave</p>
                      <input class="campo" type="text" name="palavra" id="palavra" value="" />
                      <a href="javascript: document.busca.submit()" class="confirmar"><span>buscar</span></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <span class="bordaBottomRV"></span>
            <div class="listaVideos" style="display: none">
              <?php if(count($pager) > 0): ?>
              <?php foreach($pager->getResults() as $d): ?>
              <?php $videos = $d -> retriveRelatedAssetsByAssetTypeId(6); ?>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <?php if(count($videos) > 0): ?>
                    <a class="imgTumb" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"> <img src="http://img.youtube.com/vi/<?php echo $videos[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" /> </a>
                    <?php else:?>
                    <a class="imgTumb" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"> <img src="http://cmais.com.br/portal/images/capaPrograma/rodaviva/img-padrao.png" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" /> </a>
                    <?php endif;?>
                    <span class="faixa"></span>
                    <h4><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h4>
                    <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getDescription() ?></a></p>
                    <span class="exibido">Exibido em <?php echo format_date($d->AssetEpisode->getDateRelease(),'d') ?></span>
                    <a class="mais" href="<?php echo $d->retriveUrl() ?>"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <?php endforeach;?>
              <?php else:?>
              <p style="float:left">Nenhum resultado encontrado!</p>
              <?php endif;?>

              <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
              <div class="paginacao grid3">
                <div class="centraliza">
                  <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
                  <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
                  <ul>
                    <?php foreach ($pager->getLinks() as $page): ?>
                    <?php if ($page == $pager->getPage()): ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
                    <?php else:?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
                    <?php endif;?>
                    <?php endforeach;?>
                  </ul>
                  <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
                  <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
                </div>
              </div>
              <form id="page_form" action="" method="post">
                <input type="hidden" name="return_url" value="<?php if(isset($_REQUEST['url'])) echo $_REQUEST['url']; ?>" />
                <input type="hidden" name="page" id="page" value="" />
              </form>
              <script>
				function goToPage(i) {
					$("#page").val(i);
					$("#page_form").submit();
				}
              </script>
              <!-- PAGINACAO -->
              <?php endif;?>
              <?php endif;?>
            </div>
            
            <div id="google_search" style="display:none; text-align: left">
				<script>
				  (function() {
				    var cx = '005232987476052626260:njc1dibo15k';
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
			<script>
				function getURLParameter(name) {
				    return decodeURI(
				        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
				    );
				}
				if(getURLParameter("palavra") == "null" || getURLParameter("palavra") == ""){
					$('.listaVideos').show();
				}else{
					var busca = getURLParameter("palavra");
					$('#palavra').val(busca);
					$('#google_search').show();
				}
			</script>
        
            <!-- BOX PUBLICIDADE 2 -->
            <div class="box-publicidade pub-grd grid3">
              <!-- programas-assets-728x90 -->
              <script type='text/javascript'>
				GA_googleFillSlot("cmais-assets-728x90");

              </script>
            </div>
            <!-- / BOX PUBLICIDADE 2 -->
          </div>
        </div>
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
</div>
<!-- / CAPA SITE -->
