	<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    

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
            <a href="http://cmais.com.br/contesuahistoria">
              <img src="http://cmais.com.br/portal/images/capaPrograma/contesuahistoria/topo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
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
                <p class="titulos">Pesquisa</p>  
                <p>Em parceria com a Secretaria da Educação do Estado de São Paulo, a TV Cultura está produzindo uma série de ficção sobre a vida e  as experiências dos jovens no Ensino Médio.</p>
                <p>Abrimos este espaço para receber depoimentos e histórias de quem vive essa realidade. Vale contar qualquer situação.  Quem quiser participar desta pesquisa, estará contribuindo com um programa de TV que assume o compromisso de divertir, mas principalmente de refletir sobre essa fase tão marcante da vida de um adolescente.</p>
               
                
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
                <form id="form-contato" method="post" action="" style="width:640px; overflow: hidden;">
                  <div class="linha t3">
                    <label>nome</label>
                    <input type="text" name="nome" id="nome" />
                  </div>
                  <div class="linha t3">
                    <label>nome completo do responsável legal</label>
                    <input type="text" name="nome_resp" id="nome_resp"/>
                  </div>
                  <div class="linha t3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" id="endereco"  />
                  </div>
                  <div class="linha t6">
                    <label>Telefone</label>
                    <input type="text" name="telefone" id="telefone"/>
                  </div>
                 
                  <div class="linha t4">
                    <label>email</label>
                    <input type="text" name="email" id="email" />
                  </div>
                  <div class="linha t3">
                    <label>aluno de escola</label>
                    <br />
                    <select class="required" id="escola" style="width:116px;">
                      <option value="" selected="selected">--</option>
                      <option value="Pública">Pública</option>
                      <option value="Privada">Privada</option>
                     
                  </select>
                  </div>
                 
                  
                 
                  <div class="linha t3">
                    <label>mensagem</label>
                    <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                    <p class="txt-10" style="clear:both;"><span id="textCounter">1000</span> caracteres restantes</p>                                       
                  </div>
                  <div class="linha t3 regulamento">
	            	  <p class="titulos">Termos de Uso</p>
	            	  <div class="texto">
		            	  <p>Para acessar e participar deste Blog, você e seus responsáveis legais terão que aceitar e concordar com os Termos de Uso a seguir mencionados.</p>
		                  <p>Será de sua única e exclusiva responsabilidade todo conteúdo por você publicado neste Blog, sendo que seus responsáveis legais responderão solidariamente por você, e ainda, tanto você, como seus representantes legais deverão eximir quaisquer terceiros, inclusive os administradores deste Blog, sobre eventuais transtornos e ou danos causados com a sua conduta e ou conteúdo.</p>
		                  <p>Ao se registrar neste Blog e ou inserir seu conteúdo, você e seus representantes legais declaram ter lido, compreendido e concordado em cumprir com estes termos. </p>
		                  <p>Este Blog não se destina a crianças menores de 12 anos, podendo apenas participar os adolescentes entre 12 anos (já completados) e 17 anos e seus representantes legais.</p>
		                  <p>O Conteúdo a ser publicado neste Blog não poderá:</p>
		                  <ul>
			                  <li>(i) - Infringir e ou violar direitos de terceiros;</li>
			                  <li>(ii) - conter qualquer disposição que viole Leis, Estatutos, Normas, Portarias;</li>
			                  <li>(iii) - incitar práticas de crimes e ou contravenções penais</li>
			                  <li>(iv) - promover atividades ilegais;</li>
			                  <li>(v) - conter fatos caluniosos, difamatórios, ameaçadores, abusivos, violentos, mal-intencionados;</li>
			                  <li>(vi) - incitar ao ódio ou à discriminação de raça, cor, gênero, religião, nacionalidade, etnia ou origem nacional, estado civil, deficiência; </li>
			                  <li>(vii) - expor qualquer terceiro em situação constrangedora</li>
			                  <li>(viii) - postar pornografia infantil</li>
		                  </ul>
		                  <p>Esses Termos de Uso também serão violados, caso você ou seus responsáveis legais declarem ser outra pessoa, para poder participar deste Blog, ou façam qualquer outra declaração inverídica.</p>
		                  <p>Todo material que se encontra neste Blog somente poderá ser utilizado pelos usuários para seu proveito próprio e sem qualquer finalidade comercial. Este material não poderá ser copiado, reproduzido, exibido, republicado, transmitido ou distribuído de forma alguma, nem enviado por e-mail ou utilizado através de outros meios eletrônicos. Ficam, também, proibidos: (i) - a modificação dos materiais; (ii) - o uso destes materiais em qualquer outro site ou ambiente de computação em rede, ou o uso dos materiais para qualquer objetivo que não seja para proveito próprio sob pena de tais atitudes, constituírem em violação dos direitos do autor, marcas dentre outros.</p>
		                  <p>Qualquer e-mail, nota, mensagem, opinião em cartaz e/ou fórum, ideias, opiniões, sugestões, conceitos ou outro material enviado neste Blog, ficará sendo de única e exclusiva propriedade dos detentores deste Blog, que terão direito, de utilizar tais conteúdos e ou materiais ou qualquer um de seus elementos, a seu livre e exclusivo critério, em caráter definitivo, sem qualquer pagamento, com qualquer finalidade e em quaisquer meios e/ou mídias que existam e/ou venham a existir, independente da tecnologia que será adotada. Diante do exposto, você concorda que os detentores deste Blog têm o direito de publicar tais materiais e/ou utilizá-los em sua integralidade ou qualquer um de seus elementos para qualquer fim, sejam eles promocionais, publicitários, para produção de séries televisivas, documentários ou outros e em quaisquer meios, sem ter que lhe efetuar qualquer pagamento por esse uso.</p>
		                  <p>O Blog não se responsabiliza pela informação ou pelas opiniões que forem aqui emitidas e nem se responsabiliza, por qualquer informação que seja postada neste Blog, não assumindo ainda nenhuma obrigação de supervisionar ou fiscalizar os Conteúdos, e nem a de remover ou altera a informação enviada. Todavia, o Blog se reserva o direito de eliminar, remover ou editar qualquer informação ou conteúdo enviado por este meio, que julgue a seu único e exclusivo critério impróprio ou inconveniente.</p>
		                  <p>Você e seus responsáveis legais declaram e não tem nada a ser opor que nem o Blog, nem funcionários, agentes ou pessoas, são responsáveis ou se responsabilizarão por qualquer perda, dano direto, indireto, emergente, punitivo ou de qualquer outra natureza, lesão, reclamação, obrigação ou outra causa proveniente do uso deste Blog.</p>
	                  </div>                             			
	                </div>
                    <div class="linha t3 concordo">
                      <input class="check" type="checkbox" name="concordo" id="concordo" />
                      <label>Declaro que li e concordo com o regulamento</label>
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
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                </form>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
             <img src="http://cmais.com.br/portal/images/capaPrograma/contesuahistoria/caneta.png" alt="Conte sua História!" />
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
      	$('input#enviar').click(function(){
      	  $(".msgAcerto, .msgErro").hide();
      	});
      	
      	var num = 0;
        $("#telefone").mask("(99) 99999999?9");
       
        
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
            nome_resp:{
              required: true,
              minlength: 2
            },
            endereco:{
              required: true,
              minlength: 2
            },
            telefone:{
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email:true              
            },
            concordo:{
              required: true
            },
            mensagem:{
              required: true,
              minlength: 30
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
          	nome: "Este campo &eacute; obrigat&oacute;rio.",
          	nome_resp: "Este campo &eacute; obrigat&oacute;rio.",
          	endereco: "Este campo &eacute; obrigat&oacute;rio.",
          	telefone: "Este campo &eacute; obrigat&oacute;rio.",
          	email: "Digite um endereço de email válido",
          	concordo: "Este campo &eacute; obrigat&oacute;rio.",
          	mensagem: "Este campo &eacute; obrigat&oacute;rio.",
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
