       <?php if($section->getParentSectionId()): ?>
       <?php $parentSection = Doctrine::getTable('section')->findOneById($section->getParentSectionId()); ?>
       <?php endif; ?>
       <?php if(isset($parentSection) || isset($asset) || isset($section)): ?>
        <!--breadcrumb-->
        <div class="row-fluid pontilhada"> 
            
           <ul class="breadcrumb">
             <li><a href="/<?php echo $site->getTitle() ?></a> <span class="divider">»</span></li>
           <?php if($section->getSlug() == "artistas"): ?>
             <?php if(isset($artist)): ?>
             <li><a href="">Por artista</a> <span class="divider">»</span></li>
             <li><?php echo $artist ?></li>
             <?php else: ?>
             <li>Artistas</li>
             <?php endif; ?>
           <?php elseif($section->getSlug() == "musicas"): ?>
             <?php if(isset($asset)): ?>
             <li><a href="<?php echo "/" . 'musicas' ?>">Musicas</a> <span class="divider">»</span></li>
             <li><?php echo $asset->getTitle() ?> <span class="divider">»</span> <?php echo $asset->getDescription() ?></li>
             <?php else: ?>
               <?php if(isset($artist)): ?>
             <li><a href="<?php echo "/" . 'artistas' ?>">Artistas</a> <span class="divider">»</span></li>
             <li><?php echo $artist ?></li>
               <?php else: ?>
             <li>Musicas</li>
               <?php endif; ?>
             <?php endif; ?>
           <?php else: ?>
             <?php if(isset($parentSection)): ?>
               <?php if(count($parentSection->getAssets()) > 0): ?>
             <li><a href="<?php echo $parentSection->retriveUrl()?>"><?php echo $parentSection->getTitle(); ?></a> <span class="divider">»</span></li>
               <?php else: ?>
             <li><a href=""><?php echo $parentSection->getTitle(); ?></a> <span class="divider">»</span></li>
               <?php endif; ?>
               <?php if(isset($asset) && $parentSection->getSlug() != "sobre"): ?>
             <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a> <span class="divider">»</span></li>
             <li><?php echo $asset->getTitle() ?></li>
               <?php else: ?>
             <li><?php echo $section->getTitle(); ?> </li>
               <?php endif; ?>
             <?php else: ?>
               <?php if(isset($asset)): ?>
             <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a> <span class="divider">»</span></li>
             <li><?php echo $asset->getTitle(); ?> </li>
               <?php else: ?>
             <li><?php echo $section->getTitle(); ?> </li>
               <?php endif; ?>
             <?php endif; ?>
           <?php endif; ?>
           </ul>
        </div>
        <!--breadcrumb-->
       <?php endif; ?>