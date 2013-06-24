<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/tempo.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- barra site -->
      <div id="barra-site">

        <!-- box-topo -->
        <div class="box-topo grid3">
          <h3 class="tit-pagina">Tempo</h3>
          <div class="navegacao txt-10">
            <a href="http://cmais.com.br" title="Home">Home</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/jornalismo" title="Jornalismo">Jornalismo</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/jornalismo/tempo" title="Tempo">Tempo</a>
          </div>
        </div>
        <!-- /box-topo -->

      </div>
      <!-- barra site -->

      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- barra compartilhar -->
            <?php //include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
            <!-- /barra compartilhar -->

            <!-- PREVISAO -->
            <div class="previsao grid3">
              
              <!-- regiao norte -->
              <div class="regiao norte">
                <iframe src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=343,347,6,232,25,39,593&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0">
                </iframe>
              </div>
              <!-- /regiao norte -->
              
              <!-- regiao nordeste -->
              <div class="regiao nordeste">
                <iframe src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=256,264,334,94,259,60,56,384,8&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0">
                </iframe>
              </div>
              <!-- /regiao nordeste -->
              
              <!-- regiao centro-oeste -->
              <div class="regiao centro-oeste">
                <iframe src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=88,218,212,61&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0">
                </iframe>
              </div>
              <!-- /regiao centro-oeste -->
              
              <!-- regiao sudeste -->
              <div class="regiao sudeste">
                <iframe src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=558,107,84,321&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0">
                </iframe>
              </div>
              <!-- /regiao sudeste -->

              <!-- regiao sul -->
              <div class="regiao sul">
                <iframe src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=363,377,271&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0">
                </iframe>
              </div>
              <!-- /regiao sul -->
              
            </div>
            <!-- / PREVISAO -->
            
            <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- cmais-assets-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->

          </div>
          <!-- /CAPA -->

        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->


