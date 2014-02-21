  <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/busca.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
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
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna grid3">
            <?php foreach($siteSections as $s): ?>
              <?php if(count($s->Children) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none; width: auto;">
                    <ul style="display:block;">
                    <?php foreach($s->Children as $s): ?>
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
          
          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/videos" title="Vídeos">Vídeos</a>
              <span>&gt;</span>
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>
        
        <?php if(isset($pager)): ?>
        <div class="box-topo grid3">
          <h3 class="tit-pagina">Resultado de busca para "<?php echo $term ?>"<?php if($search_site):?> no site <?php echo $search_site->getTitle() ?><?php endif;?>.</h3>
          <?php if($search_site):?><p style="clear: both; text-align: left;"><a href="http://cmais.com.br/busca?term=<?php echo $term ?>">Clique aqui para procurar por "<?php echo $term ?>" em todo o portal.</a></p><?php endif;?>
          <p class="exibindo">Exibindo <span>1</span> a <span><?php if($pager->getNbResults() >= 10) echo "10"; else echo $pager->getNbResults(); ?></span> de <span><?php echo $pager->getNbResults()?></span> resultados</p>
        </div>
        <?php endif; ?>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- RESULTADO BUSCA -->
          <div id="estilo-menu" class="grid3">

            <?php /*
            <!-- filtrar busca -->
            <form id="filtro" action="" method="post">
              <div class="box-busca">
                <label>Ordernar por:</label>
                <select class="ordenar" name="ordenar" id="ordenar">
                  <option value="+ recentes">+ recentes</option>
                  <option value="+ vistos">+ vistos</option>

                  <option value="+ antigos">+ antigos</option>
                  <option value="A - Z">A - Z</option>
                </select>
              </div>
              <div class="box-busca">
                <label>O que:</label>
                <select class="oque" name="oque" id="oque">

                  <option value="opcao 01">arte e cultura</option>
                  <option value="opcao 02">opcao 02</option>
                  <option value="opcao 03">opcao 03</option>
                  <option value="opcao 04">opcao 04</option>
                </select>
              </div>
              <div class="box-busca">

                <label>Onde:</label>
                <select class="onde" name="onde" id="onde">
                  <option value="opcao 01">mundo secreto dos esportes</option>
                  <option value="opcao 02">opcao 02</option>
                  <option value="opcao 03">opcao 03</option>
                  <option value="opcao 04">opcao 04</option>

                </select>
              </div>
              <div class="box-busca last">
                <label>Quando:</label>
                <input id="data-de" type="text" /><label> a </label>
                <input id="data-ate" type="text" /><input class="ok" type="submit" value="OK" id="ok" />
              </div>

            </form>
            <!-- /filtrar busca -->
             */ ?>

            <!-- menu da busca -->
            <ul class="abas-menu abas grid3">
              <li class="todos<?php if($filter == "") echo " ativo"; ?>"><a href="javascript: filterBy('');" title="Todos">Todos</a><span class="decoracao"></span></li>
              <li class="programas<?php if($filter == 'program') echo " ativo"; ?>"><a href="javascript: filterBy('program');" title="Programas">Programas</a><span class="decoracao"></span></li>
              <li class="noticias<?php if($filter == 'content') echo " ativo"; ?>"><a href="javascript: filterBy('content');" title="Not&iacute;cias">Not&iacute;cias</a><span class="decoracao"></span></li>
              <li class="videos<?php if($filter == 'video') echo " ativo"; ?>"><a href="javascript: filterBy('video');" title="V&iacute;deos">V&iacute;deos</a><span class="decoracao"></span></li>
              <li class="fotos<?php if($filter == 'image') echo " ativo"; ?>"><a href="javascript: filterBy('image');" title="Fotos">Fotos</a><span class="decoracao"></span></li>
              <li class="audios<?php if($filter == 'audio') echo " ativo"; ?>"><a href="javascript: filterBy('audio');" title="&Aacute;udios">&Aacute;udios</a><span class="decoracao"></span></li> 
            </ul>
              <form id="filter_form" action="" method="post">
              	<input type="hidden" name="filter" id="filter" value="<?php echo $filter ?>" />
              	<input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
              	<input type="hidden" name="site_id" id="site_id" value="<?php if($search_site) echo $search_site->getId(); ?>" />
              </form>
              <script>
                function filterBy(i) {
                  $('#filter_form #filter').val(i);
                  $('#filter_form').submit();
                }
              </script>
            <!-- /menu da busca -->

            <!-- BOX LISTAO 2 -->
            <ul class="abas-conteudo">
              <li id="todos" class="filho">
                <ul class="box-listao grid3">
                  <?php /*
                  <li>
                    <div class="box-texto grid2">
                      <a href="/cedoc" class="titulos"><span class="content"></span>CEDOC</a>
                      <!--p>Descrição</p-->
                      <!--p class="fonte"><a href="">Arte &amp; Cultura</a> | sexta-feira, 25 de outubro de 2012 | 12:18</p-->
                    </div>
                  </li>
                   */ ?>
                <?php if(count($pager) > 0): ?>
                  <?php foreach($pager->getResults() as $d): ?>
                    <?php if($type_id == "100"): ?>
                      <li>
                        <?php if($d->getImageThumb() != ""): ?>
                        <a class="img" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                          <img src="http://midia.cmais.com.br/programs/<?php echo $d->getImageThumb() ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" />
                        </a>
                        <?php endif; ?>
                        <div class="box-texto grid2">
                          <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class=""></span><?php echo $d->getTitle() ?></a>
                          <p><?php echo $d->getDescription() ?></p>
                          <p class="fonte"><a href="<?php echo $d->retriveUrl() ?>"><?php echo html_entity_decode($d->getSchedule()) ?></a></p>
                        </div>
                      </li>
                    <?php else: ?>
                      <li>
                        <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                        <a class="img" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                          <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" />
                        </a>
                        <?php endif; ?>
                        <div class="box-texto grid2">
                          <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="<?php echo $d->AssetType->getSlug() ?>"></span><?php echo $d->getTitle() ?></a>
                          <p><?php echo $d->getDescription() ?></p>
                          <p class="fonte"><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->retriveLabel() ?></a> | <?php echo format_datetime($d->getCreatedAt(),"P") ?> | <?php echo format_datetime($d->getCreatedAt(),"t") ?></p>
                        </div>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                <?php else: ?>
                  <li>
                    <div class="box-texto grid2">
                      <p>Nenhum resultado para a busca por "<?php echo $term ?>"</p>
                    </div>
                  </li>
                <?php endif; ?>
                </ul>
              </li>
            </ul>
            <!-- /BOX LISTAO 2 -->

            <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO -->
              <div class="paginacao pag2 grid3">
                <p class="txt-12">P&aacute;gina <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></p>
                <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo"></a>
                <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior"></a>
              </div>
              <form id="page_form" action="" method="post">
              	<input type="hidden" name="return_url" value="<?php echo $url?>" />
              	<input type="hidden" name="page" id="page" value="" />
              	<input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
              	<input type="hidden" name="filter" id="filter" value="<?php echo $filter ?>" />
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
          <!-- /RESULTADO BUSCA -->

          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade pub-grd grid3">
            <!-- cmais-homepage-300x250 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->

        </div>
        <!-- CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->