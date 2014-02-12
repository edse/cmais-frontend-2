    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

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
                
                <h3 class="tit-pagina"><?php echo $section->getTitle() ?></h3>
                <div class="linguas">
                  <a href="fale-conosco" class="pt" title="Português">Português</a>
                  <a href="fale-conosco-en" class="en" title="English">English</a>
                </div>            
                
                <p><?php echo $section->getDescription()?></p>

                  <div class="msgErro" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Error! Your message was not sent.</p>
                      <p>Please, fill up all required fields and check if there is any error.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgAcerto" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Your message was succesfully sent.</p>
                      <p>Thank you for contacting us. We will get in touch soon.</p>
                    </div>
                    <hr />
                  </div>
                <form id="form-contato" method="post" action="">
                  <div class="linha t1">
                    <label>name</label>
                    <input type="text" name="nome" id="nome" />
                  </div>
                  <div class="linha t2">
                    <label>age</label>
                    <input type="text" maxlength="2" name="idade" id="idade" />
                  </div>
                  <div class="linha t3">
                    <label>email</label>
                    <input type="text" name="email" id="email" />
                  </div>
                  <div class="linha t1">
                    <label>city</label>
                    <input type="text" name="cidade" id="cidade" />
                  </div>
                  <div class="linha t2">
                    <label>state</label>
                    <input type="text" id="estado" name="estado">
                  </div>
                  <div class="linha t6">
                    <label>subject</label>
                    <br />
                    <select style="width:150px;" id="assunto" name="assunto" class="required">
                      <option value="">- Select -</option>
                      <!--
                      <option value="Elogio">Compliments</option>
                      <option value="Crítica">Reviews</option>
                      <option value="Comentário">Comments</option>
                      <option value="Sugestão">Suggestions</option> 
                      -->
                      <option value="Compra de DVD">DVD Order</option>
                    </select>
                  </div>
                  <div class="linha t3">
                    <label>message</label>
                    <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                    <p class="txt-10"><span id="textCounter">1000</span> remaining characters </p>                                       
                  </div>
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirmation</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Type what you see in the image:</label>
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
              <?php if(count($displays['informacoes-para-contato']) > 0): ?>
                <?php foreach($displays['informacoes-para-contato'] as $k=>$d): ?>
              <div class="box-padrao">
                <p class="titulos"><?php echo $d->getTitle(); ?></p>
                <?php echo html_entity_decode($d->getHtml()); ?>
              </div>
                <?php endforeach; ?>
              <?php endif; ?>
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
            assunto:{
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
            nome: "This field is required.",
            email: "This field is required. Type a valid e-mail address.",
            cidade: "This field is required.",
            estado: "This field is required.",
            assunto: "This field is required.",
            mensagem: "This field is required.",
            captcha: "Prove you are a human by typing what you see in the image."
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
