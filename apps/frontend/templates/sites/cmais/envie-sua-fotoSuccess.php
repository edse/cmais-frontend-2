    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site"></div>
      <!-- /BARRA SITE -->

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

                <h3 class="tit-pagina grid3"><?php echo $section->getTitle() ?></h3>  
                <p><?php echo html_entity_decode($section->getDescription())?></p>
                                
                  <div class="msgErro" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Sua mensagem não pode ser enviada.</p>
                      <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                      <p>Lembre-se de que só são aceitos arquivos nos formatos: PNG, GIF e JPG com 15MB ou menos.</p>
                    </div>
                    <hr />
                  </div>

                  <div class="msgAcerto" style="display:none">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com a nossa produção. Em breve retornaremos sua mensagem.</p>
                    </div>
                    <hr />
                  </div>
                  
                  <form id="form-contato" method="post" action="/actions/jornalismo/sendmail.php" enctype="multipart/form-data">
                    <div class="linha t1">
                      <label>nome</label>
                      <input type="text" name="nome" id="nome" />
                    </div>
                    <div class="linha t2">
                      <label>idade</label>
                      <input type="text" maxlength="2" name="idade" id="idade" />
                    </div>
                    <div class="linha t3">
                      <label>telefone</label>
                      <input type="text" name="telefone" id="telefone" />
                    </div>
                    <div class="linha t1">
                      <label>cidade</label>
                      <input type="text" name="cidade" id="cidade" />
                    </div>
                    <div class="linha t1">
                      <label>estado</label>
                      <select class="span1" id="estado" name="estado">
                         <option value="" selected="selected">- Selecione -</option>
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
                      <input type="text" name="email" id="email" />
                    </div>
                    <div class="linha t3">
                      <label>assunto</label>
                      <select style="width:150px;" id="assunto" name="assunto" class="required">
                        <option value="">- Selecione -</option>
                        <option value="Flagrei">Flagrei</option>
                        <option value="Boa Noite">Boa Noite</option>
                      </select>
                    </div>
                    <div class="linha t3">
                      <label class="control-label file" for="file"></label>
                      <input id="datafile" type="file" name="datafile" size="6">
                    </div>
                    <div class="linha t3">
                      <input type="submit" name="enviar" value="Enviar" id="enviar" />
                    </div>
          
                          
                  </form>

              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- programas-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
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

    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        /*
        $('input#enviar').click(function(){
          $(".msgAcerto, .msgErro").hide();
        });
        */
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            form.submit();
          },
          rules:{
            nome:{
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },
            cidade:{
              required: true,
              minlength: 3
            },
            estado:{
              required: true
            },
            assunto:{
              required: true
            },
            datafile:{
              required: true
            }
          },
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            cidade: "Este campo &eacute; Obrigat&oacute;rio.",
            estado: "Este campo &eacute; Obrigat&oacute;rio.",
            assunto: "Este campo &eacute; Obrigat&oacute;rio."
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
          }
        });
      });

      function getSuccess(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++){
          var pair = vars[i].split("=");
          if (pair[0] == variable) {
            return pair[1];
          }
        }
      }
      var success = getSuccess("success");
      if(success == 1 || success == 2){
        $("#form-contato").hide();
        $(".msgAcerto").show();
      }

    </script>