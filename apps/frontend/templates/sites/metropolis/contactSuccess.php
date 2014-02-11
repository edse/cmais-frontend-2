    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
    
    <!-- CAPA SITE -->
	<div class="bg-metropolis">
    <div id="capa-site">
    	
      <!-- BREAKING NEWS -->
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      <!-- /BREAKING NEWS -->

      <!-- BARRA SITE -->
      <div id="barra-site">
	  	<div class="topo-programa">
	  	  <?php if(isset($program) && $program->id > 0): ?>
		  <h2>
		    <a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>">
		      <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
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
          <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
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
        <div id="conteudo-pagina exceptionn">
          <!-- CAPA -->
          <div class="capa grid3 exceptionn">
          	<div class="tudo-metropolis">
          		<span class="bordaTopRV"></span>
          		<div class="centroRV">
          			<div class="faleConosco">
          				<h2><?php echo $section->getTitle() ?></h2>
          				<p><?php echo $section->getDescription()?></p>
          				
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
          					<label class="nome">Nome<input type="text" name="nome" id="nome" /></label>
          					<label class="idade">Idade<input type="text" maxlength="2" name="idade" id="idade" /></label>
          					<label class="email">E-mail<input type="text" name="email" id="email" /></label>
          					<label class="cidade">Cidade<input type="text" name="cidade" id="cidade" /></label>
          					<label class="estado">Estado
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
          					</label>
							<label class="assunto">Assunto
			                    <select id="assunto" name="assunto">
			                      <option value="">--</option>
			                      <option value="Elogio">Elogio</option>
			                      <option value="Crítica">Crítica</option>
			                      <option value="Comentário">Comentário</option>
			                      <option value="Sugestão">Sugestão</option>
			                      <option value="Compra de DVD">Compra de DVD</option>
			                	</select>
			                </label>
          					<div class="box-mensagem">
          						<label class="mensagem">Mensagem</label>
          						<textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
          						<p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
          					</div>
                            <div class="linha t3 codigo" id="captchaimage">
                            	<label for="captcha">Confirmação</label>
                            	<br />
								<a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
									<img src="http://cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      			</a>
                      			<label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
 					  			<input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    		</div>
                    		<img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
          					<input type="submit" value="confirmar" id="enviar" name="enviar" class="confirmar">
          				</form>
          			</div>
          			<div class="publicidade fl">
                      <script type='text/javascript'>
                        GA_googleFillSlot("cmais-assets-300x250");
                      </script>
      				</div>
          		</div>
          		<span class="bordaBottomRV"></span>
          	</div>
          </div>
        
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    </div>
    <!-- / CAPA SITE -->

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
            mensagem:{
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          }
        });
      });
      
      $('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date);
      
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>
