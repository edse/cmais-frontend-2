
    <link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <style type="text/css">
    table a { color:#ff6633;margin-bottom:5px; display: block; } 
    table h1 { font-size:20px; margin-top: 10px; }
    table {margin-bottom:30px}               
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
                    
                    <ul>
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
                    
                    
                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="aracatuba"></a>
                    <h5 style="font-size:28px">Araçatuba</h5>
                    <p><strong>Local: </strong>UNIP (UNIVERSIDADE PAULISTA)<br />Avenida Baguaçu, 1939, Jardim Alvorada </p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Aline Aparecida da Silva Blasioli</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Almir Pires</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andréa Ricci</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Thomaz Alves</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreia Spegiorin Gardete Vieira</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Audrey Kelly Alves Martinez</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Bruna Morales</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Claudinéia Vanessa dos Santos</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cristiane Maria Maschio</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Débora Lopes de Oliveira</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Eleni Solange Lima</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ellen Regina Gusman Gonçalves</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ester Maria de Alcântara Martins</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Sanches de Pieri</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabiane Delamura Galvi Custódio</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Maria Fiori Cantóia Hernandes</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Heide Danelutti Takeda</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Idalice Lima</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Inês Beatriz Bonadio Furtado</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Isabel dos Santos Soares Moura</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jacqueline Mariani Pereira</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janaína Lorenço Rovina Vaz</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Joana Dark Izaias Ramos</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joselilian Lopes Miralha</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Josinete Silverio de Souza</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Carvalho Ferreira Martins</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lara Silvia Bertelli de Queiroz</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Leticia Angelo Colabono</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Marcelo Mendes da Silva Donda</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Adriana Silva Moncinhatto</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariângela do Nascimento Sant`Ana da Costa</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marilza Rosene de Souza</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maristela Salata Mmartins Bortolotti</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mauro Celso Souza</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Micheli Cristina Balduino dos Santos Camargo</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Moisés da Silva</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monica Menezes Arantes</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Paulo Alberto dos Santos Buttignon</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Priscila Ferreira Porfirio</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Regina Celia Minari Sbizera</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roldão Antonio da Silva Neto</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roseli Tadeu Rocha do Amaral</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosemara Ferreira Talon Nalon</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sueli Nascimento Campagnoli</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tálita Aparecida Ali Rodrigues</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Telma Regina Fagundes da Silva</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valdelice Pereira de Souza Constantino</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valeria Moraes Cavalcante Dourado</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanda Renata Simões Pessoa Rosa</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vilma Machado Barboza</td>
                          <td>Araçatuba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>VinÍcio Manoel Dos Santos Lima</td>
                          <td>Araçatuba</td>
                          <td>presencial</td>
                        </tr>
                      </tbody>
                    </table>
                    
                    

                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="bauru"></a>
                    <h5 style="font-size:28px">Bauru</h5>
                    <p><strong>Local: </strong>UNIP (UNIVERSIDADE PAULISTA)<br />Rua Luiz Levorato, 2-140 (acesso pela Rodovia Marechal Rondon, km 335), Chácaras Bauruenses</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Adalberto Mesaque Rodrigues</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adelia Boleti</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adilson José Benjamim</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Berbel Julio Belini</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Sousa Vidal de Paiva</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alda Aparecida Spigolon Lobo</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandra Aparecida Paly</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandre Marcelo Furlan</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Camila Dadamos</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina Bressanim Carnevale</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Claudia Savian Garrito</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Canini Vincenzi Raduan</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Jacinto</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Rosa Barbosa da Silva</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André Luiz de Carvalho Gattás</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Antonio Rogerio Bueno</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Beatriz Helena Fávaro Pebone</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camelia Vendramini Mayotto</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celia Aparecida Miranda Passos Funchal</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celia Barbi de Barros Gonçalves</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cibele Tucunduva Alves Scacheti</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Aparecida Cardoso Calamita</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Aparecida Nunes Novaes</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Fabris</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Rodrigues Braz</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Dacley Rossi Carneiro Faria</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daisy Teresinha Ramos Leite</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Daniela Ribeiro Peres</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniele Borgues</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniella Cristina Silva Moretto</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danielle Marta Loddi Santos</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Débora Scopim da Fonseca</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Denise Cristina Sardinha</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Maria Brabo</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Elaine Aparecida da Silva</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina Nogueira</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Graciela dos Santos Santana</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliara Conceição Minucci Sábio</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elisabete Luchezi Mori</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizandra Sabino Marques Tavares</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eloiza Martins Primo</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elton Antonio Simão</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Emanoel Henrique Alves</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Emilia Cristina de Moura Abreu</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Emily Querobim Ionta Daccach</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Erasmo Roberto Marcellino</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Fiod Carvalho</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fatima de Genova Daniel</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gertrudes Isabel Guedes Genovez</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Guilherme Eduardo Almeida Prado de Castro Valente</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Isabel Cristina dos Santos Dias</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jacqueline de Aguiar Verderi</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Janaina Maria Lopes Ferreira</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Javert de Andrade</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joao Augusto Machado Suzuki</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Joyce Garcia Leme</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana dos Santos Padilha</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Maria Eggert Pessoa</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Maria Gastaldi Redondo Mendes de Almeida</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliane Fernanda Moreno</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Karen Fabiane Leonel Correa</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Karina Loncorovici</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Katia Gisele Domingues Marandola</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Keith Freitas Pedrolli</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Leila Mary Motoki</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lisete Aparecida da Cruz Xavier</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucia Elena Agostinho Pinto</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Blotta Gatti</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Nazaré Constantino</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Renata Batocchio</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Urbano</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Zambel</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucimara Brazolin Carvalho Neves</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ludmila Belotti Andreu Funo</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luiz Eduardo Divino da Fonseca</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luiza Almeida de Oliveira</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luzia Das Dores Gabriel Andreta</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luzia de Fátima Turato</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Maira Ruiz Domingues</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mara Cristina Pereira</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcela Ernesto dos Santos</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcelo Sabino Luiz</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Helena Pinheiro Di Rienzo</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Sílvia Modesto</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marco Antonio da Silva Mainardes</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margarida Spirito</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Carr</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina da Silva Araújo Zuccoli</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina de Andrade Silva</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Teodoro</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Fernanda Migliorini</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Juliana Speranza Zabeu</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Paula Moura Pini</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Teresa Alberto</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariana Americo Pereira</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Mariana Garcia de Paula Campos</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marta Lucia Curioni Janzantti</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mayra Marques de Mattos</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Milene Cezar da Silva Barros</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mirian Valéria Gomes Sabeh</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monica Lucia Veloso</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nelly Pinheiro Haddad Lovato</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Norma Caires Ramos de Oliveira</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patricia Helena Valentim</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Berenice de Souza</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo de Tarso Cabrini Júnior</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rerison Barbosa Rodrigues</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rivaldo Luiz Camargo</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rodinei Diaz</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosali Aparecida Martin de Mattos Messias</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosalice Santoyo Schimitd</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Mendonça Nunes</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Roteroti Azoia</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rose Marie Rodrigues Martinelli Viscaino</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemary Pereira da Silva</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Luciana Arantes</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sandra de Cerqueira Cesar</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Mara de Oliveira</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Shelley Costa Navari</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Shirley Rossy Maia Moreno</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silas de Souza</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tania de Albuquerque Pinheiro Tedeschi</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ticiane Rafaela de Andrade Moreno</td>
                          <td>Bauru</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vânia Marcia Ribeiro</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vitalina Aparecida Palugan Simeão</td>
                          <td>Bauru</td>
                          <td>online</td>
                        </tr>
                      </tbody>
                    </table>
                    
                    
                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="campinas"></a>
                    <h5 style="font-size:28px">Campinas</h5>
                    <p><strong>Local: </strong>COLÉGIO SAGRADO CORAÇÃO DE JESUS<br />Rua Dr. Manoel Afonso Ferreira, 245, Parque Nova Campinas</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>
                                  <tr><td><h1>A</h1></td></tr>
                            <tr>
                          <td>Adão José Lopes</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Adriana Carrilho de Moraes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Adriana da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Adriana Gomes da Silveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Adriana Helena Baroni de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Adriana Peressin</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Adriana Siqueira Albuquerque</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Adriana Terezinha Dantas Moreira de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Afranio Sergio da Cruz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aguinaldo Soares Louzada</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Alenice Marques Mendes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Alessandra Fabreto</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Alessandra Maria de Araujo Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Alexandre Benedito Bueno</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Alice Pasqualina Vitorino Ribeiro</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aline Fernanda Lopes de Souza Bosque</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aline Grippe de Mello Fontes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aline Raquel Franceschini</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Alisson Moura Chagas</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Amaralina Zaninin</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Ana Cláudia Zanquetim</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ana Cleide Lima Barros</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Ana Cristina Viana Pimentel</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ana Flora Rdrigues Campoe</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ana Lúcia Matheus de Oliveira Facin</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ana Manuela de Campos Fernandes</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Ana Maria Sebastiana Guido Fachini</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ana Paula do Carmo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ana Paula Pereira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Andre Gomes Meneses</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Andréa de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Andrea Righeto</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Andreia Aparecida Alves</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Andreia Nobrega Minussi</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ane Caroline de Souza Pereira</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Antonio Avelino Viana</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aparecida Claro da Silva e Paula</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aparecida Maria Claroi Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Aparecida Rosangela Scarpeti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>B</h1></td></tr>
                            <tr>
                          <td>Bernadete Cunninghan Hall Ruiz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Bruna Rodrigues da Silva</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Bruna Tella Guerra</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Bruno Colla</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Bruno Pacolla</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>C</h1></td></tr>
                            <tr>
                          <td>Camila Chicalhoni</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Camila Cristina Carradas</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Camila Dedomenici Vargas</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Carlos André Ferreira</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Carolina Parizotto Costa Camargo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Cassia Maria Nazareth Fares</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Cátia Cristiane Castellani</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Cintia Cristina Rodrigues da Cunha</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Cintia Paula da Silva Pereira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Clarinha Ascenção dos Santos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Claudia Affonso</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Cristian Gomes</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Cristiane de Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Cristine Leonardo Custodio</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>D</h1></td></tr>
                            <tr>
                          <td>Daniel Amaro Cirino de Medeiros</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Daniela Giaretta dos Santos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Daniela Rodrigues Sansoni Gimenes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Daniela Szolimowski Sciencio Mantovani</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Danilo José Silviéri</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>DEBORAH ROSE BLAIR D ´ORTO</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Dinah Pereira Rodrigues Venturini</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Diodete Ledubino</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Dircelei de Melo Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Donizete de Brito</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Dorcas Cristina Santos Freire</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>E</h1></td></tr>
                            <tr>
                          <td>Eder Menezes da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Edinéia de Fátima da Silva</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Edna Maria Aparecida Gonçalves</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Edna Pinto</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Elaine Cristina de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Elaine Fonseca Morais da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Eldren Piva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Elem Carolina Campos da Veiga Daud</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Élen Cristina Ferreira</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Eli Junior Santiago de Lima</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Eliana Astolfo de Souza Campos Prado</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Eliana Rodrigues Pinto</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Eliane Maria Heanna Machado Matioli</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Eliane Sousa Pacifico de Jesus</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Elide Filomena Pereira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Elijane Aparecida dos Santos dos Reis</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Elisabete Panssonatto Breternitz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Elisângela Silvia Martins Marques</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Emeli Borges Pereira Luz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Eridaine Tavares Claro</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Érika Liberato de Macedo Godoy</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Estela Fátima Silva Martins Mendes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ester Prestes Vieira</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Eulaiza Reis de Lima Ogawa</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Eva de Fatima Ramalho Apparecido</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Evelyn Viana Rezende</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ezequiel de Campos Fernandes</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>F</h1></td></tr>
                            <tr>
                          <td>Fabiana Alves Veronez da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fabiana Feliciano Zamariolo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fabiana Maimoni Campanella</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Fabiola Lowenthal Lopes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fátima Salete Dias Vasconcellos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fernanda Aparecida Pinheiro da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fernanda Cristina Casar Rosa</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fernanda Elsner Fiorini</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fernanda Name Romeo</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Fernanda Oliveira do Amaral</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Fernanda Trottmann</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Flavia de Castro</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Flávia Miranda Luiz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Flávia Teodoro Vicente</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Francisco Bezerra da Silva</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>G</h1></td></tr>
                            <tr>
                          <td>Gabriel Prochnou Vieira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Gabriele Cristina Piato</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Geiza de Cátia Rodrigues Cruz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Geni Bonturi Paiva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Geovane José Portiglioti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Gisele Cimino</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Gislaine dos Santos Caires Mattos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Giuliano Cezar Polizelli</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Glaucia Regina Guermandi Silva Baptista</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>H</h1></td></tr>
                            <tr>
                          <td>Heleny Freitas Tavares</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Hellen Cristina Moretti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>I</h1></td></tr>
                            <tr>
                          <td>Igor Zorzetto Pinheiro</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Isabel Cristina Carrara</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Isabel Cristina Soares Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Isilda Rocha Laendle</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Izolda Eloiza Preiss Roder</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>J</h1></td></tr>
                            <tr>
                          <td>Jacqueline Borsato</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Jane Aparecida Gasetto</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Janete Antonia Pellisson</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Jaqueline Moi Toledo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Jefferson Antonio do Prado</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Jesiel Eliezer Zerbo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Joana Darc Mariano Mantellato</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>José eduardo Rodrigues Cavalcanti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>José Luíz Custódio</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Josiane Donizeti Morais de Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Jucélia Rocha Braga</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Jucimara Rocha Braga Vencio</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Juliana Aparecida Bueno</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Juliana de Castro Assis Rodrigues</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>K</h1></td></tr>
                            <tr>
                          <td>Karen Contento Arruda</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Karen Crsitina Horácio de Souza</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Karin Cristina Pereira Bigote</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Karina Aparecida Calsavara Muoio</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Karina Aparecida Vicentin</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Karla Joeny Ayres Costa</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Katia Regina Ferriera Matos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Katia Regina Parisoto Lopes e Lopes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Kelly Aparecida Cordeiro</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Kelly da Silva Marinho</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Kenia Cristiane Zucaratto Martins Fernandes</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>L</h1></td></tr>
                            <tr>
                          <td>Laura Marques Marocci</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Leandro Cleiton Fabreto</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Leonardo Vicentin</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Leticia Regina Betiol dos Santos de Freitas</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Liria Conceição Franco Haeck</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Lucas Rodrigues Lopes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Luciana de Lourdes Carobrez Godoy</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Luciane Peres Fermino</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Luciano Carlos Pereira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Ludmilla Cristina de Camargo Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Luis Carlos Loureiro</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Luzia de Souza</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>M</h1></td></tr>
                            <tr>
                          <td>Maiara Seixas Marrichi Teixeira do Couto</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maike Willians de Assis Miranda</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Marcello Teixeira Franceschi</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Marcia Gomes de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Marcia Helena de Freitas Vidal Arnold</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Márcia Tordin de Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maria Aparecida Souza de Brito</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Maria Bernadete Favorino</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maria Cecilia Marques Kosoba</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Maria Cláudia de Mesquita</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maria Denise da Cunha</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maria do Carmo Correa Serra Fernandes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maria Emilia Cappa</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Maria Helena Marini</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Maria Isaura da Silva E Silva</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Maria Odila Kaam de Moraes</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maria Solange Daniel</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Mariana Granso Andrade</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Mariana Piolla da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Mariane Messina Menegassi</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Marina Bevilacqua de Oliveira Alves</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maristela Mazi Dacome</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Marta Ana Rebelo de Oliveira</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Marta Maria Pagadigorria Ribeiro</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Maysa Ferreira Rampim</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Melissa Isis Peliçari da Cunha</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Mércia Blume</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Merly Maria Giaciani Ferraz</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Michele Siomara Valentina Garavello</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Michelle Camargo Dunde</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Milena Furlan Loatti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Mirian Izidoro da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Mozart Rodrigues da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>N</h1></td></tr>
                            <tr>
                          <td>Natalie Leonardi dos Reis</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Nathália Gonçalves de Lara</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Neíze Ribeiro da Silva</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>O</h1></td></tr>
                            <tr>
                          <td>Olga Maria Menuzzo</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>P</h1></td></tr>
                            <tr>
                          <td>Patrícia Alessandra do Nascimento</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Patricia Cristina Viscainho</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Patricia Gaspar Cardoso</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Patricia Graziela Stanguini Ribeiro</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Patrícia Helena Tozzi Oliveira</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Patrícia Marcela Polidoro</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Paula Batista de Morais</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Paulo Roberto do Nascimento</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Pollyanna Ferreira de Lima</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Priscila Helena Bianchini Lopes</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Priscila Nogueira Baltore</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>R</h1></td></tr>
                            <tr>
                          <td>Rafael Ferraz Baptista</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Raphaella Freitas Petkovic</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Raquel Gonçalves Rosa</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Raquel Ribeiro</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Regina Celia Cardoso</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Regina Nobrega Cunha Alves</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Regine Celia Passos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rejane Peroni Paiva Horioka</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Renata Cristina Martins Sitta Duarte</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Renata Gimenez</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rita Cassia Eloy de Castro</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Rita Elaine Gaspar</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rita Maria Aparecida de Souza</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Rodrigo Alexandre Sigoli</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rosana Betim Maudonnet de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rosana Cristina Teixeira Roque dos Santos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rosangela Aparecida Turato</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rosangela Ferreira do Amaral</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Roselaine Marcia de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Roseli Rodrigues Ritter</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Rosemeire Das Graças Silvestre Fantin</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Rosimeire de Azevedo Fiches</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                                  <tr><td><h1>S</h1></td></tr>
                            <tr>
                          <td>Samanta Rodrigues Sousa Sozzi</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Sandra Aparecida Burckarte Ariozo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Sandra Aparecida Dias dos Reis</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Sandra Renata da Silva Schledorn</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Sidemar Rodrigues</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Silmara Vanessa dos Santos</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Silvia Adriana Ramos Zerbinatti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Silvia Helena Alves de Macedo Sperendio</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Silvia Helena Rodrigues</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Simone Cristina da Silva Santos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Simone Jorge Gonçalves</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Simone Pinheiro dos Santos Horta</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Simone Souza de Morais</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Solange Aparecida Peramos de Sales</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Solange dos Santos Lima</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Solange Pires</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Sônia dos Santos Arcanjo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Sonia Maria de Souza Andrade</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Suraia Mamede Ali Fakih</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Suzinei Grilo Brito Primo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>T</h1></td></tr>
                            <tr>
                          <td>Tais Teresa Rother</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Talia Pietra Soares</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Talita Cristina Mello de Oliveira</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Tânia Cristina Fonseca</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Tatiana Cristina Nardi da Costa Brito</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Tatiane Maria Piran</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Terezinha de Jesus Costa Tosi</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Thais Barboza da Silva Banguarte</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Thais Danila Gotsfritz Ambiel</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Thais Escalise</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Thalys Cristina Mafra Saad</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Thiago Luchetti</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>U</h1></td></tr>
                            <tr>
                          <td>Ulisses Benjamim Cruz Neto</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>V</h1></td></tr>
                            <tr>
                          <td>Valdirene de Jesus Gomes Zambarda</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Valeria Cristina dos Santos</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Valeria Hilario dos Santos</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Vanessa Inara Albino de Oliveira Ruiz</td>
                          <td>Campinas</td>
                          <td>presencial</td>
                        </tr>
                            <tr>
                          <td>Vânia Maria de Nadai de Souza</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Vânia Rita Cássia Ortiz de Camargo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Vera Lucia Leitao Cavinato</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Viviane Cristina Leme</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>W</h1></td></tr>
                            <tr>
                          <td>Wilson de Araujo Lima</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                                  <tr><td><h1>Z</h1></td></tr>
                            <tr>
                          <td>Zuleika Teresinha Wiechmann Freschi</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                            <tr>
                          <td>Zuleini Aparecida Sabatin do Carmo</td>
                          <td>Campinas</td>
                          <td>online</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="franca"></a>
                    <h5 style="font-size:28px">Franca</h5>
                    <p><strong>Local: </strong>FACULDADE DE DIREITO DE FRANCA<br />Avenida Major Nicácio, 2377, Bairro São José </p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Adriana Alves Rodrigues</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Nogueira de Mello</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adrieli Gouveia</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Alessandra Adorni</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Alet Rosie de Campos</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alex Moretto</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Lúcia Ferreira</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Toledo Silva Gazola</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Rodrigues de Lima Câmara</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Silva Ferreira</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreia Carla Melegati Rodrigues Alves</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angela Maria Martignon Ovinha</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ariele Genari Augusto</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila de Melo Alves Boldrin</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carolina Gamas David</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Christiane Faria Feres</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Simone Val Silva de Almeida</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daniele Giacomo Eleuterio</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danielly de Oliveira Ventreschi</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Danilo Cesar de Matos Lopes</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Debora Taveira Moscardine</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Eder Ricardo Chaves</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eduardo Zenon de Faria e Sousa Gouveia</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Fernandes Ribeiro</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eleniuce Arantes</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliana Maria Michelin Chiaretti</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Aparecida Rodrigues</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane de Moura Guerreiro Brandi</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Fioravante Custódio Dias</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elissandra Coimbra de Oliveira Manoel</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elizabete Aparecida Bernardino</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ellen Braune Reis Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erica Fernanda Posca Vezzoni</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erica Vieira Barini</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Palmiere Sanches dos Reis</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiane Marilda Mazer Corteze</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fábio Arruda Massarotto</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabricio Elder da Silva Tosta</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Campoi Alvarez</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>GENI DE FÁTIMA LEANDRO SILVA</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Giovana Oliveira de Russi</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisela Cristina Rosa</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Giseli de Paula Bianchini</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Glauber Silva Ferreira</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gleise Cristina de Santana Silvestre</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Graciella Santos Costa Morassi</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Hellen Herker Ataide</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Heloisa Helena Perbone Neves</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Icaro Luis Fracarolli Vila</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina Euzébio Abukawa</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivone Ferrari</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Joel Sossai Coleti</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jovani Clélia Godoi Garcia</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana de Paula</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Katia Cristina Martins Tarone Carvalho</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Larissa Cristina Gallo</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lidiane Cristina Donizette</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lilian Branquinho</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lorena Costa Carvalho</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Rocha Corrêa da Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciane Garcia Enciso Bevilacqua</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucilene Perbone</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luzia Aparecida Cintra Haber</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magda Regina Pereira Bizio</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maraluci Malta</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcelo Lucas Elizeu</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Cristina Jurioli Rodrigues</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Cristina Vergani Tristão</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia de Melo Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Verginia Boorati</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcio Bravo de Andrade</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Henrique Mascaranha</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Angelica de Carvalho</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima de Oliveira</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Monica Dandrea Guaraldo</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Terezinha Mantovani Ribeiro de Mendonça</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maricilia Lopes da Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marília Aparecida Rosa</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Melina Marim dos Santos Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Luzia Ruy Caramuri</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Souza Giolo Castro</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Milena Cintra Mendes</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miriam Ecilda Vieira da Silva Fonseca</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Moraline Silva Brandieri Comparini</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nadia Cristina Speretta Rheda</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Náthaly Aparecida Faria de Paula</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neilise Fernanda Granzoti Reis</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nilton Cesar Dantas</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Olga Amália da Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Priscila Glaciara Passarelli</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Priscila Maria Paulino</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rafaela Simei Popolim</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Raphaela Magalhães Portella Henriques</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Raquel Cristina Prandini Tonetto</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Raquel Matias Costa</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Regiane Aparecida da Cruz</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Aparecida Rodrigues Rodrigues</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Cristina Flores Dandaro</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Renata dos Santos Pallaretti Prudencio</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Munhoz Mamede Fontanezi</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roberta Campos Ferreira da Rocha</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roberta da Silva Amoroso Pereira</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Robson de Paula Andrade</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rogério Alves Taveira</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria Abrão Del Santo</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria da Silva Tristão</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Abadia Marcelo</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sara Cristina de Castro Rodrigues</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sheila Janete Garcia Barbosa Sandrin</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sheila Simara da Silva</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana Aparecida Meletti Moscardini</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Aparecida Manieri</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Das Graças Vitorino Tavares</td>
                          <td>Franca</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Simone Machado Lourençato</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sinelle Duarte</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Solange Maria Trocoli Testa</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sônia Maria Martins da Costa</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Susan Deise de Oliveira Feliciano</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tamara Belloti Ortiz de Freitas</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiana Gomes Lespinasse</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valéria de Falco</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanessa Cristina Girotti Salvagni</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vera Lúcia Scharlach</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>William Fernando Ferreto</td>
                          <td>Franca</td>
                          <td>online</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="presidenteprudente"></a>
                    <h5 style="font-size:28px">Presidente Prudente</h5>
                    <p><strong>Local: </strong>UNITOLEDO<br />Praça Raul Furquim, 09, Vila Furquim</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Aislan Altair de Souza</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Aline Guimarães Colnago Cavalcante</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina Ferreira Rorato</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Cardoso Rigoleto</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreia de Fatima Gomes Piemonte</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ângela Maria de Haro Campagnollo</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aparecida Sueli Mirandola Vasconcelos</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Garcia Longo da Silva</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Carola Lopes Braz</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carolina Franco Branco</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cláudia Regina da Silva Franzão</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Débora Barreto dos Santos Silva</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Elaine Cardoso Guimarães</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Pereira Dias Farias</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Soares da Silva</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Érika Nogueira Menegon</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eveli de Almeida Sanches Alberti</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana de Oliveira Prado</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Gonçalves Monti</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Rodrigues Castanharo Alevato</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flávia Renata da Silva Varolo</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gelise Soares Alfena</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Graziela Aparecida Pereira da Silva</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Helder Alexandre de Oliveira</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Ilda Lúcia Alves Ferreira Matsui</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Irando Alves Martins Neto</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivonete Sachi</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Joao Henrique Alves Custodio</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>José Rubens Antoniazzi Silva</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Karina Vieira Martins Antunes</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Laura Alves dos Santos</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lívia Maria Turra Bassetto</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana de Vito Zollner</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciane Costa Rodrigues</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucinéia Rossetto</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luís Fernando Campos D Arcadia</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Maicon Alves Dias</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Helena de Oliveira Gervazoni</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marina Leopoldina Gonçalves de Paiva da Mota Pereira</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Amaro Pereira</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Neli Silva Volpini</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Pedro Ricardo de Souza Danny</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>Q</h1></td></tr>
                        <tr>
                          <td>Queila da Silva Gimenez</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Raquel Franciscatti dos Reis</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Motta Chicoli Belchior</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Renata Patricia Lins de Queiroz</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosenes Luzia de Souza</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sergio Aparecido Bueno</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silmara Celia de Oliveira Ausec</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana Gazim Cardozo</td>
                          <td>Presidente Prudente</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Silvania de Souza Harder</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tatiane Cantelle</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vanessa Araujo Vallim Kina</td>
                          <td>Presidente Prudente</td>
                          <td>online</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="santos"></a>
                    <h5 style="font-size:28px">Santos</h5>
                    <p><strong>Local: </strong>UNIP (UNIVERSIDADE PAULISTA) CAMPUS II – RANGEL<br />Avenida Francisco Manoel s/n. Vila Mathias</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Adriana Eustaquio Brunskill</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriano Paulino dos Santos</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Martins de Souza Bento</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandra Vasconcelos da Silva</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Carlota Corrochel</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Battisti</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Anália Cristina Pereira Ramos</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Rodrigues de Lima Lancas</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ângela da Rocha</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Barbara Louise Pollacsek</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Barnabel Pereira da Silva</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Bruno Rodrigues Freitas</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Carlos Aguiar da Silva</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celino da Silva Santos</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Célio Alexandre da Silva</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Charles Roberto Urbano</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Claudia Ferreira Ramos Pinto</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Dagmar Trajano Pereira Ribeiro</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daiana Paula de Oliveira Sousa</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Daniela Helena Francisco Gonçalves</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Denise Gonçalves Nascimento</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dulcineia de Campos Silva Machado</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Eliana Iauch</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Eloar Nunes de Souza Santos</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Emilia Bottaro</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Estela Dalva Ribeiro Nogueira Leschaud de Rezende</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Eurípedes Pedro Mendonça Dias</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana de Fatima Augusto Murad</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabiane Andéa da Cunha</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabio Sergio Damasceno Barbosa</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Felipe Antonio Ferreira da Silva</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Flávio Augusto Balbin</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francisca Maria Maia Augusto</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francisco Junior Batista</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gisele Cristina Leite</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Halana Caroline da Silva</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Helio de Oliveira</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Henrique de Godoy Retz</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Irene Souza Andrade</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivone da Luz</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Joao Henrique Vilani</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Jonatas Turcato Syrayama</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jucione Evangelista Barrada</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Luciana Andrade Nascimento Fragoso</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Aparecida Chagas</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Lara Pupo Barduco</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Moraes Mascarenhas</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucirene Moreira Gonçalves Tavares</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Mara Cristina dos Santos Prior</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Antonio Aparecido Dias</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Alice Pires Marceniuk</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Corrêa Barbosa</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Pereira da Silva</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria do Carmo Penatti Fareleira</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Isabel Ponce Rey</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Luiza Rodrigues</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marilusi Más Torrecilla Batista</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maristela Santana Magalhães</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marta Cristina Rocha</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Merieli de Jong</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Moises Lopes da Silva</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nicleide Alexandre de Freitas</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patrícia Rocha do Marco Simões</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Lucianelli</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Regina Gomes Pedroso</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Paula Rodrigues Neves</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Rosano Rodrigues Rodrigues</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Pepita de Souza Figueredo</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rafael Fonseca de Aeaújo</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rilza Maria Pereira</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosangela Brito Castro dos Santos</td>
                          <td>Santos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sandra Regina de Souza</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valéria Dias Santos Vitor Maria</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vania França de Souza</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane Lima Martins</td>
                          <td>Santos</td>
                          <td>online</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="saojosedoriopreto"></a>
                    <h5 style="font-size:28px">São Jose do Rio Preto</h5>
                    <p><strong>Local: </strong>UNIP (UNIVERSIDADE PAULISTA)<br />Av. Pres. Juscelino Kubitschek de Oliveira - Jardim Tarraf II</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Adriana Aparecida de Almeida</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alan Rodrigues</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Alberto Marcelo Pelicce Albino</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline de Souza Brocco</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline Santana de Souza Luzan</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Amanda Fernandes Ribeiro</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Lúcia Brocanello</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia Maia Dante Galetti</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Almeida Falleiros Terçariol</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Patricia Machado Viana</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Buck Marcos Riccioppo Martins</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula de Queiroz Martinez Borges</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Andre Luis Correa Silva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André Luiz Muzel Briganti</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andressa Cristiane dos Santos</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Anelise Maria Nogueira Dourado</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Barbara dos Anjos Barbosa</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Cassia Fernanda Vitorino Cardoso Menis</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cirina Luz de Souza Trovó</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia de Lima Mandu Ferraz de Arruda</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cláudia Marta Viana</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Furlan</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Debora Pereira Paulino</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Denise Cristine Chiavelli Neiva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edevaldo de Souza Pinto</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina de Oliveira Melle</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erika Cristina Silva Batista Queiroz</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fabiana Barbosa Nrdi</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana de Fatima Barrantes</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fernanda Calochi Cardoso de Carvalho</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Silva Veloso</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flávia Javarotti de Oliveira</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francine Bettinelli Pastore dos Reis</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francine Martins Molinari</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Geisa Aparecida Capobianco Quintas</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gilvana Letícia Zambon</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Giorgiana Bertozi</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisele Amati Canevarollo</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Giuliana Aparecida Argenton Marçola</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Glorinha Mendonca da Silva Guerreiro</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Guilherme Mariano Martins da Silva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Helen Cristina Mendes Ferraz Marinho</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Janaina Olsen Rodrigues</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jéssica Cruz Heck Vanti</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joel Valter Sanches</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Josiane da Silva Pereira</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Josiani Borges Castro</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliane Guedes Menino</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Keila Mara Sant'Ana</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kelly Regina Ferreira</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kelly Thais Solcia</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Laura Colli Gon</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lilian Cristina Brandi da Silva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Livia Maria Ortega</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Terumi Nomura</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Marcia Catani Guidolin</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Regina da Silva Fedosse</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Antonio Rodrigues</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica Amoroso Garcez</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Dirceia Marques Del Arco</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Jose Cimino dos Santos</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria José Eliane Cardoso de Lima</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria José Veschi de Moura</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Luisa de Camargo Figueiredo Quelhas</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Luísa Goss de Carvalho Mendes</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Luiza</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Teresacarvalho</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Vitória Prata Palhares</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariana Barbieri Mantoanelli</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariana Rodrigues Vieira</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariana Vieira Ribeiro Longhitano</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marilda Cicone Franco dos Santos</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marina de Paula Batista</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marlei Guizellini Espinha</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marli Aparecida Pinto de Andrade</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Martha Aparecida Dias Cunha</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Mota da Silva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Milton César Munhoz Filho</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Mirela Lúcia Inácio</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mirella Fernanda Basaglia Pietro</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mitzi Daniele Batista de Lima</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monica Aparecida Betiol Sgobi</td>
                          <td>São José do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Noélio Fonseca da Silva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Odair Benedito Francisco</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patricia Borges</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Carla Zaldini Picinato</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rachel Chaves Barbosa</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rejane de Almeida Ribeiro</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Mendonça de Almeida Malzoni</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rodolfo Barbosa Rodrigues</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rodrigo D'Alexandre Barbom</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rogério Menezes de Moraes</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rogerio Pereira</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire de Jesus Ferrarezi Becari</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sandra Catalano Gonçalves</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Sandra Lorena Moura</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Maria Rosselli Barreira</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sílvia Cristina do Amaral Almeida</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvia Maria Alvim Regattieri</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sílvia Regina Rodrigues</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Cristina Succi</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Nunes Viçozo</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Aparecida Borges de Souza</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sueli Amaral Ramos</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tabita Pereira de Araujo</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tamar Naline Shumiski</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thaís Maris Basílio</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Verusca da Silva Cruz</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane de Carvalho Rezende</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Walkiria Aparecida David Silva</td>
                          <td>São Jose do Rio Preto</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Wilson Quatrochi Junior</td>
                          <td>São Jose do Rio Preto</td>
                          <td>presencial</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="saojosedoscampos"></a>
                    <h5 style="font-size:28px">São Jose dos Campos</h5>
                    <p><strong>Local: </strong>UNIP (UNIVERSIDADE PAULISTA)<br />Rodovia Presidente Dutra, km 157,5, Pista Sul</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Alessandra Maria Costa Carreira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina Barbosa Infante</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Helena de Medeiros Martins dos Santos</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Ligia Pinto Ferreira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Pinheiro</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Andrade Mendonça</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Batista da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Pereira da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Aparecida dos Anjos Lobo Brito de Paiva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aurea Maria Xavier da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Esteves Gomes</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Camila Fernanda Neves Placido</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Camila Matos Costa</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cindy Siqueira da Silveira</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Claudia Regina Pereira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Ribeiro Cantero Guimaraes</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Dalva Rosa dos Santos</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniel Martins da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Pereira de Carvalho</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danilo Jose da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Deise Helena Massa Domingues</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise de Oliveira Espindola</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Dilza Mari de Mira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Douglas Castilho de Souza</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Eliane Nunes Pereira Fujarra</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisa Christina de Araujo</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisa Rezende Leite de Abreu Oliveira</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elizabeth Thomé Stiebler Couto</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elzira Marçal Rodrigues Justino</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eurico Fiame Rodrigues</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Evellyn Martins Carvalho</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fernanda Trentin Goncalves</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Filipe Talon Mendes</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gerson Correa</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Helena Cristina Guerreiro Belda</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Herbet Luis Tirelli Pinto Cardoso</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Isabela de Paula Miranda</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>João Orgal dos Santos</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Julio Araújo Cordeiro do Vizo</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Julio Domiciano</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lázaro de Moura</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leandro Martins Moreno da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lenikezia Alves de Andrade da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luana Barbosa Pereira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana do Carmo Aguiar Sant'Ana de Carvalho.</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Tomé de Souza Castilho</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Mara Patrícia dos Santos</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Aparecida Martins</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcileni Aparecida Alves dos Santos da Mota</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica Nogueira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida de Arêdes Santos</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Pereira de Oliveira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Eunice Fagundes Colnago</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marilia Simões Martins</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marta Helena da Silva Araújo</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Matilde Helena Espindola</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maurilio de Carvalho</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maurino Ribeiro de Souza'</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Meiry Helen da Cunha Costa</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Meryvol Chelli Corrêa</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele de Paula Silva Gomes e Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Pereira de Oliveira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Millena Senziali Holme</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miriam Sueli de Almeida Izawa</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Naiara Leite dos Santos</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Nale Cristina Miranda Oliveir</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Nelson Aparecido de Oliveira Junior</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patricia Costa de Souza</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patrícia dos Santos Araújo Matias</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Priscila Bordon</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Regina Dimitrof Sant Anna</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Andrade Garcia</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renato Ramos Barbosa</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Riane Zuber Ferreira da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roberta Barros da Fonseca</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Mary Martins</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosangela Duarte Ferreira Lourenço</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Roseli Vieira da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sabrina Pires Guimarães</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Maria de Souza Ferreira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvia de Almeida Costa Macedo</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Stefânie Moura de Paiva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Stella Maria Cardoso da Silva</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tânia Mara Vitor Ferreira</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiana Cristina Vieira Queiroz Garcia</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiana Santos Massaroto</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vanessa Aparecida da Silva Rego</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane Barcellos Isidorio</td>
                          <td>São Jose dos Campos</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Waldecir Lourenço de Godoy</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Wilza de Fátima Mello</td>
                          <td>São Jose dos Campos</td>
                          <td>online</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="saopaulo"></a>
                    <h5 style="font-size:28px">São Paulo</h5>
                    <p><strong>Local: </strong>PUC-SP<br />Rua Ministro de Godoy, 969, Perdizes</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Ademar da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ademir Maciel dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ademir Rezende</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Aderson Toledo Moreno</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adilia da Ressurreição Inacio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adilson Leite</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Adriadene Cavalcante Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Araujo Pereira Dreher</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Cristina Rosembaum Nardis de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana de Paula Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana de Sáes Madeira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Hitomi Deguchi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Maciel de Oliveira Costa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Adriana Pavão Wada</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Adriana Ribeiro do Amaral</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Silene Vieira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Soeiro Pino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Sousa dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Tantin Calestine Giancursi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriana Tavares Lima</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Adriano Borba Correa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriano de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriano Gonçalves Felix</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Adriano Salustiano Berga</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Agatha Vieira Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Agnes Regina de Oliveira Leite</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Akemi de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alan Júlio da Silva Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Albaniza de Andrade Martins</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Alves da Paz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra de Campos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra de Seles Mendonça</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Garcia Bezerra da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Muniz de Siqueira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Regina Cosman</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Rodrigues Barbosa Rebelo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alessandra Silva Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alex Antonio Fiori</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alex de Paula Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandre Bezerra Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandre de Campos Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandre de Oliveira Melo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandre Ferreira Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexandre Gonçalves de Oliveira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Alexandre Tomaz Bonella de Araújo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alexsandro Pereirade Almeida</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline Borges</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline de Jesus Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline Francisco</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline Loures Quintão</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aline Rodrigues Cortezi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Altair Rodrigues de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Alzira Silva Cerqueira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Amanda Paulino Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Amanda Souza Ventura</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Amilton Bandeira Reis</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Aparecida Pereira Gonçalves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Carolina de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Cecília Mônaco</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Célia Zanesco Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Claudia Menezes Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Cosimina Peluso</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Cristina Alves de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Gabriela Dantas de Arruda Anselmi</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Lucia dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Lúcia Pereira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Maciel Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Alves de Carvalho</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Antunes Carmona</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Bicudo de Sousa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula de Oliveira Paes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula dos Santos Correia Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Garrido Marques Leite</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Mariano</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Martins da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Takata</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Paula Tavares da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Rosa Rocha de Andrade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ana Santina Marqui</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Anderson Batista Sana</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Anderson Cunha</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Anderson Hilario Pinheiro da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Anderson Oliveira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André dos Santos Bachiega</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André Jorge de Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andre Luiz da Costa Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andre Luiz Nascimento Partal</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André Nascimento da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André Rodello</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Alves de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andréa Antonieta Cotrim Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Cristina Luiz Palombo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andréa de Amorim Tomaz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Feliciano Alves da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Gomes Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Ribeiro Marinheiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andréa Rodrigues de Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Rodsi Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andrea Tomas da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreia Alves Matos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Andréia de Fátima Fumes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreia dos Santos Freitas</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Andreia Fagundes Henrique dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andréia Maria Moura de Gouveia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreia Rocha dos Santos Ruivo</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Andresa Mendes Seballo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andressa E. G. de Lima</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Andressa Maria Eneas Melo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andreza Maria de Souza Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aneleh Thaís da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Anete de Moraes de Almeida Tanioka</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Angela Alves de Passos Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angela Maria da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angela Maria Grattoni Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angela Nascimento Perez</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angélica Cristine Pinto Schultz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angélica Marques Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Angelo Alecsandro Dal Col</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Antonia Maria de Fatima Viana do Carmo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Antonia Vieira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Antonio Edmilson Nogueira Feitosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aparecida de Fátima Torres</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aparecida Elisabete Bardalatti Trinanes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Aparecida Rodrigues de Oliveira Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Arizla Regina Barbieri</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Arlete Alves dos Anjos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ataliba Ximenes Daragao Neto</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Aurea Elaine Tozo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ayunes Silva de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Bartira Marino Dorsa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Bernardino Junior Barreto de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Bianca Fiorentino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Bruna Damiana de Sá Mottinha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Bruna Fernandes Corrêa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Aparecida Viana Amaral</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Camila Oliveira de Jesus Martins</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Camilla Carla Salesi</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Carina Alice de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Andréia Thadei Nunes dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Cintia Luz Marques Cipriano</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Carla Cristine Procópio Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Gonçalves Conatti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Miki Shimizu</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Ranzani Magatti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Simone Ferreira Machado Lombardi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carlos Alberto dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carlos Alexandre Ferreira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Carlos Cordeiro Calado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carlos Eduardo da Silva Louro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carlos Eduardo Luiz</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Carlos Magno Precechan</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carlos Roberto Teixeira de Vasconcellos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carlos Roberto Watarai</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carmen Cecilia de Menezes Corrêa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carolina Batista dos Santos Reigota</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carolina de Almeida Souza</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Carolina de Castro Nyerges</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carolina França Von Gerhardt</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carolina Joaquim Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Caroline Oliveira Rensule</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cátia da Conceição Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cecilia Levart Zocca</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celi Olivieri</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celia Aparecida Piva Monteiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Célia Cortez</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Célia Maria Ribeiro Moreno</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Célia Regina Ferraz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Célia Regina Justiniano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celina Brunholle Benites Lanzetti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Celisa Coelho Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cesar Augusto Sinicio Marques</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ceuza Gomes Rocha de Souza</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Charles Marcelino da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Charles Nascimento dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Christian da Silva Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Christiane da Silva Matos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cibele Rocha Pedrozo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cibele Santos Cassimano</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cibele Schenke</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cícera Silva Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cilene Oliveira dos Santos Pinto</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cintia Alves de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cintia Berlofa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cintia Cherubino Luckhurst</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cintia Rocha Pedrozo Galrao</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Clarice de Fátima Soares Passerini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Adriana dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Aparecida de Oliveira Caldas</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Claudia Aparecida Macena Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cláudia Costa de Souza Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia de Nardi Moraes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cláudia Espinosa Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cláudia Fernanda Bastos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cláudia Godoi Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Lopes Chaves Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Maria Costa Dias</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>CLAUDIA PEDROSO DA ROCHA</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Rodrigues Figueiredo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Saes da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudia Silva Ferrareis da Cruz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudiene Barbosa Rezzutti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Claudio Aparecido Faian</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cláudio Pereira de Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cleide Antunes Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cleiton de Queiroz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cleonice Batista Campos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cleonildo Sena Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Conceição de Maria Silva Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cremilda Siva Mendes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Crislaine de Lira S. Marcelino</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cristhiane Dias de Azevedo Zanni</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cristhyna Aparecida Perez Guasques</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cristiane Baptista da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane de Fátima Doratiotto Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Ferreira Matos da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Simões de Pinho Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiane Vieira de Meireles</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristiano João Rosa Bezerra</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristielaine Aparecida Alves de Souza</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cristina Barbosa Laurentino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristina Cardeal Gomes dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristina de Cássia Fernandes Slemer</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cristina Ribeiro de Souza Pomela</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristina Rocha Fontes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cristina Torres Galindo de Araújo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cynthia de Almeida Sequeira Ladeira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Dagmar Lúcia Rosa Nogueira Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dalva Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Damaris Andrade de Medeiros</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danie Lpatricio Lara Cabezas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danieide Rodrigues da Cruz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniel de Mello Ferraz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniel Luis Herrera</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Daniela Brito de Queiroz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Cristine Magnesi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela de Lima Solla</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Garbin Catalani</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Gonçalves de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Lisboa Mafra Rufino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Morales Monteiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Oliveira Albertin de Amorim</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Daniele Esquivel Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniele Pereira da Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danielle Julio Caruso Leite</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Danielle Ramos Rosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dayana Sobral de Menezes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Débora Andrade Firmino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Débora Cristina Buoro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Debora da Silva Bello Magalhães</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Debora Guilarducci Fiusa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Débora Hradec</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Debora Mariana Ribeiro</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Debora Moura dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Débora Paschoaletto Possani</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Debora Renata Romano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Deborah Ramos de Oliveira Thomé</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Deise dos Santos Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Delzuita Ribeiro de Freitas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denilson Alves de Sant´Ana</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Denise Aguilar Anicelli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Boaventura Fernandes Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Calazans Kobayashi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Carmen dos Santos Longo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise de Souza Damasceno</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Denise Lina Polydoro Ninzoli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Maria Rennó dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Romao Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Deniz Alves de Deus do Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Deynna Ayalla Chaves Queiroz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Diana Nogueira Souza Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Diana Oliveira Assoni</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Diego Cachigian</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Diego Lopes Espírito Santo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Diego Soares da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Dimitra Dragassakis</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dionete Teixeira dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dirce Ferreira Borges</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dirley Gomes de Sena</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Djalma Gloria Junior</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Dorgival Pereira dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Dorinete de Oliveira Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Dulce Maria Ferreira Carossa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Durcilene Maria de Araujo Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edelsvitha Partel Murillo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edilaine Cristina Morrome</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edina do Amaral Paixão</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ediney Gusmão Junior</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edival Nilton Marques</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edjania Nunes da Conceicao</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Edna Aparecida Lopes Palacio</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Edna Lopes de Andrade Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edna Maria Boatto Prata</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edna Moreira da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Edney Orsi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edson Alves Paulino</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Edson Morais da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edson Ponciano Rosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edson Ricardo do Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eduardo Ferreira Abreu</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eduardo Prado Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edvalda Almeida Espanhol</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Edvane Soares de Lima Camursa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina da Silva Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina de Oliveira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina Fuji Sasaki</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Cristina Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elaine Sheila de Oliveira Batista Teixeira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elcine Nunes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elcio Rocha Pinto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eleonora Cordeiro Mattoso</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Eli Sandra Brito da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliana Aparecida da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliana de Almeida França Figueiredo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliana do Carmo Gomes da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliana Penha Correia Romero</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Aparecida dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane da Cruz Romani</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane de Assis Leme Vilar Matheus</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane de Sousa Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane do Carmo Zanini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Feitoza Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliane Loures Quintão Magnani</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Eliane Nunes da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elio Valdir Moreno Junior</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eliodete Pereira Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisa Gomes Martins Olimpio</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elisabete Aparecida Furlan Abate</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisabete Baena Sitnikas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisabete Cristina de Oliveira Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisangela Aparecida Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisângela Cardoso Marques Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisangela de Fatima Ferrareis Neri</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisangela Fernandes da Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisangela Ruth de Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elisângela Vieira de Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizabete de Souza E Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elizabete Jorge Pereira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elizabeth Augusto de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizabeth da Silva Soares</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizabeth de Araujo Meirelles</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elizabeth Garcia da Silveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizabeth Kasue Oshiro Kobashigawa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Elizabeth Myra Fernandes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizabeth Oliveira Carlos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elizangela Aparecida Viana</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ellen Fresneda da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elvis Brassaroto Aleixo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elza da Glória Jorge</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elzi de Sousa Braga Bastos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Enedina Aparecida Mendes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Enoque Rodrigues de Sousa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Érica Aparecida Almeida Sampaio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erica Marson Machado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erica Vieira dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erika Aguiar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erika Cremiato Lippe</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erika Diamantino Mota</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Érika Gonçalves da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Erisana Célia Sanches Victoriano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eunice Aparecida dos Santos Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eunice Frade da Silva Freitas</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Eurides Maria de Almeida Pedrozo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Evanilde Almeida Gomes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Eveline Kotaki Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Evelize de Oliveira Gennari</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Evelyn Lúcia Vavassori</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Everton da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>EVERTON DLÍCIO DO CARMO</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Évila Fernanda de Campos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabiana Casa de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Cristiane de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana de Araujo Shiga Armelin</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana de Paula Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Elias dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Felipe Lima Marcelino</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabiana Garcia Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Jorge da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Martins Malaguti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Mendes da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabiana Monteiro da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabiana Pastore Brasil</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiana Rainha de Farias Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiane de Almeida Vilela</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fabio Rodrigues Lemes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabiola Adriana Rodrigues de Oliveira Castilho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fabíola Andréia Giampaglia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fanuria Stavros Bitziou</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fátima Aparecida Braga Bezerra</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fátima Aparecida de Miranda do Prado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fatima Aparecida Falcão Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fátima Donan Bomfim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fatima Lobao Fraga</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fátima Mayumi Ioneda Hatano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fátima Nunes do Bonfim</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Fernanda Apparecida Nogueira Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Cristina de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Gonçalves Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Lopes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Maria de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Moraes dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Nogueira de Almeida</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Roque Monteiro do Amaral Prado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernanda Xavier Fontana Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernando Calcagni Sartori</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Fernando Okamura Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flaurinda Valeriano dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Flavia Aparecida Ferretti</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Flavia Emilly Costa de Moraes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flavia Regina dos Santos Alvim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flavio Olimpio de Camargo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flávio Sebastião Pastro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flavio Wilson de Oliveira Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Flor de Maria dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francileia Colnago</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francilene Maria de Andrade</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Francilene Peters Cosi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francisca Maria dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francisca Mislene de Almeida</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Francisca Teixeira Barbosa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Francisco Josino da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Frederico Helou Doca de Andrade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gabriela Alias Rios</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gabriela Messias Bueno</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gabriela Oliveira Monteiro</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Gabriele Monteiro da Costa Batista</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Geane Barbosa da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Geisa Belmonte de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Geisa Oliveira Ramalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gemima Perez</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Georgia Karla Roberto de Freitas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Geraldo Maria Tomaz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gerson Alves Gomes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>GIANE SERAFIM MENDES</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gildete Jeremias Soares</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Gilmar Silva Junior</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Gilmara Aparecida Prado Cavalcante</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Giovana Calazans do Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Girzele dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisele Adriana Silva de Oliveira de França</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisele Amaral dos Santos Soeda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisele Gomes Maia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisele Vanessa Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Giseli Gonçalves Borges Cedraz de Santana</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Gislaine Aparecida Rosa Carmo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gislaine Falcão dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gislene Melloni Moraes do Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Glace Augusta Motta Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Glorieta Bueno de Brito</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gracielle de Oliveira dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Graziele Dias Costa de Andrade Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Greice Amanda dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gustavo Gomes da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>H</h1></td></tr>
                        <tr>
                          <td>Helena Maria Taraborelli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Hellays Tatiane Fernandes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Henrique Gonçalves Moura</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Henriqueta da Silva Zanella</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Hesdrya Neves Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Hulda Maris Rodrigues Porto Motoki</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Ianne Cristine Souza Orona</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Iara Andrade de Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Iara Dalaqua Greghi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Iara Ribeiro Silva Bonati</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ikerly Pereira Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ingrid Caciabue Martins Ramos Capelos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ingrid de Souza Santos Bianchini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Iolanda da Costa Bezerra</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ioná Cavallini</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ione Ferreira Custodio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Irani da Silva Fernandes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ireni Aparecida Maquea Rocha Jenzura</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Irineia Fontes Mendes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Iris Munhos Lino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Isaac Pereira de Moraes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina Guedes da Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Isabel Cristina Tonini</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Isildinha de Jesus Stambowisky</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ismael de Souza Candido</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Isonete Sampaio Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivan Ferreira Guariroba</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivanete Paes Landim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivanilde Basilio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivany Fernandes Ciardullo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivete Ferreira de Lima Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivete Maria de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ivete Miranda</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ivone Tomaz de Oliveira Pessoa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Izabel Cristina Corrêa dos Anjos Freitas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Izabel Mendonça</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jacqueline Costa Bolela Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jacqueline Emery de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jacqueline Loiola Giroldi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jacqueline Nunes dos Santos Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jacqueline Zugaiar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jailson Gomes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janaina Aparecida de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janaína Barbosa da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janaina Brandão Lopes Guimarães</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janaina Cristina de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janaína Maria da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jane Alves Feitosa de Azevedo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jane de Oliveira Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jane Ribeiro de Barros</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Janne Aparecida de Carvalho Moreira Nunes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jaqueline da Silva Andrade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jaqueline Flores dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jean Corino Teodoro da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Jeniffer Hung</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Jesse Pereira Flores</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jessica Carla Braga Antunes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joane Crespilho Loureiro</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Joao Carlos de Carvalho Junior</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>João Paulo F Feliciano Magalhães</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joelma Martins</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joice de Souza Cheles</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jorge Luis Vitor Hipolito</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>José Acacio Rodrigues Tavares</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Jose Aparecido Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jose Arnaldo Alexandre Siqueira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>José Carlos Barbosa Lopes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>José Felippe Thomaz da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jose Marcos Brito dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joseli Baptista</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Josemir Inacio de Lemos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Josilene Lacerda dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Josimar da Silva Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Josué dos Santos Meninel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Joyce Camilo dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Joyce Figueiredo Aragão Gomes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juari Laforce</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jucileia Santino Pontirolli de Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jucimeire de Souza Bispo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Andrade Vargas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Celi de Jesus</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana de Castro Moreira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana de Morais Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Dutra de Azevedo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Herrera Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Lima Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Munhoz dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Pontes Barretos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Pontes Viana Clemente</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Juliana Prado Uchoa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Sales Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juraci de Castro Vilela</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jussara da Cruz Pires de Moraes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Karen Dantas Bonilho Maciel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Karen Martins Sillig</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Karen Pereira Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Karina Meira Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Karina Santos de Sousa</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Karla Maria Santos de Andrade Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kassia Santos Maria da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kate Santos de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Katia Biroli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Katia Cilene Maria A Fonseca Soares</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kátia do Nascimento Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kátia Isidoro de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Katiucia da Silva Figueiredo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Katiuscia Alves Bomfim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kayzy Guedes Nogueira Leobas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Keila Duarte Luiz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Kelly Aparecida Brandão Avelino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lafite Verissimo Nunes Soares</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Laura de Oliveira Amorim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Laura Dias da Silva Cotrim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Laura Marcela Sanchez de Toca</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Laura Maria Botareli Floriano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lauraci Benevides Leal</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lázaro Macena da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leandro Fabio dos Santos Ferreira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Leandro Pereira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leandro Rejani Ventura</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Léia Silva dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leia Soares Perrone</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leila Beatriz Nascimento de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leila Bonate de Oliveira Silva Mendes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leila Christine de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leila Rosemari Teixeira Borges</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lélia Silveira Melo Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lenise Freitas Borges</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Leonardo Leon dos Reis</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Leonildo Pereira de Souza</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Letícia Camilo da Conceição</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Letícia Roberta Jorge</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Levenic Vasilic Morales Yalles</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Liana Maura Antunes Silva Barreto</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lídia Moura Batista</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lidiane França Dal Belo Abreu</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ligia Crecchi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lilian Lady Nassif</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lilian Pino Arroyo do Valle</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Liliane Maria Santos Fioruci</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lívia Gonzalez Rodrigues Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lívia Lapastina Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Livia Moreira Marreiro</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lorenza Pavani Agostini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luana Costa Nogueria da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lúcia Aparecida Bezerra Kunieda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lúcia de Fátima Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Alves Uruga da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Aparecida Barros Martins</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Aparecida da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Barbosa Dogini</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luciana Moreira Suzuki</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Oliveira Barbosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Paolini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciano Kendi Furushima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucimara Erminia da Graça</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucinete Xavier Santana</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luis Claudio Ganassim</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luiz Antonio da Cruz Junior</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luiz Henrique dos Santos Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luiza Maria Delfino Gimenes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Luzia Regina Silva de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luziana Alves Felix de Figueiredo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lygea de Souza Ramos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magali Cristiane Catoia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Magaly Lindaura da Cruz</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maiara Alvim de Almeida</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maísa Silveira Martins</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Manoel Benedito da Cunha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mara Camillo Vicalvi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mara Lucia Gimenez</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcella Bauer Napolitano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcello Bulgarelli</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcelo Angelo Coura</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcelo Ganzela Martins de Castro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcelo Marcos Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcelo Rosado Ferreira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marci de Paula Campos Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Aparecida Abarca Teixeira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Aparecida Teodoro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Brizolla de Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Cleide da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Cristina de Oliveira Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia da Silva Macedo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>MÁRCIA DE FÁTIMA ALVES TRINDADE</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Márcia de Oliveira Jesus</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcia de Souza Teixeira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Maria Cabral</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Maria Colar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia Maria de Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Maria Schmitz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Maria Siribeli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Rafael da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Regina Boscariol Bertolino Barbosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Regina Mendes Bedinotti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Ribeiro de Oliveira Nunes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Márcia Rodrigues de Sales</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Rodrigues Pereira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcia Yoshiko Buto</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcio Siqueira de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marco Antonio Tenorio Paone</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Antônio Amaro da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Antônio Ferreira de Souza</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcos Antonio Gomes Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos de Souza Marinho</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcos Monteiro Cruz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Paulo de Jesus</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcus Tadeu Meneghelo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margareth Alves Leite de Siqueira Bittencourt</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margareth Oliveira Carlos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margareth Oliveira Silva Barros</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margarida Czurlinovics Leal</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margarida Maria de Paula</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Margarida Masetto Manzano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Adriana Nóbrega Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Alice Souza Natal</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Angela Alves</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Angélica Cal Garcia</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Couto Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida da Silva Lamas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Grigório</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Migliori</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Novais Dias de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Palmeira Babrosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Ramos de Matos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Bernadete da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cecilia de Paula Machado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cecilia Orrú Carnovalli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cláudia Lima de Mesquita</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Concetta Maltese</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Amarante</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Boccuzzi Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Faustino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Longuini Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria da Penha Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Daniela de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Das Dores Lima Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Das Graças Moreira Almeida</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima Agatão Garcia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima Barbosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima da Silva Perumalswamy</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima Formiga Vezzali</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima Lima Lopes Batista</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fatima Reami</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fatima Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria de Lourdes da Costa Menitti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Lourdes Fernandes Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Lourdes Machado Barbosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Lourdes Teixeira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria de Lurdes Vieira Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Eliana Santos Esplugues</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Elisene Isabel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Eugenia Witzler D'Esposito</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Filomena de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Gilvanda Santos Espindola</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Helena de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Helena Peçanha Mendes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Inês Toledo Guimarães Naso</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Lúcia da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Lúcia de Fátima Yada</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Lucia Ferreira Martins Braga</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Lucinete Basílio Rodrigues</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Luisa Souza Dias Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Ofélia Soares de Campos Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Regina Avelino Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Salete A. G. Parreira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Terezinha Pereira Pestana</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Viviane Silva Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariana Meira Magalhães</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariane Cassia de Padua</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marianna Maria Donadeli</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marilda Polo Favaretto Paterno</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariléia Ribeiro Rosa Fehlow</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marilene Cândida dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marilene Ortega</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marilia de Cassia Bolanho Morais</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Mariliz Cristina Coelho</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marina da Silva de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marina Gonçalves Buzzo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marina Luriko Hirose</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marina Messias dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marina Romano Aleixo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marina Romeiro Fernandes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marinilma Beno de Souza</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Mario Luis Calixto da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mário Sabino da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Mario Terashima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marisa Aparecida de Oliveira Campion</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marisa dos Santos Morgado</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marisa Gallo da Silva Munia</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maristela de Matos Couto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marlene Costa da Silva Gama</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marlene Rocha Viana de Andrade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marli Toniato de Vitto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marli Vieira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marta Baggio Bippus</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marta Marcondes Piedade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marta Nea Alves dos Santos Jacinto</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marta Sonia Santana Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mauricia Antonia de Andrade Maciel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mauro Marcel Santos de Brito</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mauro Ribeiro da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maxwell Alves de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Meire Moreira de Alencar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Melissa Zanardo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Melquisedec Chaves do Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Merlyn Goulart Grandizoli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michael Pereira de Oliveira Fernandes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Martins dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michelle da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michelle Martins de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miguel Gonzaga de Oliveira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Milena Aparecida Andrade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Milena Martinez</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Milene Massucato Rabello</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Milene Mitiko Ikemori</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miria Soares dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miriam Ahlers Fuzzo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miriam Alves Teixeira de Jesus</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miriam Joice Pires de Matos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Miriam José da Costa Basílio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Moacyr da Silva Caminada</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Moisés Galvão Batista</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Moises Jose de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mônica Aparecida do Amaral Lacerda Vanzella</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monica Cristina dos Reis</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mônica da Silva Blanco Osório</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mônica da Silva Ferreira Pires</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monica de Jesus Andersson</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monica Silva de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Monique Aghazarian Paiva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Monique Pereira dos Santos Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mylene Guedes Ricci</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Nadia Cristina Varjao Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nadia Regina Visconde de Souza Felipe</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nadir dos Santos Siqueira Romero</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nágela Oliveira Viana de Brito</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nair Braz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Narayana Monteiro da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Natalia Cavalcante Figueiredo</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Natanael Bená</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nathália Carvalho Lopes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neide Batista da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neide Magro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neila Santos de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Néli Maria da Silva Bertelli</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Nelly Maria Soares Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neuma dos Passos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neuma Sulivan Moraes Bezerra</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neura Lucia da Silva Matos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neusa Aparecida Abrunhosa Tapias</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neusa de Oliveira Brasileiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Neuseli Cardozo Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nickholas André Rodrigues de Azevedo Grangeiro Lobo</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Nilce Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nildete Ramos de Novais de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Nilton Jose Hirota da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Nilza Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Noeli Aparecida Rodrigues de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Noeli Augusta Oliveira Severo</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Olivia Alves Praeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Oneide do Nascimento Quispe</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Oseas Lourenço Aquino da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Osvaldo Domingos de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Pablo Pontes Ferraz</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Pamela Yvelise Santos Amaral</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paola Cordeiro Fernandes Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Amorim Agostini Pie</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Anunciada de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patrícia Aparecida de Azevedo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patrícia Aparecida de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia de Souza Guedes Bacca</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Lemes Grava</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Patricia Martins Amorim de Albuquerque</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Patrícia Martins Mafra</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Moura Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Mozelli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Romanini Pigatti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patricia Teresinha de Jesus Sousa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Patrícia Urvinis</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Cezar Munhoz Massi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Cristina Corrêa Francisco</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Cristina de Lima Santos Vilar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Cristina Gil Rehder</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Gonçalves Teixeira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Marcia Bonsegno Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Raquel Gonçalves de Sousa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paula Roberta Jerimias Cardoso</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Paulo Elias Collado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Guedes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Roberto Oliveira Mesquita</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Rogerio de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Saul Duek</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Sergio de Araújo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Sérgio de Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Perla Paulo Pires</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Peter Seije Matsumoto</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Priscila Cristina Ribeiro Sarmento</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Priscila dos Santos Costa Polizel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Priscila Leite dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Priscila Pettine</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Priscila Raimundo Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Priscila Rodrigues de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>Q</h1></td></tr>
                        <tr>
                          <td>Quitéria Rita Augusto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rafael Andrade dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rafael Angelo de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rafael de Oliveira Puritta</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rafael Furtado Leite</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rafael Silverira Lima Aguiar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rafael Torres</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rafaela Ribeiro de Castro Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Raffaele Pasquale</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Raione Siqueira dos Santos Militão Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ralph da Silva Guerrero</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ralph Teodoro da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Raquel Reis da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Raquel Ribeiro Borges</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rebeca Paz dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Regiane de Sousa Andrade</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Regiane Silva Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Regina Aparecida de Oliveira Figueiredo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Regina Célia Rodrigues Sécio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Regina Conceicao Cecilio de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Barbosa Vicente</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Cristina Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Cristina Caparrós</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata de La Torres Kubota</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Helena Simões</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Renata Ribeiro Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renata Saraiva Correa de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renato Aparecido Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renato dos Santos Gonçalves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Renato Jose da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ricardo Antunes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ricardo de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ricardo Elias de Araújo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ricardo Reges Macedo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rita de Cassia Barreto de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rita de Cássia Costacurta Gonzalez</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rita de Cássia Ferreira Nunes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rita de Cassia Franco Dias Correia</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rita de Cassia Jampietro Tafarel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rita de Cassia Pedroso de Moraes Cardoso</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Roberta Cristina da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roberta Garcia Vilani Bento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roberta Lopes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Roberto Henrique Machado</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Robson da Silva Lopes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rodolfo Michel da Silva Guimarães</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Alves Pereira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rodrigo Dozzo Gonçalves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rogéria de Oliveira Machado</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rogerio Menale Sampaio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ronildo Lacerda Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosa Ismeire de Assis de Assis Baldan</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria Caporrino Castanho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosa Maria Ruegger de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Aparecida Baptista Francisco</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Cabral Cardoso de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Cavalcante Lobo</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosana de Assis Divino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Maria da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosana Soncin Bianchi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Vieira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosângela Alexandrine dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosangela Bezerra Lippi</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosangela Damasceno Reys Cabral</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosangela de Fátima Cornélio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosangela dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosângela Gouveia Neves dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosangela Leite de Oliveira Ramos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosangela Marcato Pinto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosani do Socorro Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roseana Lacava</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roseli Aparecida Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roseli Cristina Bianchini Vendramini</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Roseli de Oliveira Lois</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Roseli Trevisan Marques de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemary Queiroz Moraes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Batista Gimenes de Araújo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire da Silva Zaninetti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Laporta Teixeira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Oliveira de Santana</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Ramos Buccolo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Rodrigues Bardon</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Santana N S Costa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosemeire Vieira da Silva</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Roseval Alves dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Rosilene Moreno</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosimeire Das Dores dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosimeire Franco Severino</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rozeli Frasca Bueno Alves</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rubia Mara Requena dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rute Ferreira Franco Paone</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Ruth Elza de Queiroz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Salete Morais dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Angélica de Jesus</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Sandra Ferreira de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Francisca dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Giacon da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Gonçalves da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Lúcia Teixeira de Almeida</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Sandra Maria Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Oliveira Brito</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Sandra Pereira de Jesus Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Gomes Moreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Gonçalves Valerio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Mariano de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Regina Pontello de Faria</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Sansão Cubo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandra Sousa de Caldas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sandy Katherine Weiss de Almeida Straub</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Santilia de Pinho Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sara Favero Raszl</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Saulo da Silva Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Scheila Lima Domingues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Selma Lucia Ferreira Silva de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Selma Pugliesi</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Selma Rosana Penna Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Selma Teles Moreira Candelário</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Selma Vilela de Melo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sheila Monteiro de Sousa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sheila Neri dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Shirley Ap. do Couto Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Shirley Tatiana Meneses Camilo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sigrid Angelica Perussi</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silmeire Vicente Dionizio</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana de Lima Tamberlini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana Felix Ramos Gutierrez</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana Gonçalves Macedo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana Maria de Oliveira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Silvana Salvador de Morais</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvana Tavares Nagem</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Silvia Cristina Balhes Rocha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvia Cristina Gomes Nogueira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvia Regina de Almeida Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvia Regina dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvia Regina Ramos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Silvio Alves Urquizar</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Almeida Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Aparecida Desidério</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone de Souza Carvalho</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Simone dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Maile Silva dos Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Martins de Albuquerque Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Rose da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Tavares Techima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Simone Thomaz Gomes Ruiz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sinval Elias de Souza</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sirleidi Freitas Candido</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sofia Isabel Sepúlveda de Figueiredo Macedo Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Solange Alves Silva Baciega</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Solange Augusta de Aquino</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Solange Bento Gomes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Alexandre de Melo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Aparecida Fais</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Campos Vieira de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Kotinda Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Maria Casalotti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Regina Moussalli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Sayami Suzuki Murakata</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Souza Ferri</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Stephanie Efstathiou</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sueli Benedita Vieira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sueli Carraturi</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Sueli de Freitas Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sueli Fernandes Ferreira Bernardi</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Sueli Mayumi Okutani Kawamura</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Suely Alves Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Suely Oliveira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Susilei Clemente</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Susy Cidely Weiss</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Susy Ongli Suzim Romano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Suzana Aparecida Nascimento Galvao</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Suzineide Freitas Santos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tabata Aguiar Passos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Tabata Gonçalves dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Tadeu Nogueira Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Talita Antunes Rodrigues</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Talita Taba da Silva Moretti</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tamires de Oliveira Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tania Aparecida de Fatima Ulian Almagro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tânia Conceição Nunes de Sá Gomes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tania Cristina Carmonario</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tania Mara Silva Pinto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tânia Maria Aparecida Palombo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tania Pessolato</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tania Regina Nagata</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Tatiana Andrade Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiana Ferreira Costa Carvalho</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiana Neves Sebastião</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiane Oliveira Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Telma Regina Abdo Santoro</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Teresa Cristina Vaz Castro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Terezinha Aparecida França</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thais Benitez Braga Odashima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thaís Blasio Martins</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thais Marques Diogo Brandolin</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thaís Renata de Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thais Renata Ramos Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thaisa de Fátima Avelar de Miranda</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Thiago de Souza Freire</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tiago Antonio do Nascimento</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>U</h1></td></tr>
                        <tr>
                          <td>Ubiraci Costa Pinto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Uilson Nunes de Carvalho Junior</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ursula Pedroso da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Vagner Candido de Queiroz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vagner José Santana</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valdete da Rocha Lima</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valdirlene Lucio Pinto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valdite Pereira Fuga</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valéria Bueno de Camargo</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Valéria da Penha Araújo Satiro de Oliveira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Valeria Lopes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valeria Maria Melare Cardoso</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Valéria Rodrigues Hora Silveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valguenia Ferné de Souza Torres</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Valkiria Bento Luiz</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanderlice Alves Praseres</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vandrigo Lugarezi Magalhães</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vaneli Cordeiro dos Santos Artibano</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanessa Aparecida Bonassa Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanessa Aparecida de Moraes</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vanessa Cristina Perandin</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanessa dos Santos Araujo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanessa Ghisolfi de Oliveira da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vanessa Nery Fahel</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vânia Aparecida Calderoni da Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vania Benedita Machado Alberine</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vânia Ferreira da Silva Caneki</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vânia Maria Silva Gomes de Oliveira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vania Rodrigues dos Santos</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vanilza Souza Marques Lemos</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Velma Ferri Ross Gallone</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vera Araujo Cabral</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia Brito</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia Cirne Lima Rahde</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vera Lucia Nory Almansa Iurif</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vera Lúcia Oliveira Ferreira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vilma de Araujo Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vinicius Ruiz Albino de Freitas</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Violeta Pascual Astacio Dias</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Viviam de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vivian da Silva Ribeiro</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vivian Ferreira Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vivian Goldoni Betini</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Viviane Aparecida Fávero Gibin</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane Biasini</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane Chehade Reis</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane Cibele Stahelin Derks</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane da Silva Ribeiro</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Viviane de Araújo</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane Isidoro de França</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviani Benedita Madurera Arruda</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vivien Serra Braga Mioto</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Vladimir Oliveira Ismael</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>W</h1></td></tr>
                        <tr>
                          <td>Wagner de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Wagner José Saldanha</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Walkiria Cuba e Silva</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>William Cesar Kopp Novaes</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>William Lopes Barbosa</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Willians Alves Magalhães</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>Y</h1></td></tr>
                        <tr>
                          <td>Yara Marisol Contipelli</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Yara Miashiro Cardoso de Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>Z</h1></td></tr>
                        <tr>
                          <td>Zenaide Almeida da Costa Oliveira</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Zilda Aparecida da Silva Guerrero</td>
                          <td>São Paulo</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Zoe Espindola de Aguiar Ferreira</td>
                          <td>São Paulo</td>
                          <td>presencial</td>
                        </tr>
                      </tbody>
                    </table>



                    <a href="#" class="topo">Voltar ao topo</a>
                    <a name="sorocaba"></a>
                    <h5 style="font-size:28px">Sorocaba</h5>
                    <p><strong>Local: </strong>PUC-SP<br />Rua Joubert Wey, 290, Jardim Vergueiro</p> 
                    <table style="width: 100%; margin-top:35px">
                      <thead>
                        <tr>
                          <th style="font-weight: bold; margin-bottom: 20px">Nome<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Cidade<br /></th>
                          <th style="font-weight: bold; margin-bottom: 20px">Modalidade<br /></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr><td><h1>A</h1></td></tr>
                        <tr>
                          <td>Ademar Soares Castelo Branco</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Adriano Rogerio dos Santos</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Alana Ferreira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Amanda Arruda de Araujo</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ana Maria Roveri</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Andre dos Santos Vieira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>André Luiz Rodrigues de Camargo</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>B</h1></td></tr>
                        <tr>
                          <td>Bianca Bergamo Basso</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Bruna Fernanda Dameto Moro</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>C</h1></td></tr>
                        <tr>
                          <td>Camila Fernandes da Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Carla Fernanda Brahim Pereira</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Cecília Squarzini</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cibele Cristina dos Santos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Cleusa de Macedo Correa</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Creusa Almeida Vieira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>D</h1></td></tr>
                        <tr>
                          <td>Daiane Soares Vicencato</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Miranda Marques da Costa</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniela Pelegrini Meireles</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniele Aparecida Guedes</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Daniella Vieira da Silva</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Denise de Souza Carreiro</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Denise Milerio Jacinto Blezins</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Deuziane Lourenço Martins da Costa</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Douglas Ferreira dos Santos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>E</h1></td></tr>
                        <tr>
                          <td>Edina Marta Dascanio Ferreira</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Edmara Regina Rodrigues Carriel</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edney Couto de Souza</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Edson Garcia dos Santos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Aparecida de Araujo Damaceno Velozo</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Elaine Vieira Ronick</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Emilianita Pena</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Érika Fernanda Rodrigues da Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Éverson de Oliveira Garcia</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>F</h1></td></tr>
                        <tr>
                          <td>Fernanda Rodrigues Bueno</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Francine de Oliveira Palma</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>G</h1></td></tr>
                        <tr>
                          <td>Gilvaneide Sousa Siqueira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gisele Valquiria Silva de Medeiros</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Giselle de Freitas Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Graziele Regina Fabricio</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Gustavo Ferreira Corrêa</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>I</h1></td></tr>
                        <tr>
                          <td>Ivone Zavadzki</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Ivy Camargo Vieira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>J</h1></td></tr>
                        <tr>
                          <td>Jane Maria da Cruz Correa</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jansen Gil Lera</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jaqueline Roma</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Jeovani Otávio Polizelli</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>José de Oliveira Junior</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Josiane de Oliveira Freitas</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Gonzaga da Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Juliana Peixoto da Rocha</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>K</h1></td></tr>
                        <tr>
                          <td>Kelly Cristina Rufino</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>L</h1></td></tr>
                        <tr>
                          <td>Lucelena Aparecida Orfeu</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lucia Aparecida Arantes</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Lúcia Veiga Schermack</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana de Fátima Gasparelo</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luciana Santi Siqueira Bastos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucilene Allonso</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Lucimar Moreira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luis Carlos Amorim</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luis Henrique Belge</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luscinia Maria Fazzio Barbin</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Luzia de Jesus Gonçalves</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>M</h1></td></tr>
                        <tr>
                          <td>Magna Cristina Jordão</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maisa Regina da Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mara Aparecida Soares Ishii</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcelo Rodrigo de Souza</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcia Aparecida Gomes</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Márcia de Cássia da Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marco Fernando de Mesquita Silva</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marcos Paulo Simãos</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marcus Vinicius Garcia Triveloni</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Aparecida Fernandes Braz Fekete</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Cirineo Rodrigues</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Cristina Monteiro</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria de Fátima Thomaz</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Palmira Pradelli Nan</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Maria Poliana do Amaral Zansávio</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Maria Tereza de Oliveira Espolaor</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mariana Merchiol</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Marilia Fernandes Lopes</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Marisa Mayumi Suenaga</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michele Maestri Pontes Nunes</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Michelle Leticia Botega Borges</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Mirles Aparecida Tezoto</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>N</h1></td></tr>
                        <tr>
                          <td>Neri Claudina da Costa</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>O</h1></td></tr>
                        <tr>
                          <td>Osmara de Oliveira Cleto</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>P</h1></td></tr>
                        <tr>
                          <td>Patricia Figueiredo dos Santos Albertin</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Paulo Roberto Gretzitz Kuntz</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Pedro Grimaldo Castanho Vieira</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>R</h1></td></tr>
                        <tr>
                          <td>Rafael Augusto Domingues</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rejane Moraes dos Santos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosamaria Sarti de Lima Ramos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosana Aparecida Rabelo Biglia</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Rosangela Alves dos Santos de Moraes</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>S</h1></td></tr>
                        <tr>
                          <td>Sandra Regina Teixeira Batista de Campos</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Santina Cassiano</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sara Cristina Marland Carriel</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>SÍLVIA HELENA SANT'ANA</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Solange Bergamo</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Solange Rocha Ferreira</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Sonia Leticia Vergueiro</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>T</h1></td></tr>
                        <tr>
                          <td>Tatiana Teles Luques dos Santos</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Tatiane Cristina de Moraes Arruda</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Telma Correa de Queiroz</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Thomas Felipe Rodrigues</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr><td><h1>V</h1></td></tr>
                        <tr>
                          <td>Valeria do Nascimento Amaro Moreira</td>
                          <td>Sorocaba</td>
                          <td>presencial</td>
                        </tr>
                        <tr>
                          <td>Vanderlei de Souza</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Veronica Nogueira de Lima</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr>
                          <td>Viviane de Fátima Higino</td>
                          <td>Sorocaba</td>
                          <td>online</td>
                        </tr>
                        <tr><td><h1>Y</h1></td></tr>
                        <tr>
                          <td>Yone Paezani Sanches</td>
                          <td>Sorocaba</td>
                          <td>online</td>
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
    
