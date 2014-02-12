<link rel="stylesheet" href="/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">
$(function(){
  //carrossel
    $('#carrossel1').jcarousel({
        wrap: "both",
        scroll: 1
    });
    //carrossel
    $('#carrossel4').jcarousel({
        wrap: "both",
        scroll: 4
    });
});
</script>

<?php
  $vid1 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.site_id = ?', (int)$site->id)
    ->andWhere('a.is_active = 1')
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(90)
    ->orderBy('a.id desc')
    ->execute();
  if(!isset($asset)) $asset = $vid1[0];

  $vid2 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.is_active = 1')
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(30)
    ->orderBy('a.id desc')
    ->execute();
?>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<div class="bg-site">
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0): ?>
      <h2>
      <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
      <?php if($program->getImageThumb() != ""): ?>
      <img src="http://cmais.com.br/portal/images/capaPrograma/chicoanysio/logo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
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
    </div>
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

              <?php include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $asset, 'ipad' => $ipad)) ?>

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>

            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <?php include_partial_from_folder('blocks','global/display-1c-list-carrossel', array('displays' => $vid1)) ?>

              <?php //include_partial_from_folder('blocks','global/display-1c-list-carrossel', array('displays' => $vid1)) ?>
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("programas-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              <?php if(isset($displays["destaque-noticias"])): ?>
              <!-- BOX PADRAO Noticia -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>Not&iacute;cias + recentes</h4>
                    <!-- <a href="#" class="rss" title="rss"></a> -->
                  </div>
                </div>
                <?php include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias"])) ?>
              </div>
              <!-- /BOX PADRAO Noticia -->
              <?php endif; ?>

            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->

          <!-- MENU-RODAPE -->
          <?php include_partial_from_folder('blocks','global/display-3c-last-videos', array('displays' => $vid2)) ?>
          <!-- /MENU-RODAPE -->

          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- programas-assets-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("programas-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->

        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->

