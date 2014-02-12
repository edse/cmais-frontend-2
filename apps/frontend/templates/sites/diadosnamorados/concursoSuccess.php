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
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php elseif(isset($site) && $site->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
                <h3 class="tit-pagina grid1"><?php echo $site->getTitle() ?></h3>
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
              <div class="contato grid2">

                <h3 class="tit-pagina grid2">Concurso Amor Declarado</h3>  
                <p>O amor está no ar; e na TV Cultura também! No Dia dos Namorados você pode surpreender o (a) seu (sua) amado (a) de um jeito bem especial e diferente. Escolha um vídeo para oferecer ao seu amor e mande-nos a sua declaração, conforme o formulário abaixo. As cinco mais criativas serão enviadas, via e-mail, pela TV Cultura e ainda ganharão destaque em nossa página na internet. Gostou? Então mande já a sua mensagem de amor!</p>
                <ul class="lista-videos">
                	<li>
                		<iframe  width="310" height="174" src="http://www.youtube.com/embed/YwfijL3BkjI?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/watch?v=YwfijL3BkjI?wmode=transparent">As maneiras de se reconquistar</a>
                	</li>
                	<li>
                		<iframe  width="310" height="174" src="http://www.youtube.com/embed/VFx2oRKShdA?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/watch?v=VFx2oRKShdA?wmode=transparent">Paixão por um amigo</a>
                	</li>
                	<li>
                		<iframe  width="310" height="174" src="http://www.youtube.com/embed/q3nqBoJoq0U?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/watch?v=VFx2oRKShdA?wmode=transparent">O que dura mais, amor ou paixão?</a>
                	</li>
                	
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/0c_TV5rne90?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/0c_TV5rne90?wmode=transparent">Aquela flor</a>
                	</li>
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/cy-SX1FNDlA?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/cy-SX1FNDlA?wmode=transparent">O amor</a>
                	</li>
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/BUCB9Jy2HCE?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/BUCB9Jy2HCE?wmode=transparent">Ninguém sonha duas vezes</a>
                	</li>
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/j-V5QgldwE4?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/j-V5QgldwE4?wmode=transparent">Eu gosto dela</a>
                	</li>
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/lbfpCOmHK5s?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/lbfpCOmHK5s?wmode=transparent">Pra sonhar</a>
                	</li>
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/KAIMA-lYz2s?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/KAIMA-lYz2s?wmode=transparent">Beijo</a>
                	</li>
                	<li>
                		<iframe   width="310" height="174" src="http://www.youtube.com/embed/7kT529YbdpQ?wmode=transparent" frameborder="0" allowfullscreen></iframe>
                		
                		<a href="http://www.youtube.com/embed/7kT529YbdpQ?wmode=transparent">Canção para minha namorada</a>
                	</li>
                	
                </ul>
				<br/>
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
                  <div class="linha t3">
                    <label>seu nome</label>
                    <input type="text" name="nome" id="nome" />
                  </div>
                  
                  <div class="linha t3">
                    <label>seu email</label>
                    <input type="text" name="email" id="email" />
                  </div>
                  <br />
                   <div class="linha t3" >
                    <label>nome do(a) namorado(a)</label>
                    <input type="text" name="nome_namorado" id="nome_namorado"  />
                  </div>
                  
                  <div class="linha t3">
                    <label>email namorado(a)</label>
                    <input type="text" name="email_namorado" id="email_namorado" />
                  </div>
                 
                  <div class="linha t3">
                    <label>vídeo escolhido</label>
                    <br />
                    <select class="select required" id="video" name="video" >
                      <option value="" selected="selected">--</option>
                      <option value="As maneiras de se reconquistar">As maneiras de se reconquistar</option>
                      <option value="Paixão por um amigo">Paixão por um amigo</option>
                      <option value="O que dura mais, amor ou paixão?">O que dura mais, amor ou paixão?</option>
                      <option value="Aquela flor">Aquela flor</option>
                      <option value="O amor">O amor</option>
                      <option value="Ninguém sonha duas vezes">Ninguém sonha duas vezes</option>
                      <option value="Eu gosto dela">Eu gosto dela</option>
                      <option value="Pra sonhar">Pra sonhar</option>
                      <option value="Beijo">Beijo</option>
                      <option value="Canção para minha namorada">Canção para minha namorada</option>
                      
                      
                  </select>
                  </div>
                   <div class="linha t3">
                    <label>título</label>
                    <input type="text" name="titulo" id="titulo" />
                  </div>
                  <div class="linha t3">
                    <label>mensagem</label>
                    <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                    <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>                                       
                  </div>
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                </form>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
					<?php if (isset($displays["rodape-interno"])): ?>
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          <?php endif; ?>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

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
            nome_namorado:{
              required: true,
              minlength: 3
            },
            email_namorado:{
              required: true,
              email: true
            },
            titulo:{
              required: true,
              minlength: 3
            },
            video:{
              required: true
            },
            mensagem:{
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            nome_namorado: "Este campo &eacute; obrigat&oacute;rio.",
            email_namorado: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            titulo: "Este campo &eacute; obrigat&oacute;rio.",
            video: "Este campo &eacute; obrigat&oacute;rio.",
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
