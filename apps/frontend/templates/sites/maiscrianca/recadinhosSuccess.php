<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Recadinhos - +crian&ccedil;a - cmais+ O portal de conteúdo da Cultura</title>
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link href="http://cmais.com.br/portal/maiscrianca/css/geralCrianca.css?nocache=1234" type="text/css" rel="stylesheet">
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/maiscrianca/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/validate/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
  </head>
  <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
      wrap: "both"      
      });
    })
    $(function(){ //onready
      //hover states on the static widgets
      $('#dialog_link, ul#icons li').hover(
        function() { $(this).addClass('ui-state-hover'); }, 
        function() { $(this).removeClass('ui-state-hover'); }
      );
    });
    //menu drop down
    $(function(){
        $("ul.dropdown li").hover(function(){
            $(this).addClass("hover");
            $('ul:first', this).css('visibility','visible');
        },
        function(){
            $(this).removeClass("hover");
            $('ul:first',this).css('visibility', 'hidden');
        });
        $("ul.dropdown li ul li:has(ul)").find("a:first").append("  ");
    });
    //menu topo
    $(function(){
        $(".aba:first").show();
        $(".menu a").click(function(){ 
            $(".aba").hide();
            var div = $(this).attr('href');
            $(div).fadeIn("");
                $(".menu a").removeClass('current');
                $(this).addClass('current');
            return false;
        })
    });
      $(document).ready(function(){
      	$('#signupsubmit').click(function(){
      	  $(".respostaSucesso").hide();
      	});
      	
      	var validator = $('#formFale').validate({
      	  submitHandler: function(form){
      	  	$.ajax({
      	  	  type: "POST",
      	  	  dataType: "text",
      	  	  data: $("#formFale").serialize(),
      	  	  beforeSend: function(){
      	  	    $('#signupsubmit').attr('disabled','disabled');
      	  	    $(".respostaSucesso").hide();
      	  	    $('img#ajax-loader').show();
      	  	  },
      	  	  success: function(data){
     	  	    $('#signupsubmit').removeAttr('disabled');
     	  	    $('.wrapperReacadinho').hide();
      	  	    window.location.href="#";
      	  	    if(data == "1"){
      	  	      $("#formFale").clearForm();
      	  	      $(".respostaSucesso").show();
      	  	      $('img#ajax-loader').hide();
      	  	    }
      	  	    else {
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
      	      minlength: 3
      	    },
      	    estado:{
      	      required: true,
      	      minlength: 2
      	    },
      	    recado:{
      	      required: true,
      	      minlength: 10
      	    }
      	  },
      	  messages:{
      	  	nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
      	  	cidade: "Este campo &eacute; Obrigat&oacute;rio.",
      	  	estado: "Este campo &eacute; Obrigat&oacute;rio."
      	  },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
  </script>
    <body>
      <div class="allWrapper">
        <div class="topoTvCultura">
          <?php use_helper('I18N', 'Date') ?>
          <?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important, 'asset' => $asset, 'section' => $section)) ?>
        </div>
          
      <div class="contentWrapper" align="center">
        <div class="content">
          <?php include_partial_from_folder('sites/maiscrianca', 'global/menu') ?>
          <hr />
          <div class="conteudo">
            <div class="voce-sabia">
              <div class="topo">
                <a href="/maiscrianca"><span></span>Home</a><hr />
                <p class="breadcrumb">Mais Crian&ccedil;a &gt;&gt; <span>Recadinhos</span></p>
              </div>
              <div class="conteudo-wrapper">
                <div class="conteudoRecadinhos">
                  <div class="conteudoRecadinhosWrapper">
                    <div class="pagTit">
                      <a href=""><h1>Recadinhos</h1></a>
                    </div>
                    <hr>
                    <div class="listaRecadinhos">
                    <?php if(count($pager) > 0): ?>
                      <?php foreach($pager->getResults() as $d): ?>
                      <div class="recado">
                        <div class="wrapperP">
                          <p class="data"><?php echo format_date($d->getCreatedAt(), "g") ?></p>
                          <p class="nomeAutor"><span>De</span>: <?php echo $d->getTitle() ?></p>
                          <p class="cidade"><?php echo $d->getDescription() ?></p>
                          <p class="recadotxt"><span class="aspas1"></span><?php echo html_entity_decode($d->AssetContent->render()) ?><span class="aspas2"></span></p>
                        </div>
                        <?php if($d->Site->Program->image_icon != ""): ?>
                        <div class="wrapperMoldura">
                          <p>Para:</p>
                          <div class="moldura">
                            <img alt="<?php echo $d->Site->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Site->Program->image_icon ?>" />
                          </div>  
                        </div>
                        <?php endif; ?>
                      </div>
                      <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                    <hr>
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
                
                <div class="rightWrapper recadinho">

                  <div class="mandeRecadinho">
                    <h2>Mande o seu recadinho</h2><hr />
                    <div class="wrapperReacadinho">
                      <div class="avatar">
                        <p>Para:</p>
                        <div class="moldura">
                          <ul class="dropdown">
                            <li><img class="fotoMoldura" src="http://cmais.com.br/portal/maiscrianca/images/icones/img-ex8.png" alt="" />

                              <ul class="carinha">
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/123_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/albumnat_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_arthur.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/bob-logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/brincadeiras-musicais_destaque_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/cacalivros_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_carrapatos-e-catapultas.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/Castelo_logo.jpg" alt="" /></a></li>

                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_cyberchase.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/dora_logo1.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_doug.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/ecotur_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/escola-para-cachorro_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/Glub_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/gravidez_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/ilha_logo.jpg" alt="" /></a></li>

								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/kiara_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_jackers.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_miss-spider.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_os7monstrinhos.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/MundodaLua_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/oqvouser_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/papel_logo.jpg" alt="" /></a></li>
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_princesasdomar.jpg" alt="" /></a></li>
                                
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_pingu.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/ratimbum_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo-superfofos.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/passeio_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/pequenos_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/sid_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/simao_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/djcao_logo.jpg" alt="" /></a></li>
								
                                <li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/tamanho_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/teatro_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/timmy_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/logo_tromba-trem.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/Toot_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/tracando-arte_logo.jpg" alt="" /></a></li>
								<li><a href=""><img src="http://cmais.com.br/portal/maiscrianca/images/icones/vila-sesamo_logo.jpg" alt="" /></a></li>
								
								<hr />
                              </ul>

                            </li>
                          </ul>
                        </div>
                        <p class="tip">Clique sobre o selinho e escolha seu programa favorito para enviar um recadinho.</p>
                      </div>
                      <span class="dots">...</span>
                      <hr />
                      <form id="formFale" class="formaFale" name="formFale" method="POST" action="">
                        <input type="hidden" name="captcha" id="captcha" value="1" />
                        <input type="hidden" name="mailSent" id="mailSent" value="1" />
							<p class="nome"><label class="withe">Nome:</label><input name="nome" id="nome" type="text" /></p>
							<p class="cidade"><label class="withe">Cidade:</label><input name="cidade" id="cidade" type="text" /></p>
							<p class="estado"><label class="withe">Estado:</label><input name="estado" id="estado" type="text" /></p>
							<p class="idade"><label class="withe">Idade:</label><input type="text" name="idade" id="idade" /></p>
							<p class="mensagem"><label class="withe">Escreva seu recadinho:</label><textarea id="recado" name="recado"></textarea></p>
							<img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
							<input id="signupsubmit" class="enviar" name="signup" type="submit" value="Enviar" />
						</form>
                      <p class="atencao"><span class="withe">Aten&ccedil;&atilde;o!</span> Os campos destacados apresentam erro.</p>
                    </div>
                    <div class="respostaSucesso" style="display:none">
                      <h3>Recadinho enviado com sucesso!</h3>
                      <p>Seu recadinho ser&aacute; verificado e em breve aparecer&aacute; aqui no <span>+ Crian&ccedil;a</span>.</p>
                      <span class="dots">...</span>
                      <a class="enviarOutro" href="/maiscrianca/recadinhos">Enviar outro recadinho</a>
                      <img src="http://cmais.com.br/portal/maiscrianca/images/img-smile.png" alt="=]" />
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <hr />
            </div>
          </div>
          <hr />
          
          <?php include_partial_from_folder('sites/maiscrianca', 'global/footer') ?>
          
        </div>

        <div class="cerca"></div>
      </div>

      <div class="rodapeTvCultura">
        <?php include_partial_from_folder('blocks', 'global/footer') ?>
      </div>

    </div>
       
  </body>
</html>