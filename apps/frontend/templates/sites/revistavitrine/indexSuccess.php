<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>



<div class="bg-chamada">
  
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  
</div>
<div class="bg-site">
</div>

    <!-- CAPA SITE -->
    <div id="capa-site"  >      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($site) && $site->id > 0): ?>
            <?php if($site->getImageThumb() != ""): ?>
          <h2><a href="/revistavitrine" title="Revista Vitrine"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>"></a></h2>
            <?php else: ?>
          <h2><a href="/revistavitrine" title="Revista Vitrine"><?php echo $site->getTitle() ?></a></h2>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <?php include_partial_from_folder('sites/revistavitrine','global/menu', array('siteSections' => $siteSections, "site" => $site, "section" => $section)) ?>
         
          <?php if(isset($program) && $program->id > 0): ?>
            <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>

          <div class="capa-revista">
            <?php if(isset($displays["destaque-principal"])): ?>
              <?php if(count($displays["destaque-principal"]) > 0): ?>
              <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />
              <?php endif; ?>
            <?php endif ?>
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