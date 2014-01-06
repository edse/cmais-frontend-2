<link rel="stylesheet" href="http://cmais.com.br/portal/css/cmais.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/swfobject/swfobject.js"></script>
<!--script type="text/javascript" src="http://cmais.com.br/portal/js/redirect_mobile.js"></script-->
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site"><!-- teste -->
      
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      
      <ul class="menutv">
        <li><a href="http://cmais.com.br/aovivo" title="Assista à TV Cultura">Assista à TV Cultura</a></li>
        <li class="center"><a href="javascript:;" id="controle-remoto" class="redesB" title="Ouça as rádios">Ouça as rádios</a></li> 
        <li><a href="http://tvcultura.cmais.com.br" title="Confira à Programação da TV">Confira a Programação da TV</a></li>
      </ul>

      <!-- MIOLO -->
      <div id="miolo">

        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">

            <!-- col1 -->
            <?php if(isset($displays["destaque-revista"])) include_partial_from_folder('blocks','global/display-3c-revista', array('displays' => $displays["destaque-revista"])) ?>
            <!-- /col1 -->

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <!-- col-esq -->
              <div class="col-esq grid1">
                
                <!-- BOX PUBLICIDADE 3 -->
                <?php if(isset($displays["publicidade-300x50"])) include_partial_from_folder('blocks','global/banner-300x50', array('displays' => $displays["publicidade-300x50"])) ?>
                <!-- / BOX PUBLICIDADE 3 -->

                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Mais recentes -->
                <div class="box-padrao grid1">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>Conte&uacute;dos + recentes</h4>
                      <a href="/feed" class="rss" title="rss" style="display: block"></a>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
                </div>
                <!-- BOX PADRAO Mais recentes -->
                
              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-5"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Previsao -->
                <!--
                <?php if(isset($displays["destaque-previsao"])): ?>
                <div class="box-padrao grid1">
                  <div class="topo azul">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>previs&atilde;o do tempo</h4>
                    </div>
                  </div>
                  <div class="tempo">
                    <?php echo html_entity_decode($displays["destaque-previsao"][0]->getHtml()) ?>
                  </div>
                </div>
                <?php endif; ?>
                -->
                <!-- BOX PADRAO Previsao -->

                <!-- BOX PADRAO GALERIA -->
                <div class="box-padrao grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>fotos recentes</h4>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-imagens-recentes"])) include_partial_from_folder('blocks','global/display-1c-images-grid', array('displays' => $displays["destaque-imagens-recentes"])) ?>
                </div>
                <!-- /BOX PADRAO GALERIA -->
              </div>
              <!-- /col-dir -->
            </div>

            <!-- /ESQUERDA -->
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                 <!-- home-geral300x250 -->
                 <?php 
	function detectMobile() {
	$devices = array('android' => 'android', 'blackberry' => 'blackberry', 'iphone' => '(iphone|ipod|ipad)', 'opera' => '(opera mini|opera mobi)', 'palm' => '(avantgo|blazer|elaine|hiptop|palm|plucker|xiino)', 'windows' => 'windows ce; (iemobile|ppc|smartphone)', 'generic' => '(kindle|mobile|mmp|midp|o2|pda|pocket|psp|symbian|smartphone|treo|up.browser|up.link|vodafone|wap)');
 
	$useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$accept = strtolower($_SERVER['HTTP_ACCEPT']);
	$mobile = false;
 
	if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) || strpos($accept, "application/vnd.wap.xhtml+xml") > 0 || strpos($accept, "text/vnd.wap.wml") > 0) {
			$mobile = "WAP";
	} else {
		foreach ($devices as $device => $keys) {
			if(preg_match("/$keys/i", $useragent)) {
				$mobile = $device;
			}
		}
	}
 
	return $mobile;
}
 
if(detectMobile()) {
?>
<script type='text/javascript'>
GA_googleFillSlot("Ipad-300x250");
</script>
<?php
} else {
?>
	<script type='text/javascript'>
	GA_googleFillSlot("home-geral300x250");
	</script>
<?php	
}
?>
			
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              <!-- BOX NOTICIA VIDEO -->
              <?php if(isset($displays["destaque-videos"])) include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-videos"])) ?>
              <!-- /BOX NOTICIA VIDEO --> 

              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
              <?php //include_partial_from_folder('blocks','global/twitter-1c', array('site' => $site)) ?>
        	  
          	  <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- home-geral2-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("home-geral2-300x250");
				</script>
              </div>
              <!-- / BOX PUBLICIDADE -->

            </div>
            <!-- /DIREITA -->
            
            <!-- LISTA BLOGS -->
            <div class="lista-blogs grid3">
              <ul>
                <?php if(isset($displays["destaque-editoria-1"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-1"])) ?>
                <?php if(isset($displays["destaque-editoria-2"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-2"])) ?>
                <?php if(isset($displays["destaque-editoria-3"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-3"])) ?>
                <?php if(isset($displays["destaque-editoria-4"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-4"], 'last' => 1)) ?>
              </ul>
            </div>
            <!-- /LISTA BLOGS -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->

