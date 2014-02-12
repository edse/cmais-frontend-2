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

                <h3 class="tit-pagina grid2">POR QUE EU MEREÇO GANHAR A BOLA DA FINAL DO PAULISTÃO?</h3>  
                <p style="margin: 0 10px 20px;">Responda e concorra à bola oficial da grande final. A frase mais criativa será escolhida pela produção do programa.</p>

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
                      <p>Obrigado por participar. Em breve divulgaremos o resultado.</p>
                    </div>
                    <hr />
                  </div>
                <form id="form-contato" method="post" action="">
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
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" class="cpf"/>
                  </div>
                 
                  
                   <div class="linha t3">
                    <label for="resposta">Resposta</label>
                    <textarea name="resposta" id="resposta" maxlength="200" style="height:40px; font-size:14px; padding:5px; width:98%" /></textarea>
                      
                  </div>
                  <div class="linha t3">
                      <label>Regulamento</label>
                      <div class="regulamento">
                        <ul>
                          <li><p class="bold">1. Participação:</p>
                            <p>Este é um programa de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a crianças representadas por seus pais ou responsáveis legais.</p>
                            <p>Para participar, o interessado (com autorização de pais ou responsáveis) deve enviar um texto de no máximo 200 caracteres dizendo por que merece ganhar a bola oficial do Campeonato Paulista. Não há restrições temáticas, desde que o texto seja livre de preconceitos, palavras obscenas ou conteúdo inadequado ao público infantil. O texto deve ser encaminhado pelo site: <a href="http://tvcultura.cmais.com.br/cartaozinho" title="Cartãozinho">http://tvcultura.cmais.com.br/cartaozinho</a></p>
                            
                            <p>1.1 Os textos deverão ser enviados até o dia 17/05/2013, acompanhados dos dados pessoais do participante, utilizando o formulário da página. Caso o participante seja menor de 18 (dezoito) anos, deverá necessariamente ter autorização dos seus pais ou responsáveis, bem como preencher os dados dos seus representantes legais: nome, email, endereço e CPF. Cada pessoa pode participar com quantos textos desejar.</p>
                            <p>1.2 A Fundação Padre Anchieta não se responsabiliza por eventuais falhas no envio do material.</p>
                          </li>
                          <li><p class="bold">2. Critérios de Seleção:</p>
                            <p>2.1 A seleção dos textos será feita pela equipe de Produção da TV Cultura e será baseada na observação dos seguintes critérios e pela ordem: criatividade, originalidade e adequação à faixa etária.</p> 
                            <p>2.2 Serão desconsiderados os textos com dados incorretos; os que fujam da adequação à faixa etária (público infantil); os que tenham conteúdo inadequado.</p> 
                          </li>
                          <li><p class="bold">3. Considerações Gerais:</p>
                            <p>3.1 Os participantes representados por seus pais ou responsáveis legais, declaram, desde já, a autorização de seu nome e cidade onde moram para publicação na programação da TV Cultura e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.</p>
                            <p>3.2 A FPA não aceitará qualquer texto que contenha exposição de pessoas em situações vexatórias, incitando o preconceito, violência e que contenham apelo sexual ou ao consumismo exacerbado.</p> 
                            <p>3.3 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela Produção da TV Cultura, referida no item 2.1 deste Regulamento.</p>
                            <p>3.4 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento.</p>
                            <p>3.5 Os textos poderão ser publicados no site <a href="http://tvcultura.cmais.com.br/cartaozinho" alt="Cartãozinho">http://tvcultura.cmais.com.br/cartaozinho</a> e os melhores poderão ser exibidos na programação da TV Cultura.</p>
                          </li>
                        </ul>    
                      </div>
                    </div>
                    <div class="t3 concordo">
                      <input type="checkbox" class="check" name="concordo" id="concordo">
                      <label for="concordo">Declaro que li e concordo com o regulamento</label>
                    </div>
                  
                
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
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
    <!-- / CAPA SITE -->
    </div>
  

    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('.cpf').mask("999.999.999-99"); 
        
        $('input#enviar').click(function(){
          $(".msgAcerto, .msgErro").hide();
        });
        
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
            cpf:{
              required: true,
              minlength: 11
            },
            resposta:{
              required: true 
            },
            concordo:{
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome_crianca: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            nome_resp: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            cidade: "Este campo &eacute; obrigat&oacute;rio.",
            estado: "Este campo &eacute; obrigat&oacute;rio.",
            cpf: "Digite um CPF v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            resposta: "Este campo &eacute; obrigat&oacute;rio.",
            concordo: "Este campo &eacute; obrigat&oacute;rio.",
            captcha: "Digite corretamente o código que está ao lado."
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
