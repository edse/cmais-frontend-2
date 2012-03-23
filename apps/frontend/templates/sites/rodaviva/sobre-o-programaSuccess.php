<?php
if(isset($pager)){
	$asset = $pager->getCurrent();
}
?>

<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    
    <!-- CAPA SITE -->
	<div class="bg-rodaviva">
    <div id="capa-site">
    	
      <!-- BREAKING NEWS -->
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      <!-- /BREAKING NEWS -->

      <!-- BARRA SITE -->
      <div id="barra-site">
	  	<div class="topo-programa">
	  	  <?php if(isset($program) && $program->id > 0): ?>
		  <h2>
		    <a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>">
		      <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="/uploads/programs/<?php echo $program->getImageThumb() ?>">
		    </a>
		  </h2>
		  <?php endif; ?>
		  
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
		</div>
		<div class="box-topo grid3">
          <?php if(count($siteSections) > 0): ?>
          <ul class="menu">
            <?php foreach($siteSections as $s): ?>
				<li><a href="<?php echo $s->retriveUrl() ?>" title="<?php echo $s->getTitle() ?>"><span><?php echo $s->getTitle() ?></span></a></li>
			<?php endforeach; ?>
          </ul>
          <?php endif; ?>
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
        <div id="conteudo-pagina exceptionn">
          <!-- CAPA -->
          <div class="capa grid3 exceptionn">
          	<div class="tudo-Rodaviva">
          		<span class="bordaTopRV"></span>
          		<div class="centroRV">
          			<?php if($asset->AssetType->getSlug() == 'content'): ?>
          			<div class="apresentador">
          				<h2><?php echo $asset->getTitle() ?></h2>
          				<p><?php echo html_entity_decode($asset->AssetContent->getContent()) ?></p>
          			</div>
          			<?php endif; ?>
          			
          			<?php if(isset($displays['equipe'])): ?>
					  <?php if(count($displays['equipe']) > 0): ?>
          			<div class="apresentadoresPassado">
          				<h2><?php echo $displays['equipe'][0]->Block->getTitle() ?></h2>
          				<div class="boxApresentadoresPassado">
          				  <?php if ($displays['equipe'][0]->Asset->AssetType->getSlug() == "content"): ?>
          					<?php echo html_entity_decode($displays['equipe'][0]->Asset->AssetContent->getContent()) ?>
          			      <?php endif; ?>
          				</div>
          			</div>
          			  <?php endif; ?>
          			<?php endif; ?>
          			
          		</div>
          		<span class="bordaBottomRV"></span>
          	</div>
          </div>
        
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    </div>
    <!-- / CAPA SITE -->
    

<script type='text/javascript'>
var _sf_async_config={};
/** CONFIGURATION START **/
_sf_async_config.uid = 30538;
_sf_async_config.domain = 'cmais.com.br';
_sf_async_config.sections = '<?php echo $site->getTitle()?> - <?php $asset->getTitle()?>';  //CHANGE THIS
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
