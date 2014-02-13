<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">$( function() {
		//carrossel
		$('.carrossel').jcarousel({
			wrap: "both"
		});
	});</script>
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
      <img src="http://cmais.com.br/portal/images/capaPrograma/elis/logo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
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
    <!-- BOX LATERAL -->
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>
    <!-- BOX LATERAL -->
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <!-- DESTAQUE 2 COLUNAS -->
          <?php if(isset($displays["destaque-principal"])) include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["destaque-principal"])) ?>
          <!-- /DESTAQUE 2 COLUNAS -->
          <!-- barra compartilhar -->
          <!--?php include_partial_from_folder('blocks','global/share-2c-close', array('site' => $site, 'uri' => $uri)) ?-->
          <!-- /barra compartilhar -->
          <div class="col-esq grid1">
            <!-- BOX NOTICIA -->
            <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
            <!-- /BOX NOTICIA -->
            <!-- BOX NOTICIA -->
            <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
            <!-- /BOX NOTICIA -->
          </div>
          <div class="col-dir grid1">
            <!-- BOX NOTICIA -->
            <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
            <!-- /BOX NOTICIA -->
            <!-- BOX NOTICIA -->
            <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>
            <!-- /BOX NOTICIA -->
            <!-- BOX NOTICIA -->
            <?php if(isset($displays["destaque-padrao-5"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
            <!-- /BOX NOTICIA -->
          </div>
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <!-- DESTAQUE 1 COLUNA -->
          <?php if(isset($displays["destaque-secundario"])) include_partial_from_folder('blocks','global/display-1c-vertical-multiple', array('displays' => $displays["destaque-secundario"])) ?>
          <!-- /DESTAQUE 1 COLUNA -->
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- cmais-musica-300x250 -->
            <script type='text/javascript'>GA_googleFillSlot("cmais-musica-300x250");</script>
          </div>
          <!-- / BOX PUBLICIDADE -->
          <!-- BOX FACEBOOK -->
          <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'uri' => $uri)) ?>
          <!-- /BOX FACEBOOK -->
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
    </div>
    <!-- CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- / CAPA SITE -->