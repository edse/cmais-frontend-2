
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
    
