<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/radiofm/geral.css" type="text/css" />

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

<!--a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião" style="display: none;">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a-->

    <!-- / CAPA SITE -->
    <div id="capa-site">

    <?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <?php if(isset($asset)) include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $asset, 'ipad' => $ipad)) ?>

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>

            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <?php include_partial_from_folder('blocks','global/display-1c-list-carrossel', array('displays' => $displays["destaque-secundario"])) ?>
              
              <?php if(isset($displays["publicidade-300x250"])) include_partial_from_folder('blocks','global/banner-300x250', array('displays' => $displays["publicidade-300x250"])) ?>
              
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
          <?php if(isset($displays["ultimos-videos"])) include_partial_from_folder('blocks','global/display-3c-last-videos', array('displays' => $displays["ultimos-videos"])) ?>
          <!-- /MENU-RODAPE -->

          <?php if(isset($displays["publicidade-728x90"]) && isset($displays["publicidade-728x90"][0])): ?> 
          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3" style="margin-top: 15px;">
            <?php include_partial_from_folder('blocks','global/banner-728x90', array('displays' => $displays["publicidade-728x90"])) ?>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->
          <?php endif; ?>

        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->


