<link rel="stylesheet" href="/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date')?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))  ?>
</div>
<div class="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site"  >
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <h2><img title="Vitrine" alt="Revista Vitrine" src="/portal/images/capaPrograma/revistavitrine2/logo-vitrine.png"></h2>
    </div>
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts')    ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <?php include_partial_from_folder('sites/revistavitrine2','global/menu', array('siteSections' => $siteSections, "site" => $site, "section" => $section)) ?>
     
      <?php if(isset($program) && $program->id > 0): ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif; ?>
      
      <div class="capa-revista online">
        <div class="descricao">
          <h2><?php echo $asset->getTitle() ?></h2>
          <p class="data">Junho - 2013</p>
          <p>Nesta edição, Eloar Guazzelli tenta desvendar o universo de Fernando Pessoa em HQ. Veja ainda, entrevista com Tom Zé, reportagem sobre o futuro dos televisores e um perfil da nova MPB.</p>
        </div>
        <div class="issue">
          <?php if(isset($displays["destaque-revista"])):        ?>
          <?php echo html_entity_decode($displays["destaque-revista"][0]->Asset->AssetContent->render())        ?>
          <?php endif?>
          <h3>Versão online | Leia gratuitamente</h3>
        </div>
        
        <div class="edicoes">
          <div class="tit-edicoes">
            <h3>Outras Edições</h3>
          </div>
          
          <ul>
            <li>
              <a href="#" title="Edição #1">
                <img src="/portal/images/capaPrograma/revistavitrine2/thumb-revista.jpg" alt="Edicao #1" />
                <div class="descricao">
                  <h2>Vitrine #03</h2>
                  <p class="data">Junho - 2013</p>
                  <p>Nesta edição, Eloar Guazzelli tenta desvendar o universo de Fernando Pessoa em HQ. Veja ainda, entrevista com Tom Zé, reportagem sobre o futuro dos televisores e um perfil da nova MPB.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#" title="Edição #1">
                <img src="/portal/images/capaPrograma/revistavitrine2/thumb-revista.jpg" alt="Edicao #1" />
                <div class="descricao">
                  <h2>Vitrine #03</h2>
                  <p class="data">Junho - 2013</p>
                  <p>Nesta edição, Eloar Guazzelli tenta desvendar o universo de Fernando Pessoa em HQ. Veja ainda, entrevista com Tom Zé, reportagem sobre o futuro dos televisores e um perfil da nova MPB.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#" title="Edição #1">
                <img src="/portal/images/capaPrograma/revistavitrine2/thumb-revista.jpg" alt="Edicao #1" />
                <div class="descricao">
                  <h2>Vitrine #03</h2>
                  <p class="data">Junho - 2013</p>
                  <p>Nesta edição, Eloar Guazzelli tenta desvendar o universo de Fernando Pessoa em HQ. Veja ainda, entrevista com Tom Zé, reportagem sobre o futuro dos televisores e um perfil da nova MPB.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#" title="Edição #1">
                <img src="/portal/images/capaPrograma/revistavitrine2/thumb-revista.jpg" alt="Edicao #1" />
                <div class="descricao">
                  <h2>Vitrine #03</h2>
                  <p class="data">Junho - 2013</p>
                  <p>Nesta edição, Eloar Guazzelli tenta desvendar o universo de Fernando Pessoa em HQ. Veja ainda, entrevista com Tom Zé, reportagem sobre o futuro dos televisores e um perfil da nova MPB.</p>
                </div>
              </a>
            </li>
            <li>
              <a href="#" title="Edição #1">
                <img src="/portal/images/capaPrograma/revistavitrine2/thumb-revista.jpg" alt="Edicao #1" />
                <div class="descricao">
                  <h2>Vitrine #03</h2>
                  <p class="data">Junho - 2013</p>
                  <p>Nesta edição, Eloar Guazzelli tenta desvendar o universo de Fernando Pessoa em HQ. Veja ainda, entrevista com Tom Zé, reportagem sobre o futuro dos televisores e um perfil da nova MPB.</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="paginacao grid3">
        <div class="centraliza">
          
          <a href="javascript: goToPage(1);" class="btn anterior">Anterior</a>
          <ul>
            <li><a class="ativo" href="javascript: goToPage(1);">1</a></li>
            <li><a href="javascript: goToPage(2);">2</a></li>
            <li><a href="javascript: goToPage(3);">3</a></li>
            <li><a href="javascript: goToPage(4);">4</a></li>
            <li><a href="javascript: goToPage(5);">5</a></li>
          </ul>
          <a href="javascript: goToPage(2);" class="btn proxima">Próxima</a>
         
        </div>
      </div>
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
<script type="text/javascript">
  $('.btn-sobre').click(function() {
    $('.sobre').toggle();
    $('.btn-sobre').toggleClass("ativo");
  });

</script>
