<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
 
<style>
#direita { margin-top:0;}
#esquerda .stream {float: left; margin-top: 5px;}
#esquerda .stream a {background: none repeat scroll 0 0 #FF6633; clear: none;color: #FFFFFF; float: left;margin-right: 5px; padding: 0 3px; width: auto; }
#esquerda .stream a.ativo, #esquerda .stream a:hover { background: none repeat scroll 0 0 #333333;text-decoration: none;}
</style>

<script type="text/javascript">
  $(function(){
    checkStreamingStart();
  });
  
  function checkStreamingStart(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/streamingunivesp",
      data: "channel_id=3",
      dataType: 'jsonp',
      success: function(data){
        eval(data);
      }
    });
  }

  function checkStreamingEnd(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/streamingendunivesp",
      data: "channel_id=3",
      dataType: 'jsonp',
      success: function(data){
        eval(data);
      }
    });
  }

  function timerStart(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/timer",
      data: "channel_id=3",
      dataType: 'jsonp',
      success: function(data){
        eval(data);
      }
    });
  }
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
         <h2 class="grid3"><img style="float:left;" src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="Univesp TV" title="Univesp TV" /></h2>
         
        <?php if(isset($program) && $program->id > 0): ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        <?php endif; ?>
         

        <!-- box-topo -->
        <div class="box-topo grid3">

          <!-- menu interna -->
          <ul class="menu-interna grid3">
            <li><a href="http://univesptv.cmais.com.br/programacao" title="Grade de Programação">Grade de Programação</a></li>
            <li><a href="http://www.youtube.com/univesptv" title="Vídeos">Vídeos</a></li>
            <li><a href="http://blogunivesptv.blogspot.com" title="Blog da Programação">Blog da Programação</a></li>
            <li><a href="http://blogdoinglescommusica.blogspot.com" title="Inglês com Música">Inglês com Música</a></li>
              

          </ul>
          <!-- /menu interna -->

        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            <h3 class="tit-pagina">Confira a programação ao vivo</h3>

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              
              <div id="livestream2" style="display: none;"><p>Seu browser não suporta Flash.</p></div>

              <!-- lista calendario -->
              <?php include_partial_from_folder('blocks','global/display-2c-broadcast2', array('live_id' => $schedules[0]->id, 'channel_id'=>3)) ?>
              <!-- /lista calendario -->

              <?php /*include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) */ ?>
              
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">                         
              <style>
                #myTabContent > div { display:none; }
                #myTabContent > div.active { display:block; }
                #form-contato { clear:both; margin-top:10px; text-align:left; float:left; }
                #form-contato div { clear:both; margin-top: 10px; float:left; width: 100%; }
                #form-contato label { width:30%; display: block; float:left; text-transform:uppercase; font-size:12px; font-weight:bold; }
                #form-contato textarea,
                #form-contato input { width:65%; float:left;  }
                #form-contato label.msg { width:65%; }
                #form-contato input#captcha { width: 30%; }
                #form-contato #enviar { background:#ff6633; color:#fff; float:right; width: auto; text-transform:uppercase; border:none; padding:2px 5px; }
              </style>
              <h3 class="tit-pagina">Redes Sociais</h3>
              <!-- abas -->
              <div class="">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a data-toggle="tab" href="#facebook">Facebook</a></li>
                  <li class=""><a data-toggle="tab" href="#twitter">Twitter</a></li>
                  <li class=""><a data-toggle="tab" href="#email">E-mail</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div id="facebook" class="tab-pane fade active in">
                    <div class="fb-comments" data-href="univesptv.cmais.com.br/aovivo" data-width="300px" data-num-posts="10"></div> 
                  </div>
                  <div id="twitter" class="tab-pane fade">
                    <a class="twitter-timeline" href="https://twitter.com/search?q=%40UnivespTV" data-widget-id="335472165468114944">Tweets sobre "@UnivespTV"</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  </div>
                  <div id="email" class="tab-pane fade">
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
                      <div class="linha t1">
                        <label>nome</label>
                        <input type="text" name="nome" id="nome" />
                      </div>
                      <div class="linha t3">
                        <label>email</label>
                        <input type="text" name="email" id="email" />
                      </div>
                      <div class="linha t3">
                        <label>mensagem</label>
                        <textarea name="mensagem" id="mensagem"></textarea>
                      </div>
                      <div class="linha t3 codigo" id="captchaimage">
                        <label for="captcha">Confirma&ccedil;&atilde;o</label>
                        <br />
                        <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                          <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                        </a>
                        <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                        <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                        <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /abas -->
              <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
              <script type="text/javascript">
                $(function() {
                  $("#myTab li a").click(function(){
                    var target = $(this).attr('href');
                    $("#myTabContent > div").removeClass("active");
                    $(target).addClass("active");
                    return false;
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
                      captcha: {
                        required: true,
                        remote: "/portal/js/validate/demo/captcha/process.php"
                      }
                    },
                    messages:{
                      captcha: "Digite corretamente o código que está ao lado."
                    },
                    success: function(label){
                      // set &nbsp; as text for IE
                      label.html("&nbsp;").addClass("checked");
                    }
                  });
                  
                  $('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date);
                  
                });
              </script>



              <!-- publicidade -->
              <div class="box-publicidade grid1">
                <!-- univesptv-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("univesptv-300x250");
				</script>
              </div>
              <!-- /publicidade -->

            </div>
            <!-- /DIREITA -->
            
            <!-- APOIO -->
          <ul id="apoio" class="grid3">
              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
              <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
              <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
              <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
              <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
          </ul>
          <!-- APOIO -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
