
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
				<?php if(date('Y-m-d') > "2012-01-10"): ?>
                <h3 class="tit-pagina grid3"><!-- <?php echo $section->getTitle() ?> -->Encerradas as inscrições para Tutor de Inglês</h3>
                <p class="titu"><!-- <?php echo $section->getDescription()?> -->O cadastramento realizado pela Fundação Padre Anchieta terminou no dia 10</p>
				<p>As inscrições para a seleção de Tutores de Inglês para educação a distância foram encerradas à meia-noite do dia 10/01/12.</p>
				<br />
				<p>Nos próximos dias, os professores que se cadastraram serão informados por e-mail sobre a análise de seus currículos e a continuidade do processo.</p>
				<br />
				<p>Os classificados concorrerão a vagas de tutor para os cursos a serem oferecidos nos dois semestres de 2012. Ou seja, eles poderão ser selecionados/convocados para atuar no curso do primeiro OU do segundo semestre. Em ambos os casos, pelo período de três meses.</p>
				
				<?php else: ?>
                <h3 class="tit-pagina grid3"><!-- <?php echo $section->getTitle() ?> -->Cadastro para processo seletivo de tutoria - Curso de inglês a distância</h3>
                <p class="titu"><!-- <?php echo $section->getDescription()?> -->Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
				<p>Prezado Professor,</p>
				<p>Para se cadastrar ao processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha todos os campos do formulário a seguir:</p>
				
                <?php if($mailSent): ?>
                <div class="msgAcerto">
                  <span class="alerta"></span>
                    <div class="boxMsg"> 
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                    </div>
                    <hr />                                   
                </div>
                <?php else: ?>
                <form id="form-contato" method="post" action="http://200.136.27.251/cadastro-de-tutores/submit.php">
									<input type="hidden" value="t3vazrte5Hq-7LOsZBf6z_w" name="sid" />
                  <input type="hidden" value="od7" name="wid" />
                  <input type="hidden" value="20971520" name="MAX_FILE_SIZE" />
                  <input type="hidden" value="http://cmais.com.br" name="return_url" />
                
				  <p class="enun">Dados de identificação</p>
                  <div class="linha t1">
                    <label>nome completo (sem abreviações)</label>
                    <input type="text" name="nome" id="nome" />
                  </div>
				  <div class="linha t2">
                    <label>Data de nascimento</label>
                    <input type="text" name="data" id="data" />
                  </div>
                  <div class="linha t2">
                    <label>cpf</label>
                    <input type="text" name="cpf" id="cpf" />
                  </div>
                  <div class="linha t2">
                    <label>RG</label>
                    <input type="text" name="rg" id="rg" />
                  </div>
				  <div class="linha t2">
                    <label>Orgão de expedição</label>
                    <input type="text" name="exp" id="exp" />
                  </div>
				  <div class="linha t2">
                    <label>UF</label>
                    <input type="text" name="uf" id="uf" />
                  </div>
                  <p class="pergunta">É professor da Rede da Secretaria de Estado da Educação de São Paulo?</p>
				  <div class="linha t10">
                    <input type="radio" name="rede" id="sim" value="sim" />
					<label>Sim</label>
                  </div>
				  <div class="linha t10">
                    <input type="radio" name="rede" id="nao" value="nao" />
					<label>Não</label>
                  </div>
				  <span class="linhaFundo"></span>
 				  <p class="enun">Endereço Residencial</p>
				  <div class="linha t1">
                    <label>Endereço (Rua, Avenida, Travessa, Etc.)</label>
                    <input type="text" name="rua" id="rua" />
                  </div>
				  <div class="linha t2">
                    <label>Número</label>
                    <input type="text" name="numero" id="numero" />
                  </div>
  				  <div class="linha t2">
                    <label>Complemento</label>
                    <input type="text" name="compl" id="compl" />
                  </div>
				  <div class="linha t33">
                    <label>Bairro</label>
                    <input type="text" name="bairro" id="bairro" />
                  </div>
   				  <div class="linha t2">
                    <label>CEP</label>
                    <input type="text" name="cep" id="cep" />
                  </div>
                  <div class="linha t1">
                    <label>cidade</label>
                    <input type="text" name="cidade" id="cidade" />
                  </div>
				  <div class="linha t2">
                    <label>Estado</label>
                    <input type="text" name="estado" id="estado" />
                  </div>
                  <div class="linha t1 exc">
					<label>email</label>
					<input id="email" type="text" name="email">
				  </div>
				  <div class="linha t4">
                    <label>DDD</label>
                    <input type="text" name="dddT" id="dddT" />
				  </div>
                  <div class="linha t2">
					<label>Telefone</label>
					<input type="text" name="tel" id="tel" />
                  </div>
				  <div class="linha t4">
                    <label>DDD</label>
                    <input type="text" name="dddC" id="dddC" />
				  </div>
                  <div class="linha t2">
					<label>Celular</label>
					<input type="text" name="cel" id="cel" />
                  </div>
				  <span class="linhaFundo"></span>
				  <p class="enun">Formação Acadêmica</p>

                    <p class="pergunta">É professor de Língua Inglesa?</p>
					<div class="linha t11">
	                    <input type="radio" name="profing" id="sim3" value="sim" />
						<label>Sim</label>
	                </div>
					<div class="linha t11">
	                    <input type="radio" name="profing" id="nao3" value="nao" />
						<label>Não</label>
	                </div>
				  
                    <p class="pergunta">É licenciado em letras?</p>
					<div class="linha t11">
	                    <input type="checkbox" name="ingl" id="ingl" value="ingl" />
						<label>Lingua Inglesa</label>
	                </div>
					<div class="linha t11">
	                    <input type="checkbox" name="port" id="port" value="port" />
						<label>Português</label>
	                </div>
					<div class="linha t11">
	                    <input type="checkbox" name="idi" id="idi" value="idi" />
						<label>Outras disciplinas</label>
	                </div>
					<p class="pergunta">Possui certificado internacional em inglês?</p>
					<div class="linha t10">
		        	    <input type="radio" name="certificado" id="sim1" value="sim" />
						<label>Sim</label>
		            </div>
					<div class="linha t10">
		                <input type="radio" name="certificado" id="nao1" value="nao" />
						<label>Não</label>
		            </div>
                  <div class="linha t5" style="float: none;clear: both;">
					<label>Se sim. Instituição de ensino</label>
					<input id="ensino" type="text" name="ensino">
				  </div>
				  <span class="linhaFundo"></span>
				  <p class="enun">Experiência em tutoria em cursos à distância</p>
				  <p class="pergunta">Participou como professor tutor em algum curso à distância?</p>
				  <div class="linha t10">
                    <input type="radio" name="certificado2" id="sim2" value="sim" />
					<label>Sim</label>
                  </div>
				  <div class="linha t10">
                    <input type="radio" name="certificado2" id="nao2" value="nao" />
					<label>Não</label>
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
                <?php endif; ?>
                <?php endif; ?>
                
                
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
            nome:{
              required: true,
              minlength: 2
            },
			email:{
			required: true,
			email: true
			},
			cpf:{
              required: true,
              minlength: 11
            },
			data:{
              required: true,
              minlength: 10
            },
            rg:{
              required: true,
              minlength: 2
            },
			exp:{
              required: true,
              minlength: 2
            },
			uf:{
              required: true,
              minlength: 2
            },
			rua:{
              required: true,
              minlength: 2
            },
			numero:{
              required: true,
              minlength: 2
            },
			bairro:{
              required: true,
              minlength: 2
            },
			cep:{
              required: true,
              minlength: 2
            },
            cidade:{
              required: true,
              minlength: 3
            },
            estado:{
              required: true,
              minlength: 2
            },
            dddT:{
              required: true,
              minlength: 2
            },
			dddC:{
              required: true,
              minlength: 2
            },
			tel:{
              required: true,
              minlength: 8
            },
			cel:{
              required: true,
              minlength: 8,
              maxlength: 9
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
			rg: "Este campo &eacute; Obrigat&oacute;rio.",
			dddC: "*",
			dddT: "*",
            captcha: "Digite corretamente o código que está ao lado."
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