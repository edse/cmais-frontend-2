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
	         <div id="direita" class="form-lateral grid1">
	         	<div class="box-padrao">
	         		<p class="titulos"><?php echo $section->getTitle() ?></p>
	         		<p><?php echo $section->getDescription()?></p>	         		
	         	</div>
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
	         	<div class="contato">
	         	  <form id="form-contato" method="post" action="">
                    <div class="linha t3">
                      <label>nome</label>
                      <input type="text" name="nome" id="nome" />
                    </div>                 
                    <div class="linha t3">
                      <label>email</label>
                      <input type="text" name="email" id="email" />
                    </div> 
                    <div class="linha t3">
                      <label>Website</label>
                      <input type="text" name="website" id="website" />
                    </div>                                  
                    <div class="linha t3">
                      <label>URL do arquivo</label>
                      <input type="text" name="url" id="url" />
                    </div>
                           
                    <div class="linha t3">
                      <label>Título</label>
                      <input type="text" name="titulo" id="titulo" />
                    </div>                  
                    <div class="linha t3">
                      <label>Texto</label>
                      <textarea name="texto" id="texto" onKeyDown="limitText(this,1000,'#textCounter1');"></textarea>
                      <p class="txt-10"><span id="textCounter1">1000</span> caracteres restantes</p>                                       
                    </div>  
                    <div class="linha t3">
                      <label>Escreva um pouco sobre você</label>
                      <textarea name="voce" id="voce" onKeyDown="limitText(this,1000,'#textCounter2');"></textarea>
                      <p class="txt-10"><span id="textCounter2">1000</span> caracteres restantes</p>                                       
                    </div>
                    <div class="linha t1 regulamento">
	            	  <p class="titulos">Regulamento</p>
	                 <ul>
	                    <li><p class="titulos">1. Participação:</p>
	                    	<p>Este é um programa de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a qualquer pessoa.</p>
	                    	<p>Para participar, o interessado deve enviar um vídeo relacionado à temática solicitada. O vídeo deve ser encaminhado pelo site: <a href="http://tvcultura.cmais.com.br/inglescommusica">tvcultura.cmais.com.br/inglescommusica</a> </p>
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
	                     	<p>3.7 Os vídeos serão publicados no site <a href="http://tvcultura.cmais.com.br/inglescommusica">tvcultura.cmais.com.br/inglescommusica</a> e os melhores poderão ser exibidos no programa Inglês com Música.</p>	                     	                     	     
	                    </li>
	                    
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
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" />
                    </div>                                 
                  </form>
                  <?php endif; ?>
                </div>	              	         	
              </div>
	          <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->   
          
          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- univesptv-728x90 -->
			<script type='text/javascript'>
			GA_googleFillSlot("univesptv-728x90");
			</script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->

       </div>
       <!-- /CONTEUDO PAGINA -->        
      </div>
      <!-- /MIOLO -->      
    </div>
    <!-- / CAPA SITE -->
    
    <script type="text/javascript">
      $(document).ready(function(){
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
            cidade:{
              required: true,
              minlength: 3
            },
            estado:{
              required: true,
              minlength: 2
            },
            assunto:{
              required: true
            },
            texto:{
              required: true
            },
            website:{
              required: true,
              minlength: 3,
              url: true
            },
            titulo:{
              required: true,
              minlength: 3
            },
            concordo:{
              required: true
            },
            url: {
              required: true,
              minlength: 3,
              url: true            
            },
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            cidade: "Este campo &eacute; obrigat&oacute;rio.",
            estado: "Este campo &eacute; obrigat&oacute;rio.",
            assunto: "Este campo &eacute; obrigat&oacute;rio.",
            texto: "Este campo &eacute; obrigat&oacute;rio.",
            website: "Digite um endere&ccedil;o v&aacute;lido.",
            titulo: "Este campo &eacute; obrigat&oacute;rio.",
            concordo: "Voc&ecirc; precisa concordar com o regulamento.",
            url: "Digite um endere&ccedil;o v&aacute;lido.",
            captcha: "Digite corretamente o código que está ao lado."
          },
          // set this class to error-labels to indicate valid fields
		  success: function(label){
			  // set &nbsp; as text for IE
			  label.html("&nbsp;").addClass("checked");
		  }
        });
      });
      
      $('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);
      
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>
   