<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cartaozinho/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cartaozinho/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cartaozinho.css" type="text/css" />

  <!-- Add fancyBox main JS and CSS files -->

  <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.js"></script>
  <!--script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script-->
  <script type="text/javascript" src="http://cmais.com.br/portal/js/turn.js"></script>
  <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.css?v=2.1.5" media="screen" />
  
    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site">
    <!-- CAPA SITE -->
    <div id="capa-site">
    	<img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/logo-copa.png" style="display: none">

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/logo-copa.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
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
      	<a href="/cartaozinho/mande-sua-foto" title="Mande sua foto" class="mande-sua-foto-internaBig">
         		 <!--p>Entre para a torcida do Cartãozinho</p-->
         		 </a>
        
        <!-- BOX LATERAL -->
        <?php //include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
          	<!--gif loading-->
          	<div id="loading"><img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/211.GIF"><p>Carregando álbum</p></div>
          	<!--/gif loading-->
          	<div class="instrucoes"><img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/instrucoes.png"></div>
							<?php 
							$quantFig = count($displays["enviados"])/4;
              $pages = ceil($quantFig) ;
              
                
							//echo $pages;
							?>
							<?php if(isset($displays["enviados"])):?>
							  <?php if(count($displays["enviados"])>0):?>
							   <!-- album-->
                 <div id="magazine" style="display: none;">
                   <!-- capa --> 
    							 <div class="albumCapa"></div>
  							   <!-- /capa -->
  							  
  							  <!--estilos borda fig - cria variável para cada caso de estilo -->
  							  <?php 
                   $estilo = array('style="position: absolute;left: 22px;top: 50px;"','style="position: absolute;left: 206px;top: 50px;"','style="position: absolute;left: 22px;top: 292px;"','style="position: absolute;left: 206px;top: 292px;"');
                  ?>
  							  <!--estilos borda fig-->
  							  
  							  <!--páginas-->
  							  <?php //$fig = 0?> 
							    <?php //for($i=0; $i<$pages;$i++):?>
							    <?php $fig = $pages?> 
                  <?php for($i = $pages; $i>=0;$i--):?>
							      <!-- determinando pg Esq ou Dir -->
  							    <?php if($i%2 == 0){$side = "Esq";}else{$side = "Dir";}?>
  							    
  							    <div class="album<?php echo $side; ?>">
  							      <ul class="containerAlbum">
                          <?php for($j = 0; $j < 4; $j++):?>
                            <?php if($fig < count($displays["enviados"])):?>
                              <li class="listaFigurinhas" >
                                <a class="fancybox2" rel="gallery1" href="<?php echo $displays["enviados"][$fig]->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $displays["enviados"][$fig]->Asset->getTitle()." - ". $displays["enviados"][$fig]->Asset->getDescription() ?>" aria-label="<?php echo $displays["enviados"][$fig]->Asset->AssetImage->getHeadline() ?>">
                                  <div class="container-image"> 
                                    <img src="<?php echo $displays["enviados"][$fig]->Asset->retriveImageUrlByImageUsage('image-9'); ?>" alt="<?php echo $displays["enviados"][$fig]->getTitle(); ?>">
                                    <div>
                                    	<img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/borda_figurinha.png" <?php echo $estilo[$j]?> >
                                    </div>
                                    <div class="legenda"><?php echo $displays["enviados"][$fig]->getTitle(); ?></div>
                                    
                                  </div>
                                </a>
                              </li>
                            <?php else:?>
                              <li class="listaFigurinhas" >
                                <div class="container-image"> 
                                  <img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/figurinha.jpg" alt="em breve">
                                  <div class="legenda">em breve</div>
                                </div>
                              </li>
                            <?php endif; ?>
                            
                            <!-- ordenando figurinhas -->
                            <?php //$fig++ ?>
                            <?php $fig-- ?>
                        <?php endfor;?>
                      </ul>
                    </div>
							    <?php endfor; ?>  
							    <!--/páginas-->
							    
							    <!-- caso tenha uma página em branco -->
							    <?php if($pages%2!=0):?>
							     <div class="albumDir ?>">
                      <ul class="containerAlbum">
                          <?php for($j = 0; $j < 4; $j++):?>
                            
                            <?php if($fig < count($displays["enviados"])):?>
                              <li class="listaFigurinhas" >
                                <a class="fancybox2" rel="gallery1" href="<?php echo $displays["enviados"][$fig]->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $displays["enviados"][$fig]->Asset->getTitle()." - ". $displays["enviados"][$fig]->Asset->getDescription() ?>" aria-label="<?php echo $displays["enviados"][$fig]->Asset->AssetImage->getHeadline() ?>">
                                  <div class="container-image"> 
                                    <img src="<?php echo $displays["enviados"][$fig]->Asset->retriveImageUrlByImageUsage('image-9'); ?>" alt="<?php echo $displays["enviados"][$fig]->getTitle(); ?>">
                                    <div class="legenda"><?php echo $displays["enviados"][$fig]->getTitle(); ?></div>
                                  </div>
                                </a>
                              </li>
                            <?php else:?>
                              <li class="listaFigurinhas" >
                                <div class="container-image"> 
                                  <img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/figurinha.jpg" alt="em breve">
                                  <div class="legenda">em breve</div>
                                </div>
                              </li>
                            <?php endif; ?>
                            <!-- ordenando figurinhas -->
                            <?php $fig++ ?>
                            
                        <?php endfor;?>
                      </ul>
                    </div>
							    <?php endif; ?>  
							    <!-- caso tenha uma página em branco -->
							    
  							  <!-- contracapa -->
  							  <div class="albumContraCapa"></div>
                  <!--/contracapa -->    							
    					  </div>
                <!--/ album-->
							 <?php endif; ?>
						  <?php endif; ?>
               <div class="fb-like revista" data-href="http://tvcultura.cmais.com.br/d.php/cartaozinho/album-da-torcida" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
							<?php
							/*
							<div class="albumEsq">
								<ul class="containerAlbum">
									<?php if(isset($displays["enviados"])):
										foreach ($displays["enviados"] as $k => $bloco):?>
											<li class="listaFigurinhas" >
                            <a class="fancybox2" rel="gallery1" href="<?php echo $bloco->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $bloco->Asset->getTitle()." - ". $bloco->Asset->getDescription() ?>" aria-label="<?php echo $bloco->Asset->AssetImage->getHeadline() ?>">
                              <div class="container-image"> 
                                <img src="<?php echo $bloco->Asset->retriveImageUrlByImageUsage('image-9'); ?>" alt="<?php echo $bloco->getTitle(); ?>">
                                <div class="legenda"><?php echo $bloco->getTitle(); ?></div>
                              </div>
                            </a>
                          </li>
											<?php endforeach;?>
									<?php endif;?>
								</ul>	
							</div>
							
							<div class="albumDir">
								<ul class="containerAlbum">
									<?php if(isset($displays["enviados"])):
										foreach ($displays["enviados"] as $k => $bloco):?>
											<li class="listaFigurinhas" >
                            <a class="fancybox2" rel="gallery1" href="<?php echo $bloco->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $bloco->Asset->getTitle()." - ". $bloco->Asset->getDescription() ?>" aria-label="<?php echo $bloco->Asset->AssetImage->getHeadline() ?>">
                              <div class="container-image"> 
                                <img src="<?php echo $bloco->Asset->retriveImageUrlByImageUsage('image-9'); ?>" alt="<?php echo $bloco->getTitle(); ?>">
                                <div class="legenda"><?php echo $bloco->getTitle(); ?></div>
                              </div>
                            </a>
                          </li>
											<?php endforeach;?>
									<?php endif;?>
								</ul>
							</div>
               */ 
							?>							
						
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
    </div>
<script type="text/javascript">

	$(window).ready(function() {
	  //teste 
		$('#loading').show();
		$('#magazine').turn({
							display: 'double',
							acceleration: true,
							gradients: !$.isTouch,
							elevation:50,
							pages:2,
							when: {
								turned: function(e, page) {
									/*console.log('Current view: ', $(this).turn('view'));*/
								}
							}
						});
			
						
	 setTimeout(function(){
	   $('#magazine').fadeIn("fast");
	   
		 $('#loading').hide();
	 },2000)					
	  
	});
	

	$(window).bind('keydown', function(e){

		if (e.keyCode==37)
			$('#magazine').turn('previous');
		else if (e.keyCode==39)
			$('#magazine').turn('next');

	});

</script>
<script src="http://cmais.com.br/portal/js/ajaxFileUpload/ajaxfileupload.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  				
      $('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
      
      
      
  	  $('#nome').focus(function(){ 		if($(this).val() == "Nome") {  $(this).val(''); }; 	});
  	  $('#nome').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome'); 	};	});
  	  $('#resp').focus(function(){ 		if($(this).val() == "Nome do Responsável") {  $(this).val(''); }; 	});
  	  $('#resp').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome do Responsável'); 	};	});
  	  $('#idade').focus(function(){ 	if($(this).val() == "Idade") {  $(this).val(''); }; });
  	  $('#idade').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Idade'); 	 };	});	  
  	  $('#cidade').focus(function(){ 	if($(this).val() == "Cidade") {  $(this).val(''); }; });
  	  $('#cidade').focusout(function(){ if($(this).val() == ''){ $(this).val('Cidade');   }; });
  	  $('#email').focus(function(){ 	if($(this).val() == "Email") {  $(this).val(''); }; });
  	  $('#email').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Email'); 	 };	});
  	  $('#mensagem').focus(function(){ 	if($(this).val() == "Mensagem") {  $(this).val(''); };	});
  	  $('#mensagem').focusout(function(){ if($(this).val() == ''){ $(this).val('Mensagem'); };	});
    	
      var validator = $('#form-contato').validate({
        
        submitHandler: function(form){
          //resgatando a página que a pessoa
          url = window.location;
          $('#urlElement').attr('value',url.href);
        	form.submit();
        },
        rules:{
          nome:{
            required: function(){ validate("#nome"); return true},
            minlength: 2
          },
          resp:{
            required: function(){ validate("#resp"); return true},
            minlength: 2
          },
          idade:{
            required: function(){ validate("#idade"); return true},
            number: true
          },
          email:{
            required: true,
            email: true
          },
          cidade:{
            required: function(){ validate("#cidade"); return true},
            minlength: 3
          },
          estado:{
            required: true
          },
          mensagem:{
            required: function(){ validate("#mensagem"); return true},
            minlength: 3
          },
  
          concordo:{
            required: true
          }
          
        },
        onkeyup:function(e){
          verifyKey();
        },
        messages:{
          nome:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          resp:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          idade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          email:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          cidade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          estado:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          mensagem:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          concordo:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!'
        }, 
        
        success: function(label){
        }
      });
      
      $('#enviar').click(function(){
        verifyKey();
      });
    
    

		function getURLParameter(name) {
			return decodeURI(
		        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
		    );
		}
		
	  var success = getURLParameter("success");
	  var error = getURLParameter("error");

	  if(success == 2){
	    $(".msgAcerto").show();
	    $("#form-contato").hide();
	    $(".msgAcerto").html("<p> Sua foto foi enviada com sucesso<br/> e em breve estará em nossa galeria!</p>");
	   // $(".msgAcerto").scrollTo('#statusMsg_0');
	  }else if(error == 1){
	    $(".msgErro").show();
	    $(".msgErro").html("<p>Erro inesperado<br/>Por favor, tente mais tarde!</p>");
	   // $(".msgErro").scrollTo("statusMsg_1");
	  }else if(error == 2){
	    $(".msgErro").show();
	    $(".msgErro").html("<p>Formato de imagem inválido<br/> Por favor, tente com JPG, PNG ou GIF!</p>");
	    //$(".msgErro").scrollTo("statusMsg_1");
	  }else if(error == 3){
	    $(".msgErro").show();
	    $(".msgErro").html("<p>Arquivo muito grande<br/> Por favor, tente com um arquivo de até 15 MB!</p>");
	    //$(".msgErro").scrollTo("statusMsg_1");
	  }

  });
  var SITE = SITE || {};

  SITE.fileInputs = function() {
    var $this = $(this),
        $val = $this.val(),
        valArray = $val.split('\\'),
        newVal = valArray[valArray.length-1],
        $button = $this.siblings('.button'),
        $fakeFile = $this.siblings('.file-holder');
    if(newVal !== '') {
      $button.text('Anexar');
      if($fakeFile.length === 0) {
        $button.after('<span class="file-holder">' + newVal + '</span>');
      } else {
        $fakeFile.text('Anexo: '+ newVal);
      }
    }
  }


  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
      //$(obj).addClass("error");
  }
  function verifyKey(){
    setTimeout(function() {
      $('input, textarea').not('#concordo').each(function(){
        var campo = $(this).attr('id');
        if($(this).hasClass('error')){
          $(this).prev().addClass('icone-form-'+campo+'-erro');
        }else{
          $(this).prev().removeClass('icone-form-'+campo+'-erro');
        }
      });
      
      $('#concordo').delay(100, function(){
        if($(this).hasClass('error')){
          $(this).parent().css('color', 'yellow');
        }else{
          $(this).parent().css('color', 'white');
        }
      });
      
    }, 100);
      
  }
  

                         

//console.log($(this).attr("aria-label"));
	$(".fancybox2").fancybox({
	 helpers : {
        title: {
            type: 'over'
        }
      }
  });
				
					      
											
</script>  

