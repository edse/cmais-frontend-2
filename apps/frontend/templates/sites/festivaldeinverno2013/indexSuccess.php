<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>

<!--bg-site-->
<div class="bg-site">
  <!--topo-->
  <div class="topo">
    <a href="/festivaldeinverno2013" target="_self">
      <!--logo-->
      <img class="logo" src="/portal/images/capaPrograma/festivaldeinverno2013/logofestival.png" alt="Festival de Inverno na Cultura"/>
      <!--/logo-->
    </a>
     
    <div class="box-direita">
      <!-- horario -->
      <div id="horario">
        <p>sábado, 29 de junho, às 20h30</p>
      </div>
      <!-- /horario --> 
         
      <!-- curtir -->
      <div class="redes">
        <div class="curtir">
          <div style="display:block; float: left; margin-right:10px;">
          <g:plusone size="medium" count="false"></g:plusone>
          </div>
          <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
        </div>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
      </div>
      <!-- /curtir -->
    </div>
  </div>
  <!--topo-->

</div>
<!--bg-site-->

<!-- CAPA SITE -->
<div id="capa-site">      

  <!-- MIOLO -->
  <div id="miolo">
    
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      
      <!-- CAPA -->
      <div class="capa grid3">
        
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <iframe width="640" height="390" src="http://www.youtube.com/embed/if5gEaIzk7s?rel=0" frameborder="0" allowfullscreen></iframe>
          <p class="titulos">Festival de Inverno de Campos do Jordão na Cultura</p>
          <p> A TV Cultura exibe neste sábado, 29 de junho, às 20h30, o concerto de abertura do 44º Festival de Inverno de Campos do Jordão, considerado o mais importante evento de música clássica do Brasil. Sob o comando de Marin Alsop, a OSESP sobe a serra para apresentar no Auditório Claudio Santoro obras de Camargo Guarnieri, Leonard Bernstein e Luciano Berio.</p>
          <a href="http://culturafm.cmais.com.br/festival-de-inverno-de-campos-do-jordao-na-cultura" target="_blank">VEJA A PROGRAMAÇÃO COMPLETA</a>
          <?php include_partial_from_folder('blocks','global/share-2c-w-comments', array('site' => $site, 'uri' => $uri) ) ?>
        </div>
        <!-- /ESQUERDA -->
        
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          

          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- programas-homepage-300x250 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-300x250");
            </script>
          </div>                                        
          <!-- / BOX PUBLICIDADE -->

        </div>
        <!-- /DIREITA -->
        
      </div>
      <!-- /CAPA -->
      
      <?php if (isset($displays["rodape-interno"])): ?>
      <!--APOIO-->
      <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
      <!--/APOIO-->
      <?php endif; ?>
      
    </div>
    <!-- /CONTEUDO PAGINA -->
    
  </div>
  <!-- /MIOLO -->
  
</div>
<!-- /CAPA SITE -->
    
