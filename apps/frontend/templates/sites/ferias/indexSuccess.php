  <link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
  
  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site"></div>
  
    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
         
          <h2>
            <img src="/portal/images/capaPrograma/ferias/todentro-title.jpg"  alt="Férias na Cultura - Tô Dentro "/>
          </h2>
        </div>
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
              <div class="contato grid2">

                <!--p class="titulos grid2"><?php echo $section->getTitle() ?></p-->  
                <p class="titulos">Não importa onde você esteja ou que esteja fazendo, esteja na Cultura!
                  
                <p>
                  Nessas férias, nós queremos você aqui dentro da Cultura! Então, mande para a gente um vídeo de você se divertindo
                  com a família, com os amigos, com a namorada, com quem você quiser, até sozinho vale! Pode ser em uma viagem, em um
                  parque de diversões, na piscina, na sala de casa, na cama, na festa, na biblioteca, na praça, no avião, no carro,
                  em qualquer lugar! E não se esqueça da frase: FÉRIAS NA CULTURA, TÔ DENTRO! Peça para a criançada gritar em coro, 
                  escreva na areia da praia, faça um poema, cante uma música! Para ficar dentro da Cultura, vale tudo!
                </p>
                
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
                <form id="form-contato" method="post" action="">
                  <div class="linha t3">
                    <label>nome</label>
                    <input type="text" name="nome" id="nome" class="required" />
                  </div>
                  <div class="linha t2">
                    <label>idade</label>
                    <input type="text" name="idade" id="idade" class="required" />
                  </div>
                  <div class="linha t3">
                    <label>cidade</label>
                    <input type="text" name="cidade" id="cidade" class="required" />
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
                  <div class="linha t4">
                    <label>url do vídeo</label>
                    <input type="text" name="urlVideo" id="urlVideo" class="required"  />
                  </div>
                  <div class="linha t1 concordo">
                    <label>Declaro que li e concordo com o regulamento</label>
                    <input class="check required" type="checkbox" name="concordo" id="concordo" />
                  </div>   
                  <div class="linha t4 regulamento">
                    <p class="titulos">Regulamento</p>
                    <div class="texto">
                      <ul>
                        <li><b>1. Participação:</b></li>
                        <li>Esta é uma ação de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a qualquer pessoa.</li>
                        <li>Para participar, o interessado deve enviar um vídeo relacionado à temática solicitada. O vídeo deve ser encaminhado pelo site: tvcultura.cmais.com.br/ferias</li>
                        <li><b>1.1</b> Os vídeos deverão ser enviados acompanhados dos dados pessoais do participante, utilizando o formulário da página. Cada pessoa pode participar com quantos vídeos desejar.</li>
                        <li>&nbsp;</li>
                        <li><b>2. Critérios de Seleção:</b></li>
                        <li><b>2.1</b> A seleção dos vídeos será feita por uma equipe de produção e será baseada na observação dos seguintes critérios e pela ordem: criatividade, originalidade e adequação ao tema.</li>
                        <li><b>2.2</b> Serão desconsiderados os vídeos com dados incorretos; os que fujam da temática descrita; que não sejam de autoria própria; que desrespeitem as leis de direitos autorais ou que tenham conteúdo inadequado.</li>
                        <li><b>2.3</b> Cada pessoa poderá participar enviando quantos vídeos desejar.</li>
                        <li>&nbsp;</li>
                        <li><b>3. Considerações Gerais:</b></li>
                        <li><b>3.1</b> Os participantes representados por seus pais ou responsáveis legais quando menores, declaram, desde já, serem de sua autoria os vídeos encaminhados ao site do programa e que os mesmos não constituem plágio de espécie alguma, ao mesmo tempo em que cedem e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.</li>
                        <li><b>3.2</b> A FPA não aceitará qualquer vídeo que contenha imagens que exponham as pessoas a situações vexatórias, incitem ao preconceito, violência, contenham apelo sexual ou ao consumismo exacerbado.</li>
                        <li><b>3.3</b> Os vídeos que apresentarem partes de shows ou eventos públicos de entretenimento serão exibidos em pequenos trechos, de modo que não represente uma retransmissão ao vivo do evento, enfatizando o caráter de divulgação do evento cultural.</li>
                        <li><b>3.4</b> Eventuais críticas e/ou sátiras enviadas a eventos públicos de entretenimento não terão conteúdo ofensivo ou depreciativo e serão admitidas nos estritos limites do exercício de tais direitos, respeitados a honra, a imagem e os direitos de personalidade de terceiros envolvidos.</li>
                        <li><b>3.5</b> Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela equipe de produção referida no item 2.1 deste Regulamento.</li>
                        <li><b>3.6</b> A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento. Os vídeos recebidos não serão devolvidos e poderão permanecer arquivados pela Promotora.</li>
                        <li><b>3.7</b> Os vídeos serão publicados no site tvcultura.cmais.com.br/ferias e os melhores poderão ser veiculados pela Fundação Padre Anchieta durante o mês de julho de 2012.</li>
                      </ul>                                 
                    </div>
                  </div>

                  <div class="linha t4 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                    <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                </form>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
             <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-homepage-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-homepage-300x250");
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
    <img src="/portal/images/capaPrograma/ferias/todentro-img.jpg"  alt="Férias na Cultura - Tô Dentro "/>

    <script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>

    <script type="text/javascript">
              
      $(document).ready(function(){
        $('input#enviar').click(function(){
          $(".msgAcerto, .msgErro").hide();
        });
        
        var num = 0;

       
        
        var validator = $('#form-contato').validate({
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
          },
          rules:{
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
          
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>
