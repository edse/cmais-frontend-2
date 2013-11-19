<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
 
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container quem-somos">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span7">
      <!--texto-->
      <h1><?php echo $displays['destaque-principal'][0]->Asset->getTitle(); ?></h1>
      <?php echo html_entity_decode($displays['destaque-principal'][0]->Asset->AssetContent->render()) ?>
      <!--/texto-->
      <!--FORMULARIO-->
      <div class="box-cadastro">
        <!--row1 - dados de entrada-->
        <div class="row-fluid" id="row1">
          
          <h2>DADOS DE ENTRADA</h2>
          <hr/>
          <form id="form1" class="realizar-marcador" method="get">
            <div class="control-group span6" style="margin:0;">
              <label class="control-label" for="fpa_cpf">Cadastre seu CPF</label>
              <div class="controls">
                <input type="text" id="fpa_cpf" name="fpa_cpf" value="" maxlength="11">
                <p class="help-block">(Somente números)</p>
              </div>
            </div>
            <div class="control-group span6">
              <label class="control-label" for="fpa_data">Data de nascimento</label>
              <div class="controls">
                <input type="text" id="fpa_data" name="fpa_data" value="" maxlength="10">
                <p class="help-block">dd/mm/aaaa</p>
              </div>
            </div>
            <div class="row-fluid">
              <input type="submit" class="btn btn-primary pull-right" id="passo-valida-usuario" value="CONTINUAR">
            </div>  
        </form>
        </div>
        <!--/row1 - dados de entrada-->
        
        <style>
        	.row_inline{
        		float: left;
        		width: 99%;
        	}
        	
        </style>
        
        

        
        <!--row2 - informacoes pessoais-->
        <div class="row-fluid" id="row2" style="display:none;">
          <div class="linha-cadastro" style="margin-bottom: 20px">
            <img src="http://cmais.com.br/portal/images/capaPrograma/fpa/linha-dados-pessoais.png">
          </div>
          <h2>DADOS DE ENTRADA</h2>
          <hr/>
          <form id="form2" method="get" action="">
            <input type="hidden" value="" name="qg_curric" id="qg_curric">
            <input type="hidden" value="" name="cod_vaga" id="cod_vaga">
             
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
            
            
		        <div class="row_inline">  
								<div id="dados_vaga" style="margin-bottom: 20px"></div>
								<div id="info_vaga" style="margin-bottom: 20px"></div>		        	
		        </div>            
            
            
            <div class="">
              <label>Regime de Trabalho</label>
              <select name="DropDown_qg_grupo" onchange="" id="DropDown_qg_grupo" style="width:200px;">
                <option value="01">CLT</option>
                <option value="02">Estágio</option>
              </select>
            </div>
            
            <div class="control-group">
	              <label>Nome Completo</label>
	              <input name="qg_nome" type="text" maxlength="30" id="qg_nome" style="width:424px;">
            </div>
            
            <div class="row_inline">
	            <div class="control-group span6" style="margin-left:0;">
		              <label>Endereço, Número</label>
		              <input name="qg_enderec" type="text" maxlength="30" id="qg_enderec" style="width:230px;">
	            </div>  
	            <div class="control-group span6">
	              <label>Complemento</label>
	              <input name="qg_complem" type="text" maxlength="15" id="qg_complem" style="width: 160px;" >
	            </div>
            </div>  
            
						<div class="row_inline">
	            <div class="control-group span6" style="margin-left:0;">
		              <label>Bairro</label> 
		              <input name="qg_bairro" type="text" maxlength="15" id="qg_bairro" style="width:230px;">
	            </div>
	            
	            <div class="control-group span6">
	              	<label>Município</label>
	              	<input name="qg_municip" type="text" maxlength="20" id="qg_municip" style="width:160px;">
	            </div>
            </div>
            
            <div class="row_inline">  
	            <div class="control-group span6" style="margin-left:0;">
		              <label>Estado</label>
		              <select name="DropDown_qg_estado" id="DropDown_qg_estado" style="width:102px;">
		                <option value="">Selecione</option>
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
	            <div class="control-group span6">  
	              <label>CEP</label> 
	              <input name="qg_cep" type="text" maxlength="9" id="qg_cep"  placeholder"00000-000" style="width:160px;"> 
	            </div>
            </div>
            
            <div class="row_inline">  
	            <div class="control-group span6" style="margin-left:0;">
	              <label>Telefone Residencial</label>
	              <input class="span11" name="qg_fonere" type="text" maxlength="14" id="qg_fonere" placeholder="(00)00000-0000">
	            </div>
	            <div class="control-group span6">
	              <label>Telefone Comercial</label>
	              <input name="qg_foneco" type="text" maxlength="14" id="qg_foneco"  placeholder="(00)00000-0000">
	            </div>
	          </div>
	          
	          <div class="row_inline">  
	            <div class="control-group span6" style="margin-left:0;">
	              <label>Telefone Celular</label>
	              <input class="span11" name="qg_fonece" type="text" maxlength="14" id="qg_fonece"  placeholder="(00)00000-0000">
	            </div>
	          </div>
	          
	          <div class="row_inline">  
	            <div class="control-group" style="margin-left:0;">  
	              <label>Email</label>  
	              <input name="qg_mail" type="text" maxlength="50" id="qg_mail" style="width:424px;" placeholder="emailvalido@dominio.com">
	            </div>
	          </div>
	          
	          <div class="row_inline">  
	            <div class="control-group span6" style="margin-left:0;">  
	              <label>Sexo</label>  
	              <select name="DropDown_qg_sexo" id="DropDown_qg_sexo" style="width:150px;position: static">
	                <option value="">Selecione</option>
	                <option value="F">Feminino</option>
	                <option value="M">Masculino</option>
	              </select>
	            </div>
  
	            <div class="control-group span6">
	              <label>Nacionalidade</label>
	              <select class="span11" name="DropDown_qg_naciona" onchange="" id="DropDown_qg_naciona">
	                <option selected="selected" value="">Selecione</option>
	                <option value="10">Brasileira</option>
	                <option value="50">Outra</option>
	              </select>
	            </div>
	          </div>  
	          
	          
	          <div class="row_inline">  
	            <div class="control-group span6">
	              <label>R.G.</label>
	              <input name="qg_rg" type="text" maxlength="15" id="qg_rg" >
	            </div>
            
	            <div class="control-group span6">
	              <label>Orgão Emissor</label>
	              <select name="DropDown_qg_rgorg" id="DropDown_qg_rgorg">
	                <option selected="selected" value="">Selecione</option>
	                <option value="DE">Carteira Modelo 19 ( Estrangeiro )</option>
	                <option value="AE">Ministério da Aeronáutica</option>
	                <option value="MR">Ministério da Marinha</option>
	                <option value="EX">Ministério do Exército</option>
	                <option value="OE">Outros Emissores</option>
	                <option value="SSP">Secretaria da Segurança Pública</option>
	            </select>
	            </div>
           	</div> 
            
	         	<div class="row_inline"> 
	            <div class="control-group span6" style="margin-left:0;">
	              <label>Naturalidade</label>
	              <select class="span11" name="DropDown_qg_natural" id="DropDown_qg_natural">
	                <option value="">Selecione </option>
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
           </div>
           
            <div class="control-group span12" style="margin-left:0;">  
              <label>Ano Chegada, se Estrangeiro</label>
              <input name="qg_anocheg" type="text" maxlength="4" id="qg_anocheg" style="width:50px;position: static; float: left;margin-right:10px;">  
              <span class="help-block" style="margin: 11px">(AAAA)</span>
            </div>
            <div class="control-group span12" style="margin-left:0;">  
              <label>Nome do Pai</label>  
              <input name="qg_pai" type="text" maxlength="40" id="qg_pai" style="width:424px;">
            </div>
            <div class="control-group span12" style="margin-left:0;">  
              <label>Nome da Mãe</label>  
              <input name="qg_mae" type="text" maxlength="40" id="qg_mae" style="width:424px">
            </div>
            <div class="control-group span12" style="margin-left:0;">  
              <label>Estado Civil</label>  
              <select name="DropDown_qg_estciv" id="DropDown_qg_estciv" style="width:150px;position: static">
                <option value="">Selecione</option>
                <option value="C">Casado(a)</option>
                <option value="Q">Desquitado(a)</option>
                <option value="D">Divorciado(a)</option>
                <option value="M">Marital</option>
                <option value="S">Solteiro(a)</option>
                <option value="V">Viúvo(a)</option>
              </select>
            </div>
            <div class="control-group span4" style="margin-left:0;">  
              <label>Nº CTPS</label>
              <input name="qg_numcp" type="text" value="" maxlength="7" id="qg_numcp" style="width:116px;position: static">  
            </div>
            <div class="control-group span4" style="margin-left:0;">  
              <label>Série</label>
              <input name="qg_sercp" type="text" value="" maxlength="5" id="qg_sercp" style="width:116px;position: static">  
            </div>
            <div class="control-group span4" style="margin-left:0;">  
              <label>UF</label>
              <select name="DropDown_qg_ufcp" id="DropDown_qg_ufcp" style="width:95px;">
                <option value="">Selecione</option>
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
            <div class="control-group span12" style="margin-left:0;">  
              <label>PIS</label>
              <input name="qg_pis" type="text" value="" placeholder="00000000000" maxlength="11" id="qg_pis" style="width:150px;position: static">  
            </div>
            <div class="control-group span4" style="margin-left:0;">  
              <label>Nº Habilitação</label>
              <input name="qg_habilit" type="text" value="" maxlength="10" id="qg_habilit" style="width:116px;position: static">  
            </div>
            <div class="control-group span3" style="margin-left:0;">  
              <label>Categoria</label>
              <input name="qg_cathab" type="text" value="" maxlength="4" id="qg_cathab" style="width:80px;position: static">  
            </div>
            <div class="control-group span12" style="margin-left:0;">  
              <label>Carteira de Reservista</label> 
              <input name="qg_reserv" type="text" value="" maxlength="12" id="qg_reserv" style="width:116px;"> 
            </div>
            
            <div class="row_inline">
	            <div class="control-group span4" style="margin-left:0;">  
	              <label>Titulo de Eleitor</label> 
	              <input name="qg_tituloe" type="text" value="" maxlength="12" id="qg_tituloe" style="width:116px;"> 
	            </div>
	            <div class="control-group span4" style="margin-left:0;">  
	              <label>Zona / Seção</label> 
	              <input name="qg_zonasec" type="text" value="" maxlength="8" id="qg_zonasec" style="width:80px;position: static"> 
	            </div>
            </div>
            
            <!-- div class="span12 tit-cadastro" >
              <h2>Área de interesse/cargo/vaga</h2>
              <hr/>
            </div>
            
            <!-- div class="span12 tit-cadastro" >
              <h2>Área de interesse/cargo/vaga</h2>
              <hr/>
            </div>
            
            <div class="control-group span6" style="margin-left:0;">  
              <label>Cargo</label> 
              <select name="DropDown_qg_cargo" id="DropDown_qg_cargo" style="width:200px;" >
                <option value="" data-departamento="0">Selecione</option>
              </select> 
            </div>

            <div class="control-group span6" style="margin-left:0;">  
              <label>Departamento</label> 
              <select name="DropDown_qg_are" id="DropDown_qg_are" style="width:240px;" class="disabled" disabled="disabled">
                <option value="999">-</option>
              </select> 
            </div -->
						<div class="row_inline">
	            <div class="control-group span4" style="margin-left:0;">  
	              <label>Pretensão salarial</label> 
	              <input name="qg_pretsal" type="text" value="" placeholder="999.999,00" maxlength="10" id="qg_pretsal" style="width:116px;"> 
	              <span class="help-block">(999.999,00)</span>
	            </div>
	            <div class="control-group span4" style="margin-left:0;">  
	              <label>Último salário</label> 
	              <input name="qg_ultsal" type="text" value="" placeholder="999.999,00" maxlength="10" id="qg_ultsal" style="width:116px;"> 
	              <span class="help-block">(999.999,00)</span>
	            </div>
            </div>
            
            <div class="control-group span12 tit-cadastro">
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
              <textarea name="qg_memo2" rows="3" cols="20" id="qg_memo2" style="font-family:Verdana;font-size:10pt;height:200px;width:432px;" maxlength="560"></textarea>
              <p id="Caixatexto2_contador" style="font-family: Arial, Helvetica, sans-serif;font-size: 10pt;text-align: right;padding: 3px;float: right;margin: 0px;">560 caracteres</p>
            </div>
            <div class="span12 tit-cadastro">
              <h2>Informações complementares</h2>
              <hr/>
            </div>
            <div class="control-group span12" style="margin-left:0;">  
              <label>Você tem algum parente que trabalha na Fundação Padre Anchieta?</label> 
              <select name="DropDown_qg_tempar" id="DropDown_qg_tempar" style="width: 67px;">
                <option value="N">Não</option>
                <option value="S">Sim</option>
              </select>
            </div>
            <div class="control-group span12" style="margin-left:0;">  
              <label>Você já trabalhou na Fundação Padre Anchieta?</label> 
              <select name="DropDown_qg_trabal" id="DropDown_qg_trabal" style="width: 67px;">
                <option value="N">Não</option>
                <option value="S">Sim</option>
              </select>
            </div>
            
            <div class="row_inline" id="periodo_trabalho_fpa" style="display: none"> 
	            <div class="control-group span6" style="margin-left:0;">  
	              <label>Período</label>
	              <span class="help-block" style="float: left;margin:8px 6px 0 0;">De</span>
	              <input name="qg_trabde" type="text" maxlength="10" id="qg_trabde" style="width:120px; float: left;">
	              <span class="help-block" style="float: left;margin:8px 6px;">(00/00/0000)</span>
	            </div>
	            <div class="control-group span6" style="margin-left:0;">
	            	<label>&nbsp;</label>  
	              <span class="help-block" style="float: left;margin:8px 6px;">até</span>
	              <input name="qg_trabate" type="text" maxlength="10" id="qg_trabate" style="width:120px; float: left;"> 
	              <span class="help-block" style="float: left;margin:8px 6px;">(00/00/0000)</span>
	            </div>	            
	          </div>
	          
	          
            <div class="control-group span12" style="margin-left:0;">  
              <label>Motivo da saída</label>
              <select name="DropDown_qg_motsai" id="DropDown_qg_motsai" style="width:250px;position: static">
                <option value="">Selecione</option>
                <option value="1">Pedido de demissão</option>
                <option value="2">Demissão sem justa causa</option>
                <option value="4">Término de contrato</option>
                <option value="3">Outra</option>
            </select> 
            </div>
            <div class="row-fluid">
              <button type="submit" class="btn btn-primary pull-right" id="cadastra-curriculo" style="margin-top: 20px">CONTINUAR INSCRIÇÃO</button>
              <a type="reset" class="btn btn-default pull-right cancel" id="cancelar_dados_pessoais">VOLTAR</a>
            </div>
          </form>
        </div>
        <!--/row2 - informacoes pessoais-->
        
        
        <!--row3 - empregos de carteira-->
        <div class="row-fluid" id="row3" style="display:none;">
          <div class="linha-cadastro">
            <img src="http://cmais.com.br/portal/images/capaPrograma/fpa/linha-historico-profissional.png">
          </div>        	
          <!--historico profissional-->
          <div class="span12 tit-cadastro">
            <h2>Histórico Profissional</h2>
            <hr/>
          </div>
          <form id="form3" method="get" action="">
            <div class="control-group span5" style="margin-left:0;">
               <input type="hidden" value="" name="ql_codigo" id="ql_codigo">
              <label>Data de admissão</label>
              <input name="ql_dtadmis" type="text" maxlength="10" id="ql_dtadmis" style="width:116px;">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="control-group span4" style="margin-left:0;">
              <label>Data de demissão</label>
              <input name="ql_dtdemis" type="text" maxlength="10" id="ql_dtdemis" style="width:116px;">
              <span class="help-block">(DD/MM/AAAA)</span>
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Empresa</label>
              <input name="ql_empresa" type="text" maxlength="30" id="ql_empresa" style="width:420px;">
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Função inicial</label>
              <input name="ql_funcini" type="text" maxlength="20" id="ql_funcini" style="width:420px;">
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Última função</label>
              <input name="ql_funcao" type="text" maxlength="20" id="ql_funcao" style="width:420px;">
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Descrição das atividades</label>
              <textarea name="ql_experiencia" rows="3" cols="20" id="ql_experiencia" style="font-family:Verdana;font-size:10pt;height:200px;width:432px;" maxlength="240" ></textarea>
              <p name="ql_experiencia_contador" id="ql_experiencia_contador" style="font-family: Arial, Helvetica, sans-serif;font-size: 10pt;text-align: right;padding: 3px;float: right;margin: 0px;">240 caracteres</p>
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <button class="btn btn-primary pull-right" type="submit" href="#" id="adicionar_historico">Adicionar</button>
            </div>
            
            <div class="span12" style="margin-left:0;" id="acoes_historico">
              <button class="btn btn-primary pull-right" type="submit" href="#" id="altera_historico">CONFIRMAR ALTERAÇÃO</button>
              <a class="btn btn-danger pull-right erase" href="#" id="deleta_historico" style="margin-top:0;">APAGAR</a>
              <a class="btn btn-default pull-right cancel" href="#" id="cancela_alteracao_historico" style="margin-top: 0">CANCELAR</a>
            </div>  
            
            
            <div class="span12 tabela">
              <div class="accordion" id="accordion2">
              </div>
            </div>
             <div class="row-fluid" id="continue_inscricao">
              <a type="submit" class="btn btn-primary pull-right" id="continuar_inscricao">CONTINUAR INSCRIÇÃO</a>
              <a type="reset" class="btn btn-default pull-right cancel" id="cancelar_historico" style="margin-top:20px;">VOLTAR</a>
            </div>
          </form>
          <!--/historico profissional-->
          </div>
        <!--/row3 - empregos de carteira-->
          
          <!--formacao escolar-->
         <div class="row-fluid" id="row4" style="display:none;">
          <div class="linha-cadastro">
            <img src="http://cmais.com.br/portal/images/capaPrograma/fpa/linha-formacao.png">
          </div>             	
         	
          <form id="form4" method="get" action="">
            <input type="hidden" value="" name="qm_codigo" id="qm_codigo">
            <div class="span12 tit-cadastro">
              <h2>Formação Escolar</h2>
              <hr/>
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Tipo de curso</label>
              <select name="DropDown_qm_tcurso"  id="DropDown_qm_tcurso" style="width:262px;">
                <option selected="selected" value="">Selecione</option>
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
            <div class="control-group span12" style="margin-left:0;">
              <label>Curso</label>
              <select name="DropDown_qm_curso" id="DropDown_qm_curso" style="width:262px;">
                <option selected="selected" value=""> Selecione / Outros</option>
              </select>
            </div>

            <div class="control-group span12" style="margin-left:0;">
              <label>Descrição</label>
              <input name="qm_dscout" type="text" maxlength="50" id="qm_dscout" style="width:320px;">
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Situação do Curso</label>
              <select name="DropDown_qm_escolar" id="DropDown_qm_escolar" style="width:262px;">
                <option value="">Selecione</option>
                <option value="02">Completo</option>
                <option value="01">Cursando</option>
                <option value="03">Incompleto</option>
              </select>
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Entidade</label>
              <input name="qm_entidad" type="text" maxlength="30" id="qm_entidad" style="width:250px;">
            </div>
            <div class="control-group span12" style="margin-left:0;">
              <label>Data da formação</label>
              <input name="qm_data" type="text" maxlength="10" id="qm_data" style="width:116px; float: left;margin-right:11px; ">
              <span class="help-block" style="margin: 11px;">(DD/MM/AAAA)</span>
            </div>
            <div class="span12" style="margin-left:0;">
              <button class="btn btn-primary pull-right" href="#" id="adicionar_curso">Adicionar</button>
            </div>
            

            <div class="control-group span12" style="margin-left:0;" id="acoes_curso">
              <button class="btn btn-primary pull-right" href="#" id="altera_curso">CONFIRMAR ALTERAÇÃO</button>
              <a class="btn btn-danger pull-right erase" href="#" id="deleta_curso" style="margin-top:0px;">Apagar</a>
              <a class="btn btn-default pull-right cancel" href="#" id="cancela_alteracao_curso" style="margin-top: 0px">Cancelar</a>
            </div>
            
            <div class="accordion" id="accordion_cursos">
            </div>
            
          </form>
          
          <!--/formacao escolar--> 
          <div class="row-fluid">
            <a type="submit" class="btn btn-primary pull-right" id="concluir_inscricao">CONCLUIR INSCRIÇÃO</a>
            <a type="reset" class="btn btn-default pull-right cancel" id="cancelar_cursos" style="margin-top:20px;">VOLTAR</a>
          </div> 
          
        </div>
        <!--/row4 - empregos de carteira-->
        
         <div class="row-fluid" id="row5" style="display:none;">
          <div class="linha-cadastro">
            <img src="http://cmais.com.br/portal/images/capaPrograma/fpa/linha-conclusao.png">
          </div>      	
         	
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
      <a href="/fpa/trabalhe-conosco" class="trabalhe btn btn-primary" title="Confira aqui nossas vagas e prazos.">
        <p>Processos seletivos anteriores</p>
        <p>Confira os Resultados</p>
      </a>
      <!--/CONFIRA-->
      <!--CONFIRA-->
       <?php  if(isset($displays['destaque-regulamento-interno'])): ?>
       	<?php foreach ($displays['destaque-regulamento-interno'] as $d):?>
      	<a href="http://midia.cmais.com.br/assets/file/original/<?php echo $d->Asset->AssetFile->getFile();?>" class="trabalhe btn btn-primary" target="_blank" title="Confira aqui nossas vagas e prazos.">
	        <p>Regulamento Interno de Processo Seletivo</p>
	        <p>Leia antes da Inscrição</p>
	      </a>
	      <?php endforeach; ?>
	      <?php endif; ?>
      <!--/CONFIRA-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->

<script src="http://cmais.com.br/portal/js/jquery.maskedinput-1.3.min.js"></script>  
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script src="http://cmais.com.br/actions/trabalhe-conosco/script_form_trabalhe_conosco.js" type="text/javascript"></script>

<script>
	function getURLParameter(name) {
    return decodeURI(
        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    );
	}
	
	if(getURLParameter("vg") == "null" || getURLParameter("vg") == ""){
		alert("Nenhuma vaga selecionada!");
		self.location = "http://cmais.com.br/fpa/trabalhe-conosco";
	}else{
		var codigo_vaga = getURLParameter("vg");
		$('#cod_vaga').val(codigo_vaga);
		
		var mensagem = ""; 
		$.ajax({
      type: "GET",
   	  dataType: "jsonp",
      url: "http://app.cmais.com.br/actions/trabalhe-conosco/consulta_vagas.php",
      error: function(retorno){
        //alert("Erro Json");
      }, 
      success: function(json) {
				$(json.data).each(function(index, dados){
					if(dados.vaga.codigo == codigo_vaga){
            mensagem = '<p style="color: red">Vaga selecionada: ' + dados.vaga.descricao + ' - ' +dados.vaga.departamento + "</p>";           
    		 	}
	      });
	      $('#dados_vaga').html(mensagem);
     	}
 		});		
 		
	}
</script>
