<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $asset->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">
$(function(){
  //carrossel
    $('.carrossel').jcarousel({
        wrap: "both",
        scroll: 1
    });
});
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<?php
  $vid1 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.site_id = ?', (int)$site->id)
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(90)
    ->orderBy('a.created_at desc')
    ->execute();

  $vid2 = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetVideo av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.asset_type_id = 6')
    ->andWhere("av.youtube_id != ''")
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->limit(30)
    ->orderBy('a.created_at desc')
    ->execute();
?>
	<div class="bg-chamada">
		<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
	</div>
	<div class="bg-site"></div>
    <!-- / CAPA SITE -->
    <div id="capa-site">

      

      <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0): ?>
      <h2>
      <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
      <?php if($program->getImageThumb() != ""): ?>
      <img src="http://cmais.com.br/portal/images/capaPrograma/millor/logo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
      <?php	else:?>

      <?php echo $program->getTitle() ?>

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
              <div class="texto">

              <?php if(isset($asset)) include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $asset, 'ipad' => $ipad)) ?>
              
              <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
              <?php if(count($relacionados) > 0): ?>
                  <p class="tit">Posts Relacionados</p>
                  <ul class="posts">
                    <?php foreach($relacionados as $k=>$d): ?>
                    <li><a href="<?php echo $d->retriveUrl()?>"><?php echo $d->getTitle()?></a></li>
                    <?php endforeach; ?>
                  </ul>
                  <?php if(count($asset->getTags()) > 0): ?>
                    <p class="tags">Tags:
                    <?php foreach($asset->getTags() as $t): ?>
                      <a href="#"><span><?php echo $t?></span></a>
                    <?php endforeach; ?>
                    </p>
                  <?php endif; ?>
              <?php endif; ?>

              </div>

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>

            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <?php include_partial_from_folder('blocks','global/display-1c-list-carrossel', array('displays' => $vid1)) ?>
              
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