<?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "audiobook"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 1')
      ->groupBy('sa.asset_id')
      ->orderBy('a.id display_order')
      ->limit(30)
      ->execute();
      
      
  ?>
  
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página.</noscript>"
?> 

<script>
  $("body").addClass("interna campanhas categorias");
  
</script>
<?php echo $noscript; ?>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--Explicação acessibilidade-->
  <h1 tabindex="0" class="ac-explicacao">
   <?php echo $section->getDescription(); ?>
   <?php echo count($assets)."teste>>>>>>>>>>";  ?>
  </h1>
  
  <!--section -->
  <section id="categoria-box-pais" class="filtro row-fluid incluir-brincando-colecao categorias">
    
    
      
    <!--container conteudo-->
    <div class="b-amarelo borda-arredonda">
      <h1>
        <?php echo $section->Parent->getTitle() . " - ".$section->getTitle() ?>
      </h1>
      
      
  
       
       
  
        <!--container-campanha-->
        <div class="container-campanhas" tabindex="0" aria-label="" tabindex="0" style="text-align: center;"> 
          <!-- selo -->
          <div>
            <img class="" src="http://midia.cmais.com.br/assets/image/original/ffe37ac4ab595d3e01c4ed5e9f5ead27a21a104e.jpg" alt="">
          </div>
          <!--/selo-->
         
     
          <!--radio-->
          <div id="radio">
            
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
                listItem += "<a href='#' id='" + this.cssId.playlist + this.instance + "_item_" + i +"' tabindex='"+(18+i)+"'>"+ this.playlist[i].name +"</a>";
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
                    listItem += "<a id='" + self.cssId.playlist + self.instance + "_item_" + i + "_" + property + "' href='" + value + "' tabindex='"+(18+i)+"'>" + property + "</a>";
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
            
            <?php //if(count($pager) > 0): ?>
              <?php $i = 1; ?>
                <?php //foreach($pager->getResults() as $d): ?>
                <?php foreach($section->getAssets() as $d): ?>
                  {name:"<?php echo $d->getTitle()?>",
                description:"<?php echo $d->getTitle()?>",
                mp3:"/uploads/assets/audio/default/<?php echo $d->AssetAudio->getOriginalFile() ?>"},
              <?php endforeach; ?>       
          <?php //endif; ?> 
            
            ], {
            ready: function() {
            audioPlaylist.displayPlaylist();
            audioPlaylist.playlistInit(false); // Parameter is a boolean for autoplay.
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
                <div id="jp_interface_1" class="jp-interface" style="height:94px;" aria-label="radio com os audiosbooks" tabindex="11">
                  <ul class="jp-controls">
                    <li>
                      <a href="#" class="jp-play" style="left:44px;top:10px;" tabindex="12">play</a>
                    </li>
                    <li>
                      <a href="#" class="jp-pause" style="left:44px;top:10px;" tabindex="13">pause</a>
                    </li>
                    <li>
                      <a href="#" class="jp-stop"  style="left:121px;top:16px;" tabindex="14">stop</a>
                    </li>
                    <li>
                      <a href="#" class="jp-mute"  style="left:166px;top:22px;" tabindex="15">mudo</a>
                    </li>
                    <li>
                      <a href="#" class="jp-unmute"  style="left:166px;top:22px;" tabindex="16">tirar mudo</a>
                    </li>
                    <li>
                      <a href="#" class="jp-previous"  style="left:17px;top:16px;" tabindex="17">faixa anterior</a>
                    </li>
                    <li>
                      <a href="#" class="jp-next"  style="left:84px;top:16px;" tabindex="18">próxima faixa</a>
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
          <!--/div-->
          <!-- player -->
          </div>
          <!--radio-->
          
          <!--txt-->
          <div id="txt-leitor" style="text-align: left;">
            <ul style="margin:0!important;">
              <li>
                <p style="padding:5px;">
                CADERNO DE FORMAÇÃO<br>

                CURSO INCLUIR BRINCANDO 2014<br>
                
                (versão acessível - todas as indicações de páginas correspondem ao exemplar impresso)<br>
                
                
                Página 2<br>
                EXPEDIENTE<br>
                
                CADERNO DE FORMAÇÃO – CURSO INCLUIR BRINCANDO<br>
                COLEÇÃO INCLUIR BRINCANDO<br>
                Projeto Incluir Brincando<br>
                Realização: Sesame Workshop / TV Cultura<br>
                Apoio: MetLife Foundation <br>
                Parceiro estratégico: UNICEF - Fundo das Nações Unidas para a Infância<br>
                Parceiros institucionais: Associação Laramara, Instituto Rodrigo Mendes, Efeito Visual Serigrafia e Iguale Comunicação de Acessibilidade<br>
                Coordenação: Julia Tomchinsky<br>
                Colaboração: Abigail Bucuvalas, Immaculada Prieto, Kauleen Menard, Rodrigo Fonseca, Renata Yumi, Rosilene Araújo<br>
                Textos e consultoria pedagógica: Lilian Galvão e Julia Tomchinsky<br>
                Revisão: Maria Valéria C. M. de Carvalho <br>
                Projeto gráfico e Ilustrações: Ariane Corniani<br>
                Impressão: Efeito Visual Serigrafia<br>
                Audiodescrição: Iguale Comunicação de Acessibilidade<br>
                2014<br>
                
                Página 3<br>
                PARCEIROS<br>
                
                SESAME WORKSHOP é uma organização educacional sem fins lucrativos especializada na criação de conteúdo multimídia para o desenvolvimento da primeira infância. Produz o seriado de TV VILA SÉSAMO, assistido em mais de 140 países.<br>
                <a href="http://www.sesameworkshop.org" aria-label="site sesameworkshop" >www.sesameworkshop.org</a><br> 
                
                TV CULTURA é o principal veículo de comunicação da Fundação Padre Anchieta. Modelo de emissora pública, comprometida em oferecer programação qualificada, atrativa, crítica, democrática e inovadora para os mais diversos públicos e faixas etárias. Ganhou mais de 200 prêmios nacionais e internacionais.<br>
                <a href="http://www.tvcultura.com.br" aria-label="site tvcultura" >tvcultura.cmais.com.br</a><br> 
                
                FUNDO DAS NAÇÕES UNIDAS PARA A INFÂNCIA (UNICEF) contribui para a construção de um mundo onde os direitos de cada criança e de cada adolescente sejam cumpridos, respeitados e protegidos. Presente em 191 países, é referência mundial em conhecimento e ações relacionadas à infância e adolescência.<br>
                <a href="http://www.unicef.org.br" aria-label="Site unicef" >www.unicef.org.br</a><br>
                
                FUNDAÇÃO METLIFE foi criada para dar continuidade à antiga tradição da MetLife de prestar contribuições como empresa parceira da comunidade. Atualmente a Fundação se dedica a promover a inclusão financeira com a finalidade de ajudar a criar um futuro seguro para indivíduos e comunidades em todo o mundo.<br> 
                <a href="http://www.metalife.org" aria-label="site Metalife" >www.metlife.org</a> <br>
                
                Página 4<br>
                LARAMARA, instituição sem fins lucrativos cujas ações estão voltadas ao atendimento especializado nas áreas socioassistencial e socioeducativa. Todas as ações são realizadas com ênfase no apoio e suporte à inclusão das pessoas com deficiência visual na família, na escola, no trabalho e na comunidade.<br>
                <a href="http://www.laramara.org.br" aria-label="site Instituto Laramara" >www.laramara.org.br</a><br>
                
                INSTITUTO RODRIGO MENDES é uma organização sem fins lucrativos comprometida com a construção de uma sociedade inclusiva por meio da educação e da arte. Suas ações visam a colaborar para que a escola pública seja capaz de acolher toda e qualquer criança. Para isso, desenvolve programas de pesquisa e formação sobre educação inclusiva.<br>
                <a href="http://www.institutorodrigomendes.org.br" aria-label="site Instituto rodrigo mendes" >www.institutorodrigomendes.org.br</a><br>
                
                EFEITO VISUAL , gráfica pioneira no Brasil, é especializada em comunicação impressa com estímulo tátil, usando a técnica de serigrafia, traços em relevo, texturas, braille com resina transparente e outras soluções inovadoras utilizadas  para a inclusão social de pessoas com deficiência.<br> 
                <a href="http://www.efitovisual.com.br" aria-label="site efeito visual" >www.efeitovisual.com.br</a><br>
                
                IGUALE COMUNICAÇÃO DE ACESSIBILIDADE é a primeira empresa brasileira criada para pensar e produzir soluções assistivas completas em comunicação para pessoas com deficiência, proporcionando acessibilidade e autonomia na área da comunicação e cultura, TV, cinema, teatro, web, exposições, eventos, outros.<br>
                <a href="http://www.iguale.com.br" aria-label="site iguale" >www.iguale.com.br</a> <br>
                
                Página 5<br>
                Imagem de Garibaldo, Bel e Sivan. Todos dizem: "Olá pessoal! Somos os seus amigos da Vila Sésamo! Apresentaremos para vocês um projeto muito divertido: Incluir Brincando."<br> 
                
                Índice<br>
                1 – Apresentação - p.7<br>
                   1.1 Projeto<br>
                   1.2 Coleção<br>
                   1.3 Campanha Transmídia<br>
                   1.4 Curso<br>
                
                2 – Compreendendo o Brincar Inclusivo - p.13<br>
                   2.1 Desenvolvimento Inclusivo<br>
                   2.2 Educação Lúdica<br>
                   2.3 Articulação escola-família-comunidade<br>
                
                3 – Organizando o “Dia do Brincar Inclusivo” - p.21<br>
                
                4 – Sugestões para aprofundamento - p.25<br>
                
                5 – Anexos - p.28<br>
         
                • Atividades Orientadas<br>
                - Vivências lúdicas e inclusivas nas escolas/comunidades<br>
                - Mapeamento de paisagens lúdicas e sujeitos brincantes<br>
                - Planejamento do Dia do Brincar Inclusivo<br>
                - Relato de prática<br>
                
                • Avaliações<br>
                - Encontro 1<br>
                - Encontro 2<br>
                - Encontro 3<br>
                - Dia do Brincar Inclusivo (Famílias e Comunidade)<br> 
                - Dia do Brincar Inclusivo (Crianças)<br>
                
                Página 6 - em branco<br>
                
                Página 7<br>
                1.1 Projeto<br>
                
                O Projeto Incluir Brincando é uma iniciativa da Vila Sésamo e da TV Cultura, com o apoio da MetLife Foundation e parceria do UNICEF, da Associação Laramara, do Instituto Rodrigo Mendes, da Efeito Visual Serigrafia e da Iguale Comunicação de Acessibilidade.<br>
                
                Nosso sonho é um brincar inclusivo, que promova a interação de todas as crianças, valorize as diferenças, estimule a autonomia e fortaleça a autoestima.<br>
                
                Texto em destaque:<br>
                "INCLUIR BRINCANDO<br>
                O brincar inclusivo se concretiza quando creches, escolas, famílias e outras organizações do governo e da sociedade civil derem as mãos para, juntas, promoverem a integração das crianças por meio da brincadeira!"<br>
                Desde 2012 o Projeto contribui para a garantia do direito de brincar de todas as crianças, respeitando os ritmos e a individualidade de cada uma!<br>
                As crianças não são iguais, elas são diversas: podem ser indígenas, quilombolas, ciganas, imigrantes. Podem ter deficiência, podem viver com seus pais ou parentes, na cidade ou na zona rural. Podem morar em abrigos ou viver em situação de rua e extrema pobreza. Podem estar internadas em hospitais por longo período. Podem ter nascido no norte ou no sul, dentre outras diversidades... Mas, sempre serão crianças!<br>
                Texto em destaque: "Os princípios da igualdade e da equiparação de oportunidades garantem que todas as crianças se desenvolvam plenamente, aprendam, sejam amadas, cresçam sem violência, brinquem e sejam felizes!"<br>
                
                Página 8<br>
                A idade, o gênero, a origem étnico-racial, o credo, as condições sociais, econômicas, pessoais ou qualquer outra característica, jamais podem justificar alguém ficar de fora na hora de brincar e se divertir. Por isso, é fundamental refletirmos e praticarmos o brincar seguro e inclusivo! Nesse processo, o papel dos(as) educadores(as), das famílias e cuidadores é fundamental!<br> 
                Em 2014, o Projeto está potencializando as ações educativas com educadores, familiares e cuidadores por meio de uma Campanha Transmídia, do Curso de Formação Incluir Brincando e da Coleção Incluir Brincando (que reúne diferentes materiais de formação). Todas as estratégias educacionais estão articuladas em torno de sete temas transversais:<br>
                
                • Brincar é direito de toda criança<br>
                • Brincando em família<br>
                • Brincadeiras do Brasil<br>
                • Brincadeiras Inclusivas<br>
                • Brincando na comunidade<br>
                • Feira de brinquedos<br>
                • Brincar junto é mais divertido<br>
                
                Página 9<br>
                1.2 Coleção<br>
                
                A Coleção Incluir Brincando reúne materiais destinados aos profissionais que trabalham na Educação Infantil e todas as pessoas que se interessam pelos temas: desenvolvimento inclusivo, brincar e infância. Em 2012 o Projeto elaborou alguns materiais, tais como: folder informativo, guia do brincar inclusivo, jogo da memória, série de vídeos. Todos estão disponíveis no site: http://cmais.com.br/vilasesamo<br>
                
                A Coleção é composta pelos seguintes materiais:<br>
                1. Caderno de Formação:<br>
                • Compreendendo o brincar inclusivo<br>
                • Organizando o “Dia do Brincar Inclusivo”<br>
                • Sugestões para aprofundamento<br>
                • Atividades orientadas<br>
                • Avaliações<br>
                
                2. Dicas para Incluir Brincando<br>
                
                3. Folhas avulsas para anotações pessoais<br>
                
                4. CD com audiodescrição<br>
                Para interagir com o conteúdo, fique atento aos ícones:<br>
                • Título: apresenta o assunto e convida a refletir sobre ele.<br>
                • Conversa em Roda: oferece perguntas que estimulam refletir, dialogar, analisar e construir aprendizagens coletivas.<br>
                • Breve passeio pela História: contextualiza o tema e oferece ampliação dos horizontes educativos<br>
                • Articulação Comunitária: convida para realização de atividades, pesquisas, trocas e sistematizações de experiências.<br>
                • Aprofundamento: dicas de leitura, sites e outros recursos que possibilitem novas aprendizagens.<br>
                
                Esta Coleção foi elaborada com muito carinho para a segunda etapa do Projeto, que vai até o final de 2014. Nela você encontra referenciais teóricos e práticos para promover o desenvolvimento integral das crianças, sensibilizando toda a comunidade escolar sobre o direito à brincadeira segura e inclusiva.<br>
                Os materiais da Coleção buscam estabelecer um diálogo entre os conteúdos no Curso de Formação Incluir Brincando e as práticas lúdicas promovidas pelos educadores(as) no cotidiano das crianças.<br>
                
                Página 10<br>
                1.3 Campanha Transmídia<br>
                
                É um tipo de campanha em diferentes mídias: televisão, internet, redes sociais, etc. A cada mês um dos temas transversais será divulgado nas diferentes plataformas, difundindo materiais educacionais que podem enriquecer o brincar inclusivo:<br>
                • Vídeos Promocionais de até 1 minuto, com os personagens da Vila Sésamo interagindo com personalidades brasileiras. <br>
                • Websódios: episódios de até 5 minutos, criados especialmente para exibição no site. <br>
                • Jogos digitais com objetivos educacionais.<br>
                • Atividades para imprimir: que trabalham conhecimento de si, reflexão, atenção, psicomotricidade, expressão artística e corporal.<br>
                • Chamadas para ação: envio de desenhos das crianças ou histórias contadas por educadores, familiares e cuidadores para o site da Vila Sésamo e compartilhamento de materiais nas Redes Sociais.<br> 
                • Artigos: textos informativos sobre os temas da campanha para educadores, familiares e cuidadores.<br>
                
                QUAIS OBJETIVOS EDUCACIONAIS PODEM SER TRABALHADOS A PARTIR DOS WEBSÓDIOS?<br>
                
                BRINCAR É UM DIREITO DA CRIANÇA<br>
                • Reconhecer que brincar é um direito da criança e que deve ser exercido na sua rotina diária.<br>
                • Fortalecer os elos de amizade entre as crianças durante o brincar inclusivo.<br>
                
                BRINCADEIRAS INCLUSIVAS<br>
                • Conseguir adaptar, de forma segura, brincadeiras, jogos e brinquedos para que todos sejam incluídos.<br>
                • Explorar os diferentes sentidos de visão, audição, olfato, paladar, tato durante o brincar inclusivo.<br>
                
                BRINCANDO COM A FAMÍLIA<br>
                • Estimular a brincadeira nos momentos de convívio familiar, entre crianças de diferentes idades, adultos e idosos.<br>
                
                BRINCANDO NA COMUNIDADE<br>
                • Valorizar os momentos de encontros entre crianças da mesma comunidade.<br>
                • Reconhecer o potencial lúdico dos diferentes sujeitos e paisagens da comunidade.<br>
                
                BRINCANDO COM OS AMIGOS<br>
                • Participar de brincadeiras e jogos com regras, encontrando soluções construtivas e não-violentas para os conflitos.<br>
                
                FEIRA DE BRINQUEDOS<br>
                • Saber dividir/partilhar brinquedos e amizades.<br>
                • Incentivar o consumo consciente entre as crianças e exercitar a solidariedade.<br>
                
                BRINCADEIRAS DO BRASIL<br>
                • Reconhecer a diversidade cultural das crianças brasileiras, mostrando brincadeiras, brinquedos e jogos em diferentes contextos sociais, econômicos, culturais e ambientais do país.<br>
                
                
                Página 11<br>
                1.4 CURSO DE FORMAÇÃO<br>
                
                CARGA HORÁRIA<br>
                - 64 horas (24 horas presenciais + 40 horas de atividades orientadas)<br>
                
                PARTICIPANTES<br>
                • 4 Turmas<br>
                • 200 Educadores: professores de educação infantil e representantes da sociedade civil<br>
                
                PARTICIPAÇÃO E CERTIFICADO<br>
                
                Participação<br>
                • Disponibilidade em realizar o curso<br>
                • Compromisso com a socialização do conhecimento<br>
                • Elaboração e entrega das atividades orientadas<br>
                • Organização do Dia do Brincar Inclusivo<br>
                
                Certificação<br>
                • 80% de presença comprovada<br>
                • Entrega das atividades orientadas<br>
                
                OBJETIVO<br>
                • Construir referenciais teóricos e práticos para o desenvolvimento integral das crianças por meio do brincar inclusivo e seguro, utilizando os diferentes recursos educativos do Projeto Incluir Brincando na sensibilização de suas famílias e cuidadores sobre o direito de brincar.<br>
                
                PRINCÍPIOS METODOLÓGICOS<br>
                A metodologia parte da realidade dos educadores, favorecendo um ambiente horizontal e de diálogo. A socialização de saberes, conhecimentos, informações e experiências contribui para a construção coletiva de novas práticas lúdicas nas escolas de educação infantil, parceiras do projeto.<br>
                Ao se estreitarem os laços entre “o que se faz” e “o que se pensa acerca do que se faz”, teoria e prática se aproximam. Ao refletir sobre suas vivências de inclusão e de ludicidade, o educando é estimulado a promover o brincar inclusivo e seguro.<br>
                O Curso é composto por três encontros formativos de 8 horas. Os participantes realizam atividades orientadas, com o objetivo de interagir com os recursos transmídia e de organizar intervenções nas escolas e comunidades.<br>
                Ao final do curso, em cada uma das regiões, é organizado o “Dia do Brincar Inclusivo”: um dia festivo e com uma programação repleta de atividades lúdicas para escolas, famílias e comunidade.<br>
                Todo o processo formativo será avaliado continuamente, por meio de formulários individuais e grupos focais. Além disso, as práticas serão sistematizadas por meio de relatos a serem publicados na Plataforma Diversa.<br>
                
                ESTRATÉGIAS<br>
                Pesquisa sobre a realidade local e reconhecimento das necessidades relacionadas ao desenvolvimento inclusivo.<br>
                
                Página 12<br>
                Problematização a partir de situações relacionadas à inclusão e à ludicidade, enfrentadas no cotidiano da escola e da comunidade.<br>
                Ampliação do conhecimento sobre o brincar inclusivo, por meio de exposições dialogadas, leituras, pesquisas, vivências e atividades em grupo.<br>
                Intervenção educativa por meio de práticas de brincar inclusivo, promovidas nas escolas e na comunidade, culminando no “Dia do Brincar Inclusivo”.<br>
                Avaliação permanente de cada encontro de formação e atividade realizada na escola ou comunidade, identificando os avanços e desafios para reorientação da prática.<br>
                
                PROGRAMA<br>
                
                ENCONTRO 1<br>
                Tema - Desenvolvimento Inclusivo<br>
                A (4h) Teórico/Conteúdo: <br>
                - Apresentação do projeto e do curso<br>
                - Educação Inclusiva<br>
                - Brincar inclusivo<br>
                B (4h) Prático/Conteúdo:<br>
                - Construção de jogos e brinquedos adaptados<br> 
                
                ENCONTRO 2<br>
                Tema - Os significados do brincar<br>
                A (4h) Teórico/Conteúdo: <br>
                - Educação Lúdica<br>
                - Concepções do brincar no currículo da Educação Infantil<br>
                - Paisagens lúdicas brasileiras<br>
                
                B (4h) Prático/Conteúdo:<br>
                - Vivência de brincadeiras populares<br>
                
                ENCONTRO 3<br>
                Tema - Relação Escola-Família-Comunidade<br>
                A (4h) Teórico/Conteúdo: <br>
                - Educação integral<br>
                - Articulação comunitária<br>
                - Mobilização social<br>
                B (4h) Prático/Conteúdo:<br>
                - Organização do Dia do Brincar Inclusivo<br>
                
                ATIVIDADES ORIENTADAS<br>
                
                1a Atividade: <br>
                • Mobilização social: Mapeamento de paisagens lúdicas e brincantes<br> 
                Carga horária: 10 horas<br>
                
                2a Atividade: <br>
                • Intervenção educativa 1: Construção e vivência de Jogos e Brincadeiras Inclusivas<br>
                • Site Vila Sésamo: Envio de desenhos das crianças sobre suas brincadeiras favoritas  <br>
                Carga horária: 10 horas<br>
                
                3a Atividade: <br>
                • Intervenção educativa 2: Organização do Dia do Brincar Inclusivo<br>
                • Site Vila Sésamo: Compartilhamento de brincadeiras inclusivas nas Redes Sociais<br>
                Carga horária: 10 horas<br>
                
                4a Atividade:<br> 
                • Sistematização / socialização: Relato de Prática para a “Plataforma Diversa”<br>
                • Site Vila Sésamo: Envio de histórias das brincadeiras de infância dos familiares e cuidadores<br>
                
                Carga horária: 10 horas<br>
                
                Página 13<br>
                Imagem de Sivan com o braço esquerdo erguido. Ela diz: “Oi Gente, meu nome é Sivan! Eu sou uma menina feliz, adoro me divertir. Sempre invento novas maneiras para brincar com os meus amigos e nunca fico de fora! Quero conversar com vocês sobre algo muito importante: o brincar inclusivo!”<br>
                
                Página 14<br>
                2.1 Desenvolvimento Inclusivo<br>
                
                Conversa em Roda<br>
                • O que é inclusão?<br>
                • O que é desenvolvimento inclusivo?<br>
                • Por que a inclusão é um direito?<br>
                • Como a inclusão das crianças com deficiência acontece na escola e na comunidade?<br>
                • Quais são os desafios e as possibilidades para promover o desenvolvimento inclusivo?<br>
                Texto em destaque: O longo período em que as políticas públicas não reconheciam os direitos das pessoas com deficiência, criou barreiras maiores do que qualquer condição física ou intelectual para a inclusão na sociedade.<br>
                Breve passeio pela história...<br>
                Desde a década de 1970, no Brasil, alguns segmentos da sociedade começaram a se organizar: mulheres, negros, pessoas com deficiência, constituindo os movimentos em defesa dos direitos humanos.<br>
                Em 1979 surgiu a /Coalizão das Entidades de Pessoas com Deficiências, organizando o movimento de luta das pessoas com deficiências em escala nacional. O ano de 1981 foi decretado o Ano Internacional da Pessoa com Deficiência pela Organização das Nações Unidas (ONU). Pela primeira vez o tema foi tratado como uma questão social e toda a população do planeta foi convocada para discutir, promover e respeitar os direitos da pessoa com deficiência.<br>
                Em maio de 2006 foi realizada a primeira Conferência Nacional dos Direitos da Pessoa com Deficiências no Brasil, após etapas que ocorreram em âmbito municipal e estadual. Essa Conferência foi um importante marco na equiparação de oportunidades para pessoas com deficiência, que historicamente tiveram seus direitos negligenciados.<br>
                Texto em destaque: O Censo 2010, do Instituto Brasileiro de Geografia e Estatística (IBGE), mostrou um Brasil com 45.606.048 de pessoas com pelo menos uma deficiência. Desse número significativo, 38,5 milhões de pessoas vivem em áreas urbanas e 7,1 milhões em áreas rurais.<br>
                A partir da década de 1970, até a presente data, o movimento das pessoas com deficiências lutou bravamente e reuniu algumas conquistas:<br> 
                • Política de educação inclusiva<br>
                • Isenção de impostos para aquisição de veículo<br>
                • Profissão de áudio descritor<br>
                • Profissão de intérprete/tradutor de libras<br>
                • Espetáculos com recursos de acessibilidade<br>
                • Programas de TV com pessoas com deficiência<br>
                • Transportes públicos com acessibilidade<br>
                
                Página 15<br>
                • Discussão sobre acessibilidade nas universidades, no governo, na mídia, na sociedade<br>
                • Programas e projetos do governo federal (Ex.: Plano Viver Sem Limite)<br>
                • Programas e projetos estaduais e municipais de acessibilidade e mobilidade<br>
                • Ações afirmativas: Lei de Cotas, Benefício de Prestação Continuada, etc.<br>
                Na forma de lei, a Convenção Internacional sobre os Direitos das Pessoas com Deficiência, ratificada pelo Brasil em 2008, é o documento mais importante que fortaleceu o movimento das pessoas com deficiência.<br> 
                O que a Convenção nos diz sobre a criança com deficiência?<br>
                No artigo 7º a Convenção destaca:<br>
                1. Os Estados Parte deverão tomar todas as medidas necessárias para assegurar às crianças com deficiência o pleno desfrute de todos os direitos humanos e liberdades fundamentais, em igualdade de oportunidades com as demais crianças.<br> 
                2. Em todas as ações relativas às crianças com deficiência, o que for melhor para elas deverá receber consideração primordial.<br>
                3. Estados Parte assegurarão que as crianças com deficiência tenham o direito de expressar livremente seus pontos de vista, em todas as questões que lhes afetam, em condições iguais a outras crianças, providas de assistência apropriada à deficiência e à idade para realizar este direito.<br>
                Portanto, toda criança tem o direito de acesso à educação de qualidade na escola regular e de atendimento especializado complementar, de acordo com suas especificidades. Esse direito está em consonância com a “Declaração Universal dos Direitos Humanos” e outras convenções compartilhadas pelos Países Membros das Nações Unidas. Nesse sentido, vale a pena refletir sobre os princípios da educação inclusiva, divulgados na Plataforma Diversa:<br>
                • Toda criança aprende: sejam quais forem as particularidades intelectuais, sensoriais e físicas do educando, partimos da premissa de que todos têm potencial de aprender e ensinar. É papel da comunidade escolar desenvolver estratégias pedagógicas que favoreçam a criação de vínculos afetivos, relações de troca e a aquisição de conhecimento.<br>
                • O processo de aprendizagem de cada criança é singular: as necessidades educacionais e o desenvolvimento de cada educando são únicos. Modelos de ensino que pressupõem homogeneidade no processo de aprendizagem e sustentam padrões inflexíveis de avaliação geram, inevitavelmente, exclusão.<br>
                • O convívio no ambiente escolar comum beneficia todos: acreditamos que a experiência de interação entre pessoas diferentes é fundamental para o pleno desenvolvimento de qualquer criança ou jovem. O ambiente heterogêneo amplia a percepção dos educandos sobre pluralidade, estimula sua empatia e favorece suas competências intelectuais.<br>
                Página 16<br>
                • A educação inclusiva diz respeito a todos: a diversidade é uma característica inerente a qualquer ser humano. É abrangente, complexa e irredutível. Acreditamos, portanto, que a educação inclusiva, orientada pelo direito à igualdade e o respeito às diferenças, deve considerar não somente crianças e jovens tradicionalmente excluídos, mas todos os educandos, educadores, famílias, gestores escolares, gestores públicos, parceiros, etc.<br>
                Fonte: Plataforma Diversa - <a href="http://www.diversa.org.br/quem-somos/principios/" aria-label="fonte" >http://www.diversa.org.br/quem-somos/principios/</a><br>
                O grande desafio é que todas essas conquistas impactem positivamente na vida da população, especialmente na convivência entre pessoas com e sem deficiência. Afinal, a inclusão só acontece quando todos se integram e vivem juntos, buscando melhores condições de vida para toda a sociedade.<br>
                Nessa perspectiva, o desenvolvimento inclusivo surge como uma tentativa de abordar a luta em favor da igualdade, dando visibilidade aos grupos excluídos, que se encontram em situação de vulnerabilidade social. É uma abordagem pautada no respeito aos direitos, às aspirações e ao potencial de todas as crianças. Por isso oferece um novo olhar para as questões sociais emergentes!<br>
                Por ser pobre, ter uma deficiência, ser imigrante ou estar infectada por piolhos, por exemplo, a criança jamais poderá ser privada do direito de brincar ou estudar!<br>
                Texto em destaque: "Uma criança nunca poderá ser excluída da escola por falta de oportunidades!  É por isso que os espaços devem ser adaptados ou construídos conforme o desenho universal de acessibilidade, garantindo que as crianças acessem e participem do processo educativo!"<br>
                Os princípios do desenvolvimento inclusivo podem reduzir a vulnerabilidade, a discriminação, a exclusão e os abusos contra crianças com deficiência. Mas para isso, a Escola, a Comunidade, as Empresas com Responsabilidade Social e os Poderes Públicos precisam romper com o ciclo de exclusão, por meio de propostas conjuntas e ações efetivas.<br>
                O conceito de sociedade inclusiva apenas se tornará concreto quando todas as pessoas tiverem a oportunidade de serem reconhecidas e incluídas, a começar pelas crianças! Assim, nós - educadores (as), cuidadores (as), familiares, gestores (as) de políticas públicas - somos todos responsáveis pela construção do desenvolvimento inclusivo em nossas comunidades!<br>
                ATIVIDADE 1 - CONSTRUÇÃO E VIVÊNCIA DE JOGOS E BRINCADEIRAS INCLUSIVAS (Anexo 1)<br>
                Objetivo: vivenciar o brincar inclusivo na escola e na comunidade, utilizando diferentes recursos educativos da Campanha Transmídia do projeto.<br>

                Página 17<br>
                2.2 Educação Lúdica<br>
                Conversa em Roda<br>
                • Por que o brincar é um direito?<br>
                • Na comunidade, o direito de brincar é reconhecido e valorizado?<br>
                • Como se manifesta a cultura da infância na comunidade? Quais brincadeiras, jogos e brinquedos são característicos?<br>
                • O que a criança aprende quando brinca?<br>
                • Todas as crianças participam das brincadeiras?<br>
                
                Texto em destaque: "Brincar é um direito humano garantido por leis a toda e qualquer criança e adolescente:<br>
                • Convenção sobre os Direitos da Criança, de 1989 (Art. 31)<br>
                • Constituição Federal (Art. 217)<br>
                • Estatuto da Criança e do Adolescente – ECA (Art. 4 e16)"<br>
                
                Breve passeio pela história...<br>
                A educação infantil, primeira etapa da educação básica, tem como finalidade o desenvolvimento integral da criança até os seis anos de idade, em seu aspecto físico, psicológico, intelectual e social, complementando a ação da família e da comunidade.<br> 
                A criança é um sujeito histórico e de direitos que, nas interações, relações e práticas cotidianas que vivencia, constrói sua identidade pessoal e coletiva, brinca, imagina, fantasia, deseja, aprende, observa, experimenta, narra, questiona e constrói sentidos sobre a natureza e a sociedade, produzindo cultura. (Diretrizes Curriculares da Educação infantil, BRASIL, 2010)<br>
                
                Texto em destaque: "A Educação Infantil carrega em si a dimensão do Lúdico e da Ludicidade. Brincar é uma atividade fundamental, pois promove a expressão do pensamento, da comunicação e interação entre as crianças. Referencial Curricular Nacional (1998)"<br>
                O brincar e a brincadeira permitem que as crianças expressem seus sentimentos e percepções do mundo de uma forma autônoma. Quando brincam, as crianças se aproximam da sua cultura, experimentam o mundo com criatividade. Reinventam a realidade, fazem escolhas, tomam decisões, desenvolvem a identidade. Criam conexões afetivas com amigos e os adultos.<br>
                Por isso, os processos e práticas educativas na primeira infância devem reconhecer, valorizar e incorporar a ludicidade. O grande desafio ainda é garantir o brincar para todos! Daí a importância do brincar inclusivo que - ao mesmo tempo em que desconstrói preconceitos e estereótipos - encanta, diverte e conduz à aprendizagem de forma leve e libertadora. Portanto a efetivação do direito de brincar precisa ser considerada por todos nós, ampliando as oportunidades de brincar de forma inclusiva e segura no cotidiano escolar, familiar e comunitário das crianças.<br>

                Página 18<br>
                Ambientes seguros são aqueles onde os perigos não estão presentes. Ou seja, não existam objetos e obstáculos que possam machucar ou ferir as crianças. É claro que essas condições variam conforme a idade e o desenvolvimento da criança.<br>
                Observe que quando nós, adultos, dizemos repetidas vezes: “por aí não”, ou “não suba aí ou acolá”, podemos sinalizar que o ambiente não está seguro. Então, é importante estar atento aos possíveis riscos que os ambientes e materiais utilizados podem oferecer às crianças. Eles são seguros? São acessíveis? Quando criamos um ambiente seguro e inclusivo, a criança pode brincar com maior liberdade!<br>
                Além de considerar a inclusão e a segurança, a Educação Lúdica também está preocupada com a valorização da diversidade cultural e a ampliação do repertório lúdico das crianças, familiares, cuidadores e comunidades.<br>
                Texto em destaque: "Quando brincam, as crianças e os adultos se tornam sujeitos brincantes!"<br>
                As brincadeiras, brinquedos e jogos tradicionais, apropriados para o desenvolvimento da cultura infantil e das práticas brincantes, constituem-se paisagens lúdicas e paisagens da cultura.<br> 
                Paisagem é algo gostoso de apreciar e vivenciar... Precisamos explorar e experimentar as paisagens lúdicas e culturais da nossa infância e das infâncias com as quais trabalhamos e convivemos.<br>
                Texto em destaque: "Quais são os espaços apropriados pela comunidade para as vivências lúdicas?"<br>
                Mapear os espaços destinados ao brincar é um exercício muito importante. Pode ser divertido e emocionante resgatar as brincadeiras tradicionais, as histórias, as músicas, as danças, todo o ‘tesouro’ cultural que descobrimos na relação entre diferentes gerações (crianças, pais, avós, professores, etc). Também pode ser interessante identificar os espaços onde se brinca, e aqueles, onde você brincou: os quintais, os campos de futebol, quadras, parques, praças, brinquedotecas, bibliotecas, etc.. Eles carregam histórias, memórias e oportunidades de aprendizagens que estão, muitas vezes, adormecidas!<br> 
                
                ATIVIDADE 2 – MAPEAMENTO DE PAISAGENS LÚDICAS E SUJEITOS BRINCANTES (Anexo 2)<br>
                Objetivo: Identificar e mobilizar o potencial lúdico e inclusivo dos espaços e sujeitos que vivem e/ou atuam na comunidade para promover conjuntamente o “Dia do Brincar Inclusivo”.<br>

                Página 19<br>
                
                2.3 Escola-Família-Comunidade<br>
                Conversa em Roda<br>
                • Qual é o perfil da comunidade local? Quais são os seus sonhos, as suas expectativas e demandas reais?<br>
                • Qual a importância da relação entre Escola-Família-Comunidade?<br>
                • Como essa relação acontece no município?<br>
                • Como a escola, a família e a comunidade podem contribuir para a garantia do direito de brincar?<br>
                Texto em destaque: "Escola, família e comunidade podem juntas refletir, aprender, lutar, criar e promover iniciativas e projetos que respondam às demandas locais! Assim, toda a comunidade escolar será responsável por promover a felicidade das suas crianças!"<br>
                
                Breve passeio pela história...<br>
                Historicamente o acesso das populações mais vulneráveis aos bens educativos, sociais e culturais tem sido possível graças ao engajamento e à mobilização social pela democratização da Educação no Brasil.<br> 
                As políticas públicas articuladas entre Organizações não Governamentais (ONG´s), Universidades, Agências de Cooperação, Organismos como o UNICEF, Programas Governamentais, Empresas e Institutos com responsabilidade social, Famílias e Comunidades têm contribuído para diversificar os processos educativos. Nesse movimento encontramos a Educação Integral!<br>
                Texto em destaque: "Legal! Educação Integral... Até rimou! Quero saber mais sobre isso…"<br>
                
                A Educação Integral é uma proposta muito interessante, pois tem como base a identificação, o fortalecimento e a mobilização do potencial educativo de todos os espaços, tempos e sujeitos. Pressupõe a constituição de novos territórios educativos, a integração das políticas educacionais e sociais, o incentivo à criação de espaços educadores sustentáveis, a afirmação dos direitos humanos e a articulação dos sistemas de ensino.<br> 
                Outro aspecto considerado e valorizado pela educação integral são as aprendizagens ao longo de toda a vida. As nossas rotinas diárias estão repletas de possibilidades de aprendizagem, basta estar atento para identificá-las. Quando lemos um cartaz de uma campanha de vacinação, estamos aprendendo algo. Quando assistimos a um documentário sobre as profundezas dos oceanos, estamos aprendendo coisas novas. Quando trocamos receitas com os vizinhos, também estamos construindo saberes. Quando assistimos aos bons programas infantis na televisão, como a Vila Sésamo, podemos refletir sobre valores humanos com as crianças.<br>
                
                Página 20<br>
                A Escola, nesse contexto, exerce um papel importante no projeto de Educação, mas não deve caminhar solitariamente... Isso não significa diminuir o papel da escola, mas reconhecer que a ela pode se somar uma pluralidade de sujeitos e ações comunitárias que também contribuem para a formação integral das crianças.<br> 
                
                Texto em destaque: "É dever da família, da comunidade, da sociedade em geral e do poder público assegurar, com absoluta prioridade, a efetivação dos direitos referentes à vida, à saúde, à alimentação, à educação, ao esporte, ao lazer, à profissionalização, à cultura, à dignidade, ao respeito, à liberdade e à convivência familiar e comunitária.<br> 
                Artigo 41 do Estatuto da Criança e do Adolescente (ECA)."<br>
                
                Justamente por isso é cada vez mais comum encontrar - no Brasil e no mundo - programas e projetos educativos que são realizados via parcerias entre diferentes setores da sociedade. Em vez de levar modelos ou tecnologias sociais prontas, tais iniciativas reconhecem, valorizam e potencializam os diferentes sujeitos, espaços, instituições, meios de comunicação e políticas públicas que já existem nos locais. O Projeto Incluir Brincando é um ótimo exemplo.<br>
                Nesse sentido, uma proposta de educação integral requer formação e informação qualificada para toda a sociedade. Educadores, cuidadores e familiares precisam aprender como construir conhecimento junto às crianças, de forma prazerosa e crítica. Precisam valorizar a cultura da infância nas diferentes comunidades, sem antecipar etapas da vida e privar as crianças do direito de brincar e se divertir. Precisam conhecer os direitos fundamentais das crianças e criar estratégias para concretizá-los no dia-a-dia.<br>
                Texto em destaque: "Agora entendo que é muito importante incentivara participação ativa de cada sujeito - principalmente das crianças - nos processos educativos!"<br>
                Desta forma, a união entre escola, família e comunidade possibilitará a celebração de experiências educativas mais inclusivas e sustentáveis. Conselho de Direito da Criança e do Adolescente, Ministério Público, Juizado da Infância e Juventude, Órgãos e serviços públicos, Projetos e Programas governamentais, Universidades, ONG´s, Igrejas e Templos de diversas tradições religiosas, entre outros atores estratégicos, podem formar uma Rede de Proteção e Atenção em prol da Infância.<br>
                Texto em destaque: “É preciso toda uma aldeia para educar uma criança” (Provérbio africano).<br>
                A Rede precisa mapear as principais demandas que afetam a vida das suas crianças para dialogar criticamente sobre elas e, então, construir um projeto educativo integrado, com responsabilidades compartilhadas entre os diferentes setores/atores da sociedade. Quando a escola, a família, a comunidade e outros atores e setores formam a Rede, surge uma comunidade de aprendizagem!<br>
                
                Página 21<br>
                ORGANIZANDO O DIA DO BRINCAR INCLUSIVO<br>
                Imagem de Bel que diz: "Olá Amigos(as)! O Meu nome é Bel e tenho 3 aninhos! Sou uma monstrinha rosa, peluda, divertida e cheia de imaginação! Amo a natureza e não gosto de quem maltrata os animais! Adoro brincar com as crianças! Estou feliz porque está o chegando o Grande Dia... O Dia do Brincar Inclusivo! Vamos organizá-lo juntos?"<br>
                
                Página 22<br>
                Conversa em Roda<br>
                • Quais paisagens lúdicas e sujeitos brincantes foram mapeados na comunidade?<br>
                • Quais são as expectativas das crianças em relação ao dia do Dia do Brincar inclusivo?<br> 
                • Quem serão os parceiros locais para a organização e realização da atividade?<br>
                • Como e quando nos encontraremos para organizar da atividade?<br>
                • Onde e quando realizaremos o Dia? Quais são os recursos necessários (materiais, humanos, ambientais)? Como divulgaremos, registraremos e avaliaremos?<br>
                Texto em destaque: "O brincar deve ser estimulado e vivenciado por toda criança, em todos os tempos e espaços da vida cotidiana. Vamos juntar pessoas e organizações para organizar um dia festivo na nossa comunidade: o Dia do Brincar Inclusivo?"<br>
                O Dia do Brincar Inclusivo é uma proposta integradora, com potencial de reunir diferentes gerações para brincar e se divertir juntos! Além das escolas parceiras, a iniciativa pode ser promovida pela sociedade civil organizada, governo etc. O sonho é que se torne uma política das secretarias de educação, das prefeituras... Que seja inesquecível e tenha continuidade nos próximos anos!<br>
                Formação do “Grupo Brincante Local”<br>
                Por onde começar? <br>
                1. Constitua um Grupo de Trabalho, levando em conta a representação de membros da escola e da comunidade. Para isso, identifique os atores sociais estratégicos presentes na sua comunidade e convoque todos eles para um encontro inicial. Juntos, respondam as perguntas da Conversa em Roda.<br>
                2. Faça uma ‘escuta das crianças’... Peça para que professores(as) recolham depoimentos e desenhos que sistematizem suas sugestões e seus desejos em relação à programação do Dia do Brincar Inclusivo! <br>
                3. Analise o mapeamento das paisagens lúdicas e sujeitos brincantes identificados na comunidade e convide-os para oferecerem atividades durante o Dia do Brincar Inclusivo.<br>
                4. Levando em conta as “vozes das crianças” e o mapeamento, construa uma Programação e um Plano de Trabalho, com tarefas, prazos e responsáveis bem definidos.<br>
                5. Organize uma agenda de trabalho para que o Grupo se encontre regularmente! Para cada desafio encontrado pelo Grupo, criem inúmeras possibilidades de superá-los. Lembre-se que é importante ter em mente o Plano A, B e C, caso surjam imprevistos durante a organização do Dia do Brincar Inclusivo!<br>
                
                Página 23<br>
                Texto em destaque:"Você pode ser o articulador local do Grupo Brincante, a pessoa que irá convidar outros atores para que juntas promovam essa ação! Aceita o desafio?"<br>
                ATIVIDADE 3 - PLANEJAMENTO DO “DIA DO BRINCAR INCLUSIVO” (Anexo 3)<br>
                Objetivo: Planejar o “Dia do Brincar Inclusivo”, estabelecendo uma rede de parceiros locais (escola, família, comunidade, órgãos governamentais e sociedade civil).<br>
                Programação<br>
                Use a criatividade para montar uma programação que valorize as paisagens lúdicas, a cultura da infância e as potencialidades presentes na sua comunidade! É muito importante considerar o resultado do mapeamento, as opiniões das pessoas, a cultura local... Espaços, duração das atividades, recursos necessários, assim como os responsáveis precisam ser bem pensados! Uma programação bem estruturada pode tornar o Dia do Brincar Inclusivo um marco na vida da comunidade, oportunizando um encontro intergeracional, repleto de trocas, cooperação, afetividade e alegria!<br>
                ATIVIDADES SUGERIDAS<br>
                • Cinema com pipoca, para exibição dos episódios do Projeto<br>
                • Teatro de bonecos, fantoches, etc.<br>
                • Jogos simbólicos, com máscaras dos personagens da Vila Sésamo<br>
                • Feira para troca de brinquedos<br>
                • Oficina para construção de jogos adaptados<br>
                • Vivência de brincadeiras populares<br>
                • Rodas de Conversa sobre desenvolvimento inclusivo e o brincar<br>
                • Contação de histórias<br>
                • Sarau de poesias e apresentações musicais<br>
                • Danças regionais e circulares<br>
                • Oficinas artísticas<br>
                Comunicação e Divulgação<br>
                É muito importante convidar toda a comunidade para participar do “Dia do Brincar Inclusivo”! Evidencie que o Dia do Brincar Inclusivo está sendo organizado com apoio de uma Rede de parceiros que buscam contribuir com o desenvolvimento integral de todas as crianças da comunidade. Não se trata de um evento partidário! Não tem nenhum tipo de interesse econômico por trás! O objetivo é só um: brincar e se divertir!<br>

                Página 24<br>
                Seja criativo e utilize diferentes canais de comunicação:<br>
                • Agenda<br>
                • Convite<br>
                • Cartaz<br>
                • Faixa de rua<br>
                • Carro de som<br>
                • Rádio comunitária<br>
                • Jornal de Bairro<br>
                • Mural<br>
                • Televisão<br>
                • Redes Sociais<br>
                • Sites<br>
                • Blogs<br>
                Registro<br>
                Programação pronta e tudo organizado... Então, não se esqueça: registre esse momento! Você pode utilizar diferentes estratégias para documentar as atividades e construir a memória do “Dia do Brincar Inclusivo”:<br>
                • Desenho<br>
                • Painel interativo<br>
                • Fotografia<br>
                • Filmagem <br>
                • Entrevista<br>
                • Relato<br>
                • Depoimento<br>
                
                ATIVIDADE 4 - RELATO DE PRÁTICA (Anexo 4)<br>
                Objetivo: sistematizar e compartilhar as práticas realizadas nas escolas e comunidades a partir do Projeto Incluir Brincando, contribuindo para a troca de experiências e a produção de conhecimento sobre educação inclusiva através da Plataforma DIVERSA (<a href="www.diversa.org.br" aria-label="site Diversa">www.diversa.org.br</a>).<br>
                Avaliação e Desdobramentos...<br>
                Conversa em Roda<br>
                • Após a realização do Dia do Brincar Inclusivo, quais são as lições aprendidas?<br> 
                • É possível tornar essa ação algo validado pela Rede de Educação e considerá-la no calendário escolar?<br> 
                • Como essa iniciativa pode ser integrada ao currículo escolar e ao Projeto Político Pedagógico (PPP) nos próximos anos?<br> 
                É muito importante que o Grupo Local se reúna e que todos envolvidos - crianças, cuidadores, familiares, educadores - avaliem o Dia do Brincar Inclusivo.<br> 
                Para a avaliação, utilize as fichas de avaliação do Dia do Brincar Inclusivo (Anexos 9 e 10)<br>
                A partir da experiência do ‘Dia do Brincar Inclusivo’ é possível pensar sobre o Currículo vigente e o Projeto Pedagógico da Escola (PPP). Isso é muito importante, afinal esses documentos são vivos e precisam ser revistos de tempos em tempos, tornando-os cada vez mais significativos para a aprendizagem das crianças.<br>
                
                Página 25<br>
                SUGESTÕES PARA APROFUNDAMENTO<br>
                Imagem de Garibaldo falando: "Oi, sou o Garibaldo, um pássaro amarelo e gigante de seis anos. Às vezes sou atrapalhado e desengonçado... Gosto de fazer muitas perguntas e fico feliz quando minhas dúvidas são solucionadas... Vamos ampliar nossos horizontes e buscar respostas para as perguntas que ficaram na nossa cachola?"<br>
                
                Página 26<br>
                Para navegar<br>
                • Associação Brasileira pelo Direto de Brincar: <a href="http://www.ipadireitodebrincar.org.br" title=""> www.ipadireitodebrincar.org.br</a><br>
                • Associação Laramara: <a href="http://www.laramara.org.br/" title="">www.laramara.org.br/</a><br>
                • Braille Virtual: <a href="http://bit.ly/onm4S" title="">http://bit.ly/onm4S (aprenda a escrever palavras em braile)</a><br>
                • Campanha Nacional pelo Direito à Educação: <a href="http://www.campanhaeducacao.org.br" title="">www.campanhaeducacao.org.br</a><br>
                • Fundo das Nações Unidas para a Infância (UNICEF): <a href="http://www.unicef.org.br" title="">www.unicef.org.br</a> <br>
                • Instituto Alana: <a href="http://www.alana.org.br" title="">www.alana.org.br</a><br>
                • Instituto Rodrigo Mendes: <a href="http://www.institutorodrigomendes.org.br" title="">www.institutorodrigomendes.org.br</a><br>
                • Mapa do Brincar:<a href="http://www.mapadobrincar.com.br" title=""> www.mapadobrincar.com.br</a><br>
                • Ministério da Educação (MEC): <a href="http://www.mec.gov.br" title="">www.mec.gov.br</a><br>
                • Rede Nacional pela Primeira Infância: <a href="http://primeirainfancia.org.br" title="">http://primeirainfancia.org.br</a><br>
                • Território do Brincar: <a href="http://www.territoriodobrincar.com.br" title="">www.territoriodobrincar.com.br</a><br>
                • Vila Sésamo: <a href="http://www.cmais.com.br/vilasesamo" title="">www.cmais.com.br/vilasesamo</a><br>
                Plataforma Diversa: ambiente virtual dedicado à produção de conhecimento por meio de pesquisa e troca de experiências em educação inclusiva, que tem como público profissionais da educação e gestores públicos que se sentem desafiados a incluir estudantes com deficiência nas escolas regulares.<br>
                <a href="http://www.diversa.org.br" aria-label="">www.diversa.org.br</a> <br>
                Para assistir<br>
                História do Movimento Político das Pessoas com Deficiência no Brasil: <a href="http://www.youtube.com/watch?v=eDi63uTyhkY" title="">http://www.youtube.com/watch?v=eDi63uTyhkY</a><br> 
                WEBSÓDIOS e Vídeos do Projeto Incluir Brincando:  <a href="www.cmais.com.br/vilasesamo" title="">www.cmais.com.br/vilasesamo</a><br>
                <a href="http://www.youtube.com/watch?v=eDi63uTyhkY" title="">http://www.youtube.com/watch?v=eDi63uTyhkY</a><br>
                
                Página 27<br>
                Para ler<br>
                BRASIL. MEC/SEB/DCOCEB/COEDI. Critérios para um Atendimento em Creches que Respeite os Direitos Fundamentais das Crianças. Ed. Brasília, 2009. Disponível em: <a href="http://portal.mec.gov.br/dmdoc" title="">http://portal.mec.gov.br/dmdoc</a><br>
                BRASIL. Ministério da Educação. Secretaria de Educação Básica.  MEC/SEB. Diretrizes Curriculares Nacionais para a Educação Infantil. Ed. Brasília 2010.<br>
                BORBA, Angela M. O Brincar como um Modo de Ser e Estar no Mundo. Brasil, MEC, Ensino Fundamental de Nove Anos: orientações para a inclusão da criança de 6 anos de idade. Brasília, 2006.<br>
                BROUGERE, Gilles. SHIMOTO, T. M. (Org.). A Criança e a Cultura Lúdica. O Brincar e suas Teorias. São Paulo: Pioneira Thomson Learning, 2002.<br>
                CARVALHO, Ana M. A. et al (Orgs.). Brincadeira e Cultura: viajando pelo brasil que brinca. São Paulo: Casa do Psicólogo, 2003.<br>
                Convenção sobre os Direitos da Pessoa com Deficiência. Disponível em: <a href="http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2009/decreto/d6949.htm" title=""> http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2009/decreto/d6949.htm</a><br>
                Convenção sobre os Direitos da Criança. Disponível em: <a href="http://www.unicef.org/brazil/pt/resources_10120.html" title="">http://www.unicef.org/brazil/pt/resources_10120.html</a><br>
                EDWARDS, Carolyn; et al.  As Cem Linguagens da criança: a abordagem de Reggioemilia na educação da primeira infância. Porto Alegre: Artes Médicas, 1999.<br>
                Estatuto da Criança e do Adolescente – ECA. Disponível em: <a href="http://www.unicef.org/brazil/pt/resources_10120.html" title="">http://www.planalto.gov.br/ccivil_03/leis/l8069.htm.</a><br>
                FERREIRA, Windyz Brazão. Educar na Diversidade: práticas educacionais inclusivas na sala de aula regular. Ensaios Pedagógicos, Educação Inclusiva: direito à diversidade. Secretaria de Educação Especial. MEC. Brasília, Distrito Federal,. pp. 125-132, 2006.<br> 
                FREIRE, Paulo. Pedagogia da Autonomia. São Paulo: Paz e Terra, 1996.<br> 
                FRIEDMANN, Adriana. A Arte de Brincar: brincadeiras e jogos tradicionais. Vozes, 2004.<br>
                MATURANA, H. ; VERDEN-ZOLLER, G. Amar e Brincar: fundamentos esquecidos do humano. São Paulo: Palas Athena, 2004.<br>
                SKLIAR, Carlos. A Inclusão que é “Nossa” e a diferença que é do “Outro”. Inclusão e Educação: doze olhares sobre a educação inclusiva. São Paulo: Summus, 2006.<br>
                SIAULYS, Mara O. de Campos. Brincar para Todos. Ministério da Educação, Secretaria de Educação Especial, Brasília: 2005. Disponível em: http://portal.mec.gov.br/seesp/arquivos/pdf/brincartodos.pdf.<br> 
                VYGOTSKY, L.S. Pensamento e Linguagem. São Paulo: Martins Fontes, 2005.<br>
                RELATÓRIO SITUAÇÃO MUNDIAL DA INFÂNCIA 2013: Crianças com Deficiência. New York, 2013. Disponível em: <a href="http://www.unicef.org/brazil/pt/resources_25542.htm" title="">http://www.unicef.org/brazil/pt/resources_25542.htm.</a><br> 
                
                </p>
              </li>
              <li>
               <p>
                 DICAS PARA INCLUIR BRINCANDO<br>
                (versão acessível - todas as indicações de páginas correspondem ao exemplar impresso)<br>
                
                Página 2<br>
                EXPEDIENTE<br>
                DICAS PARA INCLUIR BRINCANDO<br>
                COLEÇÃO INCLUIR BRINCANDO<br>
                Projeto Incluir Brincando<br>
                Realização: Sesame Workshop / TV Cultura<br>
                Apoio: MetLife Foundation<br>
                Parceiro estratégico: UNICEF - Fundo das Nações Unidas para a Infância<br>
                Parceiros institucionais: Associação Laramara, Instituto Rodrigo Mendes, Efeito Visual Serigrafia e Iguale Comunicação de Acessibilidade<br>
                Coordenação: Julia Tomchinsky<br>
                Colaboração: Abigail Bucuvalas, Alessandra Marconato, Alexandre Amorim, Cristiano Gomes, Daniela Brayner Mattos, Estela Caparelli, Immaculada Prieto, Kauleen Menard, Lilian Galvão, Maurício Santana, Nelma Meo, Renata Yumi, Renato Silva, Rodrigo Fonseca, Rosilene Araújo, Rui Aguiar e Thais Catucci<br>
                Textos e consultoria pedagógica: Julia Tomchinsky e Meire Cavalcante<br>
                Revisão: Maria Valéria C. M. de Carvalho <br>
                Projeto gráfico e Ilustrações: Ariane Corniani e Cecília Andrade<br>
                Impressão: Efeito Visual Serigrafia<br>
                Audiodescrição: Iguale Comunicação de Acessibilidade<br>
                
                2a Edição – 2014 <br>

                Página 3<br>
                PARCEIROS<br>
                SESAME WORKSHOP é uma organização educacional sem fins lucrativos especializada na criação de conteúdo multimídia para o desenvolvimento da primeira infância. Produz o seriado de TV VILA SÉSAMO, assistido em mais de 140 países.<br>
                <a href="http://www.sesameworkshop.org" title="">www.sesameworkshop.org</a><br> 

                TV CULTURA é o principal veículo de comunicação da Fundação Padre Anchieta. Modelo de emissora pública, comprometida em oferecer programação qualificada, atrativa, crítica, democrática e inovadora para os mais diversos públicos e faixas etárias. Ganhou mais de 200 prêmios nacionais e internacionais.<br>
                <a href="http://tvcultura.cmais.com.br" title="">tvcultura.cmais.com.br</a><br> 
                
                FUNDO DAS NAÇÕES UNIDAS PARA A INFÂNCIA (UNICEF) contribui para a construção de um mundo onde os direitos de cada criança e de cada adolescente sejam cumpridos, respeitados e protegidos. Presente em 191 países, é referência mundial em conhecimento e ações relacionadas à infância e adolescência.<br>
                <a href="http://www.unicef.org.br" title="">www.unicef.org.br</a><br>
                
                FUNDAÇÃO METLIFE foi criada para dar continuidade à antiga tradição da MetLife de prestar contribuições como empresa parceira da comunidade. Atualmente a Fundação se dedica a promover a inclusão financeira com a finalidade de ajudar a criar um futuro seguro para indivíduos e comunidades em todo o mundo.<br> 
                <a href="http://www.metlife.org" title="">www.metlife.org</a><br> 
                
                Página 4<br>
                
                LARAMARA, instituição sem fins lucrativos cujas ações estão voltadas ao atendimento especializado nas áreas socioassistencial e socioeducativa. Todas as ações são realizadas com ênfase no apoio e suporte à inclusão das pessoas com deficiência visual na família, na escola, no trabalho e na comunidade.<br>
                <a href="http://www.laramara.org.br" title="">www.laramara.org.br</a><br>
                
                INSTITUTO RODRIGO MENDES é uma organização sem fins lucrativos comprometida com a construção de uma sociedade inclusiva por meio da educação e da arte. Suas ações visam a colaborar para que a escola pública seja capaz de acolher toda e qualquer criança. Para isso, desenvolve programas de pesquisa e formação sobre educação inclusiva.<br>
                <a href="http://www.institutorodrigomendes.org.br" title="">www.institutorodrigomendes.org.br</a><br>
                
                EFEITO VISUAL, gráfica pioneira no Brasil, é especializada em comunicação impressa com estímulo tátil, usando a técnica de serigrafia, traços em relevo, texturas, braille com resina transparente e outras soluções inovadoras utilizadas  para a inclusão social de pessoas com deficiência.<br> 
                <a href="http://www.efeitovisual.com.br" title="">www.efeitovisual.com.br</a><br>
                
                IGUALE COMUNICAÇÃO DE ACESSIBILIDADE é a primeira empresa brasileira criada para pensar e produzir soluções assistivas completas em comunicação para pessoas com deficiência, proporcionando acessibilidade e autonomia na área da comunicação e cultura, TV, cinema, teatro, web, exposições, eventos, outros.<br>
                <a href="http://www.iguale.com.br" title="">www.iguale.com.br</a><br> 
                
                Página 5<br>
                
                Índice<br>
                MEDIAÇÃO DA BRINCADEIRA - p.6<br>
                1. Conhecer o grupo - p.8<br>
                2. Escolher brincadeiras - p.9<br>
                3. Usar a criatividade - p.9<br>
                4. Organizar um espaço seguro - p.11<br>
                5. Melhorar a comunicação - p.11<br>
                6. Cuidar da interação - p.13<br>
                7. Desconstruir preconceitos - p.14<br>
                8. Valorizar as individualidades - p.15<br>
                9. Promover a reflexão - p.16<br>
                10. Sistematizar e socializar a prática - p.17<br>
                
                SUGESTÕES PARA INCLUIR BRINCANDO - p.17<br>
                1. Brinquedos - p.17<br>
                2. Brincadeiras - p.18<br>
                3. Jogos - p.21<br>
                
                Página 6<br>
                MEDIAÇÃO DA BRINCADEIRA<br>
                
                Brincar é um direito humano garantido a toda e qualquer criança e adolescente por leis nacionais e internacionais, como a Convenção sobre os Direitos da Criança, de 1989 (Art. 31), a Constituição Federal (art. 217) e o Estatuto da Criança e do Adolescente – ECA (art. 4 e16).<br>
                As pessoas não são iguais e é isso que torna o mundo tão rico. Iguais, na verdade, devem ser as oportunidades de sobreviver e de se desenvolver, aprender, crescer sem violência, brincar! A idade, o gênero, a origem étnico-racial, o credo, as condições pessoais ou qualquer outra característica jamais podem justificar alguém ficar de fora na hora de brincar.<br> 
                Quando brincam, as crianças desenvolvam suas capacidades motoras, cognitivas e sociais. Além disso, muitas vezes, para que o amigo com deficiência participe, as crianças precisam colaborar e ser criativas. Desta forma, surge o brincar inclusivo, o brincar para todos!<br>
                O Projeto Incluir Brincando busca contribuir para a garantia do direito de brincar a todas as crianças, respeitando os ritmos e a individualidade de cada uma. O projeto é uma iniciativa da Vila Sésamo e da TV Cultura, com o apoio da MetLife Foundation, e parceria do UNICEF, da Associação Laramara, do Instituto Rodrigo Mendes, da Efeito Visual Serigrafia e da Iguale Comunicação de Acessibilidade.<br> 
                Nosso sonho é um brincar inclusivo... Um brincar que promove a interação de todas as crianças, valoriza as individualidades, estimula a autonomia e fortalece a autoestima. Ou seja, é uma integração lúdica que acontece entre crianças que têm e não têm deficiência. Todas juntas: brincando!<br>
                Por isso, ao promover atividades, brincadeiras e materiais pedagógicos, é preciso fazer a si mesmo uma pergunta-chave: o que vou oferecer permite que todos e todas brinquem juntos, independentemente das características de cada um?<br>
                Neste Guia do Brincar Inclusivo você vai conhecer os princípios do brincar inclusivo e algumas sugestões que poderão colaborar para a garantia desse direito. <br>
                Você vai ver: incluir é bem mais simples do que parece e torna a brincadeira muito mais divertida! <br>
                Basta ter criatividade para aproveitar todas as possibilidades que a brincadeira oferece. <br>
                Esta publicação - Dicas para Incluir Brincando - faz parte da COLEÇÃO INCLUIR BRINCANDO, que reúne outros  materiais elaborados especialmente para educadores e cuidadores. Todos os recursos devem ser incorporados ao acervo das escolas, brinquedotecas, ONGs e demais espaços que contribuem para o desenvolvimento integral das crianças.<br> 
                
                Página 7<br>
                Imagem com Sivan e Bel.<br>
                Sivan diz: "Você vai ver: incluir é bem mais simples do que parece e torna a brincadeira muito mais divertida."<br>
                Bel diz: "Basta ter criatividade para aproveitar todas as possibilidades que a brincadeira oferece."<br>
                
                Página 8<br>
                MEDIAÇÃO DA BRINCADEIRA<br>
                A brincadeira é a principal atividade das crianças pequenas, portanto deve ser uma prioridade das instituições de Educação Infantil. Os(as) professores(as) e cuidadores(as), como parceiros mais experientes, têm um papel fundamental para ampliar a cultura lúdica das crianças. Por exemplo, quando contribuem para a resolução de conflitos ou quando organizam materiais e recursos em um ambiente lúdico.<br> 
                A seguir, serão oferecidas dicas para que os adultos potencializem os aspectos educativos das brincadeiras e assegurem a participação de todas as crianças. O objetivo é contribuir para que todas as crianças se desenvolvam de forma integral, conhecendo e experimentando o mundo por meio do brincar de forma criativa, segura e inclusiva.<br>
                
                1. CONHECER O GRUPO<br>
                Você conhece as crianças que vão participar da brincadeira? Converse com elas para mapear seus interesses e características. Se houver crianças com algum tipo de deficiência no grupo, procure suas famílias para orientações mais específicas.<br>
                Imagem com Bel e Garibaldo.<br>
                Bel diz: "Somos crianças, mas uma muito diferente da outra! Por exemplo, eu sou rosa e baixinha... O Garibaldo, amarelo e bem alto...  Mas isso não é problema, porque sempre brincamos juntos!"<br>
                DICAS:<br>
                • Identificar quais brincadeiras fazem parte do cotidiano das crianças na escola, em casa e na comunidade.<br>
                • Observar como as crianças interagem com os brinquedos, para identificar quais mudanças e adaptações são necessárias.<br>
                • Verificar como as crianças estão integradas no grupo, para levantar expectativas, desafios e possibilidades de incluir brincando.<br> 
                • Perguntar sempre à família (ou responsável) e ao profissional de saúde, se há restrições no brincar. Caso haja restrições, verificar o que pode ser feito para incluí-las nas brincadeiras.<br>
                • Solicitar apoio técnico à Secretaria de Educação do seu município e às instituições que atuam com pessoas com deficiência na comunidade.<br>
                
                Página 9<br>
                2. ESCOLHER BRINCADEIRAS<br>
                Quais as brincadeiras mais comuns na sua comunidade? Algumas delas são características, não existem em outros lugares? Partindo das informações recolhidas junto às crianças e familiares, escolha as brincadeiras que favoreçam a participação de todas, estimulem a integração e valorizem a diversidade.<br>
                Imagem de Sivan que diz: "Conheço muitas brincadeiras legais! Aprendi algumas com meus amigos, outras com os meus avós. Mas as mais divertidas são aquelas de que todos podem participar!"<br>
                DICAS:<br>
                • Criar ambientes lúdicos e diversificados que valorizem a cultura lúdica do lugar, respondam aos interesses das crianças e estimulem novas aprendizagens.<br>
                • Ampliar o repertório lúdico das crianças com jogos, brinquedos e brincadeiras de outros lugares e regiões.<br>
                • Propor brinquedos e brincadeiras que explorem os diferentes sentidos - com figuras, cores, cheiros, texturas e sons.<br>
                3. USAR A CRIATIVIDADE<br>
                Alguma criança do grupo tem uma deficiência que a impede de participar da brincadeira escolhida? Use sua criatividade para adaptar a forma de brincar. Talvez seja preciso mudar as regras ou usar algum objeto de apoio mais específico.<br>
                
                DICAS:<br>
                • Criar regras e combinados que possibilitem a participação de todos e todas nas brincadeiras.<br>
                • Utilizar materiais e recursos acessíveis às crianças com e sem deficiência, sempre apresentando-os  no início das brincadeiras.<br>
                • Antes da brincadeira começar, estimule as crianças a explorarem os brinquedos e materiais lúdicos incentivando-as a manusear, balançar, examinar, agrupar, empilhar, contar, classificar, conhecer sua forma e cor, sentir a textura, consistência, peso, material de que é feito. Quando necessário, ajude-as contornando figuras com os dedos.<br>
                • Pesquisar as variações das brincadeiras e explorar diferentes possibilidades para brincar com um mesmo brinquedo ou jogo. As crianças gostam de inventar novos usos para os materiais!<br>
                
                Página 10<br>
                MATERIAIS QUE FACILITAM A INCLUSÃO<br>
                O brincar inclusivo não implica, necessariamente, em brinquedos e materiais caros. Ao contrário! Geralmente, as brincadeiras e jogos se tornam acessíveis pelo uso de materiais baratos e facilmente encontrados. Para crianças com deficiência visual, por exemplo, é apropriado revestir os brinquedos com texturas, criar alto relevo com barbante ou tinta plástica e usar objetos que produzam sons. Usar cores fortes é estimulante para todos e ajuda quem tem baixa visão a perceber contrastes. Em brinquedos com escritos, fazer as palavras também em braile. No caso de crianças com deficiência física, há algumas adaptações simples, como: prender o brinquedo no braço, usar peças maiores, com alças e que não deslizam facilmente e pedir a alguém que movimente a cadeira de rodas durante o brincar. Veja, a seguir, uma lista de materiais que podem ajudar:<br>
                • Bolas de todos os tipos e tamanhos (com guizo também!)<br>
                • Bastões mais leves ou macarrão de natação (multiuso, auxiliar em jogos com bola, alvo, esgrima etc)<br>
                • Bambolês e pneus (muito úteis nos circuitos)<br>
                • Cartelas e dados maiores<br>
                • Peças maiores e com alças<br>
                • Colchonetes e tapetes<br>
                • Fantasias e objetos cotidianos (bolsas, roupas, telefones, panelas, espelhos, etc)<br>
                • Fantoches (podem ser feitos com lã e botões costurados ou colados em meias)<br>
                • Lençol grande e panos com diferentes texturas (as crianças podem arrastar umas às outras, além de criar cabanas e esconderijos)<br>
                • Caixas de papelão (podem virar móveis, brinquedos, avião, palco de teatro de fantoches)<br>
                • Massinha de modelar e argila<br>
                • Tintas, pincéis grandes e esponja para pintar<br>
                • Segurador de cartas (para crianças com deficiência física)<br>
                • Velcro e ímã (para fixar peças de jogos)<br>
                
                Página 11<br>
                4. USAR A CRIATIVIDADE<br>
                O local é acessível a quem tem mobilidade restrita ou deficiência visual? Como é a iluminação? O espaço e os materiais não apresentam risco às crianças? Observe o espaço e faça os ajustes necessários para favorecer a integração e permitir que todas as crianças participem da brincadeira com segurança.<br>
                Imagem de Sivan que diz: "É muito chato quando os adultos ficam falando: “Isso não pode...” “Isso é perigoso!” “Cuidado!” Quando o ambiente é seguro, podemos brincar com mais liberdade!"<br>
                
                DICAS:<br>
                • Priorizar materiais macios, leves, emborrachados e feitos com elementos naturais não tóxicos.<br>
                • Ressaltar os cuidados necessários para a segurança de todos, antes da brincadeira começar.<br>
                • Propor brincadeiras em áreas gramadas ou com piso macio, sempre que possível.<br>
                • Garantir piso plano para a circulação de cadeira de rodas no espaço.<br>
                • Oferecer bóias e equipamentos de segurança, quando a brincadeira envolve água.<br>
                • Assegurar tempo para que as crianças organizem o espaço e os materiais junto aos adultos.<br>

                5. MELHORAR A COMUNICAÇÃO<br>
                Durante as brincadeiras todos conseguem se expressar e se entender? Use diferentes formas de comunicação para que todos e todas possam compreender as regras, acompanhar a brincadeira e expressar seus sentimentos.<br>
                DICAS:<br>
                • Criar um roteiro ilustrado com os combinados e as regras das brincadeiras.<br>
                • Utilizar cartazes, placas e pranchas com símbolos e cores para inclusão de crianças com dificuldade de comunicação.<br> 
                • Criar legendas em braile e descrever o cenário e os materiais, no caso de uma criança com deficiência visual.<br>
                • Tirar dúvidas sobre a dinâmica no início e durante a brincadeira.<br>

                Página 12<br>
                LIBRAS - A SEGUNDA LINGUA OFICIAL DO BRASIL!<br>
                Crianças surdas podem se comunicar por meio da Língua Brasileira de Sinais (Libras), por oralização (falam) e por leitura labial. Fale sempre de frente e articule bem as palavras. Para chamar sua atenção, acene em seu campo visual ou dê um toque suave. Se você souber sinais de Libras, mesmo que poucos, utilize-os. Se alguém da família da criança souber Libras e puder ser intérprete, peça ajuda. Aponte, desenhe, escreva ou dramatize se necessário.<br>
                Imagem de Bel e um balão de texto com letras do alfabeto sinalizado formando as palavras: “INCLUIR BRINCANDO”<br>
                
                Página 13<br>
                6. CUIDAR DA INTERAÇÃO<br>
                Observe durante a brincadeira, como o grupo interage e como se expressa. Alguém está sendo deixado de lado? Como é a relação entre meninos e meninas? Como as crianças estão auxiliando e interagindo com o/a colega com deficiência? Essas informações ajudam numa possível intervenção para construir práticas inclusivas no grupo.<br> 
                Imagem de Sivan e Garibaldo, que diz: "Eu gosto de inventar novas brincadeiras e mudar as regras de um jogo, principalmente quando é para a Sivan participar!"<br>
                DICAS:<br>
                • Integrar crianças de diferentes idades, meninos e meninas, com e sem deficiência.<br>
                • Construir coletivamente combinados e princípios de convivência, retomando-os sempre que necessário.<br>
                • Respeitar o ritmo das crianças durante as brincadeiras, principalmente daquelas com algum tipo de deficiência.<br>
                • Promover parcerias (duplas, trios ou grupos), levando em conta as características do grupo.<br>
                • Estimular as crianças a solucionarem os conflitos que surgem durante as brincadeiras.<br>
                
                BALÃO DE PENSAMENTO:<br>
                Muitas vezes, quando uma criança com deficiência participa, é preciso estimular o espírito colaborativo em todos. Por exemplo: é possível que um amigo empurre a cadeira de rodas ou ajude a criança com deficiência física a realizar certos movimentos; que todos orientem o amigo com deficiência visual na hora em que ele está arremessando uma bola ou buscando algo; ou que alguém ajude aquele que não fala ou não se movimenta na hora de criar palavras para dar respostas.<br>
                
                Página 14<br>
                7. DESCONSTRUIR PRECONCEITOS<br>
                Fique atento(a) a manifestações de preconceito no grupo. Se isso ocorrer, encontre o melhor momento e a melhor forma de conversar sobre o assunto. Preste atenção também na sua própria atitude. Sua linguagem contribui para desconstruir ou reforçar estereótipos? Procure identificar as características mais marcantes de cada integrante do grupo.<br>
                Imagem de Bel, sendo carregada por Elmo e XXXX. Bel diz: "Brincar junto é mais legal, independentemente das características de cada um! Meninos também podem brincar de bonecas! E, meninas, de carrinho!"<br>
                
                DICAS:<br>
                • Interferir quando alguém estiver excluído da brincadeira.<br> 
                • Pontuar as manifestações discriminatórias, individualmente e no grupo.<br>
                • Quebrar preconceitos em relação à determinada deficiência ou ao gênero.<br>
                • Estabelecer parcerias entre escola, família e comunidade para um trabalho mais efetivo sobre preconceito.<br>
                
                BALÃO DE PENSAMENTO:<br>
                É muito importante que o adulto mediador também se autoavalie e supere seus preconceitos. Alguns mitos precisam ser enfrentados:<br>
                • Mito 1: Uma criança com deficiência não consegue brincar como as outras.<br>
                • Mito 2: Uma criança com deficiência pode atrapalhar o desenvolvimento das outras crianças<br>
                • Mito 3: É necessário alguém especializado para brincar com crianças com deficiência.<br>
                • Mito 4: Existem brincadeiras de meninos e brincadeiras de meninas.<br>
                Esses e outros mitos precisam ser urgentemente desconstruídos!<br>
                
                Página 15<br>
                8. VALORIZAR AS INDIVIDUALIDADES<br>
                Quais dificuldades podem ser transformadas em desafios construtivos e instigantes para todos? As crianças (inclusive com deficiência) precisam de “desafios seguros”, ou seja, tarefas que, apesar da dificuldade, sejam plenamente executáveis.<br>
                Sivan diz: "Eu uso essa cadeira de rodas porque tenho dificuldade de me locomover... Mas o meu raciocínio é veloz! Por isso, quando conheço uma brincadeira nova, rapidinho invento uma forma para participar!"<br>
                DICAS:<br>
                • Valorizar as diferenças, de modo que toda criança tenha uma contribuição importante no grupo.<br>
                • Privilegiar atividades que valorizem as capacidades (e não as dificuldades) de cada um.<br>
                • Estimular as crianças a ajudarem aquelas que têm mobilidade reduzida ou outra dificuldade.<br>
                • Criar situações para as crianças experimentarem estar uma no lugar da outra, por exemplo, com vendas, mímica, etc.<br>

                9. PROMOVER A REFLEXÃO<br>
                Ao final da brincadeira, organize momentos de diálogo para que as crianças possam compartilhar experiências e expressar sentimentos. Do que mais gostaram? Do que não gostaram? O que repetiriam? Que regras mudariam? Que outras brincadeiras sugerem? Também é importante identificar o universo imaginado pelas crianças durante a brincadeira, para retomá-lo em outras situações.<br>

                Página 16<br>
                DICAS:<br>
                • Aproveitar o contexto lúdico para estimular as crianças a observar, agrupar, classificar, orientar-se no espaço e no tempo.  Para isso, lance perguntas desafiadoras: O que está perto? O que está em cima?  O que tem mais? O que é parecido? O que é diferente? Etc.<br>
                • Relacionar as situações vividas nas brincadeiras com o cotidiano das crianças e suas histórias de vida.<br>
                • Utilizar recursos de apoio, como filmes ou histórias infantis, para aprofundar a reflexão sobre os conflitos e aprendizagens do grupo.<br>
                • Organizar momentos de escuta e avaliação depois das brincadeiras, por exemplo, rodas de conversa.<br>
                • Planejar as próximas brincadeiras junto às crianças, considerando as experiências anteriores e as novas expectativas.<br>
                
                8. SISTEMATIZAR E SOCIALIZAR A PRÁTICA<br>
                Registre num diário as práticas realizadas, apontando os desafios e as soluções encontradas. Assim, da próxima vez, você saberá como deixar as brincadeiras ainda mais interessantes. E poderá compartilhar a experiência com outros educadores. Também é interessante fazer registros com as crianças, como por exemplo, murais e cartazes com desenhos das brincadeiras realizadas. Se puder fotografá-las, melhor ainda!<br>
                Imagem de Bel que diz: "Eu gosto de desenhar a mim e aos meus amigos brincando! Assim eu fico lembrando as nossas aventuras..."<br>
                DICAS:<br>
                • Garantir um tempo para as crianças registrarem suas vivências, emoções e sentimentos.<br>
                • Utilizar os horários de planejamento pedagógico para refletir sobre o brincar inclusivo.<br>
                • Construir um mural na escola com as brincadeiras vivenciadas.<br>
                • Elaborar um portfólio com as brincadeiras do grupo, para circular entre os familiares ou responsáveis. É interessante deixar um espaço interativo para comentários e sugestões.<br>
                
                Página 17<br>
                SUGESTÕES PARA INCLUIR BRINCANDO!<br>
                1. BRINQUEDOS<br>
                Na Cesta<br>
                Um galão de água com o fundo cortado e a alça preservada torna-se uma cesta. Pinte-a para deixá-la bem colorida. Uma ou mais crianças arremessam a bola, que deve ser apanhada por quem segura o objeto (use bola com guizo para as crianças com deficiência visual). No caso de alguém com o movimento dos braços reduzido, é possível amarrar a cesta à cadeira de rodas ou ao braço, por exemplo. Um colega pode ajudar na brincadeira ao movimentar a cadeira de rodas ou a própria cesta.<br>
                Na Trilha<br>
                Este brinquedo requer um ímã, um objeto metálico e papel grosso revestido com adesivo plástico. Desenhe um caminho que ligue dois objetos afins (rato e queijo, por exemplo) e contorne-o com tinta plástica, para que fique em alto relevo. O desafio é dirigir o objeto usando o ímã por baixo do papel. Crianças com deficiência visual reconhecem o percurso ao tatear o alto relevo. Para quem tem dificuldade de mobilidade, o brinquedo pode ser afixado em algum lugar mais estável.<br>
                Cubo Surpresa* ou Caixa dos sentidos<br> 
                Confeccione um cubo com seis placas quadradas, com 32cm de lado, feitas de material de cores variadas. Dois lados do cubo apresentam aberturas redondas por onde a criança pode introduzir as mãos. No interior do cubo, encontram-se dez círculos, feitos do mesmo material da caixa, recobertos em uma das faces por materiais de diferentes texturas, formando cinco pares de texturas diferentes. Outra opção é criar pares de formas diferentes: círculos, quadrados, triângulos, retângulos, etc. O importante é incentivar as crianças a colocarem suas mãos dentro para retirarem as formas, reconhecerem seu formato, cor e textura. Depois, elas podem, agrupar, empilhar, contar, ou mesmo, criar outras figuras com as formas.<br> 
                Uma variação do brinquedo é utilizar caixas de papelão e, em vez dos círculos, depositar no seu interior, objetos do cotidiano das crianças. Neste caso, o jogador precisa tatear, ouvir ou cheirar e até adivinhar o que é. Quando houver uma pessoa com deficiência física, por exemplo, que não fale, use comunicação alternativa, como placas, pranchas ou letras móveis. Deixe o tempo de contagem flexível, pois crianças com deficiência intelectual podem levar mais tempo para brincar.<br>

                Página 18<br>
                Livro tátil<br>
                Escolha uma história. Providencie as páginas impressas em tinta e em braile, com o texto no topo ou no rodapé, deixando livre o espaço de ilustração. As crianças devem ilustrar as páginas usando materiais como tinta plástica, lixa, lã, barbante, algodão, botões... Com o tempo, você pode criar um acervo de livros táteis, que serão usados por todas as crianças, com ou sem deficiência!<br>
                Piscina de bolinhas<br>
                As crianças se sentem muito bem nesse brinquedo, pois as bolinhas coloridas e macias estimulam os sentidos e acalmam. Aquelas com deficiência física podem precisar da ajuda de um colega ou do educador para se acomodarem. Importante: nas brincadeiras em que é preciso tirar a criança da cadeira de rodas, peça sempre orientação de como fazer isso à família ou ao profissional de saúde que cuida da criança.<br>
                
                2. BRINCADEIRAS<br>
                Fui ao zoológico<br>
                Uma criança, andando na parte interna da roda, diz: “Fui ao zoológico e vi uma girafa!” ou “Fui ao zoológico e vi um elefante!”. Em seguida, aponta para uma das crianças que, junto com os colegas ao lado, precisa “criar” o animal escolhido pelo colega (elefante ou girafa).<br>
                Para formar a girafa, a criança que foi apontada estica os braços para cima, enquanto as duas ao seu lado agacham e seguram em seu tornozelo (veja a ilustração ao lado). Para formar o elefante, a criança apontada estica um dos braços para frente, enquanto as duas ao seu lado abrem os braços curvados em sua direção, imitando as orelhas do animal.<br> 
                Quem se atrapalhar na hora de criar o bicho e errar entra na roda e passa a apontar. Se houver uma criança surda, use pelúcias para que ela veja que animal foi escolhido pelo colega. Se a criança tiver movimentos reduzidos, um colega pode ajudá-la a mover os braços. No caso de haver uma criança com deficiência visual, quem aponta deve dizer o nome de quem foi apontado e todo mundo pode descrever o que está havendo, como “a Lúcia fez a orelha errada!” ou “o Caio, a Lia e a Carol fizeram a girafa bem rápido”.<br>
                
                Página 19<br>
                Hockey macio<br>
                Nesse jogo, os bastões são substituídos por macarrão utilizado em natação, pois o material é suave e macio. Use uma bola leve (com guizo, se for o caso) e improvise um gol, que pode ser um macarrão curvado fixado ao chão. No caso de criança com mobilidade reduzida, prenda o macarrão em seu braço ou na cadeira de rodas. Peça que outro jogador empurre a cadeira do colega. O jogo pode ocorrer entre equipes ou individualmente (com obstáculos a serem ultrapassados para se chegar ao gol).<br>
                Fantasias<br>
                É interessante permitir que as crianças usem e abusem do faz-de-conta. Por isso, é importante disponibilizar um acervo com máscaras, roupas, plumas, acessórios etc. Um baú com objetos cotidianos também é muito estimulante: panela, telefone, esponja, bacia, vassoura e o que mais houver disponível. As crianças também gostam muito de caixas, caixotes e tecidos, que podem estruturar casinhas ou cabanas. Deixe que as crianças criem suas narrativas, livremente. Estimule todos a observarem como o amigo com deficiência pode participar. Sua intervenção pode ser necessária para ajudar quem tem deficiência física a vestir algo ou a se movimentar, por exemplo.<br>
                
                Pintando tudo<br>
                É possível pintar grandes painéis, em papel pardo colocado no chão. Todos juntos! A tinta tem uma textura agradável e a experiência pode ser vivida também por crianças com deficiência visual. No caso de deficiência física, você pode prender o pincel na mão da criança, ou engrossar o cabo com borracha ou macarrão de natação fino. Varie o uso do pincel colocando a tinta em esponjas ou bisnagas de maionese.<br>

                Areia no pé<br>
                A areia pode ser colocada em uma bacia grande, rasa e de boca larga. As crianças devem ser desafiadas de diversas maneiras: criando formas com as mãos ou com o auxílio de objetos (como pás) ou criando caminhos e formas com os pés. Outra brincadeira é esconder objetos na areia. Posicione a criança com deficiência física sentada, de maneira confortável e segura, e estimule-a brincar.<br>
                
                Página 20<br>
                Rola-bola<br>
                Em roda, as crianças sentam-se no chão. A bola, que pode ter guizo, deve ser jogada ao amigo pelo chão (nunca pelo alto). A criança que recebe a bola deve direcioná-la a outro jogador, e assim por diante. Quanto mais rápido, mais divertido. Quando houver uma criança com deficiência física, os colegas podem ajudá-la no arremesso. Em uma variação de regra, o líder diz o nome para quem a bola deve ser rolada (use placas com nomes, caso haja surdos no grupo).<br>
                Soprar e soprar<br>
                Fazer bolinhas de sabão é uma brincadeira divertida e bastante popular. Para a criança com mobilidade reduzida, você pode segurar o arco com sabão perto de sua boca, para que ela mesma faça as bolinhas. Soprar as pequenas bolhas no ar é outra brincadeira bem divertida. Uma variação dessa brincadeira é soprar uma pena para evitar que caia no chão. Uma criança pode direcionar a cadeira de rodas para facilitar a aproximação do colega durante a atividade.<br>
                Circuito divertido<br>
                Divida as crianças em pequenos grupos e crie um circuito com diversas “estações”. Em cada uma, proponha uma atividade a ser executada em determinado tempo. Você pode oferecer brinquedos, brincadeiras ou jogos. Cada grupo brinca nas estações pelo tempo determinado. Depois, um sinal (sonoro e visual) é dado e os grupos vão para a atividade seguinte. Exemplos de estações: quebra-cabeças, jogos de encaixe, bolinha de sabão, leitura e tiro ao alvo. Nessa última brincadeira, as crianças com deficiência visual podem ser orientadas pelos amigos na hora de lançar o dardo. Crianças que não movimentam os braços podem ter a ajuda de um amigo e o alvo pode ser aproximado.<br>

                Página 21<br>
                Jogo da memória*<br>
                Ao fazer as cartelas, você pode demarcar o contorno das imagens com tinta plástica (depois que seca, ela fica em alto relevo). É possível também preencher as imagens com texturas e objetos (botões, purpurina, lixa, algodão, lã, entre outros). Além dos elementos táteis, a palavra pode ser escrita em tinta e também em braile. Como as cartas, ao ficarem viradas, podem ficar instáveis, pode-se jogar sobre uma toalha ou uma base emborrachada. No caso de crianças com dificuldade de mobilidade, é possível que o educador ou um colega vire a carta. Funciona assim: a pessoa vai apontando as cartas desde o início e, quando a criança escolhe, ela pisca ou fala. Daí, o ajudante vira a carta. Para revelar a segunda peça, o ajudante recomeça os apontamentos até a sinalização da nova carta, até se formarem os pares.<br>
                Colmeia alfabética*<br>
                A colmeia é um móvel, que pode ser feito com caixas de sapato, madeira ou papelão. Cada favo da colmeia é relativo a uma letra do alfabeto, simbolizado também em braile e/ou em Língua Brasileira de Sinais (Libras). Ali, devem ser depositados pequenos objetos que comecem com cada letra. As crianças podem também buscar imagens em revistas que, depois de recortadas, são colocadas na colmeia.<br>
                Boliche<br>
                Faça os pinos com garrafas PET, pintando-os de diferentes cores. Você pode identificá-los por meio de números feitos com borracha (tipo EVA). Para fazer peso e evitar que caiam facilmente, coloque pedrinhas nas garrafas. Use uma bola pesada. No caso de crianças com mobilidade reduzida: aproxime os pinos, reduza a quantidade deles ou utilize um cano para guiar a bola. Se houver uma criança com deficiência visual, os colegas podem ajudar, dando as coordenadas sobre a direção e a força do arremesso.<br>

                Página 22<br>
                Jogo da velha*<br>
                Faça a base em tecido felpudo e as peças com um pedaço de velcro no fundo (assim, elas não deslizarão facilmente). Crie peças em EVA ou em alto relevo (com tinta plástica). Essa técnica pode ser usada para adaptar diversos jogos de tabuleiro, como dama, xadrez ou batalha naval. Para pessoas com deficiência física, coloque alças sobre cada peça. Assim, é possível movê-las com um palito de churrasco ou com algo curvo na ponta (um clipe de papel, por exemplo).<br>
                Dominó*<br>
                Você pode criar um dominó que tenha os tradicionais pontinhos em alto-relevo (faça isso com tinta plástica ou botões, por exemplo). Em uma variação, use cores e texturas diferentes, que precisam ser combinadas (lixa, botões, purpurina, borracha...). As peças podem, ainda, conter os números em braile (as crianças sem deficiência também podem aprender o alfabeto desse código) ou apenas figuras coloridas, que chamam a atenção de crianças com deficiência intelectual e permitem a participação de quem ainda está aprendendo as letras e os números. Usando essas mesmas dicas, você pode fazer um super dominó, com caixas de leite longa vida ou de sabão em pó (o tamanho ajuda quem tem baixa visão).<br>
                Dado de histórias<br>
                Confeccione dados grandes, feitos de papelão. Em cada face, coloque desenhos em alto relevo (e o nome escrito e em braile) das imagens. Cada dado pode ter um tipo de informação em suas faces: animais, verbos, objetos, pessoas, adjetivos, lugares... Quando a criança lança o dado, precisa inventar na hora uma história que contenha o objeto descrito. A complexidade das histórias aumenta se dois ou mais dados forem combinados. Outra opção é a criança dar continuidade à narrativa daquela que lançou o dado anteriormente, criando uma história coletiva. Ou permitir que elas utilizem outros objetos para aprofundar a narrativa, que podem estar guardados dentro de um baú.<br> 
                
                Página 23<br>
                Frutíferas*<br>
                Confeccione uma prancheta de madeira, revestida na parte superior com material emborrachado, leve e macio, de cor amarela. Faça três cavidades no material emborrachado, onde se encaixam três figuras de árvores (de formas iguais, mas de tamanhos diferentes). Nas figuras também estão recortados pequenos círculos de cor laranja, com textura diferente da árvore: cinco círculos na árvore maior, quatro na média e três na pequena. Esses círculos imitam frutas e têm tamanhos variados, de acordo com a árvore onde ficam. As árvores, quando encaixadas, ficam em relevo. É importante incentivar as crianças a manusearem as frutas e as árvores, identificando tronco, copa e raízes. Algumas variações da brincadeira são: pedir que as crianças agrupem os frutos por cor, que identifiquem qual árvore está do lado da outra, que ordenem as árvores de acordo com a sua grandeza (pequena, grande e média), que identifiquem qual árvore têm mais ou menos frutos, que criem novos elementos para o jogo com massinha. Faça comentários sobre as árvores em geral e as frutas e, se possível, leve o grupo a um local para observar frutas, árvores e arbustos verdadeiros, para que possam conhecer seus elementos e os animais que vivem naquele meio. Aproveite a oportunidade para conversar sobre a importância da preservação ambiental e alimentação sustentável!<br>
                Quebra-cabeça maluco<br>
                Recorte figuras de pessoas e de animais, cole em papelão e encape com adesivo plástico, para dar maior resistência às peças. Depois, recorte diferentes partes (como braços, pernas, cabeça) e cole pequenos pedaços de velcro nas extremidades. As crianças poderão montar as figuras originais e também inventar bichos e pessoas esquisitos, combinando peças de figuras diferentes. Para crianças com deficiência visual, use nas figuras tinta plástica e elementos como lã, barbante e algodão.<br>
                *Esses jogos e brinquedos foram sugeridos a partir do livro “Brincar para Todos”:<br>
                SIAULYS, Mara O. de Campos. Brincar para Todos. Ministério da Educação, Secretaria de Educação Especial, Brasília: 2005. Disponível em: <a href=" http://portal.mec.gov.br/seesp/arquivos/pdf/brincartodos.pdf" title=""> http://portal.mec.gov.br/seesp/arquivos/pdf/brincartodos.pdf</a>.<br> 
                Acesse a publicação na íntegra para conhecer muitas outras possibilidades de incluir brincando!<br>
               </p>
              </li>
            </ul>
          </div>
          <!--txt-->
        </div>
        <!--container-campanha-->
     
           
</div>
<!--/content--> 
</section>
<!--paginacao-->
<?php //include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,  'pager'=>$pager , 'pager2'=>$pager2, 'parent'=>$parent)) ?>
<!--/paginacao-->
</div>
