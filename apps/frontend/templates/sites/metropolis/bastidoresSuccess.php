<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<?php
  $episode = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetEpisode ae')
    ->where('a.id = ae.asset_id')
    ->andWhere('a.site_id = ?', (int)$site->id)
    ->andWhere('a.asset_type_id = 15')
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->orderBy('a.id desc')
    ->limit(1)
    ->fetchOne();
?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script>
  //TIMER TRANSMISSAO
  function timer1(){
    var request = $.ajax({
      data: {
        asset_id: '32782',
        url_in: 'http://tvcultura.cmais.com.br/metropolis/transmissao'
      },
      dataType: 'jsonp',
      success: function(data) {
        eval(data);
      },
      url: '/ajax/timer'
    });
  }
  function timer2(){
    var request = $.ajax({
      data: {
        asset_id: '32761',
        url_out: 'http://tvcultura.cmais.com.br/metropolis'
      },
      dataType: 'jsonp',
      success: function(data) {
        eval(data);
      },
      url: '/ajax/timer'
    });
  }

  $(window).load(function(){
    var t=setInterval("timer1()",60000);
    var t=setInterval("timer2()",60000);
  });

  function updateTweets() {
    $.ajax({
      url: "http://app.cmais.com.br/ajax/tweetmonitor",
      data: "monitor_id=4",
      success: function(data) {
        $('#twitter').html(data);
      }
    });
  }
  
  jQuery(document).ready(function() {
    updateTweets();
    var t=setInterval("updateTweets()",10000);
    
  });
</script>


    
    <!-- CAPA SITE -->
	<div class="bg-metropolis">
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
		      <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
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
          <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
		</div>
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
          	<div class="tudo-metropolis">
          		<span class="bordaTopRV"></span>
          		<div class="centroRV">
          			<div class="preShow">
                        <?php $guest = $episode->retriveRelatedAssetsByRelationType('entrevistado') ?>
                        <?php if (count($guest) > 0): ?>
          				<div class="convidado">
          					<h2>Convidado</h2>
          					<?php $image = $guest[0]->retriveRelatedAssetsByAssetTypeId(2) ?>
          					<?php if(count($image) > 0): ?>
          					<img src="<?php echo $image[0]->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $guest[0]->getTitle() ?>" />
          					<?php endif; ?>
          					
				        	<h4><?php echo $guest[0]->getTitle() ?></h4>
				        	<p><?php echo $guest[0]->getDescription() ?></p>
				        	<a href="/metropolis/envie-sua-pergunta" class="pergunta"><span>Envie sua pergunta</span></a>
          				</div>
          				<?php endif; ?>
          				<div class="wrapperDir">
	          				<div class="bastidores">
	          					<h2>Bastidores</h2>
	          					<div class="grid1" id="canal">
				                  <!-- BOX CANAL YOUTUBE -->
				                  <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&amp;up_channel=BASTIDORESmetropolis&amp;synd=open&amp;w=300&amp;h=390&amp;title=&amp;border=%23ffffff%7C3px%2C1px+solid+%23999999&amp;output=js"></script>
				                  <!-- /BOX CANAL YOUTUBE -->
				                </div>
	          				</div>
	          				<div class="aoVivo">
	          					<h2><span>Ao Vivo</span></h2>
	          					<div id="aovivo"></div>
                                <script>
                                  var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','310','238','9');
                                  so.addVariable('controlbar', 'bottom');
                                  so.addVariable('autostart', 'true');
                                  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                                  so.addVariable('file', 'bastidores');
                                  so.addVariable('type', 'video');
                                  so.addParam('allowscriptaccess','always');
                                  so.addParam('allowfullscreen','true');
                                  so.addParam('wmode','transparent');
                                  so.write('aovivo');
                                  timer1();
                                  timer2();
                                </script>	
	                            <span class="faixa"></span>
	          				</div>
          				</div>
          			</div>
          			<div class="chat">
          				<div class="repercussao">
          					<h2><span>Repercussão</span></h2>
          					<div class="grid1">
			                  <div id="twitter"></div>
			              </div>
          				</div>
          			</div>
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
    

