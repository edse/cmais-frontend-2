<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>

<script src="http://172.20.18.133/actions/trabalhe-conosco/script_form_trabalhe_conosco.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>

<style>
body{background: url(http://cmais.com.br/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container quem-somos">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span6">
      <!--texto-->
      <h1>Cadastre seu currículo</h1>
      <p>Prezado usuário, este cadastro é o único
      caminho para que seu currículo chegue à área de Seleção de Pessoal da Fundação Padre Anchieta.</p>
      <p>É importante saber que cada página de formulário deverá ser preenchida em 20 minutos no máximo,
      tempo padrão de cada sessão.</p>
      <div class="tipo-de-emprego">
        INSCRIÇÃO
      </div>
      <hr class="tipo inscricao"/>
      <span>Você está se candidatando para a vaga:</span>
      <!--emprego aberto-->
      <div class="accordion-group">
        <div class="accordion-heading">
          <a class="accordion-toggle vaga-aberta" href="#">
            Assistente de Arte I <span class="badge vaga">1 vaga</span>
          </a>
        </div>
      </div>
      <!--/emprego aberto-->
      <!--FORMULARIO-->
      <div class="box-cadastro">
        <!--row1 - dados de entrada-->
        <div class="row-fluid" id="row1">
          <h2>DADOS DE ENTRADA</h2>
          <hr/>
          <form id="form1" method="post" action="">
            <div class="span6" style="margin:0;">
              <label>Cadastre seu CPF</label>
              <input class="span11" name="fpa_cpf" id="fpa_cpf" type="text" maxlength="11" placeholder="99.999.999-99" value="34078146821">
              <span class="help-block">(Somente números)</span>
            </div>
            <div class="span6">
              <label>Data de nascimento</label>
              <input name="fpa_data" maxlength="10" id="fpa_data" class="" type="text" placeholder="00/00/0000" value="04/02/1987">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="row-fluid">
              <a type="type" class="btn btn-primary pull-right" id="passo-valida-usuario">CONTINUAR INSCRIÇÃO</a>
              <a type="reset" class="btn btn-default pull-right cancel">CANCELAR</a>
            </div>  
        </form>
        </div>
        <!--/row1 - dados de entrada-->
        
        <!--row2 - informacoes pessoais-->
        <div class="row-fluid" id="row2">
          <h2>DADOS DE ENTRADA</h2>
          <hr/>
          <form id="form2" method="post" action="">
            <input type="hidden" value="" name="qg_curric" id="qg_curric"> 
            <div class="span6" style="margin:0;">
              <label>CPF</label>
              <input class="span11" disabled="disabled" name="fpa_cpf_cadastro" id="fpa_cpf_cadastro" type="text" maxlength="11">
            </div>
            <div class="span6">
              <label>Data de nascimento</label>
              <input class="disabled" disabled="disabled" name="fpa_data_nascimento" maxlength="10" id="fpa_data_nascimento" type="text">
            </div>
            <div class="span12 tit-cadastro" >
              <h2>Currículo - Dados pessoais</h2>
              <hr/>
            </div>
            <div class="">
              <label>Regime de Tarabalho</label>
              <select name="DropDown_qg_grupo" onchange="" id="DropDown_qg_grupo" style="width:200px;">
                <option value="01">CLT</option>
                <option value="02">Estágio</option>
              </select>
            </div>
            <div class="">
              <label>Nome Completo</label>
              <input name="qg_nome" type="text" maxlength="30" id="qg_nome" style="width:424px;">
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Endereço, Número</label>
              <input name="qg_enderec" type="text" maxlength="30" id="qg_enderec" style="width:198px;">
            </div>  

            <div class="span6">
              <label>Complemento</label>
              <input name="qg_complem" type="text" maxlength="15" id="qg_complem" style="width: 160px;" >
            </div>  
            <div class="span4" style="margin-left:0;">  
              <label>Bairro</label> 
              <input name="qg_bairro" type="text" maxlength="15" id="qg_bairro" style="width:200px;"> 
            </div>
            <div class="span5">
              <label>Município</label>
              <input name="qg_municip" type="text" maxlength="20" id="qg_municip" style="width:160px;">
            </div>  
            <div class="span4" style="margin-left:0;">  
              <label>Estado</label>
              <select name="DropDown_qg_estado" id="DropDown_qg_estado" style="width:102px;">
                <option value="0">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="EX">Estrangeiro</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PR">Paraná</option>
                <option value="PB">Paraíba</option>
                <option value="PA">Pará</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Rorâima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SE">Sergipe</option>
                <option value="SP">São Paulo</option>
                <option value="TO">Tocantins</option>
              </select>  
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>CEP</label> 
              <input name="qg_cep" type="text" maxlength="9" id="qg_cep"  placeholder"00000-000" style="width:160px;"> 
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Telefone Residencial</label>
              <input class="span11" name="qg_fonere" type="text" maxlength="20" id="qg_fonere" placeholder="(00)00000-0000">
            </div>
            <div class="span6">
              <label>Telefone Comercial</label>
              <input name="qg_foneco" type="text" maxlength="14" id="qg_foneco"  placeholder="(00)00000-0000">
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Telefone Celular</label>
              <input class="span11" name="qg_fonece" type="text" maxlength="20" id="qg_fonece"  placeholder="(00)00000-0000">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Email</label>  
              <input name="qg_mail" type="text" maxlength="50" id="qg_mail" style="width:424px;" placeholder="emailvalido@dominio.com">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Sexo</label>  
              <select name="DropDown_qg_sexo" id="DropDown_qg_sexo" style="width:150px;position: static">
                <option value="0">Selecione</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
              </select>
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Nacionalidade</label>
              <select class="span11" name="DropDown_qg_naciona" onchange="" id="DropDown_qg_naciona">
                <option selected="selected" value="0">Selecione</option>
                <option value="10">Brasileira</option>
                <option value="50">Outra</option>
              </select>
            </div>
            <div class="span6">
              <label>R.G.</label>
              <input name="qg_rg" type="text" maxlength="15" id="qg_rg" >
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Naturalidade</label>
              <select class="span11" name="DropDown_qg_natural" id="DropDown_qg_natural">
                <option value="0">Selecione </option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="EX">Estrangeiro</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PR">Paraná</option>
                <option value="PB">Paraíba</option>
                <option value="PA">Pará</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Rorâima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SE">Sergipe</option>
                <option value="SP">São Paulo</option>
                <option value="TO">Tocantins</option>
              </select>
            </div>
            <div class="span6">
              <label>Orgão Emissor</label>
              <select name="DropDown_qg_rgorg" id="DropDown_qg_rgorg">
                <option selected="selected" value="0">Selecione</option>
                <option value="DE">Carteira Modelo 19 ( Estrangeiro )</option>
                <option value="AE">Ministério da Aeronáutica</option>
                <option value="MR">Ministério da Marinha</option>
                <option value="EX">Ministério do Exército</option>
                <option value="OE">Outros Emissores</option>
                <option value="SSP">Secretaria da Segurança Pública</option>
            </select>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Ano Chegada, se Estrangeiro</label>
              <input name="qg_anocheg" type="text" maxlength="4" id="qg_anocheg" style="width:50px;position: static; float: left;margin-right:10px;">  
              <span class="help-block" style="margin: 11px">(AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Nome do Pai</label>  
              <input name="qg_pai" type="text" maxlength="40" id="qg_pai" style="width:424px;">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Nome da Mãe</label>  
              <input name="qg_mae" type="text" maxlength="40" id="qg_mae" style="width:424px">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Estado Civil</label>  
              <select name="DropDown_qg_estciv" id="DropDown_qg_estciv" style="width:150px;position: static">
                <option value="0">Selecione</option>
                <option value="C">Casado(a)</option>
                <option value="Q">Desquitado(a)</option>
                <option value="D">Divorciado(a)</option>
                <option value="M">Marital</option>
                <option value="S">Solteiro(a)</option>
                <option value="V">Viúvo(a)</option>
              </select>
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Nº CTPS</label>
              <input name="qg_numcp" type="text" value="" maxlength="7" id="qg_numcp" style="width:116px;position: static">  
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Série</label>
              <input name="qg_sercp" type="text" value="" maxlength="5" id="qg_sercp" style="width:116px;position: static">  
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>UF</label>
              <select name="DropDown_qg_ufcp" id="DropDown_qg_ufcp" style="width:95px;">
                <option value="0">Selecione</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="EX">EX</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PR">PR</option>
                <option value="PB">PB</option>
                <option value="PA">PA</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RJ">RJ</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
              </select>  
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>PIS</label>
              <input name="qg_pis" type="text" value="" placeholder="00000000000" maxlength="11" id="qg_pis" style="width:150px;position: static">  
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Nº Habilitação</label>
              <input name="qg_habilit" type="text" value="" maxlength="10" id="qg_habilit" style="width:116px;position: static">  
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>Categoria</label>
              <input name="qg_cathab" type="text" value="" maxlength="4" id="qg_cathab" style="width:80px;position: static">  
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Carteira de Reservista</label> 
              <input name="qg_reserv" type="text" value="" maxlength="12" id="qg_reserv" style="width:116px;"> 
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Titulo de Eleitor</label> 
              <input name="qg_tituloe" type="text" value="" maxlength="12" id="qg_tituloe" style="width:116px;"> 
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>Zona / Seção</label> 
              <input name="qg_zonasec" type="text" value="" id="qg_zonasec" style="width:80px;position: static"> 
            </div>
            <div class="span12 tit-cadastro" >
              <h2>Área de interesse/cargo/vaga</h2>
              <hr/>
            </div>
            <div class="span7" style="margin-left:0;">  
              <label>Departamento</label> 
              <select name="DropDown_qg_are" id="DropDown_qg_are" style="width:240px;position: static">
                <option value="0"> Selecione</option>
                <option value="084">ADMINISTRAÇAO</option>
                <option value="078">AQUISIÇOES</option>
                <option value="083">ARTES</option>
                <option value="023">Almoxarifado</option>
                <option value="011">Ass. Imprensa</option>
                <option value="037">Biblioteca</option>
                <option value="063">CAPTACAO RECURSOS             </option>
                <option value="051">CENTRAL RELACIONAMENTO        </option>
                <option value="076">COMPUTAÇAO GRÁFICA            </option>
                <option value="080">CONTROLADORIA                 </option>
                <option value="064">COORD LOCAÇÃO ANTENAS         </option>
                <option value="071">COORD. CHAMADAS               </option>
                <option value="070">COORD. DE ESTUDIOS            </option>
                <option value="081">COORD. ÁUDIO E VÍDEO          </option>
                <option value="066">CULTURA MARCAS                </option>
                <option value="040">Canal Rá-Tim-Bum    </option>
                <option value="059">Captação e MKT      </option>
                <option value="015">Cenografia          </option>
                <option value="043">Centro Cultural - RJ</option>
                <option value="003">Compras             </option>
                <option value="053">Comunicação         </option>
                <option value="055">Conselho Curador    </option>
                <option value="025">Contabilidade       </option>
                <option value="026">Contas a Pagar      </option>
                <option value="049">Conteúdo e Qualidade</option>
                <option value="035">Contra Regra        </option>
                <option value="006">Convênios e Leis    </option>
                <option value="020">Documentação        </option>
                <option value="045">Documentários       </option>
                <option value="039">Dramaturgia         </option>
                <option value="048">Educação            </option>
                <option value="036">Efeitos Especiais   </option>
                <option value="030">Elétrica            </option>
                <option value="067">Engenharia</option>
                <option value="050">Eventos             </option>
                <option value="054">Expansão de Rede    </option>
                <option value="034">Figurino            </option>
                <option value="060">Gerência de MKT     </option>
                <option value="056">House               </option>
                <option value="017">Jornalismo          </option>
                <option value="001">Jurídico            </option>
                <option value="065">LEIS DE INCENTIVO             </option>
                <option value="077">MULTIMÍDIA                    </option>
                <option value="069">MULTIPLATAFORMA               </option>
                <option value="005">Manutenção Predial  </option>
                <option value="009">Marketing e Vendas  </option>
                <option value="012">Mecânica            </option>
                <option value="042">Novas Mídias        </option>
                <option value="002">Operações           </option>
                <option value="027">Orçamento e Custos  </option>
                <option value="061">PROCESSOS           </option>
                <option value="079">PRODUÇAO INDEPENDENTE         </option>
                <option value="068">PROJETOS EDUCACIONAIS         </option>
                <option value="047">Prestação de Serviço</option>
                <option value="019">Produção TV         </option>
                <option value="062">Produção Univesp    </option>
                <option value="013">Programação         </option>
                <option value="052">Projetos            </option>
                <option value="029">Projetos e Processos</option>
                <option value="021">Protocolo/Expediente</option>
                <option value="075">PÓS PRODUÇAO                  </option>
                <option value="074">RADIO JUSTIÇA                 </option>
                <option value="007">Recursos Humanos    </option>
                <option value="018">Rádio               </option>
                <option value="033">Rádio Frequência    </option>
                <option value="022">Segurança           </option>
                <option value="004">Serviços Gerais     </option>
                <option value="044">TV Assembléia       </option>
                <option value="058">TV JUSTIÇA          </option>
                <option value="008">Tec. da Informação  </option>
                <option value="032">Telefonia           </option>
                <option value="028">Tesouraria          </option>
                <option value="038">Trafego de Fitas    </option>
                <option value="024">Transportes         </option>
                <option value="046">Unidade de Negócios </option>
                <option value="041">Univesp             </option>
                <option value="082">VIDEOGRAFIA                   </option>
                <option value="031">Áudio e Vídeo       </option>
              </select> 
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>Cargo</label> 
              <select name="DropDown_qg_cargo" id="DropDown_qg_cargo" style="width:187px;">
                <option value="0"> Selecione</option>
              </select> 
            </div>
            <div class="span5" style="margin-left:0;">  
              <label>Pretensão salarial</label> 
              <input name="qg_pretsal" type="text" value="" placeholder="999.999,00" maxlength="10" id="qg_pretsal" style="width:116px;"> 
              <span class="help-block">(999.999,00)</span>
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Último salário</label> 
              <input name="qg_ultsal" type="text" value="" placeholder="999.999,00" maxlength="10" id="qg_ultsal" style="width:116px;"> 
              <span class="help-block">(999.999,00)</span>
            </div>
            
            
            <div class="span12 tit-cadastro">
              <h2>Experiência profissional</h2>
              <hr/>
              <p>
              Faça um resumo de suas experiências profissionais recentes e mais relevantes, indicando as rotinas que executava.
              </p>
              <p>              
              <strong>Informações importantes:</strong><br/>
              - Respeite o número máximo de caracteres;
              - Não utilize caracteres especiais tais como: aspas duplas ("), aspas simples ('), &, *. O sistema encara como tentativa de invasão e não deixará a página ser enviada;
              - Não use Copiar e Colar trazendo texto de softwares como Word, WordPerfect. Prefira sempre o Bloco de notas do Windows.
              </p>
              <textarea name="qg_memo2" rows="3" cols="20" id="qg_memo2" onkeydown="verificacaracteres(560,Caixatexto2_contador,qg_memo2);" onkeyup="contacaracteres(560,Caixatexto2_contador,qg_memo2);" style="font-family:Verdana;font-size:10pt;height:200px;width:432px;"></textarea>
              <p id="Caixatexto2_contador" style="font-family: Arial, Helvetica, sans-serif;font-size: 10pt;text-align: right;padding: 3px;float: right;margin: 0px;">560 caracteres restantes</p>
            </div>
            <div class="span12 tit-cadastro">
              <h2>Informações complementares</h2>
              <hr/>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Você tem algum parente que trabalha na Fundação Padre Anchieta?</label> 
              <select name="DropDown_qg_tempar" id="DropDown_qg_tempar" style="width: 67px;">
                <option value="N">Não</option>
                <option value="S">Sim</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Você já trabalhou na Fundação Padre Anchieta?</label> 
              <select name="DropDown_qg_trabal" id="DropDown_qg_trabal" style="width: 67px;">
                <option value="N">Não</option>
                <option value="S">Sim</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Período</label>
              <span class="help-block" style="float: left;margin:8px 6px 0 0;">De</span>
              <input name="qg_trabde" type="text" maxlength="10" id="qg_trabde" style="width:80px; float: left;">
              <span class="help-block" style="float: left;margin:8px 6px;">até</span>
              <input name="qg_trabat" type="text" maxlength="10" id="qg_trabat" style="width:80px; float: left;"> 
              <span class="help-block" style="float: left;margin:8px 6px;">(00/00/0000)</span>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Motivo da saída</label>
              <select name="DropDown_qg_motsai" id="DropDown_qg_motsai" style="width:250px;position: static">
                <option value="0">Selecione</option>
                <option value="1">Pedido de demissão</option>
                <option value="2">Demissão sem justa causa</option>
                <option value="4">Término de contrato</option>
                <option value="3">Outra</option>
            </select> 
            </div>
            <div class="row-fluid">
              <a type="submit" class="btn btn-primary pull-right" id="cadastra-curriculo">CONTINUAR INSCRIÇÃO</a>
              <a type="reset" class="btn btn-default pull-right cancel" id="cancelar_dados_pessoais">CANCELAR</a>
            </div>
          </form>
        </div>
        <!--/row2 - informacoes pessoais-->
        
        
        <!--row3 - empregos de carteira-->
        <div class="row-fluid" id="row3">
          <!--historico profissional-->
          <div class="span12 tit-cadastro">
            <h2>Histórico Profissional</h2>
            <hr/>
          </div>
          <form id="form3" method="post" action="">
            <div class="span5" style="margin-left:0;">
               <input type="hidden" value="" name="ql_codigo" id="ql_codigo">
              <label>Data de admissão</label>
              <input name="ql_dtadmis" type="text" maxlength="10" id="ql_dtadmis" style="width:116px;">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="span4" style="margin-left:0;">
              <label>Data de demissão</label>
              <input name="ql_dtdemis" type="text" maxlength="10" id="ql_dtdemis" style="width:116px;">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Empresa</label>
              <input name="ql_empresa" type="text" maxlength="30" id="ql_empresa" style="width:420px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Função inicial</label>
              <input name="ql_funcini" type="text" maxlength="20" id="ql_funcini" style="width:420px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Última função</label>
              <input name="ql_funcao" type="text" maxlength="20" id="ql_funcao" style="width:420px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Descrição das atividades</label>
              <textarea name="ql_experiencia" rows="3" cols="20" id="ql_experiencia" onkeydown="verificacaracteres(240,ctl00$fpa$FormView1$ql_experiencia$contador,ctl00$fpa$FormView1$ql_experiencia$texto);" onkeyup="contacaracteres(240,ctl00$fpa$FormView1$ql_experiencia$contador,ctl00$fpa$FormView1$ql_experiencia$texto);" style="font-family:Verdana;font-size:10pt;height:200px;width:432px;"></textarea>
              <p name="ql_experiencia_contador" id="ql_experiencia_contador" style="font-family: Arial, Helvetica, sans-serif;font-size: 10pt;text-align: right;padding: 3px;float: right;margin: 0px;">240 caracteres restantes</p>
            </div>
            <div class="span12" style="margin-left:0;">
              <a class="btn btn-primary pull-right" type="submit" href="#" id="adicionar_historico">Adicionar</a>
            </div>
            
            <div class="span12" style="margin-left:0;" id="acoes_historico">
              <a class="btn btn-primary pull-right" type="submit" href="#" id="altera_historico">Confirmar Alteração</a>
              <a class="btn btn-danger pull-right erase" href="#" id="deleta_historico">Apagar</a>
              <a class="btn btn-default pull-right cancel" href="#" id="cancela_alteracao_historico">Cancelar</a>
            </div>  
            
            
            <div class="span12 tabela">
              <div class="accordion" id="accordion2">
                <!--div class="accordion-group">
                  
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche...
                    </div>
                  </div>
                
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche...
                    </div>
                  </div>
                </div -->
                
              </div>
            </div>
             <div class="row-fluid" id="continue_inscricao">
              <a type="submit" class="btn btn-primary pull-right" id="continuar_inscricao">CONTINUAR INSCRIÇÃO</a>
              <a type="reset" class="btn btn-default pull-right cancel" id="cancelar_historico">CANCELAR</a>
            </div>
          </form>
          <!--/historico profissional-->
          </div>
        <!--/row3 - empregos de carteira-->
          
          <!--formacao escolar-->
         <div class="row-fluid" id="row4">
          <form id="form4" method="post" action="">
            <input type="hidden" value="" name="ql_codigo_curso" id="ql_codigo_curso">
            <div class="span12 tit-cadastro">
              <h2>Formação Escolar</h2>
              <hr/>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Tipo de curso</label>
              <select name="DropDowntcurso" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDowntcurso\',\'\')', 0)" id="DropDowntcurso" style="width:262px;">
                <option selected="selected" value="0">Selecione</option>
                <option value="001">Ensino médio                  </option>
                <option value="002">Técnico                       </option>
                <option value="003">Superior                      </option>
                <option value="004">Pós-graduação                 </option>
                <option value="005">Certificação                  </option>
                <option value="006">Idioma                        </option>
                <option value="007">Outros cursos                 </option>
                <option value="008">1º a 4º Série                 </option>
                <option value="009">5º a 8º Série                 </option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Curso</label>
              <select name="DropDown_curso" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDown_curso\',\'\')', 0)" id="DropDown_curso" style="width:262px;">
                <option selected="selected" value="0"> Selecione / Outros</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Outros Cursos</label>
              <input name="qm_dscout" type="text" maxlength="20" id="qm_dscout" style="width:250px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Situação do Curso</label>
              <select name="DropDown_instrucao" id="DropDown_instrucao" style="width:262px;">
                <option value="0">Selecione</option>
                <option value="02">Completo</option>
                <option value="01">Cursando</option>
                <option value="03">Incompleto</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Entidade</label>
              <input name="qm_entidad" type="text" maxlength="30" id="qm_entidad" style="width:250px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Data da formação</label>
              <input name="qm_data" type="text" maxlength="10" id="qm_data" style="width:116px; float: left;margin-right:11px; ">
              <span class="help-block" style="margin: 11px;">(DD/MM/AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">
              <a class="btn btn-primary pull-right" type="submit" href="#">Adicionar</a>
            </div>
            

            <div class="span12" style="margin-left:0;" id="acoes_curso">
              <a class="btn btn-primary pull-right" type="submit" href="#">Confirmar Alteração</a>
              <a class="btn btn-danger pull-right erase" href="#">Apagar</a>
              <a class="btn btn-default pull-right cancel" href="#">Cancelar</a>
            </div>
            
            <div class="accordion" id="accordion_cursos">
                
                
            </div>
            
          </form>
          
          
          <!--/formacao escolar--> 
          <div class="row-fluid">
            <a type="submit" class="btn btn-primary pull-right" id="concluir_inscricao">CONCLUIR INSCRIÇÃO</a>
            <a type="reset" class="btn btn-default pull-right cancel" id="cancelar_cursos">CANCELAR</a>
          </div> 
          
          
          
          
        </div>
        <!--/row4 - empregos de carteira-->
        
        
         <div class="row-fluid" id="row5">
           <h1> Dados cadastrados com sucesso!</h1> 
          <p> Você poderá editá-lo ou atualizá-lo retornando à página
          TRABALHE CONOSCO com seu número de CPF e data de nascimento. </p>
         
        </div>
        
      </div>       
      <!--/FORMULARIO-->
    
     <!--/texto-->
     </div>
    <!-- /ESQUERDA-->
    <!--DIREITA-->
    <div class="col-direita span5">
      <!--CONFIRA-->  
      <a href="/fpa/resultados" class="trabalhe btn btn-primary" title="Confira aqui nossas vagas e prazos.">
        <p>Processos seletivos anteriores</p>
        <p>Confira os Resultados</p>
      </a>
      <!--/CONFIRA-->
      <!--CONFIRA-->  
      <a href="http://www2.tvcultura.com.br/selecao/vagas/FPAREPRSE001.pdf" class="trabalhe btn btn-primary" target="_blank" title="Confira aqui nossas vagas e prazos.">
        <p>Regulamento Interno de Processo Seletivo</p>
        <p>Leia antes da Inscrição</p>
      </a>
      <!--/CONFIRA-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->  
