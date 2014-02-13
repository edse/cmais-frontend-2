<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/rodaviva.css?nocache=<?php echo time(); ?>" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css?nocache=<?php echo time(); ?>" type="text/css" />

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
                      <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                      <a class="img" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" />
                      </a>
                      <?php endif; ?>
                      <div class="box-texto grid2">
                        <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="<?php echo $d->AssetType->getSlug() ?>"></span><?php echo $d->getTitle() ?></a>
                        <p><?php echo $d->getDescription() ?></p>
                        <p class="fonte"><a href="#"><?php echo $d->retriveLabel() ?></a> | <?php echo format_datetime($d->getCreatedAt(),"P") ?> | <?php echo format_datetime($d->getCreatedAt(),"t") ?></p>
                      </div>
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
              <!-- PAGINACAO -->
              <?php endif; ?>
            <?php endif; ?>

            </div>
            <!-- /ESQUERDA -->
                        
	         <!-- DIREITA -->
	         <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
	         <div id="direita" class="form-lateral grid1">
	         	<div class="box-padrao">
	         		<p class="titulos"><?php echo $section->getTitle() ?></p>
	         		<p><?php echo $section->getDescription() ?></p>
	         	</div>
	         	
	         	<div class="contato">
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
                  <form id="form-contato" method="post" action="http://app.cmais.com.br/index.php/tvcultura/cartaoverde/corvo-edgar">
                    <div class="linha t1">
                      <label>nome</label>
                      <input type="text" name="nome" id="nome" />
                    </div>
                    <div class="linha t2">
                      <label>idade</label>
                      <input type="text" maxlength="2" name="idade" id="idade" />
                    </div>
                    <div class="linha t3">
                      <label>email</label>
                      <input type="text" name="email" id="email" />
                    </div>                                 
                    <div class="linha t3">
                      <label>mensagem</label>
                      <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                      <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>                                       
                    </div>
                    <div class="linha t3 codigo" id="captchaimage">
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    </div>
                    <!--                                 
                    <div class="linha t3 codigo" id="captchaimage">
                      <label for="captcha">Confirmação</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                        <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                      <br />
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    </div>            
                    -->                     
                  </form>
	         	</div>	              	         		
	         </div>
	         <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->   
          
          <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3" style="margin-top: 15px;">
			<!-- CartaoVerde728x90 -->
			<script type='text/javascript'>
			GA_googleFillSlot("cmais-assets-728x90");
			</script>
          </div>
          <!-- /publicidade -->
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
      	$('input#enviar').click(function(){
      	  $(".msgAcerto, .msgErro").hide();
      	});
      	
      	var validator = $('#form-contato').validate({
          submitHandler: function(form){
            form.submit();
          },
      	  /*
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
      	  },*/
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
            mensagem:{
              required: true
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
            }/*,
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }*/
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            cidade: "Este campo &eacute; obrigat&oacute;rio.",
            estado: "Este campo &eacute; obrigat&oacute;rio.",
            assunto: "Este campo &eacute; obrigat&oacute;rio.",
            mensagem: "Este campo &eacute; obrigat&oacute;rio.",
            website: "Este campo &eacute; obrigat&oacute;rio.",
            titulo: "Este campo &eacute; obrigat&oacute;rio.",
            concordo: "Voc&ecirc; precisa concordar com o regulamento.",
            url: "Este campo &eacute; obrigat&oacute;rio."/*,
            captcha: "Digite corretamente o código que está ao lado."*/
          },
          // set this class to error-labels to indicate valid fields
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
      
      //$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);

      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
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
      }else if(error == 1){
        $("#form-contato").hide();
        $(".msgErro").show();
      }
    </script>