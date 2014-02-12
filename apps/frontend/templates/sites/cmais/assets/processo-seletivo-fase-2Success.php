
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
                <h3 class="tit-pagina grid3">Cadastro para processo seletivo de tutoria - Curso de inglês a distância</h3>
                <p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
				<p>Prezado Professor,</p>
				<p>Para se cadastrar a segunda fase do processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha o campo a seguir:</p>
				
                <form id="form-contato" method="post" action="http://200.136.27.251/cadastro-de-tutores/cpf.php">
                  <input type="hidden" value="http://cmais.com.br/processo-seletivo-fase-2-local-da-prova" name="return_url" />
                
				  <p class="enun">Identificação</p>
                  <div class="linha t2">
                    <label>cpf</label>
                    <input type="text" name="cpf" id="cpf" />
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
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
    </script>