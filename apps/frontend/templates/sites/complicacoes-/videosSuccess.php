<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          
          <?php if(isset($program) && $program->id > 0): ?>
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
          <?php endif; ?>

        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
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

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!-- CONTEUDO PAGINA -->

        <div id="conteudo-pagina">
        <!-- MENU-RODAPE -->
    <div id="menu-rodape" class="grid3">
      <ul class="abas">
        <li class="neutro"><a href="videos">Todos os V&iacute;deos</a><span></span></li>
      </ul>
            
      <div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
              <div class="busca">
                  <form id="busca" method="post" action="">
                    <label class="busque" for="campo-busca">Busque por <span>palavra-chave</span></label>
                    <input type="text" class="campo-busca" name="busca" id="busca" value="<?php echo $busca ?>" />
                    <input type="submit" class="buscar" name="buscar" id="buscar" value="buscar" style="cursor:pointer" />
                    <?php /*
                    <?php
                      $programs = Doctrine_Query::create()
                        ->select('p.*')
                        ->from('Program p, ChannelProgram cp')
                        ->where('p.id = cp.program_id')
                        ->andWhere('cp.channel_id = ?', 3)
                        ->orderBy('p.title')
                        ->execute();
                    ?>
                    <label for="tema">Filtro</label>
                    <select id="site_id" name="site_id" class="tema" onchange="$('#busca').submit()">
                      <option value="">Todos os programas</option>
                      <?php foreach($programs as $d): ?>
                      <option value="<?php echo $d->Site->getId() ?>"<?php if($d->Site->getId() == $site_id) echo " selected='selected'"; ?>><?php echo $d->getTitle() ?></option>
                      <?php endforeach; ?>
                    </select>
					*/ ?>
					 
                    <?php /*
                    <label for="ano">Ano</label>
                    <select id="ano" name="ano">
                      <option value="">Selecione</option>
                      <option value="opcao1">opcao 1</option>
                      <option value="opcao2">opcao 2</option>
                      <option value="opcao3">opcao 3</option>
                      <option value="opcao4">opcao 4</option>
                    </select>
                    */ ?>
                  </form>
                </div>
              <!-- BLOCOS -->

        <div id="todas" class="filho blocos" style="display:block;">
          <div class="capa">
            <ul class="" style="display:block">
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
        <!-- / BLOCOS -->

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
                <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page?></a></li>
              <?php else: ?>
                <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
            </ul>
            
            <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
            <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
            
          </div>
        </div>
        <form id="page_form" action="" method="post">
          <input type="hidden" name="return_url" value="<?php echo $url?>" />
          <input type="hidden" name="page" id="page" value="" />
          <input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
          <input type="hidden" name="filter" id="filter" value="<?php echo filter ?>" />
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
    <!-- /MENU-RODAPE -->

    <?php /*
    <!-- APOIO -->
      <ul id="apoio" class="grid3">
          <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
          <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
          <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
          <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
          <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
          <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
          <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
      </ul>
      <!-- APOIO -->
	*/ ?>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
	</div>
    <!-- /MIOLO -->

  </div>
  <!-- / CAPA SITE -->
  