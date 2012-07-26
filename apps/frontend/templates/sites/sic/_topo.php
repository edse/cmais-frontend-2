      <!-- TOPO SIC -->
      <div id="topo-sic">
      	<div id="logo-fpa">
      	<a href="http://fpa.com.br" title="Fundação Padre Anchieta">
        	<img src="http://cmais.com.br/portal/images/capaPrograma/sic/lgo-fpa.gif" border="0" />
        </a>
        </div>
        <?php if(isset($site) && $site->id > 0): ?>
        <!-- LOGO -->
        <a href="<?php echo $site->retriveUrl() ?>" title="<?php echo $site->getTitle() ?>">
          <img src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="<?php echo $site->getTitle() ?>" class="logo-sic"/>
        </a>

        <!-- /LOGO -->
        <?php endif; ?>

        <?php
        	if(isset($asset))
        		include_partial_from_folder('sites/sic','global/sections-menu', array('siteSections' => $siteSections, 'section' => $section, 'asset' => $asset));
        	else
        		include_partial_from_folder('sites/sic','global/sections-menu', array('siteSections' => $siteSections, 'section' => $section));
        ?>
                

      </div>  
      <!-- /TOPO SIC-->