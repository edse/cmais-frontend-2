<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('a.site_id = ?', (int)$site->getId())
    ->andWhere('sa.asset_id = a.id')
    ->andWhere('sa.section_id = ?', (int)$section->getId())
    ->andWhere('a.asset_type_id = ?', 5)
    ->orderBy('sa.display_order')
    ->execute();
  if(count($assets) >= 1)
    $asset = $assets[0];
?>

    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php // include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'asset' => $asset)) ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

   <div id="bg-site"></div>
    <!-- CAPA SITE -->
    <div id="capa-site">

        <?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
        
          <!-- ESQUERDA -->     
          <div id="esquerda" class="grid2">

            <h3 class="tit-pagina grid2" style="float:none"><?php echo $site->Program->getTitle()?></h3>
            <?php if($site->Program->getDescription()!=""):?>
            <p style="text-align: left;"><?php echo $site->Program->getDescription()?></p>
            <?php endif;?>
            <?php if($site->Program->getLongDescription()!=""):?>
            <p style="text-align: left;"><?php echo html_entity_decode(nl2br($site->Program->getLongDescription()))?></p>
            <?php endif;?>
            <?php if($site->Program->getSchedule()!=""):?>
            <p style="text-align: left;" class="schedule"><?php echo html_entity_decode(nl2br($site->Program->getSchedule()))?></p>
            <?php endif;?>
      
            
            <!-- NOTICIA INTERNA -->
          <?php if(count($assets)>=1): ?> 
            <div class="box-interna encontro grid2">
               <p class="titulos ed">EDIÇÕES</p>
              <!-- Post para links com programas com áudio -->
              <div class="bg-cinza2 audio">
               
                <!-- col-esq -->
                <div class="col-esq encontro grid1">
                  
                  <div class="edicoes">
                  <?php if(count($assets)>=1): ?>
                    
                    <ul>
                    <?php if(count($assets) >= 1): ?>
                      <?php for($i=0; $i<count($assets); $i++): ?>
                        <?php if($assets[$i]->id == $asset->id): ?>
                      <li><a class="clicado" href="<?php echo $assets[$i]->retriveUrl()?>" title="<?php echo $assets[$i]->getTitle()?>"><?php echo $assets[$i]->getTitle()?></a></li>
                        <?php else: ?>
                      <li><a href="<?php echo $assets[$i]->retriveUrl()?>" title="<?php echo $assets[$i]->getTitle()?>"><?php echo $assets[$i]->getTitle()?></a></li>
                        <?php endif; ?>
                      <?php endfor; ?>
                    <?php endif; ?>
                    </ul>
                  
                  <?php endif; ?>
                  </div>
                  
                </div>  
                <!-- /col-esq -->
                
                <!-- col-dir -->              
                <div class="col-dir">
                  
                  <!-- BOX RADIO -->
                  <div class="paraouvir">
                    
                    <!--p><?php echo $asset->getTitle()?></p>
                    <p><?php echo $asset->getDescription()?></p-->

                    <!--box-radio-->
                    <div class="grid1 box-radio">

                      <!--playlist-->
                      <div id="container" class="playlist">
                        
                      <?php if($asset->AssetType->getSlug() == "audio-gallery"): ?>
                        
                      <?php $audioAssets = $asset->retriveRelatedAssetsByAssetTypeId22(4); ?>
                        <script type="text/javascript" src="/js/jquery-ui-1.8.7/jquery-1.4.4.min.js"></script>
                        <link href="/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
                        <script type="text/javascript" src="/js/audioplayer/jquery.jplayer.min.js"></script>
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
                                listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "_item_" + i +"' tabindex='1'>"+ this.playlist[i].name +"</a><span><a href='"+this.playlist[i].url+"' style='float: right;'>info</a></span>";
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
                              url:"<?php echo $audioAssets[$i]->retriveUrl(); ?>",
                              name:"<?php echo $audioAssets[$i]->getTitle(); ?>",
                              mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $audioAssets[$i]->AssetAudio->getFile(); ?>.mp3"
                            }<?php if($i<=count($audioAssets)-1) echo ", "; ?>
                          <?php endfor; ?>
                          ], {
                            ready: function() {
                              audioPlaylist.displayPlaylist();
                              audioPlaylist.playlistInit(false); // Parameter is a boolean for autoplay.
                            },
                            ended: function() {
                              audioPlaylist.playlistNext();
                            },
                            play: function() {
                              $(this).jPlayer("pauseOthers");
                            },
                            solution:"flash, html",
                            swfPath: "/js/audioplayer",
                            supplied: "mp3"
                          });
                        });
                        //]]>
                        </script>
                        
                        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                            
                            <!--jp-audio-->  
                            <div class="jp-audio" style="width:310px;">
                              
                              <!--jp-type-playlist-->
                              <div class="jp-type-playlist">
                                
                                <!--jp_interface_1-->
                                <div id="jp_interface_1" class="jp-interface" style="height:94px;">
                                  
                                  <!--jp-controls-->
                                  <ul class="jp-controls">
                                    <li><a href="#" class="jp-play" tabindex="1" style="left:44px;top:10px;">play</a></li>
                                    <li><a href="#" class="jp-pause" tabindex="1" style="left:44px;top:10px;">pause</a></li>
                                    <li><a href="#" class="jp-stop" tabindex="1" style="left:121px;top:16px;">stop</a></li>
                                    <li><a href="#" class="jp-mute" tabindex="1" style="left:166px;top:22px;">mute</a></li>
                                    <li><a href="#" class="jp-unmute" tabindex="1" style="left:166px;top:22px;">unmute</a></li>
                                    <li><a href="#" class="jp-previous" tabindex="1" style="left:17px;top:16px;">previous</a></li>
                                    <li><a href="#" class="jp-next" tabindex="1" style="left:84px;top:16px;">next</a></li>
                                  </ul>
                                  <!--/jp-controls-->
                                  
                                  <!--jp-progress-->
                                  <div class="jp-progress" style="left:20px;top:56px;width:270px;">
                                    <div class="jp-seek-bar">
                                      <div class="jp-play-bar"></div>
                                    </div>
                                  </div>
                                  <!--/jp-progress-->
                                  
                                  <div class="jp-volume-bar" style="left:193px;top:27px;">
                                    <div class="jp-volume-bar-value"></div>
                                  </div>
                                  
                                  <div class="jp-current-time" style="left:20px;top:72px;width:270px;"></div>
                                  
                                  <div class="jp-duration" style="left:20px;top:72px;width:270px;"></div>
                                
                                </div>
                                <!--jp_interface_1-->
                                
                                <!--jp_playlist_1-->
                                <div id="jp_playlist_1" class="jp-playlist encontro">
                                  <ul>
                                    <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                    <li></li>
                                  </ul>
                                </div>
                                 <!--jp_playlist_1-->                                
                                
                              </div>
                              <!--/jp-type-playlist-->
                              
                            </div>
                            <!--/jp-audio-->
                        
                      <?php endif;?>  
                      
                      </div>
                      <!--/playlist-->  
                      
                    </div>
                    <!--box-radio-->
                    
                  </div>
                  <!--/BOX RADIO-->
                  
                </div>
                <!-- col-dir -->
                
              </div>
              <!-- /Post para links com programas com áudio -->
            
            </div>
            <!--NOTICIA-->
              <?php endif; ?>
            
            <a href="/programas" class="maisprogramas">mais programas</a>
            
          </div>
          <!-- /ESQUERDA -->

    
          <!-- DIREITA -->
          <div id="direita" class="grid1">
          
            <!-- DESTAQUE 1 COLUNA -->
            <?php include_partial_from_folder('blocks','global/display-1c-vertical-multiple', array('displays' => $displays["destaque-secundario"])) ?>
            
            <!-- /DESTAQUE 1 COLUNA -->

            <?php if(!$displays["destaque-secundario"]): ?>
            <!-- BOX PUBLICIDADE -->
            <div class="box-publicidade grid1">
              <script type='text/javascript'>
              GA_googleFillSlot("culturafm-300x250");
              </script>
            </div>
            <!-- / BOX PUBLICIDADE -->
            <?php endif; ?>
          </div>

          <!-- /DIREITA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
