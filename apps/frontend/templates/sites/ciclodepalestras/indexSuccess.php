<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <h2>
        <a href="http://cmais.com.br/ciclodepalestras">
          <img alt="Ciclo de Palestras" src="/portal/images/capaPrograma/ciclodepalestras/logo_palestras.jpg"> 
        </a>
      </h2>
      <img id="apoio" alt="Ciclo de Palestras" src="/portal/images/capaPrograma/ciclodepalestras/logos_palestras.jpg">  
      
    </div>
    <!-- box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts')?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div class="grid2" id="esquerda">
          <iframe width="640" height="390" src="http://www.youtube.com/embed/videoseries?list=PL0Qz-covvhxROHvVGcrw2Zcs_rUsY-mIa" frameborder="0" allowfullscreen></iframe>
          <p class="titulos">Ciclo de Palestras e Debates | FPA | ABPI TV | SENAC</p>
          <p>Assista na íntegra ao ciclo de palestras e debates sobre Financiamento e Negócios no Mercado Audiovisual Brasileiro, promovido pela Fundação Padre Anchieta, ABPI TV e Senac e ocorrido no dia 26 de abril de 2013.</p>
        </div>
        <!-- ESQUERDA -->
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
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
