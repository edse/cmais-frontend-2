<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

		<link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.21.custom.css" type="text/css" media="all" />
		<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
		
		<script>
		$(document).ready(function() {
		  $("#accordion").accordion();
		});
		</script>

    <!-- CAPA SITE -->
    <div id="capa-site">
    
      <!-- TOPO SIC -->
      <div id="topo-sic">
        
        <!-- LOGO -->
        <a href="/sic/index.html" title="SIC">
          <img src="imgs/logo-sic.png" alt="" class="logo-sic"/>
        </a>
        
        <div id="risco"></div>
        <!-- /LOGO -->
        
        <!-- MENU -->
        <div class="menu-sic">
          
          <ul>
            <li>
              <a href="#" title="Home">
                Home
              </a>
            </li>
            <li>
              <a href="#" title="Cadastramento de Solicitação">
                Cadastramento de Solicitação
              </a>
            </li>
            <li>
              <a href="#" title="Acompanhe sua solicitação">
                Acompanhe sua solicitação
              </a>
            </li>
            <li>
              <a href="#" title="link 5">
                link 5
              </a>
            </li>
            <li>
              <a href="#" title="link 6">
                link 6
              </a>
            </li>
          </ul>  
        </div>  
        <!-- /MENU -->
        <div id="risco"></div>
      </div>  
      <!-- /TOPO SIC-->
      
      
      <!-- CORPO SITE -->
      <div id="corpo-sic">
        <!-- COLUNA ESQUERDA -->
        <div class="float col-420-sic">
          
          <h2>
            Acesso a informação
          </h2>
          <span class="pergunta">O que é?</span>
          <p>
           A Fundação Padre Anchieta, na qualidade de instituição pública que recebe recursos do Estado de São Paulo, disponibiliza nesta área o SIC - Serviço de Informação ao Cidadão. O serviço, tem por  objetivo  promover  o acesso amplo às informações e documentos relacionados à gestão de qualquer  instituição pública, seja federal, estadual ou municipal. Leia +
          </p> 
          <!-- COLUNA SUB ESQ 1 -->
          <div class="coluna-sub-1 cinza-claro texto-branco">
            <h4>Oriente-se</h4>
            <p>Antes de cadastrar seu requerimento, verifique nos itens 
            do menu se a informação ou documento de seu interesse 
            já está publicada aqui no site</p>
            <!-- COLUNA SUB ESQ 2 -->
            <div id="accodion" class="coluna-sub-1 cinza-escuro">
              <a href="javascript:;" class="menu-sic"/>
                <h4>Dicas </h4>
              </a>
              <div id="risco-2"></div>
              <div class="conteudo" style="display: none;">
                <p>
                  a)Para que sua consulta seja mais precisa, descreva com objetividade e clareza o tipo de informação ou documento que procura. Você tem um limite de 600 caracteres para esta descrição.
                </p><br/>
                <p>
                  b) Faça um pedido por vez. O protocolo oferecido corresponde uma requisição cujo fluxo segue até a resposta à sua solicitação ou até a resposta a um recurso se o pedido original for negado.
                </p><br/>
                <p>
                  c) Caso queira ter acesso a mais de um tipo de documento ou de informação. Preencha NOVA requisição. Não será necessário preencher novo cadastro,  pois o número de identificação RG ou CNPJ recuperará seus dados e abrirá campo da SOLICITAÇÂO.
Exemplo: Destinatário da FPA (Compras,Jurídico, Tesouraria, Engenharia, Administração, TV Cultura, Rádio Cultura FM, Rádio Cultura AM, Produtos, Projetos e Parcerias Características: Tipo de informação (gastos, receita, participantes, parcerias)  ou tipo de Documento (Balancete, licitação, contratos), Período ou data  
                </p><br/>
                <p>
                  d) Recomenda-se evitar solicitações com exagero explícito ou sem nexo. Estas poderão não ser atendidas com  
                </p><br/>
                <p>
                  e) Verifique a cada solicitação se seus dados de endereço e telefone estão atualizados
                </p>
              </div>
            </div>  
            <!-- /COLUNA SUB ESQ 2 -->
          </div>           
          <!-- /COLUNA SUB ESQ 1 -->
        </div>
        <!-- /COLUNA ESQUERDA -->
        
        <!-- COLUNA DIREITA -->
        <div class="float col-570-sic">
          
          <!-- COLUNA SUB DIR 1 -->
          <div class="coluna-sub-1 cinza-claro-2 texto-branco">
            <span class="titulo bold">Formas de Atendimento do SIC na Fundação Padre Anchieta</span>
            <!-- COLUNA SUB DIR 2 -->
      
            <div id="accordion" class="texto-preto">
              <h3><a href="#">Section 1</a></h3>
              <div>
                <p>
                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
              </div>
              <h3><a href="#">Section 1</a></h3>
              <div>
                <p>
                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
              </div>
              <h3><a href="#">Section 1</a></h3>
              <div>
                <p>
                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
              </div>
              <h3><a href="#">Section 1</a></h3>
              <div>
                <p>
                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                </p>
              </div>
             </div>
   


          </div>           
          <!-- /COLUNA SUB DIR 1 -->
        </div>  
        <!-- /COLUNA DIREITA -->
      </div>  
      <!-- /CORPO SITE -->
      
    </div>
    <!-- / CAPA SITE -->
  