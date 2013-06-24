<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/especiais.css" type="text/css" />
<script type="text/javascript">
//carrossel
$(function(){
    $('.carrossel').jcarousel({
        wrap: "both"
    });
})
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

          <h3 class="tit-pagina"><a href="http://cmais.com.br/especiais" class="especiais">Especiais</a></h3>

          <!-- menu interna -->
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
          <!-- /menu interna -->

          <!-- /menu interna -->
          <div class="navegacao txt-10">
            <a href="http://cmais.com.br" title="Home">Home</a>
            <span>&gt;</span><a href="http://cmais.com.br/especiais" title="Especiais">Especiais</a>
          </div>
          <!-- /box-topo -->

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
              
              <!-- col-esq -->
              <div class="col-esq grid1">
                
                <!-- NOTICIA INTERNA SEM FOTO -->
                <?php if(isset($displays["destaque-texto"])) include_partial_from_folder('blocks','global/display-1c-text2', array('displays' => $displays["destaque-texto"])) ?>
                <!-- /NOTICIA INTERNA SEM FOTO -->
                
                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
                <!-- /BOX NOTICIA -->
                
                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
                <!-- /BOX NOTICIA -->
                
                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
                <!-- /BOX NOTICIA -->

              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-5"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-6"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-6"])) ?>
                <!-- /BOX NOTICIA -->

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-7"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-7"])) ?>
                <!-- /BOX NOTICIA -->

              </div>
              <!-- /col-dir -->

            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <!-- BOX NOTICIA VIDEO -->
              <?php if(isset($displays["destaque-videos"])) include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-videos"])) ?>
              <!-- /BOX NOTICIA VIDEO --> 
              
              <!-- BOX PUBLICIDADE -->
              <?php if(isset($displays["publicidade-300x250"])) include_partial_from_folder('blocks','global/banner-300x250', array('displays' => $displays["publicidade-300x250"])) ?>
              <!-- / BOX PUBLICIDADE -->

              <!-- BOX PADRAO + Visitados -->
              <div class="box-padrao mais-visitados grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-links"])) echo $displays["destaque-links"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <?php if(isset($displays["destaque-links"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links"])) ?>
              </div>
              <!-- /BOX PADRAO + Visitados -->

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

