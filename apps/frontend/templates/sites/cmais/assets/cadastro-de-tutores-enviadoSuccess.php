    <link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />

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
				  <h3 class="tit-pagina grid3">Prezado(a) Professor(a),</h3>
				  <p>Sua mensagem foi enviada com sucesso.</p><br />
				  <p>Agradecemos a escolha de seu local de prova.</p><br />
				  <p>Após o dia 26 de janeiro volte a consultar o portal www.cmais.com.br ou o site www.tvcultura.com.br e confira a relação dos candidatos por localidade.</p><br />
				  <p>O teste de conhecimentos de Língua Inglesa e de Informática básica será realizado no dia 05 de fevereiro.</p><br />
				  <strong><a href="http://www2.tvcultura.com.br/fpa">Fundação Padre Anchieta</p></strong>

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

    <script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
	<script src="/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
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
              minlength: 8
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
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