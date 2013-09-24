<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date')?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))?>
</div>

<!-- CAPA SITE --> 
<div id="capa-site"> 
  <!-- BARRA SITE -->
  <div id="barra-site">
    <!--TOPO PROGRAMA-->
    <div class="topo-programa">

      <?php if(isset($program) && $program->id > 0): ?>
      <h2><a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;"> <?php if($program->getImageThumb() != ""):?>
      <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" /> <?php else:?>
      <h3 class="tit-pagina grid1"><?php echo $program->getTitle()?>      
      </h3> <?php endif;?></a></h2>
      <?php endif;?>

     
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))?>
      <?php endif;?>

      <?php if(isset($program) && $program->id > 0): ?>
      <!-- horario -->
      <div id="horario">
        <p><?php echo html_entity_decode($program->getSchedule())?></p>
      </div>
      <!-- /horario -->
      <?php endif;?>
    </div>
    <!--/TOPO PROGRAMA-->
    
    <!-- box-topo -->    
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections))?>
      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
      </div>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts')?>
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <?php if(isset($displays)): ?>
          <!-- DESTAQUE 2 COLUNAS -->
          <div class="duas-colunas destaque grid2">
            <div class="texto">
            <?php include_partial_from_folder('sites/passalaemcasa','global/destaquepadrao', array('displays' => $displays)) ?>
            </div>
            </div>
          
          <!-- /DESTAQUE 2 COLUNAS -->
          <?php endif; ?>
          <!-- col-esq -->
          <div class="col-esq grid1">
          <?php if(isset($displays["destaque-multiplo-1"])): ?>
            <!-- BOX PADRAO Mais recentes -->
            <div class="box-padrao grid1">
              <!--topo-claro-->
              <div class="topo claro">
                <span></span>
                <!--capa-titulo-->
                <div class="capa-titulo">
                  <h4>
                  <?php
                    if ($site -> getSlug() == "mostra")
                      echo "Próximos Filmes";
                    else
                      echo "Conte&uacute;dos + recentes";
                  ?>
                  </h4>
                  <a href="/<?php echo $site->getSlug() ?>/feed" class="rss" title="rss"></a>
                </div>
                <!--/capa-titulo-->
              </div>
              <!--/topo-claro-->
              <?php if(isset($displays["destaque-multiplo-1"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-multiplo-1"]))?>
            </div>
            <!-- /BOX PADRAO Mais recentes -->
          <?php endif;?>
          <?php if(isset($displays["destaque-padrao-6"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-6"]))?>  
          </div>
          <!-- /col-esq -->
          <div class="col-dir grid1"> 
            <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"]))?>
            <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"]))?>
          </div>
          <!-- /col-dir -->
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <?php include_partial_from_folder('blocks','global/display-1c-vertical-multiple', array('displays' => $displays["destaque-secundario"])) ?>
          <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"]))?>
          <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"]))?>
        </div>
        <!-- /DIREITA --> 
      </div> 
      <!-- /CAPA --> 
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!--/MIOLO -->
</div>
<!-- /CAPA SITE -->

