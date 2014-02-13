<?php 
//$list1 = Doctrine::getTable('Asset')->findOneById(32069);
//$list2 = Doctrine::getTable('Asset')->findOneById(32070);
//$list3 = Doctrine::getTable('Asset')->findOneById(32071);
//$audios1 = $list1->retriveRelatedAssetsByAssetTypeId(4);
//$audios2 = $list2->retriveRelatedAssetsByAssetTypeId(4);
//$audios3 = $list3->retriveRelatedAssetsByAssetTypeId(4);
?>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>

<script type="text/javascript">
  //carrocel
      $(function(){
        $('.carrossel').jcarousel({
        wrap: "both"      
        });
      })
      var timeID=null;
      var timerRunning=false;
      function stopclock (){
            if(timerRunning)
                    clearTimeout(timerID);
            timerRunning=false;
      }
      function startclock (){
            stopclock ();
            showtime ();
        }
      function showtime() {
            var now=new Date();
            var hours= now.getHours();
            var minutes= now.getMinutes();
            var timeValue=""+ hours;
            timeValue += ((minutes<10) ? ":0" : ":") + minutes
    
            document.clock.face.value= timeValue
            timerID = setTimeout("showtime()",1000);
            timerRunning = true;
        }
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

  var audioPlaylist1 = new Playlist("1",[
  <?php for($i=0; $i<count($audios1); $i++): ?>
    {
      name:"<?php echo $audios1[$i]->getTitle(); ?>",
      mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $audios1[$i]->AssetAudio->getFile(); ?>.mp3"
    }<?php if($i<=count($audios1)-1) echo ", "; ?>
  <?php endfor; ?>],
    {
    ready: function() {
      audioPlaylist1.displayPlaylist();
      audioPlaylist1.playlistInit(true); // Parameter is a boolean for autoplay.
    },
    ended: function() {
      audioPlaylist1.playlistNext();
    },
    play: function() {
      $(this).jPlayer("pauseOthers");
    },
    swfPath: "/js/audioplayer",
    supplied: "mp3"
  })
  
  var audioPlaylist2 = new Playlist("2",[
  <?php for($i=0; $i<count($audios2); $i++): ?>
    {
      name:"<?php echo $audios2[$i]->getTitle(); ?>",
      mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $audios2[$i]->AssetAudio->getFile(); ?>.mp3"
    }<?php if($i<=count($audios2)-1) echo ", "; ?>
  <?php endfor; ?>],
    {
    ready: function() {
      audioPlaylist2.displayPlaylist();
      audioPlaylist2.playlistInit(true); // Parameter is a boolean for autoplay.
    },
    ended: function() {
      audioPlaylist2.playlistNext();
    },
    play: function() {
      $(this).jPlayer("pauseOthers");
    },
    swfPath: "/js/audioplayer",
    supplied: "mp3"
  }) 

  var audioPlaylist3 = new Playlist("3",[
  <?php for($i=0; $i<count($audios3); $i++): ?>
    {
      name:"<?php echo $audios3[$i]->getTitle(); ?>",
      mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $audios3[$i]->AssetAudio->getFile(); ?>.mp3"
    }<?php if($i<=count($audios3)-1) echo ", "; ?>
  <?php endfor; ?>],
    {
    ready: function() {
      audioPlaylist3.displayPlaylist();
      audioPlaylist3.playlistInit(true); // Parameter is a boolean for autoplay.
    },
    ended: function() {
      audioPlaylist3.playlistNext();
    },
    play: function() {
      $(this).jPlayer("pauseOthers");
    },
    swfPath: "/js/audioplayer",
    supplied: "mp3"
  }) 

});
//]]>
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>

    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p>TV Rá Tim Bum</p><span>&gt;&gt;</span><a href="">Rádio</a>
        </div>
      </div>
      <hr />
      
      <iframe src="http://www.tvratimbum.com.br/secoes/radiortb#offset" width="740" height="455" id="radioframe">
        <p>Your browser does not support iframes.</p>
      </iframe>
      
      <?php /*      
      <div class="musicaBox">
      <span class="turma"></span>
        <div class="texto" style="float:left;text-align:left;">
          <link type="text/css" rel="stylesheet" href="http://tvcultura.cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css">
      <script src="http://tvcultura.cmais.com.br/js/audioplayer/jquery.jplayer.min.js" type="text/javascript"></script>
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
      <div class="texto" style="float:left;text-align:left;">
          <link type="text/css" rel="stylesheet" href="http://tvcultura.cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css">
      <script src="http://tvcultura.cmais.com.br/js/audioplayer/jquery.jplayer.min.js" type="text/javascript"></script>
          <div id="jquery_jplayer_2" class="jp-jplayer"></div>
        <div class="jp-audio" style="width:310px;">
          <div class="jp-type-playlist">
            <div id="jp_interface_2" class="jp-interface" style="height:94px;">
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
            <div id="jp_playlist_2" class="jp-playlist">
              <ul>
                <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="texto" style="float:left;text-align:left;">
          <link type="text/css" rel="stylesheet" href="http://tvcultura.cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css">
      <script src="http://tvcultura.cmais.com.br/js/audioplayer/jquery.jplayer.min.js" type="text/javascript"></script>
          <div id="jquery_jplayer_3" class="jp-jplayer"></div>
        <div class="jp-audio" style="width:310px;">
          <div class="jp-type-playlist">
            <div id="jp_interface_3" class="jp-interface" style="height:94px;">
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
            <div id="jp_playlist_3" class="jp-playlist">
              <ul>
                <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                <li></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    */ ?>
    
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>

