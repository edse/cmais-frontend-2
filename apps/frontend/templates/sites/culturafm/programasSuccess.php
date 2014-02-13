    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<!--a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião" style="display: none;">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a-->

	 <div id="bg-site"></div>

    <!-- CAPA SITE -->
    <div id="capa-site">

   	<?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>

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
              <!-- NOTICIA INTERNA -->						
						<div class="box-interna grid2">
							<div class="">
								<h3 class="tit-pagina grid2"><?php echo $section->title ?></h3>
								<p><?php echo $section->description ?></p>
							</div>
							
							<!-- Post para links com programas com áudio -->
							<div class="bg-cinza">
								<!-- col-esq -->
								<div class="col-esq grid1">
								<?php if(isset($displays["jornalismo"])): ?>
									<?php if(count($displays["jornalismo"]) > 0): ?>
									<div class="box-padrao">
										<p class="bold">JORNALISMO</p>
										<ul>
                    <?php foreach($displays["jornalismo"] as $k=>$d): ?>
											<li><a href="<?php echo $d->getUrl()?>"><?php echo $d->getTitle()?></a></li>
                    <?php endforeach; ?>
										</ul>
									</div>
		              <?php endif; ?>
		            <?php endif; ?>
								<?php if(isset($displays["selecao-musical"])): ?>
									<?php if(count($displays["selecao-musical"]) > 0): ?>
									<div class="box-padrao">
										<p class="bold">SELEÇÃO MUSICAL</p>
										<ul>
                    <?php foreach($displays["selecao-musical"] as $k=>$d): ?>
											<li><a href="<?php echo $d->getUrl()?>"><?php echo $d->getTitle()?></a></li>
                    <?php endforeach; ?>
										</ul>
									</div>
		              <?php endif; ?>
		            <?php endif; ?>
								<?php if(isset($displays["ideias-musicais"])): ?>
									<?php if(count($displays["ideias-musicais"]) > 0): ?>
									<div class="box-padrao">
										<p class="bold">IDEIAS MUSICAIS</p>
										<ul>
                    <?php foreach($displays["ideias-musicais"] as $k=>$d): ?>
											<li><a href="<?php echo $d->getUrl()?>"><?php echo $d->getTitle()?></a></li>
                    <?php endforeach; ?>
										</ul>
									</div>
		              <?php endif; ?>
		            <?php endif; ?>
								</div>
								<!-- /col-esq -->
								<!-- col-dir -->
								<div class="col-dir">
								<?php if(isset($displays["programas"])): ?>
									<?php if(count($displays["programas"]) > 0): ?>
									<div class="box-padrao">
										<p class="bold">PROGRAMAS</p>
										<ul>
                    <?php foreach($displays["programas"] as $k=>$d): ?>
											<li><a href="<?php echo $d->getUrl()?>"><?php echo $d->getTitle()?></a></li>
                    <?php endforeach; ?>
										</ul>
									</div>
		              <?php endif; ?>
		            <?php endif; ?>
								</div>
								<!-- col-dir -->
							</div>
						</div>
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- DESTAQUE 1 COLUNA -->
              <?php if(isset($displays["destaque-secundario"])) include_partial_from_folder('blocks','global/display-1c-vertical-multiple', array('displays' => $displays["destaque-secundario"])) ?>
              <!-- /DESTAQUE 1 COLUNA -->
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