<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>    
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    
    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>

    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />

    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/css/ie-only.css" />
    <![endif]-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
  
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>

    <script type="text/javascript">
    //formulario
    
    $(document).ready(function(){
    
      var validator = $("#form-contato").validate({
        invalidHandler: function(e, validator,form){
          var errors = validator.numberOfInvalids();
          if(errors){
            var message = errors == 1 ? ('Você esqueceu 1 campo. Confira abaixo:') : ('os campos em vermelho apresentam erro.');
            $("div.error").html(message);
            $("div.error").show();
          }
          else{
            $("div.error").hide();
          }
        },
      	  submitHandler: function(form){
      	  	$.ajax({
      	  	  type: "POST",
      	  	  dataType: "text",
      	  	  data: $("#form-contato").serialize(),
      	  	  beforeSend: function(){
      	  	    $('input#enviar').attr('disabled','disabled');
      	  	    $('input#enviar').hide();
      	  	    $("#msgAcerto").hide();
      	  	    $("#msgErro").hide();
      	  	    $('#loading').show();
      	  	  },
      	  	  success: function(data){
     	  	    $('input#enviar').removeAttr('disabled');
      	  	    window.location.href="#";
      	  	    if(data == "1"){
      	  	      $("#form-contato").clearForm();
      	  	      $("#msgAcerto").show();
      	  	      $('#loading, #form-contato').hide();

      	  	    }
      	  	    else {
      	  	      $("#msgErro").show();
      	  	      $('#loading').hide();
      	  	    }
      	  	  }
      	  	});					
      	  },
        
        rules: {
          nome: {
            required: true,
            minlength: 2
          },
          agree: {
            required: true          
          },
          mensagem: {
            required: true
          }

        }/*,
        submitHandler: function(form) {
          $("div.error").hide();$('#enviar').hide();$('#loading').fadeIn();form.submit();
        }*/
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
	// modal
    $(document).ready(function() {	

			$('a[name=modal]').click(function(e) {
				e.preventDefault();
				
				var id = $(this).attr('href');
			
				var maskHeight = $(document).height();
				var maskWidth = $(window).width();
			
				$('#mask').css({'width':maskWidth,'height':maskHeight});
		
				$('#mask').fadeIn(1000);	
				$('#mask').fadeTo("slow",0.8);	
			
				//Get the window height and width
				var winH = $(window).height();
				var winW = $(window).width();
		              
				$(id).css('top',  winH/2-$(id).height()/2);
				$(id).css('left', winW/2-$(id).width()/2);
			
				$(id).fadeIn(2000); 
			
			});
			
			$('.window .close').click(function (e) {
				e.preventDefault();
				
				$('#mask').hide();
				$('.window').hide();
			});		
			
			$('#mask').click(function () {
				$(this).hide();
				$('.window').hide();
			});			
			
		});
  </script>
  </head>
  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']);
   
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script> 
  <body>
    <!-- bg algum -->
  	<div class="bg-album">
  	  <!--<div class="img-superior-esquerda"></div>
	  <div class="img-superior-direita"></div>
	  <div class="img-inferior"></div>-->
  
  	<div id="mask"></div>
    <!--linh nova--><link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/album-ferias.css" type="text/css" /><!--linh nova-->

    <!-- TOPO PORTAL -->
    <div id="topo-portal" class="topo-geral capa-topo">

      <!-- Barra Portal -->
      <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
      <!-- /Barra Portal -->

    </div>
    <!-- /TOPO PORTAL -->

    
    <!-- CAPA SITE -->
	<div id="boxes">
			<div id="dialog" class="window">
				<a href="#" class="close">Fechar</a>
				<h3>Termos e Condições</h3>
				<span class="linha"></span>
				<div class="dialogWrapper">
					<h4>1. Participação:</h4>
					<p>Esta é uma promoção de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculada à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a qualquer pessoa.</p>
					<p>Para participar, o interessado deve enviar material relacionado à temática solicitada. O material deve ser encaminhado pelo site: <a target="_blank" href="http://www.quintaldacultura.com.br">www.quintaldacultura.com.br</a></p>
					<p>1.1 O material deve ser enviado acompanhado dos seguintes dados pessoais do participante: nome, cidade, estado, legenda, título e descrição (opcional). Cada pessoa pode participar com quantos materiais desejar.</p>
					<h4>2. Critérios:</h4>
					<p>2.1 A seleção dos textos será feita pela equipe de produção. </p>
					<p>2.2 Serão desconsiderados os materiais com dados incorretos; os que fujam da temática descrita; que não sejam de autoria própria; que desrespeitem as leis de direitos autorais ou que não tenham nenhum conteúdo adequado.</p>
					<p>2.3 Cada pessoa poderá participar enviando quantos materiais desejar.</p>
					<h4>3. Considerações Gerais:</h4>
					<p>3.1 Os participantes representados por seus pais ou responsáveis legais quando menores, declaram, desde já, serem de sua autoria o material encaminhado ao site do programa e que o mesmo não constitui plágio de espécie alguma, ao mesmo tempo em que cedem e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.</p>
					<p>3.2 A FPA não aceitará qualquer material que contenha imagens que exponham pessoas a situações vexatórias, incitem ao preconceito, violência, contenha apelo sexual ou ao consumismo exacerbado.</p>
					<p>3.3 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento. O material recebido não será devolvido e poderá permanecer arquivado pela Promotora.</p>
					<p>3.4 O material poderá ser publicado no site <a target="_blank" href="http://www.quintaldacultura.com.br">www.quintaldacultura.com.br</a> e <a target="_blank" href="http://www.cmais.com.br">cmais.com.br</a e os melhores poderão ser exibidos na programação da TV Cultura e nos outros veículos da Fundação Padre Anchieta e por  prazo indeterminado.</p>
				</div>
			</div>
		</div>
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
	      <div class="topo-programa">
		      <h2><a href="http://cmais.com.br/quintaldacultura"><img title="Quintal da Cultura" alt="Quintal da Cultura" src="http://cmais.com.br/portal/quintal/images/logo_QuintalAlbum.png"></a></h2>
		      <!--<img class="imgTitulo" src="http://cmais.com.br/portal/quintal/images/album-de-ferias.png" title="Álbum de Férias" alt="Álbum de Férias" />
		      <a href="http://cmais.com.br/quintaldacultura/album-de-ferias" name="Álbum de Férias" title="Álbum de Férias" style="display:block; overflow:hidden;"></a>
		       <a class="icoVeja" href="http://cmais.com.br/quintaldacultura/album-de-ferias"></a>-->
		    </div>
      </div>
      <!-- /BARRA SITE -->
      <style>
      	#menuFloat { *left:80px; } 
      	#form-contato {margin-left:185px; margin-top:-14px;}
      	
      </style>
      
      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        
        <!-- CONTEUDO PAGINA -->      
        <div id="conteudo-pagina exceptionn">         
          <!-- CAPA -->
          <div class="capa grid3">
            <div class="albumWrapper">
                <div class="formulario bg-formulario" style="display:none; margin-left:185px" id="msgAcerto">
                  <div class="formularioWrapper">
                    <div class="boxWrapper">
                      <h3 class="obrigado">Sua redação foi enviada com sucesso!</h3>
                      <p>Caso sua redação de férias seja selecionada poderá ser lida ao vivo durante o Quintal da Cultura! Fique ligado! =)</p>
                    </div>
                  </div>
                </div>
                <div class="formulario bg-formulario" style="display:none; margin-left:185px" id="msgErro">
                  <div class="formularioWrapper">
                    <div class="boxWrapper">
                      <h3 class="obrigado">Erro!</h3>
                      <p>Desculpe! Não foi possível enviar sua mensagem.</p>
                    </div>
                  </div>
                </div>
            	
              <form id="form-contato" class="formaFale" name="sendMail" method="post" action="" enctype="multipart/form-data">
              	
				<p class="escreva">Escreva uma redação contando sobre as suas férias para a turma do Quintal da Cultura!</p>
				<p class="melhores">A sua história poderá ser lida durante o programa!</p>
                <div class="formulario">
                    <p class="nome"><label>Nome</label><input type="text" name="nome" id="nome" /></p>
					<p class="idade"><label>Idade</label><input type="text" name="cidade" id="cidade" /></p>
                    <p class="cidade"><label>Cidade</label><input type="text" name="cidade" id="cidade" /></p>
                    <p class="estado"><label>Estado</label><input name="estado" type="text" /></p>
                    <!--p class="legenda"><label>Minhas Férias</label><textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,140,'#textCounter');"></textarea></p-->
                    <p class="legenda"><label>Minhas Férias</label><textarea name="mensagem" id="mensagem"></textarea></p>
                    <input type="submit" value="" id="enviar" name="enviar" class="enviarFotos">
                    <div id="loading" style="float: right;margin-top: 3px;position: relative;width: 90px; display: none;">
                      <img src="http://cmais.com.br/portal/quintal/images/loading.gif" style="width:50px" />
                    </div>
                    <p class="termos">
                    	<input type="checkbox" name="agree" />
                    	<label>Li e concordo com os <a name="modal" href="#dialog">Termos e Condições</a></label>            		
                    </p>
                    <div class="error erroCSS"></div>
                </div>
              </div>
              <a class="brinque" href="http://cmais.com.br/quintaldacultura" style="margin:-20px 0 0 300px">Brinque no quintal da Cultura!</a>
            
              <div class="bg-bottom"></div>


            </div>
          </div>
        </div>
        </form>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
  </div>

    
    <!-- RODAPE -->
    <?php include_partial_from_folder('blocks', 'global/footer') ?>
    <!-- /RODAPE -->
  </body>
</html>