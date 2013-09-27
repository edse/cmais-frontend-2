<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/rodaviva.css?nocache=<?php echo time(); ?>" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css?nocache=<?php echo time(); ?>" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

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
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

            <?php if(count($pager) > 0): ?>
              <?php foreach($pager->getResults() as $asset): ?>

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2" style="margin-bottom: 20px;">
                <h3><?php echo $asset->getTitle() ?></h3>
                <p><?php echo $asset->getDescription() ?></p>
                <div class="assinatura grid2">
                  <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
                  <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>

                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>

                </div>
				<!-- col esq-->                
				<div class="col-esq grid1">
					<div class="texto" style="float: left;">
                  		<?php if($asset->AssetType->getSlug() == "audio-gallery"): ?>
                    	<?php $audioAssets = $asset->retriveRelatedAssetsByAssetTypeId(4); ?>
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
                  <?php endif; ?>
                </div>                
               </div>
               <!-- /col esq-->
               <!-- col dir-->
               <div class="col-dir grid1">
               	<?php if($asset->AssetAudioGallery->getHeadline() != "") echo '<div style="float: left; margin-left: 15px;">'.$asset->AssetAudioGallery->getHeadline().'</div>'; ?>

                <span class="leia">Permalink: <a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->retriveUrl()?></a></span><br /><br />
                <?php if(count($asset->getTags()) > 0): ?>
                  <p class="tags">Tags:
                  <?php foreach($asset->getTags() as $t): ?>
                    <a href="http://cmais.com.br/busca?site_id=<?php echo $site->getId()?>&term=<?php echo urlencode($t)?>"><span><?php echo $t?></span></a>
                  <?php endforeach; ?>
                  </p>
                <?php endif; ?>
               </div>
               <!-- /col dir-->
                
                

                <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
                <?php if(count($relacionados) > 0): ?>
                  <!-- SAIBA MAIS -->
                  <div class="box-padrao grid2" style="margin-bottom: 20px;">
                    <div id="saibamais">                                                            
                    <h4>saiba +</h4>                                                            
                    <ul class="conteudo">
                      <?php foreach($relacionados as $k=>$d): ?>
                        <li style="width: auto;">
                          <a class="titulos" href="<?php echo $d->retriveUrl()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                   </div>
                  </div>
                  <!-- SAIBA MAIS -->
                <?php endif; ?>

                <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $asset->retriveUrl())) ?>

              </div>
              <!-- /NOTICIA INTERNA -->
              <?php endforeach; ?>
            <?php endif; ?>

            <!-- PAGINACAO -->
            <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->      
              <div class="paginacao pag3 grid2">
                <p class="txt-12">P&aacute;gina <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></p>
                <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo"></a>
                <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior"></a>
              </div>
              <form id="page_form" action="" method="post">
              	<input type="hidden" name="return_url" value="<?php echo $url?>" />
              	<input type="hidden" name="page" id="page" value="" />
              </form>
              <script>
              	function goToPage(i){
                	$("#page").val(i);
                	$("#page_form").submit();
              	}
              </script>
              <!-- PAGINACAO -->
              
              <?php endif; ?>
            <?php endif; ?>
            <!-- PAGINACAO -->
                              
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">

            <!-- BOX PADRAO MULTIPLO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>posts + recentes</h4>
                  <a href="/feed" class="rss" title="rss" style="display: block"></a>
                </div>
              </div>
              <?php if(isset($displays["destaque-multiplo-1"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-multiplo-1"])) ?>
            </div>
            <!-- BOX PADRAO MULTIPLO -->

            <!-- BOX PUBLICIDADE -->
            <div class="box-publicidade grid1">
              <!-- programas-assets-300x250 -->
              <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-300x250");
              </script>
            </div>
            <!-- / BOX PUBLICIDADE -->
              
          </div>
          <!-- /DIREITA -->

        </div>
        <!-- /CAPA -->
        
    </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->