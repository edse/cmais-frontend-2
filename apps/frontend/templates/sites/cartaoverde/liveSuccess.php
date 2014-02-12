<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/rodaviva.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script>
function stream1() {
  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
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

/*
function updateTweets() {
  $.ajax({
    url: "http://app.cmais.com.br/ajax/tweetmonitor",
    data: "monitor_id=2",
    success: function(data) {
      $('#twitter').html(data);
    }
  });
}
*/
function broadcastEnd(){
  var request = $.ajax({
    data: {
      channel_id: <?php echo $site->Program->Channel->id ?>,
      program_id: <?php echo $site->Program->id ?>,
      url_out: '<?php echo $site->retriveUrl() ?>'
    },
    dataType: 'jsonp',
    success: function(data) {
      eval(data);
    },
    url: 'http://app.cmais.com.br/ajax/broadcastend'
  });
}
  
//jQuery(document).ready(function() {
  //updateTweets();
  //var t=setInterval("updateTweets()",60000);
//  stream1();
  
  // broadcast
  //broadcastEnd();
 // var t2=setInterval("broadcastEnd()", 60000);
//});
</script>

    
    <!-- CAPA SITE -->
	<div class="bg-rodaviva">
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
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

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>
          
          <h3 class="tit-pagina grid3"><?php echo $section->getTitle() ?></h3>

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
          				<div class="boxVideo">
          					<div class="boxVideoWrapper" id="boxVideoWrapper"></div>
		                    <span class="faixa"></span>
		                    <?php if(isset($displays['yt-live'])): ?>
		                      <p><iframe width="640" height="364" src="http://www.youtube.com/embed/<?php echo $displays["yt-live"][0]->getTitle() ?>" frameborder="0" allowfullscreen></iframe></p>
		                    <?php endif; ?>
		                    <br />
		                    <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
          				</div>
          			</div>
          			
                <?php if(isset($displays["segunda-tela"])): ?>
                  <?php if(count($displays["segunda-tela"]) > 0): ?>
                    <?php if($displays["segunda-tela"][0]->Asset->AssetType->getSlug() == "image"): ?>
                <a href="<?php echo $displays["segunda-tela"][0]->getUrl() ?>" title="<?php echo $displays["segunda-tela"][0]->getTitle() ?>" target="_blank" style="display:block; margin-top: 20px"><img src="<?php echo $displays["segunda-tela"][0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["segunda-tela"][0]->getTitle() ?>" /></a>
                    <?php endif; ?> 
                  <?php endif; ?>
                <?php endif; ?>
          			
          			
          			<div class="chat">
          				<div class="repercussao">
          					<div class="grid1">
          					  <a href="http://twitter.com/cartaoverde" class="twitter-follow-button" target="_blank">Siga @cartaoverde</a>	
			                  <!--div id="twitter"></div-->
                          <a class="twitter-timeline" href="https://twitter.com/search?q=%40cartaoverde" data-widget-id="317362402159108096">Tweets about "@cartaoverde"</a>
                          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>			                  
			            	</div>
          				</div>
          				<style type="text/css">
          					.chat .repercussao {margin-top:10px;}
          					#twitter {margin-top:0} 
          				</style>
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

