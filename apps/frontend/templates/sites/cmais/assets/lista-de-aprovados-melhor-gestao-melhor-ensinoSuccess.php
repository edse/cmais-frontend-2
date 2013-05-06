
    <link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <style type="text/css">
    table a { color:#ff6633;margin-bottom:5px; display: block; } 
    table h1 { font-size:20px; margin-top: 10px; }
    table {margin-bottom:50px}
    .topo {float:right; color:#f60}
    .locais {margin-bottom:50px}
    .locais a {color:#f60}               
    </style>
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
                  <a name="topo"></a>
                  <h3 class="tit-pagina grid3">PROCESSO SELETIVO TUTORIA ONLINE PARA GESTÃO ESCOLAR,LÍNGUA PORTUGUESA, MATEMÁTICA</h3>
                  <h4>Lista de Aprovados</h4>
                  <br />
                  <br />
                  <!--p>Clique em seu nome para escolher o local da prova.</p-->
                  <!--p>Inscrições encerradas.</p-->
                  <div class="texto" style="margin-top:30px">
                    <p>Disciplinas</p>
                    <ul class="locais">
                      <li><a href="#matematica">Matemática</a></li>
                      <li><a href="#portugues">Língua Portuguesa</a></li>
                      <li><a href="#gestao">Gestão Escolar</a></li>
                    </ul>

                    <a name="matematica"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Matemática</h5>
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">RG<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Disciplina<br /></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ADRIANA ALMEIDA REIS</td>
                          <td>20653382</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ADRIANO NUNES DE PONTES</td>
                          <td>300563371</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>AGNALDO GARCIA</td>
                          <td>21385301</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>AIRLENE ANTONELLI</td>
                          <td>13676021</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ALBERTO MENEZES HOSSOE</td>
                          <td>341684399</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ALESSANDRA HERRERO GARCIA</td>
                          <td>26614103</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ALEXANDRA VILELA DEL BIANCO MAIA</td>
                          <td>6459867</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ALFONSO GOMEZ PAIVA</td>
                          <td>18692513</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>AMELIA RIBEIRO NUNES</td>
                          <td>156742408</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ANA CRISTINA LOBO SILVA DURAN</td>
                          <td>226801469</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ANA LAURA DE MIRANDA REIS LEITE</td>
                          <td>163586901</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ANA PAULA CLETO MAROLLA</td>
                          <td>258607440</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ANGELA FRADE</td>
                          <td>16861599X</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ANTONIA ZULMIRA DA SILVA</td>
                          <td>248933863</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ANTONIO MARCOS EMILIANO</td>
                          <td>262382520</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>AYDE PEREIRA SALLA</td>
                          <td>153043994</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>AZENAIDE SOUSA DA SILVA</td>
                          <td>166635297</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>BENEDITO DE MELO LONGUINI</td>
                          <td>19820987</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CARLOS ALBERTO COLLOZZO DE SOUZA</td>
                          <td>26515277X</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CASSIA ZAGANIN RISSARDI</td>
                          <td>411216181</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CESAR PAES</td>
                          <td>246334319</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CLAUDEMIR GARBELINI</td>
                          <td>21510149</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CLEA SOLANGE ZAPAROLI DOS SANTOS</td>
                          <td>15689878</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CLEONI MENDONCA DA SILVA</td>
                          <td>322389653</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CRISTHIANE GUINEVY PENACHIO</td>
                          <td>18589805</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>CRISTINA BARCELLOS DE SOUZA</td>
                          <td>262054528</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>DANIELA MIRANDA FERNANDES SANTOS</td>
                          <td>277006995</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>DARIEL BARBOSA DE MELO JR</td>
                          <td>149657031</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>DIMAS TADEU CELESTINO DOS SANTOS</td>
                          <td>161866840</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>DINORAH HASEGAWA SATO</td>
                          <td>79383129</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EDSON BASILIO AMORIM FILHO</td>
                          <td>276466561</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EDUARDO GRANADO GARCIA</td>
                          <td>292978030</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EDUARDO KAZUO IAMAGUCHI</td>
                          <td>231987286</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EDUARDO SILVESTRE MESSIAS</td>
                          <td>224212540</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ELIA GIMENEZ COSTA</td>
                          <td>20330538</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EMERSON DE SOUZA SILVA</td>
                          <td>18943132</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ERCILENE GUSSI</td>
                          <td>195234923</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ERICA BUZZO ARRUDA</td>
                          <td>196399361</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EVANDRO RICARDO DA SILVEIRA</td>
                          <td>20632575</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>EVARISTO GLORIA</td>
                          <td>203706018</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>FABIO ROBERTO DE CARVALHO</td>
                          <td>295124933</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>FATIMA ROSANGELA GEBIM</td>
                          <td>12984990</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>FERNANDO HENRIQUE NEVES</td>
                          <td>292250782</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>FRANCISCO CLAUDEMIR SIMOES</td>
                          <td>14346873</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>GILMARIO CONCEICAO RAMOS</td>
                          <td>20412231</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>GILSON ROBERTO DA SILVA</td>
                          <td>301726401</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>GLAUCIA ROQUE ROCHA PIO</td>
                          <td>267871582</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>INES CHIARELLI DIAS</td>
                          <td>6184845</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>IRAJI DE OLIVEIRA ROMEIRO</td>
                          <td>216916690</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ISAAC CEI DIAS</td>
                          <td>356593095</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JEFFERSON HELENO TSUCHIYA</td>
                          <td>256423088</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JOAO ACACIO BUSQUINI</td>
                          <td>193544507</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JOAO DA SILVA</td>
                          <td>191793875</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JONAS EDUARDO CARRASCHI</td>
                          <td>42046055</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JORGE LUIS GREGORIO COSTA</td>
                          <td>339571123</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JOSE EUGENIO GIMENEZ</td>
                          <td>114151325</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JOSE MARIA SALES JUNIOR</td>
                          <td>253402037</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JOSE RICARDO PIFFER</td>
                          <td>19607145</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>JUSSARA APARECIDA GUERREIRO</td>
                          <td>18143655</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LEANDRO RODRIGO DE OLIVEIRA</td>
                          <td>286300813</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LISANE DE MEDEIROS MARTINS</td>
                          <td>16296101</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LUCAS DA SILVA MOREIRA</td>
                          <td>43359519</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LUCIANE GIANVECCHIO GONZALES AGGIO</td>
                          <td>14610998</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LUCIANE RAMOS AMERICO GOMES</td>
                          <td>20588913</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LUCIO JOSE DA COSTA NETO</td>
                          <td>10778750</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LUIS CLAUDIO CRIVELLARI</td>
                          <td>5487934</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>LUIZ CARLOS MOURAO</td>
                          <td>110878218</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARCELO DE OLIVEIRA LEO</td>
                          <td>18601134</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARCIA CRISTINE AYACO YASSUHARA KAGAOCHI</td>
                          <td>2002911465</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARIA DOLORES CEREIJIDO BERSANI</td>
                          <td>226439495</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARIA EMILIA CAPPA</td>
                          <td>193716264</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARIA FABIANA ADAMI MANDELI</td>
                          <td>276862752</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARIZA ANTONIA MACHADO DE LIMA</td>
                          <td>17523221</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MARY SILVIA LEME STARNINI</td>
                          <td>220678820</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>MEIRIELE CRISTINA CALVO</td>
                          <td>40689047X</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>NELSON RODRIGUES</td>
                          <td>14447991</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>OSMAR ANTONIO DE LIMA</td>
                          <td>174199223</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>OSNI FERNANDES DE QUEIROZ</td>
                          <td>249924808</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>OSVALDO JOAQUIM DOS SANTOS</td>
                          <td>20389454</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>PAULA REGINA MARCHIORI DE JESUS</td>
                          <td>220779879</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>REGINA HELENA DE OLIVEIRA RODRIGUES</td>
                          <td>21889897</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>RENATA LEANDRO TERRENGUE</td>
                          <td>278145292</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>RENATA REGINA  DOS SANTOS</td>
                          <td>288093951</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>RICARDO ALEXANDRE VERNI</td>
                          <td>246307481</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>RICARDO GAVIOLI DE OLIVEIRA</td>
                          <td>246158487</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ROBSON ROSSI</td>
                          <td>257511362</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ROSELI GOMES DE ARAUJO DA SILVA</td>
                          <td>183514038</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>ROSEMEIRE LEPINSKI</td>
                          <td>17556118</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>SONIA DE CASSIA SANTOS PRADO</td>
                          <td>268924120</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>TACITA ANSANELLO RAMOS</td>
                          <td>43713961</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>TATIANE DIAS SERRALHEIRO</td>
                          <td>294395301</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>TERESINHA SILVA MOREIRA</td>
                          <td>19300060</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>VANESSA DE PAULA BRASIL</td>
                          <td>10002711</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>VITORIA RAQUILA PAPADOPOULOS KOKI</td>
                          <td>157653407</td>
                          <td>MATEMATICA</td>
                        </tr>
                        <tr>
                          <td>WILIANS LEITE DA FONSECA</td>
                          <td>309939136</td>
                          <td>MATEMATICA</td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <a name="portugues"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Língua Portuguesa</h5>

                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">RG<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Disciplina<br /></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>ADAO JOSE LOPES</td>
                          <td>18014665</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ADEMILDE FERREIRA DE SOUZA</td>
                          <td>17714104</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ADRIANA ANDRADE MELLO</td>
                          <td>20336165</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ADRIANA DA SILVA GUERRIERI</td>
                          <td>226612314</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ADRIANA LEMES CATHARINO</td>
                          <td>255816418</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ALINE APARECIDA DE SOUZA GOMES</td>
                          <td>323765269</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ANA PAULA FALSETTI CONTE</td>
                          <td>20049560</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ANDERSON CUNHA</td>
                          <td>248853314</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ANICEIA CORDEIRO BARBOSA KUSSUMOTO</td>
                          <td>13137674</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ARISLANE GUTIERREZ GOMES</td>
                          <td>222606782</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>CATARINA REIS MATOS DA CRUZ</td>
                          <td>216478893</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>CINTIA BOTON LOPES DE QUEIROZ DA SILVA</td>
                          <td>425716867</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>CLAUDIA REGINA BACHI</td>
                          <td>19997312</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>CRISTIANE APARECIDA NUNES</td>
                          <td>174817307</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>DANILO JORDAO ZERLOTTI</td>
                          <td>324698951</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>DEBORA LIMA</td>
                          <td>453446401</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>DEBORAH CRISTINA SIMOES BALESTRINI</td>
                          <td>175951342</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>DIMITRA DRAGASSAKIS</td>
                          <td>186548175</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>EDILENE BACHEGA RODRIGUES DE VIVEIROS</td>
                          <td>195683134</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>EDNA REGIO DE CASTRO FRANCA</td>
                          <td>149277210</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>EDNELSON ZORZINI CRUZ</td>
                          <td>18914136</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>EDSON ALVES DOS SANTOS</td>
                          <td>189672079</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ELIANA MACIEL CACERO</td>
                          <td>238289448</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ELIANA RAMON CREPALDI ESPER</td>
                          <td>58382987</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ELIANE CRISTINA DO NASCIMENTO</td>
                          <td>237135759</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ELIZABETE CRISTINA DE BRITO</td>
                          <td>274014142</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ELLEN RODE LOPES SANTANA</td>
                          <td>321114954</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ELOIZA MARTINS PRIMO</td>
                          <td>24334756</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FABIOLA MACIEL SALDAO</td>
                          <td>432968660</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FABRICIO CRISTIAN DE PROENCA</td>
                          <td>288331084</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FATIMA LUCY BIZIGATTO</td>
                          <td>11988901</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FERNANDA AGUIAR CARDOZO</td>
                          <td>163838495</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FLAVIA DA SILVA</td>
                          <td>292773201</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FLAVIANA GONCALVES VIANI</td>
                          <td>268122350</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>FRANCISCA APARECIDA SILVA CRUZ</td>
                          <td>252761558</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>GERALDA HELENICE AUGUSTA ROCHA</td>
                          <td>3655375</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>GILBERTA ALESSANDRA REDIGOLO</td>
                          <td>327006079</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>GILDETE CONCEICAO LIMA VEIGA</td>
                          <td>6925027</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>GLAUCINEIDE DE MENEZES GARCEZ</td>
                          <td>230713439</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>IDA REGINA VOLPATO MASSARINI</td>
                          <td>19241741</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>IDE MORAES DOS SANTOS</td>
                          <td>143590583</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>IVONE ISLAS DA SILVA</td>
                          <td>4433891</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>JEANNY MEIRY SOMBRA SILVA</td>
                          <td>270234858</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>JOYCE FERREIRA NUNES</td>
                          <td>268068124</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>JUCIRLEY CARDOSO DE JESUS</td>
                          <td>44227287</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>JULIO KENGO WATANABE</td>
                          <td>276624658</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>JUSSARA MARIA LOVATO</td>
                          <td>49961640</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>KAREN MANCHINI DA SILVA</td>
                          <td>278713610</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>KATIA VITORIAN GELLERS</td>
                          <td>379445852</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>LUCIA HELENA CALDERARO</td>
                          <td>187305183</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>LUCIANE IDALGO GONCALVES GOBBATTO</td>
                          <td>243894247</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>LUIZ EDUARDO DIVINO DA FONSECA</td>
                          <td>320266242</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>LUZIA APARECIDA SALMASO</td>
                          <td>94846601</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARCIA DI GIAIMO MECCA</td>
                          <td>7812049</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARCIA MARIA CASSIN DE LUCENA</td>
                          <td>15539093</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARCIA SZILAGYI MARINHO</td>
                          <td>331743346</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARCIO JEAN FIALHO DE SOUSA</td>
                          <td>326363324</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARCOS DE MOURA ALBERTIM</td>
                          <td>27918642</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA APARECIDA RAMOS DE MATOS</td>
                          <td>115319359</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA CELINA MALDONADO ROSCHEL</td>
                          <td>95214483</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA DE FATIMA BORGES DA SILVA</td>
                          <td>355791353</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA DO CARMO ZANARO DELALANA</td>
                          <td>253655729</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA DO ROSARIO MARTINS MANTOVANI</td>
                          <td>434623854</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA EMILIADELGADO</td>
                          <td>302461759</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA JOSE DE MIRANDA NASCIMENTO</td>
                          <td>14178461</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARIA VIRGINIA ROSSETO</td>
                          <td>16817889</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARLI DE OLIVEIRA GERALDO</td>
                          <td>265319316</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MARTHA WASSIF SALLOUME GARCIA</td>
                          <td>17138841</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>MONICA SILVA DE LIMA</td>
                          <td>15832115</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>NANCI ABRAO DE MELO</td>
                          <td>20591293</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>NEUSA MARIA PAIOLA DE SOUZA</td>
                          <td>139122308</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>PATRICIA FERNANDA MORANDE</td>
                          <td>247594738</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>PATRICIA GARBELLINI</td>
                          <td>18309719</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>PATRICIA MARCELA POLIDORO</td>
                          <td>278418673</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>PAULO ROGERIO DA SILVA AMADO</td>
                          <td>155152828</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>RAFAEL TRIGO VEIGA</td>
                          <td>181420338</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>RITA DE CASSIA DE ARAUJO FARIA</td>
                          <td>233289264</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>RITA ISABEL MARCICANO ZINI</td>
                          <td>17941695</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ROSANA FERNANDES COSTA</td>
                          <td>18890542</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ROSANA ROCHA FERREIRA DA MOTA</td>
                          <td>7228607</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ROSELI DE OLIVEIRA GARCIA</td>
                          <td>249445736</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ROSICLER APARECIDA BATISTA DE SOUZA</td>
                          <td>245046744</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>ROZELI FRASCA BUENO ALVES</td>
                          <td>3982668</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>SERGIO BUZELIN DA COSTA</td>
                          <td>15770824</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>SILVANA TAVARES NAGEM</td>
                          <td>14255416</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>SILVANA ZAJAC</td>
                          <td>2645042</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>SORAIA SANCHEZ MACHADO</td>
                          <td>175824010</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>SUZANA APARECIDA ALVES PEREIRA</td>
                          <td>338001475</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>TAMAR NALINE SHUMISKI</td>
                          <td>10791369</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>TANIA CRISTINA CARAMIGO</td>
                          <td>243924987</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>TANIA SOUZA DE LUNA</td>
                          <td>16202670</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>VIVIAN DE OLIVEIRA</td>
                          <td>282157050</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>YOKO ROSANA DE MATOS</td>
                          <td>229369972</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                        <tr>
                          <td>YONE PAEZANI SANCHES</td>
                          <td>134354382</td>
                          <td>LINGUA PORTUGUESA</td>
                        </tr>
                      </tbody>
                    </table>

                    <a name="gestao"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Gestão Escolar</h5>

                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">RG<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Disciplina<br /></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>SONIA MARIA BERTOZZI BERNARDO</td>
                          <td>11691740</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA PAULA FERREIRA</td>
                          <td>176142708</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ANA CELIA LLATA CARRERA BARBIERO</td>
                          <td>18352699</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA BEATRIZ SALLES DE OLIVEIRA ANDRADE</td>
                          <td>20436379</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JANETE NASSAR</td>
                          <td>4696921</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA LUCIA LANZA</td>
                          <td>77027127</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA ANGELICA BATISTA</td>
                          <td>11889181</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MIRNA ELISA BONAZZI</td>
                          <td>16373316</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>VAGNER MANAF</td>
                          <td>21597167</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>FATIMA APARECIDA DIAS VLACH</td>
                          <td>6174933</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ROSELI RICCE BORTOLETTO</td>
                          <td>174867256</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ANA FLAVIA CAPPELLANO</td>
                          <td>167686896</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA GONCALVES DA LUZ SOUZA</td>
                          <td>252237079</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JUSTINA DO CEU MARTINS RUANO FELGUEIRAS</td>
                          <td>5504556</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>NEYLIANE ROCHA DA SILVA DE SOUZA</td>
                          <td>182113607</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JULIANA ROSSETTI</td>
                          <td>24756963</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>CELIA REGINA DE LARA</td>
                          <td>99823184</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LEILA LEANE LOPES LEAL</td>
                          <td>33166869</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA DO CARMO GOES DA COSTA</td>
                          <td>15925515</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>BERNADETE APARECIDA PEREIRA GODOI</td>
                          <td>16684390</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIDIA VICENTINA DE JESUS RIBEIRO</td>
                          <td>152689047</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LIA MARA PEGORETTI</td>
                          <td>17666870</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ANA ROSARIA CAMPOS</td>
                          <td>21918756</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SUELI THODOROF PEREIRA</td>
                          <td>13635124</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>CLAUDIA ELEUTERIO FEDEL GENTIL</td>
                          <td>12276147</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARA SILVIA BIOTO</td>
                          <td>125726946</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SELMA REGINA GOMES MANZATTO</td>
                          <td>15545289</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIANA DA SILVA SAVIOLI</td>
                          <td>169678520</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LUCIENE MANZOLI DE ALBUQUERQUE RAMOS</td>
                          <td>19589198</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LUCILIA APARECIDA DE FREITAS COSTA</td>
                          <td>139494637</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>VALERIA BITENCOURT LEITE MARASSI</td>
                          <td>203362652</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JURANDIR MONTEIRO DE SOUZA</td>
                          <td>4619504</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>IRACI APARECIDA TRINDADE</td>
                          <td>141251281</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SUELY AUGUSTO PEREIRA</td>
                          <td>51323308</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>IRACI CANGANE ZERBETTO</td>
                          <td>7396876</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA APARECIDA FERRAO CLAUDINO</td>
                          <td>10519815</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARCIA DE CAMPOS BARBOSA</td>
                          <td>11506460</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARCIA CRISTINA PASSOS FERREIRA</td>
                          <td>81800526</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>APARECIDA DE FATIMA AVANCO SOUZA</td>
                          <td>13663434</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>REGINA APARECIDA DA SILVA SOARES</td>
                          <td>164115183</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIANA MARA SIMAO IERCK</td>
                          <td>13120494</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIANI APARECIDA MANA</td>
                          <td>159610102</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>CARLA CERIANI</td>
                          <td>185402367</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ALENICE MARQUES MENDES</td>
                          <td>20019688</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>TANIA CRISTINA MORAES DE QUEIROZ</td>
                          <td>209880478</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>VANILDA APARECIDA PEREIRA DA SILVA CLEMENTE</td>
                          <td>259747142</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>PERLA PAULO PIRES</td>
                          <td>284387423</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>EDINEIA REMOLLI PADILHA BOTERO</td>
                          <td>10485137</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ANGELA MARIA TONIOLLO SARNI</td>
                          <td>126894401</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARCIA ELISABETE SCARASSATI VICENTIN</td>
                          <td>161288984</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>RITA DE CASSIA GALVAO DE OLIVEIRA</td>
                          <td>16360182</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARCELA ALEIXO DA SILVA ZAPPAROLLI</td>
                          <td>222754795</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>PATRICIA NORA GUARIZO TOLLOTO</td>
                          <td>234617834</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA JOSE DO NASCIMENTO</td>
                          <td>125735480</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIANE DE CASTRO FABRINI</td>
                          <td>76746872</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARTA MARIA SILVEIRA BERTONCINI DE ALMEIDA</td>
                          <td>9100532</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>CLARISSE FLOREZ CHAVES</td>
                          <td>58137308</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JOSE CARLOS MUNARIN</td>
                          <td>17645085</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA APARECIDA DE OLIVEIRA LEME</td>
                          <td>19387151</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>CHELSEA MARIA DE CAMPOS MARTINS</td>
                          <td>15868350</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ROSELAINE BATALHA SILVA</td>
                          <td>181999857</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA DA GRACA ZUCCHI MORAES</td>
                          <td>55412191</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SEBASTIANA TEODORO BARBOSA</td>
                          <td>77950057</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>EMILIA APARECIDA BERTAPELI DE CARVALHO</td>
                          <td>11076979</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARCIO AUGUSTO BUGNI</td>
                          <td>185453776</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>VANIA MARIA SOARES</td>
                          <td>17362985</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LILIAN PINO ARROYO DO VALLE</td>
                          <td>20474636</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARLI CONFORTINI SILVA DE ALMEIDA BARROS</td>
                          <td>6971455</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SILVIA MARIA DE BARROS GANDARA</td>
                          <td>12311037</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>CATARINA DA PENHA DE ALBUQUERQUE QUADROS ALTIERI</td>
                          <td>198055195</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LUCIANA BIANCHINI LOPES PEREIRA</td>
                          <td>169342165</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>OLINDA JESUS DA SILVA SOUZA</td>
                          <td>60113327</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARINA JUNQUEIRA</td>
                          <td>5127968</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ROSANA MORILHA DE OLIVEIRA SEVILHANO</td>
                          <td>135027858</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>REGINA APARECIDA PADILHA MONCINHATTO BOLZAN</td>
                          <td>16452293</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>INGRID MARIA HEDJAZI</td>
                          <td>18504156</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ANTONIO AVELINO VIANA</td>
                          <td>200974567</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIDA REJANE BUDISKI HERCULANI</td>
                          <td>19632351</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ANGELO ALARIO PIRES JUNIOR</td>
                          <td>194840396</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SILVIO CASSIO FLORENCIO DOS ANJOS</td>
                          <td>194791592</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ARACI NUNES CAMARGO</td>
                          <td>4751146</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>LILIAN ROSE GUSMAN</td>
                          <td>7405541</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA CLAUDIA BELLUZZO MAIA</td>
                          <td>12945087</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>IRMES MARY MORENO ROQUE MATTARA</td>
                          <td>16449738</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ELIANA WAITEMAN MANOEL</td>
                          <td>119283116</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>TANIA LUZIA DEMENIS</td>
                          <td>15182411</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JOAO CARLOS RODRIGUES HORTA</td>
                          <td>18226916</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARCIA CLARA ZOLIN DE ALMEIDA</td>
                          <td>217274572</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ADRIANA JULIANO MENDES DE CAMPOS</td>
                          <td>18714048</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>JOSETE GUARIENTO CARVELLI</td>
                          <td>93476954</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>SUDONITA TAVEIRA ALVARENGA WING</td>
                          <td>1205411</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARIA LUCIA SOLER</td>
                          <td>13691083</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>ROSEMEIRE PANEGASSI DI IORIO</td>
                          <td>16412196</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>EDNA MARGARIDA RODRIGUES MAZETO</td>
                          <td>186040076</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                        <tr>
                          <td>MARLENE APARECIDA BARCHI DIB</td>
                          <td>14886791</td>
                          <td>GESTAO ESCOLAR</td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                  
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
    
