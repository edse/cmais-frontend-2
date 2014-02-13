            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>

              <?php if($displays[0]->Asset->AssetType->getSlug() == "content" || $displays[0]->Asset->AssetType->getSlug() == "audio-gallery"): ?>
                <?php $audioAssets = $displays[0]->Asset->retriveRelatedAssetsByAssetTypeId22(4); ?>
              <?php endif; ?>

              <!-- BOX PADRAO Noticia -->
              <div class="box-padrao noticia grid1">
                  <p class="chapeu"><?php echo $displays[0]->Block->getTitle() ?></p>
                  <a class="titulos" href="#"><?php echo $displays[0]->getTitle() ?></a>
                  <p><?php echo $displays[0]->getDescription() ?></p>
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
                      swfPath: "/js/audioplayer",
                      supplied: "mp3"
                    });
                  });
                  //]]>
                  </script>
              
                  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
              
                  <div class="jp-audio" style="width:310px;">
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

              <?php endif; ?>
            <?php endif; ?>
