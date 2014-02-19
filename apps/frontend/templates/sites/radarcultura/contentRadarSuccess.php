<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
    <!-- Le styles--> 
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
        <!--topo menu/alert/logo-->
        
        <div class="row-fluid">  
          <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          
        </div>
        <!--topo menu/alert/logo-->

     <div class="row-fluid">
       <!-- asset -->
       
        <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'asset' => $asset)) ?>
        <div class="row-fluid" style="margin:0 0 0 0;">
          <!--col esquerda-->
          <div class="span8 content-asset">
            <div class="content">
              <h1><?php echo $asset->getTitle() ?></h1>
              <small><?php echo $asset->getDescription() ?></small>
              <?php include_partial_from_folder('sites/radarcultura', 'global/signature', array('uri'=>$uri,'asset'=>$asset)) ?>
            <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
            <?php if ($related[0]->AssetImage->getOriginalUrl()): ?>
            <p>
              <img src="<?php echo $related[0]->AssetImage->getOriginalUrl() ?>" alt="">
              <div class="legenda">
                <small><?php echo $related[0]->getDescription()?> <?php if($related[0]->AssetImage->getAuthor()!=""):?> (<?php echo $related[0]->AssetImage->getAuthor() ?>) <?php endif;?></small>
              </div>
            </p>
            <?php endif; ?>
            <?php echo html_entity_decode($asset->AssetContent->render()) ?>
            <!--Player-->
            <link href="http://cmais.com.br/portal/js/audioplayer/css/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
            
              <?php
                $playlist = $asset->retriveRelatedAssetsByAssetTypeId(5);
                if(count($playlist) > 0) {
                  $related_audios = $playlist[0]->retriveRelatedAssetsByAssetTypeId(4);
                }
                else {
                  $related_audios = $asset->retriveRelatedAssetsByAssetTypeId(4);
                }
              ?>
              <?php if(count($related_audios) > 0): ?>
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
              
              <?php
                //$playlist = $asset->retriveRelatedAssetsByAssetTypeId(5);
                //$audios = $playlist[0]->retriveRelatedAssetsByAssetTypeId(4);
              ?>
              var audioPlaylist = new Playlist("1",
              [
                <?php foreach($related_audios as $k=>$d): ?>
                {
                  name:"<?php echo $d->getTitle(); ?>",
                  mp3:"/uploads/assets/audio/default/<?php echo $d->AssetAudio->getOriginalFile(); ?>"
                }<?php if($k < (count($related_audios) - 1)): ?>,<?php endif;?>
                
                <?php endforeach; ?>
              ],
              {
                ready: function()
                {
                  audioPlaylist.displayPlaylist();
                  audioPlaylist.playlistInit(); // Parameter is a boolean for autoplay.
                },
                ended: function()
                {
                  audioPlaylist.playlistNext();
                },
                play: function()
                {
                  $(this).jPlayer("pauseOthers");
                },
                swfPath: "/js/audioplayer",
                supplied: "mp3"
              });
            });
            //]]>
          </script>
          
          
           <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div class="jp-audio">
            	<!--alteraçoes player fev 2014-->
            	<h2>Ouça</h2>
              <div class="jp-type-playlist"  style="background-color: #ccc">
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
            
            
            <?php endif; ?>


            <?php include_partial_from_folder('blocks', 'global/visite-cmais',array('uri'=>$uri)) ?>
           <!-- comentario facebook -->
            <div class="container face">
              <fb:comments href="<?php echo $uri?>" numposts="3" width="610" publish_feed="true"></fb:comments>
              <hr />
            </div>
            <!-- /comentario facebook -->
            </div>
            <!--content-->
          </div>
          <!--col esquerda-->
          <div class="span4 direita">
          	            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
              </script>
            </div>

            <?php
              $displays = array();
              $block_sobre = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'sobre-o-programa')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_sobre) > 0){
                $displays["sobre-o-programa"] = $block_sobre[0]->retriveDisplays();
              }
            ?>
            <?php if(isset($displays['sobre-o-programa'])):?>
              <?php if(count($displays['sobre-o-programa']) > 0): ?>

                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                    </div>
                    <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                    <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>

             <?php endif; ?>
           <?php endif; ?>
           
            <?php
              $displays = array();
              $block_comoparticipar = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'como-participar')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_comoparticipar) > 0){
                $displays["como-participar"] = $block_comoparticipar[0]->retriveDisplays();
              }
            ?>
           
           <?php if(isset($displays['como-participar'])):?>
            <?php if(count($displays['como-participar']) > 0): ?>

                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                    </div>
                    <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                    <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>

             <?php endif; ?>
           <?php endif; ?>
            </div> 

            
        </div>
  
        <div class="container pull-left">
          <div class="banner-radio">
           <script type='text/javascript'>
             GA_googleFillSlot("cmais-assets-728x90");
           </script>
          </div>
        </div>  

            
          </div>

     <!-- asset -->
      
      
    </div>

