<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />
    <?php include_title()    ?>
    <?php include_metas()    ?>
    <?php include_meta_props()    ?>
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />
    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />
    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/indexQuintal.css" type="text/css" />
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jPlayer/js/jquery.jplayer.min.js"></script>
  </head>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']); (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <body>
    <!--ALLWRAPPER-->
    <div class="allWrapper">
      <?php use_helper('I18N', 'Date')      ?>
      <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))      ?>

      <!--CONTENT WRAPPER-->
      <div class="contentWrapper" align="center">
        <!--CONTENT-->
        <div class="content">
          <!--MENU QUINTAL-->
          <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu')          ?>

          <!--CONTEUDO-->
          <div class="conteudo">
            <!--p class="breadcrumb"><a href="/">cmais</a> &gt;&gt; Quintal da Cultura</p-->
            <!--CONTEUDO WRAPPER-->
            <div class="conteudoWrapper">
            	<!-- Tira Rosa choque
            	<div  class="rosachoque">
          			<a href="quintaldacultura/look-rosachoque" class="titulos"><img src="http://cmais.com.br/portal/quintal/images/destaque-lookrosachoque.png"></a>
          		</div>
          		-->
              <!--ITENS BACKGROUND-->
              <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground')              ?>
              <!--/ITENS BACKGROUND-->
              <!--MENU PRINCIPAL-->
              <div id="menu-quintal-principal">
                <script>
                
                  $(document).ready(function() {
                    $('area[id*="btn"],area[id*="map"]').mouseenter(function() {
                      $('#over-' + $(this).attr('name')).show();
                    })
                    $('area[id*="btn"],area[id*="map"]').mouseleave(function() {
                      $('#over-' + $(this).attr('name')).hide();
                    })
                  })
                  
                </script>
                <!--MENU-BOTOES-->
                <img class="over" src="http://cmais.com.br/portal/quintal/images/personagens-home.png" border="0" usemap="#personagensMap" id="personagens"/>
                <map name="personagensMap">
                  <area shape="poly" id="btn-teobaldo" name="teobaldo" title="Música" alt="Música"  coords="444,54,491,16,552,17,589,51,598,99,581,156,595,169,651,133,688,122,708,139,704,171,632,213,606,291,660,489,645,525,606,470,576,469,535,439,474,463,465,482,462,629,416,606,406,542,440,509,427,447,400,437,419,385,407,362,395,321,394,302,368,299,370,269,450,179,482,157,450,111" href="http://cmais.com.br/quintaldacultura/musicas">
                  <area shape="poly" id="btn-ludovico" name="ludovico" title="Jogos" alt="Jogos" coords="275,501,306,448,356,428,422,451,436,508,412,525,400,547,398,602,452,625,533,712,532,754,495,769,497,853,533,925,531,980,544,1151,101,1057,99,956,167,956,274,1006,209,873,261,793,136,704,157,665,263,600,322,578" href="http://cmais.com.br/quintaldacultura/jogos">
                  <area shape="poly" id="btn-osorio" name="osorio" title="Diversão" alt="Diversão" coords="256,60,280,38,309,47,325,60,337,80,344,110,365,189,380,222,379,233,359,290,346,331,335,350,326,387,319,418,321,440,300,447,292,456,264,510,294,547,290,582,222,621,140,673,151,403,51,239" href="http://cmais.com.br/quintaldacultura/diversao">
                  <area shape="poly" id="btn-filomena" name="filomena" title="A turma" alt="A turma" coords="899,393,960,511,953,780,872,828,765,787,757,701,786,633,781,562,712,537,730,505,778,479,778,463,717,435,720,312,689,230,706,187,731,68,757,39,785,39,834,59,853,82,848,140,905,154,917,180,914,204,894,227" href="http://cmais.com.br/quintaldacultura/turma">
                  <area shape="poly" id="btn-doroteia" name="doroteia" title="Vídeos" alt="Vídeos" coords="486,585,516,504,549,471,600,474,623,495,640,529,667,538,683,485,663,438,665,424,772,465,772,478,727,498,707,540,771,563,779,633,745,708,724,752,690,770,773,799,895,842,952,855,966,918,957,968,848,964,787,924,726,921,685,920,616,909,581,874,537,837,523,791,541,728,531,704,506,684,485,659,478,640" href="http://cmais.com.br/quintaldaculura/videos">
                  <area shape="poly" id="btn-quelonio" name="quelonio" title="Agenda" alt="Agenda" coords="565,929,568,959,559,989,571,1019,588,1052,606,1053,579,1079,568,1105,563,1132,647,1159,677,1156,720,1123,735,1104,751,1090,831,1087,856,1094,921,1107,937,1105,941,1074,881,1028,870,1002,833,956,794,929,651,924,632,917,601,910" href="http://cmais.com.br/quintaldacultura/agenda">
                </map>
                
               
                
                <!--/MENU-BOTOES-->
                <img id="over-teobaldo" class="over" alt="Músicas" src="http://cmais.com.br/portal/quintal/images/hover-musica.png"  usemap="#over-teobaldoMap" style="display:none;" />
                <img id="over-ludovico" class="over" src="http://cmais.com.br/portal/quintal/images/hover-jogos.png" alt="Jogos" usemap="#over-ludovicoMap" style="display:none;"/>
                <img id="over-osorio" class="over" src="http://cmais.com.br/portal/quintal/images/hover-diversao.png" alt="Diversão" usemap="#over-osorioMap"  style="display:none;"/>
                <img id="over-filomena" class="over" src="http://cmais.com.br/portal/quintal/images/hover-aturma.png" alt="A turma"  usemap="#over-filomenaMap" style="display:none;"/>
                <img id="over-doroteia" class="over" src="http://cmais.com.br/portal/quintal/images/hover-videos.png" alt="Vídeos"  usemap="#over-doroteiaMap" style="display:none;"/>
                <img id="over-quelonio" class="over" src="http://cmais.com.br/portal/quintal/images/hover-agenda.png" usemap="#over-quelonioMap" style="display:none;"/>
               
                <map name="over-teobaldoMap">
                  <area id="map-teobaldo" name="teobaldo" title="Músicas" alt="Músicas" shape="poly" coords="29,359,67,365,114,374,167,369,171,217,167,82,175,6,139,3,64,39,36,76,-2,125,-1,196,21,199,25,221,-1,248,-1,282,29,302" href="http://cmais.com.br/quintaldacultura/musicas">
                </map>
                <map name="over-quelonioMap">
                  <area id="map-quelonio" name="quelonio" title="Agenda" alt="Agenda" shape="poly" coords="123,205,177,233,200,195,160,114,137,67,130,26,115,-2,96,20,42,15,-2,26,0,89,3,129,3,210,13,210,52,218" href="http://cmais.com.br/quintaldacultura/agenda">
                </map>
                <map name="over-filomenaMap">
                  <area id="map-filomena" name="filomena" title="A turma" alt="A turma" shape="poly" coords="206,256,252,221,264,167,225,75,176,33,114,8,26,2,1,198,1,291,47,316,207,308,212,289" href="http://cmais.com.br/quintaldacultura/turma">
                </map>
                <map name="over-osorioMap">
                  <area id="map-osorio" name="osorio" title="Diversão" alt="Diversão" shape="poly" coords="162,229,288,232,287,134,286,82,291,45,284,-1,247,0,228,8,202,16,17,63,0,71,10,159,84,202,102,231" href="http://cmais.com.br/quintaldacultura/diversao">
                </map>
                <map name="over-doroteiaMap">
                  <area id="map-doroteia" name="doroteia" title="Vídeos" alt="Vídeos" shape="poly" coords="348,248,353,236,237,222,264,157,349,76,303,25,238,2,168,8,182,67,52,87,8,136,36,158,45,250" href="http://cmais.com.br/quintaldacultura/videos">
                </map>
                <map name="over-ludovicoMap">
                  <area id="map-ludovico" name="ludovico" title="Jogos" alt="Jogos"  shape="poly" coords="107,-5,152,-4,333,-1,369,3,375,69,362,368,338,383,269,378,98,373,37,378,1,377,-4,302,-8,268,-5,236,-6,189,5,177,30,166,60,136,36,108" href="http://cmais.com.br/quintaldacultura/jogos">
                </map>                
              </div>
 
              <!--/MENU PRINCIPAL-->
            </div>
            <!--/CONTEUDO WRAPPER-->
            
             <?php if(isset($displays["enquete"])):?>
          <?php if(count($displays["enquete"])>0):?>
              <?php
              $vd = $displays["enquete"][0]->Asset->retriveRelatedAssetsByAssetTypeId(6);
              $img = $displays["enquete"][0]->Asset->retriveRelatedAssetsByRelationType("Preview");
              
              $respostas = Doctrine_Query::create()
                ->select('aa.*')
                ->from('AssetAnswer aa')
                ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
                ->execute();
              ?>
              
           <!-- FORM DESTAQUE ENQUETE -->
            <div id="destaque-enquete">
              <div class="col-esq">
                <?php
                /*
                <?php if(count($vd) > 0):?>
                  <iframe width="310" height="250" src="//www.youtube.com/embed/<?php echo $vd[0]->AssetVideo->getYoutubeId() ?>" frameborder="0" allowfullscreen></iframe>
                <?php elseif (count($img) > 0):?>
                  <img src="<?php echo $img[0]->retriveImageUrlByImageUsage("image-13-b"); ?>" title="<?php echo $img[0]->getTitle(); ?>" />
                <?php endif; ?>
                 */
                 ?>
                 <img src="http://cmais.com.br/portal/quintal/images/enquete/rosquinha.png" title="<?php echo $img[0]->getTitle(); ?>" />  
              </div>
              
              <div class="col-dir">
                <div class="text">
                  <?php echo html_entity_decode($displays["enquete"][0]->Asset->AssetQuestion->getQuestion()) ?>
                </div>
                <!--Form enquete-->
                  <form method="post" id="e<?php echo $displays["enquete"][0]->Asset->getId();?>" class="form-voto">
                    <?php 
                      $form = new BaseForm();
                      echo $form->renderHiddenFields();
                    ?>
                    <?php foreach ($respostas as $k => $r):?>
                      <div class="div-choice">
                        <label for="resposta<?php echo $k?>">
                          <input type="radio" name="opcao" id="resposta<?php echo $k?>" class="required" value="<?php echo $r->Asset->AssetAnswer->id ?>"  />
                          <?php echo $r->Asset->AssetAnswer->getAnswer() ?>
                        </label>
                      </div>
                    <?php endforeach;?>
                    <input type="submit" class="votar" value="VOTAR">
                  </form>
                <!--/Form enquete-->
                  <div class="inativo" style="display: none;">
                  <?php foreach($respostas as $k => $r): ?>
                    <?php
                    /*
                    <div class="resposta<?php echo $k?>">
                      <label>50%</label>
                    </div>
                    */
                     ?>
                  <?php endforeach;?>
                </div>
              </div>
              
            </div>  
            <!-- FORM DESTAQUE ENQUETE-->
            
            
           <?php endif;?>
        <?php endif;?>   
            
            <!-- FORM DESTAQUE -->
            <div id="destaque" style="display:none;">
              <div class="col-dir">
              	<div class="msgAcerto" id="statusMsg_0" style="display:none"> </div>
								<div class="msgErro" id="statusMsg_1" style="display:none"> </div>
                <form id="form-contato" action="http://app.cmais.com.br/actions/quintaldacultura/sendmail.php"  method="post" enctype="multipart/form-data" <?php if(isset($_GET["success"]))echo 'style="display:none;"' ?> >
                  <label><span class="sprite-ico-nome"></span> <input type="text" id="nome" name="nome" value="Nome" data-default="Nome" /></label>
                  <label><span class="sprite-ico-responsavel"></span> <input type="text" id="responsavel" name="responsavel" value="Nome do Responsável" data-default="Nome do Responsável" /> </label>
                  <label class="cidade"><span class="sprite-ico-cidade"></span> <input type="text" id="cidade" name="cidade" value="Cidade" data-default="Cidade" /> </label>
                  <label class="estado"><input type="text" id="estado" name="estado" value="UF" data-default="UF" maxlength="2" /></label>
                  <label><span class="sprite-ico-email"></span> <input type="text" id="email" name="email" value="Email" data-default="Email" /> </label>
                  <label class="idade"><span class="sprite-ico-aniversario"></span> 
                    <input type="text" id="idade" value="Idade" placeholder="Idade" name="idade" data-default="Idade"  placeholder="Idade">
                  </label>
                  <label class="sprite-ico-anexo" for="datafile">
				          <input id="datafile" class="file-wrapper" accept="png|jpe?g|gif" type="file" name="datafile"></label>
				          <span class="button">Anexar</span>
                  
                  <label class="concordo"><input type="radio" id="concordo" name="concordo" />Estou ciente e de acordo com os Termos e Condições abaixo:</label>
                  <textarea id="termo" name="termo">
Participação:
Este é um programa de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a crianças representadas por seus pais ou responsáveis legais.
 
Para participar, o interessado (com autorização de pais ou responsáveis) deve enviar um desenho de sua casa, bichinho de estimação, um passeio com amigos ou paisagem. Não há restrições temáticas, desde que o texto seja livre de preconceitos, palavras obscenas ou conteúdo inadequado ao público infantil. O desenho deve ser encaminhado pelo site: http://cmais.com.br/quintaldacultura
 
1.1 Os desenhos deverão ser enviados acompanhados dos dados pessoais do participante, utilizando o formulário da página. Caso o participante seja menor de 18 (dezoito) anos, deverá necessariamente ter autorização dos seus pais ou responsáveis, bem como preencher os dados dos seus representantes legais: nome e e-mail. Cada pessoa pode participar com quantos desenhos desejar.
 
1.2. A Fundação Padre Anchieta não se responsabiliza por eventuais falhas no envio do material.
 
2. Critérios de Seleção:
 
2.1 A seleção dos desenhos será feita pela equipe de Produção da TV Cultura e será baseada na observação dos seguintescritérios e pela ordem: criatividade, originalidade e adequação à faixa etária.
 
2.2 Serão desconsiderados os textos com dados incorretos; os que fujam da adequação à faixa etária (público infantil); que tenham conteúdo inadequado.
 
2.3 Cada criança poderá participar enviando quantos desenhos desejar.
 
3. Considerações Gerais:
 
3.1 Os participantes representados por seus pais ou responsáveis legais, declaram, desde já, a autorização de seu nome e cidade onde moram para publicação na programação da TV Cultura e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.
 
3.2 A FPA não aceitará qualquer desenho que contenha exposição de pessoas em situações vexatórias, incitando o preconceito, violência e que contenham apelo sexual ou ao consumismo exacerbado.
 
3.3 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela Produção da TV Cultura referida no item 2.1 deste Regulamento.
 
3.4 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento.
 
3.5 Os desenhos poderão ser publicados no site http://cmais.com.br/quintaldacultura e os melhores poderão ser exibidos na programação da TV Cultura/Quintal da Cultura.
                  	
                  </textarea>
                 
                  <div class="enviar">
					          <input type="submit" class="enviar" name="enviar" id="enviar" value="ENVIAR"></input>
					        </div> 
                <input type="hidden" id="urlElement" name="urlElement" value="">
                </form>
              </div>
              
              <div class="col-esq">
               
              </div>
            </div>
            <!-- FORM DESTAQUE -->
         
            <!--DESTAQUE JOGUINHOS -->
            <?php //include_partial_from_folder('sites/quintaldacultura', 'global/destaque-joguinhos')            ?>
            <!--DESTAQUE JOGUINHOS -->
            <!--FOOTER QUINTAL-->
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer')            ?>
            <!--/FOOTER QUINTAL-->
          </div>
          <!--/CONTEUDO-->
        </div>
        <!--/CONTENT-->
      </div>
      <!--/CONTENT WRAPPER-->
      <!--FOOTER-->
      <?php include_partial_from_folder('blocks', 'global/footer')
      ?>
      <!--/FOOTER-->
    </div>
    <!--/ALLWRAPPER-->

 		<script src="http://cmais.com.br/portal/js/ajaxFileUpload/ajaxfileupload.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
		<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
		<script type="text/javascript">
    $(document).ready(function(){
    //if($('#form-contato').is(':visible')){
      //$('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);
  
      
  	  $('#nome').focus(function(){ 		if($(this).val() == "Nome") {  $(this).val(''); }; 	});
  	  $('#nome').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome'); 	};	});
  	  $('#responsavel').focus(function(){ 		if($(this).val() == "Nome do Responsável") {  $(this).val(''); }; 	});
  	  $('#responsavel').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome do Responsável'); 	};	});
  	  $('#idade').focus(function(){ 	if($(this).val() == "Idade") {  $(this).val(''); }; });
  	  $('#idade').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Idade'); 	 };	});	  
  	  $('#cidade').focus(function(){ 	if($(this).val() == "Cidade") {  $(this).val(''); }; });
  	  $('#cidade').focusout(function(){ if($(this).val() == ''){ $(this).val('Cidade');   }; });
  	  $('#estado').focus(function(){ 	if($(this).val() == "UF") {  $(this).val(''); }; });
  	  $('#estado').focusout(function(){ if($(this).val() == ''){ $(this).val('UF');   }; });
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
          responsavel:{
            required: function(){ validate("#responsavel"); return true},
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
          uf:{
            required: function(){ validate("#estado"); return true},
            minlength: 2
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
          responsavel:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          idade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          email:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          cidade:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          uf:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!',
          concordo:'*TODOS OS CAMPOS SÃO DE PREENCHIMENTO OBRIGATÓRIO!'
        }, 
        
        success: function(label){
        }
      });
      
      $('#enviar').click(function(){
        verifyKey();
      });
    }
    

		function getURLParameter(name) {
			return decodeURI(
		        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
		    );
		}
		var testep = getURLParameter("testep");
	  var success = getURLParameter("success");
	  var error = getURLParameter("error");
    
    if(testep == 1){
      $('#destaque').show();
    }
	  if(success == 1){
	    $(".msgAcerto").show();
	    $("#form-contato").hide();
	    $(".msgAcerto").html("<p> Seu desenho foi enviado com sucesso!<br/> Em breve estará em nossa galeria!</p>");
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
</script>  
    
  </body>
</html>