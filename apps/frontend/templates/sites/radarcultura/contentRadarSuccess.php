<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
        <!--topo menu/alert/logo-->
        <div class="row-fluid">
          <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
        </div>
        <div class="row-fluid">  
          <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
        </div>
        <!--topo menu/alert/logo-->

     <div class="span12 row">
       <!-- asset -->
       
        <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'asset' => $asset)) ?>
        
        <div class="page-header">
          <h1><?php echo $asset->getTitle(); ?></h1>
          <div class="row">
            <small class="pull-left"><?php echo $asset->getDescription(); ?></small>
          </div>
        </div>
      </div>
        <div class="row-fluid span12" style="margin:0 0 0 0;">
          <ul class="thumbnails span8">
            <li class="span12">
							<?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
            	<?php if ($related[0]->AssetImage->getOriginalUrl()): ?>
            	<p><img src="<?php echo $related[0]->AssetImage->getOriginalUrl() ?>" alt=""></p>
            	<?php endif; ?>
            	<?php echo html_entity_decode($asset->AssetContent->render()) ?>
             <!-- comentario facebook -->
              <div class="container face span12">
                <fb:comments href="http://cmais.com.br" numposts="3" width="610" publish_feed="true"></fb:comments>
                <hr />
              </div>
              <!-- /comentario facebook -->
              
            </li>
          </ul>
          
          <ul class="thumbnails direita span4">
            
              <li class="span12">
              <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
              <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

                  <div style="float:left; margin:0 5px 0 0; ">
                    <div id="fb-root"></div><script src="http://connect.facebook.net/pt_BR/all.js#appId=117801368309710&amp;xfbml=1"></script><fb:like href="http://www.culturabrasil.com.br/sala-de-tv" send="false" layout="button_count" width="200" show_faces="true" font=""></fb:like>
                    <g:plusone size="medium" count="false"></g:plusone>
                    <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" style="float:right; display:block">Tweet</a>
                  </div>

              </li>
              <li class="span12">
                <div class="thumbnail">
                  <link href="/portal/js/audioplayer/jplayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
                  <script type="text/javascript" src="/portal/js/jquery.jplayer.min.js"></script>
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
                    	$playlist = $asset->retriveRelatedAssetsByAssetTypeId(5);
                    	$audios = $playlist[0]->retriveRelatedAssetsByAssetTypeId(4);
                    ?>
										var audioPlaylist = new Playlist("1",
										[
											<?php foreach($audios as $k=>$d): ?>
	                		{
	                			name:"<?php echo $d->getTitle(); ?>",
	                			mp3:"/uploads/assets/audio/default/<?php echo $d->AssetAudio->getOriginalFile(); ?>"
	                		}<?php if($k < (count($audios) - 1)): ?>,<?php endif;?>
	                		
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
                        <div class="jp-progress" style="left:20px;top:56px; width: 85%;">
                          <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                          </div>
                        </div>
                        <div class="jp-volume-bar" style="left:193px;top:27px;">
                          <div class="jp-volume-bar-value"></div>
                        </div>
                        <div class="jp-current-time" style="left:20px;top:72px;"></div>
                        <div class="jp-duration" style="left:20px;top:72px;"></div>
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
              </li>
              <li class="span12">
                <div class="banner-radio">
                  <script type='text/javascript'>
                    GA_googleFillSlot("cmais-assets-300x250");
                  </script>
                </div>
              </li>
              <li class="span12">
                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4>Sobre o programa</h4>
                    </div>
                    <p>cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="asset-conteudo-sobre.html" class="btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
              </li>
              <li class="span12">
                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4>Como Participar</h4>
                    </div>
                    <p>cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="asset-conteudo-como-participar.html" class="btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
              </li>
            </ul>
            
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

