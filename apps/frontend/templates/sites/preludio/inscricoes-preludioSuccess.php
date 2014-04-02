
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
      <?php if(isset($program) && $program->id > 0):
      ?>
      <h2><a href="<?php echo $program->retriveUrl() ?>">
      <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
      </a></h2>
      <?php endif;?>
      <?php if(isset($program) && $program->id > 0):
      ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
      ?>
      <?php endif;?>
      <?php if(isset($program) && $program->id > 0):
      ?>
      <!-- horario -->
      <div id="horario">
        <p><?php echo html_entity_decode($program->getSchedule())
        ?></p>
      </div>
      <!-- /horario -->
      <?php endif;?>
    </div>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections))
      ?>
      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))):
      ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()
        ?></a>
      </div>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <!-- BOX LATERAL -->
    <?php include_partial_from_folder('blocks','global/shortcuts')
    ?>
    <!-- BOX LATERAL -->
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          
          <!--Contato-->
          <div class="contato grid2">
            
            <h3 class="tit-pagina grid3"><?php echo $section->getTitle()?></h3>
            <p><?php echo $section->getDescription()?></p>
            
            <?php if(isset($_GET["msg"]) && $_GET["msg"]=="error"):?>            
              <!--Mensagem Erro-->
              <div class="msgErro">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">Sua mensagem não pode ser enviada.</p>
                  <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                </div>
                <hr />
              </div>
              <!--/Mensagem Erro-->
            <?php elseif(isset($_GET["msg"]) && $_GET["msg"]=="success"):?>
              <!--Mensagem Acerto-->
              <div class="msgAcerto">
                <span class="alerta"></span>
                <div class="boxMsg">
                  <p class="aviso">Mensagem enviada com sucesso!</p>
                  <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                </div>
                <hr />
              </div>
              <!--/Mensagem Acerto-->
            <?php endif; ?>
<!--form-contato-solista-->
            <form id="form-contato-solista" method="post" action="/actions/preludio2014/submit.php" enctype="multipart/form-data">
              
              <input type="hidden" name="tipo" value="Solista" />
              <input type="hidden" name="return_url" value="http://tvcultura.cmais.com.br/preestreia/inscricao-efetuada-com-sucesso" />
              
              <!--Campo Nome-->
              <!--div class="linha t7">
                <br/>
                <label>Escolha sua categoria: Solista</label>
                <br/>
               </div--> 
               <div class="linha t5">
                <label>Nome Completo</label>
                <input type="text" name="nome" id="nome-completo" />
              </div>
                            
              <!--/Campo Nome-->
              
              <!--Campo Sexo-->
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
              <!--/Campo Sexo-->
              
              <!--campo instrumento -->
              <div class="linha t5">
                <label>Instrumento</label>
                <input type="text" name="instrumento" id="instrumento" />
              </div>
              <!--/campo instrumento -->
              
              <!--Campo RG, Nome Artistico, Nome Pai-->
               <div class="linha t5">
                <label>Nome Artístico</label><br/>
                <input type="text" name="nomeartistico" id="nomeartistico" />
              </div>
                            
              <div class="linha t8 w204">
                <label>RG</label><br/>
                <input type="text" name="rg" id="rg" class="rg" />
              </div>
              
             <div class="linha t8 m14 w204">
                <label>CPF</label><br/>
                <input type="text" name="cpf" id="cpf" class="cpf"/>
              </div>
             
              <div class="linha t6 m14 w204">
                <label>Nascimento</label><br/>
                <input type="text" name="nascimento" id="nascimento" class="nasc" />
              </div>
              
           
              
              <!--/Campo RG, Nome Artistico, Nome Pai-->
              
              <!--Campo CPF, Nascimento, Nome Mae-->
              
              <div class="linha t5">
                <label>Nome do pai</label><br/>
                <input type="text" name="nomepai" id="nomepai" />
              </div>
              
              <div class="linha t5">
                <label>Nome da mãe</label><br/>
                <input type="text" name="nomemae" id="nomemae" />
              </div>
              <!--/Campo CPF, Nascimento, Nome Mae-->
              
              <!--Campo Endereço-->
              <div class="linha t5">
                
                <label>Endereço</label><br/>
                <input type="text" name="endereco" id="endereco" />
              
              </div>
              <!--/Campo Endereco-->
              
              
              
              <!--Campo CEP-->
              <div class="linha t8 w204">                
                
                <label>CEP</label><br/>
                <input type="text" name="cep" id="cep" class="cep"/>
              
              </div>
              <!--/Campo CEP-->
              
              <!--Campo Bairro-->
              <div class="linha t8 w204 m14">
                <label>Bairro</label><br/>
                <input type="text" name="bairro" id="bairro" />
              </div>
              <!--/Campo Bairro-->
              
              <!--Campo Cidade-->
              <div class="linha t6 w204 m14">
               
                <label>Cidade</label><br/>
                <input type="text" name="cidade" id="cidade" />
              
              </div>
              <!--/Campo Cidade-->
              
              <!--Campo Estado-->
              <div class="linha t2">
                
                <label>Estado</label><br />
                <select class="estado required" id="estado" name="estado">
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
              <!--/Campo Estado-->
              
              <!--Campo base Email e Naturalidade-->
              <div class="linha t7">
                
                <!--Campo Naturalidade-->
                <div class="linha t9 ">
              
                  <label>Naturalidade</label>
                  <input type="text" name="naturalidade" id="naturalidade" />
              
                </div>
                <!--Campo Naturalidade-->
                
                
                <!--Campo Email-->
                <div class="linha t9 m10">
              
                  <label>Email</label>
                  <input type="text" name="email" id="email" />
              
                </div>
                <!--/Campo Email-->
                
                
              </div>
              <!--/Campo base Email e Naturalidade-->
              
              <!--Campo Telefone-->
              <div class="linha t9" style="clear: both;">
                
                <label>Telefone Residencial</label>
                <input type="text" name="telresidencial" id="telresidencial" class="tel" />
              
              </div>
              <!--Campo Telefone-->
              
              <!--Campo Telefone Celular-->
              <div class="linha t9 m10">
              
                <label>Telefone Celular</label>
                <input type="text" name="telcelular" id="telcelular" class="cel" />
              
              </div>
              <!--Campo Telefone Celular-->
              
              <!--tempo-->
              <div class="linha t5">
                
                <label>Onde Estuda?</label>
                <input type="text" name="tempo" id="tempo" />
                
              </div>
              <!--tempo-->
              
              <!--como soube-->
              <div class="linha t5">
                
                <label>Como soube do Preludio?</label>
                <input type="text" name="comosoube" id="comosoube" />
                
              </div>
              <!--/como soube-->
              

              

                <div class="linha t7">
                  <label>Informe aqui as obras que deseja apresentar no programa e os links de seus vídeos tocando essas obras:</label>
                </div>
                
                <!--Sugestoes-->
                <a class="t7 titulo laranja" >1ª Opção</a>
                <div  style="display: hidden;">
                  <div class="linha t5">  
                    <label>Nome da Obra</label><br/>
                    <input type="text" name="obra1" data-default="Ex.: Partita No. 3 em Mi Maior - BWV: 1006" value="Ex.: Partita No. 3 em Mi Maior - BWV: 1006" id="obra-1" />
                  </div>
                               
                  <div class="linha t5" >
                    <label>Compositor</label><br/>
                    <input type="text" name="compositor1" data-default="Ex.: J.S. Bach" value="Ex.: J.S. Bach" id="compositor-1" />
                  </div>
                 
                  <div class="linha t5">
                    <label>Movimentos</label><br/>
                    <input type="text" name="movimentos1" data-default="Ex.: IV - Minueto" value="Ex.: IV - Minueto" id="movimentos-1" />
                  </div>
                  
                  <div class="linha t2">  
                    <label>Duração</label><br/>
                    <input type="text" name="duracao1" data-default="Ex.: 4:07" value="Ex.: 4:07" id="duracao-1" />
                  </div>
                  
                  <div class="linha t5">  
                    <label>Link</label><br/>
                    <input type="text" name="link1" id="link1" />
                  </div>
                </div>
                
                <a class="t7 titulo laranja" >2ª Opção</a>

                  <div class="linha t5">  
                    <label>Nome da Obra</label><br/>
                    <input type="text" name="obra2" data-default="Ex.: Partita No. 3 em Mi Maior - BWV: 1006" value="Ex.: Partita No. 3 em Mi Maior - BWV: 1006" id="obra-2" />
                  </div>
                               
                  <div class="linha t5" >
                    <label>Compositor</label><br/>
                    <input type="text" name="compositor2" data-default="Ex.: J.S. Bach" value="Ex.: J.S. Bach" id="compositor-2" />
                  </div>
                 
                  <div class="linha t5">
                    <label>Movimentos</label><br/>
                    <input type="text" name="movimentos2" data-default="Ex.: IV - Minueto" value="Ex.: IV - Minueto" id="movimentos-2" />
                  </div>
                  
                  <div class="linha t2">  
                    <label>Duração</label><br/>
                    <input type="text" name="duracao2" data-default="Ex.: 4:07" value="Ex.: 4:07" id="duracao-2" />
                  </div>
                  
                  <div class="linha t5">  
                    <label>Link</label><br/>
                    <input type="text" name="link2" id="link2" />
                  </div>

              <!--Campo Menor de Idade-->
 
              <a href="javascript:;"class="t7 titulo menor">
                Para candidatos menores de 18 anos favor preencher: [Clique aqui]
              </a>
    
              <!--/Campo Menor de Idade-->
              
              <!--Campo menor Form-->
              <div class="menorForm" style="display:none;">
              
                <!--Campo Nome Responsável-->
                <div class="linha t5">
                  
                  <label>Nome (pai, mãe ou responsável)</label>
                  <input type="text" name="nomeresp" id="nomeresp" />
                
                </div>
                <!--/Campo Nome Responsável-->

                <!--Campo RG-->
                <div class="linha t9 w204">
                  
                  <label>RG</label>
                  <input type="text" name="rgresp" id="rgresp" class="rg" />
                
                </div>
                <!--/Campo RG-->
                
                <!--Campo CPF-->
                <div class="linha t9 m10 w204">
                  
                  <label>CPF</label>
                  <input type="text" name="cpfresp" id="cpfresp" class="cpf" />
                  
                </div>
                <!--/Campo CPF-->
                
                
                
              </div>
              
              <!--/menor Form-->
              
              <!--Anexar Currículo-->
              <div class="linha t7">
                
                <label>Currículo artístico com apenas uma lauda</label>
                <textarea name="curriculo" id="curriculo" class="w100" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>

                
              </div>
              <!--/Anexar Currículo-->
              
              <!--Anexar Foto-->
              <div class="linha t7">
                
                <label>Anexar RG (se for menor de idade anexar o RG do responsável)(Formato JPG):</label>
                <input type="file" name="new_photo" id="anexofotorg" />
                
              </div>
              <!--/Anexar Foto-->
              
              <!--Anexar Foto-->
              <div class="linha t7">
                
                <label>Anexar foto(max 5mb)(Formato JPG):</label>
                <input type="file" name="new_photo2" id="anexofoto" />
                
              </div>
              <!--/Anexar Foto-->
                     
              
              <!--Regulamento-->
              <div class="linha t1 regulamento">
                
               <ul>
                <li class="bold">Prelúdio 2014 regulamento</li>
                                      
                <!--li>‘Prelúdio 2014’ é um concurso musical que apresentará ao público jovens talentos da música clássica. No ‘Prelúdio 2014’, músicos de até 24 anos, praticantes de qualquer instrumento, e cantores de até 28 anos terão a oportunidade de se apresentar como solistas ou em conjuntos de câmara de até 8 instrumentistas ou cantores ou mistos de instrumentistas e cantores.</li>
                <p>
                <li class="bold">‘Prelúdio 2014’</li>
                <li>Concurso para músicos instrumentistas, cantores líricos e conjuntos de câmara.</li>
                <li>Conheça o regulamento que define as regras e orienta os músicos interessados em participar do programa Prelúdio 2014, a realizar-se entre agosto e dezembro de 2013.</li>
                <p>
                <li class="bold">REGULAMENTO</li>
                <li>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, através de sua emissora de televisão TV Cultura – Canal 2, promove o Prelúdio 2014 - Concurso para músicos instrumentistas, cantores líricos e conjuntos de câmara, que será regido por este regulamento, cujas disposições declaram os candidatos, após a devida leitura, aceitar por ocasião da submissão de sua respectiva ficha de inscrição.</li>
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
                <li>3. Cada candidato deverá gravar 3 (três) vídeos contendo 3 (três) obras de até 5 (cinco) minutos cada e de estilos diferentes para que melhor se avalie o candidato. Cada obra deverá ter a duração mínima de 3 (três) minutos e  máxima de 5 (cinco) minutos. As 3 (três) obras poderão, no caso de instrumentistas solistas ou cantores, ter acompanhamento de piano ou serem escritas para instrumento / voz solo. Os conjuntos de câmara – vocais ou instrumentais ou mistos – também deverão apresentar 3 (três) obras que deverão ter, cada uma, a duração mínima de 3 (três) minutos e máxima de 5 (cinco) minutos  e deverão ser de estilos diferentes para que melhor se avalie seu desempenho. As obras indicadas na ficha de inscrição deverão obrigatoriamente corresponder àquelas gravadas em vídeo. As 3 (três) obras gravadas deverão estar incluídas na relação de obras que o candidato executará, se escolhido, nas provas eliminatórias e/ou semifinais.</li>  
                <li>4. Os vídeos especificados no item 3 devem ser postados no Youtube. Não serão aceitos vídeos em DVD ou em outro formato. </li> 
                <li>5. Será considerada válida a inscrição enviada completa (ficha de inscrição preenchida, foto, currículo, cópia de documento e links de acesso à gravação) até o dia 24 de maio de 2013. Não serão aceitas inscrições enviadas com qualquer um dos itens faltantes. Também não serão permitidos envios posteriores de materiais ou requisitos complementares.</li>
                <li>6. Os instrumentistas ou cantores solistas deverão indicar na ficha de inscrição 12 (doze) obras diferentes, sendo:</li>
                <li>a)  8 (oito) obras (ou movimentos de obras), de estilos contrastantes para candidatos instrumentistas, ou 8 (oito) obras ou árias, de estilos contrastantes para os candidatos cantores, com duração mínima de 3 (três) minutos e máxima de 5 (cinco) minutos cada, das quais 2 (duas)  serão apresentadas pelos candidatos na fase eliminatória do Concurso e 2 (duas) serão apresentadas na fase semifinal. As peças a serem apresentadas no Concurso serão escolhidas pela Comissão de Seleção e comunicadas a cada um dos candidatos. O repertório escolhido, se originalmente escrito com acompanhamento de orquestra, será apresentado com redução para piano.</li>
                <li>b)  4 (quatro) obras (ou movimentos de concertos), de estilos contrastantes, para candidatos instrumentistas, ou 4 (quatro) árias ou obras, de estilos contrastantes,  para os candidatos cantores, com a duração mínima de 7 (sete) minutos e máxima de 10 minutos cada, a serem interpretadas pelo candidato, na prova final, que será feita com a Orquestra do Conservatório de Tatuí. O repertório a ser apresentado na etapa final será escolhido pela Comissão de Seleção.
                <br>Na prova final, os candidatos instrumentistas poderão fazer combinações de dois ou mais movimentos do mesmo concerto, e os candidatos cantores poderão fazer combinações de duas ou mais árias ou canções de um ciclo para atingir o total de minutos estipulado. Cada uma dessas combinações representará uma das 4 opções a serem preenchidas.</li>
                <li>7. Na prova semifinal, o candidato cantor ou instrumentista deverá interpretar duas obras diferentes daquelas apresentadas na prova eliminatória, escolhidas dentre as 8 (oito) indicadas no ato da inscrição. Em todas as etapas, a escolha do repertório será feita pela Comissão de Seleção.</li>
                <li>8. Os conjuntos de câmara – vocais, instrumentais ou mistos – deverão indicar na ficha de inscrição 12 (doze) obras diferentes, sendo:</li>
                <li>a) 8 (oito) obras(ou movimentos de obras), de estilos contrastantes, com duração de no mínimo 3 (três) minutos e no máximo 5 (cinco) minutos cada, das quais 2 (duas)  serão apresentadas pelos candidatos na fase eliminatória do Concurso. As 2 (duas) obras serão escolhidas pela Comissão de Seleção e comunicadas a cada um dos candidatos.</li>
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
                <li>2. Ficam cientes os candidatos escolhidos que serão objeto de entrevistas e reportagens a serem realizadas em suas casas, escolas e comunidade  para exibição em TV aberta, através da TV Cultura, parceiras, afiliadas, retransmissoras ou emissoras a ela conveniadas, independentemente do número de exibições realizadas ou de território de abrangência e que a adesão ao presente concurso implicará em expressa e automática autorização de captação, divulgação e reprodução de sua imagem, nome, voz, interpretação e demais elementos de personalidade.</li>
                <p>
                <li>CONSIDERAÇÕES FINAIS</li>
                <li>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas reserva para si o direito de modificar, alterar e/ou cancelar qualquer item do presente Regulamento e a dar divulgação ao mesmo da maneira que julgar conveniente.</li>
                <li>Os casos omissos por este Regulamento serão decididos pela Comissão Organizadora do Concurso.</li>
                <li class="bold">São Paulo, março de 2013.</li-->
             </ul>
              <p>      
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
                <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
                <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
              </div>
              <!--captcha-->
              
            </form>
            <!--form-contato-solista-->
            
          </div>
          <!--Contato-->
          
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

<!--script diversos-->
<script type="text/javascript">
// Contador de Caracters
  function limitText (limitField, limitNum, textCounter)
  {
  if (limitField.value.length > limitNum)
    limitField.value = limitField.value.substring(0, limitNum);
  else
    $(textCounter).html(limitNum - limitField.value.length);
  }
  
  $(document).ready(function(){
      
  //mascaras
  //$('.rg').mask("99.999.999-9");
  $('.cpf').mask("999.999.999-99");
  $('.cep').mask("99999-999");
  $('.tel').mask("(99)99999999");
  $('.cel').mask("(99)?999999999");
  $('.nasc').mask("99/99/9999");
  
  });
</script>
<!--script diversos-->

<!-- script validacao solista-->
<script type="text/javascript">

$(document).ready(function(){  
  $('a.menor').click(function(){
    $('.menorForm').toggle();
  });
  $('a.outras').click(function(){
    $('.outrasinfo').toggle();
  });
  $('a.repertorio').click(function(){
    $('.sugestao-repertorio').toggle();    
  });
  $('#form-contato-solista input#enviar').click(function(){
    $(".menorForm, .outrasinfo, .sugestao-repertorio").show();
  });
  $('.sugestao-repertorio input').attr("style","color:#ccc");
  $('.sugestao-repertorio input').focusin(function(){
    $(this).val('').attr("style","color:#000");
    /*
    if($(this).val()==''){
      $(this).focusout(function(){
        $(this).val($(this).attr('data-default')).attr("style","color:#ccc"); 
      });
    }
    */
  });
  
      
  //validacao solista
  var validator = $('#form-contato-solista').validate({
          rules:{
            nome:{
             required: true,
             minlength: 2
            },
            instrumento:{
             required: true,
             minlength: 2
            },
            sexo:{
              required: true
            },
            rg:{
              required: true,
            },
            cpf:{
              required: true,
              minlength: 11
            },
            nomeartistico:{
              required: true,
              minlength: 2
            },
            nascimento:{
              required: true,
              minlength: 8
            },
            nomemae:{
              required: true,
              minlength: 2
            },
            nomepai:{
              required: true,
              minlength: 2
            },
            endereco:{
              required: true,
              minlength: 2
            },
            estado:{
              required: true
            },
            cep:{
              required: true,
              minlength: 8
            },
            bairro:{
              required: true,
              minlength: 2
            },
            cidade:{
              required: true,
              minlength: 2
            },
            email:{
              required: true,
              email: true
            },
            naturalidade:{
              required: true,
              minlength: 2
            },
            telresidencial:{
              required: true,
              minlength: 8
            },
            telcelular:{
              required: true,
              minlength: 8
            },
            tempo:{
              required: true,
              minlength: 2
            },
            comosoube:{
              required: true,
              minlength: 2
            },
            sugestao1:{
              required: true,
              minlength: 2
            },
            sugestao2:{
              required: true,
              minlength: 2
            },
            
            link1:{
              required: true,
              minlength: 2
            },
            link2:{
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
            compositor1:{
              required:function(){
                validate('#compositor-1');
                },
              minlength: 2
            },
            compositor2:{
              required:function(){
                validate('#compositor-2');
                },
              minlength: 2
            },
            obra1:{
              required:function(){
                validate('#obra-1');
              }
            },
            obra2:{
             required:function(){
                validate('#obra-2');
              }
            },
            duracao1:{
              required:function(){
                validate('#duracao-1');
               }
            },
            duracao2:{
              required:function(){
                validate('#duracao-2');
               }
            },
            opcao_correspondente1:{
              required:function(){
                validate('#opcao_correspondente1');
              }
            },
            opcao_correspondente2:{
              required:function(){
                validate('#opcao_correspondente2');
              }
            },
            link1:{
               required:function(){
                validate('#link1');
              }
            },
            link2:{
              required:function(){
                validate('#link2');
              }
            },
            captcha:{
              required:function(){
                validate('#captcha');
              }
            },
            regulamento:{
             required:function(){
                validate('#regulamento');
              }
            },
            cpf:{
              required:function(){
                validate('#cpf');
              }
            },
            concursos:{
             required:function(){
                validate('#concursos');
              }
            },
            new_photo:{
              required:function(){
                validate('#anexo_foto');
              } 
            },
            new_photo2:{
              required:function(){
                validate('#anexo_foto');
              } 
            }
          },
          
          messages:{
            nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
            sexo: "Escolha obrigat&oacute;ria",
            rg: "Campo obrigat&oacute;rio",
            cpf: "Campo obrigat&oacute;rio",
            nomeartistico: "Campo obrigat&oacute;rio",
            nascimento: "Campo obrigat&oacute;rio",
            nomemae: "Campo obrigat&oacute;rio",
            nomepai: "Campo obrigat&oacute;rio",
            endereco: "Campo obrigat&oacute;rio",
            estado: "Campo obrigat&oacute;rio",
            cep: "Campo obrigat&oacute;rio",
            bairro: "Campo obrigat&oacute;rio",
            cidade: "Campo obrigat&oacute;rio",
            email: "Campo obrigat&oacute;rio",
            naturalidade: "Campo obrigat&oacute;rio",
            telresidencial: "Campo obrigat&oacute;rio",
            telcelular: "Campo obrigat&oacute;rio",
            instrumento: "Campo obrigat&oacute;rio",
            tempo: "Campo obrigat&oacute;rio",
            comosoube: "Campo obrigat&oacute;rio",
            compositor1: "Campo obrigat&oacute;rio",
            compositor2: "Campo obrigat&oacute;rio",
            obra1: "Campo obrigat&oacute;rio",
            obra2: "Campo obrigat&oacute;rio",
            movimentos1: "Campo obrigat&oacute;rio",
            movimentos2: "Campo obrigat&oacute;rio",
            duracao1: "Campo obrigat&oacute;rio",
            duracao2: "Campo obrigat&oacute;rio",
            opcao_correspondente1: "Campo obrigat&oacute;rio",
            opcao_correspondente2: "Campo obrigat&oacute;rio",
            sugestao1: "Campo obrigat&oacute;rio",
            sugestao2: "Campo obrigat&oacute;rio",
            link1: "Campo obrigat&oacute;rio",
            link2: "Campo obrigat&oacute;rio",
            anexofoto: "Campo obrigat&oacute;rio",
            curriculo: "Campo obrigat&oacute;rio",
            captcha: "Campo obrigat&oacute;rio",
            regulamento: "Aceite obrigat&oacute;rio",
            cpf: "Campo obrigat&oacute;rio",
            naturalidaderesp: "Campo obrigat&oacute;rio",
            cpf: "Campo obrigat&oacute;rio",
            new_rg: "Campo obrigat&oacute;rio",
            new_foto: "Campo obrigat&oacute;rio",
            concursos: "Campo obrigat&oacute;rio"
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
  
  
  </script>
  <!-- script validacao solista-->