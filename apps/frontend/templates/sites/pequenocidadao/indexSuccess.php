    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    
    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2><a href="<?php echo $program->retriveUrl() ?>"></a></h2>
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
            <div id="esquerda" class="">
              <div class="contato">

                <h3 class="tit-pagina grid2">Participe!</h3>
                <?php if(isset($displays['inscreva-se'])): ?>
                  <?php if(count($displays['inscreva-se']) > 0): ?>  
                <p><?php echo html_entity_decode($displays['inscreva-se'][0]->Asset->AssetContent->getContent()) ?></p>
                  <?php endif; ?>
                <?php endif; ?>

                
                <?php /*
                <div class="msgAcerto">
                  <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por se inscrever, aguarde o contato de nossa produ&ccedil;&atilde;o para confirma&ccedil;&atilde;o dos convites</p>
                    </div>
                    <hr />                                   
                </div>

                <form id="form-contato" method="post" action="">
                  <div class="linha t3">
                    <label>nome</label>
                    <input type="text" name="nome" id="nome" />
                  </div>
                  <div class="linha t4">
                    <label>RG</label>
                    <input type="text" name="rg" id="rg" />
                  </div>
                  <div class="linha t4">
                    <label>Tel</label>
                    <input type="text" name="tel" id="tel" />
                  </div>
                  <div class="linha t3">
                    <label>email</label>
                    <input type="text" name="email" id="email" />
                  </div>
                  
                  <div class="linha t4">
                    <label>N&ordm; de Convites</label>
                    <br />
                    <select class="estado required" id="convites" name="convites">
                      <option value="" selected="selected">--</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                  </select>
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
                */ ?>
              </div>
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
            rg:{
              required: true,
              minlength: 3
            },
            tel:{
              required: true,
              minlength: 2
            },
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            rg: "Digite um RG v&aacute;lido.Este campo &eacute; Obrigat&oacute;rio.",
            tel: "Digite um telefone v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
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