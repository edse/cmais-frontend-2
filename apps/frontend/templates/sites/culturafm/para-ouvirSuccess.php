    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/sites/culturafm.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a>

	 <div id="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
       
          <h2><a href="http://culturafm.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          <div id="horario">
          	<a href="javascript: window.open('http://www.culturabrasil.com.br/controle-remoto?start=fm','controle','width=300,height=600,scrollbars=no');void(0);" class="aovivo">ao vivo</a>
          </div>         
        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/<?php echo $section->getSlug()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

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
              <h3 class="tit-pagina grid2"><?php echo $section->getTitle() ?></h3> 
              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
	              <div class="texto">
	              	<p><?php echo $section->getDescription() ?></p>
				  			</div>
							  <!-- Post para links com programas com áudio -->
							  <?php foreach($displays["programas"] as $k=>$d): ?>
								  <div class="bg-cinza">
								  	<p><strong><a href="<?php echo $d->retriveUrl()?>"><?php echo $d->getTitle()?></a></strong><br />
								  	<?php echo $d->getDescription()?></p>
								  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- culturafm-300x250 -->
								<script type='text/javascript'>
								GA_googleFillSlot("culturafm-300x250");
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