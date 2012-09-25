			 <?php if($section->getParentSectionId()): ?>
			 <?php $parentSection = Doctrine::getTable('section')->findOneById($section->getParentSectionId()); ?>
			 <?php endif; ?>
			 <?php if(isset($parentSection) || isset($asset)): ?>
		    <!--breadcrumb-->
		    <div class="row">
		       <ul class="breadcrumb">
		         <li><a href="<?php echo url_for('homepage') . $site->getSlug() ?>"><?php echo $site->getTitle() ?></a> <span class="divider">/</span></li>
		         <?php if(isset($parentSection)): ?>
		           <?php if(count($parentSection->getAssets()) > 0): ?>
		         <li><a href="<?php echo $parentSection->retriveUrl()?>"><?php echo $parentSection->getTitle(); ?></a> <span class="divider">/</span></li>
		           <?php else: ?>
		         <li><?php echo $parentSection->getTitle(); ?> <span class="divider">/</span></li>
		           <?php endif; ?>
		         <?php endif; ?>
		         <?php if(isset($asset)): ?>
		         <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a> <span class="divider">/</span></li>
		         <li><a href="<?php echo $asset->retriveUrl() ?>"><?php echo $asset->getTitle() ?></a></li>
		         <?php else: ?>
		         <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a> </li>
		         <?php endif; ?>
		       </ul>
		    </div>
		    <!--breadcrumb-->
			 <?php endif; ?>
