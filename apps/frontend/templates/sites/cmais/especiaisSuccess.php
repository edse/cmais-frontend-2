<!-- link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/arte-e-cultura.css" type="text/css" / -->
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/especiais.css" type="text/css">
<script type="text/javascript">
$(function(){
  //carrossel
    $('.carrossel').jcarousel({
        wrap: "both"
    });
});
</script> 

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <h3 class="tit-pagina"><a href="http://cmais.com.br/especiais" class="arte">Especiais</a></h3>
          
          <!-- menu interna -->
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
          <!-- /menu interna -->

          <div class="navegacao grid3">
            <a href="http://cmais.com.br" title="Home">Home</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/especiais" title="Especiais">Especiais</a>
          </div>
          
        </div>
        <!-- /box-topo -->
        
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
              <!--?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?-->
              <!-- /barra compartilhar -->

              <!-- PLAYLIST -->
              <?php if(isset($displays["destaque-playlist"])) include_partial_from_folder('blocks','global/display-2c-playlist', array('displays' => $displays["destaque-playlist"])) ?>
              <!-- PLAYLIST -->

              <div class="col-esq grid1">
                
                <!-- BOX NOTICIA DESTAQUE PADRAO 1 -->
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
                <!-- BOX NOTICIA DESTAQUE PADRAO 1 -->

                <!-- BOX NOTICIA DESTAQUE PADRAO 3 -->
                <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
                <!-- BOX NOTICIA DESTAQUE PADRAO 3 -->

                <!-- BOX NOTICIA DESTAQUE PADRAO 5 -->
                <?php if(isset($displays["destaque-padrao-5"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
                <!-- BOX NOTICIA DESTAQUE PADRAO 5 -->                

              </div>

              <div class="col-dir grid1">


                <!-- BOX NOTICIA DESTAQUE PADRAO 2 -->
                <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
                <!-- BOX NOTICIA DESTAQUE PADRAO 2 -->

                <!-- BOX NOTICIA DESTAQUE PADRAO 4 -->
                <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>
                <!-- BOX NOTICIA DESTAQUE PADRAO 4 -->

                <!-- BOX NOTICIA DESTAQUE PADRAO 6 -->
                <?php if(isset($displays["destaque-padrao-6"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-6"])) ?>
                <!-- BOX NOTICIA DESTAQUE PADRAO 6 -->

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
                <!-- cmais-arteecultura-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
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
    
