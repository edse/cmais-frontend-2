<ul class="breadcrumb">
   <li><a href="<?php echo $site->retriveUrl(); ?>"><?php echo $site->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>
   <?php if($section->Parent->retriveUrl() != "" ):?>
   <li><a href="<?php echo $section->Parent->retriveUrl(); ?>"><?php echo $section->Parent->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>
   <?php endif;?>
   <li class="active"><?php echo $section->getTitle(); ?></li>
</ul>