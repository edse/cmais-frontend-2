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
    <link rel="stylesheet" href="/portal/quintal/css/geralQuintal.css" type="text/css" />
    <link rel="stylesheet" href="/portal/quintal/css/indexQuintal.css" type="text/css" />
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
							$img = $displays["enquete"][0]->Asset->retriveRelatedAssetsByAssetTypeId(2);
							
              $respostas = Doctrine_Query::create()
                ->select('aa.*')
                ->from('AssetAnswer aa')
                ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
                ->execute();
              ?>
              
           <!-- FORM DESTAQUE ENQUETE -->
            <div id="destaque-enquete">
              <div class="col-esq">
                <?php if(count($vd) > 0):?>
                  <iframe width="310" height="250" src="//www.youtube.com/embed/<?php echo $vd[0]->AssetVideo->getYoutubeId() ?>" frameborder="0" allowfullscreen></iframe>
                <?php elseif (count($img) > 0):?>
                  <img src="<?php echo "http://midia.cmais.com.br/assets/image/original/".$img[0]->AssetImage->original_file; ?>" title="<?php echo $img[0]->getTitle(); ?>" />
                <?php endif; ?>  
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
              </div>
              <div class="inativo" style="display: none;">
                <?php foreach($respostas as $k => $r): ?>
                  <div class="resposta<?php echo $k?>">
                    <label>50%</label>
                  </div>
                <?php endforeach;?>
              </div>
            </div>  
            <!-- FORM DESTAQUE ENQUETE-->
            
            
           <?php endif;?>
        <?php endif;?>    
                    
            
            <?php
            /*
            <!-- FORM DESTAQUE -->
            <div id="destaque">
              <div class="minhoquias"></div>
              <div class="col-dir">
                <form id="form-contato">
                  <label><span class="sprite-ico-nome"></span> <input type="text" id="nome" name="nome" value="Seu nome" data-default="Seu nome" /> </label>
                  <label class="cidade"><span class="sprite-ico-cidade"></span> <input type="text" id="cidade" name="cidade" value="Sua cidade" data-default="Sua cidade" /> </label>
                  <label class="estado"><input type="text" id="estado" name="estado" value="UF" data-default="UF" maxlength="2" /></label>
                  <label><span class="sprite-ico-responsavel"></span> <input type="text" id="responsavel" name="responsavel" value="Nome do responsável" data-default="Nome do responsável" /> </label>
                  <label><span class="sprite-ico-email"></span> <input type="text" id="email" name="email" value="Email para contato" data-default="Email para contato" /> </label>
                  <label class="data"><span class="sprite-ico-aniversario"></span> 
                    <input type="text" id="dia" name="dia" value="DD" data-default="DD" maxlength="2" /><span>/</span> 
                    <input type="text" id="mes" name="mes" value="MM" data-default="MM" maxlength="2" /><span>/</span> 
                    <input type="text" id="ano" name="ano" value="AA" data-default="AA" maxlength="2" />(Preencha com a data do seu nascimento) 
                  </label>
                  <!--
                  <label class="concordo"><input type="radio" id="concordo" name="concordo" />Estou ciente e de acordo com os Termos e Condições abaixo:</label>
                  <textarea id="termo" name="termo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibul um at sapien orci, at placerat turpis. Phasellus ligula nulla, rhoncus nec adipiscing sit amet, congue eget nisi. Suspendisse semper leo ac nunc consectetur eu adipiscing dui cras amet.</textarea>
                  -->
                  <button class="enviar" name="enviar" id="enviar">Enviar</button>
                  <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none; position: absolute;bottom: 12px;right: 40px;" width="16px" height="16px" id="ajax-loader" />
                  <div class="msgAcerto">acerto</div>
                  <div class="msgErro">erro</div>
                </form>
              </div>
              <div class="col-esq">
                <p>o <span>quintal da cultura</span></p>
                <p>tem um presente de</p>
                <p>aniversário especial</p>
                <p>para você!</p>
                <br/><br/>
                <p>Preencha os campos</p>
                <p>ao lado e descubra</p>
                <p>a <span>supresa</span>!</p>
              </div>
            </div>
            <!-- FORM DESTAQUE -->
            */
            ?>
            
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
    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script>
    
			    
			//valida form
			var validator = $('.form-voto').validate({
			  submitHandler: function(form){
			    sendAnswer()
			  },
			  rules:{
			      opcao:{
			        required: true
			      }
			    },
			  messages:{
			    opcao: ""
			  }
			});    
    
    
    //enviar voto
    function sendAnswer(){
      $.ajax({
        type: "POST",
        dataType: "json", 
        data: $("#e<?php echo $displays["enquete"][0]->Asset->getId()?>").serialize(),
        url: "<?php echo url_for('homepage')?>ajax/enquetes",
        beforeSend: function(){
    
        },
        success: function(data){
        	$(".form-voto").hide();
        	//if(data == 1){
	          $(".inativo").fadeIn("fast");
	          
	          $.each(data, function(key, val) {
	            $('.inativo').append('<div class="div-choice"><label for=".resposta'+key+'">'+val.answer+' - ' + parseFloat(val.votes) + '"%"</label></div>');
	
	          });
         	//}else{
         		//$(".msg_error").fadeIn("fast");
         	//}
        }
      });
    }
		</script>

    
  </body>
</html>