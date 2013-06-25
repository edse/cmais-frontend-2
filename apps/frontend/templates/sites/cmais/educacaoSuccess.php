<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/educacao.css" type="text/css" />
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

    <!-- / CAPA SITE -->
    <div id="capa-site">
      
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <h3 class="tit-pagina"><a href="http://cmais.com.br/educacao" class="educacao" title="Educa&ccedil;&atilde;o">Educa&ccedil;&atilde;o</a></h3>

          <!-- menu interna -->
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
          <!-- /menu interna -->

          <div class="navegacao grid3">
            <a href="http://cmais.com.br" title="Home">Home</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/educacao" title="Educa&ccedil;&atilde;o">Educa&ccedil;&atilde;o</a>
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

                <!-- BOX PADRAO + Visitados -->
                <div class="box-padrao mais-visitados grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php if(isset($displays["destaque-links-1"])) echo $displays["destaque-links-1"][0]->Block->getTitle() ?></h4>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-links-1"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links-1"])) ?>
                </div>
                <!-- /BOX PADRAO + Visitados -->

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

                <!-- BOX NOTICIA -->
                <?php if(isset($displays["destaque-padrao-6"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-6"])) ?>
                <!-- /BOX NOTICIA -->
                
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <!-- BOX NOTICIA VIDEO -->
              <?php if(isset($displays["destaque-videos"])) include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-videos"])) ?>
              <!-- /BOX NOTICIA VIDEO --> 

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-educacao-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>                            
              <!-- / BOX PUBLICIDADE -->
                            
              <!-- BOX PADRAO + Visitados -->
              <div class="box-padrao mais-visitados grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-links-2"])) echo $displays["destaque-links-2"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <?php if(isset($displays["destaque-links-2"])) if(isset($displays["destaque-links-2"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links-2"])) ?>
              </div>
              <!-- /BOX PADRAO + Visitados -->

              <!-- BOX FACEBOOK -->
              <div class="box-padrao facebook grid1" style="background-color: white; padding: 10px;">
                  <g:plusone></g:plusone>
                  <br /><br />
                  <a href="http://twitter.com/educacaoemdia" class="twitter-follow-button">Siga @educacaoemdia</a>
                  <br /><br />
                  <fb:like-box href="http://facebook.com/educacaoemdia.tvcultura" width="290" show_faces="false" stream="true" header="true"></fb:like-box>
              </div>
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

