<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
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
      <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
      <?php if($program->getImageThumb() != ""): ?>
      <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
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
      <?php if(isset($program) && $program->id > 0): ?>
      <!-- horario -->
      <div id="horario">
        <p>
        <?php echo html_entity_decode($program->getSchedule()) ?>
        </p>
      </div>
      <!-- /horario -->
      <?php	endif;?>
    </div>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>">
        <?php echo $section->getTitle()?>
        </a>
      </div>
      <?php	endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <h3 class="tit-pagina grid2">
          <?php echo $section->getTitle()?>
          </h3>
          <!-- lista calendario -->
          <?php if(count($displays['publicidade']) > 0): ?>
          <ul class="grid2 menu-publicidade">
            <?php foreach($displays['publicidade'] as $k=>$d): ?>
            <li>
              <div class="barra-grade">
                <a href="#" class="btn-toggle tit"><?php echo $d->getTitle(); ?></a>
              </div>
              <div class="grade toggle" style="display:none; width:auto; padding-bottom:3px;">
                <!--conteudo publicidade-->
                <!--p class="p-puplicidade"></p>
                <iframe allowfullscreen="" frameborder="0" height="390" src="http://www.youtube.com/embed/yeG-3Xva8z8?wmode=transparent&amp;rel=0#t=0m0s" title="Angela Lago - Entrelinhas 11/12/2011" width="640">
                </iframe></p>
                <p class="p-puplicidade">	Mantega está em Seul para participar de reunião do G20, o grupo de países com as 20 maiores economias do mundo. A presidente eleita, Dilma Rousseff, também já está na Coreia do Sul para participar do encontro. O presidente Luiz Inácio Lula da Silva chega a Seul nesta quinta-feira (11) ao meio-dia (horário local). A cúpula do G20 terá início na noite de quinta, com um jantar oferecido pelo governo da Coreia do Sul. Dilma participa ao lado de Lula.</p/-->
                <?php echo html_entity_decode($d->Asset->AssetContent->getContent()); ?>
                <!--conteudo publicidade-->
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
          <!-- lista calendario -->
          <!--?php include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["destaque-principal"])) ?-->
          <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
          <?php include_partial_from_folder('blocks','global/display-2c-playlist', array('displays' => $displays["destaque-playlist"])) ?>
          <style type="text/css">		
          #esquerda .box-compartilhar .comentar {
				text-indent:-9999px;
			}
			#esquerda .box-compartilhar .comentar span {
				display:none;
			}
			#esquerda .btn-compartilhar {
				float:left;
			}
		</style>
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador"])) ?>
          <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-2"])) ?>
          <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador-3"])) ?>
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->