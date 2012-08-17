<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/debate.css" type="text/css" />
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))
?>


 
  <!-- CAPA SITE -->
  <div id="capa-site">
  	
  <!-- CHAMADA -->
  <!--div id="chamada" class="grid3">
    <span>teste</span>
    <a href="#" target="#">fdsfsdf sdf sdf sd fsdf sd fsd fsd</a>
  </div-->
  <!-- /CHAMADA -->
  	 <div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
    <!-- BARRA SITE -->
    <div id="barra-site">
    
      	<h2>17 de setembro às 22h</h2>
      	<p class="eleicoes">Eleições 2012 - Debate</p>
      	<ul class="patrocinio">
      		<li><a href="#" class="estadao">Estadão</a></li>
      		<li><a href="#" class="cultura">TV Cultura</a></li>
      		<li><a href="#" class="youtube">Youtube</a></li>
      	</ul>
        <!-- curtir -->
        <div class="redes">
          <div class="curtir">
            <div style="display:block; float: left; margin-right:10px;">
              <g:plusone size="medium" count="false"></g:plusone>
            </div>
            <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else:?><?php echo $uri ?><?php endif;?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
          </div>
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else:?>tvcultura<?php endif;?>">Tweet</a>
        </div>
        <!-- /curtir -->
        
     
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo" class="skin">
      <!-- BOX LATERAL -->
      <?php include_partial_from_folder('blocks','global/shortcuts')
      ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina">
        <!-- CAPA -->
        <div class="capa grid3">
          <div class="streaming">
            <iframe width="960" height="540" src="http://www.youtube.com/embed/YnkEp8VJ2wY" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="conteudo">
            <!-- remover esta div "contato" para colocar o embed -->
            <div class="contato grid2">
              <h3 class="tit-pagina grid2">Debate</h3>
              <p>Descricao</p>
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
                <div class="linha t6">
                  <label>assunto</label>
                  <br />
                  <select style="width:150px;" id="assunto" name="assunto" class="required">
                    <option value="">- Selecione -</option>
                    <option value="Elogio">Elogio</option>
                    <option value="Crítica">Crítica</option>
                    <option value="Comentário">Comentário</option>
                    <option value="Sugestão">Sugestão</option>
                    <option value="Compra de DVD">Compra de DVD</option>
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
                  <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código"> <img src="/portal/js/validate/demo/captcha/images/image.php?<?php echo time();?>" width="132" height="46" alt="Captcha image" id="captcha_image" /> </a>
                  <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                  <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                  <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                  <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                </div>
              </form>
            </div>
            <!-- /remover esta div para colocar o embed -->
          </div>
          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- programas-assets-728x90 -->
            <script type='text/javascript'>
				GA_googleFillSlot("cmais-assets-728x90");

            </script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->
        </div>
        <!-- /CAPA -->
        <?php if (isset($displays["rodape-interno"])):
        ?>
        <!--APOIO-->
        <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"]))
        ?>
        <!--/APOIO-->
        <?php endif;?>
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
  <!-- / CAPA SITE -->

<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('input#enviar').click(function() {
			$(".msgAcerto, .msgErro").hide();
		});
		var validator = $('#form-contato').validate({
			submitHandler : function(form) {
				$.ajax({
					type : "POST",
					dataType : "text",
					data : $("#form-contato").serialize(),
					beforeSend : function() {
						$('input#enviar').attr('disabled', 'disabled');
						$(".msgAcerto").hide();
						$(".msgErro").hide();
						$('img#ajax-loader').show();
					},
					success : function(data) {
						$('input#enviar').removeAttr('disabled');
						window.location.href = "#";
						if(data == "1") {
							$("#form-contato").clearForm();
							$(".msgAcerto").show();
							$('img#ajax-loader').hide();
						} else {
							$(".msgErro").show();
							$('img#ajax-loader').hide();
						}
					}
				});
			},
			rules : {
				nome : {
					required : true,
					minlength : 2
				},
				email : {
					required : true,
					email : true
				},
				cidade : {
					required : true,
					minlength : 3
				},
				estado : {
					required : true,
					minlength : 2
				},
				assunto : {
					required : true
				},
				mensagem : {
					required : true
				},
				captcha : {
					required : true,
					remote : "/portal/js/validate/demo/captcha/process.php"
				}
			},
			messages : {
				nome : "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
				email : "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
				cidade : "Este campo &eacute; Obrigat&oacute;rio.",
				estado : "Este campo &eacute; Obrigat&oacute;rio.",
				assunto : "Este campo &eacute; Obrigat&oacute;rio.",
				mensagem : "Este campo &eacute; Obrigat&oacute;rio.",
				captcha : "Digite corretamente o código que está ao lado."
			},
			success : function(label) {
				// set &nbsp; as text for IE
				label.html("&nbsp;").addClass("checked");
			}
		});
	});
	// Contador de Caracters
	function limitText(limitField, limitNum, textCounter) {
		if(limitField.value.length > limitNum)
			limitField.value = limitField.value.substring(0, limitNum);
		else
			$(textCounter).html(limitNum - limitField.value.length);
	}
</script>
