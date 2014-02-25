<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/institucional.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
      //carrossel
      $(function(){
        $('.carrossel').jcarousel({ 
        wrap: "both"      
        });
      
        //hover states on the static widgets
        $('#dialog_link, ul#icons li').hover(
          function() { $(this).addClass('ui-state-hover'); }, 
          function() { $(this).removeClass('ui-state-hover'); }
        );
      

        $('a[id*="tab-"]').hover(function(){
          $(this + ':first-chid.ponta').css("display","block");
        });
      
        $('a[id*="tab-"]').click(function(){
            //tornando o botao ativo
            $('span').removeClass('ativo');
            $('span').addClass('desativado');
            $('a[id*="tab-"]').removeClass('ativo');
            
            $(this).addClass('ativo');
            $(this).children('span').addClass('ativo');
            $(this).children('span').removeClass('desativado');
            //$('.'+ $(this).attr("name")).addClass('ativo');
            
            //faz sumir e aparecer conteudos
            $('div[id*="cont-"]').hide();
            
            var conteudo = "#cont-" + $(this).attr("name");
            $(conteudo).fadeIn('fast');
            
       });
       
       $('dt a').click(function(){
          $(this).parent().next().toggle();
       });
     
     });
</script>
<!--body Wrapper-->
<div id="bodyWrapper" >
 
  <!--Conteudo Wrapper-->
  <div class="conteudoWrapper" align="center">
    
    <!--TOPO TVRTB-->
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    <!--TOPO TVRTB-->
    
    <!--Conteudo-->
    <div class="conteudo internas">

      <!--Esquerda-->
      <div class="colunaMaior">
        
        <!--Trilha-->
        <div class="trilha">
            <a href="http://tvratimbum.cmais.com.br/" title="Tv Ra Tim Bum" target="_self">TV R&aacute; Tim Bum</a><span>&gt;&gt;<span>&gt;&gt;</span><a href="#">Conheça a TV Ra Tim Bum</a>
        </div>
        <!--Trilha-->
          
          <!--box-institucional-->
          <div id="box-institucional-home">
            
              <!--box-wrapper-->
              <div class="wrapper">
                
                <!--topo-esq-->
                <div class="topo-esq"></div>
                <!--topo-esq-->
                
                <!--topo-->
                <div class="topo">
                  <a class="enunciado" href="">Conheca a tv ra tim bum</a>
                </div>
                <!--topo-->
                
                <!--explicacao-->
                <div class="explicacao">
                  <img src="http://cmais.com.br/portal/tvratimbum/image/institucional.jpg" alt="" />
                  <p>Caro visitante,</p>
                  <p>Esta &aacute;rea traz informa&ccedil;&otilde;es institucionais da <span class="bold">Funda&ccedil;&atilde;o Padre Anchieta</span>, mantenedora do canal <span class="bold">TV R&aacute; Tim Bum</span>. Nossos objetivos, valores e hist&oacute;ria est&atilde;o dispon&iacute;veis para que voc&ecirc; conhe&ccedil;a um pouco mais do nosso canal, que &eacute; um marco na hist&oacute;ria da TV brasileira.</p>
                  <?php include_partial_from_folder('blocks','global/visite-cmais', array('uri' => $uri)) ?>
                </div>
                <!--explicacao-->
                
                <!--especial-info-->                
                <div class="box-especial-info">
                  
                  <!--menu-especial-info--> 
                  <div class="menu-especial-info">
                    <ul>
                      <li><a href="javascript:;" id="tab-historia" name="historia" class="historia ativo">Hist&oacute;ria<span class="ponta ativo"></span></a></li>
                      <li><a href="javascript:;" id="tab-publico"  name="publico" class="publico">P&uacute;blico alvo<span class="ponta desativado"></span></a></li>
                      <li><a href="javascript:;" id="tab-identidade" name="identidade" class="identidade">Identidade<span class="ponta desativado"></span></a></li>
                      <li><a href="javascript:;" id="tab-educacao" name="educacao" class="educacao">Educa&ccedil;&atilde;o e divers&atilde;o<span class="ponta desativado"></span></a></li>
                    </ul>
                  </div>
                  <!--menu-especial-info--> 
                  
                  <!--box-instrucoes--> 
                  <div class="box-instrucoes">
                    
                    <!--#tab_1-->
                    <div id="cont-historia" name="historia">
                      <img src="http://cmais.com.br/portal/tvratimbum/image/logo-fundacao.png" alt="" />
                      <p>A id&eacute;ia de criar um canal infantil brasileiro de TV por assinatura surgiu e se desenvolveu na <span class="bold">Funda&ccedil;&atilde;o Padre Anchieta</span>, a mantenedora da <span class="bold">TV Cultura</span> e das <span class="bold">R&aacute;dios Cultura AM</span> e <span class="bold">FM</span></p>
                      <p>Em 12 de dezembro de 2004, a <span class="bold">TV R&aacute; Tim Bum</span> entrou no ar pela primeira vez. O canal rapidamente se transformou em uma plataforma de lan&ccedil;o para novos conte&uacute;dos infantis, estimulando a produ&ccedil;&atilde;o nacional, formatando parcerias com criadores e produtores independentes e trazendo para a crian&ccedil;a brasileira uma programa&ccedil;&atilde;o com a sua linguagem.</p>
                      <p>Toda programa&ccedil;o infantil da <span class="bold">TV R&aacute; Tim Bum</span> &eacute; produzida sob a supervis&atilde;o de profissionais ligados &agrave; educa&ccedil;&atilde;o infantil, com pedagogos e psic&oacute;s. A preocupa&ccedil;&atilde;o com a abordagem de temas importantes ao desenvolvimento, como relacionamento social, alfabetiza&ccedil;o, sa&uacute;de, higiene, artes e diversidade cultural, &eacute; constante em todo o processo de produ&ccedil;&atilde;o.</p>
                      <p class="tit">Nossos objetivos:</p>
                      <ul>
                        <li>Defesa do entretenimento saud&aacute;vel e enriquecedor, que demonstre respeito &agrave; intelig&ecirc;a e &agrave; sensibilidade das crian&ccedil;as;</li>
                        <li>Defesa dos direitos humanos e da informa&ccedil;&atilde;o como instrumento de cidadania;</li>
                        <li>Valoriza&ccedil;&atilde;o dos programas como complemento &agrave; a&ccedil;&atilde;o educadora da escola e formadora da fam&iacute;lia;</li>
                        <li>Valoriza&ccedil;&atilde;o da an&aacute;lise e do esp&iacute;rito cr&iacute;tico e questionador como forma de estimular a busca de conhecimento e informa&ccedil;&atilde;o;</li>
                        <li>A defesa da pluralidade, da diversidade e direitos das minorias, valorizando-se as culturas regionais e a identidade nacional. A <span class="bold">TV R&aacute; Tim Bum</span> contribui para o fomento da produ&ccedil;&atilde;o brasileira de qualidade, inclusive por meio de a&ccedil;&otilde;es de parcerias entre a <span class="bold">Funda&ccedil;&atilde;o Padre Anchieta</span>, outras TVs Educativas do Brasil e produtores independentes;</li>
                        <li>Valoriza&ccedil;&atilde;o da criatividade e inova&ccedil;&atilde;o na produ&ccedil;&atilde;o de programas educativos e culturais.</li>
                      </ul>
                    </div>
                    <!--#tab_1-->
                    
                    <!--#tab_2-->
                    <div id="cont-publico" name="publico" style="display:none">
                      <p class="bold">Faixa Etária</p> 
                      <p>Nossos programas atendem as necessidades e os interesses de crianças de 02 a 10 anos de idade, buscando atender exatamente o período de transição desse público. De 0 a 3 anos, de 4 a 6 e maiores de 7 anos de idade.</p> 
                      
                      <p class="bold">Conceito de programação</p>
                      <p>A TV Rá Tim Bum! é a voz e a imagem da criança brasileira. Apresentamos diversos temas que cabem no universo infantil pela perspectiva cultural brasileira. Desenhos animados, show de bonecos, musicais, teatro, reportagens culturais, esportes, entrevistas e documentários infantis que revelem personagens, momentos históricos e caracterização da nossa sociedade. Lendas, mitos, folclore, canções e cantigas que traduzam uma cultura tão rica e diversa.</p> 
                      <p>E mais, temas e assuntos inerentes a qualquer fase da infância: aventura, educação, compartilhar, higiene, saúde, consumo consciente, igualdade de sexo, olhar para o mundo livre de preconceito.</p> 

                    </div>
                    <!--#tab_1-->
                    
                    <!--#tab_3-->
                    <div id="cont-identidade" name="identidade" style="display:none">
                      <p  class="bold">"A TV que cresce com você!"</p>
                      <p>Em 2012 a TV Rá Tim Bum! está mudando a sua cara em busca de se conectar cada vez mais com a criança brasileira. A programação continua apresentando o melhor da produção infantil nacional em desenhos, teatro, musicais e programas especiais. Mas tudo isso dentro de uma nova atitude, que quer celebrar a criança que existe em cada um. Por isso buscamos nossas referências em um símbolo muito simples, que inspira diversão para qualquer criança: a bolha de sabão.</p>
                      <p>Na bolha de sabão encontramos o espectro de todas as cores do mundo, e é assim que a TV RÁ TIM BUM! pretende se comunicar com seu telespectador. Apresentando uma gama variada de programas que tragam diversão e todo tipo de informação. Imaginação, criatividade, risadas, brincadeiras, aprendizado, curiosidade, raciocínio e experimentação são palavras que norteiam nosso trabalho.</p> 
                      <p>O canal procura transmitir conteúdos que traduzam o ponto de vista da garotada, gerando reflexão e descobertas. Além dos programas inéditos, os clássicos da TV Cultura são reapresentados em horários especiais, em faixas voltadas para pais e filhos. Essas faixas tem o intuito de conectar a família em torno de uma memória audiovisual que marcou o passado e que é compartilhada no presente.</p> 

                    </div>
                    <!--#tab_3-->
                    
                    <!--#tab_4-->
                    <div id="cont-educacao" name="educacao" style="display:none">
                      <p  class="bold">Faixas de programação</p>
                      <p>Com novos direcionamentos de conteúdo e posicionamento, a TV RÁ TIM BUM! também estará exibindo sua programação 
                        dentro de novas faixas de conteúdo. A ideia é criar um diálogo com a audiência, posicionando os programas dentro 
                        de faixas que compactuem o melhor de desenhos, séries e outros formatos.<br/> 
                      Toda essa nova embalagem será sempre apresentada pela voz do canal, que atua como uma companhia para a criança.
                         O narrador vai apresentar as faixas, falar dos programas e estar junto com o telespectador dando dicas, propondo
                          brincadeiras vocais e chamando a programação de uma forma direta e pessoal, não só como uma locução informativa
                           mas no formato de dialogo.<br/>
                      As novas faixas de programação são as seguintes:</p>
                      
                      <dl>
                        <dt><a href="javascript:;">Hora de História</a></dt>
                        <dd style="display:none;" class="text-educ">
                          <p>Reúna a garotada para brincar, aprender e conhecer histórias do mundo
                           todo na Hora de História.<br/> 
                          Vila Sésamo, Glub Glub, Lá vem História, Baú de Histórias e Rá-Tim-Bum, tornam essa faixa da programação
                       divertida e estimulam diferentes experiências de exploração da comunicação.  São séries e animações que 
                       incentivam as práticas da linguagem oral, a apreciação da linguagem escrita e a aquisição de um repertório literário.</p>
                       </dd> 
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "Quintal da Cultura</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <p>O palhaços mais brincalhões da televisão reuniram seus programas
                           favoritos em uma faixa cheia de animação.<br/>
                          Na programação comandada pela turma do "Quintal da Cultura", as crianças brincam, cantam e se divertem enquanto
                          assistem aos episódios de Simão e Bartolomeu, Kiara e os Luminitos, Cocoricó, Os Ecoturistinhas,
                          Tchibum TV,  Isso Disso, Anabel, Traçando Arte, Sidney, Escola pra Cachorro e A Mansão Maluca do Prof. Ambrósio.<br/> 
                          Um verdadeiro passeio por diferentes áreas do conhecimento, proporcionando a exploração do mundo a partir do universo
                          infantil. Com uma linguagem direta e divertida, "Quintal da Cultura" convida a criança a aprender sobre o lugar em 
                          que vive, conhecer diferentes culturas ou simplesmente voar com a imaginação.</p>
                       </dd> 
                      </dl> 
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "Aventuras em Série"</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <p>Os aventureiros de plantão ganharam uma programação feita especialmente
                           para eles.<br/>
                          "Aventuras em Série" reúne programas como T.R.EX.C.I, Cocoricó na Cidade, Nilba e os Desastronautas,
                           Castelo Rá Tim Bum, Física Divertida, Tchibum TV, O Papel das Histórias e muitas outras séries e animações que 
                           estimulam e relacionam as experiências de exploração do ambiente físico e social, promovendo a observação de 
                           fenômenos naturais e de manifestações culturais presentes no dia-a-dia das crianças.<br/>
                          "Aventuras em Série" propõe o entretenimento por meio de temas que fazem parte das expectativas de aprendizagem
                           da faixa etária ente 3 e 10 anos.</p>
                        </dd>
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "Hora Animada"</a></dt>
                        <dd style="display:none;"  class="text-educ">- Sorrir, questionar, participar. 
                          <p>A "Hora Animada" da TV Rá Tim Bum! transporta as crianças para um universo curioso, 
                          interativo e muito divertido. A programação traz as aventuras de Cocoricó, Anabel e Escola pra Cachorro;
                           as descobertas de O que vou ser quando crescer? e Traçando Arte.<br/>
                          São programas que incentivam as experiências de exploração da expressividade oral,
                           musical e visual da criança, convidando-a a interagir com parceiros em brincadeiras, 
                           encenar histórias, além de perceber e expressar sensações a partir da apreciação de obras de arte.</p>
                        </dd>
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "É hora, é hora, é hora de Rá Tim bum!" </a></dt>
                        <dd style="display:none;"  class="text-educ">Chega de saudade!
                          <p>Os programas que participaram da infância de muitas gerações estão de volta em "É hora, é hora, é hora de Rá Tim Bum!".
                           Clássicos como Rá Tim Bum, Mundo da Lua e X-Tudo continuam estimulando a curiosidade e a criatividade da garotada.<br/> 
                          Nesta seleção não poderiam faltar Nino e seus encantadores amigos do Castelo Rá Tim Bum. Uma programação divertida
                           e irresistível para crianças de todas as idades.</p>
                        </dd>
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "Quintal da Cultura Especial"</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <p>Toda a diversão do Quintal da Cultura fica ainda mais especial aos finais de semana.<br/>
                          Ludovico, Filomena e a turma do Quintal esperam a criançada para curtir as maratonas de seus programas favoritos. 
                           No "Quintal da Cultura Especial" é possível assistir a diversos episódios seguidos de programas como Cocoricó,
                           Traçando Arte, Nilba e os Desastronautas e a Mansão Maluca do Professor Ambrósio.</p>
                        </dd>
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "Mistureba" </a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <p>Junte muita diversão com bastante imaginação, fantasia e uma pitada de mistério.<br/>
                           Acrescente brincadeiras, curiosidades e uma porção generosa de aventura.<br/>
                           <p>O resultado é uma irresistível "Mistureba" que promete temperar os finais de semana com atrações,
                            como: Baú de Histórias, Teatro Rá Tim Bum, Juro que Vi, 1,2,3 Agora é Sua Vez, Simão e Bartolomeu e Glub Glub.</p>

                        </dd>
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >Faixa "Laboratório Rá Tim Bum!" </a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <p>Como as coisas funcionam? Pra que serve isso? Por que acontece aquilo?<br/>
                          As dúvidas dos pequenos não param de se multiplicar. Ainda bem que o "Laboratório Rá Tim Bum!"
                          está de portas abertas para quem quer descobrir, aprender e experimentar. Aqui as crianças exploram
                           o mundo das ciências e encontram respostas para perguntas curiosas com a ajuda de programas como:<br/> 
                           Os Detetives da Ciência, Física Divertida, Isso Disso, T.R.EX.C.I, Dr. Raio X, Kiara e os Luminitos
                            e Pequenos Cientistas.<br/>
                            "Laboratório Rá Tim Bum!" promove um olhar diferenciado sobre os objetos do cotidiano e fenômenos
                            da natureza presentes no universo de toda criança.<br/>
                            O objetivo é deixar a criança interessada em criar hipóteses para explicar como as
                             coisas se comportam e se transformam.</p>
                        </dd>
                      </dl>
                      
                      <p>Além das faixas fixas, o "Cine Rá Tim Bum!" (sábados, às 14h) entra com atrações especiais na programação.</p>
                      <!--p class="bold">Estreias do ano</p> 
                      <p>Para 2012 novas temporadas de séries de animação já estão em produção:</p>
                      
                      <dl>
                        <dt><a href="javascript:;" >TRE.XC.I (2º temporada)</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <img src="http://cmais.com.br/portal/tvratimbum/image/imagem-estreia-trexci.jpg" alt="TRE.XC.I (2º temporada)" />
                          <p>na primeira temporada o robozinho TRE.XC.I chega na Terra para investigar o planeta, conhecer a natureza, tecnologia e coisas que cercam a vida humana.<br/>
                          Na segunda temporada, ele vai explorar complexos e profundos temas: os próprios sentimentos humanos!<br/>
                          Serão 13 novos episódios!</p>
                        </dd>
                      </dl>
                      
                      <dl>
                        <dt><a href="javascript:;" >TRE.XC.I 60 Segundos de História</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <p>no formato de pílulas de 1 minuto para a programação comercial, TER.XC.I vai explorar as imagens de arquivo da TV Cultura e trazer algumas curiosidades histórias sobre o Brasil para a programação.</p>
                        </dd>
                      </dl>  

                      <dl>
                        <dt><a href="javascript:;" >Traçando Arte (2º temporada)</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <img src="http://cmais.com.br/portal/tvratimbum/image/imagem-estreia-tracando-arte.jpg" alt="Traçando Arte (2º temporada)" />
                          <p>Jean Pierre e Trácio conquistaram o público na primeira temporada da série apresentando alguns dos principais artistas brasileiros da pintura. Agora é a vez de apresentar os artistas que formaram escolas artísticas e influenciam a arte até hoje.<br/>
                          Na segunda temporada, com 13 novos episódios, Jean e Trácio vão trazer os grandes mestres da pintura internacional.</p>           
                        </dd>
                      </dl>  
                    
                      <dl>
                        <dt><a href="javascript:;" >Dr. Raio X (2º temporada)</a></dt>
                        <dd style="display:none;"  class="text-educ">
                          <img src="http://cmais.com.br/portal/tvratimbum/image/imagem-estreia-dr-raiox.jpg" alt="Dr. Raio X (2º temporada)" />
                          <p>Quem nunca se perguntou da onde vem o suor, ou a lágrima, ou o chulé?<br/>
                          Na segunda temporada de Dr. Raio X cada episódio vai trazer de uma forma muito divertida histórias sobre as coisas que saem do nosso corpo.</p>           
                        </dd>
                      </dl-->                        
                    
                      <p class="bold">Conteúdo transmedia</p>
                      <p>Cada vez mais o conteúdo produzido para a televisão se expande em outras plataformas de comunicação e tecnologia. Não só para satisfazer o desejo de interação do público com o próprio conteúdo, mas para satisfazer a própria necessidade de interatividade que alguns conteúdos oferecem.<br/>
                      Nossos programas se desdobram em games; aplicativos para web e móbile; pílulas (ou programetes) a serviço de outras gamas temáticas (personagens consagrados falando sobre meio ambiente, história, saúde...); portal web com interatividade através de fotologs, redes sociais, murais de recado; apresentações ao vivo (teatro, esquetes e eventos especiais); livros;  DVDS; outros produtos e outros desdobramentos.<br/>
                      Ligados nas rápidas transformações tecnológicas também estamos trabalhando para disponibilizar nossos conteúdos para VOD (video on demand), onde o telespectador poderá escolher sua programação; conteúdos exclusivos via web e celular, além de E-commerce das propriedades licenciadas no canal.</p> 

                    </div>
                    <!--#tab_4-->
                    
                  </div>
                  <!--box-instrucoes--> 
                  
                </div>
                <!--especial info-->
                <hr />
                <span class="picote"></span>
              </div>
              <!--box-wrapper-->
              
            </div>
            <!--box-institucional-->
             
      </div>
      <!--Esquerda-->
      
      <!--Direita-->
      <div class="coluna">
        
          <!--se liga-->
          <div class="galeriaVideos seLiga">
            
            <div class="enunciado">
              <span class="ico-seLiga"></span>
              <h2>Se Liga!</h2>
            </div>
            
            <span class="alcaA"></span>
            <span class="alcaB"></span>
            
            <div class="seLiga-box">
              <span class="top"></span>
              <div class="propaganda">
                <a href="http://www.facebook.com/ratimbum" title="fanpage" target="_blank">
                  <img src="http://cmais.com.br/portal/tvratimbum/image/fanpagetvrtb.jpg" alt="propaganda" />
                </a>
              </div>
              <span class="bottom"></span>
            </div>
            
          </div>
          <!--/se liga-->
          
          <hr />

          <!-- para os pais -->
          <?php if(isset($displays["para-os-pais"])) include_partial_from_folder('tvratimbum','global/display-1c-paraospais') ?>
          <!--/para os pais -->

              
        </div>
        <!--Direita-->
        <hr />
            <!--div id="voceSabia">
              <span class="galho"></span>
              <h3>Voc&ecirc; Sabia<span></span></h3>
              <p>Escolhendo brinquedos com pouca embalagem voce ajuda o planeta, pois produz menos lixo.</p>
              <p class="exclamacao">Fa&ccedil;a sua parte!</p>
              <img alt="mundo" src="http://cmais.com.br/portal/tvratimbum/image/ex-24.png"><!--tamanho maximo da imagem: 125x130>
            
            </div-->
      </div>
      <!--Direita-->
      
    
    
    <!--Rodape-->
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <!--Rodape-->
    <hr />
  </div>
  <!--Conteudo Wrapper-->
  
</div>
<!--body Wrapper-->
