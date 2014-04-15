
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
            <script>
              function getURLParameter(name){
                return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
              }
              
              if(getURLParameter(name)=="success"){
                
                success = '<!--Mensagem Acerto-->';
                success += '<div class="msgAcerto">';
                success += '  <span class="alerta"></span>';
                success += '  <div class="boxMsg">';
                success += '    <p class="aviso">Mensagem enviada com sucesso!</p>';
                success += '     <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>';
                success += '  </div>';
                success += '  <hr />';
                success += '</div>';
                success += '<!--/Mensagem Acerto-->';
                
                $('.contato').append(success);
                  
              }else if(getURLParameter(name)=="error"){
                
                error = '<!--Mensagem Erro-->';
                error += '<div class="msgErro">';
                error += '  <span class="alerta"></span>';
                error += '  <div class="boxMsg">';
                error += '    <p class="aviso">Sua mensagem não pode ser enviada.</p>';
                error += '    <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>';
                error += '  </div>';
                error += ' <hr />';
                error += '</div>';
                error += '<!--/Mensagem Erro-->';
                
                $('.contato').append(error);
                
              }
            </script>
            
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
                    <input type="text" name="obra1" data-default="" value="Ex.: Partita No. 3 em Mi Maior - BWV: 1006" id="obra-1" />
                  </div>
                               
                  <div class="linha t5" >
                    <label>Compositor</label><br/>
                    <input type="text" name="compositor1" data-default="" value="Ex.: J.S. Bach" id="compositor-1" />
                  </div>
                 
                  <div class="linha t5">
                    <label>Movimentos</label><br/>
                    <input type="text" name="movimentos1" data-default="" value="Ex.: IV - Minueto" id="movimentos-1" />
                  </div>
                  
                  <div class="linha t2">  
                    <label>Duração</label><br/>
                    <input type="text" name="duracao1" data-default="" value="Ex.: 4:07" id="duracao-1" />
                  </div>
                  
                  <div class="linha t5">  
                    <label>Link</label><br/>
                    <input type="text" name="link1" id="link1" />
                  </div>
                </div>
                
                <a class="t7 titulo laranja" >2ª Opção</a>

                  <div class="linha t5">  
                    <label>Nome da Obra</label><br/>
                    <input type="text" name="obra2" data-default="" value="Ex.: Partita No. 3 em Mi Maior - BWV: 1006" id="obra-2" />
                  </div>
                               
                  <div class="linha t5" >
                    <label>Compositor</label><br/>
                    <input type="text" name="compositor2" data-default="" value="Ex.: J.S. Bach" id="compositor-2" />
                  </div>
                 
                  <div class="linha t5">
                    <label>Movimentos</label><br/>
                    <input type="text" name="movimentos2" data-default="" value="Ex.: IV - Minueto" id="movimentos-2" />
                  </div>
                  
                  <div class="linha t2">  
                    <label>Duração</label><br/>
                    <input type="text" name="duracao2" data-default="" value="Ex.: 4:07" id="duracao-2" />
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
                <p>A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, doravante Fundação Padre Anchieta, através de sua emissora de televisão TV Cultura – Canal 2, promove o PRELÚDIO 2014 - concurso para solistas e cantores de até 28 anos - que será regido por este regulamento, cujas disposições declaram os candidatos, após a devida leitura, aceitar por ocasião da submissão de sua respectiva ficha de inscrição. </p>

<p>I - DOS OBJETIVOS E DOS REQUISITOS: </p>

<p>O presente Concurso tem a finalidade de incentivar jovens instrumentistas e cantores.</p>

<p>Os candidatos deverão ser brasileiros ou estrangeiros residentes no país e deverão ter até 28 (vinte e oito) anos de idade completos até a data de inscrição do Concurso. </p>

<p>Eventuais faltas e atrasos do Candidato nas fases do Concurso, poderão ser considerados pela Fundação Padre Anchieta como motivo justo para desclassificação do Concurso, a seu exclusivo critério.</p>

<p>O candidato que obtiver a melhor colocação ao longo das provas eliminatórias, semifinais e final será premiado de acordo com as normas do presente regulamento. </p>


<p>II - DO CRONOGRAMA: </p>

<p>1. Após a seleção, os candidatos se apresentarão com orquestra em 6 (seis) eliminatórias, 2 (duas) semifinais e uma final na Sala SP. </p>

<p>2. As datas das apresentações públicas que compõem o Concurso serão definidas e previamente divulgadas pela Comissão Organizadora. Os ensaios e a realização das provas ocorrerão entre os meses de maio e dezembro de 2014. </p>

<p>3.A premiação será concedida ao vencedor quando da prova final do Concurso, em que participarão os quatro selecionados nas provas semifinais.</p> 

<p>4.O candidato responderá pela veracidade das informações enviadas. O fornecimento de informações falsas, imprecisas ou dúbias, ou inautenticidade do material gravado ou de imagem, resultará na desclassificação sumária e inapelável do candidato. A não observância de qualquer dos requisitos estipulados neste regulamento acarretará o cancelamento automático da inscrição, sem apreciação do trabalho.</p>

<p>.5.A inscrição do candidato para participar do Concurso implica na aceitação de todos os itens deste regulamento. </p>


<p>III. DO PROCESSO SELETIVO E ELIMINATÓRIO </p>

<p>1. Serão escolhidos 24 (vinte e quatro) candidatos finalistas. Em cada programa da etapa classificatória concorrerão até 4 (quatro) participantes, cuja ordem de apresentação obedecerá a critérios da direção do programa. </p>

<p.2. Em todas as provas os candidatos serão acompanhados por orquestra.</p>

<p.3. Pelo julgamento inapelável e irrecorrível de Comissão Julgadora designada pela Fundação Padre Anchieta, será classificado um candidato por eliminatória, totalizando seis semifinalistas. Para as duas semifinais participarão oito candidatos: seis deles escolhidos pelos jurados durante as eliminatórias e outros dois selecionados através de repescagem dentre os que não venceram a fase eliminatória. Dos oito semifinalistas sairão quatro candidatos (dois em cada semifinal). Na fase Final dos quatro candidatos finalistas sairá apenas um vencedor. </p>

<p>4. O dia e a ordem de apresentação dos participantes classificados para as provas eliminatórias, semifinais e final serão estabelecidos pela Comissão Organizadora do programa. </p>

<p>5. O concorrente inscrito que não respeitar o presente Regulamento Geral do Concurso ou provocar em qualquer fase atos que possam prejudicar seu andamento poderá, a critério da Comissão Organizadora do programa, ser desclassificado em caráter inapelável e irrecorrível. </p>

<p>IV. DA PREMIAÇÃO </p>

<p>Ao vencedor final, que será escolhido na etapa final do Concurso, será concedido um prêmio não passível de transferência para terceiros, qual seja:
<br>- uma bolsa de estudos de alemão na Alemanha com validade até dezembro de 2015, oferecida pelo Instituto Goethe, que inclui as despesas de transporte aéreo e acomodação.</p>
<p>Não será permitida a troca do prêmio por qualquer outro bem. Caso o Participante Ganhador venha a ter qualquer problema que o impeça de receber o prêmio, não será possível a reclamação de qualquer indenização ou compensação pela perda do prêmio.</p>

<p>V. DAS GRAVAÇÕES E DIREITOS DE IMAGEM, NOME, VOZ E INTERPRETAÇÃO </p>

<p>1. As apresentações do Concurso serão transmitidas pela TV Cultura, emissora da Fundação Padre Anchieta e poderão também ser videogravadas, audiogravadas, filmadas ou fotografadas por quem esta indicar para posterior reprodução e a seu critério. </p>

<p>2. Ficam cientes os candidatos escolhidos que serão objeto de entrevistas e reportagens a serem realizadas em suas casas, escolas e comunidade para exibição em TV aberta, através da TV Cultura, parceiras, afiliadas, retransmissoras ou emissoras a ela conveniadas, independentemente do número de exibições realizadas ou de território de abrangência e que a adesão ao presente concurso implicará em expressa e automática autorização de captação, divulgação e reprodução de sua imagem, nome, voz, interpretação e demais elementos de personalidade. </p>

<p>3. O(s) Candidato(s) individual e coletivamente autoriza(m) à Fundação gratuitamente, em caráter exclusivo, irrevogável, irretratável, definitivo e universal a divulgação e o uso de seu(s) nome(s), imagem(ns) e voz(es) e de suas interpretações nos Programas por ela produzidos e exibidos e em quaisquer obras audiovisuais por ela produzidas, podendo a Fundação, portanto, a seu exclusivo critério, diretamente ou através de terceiros por ela autorizados, utilizar as referidas obras audiovisuais livremente, bem como seus extratos, trechos ou partes, podendo, exemplificativamente, adaptá-las para fins de produção de obras audiovisuais novas, obras audiovisuais para fins de exibição em circuito cinematográfico, obras literárias, peças teatrais e/ou peças publicitárias, utilizá-las, para produção de matéria promocional em qualquer tipo de mídia, inclusive impressa, seja para fins de divulgação das obras audiovisuais, para a composição de qualquer produto ligado às mesmas (tais como, mas não limitados a capas de CD, DVD, Blu-Ray, “homevideo”, DAT, entre outros), assim como produção do “making of” das obras audiovisuais; fixá-las em qualquer tipo de suporte material, tais como películas cinematográficas de qualquer bitola, CD (“compact disc”), CD ROM, CD-I (“compact-disc” interativo), “homevideo”, DAT (“digital audio tape”), DVD (“digital vídeo disc”), Blu-ray e suportes de computação gráfica em geral, ou armazená-las em banco de dados, exibi-las através de projeção em tela em casa de frequência coletiva ou em locais públicos, com ou sem ingresso pago, transmiti-la via rádio e/ou televisão de qualquer espécie (televisão aberta ou televisão por assinatura, através de todas as formas de transporte de sinal existentes, exemplificativamente UHF (Ultra High Frequency), VHF (Very High Frequency), cabo, MMDS (Serviços de Distribuição Multiponto Multicanal), IPTV e satélite, bem como independentemente da modalidade de comercialização empregada, incluindo “pay tv”, “pay per view”, “near vídeo on demand” ou “vídeo on demand”, independentemente das características e atributos do sistema de distribuição, abrangendo plataformas analógicas ou digitais, com atributos de interatividade, ou não); comercializá-las ou alugá-las ao público em qualquer suporte material existente, promover ações de merchandising ou veicular propaganda, bem como desenvolver qualquer atividade de licenciamento de produtos e/ou serviços derivados das obras audiovisuais, disseminá-los através da Internet e/ou telefonia, fixa e/ou móvel, circuito interno, ceder os direitos autorais sobre as obras audiovisuais a terceiros, para qualquer espécie de utilização, ou ainda dar-lhes qualquer outra utilização que proporcione à Fundação Padre Anchieta qualquer espécie de vantagem econômica. </p>
  <p>4. Nenhuma dessas utilizações previstas anteriormente tem limitação de tempo ou de número de vezes, podendo ocorrer no Brasil e/ou no exterior, sem que seja devido ao Candidato qualquer remuneração ou compensação.</p> 
 <p>5. A autorização ora concedida pelo Candidato para a Fundação Padre Anchieta entra em vigor no ato da inscrição do Candidato, e assim perdurará por todo o prazo de proteção da obra audiovisual. Entende-se por prazo de proteção legal da obra aquele estabelecido na Lei 9.610/98. </p>
 <p>6. Todo o material enviado à Fundação Padre Anchieta não será devolvido. </p>

<p>7. A Fundação Padre Anchieta fica autorizada a executar livremente a montagem do Concurso e do Programa, proceder aos cortes e às fixações e reproduções necessárias.</p>


<p>VI. CONSIDERAÇÕES FINAIS </p>

<p>A Fundação Padre Anchieta reserva para si o direito de modificar, alterar e/ou cancelar qualquer item do presente Regulamento e a dar divulgação ao mesmo da maneira que julgar conveniente. </p>

<p>Os casos omissos por este Regulamento serão decididos pela Comissão Organizadora do Concurso. </p>

<p>A Fundação Padre Anchieta poderá, a seu exclusivo critério e a qualquer tempo, suspender e/ou cancelar definitivamente o Concurso, sem que seja devido ao Candidato qualquer compensação.</p>
<p>O presente Regulamento será regido e interpretado pelas leis brasileiras, ficando eleito o Foro Central de São Paulo, para dirimir eventuais dúvidas oriundas do presente, com renúncia de qualquer outro, por mais privilegiado que venha a ser.</p>


<p>São Paulo, 15 de abril de 2014.</p>                      
                
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