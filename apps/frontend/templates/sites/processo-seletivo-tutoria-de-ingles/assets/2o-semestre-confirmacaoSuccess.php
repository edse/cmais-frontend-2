
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      
      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          <h2>
                <h3 class="tit-pagina grid1" style="width: auto">Processo Seletivo - Tutor de Inglês a distância</h3> 
          </h2>
        </div>

        <?php if(isset($siteSections) && $site->getType() != "Portal"): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

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
				<div class="contatoWrapper">
                <h3 class="tit-pagina grid3" style="margin-top:0px">Confirme seu interesse em fazer a capacitação presencial obrigatória</h3>
                <p class="titu">O aviso vale para todos os classificados para o curso de Inglês online da EVESP</p>
								<p>Os classificados para trabalhar como Tutor de Inglês online no SEGUNDO SEMESTRE farão a capacitação presencial obrigatória no mês de julho, em dia a ser oportunamente divulgado. A capacitação será feita na Capital, em período integral, em local a ser anunciado.</p>
                <form id="form-contato" method="post" action="http://200.136.27.251/cadastro-de-tutores/submit-fase32.php">
									<input type="hidden" value="t3vazrte5Hq-7LOsZBf6z_w" name="sid" />
                  <input type="hidden" value="od9" name="wid" />
                  <input type="hidden" value="http://cmais.com.br/cadastro-de-tutores-enviado" name="return_url" />
                
				  <p class="enun">Se você é um deles, informe:</p>
				  
                  <div class="linha t2">
                    <label>Número do CPF</label>
                    <input type="text" name="cpf" id="cpf" />
                  </div>
                  <p class="pergunta">Confirme ou não a sua presença. O não representa a desistência do trabalho:</p>
                  <div class="linha t2" style="width: 63px;">
                    <label style="width: 12px; padding-top: 3px; float: left;">Sim</label>
                    <input type="radio" name="confirmado" id="confirmado" value="sim" style="float: right;" />
                  </div>
                  <div class="linha t2" style="width: 63px;">
                    <label style="width: 12px; padding-top: 3px; float: left;">Não</label>
                    <input type="radio" name="confirmado" id="confirmado" value="não" style="float: right;" />
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
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar" style="float: left;" />
                    <br />
                    <br />
                    <p class="enun">ATENÇÃO: O PRAZO PARA SUA RESPOSTA TERMINA NO DIA 16 DE FEVEREIRO ÀS 23h59.</p>
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
            confirmado:{
              required: true
            },
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
						cpf: "Este campo &eacute; Obrigat&oacute;rio.",
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
    </script>
