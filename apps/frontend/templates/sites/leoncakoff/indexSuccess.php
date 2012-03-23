<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
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
	
	<div class="bg-chamada">
		<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
	</div>

	<div class="bg-site"></div>
    <!-- CAPA SITE -->
    <div id="capa-site">

      

      <!-- BARRA SITE -->
      <div id="barra-site">
		  <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?>        
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
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-musica-300x250");
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
    
<script type='text/javascript'>
var _sf_async_config={};
/** CONFIGURATION START **/
_sf_async_config.uid = 30538;
_sf_async_config.domain = 'cmais.com.br';
_sf_async_config.sections = '<?php echo $site->getTitle()?> - <?php $section->getTitle()?>';  //CHANGE THIS
_sf_async_config.authors = 'cmais+';    //CHANGE THIS
/** CONFIGURATION END **/
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (('https:' == document.location.protocol) ? 'https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/' : 'http://static.chartbeat.com/') +
       'js/chartbeat.js');
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();
</script>
