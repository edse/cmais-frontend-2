  <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/busca.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="box-topo grid3">
          <?php if(isset($_REQUEST['term'])):?>
                  <h3 class="tit-pagina">Resultado de busca para "<?php echo $_REQUEST['term'] ?>".</h3>
          <?php else:?>
                  <!--h3 class="tit-pagina">Nenhuma busca realizada.</h3-->
          <?php endif;?>
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

          <!-- RESULTADO BUSCA -->

          <script type="text/javascript">
            (function() {
              var cx = '005232987476052626260:gkqgz9ihn4w';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                  '//www.google.com/cse/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:searchresults-only>Buscando...</gcse:searchresults-only>

          <!-- /RESULTADO BUSCA -->

          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade pub-grd grid3">
            <!-- cmais-homepage-300x250 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->

        </div>
        <!-- CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
