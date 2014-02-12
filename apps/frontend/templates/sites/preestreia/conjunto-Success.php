<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<!-- CAPA SITE -->
<div id="capa-site">

  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0): ?>
      <h2>
        <a href="<?php echo $program->retriveUrl() ?>">
          <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
        </a>
      </h2>
      <?php endif; ?>

      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif; ?>

      <?php if(isset($program) && $program->id > 0): ?>
      <!-- horario -->
      <div id="horario">
        <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
      </div>
      <!-- /horario -->
      <?php endif; ?>
    </div>

    <!-- box-topo -->
    <div class="box-topo grid3">

      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
      
      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
      </div>
      <?php endif; ?>
  
    </div>
    <!-- /box-topo -->
    
  </div>
  
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
          
          <!--Contato-->
          <div class="contato grid2">

            <h3 class="tit-pagina grid3"><?php echo $section->getTitle() ?></h3>  
            <p><?php echo $section->getDescription()?></p>

              <!--Memsagem Erro-->
              <div class="msgErro" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">Sua mensagem não pode ser enviada.</p>
                  <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Erro-->
              
              <!--mensagem Acerto-->
              <div class="msgAcerto" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">Mensagem enviada com sucesso!</p>
                  <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Acerto-->
            
            <!--form-->  
            <form id="form-contato-conjunto" method="post" action="/actions/preestreia/submit.php" enctype="multipart/form-data">
              
              <input type="hidden" name="return_url" value="http://tvcultura.cmais.com.br/preestreia/inscricao-efetuada-com-sucesso" />
              <input type="hidden" name="tipo" value="Conjunto" />
              
              <!--Nome Conjunto-->
              <div class="linha t9">
                
                <label>Nome do conjunto</label>
                <input type="text" name="conjuntonome" id="conjuntonome" />
              
              </div>
              <!--/Nome Conjunto-->
              
              <!--Como souberam-->
              <div class="linha t9 m10">
                <label>Como souberam do Pré-estreia?</label>
                <input type="text" name="conjuntocomosoube" id="conjuntocomosoube" />
              </div>
               <!--/Como souberam-->
              
              <!--Formação conjunto-->
              <div class="linha t9">
                  
                <label>Formação do conjunto</label>
                <input type="text" name="conjuntoformacao" id="conjuntoformacao" />
              
              </div>
              <!--/Formação conjunto-->
              
              <!--Tempo juntos-->
              <div class="linha t9 m10">
                
                <label>Há quanto tempo vocês tocam juntos?</label>
                <input type="text" name="conjuntotempo" id="conjuntotempo" />
                
              </div>
              <!--/Tempo juntos-->
              
              <!--participaram-->
              <div class="linha t9">
                <label>Vocês já participaram de outros concursos? Em caso afirmativo, quais?</label>
                <input type="text" name="conjuntoparticipacoes" id="conjuntoparticipacoes" />
              </div>
              <!--/participaram-->
                                
              <!--Professor-->
              <div class="linha t9 m10">
                <label>Qual o nome do professor/ orientador do conjunto?</label>
                <input type="text" name="conjuntoprofessor" id="conjuntoprofessor" />
              </div>
               <!--/professor-->

               <div class="t7 titulo">Cada um dos integrantes deve responder os itens abaixo:<br/>(mínimo 3 / máximo 8)</div>
              
              
              <!--Integrante-1-->
              <a href="javascript:;" class="t7 titulo laranja" id="btnIntegrante_1">Integrante nº 01</a>
              <div class="container-1" style="display: none;">
              <input type="hidden" name="integrante-1" value="integrante-1" />
                
                <!--Nome-1-->
                <div class="linha t5">
                  <label>Nome integrante</label>
                  <input type="text" name="nome_1" id="nome_1" class="required" />
                </div>
                <!--/Nome-1-->
                
                <!--sexo-1-->
                <div class="linha t2">
                  <label>
                    Sexo</label>
                  <br />
                  <select name="sexo-1" id="sexo-1" class="required">
                    <option value="" selected="selected">--</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                  </select>
                </div>
                <!--/sexo-1-->
                
                <!--idade-1-->
                <div class="linha t9">
                  <label>Nascimento</label>
                  <input type="text" maxlength="idade_1" name="idade_1" id="idade_1" class="nasc" />
                </div>
                <!--/idade-1-->
                
                <!--instrumento-1-->
                <div class="linha t9 m10">
                  <label>Instrumento</label>
                  <input type="text" name="instrumento_1" id="instrumento_1" />
                </div>
                <!--/instrumento-1-->
                
                <div class="linha t7">
                  <!--RG-1-->
                  <div class="linha t8 w204">
                    <label>RG</label><br/>
                    <input type="text" name="rg_1" id="rg_1" class="rg"/><br/>
                  </div>
                  <!--/RG-1-->
                  
                  <!--tel Resi-1-->
                  <div class="linha t8 m10 w204">
                    <label>Telefone Residencial</label><br/>
                    <input type="text" name="telresi_1" id="telresi_1" class="tel" /><br/>
                  </div>
                  <!--/tel Resi-1-->
                  
                  <!--tel Com-1-->
                  <div class="linha t8 m10 w204">
                    <label>Telefone Celular</label><br/>
                    <input type="text" name="telcom_1" id="telcom_1" class="cel" /><br/>
                  </div>
                  <!--/tel Com-1-->
                </div>
                
                <!--End-1-->
                <div class="linha t5">
                  <label>Endereço</label>
                  <input type="text" name="end_1" id="end_1" />
                </div>
                <!--/End-1-->
                
                <!--Estado-1-->
                <div class="linha t2">
                  <label>Estado</label>
                  <br />
                  <select class="estado_1 required" id="estado_1">
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
                <!--/Estado-1-->
                
                <!--bairro-1-->
                <div class="linha t8 w204">
                  <label>Bairro</label><br/>
                  <input type="text" name="bairro_1" id="bairro_1" /><br/>
                </div>
                <!--/bairro-1-->
                
                <!--cep-1-->
                <div class="linha t8 m10 w204">
                  <label>CEP</label><br/>
                  <input type="text" name="cep_1" id="cep_1" class="cep"/><br/>
                </div>
                <!--/cep-1-->
                
                <!--cidade-1-->
                <div class="linha t8 m10 w204">
                  <label>Cidade</label><br/>
                  <input type="text" name="cidade_1" id="cidade_1" /><br/>
                </div>
                <!--/cidade-1-->
                
                <!--Email-1-->
               <div class="linha t9">
                  <label>Email</label>
                  <input type="text" name="email_1" id="email_1" />
                </div> 
                <!--/Email-1-->
                
                <!--Nome Respon-1-->
                <div class="linha t9 m10">
                  <label>CPF</label>
                  <input type="text" name="cpf_1" id="cpf_1" class="cpf required" />
                </div>
                <!--/Nome Respon-1-->
                
                <!--tempo-1-->
                <div class="linha t9">
                  <label>Há quanto tempo estuda música?</label>
                  <input type="text" name="tempo_1" id="tempo_1" />
                </div>
                <!--/tempo-1-->
                
                <!--escola-1-->
                <div class="linha t9 m10">
                  <label>Qual sua escola de música?</label>
                  <input type="text" name="escolamusica_1" id="escolamusica_1" />
                </div>                  
                <!--/escola-1-->
                
                <!--professor-1-->
                <div class="linha t9">
                  <label>Qual o nome do seu professor atual?</label>
                  <input type="text" name="professor_1" id="professor_1" />
                </div>
                <!--/professor-1-->
                
                <!--ano-1-->
                <div class="linha t9 m10">
                  <label>Em que ano você está?</label>
                  <input type="text" name="escola_1" id="escola_1" />
                </div>
                <!--/ano-1-->
                
                <!--cursa-1-->
                <div class="linha t7">
                  <label>Você cursa escola regular? Em caso afirmativo, quais?</label>
                  <input type="text" name="regular_1" id="regular_1" />
                </div>
                <!--/cursa-1-->

              
                
                <p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>
                
                <!--NomeResponsa-1-->                   
                <div class="linha t7">
                  <label>Nome Responsável</label>
                  <input type="text" name="responsavelmenor_1" id="responsavelmenor_1" />
                </div>
                <!--/NomeResponsa-1-->  
                
                <!--RG-1-->  
                <div class="linha t9">
                  <label>RG</label>
                  <input type="text" name="rgmenor_1" id="rgmenor_1" class="rg" />
                </div>
                <!--/RG-1-->  
                
                <!--CPF-1-->  
                <div class="linha t9 m10">
                  <label>CPF</label>
                  <input type="text" name="cpfmenor_1" id="cpfmenor_1" class="cpf" />
                </div>
                <!--/CPF-1--> 
              
                </div>
                <!--/Integrante1-->                  
                
                <!--Integrante-2-->
              <a href="javascript:;" class="t7 titulo laranja" id="btnIntegrante_2">Integrante nº 02</a>
              <div class="container-2" style="display: none;">
              <input type="hidden" name="integrante-2" value="integrante-2" />  
                <!--Nome-2-->
                <div class="linha t5">
                  <label>Nome integrante</label>
                  <input type="text" name="nome_2" id="nome_2" class="required" />
                </div>
                <!--/Nome-2-->
                
                 <!--sexo-2-->
                <div class="linha t2">
                  <label>
                    Sexo</label>
                  <br />
                  <select name="sexo-2" id="sexo-2" class="required">
                    <option value="" selected="selected">--</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                  </select>
                </div>
                <!--/sexo-2-->
                
                <!--idade-2-->
                <div class="linha t9">
                  <label>Nascimento</label>
                  <input type="text" maxlength="idade_2" name="idade_2" id="idade_2" class="nasc"  />
                </div>
                <!--/idade-2-->
                
                <!--instrumento-2-->
                <div class="linha t9 m10">
                  <label>Instrumento</label>
                  <input type="text" name="instrumento_2" id="instrumento_2" />
                </div>
                <!--/instrumento-2-->
                
                <div class="linha t7">
                  <!--RG-2-->
                  <div class="linha t8 w204">
                    <label>RG</label><br/>
                    <input type="text" name="rg_2" id="rg_2" class="rg" /><br/>
                  </div>
                  <!--/RG-2-->
                  
                  <!--tel Resi-2-->
                  <div class="linha t8 m10 w204">
                    <label>Telefone Residencial</label><br/>
                    <input type="text" name="telresi_2" id="telresi_2" class="tel" /><br/>
                  </div>
                  <!--/tel Resi-2-->
                  
                  <!--tel Com-2-->
                  <div class="linha t8 m10 w204">
                    <label>Telefone Celular</label><br/>
                    <input type="text" name="telcom_2" id="telcom_2" class="tel" /><br/>
                  </div>
                  <!--/tel Com-2-->
                </div>
                <!--End-2-->
                <div class="linha t5">
                  <label>Endereço</label>
                  <input type="text" name="end_2" id="end_2" />
                </div>
                <!--/End-2-->
                
                <!--Estado-2-->
                <div class="linha t2">
                  <label>Estado</label>
                  <br />
                  <select class="estado_2 required" id="estado_2">
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
                <!--/Estado-2-->
                
                <!--bairro-2-->
                <div class="linha t8 w204">
                  <label>Bairro</label><br/>
                  <input type="text" name="bairro_2" id="bairro_2" /><br/>
                </div>
                <!--/bairro-2-->
                
                <!--cep-2-->
                <div class="linha t8 m10 w204">
                  <label>CEP</label><br/>
                  <input type="text" name="cep_2" id="cep_2" class="cep" /><br/>
                </div>
                <!--/cep-2-->
                
                <!--cidade-2-->
                <div class="linha t8 m10 w204">
                  <label>Cidade</label><br/>
                  <input type="text" name="cidade_2" id="cidade_2" /><br/>
                </div>
                <!--/cidade-2-->
                
                <!--Email-2-->
               <div class="linha t9">
                  <label>Email</label>
                  <input type="text" name="email_2" id="email_2" />
                </div> 
                <!--/Email-2-->
                
                <!--Nome Respon-2-->
                <div class="linha t9 m10">
                  <label>CPF</label>
                  <input type="text" name="cpf_2" id="cpf_2" class="cpf required" />
                </div>
                <!--/Nome Respon-2-->
                
                <!--tempo-2-->
                <div class="linha t9">
                  <label>Há quanto tempo estuda música?</label>
                  <input type="text" name="tempo_2" id="tempo_2" />
                </div>
                <!--/tempo-2-->
                
                <!--escola-2-->
                <div class="linha t9 m10">
                  <label>Qual sua escola de música?</label>
                  <input type="text" name="escolamusica_2" id="escolamusica_2" />
                </div>                  
                <!--/escola-2-->
                
                <!--professor-2-->
                <div class="linha t9">
                  <label>Qual o nome do seu professor atual?</label>
                  <input type="text" name="professor_2" id="professor_2" />
                </div>
                <!--/professor-2-->
                
                <!--ano-2-->
                <div class="linha t9 m10">
                  <label>Em que ano você está?</label>
                  <input type="text" name="escola_2" id="escola_2" />
                </div>
                <!--/ano-2-->
                
                <!--cursa-2-->
                <div class="linha t7">
                  <label>Você cursa escola regular? Em caso afirmativo, quais?</label>
                  <input type="text" name="regular_2" id="regular_2" />
                </div>
                <!--/cursa-2-->

              
                
                <p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>
                
                <!--NomeResponsa-2-->                   
                <div class="linha t7">
                  <label>Nome Responsável</label>
                  <input type="text" name="responsavelmenor_2" id="responsavelmenor_2" />
                </div>
                <!--/NomeResponsa-2-->  
                
                <!--RG-2-->  
                <div class="linha t9">
                  <label>RG</label>
                  <input type="text" name="rgmenor_2" id="rgmenor_2" class="rg" />
                </div>
                <!--/RG-2-->  
                
                <!--CPF-2-->  
                <div class="linha t9 m10">
                  <label>CPF</label>
                  <input type="text" name="cpfmenor_2" id="cpfmenor_2" class="cpf" />
                </div>
                <!--/CPF-2--> 
              
                </div>
                <!--/Integrante2--> 
                
              <!--Integrante-3-->
              <a href="javascript:;" class="t7 titulo laranja"  id="btnIntegrante_3">Integrante nº 03</a>
              <div class="container-3" style="display: none;">
              <input type="hidden" name="integrante-3" value="integrante-3" />
               
                <!--Nome-3-->
                <div class="linha t5">
                  <label>Nome integrante</label>
                  <input type="text" name="nome_3" id="nome_3" class="required" />
                </div>
                <!--/Nome-3-->
                
                 <!--sexo-3-->
                <div class="linha t2">
                  <label>
                    Sexo</label>
                  <br />
                  <select name="sexo-3" id="sexo-3" class="required">
                    <option value="" selected="selected">--</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                  </select>
                </div>
                <!--/sexo-3-->
                
                <!--idade-3-->
                <div class="linha t9">
                  <label>Nascimento</label>
                  <input type="text" maxlength="idade_3" name="idade_3" id="idade_3" class="nasc"  />
                </div>
                <!--/idade-3-->
                
                <!--instrumento-3-->
                <div class="linha t9 m10">
                  <label>Instrumento</label>
                  <input type="text" name="instrumento_3" id="instrumento_3" />
                </div>
                <!--/instrumento-3-->
                
                <div class="linha t7">
                  <!--RG-3-->
                  <div class="linha t8 w204">
                    <label>RG</label><br/>
                    <input type="text" name="rg_3" id="rg_3" class="rg"/><br/>
                  </div>
                  <!--/RG-3-->
                  
                  <!--tel Resi-3-->
                  <div class="linha t8 m10 w204">
                    <label>Telefone Residencial</label><br/>
                    <input type="text" name="telresi_3" id="telresi_3" class="tel"/><br/>
                  </div>
                  <!--/tel Resi-3-->
                  
                  <!--tel Com-3-->
                  <div class="linha t8 m10 w204">
                    <label>Telefone Celular</label><br/>
                    <input type="text" name="telcom_3" id="telcom_3" class="tel" /><br/>
                  </div>
                  <!--/tel Com-3-->
                </div>
                
                <!--End-3-->
                <div class="linha t5">
                  <label>Endereço</label>
                  <input type="text" name="end_3" id="end_3" />
                </div>
                <!--/End-3-->
                
                <!--Estado-3-->
                <div class="linha t2">
                  <label>Estado</label>
                  <br />
                  <select class="estado_3 required" id="estado_3">
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
                <!--/Estado-3-->
                
                <!--bairro-3-->
                <div class="linha t8 w204">
                  <label>Bairro</label><br/>
                  <input type="text" name="bairro_3" id="bairro_3" /><br/>
                </div>
                <!--/bairro-3-->
                
                <!--cep-3-->
                <div class="linha t8 m10 w204">
                  <label>CEP</label><br/>
                  <input type="text" name="cep_3" id="cep_3" class="cep" /><br/>
                </div>
                <!--/cep-3-->
                
                <!--cidade-3-->
                <div class="linha t8 m10 w204">
                  <label>Cidade</label><br/>
                  <input type="text" name="cidade_3" id="cidade_3" /><br/>
                </div>
                <!--/cidade-3-->
                
                <!--Email-3-->
               <div class="linha t9">
                  <label>Email</label>
                  <input type="text" name="email_3" id="email_3" />
                </div> 
                <!--/Email-3-->
                
                <!--Nome Respon-3-->
                <div class="linha t9 m10">
                  <label>CPF</label>
                  <input type="text" name="cpf_3" id="cpf_3" class="cpf required" />
                </div>
                <!--/Nome Respon-3-->
                
                <!--tempo-3-->
                <div class="linha t9">
                  <label>Há quanto tempo estuda música?</label>
                  <input type="text" name="tempo_3" id="tempo_3" />
                </div>
                <!--/tempo-3-->
                
                <!--escola-3-->
                <div class="linha t9 m10">
                  <label>Qual sua escola de música?</label>
                  <input type="text" name="escolamusica_3" id="escolamusica_3" />
                </div>                  
                <!--/escola-3-->
                
                <!--professor-3-->
                <div class="linha t9">
                  <label>Qual o nome do seu professor atual?</label>
                  <input type="text" name="professor_3" id="professor_3" />
                </div>
                <!--/professor-3-->
                
                <!--ano-3-->
                <div class="linha t9 m10">
                  <label>Em que ano você está?</label>
                  <input type="text" name="escola_3" id="escola_3" />
                </div>
                <!--/ano-3-->
                
                <!--cursa-3-->
                <div class="linha t7">
                  <label>Você cursa escola regular? Em caso afirmativo, quais?</label>
                  <input type="text" name="regular_3" id="regular_3" />
                </div>
                <!--/cursa-3-->

              
                
                <p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>
                
                <!--NomeResponsa-3-->                   
                <div class="linha t7">
                  <label>Nome Responsável</label>
                  <input type="text" name="responsavelmenor_3" id="responsavelmenor_3" />
                </div>
                <!--/NomeResponsa-3-->  
                
                <!--RG-3-->  
                <div class="linha t9">
                  <label>RG</label>
                  <input type="text" name="rgmenor_3" id="rgmenor_3" class="rg"/>
                </div>
                <!--/RG-3-->  
                
                <!--CPF-3-->  
                <div class="linha t9 m10">
                  <label>CPF</label>
                  <input type="text" name="cpfmenor_3" id="cpfmenor_3" class="cpf" />
                </div>
                <!--/CPF-3--> 
              
                </div>
                <!--/Integrante3--> 
                
                <!--Botao Adiciona Integrante-->
                <div class="linha add" id="adicionar_holder">
                 <a href="javascript:;" id="adicionar" class="enviar">+ Integrante</a>
               </div>
               <!--/Botao Adiciona Integrante-->
               
               <!--Botao Remove Integrante-->
               <div class="linha add" id="remover_holder" style="display:none;">
                       <a href="javascript:;" id="remover" class="enviar">Remover</a>
               </div>
               <!--/Botao Remove Integrante-->
               
                
              <script>
              $(function(){
              
                var i = 1; // start index
                var min = 3; // configure minimum number of elements
                var max = 8; // configure maximum number of items
                i = min;
                
                $("#adicionar").click(function() {
                  $('#remover_holder').show();
                  if (i < max) {
                    i++;
                    
                    var new_field = '<div id="container-'+i+'">';
                    new_field += '<!--Integrante-'+i+'-->';
                    new_field += '<a href="javascript:;" class="t7 titulo laranja" id="btnIntegrante_'+i+'">Integrante nº 0'+i+'</a>';
                    new_field += '<div style="display: none;">';
                    new_field += '<input type="hidden" value="integrante-'+i+'" />';
                      
                    new_field += '<!--Nome-'+i+'-->';
                    new_field += '<div class="linha t5">';
                    new_field += '  <label>Nome integrante:</label>';
                    new_field += '  <input type="text" name="nome_'+i+'" id="nome_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/Nome-'+i+'-->';
                      
                    new_field += '<!--sexo-'+i+'-->';
                    new_field += '<div class="linha t2">';
                    new_field += '  <label>';
                    new_field += '    Sexo</label>';
                    new_field += '  <br />';
                    new_field += '  <select name="sexo-'+i+'" id="sexo-'+i+'" class="required">';
                    new_field += '    <option value="" selected="selected">--</option>';
                    new_field += '    <option value="Feminino">Feminino</option>';
                    new_field += '    <option value="Masculino">Masculino</option>';
                    new_field += '  </select>';
                    new_field += '</div>';
                    new_field += '<!--/sexo-'+i+'-->';
                      
                    new_field += '<!--idade-'+i+'-->';
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>Nascimento</label>';
                    new_field += '  <input type="text" maxlength="idade_'+i+'" name="idade_'+i+'" id="idade_'+i+'" class="nasc'+i+' required" />';
                    new_field += '</div>';
                    new_field += '<!--/idade-'+i+'-->';
                      
                    new_field += '  <!--instrumento-'+i+'-->';
                    new_field += '  <div class="linha t9 m10">';
                    new_field += '    <label>Instrumento:</label>';
                    new_field += '    <input type="text" name="instrumento_'+i+'" id="instrumento_'+i+'" class="required" />';
                    new_field += '  </div>';
                    new_field += '<!--/instrumento-'+i+'-->';
                    
                    new_field += '<div class="linha t7">';  
                    new_field += '  <!--RG-'+i+'-->';
                    new_field += '  <div class="linha t8 w204">';
                    new_field += '    <label>RG</label><br/>';
                    new_field += '    <input type="text" name="rg_'+i+'" id="rg_'+i+'" class="rg'+i+' required" /><br/>';
                    new_field += '  </div>';
                    new_field += '  <!--/RG-'+i+'-->';
                      
                    new_field += '  <!--tel Resi-'+i+'-->';
                    new_field += '  <div class="linha t8 m10 w204">';
                    new_field += '    <label>Telefone Residencial</label><br/>';
                    new_field += '    <input type="text" name="telresi_'+i+'" id="telresi_'+i+'" class="tel'+i+' required" /><br/>';
                    new_field += '  </div>';
                    new_field += '  <!--/tel Resi-'+i+'-->';
                      
                    new_field += '  <!--tel Com-'+i+'-->';
                    new_field += '  <div class="linha t8 m10 w204">';
                    new_field += '    <label>Telefone Celular</label><br/>';
                    new_field += '    <input type="text" name="telcom_'+i+'" id="telcom_'+i+'" class="cel'+i+' required" /><br/>';
                    new_field += '  </div>';
                    new_field += '  <!--/tel Com-'+i+'-->';
                    new_field += '</div>';
                      
                    new_field += '  <!-- End-'+i+'-->';
                    new_field += '  <div class="linha t5">';
                    new_field += '    <label>Endereço</label>';
                    new_field += '    <input type="text" name="end_'+i+'" id="end_'+i+'" class="required" />';
                    new_field += '  </div>';
                    new_field += '  <!--/ End-'+i+'-->';
                      
                    new_field += '<!--Estado-'+i+'-->';
                    new_field += '  <div class="linha t2">';
                    new_field += '<label>Estado</label>';
                    new_field += '<br />';
                    new_field += '<select class="estado_'+i+' required" id="estado_'+i+'">';
                    new_field += '    <option value="" selected="selected">--</option>';
                    new_field += '    <option value="Acre">AC</option>';
                    new_field += '    <option value="Alagoas">AL</option>';
                    new_field += '    <option value="Amazonas">AM</option>';
                    new_field += '    <option value="Amap&aacute;">AP</option>';
                    new_field += '    <option value="Bahia">BA</option>';
                    new_field += '    <option value="Cear&aacute;">CE</option>';
                    new_field += '    <option value="Distrito Federal">DF</option>';
                    new_field += '    <option value="Espirito Santo">ES</option>';
                    new_field += '    <option value="Goi&aacute;s">GO</option>';
                    new_field += '    <option value="Maranh&atilde;o">MA</option>';
                    new_field += '    <option value="Minas Gerais">MG</option>';
                    new_field += '    <option value="Mato Grosso do Sul">MS</option>';
                    new_field += '    <option value="Mato Grosso">MT</option>';
                    new_field += '    <option value="Par&aacute;">PA</option>';
                    new_field += '    <option value="Para&iacute;ba">PB</option>';
                    new_field += '    <option value="Pernambuco">PE</option>';
                    new_field += '    <option value="Piau&iacute;">PI</option>';
                    new_field += '    <option value="Paran&aacute;">PR</option>';
                    new_field += '    <option value="Rio de Janeiro">RJ</option>';
                    new_field += '    <option value="Rio Grande do Norte">RN</option>';
                    new_field += '    <option value="Rond&ocirc;nia">RO</option>';
                    new_field += '    <option value="Roraima">RR</option>';
                    new_field += '    <option value="Rio Grande do Sul">RS</option>';
                    new_field += '    <option value="Santa Catarina">SC</option>';
                    new_field += '    <option value="Sergipe">SE</option>';
                    new_field += '    <option value="S&atilde;o Paulo">SP</option>';
                    new_field += '    <option value="Tocantins">TO</option>';
                    new_field += '</select>';
                    new_field += '</div>';
                    new_field += '<!--/Estado-'+i+'-->';
                      
                    new_field += '<!--bairro-'+i+'-->';
                    new_field += '<div class="linha t8 w204">';
                    new_field += '  <label>Bairro</label><br/>';
                    new_field += '  <input type="text" name="bairro_'+i+'" id="bairro_'+i+'" class="required" /><br/>';
                    new_field += '</div>';
                    new_field += '<!--/bairro-'+i+'-->';
                      
                    new_field += '<!--cep-'+i+'-->';
                    new_field += '<div class="linha t8 m10 w204">';
                    new_field += '  <label>CEP</label><br/>';
                    new_field += '  <input type="text" name="cep_'+i+'" id="cep_'+i+'" class="cep'+i+' required" /><br/>';
                    new_field += '</div>';
                    new_field += '<!--/cep-'+i+'-->';
                      
                    new_field += '<!--cidade-'+i+'-->';
                    new_field += '  <div class="linha t8 m10 w204">';
                    new_field += '  <label>Cidade</label><br/>';
                    new_field += '  <input type="text" name="cidade_'+i+'" id="cidade_'+i+'" class="required" /><br/>';
                    new_field += '</div>';
                    new_field += '<!--/cidade-'+i+'-->';
                      
                    new_field += '<!--Email-'+i+'-->';
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>Email</label>';
                    new_field += '  <input type="text" name="email_'+i+'" id="email_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/Email-'+i+'-->';
                      
                    new_field += '<!--Nome Respon-'+i+'-->';
                    new_field += '<div class="linha t9 m10">';
                    new_field += '  <label>CPF</label>';
                    new_field += '  <input type="text" name="cpf_'+i+'" id="cpf_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/Nome Respon-'+i+'-->';
                      
                    new_field += '<!--tempo-'+i+'-->';
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>Há quanto tempo estuda música?</label>';
                    new_field += '  <input type="text" name="tempo_'+i+'" id="tempo_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/tempo-'+i+'-->';
                      
                    new_field += '<!--escola-'+i+'-->';
                    new_field += '<div class="linha t9 m10">';
                    new_field += '  <label>Qual sua escola de música?</label>';
                    new_field += '  <input type="text" name="escolamusica_'+i+'" id="escolamusica_'+i+'" class="required" />';
                    new_field += '</div>';                  
                    new_field += '<!--/escola-'+i+'-->';
                      
                    new_field += '<!--professor-'+i+'-->';
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>Qual o nome do seu professor atual?</label>';
                    new_field += '  <input type="text" name="professor_'+i+'" id="professor_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/professor-'+i+'-->';
                      
                    new_field += '<!--ano-'+i+'-->';
                    new_field += '<div class="linha t9 m10">';
                    new_field += '  <label>Em que ano você está?</label>';
                    new_field += '  <input type="text" name="escola_'+i+'" id="escola_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/ano-'+i+'-->';
                      
                    new_field += '<!--cursa-'+i+'-->';
                    new_field += '<div class="linha t7">';
                    new_field += '  <label>Você cursa escola regular? Em caso afirmativo, quais?</label>';
                    new_field += '  <input type="text" name="regular_'+i+'" id="regular_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/cursa-'+i+'-->';
    
                    new_field += '<p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>';
                      
                    new_field += '<!--NomeResponsa-'+i+'-->';                   
                    new_field += '<div class="linha t7">';
                    new_field += '  <label>Nome Responsável:</label>';
                    new_field += '  <input type="text" name="responsavelmenor_'+i+'" id="responsavelmenor_'+i+'" />';
                    new_field += '</div>';
                    new_field += '<!--/NomeResponsa-'+i+'-->';  
                      
                    new_field += '<!--RG-'+i+'-->';  
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>RG</label>';
                    new_field += '  <input type="text" name="rgmenor_'+i+'" id="rgmenor_'+i+'"  class="rg'+i+'"/>';
                    new_field += '</div>';
                    new_field += '<!--/RG-'+i+'-->';  
                      
                    new_field += '<!--CPF-'+i+'-->';  
                    new_field += '<div class="linha t9 m10">';
                    new_field += '  <label>CPF</label>';
                    new_field += '  <input type="text" name="cpfmenor_'+i+'" id="cpfmenor_'+i+'" class="cpf'+i+'" />';
                    new_field += '</div>';
                    new_field += '<!--/CPF-'+i+'-->'; 
                    
                    new_field += '</div>';
                    new_field += '<!--/Integrante'+i+'-->'; 
                    new_field += '</div>';                 
 
                      

                      $("#adicionar_holder").before(new_field);
                  }
                  else {
                    alert('Você pode inserir no máximo '+max+' integrantes!')
                  }
                  
                  //integrantes
                  $('#btnIntegrante_'+i).click(function(){
                    $(this).next().toggle();
                  });
                  //$('.rg'+i).mask("99.999.999-9");
                  $('.cpf'+i).mask("999.999.999-99");
                  $('.cep'+i).mask("99999-999");
                  $('.tel'+i).mask("(99) 9999-9999");
                  $('.cel'+i).mask("(99) ?999999999");
                  $('.nasc'+i).mask("99/99/9999");
                                
                });
                
                //remove last fields
                $("#remover").click( function() {
                  if (i > min) {
                    $("#container-"+i).remove();
                    $("#numero").val();
                    if (i == (min+1)){
                      $("#remover_holder").hide();
                    }
                    i--;
                  }
                });
                
                //integrantes
                $('#btnIntegrante_1,#btnIntegrante_2,#btnIntegrante_3').click(function(){
                  $(this).next().toggle();
                });
              });
              </script>
              
          <!--Sugestoes-->
          <div class="linha t7">
            <label>Sugestão de repertório a ser executado no programa <br/>(favor listar 6 opções, com duração máxima de 5 minutos)</label>
          </div>
          
          <div class="linha t9">
             
            <label>1ª opção</label>
            <input type="text" name="sugestao1" id="sugestao1" />
            
            <label>2ª opção</label>
            <input type="text" name="sugestao2" id="sugestao2" />
            
            <label>3ª opção</label>
            <input type="text" name="sugestao3" id="sugestao3" />
            
          </div>
          
          <div class="linha t9 m10"> 
             
            <label>4ª opção</label>
            <input type="text" name="sugestao4" id="sugestao4" />
            
            <label>5ª opção</label>
            <input type="text" name="sugestao5" id="sugestao5" />
            
            <label>6ª opção</label>
            <input type="text" name="sugestao6" id="sugestao6" />
            
          </div>
          <!--/Sugestões-->
          
          <!--Sugestões Final-->
          <div class="linha t7">
            <label>Sugestão de repertório a ser executado na prova final<br/> (favor listar 2 opções com duração máxima de 10 minutos) <br/>com acompanhamento de orquestra:</label>
          </div>
          
          <div class="linha t9">
            
            <label>1ª opção</label>
            <input type="text" name="sugestaofinal1" id="sugestaofinal1" />
          
          </div>
          
          <div class="linha t9 m10">
              
            <label>2ª opção</label>
            <input type="text" name="sugestaofinal2" id="sugestaofinal2" />
          
          </div>
          <!--/Sugestões Final-->
          
          <!--Links Videos-->
          <div class="linha t7">
            
            <label>Informe aqui os links de seus vídeos em que toca as obras requisitadas para a seleção</label>
            
            <label>1ª opção</label>
            <input type="text" name="link1" id="link1" />
            
            <label>2ª opção</label>
            <input type="text" name="link2" id="link2" />
            
            <label>3ª opção</label>
            <input type="text" name="link3" id="link3" />
            
          </div>
          <!--/Links Videos--> 
          
          <!--Currículo-->
          <div class="linha t7">
            
            <label>Currículo artístico com apenas uma lauda</label>
            <textarea name="curriculo" id="curriculo" class="w100" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
            <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
            
          </div>
          <!--/Currículo-->  
          
          <!--Anexar Foto-->
          <div class="linha t7">
            
            <label>Anexar foto</label>
            <input type="file" name="new_photo" id="anexofoto" />
            
          </div>
          <!--/Anexar Foto-->
          
                      
        <!--Regulamento-->
          <div class="linha t1 regulamento">
            
              <ul>
                                      <li class="bold">Pré-estreia 2012 </li>
                <li>‘Pré-estreia 2012’ é um concurso musical que apresentará ao público jovens talentos da música clássica. No ‘Pré-estreia 2012’, músicos de até 24 anos, praticantes de qualquer instrumento, e cantores de até 28 anos terão a oportunidade de se apresentar como solistas ou em conjuntos de câmara de até 8 instrumentistas ou cantores ou mistos de instrumentistas e cantores.</li>
                
                <li class="bold">‘Pré-estreia 2012’</li>
                <li>Concurso para músicos instrumentistas, cantores líricos e conjuntos de câmara</li>
                <li>Conheça o regulamento que define as regras e orienta os músicos interessados em participar do Pré-estreia 2012, a realizar-se entre agosto e dezembro de 2012.</li>
                <li class="bold">REGULAMENTO</li>
                <li>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, através de sua emissora de televisão TV Cultura – Canal 2,promove o “Pré-estreia 2012 - Concurso para músicos instrumentistas, cantores líricos e conjuntos de câmara, que será regido por este regulamento, cujas disposições declaram os candidatos aceitar por ocasião da submissão de sua respectiva ficha de inscrição.</li>
                <li class="bold">I - DOS OBJETIVOS:</li>
                <li>O presente Concurso tem a finalidade incentivar jovens instrumentistas, cantores líricos e conjuntos de câmara de 3 (três) a 8 (oito) instrumentistas ou cantores ou mistos de instrumentistas e cantores. Os candidatos  deverão ser brasileiros ou estrangeiros residentes no país. Os quatro instrumentistas, cantores líricos ou conjuntos de câmara que obtiverem a melhor colocação ao longo das provas eliminatórias, semifinais e final serão premiados de acordo com as normas do presente regulamento.</li>
                <li class="bold">II - DO PÚBLICO ALVO:</li>
                <li>O concurso tem como público-alvo jovens instrumentistas de até 24 anos ou cantores de até 28 anos de idade. Não serão aceitas inscrições de instrumentistas que completem 25 anos ou cantores que completem 29 anos antes de 16 de dezembro de 2012.</li>
                <li>Parágrafo único: Não será admitida, em hipótese alguma, a participação no Concurso de funcionários da instituição promotora – Fundação Padre Anchieta, membros da Comissão Organizadora e candidatos que tenham grau de parentesco ou sociedade com qualquer membro da referida Comissão.</li>
                
                <li class="bold">III - DO CRONOGRAMA:</li>
                <li>1. As inscrições deverão ser realizadas entre os dias 02 de abril de 2012 e 26 de maio de 2012. Em não havendo o número mínimo de candidatos inscritos até a data de 26 de maio de 2012, a exclusivo critério da Fundação Padre Anchieta, as inscrições poderão ser prorrogadas até o dia 31 de maio de 2012. Nesta hipótese, será divulgada a prorrogação do prazo de inscrição. Os candidatos selecionados serão contatados diretamente pela equipe de produção do Concurso. O material enviado para o Concurso não será devolvido.</li>
                <li>2. Após a seleção dos candidatos, que será feita por meio da análise de vídeos, o Concurso terá início e contará com 11 (onze) etapas de apresentações públicas. Serão 8 (oito) provas eliminatórias, sendo 6 (seis) eliminatórias de solistas e  2 (duas) eliminatórias de conjuntos; 2 (duas) provas semifinais e 1 (uma) prova final. As datas das apresentações públicas que compõem o Concurso serão definidas e previamente divulgadas pela Comissão Organizadora. Os ensaios e a realização das provas ocorrerão entre os meses de agosto e dezembro de 2012.</li>
                <li>3. A premiação será concedida aos vencedores quando da prova final do Concurso, em que participarão os quatro candidatos selecionados nas provas eliminatórias e semifinais.</li>
                
                <li class="bold">IV - DA INSCRIÇÃO E ENVIO DE MATERIAL</li>
                <li>1. As inscrições serão feitas por meio de fichas disponíveis para esse fim no site do Concurso: www.cmais.com.br/preestreia.</li> 
                <li>2. Junto com a ficha de inscrição, os candidatos deverão anexar uma foto recente, um currículo artístico de apenas uma lauda, a cópia de documento de identidade, com foto. Na ficha de inscrição os candidatos deverão indicar o link que dará acesso a vídeo contendo a gravação de 3 (três) obras diferentes que constituem a primeira etapa do Concurso.</li> 
                <li>3. Cada candidato deverá gravar um vídeo contendo 3 (três) obras de até 5 (cinco) minutos cada e de estilos diferentes para que melhor se avalie o candidato. Cada obra não poderá exceder a duração de 5 (cinco) minutos. As 3 (três) obras poderão, no caso de instrumentistas solistas ou cantores, ter acompanhamento de piano ou serem escritas para instrumento / voz solo. Os conjuntos de câmara – vocais ou instrumentais ou mistos – também deverão apresentar 3 (três) obras que não poderão exceder, cada uma, a duração de 5 (cinco) minutos  e deverão ser de estilos diferentes para que melhor se avalie seu desempenho. As obras indicadas na ficha de inscrição deverão obrigatoriamente corresponder àquelas gravadas em vídeo. As 3 (três) obras gravadas deverão estar incluídas na relação de obras que o candidato executará, se escolhido, nas provas eliminatórias.</li>  
                <li>4. Os vídeos especificados no item 3 devem ser postados no Youtube. Não serão aceitos vídeos em DVD ou em outro formato.</li> 
                <li>5. Será considerada válida a inscrição enviada completa (ficha de inscrição preenchida, foto, currículo, cópia de documento e link de acesso à gravação) até o dia 26 de maio. Não serão aceitas inscrições enviadas com qualquer um dos itens faltantes. Também não serão permitidos envios posteriores de materiais ou requisitos complementares.</li>
                <li>6. Os instrumentistas ou cantores solistas deverão indicar na ficha de inscrição:</li>
                <li>a)  6 (seis) obras (ou movimentos de obras) de até 5 (cinco) minutos de duração cada, das quais 2 (duas)  serão apresentadas pelos candidatos na fase eliminatória do Concurso. As 2 (duas) obras serão escolhidas pela Comissão Organizadora e comunicadas a cada um dos candidatos. O repertório escolhido, se originalmente escrito com acompanhamento de orquestra, será apresentado com redução para piano .</li>
                <li>b)  2 (dois) movimentos de concertos ou obras, para candidatos instrumentistas, ou 2 (duas) árias ou obras, para candidatos cantores, a serem interpretadas pelo candidato, na prova final, que será feita com a Orquestra do Conservatório de Tatuí. O movimento ou obra ou ária a ser apresentado pelo candidato na prova final, escolhido entre os 2 (dois) sugeridos pelo candidato, será definido de comum acordo com a Comissão Organizadora.</li>
                <li>7. Na prova semifinal, o candidato cantor ou instrumentista deverá interpretar duas obras diferentes daquelas apresentadas na prova eliminatória, escolhidas dentre as 6 (seis) indicadas no ato da inscrição.</li>
                <li>8. Os conjuntos de câmara – vocais, instrumentais ou mistos – deverão indicar na ficha de inscrição:</li>
                <li>a)  6 (seis) obras (ou movimentos de obras) de até 5 (cinco) minutos de duração cada, das quais 2 (duas)  serão apresentadas pelos candidatos na fase eliminatória do Concurso. As 2 (duas) obras serão escolhidas pela Comissão Organizadora e comunicadas a cada um dos candidatos.</li>
                <li>b)  pelo menos 2 (duas) obras instrumentais ou vocais ou mistas de até 10 minutos de duração cada a serem interpretadas pelo conjunto concorrente na prova final. Estas obras poderão ser dois movimentos de uma mesma obra maior (quarteto de cordas, quinteto de sopros, etc.), desde que juntas não ultrapassem a duração de 10 minutos. O movimento ou obra a ser apresentado pelo candidato na prova final, escolhido entre os 2 (dois) sugeridos pelo candidato, será definido de comum acordo com a Comissão Organizadora.</li>
                <li>9. O candidato responderá pela veracidade das informações enviadas. O fornecimento de informações falsas, imprecisas ou dúbias, ou inautenticidade do material gravado ou de imagem, resultará na desclassificação sumária e inapelável do candidato. A não observância de qualquer dos requisitos estipulados neste regulamento acarretará o cancelamento automático da inscrição, sem apreciação do trabalho.</li>
                <li>10. Os candidatos podem se inscrever nas duas categorias, mas serão selecionados para concorrer em apenas uma delas. A escolha da categoria na qual o candidato participará ficará a critério da Comissão Julgadora.</li>
                <li>11. Não será necessário pagamento de taxa de inscrição.</li>
                <li>12. No caso do candidato ser menor de 18 anos, deverão ser preenchidos na ficha de inscrição, os dados do responsável legal no campo destinado à isso.</li>
                <li>13. A inscrição de um músico para participar do Concurso implica na aceitação de todos os itens deste regulamento e na assinatura do Termo de Compromisso que regulará a participação no evento.</li>
                
                <li class="bold">V. DO PROCESSO SELETIVO E ELIMINATÓRIO</li>
                <li>1. A escolha dos músicos que se apresentarão no Concurso será efetuada pelo critério inapelável e irrecorrível de Comissão de Seleção, previamente designada pela direção do Concurso, não cabendo qualquer tipo de recurso. Os profissionais que integrarão tal Comissão serão conhecidos até o dia 01 de maio de 2012 e terão seus nomes divulgados no site do Concurso.</li>
                <li>2. Serão escolhidos 24 (vinte e quatro) candidatos finalistas. Em cada Concurso da etapa classificatória concorrerão até 3 (três) participantes, cuja ordem de apresentação obedecerá a critérios da direção do Concurso. Os participantes poderão ser solistas (instrumentistas ou cantores) ou conjuntos de câmara (instrumentais ou vocais) com de 3 (três) até 8 (oito) integrantes.</li>
                <li>3. Nas provas eliminatórias e semifinais os candidatos instrumentistas e cantores serão acompanhados por pianistas que serão oferecidos pela Comissão Organizadora. Serão afixados ensaios em número suficiente para que haja entrosamento entre os candidatos e os pianistas acompanhadores.</li>
                <li>4. Após publicação da lista de selecionados, e equipe de produção entrará em contato para definir as obras a serem executadas na prova eliminatória. Após essa definição, os candidatos terão prazo de até 10 (dez) dias para enviar por correio ou por e-mail cópia das partes do pianista acompanhador.</li>
                <li>5. Pelo julgamento inapelável e irrecorrível de Comissão Julgadora designada pela Fundação Padre Anchieta, apenas um candidato de cada uma das modalidades elencadas no item I do presente regulamento (solistas ou conjuntos de câmaras) será escolhido em cada etapa eliminatória. Os candidatos da categoria solistas selecionados na fase eliminatória participarão das semifinais. De cada uma destas, será escolhido um candidato que concorrerá na Final. Os candidatos da categoria conjuntos de câmara, selecionados na fase eliminatória, passam para a fase Final. Não haverá semifinal para os conjuntos de câmara.</li>
                <li>6. O dia e a ordem de apresentação dos participantes classificados para as provas eliminatórias, semifinais e final, serão estabelecidos pela Comissão Organizadora do Concurso.</li>
                <li>7. Os resultados finais do Concurso serão determinados pelo julgamento inapelável e irrecorrível de Comissão Julgadora designado pela direção da Fundação Padre Anchieta.</li>
                <li>8. Os músicos, acompanhantes e os critérios para a apresentação dos participantes classificados serão determinados exclusivamente pela direção do Concurso.</li>
                <li>9. Em todas as etapas e fases do Concurso, os concorrentes deverão dirigir-se diretamente à Comissão Organizadora do Concurso para qualquer providência que disser respeito à sua participação, não sendo aceitos intermediários, ainda que por procuração, exceção feita aos participantes menores de 18 anos.</li>
                <li>10. Em havendo necessidade de transporte e hospedagem dos concorrentes – assim como de um acompanhante, no caso de candidatos menores de 18 anos – a solicitação deverá ser feita previamente à Comissão Organizadora.</li>
                <li>11. O concorrente inscrito que não respeitar o presente Regulamento Geral do Concurso ou provocar em qualquer fase atos que possam prejudicar seu andamento poderá, a critério da Comissão Organizadora do Concurso, ser desclassificado em caráter inapelável e irrecorrível.</li>
                <li>VI. DA PREMIAÇÃO</li>
                <li>1. Serão concedidos cinco prêmios aos finalistas, sendo três ao 1º colocado na categoria solista, dois ao 2º colocado na categoria solista, sejam eles instrumentistas ou cantores, e dois aos melhores conjuntos, sejam eles compostos por instrumentistas, cantores ou mistos (instrumentistas e cantores). Os valores dos prêmios são os seguintes: (*)</li>
                <li class="bold">Categoria solista:</li>
                
                <li class="bold">1º colocado:</li> 
                <li>a)  R$ 35.000,00 (trinta e cinco mil reais);</li>
                <li>b)  5 (cinco) concertos na Temporada de Concertos de 2013 nos Teatros do Sesi São Paulo</li>
                <li>c)  Viagem e estada de 15 dias em Nova York, em 2013, com  direito a  master classes na Juilliard School.</li>
                <li class="bold">2º colocado: </li>
                <li>a)  R$ 15.000,00 (quinze mil reais);</li>
                <li>b)  2 (dois) concertos na Temporada de Concertos de 2013 nos Teatros do Sesi São Paulo</li>
                
                <li class="bold">Categoria conjunto:</li>
                                       
                 <li class="bold">1º colocado:</li> 
                <li>a)  R$ 35.000,00 (trinta e cinco mil reais);</li>
                <li>b)  5 (cinco) concertos na Temporada de Concertos de 2013 nos Teatros do Sesi São Paulo</li>
                
                <li class="bold">2º colocado: </li>
                <li>a)  R$ 15.000,00 (quinze mil reais);</li>
                <li>b)  2 (dois) concertos na Temporada de Concertos de 2013 nos Teatros do Sesi São Paulo</li>    
                 <li>(*) dos valores atribuídos aos quatro vencedores serão descontados os impostos previstos em lei.</li>
                
                <li class="bold">VII. DAS GRAVAÇÕES E DIREITOS DE IMAGEM, NOME, VOZ E INTERPRETAÇÃO</li>
                <li>1. As apresentações do Concurso serão transmitidas pela TV Cultura, emissora da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas e poderão também ser videogravadas, audiogravadas, filmadas ou fotografadas por quem esta indicar para posterior reprodução e a seu critério.</li>
                <li>2. Ficam cientes os candidatos escolhidos que serão objeto de entrevistas e reportagens a serem realizadas em suas casas, escolas e comunidade  para exibição em TV aberta, através da TV Cultura, parceiras, afiliadas, retransmissoras ou emissoras a ela conveniadas, independentemente do número de exibições realizadas ou de território de abrangência e que a adesão ao presente concurso implicará em expressa e automática autorização de captação, divulgação e reprodução de sua imagem, nome, voz, interpretação e demais elementos de personalidade.</li>
                <li>CONSIDERAÇÕES FINAIS</li>
                <li>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas reserva para si o direito de modificar, alterar e/ou cancelar qualquer item do presente Regulamento e a dar divulgação ao mesmo da maneira que julgar conveniente.</li>
                <li>Os casos omissos por este Regulamento serão decididos pela Comissão Organizadora do Concurso.</li>
                <li class="bold">São Paulo, março de 2012.</li>
             </ul>
                
          </div>
          <hr />
          <div class="linha t5">
            <span class="declaracao">Declaro que li e concordo com o regulamento</span> 
            <input class="check" type="checkbox" name="regulamento" id="regulamento " />
            
          </div>
          <!--/Regulamento-->
        
          
          <!--captcha-->
              <div class="linha codigo" id="captchaimage">
                
                <label for="captcha">Confirma&ccedil;&atilde;o</label>
                <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                  <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time();?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                </a>
              </div>
              
              <div class="linha t7 m10">
                Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:
                <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
              </div>
              <!--captcha-->
    
              
              </form>
              <!--/form-->
            
            
          </div>
          <!--/Contato-->
          
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
        <!-- rodape preestreia-->
        <div class="grid3 apoio">
          <img src="http://cmais.com.br/portal/images/capaPrograma/preestreia/rodape_preestreia.jpg" />	
         </div>
         <!-- /rodape preestreia-->
        
      </div>
      <!-- /CAPA -->
      
    </div>
    <!-- /CONTEUDO PAGINA -->
    
  </div>
  <!-- /MIOLO -->

</div>
<!-- / CAPA SITE -->

<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //mascaras
    
    //$('.rg').mask("99.999.999-9");
    $('.cpf').mask("999.999.999-99");
    $('.cep').mask("99999-999");
    $('.tel').mask("(99) 9999-9999");
    $('.cel').mask("(99) ?999999999");
    $('.nasc').mask("99/99/9999");
    
    $('#form-contato-conjunto input#enviar').click(function(){
      $(".msgAcerto, .msgErro").hide();
      $('.container-1,.container-2, .container-3 ').show()
    });
    
    var validator = $('#form-contato-conjunto').validate({
      /*
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          dataType: "text",
          data: $("#form-contato-conjunto").serialize(),
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
              $("#form-contato-conjunto").clearForm();
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
      */
      rules:{
        conjuntonome:{
          required: true,
          minlength: 2
        },
        conjuntoformacao:{
          required: true,
          minlength: 2
        },
        conjuntotempo:{
          required: true,
          minlength: 2
        },
        conjuntoparticipacoes:{
          required: true,
          minlength: 2
        },
        conjuntocomosoube:{
          required: true,
          minlength: 2
        },
        conjuntorepertorio:{
          required: true,
          minlength: 2
        },
        conjuntofinal:{
          required: true,
          minlength: 2
        },     
        conjuntovideos:{
          required: true,
          minlength: 2
        },  
        captcha: {
          required: true,
          minlength: 2
        },
        
        sexo_1:{
          required: true,
          minlength: 1
        },
        idade_1:{
          required: true,
          minlength: 2
        },
        instrumento_1:{
          required: true,
          minlength: 2
        },
        rg_1:{
          required: true,
          minlength: 9
        },
        
        telresi_1:{
          required: true,
          minlength: 9
        },
        telcom_1:{
          required: true,
          minlength: 9
        },
        
        end_1:{
          required: true,
          minlength: 2
        },
        bairro_1:{
          required: true,
          minlength: 2
        },
        cep_1:{
          required: true,
          minlength: 8
        },
        cidade_1:{
          required: true
        },
        email_1:{
          required: true,
          email: true
        },
        nomeresponsavel_1:{
          required: true,
          minlength: 8
        },
        tempo_1:{
          required: true
        },
        escolamusica_1:{
          required: true
        },
        
        professor_1:{
          required: true,
          minlength: 8
        },
        
        sexo_2:{
          required: true,
          minlength: 1
        },
        idade_2:{
          required: true,
          minlength: 2
        },
        instrumento_2:{
          required: true,
          minlength: 2
        },
        rg_2:{
          required: true,
          minlength: 9
        },
        
        telresi_2:{
          required: true,
          minlength: 9
        },
        telcom_2:{
          required: true,
          minlength: 9
        },
        
        end_2:{
          required: true,
          minlength: 2
        },
        bairro_2:{
          required: true,
          minlength: 2
        },
        cep_2:{
          required: true,
          minlength: 8
        },
        cidade_2:{
          required: true
        },
        email_2:{
          required: true,
          email: true
        },
        nomeresponsavel_2:{
          required: true
        },
        tempo_2:{
          required: true
        },
        escolamusica_2:{
          required: true
        },
        
        professor_2:{
          required: true
        },
        
        
        sexo_3:{
          required: true,
          minlength: 1
        },
        idade_3:{
          required: true,
          minlength: 2
        },
        instrumento_3:{
          required: true,
          minlength: 2
        },
        rg_3:{
          required: true,
          minlength: 9
        },
        
        telresi_3:{
          required: true,
          minlength: 9
        },
        telcom_3:{
          required: true,
          minlength: 9
        },
        
        end_3:{
          required: true,
          minlength: 2
        },
        bairro_3:{
          required: true,
          minlength: 2
        },
        cep_3:{
          required: true,
          minlength: 8
        },
        cidade_3:{
          required: true
        },
        email_3:{
          required: true,
          email: true
        },
        nomeresponsavel_3:{
          required: true
        },
        tempo_3:{
          required: true
        },
        escolamusica_3:{
          required: true
        },
        
        professor_3:{
          required: true
        },
        
        sugestao1:{
          required: true,
          minlength: 2
        },
        sugestao2:{
          required: true,
          minlength: 2
        },
        sugestao3:{
          required: true,
          minlength: 2
        },
        sugestao4:{
          required: true,
          minlength: 2
        },
        sugestao5:{
          required: true,
          minlength: 2
        },
        sugestao6:{
          required: true,
          minlength: 2
        },
        sugestaofinal1:{
          required: true,
          minlength: 2
        },
        sugestaofinal2:{
          required: true,
          minlength: 2
        },
        link1:{
          required: true,
          minlength: 2
        },

        anexofoto:{
          required: true,
          file:true
        },
        curriculo:{
          required: true,
          minlength: 2
        },
        conjuntoprofessor:{
          required: true,
          minlength: 2
        },
        regulamento:{
          required: true
        },
        new_photo:{
          required: true
        }
      },
      messages:{
        conjuntonome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        conjuntoformacao: "Este campo &eacute; Obrigat&oacute;rio.",
        conjuntotempo: "Este campo &eacute; Obrigat&oacute;rio.", 
        conjuntoparticipacoes: "Este campo &eacute; Obrigat&oacute;rio.",
        conjuntocomosoube: "Este campo &eacute; Obrigat&oacute;rio.",
        conjuntorepertório: "Este campo &eacute; Obrigat&oacute;rio.",
        conjuntofinal: "Este campo &eacute; Obrigat&oacute;rio.",
        conjuntovideos: "Este campo &eacute; Obrigat&oacute;rio.",
        
        captcha: "Digite corretamente o código que está ao lado.",
        nome_1: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        sexo_1: "Este campo &eacute; Obrigat&oacute;rio.",
        idade_1: "Este campo &eacute; Obrigat&oacute;rio.",
        instrumento_1:"Este campo &eacute; Obrigat&oacute;rio.",
        idade_1: "Este campo &eacute; Obrigat&oacute;rio.",
        telresi_1: "Este campo &eacute; Obrigat&oacute;rio.",
        telresi_1: "Este campo &eacute; Obrigat&oacute;rio.",
        end_1: "Este campo &eacute; Obrigat&oacute;rio.",
        bairro_1: "Este campo &eacute; Obrigat&oacute;rio.",
        cep_1: "Este campo &eacute; Obrigat&oacute;rio.",
        cidade_1: "Este campo &eacute; Obrigat&oacute;rio.",
        email_1: "Este campo &eacute; Obrigat&oacute;rio.",
        nomeresponsavel_1: "Este campo &eacute; Obrigat&oacute;rio.",
        tempo_1: "Este campo &eacute; Obrigat&oacute;rio.",
        escolamusica_1: "Este campo &eacute; Obrigat&oacute;rio.",
        professor_1: "Este campo &eacute; Obrigat&oacute;rio.",
        responsavelmenor_1: "Este campo &eacute; Obrigat&oacute;rio.",
        rgmenor_1: "Este campo &eacute; Obrigat&oacute;rio.",
        cpfmenor_1: "Este campo &eacute; Obrigat&oacute;rio.",
        
        nome_2: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        sexo_2: "Este campo &eacute; Obrigat&oacute;rio.",
        idade_2: "Este campo &eacute; Obrigat&oacute;rio.",
        instrumento_2:"Este campo &eacute; Obrigat&oacute;rio.",
        idade_2: "Este campo &eacute; Obrigat&oacute;rio.",
        telresi_2: "Este campo &eacute; Obrigat&oacute;rio.",
        telresi_2: "Este campo &eacute; Obrigat&oacute;rio.",
        end_2: "Este campo &eacute; Obrigat&oacute;rio.",
        bairro_2: "Este campo &eacute; Obrigat&oacute;rio.",
        cep_2: "Este campo &eacute; Obrigat&oacute;rio.",
        cidade_2: "Este campo &eacute; Obrigat&oacute;rio.",
        email_2: "Este campo &eacute; Obrigat&oacute;rio.",
        nomeresponsavel_2: "Este campo &eacute; Obrigat&oacute;rio.",
        tempo_2: "Este campo &eacute; Obrigat&oacute;rio.",
        escolamusica_2: "Este campo &eacute; Obrigat&oacute;rio.",
        professor_2: "Este campo &eacute; Obrigat&oacute;rio.",
        responsavelmenor_2: "Este campo &eacute; Obrigat&oacute;rio.",
        rgmenor_2: "Este campo &eacute; Obrigat&oacute;rio.",
        cpfmenor_2: "Este campo &eacute; Obrigat&oacute;rio.",
        
        nome_3: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        sexo_3: "Este campo &eacute; Obrigat&oacute;rio.",
        idade_3: "Este campo &eacute; Obrigat&oacute;rio.",
        instrumento_3:"Este campo &eacute; Obrigat&oacute;rio.",
        idade_3: "Este campo &eacute; Obrigat&oacute;rio.",
        telresi_3: "Este campo &eacute; Obrigat&oacute;rio.",
        telresi_3: "Este campo &eacute; Obrigat&oacute;rio.",
        end_3: "Este campo &eacute; Obrigat&oacute;rio.",
        bairro_3: "Este campo &eacute; Obrigat&oacute;rio.",
        cep_3: "Este campo &eacute; Obrigat&oacute;rio.",
        cidade_3: "Este campo &eacute; Obrigat&oacute;rio.",
        email_3: "Este campo &eacute; Obrigat&oacute;rio.",
        nomeresponsavel_3: "Este campo &eacute; Obrigat&oacute;rio.",
        tempo_3: "Este campo &eacute; Obrigat&oacute;rio.",
        escolamusica_3: "Este campo &eacute; Obrigat&oacute;rio.",
        professor_3: "Este campo &eacute; Obrigat&oacute;rio.",
        responsavelmenor_3: "Este campo &eacute; Obrigat&oacute;rio.",
        rgmenor_3: "Este campo &eacute; Obrigat&oacute;rio.",
        cpfmenor_3: "Este campo &eacute; Obrigat&oacute;rio.",
        
        sugestao_1: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestao_2: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestao_3: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestao_4: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestao_5: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestao_6: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestaofinal_1: "Este campo &eacute; Obrigat&oacute;rio.",
        sugestaofinal_2: "Este campo &eacute; Obrigat&oacute;rio.",
        link1: "Este campo &eacute; Obrigat&oacute;rio.",

        
        anexofoto: "Este campo &eacute; Obrigat&oacute;rio.",
        curriculo: "Este campo &eacute; Obrigat&oacute;rio.",
        conjuntoprofessor: "Este campo &eacute; Obrigat&oacute;rio.",
        regulamento: "Este campo &eacute; Obrigat&oacute;rio."
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