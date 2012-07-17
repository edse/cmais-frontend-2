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

            <!-- MENU BOTAO -->
            <li class="active"><a href="/sic">Início</a></li>
            <!-- /MENU BOTAO -->
            
            <!-- MENU BOTAO -->
            <li><a href="/sic/solicitar-informacoes">Solicitar Informações</a></li>
            <!-- /MENU BOTAO -->
            
            <!-- MENU BOTAO -->
            <li><a href="/sic/acompanhar-solicitacao">Acompanhar Solicitação</a></li>
            <!-- /MENU BOTAO -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu1">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                Documentos Institucionais
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Estatuto da FPA </a></li>
                <li><a href="#">Organograma</a></li>
                <li><a href="#">Atas do Conselho</a></li>
                <li><a href="#">Relatório de Atividades 2011</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu2">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">
                Documentos Financeiros
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Orçamento 2012</a></li>
                <li><a href="#">Repasses do Estado no ano</a></li>
                <li><a href="#">Projetos da Lei Rouanet</a></li>
                <li><a href="#">Convênios</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu3">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu3">
                Regulamentos
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Regulamento de Compras e Contratos</a></li>
                <li><a href="#">Licitações em andamento</a></li>
                <li><a href="#">Orientações ao fornecedor</a></li>
                <li><a href="#">Regulamento de consulta e compra</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown" id="menu4">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#menu4">
                Processo Seletivo
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Regulamento</a></li>
                <li><a href="#">Convocação</a></li>
                <li><a href="#">Resultados de seleção</a></li>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            
            <!-- MENU BOTAO -->
            <li><a href="/sic/faq">FAQ</a></li>
            <!-- /MENU BOTAO -->
            
          </ul>
          <!-- /MENU PRINCIPAL -->

        </div>
        <!-- /MENU SIC -->