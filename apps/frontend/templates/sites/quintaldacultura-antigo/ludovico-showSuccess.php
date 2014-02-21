<?php 
$respostas = Doctrine_Query::create()
  ->select('aa.*')
  ->from('AssetAnswer aa')
  ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
  ->execute();

$imgs = $respostas[0]->Asset->retriveRelatedAssetsByAssetTypeId(2);
$img_a = "http://midia.cmais.com.br/assets/image/original/".$imgs[0]->AssetImage->file.".jpg";
$imgs = $respostas[1]->Asset->retriveRelatedAssetsByAssetTypeId(2);
$img_b = "http://midia.cmais.com.br/assets/image/original/".$imgs[0]->AssetImage->file.".jpg";
?>
<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

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
    
    <!--CSS-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/ludovico-show.css" type="text/css" />
    <!--/CSS-->
     
    <!--SCRIPT--> 
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <!--/SCRIPT-->
    
    <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
        wrap: "both"      
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
    <script>
    function sendAnswer(){
      $.ajax({
        type: "POST",
        dataType: "json",
        data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
        url: "http://app.cmais.com.br/ajax/enquetes",
        beforeSend: function(){
          $('.sim, .nao').hide();
          $('#espera').fadeIn('slow');
        },
        success: function(data){
          var i=1;
          $.each(data, function(key, val) {
            $('.candidato'+i+' .porcento').html("<p>"+val.votes+"</p>");
            i++;
          });

          $('.votar, .confirma, #espera').fadeOut('fast');
          $('.porcento, .candidato').fadeIn('fast');
          $('.voto').removeClass('selected');
         
          $('#pConfirma').addClass('tCentro').attr("id", "pAtivo");
          $('#pAtivo').removeClass('tCentro').attr("id", "pConfirma");
          
          <?php echo $respostas[0]->Asset->getId()?>
          
        }
      });
    }
    
     $(function(){
      var posX;
      var EsqDir;
      var posText;
      function caixaConfirma(posX, EsqDir, posText){
         $(this).addClass('selected');
         $('#pAtivo').addClass('left'+posX).fadeIn('fast');
         $('.texto .seta').addClass('seta'+EsqDir); 
         $('.texto p').addClass(posText);
         $(this).parent().next().fadeOut('fast');
      }
      
      
      //votacao/ confirmacao      
      $('.voto').click(function(){
        
       $('#opcao').val($(this).attr('name'));
       $('#escolha_texto').html($(this).attr('rel'));
       
       $(this).find('votar').fadeOut('fast');
       $('.texto .seta').removeClass('setaDireita').removeClass('setaEsquerda');
       $('.texto p').removeClass('right, left');
       $('.confirma').removeClass('left346, left106');
       
       if($(this).parent().attr('name')==1){
         posX = 346;
         EsqDir = "Esquerda";
         posText = "right";
         caixaConfirma(posX, EsqDir, posText);
       }
       if($(this).parent().attr('name')==2){
         posX = 106;
         EsqDir = "Direita";
         posText = "left";
         caixaConfirma(posX, EsqDir, posText);
       }
       
      });
      
      //sim/nao
      $('.nao').click(function(){
        $('.confirma').fadeOut('fast');
        $('.candidato').fadeIn('fast');
        $('.voto').removeClass('selected');
      });
      
      $('.sim').click(function(){
        sendAnswer();        
      });
      
      $('.ok').click(function(){
          $('.votar, .confirma, #espera').fadeOut('fast');
          $('.porcento, .candidato').fadeIn('fast');
          $('.voto').removeClass('selected');
         
          $('#pConfirma').addClass('tCentro').attr("id", "pAtivo");
          $('#pAtivo').removeClass('tCentro').attr("id", "pConfirma");
      });
    });
  </script>
  <body>

  <div class="allWrapper">
  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
    
    <!--QUINTAL-->
    <div class="contentWrapper" align="center">
      
      <!--CONTENT-->
      <div class="content">
        
        <!--QUINTAL MENU-->  
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>          
        <!--/QUINTAL MENU-->
        <hr />
         
        <!--CONTEUDO--> 
        <div class="conteudo">

          <!--CONTEUDO WRAPPER-->
          <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
            <!--LUDOVICO PALCO-->
            <div class="palco ludovico">
              
              <!--CANDITADO A-->
              <div id="ca" class="ludovico candidato candidatoA candidato1" name="1">
                
                <!--BOTAO-->
                <a href="javascript:;" class="voto" rel="<?php echo $respostas[0]->Asset->AssetAnswer->getAnswer()?>" name="<?php echo $respostas[0]->Asset->AssetAnswer->getId()?>">
                
                  <!--NOME-->
                  <p><?php echo $respostas[0]->Asset->AssetAnswer->getAnswer()?></p>
                  <!--NOME-->
                  
                  <!--FOTO A-->
                  <div class="foto">
                    <img src="<?php echo $img_a ?>">
                  </div>
                  <!--/FOTO A-->
                  
                  <!--VOTAR-->
                  <div class="votar">
                    <p>VOTAR</p>
                  </div>
                  <!--/VOTAR-->
                  
                  <!--PORCENTO-->
                  <div class="porcento" style="display: none;">
                    <p>60%</p>
                  </div>
                  <!--/PORCENTO-->
  
                </a>  
                <!--BOTAO-->
                
              </div>  
              <!--CANDITADO A-->
              
              <!--CANDITADO B-->
              <div id="cb" class="ludovico candidato candidatoB candidato2 " name="2">
                
                <!--BOTAO-->
                <a href="javascript:;" class="voto" rel="<?php echo $respostas[1]->Asset->AssetAnswer->getAnswer()?>" name="<?php echo $respostas[1]->Asset->AssetAnswer->getId()?>">
                
                  <!--NOME-->
                  <p><?php echo $respostas[1]->Asset->AssetAnswer->getAnswer()?></p>
                  <!--NOME-->
                  
                  <!--FOTO A-->
                  <div class="foto">
                    <img src="<?php echo $img_b ?>">
                  </div>
                  <!--/FOTO A-->
                  
                  <!--VOTAR-->
                  <div class="votar">
                    <p>VOTAR</p>
                  </div>
                  <!--/VOTAR-->
                  
                  <!--PORCENTO-->
                  <div class="porcento" style="display: none;">
                    <p>60%</p>
                  </div>
                  <!--/PORCENTO-->
                
                </a>
                <!--/BOTAO-->
                                 
              </div>  
              <!--CANDITADO B-->
              
              <!--CONFIRMA VOTO-->
              <div id="pAtivo" class="confirma" style="display:none">
                
                <!--TEXTO CONFIRMA VOTO-->
                <div class="texto">
                  <span class="seta"></span>
                  <p class="certeza">CONFIRMA SEU VOTO EM</p>
                  <p id="escolha_texto">NOME?</p>
                </div>
                <!--/TEXTO CONFIRMA VOTO-->
                
                <!--BOTOES SIM/NAO-->
                <div class="botoes">
                  <a href="javascript:;" class="nao">
                    <p>
                      NÃO
                    </p>
                  </a>
                  <a href="javascript:;" class="sim" disabled="false">
                    <p>
                      SIM
                    </p>
                  </a>
                </div>  
                <!--/BOTOES SIM/NAO--> 
                
                <!--BOX ESPERA-->
                <div id="espera" align="center" style="display:none">
                  <img src="http://cmais.com.br/portal/quintal/images/ludovicoshow/ajax-loader.gif" />
                  <p>
                    Aguarde só um pouquinho!
                  </p>
                </div>
                <!--BOX ESPERA-->
                   
              </div>
              <!--/CONFIRMA VOTO-->
              
              <!--AGUARDA VOTO-->
              <div id="pConfirma" class="confirma registrado" style="display:none" name="3">
                
                <!--TEXTO AGUARDA-->
                <div>
                  
                  <p class="certeza">SEU VOTO FOI REGISTRADO.</br> VOLTE DAQUI A POUQUINHO</br> PARA VOTAR NOVAMENTE</p>
                </div>
                <!--/TEXTO AGUARDA-->
                
                <!--BOTOES OK-->
                <div class="botoes">
                  <a href="javascript:;" class="ok">
                    <p>
                      OK
                    </p>
                  </a>
                </div>  
                <!--/BOTOES OK--> 
                  
              </div>
              <!--/AGUARDA VOTO-->
              
            </div>  
            <!--/LUDOVICO PALCO-->
            
            <!--DESTAQUE JOGUINHOS -->
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/destaque-joguinhos') ?>
            <!--DESTAQUE JOGUINHOS -->
            
          </div>
          <!--CONTEUDO WRAPPER-->
          
        </div>
        <!--/CONTEUDO-->
        
        <hr />

      </div>
      <!--/CONTENT-->
      
      <!--QUINTAL CERCA-->
      <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?>
      <!--/QUINTAL CERCA-->
      
    </div>
    <!--/QUINTAL-->
    
    <?php include_partial_from_folder('blocks', 'global/footer') ?>

  </div>
  <div id="miolo"></div>
  <div class="box-lateral"></div>
  
  <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>">
    <?php 
    $form = new BaseForm();
    echo $form->renderHiddenFields();
    ?>
    <input type="hidden" name="opcao" id="opcao" value="" /> 
  </form>
  
</body>
</html>