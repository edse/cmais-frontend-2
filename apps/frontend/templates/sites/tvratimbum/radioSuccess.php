<?php
  $programs = Doctrine_Query::create()
    ->select('p.*')
    ->from('Program p, ChannelProgram cp')
    ->where('p.id = cp.program_id')
    ->andWhere('cp.channel_id = ?', 2)
    ->orderBy('p.title')
    ->execute();
    
  if(!isset($displays["voce-sabia"])){
    $block = Doctrine::getTable('Block')->findOneById(587);
    if($block)
      $vocesabia = $block->retriveDisplays();
  }
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    startclock();
  })
  var timeID=null;
  var timerRunning=false;
  function stopclock (){
    if(timerRunning)
      clearTimeout(timerID);
    timerRunning=false;
  }
  function startclock(){
    stopclock();
    showtime();
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
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum &gt;&gt;</a></p><a href="/radio">Rádio</a>
        </div>
        
        <!--VOCE SABIA-->
        <div id="box-radio">
          <div class="topo-esq"></div>
        
          <div class="topo">
            <a href="" class="enunciado">RÁDIO</a>
          </div>
          
          <div class="lista-escolha">
            <div class="desenhoRadio">
              <img src="/portal/tvratimbum/image/destaque-radio.jpg">
            </div>  
            
            <div id="container" class="playlist">
                  <link href="/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
                  <script type="text/javascript" src="/js/audioplayer/jquery.jplayer.min.js"></script>
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
                  var audioPlaylist = new Playlist("1", [{
                  name:"Barulhinho ruim",
                  description:"Barulhinho ruim",
                  mp3:"/portal/tvratimbum/musicas/barulhinho-ruim.mp3"
                  },{
                  name:"Canção do Garibaldo",
                  description:"Canção do Garibaldo",
                  mp3:"/portal/tvratimbum/musicas/cancao-do-garibaldo.mp3"
                  },{
                  name:"Canção do rei",
                  description:"Canção do rei",
                  mp3:"/portal/tvratimbum/musicas/cancao-do-rei.mp3"
                  },{
                  name:"Chocolate",
                  description:"Chocolate",
                  mp3:"/portal/tvratimbum/musicas/chocolate.mp3"
                  },{
                  name:"Colorido",
                  description:"Colorido",
                  mp3:"/portal/tvratimbum/musicas/colorido.mp3"
                  },{
                  name:"Maioral",
                  description:"Maioral",
                  mp3:"/portal/tvratimbum/musicas/maioral.mp3"
                  },{
                  name:"Patinho de borracha",
                  description:"Patinho de borracha",
                  mp3:"/portal/tvratimbum/musicas/patinho-de-borracha.mp3"
                  },{
                  name:"Pé esquerdo, pé direito",
                  description:"Pé esquerdo, pé direit",
                  mp3:"/portal/tvratimbum/musicas/pe-esquerdo-pe-direito.mp3"
                  },{
                  name:"O está escrito?",
                  description:"O está escrito?",
                  mp3:"/portal/tvratimbum/musicas/o-que-esta-escrito.mp3"
                  },{
                  name:"Rock da Bel",
                  description:"Rock da Bel",
                  mp3:"/portal/tvratimbum/musicas/rock-da-bel.mp3"
                  },{
                  name:"Sou eu",
                  description:"Sou eu",
                  mp3:"/portal/tvratimbum/musicas/so-eu.mp3"
                  },{
                  name:"Todo mundo é animal",
                  description:"Todo mundo é animal",
                  mp3:"/portal/tvratimbum/musicas/todo-mundo-e-animal"
                  },{
                  name:"Todo mundo erra",
                  description:"Todo mundo erra",
                  mp3:"/portal/tvratimbum/musicas/todo-mundo-erra.mp3"
                  },                                                      ], {
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
                <!--radio-->
            
          </div>
          
          <hr />
          <span class="picote"></span>
        </div>
        <!--/Radio-->
        
      </div>
      
      <div class="coluna">
        <div id="box-noAr">
          <?php include_partial_from_folder('tvratimbum','global/live') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/next') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/important') ?>
          <span class="picote"></span>
        </div>
        
        <hr />
        <?php //if(isset($vocesabia)) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $vocesabia)) ?>
      </div>
    </div>
    
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>

