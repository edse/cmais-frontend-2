<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/radiofm/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaBlog.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<script type="text/javascript">
$(function(){
  //hover states on the static widgets
  $('#dialog_link, ul#icons li').hover(
    function() { $(this).addClass('ui-state-hover'); }, 
    function() { $(this).removeClass('ui-state-hover'); }
  );
  
  $('.comentario-fb').show();

});
</script>   
<script type="text/javascript">
  $(function() {
    
   $('.m-colunistas, .submenu-interna').mouseover(function() {
        
     $('.toggle-menu').slideDown("fast");
      
   });
   $('.m-colunistas, .submenu-interna').mouseleave(function() {

     $('.toggle-menu').slideUp("fast");
   });

    });
    
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

   <div id="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
       
          <h2><a href="http://culturafm.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/images/capaPrograma/culturafm/logo.png"></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          <div id="horario">
            <a href="javascript: window.open('http://culturafm.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" class="aovivo">ao vivo</a>
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

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                <h3><?php echo $asset->getTitle() ?></h3>
                <p><?php echo $asset->getDescription() ?></p>
                <div class="assinatura grid2">
                  <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
                  <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
                  <!--
                  <div class="acessibilidade">
                    <a href="#" class="zoom">+A</a>
                    <a href="#" class="zoom">-A</a>
                  </div>
                  -->

                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>

                </div>
                
                <div class="texto">
                  <?php echo html_entity_decode($asset->AssetContent->render()) ?>
                </div>
                
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
                          <!--
                          <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                            <a href="<?php echo $d->retriveUrl()?>" class="img-90x54" style="width: auto">
                              <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                            </a>
                          <?php endif; ?>
                          -->
                          <!--p><?php echo $d->getDescription()?></p-->
                        </li>
                      <?php endforeach; ?>
                    </ul>
                   </div>
                  </div>
                  <!-- SAIBA MAIS -->
                <?php endif; ?>

                <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>

              </div>
              <!-- /NOTICIA INTERNA -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PADRAO -->
              <?php if(isset($displays["destaque-apresentadores"])) include_partial_from_folder('blocks','global/display-1c-hosts', array('displays' => $displays["destaque-apresentadores"])) ?>
              <!-- /BOX PADRAO -->
                        
            <?php $relacionados_audio = $asset->retriveRelatedAssetsByAssetTypeId(5); ?>
              <?php if(count($relacionados_audio) > 0): ?>
            
              <!-- /BOX PLAYLISTS -->
              <div class="span4 direita">
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
                  mp3:"http://midia.cmais.com.br/assets/audio/default/<?php echo $d->AssetAudio->getOriginalFile(); ?>"
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
                swfPath: "http://cmais.com.br/js/audioplayer",
                supplied: "mp3"
              });
            });
           //]]>
          </script>
                             
            <div id="jquery_jplayer_1" class="jp-jplayer"></div>
            <div class="jp-audio">
              <div class="jp-type-playlist">
                <div id="jp_interface_1" class="jp-interface" style="height:94px;width: 306px;border: none;">
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
                  <div class="jp-current-time" style="left:-92px;top:72px;"></div>
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
             <!-- /BOX PLAYLISTS --> 
          <?php endif; ?>
              
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("culturafm-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->

              <?php
                $recentes = array();
                if($asset) {
                  $section = $asset->getSections();
                  
                  //$recentes = $section[0]->getAssets();

                  $recentes = Doctrine_Query::create()
                    ->select('a,*')
                    ->from('Asset a, SectionAsset sa')
                    ->where('a.id = sa.asset_id')
                    ->andWhere('sa.section_id= ?', 2323)
                    ->andWhere('a.site_id= ?', 1193)
                    ->orderBy('a.created_at desc')
                    ->limit(6)
                    ->execute();
                   }
              ?>
              <?php if(count($recentes) > 0): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="#" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(count($recentes) > 0) include_partial_from_folder('sites/brasilis','global/recent-news', array('displays' => $recentes, 'site' => $site)) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php /*if(isset($displays["destaque-noticias-recentes"])): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="/feed" class="rss" title="rss" style="display: block"></a>
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
              <?php endif; */ ?>

            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
    

