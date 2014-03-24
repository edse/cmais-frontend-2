<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />

<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))
?>

<!-- CAPA SITE -->
<div class="bg-provocacoes">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif; ?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
        ?>
        <?php endif; ?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule())
          ?></p>
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
      <?php include_partial_from_folder('blocks','global/shortcuts')
      ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <div class="centroRV">
              <div class="faleConosco">
                <h2><?php echo $section->getTitle()
                ?></h2>
                <!--p><?php echo $section->getDescription()?></p-->
                  <script>
					$(document).ready(function() {
						$('.abre-form').click(function() {
							$('.box.fechado').hide();
							$('.box.aberto').fadeIn('fast');
						});

						$('.fecha-form').click(function() {
							$('.box.fechado').show();
							$('.box.aberto').hide();
						})
					});
                </script>
                <div class="box fechado">
                  <p class="icon abre-form">Mande seus vídeos, fotos, áudios e textos.</p>
                  <p class="btn abre-form">preencha o formulário</p>
                </div>
                <div class="box msg" style="display: none;">
                  <div class="msgErro" style="display:none">
                    <p class="aviso">Sua mensagem não pode ser enviada.</p>
                  </div>
                  <div class="msgAcerto" style="display:none;">
                    <p class="aviso">Informações enviadas com sucesso. Aguarde até amanhã para nos provocar novamente.</p>
                  </div>
                </div>
                <div class="box aberto" style="display:none;">
                  <p class="icon fecha-form">Mande seus vídeos, fotos, áudios e textos.</p>
                  <p>Nos provoquem.</p>
                  
                  <form id="form-contato" method="post" action="http://app.cmais.com.br/index.php/tvcultura/provocacoes/vozes-da-rua">
                    <label class="grd">Nome
                      <input type="text" name="nome" id="nome" />
                    </label>
                    <label class="grd">E-mail
                      <input type="text" name="email" id="email" />
                    </label>
                    <label class="grd">Website
                      <input type="text" name="website" id="website" />
                    </label>
                    <label class="grd">url do arquivo
                      <input type="text" name="url" id="url" />
                    </label>
                    <label class="grd">Título
                      <input type="text" name="titulo" id="titulo" />
                    </label>
                    <div class="grd">
                      <label class="mensagem">Mensagem</label>
                      <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                      <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
                    </div>
											<textarea id="pergunta2" name="pergunta2"></textarea>
	                    <input type="text" name="campo_de_email" id="campo_de_email" style="display:none"/>
	                    <input type="hidden" name="email_verify" id="email_verify"/>
	                    <input type="hidden" name="teste_contato" id="teste_contato"/>                    
                    
                    <div class="grd">
                      <label>Escreva um pouco sobre você</label>
                      <textarea name="escreva" id="escreva" onKeyDown="limitText(this,1000,'#textCounter2');"></textarea>
                      <p class="txt-10"><span id="textCounter2">1000</span> caracteres restantes</p>
                    </div>
                    <div class="grd">
                      <label>Regulamento</label>
                      <div class="regulamento">
                          <ul>
	                    <li><p class="titulos">1. Participação:</p>
	                    	<p>Este é um programa de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a qualquer pessoa.</p>
	                    	<p>Para participar, o interessado deve enviar um vídeo relacionado à temática solicitada. O vídeo deve ser encaminhado pelo site: <a href="http://tvcultura.cmais.com.br/provocacoes">tvcultura.cmais.com.br/provocacoes</a> </p>
	                    	<p>1.1 Os vídeos deverão ser enviados acompanhados dos seguintes dados pessoais do participante: nome, email, website (opcional), arquivo (opcional), título do poema, texto do poema e descrição (opcional). Cada pessoa pode participar com quantos vídeos desejar.</p>
	                    	
	                    </li>
	                    <li><p class="titulos">2. Critérios de Seleção:</p>
	                    	<p>2.1 A seleção dos vídeos será feita pela equipe de Produção do Programa e será baseada na observação dos seguintes critérios e pela ordem: criatividade, originalidade e adequação ao tema.</p>
	                    	<p>2.2 Serão desconsiderados os vídeos com dados incorretos; os que fujam da temática descrita; que não sejam de autoria própria; que desrespeitem as leis de direitos autorais ou que não tenham nenhum conteúdo inadequado.</p>
	                    	<p>2.3 Cada pessoa poderá participar enviando quantos vídeos desejar.</p>	                    	                  
	                    </li>
	                     <li><p class="titulos">3. Considerações Gerais:</p>
	                     	<p>3.1 Os participantes representados por seus pais ou responsáveis legais quando menores, declaram, desde já, serem de sua autoria os vídeos encaminhados ao site do programa e que os mesmos não constituem plágio de espécie alguma, ao mesmo tempo em que cedem e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.</p>
	                     	<p>3.2 A FPA não aceitará qualquer vídeo que contenha imagens que exponham as pessoas a situações vexatórias, incitem ao preconceito, violência, contenham apelo sexual ou ao consumismo exacerbado.</p>
	                     	<p>3.3 Os vídeos que apresentarem partes de shows ou eventos públicos de entretenimento serão exibidos em pequenos trechos, de modo que não represente uma retransmissão ao vivo do evento, enfatizando o caráter de divulgação do evento cultural.</p>
	                     	<p>3.4 Eventuais críticas e/ou sátiras enviadas a eventos públicos de entretenimento não terão conteúdo ofensivo ou depreciativo e serão admitidas nos estritos limites do exercício de tais direitos, respeitados a honra, a imagem e os direitos de personalidade de terceiros envolvidos.</p>
	                     	<p>3.5 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela Produção do Programa referida no item 2.1 deste Regulamento.</p>
	                     	<p>3.6 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento. Os vídeos recebidos não serão devolvidos e poderão permanecer arquivados pela Promotora.</p>
	                     	<p>3.7 Os vídeos serão publicados no site <a href="http://tvcultura.cmais.com.br/provocacoes">tvcultura.cmais.com.br/provocacoes</a> e os melhores poderão ser exibidos no programa Provocações.</p>	                     	                     	     
	                    </li>
	                    
	                  </ul>  
                         </div>
                    </div>
                    <div class="grd concordo">
                      <input type="checkbox" class="check" name="concordo" id="concordo">
                      <label for="concordo">Declaro que li e concordo com o regulamento</label>
                    </div>
                    <!--div class="codigo" id="captchaimage">
                      <label for="captcha">Confirmação</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código"> <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" /> </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    </div-->
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    <input type="submit" value="confirmar" id="enviar" name="enviar" class="btn">
                    <input type="submit" value="cancelar" id="cancelar" name="cancelar" class="btn">
                  </form>
                </div>
                <!-- LISTA -->


			<?php if(count($pager) > 0): ?>
              <!-- BOX LISTAO -->
              <div class="box-listao grid2">         
                <ul>
                	<?php $current_date= ''; ?>
                  <?php foreach($pager->getResults() as $d):
                  	$date= explode(' ', $d->getCreatedAt()); 
                  	$date= $date[0];
                  	
                  ?>
               	
               		<?php if($current_date != $date): ?>
               		
               			<h2 id="data-post"><?php echo format_date(strtotime($date),"D") ?></h2>
               			<li>
							<?php if(isset($date)): ?>
								<p class="titulos"><?php echo format_date(strtotime($d->getCreatedAt()),"t") ?></p>
							<?php endif ?>
							
								<a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="texto"></span><?php echo $d->getTitle() ?></a>
								<p><?php echo $d->getDescription() ?></p>
						</li>
                   <?php else: ?>
                   		<li>
							<?php if(isset($date)): ?>
								<p class="titulos"><?php echo format_date(strtotime($d->getCreatedAt()),"t") ?></p>
							<?php endif ?>
								
								<a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="texto"></span><?php echo $d->getTitle() ?></a>
								<p><?php echo $d->getDescription() ?></p>
						</li>
                  <?php endif; ?> 	
                  <?php $current_date=$date; ?>
                  <?php endforeach; ?>
                </ul>
              </div>
              <!-- /BOX LISTAO -->
            <?php endif; ?>
				

            <?php if(isset($pager)): ?>
              <?php if($pager->haveToPaginate()): ?>
              <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
              <div class="paginacao grid3">
                <div class="centraliza">
                  <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
                  <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
                  <ul>
                    <?php foreach ($pager->getLinks() as $page): ?>
                      <?php if ($page == $pager->getPage()): ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
                      <?php else: ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                  <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
                  <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
                </div>
              </div>
              <form id="page_form" action="" method="post">
                <input type="hidden" name="return_url" value="<?php echo $url?>" />
                <input type="hidden" name="page" id="page" value="" />
              </form>
              <script>
				function goToPage(i) {
					$("#page").val(i);
					$("#page_form").submit();
				}
              </script>
              <!--// PAGINACAO -->
              <?php endif; ?>
            <?php endif; ?>

            </div>
                
                <!-- /LISTA -->
             
              <div class="box-publicidade">
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
  <!-- / CAPA SITE -->
</div>
<!-- / bg provoca -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('input#cancelar').click(function() {
			$('#form-contato').clearForm();
		})
		var validator = $('#form-contato').validate({
      submitHandler: function(form){
        form.submit();
      },/*
			submitHandler : function(form) {
				$.ajax({
					type : "POST",
					dataType : "text",
					data : $("#form-contato").serialize(),
					beforeSend : function() {
						$('input#enviar').hide();
						$('img#ajax-loader').show();
					},
					success : function(data) {
						$('input#enviar').show();
						$('img#ajax-loader').hide();
						window.location.href = "#";
						if (data == "1") {
							$('.box.msg, .msgAcerto').show();
							$(".box.aberto").hide();
						} else {
							$(".box.msg, .msgErro").show();
							$(".box.aberto").hide();
						}
					}
				});
			},*/
			rules : {
				nome : {
					required : true,
					minlength : 2
				},
				email : {
					required : true,
					email : true
				},
				website : {
					required : true
				},
				url : {
					required : true
				},
				titulo : {
					required : true,
					minlength : 2
				},
				mensagem : {
					required : true,
					minlength : 2
				},
				escreva : {
					required : true,
					minlength : 2
				},
				concordo : {
					required : true
				}/*,
				captcha : {
					required : true,
					remote : "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
				}*/
			},
			messages : {
				nome : "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
				email : "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
				website : "Este campo &eacute; obrigat&oacute;rio.",
				url : "Este campo &eacute; obrigat&oacute;rio.",
				titulo : "Este campo &eacute; obrigat&oacute;rio.",
				mensagem : "Este campo &eacute; obrigat&oacute;rio.",
				escreva : "Este campo &eacute; obrigat&oacute;rio.",
				concordo : "Este campo &eacute; obrigat&oacute;rio."/*,
				captcha : "Digite corretamente o código que está ao lado."*/
			},
			success : function(label) {
				// set &nbsp; as text for IE
				label.html("&nbsp;").addClass("checked");
			}
		});
	});
	
	//$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);
	
	// Contador de Caracters
	function limitText(limitField, limitNum, textCounter) {
		if (limitField.value.length > limitNum)
			limitField.value = limitField.value.substring(0, limitNum);
		else
			$(textCounter).html(limitNum - limitField.value.length);
	}

  function getVar(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++){
      var pair = vars[i].split("=");
      if (pair[0] == variable) {
        return pair[1];
      }
    }
  }
  var success = getVar("success");
  var error = getVar("error");
  if(success == 1){
    $("#form-contato").hide();
    $(".msgAcerto").show();
    $(".msg").show();
  }else if(error == 1){
    $("#form-contato").hide();
    $(".msgErro").show();
    $(".msg").show();
  }
</script>
<style>
#pergunta2{
  visibility: hidden;
}
</style>