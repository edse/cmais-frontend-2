
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

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
				<div class="contatoWrapper">
                <h3 class="tit-pagina grid3">Escolha do Local para a realização da prova da 2ª fase do processo seletivo para tutoria </h3>
                <p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
				<p>Prezado Professor,</p>
				<p>Para escolher o local onde você deseja realizar a prova da segunda fase do processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP, preencha os campos abaixo até o dia 23 de janeiro. Esta etapa é obrigatória para todos aqueles que têm interesse em permanecer como candidatos à tutoria do Curso Inglês On Line. O não fornecimento das informações caracterizará sua desistência e desligamento do processo.</p>
				
                <form id="form-contato" method="post" action="http://200.136.27.251/cadastro-de-tutores/submit-fase2.php">
									<input type="hidden" value="t3vazrte5Hq-7LOsZBf6z_w" name="sid" />
                  <input type="hidden" value="od5" name="wid" />
                  <input type="hidden" value="http://cmais.com.br/cadastro-de-tutores-enviado" name="return_url" />
                
				  <p class="enun">Identificação</p>
                  <div class="linha t2">
                    <label>cpf</label>
                    <input type="text" name="cpf" id="cpf" />
                  </div>
                  <p class="pergunta">Escolha o local da prova:</p>

				  <div class="linha t10">
				  	<select id="local" name="local" style="width: 160px;">
				  		<option value=""> - </option>
				  		<option value="Araçatuba">Araçatuba</option>
				  		<option value="Franca">Franca</option>
				  		<option value="Presidente Prudente">Presidente Prudente</option>
				  		<option value="Sorocaba">Sorocaba</option>
				  		<option value="Campinas">Campinas</option>
				  		<option value="Santos">Santos</option>
				  		<option value="São José dos Campos">São José dos Campos</option>
				  		<option value="São José do Rio Preto">São José do Rio Preto</option>
				  		<option value="Bauru">Bauru</option>
				  		<option value="São Paulo - Capital">São Paulo - Capital</option>
				  	</select>
          </div>
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <br />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" />
                  </div>
                </form>
                
				</div>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
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

    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
	<script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
		var num = 0;
        $("#cpf").mask("999.999.999-99");
        $("#data").mask("99/99/9999");
        // validate signup form on keyup and submit
        var validator = $("#form-contato").validate({
          rules:{
            cpf:{
              required: true,
              minlength: 11
            },
						local:{
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
						cpf: "Este campo &eacute; Obrigat&oacute;rio.",
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
    </script>