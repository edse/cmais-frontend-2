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

          <hr />
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
                    $('area[id*="btn"],area[id*="map"]').hover(function() {
                      $('#over-' + $(this).attr('name')).show();
                    })
                    $('area[id*="btn"],area[id*="map"]').mouseleave(function() {
                      $('#over-' + $(this).attr('name')).hide();
                    })
                  })
                  
                </script>
                <!--MENU-BOTOES-->
                <img class="over" src="/portal/quintal/images/personagens-home.png" border="0" usemap="#personagensMap" id="personagens"/>
                <map name="personagensMap">
                  <area shape="poly" id="btn-teobaldo" name="teobaldo" title="Música" alt="Música"  coords="514,9,545,20,574,40,596,69,598,99,591,130,603,147,651,133,695,118,708,139,704,171,653,206,626,229,654,386,657,436,663,459,448,468,410,380,384,318,368,285,446,105,458,14,514,9,495,12" href="http://cmais.com.br/quintaldacultura/musicas">
                  <area shape="poly" id="btn-ludovico" name="ludovico" title="Jogos" alt="Jogos" coords="322,421,364,419,405,433,436,461,440,513,420,541,406,569,402,591,435,607,475,653,480,758,492,855,515,886,533,924,531,979,546,1148,88,1149,99,955,131,704,225,609,272,595" href="http://cmais.com.br/quintaldacultura/jogos">
                  <area shape="poly" id="btn-osorio" name="osorio" title="Diversão" alt="Diversão" coords="256,60,280,38,309,47,325,60,337,80,344,110,365,189,380,222,379,233,359,290,346,331,335,350,326,387,319,418,303,430,282,458,266,487,269,510,270,541,271,582,149,585,133,585,151,403,51,246" href="http://cmais.com.br/quintaldacultura/diversao">
                  <area shape="poly" id="btn-filomena" name="aturma" title="A turma" alt="A turma" coords="722,91,732,55,760,31,799,40,831,55,856,86,926,163,931,358,934,480,940,655,940,791,825,783,765,445,727,374,689,230" href="http://cmais.com.br/quintaldacultura/aturma">
                  <area shape="poly" id="btn-doroteia" name="doroteia" title="Vídeos" alt="Vídeos" coords="530,470,566,468,616,484,638,505,666,520,680,493,669,456,663,436,670,423,694,431,762,460,766,477,727,498,707,540,771,563,779,633,745,708,724,752,690,770,773,799,895,842,952,855,966,918,957,968,851,954,787,924,726,921,685,935,616,909,581,874,537,837,514,791,541,728,531,704,506,684,485,659,478,640" href="http://cmais.com.br/quintaldaculura/videos">
                  <area shape="poly" id="btn-quelonio" name="quelonio" title="Agenda" alt="Agenda" coords="564,933,567,963,558,993,570,1023,587,1056,605,1057,578,1083,567,1109,565,1135,646,1163,676,1160,719,1127,734,1108,750,1094,830,1091,855,1098,920,1111,936,1109,940,1078,880,1032,869,1006,832,960,793,933,650,928,631,921,600,914" href="http://cmais.com.br/quintaldacultura/agenda">
                </map>
                
               
                
                <!--/MENU-BOTOES-->
                <img id="over-teobaldo" class="over" alt="Músicas" src="/portal/quintal/images/hover-musica.png"  usemap="#over-teobaldoMap" style="display:none;" />
                <img id="over-ludovico" class="over" src="/portal/quintal/images/hover-jogos.png" alt="Jogos" usemap="#over-ludovicoMap" style="display:none;"/>
                <img id="over-osorio" class="over" src="/portal/quintal/images/hover-diversao.png" alt="Diversão" usemap="#over-osorioMap"  style="display:none;"/>
                <img id="over-filomena" class="over" src="/portal/quintal/images/hover-aturma.png" alt="A turma"  usemap="#over-filomenaMap" style="display:none;"/>
                <img id="over-doroteia" class="over" src="/portal/quintal/images/hover-videos.png" alt="Vídeos"  usemap="#over-doroteiaMap" style="display:none;"/>
                <img id="over-quelonio" class="over" src="/portal/quintal/images/hover-agenda.png" usemap="#over-quelonioMap" style="display:none;"/>
               
                <map name="over-teobaldoMap">
                  <area id="map-teobaldo" name="teobaldo" title="Músicas" alt="Músicas" shape="poly" coords="81,193,156,192,152,115,156,83,122,32,123,10,38,6,5,21,2,35,24,66,23,91,22,186,50,196" href="http://cmais.com.br/quintaldacultura/musicas">
                </map>
                <map name="over-quelonioMap">
                  <area id="map-quelonio" name="quelonio" title="Agenda" alt="Agenda" shape="poly" coords="97,245,160,235,243,223,240,158,220,148,173,60,180,34,126,7,93,35,128,79,98,90,2,106,2,133,27,196" href="http://cmais.com.br/quintaldacultura/agenda">
                </map>
                <map name="over-filomenaMap">
                  <area id="map-filomena" name="filomena" title="A turma" alt="A turma" shape="poly" coords="3,129,47,203,194,198,195,64,165,29,103,4,35,1" href="http://cmais.com.br/quintaldacultura/aturma">
                </map>
                <map name="over-osorioMap">
                  <area id="map-osorio" name="osorio" title="Diversão" alt="Diversão" shape="poly" coords="51,241,298,237,298,155,299,93,283,89,261,91,243,44,87,4,36,4,38,73,7,89,2,156,15,195,23,221" href="http://cmais.com.br/quintaldacultura/diversao">
                </map>
                <map name="over-doroteiaMap">
                  <area id="map-doroteia" name="doroteia" title="Vídeos" alt="Vídeos" shape="poly" coords="81,4,3,38,3,274,211,276,210,97,220,76,124,11" href="http://cmais.com.br/quintaldacultura/videos">
                </map>
                <map name="over-ludovicoMap">
                  <area id="map-ludovico" name="ludovico" title="Jogos" alt="Jogos"  shape="poly" coords="115,4,221,5,227,54,291,111,306,154,294,172,280,174,242,303,113,331,87,358,41,365,3,351,0,289,26,253,12,175,7,99,15,31,20,11" href="http://cmais.com.br/quintaldacultura/jogos">
                </map>                
              </div>
              
              <!--
                <map name="personagensMap">
                  
                  <area  class="teobaldo" shape="poly" coords="514,9,545,20,574,40,596,69,598,99,591,130,603,147,651,133,695,118,708,139,704,171,653,206,626,229,654,386,657,436,663,459,448,468,410,380,384,318,368,285,446,105,458,14,514,9,495,12" href="#">
                  <area class="ludovico" shape="poly" coords="322,421,364,419,405,433,436,461,440,513,420,541,406,569,402,591,435,607,475,653,480,758,492,855,515,886,533,924,531,979,546,1148,88,1149,99,955,131,704,225,609,272,595" href="#">
                  <area class="osorio" shape="poly" coords="256,60,280,38,309,47,325,60,337,80,344,110,365,189,380,222,379,233,359,290,346,331,335,350,326,387,319,418,303,430,282,458,266,487,269,510,270,541,271,582,149,585,133,585,151,403,51,246" href="#">
                  <area class="Filomena" shape="poly" coords="722,91,732,55,760,31,799,40,831,55,856,86,926,163,931,358,934,480,940,655,940,791,825,783,765,445,727,374,689,230" href="#">
                  <area class="doroteia" shape="poly" coords="530,470,566,468,616,484,638,505,666,520,680,493,669,456,663,436,670,423,694,431,762,460,766,477,727,498,707,540,771,563,779,633,745,708,724,752,690,770,773,799,895,842,952,855,966,918,957,968,851,954,787,924,726,921,685,935,616,909,581,874,537,837,514,791,541,728,531,704,506,684,485,659,478,640" href="#">
                  <area class="quelonio" shape="poly" coords="564,933,567,963,558,993,570,1023,587,1056,605,1057,578,1083,567,1109,565,1135,646,1163,676,1160,719,1127,734,1108,750,1094,830,1091,855,1098,920,1111,936,1109,940,1078,880,1032,869,1006,832,960,793,933,650,928,631,921,600,914" href="#">
                </map>
                
              -->
              <!--/MENU PRINCIPAL-->
            </div>
            <!--/CONTEUDO WRAPPER-->
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
                  <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none; position: absolute;bottom: 12px;right: 40px;" width="16px" height="16px" id="ajax-loader" />
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
    
    
        <script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
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
                $("input#enviar, .msgAcerto, .msgErro").hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
              $('input#enviar').removeAttr('disabled');
                window.location.href="javascript:;";
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
              required: function(){
                validate('#nome');
              },
              minlength: 2
            },
            cidade:{
              required: function(){
                validate('#cidade');
              },
              minlength: 3
            },
            estado:{
              required: function(){
                validate('#estado');
              },
              minlength: 2
            },
            responsavel:{
              required: function(){
                validate('#responsavel');
              },
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },            
            dia:{
              required: function(){
                validate('#dia');
              },
              minlength: 2
            },
            mes:{
              required: function(){
                validate('#mes');
              },
              minlength: 2
            },
            ano:{
              required: function(){
                validate('#ano');
              },
              minlength: 2
            }
            /*concordo:{
              required: true
            },
            termo:{
              required: true,
              minlength: 2
            } */           
          },
          messages:{
            nome: "Todos os campos são obrigatórios1.",
            cidade: "Todos os campos são obrigatórios2.",
            estado: "Todos os campos são obrigatórios3.",
            responsavel: "Todos os campos são obrigatórios4.",
            email: "Todos os campos são obrigatórios5.",
            dia: "Todos os campos são obrigatórios6.",
            mes: "Todos os campos são obrigatórios7.",
            ano: "Todos os campos são obrigatórios8."
            /*concordo: "Este campo &eacute; Obrigat&oacute;rio.",
            termo: "Este campo &eacute; Obrigat&oacute;rio."*/
            
          },
          
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });
      function validate(obj){
        if($(obj).val()==$(obj).attr("data-default"))
          $(obj).val('');
      }    
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script>
    
    
  </body>
</html>