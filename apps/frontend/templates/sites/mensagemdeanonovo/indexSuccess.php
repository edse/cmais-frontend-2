    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />


    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

	<div id="bg-chamada">
		<?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
	</div>

	<div id="bg-topo">
		<div class="mensagem">
    		<h3><?php echo $site->getTitle() ?></h3>
    		<!-- curtir -->
	        <div class="redes">
	            <div class="curtir">
	              <div style="display:block; float: left; margin-right:10px;">
	              <g:plusone size="medium" count="false"></g:plusone>
	              </div>
	              <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
	            </div>
	            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
	         </div>
	         <!-- /curtir -->
    	</div>
    	
	</div>
	
    <!-- CAPA SITE -->
    <div id="capa-site">
	

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
                <h3 class="grid2" style="margin-bottom: 15px;">Incrições encerradas!</h3>
                <p class="titulos2">O vencedor do concurso "Mensagem de Ano Novo" é Rogério Castro de Maceió, AL. Parabéns!</p>
                <p class="titulos2">Em breve você acompanha aqui no site a música vencedora, o making of da produção e a versão final!</p>
              </div>
              
              <?php /*
              <div class="contato grid2">
                <h3 class="tit-pagina grid2">Inscreva-se!</h3>
                <?php if(isset($displays['inscreva-se'])): ?>
                  <?php if(count($displays['inscreva-se']) > 0): ?>  
                <p class="titulos"><?php echo $displays['inscreva-se'][0]->getTitle() ?></p>
                <div><?php echo html_entity_decode($displays['inscreva-se'][0]->Asset->AssetContent->getContent()) ?></div>
                  <?php endif; ?>
                <?php endif; ?>  

                <?php if($mailSent): ?>
                <div class="msgAcerto">
                  <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com nosso programa.</p>
                    </div>
                    <hr />                                   
                </div>
                <?php else: ?>
                <form id="form-contato" method="post" action="">
                  <div class="linha t3">
                    <label>nome</label>
                    <input type="text" name="nome" id="nome" />
                  </div>                
                  <div class="linha t3">
                    <label>email</label>
                    <input type="text" name="email" id="email" />
                  </div>
                  <div class="linha t6">
                    <label>Data de Nascimento</label>
                    <input type="text" maxlength="10" name="dn" id="dn" />
                  </div>
                  <hr />
                  <div class="linha t5">
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
                  <hr />
                  <div class="linha t4">
                    <label>Telefone</label>
                     <input type="text" name="tel" id="tel" />
                  </div>
				  <div class="linha t4 excp">
                  	<label>cpf</label>
                    <input type="text" name="cpf" id="cpf" />
                  </div>
                  <hr />
                  <div class="linha t4">
                    <label class="cor">Caso seja menor de 18 anos:</label>
                    <label class="cor">Nome do responsável</label>
                    <input type="text" name="nome_do_responsavel" id="nome_do_responsavel" />                                     
                  </div>
                  <div class="linha t4" style="margin-top:20px;">
                  	<label class="cor">cpf do responsável</label>
                    <input type="text" name="cpf_do_responsavel" id="cpf_do_responsavel" />
                  </div> 
                  <div class="linha t3">
                    <label>Link do vídeo ou áudio</label>
                    <input type="text" name="link" id="link" />
                    <p class="txt-10">Exemplo:http://www.youtube.com/watch?v=qdwnzMRwAkY</label>
                  </div> 
                  <div class="linha t3">
                    <label>Letra da Música</label>
                    <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                    <!--p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p-->                                       
                  </div>
                  <?php if(isset($displays['regulamento'])): ?>
                    <?php if(count($displays['regulamento']) > 0): ?>  
                  <div class="linha regulamento">
	            	  <p class="titulos"><?php echo $displays['regulamento'][0]->getTitle() ?></p>
	            	  <?php echo html_entity_decode($displays['regulamento'][0]->Asset->AssetContent->getContent()) ?>
	              </div>
                    <?php endif; ?>
                  <?php endif; ?>  
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
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar" />
                  </div>
                </form>
                <?php endif; ?>
              </div>
              
              */ ?>
              
            </div>
            <!-- /ESQUERDA -->
            
                    
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
        $("#tel").mask("(99) 99999999?9");
        $("#cpf").mask("999.999.999-99");
        $("#cpf_do_responsavel").mask("999.999.999-99");
        $("#dn").mask("99/99/9999");
                
        // validate signup form on keyup and submit
        var validator = $("#form-contato").validate({
          rules:{
        nome:{
        	required:true,
        	minlength:2
      		},
        email:{
        	required:true,
        	email:true
      		},
      		/*
      	link:{
        	required:true,
        	url:true
      		},
      		*/
      	dn:{
        	required:true,
        	minlength:8
      		},
      	cidade:{
            required: true,
            minlength: 3
            },    
        estado:{
            required: true
            },
        tel:{
            required: true,
        	minlength:2
            },     
        concordo:{
            required: true
            },     
       captcha: {
            required: true,
            remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
       },
       messages:{            
       	nome: "Este campo &eacute; obrigat&oacute;rio.  ",
        email: "Este campo &eacute; obrigat&oacute;rio.",
        dn: "Este campo &eacute; obrigat&oacute;rio.",
      	cidade: "Este campo &eacute; obrigat&oacute;rio.",
        estado: "Obrigat&oacute;rio.",
        tel: "Este campo &eacute; obrigat&oacute;rio.",
        concordo: "Voc&ecirc; precisa concordar com o regulamento.",
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
    

