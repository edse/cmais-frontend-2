<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    
    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>
    
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />
   
    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
   
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />

    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
 
    <script type="text/javascript">
	  //carrocel
	  $(function() {
	    $('.carrossel').jcarousel({
	      wrap : "both"
	    });
	  })
    </script>
  </head>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']); (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <body>
 
<?php
	$assets = Doctrine_Query::create()
	  ->select('a.*')
	  ->from('Asset a, SectionAsset sa, AssetVideo av')
	  ->where('sa.section_id = ?', 94)
	  ->andWhere('sa.asset_id = a.id')
	  ->andWhere('av.asset_id = a.id')
	  ->andWhere('a.is_active = ?', 1)
	  ->andWhere('av.youtube_id != ""')
	  ->orderBy('a.id desc')
	  ->limit(50)
	  ->execute();
?>
  	
	<?php use_helper('I18N', 'Date')    ?>
	<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))  ?>

    <div class="contentWrapper" align="center">
      <div class="content internas">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu')        ?>
        <div class="conteudo">
          <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground')            ?>
            <div class="">
              <ul class="navegacao">
                <li><a href="/quintaldacultura" title="Quintal da Cultura">Quintal da Cultura</a></li>
                <li><span>/</span><a href="/quintaldacultura/musicas" title="Músicas">Músicas</a></li>
              </ul>
              
              
              <h2><?php //echo $asset->getTitle() ?>Músicas</h2>
              <div class="asset" id="musicas">
                <p><!-- player -->
      <div id="container" >
        <link href="http://cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://cmais.com.br/js/audioplayer/jquery.jplayer.min.js"></script>
        
        <script type="text/javascript">
        //<![CDATA[
        $(document).ready( function() {
        var Playlist = function(instance, playlist, options) {
          var self = this;
          this.instance = instance; // String: To associate specific HTML with this playlist
          this.playlist = playlist; // Array of Objects: The playlist
          this.options = options; // Object: The jPlayer constructor options for this playlist
          this.current = 0;
          this.cssId = {
            "jPlayer": "jquery_jplayer_",
            "interface": "jp_interface_",
            "playlist": "jp_playlist_"
          };
          this.cssSelector = {};
          $.each(this.cssId, function(entity, id) {
          self.cssSelector[entity] = "#" + id + self.instance;
          });
          if(!this.options.cssSelectorAncestor) {
            this.options.cssSelectorAncestor = this.cssSelector.interface;
          }
          $(this.cssSelector.jPlayer).jPlayer(this.options);
          $(this.cssSelector.interface + " .jp-previous").click( function() {
            self.playlistPrev();
            $(this).blur();
            return false;
          });
          $(this.cssSelector.interface + " .jp-next").click( function() {
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
            $(this.cssSelector.playlist + "_item_" + i).data("index", i).click( function() {
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
            $(self.cssSelector.playlist + "_item_" + i + "_" + property).data("index", i).click( function() {
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
        $("#song_description").html(this.playlist[this.current].description);
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
        var audioPlaylist = new Playlist("1", 
        [
        
        <?php if(count($pager) > 0): ?>
        	<?php $i = 1; ?>
          	<?php foreach($pager->getResults() as $d): ?>
             	{name:"<?php echo $i."-".$d->getTitle()?>",
		        description:"<?php echo $i."-".$d->getTitle()?>",
		        mp3:"/uploads/assets/audio/default/<?php echo $d->AssetAudio->getOriginalFile() ?>"},
		        <?php $i++ ?>
        	<?php endforeach; ?>     	 
    	<?php endif; ?> 
        
        ], {
        ready: function() {
        audioPlaylist.displayPlaylist();
        audioPlaylist.playlistInit(true); // Parameter is a boolean for autoplay.
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
                <li>
                  <a href="#" class="jp-play" tabindex="1" style="left:44px;top:10px;">play</a>
                </li>
                <li>
                  <a href="#" class="jp-pause" tabindex="1" style="left:44px;top:10px;">pause</a>
                </li>
                <li>
                  <a href="#" class="jp-stop" tabindex="1" style="left:121px;top:16px;">stop</a>
                </li>
                <li>
                  <a href="#" class="jp-mute" tabindex="1" style="left:166px;top:22px;">mute</a>
                </li>
                <li>
                  <a href="#" class="jp-unmute" tabindex="1" style="left:166px;top:22px;">unmute</a>
                </li>
                <li>
                  <a href="#" class="jp-previous" tabindex="1" style="left:17px;top:16px;">previous</a>
                </li>
                <li>
                  <a href="#" class="jp-next" tabindex="1" style="left:84px;top:16px;">next</a>
                </li>
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
      <!-- player -->  </p>
                
              </div>
              
            </div>
          </div>
          <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer')          ?>
        </div>
      </div>
    </div>
    <?php include_partial_from_folder('blocks', 'global/footer')    ?>

    <div id="miolo"></div>
    <div class="box-lateral"></div>
  </body>
</html>