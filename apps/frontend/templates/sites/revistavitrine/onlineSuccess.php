<?php
$assets = Doctrine_Query::create()
  ->select('a.*')
  ->from('Asset a, SectionAsset sa, Section s')
  ->where('sa.asset_id = a.id')
  ->andWhere('sa.section_id = s.id')
  ->andWhere('s.slug = ?', "online")
  ->andWhere('a.site_id = ?', (int)$site->id)
  ->andWhere('a.asset_type_id = 1')
  ->andWhere('a.is_active = 1')
  ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
  ->groupBy('sa.asset_id')
  ->orderBy('sa.display_order')
  ->limit(50)
  ->execute();

if (!isset($asset)) {
  $asset = $assets[0];
}
?>
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/revistavitrine.css" type="text/css" />
<?php use_helper('I18N', 'Date')?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))  ?>
</div>
<div class="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site"  >
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($site) && $site->id > 0): ?>
        <?php if($site->getImageThumb() != ""): ?>
      <h2><a href="/revistavitrine" title="Revista Vitrine"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>"></a></h2>
        <?php else: ?>
      <h2><a href="/revistavitrine" title="Revista Vitrine"><?php echo $site->getTitle() ?></a></h2>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts')    ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <?php $section = $asset->getSections() ?>
      <?php include_partial_from_folder('sites/revistavitrine','global/menu', array('siteSections' => $siteSections, "site" => $site, "section" => $section[0])) ?>
     
      <?php if(isset($program) && $program->id > 0): ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif; ?>
      
      <div class="capa-revista online">
        <div class="descricao">
          <h2><?php echo $asset->getTitle() ?></h2>
          <p class="data"><?php echo $asset->AssetContent->getHeadline() ?></p>
          <p><?php echo $asset->getDescription() ?></p>
        </div>
        <div class="issue">
          <?php echo html_entity_decode($asset->AssetContent->render()) ?>
          <!--h3>Versão online | Leia gratuitamente</h3-->
        </div>
        <?php if(isset($assets)): ?>
          <?php if(count($assets) > 1): ?>
        <div class="edicoes">
          <div class="tit-edicoes">
            <h3>Outras Edições</h3>
          </div>
          
          <ul>
            <?php foreach($assets as $k=>$a): ?>
              <?php if($a->id != $asset->id): ?>
            <li>
              <a href="<?php echo $a->retriveUrl() ?>" title="<?php echo $a->getTitle() ?>">
                <?php $preview = $a->retriveRelatedAssetsByRelationType("Preview") ?>
                <?php if($preview): ?>
                <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $a->getTitle() ?>" />
                <?php endif; ?>
                <div class="descricao">
                  <h2><?php echo $a->getTitle() ?></h2>
                  <p class="data"><?php echo $a->AssetContent->getHeadline() ?></p>
                  <p><?php echo $a->getDescription() ?></p>
                </div>
              </a>
            </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--div class="paginacao grid3">
        <div class="centraliza">
          
          <a href="javascript: goToPage(1);" class="btn anterior">Anterior</a>
          <ul>
            <li><a class="ativo" href="javascript: goToPage(1);">1</a></li>
            <li><a href="javascript: goToPage(2);">2</a></li>
            <li><a href="javascript: goToPage(3);">3</a></li>
            <li><a href="javascript: goToPage(4);">4</a></li>
            <li><a href="javascript: goToPage(5);">5</a></li>
          </ul>
          <a href="javascript: goToPage(2);" class="btn proxima">Próxima</a>
         
        </div>
      </div-->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
<script type="text/javascript">
  $('.btn-sobre').click(function() {
    $('.sobre').toggle();
    $('.btn-sobre').toggleClass("ativo");
  });

</script>
