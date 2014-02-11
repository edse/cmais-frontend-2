<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
	<div class="bg-rodaviva">
    <div id="capa-site">
    	
      <!-- BREAKING NEWS -->
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      <!-- /BREAKING NEWS -->

      <!-- BARRA SITE -->
      <div id="barra-site">
	  	<div class="topo-programa">
	  	  <?php if(isset($program) && $program->id > 0): ?>
		  <h2>
		    <a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>">
		      <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
		    </a>
		  </h2>
		  <?php endif; ?>
		  
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
		</div>
		<div class="box-topo grid3">
	    <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
		</div>
		<!-- /box-topo -->
	</div>
      <!-- /BARRA SITE -->
      <!-- MIOLO -->
      <div id="miolo">
      	
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
      	
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina exceptionn">
          <!-- CAPA -->
          <div class="capa grid3 exceptionn">
          	<div class="tudo-Rodaviva">
          		<span class="bordaTopRV"></span>
          		<div class="centroRV">
          			<div class="noticia-interna">
          				<h2>Notícia</h2>
          				<span class="faixa"></span>
          				<div class="boxNoticia-interna">
          					<h3><?php echo $asset->getTitle() ?></h3>
		                    <p class="subtit"><?php echo $asset->getDescription() ?></p>
		                    <div class="assinatura grid2">
			                  <p class="sup"> <span><?php echo $asset->retriveLabel() ?></span></p>
			                  <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
			                  <!--
			                  <div class="acessibilidade">
			                    <a href="#" class="zoom">+A</a>
			                    <a href="#" class="zoom">-A</a>
			                  </div>
			                  -->
			                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
			                </div>
			                
			                <div class="noticiaTxt">
			                  <?php if($asset->AssetType->getSlug() == "person"): ?>
			                    <?php echo html_entity_decode($asset->AssetPerson->getBio()) ?>
			                  <?php else: ?>
			                    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
			                  <?php endif; ?>
			                </div>
			                <?php include_partial_from_folder('blocks','global/visite-cmais', array('site' => $site, 'uri' => $uri)) ?>
			                <?php include_partial_from_folder('sites/rodaviva','global/fb-comments',array('uri'=>$uri)) ?>
          				</div>
          			</div>
          			<div class="veja">
          			  <div class="publicidade">
          			    <!-- tvcultura-homepage-300x250 -->
          			    <script type='text/javascript'>
          			      GA_googleFillSlot("cmais-assets-300x250");
          			    </script>
          			  </div>
          			</div>
					<?php if(isset($conteudosRelacionados)): ?>
					  <?php if(count($conteudosRelacionados) > 0): ?>
					<div class="veja">
					  <p class="btn-veja not"><span>Notícias Relacionadas</span></p>
					  <div class="noticiasRelacionadas">
					    <?php foreach($conteudosRelacionados as $k=>$d): ?>
					    <div class="box-noticiasRelacionadas<?php if ($k==0): ?> first<?php endif; ?>">
					      <h4><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h4>
					      <p><?php echo $d->getDescription() ?></p>
					    </div>
					    <?php endforeach; ?>
					  </div>
					</div>
					  <?php endif; ?>
					<?php endif; ?>
          			
          		</div>
          		<span class="bordaBottomRV"></span>
          	</div>
          </div>
        
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    </div>
    <!-- / CAPA SITE -->
    
