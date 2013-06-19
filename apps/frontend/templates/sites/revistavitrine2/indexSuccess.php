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
          <h2><img title="Vitrine" alt="Revista Vitrine" src="/portal/images/capaPrograma/revistavitrine2/logo-vitrine.png"></h2>
        </div>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <div class="menu-vitrine">
            <ul>
              <li><a href="/revistavitrine" title="Versão Ipad" class="ativo">Versão Ipad</a><span></span></li>
              <li><a href="/revistavitrine/online" title="Versão Web">Versão Web</a><span></span></li>
              <li><a href="javascript:;" title="Sobre a Revista" class="btn-sobre">Sobre a Revista<i class="icon-chevron-down icon-white"></i></a>
                <p class="sobre" style="display:none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque facilisis sed nisi a pharetra. Vestibulum ante leo, accumsan sit amet adipiscing id, blandit eu velit. Sed a leo quam. Pellentesque sed pellentesque enim. Nunc eget elementum leo. Etiam sit amet varius nisl, sit amet scelerisque orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum dignissim erat et adipiscing adipiscing. Mauris ut cursus dui, tincidunt aliquam nibh. </p>
              </li>
            </ul>
            
          </div>
         
         
          <?php if(isset($program) && $program->id > 0): ?>
            <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>

         <!--
         <div class="capa-revista">
           <img src="/portal/images/capaPrograma/revistavitrine/capa.png" alt="Revista Vitrine" />
         </div>
         -->
         
          <div class="capa-revista">
            <?php if(isset($displays["destaque-principal"])): ?>
              <img src="<?php echo $displays["destaque-principal"][0]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="Revista Vitrine" />
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