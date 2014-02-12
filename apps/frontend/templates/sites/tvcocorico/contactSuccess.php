<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/tvcocorico.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<!-- TOPO CMAIS REDUZIDO-->
<?php include_partial_from_folder('blocks','global/menu-reduzido') ?>
<!-- /TOPO CMAIS REDUZIDO-->

  <!--GOOGLE ANALYTICS-->
  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>

<div id="palco">
    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <!--LOGO TVCOCORICO -->
      <h1>
        <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/logo-tv-cocorico.png" alt="TV Cocorico" />
      </h1>  
      <!--LOGO TVCOCORICO -->
      
      <!--MENU-->
      <?php include_partial_from_folder('sites/tvcocorico','global/menu') ?>  
      <!--/MENU-->
      		            
      <!-- HORARIO -->
      <div id="horario-tv">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <a href="http://youtube.com.br" title="Canal TV Cocoricó">
          <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/youtube-tvcocorico.png" alt="TV Cocorico" />
        </a>
      </div>
      <!-- HORARIO -->
      
      <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="contato grid2">

                <h3 class="tit-pagina grid3">Fale Conosco</h3>  
                <!--p>Donec in massa turpis. Fusce vestibulum vulputate elit at hendrerit. Quisque venenatis sapien quis lectus lacinia eu varius quam pretium. Maecenas egestas tincidunt nunc sit amet sodales. In in volutpat metus. Nunc nulla purus, sagittis pulvinar lobortis posuere, aliquet a libero. Phasellus vestibulum vehicula velit, at laoreet diam pellentesque sit amet. Pellentesque ultrices odio eget mauris faucibus tempus eu in neque.</p-->

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
                  <div class="linha t1">
                    <label>nome</label>
                    <input type="text" name="nome" id="nome" />
                  </div>
                  <div class="linha t2">
                    <label>idade</label>
                    <input type="text" maxlength="2" name="idade" id="idade" />
                  </div>
                  <div class="linha t3">
                    <label>email</label>
                    <input type="text" name="email" id="email" />
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
                    <label>mensagem</label>
                    <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                    <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>                                       
                  </div>
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?1342047830" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar" />
                  </div>
                </form>
              </div>
            </div>
            <!-- /ESQUERDA -->
      
      <div id="back">
      <!-- HOLOFOTES -->
        <div id="holofote-01" class="holofote"></div>
        <div id="holofote-02" class="holofote"></div>
        <div id="holofote-03" class="holofote"></div>
        <div id="holofote-04" class="holofote"></div>
        <div id="holofote-05" class="holofote"></div>
        <div id="holofote-06" class="holofote"></div>
        <!-- /HOLOFOTES -->
      </div>  
    </div>
    <!-- /CAPA SITE -->
</div>

<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
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
            nome:{
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
            assunto:{
              required: true
            },
            mensagem:{
              required: true
            },
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            cidade: "Este campo &eacute; Obrigat&oacute;rio.",
            estado: "Este campo &eacute; Obrigat&oacute;rio.",
            assunto: "Este campo &eacute; Obrigat&oacute;rio.",
            mensagem: "Este campo &eacute; Obrigat&oacute;rio.",
            captcha: "Digite corretamente o código que está ao lado."
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
      
      $('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);

      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>