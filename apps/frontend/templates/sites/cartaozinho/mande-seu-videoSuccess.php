<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cartaozinho/geral.css" type="text/css" />
    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
  
  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site">
    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php elseif(isset($site) && $site->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <h3 class="tit-pagina grid1"><?php echo $site->getTitle() ?></h3>
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
              <div class="contato grid2 video">

                <h3 class="tit-pagina grid2">Entre em campo no cartãozinho: mande seu vídeo!</h3>  
                <p style="margin: 0 10px 20px;">Você bate um bolão? É o rei das embaixadinhas? Inventou um drible imbatível? Quer fazer uma pergunta para nós? Ou tem um comentário sobre o último jogo da rodada? Não importa se o seu negócio é ser cartola, comentarista ou líder de torcida, grave seu vídeo e mande para o Cartãozinho! Você pode entrar em campo e aparecer no nosso programa! Envie seu vídeo, preencha o formulário abaixo e participe!</p>

                  <div class="msgErro" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Sua mensagem não pode ser enviada.</p>
                      <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgAcerto" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                    </div>
                    <hr />
                  </div>
                <form id="form-contato" method="post" action="http://app.cmais.com.br/index.php/tvcultura/cartaozinho/mande-seu-video">
                  
                  <fieldset>
                    <legend><h1><b>Primeiro passo:</b> Envie seu vídeo</h1></legend><br><br>
                    <p>Utilize a ferramenta abaixo para enviar seu vídeo.</p>
                    <p>IMPORTANTE: Coloque o seu nome completo como título do vídeo!</p>
                    
                    <script type="text/javascript" src="https://cartaozinhoupload.appspot.com/js/ytd-embed.js"></script>
                    <script type="text/javascript">
                    var ytdInitFunction = function() {
                      var ytd = new Ytd();
                      ytd.setAssignmentId("5655612935372800");
                      ytd.setCallToAction("callToActionId-5655612935372800");
                      var containerWidth = 620;
                      var containerHeight = 550;
                      ytd.setYtdContainer("ytdContainer-5655612935372800", containerWidth, containerHeight);
                      ytd.ready();
                    };
                    if (window.addEventListener) {
                      window.addEventListener("load", ytdInitFunction, false);
                    } else if (window.attachEvent) {
                      window.attachEvent("onload", ytdInitFunction);
                    }
                    </script>
                    <a id="callToActionId-5655612935372800" href="javascript:void(0);" style="text-decoration:none;clear:both; float:left; background-color: yellow; padding: 5px;margin-bottom: 20px;">
                      <span id="enviar">Fazer upload</span>
                    </a>
                    <div id="ytdContainer-5655612935372800"></div><p>
                    <legend><h1><b>Segundo passo:</b> Informe seus dados</h1></legend>
                    <br>
                  </fieldset>
                  
                  <div class="linha t3">
                    <label>nome da crianca</label>
                    <input type="text" name="nome_crianca" id="nome_crianca" />
                  </div>
                  <div class="linha t3">
                    <label>nome dos pais ou responsável legal</label>
                    <input type="text" name="nome_resp" id="nome_resp" />
                  </div> 
                 <div class="linha t1">
                    <label>cidade</label>
                    <input type="text" name="cidade" id="cidade" />
                  </div>
                  <div class="linha t2">
                    <label>estado</label>
                    <br />
                    <select class="estado required" id="estado">
                      <option value="" selected="selected">--</option>
                      <option value="Acre">AC</option>
                      <option value="Alagoas">AL</option>
                      <option value="Amazonas">AM</option>
                      <option value="Amap&aacute;">AP</option>
                      <option value="Bahia">BA</option>
                      <option value="Cear&aacute;">CE</option>
                      <option value="Distrito Federal">DF</option>
                      <option value="Espirito Santo">ES</option>
                      <option value="Goi&aacute;s">GO</option>
                      <option value="Maranh&atilde;o">MA</option>
                      <option value="Minas Gerais">MG</option>
                      <option value="Mato Grosso do Sul">MS</option>
                      <option value="Mato Grosso">MT</option>
                      <option value="Par&aacute;">PA</option>
                      <option value="Para&iacute;ba">PB</option>
                      <option value="Pernambuco">PE</option>
                      <option value="Piau&iacute;">PI</option>
                      <option value="Paran&aacute;">PR</option>
                      <option value="Rio de Janeiro">RJ</option>
                      <option value="Rio Grande do Norte">RN</option>
                      <option value="Rond&ocirc;nia">RO</option>
                      <option value="Roraima">RR</option>
                      <option value="Rio Grande do Sul">RS</option>
                      <option value="Santa Catarina">SC</option>
                      <option value="Sergipe">SE</option>
                      <option value="S&atilde;o Paulo">SP</option>
                      <option value="Tocantins">TO</option>
                  </select>
                  </div>
                  <div class="linha t3">
                    <label>email</label>
                    <input type="text" name="email" id="email" />
                  </div>
                  <div class="linha t3">
                  
                  </div>
                  
                  <!--
                  <div class="linha t3">
                    <label>url do vídeo</label>
                    <input type="text" name="url" id="url" />
                    <p class="txt-10" style="float:left; margin:0 0 0 5px;">Ex: http://youtu.be/fg1_i8bpZ9c</p>  
                  </div>
                  -->
                  
                  <div class="linha t3">
                      <label>Regulamento</label>
                      <div class="regulamento">

                        <ul>
                      <li><p class="bold">1. Participação:</p>
                        <p>Esta é uma ação de caráter exclusivamente cultural que visa estimular a interação do participante com o programa de televisão Cartãozinho Verde, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. Esta ação destina-se ao público em geral, sem qualquer limitação, e está devidamente regulada conforme às disposições do Código Civil (10.406/02) e Lei de Direitos Autorais (9.610/98).</p>
                        <p>Para participar, o interessado deve enviar o vídeo (ou mais de um vídeo) relacionado à temática solicitada que será definida no site cmais.com.br/cartaozinho. O vídeo deve ser baixado para inserção no site <a href="cmais.com.br/cartaozinho/mande-seu-video" title="cmais.com.br/cartaozinho/mande-seu-video">cmais.com.br/cartaozinho/mande-seu-video</a> à partir do dia 12/11/2012.</p>
                        <p>1.1 O vídeo deverá ser enviado acompanhado dos dados pessoais do participante, utilizando o formulário da página. Caso o participante seja menor de 18 (dezoito) anos deverá necessariamente ter autorização dos seus pais ou responsáveis, bem como preencher os dados dos seus representantes legais.</p>
                        <p>1.2. A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas não se responsabiliza por eventuais falhas causadas no envio do material.</p>
                        <p>1.3. Ao encaminhar o vídeo, o participante e seus representantes legais declaram ter lido, compreendido e concordado em cumprir com estes termos. Será do participante única e exclusivamente a responsabilidade sobre todo conteúdo encaminhado, sendo que seus responsáveis legais responderão solidariamente, e ainda, tanto o participante, como seus representantes legais, deverão eximir quaisquer terceiros e a Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas sobre eventuais transtornos ou danos causados e/ou pela conduta do participante e ou conteúdo disponibilizado.</p>
                      </li>
                      <li><p class="bold">2. Critérios de Seleção:</p>
                        <p>2.1 A seleção dos vídeos será feita por uma equipe de produção, composta pelo diretor e assistente de produção, baseada na observação dos seguintes critérios e pela ordem: originalidade e adequação ao tema. Serão selecionados diversos vídeos, segundo os mencionados critérios, que atenderem os padrões de qualidade das emissoras da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas.</p> 
                        <p>2.2 Serão desconsiderados os vídeos com dados incorretos e de menores sem autorização dos seus responsáveis legais; os que fujam da temática descrita; que não sejam de autoria própria; que desrespeitem as leis relacionadas a direitos autorais ou direitos de personalidade e que tenham conteúdo inadequado.</p> 
                        <p>2.3. As inscrições que não estiverem de acordo com as condições deste Regulamento, quando identificadas, também serão invalidadas imediatamente.</p>                                         
                        <p>2.4. Serão automaticamente excluídos os participantes que tentarem fraudar ou burlar as regras estabelecidas neste regulamento ou ainda que não cederem os direitos previstos na Cláusula 3.1 abaixo. </p>
                      </li>
                      <li><p class="bold">3. Considerações Gerais:</p>
                        <p>3.1 Os participantes maiores e menores (representados por seus pais ou responsáveis legais quando menores), declaram, desde já, serem de sua única e exclusiva autoria os vídeos encaminhados ao site do programa e que os mesmos não constituem plágio de espécie alguma, ao mesmo tempo em que cedem e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo no Brasil e/ou Exterior sem quaisquer limitações, de forma plena e total, todos os direitos autorais, conexos e personalíssimos sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado, tanto no Brasil, como para o Exterior.</p>
                        <p>3.2 A Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas não aceitará qualquer vídeo que contenha imagens que exponham as pessoas a situações vexatórias, incitem ao preconceito, violência, contenham apelo sexual ou ao consumismo exacerbado.</p> 
                        <p>3.3. O vídeo deve ter o tempo máximo de 1 (um) minuto de duração. O autor do vídeo declara que o conteúdo gravado é dotado de caráter de originalidade, não constuindo em ofensa a direitos de terceiros, pelo que também se responsabiliza pela obtenção das necessárias autorizações ou licença de utilização de imagem e som de voz das pessoas eventualmente retratadas nas reproduções, bem como pelos instrumentos de licença de direitos autorais relativos a eventuais obras de arte, trilhas sonoras, eventuais marcas ou elementos protegidos por propriedade intelectual ou qualquer violação de direitos autorais e imagens de terceiros retratados.</p>
                        <p>3.4 Eventuais críticas e/ou sátiras relacionadas a eventos públicos de entretenimento não terão conteúdo ofensivo ou depreciativo e serão admitidas, a único e exclusivo critério da Fundação Padre Anchieta, nos estritos limites do exercício de tais direitos, nos termos do artigo 48 da Lei de Direitos Autorais, respeitados a honra, a imagem e os direitos de personalidade de terceiros envolvidos. Se a Fundação Padre Anchieta tiver qualquer restrição a tal conteúdo poderá desclassificar a participação de tal vídeo, a seu livre e exclusivo critério, sem qualquer reclamação do participante.</p>
                        <p>3.5 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela equipe de produção referida no item 2.1 deste Regulamento.</p>
                        <p>3.6 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento. Os vídeos recebidos não serão devolvidos e poderão permanecer arquivados pela Promotora.</p>
                        <p>3.7 Os vídeos poderão, a exclusivo critério da FPA, serem exibidos no canal de televisão aberto intitulado TV Cultura de São Paulo e demais emissoras afiliadas/licenciadas, no canal de televisão fechado denominado TV Rá Tim Bum, bem como nas Rádios Cultura AM/FM, para exibição no Brasil e no exterior, e também poderão ser publicados no site <a href="cmais.com.br/cartaozinho" title="cmais.com.br/cartaozinho">cmais.com.br/cartaozinho</a>.</p>                                                   
                        <p>3.8. A ação objeto do presente regulamento poderá ser encerrada a qualquer tempo, a único e exclusivo critério da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, desobrigando a mesma de exibir os vídeos escolhidos nesta hipótese.</p>
                        <p>3.9. A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas terá o direito de editar e alterar o vídeo encaminhado pelo Participante que, com o aceite do presente Regulamento, consente com referida edição. A edição será feita visando adequar aos critérios de exigência do tema e aos padrões de qualidade da programação da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas.</p>                      
                        <p>3.10 O Conteúdo a ser encaminhado pelo participante em audiovisual não poderá:</p>
                        <ul>
                          <li>(i) - Infringir e ou violar direitos de terceiros;</li>
                          <li>(ii) - conter qualquer disposição que viole Leis, Estatutos, Normas, Portarias;</li>
                          <li>(iii) - incitar práticas de crimes e ou contravenções penais;</li>
                          <li>(iv) - promover atividades ilegais;</li>
                          <li>(v) - conter fatos caluniosos, difamatórios, ameaçadores, abusivos, violentos, mal-intencionados;</li>
                          <li>(vi) - incitar ao ódio ou à discriminação de raça, cor, gênero, religião, nacionalidade, etnia ou origem nacional, estado civil, deficiência;</li>
                          <li>(vii) - expor qualquer terceiro em situação constrangedora</li>
                        </ul>
                        <p>3.11. A participação nesta ação interativa não acarretará ao participante nenhum outro direito e/ou vantagem que não esteja expressamente prevista neste Regulamento.</p>
                      </li>
                      
                    </ul>    
                         </div>
                    </div>
                    <div class="t3 concordo">
                      <input type="checkbox" class="check" name="concordo" id="concordo">
                      <label for="concordo">Declaro que li e concordo com o regulamento</label>
                    </div>
                  
                  <!--
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer">
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                  -->
                
                  <div class="linha t3 codigo" id="captchaimage">
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer">
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                </form>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("maiscrianca");
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
    <!-- / CAPA SITE -->
    </div>
  

    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('input#enviar').click(function(){
          $(".msgAcerto, .msgErro").hide();
        });
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            form.submit();
          },/*
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              beforeSend: function(){
                $('input#enviar').attr('disabled','disabled');
                $(".msgAcerto").hide();
                $(".msgErro").hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
              $('input#enviar').removeAttr('disabled');
                window.location.href="#";
                if(data == "1"){
                  $("#form-contato").clearForm();
                  $(".msgAcerto").show();
                  $('img#ajax-loader').hide();
                }
                else {
                  $(".msgErro").show();
                  $('img#ajax-loader').hide();
                }
              }
            });         
          },*/
          rules:{
            nome_crianca:{
              required: true,
              minlength: 2
            },
            nome_resp:{
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },
            cidade:{
              required: true,
              minlength: 3
            },
            estado:{
              required: true,
              minlength: 2
            },
            url:{
              url:true,
              required: true
            },
            concordo:{
              required: true
            }/*,
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }*/
          },
          messages:{
            nome_crianca: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            nome_resp: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            cidade: "Este campo &eacute; obrigat&oacute;rio.",
            estado: "Este campo &eacute; obrigat&oacute;rio.",
            url: "Digite uma url v&aacute;lida. Este campo &eacute; obrigat&oacute;rio.",
            concordo: "Este campo &eacute; obrigat&oacute;rio."/*,
            captcha: "Digite corretamente o código que está ao lado."*/
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
      
      //$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);
          
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }

      function getVar(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++){
          var pair = vars[i].split("=");
          if (pair[0] == variable) {
            return pair[1];
          }
        }
      }
      var success = getVar("success");
      var error = getVar("error");
      if(success == 1){
        $("#form-contato").hide();
        $(".msgAcerto").show();
      }else if(error == 1){
        $("#form-contato").hide();
        $(".msgErro").show();
      }

    </script>
