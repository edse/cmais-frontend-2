<ul class="breadcrumb">
   <li><a href="<?php echo $section->Parent->retriveUrl(); ?>"><?php echo $section->Parent->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>
   
   <?php if (isset($asset)):?>
    <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>  
   <?php else:?>  
    <li class="active"><?php echo $section->getTitle(); ?></li>
   <?php endif;?>
   
   <?php if (isset($asset)):?>
    <li class="active"><?php echo $asset->getTitle() ?></li>
   <?php endif;?>
</ul>