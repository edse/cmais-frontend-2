<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<!-- CAPA SITE -->
<div id="capa-site">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>
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
                        
            <!--Mensagem Erro-->
            <div class="msgErro" style="display:none">
              <span class="alerta"></span>
              <div class="boxMsg">
                <p class="aviso">Sua mensagem não pode ser enviada.</p>
                <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
              </div>
              <hr />
            </div>
            <!--/Mensagem Erro-->
            
            <!--Mensagem Acerto-->
            <div class="msgAcerto" style="display:none">
              <span class="alerta"></span>
              <div class="boxMsg">
                <p class="aviso">Mensagem enviada com sucesso!</p>
                <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
              </div>
              <hr />
            </div>
            <!--/Mensagem Acerto-->
            
<!--form-contato-solista-->
            <form id="form-contato-solista" method="post" action="/actions/preestreia/submit.php" enctype="multipart/form-data">
              
              <input type="hidden" name="tipo" value="Solista" />
              <input type="hidden" name="return_url" value="http://tvcultura.cmais.com.br/preestreia/inscricao-efetuada-com-sucesso" />
              
              <!--Campo Nome-->
              <div class="linha t7">
                <br/>
                <label>Escolha sua categoria: Solista</label>
                <br/>
               </div> 
               <div class="linha t5">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" />
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
              
              <!--Campo RG, Nome Artistico, Nome Pai-->
              <div class="linha t9">
                
                <label>RG</label>
                <input type="text" name="rg" id="rg" class="rg" />
              
                <label>Nome Artístico</label>
                <input type="text" name="nomeartistico" id="nomeartistico" />
          
                <label>Nome do pai</label>
                <input type="text" name="nomepai" id="nomepai" />
              
              </div>
              <!--/Campo RG, Nome Artistico, Nome Pai-->
              
              <!--Campo CPF, Nascimento, Nome Mae-->
              <div class="linha t9 m10">
                
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" class="cpf"/>
             
                <label>Nascimento</label>
                <input type="text" name="nascimento" id="nascimento" class="nasc" />
              
                <label>Nome da mãe</label>
                <input type="text" name="nomemae" id="nomemae" />
                
              </div>
              <!--/Campo CPF, Nascimento, Nome Mae-->
              
              <!--Campo Endereço-->
              <div class="linha t5">
                
                <label>Endereço</label>
                <input type="text" name="endereco" id="endereco" />
              
              </div>
              <!--/Campo Endereco-->
              
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
              <div class="linha t8 w204 m14">
               
                <label>Cidade</label><br/>
                <input type="text" name="cidade" id="cidade" />
              
              </div>
              <!--/Campo Cidade-->
              
              <!--Campo base Email e Naturalidade-->
              <div class="linha t7">
                
                <!--Campo Email-->
                <div class="linha t9">
              
                  <label>Email</label>
                  <input type="text" name="email" id="email" />
              
                </div>
                <!--/Campo Email-->
                
                <!--Campo Naturalidade-->
                <div class="linha t9 m10">
              
                  <label>Naturalidade</label>
                  <input type="text" name="naturalidade" id="naturalidade" />
              
                </div>
                <!--Campo Naturalidade-->
                
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
                <input type="text" name="telcelular" id="telcelular" class="tel" />
              
              </div>
              <!--Campo Telefone Celular-->
              
              <!--Campo Menor de Idade-->
              <a href="javascript:;"class="t7 titulo menor">
                Para candidatos menores de 18 anos favor preencher:
              </a>
              <!--/Campo Menor de Idade-->
              
              <!--Campo menor Form-->
              <div class="menorForm" style="display:block;">
              
                <!--Campo Nome Responsável-->
                <div class="linha t7">
                  
                  <label>Nome (pai, mãe ou responsável)</label>
                  <input type="text" name="nomeresp" id="nomeresp" />
                
                </div>
                <!--/Campo Nome Responsável-->

                <!--Campo RG-->
                <div class="linha t9">
                  
                  <label>RG</label>
                  <input type="text" name="rgresp" id="rgresp" class="rg" />
                
                </div>
                <!--/Campo RG-->
                
                <!--Campo CPF-->
                <div class="linha t9 m10">
                  
                  <label>CPF</label>
                  <input type="text" name="cpfresp" id="cpfresp" class="cpf" />
                  
                </div>
                <!--/Campo CPF-->
                
                <!--Campo Naturalidade-->
                <div class="linha t7 mb30">
                  
                  <label>Naturalidade</label>
                  <input type="text" name="naturalidaderesp" id="naturalidaderesp" />
                
                </div>
                <!--/Campo Naturalidade-->
                
              </div>
              
              <!--/menor Form-->
              
              <!--Outras Informaçoes-->
              <a href="javascript:;" class="t7 titulo outras">
                Outras informações
              </a>
              
              <!--Outras-->
              <div class="outrasinfo" style="display:block;">
              <!--Instrumento-->
              <div class="linha t7">
                
                <label>Instrumento</label>
                <input type="text" name="instrumento" id="instrumento" />
                
              </div>
              <!--Instrumento-->
              
              <!--tempo-->
              <div class="linha t7">
                
                <label>Há quanto tempo estuda música?</label>
                <input type="text" name="tempo" id="tempo" />
                
              </div>
              <!--tempo-->
              
              <!--escola-->
              <div class="linha t7">
                
                <label>Qual sua escola de música?</label>
                <input type="text" name="escola" id="escola" />
                
              </div>
              <!--/escola-->
              
              <!--professor1-->
              <div class="linha t7">
                
                <label>Qual o nome de seu professor atual?</label>
                <input type="text" name="professor" id="professor" />
                
              </div>
              <!--/professor1-->
              
              <!--professor2-->
              <div class="linha t7">
                
                <label>Você estudou com outros professores? Em caso afirmativo, quais?</label>
                <input type="text" name="professoroutro" id="professoroutro" />
                
              </div>
              <!--/professor2-->
              
              <!--participa-->
              <div class="linha t7">
                
                <label>Você participa de alguma orquestra ou coro e/ou grupos de câmara? Em caso afirmativo, quais?</label>
                <input type="text" name="participacao" id="participacao" />
                
              </div>
              <!--/participa-->
              
              <!--participou-->
              <div class="linha t7">
                
                <label>Você já participou de outros concursos? Em caso afirmativo, quais?</label>
                <input type="text" name="concursos" id="concursos" />
                
              </div>
              <!--/participou-->
              
              <!--como soube-->
              <div class="linha t7">
                
                <label>Como soube do Pré-estreia?</label>
                <input type="text" name="comosoube" id="comosoube" />
                
              </div>
              <!--/como soube-->
              
              <!--curso-->
              <div class="linha t7">
                
                <label>Você cursa escola regular? Em caso afirmativo, quais?</label>
                <input type="text" name="outraescola" id="outraescola" />
              
              </div>
              <!--/curso-->
              
              <!--ano-->
              <div class="linha t7">
                
                <label>Em que ano você está?</label>
                <input type="text" name="ano" id="ano" />
              
              </div>
              <!--ano-->
              
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
              
              <!--Anexar Foto-->
              <div class="linha t7">
                
                <label>Anexar foto(max 5mb)</label>
                <input type="file" name="new_photo" id="anexofoto" />
                
              </div>
              <!--/Anexar Foto-->
              
              <!--Anexar Currículo-->
              <div class="linha t7">
                
                <label>Currículo artístico com apenas uma lauda</label>
                <textarea name="curriculo" id="curriculo" class="w100" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>

                
              </div>
              <!--/Anexar Currículo-->
              
              </div>
              <!--Outras-->
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
  $('.tel').mask("(99)9999-9999");
  $('.nasc').mask("99/99/9999");
  
  });
</script>
<!--script diversos-->

<!-- script validacao solista-->
<script type="text/javascript">

$(document).ready(function(){  
  
  $('a.menor').click(function(){
      $(this).next().toggle();
    });
    
  $('a.outras').click(function(){
      $(this).next().toggle();
    });
  
  $('#form-contato-solista input#enviar').click(function(){
    $(".msgAcerto, .msgErro").hide();
     $(".menorForm").show();
     $(".outrasinfo").show();
  });
  
  //validacao solista
  var validator = $('#form-contato-solista').validate({
      /*
      submitHandler: function(form){
          $.ajax({
            type: "POST",
            dataType: "text",
            data: $("#form-contato-solista").serialize(),                 
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
                  $("#form-contato-solista").clearForm();
                  $(".msgAcerto").show();
                  $('img#ajax-loader').hide();
              }else {
                  $(".msgErro").show();
                  $('img#ajax-loader').hide();
                }
              }
            });
          },
          */
          rules:{
            nome:{
             required: true,
             minlength: 2
            },
            sexo:{
              required: true,
            },
            rg:{
              required: true,
              minlength: 9
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
              required: true,
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
            instrumento:{
              required: true,
              minlength: 2
            },
            tempo:{
              required: true,
              minlength: 2
            },
            escola:{
              required: true,
              minlength: 2
            },
            professor:{
              required: true,
              minlength: 2
            },
            professoroutro:{
              required: true,
              minlength: 2
            },
            participacao:{
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
            captcha:{
              required: true,
              minlength: 2
            },
            regulamento:{
              required: true,
            },
            /*
            rgresp:{
              required: true,
            },
            cpfresp:{
              required: true,
            },
            nomeresp:{
              required: true,
              minlength: 2
            },
            naturalidaderesp:{
              required: true,
              minlength: 2
            },
            */
            rg:{
              required: true,
              minlength: 2
            },
            cpf:{
              required: true,
              minlength: 2
            },
            concursos:{
              required: true,
              minlength: 2
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
            escola: "Campo obrigat&oacute;rio",
            professor: "Campo obrigat&oacute;rio",
            professoroutro: "Campo obrigat&oacute;rio",
            participacao: "Campo obrigat&oacute;rio",
            comosoube: "Campo obrigat&oacute;rio",
            sugestao1: "Campo obrigat&oacute;rio",
            sugestao2: "Campo obrigat&oacute;rio",
            sugestao3: "Campo obrigat&oacute;rio",
            sugestao4: "Campo obrigat&oacute;rio",
            sugestao5: "Campo obrigat&oacute;rio",
            sugestao6: "Campo obrigat&oacute;rio",
            sugestaofinal1: "Campo obrigat&oacute;rio",
            sugestaofinal2: "Campo obrigat&oacute;rio",
            link1: "Campo obrigat&oacute;rio",
            anexofoto: "Campo obrigat&oacute;rio",
            curriculo: "Campo obrigat&oacute;rio",
            captcha: "Campo obrigat&oacute;rio",
            regulamento: "Aceite obrigat&oacute;rio",
            rgresp: "Campo obrigat&oacute;rio",
            cpfresp: "Campo obrigat&oacute;rio",
            nomeresp: "Campo obrigat&oacute;rio",
            rg: "Campo obrigat&oacute;rio",
            cpf: "Campo obrigat&oacute;rio",
            naturalidaderesp: "Campo obrigat&oacute;rio",
            concursos: "Campo obrigat&oacute;rio"
          },
          success: function(label){
            // set &nbsp; as text for IE
            
            label.html("&nbsp;").addClass("checked");
          }
      });
  });
  
  
  </script>
  <!-- script validacao solista-->