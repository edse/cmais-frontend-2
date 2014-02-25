<?php use_helper('I18N', 'Date') ?>
<!-- Le styles--> 
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'site'=>$site, 'asset'=>$asset)) ?>

<!-- section miolo -->
<!--section miolo--> 
<section class="miolo">
  <!-- container miolo -->
  <div class="container row-fluid">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <!-- NOTICIA INTERNA -->
              <div class="box-interna content-asset">
                <h3><?php echo $asset->getTitle() ?></h3>
                
                <div class="assinatura grid2">
                  <!--p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
                  <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p-->
                  <!--
                  <div class="acessibilidade">
                    <a href="#" class="zoom">+A</a>
                    <a href="#" class="zoom">-A</a>
                  </div>
                  -->

                  <?php include_partial_from_folder('sites/culturabrasil', 'global/signature', array('uri'=>$uri,'asset'=>$asset)) ?>

                </div>
                
                <div class="texto bg-cinza">
                  <div class="grid1">
                  <?php if($asset->AssetType->getSlug() == "person"): ?>
                    <?php echo html_entity_decode($asset->AssetPerson->getBio()) ?>
                  <?php elseif($asset->AssetType->getSlug() == "audio"): ?>
                    <?php //echo html_entity_decode($asset->AssetAudio->render()) ?>
                    
                    <!--Player-->
										<link href="http://cmais.com.br/portal/js/audioplayer/css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
					          
					          <script type="text/javascript" src="http://cmais.com.br/portal/js/audioplayer/js/jquery.jplayer.min.js"></script>
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
					              	//console.log(this.playlist.length+"teste2");
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
					            
					            <?php /*
					              $playlist = $asset->retriveRelatedAssetsByAssetTypeId(5);
					              $audios = $playlist[0]->retriveRelatedAssetsByAssetTypeId(4);
					             * 
					             */
					            ?>
					            var audioPlaylist = new Playlist("1",
					            [
					              {
					                name:"<?php echo $asset->getTitle(); ?>",
					                mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $asset->AssetAudio->getOriginalFile(); ?>"
					              },
					              
					            ],
					            {
					              ready: function()
					              {
					                audioPlaylist.displayPlaylist();
					                audioPlaylist.playlistInit(false); // Parameter is a boolean for autoplay.
					              },
					              ended: function()
					              {
					              	
					              	if(<?php echo $cont ?> <=1){
					              		audioPlaylist.stop();
					                }else{
					                  audioPlaylist.playlistNext(); //vai para a proxima
					                 }
					              },
					              play: function()
					              {
					                $(this).jPlayer("pauseOthers");
					              },
					              solution:"flash, html",
					              swfPath: "http://cmais.com.br/js/audioplayer",
					              supplied: "mp3"
					            });
					          });
					        //]]>
					      </script>
					        
					        
					          <div id="jquery_jplayer_1" class="jp-jplayer"></div>
					          <div class="jp-audio">
					            	<!--alteraçoes player fev 2014-->
					            	<h2>Ouça</h2>
					               <div class="jp-type-playlist"  style="border:1px solid #ccc">
					                <div id="jp_interface_1" class="jp-interface" style="height:94px;">
					                  <ul class="jp-controls">
					                    <li><a href="#" class="jp-play" tabindex="1" style="left:44px;top:10px;">play</a></li>
					                    <li><a href="#" class="jp-pause" tabindex="1" style="left:44px;top:10px;">pause</a></li>
					                    <li><a href="#" class="jp-stop" tabindex="1" style="left:121px;top:16px;">stop</a></li>
					                    <li><a href="#" class="jp-mute" tabindex="1" style="left:70%;top:22px;">mute</a></li>
					                    <li><a href="#" class="jp-unmute" tabindex="1" style="left:70%;top:22px;">unmute</a></li>
					                    <li><a href="#" class="jp-previous" tabindex="1" style="left:17px;top:16px;">previous</a></li>
					                    <li><a href="#" class="jp-next" tabindex="1" style="left:84px;top:16px;">next</a></li>
					                  </ul>
					                  <div class="jp-progress" style="left:20px;top:56px; width: 94%;">
					                    <div class="jp-seek-bar">
					                      <div class="jp-play-bar"></div>
					                    </div>
					                  </div>
					                  <div class="jp-volume-bar" style="left:73%;top:27px;width:24%">
					                    <div class="jp-volume-bar-value"></div>
					                  </div>
					                  <div class="jp-current-time" style="left:20px;top:72px;"></div>
					                  <div class="jp-duration" style="left:20px;top:72px;width: 94%"></div>
					                </div>
					                <div id="jp_playlist_1" class="jp-playlist">
					                  <ul>
					                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
					                    <li></li>
					                  </ul>
					                </div>
					              </div>
					            </div>
					            
                    <?php //echo html_entity_decode($asset->AssetContent->render()) ?>
                  <?php endif; ?>
                  </div>
                  <p><?php echo nl2br($asset->getDescription()) ?> </p>  
                </div>
                
                <?php include_partial_from_folder('blocks', 'global/visite-cmais',array('uri'=>$uri)) ?>
				         <!-- comentario facebook -->
				          <div class="container face">
				            <fb:comments href="<?php echo $uri?>" numposts="3" width="610" publish_feed="true"></fb:comments>
				            <hr />
				          </div>
				          <!-- /comentario facebook -->
                
                
              </div>
              <!-- /NOTICIA INTERNA -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PADRAO -->
              <?php if(isset($displays["destaque-apresentadores"])) include_partial_from_folder('blocks','global/display-1c-hosts', array('displays' => $displays["destaque-apresentadores"])) ?>
              <!-- /BOX PADRAO -->
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("culturafm-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->

              <?php $relacionados = array(); if($asset) $relacionados = $asset->retriveRelatedAssets2(); ?>
              <?php if(count($relacionados) > 0): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>relacionadas</h4>
                    <a href="#" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(count($relacionados) > 0) include_partial_from_folder('blocks','global/recent-news', array('displays' => $relacionados)) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-noticias-recentes"])): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="#" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-categorias"])): ?>
              <!-- BORDA 02 -->
              <div class="box-padrao box-borda grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-categorias"])) echo $displays["destaque-categorias"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <div class="conteudo top tipo2">
                  <?php if(isset($displays["destaque-categorias"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-categorias"])) ?>
                </div>
                <div class="detalhe-borda grid1"></div>
              </div>
              <!-- /BORDA 02 -->
              <?php endif; ?>
              
              <?php if(isset($displays["destaque-links"])): ?>
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
              <?php endif; ?>

            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO -->

      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->

