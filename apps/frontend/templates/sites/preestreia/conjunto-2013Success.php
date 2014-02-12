<?php
  $now = date('YmdHis');
  $schedule = '20130601000000';
  if($now > $schedule) {
    //header('Location: http://tvcultura.cmais.com.br/preestreia');
    echo "<script>self.location.href='http://tvcultura.cmais.com.br/preestreia';</script>";
    die();
  }
?>
<script type="text/javascript">
var error = getParameterByName('error');
var success = getParameterByName('success');
//alert("error: "+error+"\n"+"success: "+success);

$(function(){
  if (error || success)
  {
    $("#form-contato-conjunto").hide();
    
    if (success == "1")
    {
      $("#msgAcerto").show();
      $("#msgErro").hide();
    }
    if (error == "1")
    {
      $("#msgErro").show();
      $("#msgAcerto").hide();
    }  
    if (error == "2")
    {
      $("#msgErro2").show();
      $("#msgAcerto").hide();
    }  
    if (error == "3")
    {
      $("#msgErro3").show();
      $("#msgAcerto").hide();
    }  
    if (error == "4")
    {
      $("#msgErro4").show();
      $("#msgAcerto").hide();
    }  
  }
});
</script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/preestreia-sol-conj.css?<?php echo time ?>" type="text/css" />

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

              <!--mensagem Acerto-->
              <div id="msgAcerto" class="msgAcerto" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">Formulário enviado com sucesso!</p>
                  <p>Obrigado por participar! Aguarde a seleção.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Acerto-->

              <!--Mensagem Erro-->
              <div id="msgErro" class="msgErro" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">O formulário não pôde ser enviado.</p>
                  <p>Tente novamente mais tarde.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Erro-->

              <!--Mensagem Erro2-->
              <div id="msgErro2" class="msgErro" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">O formulário não pôde ser enviado.</p>
                  <p>Verifique se o arquivo que você tentou enviar está no formato JPG, GIF ou PNG.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Erro2-->
              
              <!--Mensagem Erro3-->
              <div id="msgErro3" class="msgErro" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">O formulário não pôde ser enviado.</p>
                  <p>Verifique se o arquivo que você tentou enviar é menor que 15MB.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Erro3-->
              
              <!--Mensagem Erro4-->
              <div id="msgErro4" class="msgErro" style="display:none">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">O formulário não pôde ser enviado.</p>
                  <p>Esta inscrição já foi encerrada.</p>
                </div>
                <hr />
              </div>
              <!--/mensagem Erro4-->
            
            <!--form-->  
            <form id="form-contato-conjunto" method="post" action="/actions/preestreia2013/conjunto-submit.php" enctype="multipart/form-data">
              <input type="hidden" name="qtdeIntegrantes" id="qtdeIntegrantes" value="3" />
              <input type="hidden" name="return_url" value="http://tvcultura.cmais.com.br/preestreia/inscricao-efetuada-com-sucesso" />
              <input type="hidden" name="tipo" value="Conjunto" />
              
              <!--Nome Conjunto-->
              <div class="linha t7">
                
                <label>Nome do conjunto</label>
                <input type="text" name="conjuntonome" id="conjuntonome" />
              
              </div>
              <!--/Nome Conjunto-->
              
              <!--Nome Conjunto-->
              <div class="linha t7">
                
                <label>E-mail do responsável:</label>
                <input type="text" name="email" id="email" />
              
              </div>
              <!--/Nome Conjunto-->
              
              <!--Como souberam-->
              <div class="linha t7">
                <label>Como souberam do Pré-estreia?</label>
                <input type="text" name="conjuntocomosoube" id="conjuntocomosoube" />
              </div>
               <!--/Como souberam-->
              
              <!--Formação conjunto-->
              <div class="linha t7">
                  
                <label>Formação do conjunto</label>
                <input type="text" name="conjuntoformacao" id="conjuntoformacao" />
              
              </div>
              <!--/Formação conjunto-->
              
              <!--Tempo juntos-->
              <div class="linha t7">
                
                <label>Há quanto tempo vocês tocam juntos?</label>
                <input type="text" name="conjuntotempo" id="conjuntotempo" />
                
              </div>
              <!--/Tempo juntos-->
              
              <!--participaram-->
              <div class="linha t7">
                <label>Vocês já participaram de outros concursos? Em caso afirmativo, quais?</label>
                <input type="text" name="conjuntoparticipacoes" id="conjuntoparticipacoes" />
              </div>
              <!--/participaram-->
                                
              <!--Professor-->
              <div class="linha t7">
                <label>Qual o nome do professor / orientador do conjunto?<br> (Preencher o nome de apenas um professor, ele poderá ser premiado no final do concurso)</label>
                <input type="text" name="conjuntoprofessor" id="conjuntoprofessor" />
              </div>
               <!--/professor-->
               
               <!--Currículo-->
          <div class="linha t7">
            
            <label>Currículo do conjunto</label>
            <textarea name="curriculo" id="curriculo" class="w100" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
            <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
            
          </div>
          <!--/Currículo-->  

               <div class="t7 titulo">Cada um dos integrantes deve responder os itens abaixo:<br/>(mínimo 3 / máximo 8)</div>
              
              
              <!--Integrante-1-->
              <a href="javascript:;" class="t7 titulo laranja" id="btnIntegrante_1">Integrante nº 01</a>
              <div class="container-1" style="display: none;">
              <input type="hidden" name="integrante-1" value="integrante-1" />
                
                <!--Nome-1-->
                <div class="linha t5">
                  <label>Nome completo</label><br>
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
                
                <!--Nome-1-->
                <div class="linha t4">
                  <label>Nome artístico</label><br>
                  <input type="text" name="nomeartistico_1" id="nomeartistico_1" class="required" />
                </div>
                <!--/Nome-1-->
                
                <!--idade-1-->
                <div class="linha t1 m14">
                  <label>Nascimento</label><br>
                  <input type="text" name="idade_1" id="idade_1" class="nasc" />
                </div>
                <!--/idade-1-->
                
                  <!--Nome-1-->
                <div class="linha t5">
                  <label>Instrumento</label><br>
                  <input type="text" name="instrumento_1" id="instrumento_1" class="required" />
                </div>
                <!--/Nome-1-->
                
                
                <div class="linha">
                  <!--RG-1-->
                  <div class="linha t12">
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
                  <label>Endereço</label><br>
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
                <div class="linha t12">
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
               <div class="linha t5">
                  <label>Email</label><br>
                  <input type="text" name="email_1" id="email_1" />
                </div> 
                <!--/Email-1-->
                
                <!--Nome Respon-1-->
                <div class="linha t9">
                  <label>CPF</label><br>
                  <input type="text" name="cpf_1" id="cpf_1" class="cpf required" />
                </div>
                <!--/Nome Respon-1-->
                
                <!--tempo-1-->
                <div class="linha t9 m10">
                  <label>Há quanto tempo estuda música?</label><br>
                  <input type="text" name="tempo_1" id="tempo_1" />
                </div>
                <!--/tempo-1-->
                
                <!--escola-1-->
                <div class="linha t9">
                  <label>Qual sua escola de música?</label><br>
                  <input type="text" name="escolamusica_1" id="escolamusica_1" />
                </div>                  
                <!--/escola-1-->
                <!--ano-1-->
                <div class="linha t9 m10">
                  <label>Em que ano você está?</label><br>
                  <input type="text" name="escola_1" id="escola_1" />
                </div>
                <!--/ano-1-->
                
                
				
			   <!--Anexar RG--->
               <div class="linha t5">
               	<label>Anexar cópia do RG (se for menor de idade, anexar o RG do responsável):</label>
               	<input type="file" name="datafile1" id="anexofotorg_1" />
               </div>
               <!--/Anexar RG--->
              
                
                <p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>
                
                <!--NomeResponsa-1-->                   
                <div class="linha t5">
                  <label>Nome Responsável</label><br>
                  <input type="text" name="responsavelmenor_1" id="responsavelmenor_1" />
                </div>
                <!--/NomeResponsa-1-->  
                
                <!--RG-1-->  
                <div class="linha t12">
                  <label>RG</label><br>
                  <input type="text" name="rgmenor_1" id="rgmenor_1" class="rg" />
                </div>
                <!--/RG-1-->  
                
                <!--CPF-1-->  
                <div class="linha t8 m10">
                  <label>CPF</label><br>
                  <input type="text" name="cpfmenor_1" id="cpfmenor_1" class="cpf" />
                </div>
                <!--/CPF-1--> 
                
               <!--naturalidade-->  
                <div class="linha t8 m10">
                  <label>Naturalidade</label><br>
                  <input type="text" name="naturalidademenor_1" id="naturalidademenor_1" />
                </div>
                <!--/naturalidade--> 
              
                </div>
                <!--/Integrante1-->                  
                
                <!--Integrante-2-->
              <a href="javascript:;" class="t7 titulo laranja" id="btnIntegrante_2">Integrante nº 02</a>
              <div class="container-2" style="display: none;">
              <input type="hidden" name="integrante-2" value="integrante-2" />  
                <!--Nome-2-->
                <div class="linha t5">
                  <label>Nome completo</label>
                  <input type="text" name="nome_2" id="nome_2" class="required" />
                </div>
                <!--/Nome-2-->
                
                <!--Nome-2-->
                <div class="linha t4">
                  <label>Nome artístico</label><br>
                  <input type="text" name="nomeartistico_2" id="nomeartistico_2" class="required" />
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
                  <input type="text" name="idade_2" id="idade_2" class="nasc"  />
                </div>
                <!--/idade-2-->
                
                <!--instrumento-2-->
                <div class="linha t9 m10">
                  <label>Instrumento</label>
                  <input type="text" name="instrumento_2" id="instrumento_2" />
                </div>
                <!--/instrumento-2-->
                
                <div class="linha">
                  <!--RG-2-->
                  <div class="linha t12">
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
                    <input type="text" name="telcom_2" id="telcom_2" class="cel" /><br/>
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
                <div class="linha t12">
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
               <div class="linha t5">
                  <label>Email</label>
                  <input type="text" name="email_2" id="email_2" />
                </div> 
                <!--/Email-2-->
                
                <!--Nome Respon-2-->
                <div class="linha t9">
                  <label>CPF</label>
                  <input type="text" name="cpf_2" id="cpf_2" class="cpf required" />
                </div>
                <!--/Nome Respon-2-->
                
                <!--tempo-2-->
                <div class="linha t9 m10">
                  <label>Há quanto tempo estuda música?</label>
                  <input type="text" name="tempo_2" id="tempo_2" />
                </div>
                <!--/tempo-2-->
                
                <!--escola-2-->
                <div class="linha t9">
                  <label>Qual sua escola de música?</label>
                  <input type="text" name="escolamusica_2" id="escolamusica_2" />
                </div>                  
                <!--/escola-2-->

                <!--ano-2-->
                <div class="linha t9 m10">
                  <label>Em que ano você está?</label>
                  <input type="text" name="escola_2" id="escola_2" />
                </div>
                <!--/ano-2-->
                
               
                
                  <!--Anexar RG--->
               <div class="linha t5">
               <label>Anexar cópia do RG (se for menor de idade, anexar o RG do responsável):</label>
               <input type="file" name="datafile2" id="anexofoto_2" />
               </div>
               <!--/Anexar RG--->

              
                
                <p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>
                
                <!--NomeResponsa-2-->                   
                <div class="linha t5">
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
                  <label>Nome completo</label>
                  <input type="text" name="nome_3" id="nome_3" class="required" />
                </div>
                <!--/Nome-3-->
                
                <!--Nome-3-->
                <div class="linha t4">
                  <label>Nome artístico</label><br>
                  <input type="text" name="nomeartistico_3" id="nomeartistico_3" class="required" />
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
                  <input type="text" name="idade_3" id="idade_3" class="nasc"  />
                </div>
                <!--/idade-3-->
                
                <!--instrumento-3-->
                <div class="linha t9 m10">
                  <label>Instrumento</label>
                  <input type="text" name="instrumento_3" id="instrumento_3" />
                </div>
                <!--/instrumento-3-->
                
                <div class="linha">
                  <!--RG-3-->
                  <div class="linha t12">
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
                    <input type="text" name="telcom_3" id="telcom_3" class="cel"/><br/>
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
                <div class="linha t12">
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
               <div class="linha t5">
                  <label>Email</label>
                  <input type="text" name="email_3" id="email_3" />
                </div> 
                <!--/Email-3-->
                
                <!--Nome Respon-3-->
                <div class="linha t9">
                  <label>CPF</label>
                  <input type="text" name="cpf_3" id="cpf_3" class="cpf required" />
                </div>
                <!--/Nome Respon-3-->
                
                <!--tempo-3-->
                <div class="linha t9  m10">
                  <label>Há quanto tempo estuda música?</label>
                  <input type="text" name="tempo_3" id="tempo_3" />
                </div>
                <!--/tempo-3-->
                
                <!--escola-3-->
                <div class="linha t9">
                  <label>Qual sua escola de música?</label>
                  <input type="text" name="escolamusica_3" id="escolamusica_3" />
                </div>                  
                <!--/escola-3-->
                
                <!--ano-3-->
                <div class="linha t9 m10">
                  <label>Em que ano você está?</label>
                  <input type="text" name="escola_3" id="escola_3" />
                </div>
                <!--/ano-3-->
                
               
                
                                    
               <!--Anexar RG--->
               <div class="linha t5">
               <label>Anexar cópia do RG (se for menor de idade, anexar o RG do responsável):</label>
               <input type="file" name="datafile3" id="anexofoto_3" />
               </div>
               <!--/Anexar RG--->

              
                
                <p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>
                
                <!--NomeResponsa-3-->                   
                <div class="linha t5">
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
                <div class="linha add" id="adicionar_holder" >
                 <a href="javascript:;" id="adicionar" class="enviar" style="margin-bottom:20px; margin-right: 15px;">+ Integrante</a>
               </div>
               <!--/Botao Adiciona Integrante-->
               
               <!--Botao Remove Integrante-->
               <div class="linha add" id="remover_holder" style="display:none;">
                  <a href="javascript:;" id="remover" class="enviar" style="margin-bottom:20px">- Remover</a>
               </div>
               <!--/Botao Remove Integrante-->
               
                
              <script>
              $(function(){
              
                var i = 3; // start index
                var min = 3; // configure minimum number of elements
                var max = 8 // configure maximum number of items
                i = min;
                
                $("#adicionar").click(function() {
                  $('#remover_holder').show();
                  if (i < max) {
                    i++;
                    if(i==max){
                      $("#adicionar").hide();
                    }
                    $('#qtdeIntegrantes').val(i);
                    
                    var new_field = '<div id="container-'+i+'">';
                    new_field += '<!--Integrante-'+i+'-->';
                    new_field += '<a href="javascript:;" class="t7 titulo laranja" id="btnIntegrante_'+i+'">Integrante nº 0'+i+'</a>';
                    new_field += '<div style="display: none;">';
                    new_field += '<input type="hidden" value="integrante-'+i+'" />';
                      
                    new_field += '<!--Nome-'+i+'-->';
                    new_field += '<div class="linha t5">';
                    new_field += '  <label>Nome completo:</label>';
                    new_field += '  <input type="text" name="nome_'+i+'" id="nome_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/Nome-'+i+'-->';
                    
                    new_field += '<!--Nome Artistico-'+i+'-->';
                    new_field += '<div class="linha t5">';
                    new_field += '  <label>Nome artístico</label>';
                    new_field += '  <input type="text" name="nomeartistico_'+i+'" id="nome_'+i+'" class="required" />';
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
                    new_field += '  <input type="text" name="idade_'+i+'" id="idade_'+i+'" class="nasc'+i+' required" />';
                    new_field += '</div>';
                    new_field += '<!--/idade-'+i+'-->';
                      
                    new_field += '  <!--instrumento-'+i+'-->';
                    new_field += '  <div class="linha t9 m10">';
                    new_field += '    <label>Instrumento:</label>';
                    new_field += '    <input type="text" name="instrumento_'+i+'" id="instrumento_'+i+'" class="required" />';
                    new_field += '  </div>';
                    new_field += '<!--/instrumento-'+i+'-->';
                    
                    new_field += '<div class="linha">';  
                    new_field += '  <!--RG-'+i+'-->';
                    new_field += '  <div class="linha t12">';
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
                    new_field += '<div class="linha t12">';
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
                    new_field += '<div class="linha t5">';
                    new_field += '  <label>Email</label>';
                    new_field += '  <input type="text" name="email_'+i+'" id="email_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/Email-'+i+'-->';
                      
                    new_field += '<!--Nome Respon-'+i+'-->';
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>CPF</label>';
                    new_field += '  <input type="text" name="cpf_'+i+'" id="cpf_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/Nome Respon-'+i+'-->';
                      
                    new_field += '<!--tempo-'+i+'-->';
                    new_field += '<div class="linha t9 m10">';
                    new_field += '  <label>Há quanto tempo estuda música?</label>';
                    new_field += '  <input type="text" name="tempo_'+i+'" id="tempo_'+i+'" class="required" />';
                    new_field += '</div>';
                    new_field += '<!--/tempo-'+i+'-->';
                      
                    new_field += '<!--escola-'+i+'-->';
                    new_field += '<div class="linha t9">';
                    new_field += '  <label>Qual sua escola de música?</label>';
                    new_field += '  <input type="text" name="escolamusica_'+i+'" id="escolamusica_'+i+'"  />';
                    new_field += '</div>';                  
                    new_field += '<!--/escola-'+i+'-->';
                      
                    new_field += '<!--ano-'+i+'-->';
                    new_field += '<div class="linha t9 m10">';
                    new_field += '  <label>Em que ano você está?</label>';
                    new_field += '  <input type="text" name="escola_'+i+'" id="escola_'+i+'"  />';
                    new_field += '</div>';
                    new_field += '<!--/ano-'+i+'-->';
                      
                    
                                        
                    new_field += '<!--Anexar RG-'+i+'-->';
                    new_field += '<div class="linha t5">';
                    new_field += '<label>Anexar cópia do RG (se for menor de idade, anexar o RG do responsável):</label>';
                    new_field += '<input type="file" name="datafile'+i+'" id="anexofoto_'+i+'" />';
                    new_field += '</div>';
                    new_field += '<!--/Anexar RG-'+i+'-->';
    
                    new_field += '<p class="linha t7 titulo">Para candidatos menores de 18 anos favor preencher:</p>';
                      
                    new_field += '<!--NomeResponsa-'+i+'-->';                   
                    new_field += '<div class="linha t5">';
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
                    $('#qtdeIntegrantes').val(i);
                    
                    if(i < max){
                      $("#adicionar").show();
                    }
                  }
                  
                });
                
                //integrantes
                $('#btnIntegrante_1,#btnIntegrante_2,#btnIntegrante_3').click(function(){
                  $(this).next().toggle();
                });
              });
              </script>

  
           <!--Sugestoes-->
              <a href="javascript:;"class="t7 titulo repertorio conj-repertorio">
                Repertório [Clique aqui]
              </a>
              
              <div class="sugestao-repertorio"  style="display:none;">
              <div class="linha t7">
                <label>Indique abaixo 8 opções de obras contrastantes a serem executadas nas eliminatórias do concurso. Essas obras devem ter a duração mínima de 3 minutos e máxima de 5 minutos. É muito importante preencher os dados corretamente, conforme o exemplo.</label>
              </div>
              
              <!--Sugestoes-->
              <a class="t7 titulo laranja" >1ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor1" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-1" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra1" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-1" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos1" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-1" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao1" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-1" />
                </div>
              
              <a class="t7 titulo laranja" >2ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor2" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-2" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra2" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-2" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos2" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-2" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao2" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-2" />
                </div>
                
              <a class="t7 titulo laranja" >3ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor3" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-3" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra3" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-3" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos3" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-3" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao3" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-3" />
                </div>
                
              <a class="t7 titulo laranja" >4ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor4" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-4" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra4" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-4" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos4" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-4" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao4" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-4" />
                </div>
                
              <a class="t7 titulo laranja" >5ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor5" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-5" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra5" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-5" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos5" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-5" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao5" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-5" />
                </div>
                
              <a class="t7 titulo laranja" >6ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor6" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-6" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra6" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-6" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos6" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-6" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao6" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-6" />
                </div>
                
                
              <a class="t7 titulo laranja" >7ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor7" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-7" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra7" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-7" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos7" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-7" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao7" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-7" />
                </div> 
                       
              <a class="t7 titulo laranja" >8ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor8" data-default="Ex.: J. Brahms" value="Ex.: J. Brahms" id="compositor-8" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra8" data-default="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" value="Ex.: Trio em lá menor para Clarinete, Cello e Piano Op. 114" id="obra-8" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos8" data-default="Ex.: III- Andantino Grazioso" value="Ex.: III- Andantino Grazioso" id="movimentos-8" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao8" data-default="Ex.: 4:27" value="Ex.: 4:27" id="duracao-8" />
                </div>
                  
              <!--/Sugestões-->
              
              <!--Sugestões Final--> 
              <div class="linha t7">
                <label>Indique abaixo 4 opções de obras contrastantes a serem executadas na final do concurso. Essas obras devem ter duração mínima de 7 minutos e máxima de 10 minutos, e serão apresentadas sem acompanhamento de orquestra. É muito importante preencher os dados corretamente, conforme o exemplo.</label>
              </div>
              
              <a class="t7 titulo laranja" >9ª Opção</a> 
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor9" data-default="Ex.: W. A. Mozart" value="Ex.: W. A. Mozart" id="compositor-9" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra9" data-default="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" value="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" id="obra-9" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos9" data-default="Ex.: I - Adagio-Allegro" value="Ex.: I - Adagio-Allegro" id="movimentos-9" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao9" data-default="Ex.: 9:58" value="9:58" id="Ex.: duracao-9" />
                </div>
              
              <a class="t7 titulo laranja" >10ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor10" data-default="Ex.: W. A. Mozart" value="Ex.: W. A. Mozart" id="compositor-10" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra10" data-default="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" value="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" id="obra-10" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos10" data-default="Ex.: I - Adagio-Allegro" value="Ex.: I - Adagio-Allegro" id="movimentos-10" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao10" data-default="Ex.: 9:58" value="Ex.: 9:58" id="duracao-10" />
                </div>
              
              <a class="t7 titulo laranja" >11ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor11" data-default="Ex.: W. A. Mozart" value="Ex.: W. A. Mozart" id="compositor-11" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra11" data-default="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" value="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" id="obra-11" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos11" data-default="Ex.: I - Adagio-Allegro" value="Ex.: I - Adagio-Allegro" id="movimentos-11" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao11" data-default="Ex.: 9:58" value="Ex.: 9:58" id="duracao-11" />
                </div>
              
              <a class="t7 titulo laranja" >12ª Opção</a>
                           
                <div class="linha t6" >
                  <label>Compositor</label><br/>
                  <input type="text" name="compositor12" data-default="Ex.: W. A. Mozart" value="Ex.: W. A. Mozart" id="compositor-12" />
                </div>
               
                <div class="linha t9">  
                  <label>Obra</label><br/>
                  <input type="text" name="obra12" data-default="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" value="Ex.: Quarteto de Cordas No. 19 em Dó Maior KV. 465" id="obra-12" />
                </div>
                
                <div class="linha t10 m10 w136">
                  <label>Movimentos</label><br/>
                  <input type="text" name="movimentos12" data-default="Ex.: I - Adagio-Allegro" value="Ex.: I - Adagio-Allegro" id="movimentos-12" />
                </div>
                
                <div class="linha t2 m10">  
                  <label>Duração</label><br/>
                  <input type="text" name="duracao12" data-default="Ex.: 9:58" value="Ex.: 9:58" id="duracao-12" />
                </div>
              <!--/Sugestões Final-->
              
              <!--Links Videos-->

              <div class="linha t7">
                <label>Informe aqui o link dos vídeos em que toca as obras requisitadas para seleção. Esses vídeos precisam ser de 3 das obras indicadas para a fase eliminatória. Marque no campo opção a qual obra o link se refere.</label>
              </div>

              <div class="linha">
                <div class="linha t2">
                  <label>Opção:</label><br />
                  <select class="estado required opcao_correspondente" id="opcao_correspondente1" name="opcao_correspondente1" data-order="0" >

                    <option value="" >--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
                 
                <div class="linha t5 link">  
                  <label>Link</label><br/>
                  <input type="text" name="link1" id="link1" />
                </div>
              </div>
              <div class="linha">
                <div class="linha t2">
                  <label>Opção:</label><br />
					<select class="estado required opcao_correspondente" id="opcao_correspondente2" name="opcao_correspondente2" data-order="1" >
                    <option value="" >--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                  </select>
                </div>
                 
                <div class="linha t5 link">  
                  <label>Link</label><br/>
                  <input type="text" name="link2" id="link2" />
                </div>
              </div>
              <div class="linha">  
                <div class="linha t2">
                  <label>Opção:</label><br />
                  <select class="estado required opcao_correspondente" id="opcao_correspondente3" name="opcao_correspondente3" data-order="2" >
                    <option value="" >--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option> 
                    <option value="8">8</option>
                  </select>
                </div>
                
                <div class="linha t5 link">  
                  <label>Link</label><br/>
                  <input type="text" name="link3" id="link3" />
                </div>
              </div>
              <!--/Links Videos-->
              </div>
     
         
          
          <!--Anexar Foto-->
          <div class="linha t7">
            
            <label>Anexar foto do conjunto</label>
            <input type="file" name="datafile9" id="anexofoto_9" />
            
          </div>
          <!--/Anexar Foto-->
          
                      
        <!--Regulamento-->
          <div class="linha t1 regulamento">
            
              <ul>
                <li class="bold">Pré-estreia 2013</li>
                                      
                <li>‘Pré-estreia 2013’ é um concurso musical que apresentará ao público jovens talentos da música clássica. No ‘Pré-estreia 2013’, músicos de até 24 anos, praticantes de qualquer instrumento, e cantores de até 28 anos terão a oportunidade de se apresentar como solistas ou em conjuntos de câmara de até 8 instrumentistas ou cantores ou mistos de instrumentistas e cantores.</li>
                <p>
                <li class="bold">‘Pré-estreia 2013’</li>
                <li>Concurso para músicos instrumentistas, cantores líricos e conjuntos de câmara.</li>
                <li>Conheça o regulamento que define as regras e orienta os músicos interessados em participar do programa Pré-estreia 2013, a realizar-se entre agosto e dezembro de 2013.</li>
                <p>
                <li class="bold">REGULAMENTO</li>
                <li>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, através de sua emissora de televisão TV Cultura – Canal 2, promove o Pré-estreia 2013 - Concurso para músicos instrumentistas, cantores líricos e conjuntos de câmara, que será regido por este regulamento, cujas disposições declaram os candidatos, após a devida leitura, aceitar por ocasião da submissão de sua respectiva ficha de inscrição.</li>
                <p>
                <li class="bold">I - DOS OBJETIVOS:</li>
                <li>O presente Concurso tem a finalidade incentivar jovens instrumentistas, cantores líricos e conjuntos de câmara de 3 (três) a 8 (oito) instrumentistas ou cantores ou mistos de instrumentistas e cantores. Os candidatos deverão ser brasileiros ou estrangeiros residentes no país. Os quatro instrumentistas, cantores líricos ou conjuntos de câmara que obtiverem a melhor colocação ao longo das provas eliminatórias, semifinais e final serão premiados de acordo com as normas do presente regulamento. Os professores dos primeiros colocados em cada categoria, indicados na ficha de inscrição, também serão premiados com uma viagem ao exterior (passagem aérea e hospedagem para duas pessoas).</li>
                <p>
                <li class="bold">II - DO PÚBLICO ALVO:</li>
                <li>O concurso tem como público-alvo jovens instrumentistas de até 24 anos ou cantores de até 28 anos de idade. Não serão aceitas inscrições de instrumentistas que completem 25 anos ou cantores que completem 29 anos antes de 08 de dezembro de 2013.</li>
                <li>Parágrafo único: Não será admitida, em hipótese alguma, a participação no Concurso de funcionários da instituição promotora – Fundação Padre Anchieta, membros da Comissão Organizadora e candidatos que tenham grau de parentesco ou sociedade com qualquer membro da referida Comissão.</li>
                <p>
                <li class="bold">III - DO CRONOGRAMA:</li>
                <li>1. As inscrições deverão ser realizadas entre os dias 15 de abril e 24 de maio de 2013. Em não havendo o número mínimo de candidatos inscritos até a data de 24 de maio de 2013, a exclusivo critério da Fundação Padre Anchieta, as inscrições poderão ser prorrogadas até o dia 31 de maio de 2013. Nesta hipótese, será devidamente divulgada a prorrogação do prazo de inscrição. Os candidatos selecionados serão contatados diretamente pela equipe de produção do Concurso. O material enviado para o programa não será devolvido.</li>
                <li>2. Após a seleção dos candidatos, que será feita por meio da análise de vídeos, o Concurso terá início e contará com 11 (onze) etapas de apresentações públicas. Serão 8 (oito) provas eliminatórias, sendo 6 (seis) eliminatórias de solistas e  2 (duas) eliminatórias de conjuntos; 2 (duas) provas semifinais e 1 (uma) prova final. As datas das apresentações públicas que compõem o Concurso serão definidas e previamente divulgadas pela Comissão Organizadora. Os ensaios e a realização das provas ocorrerão entre os meses de agosto e dezembro de 2013.</li>
                <li>3. A premiação será concedida aos vencedores quando da prova final do Concurso, em que participarão os quatro candidatos selecionados nas provas eliminatórias e semifinais.</li>
                <p>
                <li class="bold">IV - DA INSCRIÇÃO E ENVIO DE MATERIAL</li>
                <li>1. As inscrições serão feitas por meio de fichas disponíveis para esse fim no site do Concurso: cmais.com.br/preestreia.</li> 
                <li>2. Junto com a ficha de inscrição, os candidatos deverão anexar uma foto recente, um currículo artístico de apenas uma lauda, a cópia de documento de identidade, com foto. Na ficha de inscrição os candidatos deverão indicar 3 (três) links que darão acesso aos vídeos contendo as gravações de 3 (três) obras diferentes. Estas 3 (três) obras devem integrar a lista de 8 (oito) obras que integram o repertório a ser apresentado das etapas eliminatória e semifinal do Concurso. Não serão aceitos vídeos de peças inscritas para a etapa final do concurso.</li> 
                <li>3. Cada candidato deverá gravar 3 (três) vídeos contendo 3 (três) obras de até 5 (cinco) minutos cada e de estilos diferentes para que melhor se avalie o candidato. Cada obra deverá ter a duração mínima de 3 (três) minutos e  máxima de 5 (cinco) minutos. As 3 (três) obras poderão, no caso de instrumentistas solistas ou cantores, ter acompanhamento de piano ou serem escritas para instrumento / voz solo. Os conjuntos de câmara – vocais ou instrumentais ou mistos – também deverão apresentar 3 (três) obras que deverão ter, cada uma, a duração mínima de 3 (três) minutos e máxima de 5 (cinco) minutos  e deverão ser de estilos diferentes para que melhor se avalie seu desempenho. As obras indicadas na ficha de inscrição deverão obrigatoriamente corresponder àquelas gravadas em vídeo. As 3 (três) obras gravadas deverão estar incluídas na relação de obras que o candidato executará, se escolhido, nas provas eliminatórias e/ou semifinais.</li>  
                <li>4. Os vídeos especificados no item 3 devem ser postados no Youtube. Não serão aceitos vídeos em DVD ou em outro formato. </li> 
                <li>5. Será considerada válida a inscrição enviada completa (ficha de inscrição preenchida, foto, currículo, cópia de documento e links de acesso à gravação) até o dia 24 de maio de 2013. Não serão aceitas inscrições enviadas com qualquer um dos itens faltantes. Também não serão permitidos envios posteriores de materiais ou requisitos complementares.</li>
                <li>6. Os instrumentistas ou cantores solistas deverão indicar na ficha de inscrição 12 (doze) obras diferentes, sendo:</li>
                <li>a)  8 (oito) obras (ou movimentos de obras), de estilos contrastantes para candidatos instrumentistas, ou 8 (oito) obras ou árias, de estilos contrastantes para os candidatos cantores, com duração mínima de 3 (três) minutos e máxima de 5 (cinco) minutos cada, das quais 2 (duas)  serão apresentadas pelos candidatos na fase eliminatória do Concurso e 2 (duas) serão apresentadas na fase semifinal. As peças a serem apresentadas no Concurso serão escolhidas pela Comissão de Seleção e comunicadas a cada um dos candidatos. O repertório escolhido, se originalmente escrito com acompanhamento de orquestra, será apresentado com redução para piano.</li>
                <li>b)  4 (quatro) obras (ou movimentos de concertos), de estilos contrastantes, para candidatos instrumentistas, ou 4 (quatro) árias ou obras, de estilos contrastantes,  para os candidatos cantores, com a duração mínima de 7 (sete) minutos e máxima de 10 minutos cada, a serem interpretadas pelo candidato, na prova final, que será feita com a Orquestra do Conservatório de Tatuí. O repertório a ser apresentado na etapa final será escolhido pela Comissão de Seleção.
                <br>Na prova final, os candidatos instrumentistas poderão fazer combinações de dois ou mais movimentos do mesmo concerto, e os candidatos cantores poderão fazer combinações de duas ou mais árias ou canções de um ciclo para atingir o total de minutos estipulado. Cada uma dessas combinações representará uma das 4 opções a serem preenchidas.</li>
                <li>7. Na prova semifinal, o candidato cantor ou instrumentista deverá interpretar duas obras diferentes daquelas apresentadas na prova eliminatória, escolhidas dentre as 8 (oito) indicadas no ato da inscrição. Em todas as etapas, a escolha do repertório será feita pela Comissão de Seleção.</li>
                <li>8. Os conjuntos de câmara – vocais, instrumentais ou mistos – deverão indicar na ficha de inscrição 12 (doze) obras diferentes, sendo:</li>
                <li>a) 8 (oito) obras(ou movimentos de obras), de estilos contrastantes, com duração de no mínimo 3 (três) minutos e no máximo 5 (cinco) minutos cada, das quais 2 (duas)  serão apresentadas pelos candidatos na fase eliminatória do Concurso. As 2 (duas) obras serão escolhidas pela Comissão de Seleção e comunicadas a cada um dos candidatos.</li>
                <li>b) 4 (quatro)  obras instrumentais ou vocais ou mistas contrastantes com duração mínima de 7 (sete) minutos e máxima de 10 minutos cada a serem interpretadas pelo conjunto concorrente na prova final. O movimento ou obra a ser apresentado pelo candidato na prova final, escolhido entre os 4 (quatro) sugeridos pelo candidato, será definido pela Comissão de Seleção.</li>
                <br>Na prova final, os conjuntos poderão fazer combinações de dois ou mais movimentos do mesmo concerto ou obra para atingir o total de minutos estipulado. Cada uma dessas combinações representará uma das 4 opções a serem preenchidas.
                <br>Os conjuntos de câmara deverão se apresentar na Final do Concurso sem a participação da Orquestra. 
                <li>9. O candidato responderá pela veracidade das informações enviadas. O fornecimento de informações falsas, imprecisas ou dúbias, ou inautenticidade do material gravado ou de imagem, resultará na desclassificação sumária e inapelável do candidato. A não observância de qualquer dos requisitos estipulados neste regulamento acarretará o cancelamento automático da inscrição, sem apreciação do trabalho.</li>
                <li>10. É necessário muita atenção ao preencher a ficha de inscrição: todos os itens devem ser preenchidos corretamente. As informações contidas na ficha de inscrição serão utilizadas para divulgação e premiação. Os dados não poderão ser alterados após o término do prazo de inscrição.</li>
                <li>11. Será aceita somente uma inscrição por candidato.</li>
                <li>12. Não será necessário pagamento de taxa de inscrição.</li>
                <li>13. No caso do candidato ser menor de 18 anos, deverão ser preenchidos na ficha de inscrição, os dados do responsável legal no campo destinado à isso.</li>
                <li>14. 14. A inscrição de um músico para participar do Concurso implica na aceitação de todos os itens deste regulamento e na assinatura do Termo de Compromisso que regulará a participação no evento.</li>
                <p>
                <li class="bold">V. DO PROCESSO SELETIVO E ELIMINATÓRIO</li>
                <li>1. A escolha dos músicos que se apresentarão no Concurso, bem como o repertório a ser apresentado pelos candidatos será efetuada pelo critério inapelável e irrecorrível da Comissão de Seleção, previamente designada pela direção do programa, não cabendo qualquer tipo de recurso. Os profissionais que integrarão tal Comissão serão conhecidos até o dia 30 de abril de 2013 e terão seus nomes divulgados no site do programa.</li>
                <li>2. Serão escolhidos 24 (vinte e quatro) candidatos finalistas. Em cada programa da etapa classificatória concorrerão até 3 (três) participantes, cuja ordem de apresentação obedecerá a critérios da direção do programa. Os participantes poderão ser solistas (instrumentistas ou cantores) ou conjuntos de câmara (instrumentais ou vocais) com de 3 (três) até 8 (oito) integrantes.</li>
                <li>3. Nas provas eliminatórias e semifinais os candidatos instrumentistas e cantores serão acompanhados por pianistas que serão oferecidos pela Comissão Organizadora. Serão afixados ensaios em número suficiente para que haja entrosamento entre os candidatos e os pianistas acompanhadores.</li>
                <li>4. A equipe de produção do programa entrará em contato com os candidatos selecionados para informar as obras a serem executadas na prova eliminatória. A partir dessa data, os candidatos terão prazo de até 10 (dez) dias para enviar por correio ou por e-mail cópia das partes do pianista acompanhador. A lista dos classificados será publicada no site do programa até o dia 10 de julho.</li>
                <li>5. Pelo julgamento inapelável e irrecorrível de Comissão Julgadora designada pela Fundação Padre Anchieta, apenas um candidato de cada uma das modalidades elencadas no item I do presente regulamento (solistas ou conjuntos de câmaras) será escolhido em cada etapa eliminatória. Os candidatos da categoria solistas selecionados na fase eliminatória participarão das semifinais. De cada uma destas, será escolhido um candidato que concorrerá na Final. Os candidatos da categoria conjuntos de câmara, selecionados na fase eliminatória, passam para a fase Final. Não haverá semifinal para os conjuntos de câmara.</li>
                <li>6. O dia e a ordem de apresentação dos participantes classificados para as provas eliminatórias, semifinais e final serão estabelecidos pela Comissão Organizadora do programa.</li>
                <li>7. Os resultados finais do Concurso serão determinados pelo julgamento inapelável e irrecorrível de Comissão Julgadora, designada pela direção da Fundação Padre Anchieta.</li>
                <li>8. Os músicos, acompanhantes e os critérios para a apresentação dos participantes classificados serão determinados exclusivamente pela direção do programa.</li>
                <li>9. Em todas as etapas e fases do Concurso, os concorrentes deverão dirigir-se diretamente à Comissão Organizadora do programa para qualquer providência que disser respeito à sua participação, não sendo aceitos intermediários, ainda que por procuração, exceção feita aos participantes menores de 18 anos.</li>
                <li>10. Em havendo necessidade de transporte aéreo e hospedagem dos concorrentes, assim como de um acompanhante, no caso de candidatos menores de 18 anos, este será providenciado pela produção do programa.</li>
                <li>11. O concorrente inscrito que não respeitar o presente Regulamento Geral do Concurso ou provocar em qualquer fase atos que possam prejudicar seu andamento poderá, a critério da Comissão Organizadora do programa, ser desclassificado em caráter inapelável e irrecorrível.</li>
                <p>
                <li>VI. DA PREMIAÇÃO</li>
                <li>1. Serão concedidos prêmios aos quatro finalistas. Os valores dos prêmios são os seguintes: (*)</li>
                <li class="bold">Categoria solista:</li>
                <p>
                <li class="bold">1º colocado:</li> 
                <li>a)  R$ 40.000,00 (quarenta mil reais)*;</li>
                <li>b)  5 (cinco) concertos na Temporada de Concertos de 2014 nos Teatros do Sesi São Paulo.</li>
                <p>
                <li class="bold">2º colocado: </li>
                <li>a)  R$ 20.000,00 (vinte mil reais)*;</li>
                <li>b)  2 (dois) concertos na Temporada de Concertos de 2014 nos Teatros do Sesi São Paulo.</li>
                <p>
                <li class="bold">Categoria conjunto:</li>
                <p>                       
                 <li class="bold">1º colocado:</li> 
                <li>a)  R$ 40.000,00 (quarenta mil reais)*;</li>
                <li>b)  5 (cinco) concertos na Temporada de Concertos de 2014 nos Teatros do Sesi São Paulo.</li>
                <p>
                <li class="bold">2º colocado: </li>
                <li>a) R$ 20.000,00 (vinte mil reais)*;</li>
                <li>b) 2 (dois) concertos na Temporada de Concertos de 2014 nos Teatros do Sesi São Paulo.</li>    
                <li>(*) dos valores atribuídos aos quatro vencedores serão descontados os impostos previstos em lei.</li>
                 <p>
                <li>2. Serão concedidos prêmios aos professores dos primeiros colocados em cada categoria, desde que indicados na ficha de inscrição e até a data final desta, 24 de maio de 2013 ou até 31 de maio de 2013, caso tenha havido a prorrogação do prazo de inscrição pela Fundação Padre Anchieta</li>
                <li>Ao professor do 1º colocado na categoria solista, cujo nome tenha sido indicado na ficha de inscrição, serão concedidas 2 (duas) passagens aéreas de ida e volta a Nova York ou Londres (professor e acompanhante) e o valor correspondente a 6 (seis) diárias de hotel na cidade escolhida. As despesas relativas à obtenção de vistos (se necessários), transporte local e alimentação serão cobertas pelo próprio premiado.</li>
                <li>Ao professor do 1º colocado na categoria conjunto de câmara, cujo nome tenha sido indicado na ficha de inscrição, serão concedidas 2 (duas) passagens aéreas de ida e volta a Nova York ou Londres (professor e acompanhante) e o valor correspondente a 6 (seis) diárias de hotel na cidade escolhida. As despesas relativas à obtenção de vistos (se necessários), transporte local e alimentação serão cobertas pelo próprio premiado.</li>
                <li>As passagens aéreas serão emitidas em dezembro de 2013 e deverão ser utilizadas até junho de 2014.</li>
                <li>O valor correspondente às 6 (seis) diárias de hotel será determinado pela Comissão Organizadora e será concedido ao professor no mês de dezembro de 2013</li>
                <li>Os professores contemplados poderão escolher dentre as duas opções acima, a cidade de destino.</li>
                <li>(*) dos valores atribuídos aos quatro vencedores serão descontados os impostos previstos em lei. </li>

                <li class="bold">VII. DAS GRAVAÇÕES E DIREITOS DE IMAGEM, NOME, VOZ E INTERPRETAÇÃO</li>
                <li>1. As apresentações do Concurso serão transmitidas pela TV Cultura, emissora da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas e poderão também ser videogravadas, audiogravadas, filmadas ou fotografadas por quem esta indicar para posterior reprodução e a seu critério.</li>
                <li>2. Ficam cientes os candidatos escolhidos que serão objeto de entrevistas e reportagens a serem realizadas em suas casas, escolas e comunidade  para exibição em TV aberta, através da TV Cultura, parceiras, afiliadas, retransmissoras ou emissoras a ela conveniadas, independentemente do número de exibições realizadas ou de território de abrangência e que a adesão ao presente concurso implicará em expressa e automática autorização de captação, divulgação e reprodução de sua imagem, nome, voz, interpretação e demais elementos de personalidade.</li>
                <p>
                <li>CONSIDERAÇÕES FINAIS</li>
                <li>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas reserva para si o direito de modificar, alterar e/ou cancelar qualquer item do presente Regulamento e a dar divulgação ao mesmo da maneira que julgar conveniente.</li>
                <li>Os casos omissos por este Regulamento serão decididos pela Comissão Organizadora do Concurso.</li>
                <li class="bold">São Paulo, março de 2013.</li>
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
              
              <div class="linha t8 m10">
                Digite no campo abaixo os caracteres que voc&ecirc; v&ecirc; na imagem:
                <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer; line-height:18px;" />
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
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
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
      $('.container-1,.container-2, .container-3, .sugestao-repertorio').show()
      
    });
    $('a.repertorio').click(function(){
      $('.sugestao-repertorio').toggle();    
    });
    $('.sugestao-repertorio input').attr("style","color:#ccc");
    $('.sugestao-repertorio input').focusin(function(){
      $(this).val('').attr("style","color:#000");
      /*
      if($(this).val()==''){
        $(this).focusout(function(){
          $(this).val($(this).attr('data-default')).attr("style","color:#ccc");;  
        });
      }
      */
    });
    
    var selected = new Array(0,0,0);
  $(".opcao_correspondente").change(function(){
    var optionSelected = $("#"+$(this).attr("id")+" option:selected").attr("value");
    var number = $(this).attr("data-order");
    selected[number]=optionSelected;
    
    $(".opcao_correspondente").not($(this)).each(function(){
      $(this).find("option").each(function(){
        $(this).removeAttr("disabled")
        for(var i=0;i<selected.length; i++){
          if($(this).attr("value") == selected[i])
            $(this).attr("disabled","disabled");
        }
      });
      $(this).find("option:selected").removeAttr('disabled', 'disabled');
    });
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
          required: true
          //minlength: 2
        },
        instrumento_1:{
          required: true,
          minlength: 2
        },
        rg_1:{
         required: true
         // minlength: 9
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
         email:{
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
          minlength:8
        },
        instrumento_2:{
          required: true,
          minlength: 2
        },
        rg_2:{
          required: true
          //minlength: 9
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
               
        professor_2:{
          required: true
        },
        
        
        sexo_3:{
          required: true,
          minlength: 1
        },
        idade_3:{
          required: true,
          minlength: 8
        },
        instrumento_3:{
          required: true,
          minlength: 2
        },
        rg_3:{
          required: true
          //minlength: 9
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
        compositor1:{
          required:function(){
            validate('#compositor-1');
            },
        },
        compositor2:{
           required:function(){
            validate('#compositor-2');
            },
        },
        compositor3:{
           required:function(){
            validate('#compositor-3');
            },
        },
        compositor4:{
           required:function(){
            validate('#compositor-4');
            },
        },
        compositor5:{
           required:function(){
            validate('#compositor-5');
            },
        },
        compositor6:{
           required:function(){
            validate('#compositor-6');
            },
        },
        compositor7:{
           required:function(){
            validate('#compositor-7');
            },
        },
        compositor8:{
           required:function(){
            validate('#compositor-8');
            },
        },
        compositor9:{
           required:function(){
            validate('#compositor-9');
            },
        },
        compositor10:{
           required:function(){
            validate('#compositor-10');
            },
        },
        compositor11:{
           required:function(){
            validate('#compositor-11');
            },
        },
        compositor12:{
           required:function(){
            validate('#compositor-12');
            },
        },
        obra1:{
           required:function(){
            validate('#obra-1');
            },
        },
        obra2:{
          required:function(){
            validate('#obra-2');
            },
        },
        obra3:{
          required:function(){
            validate('#obra-3');
            },
        },
        obra4:{
          required:function(){
            validate('#obra-4');
            },
        },
        obra5:{
          required:function(){
            validate('#obra-5');
            },
        },
        obra6:{
          required:function(){
            validate('#obra-6');
            },
        },
        obra7:{
          required:function(){
            validate('#obra-7');
            },
        },
        obra8:{
          required:function(){
            validate('#obra-8');
            },
        },
        obra9:{
          required:function(){
            validate('#obra-9');
            },
        },
        obra10:{
          required:function(){
            validate('#obra-10');
            },
        },
        obra11:{
          required:function(){
            validate('#obra-11');
            },
        },
        obra12:{
         required:function(){
            validate('#obra-12');
            },
        },
        duracao1:{
          required:function(){
            validate('#duracao-1');
            },
        },
        duracao2:{
          required:function(){
            validate('#duracao-2');
            },
        },
        duracao3:{
          required:function(){
            validate('#duracao-3');
            },
        },
        duracao4:{
          required:function(){
            validate('#duracao-4');
            },
        },
        duracao5:{
          required:function(){
            validate('#duracao-5');
            },
        },
        duracao6:{
          required:function(){
            validate('#duracao-6');
            },
        },
        duracao7:{
          required:function(){
            validate('#duracao-7');
            },
        },
        duracao8:{
         required:function(){
            validate('#duracao-8');
            },
        },
        duracao9:{
          required:function(){
            validate('#duracao-9');
            },
        },
        duracao10:{
          required:function(){
            validate('#duracao-10');
            },
        },
        duracao11:{
          required:function(){
            validate('#duracao-11');
            },
        },
        duracao12:{
          required:function(){
            validate('#duracao-12');
            },
        },
        opcao_correspondente1:{
          required: true,
          minlength: 1
        },
        opcao_correspondente2:{
          required: true,
          minlength: 1
        },
        opcao_correspondente3:{
          required: true,
          minlength: 1
        },
        opcao_correspondente4:{
          required: true,
          minlength: 1
        },
        link1:{
          required: true,
          minlength: 2
        },
        link2:{
          required: true,
          minlength: 2
        },
        link3:{
          required: true,
          minlength: 2
        },
        link4:{
          required: true,
          minlength: 2
        },
        datafile1:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
        },
        datafile2:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
        },
        datafile3:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
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

        compositor1: "Campo obrigat&oacute;rio",
            compositor2: "Campo obrigat&oacute;rio",
            compositor3: "Campo obrigat&oacute;rio",
            compositor4: "Campo obrigat&oacute;rio",
            compositor5: "Campo obrigat&oacute;rio",
            compositor6: "Campo obrigat&oacute;rio",
            compositor7: "Campo obrigat&oacute;rio",
            compositor8: "Campo obrigat&oacute;rio",
            compositor9: "Campo obrigat&oacute;rio",
            compositor10: "Campo obrigat&oacute;rio",
            compositor11: "Campo obrigat&oacute;rio",
            compositor12: "Campo obrigat&oacute;rio",
            obra1: "Campo obrigat&oacute;rio",
            obra2: "Campo obrigat&oacute;rio",
            obra3: "Campo obrigat&oacute;rio",
            obra4: "Campo obrigat&oacute;rio",
            obra5: "Campo obrigat&oacute;rio",
            obra6: "Campo obrigat&oacute;rio",
            obra7: "Campo obrigat&oacute;rio",
            obra8: "Campo obrigat&oacute;rio",
            obra9: "Campo obrigat&oacute;rio",
            obra10: "Campo obrigat&oacute;rio",
            obra11: "Campo obrigat&oacute;rio",
            obra12: "Campo obrigat&oacute;rio",
            movimentos1: "Campo obrigat&oacute;rio",
            movimentos2: "Campo obrigat&oacute;rio",
            movimentos3: "Campo obrigat&oacute;rio",
            movimentos4: "Campo obrigat&oacute;rio",
            movimentos5: "Campo obrigat&oacute;rio",
            movimentos6: "Campo obrigat&oacute;rio",
            movimentos7: "Campo obrigat&oacute;rio",
            movimentos8: "Campo obrigat&oacute;rio",
            movimentos9: "Campo obrigat&oacute;rio",
            movimentos10: "Campo obrigat&oacute;rio",
            movimentos11: "Campo obrigat&oacute;rio",
            movimentos12: "Campo obrigat&oacute;rio",
            duracao1: "Campo obrigat&oacute;rio",
            duracao2: "Campo obrigat&oacute;rio",
            duracao3: "Campo obrigat&oacute;rio",
            duracao4: "Campo obrigat&oacute;rio",
            duracao5: "Campo obrigat&oacute;rio",
            duracao6: "Campo obrigat&oacute;rio",
            duracao7: "Campo obrigat&oacute;rio",
            duracao8: "Campo obrigat&oacute;rio",
            duracao9: "Campo obrigat&oacute;rio",
            duracao10: "Campo obrigat&oacute;rio",
            duracao11: "Campo obrigat&oacute;rio",
            duracao12: "Campo obrigat&oacute;rio",
            opcao_correspondente1: "Campo obrigat&oacute;rio",
            opcao_correspondente2: "Campo obrigat&oacute;rio",
            opcao_correspondente3: "Campo obrigat&oacute;rio",
            opcao_correspondente4: "Campo obrigat&oacute;rio",
        
        anexofoto: "Este campo &eacute; Obrigat&oacute;rio.",
        curriculo: "Este campo &eacute; Obrigat&oacute;rio.", 
        conjuntoprofessor: "Este campo &eacute; Obrigat&oacute;rio.",
        regulamento: "Este campo &eacute; Obrigat&oacute;rio.",
        datafile1: {
          accept: "O arquivo precisa estar no formato JPG, GIF ou PNG",
          filesize: "O arquivo não pode ser maior que 15MB"
        },
        datafile2: {
          accept: "O arquivo precisa estar no formato JPG, GIF ou PNG",
          filesize: "O arquivo não pode ser maior que 15MB"
        },
        datafile3: {
          accept: "O arquivo precisa estar no formato JPG, GIF ou PNG",
          filesize: "O arquivo não pode ser maior que 15MB"
        }
      }, 
      
      success: function(label){
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
    function validate(obj){
        if($(obj).val()==$(obj).attr("data-default"))
          $(obj).val('');
      }
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