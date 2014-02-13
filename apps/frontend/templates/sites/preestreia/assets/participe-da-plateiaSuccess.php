<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/preestreia.css" type="text/css" />

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
            <h3 class="tit-pagina grid3"><?php echo $asset->getTitle() ?></h3>
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

            <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                <?php if(!isset($asset) && isset($pager)): ?>
                <?php $asset = $pager->getCurrent(); ?>
                <?php endif; ?>

                <?php $videos = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
                <?php if(count($videos) > 0): ?>
                  <div class="media">
                    <object style="height:384px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $videos[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $videos[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="384"></embed>
                    </object>
                  </div>
                <?php endif; ?>
                <div class="texto">
                  <?php echo html_entity_decode($asset->AssetContent->getContent()) ?>
                </div>
              </div>
              <!-- /NOTICIA INTERNA -->

            </div>
            <!-- /ESQUERDA -->
                        
           <!-- DIREITA -->
           <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
           <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
           
           <div id="direita" class="form grid1">
            <div class="box-padrao">
              <!--p class="titulos"><?php echo $asset->getTitle() ?></p-->
              <p><?php echo $asset->getDescription()?></p>
                          
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
              <form id="form-contato" method="post" action="">
                <input type="hidden" name="section_id" id="section_id" value="950" />
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
                      <label>Data da gravação</label>
                      <input type="text" name="data" id="data" />
                    </div>                                    
                    <div class="linha t3">
                      <label>mensagem</label>
                      <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                      <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>                                       
                    </div>
                    <div class="linha t3 codigo" id="captchaimage">
                      <label for="captcha">Confirmação</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                        <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
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
    swfobject.registerObject("cmais-full", "9.0.0");
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
          
           <!-- rodape preestreia-->
            <div class="grid3 apoio">
              <img src="http://cmais.com.br/portal/images/capaPrograma/preestreia/rodape_preestreia.jpg" />	
             </div>
             <!-- /rodape preestreia-->

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
            
            mensagem:{
              required: true
            },
            data:{
              required: true,
              minlength: 5
             },
            
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
            mensagem: "Este campo &eacute; obrigat&oacute;rio.",
            data: "Este campo &eacute; obrigat&oacute;rio.",
            concordo: "Voc&ecirc; precisa concordar com o regulamento.",
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
    

