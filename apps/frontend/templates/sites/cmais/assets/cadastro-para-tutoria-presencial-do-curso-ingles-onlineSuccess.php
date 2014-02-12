    <!--link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" /-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    
    <style type="text/css">
      .contatoWrapper #form-contato .t10 input { margin-top:-3px; }
      label.error { width: 100% !important; clear:both !important; }
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
                  
                  <h3 class="tit-pagina grid3"><?php echo $asset->getTitle() ?></h3>
                  
                  <!-- mensagens de status -->
                  <div class="msgAcerto" style="display:none; min-height: 80px; float:left;" id="statusMsg_0">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Obrigado! Seu pré-cadastro foi efetuado com sucesso.</p>
                      <p>O seu pré-cadastro foi realizado, para a efetivação e participação do Processo de Seleção de Tutores para o Curso 2 e 3 de Ciências você precisa entregar a documentação dentro do prazo e local descrito no Edital.</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_1">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não pôde ser efetuado.</p>
                      <p>Por favor, verifique se você preencheu todos os campos corretamente ou tente novamente mais tarde</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_2">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não pôde ser efetuado.</p>
                      <p>Encerrado o prazo para as incrições!</p>  
                    </div>
                    <hr />
                  </div>
                  
                  <!--/mensagens de status -->
                  
                  
                  <!-- formulario -->
                  <form id="form-contato" method="post" action="">
                    
                    <!--p class="enun">Dados de identificação</p-->
                    
                    <div class="linha t1 exc">
                      <label>Nome completo (sem abreviações)</label>
                      <input type="text" name="nome" id="nome" style="width:100%" />
                    </div>
                    <div class="linha t2">
                      <label>CPF</label>
                      <input type="text" name="cpf" id="cpf" />
                    </div>
                    <div class="linha t2">
                      <label>RG</label>
                      <input type="text" name="rg" id="rg" />
                    </div>
                    <div class="linha t2" style="width:48%">
                      <label>E-mail</label>
                      <input type="text" name="email" id="email" style="width:100%" />
                    </div>
                    <div class="linha t2" style="clear:left">
                      <label>Telefone residencial</label>
                      <input type="text" name="telefone" id="telefone" style="width:150px" />
                    </div>
                    <div class="linha t2">
                      <label>Telefone Celular</label>
                      <input type="text" name="celular" id="celular" style="width:150px" />
                    </div>
                    
                    <div class="linha" style="clear:left; width: 33%">
                      <label style="line-height: 25px"><input type="radio" name="categoria" id="prof_ativo" value="professor ativo" style="float:left; margin-right: 5px" />Professor Ativo</label>
                    </div>
                    <div class="linha" style="width:33%">
                      <label style="line-height: 25px"><input type="radio" name="categoria" id="pncp" value="pcnp" style="float:left; margin-right: 5px" />PCNP</label>
                    </div>
                    <div class="linha" style="width:33%">
                      <label style="line-height: 25px"><input type="radio" name="categoria" id="prof_inativo" value="professor inativo" style="float:left; margin-right: 5px" />Professor Inativo</label>
                    </div>
                    
                    <div id="categoria_mais_info" style="float:left; width:33%">
                      <div id="prof_ativo_tipo" style="display:none; width: 100%">
                        <div class="linha t10" style="clear:left; width: auto; margin-right: 15px">
                          <label><input type="radio" name="prof_ativo_tipo" id="efetivo" value="efetivo" />Efetivo</label>
                        </div>
                        <div class="linha t10" style="width: auto; margin-right: 15px">
                          <label><input type="radio" name="prof_ativo_tipo" id="temporario" value="temporatio" />Temporário</label>
                        </div>
                      </div>
                       
                      <div class="t1" style="clear:left; width: 100%; display:none" id="categoria_diretoria">
                        <label>Diretoria de Ensino à qual está vinculado(a)</label>
                        <select name="diretoria" id="diretoria" style="width:200px">
                          <option value="">---</option>
                          <option value="ADAMANTINA">ADAMANTINA</option>
                          <option value="AMERICANA">AMERICANA</option>
                          <option value="ANDRADINA">ANDRADINA</option>
                          <option value="APIAI">APIAI</option>
                          <option value="ARAÇATUBA">ARAÇATUBA</option>
                          <option value="ARARAQUARA">ARARAQUARA</option>
                          <option value="ASSIS">ASSIS</option>
                          <option value="AVARE">AVARE</option>
                          <option value="BARRETOS">BARRETOS</option>
                          <option value="BAURU">BAURU</option>
                          <option value="BIRIGUI">BIRIGUI</option>
                          <option value="BOTUCATU">BOTUCATU</option>
                          <option value="BRAGANÇA PAULISTA">BRAGANÇA PAULISTA</option>
                          <option value="CAIEIRAS">CAIEIRAS</option>
                          <option value="CAMPINAS LESTE">CAMPINAS LESTE</option>
                          <option value="CAMPINAS OESTE">CAMPINAS OESTE</option>
                          <option value="CAPIVARI">CAPIVARI</option>
                          <option value="CARAGUATATUBA">CARAGUATATUBA</option>
                          <option value="CARAPICUIBA">CARAPICUIBA</option>
                          <option value="CATANDUVA">CATANDUVA</option>
                          <option value="CENTRO">CENTRO</option>
                          <option value="CENTRO OESTE">CENTRO OESTE</option>
                          <option value="CENTRO SUL">CENTRO SUL</option>
                          <option value="DIADEMA">DIADEMA</option>
                          <option value="FERNANDOPOLIS">FERNANDOPOLIS</option>
                          <option value="FRANCA">FRANCA</option>
                          <option value="GUARATINGUETA">GUARATINGUETA</option>
                          <option value="GUARULHOS NORTE">GUARULHOS NORTE</option>
                          <option value="GUARULHOS SUL">GUARULHOS SUL</option>
                          <option value="ITAPECERICA DA SERRA">ITAPECERICA DA SERRA</option>
                          <option value="ITAPETININGA">ITAPETININGA</option>
                          <option value="ITAPEVA">ITAPEVA</option>
                          <option value="ITAPEVI">ITAPEVI</option>
                          <option value="ITAQUAQUECETUBA">ITAQUAQUECETUBA</option>
                          <option value="ITARARE">ITARARE</option>
                          <option value="ITU">ITU</option>
                          <option value="JABOTICABAL">JABOTICABAL</option>
                          <option value="JACAREI">JACAREI</option>
                          <option value="JALES">JALES</option>
                          <option value="JAU">JAU</option>
                          <option value="JOSE BONIFACIO">JOSE BONIFACIO</option>
                          <option value="JUNDIAI">JUNDIAI</option>
                          <option value="LESTE 1">LESTE 1</option>
                          <option value="LESTE 2">LESTE 2</option>
                          <option value="LESTE 3">LESTE 3</option>
                          <option value="LESTE 4">LESTE 4</option>
                          <option value="LESTE 5">LESTE 5</option>
                          <option value="LIMEIRA">LIMEIRA</option>
                          <option value="LINS">LINS</option>
                          <option value="MARILIA">MARILIA</option>
                          <option value="MAUA">MAUA</option>
                          <option value="MIRACATU">MIRACATU</option>
                          <option value="MIRANTE DO PARANAPANEMA">MIRANTE DO PARANAPANEMA</option>
                          <option value="MOGI DAS CRUZES">MOGI DAS CRUZES</option>
                          <option value="MOGI MIRIM">MOGI MIRIM</option>
                          <option value="NORTE 1">NORTE 1</option>
                          <option value="NORTE 2">NORTE 2</option>
                          <option value="OSASCO">OSASCO</option>
                          <option value="OURINHOS">OURINHOS</option>
                          <option value="PENAPOLIS">PENAPOLIS</option>
                          <option value="PINDAMONHANGABA">PINDAMONHANGABA</option>
                          <option value="PIRACICABA">PIRACICABA</option>
                          <option value="PIRAJU">PIRAJU</option>
                          <option value="PIRASSUNUNGA">PIRASSUNUNGA</option>
                          <option value="PRESIDENTE PRUDENTE">PRESIDENTE PRUDENTE</option>
                          <option value="REGISTRO">REGISTRO</option>
                          <option value="RIBEIRÃO PRETO">RIBEIRÃO PRETO</option>
                          <option value="SANTO ANASTACIO">SANTO ANASTACIO</option>
                          <option value="SANTO ANDRE">SANTO ANDRE</option>
                          <option value="SANTOS">SANTOS</option>
                          <option value="SÃO BERNARDO DO CAMPO">SÃO BERNARDO DO CAMPO</option>
                          <option value="SÃO CARLOS">SÃO CARLOS</option>
                          <option value="SÃO JOÃO DA BOA VISTA">SÃO JOÃO DA BOA VISTA</option>
                          <option value="SÃO JOAQUIM  DA BARRA">SÃO JOAQUIM  DA BARRA</option>
                          <option value="SÃO JOSÉ DO RIO PRETO">SÃO JOSÉ DO RIO PRETO</option>
                          <option value="SÃO JOSE DOS CAMPOS">SÃO JOSE DOS CAMPOS</option>
                          <option value="SÃO ROQUE">SÃO ROQUE</option>
                          <option value="SÃO VICENTE">SÃO VICENTE</option>
                          <option value="SERTAOZINHO">SERTAOZINHO</option>
                          <option value="SOROCABA">SOROCABA</option>
                          <option value="SUL 1">SUL 1</option>
                          <option value="SUL 2">SUL 2</option>
                          <option value="SUL 3">SUL 3</option>
                          <option value="SUMARE">SUMARE</option>
                          <option value="SUZANO">SUZANO</option>
                          <option value="TABOÃO DA SERRA">TABOÃO DA SERRA</option>
                          <option value="TAQUARITINGA">TAQUARITINGA</option>
                          <option value="TAUBATE">TAUBATE</option>
                          <option value="TUPA">TUPA</option>
                          <option value="VOTORANTIM">VOTORANTIM</option>
                          <option value="VOTUPORANGA">VOTUPORANGA</option>
                        </select>
                      </div>
  
                      <div class="t1" style="clear:left; width: 100%; margin-top: 15px; display:none" id="prof_ativo_escola">
                        <label>Escola em que trabalha:</label>
                        <input type="text" name="escola" id="escola" style="width:100%" />
                      </div>
                    </div>
                    
                    <div class="linha t1" style="clear:left; margin-top: 30px; width: 84%; float:left">
                      <label>Endereço residencial</label>
                      <input type="text" name="endereco" id="endereco" style="width: 100%" />
                    </div>
                    <div class="linha t2" style="float:left; width: 12%; margin-top: 30px">
                      <label>Número</label>
                      <input type="text" name="numero" id="numero" style="width:100%" />
                    </div>
                    <div class="linha t2" style="clear:left; width: 33%">
                      <label>Complemento</label>
                      <input type="text" name="complemento" id="complemento" style="width:100%" />
                    </div>
                    <div class="linha t2" style="width:63%">
                      <label>Bairro</label>
                      <input type="text" name="bairro" id="bairro" style="width: 100%" />
                    </div>
                    <div class="linha t2" style="clear:left; width: 12%">
                      <label>CEP</label>
                      <input type="text" name="cep" id="cep" style="width:100%" />
                    </div>
                    <div class="linha t2" style="width:72%">
                      <label>Cidade</label>
                      <input type="text" name="cidade" id="cidade" style="width:100%" />
                    </div>
                    <div class="linha t2" style="width:11%">
                      <label>Estado</label>
                      <br />
                      <select class="estado" name="estado" id="estado" style="width:100%">
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
                    <div class="linha t2" style="width:66%">
                      <label>Licenciatura</label>
                      <input type="text" name="licenciatura" id="licenciatura" style="width:100%" />
                    </div>
                    <p class="pergunta">Tem ou Teve contrato com a Fundação Padre Anchieta nos últimos 6 meses ?</p>
                    <div class="linha t10">
                      <label><input type="radio" name="contrato_fpa" id="sim" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      <label><input type="radio" name="contrato_fpa" id="nao" value="nao" />Não</label>
                    </div>
                    <div class="t2" style="clear:left; width: 33%; display:none" id="contrato_fpa_mais_info">
                      <label>Projeto</label>
                      <input type="text" name="projeto" id="projeto" style="width:100%" />
                    </div>
                    <!--p class="enun">Escolha qual cidade de sua preferência para a realização da prova:</p-->
                    <div class="linha t2" style="clear:left; width: 100%; margin-top: 30px; float:left">
                      <label style="width:100%">Escolha qual cidade de sua preferência para a realização da prova:</label>
                      <select name="localdeprova" id="localdeprova" style="width:auto">
                        <option value="">---</option>
                        <option value="Araçatuba">Araçatuba</option>
                        <option value="Bauru">Bauru</option>
                        <option value="Campinas">Campinas</option>
                        <option value="Franca">Franca</option>
                        <option value="Presidente Prudente">Presidente Prudente</option>
                        <option value="Santos">Santos</option>
                        <option value="São José do Rio Preto">São José do Rio Preto</option>
                        <option value="São José dos Campos">São José dos Campos</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sorocaba">Sorocaba</option>
                      </select>
                    </div>
                    
                    <div class="linha t1 exc">
                      <input type="checkbox" name="concordo" id="concordo" style="width:auto" />Declaro que as informações acima são verdadeiras e que li a <a href="http://cmais.com.br/cadastro-de-tutores-2013/orientacao-aos-candidatos-para-tutoria-presencial-do-curso-ingles-online-sobre-condicoes-de-trabalho-e-criterios-de-classificacao" target="_blank">orientação sobre condições de trabalho e critérios de classificação</a>.
                    </div>
                    
                    <div class="linha t3 codigo" id="captchaimage" style="margin-top: 30px">
                      <label for="captcha">Confirma&ccedil;&atilde;o</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                        <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                      </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:</label>
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                      <br />
                      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" />
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
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


    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
        
        $("input[name=categoria]").click(function() {
          var categoria = $(this).val();
          $("#categoria_diretoria option[value='']").attr('selected',true);
          $("input[name=prof_ativo_tipo]").prop('checked', false);          
          $("#escola").val("");          
          if (categoria == "professor ativo") {
            $("#categoria_mais_info").css('margin-left','0');
            $("#prof_ativo_tipo, #categoria_diretoria, #prof_ativo_escola").show();
          }
          if (categoria == "pcnp") {
            $("#categoria_mais_info").css('margin-left','33%');
            $("#categoria_diretoria > label").html("Diretoria de Ensino à qual está vinculado(a):");
            $("#categoria_diretoria").show();
            $("#prof_ativo_tipo, #prof_ativo_escola").hide();
          }
          if (categoria == "professor inativo") {
            $("#categoria_mais_info").css('margin-left','66%');
            $("#categoria_diretoria > label").html("Diretoria de Ensino da cidade/região em que reside:");
            $("#categoria_diretoria").show();
            $("#prof_ativo_tipo, #prof_ativo_escola").hide();
          }
        });
        $("input[name=contrato_fpa]").click(function() {
          var contrato = $(this).val();
          if (contrato == "sim") {
            $('#contrato_fpa_mais_info').show();
          }
          if (contrato == "nao") {
            $('#contrato_fpa_mais_info').hide();
          }
        });
                
        $("#cpf").mask("999.999.999-99");
        $("#rg").mask("9999999?9999");
        $("#celular").mask("(99) 99999999?9");
        $("#telefone").mask("(99) 99999999");
        $("#cep").mask("99999-999");
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              url: "http://cmais.com.br/actions/cadastro-de-tutores/2013/cadastro-para-tutoria-presencial-do-curso-ingles-online/action.php",
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
            nome:{
              required: true,
              minlength: 5
            },
            cpf:{
              required: true,
              verificaCPF: true
            },
            rg:{
              required: true
            },
            email:{
              required: true,
              email: true
            },
            telefone:{
              required: true
            },
            celular:{
              required: true
            },
            categoria: {
              required: true,
            },
            prof_ativo_tipo: {
              required: function() {
                if ($('#prof_ativo').is(':checked')) {
                  return true;
                }
                else {
                  return false;
                } 
              }
            },
            diretoria: {
              required: function() {
                if ($('#prof_ativo').is(':checked') || $('#prof_inativo').is(':checked') || $('#pcnp').is(':checked')) {
                  return true;
                }
                else {
                  return false;
                } 
              }
            },
            escola: {
              required: function() {
                if ($('#prof_ativo').is(':checked')) {
                  return true;
                }
                else {
                  return false;
                } 
              }
            },
            endereco: {
              required: true,
              minlength: 5
            },
            numero: {
              required: true
            },
            cep: {
              required: true
            },
            cidade: {
              required: true,
              minlength: 2
            },
            estado:{
              required: true
            },
            licenciatura:{
              required: true,
              minlength: 2
            },
            contrato_fpa:{
              required: true
            },
            projeto:{
              required: function() {
                if ($('#sim').is(':checked')) {
                  return true;
                }
                else {
                  return false;
                } 
              }
            },
            localdeprova:{
              required: true
            },
            concordo:{
              required: true
            },
            captcha: {
              required: true,
              remote: "http://app.cmais.com.br/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
    </script>
