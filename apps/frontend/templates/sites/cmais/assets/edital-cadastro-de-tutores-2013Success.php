    <!--link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" /-->
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    
    <style type="text/css">
      .contatoWrapper #form-contato .t10 input { margin-top:-3px; }
    </style>
    
    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="contato grid2">
                <div class="contatoWrapper">
                  
                  <h3 class="tit-pagina grid3">Processo seletivo de tutoria - Melhor Gestão Melhor Ensino</h3>
                  <!--p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p-->
                  <!--
                  <p>Prezado Professor,</p>
                  <p>Para se cadastrar ao processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha todos os campos do formulário a seguir:</p>
                  -->
                  
                  
                    <!--span class="linhaFundo"></span-->
                    <!-- asset -->
                      <p>
                      <div class="row-fuid asset">
                        <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>  
                      </div>
                      </p>
                      <!-- /asset -->
                                    
                    <div class="linha t10">
                      <label><input type="radio" name="concorda_sim" id="concorda_sim" value="sim" />Declaro estar ciente das condições acima.</label>
                    </div>
                    
                    </div>
                  </form>
                  <!--/formulario -->
                  
                </div>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
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


    <script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
    <script type="text/javascript" src="/portal/js/validate/additional-methods.js"></script>
    <script src="/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        /*
        $('.disciplina').click(function() {
          $("label[for='disciplina1'], label[for='disciplina2'], label[for='disciplina3']").hide();
        });
        $('.formacao').click(function() {
          $("label[for='formacao1'], label[for='formacao2'], label[for='formacao3']").hide();
        });
        */
        
        
        $("#cpf").mask("999.999.999-99");
        $("#rg").mask("9999999?9999");
        $("#celular").mask("(99) 99999999?9");
        $("#telefone").mask("(99) 99999999");
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              url: "http://cmais.com.br/actions/cadastro-de-tutores-2/action.php",
              beforeSend: function(){
                $('input#enviar').attr('disabled','disabled');
                $(".msgAcerto").hide();
                $(".msgErro").hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
                $('input#enviar').removeAttr('disabled');
                window.location.href="#";
                if(data == "0"){
                  $("#form-contato").clearForm();
                  $("#form-contato").hide();
                  $("#statusMsg_0").show();
                  $('img#ajax-loader').hide();
                }
                else if(data > 0) {
                  $(".msgErro").hide();
                  $("#statusMsg_"+data).show();
                  $('img#ajax-loader').hide();
                }
                else {
                  alert('Erro inesperado!');
                }
              }
            });         
          },
          rules:{
            /*
            disciplina:{
              required: function() {
                if ($('#disciplina2').is(':checked') || $('#disciplina3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            disciplina2:{
              required: function() {
                if ($('#disciplina1').is(':checked') || $('#disciplina3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            disciplina3:{
              required: function() {
                if ($('#disciplina1').is(':checked') || $('#disciplina2').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            */
            concorda_sim: {
              required: true
            }
         
            /*
            formacao1:{
              required: function() {
                if ($('#formacao2').is(':checked') || $('#formacao3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            formacao2:{
              required: function() {
                if ($('#formacao1').is(':checked') || $('#formacao3').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
              }
            },
            formacao3:{
              required: function() {
                if ($('#formacao1').is(':checked') || $('#formacao2').is(':checked')) {
                  return false;
                }
                else {
                  return true;
                } 
                
             }
            },
            */
          },
          concordo:{
            captcha: "Para prosseguir é necessário concordar com os termos acima."
          }
        });
      });
    </script>