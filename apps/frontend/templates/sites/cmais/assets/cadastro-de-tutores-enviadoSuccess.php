<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
  <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
  <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cadastrodeestagiario.css" type="text/css" />
  

  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<div class="bg-site"></div>

  <!-- CAPA SITE -->
  <div id="capa-site">

    

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

              <h3 class="tit-pagina grid2"><?php echo $section->getTitle() ?></h3>  
              <p><?php echo $section->getDescription()?></p>

                <div class="msgErro" style="display:none">
                  <span class="alerta"></span>
                  <div class="boxMsg">
                    <p class="aviso">Sua mensagem não pode ser enviada.</p>
                    <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                  </div>
                  <hr />
                </div>
                <div class="msgAcerto" style="display:none">
                  <span class="alerta"></span>
                  <div class="boxMsg">
                    <p class="aviso">Mensagem enviada com sucesso!</p>
                    <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                  </div>
                  <hr />
                </div>
              <form id="form-contato" method="post" action="">
                <div class="linha t3">
                  <label>nome</label>
                  <input type="text" name="nome" id="nome" class="required" />
                </div>
                <div class="linha t1">
                  <label>endereço</label>
                  <input type="text" name="endereco" id="endereco" class="required"/>
                </div>
                <div class="linha t2">
                  <label>número</label>
                  <input type="text" name="numero" id="numero" class="required"/>
                </div>
                <div class="linha t7">
                  <label>bairro</label>
                  <input type="text" name="bairro" id="bairro" class="required"/>
                </div>
                <div class="linha t7">
                  <label>cep</label>
                  <input type="text" name="cep" id="cep" class="required"/>
                </div>
                <div class="linha t7">
                  <label>cidade</label>
                  <input type="text" name="cidade" id="cidade" class="required"/>
                </div>
                <div class="linha t2">
                  <label>estado</label>
                  <br />
                  <select class="estado required" id="estado">
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
                <div class="linha t7">
                  <label>telefone</label>
                  <input type="text" name="telefone" id="telefone" class="required"/>
                </div>
                <div class="linha t7">
                  <label>celular</label>
                  <input type="text" name="celular" id="celular" class="required"/>
                </div>
                <div class="linha t8">
                  <label>data de nascimento</label>
                  <input type="text" name="nascimento" id="nascimento" class="required"/>
                </div>
                <div class="linha t3">
                  <label>nome da mãe</label>
                  <input type="text" name="nome_mae" id="nome_mae" class="required"/>
                </div>
                <div class="linha t4">
                  <label>e-mail</label>
                  <input type="text" name="email" id="email" />
                </div>
                <div class="linha parentes">
                  <label>tem parentes na TV Cultura?</label>
                  <label for="opcao1" class="op1">sim</label>
                  <input type="radio" name="tem_parente_na_cultura" id="tem_parente_na_cultura_sim" class="tem_parente required" value="sim" />
                  <label for="opcao2" class="op2">não</label>
                  <input type="radio" name="tem_parente_na_cultura" id="tem_parente_na_cultura_nao" class="tem_parente" value="não" />
                  <hr />
                  <div class="dados">
                  <label for="nome_parente">Nome</label>
                  <input type="text" name="nome_parente" id="nome_parente" />
                  <hr/>
                  <label for="area_parente">Área</label>
                  <input type="text" name="area_parente" id="area_parente" />
                  </div>
                </div>
               
                <h3>Documentação</h3><br/>
                
                <div class="linha t7">
                  <label>rg</label>
                  <input type="text" name="rg" id="rg" class="required" />
                </div>
                
                <div class="linha t7">
                  <label>cpf</label>
                  <input type="text" name="cpf" id="cpf" class="required" />
                </div>
                <div class="linha t7">
                  <label>titulo de eleitor</label>
                  <input type="text" name="titulo_de_eleitor" id="titulo_de_eleitor" class="required" />
                </div>
                <div class="linha t2">
                  <label>zona</label>
                  <input type="text" name="zona" id="zona" class="required" />
                </div>
                <div class="linha t4">
                  <label>seção</label>
                  <input type="text" name="seção" id="seção" class="required" />
                </div>
                <div class="linha t7">
                  <label>município</label>
                  <input type="text" name="municipio" id="municipio" class="required" />
                </div>
                
                <h3>Formação</h3><br/>
                
                <div class="linha t3">
                  <label>curso</label>
                  <input type="text" name="curso" id="curso" class="required" />
                </div>
                <div class="linha t3">
                  <label>instituição de ensino</label>
                  <input type="text" name="instituto_de_ensino" id="instituto_de_ensino" class="required"/>
                </div>
                 <div class="linha t7">
                  <label>ano/semestre</label>
                  <input type="text" name="ano_semestre" id="ano_semestre" class="required"/>
                </div>
                 <div class="linha t7">
                  <label>horário</label>
                  <input type="text" name="horario" id="horario" class="required"/>
                </div>
                 <div class="linha t8">
                  <label>previsao de formatura</label>
                  <input type="text" name="formatura" id="formatura" class="required"/>
                </div>
                <div class="linha t3">
                  <label>cursos complementares</label>
                  <textarea name="cursos_complementares" id="cursos_complementares" onKeyDown="limitText(this,400,'#textCounter');"></textarea>
                  <p class="txt-10"><span id="textCounter">400</span> caracteres restantes</p>                                       
                </div>
                
                <h3>Experiência profissional ou em estágios</h3><br/> 
                
                <div class="linha t1">
                  <label>empresa</label>
                  <input type="text" name="empresa" id="empresa" />
                </div>
                <div class="linha t1">
                  <label>período</label>
                  <input type="text" name="periodo" id="periodo" />
                </div>
                <div class="linha t3">
                  <label>funções / atividades desenvolvidas</label>
                  <textarea name="atividades_desenvolvidas" id="atividades_desenvolvidas" onKeyDown="limitText(this,500,'#textCounter1');"></textarea>
                  <p class="txt-10"><span id="textCounter1">500</span> caracteres restantes</p>                                       
                </div>
                
                
                <div class="linha t1">
                  <label>empresa</label>
                  <input type="text" name="empresa2" id="empresa2" />
                </div>
                <div class="linha t1">
                  <label>período</label>
                  <input type="text" name="periodo2" id="periodo2" />
                </div>
                <div class="linha t3">
                  <label>funções / atividades desenvolvidas</label>
                  <textarea name="atividades_desenvolvidas2" id="atividades_desenvolvidas2" onKeyDown="limitText(this,500,'#textCounter1');"></textarea>
                  <p class="txt-10"><span id="textCounter1">500</span> caracteres restantes</p>                                       
                </div>
                
                
         
                

                <div class="linha t5">
                  <span class="declaracao">Garanto a veracidade das informações acima prestadas:</span> 
                  <input class="check" type="checkbox" name="garantia" id="garantia" />
                  
                </div>
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">Confirma&ccedil;&atilde;o</label>
                    <br />
                    <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                      <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                    </a>
                    <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
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
                GA_googleFillSlot("home-geral300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
          <?php if (isset($displays["rodape-interno"])): ?>
          <!--APOIO-->
          <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
          <!--/APOIO-->
          <?php endif; ?>
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
  
    </div>
    <!-- / CAPA SITE -->
  
    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
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
                $('input#enviar').attr('disabled','disabled');
                $(".msgAcerto").hide();
                $(".msgErro").hide();
                $('img#ajax-loader').show();
              },
              success: function(data){
              $('input#enviar').removeAttr('disabled');
                window.location.href="#";
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
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },
            endereco:{
              required: true,
              minlength: 2
            },
            bairro:{
              required: true,
              minlength: 2
            },
            cep:{
              required: true,
              minlength: 2
            },
            cidade:{
              required: true,
              minlength: 2
            },
            telefone:{
              required: true,
              minlength: 2
            },
            celular:{
              required: true,
              minlength: 2
            },
            nascimento:{
              required: true,
              minlength: 10
            },
            nome_mae:{
              required: true,
              minlength: 2
            },
            
            nome_parente:{
              required: true,
              minlength: 2
            },
            area_parente:{
                required: true,
                minlength: 2
            },
            garantia:{
              required: true
            },
            
            curso:{
                required: true,
                minlength: 2
            },
            instituto_de_ensino:{
                required: true,
                minlength: 2
            },
            ano_semestre:{
                required: true,
                minlength: 2
            },
            horario:{
                required: true,
                minlength: 2
            },
            formatura:{
                required: true,
                minlength: 2
            },
            
            rg:{
                required: true,
                minlength: 2
            },
            cpf:{
                required: true,
                minlength: 2
            },
            titulo_de_eleitor:{
                required: true,
                minlength: 2
            },
            zona:{
                required: true,
                minlength: 2
            },
        
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            nome:"Digite um nome válido",
            endereco:"Digite um endereço válido",
            bairro:"Digite um bairro válido",
            cep:"Digite um cep válido",
            cidade:"Digite um cidade válida",
            telefone:"Digite um tefone válido",
            celular:"Digite um celular válido",
            nascimento:"Digite a data corretamente(dd/mm/aaaa)",
            nome_mae:"Digite um nome válido",
            nome_parente:"Digite um nome válido",
            area_parente:"Digite uma área válida",
            
            rg:"Digite uma rg válido",
            cpf:"Digite uma cpf válido",
            titulo_de_eleitor:"Digite um título válido",
            zona:"Digite uma zona válida",
            
            curso:"Digite um curso válido",
            instituto_de_ensino:"Digite uma instituição válida",
            ano_semestre:"Digite um ano válido",
            horario:"Digite uma hora válida",
            formatura:"Digite uma data válida",
            
            
            captcha: "Digite corretamente o código que está ao lado."
          },
          success: function(label){
            // set &nbsp; as text for IE
            label.html("&nbsp;").addClass("checked");
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
    </script>
