<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<script type="text/javascript">
  $(function() {

    $('.m-colunistas, .submenu-interna').mouseover(function() {

      $('.toggle-menu').slideDown("fast");

    });
    $('.m-colunistas, .submenu-interna').mouseleave(function() {

      $('.toggle-menu').slideUp("fast");
    });
  });

</script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<div id="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <h2><a href="http://culturafm.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/images/capaPrograma/culturafm/logo.png"></a></h2>
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif;?>
      <div id="horario">
        <a href="javascript: window.open('http://culturafm.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" class="aovivo">ao vivo</a>
      </div>
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
        <a href="<?php echo $site->retriveUrl() ?>/<?php echo $section->getSlug()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle() ?></a>
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
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <h3 class="tit-pagina grid2"><?php echo $site->getTitle()?></h3>
          
            

          <div class="box-interna grid2">
            <div class="texto">
              <p><?php echo $site->getDescription() ?></p>
            </div>
          </div>

          <?php
            $sections = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', $site->id)
              ->andWhere('s.is_active = ?', 1)
              ->andWhere('s.is_visible = ?', 1)
              ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
              ->orderBy('s.display_order')
              ->execute();
           ?>
          <?php if($sections): ?>
          <!-- menu subsection-->
          <ul class="nav navbar-nav">
            <?php foreach($sections as $s): ?>
              <?php if($s->getSlug() != "home"): ?>
                <?php if($s->getSlug() == "arquivo"): ?>
            <li<?php if($s->id == $section->id): ?> class="active"<?php endif; ?>><a href="/programas/<?php echo $site->getSlug() ?>"><?php echo $s->getTitle() ?></a></li>
                <?php else: ?>
            <li<?php if($s->id == $section->id): ?> class="active"<?php endif; ?>><a href="/programas/<?php echo $site->getSlug() . "/" . $s->getSlug() ?>"><?php echo $s->getTitle() ?></a></li>
                <?php endif; ?>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu subsection-->
          <?php endif; ?>

            <?php if(isset($pager)): ?>
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
                      <a class="img" href="/<?php echo $d->Site->getSlug() ?>/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" />
                      </a>
                      <?php endif; ?>
                      <div class="box-texto grid2">
                        <a href="/<?php echo $d->Site->getSlug() ?>/<?php echo $d->getSlug() ?>" class="titulos"><span class="<?php echo $d->AssetType->getSlug() ?>"></span><?php echo $d->getTitle() ?></a>
                        <p><?php echo $d->getDescription() ?></p>
                        <p class="fonte"><a href="#"><?php echo $d->retriveLabel() ?></a> | <?php echo format_datetime($d->getCreatedAt(),"P") ?> | <?php echo format_datetime($d->getCreatedAt(),"t") ?></p>
                      </div>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <!-- /BOX LISTAO -->
              <?php endif; ?>
            <?php endif; ?>

            <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
              <div class="paginacao pag3 grid2">
                <p class="txt-12">P&aacute;gina <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></p>
                <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo"></a>
                <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior"></a>
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
              
              <?php endif; ?>
            <?php endif; ?>



        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <?php if(isset($displays['sobre'])): ?>
            <?php if(count($displays['sobre']) > 0): ?>
          <!-- destaque secundario -->
          <div id="destaque" class="uma-coluna destaque grid1">
            <ul class="abas-conteudo conteudo">
              <li style="display: block; height: auto;" id="bloco1" class="filho">
                <a class="media" href="<?php echo $displays['sobre'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre'][0]->getTitle() ?>"> 
                  <img src="<?php echo $displays['sobre'][0]->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $displays['sobre'][0]->getTitle() ?>">
                </a>
                <a href="<?php echo $displays['sobre'][0]->retriveUrl() ?>" class="titulos" title="<?php echo $displays['sobre'][0]->getTitle() ?>"><?php echo $displays['sobre'][0]->getTitle() ?></a>
                  <p><?php echo $displays['sobre'][0]->getDescription() ?></p>
                </li>
            </ul>
            <?php
            /*
            <ul class="abas-menu pag-bola destaque1" style="display: none;">
              <li class="ativo"><a href="#bloco1" title="Pérola Paes"></a></li>
            </ul>
            */
            ?>
          </div>
          <!-- /destaque secundario -->
            <?php endif; ?>
          <?php endif; ?>
          
          
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- culturafm-300x250 -->
            <script type='text/javascript'>
              GA_googleFillSlot("culturafm-300x250");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->

        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- / CAPA SITE -->