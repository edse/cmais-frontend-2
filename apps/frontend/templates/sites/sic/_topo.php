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