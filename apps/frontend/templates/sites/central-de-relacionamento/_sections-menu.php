        <!--menu Drop Down-->
        <script>
        $(document).ready(function(){
          //$('.dropdown-toggle').dropdown();
          $('.dropdown-toggle').click(function(){
            $('.dropdown').removeClass('open');
            $(this).parent().addClass("open"); 
          });
          $('.dropdown').mouseleave(function(){
            $(this).removeClass("open");
          });
        });  
        
        </script>
        <!--/menu Drop Down -->

        <?php if(count($siteSections) > 0): ?>
        <!-- MENU SIC -->
        <div class="menu-central">
          
          
          
          <!-- MENU PRINCIPAL -->
          <ul class="nav nav-pills">
          <?php
            $sectionId = 0;
            if(isset($section)){
              $sectionId = $section->getId();
              if ($section->getParentSectionId())
                $sectionId = $section->getParentSectionId();
            }
            if(isset($asset)){
              $assetSections = $asset->getSections();
              $sectionId = $assetSections[0]->getId();
              if ($assetSections[0]->getParentSectionId())
                $sectionId = $assetSections[0]->getParentSectionId();
            }
          ?>
          <?php foreach($siteSections as $s): ?>
            <?php $subsections = $s->subsections(); ?>
            <?php if(count($subsections) > 0): ?>
            <!-- MENU BOTAO DROP DOWN -->
            <li class="dropdown <?php if($s->getId() == $sectionId): ?>active<?php endif; ?>" id="menu<?php echo $s->id ?>">
              <a class="dropdown-toggle" href="javascript:;" title="<?php echo $s->getTitle() ?>">
                <?php echo $s->getTitle() ?>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
              <?php foreach($subsections as $s): ?>
                <li><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a></li>
              <?php endforeach; ?>
              </ul>
            </li>
            <!-- /MENU BOTAO DROP DOWN -->
            <?php else: ?>
            <!-- MENU BOTAO -->
            <li <?php if($s->getId() == $sectionId): ?>class="active"<?php endif; ?>><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
            <!-- /MENU BOTAO -->
            <?php endif; ?>
          <?php endforeach; ?> 
                                    
          </ul>
          <!-- /MENU PRINCIPAL -->
          
          
          
        </div>
        <!-- /MENU SIC -->
        <?php endif; ?>
