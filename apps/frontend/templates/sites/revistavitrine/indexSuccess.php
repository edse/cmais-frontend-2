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
          <h2><img title="Vitrine" alt="Revista Vitrine" src="/portal/images/capaPrograma/revistavitrine/logo-vitrine.png"></h2>
          <p class="descricao">Disponível para iPad gratuitamente na <b>App Store</b></p>
          <p class="baixar"><b>BAIXE AGORA!</b></p>
          
         

        </div>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

         <div class="baixar">
           <a class="app" href="https://itunes.apple.com/us/app/revista-vitrine/id627945721?ls=1&mt=8" alt="App Store" target="_blank"><img src="/portal/images/capaPrograma/revistavitrine/app.png" /></a>
           <a href="/revistavitrine/online" alt="Leia agora online"><img src="/portal/images/capaPrograma/revistavitrine/online.png" /></a>
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
    
