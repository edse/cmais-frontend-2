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
               <form id="form-contato" method="post">
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
                        <div class="row-fluid asset">
                          <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>  
                        </div>
                      </p>
                      <!-- /asset -->
                      <p></p>              
                    <div class="linha t10">
                      <label><input type="checkbox" name="concorda_sim" id="concorda_sim" value="sim" />Declaro estar ciente das condições acima.</label>
                    </div>
                    <p>
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="Acessar inscrição" />
                    </p>
                    </div>
                    <p></p>
                    <style>
                      .error{
                        clear:both;
                        position:relative;
                        bottom:0px;
                        left:0px;
                      }
                      .linha.t10{
                        position:relative;
                      }
                    </style>
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
        
        
       
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
          
              success: function(data){
                
                window.location.href="http://cmais.com.br/cadastro-de-tutores-2013/cadastro-de-tutor-melhor-gestao-melhor-ensino";
              
              }
            });         
          },
          rules:{
          
            concorda_sim: {
              required: true
            }
            
          },
        messages:{
            concorda_sim: "Para prosseguir é necessário concordar com os termos acima."
          }
        });
      });
    </script>