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
    ->limit(1)
    ->orderBy('a.id desc')
    ->execute();
  if(!isset($asset))
  	$asset = $episode[0];
?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script>

  //TIMER TRANSMISSAO
  /*
  function timer1(){
    var request = $.ajax({
      data: {
        asset_id: '32782',
        url_out: 'http://tvcultura.cmais.com.br/rodaviva'
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
  });
  */
  var test = getParameterByName('test');
  
  function broadcastEnd(){
    var request = $.ajax({
      data: {
        channel_id: <?php echo $site->Program->Channel->id ?>,
        program_id: <?php echo $site->Program->id ?>,
        url_out: '<?php echo $site->retriveUrl() ?>',
        test: test
      },
      dataType: 'jsonp',
      success: function(data) {
        eval(data);
      },
      url: '/ajax/broadcastend'
    });
  }
  
  /*function stream1() {
    var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','640','364','9');
    so.addVariable('controlbar', 'bottom');
    so.addVariable('autostart', 'true');
    so.addVariable('streamer', 'rtmp://200.136.27.12/live');
    so.addVariable('file', 'tv');
    so.addVariable('type', 'video');
    so.addParam('allowscriptaccess','always');
    so.addParam('allowfullscreen','true');
    so.addParam('wmode','transparent');
    so.write('boxVideoWrapper');
    $('.transmissaoH li a').removeClass('ativo');
    $('#stream_tv').addClass('ativo');
  }
  */

  /*function stream2() {
    var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','640','364','9');
    so.addVariable('controlbar', 'bottom');
    so.addVariable('autostart', 'true');
    so.addVariable('streamer', 'rtmp://200.136.27.12/live');
    so.addVariable('file', 'eventual');
    so.addVariable('type', 'video');
    so.addParam('allowscriptaccess','always');
    so.addParam('allowfullscreen','true');
    so.addParam('wmode','transparent');
    so.write('boxVideoWrapper');
    $('.transmissaoH li a').removeClass('ativo');
    $('#stream_exclusiva').addClass('ativo');
  }*/
 
  function stream2() {
    $('#boxVideoWrapper').html('<iframe width="640" height="364" src="http://www.youtube.com/embed/<?php echo $displays["camera-exclusiva"][0]->getTitle() ?>" frameborder="0" rel="0" allowfullscreen></iframe>');
    $('.transmissaoH li a').removeClass('ativo');
    $('#stream_youtube').addClass('ativo');  
  }

  /*
  function stream3() {
    $('#boxVideoWrapper').html('<iframe src="http://www.ustream.tv/embed/9564814" width="640" height="364" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe>');
    $('.transmissaoH li a').removeClass('ativo');
    $('#stream_ustream').addClass('ativo');
  }
  function stream4() {
    $('#boxVideoWrapper').html('<iframe width="640" height="364" src="http://cdn.livestream.com/embed/tvculturanaweb?layout=4&amp;height=364&amp;width=640&amp;autoplay=false" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>');
    $('.transmissaoH li a').removeClass('ativo');
    $('#stream_livestream').addClass('ativo');      
  }
  */

  function stream5() {
    $('#boxVideoWrapper').html('<iframe width="640" height="364" src="http://www.youtube.com/embed/<?php echo $displays["yt-live"][0]->getTitle() ?>" frameborder="0" allowfullscreen></iframe>');
    $('.transmissaoH li a').removeClass('ativo');
    $('#stream_youtube').addClass('ativo');  
  }

  /*
  function updateTweets() {
    $.ajax({
      url: "http://app.cmais.com.br/ajax/tweetmonitor",
      data: "monitor_id=4",
      success: function(data) {
        $('#twitter').html(data);
      }
    });
  }
  */
  
  function isDevice(OSName)
  {
    var system = navigator.appVersion.toLowerCase(); // get local system values
	   var OSName = OSName.toLowerCase(); // put parameter value to lowecase
	 
	// put some parameters value in standard names
	if (OSName == "macos") OSName = "mac";
	if (OSName == "windows") OSName = "win";
	if (OSName == "unix") OSName = "x11";
	   
	if (system.indexOf(OSName) != -1)
    	return true;
    else
    	return false;
  }
  
  
  jQuery(document).ready(function() {
    broadcastEnd();
    var t2=setInterval("broadcastEnd()", 60000);
    stream5();
  });
</script>

    
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
          			<div class="transmissaoH">
          				<ul>
          				  <li><a href="javascript: stream5();" id="stream_youtube" title="TV Cultura"><span>TV Cultura</span></a></li>
                    <li><a href="javascript: stream2();" id="stream_exclusiva" title="Câmera exclusiva"><span>Câmera exclusiva</span></a></li>
          				  <!--li><a href="javascript: stream5();" id="stream_youtube" title="YoutTube"><span></span></a></li-->
          					<!--li><a href="javascript: stream1();" id="stream_tv" title="TV Cultura"><span>TV Cultura</span></a></li-->
          					<!--li><a href="javascript: stream3();" id="stream_ustream" title="UStream"><span></span></a></li>
          					<li><a href="javascript: stream4();" id="stream_livestream" title="LiveStream"><span></span></a></li-->
          				</ul>
          				<div class="boxVideo">
          					<script type="text/javascript">
          						//timer1();
          					</script>
          					<div class="boxVideoWrapper" id="boxVideoWrapper">
          					   <?php if(isset($displays['yt-live'])): ?>
                          <p><iframe width="640" height="364" src="http://www.youtube.com/embed/<?php echo $displays["yt-live"][0]->getTitle() ?>" frameborder="0" allowfullscreen></iframe></p>
                        <?php endif; ?>
          					</div>
		                    <span class="faixa"></span>
		                    <h3><?php echo $asset->getTitle() ?></h3>
		                    <p><?php echo $asset->getDescription() ?></p>
		                    <br />
		                    <?php include_partial_from_folder('sites/rodaviva','global/share-2c',array('uri'=>$uri)) ?>
          				</div>
          			</div>
          			
                <?php /* if(isset($displays["segunda-tela"])): ?>
                  <?php if(count($displays["segunda-tela"]) > 0): ?>
                    <?php if($displays["segunda-tela"][0]->Asset->AssetType->getSlug() == "image"): ?>
                <a href="<?php echo $displays["segunda-tela"][0]->getUrl() ?>" title="<?php echo $displays["segunda-tela"][0]->getTitle() ?>" target="_blank" style="display:block; margin-top: 55px; margin-bottom:10px"><img src="<?php echo $displays["segunda-tela"][0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["segunda-tela"][0]->getTitle() ?>" /></a>
                    <?php endif; ?> 
                  <?php endif; ?>
                <?php endif; */ ?>

          			
          			<div class="chat">
          				<?php if(isset($displays['chat'])): ?>
          				<p class="btn-chat"><span>Chat</span></p>
          				<div class="covert">
					      <?php echo html_entity_decode($displays['chat'][0]->getHtml()); ?>          					
          				</div>
          				<?php endif; ?>
          				<div class="repercussao">
          					<h2><span>Repercussão</span></h2>
          					<div class="grid1">
                      <a class="twitter-timeline" href="https://twitter.com/search?q=%23rodaviva" data-widget-id="317371676063039488">Tweets sobre "#rodaviva"</a>
                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			                 <!-- <div id="twitter">
          								<div class="topo-fb"><h3>#rodaviva</h3></div>
          								<ul style="overflow-x: hidden; overflow-y: auto;">
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          									<li><a class="avatar" href="#"><img alt="profile" class="twtr-profile-img" src="#"></a><p>Content sdfg sdfg sdfg sdf gsdf gdsf gsdf gsdf gsd gsd fg</p></li>
          								</ul>
          								<div class="respiro"></div>
			                  </div>-->
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
