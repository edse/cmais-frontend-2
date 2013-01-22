<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
  <!-- BG SITE -->
  <div class="bg-site"></div>
  <!-- /BG SITE -->
  <div class="fundo">
    <!-- CAPA SITE -->
    <div id="capa-site">      
      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <h2>
            <a href="/SomosTodosSP">
                <img src="/portal/images/capaPrograma/somostodossp/logo.png" alt="Somos Todos SP"/>
            </a>
          </h2>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>

        </div>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <?php /*
          <a href="/somostodossp/regulamento-sp" class="regulamento" title="Clique aqui para participar">Clique aqui para participar
            <i class="ico-borda"></i>
          </a>
          */ ?>
          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- texto -->
            <p>
              A maior e mais querida cidade da América Latina está fazendo aniversário! No dia 25 de janeiro, a Terra da Garoa completa 459 anos. 
              E a gente aqui do cmais+ quer saber como VOCÊ vê a metrópole em que mora ou frequenta.<br><br>
              Queremos que você nos mande fotos da sua rua, do seu bairro, do seu lugar preferido.Pode ser um monumento, um ponto turístico, uma esquina, um mural, uma calçada, um viaduto, um arranha-céu... enfim, o que você quiser! As melhores imagens serão selecionadas e postadas aqui no portal, e podem ir até mesmo para um especial na TV Cultura!<br><br>
              Então não perca tempo! Prepare sua câmera fotográfica ou seu telefone celular e mãos à obra! Você tem até o dia 21 de janeiro para homenagear a cidade de São Paulo aqui no cmais+.<br><br>
            </p>
            <!-- /texto -->  
            <!-- galeria -->
            <?php if(isset($displays["galeria"]) && count($displays["galeria"])>0): ?>
              <script type="text/javascript" src="/portal/js/jquery.montage.min.js"></script>
              <script src="/portal/js/lightbox/js/lightbox.js"></script>
              <link href="/portal/js/lightbox/css/lightbox.css" rel="stylesheet" />
              <script type="text/javascript">
                $(function() {
                  var $container = $('#am-container'),
                      $imgs      = $container.find('img').hide(),
                      totalImgs  = $imgs.length,
                      cnt        = 0;
                  $imgs.each(function(i) {
                    var $img  = $(this);
                    $('<img/>').load(function() {
                      ++cnt;
                      if( cnt === totalImgs ) {
                        $imgs.show();
                        $container.montage({
                          fillLastRow : false,
                          alternateHeight : true,
                          alternateHeightRange : {
                            min : 100,
                            max : 200
                          },
                          margin : 5
                        });
                      }
                    }).attr('src',$img.attr('src'));
                  }); 
                });
              </script>
              <div class="am-container" id="am-container">
              <?php
                //$asset = $displays["galeria"][0]->Asset;
                $related = Doctrine::getTable('Asset')->findBySiteIdAndAssetTypeId(1169, 2);
              ?>
              <?php if(count($related)>0): ?>
                <?php foreach($related as $d): ?>
                <a href="<?php echo $d->retriveImageUrlByImageUsage('image-6-b') ?>" rel="lightbox[photos]" title="<?php echo $d->getTitle(). "<br/>". $d->getDescription() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" /></a>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
            <?php endif; ?>
            <!-- /galeria -->
          </div>
          <!-- /CAPA -->


          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
  </div>
    
