<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />

<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/jornalismo-novo2013.css" type="text/css" />
  
  
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

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
          <a href="<?php echo $site->retriveUrl() ?>/serviço" title="Serviço">Serviço</a>
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
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">

          <h2><?php echo $section->getTitle() ?></h2>
        
          <?php if(count($pager) > 0): ?>
            <!-- BOX LISTAO -->
            <div class="box-listao grid2">
              <?php if(isset($date)): ?>
              <h3><?php echo format_date(strtotime($date),"D") ?></h3>
              <?php endif ?>
              <ul>
                <?php foreach($pager->getResults() as $d): ?>
                  <li>
                    <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                    <a class="img" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" />
                    </a>
                    <?php endif; ?>
                    <div class="box-texto grid2">
                      <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="<?php echo $d->AssetType->getSlug() ?>"></span><?php echo $d->getTitle() ?></a>
                      <p><?php echo $d->getDescription() ?></p>
                      <p class="fonte"><a href="#"><?php echo $d->retriveLabel() ?></a> | <?php echo format_datetime($d->getCreatedAt(),"P") ?> | <?php echo format_datetime($d->getCreatedAt(),"t") ?></p>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <!-- /BOX LISTAO -->
          <?php endif; ?>

          <?php if(isset($pager)): ?>
            <?php if($pager->haveToPaginate()): ?>
            <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
            <div class="paginacao grid2">
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
              <input type="hidden" name="return_url" value="<?php echo $url?>" />
              <input type="hidden" name="page" id="page" value="" />
            </form>
            <script>
              function goToPage(i){
                $("#page").val(i);
                $("#page_form").submit();
              }
            </script>
            <!--// PAGINACAO -->
            <?php endif; ?>
          <?php endif; ?>
          
        </div>
        <!-- /ESQUERDA -->
        
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- programas-assets-300x250 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-300x250");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->
          
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->

      <?php if (isset($displays["rodape-interno"])): ?>
        <!--APOIO-->
        <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
        <!--/APOIO-->
      <?php endif; ?>
      
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
  
</div>
<!--capa-site-->

<form id="send" action="" method="post">
  <input type="hidden" name="d" id="d" value="<?php echo $d ?>" />
</form>
<script>
  function send(d){
    $("#d").val(d);
    $("#send").submit();
  }
</script>