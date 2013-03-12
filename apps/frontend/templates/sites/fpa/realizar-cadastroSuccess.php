<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
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
      <span>Você está se candidatand para a vaga:</span>
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
              <input class="span11" name="ctl00$fpa$tcpf" id="ctl00_fpa_tcpf" type="text" maxlength="11" placeholder="99.999.999-99">
              <span class="help-block">(Somente números)</span>
            </div>
            <div class="span6">
              <label>Data de nascimento</label>
              <input name="ctl00$fpa$tnasc" maxlength="10" id="ctl00_fpa_tnasc" class="" type="text" placeholder="00/00/0000">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="row-fluid">
              <a type="type" class="btn btn-primary pull-right">CONTINUAR INSCRIÇÃO</a>
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
            <div class="span6" style="margin:0;">
              <label>CPF</label>
              <input class="span11" disabled="disabled" name="ctl00$fpa$tcpf" id="ctl00_fpa_tcpf" type="text" maxlength="11">
            </div>
            <div class="span6">
              <label>Data de nascimento</label>
              <input class="disabled" disabled="disabled" name="ctl00$fpa$tnasc" maxlength="10" id="ctl00_fpa_tnasc" type="text">
            </div>
            <div class="span12 tit-cadastro" >
              <h2>Currículo - Dados pessoais</h2>
              <hr/>
            </div>
            <div class="">
              <label>Regime de Tarabalho</label>
              <select name="ctl00$fpa$FormView1$DropDown_estclt" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDown_estclt\',\'\')', 0)" id="ctl00_fpa_FormView1_DropDown_estclt" style="width:200px;">
                <option selected="selected" value="01">CLT</option>
                <option value="02">Estágio</option>
              </select>
            </div>
            <div class="">
              <label>Nome Completo</label>
              <input name="ctl00$fpa$FormView1$qg_nomeTextBox" type="text" maxlength="30" id="ctl00_fpa_FormView1_qg_nomeTextBox" style="width:424px;">
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Endereço</label>
              <input name="ctl00$fpa$FormView1$qg_enderecTextBox" type="text" maxlength="30" id="ctl00_fpa_FormView1_qg_enderecTextBox" style="width:198px;">
            </div>  
            <div class="span4">
              <label>Número</label> 
              <input name="" type="text" maxlength="15" id="" style="width:50px;"> 
            </div>
            <div class="span5" style="margin-left:0;">
              <label>Complemento</label>
              <input name="ctl00$fpa$FormView1$qg_complemTextBox" type="text" maxlength="15" id="ctl00_fpa_FormView1_qg_complemTextBox" style="width: 160px;" >
            </div>  
            <div class="span4">  
              <label>Bairro</label> 
              <input name="ctl00$fpa$FormView1$qg_bairroTextBox" type="text" maxlength="15" id="ctl00_fpa_FormView1_qg_bairroTextBox" style="width:200px;"> 
            </div>
            <div class="span5" style="margin-left:0;">
              <label>Município</label>
              <input name="ctl00$fpa$FormView1$qg_municipTextBox" type="text" maxlength="20" id="ctl00_fpa_FormView1_qg_municipTextBox" style="width:160px;">
            </div>  
            <div class="span4">  
              <label>Estado</label>
              <select name="ctl00$fpa$FormView1$DropDown_Estado" id="ctl00_fpa_FormView1_DropDown_Estado" style="width:102px;">
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
              <input name="ctl00$fpa$FormView1$qg_cepTextBox" type="text" maxlength="9" id="ctl00_fpa_FormView1_qg_cepTextBox"  placeholder"00000-000" style="width:160px;"> 
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Telefone Residencial</label>
              <input class="span11" name="ctl00$fpa$FormView1$qg_foneTextBox" type="text" maxlength="14" id="ctl00_fpa_FormView1_qg_foneTextBox" placeholder="(00)00000-0000">
            </div>
            <div class="span6">
              <label>Telefone Comercial</label>
              <input name="ctl00$fpa$FormView1$qg_fonecoTextBox" type="text" maxlength="14" id="ctl00_fpa_FormView1_qg_fonecoTextBox"  placeholder="(00)00000-0000">
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Telefone Celular</label>
              <input class="span11" name="ctl00$fpa$FormView1$qg_foneceTextBox" type="text" maxlength="14" id="ctl00_fpa_FormView1_qg_foneceTextBox"  placeholder="(00)00000-0000">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Email</label>  
              <input name="ctl00$fpa$FormView1$qg_mailTextBox" type="text" maxlength="50" id="ctl00_fpa_FormView1_qg_mailTextBox" style="width:424px;" placeholder="emailvalido@dominio.com">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Sexo</label>  
              <select name="ctl00$fpa$FormView1$DropDown_sexo" id="ctl00_fpa_FormView1_DropDown_sexo" style="width:150px;position: static">
                <option selected="selected" value="0">Selecione</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
              </select>
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Nacionalidade</label>
              <select class="span11" name="ctl00$fpa$FormView1$DropDown_nacional" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDown_nacional\',\'\')', 0)" id="ctl00_fpa_FormView1_DropDown_nacional">
                <option selected="selected" value="0">Selecione</option>
                <option value="10">Brasileira</option>
                <option value="50">Outra</option>
              </select>
            </div>
            <div class="span6">
              <label>R.G.</label>
              <input name="ctl00$fpa$FormView1$qg_rgTextBox" type="text" maxlength="15" id="ctl00_fpa_FormView1_qg_rgTextBox" >
            </div>
            <div class="span6" style="margin-left:0;">
              <label>Naturalidade</label>
              <select class="span11" name="ctl00$fpa$FormView1$DropDown_natural" id="ctl00_fpa_FormView1_DropDown_natural" disabled="disabled" >
                <option selected="selected" value="0">Selecione </option>
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
              <select name="ctl00$fpa$FormView1$DropDown_rgemissor" id="ctl00_fpa_FormView1_DropDown_rgemissor">
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
              <input name="ctl00$fpa$FormView1$qg_anochegTextBox" type="text" maxlength="4" id="ctl00_fpa_FormView1_qg_anochegTextBox" style="width:50px;position: static; float: left;margin-right:10px;">  
              <span class="help-block" style="margin: 11px">(AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Nome do Pai</label>  
              <input name="ctl00$fpa$FormView1$qg_paiTextBox" type="text" maxlength="40" id="ctl00_fpa_FormView1_qg_paiTextBox" style="width:424px;">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Nome da Mãe</label>  
              <input name="ctl00$fpa$FormView1$qg_maeTextBox" type="text" maxlength="40" id="ctl00_fpa_FormView1_qg_maeTextBox" style="width:424px">
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Estado Civil</label>  
              <select name="ctl00$fpa$FormView1$DropDown_estcivil" id="ctl00_fpa_FormView1_DropDown_estcivil" style="width:150px;position: static">
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
              <input name="ctl00$fpa$FormView1$qg_numcpTextBox" type="text" value="" maxlength="7" id="ctl00_fpa_FormView1_qg_numcpTextBox" style="width:116px;position: static">  
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Série</label>
              <input name="ctl00$fpa$FormView1$qg_sercpTextBox" type="text" value="" maxlength="5" id="ctl00_fpa_FormView1_qg_sercpTextBox" style="width:116px;position: static">  
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>UF</label>
              <select name="ctl00$fpa$FormView1$DropDown_ctps_uf" id="ctl00_fpa_FormView1_DropDown_ctps_uf" style="width:95px;">
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
              <input name="ctl00$fpa$FormView1$qg_pisTextBox" type="text" value="" placeholder="00000000000" maxlength="11" id="ctl00_fpa_FormView1_qg_pisTextBox" style="width:150px;position: static">  
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Nº Habilitação</label>
              <input name="ctl00$fpa$FormView1$qg_habilitTextBox" type="text" value="" maxlength="10" id="ctl00_fpa_FormView1_qg_habilitTextBox" style="width:116px;position: static">  
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>Categoria</label>
              <input name="ctl00$fpa$FormView1$qg_cathabTextBox" type="text" value="" maxlength="4" id="ctl00_fpa_FormView1_qg_cathabTextBox" style="width:80px;position: static">  
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Carteira de Reservista</label> 
              <input name="ctl00$fpa$FormView1$qg_reservTextBox" type="text" value="" maxlength="12" id="ctl00_fpa_FormView1_qg_reservTextBox" style="width:116px;"> 
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Titulo de Eleitor</label> 
              <input name="ctl00$fpa$FormView1$qg_tituloeTextBox" type="text" value="" maxlength="12" id="ctl00_fpa_FormView1_qg_tituloeTextBox" style="width:116px;"> 
            </div>
            <div class="span3" style="margin-left:0;">  
              <label>Zona / Seção</label> 
              <input name="ctl00$fpa$FormView1$qg_zonasecTextBox" type="text" value="" id="ctl00_fpa_FormView1_qg_zonasecTextBox" style="width:80px;position: static"> 
            </div>
            <div class="span12 tit-cadastro" >
              <h2>Área de interesse/cargo/vaga</h2>
              <hr/>
            </div>
            <div class="span7" style="margin-left:0;">  
              <label>Departamento</label> 
              <select name="ctl00$fpa$FormView1$DropDown_Area" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDown_Area\',\'\')', 0)" id="ctl00_fpa_FormView1_DropDown_Area" style="width:240px;position: static">
                <option selected="selected" value="0">Selecione</option>
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
              <select name="ctl00$fpa$FormView1$DropDown_cargo" id="ctl00_fpa_FormView1_DropDown_cargo" style="width:187px;">
                <option value="0"> Selecione</option>
                <option value="00154">Analista Téc.Administrativo Jr</option>
              </select> 
            </div>
            <div class="span5" style="margin-left:0;">  
              <label>Pretensão salarial</label> 
              <input name="ctl00$fpa$FormView1$qg_pretsalTextBox" type="text" value="" placeholder="999.999,00" maxlength="10" id="ctl00_fpa_FormView1_qg_pretsalTextBox" style="width:116px;"> 
              <span class="help-block">(999.999,00)</span>
            </div>
            <div class="span4" style="margin-left:0;">  
              <label>Último salário</label> 
              <input name="ctl00$fpa$FormView1$qg_ultsalTextBox" type="text" value="" placeholder="999.999,00" maxlength="10" id="ctl00_fpa_FormView1_qg_ultsalTextBox" style="width:116px;"> 
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
              <textarea name="ctl00$fpa$FormView1$Caixatexto2$texto" rows="3" cols="20" id="ctl00_fpa_FormView1_Caixatexto2_texto" onkeydown="verificacaracteres(560,ctl00$fpa$FormView1$Caixatexto2$contador,ctl00$fpa$FormView1$Caixatexto2$texto);" onkeyup="contacaracteres(560,ctl00$fpa$FormView1$Caixatexto2$contador,ctl00$fpa$FormView1$Caixatexto2$texto);" style="font-family:Verdana;font-size:10pt;height:200px;width:432px;"></textarea>
              <p id="ctl00_fpa_FormView1_Caixatexto2_contador" style="font-family: Arial, Helvetica, sans-serif;font-size: 10pt;text-align: right;padding: 3px;float: right;margin: 0px;">560 caracteres restantes</p>
            </div>
            <div class="span12 tit-cadastro">
              <h2>Informações complementares</h2>
              <hr/>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Você tem algum parente que trabalha na Fundação Padre Anchieta?</label> 
              <select name="ctl00$fpa$FormView1$DropDown_parent" id="ctl00_fpa_FormView1_DropDown_parent" style="width: 67px;">
                <option selected="selected" value="N">Não</option>
                <option value="S">Sim</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Você já trabalhou na Fundação Padre Anchieta?</label> 
              <select name="ctl00$fpa$FormView1$DropDown_ja_trab" id="ctl00_fpa_FormView1_DropDown_ja_trab" style="width: 67px;">
                <option selected="selected" value="N">Não</option>
                <option value="S">Sim</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Período</label>
              <span class="help-block" style="float: left;margin:8px 6px 0 0;">De</span>
              <input name="ctl00$fpa$FormView1$qg_trabde" type="text" maxlength="10" id="ctl00_fpa_FormView1_qg_trabde" style="width:80px; float: left;">
              <span class="help-block" style="float: left;margin:8px 6px;">até</span>
              <input name="ctl00$fpa$FormView1$qg_trabde" type="text" maxlength="10" id="ctl00_fpa_FormView1_qg_trabde" style="width:80px; float: left;"> 
              <span class="help-block" style="float: left;margin:8px 6px;">(00/00/0000)</span>
            </div>
            <div class="span12" style="margin-left:0;">  
              <label>Motivo da saída</label>
              <select name="ctl00$fpa$FormView1$DropDown_mot_sai" id="ctl00_fpa_FormView1_DropDown_mot_sai" style="width:250px;position: static">
                <option selected="selected" value="0">Selecione</option>
                <option value="1">Pedido de demissão</option>
                <option value="2">Demissão sem justa causa</option>
                <option value="4">Término de contrato</option>
                <option value="3">Outra</option>
            </select> 
            </div>
            <div class="row-fluid">
              <a type="submit" class="btn btn-primary pull-right">CONTINUAR INSCRIÇÃO</a>
              <a type="reset" class="btn btn-default pull-right cancel">CANCELAR</a>
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
              <label>Data de admissão</label>
              <input name="ctl00$fpa$FormView1$ql_dtadmisTextBox" type="text" maxlength="10" id="ctl00_fpa_FormView1_ql_dtadmisTextBox" style="width:116px;">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="span4" style="margin-left:0;">
              <label>Data de demissão</label>
              <input name="ctl00$fpa$FormView1$ql_dtdemisTextBox" type="text" maxlength="10" id="ctl00_fpa_FormView1_ql_dtdemisTextBox" style="width:116px;">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Empresa</label>
              <input name="ctl00$fpa$FormView1$ql_empresaTextBox" type="text" maxlength="30" id="ctl00_fpa_FormView1_ql_empresaTextBox" style="width:420px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Função inicial</label>
              <input name="ctl00$fpa$FormView1$ql_funciniTextbox" type="text" maxlength="20" id="ctl00_fpa_FormView1_ql_funciniTextbox" style="width:420px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Última função</label>
              <input name="ctl00$fpa$FormView1$ql_funcaoTextBox" type="text" maxlength="20" id="ctl00_fpa_FormView1_ql_funcaoTextBox" style="width:420px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Descrição das atividades</label>
              <textarea name="ctl00$fpa$FormView1$ql_experienciaTextBox$texto" rows="3" cols="20" id="ctl00_fpa_FormView1_ql_experienciaTextBox_texto" onkeydown="verificacaracteres(240,ctl00$fpa$FormView1$ql_experienciaTextBox$contador,ctl00$fpa$FormView1$ql_experienciaTextBox$texto);" onkeyup="contacaracteres(240,ctl00$fpa$FormView1$ql_experienciaTextBox$contador,ctl00$fpa$FormView1$ql_experienciaTextBox$texto);" style="font-family:Verdana;font-size:10pt;height:200px;width:432px;"></textarea>
              <p name="ctl00$fpa$FormView1$ql_experienciaTextBox$contador" id="ctl00_fpa_FormView1_ql_experienciaTextBox_contador" style="font-family: Arial, Helvetica, sans-serif;font-size: 10pt;text-align: right;padding: 3px;float: right;margin: 0px;">240 caracteres restantes</p>
            </div>
            <div class="span12" style="margin-left:0;">
              <a class="btn btn-primary pull-right" type="submit" href="#">Adicionar</a>
            </div>
            <div class="span12" style="margin-left:0;">
              <a class="btn btn-primary pull-right" type="submit" href="#">Confirmar Alteração</a>
              <a class="btn btn-danger pull-right erase" href="#">Apagar</a>
              <a class="btn btn-default pull-right cancel" href="#">Cancelar</a>
            </div>  
            <div class="span12 tabela">
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
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
                </div>
              </div>
            </div>
          </form>
          <!--/historico profissional-->
          <!--formacao escolar-->
          <form id="form4" method="post" action="">
            <div class="span12 tit-cadastro">
              <h2>Formação Escolar</h2>
              <hr/>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Tipo de curso</label>
              <select name="ctl00$fpa$FormView1$DropDowntcurso" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDowntcurso\',\'\')', 0)" id="ctl00_fpa_FormView1_DropDowntcurso" style="width:262px;">
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
              <select name="ctl00$fpa$FormView1$DropDown_curso" onchange="javascript:setTimeout('__doPostBack(\'ctl00$fpa$FormView1$DropDown_curso\',\'\')', 0)" id="ctl00_fpa_FormView1_DropDown_curso" style="width:262px;">
                <option selected="selected" value="0"> Selecione / Outros</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Outros Cursos</label>
              <input name="ctl00$fpa$FormView1$qm_dscoutTextBox" type="text" maxlength="20" id="ctl00_fpa_FormView1_qm_dscoutTextBox" style="width:250px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Situação do Curso</label>
              <select name="ctl00$fpa$FormView1$DropDown_instrucao" id="ctl00_fpa_FormView1_DropDown_instrucao" style="width:262px;">
                <option value="0">Selecione</option>
                <option value="02">Completo</option>
                <option value="01">Cursando</option>
                <option value="03">Incompleto</option>
              </select>
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Entidade</label>
              <input name="ctl00$fpa$FormView1$qm_entidadTextBox" type="text" maxlength="30" id="ctl00_fpa_FormView1_qm_entidadTextBox" style="width:250px;">
            </div>
            <div class="span12" style="margin-left:0;">
              <label>Data da formação</label>
              <input name="ctl00$fpa$FormView1$qm_dataTextBox" type="text" maxlength="10" id="ctl00_fpa_FormView1_qm_dataTextBox" style="width:116px; float: left;margin-right:11px; ">
              <span class="help-block" style="margin: 11px;">(DD/MM/AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">
              <a class="btn btn-primary pull-right" type="submit" href="#">Adicionar</a>
            </div>
            <div class="span12" style="margin-left:0;">
              <a class="btn btn-primary pull-right" type="submit" href="#">Confirmar Alteração</a>
              <a class="btn btn-danger pull-right erase" href="#">Apagar</a>
              <a class="btn btn-default pull-right cancel" href="#">Cancelar</a>
            </div>
          </form>
          <!--/formacao escolar--> 
          <div class="row-fluid">
            <a type="submit" class="btn btn-primary pull-right">CONCLUIR INSCRIÇÃO</a>
            <a type="reset" class="btn btn-default pull-right cancel">CANCELAR</a>
          </div> 
        </div>
        <!--/row3 - empregos de carteira-->
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
<?php include_partial_from_folder('blocks', 'global/footer') ?>