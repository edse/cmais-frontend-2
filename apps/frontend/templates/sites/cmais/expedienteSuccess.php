<link rel="stylesheet" href="/portal/css/tvcultura/geral.css" />  
<?php if($section->Parent->Parent->getSlug() != ""): ?>
  <link rel="stylesheet" href="/portal/css/tvcultura/secoes/<?php echo $section->Parent->Parent->getSlug() ?>.css" type="text/css" />
<?php else: ?>
  <link rel="stylesheet" href="/portal/css/tvcultura/secoes/<?php echo $section->Parent->getSlug() ?>.css" type="text/css" />
<?php endif; ?>
<link rel="stylesheet" href="/portal/css/tvcultura/sites/expediente.css" />
<link type="text/css" href="/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <!-- box-topo -->
        <div class="box-topo grid3">

          <h3 class="tit-pagina"><a href="#" class="<?php echo $section->getSlug() ?>"><?php echo $section->getTitle() ?></a></h3>

          <!-- menu interna -->
          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
          <!-- /menu interna -->

          <div class="navegacao grid3">
            <a href="http://cmais.com.br" title="Home">Home</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/<?php echo $section->Parent->getSlug() ?>" title="<?php echo $section->Parent->getTitle() ?>"><?php echo $section->Parent->getTitle() ?></a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/<?php echo $section->Parent->getSlug() ?>/<?php echo $section->getSlug() ?>" title="<?php echo $section->getTitle() ?>"><?php echo $section->getTitle() ?></a>
          </div>
          
        </div>
        <!-- /box-topo -->
      </div>
      <!-- /BARRA SITE -->

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
              <!--Expediente-->
              <h1>Equipe Cmais+</h1><br/>
              
              <h2>Gerência de Multiplataforma</h2>
              <p>Paulo Garcia</p><br/>
 
              <h2>Design e Criação</h2>
              <p>
                Ariane Corniani<br/>
                Debora Soares<br/>
                Giuliana Xavier<br/>
              </p><br/>  
 
              <h2>Conteúdo</h2>
              <p>
                Débora Centoamore<br/>
                Juliano Nunes<br/>
                Maria Montesanti<br/>
                Pedro Nakano<br/>
                Priscila Lima<br/>
                Thábata Mondoni<br/>
              </p><br/>  

              <h2>Desenvolvimento e Programação</h2>
              <p>
                Cristovam Ruiz Jr.<br/>
                Emerson Estrella<br/>
                Jefferson M. Doljak<br/>
                Rafael Cruz<br/> 
                Renata Noronha<br/>
              </p><br/>   

              <h2>Estagiárias</h2>
              <p>
				Josilene Veloso<br/>
              	Mariana Amorim<br/>
              	Nádia Atie<br/>
              </p><br/>
              
              <h2>Fundação Padre Anchieta</h2><br/>

              <h2>Presidente</h2>
              <p>Marcos Mendonça</p><br/>
 
              <h2>Vice Presidente de Conteúdo</h2>
              <p>Eduardo Brandini</p><br/>

              <!--/Expediente-->
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
              
              
              
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
    
    <form id="send" action="" method="post">
      <input type="hidden" name="d" id="d" value="<?php echo $d ?>" />
    </form>
    <script>
      function send(d){
        $("#d").val(d);
        $("#send").submit();
      }
    </script>    
