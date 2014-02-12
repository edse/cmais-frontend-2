<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script type="text/javascript">
  // Update Twitter Statuses
  function updateTweets(){
    $.ajax({
      url: "/ajax/tweetmonitor",
      data: "monitor_id=7",
      success: function(data) {
        $('#twitter').html(data);
      }
    });
  }

  //TIMER TRANSMISSAO
  function timer1(){
    var request = $.ajax({
      data: {
        //asset_id: '53026',
        asset_id: '53430',
        url_in: 'http://tvcultura.cmais.com.br'
      },
      dataType: 'text',
      success: function(data) {
        if(data != ''){
          $('#liveStream').show();
          $('#preRecorded').hide();
        }
        else {
          $('#liveStream').hide();
          $('#preRecorded').show();
        }
      },
      //url: '/index.php/ajax/timer'
      url: '/ajax/timer'
    });
  }
  $(window).load(function(){
    timer1();
    updateTweets();
    var t1=setInterval("timer1()",60000);
    var t2=setInterval("updateTweets()",60000);
  });
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>


    <div class="enfeite"></div>
    <div class="enfeite2"></div>
    
    <!-- / CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE --> 
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($site) && $site->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="<?php echo $site->getTitle() ?>" title="<?php echo $site->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?> 

          <?php if(isset($site) && $site->id > 0): ?>
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

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="../" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

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

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              
              <!-- DESTAQUE 2 COLUNAS -->
              <div class="duas-colunas destaque grid2">
                <div id="preRecorded" style="display:none">
                  <?php include_partial_from_folder('blocks','global/display-2c', array('displays' => $displays["videos"])) ?>
                </div>
                <div id="liveStream" style="display:none">
                  <embed type="application/x-shockwave-flash" src="http://cmais.com.br/portal/js/mediaplayer/player.swf" width="640" height="364" style="undefined" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" flashvars="controlbar=over&amp;autostart=true&amp;streamer=rtmp://200.136.27.12/live&amp;file=tv&amp;type=video" />
                </div>
              </div>
              <!-- /DESTAQUE 2 COLUNAS -->
              
              <!-- BOX TWITTER -->
                <div class="grid1" style="width: 640px; margin-top: 20px; text-align:left">
                  <a href="http://twitter.com/culturacarnaval" class="twitter-follow-button" target="_blank">Acompanhe #carnavalnacultura</a>
                  <style>
                    #twitter {border:1px solid #666}
                    #twitter .topo-fb { background-color:#666; overflow:hidden; padding:10px;}
                    #twitter .avatar { margin-right:10px; float:left; }
                    #twitter .topo-fb img { width:31px; }
                    #twitter .topo-fb h3 {font-size:11px; color:#fff;}
                    #twitter .topo-fb h4 a {font-size:14px; color:#fff; font-weith:bold;}
                    #twitter ul {background:#fff; height:360px; overflow:hidden;}
                    #twitter ul img {width:30px;}
                    #twitter ul li {border-bottom:1px dotted #ddd; padding-top:5px;}
                    #twitter ul .avatar {margin: 10px;}
                    #twitter ul li a { color:#ff6633;}
                    #twitter ul li a,
                    #twitter ul li p {font-size:12px; line-height:16px; margin-bottom:5px;}
                    #twitter ul li p {margin-left:50px; padding-right:10px;}
                    #twitter ul li:last-child {border:none; margin-bottom:10px;}
                    #twitter .respiro {background:#ffffff; height:20px;}
                  </style>
                  <div id="twitter"></div>
                  
                </div>
              <!-- /BOX TWITTER -->              
              
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
              
              
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <?php if(isset($displays['agenda'])): ?>
                <?php if(count($displays['agenda']) > 0): ?>
              <!-- BOX PADRAO NOTICIAS -->
              <div id="box-videos" class="box-padrao grid1">
                <div class="carrossel" id="carrossel1">
              	  <ul class="sem-borda" style="width: auto">
              	    <li>
              	      <div class="conteudo-lista">
              	        <h4><?php echo $displays['agenda'][0]->Block->getDescription(); ?></h4>
              	        <ul>
              	          <?php foreach($displays['agenda'] as $k=>$d): ?>
              	      	  <li><a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></li>
              	      	  <?php endforeach; ?>
              	        </ul>
              	      </div>
              	    </li>
              	  </ul>
                </div>
              </div>
              <!-- /BOX PADRAO NOTICIAS -->
                <?php endif; ?>
              <?php endif; ?>
              
            </div>
            
            <!--FORM PARTICIPE-->
            <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
            <div id="direita" class="form-lateral grid1">
              <div class="box-padrao">
                <p class="titulos"><?php echo $section->getTitle() ?></p>
                <p><?php echo $section->getDescription() ?></p>	         		
	         	</div>
                  <div class="msgErro" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Sua mensagem n&atilde;o pode ser enviada.</p>
                      <p align="left">Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Voc&ecirc; pode ter esquecido de preencher algum campo ou errado alguma informa&ccedil;&atilde;o.</p>
                    </div

                    <hr />
                  </div>
                  <div class="msgAcerto" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p align="left">Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                    </div>

                    <hr />
                  </div>
	         	
	         	<div class="contato">
	         	  <form id="form-contato" method="post" action="">
                    <div class="linha t1">
                      <label>nome</label>
                      <input type="text" name="nome" id="nome" />
                    </div>

                    <div class="linha t3">
                      <label>cidade</label>
                      <input type="text" name="cidade" id="cidade" />
                    </div> 
                    <div class="linha t4">

                      <label>Estado</label>
                      <input type="text" name="estado" id="estado" />
                    </div>   
                                            
                    <div class="linha t5">
                      <label>Mensagem</label>

                      <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                      <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>                                       
                    </div> 
                    <div class="linha t5 codigo" id="captchaimage">
                  	  <label for="captcha">Confirma&ccedil;&atilde;o</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro c�digo">

                        <img src="http://tvcultura.com.br/portal/js/validate/demo/captcha/images/image.php?1328995519" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc;<br/> v&ecirc; na imagem:</label>
 					  <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    </div>                                 
                  </form>
                </div>	              	         	
	         </div>

			<!--FORM PARTICIPE-->
			
			
            <!-- /DIREITA -->
            
          </div>
          
          
          <!-- /CAPA -->

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
            cidade:{
              required: true,
              minlength: 2
            },
            estado:{
              required: true,
              minlength: 2
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
            cidade: "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
          	estado: "Este campo &eacute; obrigat&oacute;rio.",
          	mensagem:"Este campo é obrigatório. Você atigiu o limites de caracteres permitido, tente diminuir seu texto..",
            captcha: "Digite corretamente o c&oacute;digo que est&aacute; ao lado."
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
      
      // Contador de Caracters
      function limitText(limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>
