<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

		<link rel="stylesheet" href="/portal/js/jquery-ui/css/smoothness/jquery-ui-1.8.21.custom.css" type="text/css" media="all" />
		<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
		
		<script>
		$(document).ready(function() {
		  $("#accordion").accordion();
		});
		</script>

    <!-- CAPA SITE -->
    <div id="capa-site">
    
      <!-- TOPO SIC -->
      <div id="topo-sic">
        <?php if(isset($site) && $site->id > 0): ?>
        <!-- LOGO -->
        <a href="<?php echo $site->retriveUrl() ?>" title="<?php echo $site->getTitle() ?>">
          <img src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="<?php echo $site->getTitle() ?>" class="logo-sic"/>
        </a>
        <div id="risco"></div>
        <!-- /LOGO -->
        <?php endif; ?>

				<?php include_partial_from_folder('sites/sic','global/sections-menu', array('siteSections' => $siteSections)) ?>
				        
        <div id="risco"></div>
      </div>  
      <!-- /TOPO SIC-->
      
      
      <!-- CORPO SITE -->
      <div id="corpo-sic">
        <!-- COLUNA ESQUERDA -->
        <div class="float col-400-sic">
          <?php if(isset($displays["acesso-a-informacao"])): ?>
          	<?php if(count($displays["acesso-a-informacao"]) > 0): ?>
          <h2><?php echo $displays["acesso-a-informacao"][0]->Block->getTitle() ?></h2>
          
          		<?php foreach($displays["acesso-a-informacao"] as $d): ?>
          <span class="pergunta"><?php echo $d->getTitle() ?></span>
          <p><?php echo $d->getDescription() ?></p>
          <a href="<?php echo $d->retriveUrl() ?>" title="Leia mais">Leia +</a>
          		<?php endforeach; ?>
          			
          	<?php endif; ?>
          <?php endif; ?>
          
					<?php if(isset($displays["oriente-se"])): ?>
						<?php if(count($displays["oriente-se"]) > 0): ?>
          <!-- COLUNA SUB ESQ 1 -->
          <div class="coluna-sub-1 cinza-claro texto-branco">
            <h4><?php echo $displays["oriente-se"][0]->Block->getTitle() ?></h4>
            <p><?php echo $displays["oriente-se"][0]->Block->getDescription() ?></p>
            
          		<?php foreach($displays["oriente-se"] as $d): ?>
            <!-- COLUNA SUB ESQ 2 -->
            <div id="accodion" class="coluna-sub-1 cinza-escuro">
              <a href="javascript:;" class="menu-sic"/>
                <h4><?php echo $d->getTitle() ?></h4>
              </a>
              <div id="risco-2"></div>
              <div class="conteudo" style="display: none;">
              	<?php echo html_entity_decode($d->Asset->AssetContent->render()) ?> 
              </div>
            </div>
            <!-- /COLUNA SUB ESQ 2 -->
            	<?php endforeach; ?>
          </div>           
          <!-- /COLUNA SUB ESQ 1 -->
          	<?php endif; ?>
          <?php endif; ?>
          
        </div>
        <!-- /COLUNA ESQUERDA -->
        
        <!-- COLUNA DIREITA -->
        <div class="float col-585-sic">
        	
        	<?php if(isset($displays["formas-de-atendimento"])): ?>
        		<?php if(count($displays["formas-de-atendimento"]) > 0): ?>
          <!-- COLUNA SUB DIR 1 -->
          <div class="coluna-sub-1 cinza-claro-2 texto-branco">
            <span class="titulo bold"><?php echo $displays["formas-de-atendimento"][0]->Block->getTitle() ?></span>
            <!-- COLUNA SUB DIR 2 -->
            
          		<?php foreach($displays["formas-de-atendimento"] as $d): ?>
            <div id="accordion" class="texto-preto">
              <h3><a href="#"><?php echo $d->getTitle() ?></a></h3>
              <div>
              	<?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>
              </div>
            </div>
            	<?php endforeach; ?>
          </div>           
          <!-- /COLUNA SUB DIR 1 -->
            <?php endif; ?>
          <?php endif; ?>
        </div>  
        <!-- /COLUNA DIREITA -->
      </div>  
      <!-- /CORPO SITE -->
      
    </div>
    <!-- / CAPA SITE -->
  