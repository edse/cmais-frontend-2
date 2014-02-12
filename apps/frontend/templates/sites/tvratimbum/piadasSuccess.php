<?php 

//videos piadas
$assets = Doctrine_Query::create()
  ->select('a.*')
  ->from('Asset a, SectionAsset sa')
  ->where('sa.asset_id = a.id')
  ->andWhereIn('sa.section_id',  array(13))
  ->orderBy('a.id desc')
  ->execute();

//piadas
$a_piadas = Doctrine_Query::create()
  ->select('aa.*')
  ->from('AssetAnswer aa')
  ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
  ->execute();

//piada destaque da semana
$piada = html_entity_decode($displays["piada-destaque-semana"][0]->Asset->AssetContent->getContent());
$piadaAssinatura = $displays["piada-destaque-semana"][0]->getDescription();


?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!--CSS-->
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<link href="http://cmais.com.br/portal/tvratimbum/css/ferias-especial.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<!--CSS-->

<!--SCRIPT-->
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<!--script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script-->
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>

<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>

<!--SCRIPT-->

<!--BODY WRAPPER-->
<div id="bodyWrapper">

  <!--CONTEUDO WRAPPER-->
  <div class="conteudoWrapper" align="center">
    
    <!--MENU RA-TIM-BUM-->
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    <!--/MENU RA-TIM-BUM-->
    
    <!--CONTEUDO INTERNAS-->
    <div id="ferias" class="conteudo internas">
      
      <!--COLUNA MAIOR-->
      <div class="colunaMaior">
        
        <!--TRILHA-->
        <div class="trilha">
          <p><a href="/" title="TV Rá tim Bum">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/especial" title="Especial">Especial</a></p><span>&gt;&gt;</span><a href="#" title="<?php echo $section->getTitle() ?>"><?php echo $section->getTitle() ?></a>
        </div>
        <!--/TRILHA-->
        
        <!--BOX-ESPECIAL-INTERNA-->
        <div id="box-especial-interna">
          <!--WRAPPER-->
          <div class="wrapper">
            
            <div class="topo-esq"></div>
            <!--TOPO-->
            <div class="topo">
              <a href="/especial" class="enunciado">Especial</a>
            </div>
            <!--/TOPO-->
            
            <!--TITULO-->
            <div class="tarja-titulo">
              <p><?php echo $section->getTitle() ?></p>
            </div>  
            <!--/TITULO-->
            <?php  
            if(isset($a_piadas)):
              if(count($a_piadas) > 0):
             ?>
              <!--PIADA DA SEMANA-->
              <div id="piada-da-semana">
                

                <!--LOGO PIADA-->
                <img id="logo-piada" src="http://cmais.com.br/portal/tvratimbum/image/piada-da-semana.png" border="0" />
                <!--/LOGO PIADA-->
                
                <!--PIADA DESTAQUE-->
                <div id="piada-destaque">
                                 
                  <!--PIADA VENCEDORA DA SEMANA-->  
                  <div id="container-piada">
                    <?php echo $piada; ?> 
                    <div id="assinatura">
                      <?php echo $piadaAssinatura; ?>
                    </div>  
                  </div>    
                  <!--/PIADA VENCEDORA DA SEMANA-->
                  
                </div> 
                <!--/PIADA DESTAQUE-->

                  
                <!--VOTACAO PIADA-->
                <div id="votacao-piada">
                  
                  <!--LISTA-PIADA-->
                  <form method="post" id="e<?php echo $a_piadas[0]->Asset->getId()?>" class="form-votacao">
                    <a class="btn-lista-piadas" href="/lista-piadas" title="lista completa de piadas">...ou clique aqui para ler todas as piadas :)</a>
                  
                   <h2>VOTE NA sua piada favorita desta semana! </h2>
                    <ul>
                      <?php
                        foreach($a_piadas as $key=>$value){
                          $c = $value->Asset->retriveRelatedAssetsByAssetTypeId(1);
                          if(count($c)>=1){
                            $content = $c[0]->AssetContent->getContent();
                            $description = $c[0]->getDescription();
                            ?>
                            <li>
                              <input type="radio" name="opcao" id="opcao-piada-<?php echo $value->getId();?>" class="form-contato" value="<?php echo $value->getId();?>"  />
                              <label for="opcao-piada-<?php echo $value->getId();?>">
                                
                                <?php echo $description ?>
                                <?php echo $content?>
                              </label>
                            </li>
                            <?php
                          }
                        }
                      ?>
                    </ul>
  
                  <div class="btn-barra votacao">
                      <span class="pontaBarra"></span>
                      <input id="votar" type="submit" value="votar" />
                      <span class="caudaBarra"></span>
                      <div id="enviando-voto" align="center"style="display:none">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none;" width="16px" height="16px" id="ajax-loader-b">
                        Registrando voto, aguarde um momentinho...
                      </div>
                  </div>
                  </form>
                  <!--/LISTA-PIADA-->
                  <!--SCRIPT-->
                  
                  <!--/SCRIPT-->
                </div>  
                <!--/VOTACAO PIADA-->
                
                <!--RESULTADO PARCIAL-->
                <div id="resultado-piada" style="display:none">
                  <a class="btn-lista-piadas" href="/lista-piadas" title="lista completa de piadas">...clique aqui para ler todas as piadas :)</a>
                  
                  <h2>Resultado Parcial: </h2>
                  <!--LISTA-RESULTADO-->
                  <?php
                  for($i=0; $i<count($a_piadas); $i++){
                   ?>
                   <ul class="parcial-<?php echo $i?> classificacao">
                      <li>
                        <p><?php echo $displays["piada-destaque-semana"][$i]->getDescription();;?></p> 
                        <span>00%</span>
                        <div class="progress progress-success">
                           <div class="bar" style="width: 40%"></div>
                        </div>
                     </li>
                
                    </ul>
                    <?php
                    }
                    ?>
                  </form>
                  <!--/LISTA-RESULTADO-->
                  <h2>Agradecemos seu voto! não esqueça:você também pode participar enviando a sua piada. ;) </h2>
  
                </div>  
                <!--/RESULTADO PARCIAL-->
              </div>
              <!--/PIADA DA SEMANA-->
            <?php
              
              
              else:?>  
              <?php// include_partial_from_folder('tvratimbum','global/especial-destaque', array('displays'=>$displays['destaque-principal'],'section'=>$section)) ?>
            
              <?php
                endif;
               endif;
               ?>  
            <hr />
            
            <span class="picote"></span>
            
          </div>
          <!--/WRAPPER-->
        </div>
        <!--/BOX-ESPECIAL-INTERNA-->
                
        <!--FORM PIADA-->
        <div id="form-piada"> 
          <span class="alca pos01"></span>
          <span class="alca pos02"></span>
          
          
          <!--CONTATO-->
          <div class="contato">
            <?php 
              if(count($a_piadas) > 0):
            ?>
              <h2 class="tit-destaque-ferias">Participe!!!</h2>
              <?php include_partial_from_folder('tvratimbum','global/especial-destaque', array('displays'=>$displays['destaque-principal'])) ?>
            <?php
            endif;
            ?>
            <!--SCRIPT-->
            <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
            <script type="text/javascript">
              $(document).ready(function(){
                //carrossel programas
                $('.carrossel').jcarousel({
                  wrap: "both"
                });
                
                //enviando piadas
                $('#enviar-outra, #tentar-enviar').click(function(){
                  $("#form-contato, #enviar-piada.btn-barra").show();
                  $('#nomeDaCrianca, #nomePais, #cidade, #estado, #email, #piada').val('');
                  $('.msgAcerto,.msgErro').hide();
                });
                var validator = $('#form-contato').validate({
                  submitHandler: function(form){
                    $.ajax({
                      type: "POST",
                      dataType: "text",
                      beforeSend: function(){
                        $('#enviar-piada.btn-barra, .msgAcerto, .msgErro').hide();
                        $('img#ajax-loader, #enviando').show();
                      },
                      success: function(data){
                        $('input#enviar').show();
                        window.location.href="javascript:;";
                        if(data == "1"){
                          $("#form-contato").hide();
                          $('#enviando').hide();
                          $(".caudaBarra,.pontaBarra,,.msgAcerto").show();
                        }
                        else {
                          $("#form-contato").hide();
                          $('img#ajax-loader, #enviando').hide();
                          $(".caudaBarra,.pontaBarra,.msgErro").show();
                        }
                      }
                    });         
                  },
                  rules:{
                    regulamento:{
                      required: true
                    }
                  },
                  
                  success: function(label){
                    // set &nbsp; as text for IE
                    label.html("&nbsp;").addClass("checked");
                  }
                });
                
                //valida form votacao
                var validator2 = $('.form-votacao').validate({
                submitHandler: function(form){
                  sendAnswer()
                },
                rules:{
                    opcao:{
                      required: true
                    }
                  },
                  messages:{
                    opcao: "Escolha uma opção para votar."
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

              <?php
              
                echo "var nome = new Array();";
                foreach($a_piadas as $key=>$value){
                  $c = $value->Asset->retriveRelatedAssetsByAssetTypeId(1);
                  $c = preg_replace('/\s/',' ',$c[0]->getDescription());
                  echo "nome[".$key."]= '".$c."';";
                }
               
               ?>
              //enviar voto
              function sendAnswer(){
                $.ajax({
                  type: "POST",
                  dataType: "json",
                  data: $("#e<?php echo $a_piadas[0]->Asset->getId()?>").serialize(),
                  url: "http://app.cmais.com.br/ajax/enquetes",
                  beforeSend: function(){
                    $('.btn-barra.votacao').hide();
                    $('#ajax-loader-b').show();
                  },
                  success: function(data){
                    $(".form-votacao, #ajax-loader-b").hide();
                    $("#resultado-piada").fadeIn("fast");
                    var i=0;
                    $.each(data, function(key, val) {
                      $('.parcial-'+i).html("<li><p>"+nome[i]+"</p><span>"+val.votes+"</span><div class='progress progress-success'><div class='bar' style='width:"+val.votes+"'></div></div></li>")
                      i++;
                    });
                   
                  }
                });
                
              }
            </script>
            <!--SCRIPT-->
            
            <!--MSG ACERTO-->
            <div class="msgAcerto" style="display:none">
              <p>
                Sua piada foi recebida com sucesso!<br/><br/>
                O conteúdo será avaliado pela equipe<br/>
                responsável e as selecionadas<br/>
                serão publicadas.<br/><br/>
                
                Obrigado pela participação,<br/>
                TV Rá Tim Bum!
              </p>
              <div class="btn-barra">
                <span class="pontaBarra"></span>
                <a href="javascript:;" id="enviar-outra">enviar outra piada</a>
                <span class="caudaBarra"></span>
              </div>  
              
            </div>  
            <!--/MSG ACERTO-->
            <!--MSG ERRO-->
            <div class="msgErro" style="display:none">
              <p>
                Sua piada foi não foi enviada com sucesso<br/>
                Por favor, tente novamente
              </p>
              <div class="btn-barra">
                <span class="pontaBarra"></span>
                <a href="javascript:;" id="tentar-enviar">tentar enviar novamente</a>
                <span class="caudaBarra"></span>
              </div>  
              
            </div> 
            <!--/MSG ERRO-->
            <!--form-contato-->  
            <form id="form-contato" method="post" action="">
              
                <span class="titulo">
                  PARA PARTICIPAR, PREENCHA CORRETAMENTE OS CAMPOS ABAIXO:
                </span>
              
                <div class="linha t3" style="margin: 25px 0 0 0">
                  <label>nome da Criança</label>
                  <input type="text" name="nomeDaCrianca" id="nomeDaCrianca" class="required" placeholder="Nome Completo"/>
                </div>
                
                <div class="linha t3">
                  <label>nome dos pais ou reponsável legal</label>
                  <input type="text" name="nomePais" id="nomePais" class="required" placeholder="Nome Completo"/>
                </div>
                
                <div class="linha t1">
                  <label>cidade</label>
                  <input type="text" name="cidade" id="cidade" class="required" placeholder="Cidade"/>
                </div>
                
                <div class="linha t2">
                  <label>estado</label>
                  <br />
                  <select class="estado required" id="estado">
                    <option value="" selected="selected">UF</option>
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
                <input type="text" name="email" id="email" class="required" placeholder="email@valido.com.br"/>
              </div>
              
              <div class="linha t3">
                <label>piada</label>
                <textarea name="piada" id="piada" class="required" onKeyDown="limitText(this,400,'#textCounter');"></textarea>
                <p class="txt-10"><span id="textCounter">400</span> caracteres restantes</p>                                       
              </div>
              
              <!--Regulamento-->
              <div class="linha t1 regulamento">
                
                  <ul>
                    <li class="bold">Regulamento SESSÃO PIADA RÁ TIM BUM</br></li> 
                    <li class="bold">1. Participação:</li>
                    <li>Este é um programa de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta à crianças representadas por seus pais ou responsáveis legais.</li>
                    <li>Para participar, o interessado (com autorização de pais ou responsáveis) deve enviar uma piada escrita. Não há restrições temáticas, desde que o texto seja livre de preconceitos, palavras obscenas ou conteúdo inadequado ao público infantil.</li> 
                    <li><span class="bold">1.1</span> Os textos deverão ser enviados acompanhados dos seguintes dados pessoais do responsável legal da criança: nome, endereço, e-mail e título da piada.</li>
                    <li class="bold">2. Critérios de Seleção:</li>
                    <li><span class="bold">2.1</span> A seleção das piadas serão feita pela equipe de Produção da TV RÁ TIM BUM! e será baseada na observação dos seguintes critérios e pela ordem: criatividade, originalidade e adequação à faixa etária.</li>
                    <li><span class="bold">2.2</span> Serão desconsiderados os textos com dados incorretos; os que fujam da adequação à faixa etária (público infantil); que tenham conteúdo inadequado.</li>
                    <li><span class="bold">2.3</span> Cada criança poderá participar enviando quantas piadas desejar.</li>
                    <li class="bold">3. Considerações Gerais:</li>
                    <li><span class="bold">3.1</span> Os participantes representados por seus pais ou responsáveis legais, declaram, desde já, a autorização de seu nome e cidade onde moram para publicação na programação da TV RÁ TIM BUM! intitulada SESSÃO PIADA RÁ TIM BUM! e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.</li>
                    <li><span class="bold">3.2</span> A FPA não aceitará qualquer texto que contenha exposição de nomes de pessoas em situações vexatórias, incitando o preconceito, violência e que  contenham apelo sexual ou ao consumismo exacerbado.</li>
                    <li><span class="bold">3.3</span> Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela Produção da TV RÁ TIM BUM! referida no item 2.1 deste Regulamento.</li>
                    <li><span class="bold">3.4</span> A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento.</li>
                    <li><span class="bold">3.5</span> Os textos serão publicados no site tvratimbum.com.br e os melhores poderão ser exibidos na programação da TV RÁ TIM BUM!</li>
                 </ul>
                    
              </div>
              
              <div class="linha t5">
                <input class="check" type="checkbox" name="regulamento" id="regulamento" />
                <p class="declaracao">Declaro que li e concordo com o regulamento</p> 
                
              </div>
              
              <div class="btn-barra" id="enviar-piada">
                <span class="pontaBarra"></span>
                <input id="enviar" type="submit" value="enviar" />
                <span class="caudaBarra"></span>
                <div id="enviando" align="center"style="display:none">
                  <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none;" width="16px" height="16px" id="ajax-loader">
                  Enviando piada, aguarde um momentinho...
                </div>  
              </div>
            </form>
            <!--form-contato-->
            
          <span class="picote"></span>  
          
          </div>
          <!--/CONTATO-->
          
        </div>
        <!--/FORM PIADA-->
        
        <!--VIDEOS-->
        <?php 
          if(isset($displays["videos"])):
            if(count($displays["videos"]) > 0):
         ?>
              <div class="galeriaVideos">
                <div class="enunciado">
                  <h2><span class="mais">+</span>Piadas</h2>
                </div>
                <span class="alcaA"></span>
                <span class="alcaB"></span>
                <div class="listaGaleria">
                  <div class="wrappperlistaGaleria">
                      <ul>
                        <?php foreach($displays["videos"] as $a): ?>
                        <li>
                          <a class="aImg" href="<?php echo $a->retriveUrl()?>">
                            <img src="<?php echo $a->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $a->getTitle()?>" />
                          </a>
                          <a class="aTxt" href="<?php echo $a->retriveUrl()?>">
                            <span class="nomeRlacionado"><?php echo $a->getTitle()?></span>
                          </a>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                  </div>
                </div>
               
              </div>
          <?php
            endif;
           endif;?>
        <!--/VIDEOS-->
        <!--VIDEOS-ESPECIAL-->
        <?php //include_partial_from_folder('tvratimbum','global/videos-especial-ferias',array('displays' => $displays["videos"])) ?>
        <!--/VIDEOS-ESPECIAL-->
            
            
      </div>
      <!--/COLUNA MAIOR-->
    
  </div>
  <!--/ CONTEUDO INTERNAS-->
  
  <!--FOOTER RA TIM BUM-->
  <?php include_partial_from_folder('tvratimbum','global/footer') ?>
  <!--/FOOTER RA TIM BUM-->
  <hr />
  </div>
  <!--/CONTEUDO WRAPPER-->

</div>
<!--/BODY WRAPPER-->