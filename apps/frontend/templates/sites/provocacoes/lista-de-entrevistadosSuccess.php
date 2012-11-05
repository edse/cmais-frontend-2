<link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />

<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))
?>

<!-- CAPA SITE -->
<div class="bg-provocacoes">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="/uploads/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
        ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule())
          ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <!-- box-topo -->
      <div class="box-topo grid3">
        <?php if(count($siteSections) > 0):
        ?>
        <ul class="menu">
          <?php foreach($siteSections as $s):
          ?>
          <li><a href="<?php echo $s->retriveUrl() ?>" title="<?php echo $s->getTitle() ?>" <?php if($s->getId() == $section->getId()):?>class="ativo"<?php endif;?>><span><?php echo $s->getTitle()
          ?></span></a></li>
          <?php endforeach;?>
        </ul>
        <?php endif;?>
      </div>
      <!-- /box-topo -->
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo">
      <!-- BOX LATERAL -->
      <?php include_partial_from_folder('blocks','global/shortcuts')
      ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <div class="centroRV">
              <div class="geral">
                <h2><?php echo $section->getTitle()
                ?></h2>
                
                <!-- LISTA -->
                <h2 id="data-post">27 de Janeiro de 2011</h2>
                <!-- BOX LISTAO -->
                <div class="box-listao">
                  <ul>
                    <li><a href="#" class="titulos">PGM01 - 06/08/2000</a><p>Mario Prata / Jorge Wilheim / Mario Chamie / Marina De Sabrit E Suzana Alves</p></li>
                    <li><a href="#" class="titulos">PGM01 - 06/08/2000</a><p>Mario Prata / Jorge Wilheim / Mario Chamie / Marina De Sabrit E Suzana Alves</p></li>
                    <li><a href="#" class="titulos">PGM01 - 06/08/2000</a><p>Mario Prata / Jorge Wilheim / Mario Chamie / Marina De Sabrit E Suzana Alves</p></li>
                    <li><a href="#" class="titulos">PGM01 - 06/08/2000</a><p>Mario Prata / Jorge Wilheim / Mario Chamie / Marina De Sabrit E Suzana Alves</p></li>
                    <li><a href="#" class="titulos">PGM01 - 06/08/2000</a><p>Mario Prata / Jorge Wilheim / Mario Chamie / Marina De Sabrit E Suzana Alves</p></li>
                    <li><a href="#" class="titulos">PGM01 - 06/08/2000</a><p>Mario Prata / Jorge Wilheim / Mario Chamie / Marina De Sabrit E Suzana Alves</p></li>
                    
                  </ul>
                </div>
                <!-- /BOX LISTAO -->
                <div class="paginacao">
                  <div class="centraliza">
                    <a class="btn-ante" href="javascript: goToPage(1);"></a>
                    <a href="javascript: goToPage(1);" class="btn anterior">Anterior</a>
                    <ul>
                      <li><a class="ativo" href="javascript: goToPage(1);">1</a></li>
                      <li><a href="javascript: goToPage(2);">2</a></li>
                      <li><a href="javascript: goToPage(3);">3</a></li>
                      <li><a href="javascript: goToPage(4);">4</a></li>
                      <li><a href="javascript: goToPage(5);">5</a></li>
                    </ul>
                    <a href="javascript: goToPage(2);" class="btn proxima">Próxima</a>
                    <a class="btn-prox" href="javascript: goToPage(2);"></a>
                  </div>
                </div>
                <!-- /LISTA -->
              </div>
              <div class="box-publicidade">
                <script type='text/javascript'>
					GA_googleFillSlot("cmais-assets-300x250");

                </script>
              </div>
            </div>
            <span class="bordaBottomRV"></span>
          </div>
        </div>
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
  <!-- capa site-->
</div>
<!-- bg provoca -->