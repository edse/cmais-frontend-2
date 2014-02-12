    <!--link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" /-->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    
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
                  
                  <h3 class="tit-pagina grid3"><?php echo $asset->getTitle() ?></h3>
                  <!--p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p-->
                  <!--
                  <p>Prezado Professor,</p>
                  <p>Para se cadastrar ao processo seletivo para tutoria do CURSO DE INGLÊS A DISTÂNCIA da EVESP preencha todos os campos do formulário a seguir:</p>
                  -->
                  <!--div style="border: 1px solid #cc0000; padding: 20px; font-weight: bold; font-size: 16px; float:left; color: red">Atenção: as incrições vão até o dia 23/04/2013</div-->
                  
                  <!-- mensagens de status -->
                  <div class="msgAcerto" style="display:none; min-height: 80px; float:left;" id="statusMsg_0">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Obrigado! Seu cadastro foi efetuado com sucesso.</p>
                      <p>O seu pré-cadastro foi realizado, para a efetivação e participação do Processo de Seleção de Tutores para o Curso 2 e 3 de Ciências você precisa entregar a documentação dentro do prazo e local descrito no Edital.</p>
                     
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_1">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Seu cadastro não pôde ser efetuado.</p>
                      <p>Por favor, verifique se você preencheu todos os campos corretamente.</p>
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
                  
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_3">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Cadastro existente.</p>
                      <p>Já consta em nosso banco de dados uma inscrição com esse CPF, aguarde que em breve faremos contato!</p>
                    </div>
                    <hr />
                  </div>
                  <div class="msgErro" style="display:none; min-height: 80px; float:left;" id="statusMsg_4">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Erro interno.</p>
                      <p>Por favor, tente novamente mais tarde ou entre em contato por telefone ou e-mail.</p>
                    </div>
                    <hr />
                  </div>
                  
                  <!--/mensagens de status -->
                  
                  
                  <!-- formulario -->
                  <form id="form-contato" method="post" action="">
                    
                    <p class="enun">Dados de identificação</p>
                    <div class="linha t1 exc">
                      <label>Nome completo (sem abreviações)</label>
                      <input type="text" name="nome" id="nome" style="width:626px" value="<?php if (isset($_REQUEST['nome'])): ?><?php echo urldecode($_REQUEST['nome']) ?><?php endif; ?>" />
                    </div>
                    <div class="linha t2">
                      <label>CPF</label>
                      <input type="text" name="cpf" id="cpf" />
                    </div>
                    <div class="linha t2">
                      <label>RG</label>
                      <input type="text" name="rg" id="rg" />
                    </div>
                    <div class="linha t2">
                      <label>Data de Nascimento</label>
                      <input type="text" name="datanasc" id="datanasc" style="width:149px" />
                    </div>
                    <div class="linha t2" style="clear:left; width: 308px;">
                      <label>E-mail</label>
                      <input type="text" name="email" id="email" style="width:308px" />
                    </div>
                    <div class="linha t2">
                      <label>Telefone residencial</label>
                      <input type="text" name="telefone" id="telefone" style="width:150px" />
                    </div>
                    <div class="linha t2">
                      <label>Telefone Celular</label>
                      <input type="text" name="celular" id="celular" style="width:150px" />
                    </div>
                    <p class="pergunta">Aceita o envio de informações sobre o processo via SMS?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="sms" id="sim" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      <label><input type="radio" name="sms" id="nao" value="nao" />Não</label>
                    </div>

                    <div style="clear:left; width: 100%;font-weight:bold; text-transform: uppercase;margin-bottom: 20px;float: left;font-size:11px" id="categoria_diretoria">
                      <label style="clear: both;float: left;font-size: 12px;">DE - Diretoria de Ensino</label>
                      <select name="diretoria" id="diretoria" style="width:200px;clear: both;float: left;">
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

                    <!--span class="linhaFundo"></span-->


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
                    <div class="linha t2" style="width:11%; margin-bottom: 40px">
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



                    <p class="enun">Formação Acadêmica</p>
                    <div class="linha t2">
                      <label>Escolha</label>
                      <select name="formacao" id="formacao" style="width:200px">
                        <option value="">---</option>
                        <option value="Licenciado em Ciências">Licenciado em Ciências</option>
                        <option value="Licenciado em Biologia">Licenciado em Biologia</option>
                        <option value="Licenciado em Química">Licenciado em Química</option>
                        <option value="Licenciado em Física">Licenciado em Física</option>
                        <option value="Licenciado em Matemática (Habilitado em Ciências)">Licenciado em Matemática (Habilitado em Ciências)</option>
                      </select>
                    </div>

                    <!--span class="linhaFundo"></span-->
                    
                    <!--p class="enun">Outras informações</p-->

                    <p class="pergunta" style="margin-top:20px">1. Possui experiência no uso de AVA (Ambientes Virtuais de Aprendizagem) EFAP?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="experiente_ava_efap" id="sim1" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="experiente_ava_efap" id="nao1" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    
                    <p class="pergunta" style="margin-top:20px">2. Você se inscreveu como Participante no Encontro Presencial centralizado a ser realizado pela EFAP/CGEB de 12 a 14 de agosto do ano de 2013, em Serra Negra?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="inscrito_serra_negra" id="sim2" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="inscrito_serra_negra" id="nao2" value="nao" />Não</label>
                    </div>

                    <!--span class="linhaFundo"></span--> 
                    
                    <p class="pergunta" style="margin-top:20px">3. Teve ou tem contrato de qualquer espécie (Física, jurídica ou CLT) vigente com a FPA (Fundação Padre Anchieta – TV Cultura), mesmo que já encerrado nos últimos 06 meses?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="contrato_fpa" id="sim3" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="contrato_fpa" id="nao3" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    
                    <p class="pergunta" style="margin-top:20px">4. Você tem experiência como Tutor <em>on line</em>?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="experiente_tutor" id="sim4" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="experiente_tutor" id="nao4" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    
                     <p class="pergunta" style="margin-top:20px">5. Você fez o curso Profort (Programa de Formação para Tutores) oferecido pela EFAP sobre Tutoria?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="curso_tutoria_profort_efap" id="sim5" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="curso_tutoria_profort_efap" id="nao5" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->

                     <p class="pergunta" style="margin-top:20px">6. É Profissional vinculado a Rede de Ensino do Estado de São Paulo?</p>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="vinculado_rede_ensino_sp" id="sim6" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      
                      <label><input type="radio" name="vinculado_rede_ensino_sp" id="nao6" value="nao" />Não</label>
                    </div>
                    
                    <!--span class="linhaFundo"></span-->
                    <div id="tempo" style="display:none; padding-left:40px; float:left; margin-bottom:20px">
                       <p class="pergunta">6.1. Há quanto tempo?</p>
                      <div class="linha t11" style="clear:both; margin:0;">
                        <label><input type="radio" name="rede_ensino_sp_tempo" id="menosde2anos" value="menos de 2 anos" />menos de 2 anos</label>
                      </div>
                      <div class="linha t11" style="clear:both; margin:0;">
                        <label><input type="radio" name="rede_ensino_sp_tempo" id="de2a5anos" value="de 2 a 5 anos" />de 2 a 5 anos</label>
                      </div>
                      <div class="linha t11" style="clear:both; margin:0;">
                        <label><input type="radio" name="rede_ensino_sp_tempo" id="de5a10anos" value="de 5 a 10 anos" />de 5 a 10 anos</label>
                      </div>
                      <div class="linha t11" style="clear:both; margin:0;">
                        <label><input type="radio" name="rede_ensino_sp_tempo" id="maisde10anos" value="mais de 10 anos" />mais de 10 anos</label>
                      </div>
                    </div>
                    <!--span class="linhaFundo"></span-->
                    <div id="funcao" style="display:none; padding-left: 40px; float:left; margin-bottom:20px">
                      <p class="pergunta">6.2. Na rede você exerce a função de:</p>
                      <div class="linha t11" style="clear:both; margin:0; width:auto">
                        <label><input type="radio" name="rede_ensino_sp_funcao" id="pcnp" value="Professores Coordenadores do Núcleo Pedagógico (PCNP)" />Professores Coordenadores do Núcleo Pedagógico (PCNP)</label>
                      </div>
                      <div class="linha t11" style="clear:both; margin:0; width:auto">
                        <label><input type="radio" name="rede_ensino_sp_funcao" id="pc" value="Professor Coordenador (PC) da unidade escolar" />Professor Coordenador (PC) da unidade escolar</label>
                      </div>
                      <div class="linha t11" style="clear:both; margin:0; width:auto">
                        <label><input type="radio" name="rede_ensino_sp_funcao" id="outros" value="Outros" />Outros</label>
                      </div>
                    </div>

                    <!--span class="linhaFundo"></span-->

                     <p class="pergunta" style="margin-top:20px">7. Está atualmente em exercício como Professor do ensino Fundamental – ANOS FINAIS na Rede de Ensino do estado de São Paulo, incluindo EJA?</p>
                    <div class="linha t10">
                      <label><input type="radio" name="em_exercicio_ensino_fundamental" id="sim7" value="sim" />Sim</label>
                    </div>
                    <div class="linha t10">
                      <label><input type="radio" name="em_exercicio_ensino_fundamental" id="nao7" value="nao" />Não</label>
                    </div>

                    <!--span class="linhaFundo"></span-->
                    
                    <div class="linha t1 exc" style="margin-top:40px;font-size: 12px;font-weight: bold;text-transform: uppercase;line-height: 26px;">
                      <input type="checkbox" name="concordo" id="concordo" style="width:auto;float: left;" />Declaro que li e concordo com os termos do <a href="http://cmais.com.br/cadastro-de-tutores-2013/segunda-chamada-do-edital-para-cadastro-formacao-e-contratacao-de-professores-tutores-online-para-curso-2-e-3-de-ciencias-1" title="SEGUNDA CHAMADA DO EDITAL PARA CADASTRO, FORMAÇÃO E CONTRATAÇÃO DE PROFESSORES TUTORES ONLINE PARA CURSO 2 E 3 DE CIÊNCIAS" target="_blank" style="font-size: 12px;color: #ff6625;">edital</a>.
                    </div>
                    
                    
                    <div class="linha t3 codigo" id="captchaimage" style="margin-top:40px">
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
        
        $('#sim6').click(function() {
          $("#tempo, #funcao").show();
        });
        $('#nao6').click(function() {
          $("#tempo, #funcao").hide();
        });
        
        $("#cpf").mask("999.999.999-99");
        $("#rg").mask("9999999?9999");
        $("#celular").mask("(99) 99999999?9");
        $("#telefone").mask("(99) 99999999");
        $("#datanasc").mask("99/99/9999");
        $("#cep").mask("99999-999");
        
        var validator = $('#form-contato').validate({
          submitHandler: function(form){
            $.ajax({
              type: "POST",
              dataType: "text",
              data: $("#form-contato").serialize(),
              url: "http://cmais.com.br/actions/cadastro-de-tutores/2013/melhor-gestao-melhor-ensino-ciencias-segunda-chamada/action.php",
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
            datanasc:{
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
            sms:{
              required: true
            },
            diretoria:{
              required: true
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
            formacao:{
              required: true
            },
            experiente_ava_efap:{
              required: true
            },
            inscrito_serra_negra:{
              required: true
            },
            contrato_fpa:{
              required: true
            },
            experiente_tutor:{
              required: true
            },
            curso_tutoria_profort_efap:{
              required: true
            },
            vinculado_rede_ensino_sp:{
              required: true
            },
            rede_ensino_sp_tempo:{
              required: function() {
                if ($('#sim6').is(':checked')) {
                  return true;
                }
                else {
                  return false;
                } 
                
              }
            },
            rede_ensino_sp_funcao:{
              required: function() {
                if ($('#sim6').is(':checked')) {
                  return true;
                }
                else {
                  return false;
                } 
                
              }
            },
            em_exercicio_ensino_fundamental:{
              required: true
            },
            concordo:{
              required: true
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
    </script>
