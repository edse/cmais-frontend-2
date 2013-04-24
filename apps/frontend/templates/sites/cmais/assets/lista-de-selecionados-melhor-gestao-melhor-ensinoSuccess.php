
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
                  <p class="titu" style="margin-bottom:60px">2ª ETAPA – Lista em ordem alfabética dos aprovados para realização das provas</p>
                  <br />
                  <br />
                  <!--p>Clique em seu nome para escolher o local da prova.</p-->
                  <!--p>Inscrições encerradas.</p-->
                  <div class="texto" style="margin-top:30px">
                    <p>Cidades onde serão realizadas as provas:</p>
                    <ul class="locais">
                      <li><a href="#aracatuba">Araçatuba</a></li>
                      <li><a href="#bauru">Bauru</a></li>
                      <li><a href="#campinas">Campinas</a></li>
                      <li><a href="#franca">Franca</a></li>
                      <li><a href="#presidenteprudente">Presidente Prudente</a></li>
                      <li><a href="#santos">Santos</a></li>
                      <li><a href="#saojosedoriopreto">São José do Rio Preto</a></li>
                      <li><a href="#saojosedoscampos">São José dos Campos</a></li>
                      <li><a href="#saopaulo">São Paulo</a></li>
                      <li><a href="#sorocaba">Sorocaba</a></li>
                    </ul>

                    <a name="aracatuba"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Araçatuba</h5>
                    <p><strong>Local: UNIP</strong> Av. Baguaçu, 1939 - Jardim Alvorada - Araçatuba - SP - CEP 16018-555</p> 
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
                    

                    <a name="bauru"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Bauru</h5>
                    <p><strong>Local: UNIP</strong> Rua Luiz Levorato, 2-140 - Chácaras Bauruenses Rod. Marechal Rondon, km 335 - Bauru - SP - CEP 17048-290</p> 
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
                          <td>Adelia Maria Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Adriana Aparecida Domingues Ferreira Alonso</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Adriana Maria De Mendonça</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Adriano Emerick Moreira</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Agnaldo Garcia</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ana Beatris Massola Garrido</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ana Célia Llata Carrera Barbiero</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Jacinto Beraldo</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Ballista Borges </td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ana Rosária Campos</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Andrea Belli</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Aniceia Cordeiro Barbosa Kussumoto</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Aparecido De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ausilene Alves Leal</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Carlos Augusto Vicente Quagliato</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Carlos Eduardo Dos Santos Zago</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Claudio Roberto Rodrigues Junior</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Clemári Marques Ribeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Cristiane Vinholes Jacomelli</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Cristina Aparecida Pereira Leonel</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daniel Fernando Francisco De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Daniela Miranda Fernandes Santos</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Daniele Pires Baptista Marques</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Darwin Ianuskiewtz</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Debora Aparecida Verde De Andrade</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Débora Scopim Da Fonseca</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Denise Aparecida Gomes</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Dorival Ricardo</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edson Machado</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Eduardo Silvestre Messias</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina Camargo Fragnam</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Elen Patricia Alonso Sahm</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Eloiza Martins Primo</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Érika Christina Kohle</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ewerthon Daniel Vaz</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Franco De Oliveira</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Fabiana Mendes Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Fábio Alessandro Molon</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Fabio Roberto De Carvalho</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Fani Aparecida Leite Nunes </td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Francisco Claudemir Simões</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Frederico Helou Doca De Andrade</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Fresia Graciela Elvira Venegas Herrera</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Geverson Ribeiro Machi</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Gilcelene Janaina Rodrigues</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Gislaine Aparecida Dos Santos Fonseca</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Heloisa Antonio Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Henriette Scarabotto Padovani De Moraes</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Janaina Maria Lopes Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Janete Nassar</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Jonas Eduardo Carraschi</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>José Ângelo Thimóteo Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Judite Della Torre Jayme</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Juliana Leite Boranelli</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Juliane Fernanda Moreno</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Julio César Portela Correa</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Jussara Aparecida Guerreiro</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Leila Leane Lopes Leal</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Letícia Maria De Barros Lima Viviani</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Lucas Da Silva Moreira</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Luciana De Paula Diniz</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Luciana Nazaré Constantino</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Luciana Sanches Do Nascimento</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Luciane Gianvecchio Gonzales Aggio</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Lucineide Alves Lima</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Luiz Eduardo Divino Da Fonseca</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Luzia De Fátima Turato</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magali Aparecida Leite Penteado Chaguri</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Mara  Cristina Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Marcela Sampaio De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Marcelino Jose Alves Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Marcia Da Silva Castro</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Márcia Regina Xavier Gardenal</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Marco Antonio Nuvolari</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Margaret Maria Nogueira</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Beatriz De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Da Silva Araújo Zuccoli</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Do Socorro  Delfiol Nogueira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Jose Polli Ferrreira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Josiléia Da Silva Bergamo Almeida</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Lucia Mendonça Costa</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Márcia  Zamprônio Pedroso</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Regina Pereira De Araujo</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maria Thereza Camargo Cardoso</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Marisa Salina Cassalate</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maristela Barbara Rodrigues De Lima</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Maristela Gallo Romanini</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Marta Lucia Curioni Janzantti</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Meiriele Cristina Calvo</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Milene Cezar Da Silva Barros</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Natalia Da Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Neusa Maria Paiola De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Norival Perez</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patricia Fernanda Morande</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Patrícia Garbellini</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Regina Helena De Oliveira Rodrigues</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Rejane Domingues Garcia</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Renata Da Silva Ferreira Asbahr</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Ricardo Gavioli De Oliveira</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Rivaldo Luiz Camargo</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Roberio Eduardo Fiani</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Rosana Ramos Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Rosilene Albuquerque De Castro</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Samira Rosane Dealis Gabriel</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sandra De Cerqueira Cesar</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sandra De Fatima Tavares Rodrigues Tonon</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Andrade De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sara Oliveira Santos Paschoal</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sebastiana Teodoro Barbosa</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Silvana Regina Da Cruz Bueno Ribeiro Branco</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Silvia Maria De Barros Gandara</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Silvia Terezinha Innocenti Rossitto</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sonia Maria Bertozzi Bernardo</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Sônia Maria Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Soraya Aparecida De Azevedo Kellner</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tânia Cristina Moraes De Queiroz</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Tatiana Somenzari</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vanessa De Paula Brasil</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Vânia Maria Carradore</td>
                          <td>Gestão Escolar</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Vivian De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Bauru</td>
                        </tr>
                        <tr>
                          <td>Viviane Aparecida Fontes</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Wilians Leite Da Fonseca</td>
                          <td>Matemática</td>
                          <td>Bauru</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="campinas"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Campinas</h5>
                    <p><strong>Local: UNIP CAMPINAS CAMPUS II</strong> Av. Comendador Enzo Ferrari, 280 – Swift - Campinas – SP - CEP 13045-770</p> 
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
                          <td>Airton Clementino</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Alan Lopes Da Fonseca</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Alenice Marques Mendes</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Alexandre José Vieira</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Alisson Ferreira Simões Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ana Amélia Calazans Da Rosa</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ana Cleide Lima Barros</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ana Cristina Fermino</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Dos Santos Martins</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ana Raquel Geremias De Assumpção</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Anderson Brisola De Matos</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>ndrea Maria Marcelino Riccetto</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Andrea Righeto</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Andréia Aléssio Apolinário</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Andreia Aparecida Alves</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Andressa De Sousa Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ane Caroline De Souza Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Angelina Garcia Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Anisio Da Costa</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Antonio Avelino Viana</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Aparecida Da Conceição Moraes Geremias</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Arislane Gutierrez Gomes</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Aurecy De Fátima Da Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Aydê Pereira Salla</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Beatriz De Cassia Moraes Bragaia</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Benedito De Melo Longuini</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Carla Valeria Farias Lima</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Carla Vizú Tavares</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Carlos Alberto Collozzo De Souza</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Carlos Eduardo Alves Guimarães Fontana</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Carlos Roberto Dezani</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Cássia Zaganin Rissardi</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Celia Ataide Dorssi</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Cláudia De Jesus Abreu Feitoza</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Claudinei Zagui Pareschi</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Cléa Solange Zaparoli Dos Santos</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Cristiane Hermínia Panisa</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Cristina Valeriomartins</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daniela Cristina Botti Hayashida </td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Daniela Isabel Taipeiro</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Daniela Souza Maciel</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Débora Pereira Bueno Martinelle</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Diana Zwi Buratini</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Dickson Vasconcelos Santos</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Dioneia Biraia Vicentini</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edineia Aparecida Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Edna Maria Abuchain</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Elaine Aparecida Campideli Hoyos</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Elaine Calciolari Teixeira Monteiro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Eli Junior Santiago De Limea</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Eliana Da Silva Savioli</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Eliana De F S M Vidotto</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Elizeth Maria De Andrade Silva</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Emília Aparecida Bertapeli De Carvalho</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Eneida Fátima Marques</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Eridaine Tavares Claro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>rika Jacqueline Da Silveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Esther Ribeiro Lino Favero De Souza </td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Eugênio Aparecido Preto</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Panhosi Marsaro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fabricio Estevão De Faria</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fatima Aparecida Medici</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fátima Lucy Bizigatto</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fernanda Aguiar Cardozo</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fernanda Félix Litron</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fernanda Malinosky Coelho Da Rosa</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Fernanda Tonelli</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Flávia Alessandra Alves</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Giane De Sordi</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Gilson Roberto Da Silva</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Gilssara Cavalcanti De Lima Bandeira</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Gislene Brognolli Do Prado</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Glaucia Roque Rocha Pio</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Glaucia Sinotti Jordão</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Glauco Marcelo De Souza Duarte</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Graciana Baptista Ignácio Cunha</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Harue Cristina Aki Giampietro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Henrique Dellai Nigra</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Inara Josepetti D'aquino Simões</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ines Chiarelli Dias</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Iolanda De Fatima Soares Soldatti</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Isabele Justino Prevido</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ivair Silva De Matos</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Ivanete Menegon Waldmann</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jacqueline De Fatima Duarte Veiga E Souza</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Janete Tchakmakian Cherfem</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Jefferson Antonio Do Prado</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Joao Manoel De Campos</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>João Roberto Brochado</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Jorge Luiz Torres Pereira</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>José Artur Lopes Pupo</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Julia Frascarelli Lucca</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Juliana Meres Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Juliana Monteiro Dias</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Juliana Niero</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Juliana Rossetti</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Juliana Vicentin</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Jully Liebl</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Kátia Alessandra Barbosa</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Kátia Cristina Lima Santana</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Katia Sayuri Fujisawa</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Keli Celiani Gardezani Cunha Simionato</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lara Priscila De Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Leandro Bertini</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Letícia Coelho Ruiz</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Lívia De Oliveira Vasconcelos</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Lucas Rodrigues Lopes</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Lucia Cleide Ribeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Luciana Aleva Cressoni</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Lucimar Aparecida De Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Luzia Aparecida Salmaso</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Marcello Teixeira Franceschi</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Marcia Alexandra Leardine</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Marcia Elisabete Scarassati Vicentin</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Marcia Szilagyi Marinho</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Márcio Bortoletto Fessel</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica Lisa Pace</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Cláudia Belluzzo Maia</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Zocca Da Silveira</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Da Graça Zucchi Moraes</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Das Neves Alves Braga</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Do Carmo Góes Da Costa</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Edite De Camargo Dmitrasinovic</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Emilia Cappa</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Gabriela Andrielli Rodrigues Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Glória Sachi Do Amaral</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Margarete Cordioli</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Regina  A. Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Santina Cangussu Sorge Leite</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Sílvia De Almeida Braga Raposo Do Amaral</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maria Solangela Da Silva Denadai</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Mariana Della Roza Viam </td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Marici Fernanda Trevisani Bergamasco</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Mário Andrei Stein Coval</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Mário José Spagnol</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Maristela Leone Radichi</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Mary Silvia Leme Starnini</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Melina Aparecida Custódio</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Michele Siomara Valentina Garavello</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Munira Assad Simao Terribili</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nádia Dantas Segala</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Norberg Aparecida Dos Santos </td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Olinda De Cássia Garcia Sando</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patricia Marcela Polidoro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Patrícia Nóra Guarizo Tolloto</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Paula Regina Marchiori De Jesus</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Raphaella Freitas Petkovic</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Raquel Ribeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Regina Clare Monteiro</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Regis Forner</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Rosana Occhietti</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Rosane Guedes</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Roseli De Oliveira Garcia</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Roseli Ricce Bortoletto</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Dos Santos Alesina</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Rosicler Aparecida Batista De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Rosimeri Da Silva Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Rozeneia Leite Do Canto Borges De Almeida</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Samara Gabriela Leal França</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Sandra Aparecida Burckarte Ariozo</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Sharllene Joaquim Do Amaral</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Silene Gomes Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Silmara Vanessa Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Silvana Damião Ferreira Da Silva</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Silvana Martins Dos Santos </td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Silvia Regina Spineli Koshikumo</td>
                          <td>Gestão Escolar</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Simone Aparecida Francisco Scheidt</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Sônia Lucilene Alves Borborema</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Suzana Aparecida Alves Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tacita Ansanello Ramos</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Tânia Cristina Caramigo</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Tatiana Gonçalves Xavier</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Tatiane Macedo Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valdete Ramos De Oliveira Melo</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Valeria Leão </td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Valmir Francisco Gomes</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Vanessa Inara Albino Oliveira Ruiz</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Walter Hugo Virgili</td>
                          <td>Matemática</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Wilson De Araujo Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                        <tr>
                          <td>Wladimir Stempniak Mesko</td>
                          <td>Língua Portuguesa</td>
                          <td>Campinas</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="franca"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Franca</h5>
                    <p><strong>Local: FACULDADE DE DIREITO DE FRANCA</strong> Avenida Major Nicacio, 2377  - Bairro São José - Franca - SP - CEP 14401-135</p> 
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
                          <td>Airlene Antonelli</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Alexandra Vilela Del Bianco Maia</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Aline Aparecida De Souza Gomes</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Ana Amália Grandi Mininel</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Do Espirito Santo Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Fiori Rufato</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Anair Valênia Martins Dias</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Andre Luiz Ribeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Andreia Bacagini Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Angela Maria Toniollo Sarni</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Claudiene  Teodoro Dias  Cardoso</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Cleumide Lopes De Souza Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daniela Da Silva Furtado</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Denisdea Battigaglia Guilherme</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Dora Nei Garcia Marçal</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Dorival Alves</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edna Margarida Rodrigues Mazeto</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Eduardo Aparecido Caldeira</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Eduardo Granado Garcia</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Éica Flávia Da Silva Estevam</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Elenice Batista Alves Cruz Freire</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Emerson De Souza Silva</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fernando Luiz Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Guilherme Laudigi Pinheiro</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>João Acácio Busquini</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Jorge Luis Gregório Costa</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Joyce Ferreira Nunes</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Juscelina Maria Dias Torres</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Jussara Maria Lovato</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Karen Manchini Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Kédma Keila Gonçalves Barbosa</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lorena Costa Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magda Regina Pereira Bizio</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Marcela Aleixo Da Silva Zapparolli</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Marcia De Melo Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Marcio Augusto Bugni</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Maria Jose De Barros</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Maria Madalena Borges Gutierre</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Maria Paula Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Maria Paula Ribeiro Cardoso</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Maria Regina Da Silva D Elia</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Marina Ap. Facirolli Goulart</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Mateus Vieira Nava</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Orlando Santos Brito</td>
                          <td>Matemática</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Paulo Roberto Mermejo</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Regiane Aparecida Da Cruz</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Regiane Da Cruz Tostes</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Renata Cristina Flores Dandaro</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Valverde Denubila</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria Borges De Freitas</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Rosana Morilha De Oliveira Sevilhano</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Silma Rodrigues De Oliveira Leite</td>
                          <td>Gestão Escolar</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Teresinha Helena Arantes El Khouri</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valdete Aparecida Borges Andrade</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                        <tr>
                          <td>Vânia Bartocci Naldi</td>
                          <td>Língua Portuguesa</td>
                          <td>Franca</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="presidenteprudente"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Presidente Prudente</h5>
                    <p><strong>Local: UNITOLEDO FACULDADE INTEGRADA ANTÔNIO EUFRÁSIO DE TOLEDO</strong> Praça Raul Furquim, 09 - Bairro Vila Furquim - Presidente Prudente - SP - CEP 19030-430</p> 
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
                          <td>Ana Lúcia Ferraz</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Ana Marcia De Castro Leme</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Angela Maria De Alencar Jeronymo Simão Pereira </td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Angélica Maria Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Cláudia Regina Bachi</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Ednelson Zorzini Cruz</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Elida Rejane Budiski Herculani</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Elidnéia Rosa Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Ercilene Gussi</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Érica Gois Nicochelli</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Erika Aparecida Navarro Rodrigues</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Evandro Ricardo Da Silveira</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Everaldo José Machado De Lima</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fernando Henrique Neves</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Geovana Cristina Scioli</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Geralda Helenice Augusta Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Gislaine Luiza Batista</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Gislene Aparecida Da Silva Barbosa</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Helder Alexandre De Oliveira</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Iraci Cangane Zerbetto</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Irmes Mary Moreno Roque Mattara</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Izilda Teixeira</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jefferson Toschi</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Josete Guariento Carvelli</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Leila Aparecida Alves Kanada</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Lidiane Gonzales Pineda</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Lívia Maria Turra Bassetto</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Luciana De Vito Zollner</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Luciene Manzoli De Albuquerque Ramos</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Lucimar Manzoli De Albuquerque Lima</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Lucimara Aparecida Gonçalves</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Maicon Alves Dias</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Maisa Kamegawa Borazio</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Mara Lucia Zarpelon Silva</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Marcela Dalana Gomes Queiroz Lisboa</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Márcia Cristina Gonçalves</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica De Brito Araújo</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Augusto Da Silva Arantes</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Fortua Clara</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Mariza Antonia Machado De Lima</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Marlene Aparecida Barchi Dib</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Marli De Oliveira Geraldo</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nair Leoncio Porfirio</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Neide Aparecida Simões Gimenes</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Neli Silva Volpini</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Odênis De Souza Cardoso</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Paulo Roberto Bolzan</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Paulo Roberto Junior Zampiere</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Regina Aparecida Padilha Moncinhatto Bolzan</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Regina Sanae Kurata</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Renata Leandro Terrengue</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Rita De Cássia Boscoli Soler Morete</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Rogério José Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Rosana Rocha Ferreira Da Mota</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Rosangela Ruiz Gomes</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Roseli Soares Jacomini</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Ruth Maria Gonçalves Barbieri</td>
                          <td>Gestão Escolar</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Silvio Luis Agostinho Dos Santos</td>
                          <td>Matemática</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Simone Maria Guetz Cassiano</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valéria Henrique Nogueira Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                        <tr>
                          <td>Valeria Rodrigues Moraes</td>
                          <td>Língua Portuguesa</td>
                          <td>Presidente Prudente</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="santos"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Santos</h5>
                    <p><strong>Local: UNIP SANTOS - CAMPUS II – RANGEL</strong> Av. Francisco Manoel, s/nº - Vila Mathias - Santos – SP – CEP 11045-300</p> 
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
                          <td>Adalgisa Maria De Lima</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Adriana José Cardoso</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Airton Dos Santos Bartolotto</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Alessandra Maria Rodrigues Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Alexandre De Paula Franco</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Ana Cristina Lobo Silva Duran</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Andrea Rodrigues De Lima Lanças</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Carlos Jeronimo Da Silva</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Célia Regina De Oliveira</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Cristina Cecília Ribeiro Do Valle De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Cynthia Mara Batista Rossi Torres</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Debora Cintia Rabello</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Denise Lemos</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Emerson Santana</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>rica Laboissiere</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana De Almeida Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Flávio Dalera De Carli</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Iasmin Martins Alvarez Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Ingrid Maria Hedjazi</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Ivone Da Luz</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jacinta Inez Alves</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Jacob Elias Mancio</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Janete Barreto Soares De Novaes</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Jilvanda Vieira Dos Santos De Toledo</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>João Mário Santana</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Júlio Kengo Watanabe</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Louise Castro De Souza </td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Luciane Ramos Américo Gomes</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Luciene Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Luiz Cláudio Da Glória</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Maria Aparecida Fernandes Ursini</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Maria Cecília Vanzela De Souza</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Maria Do Socorro Alves Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Maria Rita Paixão</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Mutsu-ko Kobashigawa</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Oziel Brito</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Paulo Rosano Rodrigues Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Raquel Fonteles Morais</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Raquel Santos Zandonadi</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Regina Catia Spada Lourenço Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Rosineide Fatima Espindola</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Ruth De Carvalho Lima</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sandra Aparecida Verrillo Valeriano</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Simone Rafael</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Solange Alvarez De Alvarenga</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Suely Carreira Gonzalez</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Thais Lage Porto</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>U</h1></td></tr>
                        <tr>
                          <td>Ulysses Camargo Corrêa Diegues</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valéria Hernandorena</td>
                          <td>Língua Portuguesa</td>
                          <td>Santos</td>
                        </tr>
                        <tr>
                          <td>Veronica Gomes Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>Santos</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Walkíria Helena Lopes Do Nascimento Oliveira</td>
                          <td>Matemática</td>
                          <td>Santos</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="saojosedoriopreto"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">São José do Rio Preto</h5>
                    <p><strong>Local: UNIP</strong> Av. Pres. Juscelino Kubitschek de Oliveira, s/nº - Jardim Tarraf II - São José do Rio Preto – SP - CEP 15091-450</p> 
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
                          <td>Adriana Aparecida De Almeida</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Adriana De Fátima Francischette Izaias</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Adriana Juliano Mendes De Campos</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Agnelsi Santini Zagato Gomes</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Alexandre Ricardo Borgonovi</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Amauri Fernando Comer</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina Negrão Berlini De Andrade</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Ana Claudia Cossini Martins</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Ana Patricia Machado Viana</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Anna Karina Chiavatelli Peral</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Aparecida De Fatima Avanço Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Aparecida Patrícia Roberto Marchioni</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Bento Teixeira Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Braz Dorival Ognibeni</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Cibele Naidhig De Souza Carrascossi</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Clarice Pereira</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daniela Ferreira De Mattos</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Delizabeth Evanir Malavazzi</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Djenane Sichieri Wagner Cunha</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edilena Catardo Ribeiro Da Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Edmar Montelli</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina Dos Santos</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Eliana Ramon Crepaldi Esper</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Elsa Hashimoto</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Erika Cristina Silva Batista Queiroz</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Eunice De Araújo Salmazo</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Gonçalves</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Fabio Henrique Gulo</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Fernanda Dos Santos Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Fernanda Machado Pinheiro</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Fernanda Maria Candido</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Fernanda Remaih</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Fernanda Silva Veloso</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Geraldo Niza Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Guilherme Mariano Martins Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Ida Regina Volpato Massarini</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jani Celia Correa</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>José Carlos Fernandes Junior</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>José Roberto Machado</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Jussara Aparecida Ferreira Destri</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Laurindo Daniel Silva Da Rocha</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Leandro Rodrigo De Oliveira</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Lilian Cesar Herrera Timporim</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Lilian Rangel Chaves</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Luci Fátima Montezuma</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Luciana Bianchini Lopes Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Luiz Roberto Wagner</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Lumena Maria Perez Farah</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Luzia Aparecida Marques</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magali Aparecida Caselli Iglesias Lima</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Márcia De Campos Barbosa</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Márcia Rita Mesquita Ferraz De Arruda</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Marcio José Noronha</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Marcos Rogério Da Cunha</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Antônia Perim Guimarães</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria De Fátima Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Do Rosário Martins Mantovani</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Fabiana Adami Mandeli</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Lucia Soler</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Sílvia Azarite Salomão</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Maria Virgínia Rosseto</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Mariangela Floriano Dias</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Marielza Gonçalves Teodoro</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Marli Aparecida Da Silva Viçoti</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Marli Confortini Silva De Almeida Barros</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Marta Cristina Martins Batista</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Martha Wassif Salloume Garcia</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Mayra Teotonio Alexandre</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Odair Dutra Santana Júnior</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Panagiota Thomas Moutropoulos Aparício</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Paula Sousa Rogerio</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Renata Cristina Ribeiro</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Rita De Cassia Do Nascimento Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Faria</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Rogerio Fernando Gelio</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Rosângela Camargo Nogueira</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sandra Maria Tomazela</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Sandra Sueli De Castro</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Simone Andrela</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Solange De Carvalho Fortilli</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Sonia Pinatto Soares</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Sumaia Ganej Domingues</td>
                          <td>Gestão Escolar</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tamar Naline Shumiski</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Thayene Schiapati Velho Borges</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vera Lúcia Rossi Real</td>
                          <td>Matemática</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr>
                          <td>Viviani Rodrigues Rodante Tirapelle</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Walkiria Aparecida David Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José do Rio Preto</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="saojosedoscampos"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">São José dos Campos</h5>
                    <p><strong>Local: UNIP</strong> Rod. Presidente Dutra, km 157,5 - Pista Sul - São José dos Campos – SP - CEP 12240-420</p> 
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
                          <td>Adilson Andrade Vilas Boas</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Adriana Andrade Mello</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Adriana Benedita Soares De Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Alcione Zaniboni Corral</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Alexandra De Abreu Figueira</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Aline Moraes Lopes</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Ana Carla Martins Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Ana Flávia Andrade Coelho</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia Oliveira Da Costa Pinaffi</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Nogueira Da Cunha Matos</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Ana Regina Martins</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Antonio Benedito Maia</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Araci Nunes Camargo</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Benedita Raimunda Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Matos Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Catarina Dalva Fernandes Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Célia Regina Sartori</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Clarisse Florez Chaves</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Clidinéia Marques Das Neves Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Cristian Schmidt Pereira Candido</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Cristiane Mota Lourenço</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Cristina Helena Quina De Siqueira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daniela Aparecida Guedes De Paula</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Daniela De Oliveira Matos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Dariel Barbosa De Melo Jr</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Deise Helena Massa Domingues</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Delícia De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Delmo Fortes</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edcarmen Souza Loura Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Edilene Marcondes Dos Santos Olivas</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Edina Aparecida Ferreira Pinheiro Machado</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Eliana Torres Tedesco Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Eloiza Mara Cesar Cursino Sato</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Elsa Pereira Timoteo</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Eunice Bertazo De Moura</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Eurico Fiame Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiola Maciel Saldão</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Fátima Aparecida César Lamparelli</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Fernanda Rezende Pedroza</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gilberto Vieira</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Gisele Sodero De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Gisley Noemi Barçalobre Manoel</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Gláucia Barreto De Mattos</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Glauco D'anderson Sétimo Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Helez C  Merlin</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Hilda Maria Pinto Araújo Gaspar</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Ilda Teixeira De Farias Guedes</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Irani Auxiliadora Alves Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina Alves Dos Santos Naressi</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jeanete Ferreira Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Jpão Carlos Rodrigues Horta</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Julia Maria Da Silva Ramos</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Jully Rebeca Pereira Da Conceição</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Juraci Lima Sabatino</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Jurema Silvia De Souza Alves</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Karina Cristina De Azevedo</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Karla Reis Martins</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Keli Cristina Freire</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Kelly Cristina Neves</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Laide Leni Lacerda Neves Molero Martins</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lais Aline Casagrande Pires</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Laline  Kelly  Mariano</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lara Litvinoff</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lessandra Muniz De Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Ligia Maria Da Silva</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lilian Ferolla De Abreu</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lilio Alonso Paoliello Jr.</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lirene Macedo Batista</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Lucia Helena Calderaro</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Luciana Lucci De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Luciane Idalgo Gonçalves Gobbatto</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Luiz Carlos Mourão</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Luzia Alves</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Marcelo Capelo</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Marcia Aparecida Da Silva Ferraz</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Marcia Cristina Passos Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Márcia Cristina Siqueira Vitorino Fortaleza </td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Márcia Maria Dias Reis Pacheco</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Marco Polo Balestrero</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Marcos De Moura Albertim</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Ferrão Claudino</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Cunha Riondet Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Dos Santos</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Maria Das Graças Maciel Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Maria De Fatima Ramos Cesar</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Maria Matilde Reis De Abreu</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Marilena Alves Di Domenico</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Marilene Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Meire Aparecida Gaefke</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Miriam Martins Inácio</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nathali De Paula Garcia Da Silva </td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Pulo Lourenço Machado</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Renata Regina  Dos Santos</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Rosa Ismeire De Assis Baldan</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Roselena Ferraz Barbosa</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Rosimar Barros De Deus Miranda</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Salete De Almeida Moraes Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Pontes Cavalhaes</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Sílvia Mendes Moreira</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Simone Coelho Sacilotti</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Simone Da Silva De Paula</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Sueli Correa De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Suely Soares Nogueira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Teresinha Cristina Alves Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Tiara Reis Silva Maciel</td>
                          <td>Matemática</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valéria Bitencourt Leite Marassi</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Valéria De Paula Lima</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Vânia Cristina Paduan Alves</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Vanilda Aparecida Pereira Da Silva Clemente</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Wagmare Ribeiro Melo Guimarães</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                        <tr>
                          <td>Walcerly Corrêa De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São José dos Campos</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="saopaulo"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">São Paulo</h5>
                    <p><strong>Local: PUC-SP</strong> Rua Ministro Godoy, 969 - Perdizes - São Paulo - SP - CEP 05014-901</p> 
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
                          <td>Acelice Aparecida Guillarduci Ruiz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ademilde Ferreira De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adenair Oliveira Vaz</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adilson Leite</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adolfo Tanzi Neto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Almeida Reis</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Antunes Bento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Aparecida De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Aprecida Pedro Andrade</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Cialé</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Conegundes Araujo Da Silveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Cordeiro Dias Dos Sanots</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Da Silva Guerrieri</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana De Freitas</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Mazur Barboza</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Regina De Camargo Teixeira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Silene Vieira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Sirolli Farias</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Soeiro Pino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Adriana Tavares De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Afonso Soares Barreto Junior </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Agnaldo Da Conceição Esquincalha</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alberto Menezes Hossoe</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alberto Tadeu Acaiaba Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alesandra Do Vale Castro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandra Afrea Garbim</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandra Alves</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandra Bernardo Rosemberg</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandra Da Silva Guedes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandra Herrero Garcia</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandro Caetano De Moraes</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alessandro Gonçalves</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alex Sandro De França</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alexandra Henriques Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alexandre Da Silva Rigobelo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alexandre De Paula Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alexandre Gonçalves De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alexandre Souza De Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alfonso Gómez Paiva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alfredo Carlos Werneck De Avellar Filho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Alice Shinobu Kagohara Kitakawa</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Aline Cristina Do Prado</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Aline Daltro Lago</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Amanda Celestini Mendonça</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Amanda Fonseca De Lima Morales</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Amélia Ribeiro Nunes</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Amilcar Ribeiro Cassimiro Junior </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina Carvalho De Sousa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Caroline Pontes Da Cruz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Claudia Cantelli</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Flavia Cappellano</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Ligia Contell</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Ligia Guimarães De Oliveira Soares</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia Fenolio</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia Marcondes De Jesus</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia Nogueira Junqueira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Lúcia Nunes Urtado Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia Soares Bonfim</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Maria De Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Junqueira Fabrino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Sant Ana Maziviero</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Bafim</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Cleto Marolla</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Paula De Oliveira Lopes Vieira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Santana Bezerra</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Anderson Adelmo Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Anderson Barros Lucas</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Anderson Cunha</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Anderson Da Silva Buzato</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Anderson De Camargo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andre Ferreira Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>André Luis Rosa E Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andre Luiz Machado</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andrea Gomes De Alencar</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andrea Rossi De Moraes Charquesi</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andrea Tafarelo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andreia De Fatima Fumes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andreia Dos Santos Freitas</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Andresa Liberato Gonçalez</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Angela Frade</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Angela Maria Baltieri Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Angelo Alario Pires Junior</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antonia Zulmira Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antonietta Soares Do Prado</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antonio Carlos Eduardo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antonio José Lopes</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antonio Luís De Quadros Altieri</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antonio Marcos Emiliano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Antônio Sérgio Dos Santos Gutierrez </td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Aparecido Sutero Da Silva Junior</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Arali Lobo Gomes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Arianna Fontes Lenci</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Arlete Aparecida Gomes Dias</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Arlete Aparecida Oliveira De Almeida</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Armando Calixto Filho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Arminda Regina De Araujo Pinto</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Arnaldo Aragão Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Aroaldo Azevedo Veneu</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Azenaide Sousa Da Silva </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Barbara Soares Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Beatriz Gregório</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Berenice Teixeira De Santana</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Bernadete Aparecida Pereira Godoi</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Bernardino Junior Barreto De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Bianca Fiorentino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Bruno César Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Duarte Borges Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Camila Santiago Tanes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carina Emy Kagohara</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carla Luciana Pereira De Almeida</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carla Pires De Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carlos Alberto Simas De Almeida</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carlos Bacci Junior</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carlos José Santana De Miranda</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carlos Magno Precechan</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carlos Roberto Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carmen Lúcia Pereira De Santana</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Carmen Silvia Bueno De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Caroline Costa Nunes Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cássia Guimarães</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Catarina Da Penha De Albuquerque Quadros Altieri</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Catarina Reis Matos Da Cruz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Catia Ferreira Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cátia Fonseca De Oliveira Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Catia Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Celia De Souza Tintino Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Celia Maria Has</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Célia Regina De Lara</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Celio Paulo Gomes De Azevedo</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Celso Antônio Bacheschi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>César Augusto Pedroso</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Chafiha Maria Suiti Laszkiewicz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Christiane Mazur Lauricella</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Christiane Romano</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cibele Zucareli Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cícero José Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cinthia Krayuska De Araujo Sousa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cíntia Boton Lopes De Queiroz Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cintia Mara Souza De Oliveira Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cintia Rocha Pedrozo Galrao</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cintya Ribeiro De Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cirlei Aparecida Da Silva Gomes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cirlene Carla Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Clarice Lage Gualberto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claricia Akemi Eguti</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudete Aparecida Neri E Camargo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudette Ulisses Teixeira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claúdia Cristina De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudia Eleutério Fedel Gentil</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudia Rodrigues </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudia Vasconcelos Silva Hobi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudio Galeote Rentas</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cláudio Miralles Monteiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Claudio Roberto Lopes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Clausia Mara Antoneli</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Clayton Ferreira Da Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Clayton Marcelo Barone</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cleber Faustino Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cléber Luis Dungue</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cleoni Mendonça Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cleonice Da Silva Menegatto</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cleonice Pereira Santos Martins</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cleusa Da Silva Salomão </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Crisaldo Teles</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristhiane Guinevy Penachio</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Aparecida Nunes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Dias Mirisola</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Macario De Lima</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Machado Rosa</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Menechini Camargo</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Oliveira Polato</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiane Prando Martini Toledo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristiano Lima De Araujo Reis </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristina Aparecida Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristina Barbosa Laurentino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristina Barcellos De Souza</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristina Hermo Pedroso De Moraes Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Cristina Medrado Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Dalila Maria Pereira Lemos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniel  De Souza Nogueira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniel Carlos Estevao</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniela Alves Soares</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniela Angelo Garcia </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniela Ferreira De  Matos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniela Galante Batista Cordeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniela Lisboa Mafra Rufino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniele Aparecida Costa Floriano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniele Gualtieri Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniella Barbosa Buttler</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Daniella Caruso Gandra</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Danila Farias Brito Ribeiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Debora Cristina Francisco Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Debora Hradec</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Débora Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Débora Margot Soares De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Débora Reis Pacheco</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Deborah Martinez Griebler</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Deise De Carvalho Casseb</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Deise Paula Da Silva Barreto</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Denise Donizetti Dante Garcia Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Denise Ferreira Barboza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Denise Martha Gutierrez Baptista</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Denise Ribeiro Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Denise Silva Nascimento</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Denize Dos Santos Firmo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Deuslene Gomes Mello Assuncao</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Dimitra Dragassakis</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Dineia Freitas Sathler Limpo</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Dinorah Hasegawa Sato</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Domingos Santos Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Donizete Da Silva Ferreira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Dorcas Alves Campos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ducelene Paulo Do Nascimento Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Dulce Mara Escobar</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Dulcinéia De Carvalho Dornelas Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edenilce Hortencia Jorge Elliott</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ediana Barp</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edilene Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edina Marta Dascanio Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>dina Pereira Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edinalva Rodrigues Ferreira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edinéia Dos Santos Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edineide Santos Chinaglia</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edlene Aparecida Lubianqui Cardoso Cesar</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edna Aparecida Lopes Palacio</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edna Caldeira Martins Guellere</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edna Do Nascimento  Rosa Barrem</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edna Grottoli Fumeiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edna Marchi Alvarenga</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edna Maria Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ednaldo Torres Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Alves Cardoso</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Alves De Souza</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Alves Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Alves Paulino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Basilio Amorim Filho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Raimundo Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edson Roberto Lanzoni</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eduardo Coelho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eduardo De Febo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eduardo Kazuo Iamaguchi</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edvaldo Ceraze</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edvard Luiz Da Silva Filho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edvilson Antonio Martins</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Edy Moreira De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina Diegues</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elaine Cuencas Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elaine Hecht Spósito</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elda Maria Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elenilton Vieira Godoy</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elenira Martins Sanches Garcia</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliana Aparecida Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliana Aparecida Oliveira Burian</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliana Kupper</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliana Maciel Cacero</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliana Nascimento De Freitas</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliana Regina Palomares</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eliani Aparecida Mana</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elias Garcete De Miranda</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>lio De Assis</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Elisabete Ferreira De Santana Romano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elisabete Gomes Benatti Ramos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elisângela Cristina Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elisangela De Oliveira Reis</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elisangela Ruth De Miranda</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elivane Moreira Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elizabete Cristina De Brito</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elizabete De Souza E Silva </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ellen Rode Lopes Santana</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ellis Regina Neves Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elton Souza Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Elvis Lima De Araujo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Emerson Alves Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Eneide Lourenco Romao</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Erica Buzzo Arruda</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Erica Marson Machado</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>rica Renata Paiva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Eridulce Sousa Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Erika De Menezes Costa Brandão</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Estela Sales Bueno De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Evaristo Gloria</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Andrade Miranda</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabiana Caivano Sader</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabiana Conceição Gonçalves Fernandes</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabiana Gomes Fonseca</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabiana Meireles De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fábio Aparecido Moreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabio Camilo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabio Douglas Farias</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabio Henrique Patriarca</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabio Rogerio Nepomuceno</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabiola Romualdo Sampaio</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fabrícia Gomes Nieri</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fátima Aparecida Dias Vlach</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fátima Cristina</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fatima Lobao Fraga</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fatima Maria Dos Santos De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fátima Regina Ferreira Dos Santos Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fátima Regina Preti</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fátima Rosangela Gebim</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernanda Araújo De Paula Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernanda Carvalho Dos Reis</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernanda De Almeida Arruda</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernanda De Jesus Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernanda Oliveira Damacena</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernanda Santos Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Fernando De Oliveira Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Filon Suarte Nogueira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Flávia Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Flávia Odete Greghi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Flávia Regina Dos Santos Alvim</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Francisca Alves De Lima</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Francisca Aparecida Silva Cruz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Francisco De Castro Matos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Francisco Fabiano Pires De Sousa</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Francisco Marcos Soares Martins</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Geilda Balbino Da Silva Barroso</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Geisa Belmonte De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gilberta Alessandra Redígolo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gilberto Januario Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gildete Conceição Lima Veiga</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gisele Freitas De Aguiar</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gisele Galafacci</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gisele Szabó Despézio Ghetti </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gisleine Silvana Gasparotto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Givanildo Farias Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Glaucineide De Menezes Garcêz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Glauco Matheus</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Glayci Kelli Reis Da Silva Xavier</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gleice De Divitiis Rosa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Glicério Da Silva Leite</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Grace De Sa Lopes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Graziela Castelani</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Guaraci Eiró Gonsalves</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Guaraciaba De Campos Tetzner</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Gustavo Mariano Ventura</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Haidê Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Hamilton Fernandes De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Helena Fernandes Garcia</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Helio Ponciano Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Heloisa Gonçalves Jordão</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Heloisa Macedo Coelho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Hercimary Bueno De Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Hevelyn Cristina Canova</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Idê Moraes Dos Santos </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ilkêmia Lenartevitz Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ilnar Ales Da Silva Da Costa</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ines Sena Ramos Santana</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Iracema Costa Da Silva Mariano</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Iraci Aparecida Trindade</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Iraji De Oliveira Romeiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Irani Parolin Santana</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Irene Machado Pantelidakis</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Irene Rio Stéfani</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isaa Cei Dias</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina Domingues Aguiar</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina Santos De Paula</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isabel Lindaura De Azevedo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isabel Toscano Lima Gasparini</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isilda Caetano Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Isolete Domiciano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivan Castilho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivan De Azevedo Antunes Corrêa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivan Ferreira Guariroba</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivani Anauate Ghattas</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivone De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivone Islas Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ivoneide Fatima De Moraes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jack Pereira Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jackeline Duarte Kodaira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jacqueline Britto Sant´anna</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jacqueline Nunes Dos Santos Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Janaina Aparecida De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Janaína Gomes De Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jane Aparecida De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jane Rúbia Adami</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Janir Aparecida Machado De Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jean Corino Teodoro Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jeanny Meiry Sombra Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jecy Jane Dos Santos Jardim</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jeferson Levi De Almeida</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jefferson Dos Santos Todão</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jefferson Heleno Tsuchiya</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jeniffer Hung</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jerusa Eleutério Aguiar</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jessica Barbosa Nunes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Joana Eunice Macedo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>João Antonio Montes Raya</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Joao Reynaldo Pires Junior</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Joel Teles Bertin Filho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Joélia Dos Santos Jacó</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Joelice Rodrigues Fernandes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jorge Luiz Freneda</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>José Alecxandro De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>José Antonio Guariglia</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>José Augusto Gomes Vieira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>José Carlos De Carvalho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>José Lopes Moreira Filho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>José Luiz Autiere</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jose Wilson De Jesus</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jose´carlos Martins Pereira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Josefa Luiza Da Silva Irma</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Josemari Martos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Josemir Inacio De Lemos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Josiane Cenni De Abreu Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Juçara Maria Montenegro Simonsen Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jucelio Alves Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Juliana Cammarosano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Julio Cesar Ferri</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Julio Cesar Monteiro Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jurandir Monteiro Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jurandir Monteiro De Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Juscycleide Chagas Araújo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jussara Bernardo Alves</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Jussara Da Cruz Pires De Moraes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Justina Do Céu Martins Ruano Felgueiras</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Juvenal De Gouveia</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Karine Guerra Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Katia Biroli</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Kátia Cilene Corrêa Klassen</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Katia Cristina Deps Miguel</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Katia De Almeida</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Katia Regina Pessoa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Kátia Vitorian Gellers</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Keila Glaucilene Vaz De Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Keila Regina Jorge</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Kelly Aparecida Brandão Avelino </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Kelly Cristina Nunes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Kelly Pereira Macedo Soares</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Laércio De Oliveira Araújo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Laercio Moreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Laudenira Cordeiro Benevides Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Laura Inês Breda Da Figueiredo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lauro Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lazaro Donizete Carlsson</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lea Paz Da Silva Feliciano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Leandro Aparecido De Moura</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Leandro Geronazzo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Leandro Pinto Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Leda Maria Soares Oliveira Lima</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Leia Soares Perrone</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lélia Yumi Chubatsu</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lenira Maria Borges Aguiar Calió</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Leticia Dos Santos Carvalho</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lia Mara Pegoretti</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Liana Maura Antunes Da Silva Barreto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ligia Fabiana De Souza Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lilian Pino Arroyo Do Valle</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lílian Polo De Queiroz Macedo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lilian Rangel Vicente</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lilian Rose Gusman</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Liliana Urbano</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lívia Cristina Pereira De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucas Haddad Grosso Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lúcia Alves De Santo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucia Aparecida Moretti</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lúcia Bernardete Lopes Espíndola</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lúcia Helena Matioli Da Motta</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciana Aparecida Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciana Aparecida Fakri</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciana Ferreira Moura</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciana Scognamiglio De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciana Souza Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciane Dos Passos Pires</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciane Martinelli</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciane Mazza Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciane Santos Rosenbaum</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciane Vidulic</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciano Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luciene Ribeiro Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucilene Santos Silva Fonseca</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucília Aparecida De Freitas Costa</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucilia De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucimara Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lucinéa Santos Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Lúcio Mauro Carnaúba </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ludimila Rabaquini Botelho</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luis Alberto Alves</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luis Claudio Crivellari</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luis Claudio Ganassim</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luiz Fernando Goncalves Lopes</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luiz Henrique Dos Santos Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luiz Herculano Vieira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Luziana Alves Felix De Figueiredo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magali Veronica Pereira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Magda Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Magda Marotta</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mara Lúcia David</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mara Silvia Bioto</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcelo Boaventura </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcelo Chiavassa</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcelo De Oliveira Léo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcelo Luiz Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcelo Massari</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcelo Pereira Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Angi</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Márcia Arruda Verri Bucco</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Márcia Cristina Colombo Carlini</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Cristina De Oliveira Caetano</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Cristine Ayaco Yassuhara Kagaochi</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia De Lourdes Nuto Loiola</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Di Giaimo Mecca</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Franco De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Machado Kaneto</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Márcia Maria Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Maria Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Márcia Moreira Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Natalia Motta Mello</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Márcia Saad Nemer</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Márcia Soares De Araújo Feitosa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Vivancos Mendonça Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcia Yoshiko Buto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcio Jean Fialho De Sousa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcli Elionete Bragança Takatu</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marco Antonio Figueredo Vasconcelos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcos Agostinho De Freitas</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcos Antonio Alviano</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcos Cabral De Sousa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcos Paulo De Jesus</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcos Rodrigues Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marcos Vinicius De Andrade Steidle</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Margarete Aparecida Ticianel E Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Adelaide De Magalhães Camargo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica Batista</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Antonia Braga Miné Wakabara</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida De Oliveira Leme</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Dos Santos Moutinho</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Ramos De Matos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Augusta Martins Ribeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Aurecy Pinheiro Chagas</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Beatriz Salles De Oliveira Andrade</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Bernadete Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Cecilia Nogueira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Cecilia Orrú Carnovalli</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Celina Maldonado Roschel</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Hueb</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Leite Rosa Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Tibúrcio De Paula Eduardo</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria D'agmar De Sousa Santana</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Da Cruz Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria De Fátima Borges Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria De Fatima Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria De Fátima Francisco</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria De Fátima Soares Casseb</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria De Lourdes Pereira De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Do Carmo Santana Alves</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Do Carmo Zanaro Delalana</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Elizabeth Candio</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Fernanda Dalle Vedove Silveira Cabral</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Goreth Miranda Dorigheto</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Helena Maluf Albino</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Helena Penha D'arco</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria José Antonângelo Martins Correa</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria José Bonifácio De Moura</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria José De Miranda Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria José Do Nascimento</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mariá Julieta Silvestre Jorge</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Leacir Baldasso</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Lina De Santana Freitas</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Livia De Vasconcellos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Lucia Camargo Gusmão</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Lucia Lanza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Lucia Torelli Doria De Andrade</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Paula Bacchin Zappa Leite</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Regina Valio Simionato</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Salete Prado Soares</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Valesca Benevides Feitosa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maria Viviane Silva Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mariana Calvo Mozer Manzieri</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mariana Da Silva Brandão Zuppa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marianka De Souza Goncalves Santa Barbara</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marilena Da Mottas E Silvas Pompa</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marília Magacho Rojas</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marília Oliveira Vasques Callegari</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mariluci Alves Martino</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marilza Aparecida Marques Lourenção</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marina Junqueira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marina Matera Sanches</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marina Ramos Pereira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marinês Lopes Fernandes Menegheti</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marinete Luzia Monteiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marinete Tavares Caputo Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mario Celso Alves Da Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mário Sabino Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marisa Batista Damasceno Godoi</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marisa Milano Beserra Do Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marisa Petcov</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marisa Regina De Camargo Semensin</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marli Aparecida Pizzi  Mantovani</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marli Do Carmo Pereira Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marta Maria Silveira Bertoncini De Almeida</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marta Severino Da Silva Leterio</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Marta Sonia Santana Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Matheus Soares</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maurici Alexandrina Da Silva Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Maurício Catureba Lima</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mauro Tadeu Longato</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mauro Trevisan De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Melina Sant'anna Alcantara</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Melissa Cordeiro De Lima</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Michele Carvalho De Andrade</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Michele Dos Santos Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Miguel Arcanjo Malheiro Filho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Milena De Moura Barba</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Milene Mitiko Ikemori</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mirela De Oliveira Roman</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mirene Leozira Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Miriam Rodrigues Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mirian De Souza Cristiano</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mirna Elisa Bonazzi</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Monica Lopes De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Monica Paula Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mônica Silva De Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Monique Aghazarian Paiva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Monique Da Silva </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mordechaj Grinbaum</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Mylene Abud</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nadir Dos Santos Siqueira Romero</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nanci Abrão De Melo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nanci Aparecida Da Trindade Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Naor Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nara Amaral</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nazareth Junilia De Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Neide Gomes Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Neide Kosicki Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Neide Silvestre</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nelson Rodrigues</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nereide Manginelli Lamas</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Neusa Aparecida Abrunhosa Tapias</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Neuza De Mello Lopes Schönherr</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Neyliane Rocha Da Silva De Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nilcea De Araujo Rollo</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nilton Moreira Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nivalda Maria Pereira Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Noeli Aparecida Rodrigues De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nubia Aparecida Batista Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Núbia Ferreira De Melo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Nuno Raphael Mazzeu Sales</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Olga Huertas Berruezo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Olinda Jesus Da Silva Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Orlando Almeida Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Orlando Gomes</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Osmar Antonio De Lima</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Osni Fernandes De Queiroz</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Osvaldo Joaquim Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ozéias Gonçalves Pereira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Pasqualina Ana D'agostino Ribeiro Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Anunciada De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Aparecida De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Da Fonseca Candido</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patrícia Da Silva Sousa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patrícia Dos Anjos Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Ervolino De Albuquerque Omote</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patrícia Ferreira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patrícia Lemes Grava</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Rodrigues Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patrícia Romanini Pigatti</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patrícia Tanganelli Lara</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Patricia Valerio Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paula Andréa Prata Ferreira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paula Aparecida Tovo Domingues</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paula Marcia Bonsegno Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paula Regina Carvalho Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paulo César Bacelar Pinheiro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paulo Rogerio Da Silva Amado</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Paulo Rogerio De Oliveira Garrucho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Perla Paulo Pires</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Petruciany Simone Ribeiro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Priscila Hagihara Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Priscila Martins Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Priscilla Cristhiani Oliveira Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>Q</h1></td></tr>
                        <tr>
                          <td>Queila Rosana Teobaldo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Quitéria Rita Augusto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rafael De Souza Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rafael Mariani</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Raimundo Nonato Da Silva Filho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Raquel Tegedor Azevedo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regiane De Sousa Andrade</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regina Ap Martinez Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regina Aparecida Da Silva Soares</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regina Aparecida De Freitas Ferreira Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regina Celia Rodrigues Secio</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regina Lucia Carvalho Neves</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regina Maura Mazzari</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Reginaldo Aparecido Bassi</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Reginaldo Lima Moreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Regis Alves De Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Reinaldo Inacio De Lima</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Reis Magno Leal Pereira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Cleire Chagas Nascimento</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Corrêa Nieto</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Cristina Caparrós</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Ercilia Mendes Nifoci</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Godoy De Jesus</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Guimaraes Cyrillo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Kelly Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Kutka Sebrian</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Libardi</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Maria Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Novais Rospi</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Renata Saraiva Correa De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ricardo Barros Sayeg</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ricardo Luís De Souza</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ricardo Marinho Dos Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rita De Cássia De Araújo Faria</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rita De Cássia Paixão Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rita De Cássia Seabra Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rita Isabel Marcicano Zini</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rita Valeria Garcia De Faria</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Robério Duarte Santana Nascimento</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roberta Dos Reis Neuhold</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roberto Antakly</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roberto Meconi Júnior</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roberval Baro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Robson Luiz Mantovani</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rodnilson Luiz Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Alves Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rodrigo César Alves Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Florencio De Atayde</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Tadshi Kitahara</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rogério Duarte Santana Nascimento</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Romilton Freire Vilela</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Romulo Araujo Fernandes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rômulo Goulart Tavares</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria Ruegger De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria Tavella Ferretti</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Andrade Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Aparecida Baptista Francisco</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Da Silva Godoy</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana De Assis Divino</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Jorge Monteiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Maria Da Silva Jacinto</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Santos Rosenbaum</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Sebastião Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosana Talarico Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosangela Cafasso Moreira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosangela De Souza Jorge Ando</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosângela Dos Reis Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosangela Novaes Martins</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roseli  Ferreira Lombardi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roseli Aparecida Conceição Ota</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roseli Gomes De Araujo Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Roseli Trevisan Marques De Souza</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemary Cristina Vanzella Pasinatto</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemary Pinto Nobrega</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemary Queiroz Moraes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemeire França De Assis Rodrigues Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Laporta Teixeira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Lepinski</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Panegassi Di Iorio</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosemeri Clemente Dos Santos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosiane De Kassia Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosilene Moreno</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosimary Aparecida Patriarca</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosimeire Boschesi Teixeira Nunes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rosmeiri Aparecida Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rozeli Frasca Bueno Alves</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rubens Pantano Neto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Rute Edite Da Silva</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ruth Maria Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Samantha Malange Onorato</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Samuel Francisco</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Samuel Frison</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Abreu Mantegassi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Angélica De Jesus</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Da Silva Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Dias De Meirelles Venturini De Barros</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Gonçalves Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Pereira Neves</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Correa Amorim</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Ribeiro</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Soares Clemente</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sarah Isabella Maas Naville</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Saulo Da Silva Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Selma Amaral De Freitas</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Selma Denise Gaspar</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Selma Regina Gomes Manzatto</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Selma Regina Melchiades Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Selma Resende Rodrigues</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sergio Antunes</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sergio Buzelin Da Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sergio Vieira De Sousa</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sharon Rigazzo Flores</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sheila Christina Sant´anna</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Shirley Goulart De Oliveira Garcia Jurado</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sidnei Ornellas De Souza</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sidney Cabral Lourenço</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvana Aparecida Alves Ferreira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvana Donadio Vilela Lemos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvana Monteiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvana Tavares Nagem</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvana Zajac</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvia Dos Santos Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvia Petri Dalla Nora Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvia Siqueira Seppelfeld</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Silvio Cássio Florêncio Dos Anjos</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Simone Aparecida Rodrigues Soares</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Simone Uehara Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sirene Pereira De Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sirlene Francisco Barbosa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sirley Aparecida Da Costa Gomes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Solange Alves Silva Baciega</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Solange Antonia De Azevedo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Solange Maris Lessa Yonamine</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Solange Rogato Barbosa</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sonia De Cassia Santos Prado</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sonia Maria Brancaglion</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sonia Maria Velloso Nobre Marafante</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sonia Rodrigues Da Cruz Mendes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Soraya Akiyama Pinheiro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sueli Alves De Souza Magalhaes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sueli Alves Salgado Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sueli Dib</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sueli Mitie Nakashima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sueli Ribeiro Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Sueli Thodorof Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Suely Augusto Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Suely Cristina De Albuquerque Bomfim</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Susi Passarete Cardoso</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Susilei Clemente</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Suzana Alves Viana</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Suzana De Assis Nascimento Catharino</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Suzimeire Ferreira Dos Santos Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Talita Cavalcante De Morais Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tânia Conceição Nunes De Sá Gomes </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tânia Lopes De Souza</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tania Luzia Demenis</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tânia Mara Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tânia Mara De Souza Sampaio</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tânia Regina Pinto</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tânia Souza De Luna</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tania Valeria Caparroz</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tatiana Aparecida De Mello Callil Rocha </td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tatiane Dias Serralheiro</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tatiane Gonçalves Pereira Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tatiane Pereira De Santana Ivo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tatiane Rodrigues Da Cunha</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Telma Cristina Menecatte De Oliveira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Telma Ramos Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Teresa Cristina Vaz Castro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Teresinha Morais Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Teresinha Silva Moreira</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Terezinha De Jesus Costa Tosi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Thais Massambani</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Thais Mendonça Mari</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tiago Moreira Gomes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Tiago Perestrelo Storti</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>U</h1></td></tr>
                        <tr>
                          <td>Ubirajara Dantas De Medeiros</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Ursula Belarmino Valente Sinisgalli</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vagner Candido De Queiroz</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vagner Manaf</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valdeci Carneiro Junior</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valdemar Klassen</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valdete Fernandes Da Silva</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valdivane Maria Da Paixão Lenda</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valentina Aparecida Bordignon Guimarães</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valéria Arcari Muhi</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valeria Rocha Aveiro Do Carmo</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valéria Santos França</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Valeska Dias Lopes Amorim</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vanderlei Maciel De Arruda</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vanderleia Lucas Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vandrigo Lugarezi Magalhães</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vanessa Falcao Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vanessa Pereira Da Rocha</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vanessa Umbelina Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vaneza Alves Leles</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vanilda Da Silva Riedel Alves</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia De Oliveira Cruz</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia De Oliveira Ponciano</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia Dias Espindola</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia Franco</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Lúcia Pinto</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Lúcia Rodrigues</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vera Regina Sarralheiro Cezário</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Verônica Silva Do Nascimento</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vicente Romeu Cianciarulo Longo</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vilma Alvarenga De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vilma Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vilma Maria Do Nascimento Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vilmar Guerra</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vinícius Cassio Barqueiro</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vinicius Martins Beltrão</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Virginia Nunes De Oliveira Mendes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vitoria Raquila Papadopoulos Koki</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Vivian Santana Paixão</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Waldelina Alves Traganti Dias Garcia </td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Walkiria Araujo De Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Walteriza Da Silva Muller</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Wellington Santos Costa</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Wilson Pontes</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Wilson Teixeira</td>
                          <td>Gestão Escolar</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>Y</h1></td></tr>
                        <tr>
                          <td>Yoko Rosana De Matos</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr><td><h1>Z</h1></td></tr>
                        <tr>
                          <td>Zedina Vieira Santos</td>
                          <td>Matemática</td>
                          <td>São Paulo</td>
                        </tr>
                        <tr>
                          <td>Zélia Emília De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>São Paulo</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    <a name="sorocaba"></a>
                    <a href="#" class="topo">Voltar ao topo</a>
                    <h5 style="font-size:28px">Sorocaba</h5>
                    <p><strong>Local: PUC-SP</strong> Rua Joubert Wey, 290 - Sorocaba – SP - CEP 18030-070</p> 
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
                          <td>Adalgisa Pereira De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Adriana Lemes Catharino</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Adriana Rodrigues Dos Santos</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Adriana Tavares Do Nascimento</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Adriano Nunes De Pontes</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Alzira Maria Ponciano Gonçalves</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina Medeiros Gatto Vieira Carvalho</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Laura Cruz Aquino</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Laura De Miranda Reis Leite</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Luisa Mack Brock</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Dorini</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Falsetti Conte</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Mack Brock</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>André Luis Camargo</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Andréa De Cássia Da Silva Imero</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Andreza Aparecida Fonseca Leme Cardoso</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Antonio Trindade Erate Volner</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Dalla Pozza Pereira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Carlos Eduardo Anhaia Carriel</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Carlos Tadeu Da Graça Barros</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Célia Regina Teixeira Marcozo</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Claudia Vechier</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Claudine Dacal Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Cristiano De Jesus Almeida Bustolin</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Dalva Maciel Nogueira Vieira</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Daniele De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Débora Sueli Esperança De Campos E Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Denise Das Neves Rodrigues</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Denisom Roberto Cardoso</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Dilei Mari Pena</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Divanilza De Camargo Soares Brisola</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edna Régio De Castro França</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Elaine Aparecida Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Elcio Pereira De Souza</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Eliã Gimenez Costa</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Eliana Mara Simão Ierck</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Eliana Takenaka Duarte</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Eliana Waiteman Manoel</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Eliane De Castro Barini</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Elidia Vicentina De Jesus Ribeiro</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Eliezer Pedroso Da Rocha</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Elizete Rodrigues</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Elke Regiane Pena Marques</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Elza Sajo</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Emilianita Pena</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ezequias Gabriel Vieira</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabrício Cristian De Proença</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Fabyo Miranda</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Flavio Sabino Pinto</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gilmário Conceição Ramos</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Giovana Aparecida Santini Casagrande</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Giseli Bonacasata Pillon</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Ilza Oliveira Looze</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ione Maria Florenzano Gimenez</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina De Castro</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ivailton Moreira De Araujo</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Ivana Correa De Faria Guite</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Iverani Rosa Custodio</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jackson Filomeno Iscuissati</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Jefferson Roberto De Castro</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>João Da Silva</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>João Luiz Rodrigues</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Jose Eugenio Gimenez</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>José Maria Sales Junior</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>José Ricardo Piffer</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Juliana De Oliveira Andrade</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Juliano Squarsone Di Siervo</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Laércio Lúcio Alves</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Leila Julieta Barbosa Salturato</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Liliam Faco Fernandes</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Lisane De Medeiros Martins</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Marcia Maria Cassin De Lucena</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Marcus Vinicius Garcia Triveloni</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria  De Lourdes  Almeida</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Dos Reis Campos</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Emília Pivovar De Azevedo</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Emíliadelgado</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Fernanda De Souza Navas</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Idalina De Barros Abreu</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria José Cosntãncio Bellon</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Lúcia Dias Batista De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Rita De Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Salete Dias Da Silva Pereira</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Maria Teresa Mascarenhas Vieira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Marielza Garbellotti</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Marili Aprijo De Farias</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Marisa Rosa Mercante De Campos</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Mariza Ferreira</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Mateus Barbosa</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Miguel Gaspar Neto</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Miriam Fischer Xavier</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Miriane Araujo Vasconcelos</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Monica Rojo Pereira</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nelci Aparecida Da Luz</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Nelsi Donizeti De Almeida</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Neusa Raquel De Oliveira Santos</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Paulo Afonso Penha</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Paulo Antonio Carvalho Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Paulo Sérgio Vieira</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Regina De Fátima Ponciano</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Reinaldo Paes</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Rita De Cássia Galvão De Oliveira</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Robson Rossi </td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Rosana Aparecida Rabelo Biglia</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Roseli Lara Martins Aguirra</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Rossenilda Gomes Farias</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Samira Camargo Clemente</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sandra Cristina De Oliveira Almeida</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sandra Martellini</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sara Margarida Santos</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sergio Panis Filho </td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Simone Maria Kruse Soares Mariano</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sonia Aparecida Stefani Paes</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Soraia Sanchez Machado</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sudonita Taveira Alvarenga Wing</td>
                          <td>Gestão Escolar</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sueli Aparecida Macedo Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Sueli Vitoria Zurssa</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Suzilaine Dos Santod</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tânia Mara Cassar Vieira Da Silva</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Tarso Douglas De Lima</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Thaís De Oliveira Müzel</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Thiago Tadeu Ferreira De Oliveira</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vanda Antunes</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Vélna Rita Grosche</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Vera Márcia Carvalho Soluna De Souza</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr>
                          <td>Viviane Marquezini Silva </td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Walquiria Daimar Castro De Oliveira</td>
                          <td>Matemática</td>
                          <td>Sorocaba</td>
                        </tr>
                        <tr><td><h1>Y</h1></td></tr>
                        <tr>
                          <td>Yone Paezani Sanches</td>
                          <td>Língua Portuguesa</td>
                          <td>Sorocaba</td>
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
    
