<link rel="stylesheet" href="/portal/css/tvcultura/secoes/paginaErros.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <div id="barra-site">
        <div class="topo-programa" id="home">
          <h2><a href="http://culturafm.cmais.com.br"><img title="Rádio Cultura FM - 103.3 MHz" alt="Rádio Cultura FM - 103.3 MHz" src="http://midia.cmais.com.br/programs/d0e9f4eb8f161bf03d660ab74698ace1e2c59cf3.png"></a></h2>
        </div>
      </div>
      
      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">
            <p>Página não encontrada!</p>
          </div>
          <!-- /CAPA -->

        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->
