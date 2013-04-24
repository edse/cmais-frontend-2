
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
                  <h3 class="tit-pagina grid3">Processo seletivo de tutoria - Curso inglês Online</h3>
                  <p class="titu" style="margin-bottom:60px">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
                  <br />
                  <br />
                  <h4 style="color:#333; margin-bottom:10px">Lista em ordem alfabética de candidatos selecionados para participar da prova escrita</h4>
                  <!--p>Clique em seu nome para escolher o local da prova.</p-->
                  <!--p>Inscrições encerradas.</p-->
                  <div class="texto" style="margin-top:30px">
                    <p>Cidades onde serão realizadas as provas:</p>
                    <ul class="locais">
                      <li><a href="#aracatuba">Araçatuba</a></li>
                      <li><a href="#bauru">Bauru</a></li>
                      <li><a href="#campinas">Campinas</a></li>
                      <li><a href="#franca">Franca</a></li>
                      <li><a href="#santos">Santos</a></li>
                      <li><a href="#saojosedoriopreto">São José do Rio Preto</a></li>
                      <li><a href="#saojosedoscampos">São José dos Campos</a></li>
                      <li><a href="#saopaulo">São Paulo</a></li>
                      <li><a href="#sorocaba">Sorocaba</a></li>
                    </ul>
                    

                    <a name="aracatuba"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Araçatuba</h5>
                    <p><strong>Local: </strong>---<br />--- </p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Disciplina<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Ana Maria De Deus Jacob</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Anderson Cangane Pinheiro</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Ângela Maria De Oliveira Barbosa Nunes</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Aparecida Odete Thomé Borges Mariano</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Bruna Morales</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>César Paes</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Cláudia Márcia De Souza Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Danilo Jordão Zerlotti</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edilene Bachega Rodrigues De Viveiros</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Eliane Cristina Do Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Flaviana Gonçalves Viani</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jose Carlos Munarin</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Jussara De Souza Cortez</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lara Silvia Bertelli De Queiroz</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Leandro Ramiro</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Lidiane Eiko Hoshika Fogaça</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Luciana Vanessa De Almeida Buranello</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Luis Antonio Guimarães Ficoto</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Marcelo Bevilaqua</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Marcia Clara Zolin De Almeida</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Maria De Fátima Moises Tobal</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Maria Dolores Cereijido Bersani</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Maria Duarte Da Silva Kataoka</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Marilza Rosene De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Marli Francisca Rossi Souto Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Mirella Fernanda Basaglia Pietro</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Moacir Martins Gonçalez</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nadia Marques Ikeda Pereira</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Paula Cristina De Faria Veronese</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Reginaldo Inocenti</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Renata Valéria Vilela De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Ricardo Alexandre Verni</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Rosana Fernandes Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Silvania Cintra</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Silvia Cristina Meneguetti Berti</td>
                          <td>Matemática</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Sonia Marta Dantas Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr>
                          <td>Sueli Nascimento Campagnoli</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Telma Regina Fagundes Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Araçatuba</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vânia Maria Soares</td>
                          <td>Gestão Escolar</td>
                          <td>Araçatuba</td>
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
    
