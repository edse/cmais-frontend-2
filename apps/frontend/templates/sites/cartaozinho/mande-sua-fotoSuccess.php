<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cartaozinho/geral.css" type="text/css" />

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
  <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.css?v=2.1.5" media="screen" />
    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
  
  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site">
    <!-- CAPA SITE -->
    <div id="capa-site">

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
      	<a href="http://cmais.com.br/cartaozinho/mande-sua-foto" title="mande sua foto" class="mande-sua-foto-interna">
         <!--p>Entre para a torcida do Cartãozinho</p-->
        </a>
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="contato grid2 video">

                <h3 class="tit-pagina grid2">A torcida do Cartãozinho está se aquecendo para entrar em campo e precisa de sua animação!</h3>  
                <p style="margin: 0 10px 20px;">Vai vestir a camisa, pintar a cara, fazer muito barulho? Mostre como a sua galera vai torcer!<br>
Mande sua foto para o nosso álbum virtual: torcendo, vibrando e comemorando que ela pode aparecer no programa.</p>
									
								<div class="msgAcerto" id="statusMsg_0" style="display:none"> </div>
								<div class="msgErro" id="statusMsg_1" style="display:none"> </div>
        					
                <form id="form-contato" action="http://app.cmais.com.br/actions/cartaozinho/envie-sua-foto.php" method="post" enctype="multipart/form-data">
                  
                  <fieldset>
                    <legend><h1><b>Informe seus dados</b></h1></legend>
                    <br>
                  </fieldset>
                  
                  <div class="linha t3">
                    <label>nome da crianca</label>
                    <input type="text" id="nome" value="Nome" name="nome" data-default="Nome"  placeholder="Nome">
                  </div>
                  <div class="linha t3">
                    <label>nome dos pais ou responsável legal</label>
                    <input type="text" id="resp" value="Nome do Responsável" name="resp" data-default="Nome do Responsável"  placeholder="Nome do Responsável">
                  </div> 
                 <div class="linha t1">
                    <label>cidade</label>
                    <input type="text" id="cidade" value="Cidade" name="cidade" data-default="Cidade" placeholder="Cidade">
                  </div>
                  <div class="linha t2">
                    <label>estado</label>
                    <br />
                  	<select id="estado" name="estado">
                      <option value="" selected="selected">--</option>
                      <option value="Acre">AC</option>
                      <option value="Alagoas">AL</option>
                      <option value="Amazonas">AM</option>
                      <option value="Amap&aacute;">AP</option>
                      <option value="Bahia">BA</option>
                      <option value="Cear&aacute;">CE</option>
                      <option value="Distrito Federal">DF</option>
                      <option value="Espirito Santo">ES</option>
                      <option value="Goi&aacute;s">GO</option>
                      <option value="Maranh&atilde;o">MA</option>
                      <option value="Minas Gerais">MG</option>
                      <option value="Mato Grosso do Sul">MS</option>
                      <option value="Mato Grosso">MT</option>
                      <option value="Par&aacute;">PA</option>
                      <option value="Para&iacute;ba">PB</option>
                      <option value="Pernambuco">PE</option>
                      <option value="Piau&iacute;">PI</option>
                      <option value="Paran&aacute;">PR</option>
                      <option value="Rio de Janeiro">RJ</option>
                      <option value="Rio Grande do Norte">RN</option>
                      <option value="Rond&ocirc;nia">RO</option>
                      <option value="Roraima">RR</option>
                      <option value="Rio Grande do Sul">RS</option>
                      <option value="Santa Catarina">SC</option>
                      <option value="Sergipe">SE</option>
                      <option value="S&atilde;o Paulo">SP</option>
                      <option value="Tocantins">TO</option>
                  </select>
                  </div>
                  <div class="linha t3">
                    <label>email</label>
                    <input type="text" id="email"  value="Email" name="email" placeholder="E-mail de contato">
                  </div>
                  <div class="linha t3">
                  
                  </div>
                  
                  <!--Anexo-->
                  <div class="linha file-wrapper">
						          <label style="float:none" for="datafile">Foto</label>
						          <input id="datafile" class="" accept="png|jpe?g|gif" type="file" name="datafile">
						          <span class="button">Anexar</span>
						        
						      </div>
						        <!--/Anexo-->
                  
                  <div class="linha t3">
                      <label>Regulamento</label>
                      <div class="regulamento">

                        <ul>
                      <li><p class="bold">1. Participação:</p>
                        <p>Esta é uma ação de caráter exclusivamente cultural que visa estimular a interação do participante com o programa de televisão Cartãozinho Verde, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. Esta ação destina-se ao público em geral, sem qualquer limitação, e está devidamente regulada conforme às disposições do Código Civil (10.406/02) e Lei de Direitos Autorais (9.610/98).</p>
												<p>Para participar, o interessado deve enviar uma foto relacionada à temática solicitada que será definida no site cmais.com.br/cartaozinho. A foto deve ser baixada para inserção no site cmais.com.br/cartaozinho/copa a partir do dia 31/05/2014.</p>
												<p>1.1 A foto deverá ser enviada acompanhado dos dados pessoais do participante, utilizando o formulário da página. Caso o participante seja menor de 18 (dezoito) anos deverá necessariamente ter autorização dos seus pais ou responsáveis, bem como preencher os dados dos seus representantes legais.</p>
												<p>1.2. A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas não se responsabiliza por eventuais falhas causadas no envio do material.</p>
												<p>1.3. Ao encaminhar a foto, o participante e seus representantes legais declaram ter lido, compreendido e concordado em cumprir com estes termos. Será do participante única e exclusivamente a responsabilidade sobre todo conteúdo encaminhado, sendo que seus responsáveis legais responderão solidariamente, e ainda, tanto o participante, como seus representantes legais, deverão eximir quaisquer terceiros e a Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas sobre eventuais transtornos ou danos causados e/ou pela conduta do participante e ou conteúdo disponibilizado.</p>
                      </li>
                      <li><p class="bold">2. Critérios de Seleção:</p>
                        <p>2.1 A seleção das fotos será feita pela equipe de produção do programa, baseada na observação dos seguintes critérios e pela ordem: originalidade e adequação ao tema. Serão selecionadas diversas fotos, segundo os mencionados critérios, que atenderem os padrões de qualidade das emissoras da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas.</p>
												<p>2.2 Serão desconsideradas as fotos com dados incorretos e de menores sem autorização dos seus responsáveis legais; os que fujam da temática descrita; que não sejam de autoria própria; que desrespeitem as leis relacionadas a direitos autorais ou direitos de personalidade e que tenham conteúdo inadequado.</p>
												<p>2.3. As inscrições que não estiverem de acordo com as condições deste Regulamento, quando identificadas, também serão invalidadas imediatamente.</p>
												<p>2.4. Serão automaticamente excluídos os participantes que tentarem fraudar ou burlar as regras estabelecidas neste regulamento ou ainda que não cederem os direitos previstos na Cláusula 3.1 abaixo.</p>
                      </li>
                      <li><p class="bold">3. Considerações Gerais:</p>
                        <p>3.1 Os participantes maiores e menores (representados por seus pais ou responsáveis legais quando menores), declaram, desde já, serem de sua única e exclusiva autoria as fotos encaminhadas ao site do programa e que os mesmos não constituem plágio de espécie alguma, ao mesmo tempo em que cedem e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo no Brasil e/ou Exterior sem quaisquer limitações, de forma plena e total, todos os direitos autorais, conexos e personalíssimos sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado, tanto no Brasil, como para o Exterior.</p>
                        <p>3.2 A Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas não aceitará qualquer foto que exponha as pessoas a situações vexatórias, incitem ao preconceito, violência, contenham apelo sexual ou ao consumismo exacerbado.</p> 
                        <p>3.3.O autor da foto declara que o conteúdo enviado é dotado de caráter de originalidade, não constuindo em ofensa a direitos de terceiros, pelo que também se responsabiliza pela obtenção das necessárias autorizações ou licença de utilização de imagem e som de voz das pessoas eventualmente retratadas nas reproduções, bem como pelos instrumentos de licença de direitos autorais relativos a eventuais obras de arte, eventuais marcas ou elementos protegidos por propriedade intelectual ou qualquer violação de direitos autorais e imagens de terceiros retratados.</p>
												<p>3.4 Eventuais críticas e/ou sátiras relacionadas a eventos públicos de entretenimento não terão conteúdo ofensivo ou depreciativo e serão admitidas, a único e exclusivo critério da Fundação Padre Anchieta, nos estritos limites do exercício de tais direitos, nos termos do artigo 48 da Lei de Direitos Autorais, respeitados a honra, a imagem e os direitos de personalidade de terceiros envolvidos. Se a Fundação Padre Anchieta tiver qualquer restrição a tal conteúdo poderá desclassificar a participação de tal foto, a seu livre e exclusivo critério, sem qualquer reclamação do participante.</p>
												<p>3.5 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela equipe de produção referida no item 2.1 deste Regulamento.</p>
												<p>3.6 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento. As fotos recebidas não serão devolvidos e poderão permanecer arquivados pela Promotora.</p>
												<p>3.7 As fotos poderão, a exclusivo critério da FPA, serem exibidos no canal de televisão aberto intitulado TV Cultura de São Paulo e demais emissoras afiliadas/licenciadas, no canal de televisão fechado denominado TV Rá Tim Bum, bem como nas Rádios Cultura AM/FM, para exibição no Brasil e no exterior, e também poderão ser publicados no site cmais.com.br/cartaozinho.</p>
												<p>3.8. A ação objeto do presente regulamento poderá ser encerrada a qualquer tempo, a único e exclusivo critério da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, desobrigando a mesma de exibir as fotos escolhidas nesta hipótese.
												<p>3.9. A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas terá o direito de editar e alterar a foto encaminhada pelo Participante que, com o aceite do presente Regulamento, consente com referida edição. A edição será feita visando adequar aos critérios de exigência do tema e aos padrões de qualidade da programação da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas.</p>
												<p>3.10 O Conteúdo a ser encaminhado pelo participante não poderá:</p>
                        <ul>
                          <li>(i) - Infringir e ou violar direitos de terceiros;</li>
                          <li>(ii) - conter qualquer disposição que viole Leis, Estatutos, Normas, Portarias;</li>
                          <li>(iii) - incitar práticas de crimes e ou contravenções penais;</li>
                          <li>(iv) - promover atividades ilegais;</li>
                          <li>(v) - conter fatos caluniosos, difamatórios, ameaçadores, abusivos, violentos, mal-intencionados;</li>
                          <li>(vi) - incitar ao ódio ou à discriminação de raça, cor, gênero, religião, nacionalidade, etnia ou origem nacional, estado civil, deficiência;</li>
                          <li>(vii) - expor qualquer terceiro em situação constrangedora</li>
                        </ul>
                        <p>3.11. A participação nesta ação interativa não acarretará ao participante nenhum outro direito e/ou vantagem que não esteja expressamente prevista neste Regulamento.</p>
                      </li>
                      
		                    </ul>    
		                  </div>
                   </div>
                    
                    <div class="t3 concordo">
                      <input type="radio" name="concordo" id="concordo" value="concordo">
                      <label for="concordo">Declaro que li e concordo com o regulamento</label>
                    </div>
                  
                  <!--
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer">
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                  -->
                
                  <div class="linha t3 codigo" id="captchaimage">
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer">
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                  </div>
                </form>
                
                <!--section class="todos-itens">
					      <h2>Veja a galeria de fotos!</h2>

                  <?php
						      //pegando campanhas->subsections pra listar blocos enviados
						      $sectionList = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), "mande-sua-foto");
						      foreach($sectionList->subsections() as $k=>$ss):
						        if($ss->getTitle() != $section->Parent->getTitle()):
						          $section = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), $ss->getSlug());
						          $blocks = Doctrine_Query::create()
						            ->select('b.*')
						            ->from('Block b, Section s')
						            ->where('b.section_id = s.id')
						            ->andWhere('s.slug = ?', $section->getSlug())
						            ->andWhere('b.slug = ?', 'enviados') 
						            ->andWhere('s.site_id = ?', $site->id)
						            ->execute();
						        if(isset($blocks)){
						          if(count($blocks) > 0):
						            $displays_enviados['enviados'] = $blocks[0]->retriveDisplays();
						          endif;    
						        }
						        ?>
						        <?php 
						          if(isset($displays_enviados['enviados'])):
						            if(count($displays_enviados['enviados']) > 0):
						            ?>
						            <div class="accordion-group">
						              <div class="accordion-heading">
						                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $k?>">
						                  <?php echo $ss->getTitle() ?>
						                </a>
						              </div>
						              <div id="collapse<?php echo $k ?>" class="accordion-body collapse" style="height: 0px;">
						                <div class="accordion-inner ">
						                  <ul id="container<?php echo $k ?>" class="row-fluid">
						                          <?php foreach($displays_enviados['enviados'] as $ai): ?>
						                          	
						                          <li class="span4 element" >
						                            <a class="fancybox2" rel="gallery1" href="<?php echo $ai->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $ai->Asset->getTitle()." - ". $ai->Asset->getDescription() ?>" aria-label="<?php echo $ai->Asset->AssetImage->getHeadline() ?>">
						                              <div class="container-image"> 
						                                <img src="<?php echo $ai->Asset->retriveImageUrlByImageUsage('image-13'); ?>" alt="<?php echo $ai->getTitle(); ?>">
						                              </div>
						                              <i class="icones-sprite-interna icone-participe-pequeno"></i>
						                              <div><img class="altura" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/altura.png"><?php echo $ai->getTitle(); ?></div>
						                            </a>
						                          </li>
						                        <?php endforeach; ?>
						                      
						                  </ul>
						                </div>
						              </div>
						            </div>
						            <?php  
						            endif; 
						          endif;  
						        endif;
						      endforeach;
						      ?>
							      
												      
			          </section-->
					              
                
              </div>
              
                
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("maiscrianca");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
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
    </div>
  

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
	$(".fancybox").fancybox({
	 helpers : {
        title: {
            type: 'over'
        }
      }
  });
											      
											
</script>  

