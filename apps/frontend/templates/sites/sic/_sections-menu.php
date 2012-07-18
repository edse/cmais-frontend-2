        <!--menu Drop Down -->
        <script>
          $('.dropdown-toggle').dropdown()
        </script>
        <!--/menu Drop Down -->
        
        <?php //if(count($siteSections) > 0): ?>
        <!-- MENU >
        <div class="menu-sic">
          <ul>
            <?php foreach($siteSections as $s): ?>
            <li>
              <a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>">
                <?php echo $s->getTitle()?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>  
        </div>  
        <!-- /MENU -->
        <?php //endif; ?>

        <!-- MENU SIC -->
        <div class="menu-sic">
          
          <!-- MENU PRINCIPAL -->
          <ul class="nav nav-pills">

            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu1">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                Solicitações
              </a>
              <ul class="dropdown-menu">
                <li><a href="/sic/solicitar-informacoes" title="Solicitar Informação">Solicitar Informação</a></li>
                <li><a href="/sic/acompanhar-solicitacao" title="Acompanhar Solicitação">Acompanhar Solicitação</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu5">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu5">
                Licitações
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" title="Licitações em andamento">Licitações em andamento</a></li>
                <li><a href="#" title="Editais já concluídos (desde 16/05) e respectivos resultados">Editais já concluídos (desde 16/05) e respectivos resultados</a></li>
                
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
                        
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu4">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">
                Regulamentos
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" title="Regulamento de Compras e Contratos">Regulamento de Compras e Contratos</a></li>
                <li><a href="#" title="Orientações ao fornecedor para inscrição no Caufesp">Orientações ao fornecedor para inscrição no Caufesp</a></li>
                <li><a href="#" title="Regulamento interno do Processo Seletivo">Regulamento interno do Processo Seletivo</a></li>
                <li><a href="#" title="Regulamento de consulta e compra de material do acervo áudio-visual">Regulamento de consulta e compra de material do acervo áudio-visual</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->

            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu3">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu3">
                Finanças
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" title="Orçamento 2012">Orçamento 2012</a></li>
                <li><a href="#" title="Repasses do Estado no ano">Repasses do Estado no ano</a></li>
                <li><a href="#" title="Balanço de 2011">Balanço de 2011</a></li>
                <li><a href="#" title="Plano Anual da Lei Rouanet">Plano Anual da Lei Rouanet</a></li>
                <li><a href="#" title="Projetos aprovados da Lei Rouanet">Projetos aprovados da Lei Rouanet</a></li>
                <li><a href="#" title="Convênios">Convênios</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->

            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu6">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu6">
                Processo Seletivo
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" title="PSs em andamento">PSs em andamento</a></li>
                <li><a href="#" title="Resultados de seleções anteriores">Resultados de seleções anteriores</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu7">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu7">
                Links
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" title="Portal do Governo Aberto">Portal do Governo Aberto</a></li>
                <li><a href="#" title="Portal da Transparência">Portal da Transparência</a></li>
                <li><a href="#" title="Decreto 58.052, que regulamenta o assunto">Decreto 58.052, que regulamenta o assunto</a></li>
                <li><a href="#" title="Portal do Governo Federal">Portal do Governo Federal</a></li>
                <li><a href="#" title="Lei federal 12.257">Lei federal 12.257</a></li>
                <li><a href="#" title="Cartilha da Lei de Acesso à Informação">Cartilha da Lei de Acesso à Informação</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu2">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">
                Institucional
              </a>
              <ul class="dropdown-menu">
                <li><a href="#" title="Estatuto da FPA">Estatuto da FPA</a></li>
                <li><a href="#" title="Composição do Conselho Curador">Composição do Conselho Curador</a></li>
                <li><a href="#" title="Atas do Conselho">Atas do Conselho</a></li>
                <li><a href="#" title="Diretoria">Diretoria</a></li>
                <li><a href="#" title="Organograma">Organograma</a></li>
                <li><a href="#" title="Relatório de Atividades 2011">Relatório de Atividades 2011</a></li>
                <li><a href="#" title="Patrimônio">Patrimônio</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO -->
            <li class="active"><a href="/sic">Sobre</a></li>
            <!-- /MENU BOTAO -->
            
            <!-- MENU BOTAO -->
            <li><a href="/faq" style="margin-right:0 !important;">FAQ</a></li>
            <!-- /MENU BOTAO --> 
            
                                        
          </ul>
          <!-- /MENU PRINCIPAL -->

        </div>
        <!-- /MENU SIC -->