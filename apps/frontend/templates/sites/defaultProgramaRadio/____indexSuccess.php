<?php
$asset = Doctrine_Query::create()
	->select('a.*')
	->from('Asset a')
	->where('a.site_id = ?', $site->getId())
	->andWhere('a.asset_type_id = ?', 5)
	->orderBy('a.id desc')
	->limit(1)
	->fetchOne();
?>

<?php echo ">>>".$asset->getTitle()?>

    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

	 <div id="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
       
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/images/capaPrograma/culturafm/logo.png"></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          <div id="horario">
          	<a href="#" class="aovivo">ao vivo</a>
          </div>         
        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/<?php echo $section->getSlug()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

      </div>
      <!-- /BARRA SITE -->

				<!-- CONTEUDO PAGINA -->
				<div id="conteudo-pagina">
					<h3 class="tit-pagina grid2"><?php echo $site->getTitle()?></h3>
					
					<!-- ESQUERDA -->
					<div id="esquerda" class="grid2">
					
						<!-- NOTICIA INTERNA -->
						<div class="box-interna grid2">
							<div class="texto">
								<p><?php echo $site->getDescription()?></p>
								<?php if($program->getSchedule()): ?> 
								<p style="margin-bottom:0;">
									<?php echo html_entity_decode($program->getSchedule()) ?>
								</p>
								<?php endif; ?>
							</div>

							<!-- Post para links com programas com áudio -->
							<div class="bg-cinza audio">

								<!-- col-esq -->
								<div class="col-esq grid1">
									<p>
										<strong>EDIÇÕES</strong>
									</p>

									<!-- BOX RADIO -->
									<div class="paraouvir">
                    
				            <?php if($asset): ?>
			                <?php $audioAssets = $asset->retriveRelatedAssetsByAssetTypeId(4); ?>

				              <!-- BOX PADRAO Noticia -->
				              <div class="box-padrao noticia grid1">
				                  <p class="chapeu"><?php echo $asset->getTitle() ?></p>
				                  <a class="titulos" href="<?php echo $asset->retriveUrl() ?>"><?php echo $asset->getTitle() ?></a>
				                  <p><?php echo $asset->getDescription() ?></p>
				              </div>
				              <!-- BOX PADRAO Noticia -->
				              
				              <div class="grid1 box-radio">
				                 
				                <div id="container" class="playlist">
				    
				                  <script type="text/javascript" src="http://cmais.com.br/js/jquery-ui-1.8.7/jquery-1.4.4.min.js"></script>
				                  <link href="http://cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
				                  <script type="text/javascript" src="http://cmais.com.br/js/audioplayer/jquery.jplayer.min.js"></script>
				                  <script type="text/javascript">
				                  //<![CDATA[
				                  $(document).ready(function(){
				                  
				                    var Playlist = function(instance, playlist, options) {
				                      var self = this;
				                  
				                      this.instance = instance; // String: To associate specific HTML with this playlist
				                      this.playlist = playlist; // Array of Objects: The playlist
				                      this.options = options; // Object: The jPlayer constructor options for this playlist
				                  
				                      this.current = 0;
				                  
				                      this.cssId = {
				                        jPlayer: "jquery_jplayer_",
				                        interface: "jp_interface_",
				                        playlist: "jp_playlist_"
				                      };
				                      this.cssSelector = {};
				                  
				                      $.each(this.cssId, function(entity, id) {
				                        self.cssSelector[entity] = "#" + id + self.instance;
				                      });
				                  
				                      if(!this.options.cssSelectorAncestor) {
				                        this.options.cssSelectorAncestor = this.cssSelector.interface;
				                      }
				                  
				                      $(this.cssSelector.jPlayer).jPlayer(this.options);
				                  
				                      $(this.cssSelector.interface + " .jp-previous").click(function() {
				                        self.playlistPrev();
				                        $(this).blur();
				                        return false;
				                      });
				                  
				                      $(this.cssSelector.interface + " .jp-next").click(function() {
				                        self.playlistNext();
				                        $(this).blur();
				                        return false;
				                      });
				                    };
				                  
				                    Playlist.prototype = {
				                      displayPlaylist: function() {
				                        var self = this;
				                        $(this.cssSelector.playlist + " ul").empty();
				                        for (i=0; i < this.playlist.length; i++) {
				                          var listItem = (i === this.playlist.length-1) ? "<li class='jp-playlist-last'>" : "<li>";
				                          listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "_item_" + i +"' tabindex='1'>"+ this.playlist[i].name +"</a>";
				                  
				                          // Create links to free media
				                          if(this.playlist[i].free) {
				                            var first = true;
				                            listItem += "<div class='jp-free-media'>(";
				                            $.each(this.playlist[i], function(property,value) {
				                              if($.jPlayer.prototype.format[property]) { // Check property is a media format.
				                                if(first) {
				                                  first = false;
				                                } else {
				                                  listItem += " | ";
				                                }
				                                listItem += "<a id='" + self.cssId.playlist + self.instance + "_item_" + i + "_" + property + "' href='" + value + "' tabindex='1'>" + property + "</a>";
				                              }
				                            });
				                            listItem += ")</span>";
				                          }
				                  
				                          listItem += "</li>";
				                  
				                          // Associate playlist items with their media
				                          $(this.cssSelector.playlist + " ul").append(listItem);
				                          $(this.cssSelector.playlist + "_item_" + i).data("index", i).click(function() {
				                            var index = $(this).data("index");
				                            if(self.current !== index) {
				                              self.playlistChange(index);
				                            } else {
				                              $(self.cssSelector.jPlayer).jPlayer("play");
				                            }
				                            $(this).blur();
				                            return false;
				                          });
				                  
				                          // Disable free media links to force access via right click
				                          if(this.playlist[i].free) {
				                            $.each(this.playlist[i], function(property,value) {
				                              if($.jPlayer.prototype.format[property]) { // Check property is a media format.
				                                $(self.cssSelector.playlist + "_item_" + i + "_" + property).data("index", i).click(function() {
				                                  var index = $(this).data("index");
				                                  $(self.cssSelector.playlist + "_item_" + index).click();
				                                  $(this).blur();
				                                  return false;
				                                });
				                              }
				                            });
				                          }
				                        }
				                      },
				                      playlistInit: function(autoplay) {
				                        if(autoplay) {
				                          this.playlistChange(this.current);
				                        } else {
				                          this.playlistConfig(this.current);
				                        }
				                      },
				                      playlistConfig: function(index) {
				                        $(this.cssSelector.playlist + "_item_" + this.current).removeClass("jp-playlist-current").parent().removeClass("jp-playlist-current");
				                        $(this.cssSelector.playlist + "_item_" + index).addClass("jp-playlist-current").parent().addClass("jp-playlist-current");
				                        this.current = index;
				                        $(this.cssSelector.jPlayer).jPlayer("setMedia", this.playlist[this.current]);
				                      },
				                      playlistChange: function(index) {
				                        this.playlistConfig(index);
				                        $(this.cssSelector.jPlayer).jPlayer("play");
				                      },
				                      playlistNext: function() {
				                        var index = (this.current + 1 < this.playlist.length) ? this.current + 1 : 0;
				                        this.playlistChange(index);
				                      },
				                      playlistPrev: function() {
				                        var index = (this.current - 1 >= 0) ? this.current - 1 : this.playlist.length - 1;
				                        this.playlistChange(index);
				                      }
				                    };
				                  
				                    var audioPlaylist = new Playlist("1", [
				                    <?php for($i=0; $i<count($audioAssets); $i++): ?>
				                      {
				                        name:"<?php echo $audioAssets[$i]->getTitle(); ?>",
				                        mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $audioAssets[$i]->AssetAudio->getFile(); ?>.mp3"
				                      }<?php if($i<=count($audioAssets)-1) echo ", "; ?>
				                    <?php endfor; ?>
				                    ], {
				                      ready: function() {
				                        audioPlaylist.displayPlaylist();
				                        audioPlaylist.playlistInit(); // Parameter is a boolean for autoplay.
				                      },
				                      ended: function() {
				                        audioPlaylist.playlistNext();
				                      },
				                      play: function() {
				                        $(this).jPlayer("pauseOthers");
				                      },
				                      swfPath: "http://cmais.com.br/js/audioplayer",
				                      supplied: "mp3"
				                    });
				                  });
				                  //]]>
				                  </script>
				              
				                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
				              
				                  <div class="jp-audio" style="width:308px;">
				                    <div class="jp-type-playlist">
				                      <div id="jp_interface_1" class="jp-interface" style="height:94px;">
				                        <ul class="jp-controls">
				                          <li><a href="#" class="jp-play" tabindex="1" style="left:44px;top:10px;">play</a></li>
				                          <li><a href="#" class="jp-pause" tabindex="1" style="left:44px;top:10px;">pause</a></li>
				                          <li><a href="#" class="jp-stop" tabindex="1" style="left:121px;top:16px;">stop</a></li>
				                          <li><a href="#" class="jp-mute" tabindex="1" style="left:166px;top:22px;">mute</a></li>
				                          <li><a href="#" class="jp-unmute" tabindex="1" style="left:166px;top:22px;">unmute</a></li>
				                          <li><a href="#" class="jp-previous" tabindex="1" style="left:17px;top:16px;">previous</a></li>
				                          <li><a href="#" class="jp-next" tabindex="1" style="left:84px;top:16px;">next</a></li>
				                        </ul>
				                        <div class="jp-progress" style="left:20px;top:56px;width:270px;">
				                          <div class="jp-seek-bar">
				                            <div class="jp-play-bar"></div>
				                          </div>
				                        </div>
				                        <div class="jp-volume-bar" style="left:193px;top:27px;">
				                          <div class="jp-volume-bar-value"></div>
				                        </div>
				                        <div class="jp-current-time" style="left:20px;top:72px;width:270px;"></div>
				                        <div class="jp-duration" style="left:20px;top:72px;width:270px;"></div>
				                      </div>
				                      <div id="jp_playlist_1" class="jp-playlist">
				                        <ul>
				                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
				                          <li></li>
				                        </ul>
				                      </div>
				                    </div>
				                  </div>
				
				                </div>
				
				              </div>

									<!-- /BOX RADIO -->
									<?php endif; ?>
									
								</div>
								<!-- /col-esq -->
								
								<!-- col-dir -->
								<div class="col-dir">
									<p>
										<strong>O MUNDO DA ÓPERA (2011-11-26)</strong>
									</p>
									<p>
										(Highlights) de Richard Strauss em "O Cavaleiro da Rosa". Elisabeth Schwarzkopf, Christa Ludwig, Teresa Stich-Randall, Otto Edelmann, Kerstin Meyer e Eberhard Wächter. Coro e Orquestra Philharmonia. Dir.: Herbert Von Karajan
									</p>
								</div>
								<!-- col-dir -->
							</div>
						</div>
						<a href="/programas" class="maisprogramas">Ver mais programas</a>
					</div>
					<!-- /ESQUERDA -->

					<!-- DIREITA -->
					<div id="direita" class="grid1">
						<!-- DESTAQUE 1 COLUNA -->
						<div class="uma-coluna destaque grid1" id="destaque">
							<ul class="abas-conteudo conteudo">
								<li class="filho" id="bloco1" style="display: none; ">
									<a title="Jamelão" href="http://www.culturabrasil.com.br/programas/estudio-f/arquivo-25/jamelao-4" class="media">
									<img alt="Jamelão" src="http://midia.cmais.com.br/displays/84c1500e551b03e26790be9ff4d9d166af43c215.jpg" style="width: 310px;">
									</a>
									<a class="titulos" href="http://www.culturabrasil.com.br/programas/estudio-f/arquivo-25/jamelao-4">Jamelão</a>
									<p>
										Ele era entregador de jornais e gostava de futebol. Ainda nos anos 1920, conheceu a turma da Mangueira, que mudou sua vida.
									</p>
								</li>
								<li class="filho" id="bloco2" style="display: list-item; ">
									<a title="Rádio para ver e ouvir" href="http://www.culturabrasil.com.br/sala-de-tv" class="media">
									<img alt="Rádio para ver e ouvir" src="http://midia.cmais.com.br/displays/812e8e02f3b10165f2a3bc44f7281d809e636b6a.jpg" style="width: 310px;">
									</a>
									<a class="titulos" href="http://www.culturabrasil.com.br/sala-de-tv">Rádio para ver e ouvir</a>
									<p>
										De 2ª a 6ª, das 7h às 19h, o ouvinte da Rádio Cultura Brasil pode assistir à transmissão e participar da sala de bate-papo.
									</p>
								</li>
							</ul>
							<ul class="abas-menu pag-bola destaque1">
								<li class="">
									<a title="Jamelão" href="#bloco1"></a>
								</li>
								<li class="ativo">
									<a title="Rádio para ver e ouvir" href="#bloco2"></a>
								</li>
							</ul>
						</div>
						<!-- /DESTAQUE 1 COLUNA -->

						<!-- BOX PUBLICIDADE -->
						<div class="box-publicidade grid1">

							<script type="text/javascript">GA_googleFillSlot("culturafm-300x250");</script><script src="http://pubads.g.doubleclick.net/gampad/ads?correlator=1327699623878&amp;output=json_html&amp;callback=GA_googleSetAdContentsBySlotForSync&amp;impl=s&amp;client=ca-pub-6681834746443470&amp;slotname=cmais-grade-300x250&amp;page_slots=cmais-grade-300x250&amp;cookie_enabled=1&amp;url=http%3A%2F%2F172.20.1.79%2Ftestes%2Fportal%2Fculturafm%2Fprograma-interna.html&amp;ref=http%3A%2F%2F172.20.1.79%2Ftestes%2Fportal%2Fculturafm%2F&amp;lmt=1324676579&amp;dt=1327699624079&amp;cc=96&amp;biw=1265&amp;bih=938&amp;adk=473309452&amp;adx=833&amp;ady=888&amp;ifi=1&amp;oid=3&amp;u_tz=-120&amp;u_his=4&amp;u_java=true&amp;u_h=1024&amp;u_w=1280&amp;u_ah=1024&amp;u_aw=1280&amp;u_cd=24&amp;u_nplug=11&amp;u_nmime=83&amp;flash=11.1.102&amp;gads=v2&amp;ga_vid=1579448881.1327699624&amp;ga_sid=1327699624&amp;ga_hid=958147196"></script><div id="google_ads_div_cmais-grade-300x250_ad_container">
<ins style="width: 300px; height: 250px; display: inline-table; position: relative; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; "><ins style="width: 300px; height: 250px; display: block; position: relative; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; "><iframe id="google_ads_iframe_cmais-grade-300x250" name="google_ads_iframe_cmais-grade-300x250" width="300" height="250" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; border-style: initial; border-color: initial; border-image: initial; position: absolute; top: 0px; left: 0px; "></iframe></ins></ins></div>
<script>GA_googleCreateDomIframe("google_ads_div_cmais-grade-300x250_ad_container" ,"cmais-grade-300x250");</script>
						</div>
						<!-- / BOX PUBLICIDADE -->
					</div>fm

					<!-- /DIREITA -->
				</div>
				<!-- CONTEUDO PAGINA -->
			</div>



      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <div id="conteudo-pagina">
                  
          <!-- CAPA -->
          <div class="capa grid3">
                      
            <!-- ESQUERDA -->
            <div class="grid2" id="esquerda">

              <h3><a class="tit-pagina grid2" href="<?php echo $site->retriveUrl()?>"><?php echo $site->getTitle()?></a></h3>

              <!-- BOX INTERNA-->
              <div class="box-interna grid2">

                <!-- horario -->
                <div id="horario">
                  <p><?php echo html_entity_decode($site->Program->getSchedule())?></p>
                </div>
                <!-- /horario -->
                <br />

                <div class="texto">
                  <?php if($site->Program->getLongDescription() != ""): ?>
                  <p><?php echo html_entity_decode($site->Program->getLongDescription()) ?></p>
                  <?php else: ?>
                  <p><?php echo html_entity_decode($site->Program->getDescription()) ?></p>
                  <?php endif; ?>
                </div>

                <?php
                  $podcasts = Doctrine_Query::create()
                    ->select('a.*')
                    ->from('Asset a')
                    ->where('a.is_active = 1')
                    ->andWhere('a.site_id = ?', (int)$site->getId())
                    ->andWhere('a.asset_type_id = ?', 5)
                    ->orderBy('a.created_at desc')
                    ->limit('5')
                    ->execute();
                ?>
                <?php if($podcasts): ?>
                <h3 class="tit-pagina grid2">Podcasts</h3>
                <ul>
                <?php foreach($podcasts as $p): ?>
                  <li>
                    <a href="<?php echo $p->retriveUrl()?>" class="titulos"><?php echo $p->getTitle()?></a>
                    <p><?php echo $p->getDescription()?></p>
                  </li>
                <?php endforeach; ?>
                </ul>
                <br />
                <a class="confira" href="<?php echo $site->retriveUrl()."/podcasts"?>">Confira todos os podcasts</a>
                <?php endif; ?>

              </div>
              <!-- /BOX INTERNA-->   
                              
                             
                                  
                                 
                                                           
                                                      
                  </div>
                  <!-- /ESQUERDA -->
                  <!-- DIREITA -->
                  <div class="grid1" id="direita">
                    
                    <?php include_partial_from_folder('blocks','global/display-1c-host', array('displays' => $displays["destaque-apresentador"])) ?>
                    
                    <!-- BOX PUBLICIDADE -->
                    <div class="box-publicidade grid1">
                      <!-- programas-homepage-300x250 -->
                      <script type='text/javascript'>
                      GA_googleFillSlot("culturafm-300x250");
                      </script>
                    </div>
                    <!-- / BOX PUBLICIDADE -->
                    
                    <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'uri' => $uri)) ?>
    
                  </div>
                  <!-- /DIREITA -->
              </div>
              <!-- /CAPA -->
          </div>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
