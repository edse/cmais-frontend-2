<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
	        <?php if(isset($program) && $program->id > 0): ?>
	        <h2>
	          <a href="<?php echo $program->retriveUrl() ?>">
	            <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
	          </a>
	        </h2>
	        <?php endif; ?>
          
         <!-- curtir -->

                <?php if(isset($program) && $program->id > 0): ?>
                <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
                <?php endif; ?>

          <!-- /curtir -->
                    
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
	        <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
	        
	        <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
	        <div class="navegacao txt-10">
	          <a href="../" title="Home">Home</a>
	          <span>&gt;</span>
	          <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
	        </div>
	        <?php endif; ?>
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
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
	        <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

            <?php if(isset($displays["destaque-principal"])): ?>
              <?php if($displays["destaque-principal"][0]->id > 0): ?>
                <!-- NOTICIA INTERNA -->
                <div class="box-interna grid2">
                  <h3><a href="<?php echo $displays["destaque-principal"][0]->retriveUrl() ?>"><?php echo $displays["destaque-principal"][0]->getTitle() ?></a></h3>
                  <a href="<?php echo $displays["destaque-principal"][0]->retriveUrl() ?>" class="txt-16"><?php echo $displays["destaque-principal"][0]->getDescription() ?></a>
                  <div class="assinatura grid2"><p class="sup"></p></div>
                  <div class="texto">
                    <div class="box-relacionados grid1">
                      <?php if($displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3") != ""): ?>
                      <a href="<?php echo $displays["destaque-principal"][0]->retriveUrl() ?>" title="<?php echo $displays["destaque-principal"][0]->getTitle() ?>">
                        <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" name="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" style="width: 300px;" class="310x186" />
                      </a>
                      <?php endif; ?>
                    </div>
                    <?php if(isset($displays["destaque-principal"][0]->AssetContent)): ?>
                      <p><?php echo $displays["destaque-principal"][0]->AssetContent->getHeadlineLong() ?></p>
                    <?php endif; ?>
                  </div>
                </div>
                <!-- /NOTICIA INTERNA -->
              <?php endif; ?>
            <?php endif; ?>

            <?php if(count($pager) > 0): ?>
              <!-- BOX LISTAO -->
              <div class="box-listao grid2">
                <?php if(isset($date)): ?>
                <h3><?php echo format_date(strtotime($date),"D") ?></h3>
                <?php endif ?>
                <ul>
                  <?php foreach($pager->getResults() as $d): ?>
                    <li>
                      <?php if(isset($date)): ?>
                      <p class="titulos"><?php echo format_date(strtotime($d->getCreatedAt()),"t") ?></p>
                      <?php endif ?>
                      <h3 class="chapeu"><?php echo $d->retriveLabel() ?></h3>
                      <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="texto"></span><?php echo $d->getTitle() ?></a>
                      <p><?php echo $d->getDescription() ?></p>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <!-- /BOX LISTAO -->
            <?php endif; ?>

            <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
              <div class="paginacao pag3 grid2">
                <p class="txt-12">P&aacute;gina <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></p>
                <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo"></a>
                <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior"></a>
              </div>
              <form id="page_form" action="" method="post">
              	<input type="hidden" name="return_url" value="<?php echo $url?>" />
              	<input type="hidden" name="page" id="page" value="" />
              </form>
              <script>
              	function goToPage(i){
                	$("#page").val(i);
                	$("#page_form").submit();
              	}
              </script>
              
              <?php endif; ?>
            <?php endif; ?>

            </div>
            <!-- /ESQUERDA -->
            
	         <!-- DIREITA -->
	         <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
	         <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
	         <div id="direita" class="form-lateral grid1">
	         	<div class="box-padrao">
	         		<p class="titulos"><?php echo $section->getTitle() ?></p>
	         		<p><?php echo $section->getDescription()?></p>	         		
	         	</div>
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
	         	<div class="contato">
	         	  <form id="form-contato" method="post" action="">
	         	  	<input type="hidden" name="section_id" id="section_id" value="895" />
                    <div class="linha t1">
                      <label>nome</label>
                      <input type="text" name="nome" id="nome" />
                    </div>
                    <div class="linha t2">
                      <label>idade</label>
                      <input type="text" maxlength="2" name="idade" id="idade" />
                    </div>
                    <div class="linha t3">
	                    <label>endereço</label>
	                    <input type="text" name="endereco" id="endereco" />
					</div>
                    <div class="linha t1">
	                    <label>cidade</label>
	                    <input type="text" name="cidade" id="cidade" />
					</div>
					<div class="linha t2">
                    <label>estado</label>
                    <br />
                    <select class="required estado" id="estado" name="estado">
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
                  <div class="linha t6 marg">
                      <label>CEP</label>
                      <input type="text" name="cep" id="cep" />
                    </div> 
                    <div class="linha t6">
                      <label>tel</label>
                      <input type="text" name="tel" id="tel" />
                    </div> 
                  
                    <div class="linha t3">
                      <label>email</label>
                      <input type="text" name="email" id="email" />
                    </div>                                                              
                    <div class="linha t3">
						<label>URL do Vídeo</label>
                      	<input type="text" name="url" id="url" />
                    </div>                        
                                     
                    <div class="linha t3">
					  <label>Breve descrição de quem é o Rei a da sua Rua:</label>
					  <br />
                      <p class="txt-10">Conte resumidamente quem é essa pessoa que você considera o Rei ou Rainha da sua Rua. Quem ela é, o que ela faz, porque ela é uma verdadeira celebridade.</p>
                      <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,500,'#textCounter');"></textarea>
                      <p class="txt-10" style="text-align:right;"><span id="textCounter">500</span> caracteres restantes</p>                                       
                    </div> 
                    <div class="linha t1 regulamento">
                      <p class="titulos">Aceite o regulamento do programa Reis da Rua</p>
                      <ul>
                        <li>1) A promoção <span>Rei da Minha Rua</span> entra no ar no dia 05 de setembro (8h, horário de Brasília) e acontece até o dia 1º de novembro ( meia noite, horário de Brasília).</li>
                        <li>2) Serão aceitas inscrições de vídeos com até 5 minutos de duração, que já estejam disponíveis pelo Youtube, portanto, na ficha de inscrição deverá ser indicado o link do vídeo na página <a href="www.youtube.com">www.youtube.com</a>.</li>
                        <li>3) Os vídeos passarão por análise de conteúdo da TV Cultura e serão exibidos no site da série <a href="www.cmais.com.br/reisdarua">Reis da Rua</a>, que serão disponibilizados na página do programa semanalmente.  </li>
                        <li>4) Durante o período da ação, os vídeos poderão receber notas de 5 a 10 e comentários pela página do programa no <a href="www.facebook.com/reisdarua">Facebook</a></li>
                        <li>5) No término da promoção, após análise e da equipe de conteúdo da Gerência de Aquisição e Produção Independente da TV Cultura, o vídeo mais votado poderá virar um programa especial da série, exibido em 2012, com a participação do autor do vídeo.</li>
                        <li>6) Todos os direitos de imagem e som do vídeo inscrito são de responsabilidade do autor  do vídeo. </li>
                        <li>7) A ação restringe-se a pessoas que residam na cidade de São Paulo (SP) e Grande São Paulo (SP).</li>
                      </ul>
                    </div>
                    <div class="linha t3 concordo">
                      <input class="check" type="checkbox" name="concordo" id="concordo" />
                      <label>Declaro que li e concordo com o regulamento</label>
                    </div>            
                                                        
                    <div class="linha t3 codigo" id="captchaimage">
                  	  <label for="captcha">Confirmação</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                        <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
 					  <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                      <br />
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                    </div>                                 
                  </form>
                </div>	              	         	
	         </div>
	         <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->   
          
           <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3" style="margin-top: 15px;">
                    <!-- publicidade -->
                <div style="width: 728px; height: 90px; overflow: hidden;">
        <script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<script type="text/javascript">
		//swfobject.registerObject("cmais-full", "9.0.0");
</script>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="728" height="90" id="cmais-full" wmode="opaque">
				<param name="movie" value="http://cmais.com.br/pub/728x90a.swf" />
				<param name="allowscriptaccess" value="always" />
                <param name="wmode" value="opaque" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="http://cmais.com.br/pub/728x90a.swf" width="728" height="90" wmode="opaque">
					<param name="allowscriptaccess" value="always" />
                    <param name="wmode" value="opaque" />

				<!--<![endif]-->
					<a href="http://cmais.com.br/">
						<img src="http://cmais.com.br/pub/728x90a.gif" alt="cmais+ O portal de conteúdo da Cultura" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>        </div>

                <!-- /publicidade -->
          </div>
          <!-- / BOX PUBLICIDADE 2 -->

       </div>
       <!-- /CONTEUDO PAGINA -->        
      </div>
      <!-- /MIOLO -->      
    </div>
    <!-- / CAPA SITE -->
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#tel").mask("(99) 99999999?9");
        $("#cep").mask("99999-999");

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
              required: true
            },
            idade:{
              required: true,
              number: true
            },
            email:{
              required: true,
              email: true
            },
            cidade:{
              required: true
            },
            mensagem:{
              required: true
            },
            concordo:{
              required: true
            },
            tel: {
              required: true                      
            },
            cep: {
              required: true                      
            },
            endereco: {
              required: true                                  
            },
            url: {
              required: true,
              url: true            
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Este campo é obrigatório.",
            email: "Digite um e-mail válido. Este campo é obrigatório.",
            cidade: "Este campo é obrigatório.",
            idade: "Este campo é obrigatório.",
			mensagem: "Este campo é obrigatório.",
			estado: "Este campo é obrigatório.",
            concordo: "Você precisa concordar com o regulamento.",
            url: "Digite um endereço válido.",
            cep: "Digite um CEP válido.",
            tel: "Digite um telefone válido.",
            endereco: "Digite um endereço válido.",
            captcha: "Digite corretamente o código que está ao lado."
          },
          // set this class to error-labels to indicate valid fields
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
