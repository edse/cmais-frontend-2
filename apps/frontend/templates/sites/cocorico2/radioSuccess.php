<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/tooltip.js"></script>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
 <!-- row-->
  <div class="row-fluid menu">
    <!--topo coco-->
    <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
    <!--/topo coco-->
  
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <!-- titulo da pagina -->
  <h2 class="tit-pagina">rádio cocórico</h2>
  <!-- titulo da pagina -->
  
  <!-- row conteudo radio -->
  <div id="radio" class="row-fluid conteudo">
    <div class="span12 radio-cocorico">
      <!-- player -->
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
        var audioPlaylist = new Playlist("1", 
        [
        
        //Cocorico
        {name:"01-A avó a bordar",
        description:"01-A avó a bordar",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_01_Avo-a-bordar_1229013454.mp3"},
        
        {name:"02-A história do cocô",
        description:"02-A história do cocô",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_02_A-historia-do-coco_1229013430.mp3"},
        
        {name:"03-A metamorfose das borboletas",
        description:"03-A metamorfose das borboletas",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_03_Metamorfose-borboleta_1229013556.mp3"},
        
        {name:"04-A nota sol",
        description:"04-A nota sol",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_04_A-nota-sol_1229013443.mp3"},
        
        {name:"05-Amigo longe, viagem perto",
        description:"05-Amigo longe, viagem perto",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_05_Amigo-longe_1229013434.mp3"},
        
        {name:"06-Baião balaio",
        description:"06-Baião balaio",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_06_Baiao-Balaio_1229013459.mp3"},
        
        {name:"07-Canção do dicionário",
        description:"07-Canção do dicionário",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_07_Cancao-dicionario_1229013466.mp3"},
        
        {name:"08-Canção para Tio Franz",
        description:"08-Canção para Tio Franz",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_08_tio-franz_1229013675.mp3"},
        
        {name:"09-Chuva, chuvisco, chuvarada",
        description:"09-Chuva, chuvisco, chuvarada",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_09_Chuva-Chuvisco-Chuvarada_1229013475.mp3"},
        
        {name:"10-Cocórico no velho oeste",
        description:"10-Cocórico no velho oeste",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_10_Coco-no-velho-oeste_1229013485.mp3"},
        
        {name:"11-Dente por dente",
        description:"11-Dente por dente",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_11_Dente-por-dente_1229013490.mp3"},
        
        {name:"12-É seu, é meu, é nosso",
        description:"12-É seu, é meu, é nosso",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_12_E-seu-e-meu-e-nosso_1229013498.mp3"},
        
        {name:"13-Iara Zazá",
        description:"13-Iara Zazá",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_13_1229013514.mp3"},
        
        {name:"14-Leite Quente",
        description:"14-Leite Quente",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_14_Leite_1229013521.mp3"},
        
        {name:"15-Lola elétrica",
        description:"15-Lola elétrica",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_15_Lola-eletrica_1229013527.mp3"},
        
        {name:"16-Medo(boi-da-cara-preta)",
        description:"16-Medo(boi-da-cara-preta)",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_16_Medo_1229013539.mp3"},
        
        {name:"17-Meninó",
        description:"17-Meninó",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_17_Menino_1229013544.mp3"},
        
        {name:"18-Meu querido paiol",
        description:"18-Meu querido paiol",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_18_Meu-querido-paiol_1229013564.mp3"},
        
        {name:"19-Morango de pertinho",
        description:"19-Morango de pertinho",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_19_Morango-pertinho_1229013570.mp3"},
        
        {name:"20-Nos dias quentes de verão",
        description:"20-Nos dias quentes de verão",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_20_Nos-dias-quentes-de-verao_1229013573.mp3"},
        
        {name:"21-O Buraco",
        description:"21-O Buraco",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_21_O-Buraco_1229013578.mp3"},
        
        {name:"22-O Circo",
        description:"22-O Circo",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_22_O-circo_1229013587.mp3"},
        
        {name:"23-O Cravo e a Rosa",
        description:"23-O Cravo e a Rosa",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_23_O-cravo-e-a-rosa_1229013594.mp3"},
        
        
        {name:"24-O Rio e os pingos",
        description:"24-O Rio e os pingos",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_24_O-Rio-e-os-pingos_1229013607.mp3"},
        
        {name:"25-Olhando para o Céu",
        description:"25-Olhando para o Céu",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_25_Olhando-para-o-ceu_1229013600.mp3"},
        
        {name:"26-Peixe Vivo",
        description:"26-Peixe Vivo",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_26_Peixe-vivo_1229013612.mp3"},
        
        
        {name:"27-Pêlo,Pena, Pano",
        description:"27-Pêlo,Pena, Pano",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_27_Pelo-Pena-pano_1229013619.mp3"},
        
        {name:"28-Piolho",
        description:"28-Piolho",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_28_Piolho_1229013623.mp3"},
        
        {name:"29-Quem tem amigo nunca esta sozinho",
        description:"29-Quem tem amigo nunca esta sozinho",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_29_Quem-tem-amigo_1229013644.mp3"},
        
        {name:"30-Raios e Trovões",
        description:"30-Raios e Trovões",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_30_Raios-trovoes_1229013649.mp3"},
        
        {name:"31-Sapo Martelo",
        description:"31-Sapo Martelo",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_31_Sapo-martelo_1229013657.mp3"},
        
        
        {name:"32-Tatu bolinha",
        description:"32-Tatu bolinha",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_32_Tatu-bolinha_1229013666.mp3"},
        
        {name:"33-Trava-línguas",
        description:"33-Trava-línguas",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_33_Trava-lingua_1229013681.mp3"},
        
        {name:"34-Travesseiro",
        description:"34-Travesseiro",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_34_Travesseiro_1229013687.mp3"},
        
        
        {name:"35-Vitamina Tutti-Frutti",
        description:"35-Vitamina Tutti-Frutti",
        mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_35_Vitamina-tutti-fruti_1229013694.mp3"},
        
        //Cocorico
        
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
        swfPath: "http://cmais.com.br/js/audioplayer",
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
      <!-- player -->  
      <img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/bg-radio.jpg" />     
      <p class="tit" style="margin: 20px 0 -20px 0">Cante e dance com a turma do Cocoricó! Confira mais clipes aqui:</p> 
    </div>
    <!-- row clipes relacionados -->
    <div class="row-fluid relacionados">
      
       <?php if(isset($displays['destaque-clipes'])):?>
        <?php if(count($displays['destaque-clipes']) > 0): ?> 
          
       <!-- clipe --> 
      <div class="span4 destaque-2 conteudo-diverso">
        <a href="<?php echo $displays['destaque-clipes'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-clipes'][0]->getTitle() ?>" class="clipe">
          <h3><?php echo $displays['destaque-clipes'][0]->getTitle() ?></h3>
          <img alt="<?php echo $displays['destaque-clipes'][0]->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-clipes'][0]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
          <p>
            <?php //echo $displays['destaque-clipes'][0]->getDescription() ?>
            <?php $tam=38; $str=$displays['destaque-clipes'][0]->getDescription() ; mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          </p> 
        </a>
        <a href="<?php $site->retriveUrl() ?>/clipes-musicais" class="btn-ico-mais" title="CLIPES MUSICAIS"><i class="ico-mais"></i></a>
      </div> 
      <!-- /clipe -->
       
       <!-- clipe --> 
       <div class="span4 destaque-2 conteudo-diverso">
         <a href="<?php echo $displays['destaque-clipes'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-clipes'][1]->getTitle() ?>" class="clipe">
           <h3><?php echo $displays['destaque-clipes'][1]->getTitle() ?></h3>
           <img alt="<?php echo $displays['destaque-clipes'][1]->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-clipes'][1]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
           <p>
             <?php //echo $displays['destaque-clipes'][1]->getDescription() ?>
             <?php $tam=38; $str=$displays['destaque-clipes'][1]->getDescription(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
           </p>       
         </a>
         <a href="<?php $site->retriveUrl() ?>/clipes-musicais" class="btn-ico-mais" title="CLIPES MUSICAIS">
           <i class="ico-mais"></i>
         </a>
       </div> 
       <!-- /clipe -->
       
       <!-- clipe --> 
       <div class="span4 destaque-2 conteudo-diverso">
         <a href="<?php echo $displays['destaque-clipes'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-clipes'][2]->getTitle() ?>" class="clipe">
           <h3><?php echo $displays['destaque-clipes'][2]->getTitle() ?></h3>
           <img alt="<?php echo $displays['destaque-clipes'][2]->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $displays['destaque-clipes'][2]->Asset->AssetVideo->getYoutubeId()?>/0.jpg">
           <p>
             <?php //echo $displays['destaque-clipes'][2]->getDescription() ?>
             <?php $tam=38; $str=$displays['destaque-clipes'][2]->getDescription(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
           </p>
         </a> 
         <a href="<?php $site->retriveUrl() ?>/clipes-musicais" class="btn-ico-mais" title="CLIPES MUSICAIS">
           <i class="ico-mais"></i>
         </a>
       </div> 
       <!-- /clipe -->
       
       <?php endif; ?>
     <?php endif; ?> 
             
    </div>
    <!-- /row clipes relacionados -->
  </div>
  <!-- /row conteudo radio -->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->