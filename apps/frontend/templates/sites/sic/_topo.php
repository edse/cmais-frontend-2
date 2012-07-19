      <!-- TOPO SIC -->
      <div id="topo-sic">
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