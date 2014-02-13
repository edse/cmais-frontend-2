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
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>

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
              <img src="http://cmais.com.br/portal/tvratimbum/image/destaque-radio.jpg">
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
                  var audioPlaylist = new Playlist("1", 
                  [
                  
                  //Castelo
                  
                  {name:"Castelo Rá Tim Bum/01-Abertura",
                  description:"Castelo Rá Tim Bum/01-Abertura",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_01_Abertura_1229007474.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/02-Bongô",
                  description:"Castelo Rá Tim Bum/02-Bongô",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_02_Bongo_1229007557.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/03-Caipora",
                  description:"Castelo Rá Tim Bum/03-Caipora",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_03_Caipora_1229007543.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/04-Celeste, a Cobra",
                  description:"Castelo Rá Tim Bum/04-Celeste, a cobra",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_04_Celeste, a Cobra_1229007531.mp3"},
                  
                  
                  {name:"Castelo Rá Tim Bum/05-Como se faz disco",
                  description:"Castelo Rá Tim Bum/05-Como se faz disco",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_05_Como se faz disco-_1229007471.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/06-Dr. Abobrinha",
                  description:"Castelo Rá Tim Bum/06-Dr. Abobrinha",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_06_Dr Abobrinha_1229012499.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/07-Etevaldo",
                  description:"Castelo Rá Tim Bum/07-Etevaldo",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_07_Etevaldo_1229007501.mp3"},
                  
                  
                  {name:"Castelo Rá Tim Bum/08-Felino Sabidão",
                  description:"Castelo Rá Tim Bum/08-Felino Sabidão",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_08_Felino Sabidao_1229007512.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/09-Lavar as mãos",
                  description:"Castelo Rá Tim Bum/09-Lavar as mãos",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_09_Lavar as maos_1229007548.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/10-Mau",
                  description:"Castelo Rá Tim Bum/10-Mau",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_10_Mau_1229007517.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/11-Morgana",
                  description:"Castelo Rá Tim Bum/11-Morgana",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_11_Morgana_1229007493.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/12-Penélope",
                  description:"Castelo Rá Tim Bum/12-Penélope",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_12_ Penelope_1229007487.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/13-Porque Sim Não é Resposta",
                  description:"Castelo Rá Tim Bum/13-Porque Sim Não é Resposta",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_13_Porque Sim Nao e Resposta_1229007522.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/14-Que som é esse",
                  description:"Castelo Rá Tim Bum/14-Que som é esse",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_14_Que som e esse-_1229007575.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/15-Ratinho Tomando Banho",
                  description:"Castelo Rá Tim Bum/15-Ratinho Tomando Banho",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_15_Ratinho Tomando Banho_1229007504.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/16-Ratinho Escovando os Dentes",
                  description:"Castelo Rá Tim Bum/16-Ratinho Escovando os Dentes",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_16_Ratinho escovando os dentes_1229007560.mp3"},
                  
                  {name:"Castelo Rá Tim Bum/17-Zeca, Nino, Pedro, Biba",
                  description:"Castelo Rá Tim Bum/17-Zeca, Nino, Pedro, Biba",
                  mp3:"/portal/tvratimbum/musicas/castelo/Castelo_Ra_Tim_Bum_17_Zeca, Nino, Pedro, Biba_1229007482.mp3"},
                  //Castelo
                  
                  //Cocorico
                  
                  {name:"Cocórico/01-A avó a bordar",
                  description:"Cocórico/01-A avó a bordar",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_01_Avo-a-bordar_1229013454.mp3"},
                  
                  {name:"Cocórico/02-A história do cocô",
                  description:"Cocórico/02-A história do cocô",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_02_A-historia-do-coco_1229013430.mp3"},
                  
                  {name:"Cocórico/03-A metamorfose das borboletas",
                  description:"Cocórico/03-A metamorfose das borboletas",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_03_Metamorfose-borboleta_1229013556.mp3"},
                  
                  {name:"Cocórico/04-A nota sol",
                  description:"Cocórico/04-A nota sol",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_04_A-nota-sol_1229013443.mp3"},
                  
                  {name:"Cocórico/05-Amigo longe, viagem perto",
                  description:"Cocórico/05-Amigo longe, viagem perto",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_05_Amigo-longe_1229013434.mp3"},
                  
                  {name:"Cocórico/06-Baião balaio",
                  description:"Cocórico/06-Baião balaio",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_06_Baiao-Balaio_1229013459.mp3"},
                  
                  {name:"Cocórico/07-Canção do dicionário",
                  description:"Cocórico/07-Canção do dicionário",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_07_Cancao-dicionario_1229013466.mp3"},
                  
                  {name:"Cocórico/08-Canção para Tio Franz",
                  description:"Cocórico/08-Canção para Tio Franz",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_08_tio-franz_1229013675.mp3"},
                  
                  {name:"Cocórico/09-Chuva, chuvisco, chuvarada",
                  description:"Cocórico/09-Chuva, chuvisco, chuvarada",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_09_Chuva-Chuvisco-Chuvarada_1229013475.mp3"},
                  
                  {name:"Cocórico/10-Cocórico no velho oeste",
                  description:"Cocórico/10-Cocórico no velho oeste",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_10_Coco-no-velho-oeste_1229013485.mp3"},
                  
                  {name:"Cocórico/11-Dente por dente",
                  description:"Cocórico/11-Dente por dente",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_11_Dente-por-dente_1229013490.mp3"},
                  
                  {name:"Cocórico/12-É seu, é meu, é nosso",
                  description:"Cocórico/12-É seu, é meu, é nosso",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_12_E-seu-e-meu-e-nosso_1229013498.mp3"},
                  
                  {name:"Cocórico/13-Iara Zazá",
                  description:"Cocórico/13-Iara Zazá",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_13_1229013514.mp3"},
                  
                  {name:"Cocórico/14-Leite Quente",
                  description:"Cocórico/14-Leite Quente",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_14_Leite_1229013521.mp3"},
                  
                  {name:"Cocórico/15-Lola elétrica",
                  description:"Cocórico/15-Lola elétrica",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_15_Lola-eletrica_1229013527.mp3"},
                  
                  {name:"Cocórico/16-Medo(boi-da-cara-preta)",
                  description:"Cocórico/16-Medo(boi-da-cara-preta)",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_16_Medo_1229013539.mp3"},
                  
                  {name:"Cocórico/17-Meninó",
                  description:"Cocórico/17-Meninó",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_17_Menino_1229013544.mp3"},
                  
                  {name:"Cocórico/18-Meu querido paiol",
                  description:"Cocórico/18-Meu querido paiol",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_18_Meu-querido-paiol_1229013564.mp3"},
                  
                  {name:"Cocórico/19-Morango de pertinho",
                  description:"Cocórico/19-Morango de pertinho",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_19_Morango-pertinho_1229013570.mp3"},
                  
                  {name:"Cocórico/20-Nos dias quentes de verão",
                  description:"Cocórico/20-Nos dias quentes de verão",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_20_Nos-dias-quentes-de-verao_1229013573.mp3"},
                  
                  {name:"Cocórico/21-O Buraco",
                  description:"Cocórico/21-O Buraco",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_21_O-Buraco_1229013578.mp3"},
                  
                  {name:"Cocórico/22-O Circo",
                  description:"Cocórico/22-O Circo",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_22_O-circo_1229013587.mp3"},
                  
                  {name:"Cocórico/23-O Cravo e a Rosa",
                  description:"Cocórico/23-O Cravo e a Rosa",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_23_O-cravo-e-a-rosa_1229013594.mp3"},
                  
                  
                  {name:"Cocórico/24-O Rio e os pingos",
                  description:"Cocórico/24-O Rio e os pingos",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_24_O-Rio-e-os-pingos_1229013607.mp3"},
                  
                  {name:"Cocórico/25-Olhando para o Céu",
                  description:"Cocórico/25-Olhando para o Céu",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_25_Olhando-para-o-ceu_1229013600.mp3"},
                  
                  {name:"Cocórico/26-Peixe Vivo",
                  description:"Cocórico/26-Peixe Vivo",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_26_Peixe-vivo_1229013612.mp3"},
                  
                  
                  {name:"Cocórico/27-Pêlo,Pena, Pano",
                  description:"Cocórico/27-Pêlo,Pena, Pano",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_27_Pelo-Pena-pano_1229013619.mp3"},
                  
                  {name:"Cocórico/28-Piolho",
                  description:"Cocórico/28-Piolho",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_28_Piolho_1229013623.mp3"},
                  
                  {name:"Cocórico/29-Quem tem amigo nunca esta sozinho",
                  description:"Cocórico/29-Quem tem amigo nunca esta sozinho",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_29_Quem-tem-amigo_1229013644.mp3"},
                  
                  {name:"Cocórico/30-Raios e Trovões",
                  description:"Cocórico/30-Raios e Trovões",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_30_Raios-trovoes_1229013649.mp3"},
                  
                  {name:"Cocórico/31-Sapo Martelo",
                  description:"Cocórico/31-Sapo Martelo",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_31_Sapo-martelo_1229013657.mp3"},
                  
                  
                  {name:"Cocórico/32-Tatu bolinha",
                  description:"Cocórico/32-Tatu bolinha",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_32_Tatu-bolinha_1229013666.mp3"},
                  
                  {name:"Cocórico/33-Trava-línguas",
                  description:"Cocórico/33-Trava-línguas",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_33_Trava-lingua_1229013681.mp3"},
                  
                  {name:"Cocórico/34-Travesseiro",
                  description:"Cocórico/34-Travesseiro",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_34_Travesseiro_1229013687.mp3"},
                  
                  
                  {name:"Cocórico/35-Vitamina Tutti-Frutti",
                  description:"Cocórico/35-Vitamina Tutti-Frutti",
                  mp3:"/portal/tvratimbum/musicas/cocorico/cocorico_35_Vitamina-tutti-fruti_1229013694.mp3"},
                  
                  //Cocorico
                  
                  //ilha ratim bum
                  {name:"Ilha Rá Tim Bum/01-Duelo",
                  description:"Ilha Rá Tim Bum/01-Duelo",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_01_Duelo_1229021408.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/02-Eu+Eu",
                  description:"Ilha Rá Tim Bum/02-Eu+Eu",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_02_Eu+Eu_1229021335.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/03-Ilha Rá Tim Bum(Versão orquestrada)",
                  description:"Ilha Rá Tim Bum/03-Ilha Rá Tim Bum(Versão orquestrada)",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_03_Ilha Ra-Tim-Bum_1229021419.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/04-Ilha Rá Tim Bum",
                  description:"Ilha Rá Tim Bum/04-Ilha Rá Tim Bum",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_04_Ilha-Bum_1229021310.mp3"},
                  
                  
                  {name:"Ilha Rá Tim Bum/05-Lá vem a menina",
                  description:"Ilha Rá Tim Bum/05-Lá vem a menina",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_05_La Vem a Menina_1229021342.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/06-Libélula Bela",
                  description:"Ilha Rá Tim Bum/06-Libélula Bela",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_06_Libelula Bela_1229021382.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/07-Micróbio",
                  description:"Ilha Rá Tim Bum/07-Micróbio",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_07_Microbio_1229021349.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/08-Nhã Nhã Nhã",
                  description:"Ilha Rá Tim Bum/08-Nhã Nhã Nhã",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_08_Nha-nha-nha_1229021398.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/09-Pessoa Nefasta",
                  description:"Ilha Rá Tim Bum/09-Pessoa Nefasta",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_09_Pessoa Nefasta_1229021327.mp3"},
                  
                  
                  {name:"Ilha Rá Tim Bum/10-Quarteto Nefasto",
                  description:"Ilha Rá Tim Bum/10-Quarteto Nefasto",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_10_Quarteto Nefasto_1229021412.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/11-Raio",
                  description:"Ilha Rá Tim Bum/11-Raio",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_11_Raio_1229021370.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/12-Só",
                  description:"Ilha Rá Tim Bum/12-Só",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_12_So_1229021378.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/13-Tribunal de causas realmente pequenas",
                  description:"Ilha Rá Tim Bum/13-Tribunal de causas realmente pequenas",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_13_Tribunal de Causas_1229021359.mp3"},
                  
                  {name:"Ilha Rá Tim Bum/14-",
                  description:"Ilha Rá Tim Bum/14-",
                  mp3:"/portal/tvratimbum/musicas/ilha-ra-tim-bum/ilha_ra_tim_bum_14_Zabumba_1229021391.mp3"},
                  
                  
                  //ilha ra tim bum
                  
                  //Vila Sésamo
                  {name:"Vila Sésamo/01-Acalanto",
                  description:"Vila Sésamo/01-Acalanto",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_01_Acalanto_1253905220.mp3"},
                  
                  {name:"Vila Sésamo/02-Barulhinho Ruim",
                  description:"Vila Sésamo/02-Barulhinho Ruim",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_02_Barulhinho Ruim Badi_1253905230.mp3"},
                  
                  {name:"Vila Sésamo/03-Canção do Rei",
                  description:"Vila Sésamo/03-Canção do Rei",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_03_Cancao do Rei fernando wav_1253905248.mp3"},
                  
                  {name:"Vila Sésamo/04-Chocolate",
                  description:"Vila Sésamo/04-Chocolate",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_04_Chocolate Suzana Crianca_1253905239.mp3"},
                  
                  {name:"Vila Sésamo/05-Garibaldo",
                  description:"Vila Sésamo/05-Garibaldo",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_05_Garibaldo_refeito_abu_1253905250.mp3"},
                  
                  {name:"Vila Sésamo/06-Gergelim(Abertura Vila Sésamo)",
                  description:"Vila Sésamo/06-Gergelim(Abertura Vila Sésamo)",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_06_Gergelim Vanessa Criancas_1253905215.mp3"},
                  
                  {name:"Vila Sésamo/07-Maioral",
                  description:"Vila Sésamo/07-Maioral",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_07_Maioral_Dusek_v2_1253905228.mp3"},
                  
                  {name:"Vila Sésamo/08-Mundo Colorido",
                  description:"Vila Sésamo/08-Mundo Colorido",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_08_Colorindo Rubi_1253905245.mp3"},
                  
                  {name:"Vila Sésamo/09-Patinho",
                  description:"Vila Sésamo/09-Patinho",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_09_Patinho Adriana_1253905244.mp3"},
                  
                  {name:"Vila Sésamo/10-Pé Direito, Pé Esquerdo",
                  description:"Vila Sésamo/10-Pé Direito, Pé Esquerdo",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_10_Pe Direito Rubi_Pretto_1253905241.mp3"},
                  
                  {name:"Vila Sésamo/11-O que está escrito",
                  description:"Vila Sésamo/11-O que está escrito",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_11_Que que esta escrito Tak_1253905236.mp3"},
                  
                  {name:"Vila Sésamo/12-Rock da Bel",
                  description:"Vila Sésamo/12-Rock da Bel",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_12_Rock_da_Bel_Magdav2_1253905252.mp3"},
                  
                  {name:"Vila Sésamo/13-Só eu sou eu",
                  description:"Vila Sésamo/13-Só eu sou eu",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_13_So Eu Sou Eu Zeca_1253905233.mp3"},
                  
                  {name:"Vila Sésamo/14-Todo Mundo é animal",
                  description:"Vila Sésamo/14-Todo Mundo é animal",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_14_Todo mundo e animal Celso_1253905221.mp3"},
                  
                  {name:"Vila Sésamo/15-Todo Mundo erra",
                  description:"Vila Sésamo/15-Todo Mundo erra",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_15_Todo Mundo Erra Wisnik_1253905231.mp3"},
                  
                  {name:"Vila Sésamo/16-Tantas letras",
                  description:"Vila Sésamo/16-Tantas letras",
                  mp3:"/portal/tvratimbum/musicas/vila-sesamo/vila_sesamo_16_Tantas Letras Zelia maior_1253905225.mp3"},
                  //Vila Sésamo
                  
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

