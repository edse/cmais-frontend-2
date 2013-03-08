<?php $parent = $section->getParentSectionId();?>
<ul class="breadcrumb">
   <li><a href="<?php echo $site->retriveUrl(); ?>"><?php echo $site->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>
   <?php if (isset($asset)):?>
    <?php if($parent != ""):?>  
      <li><a href="<?php echo $section->Parent->retriveUrl(); ?>"><?php echo $section->Parent->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>
    <?php endif;?>
    <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>  
   <?php else:?>
     <?php if($parent != ""):?>
       <?php if($section->Parent->slug == "concurso-cultural"): ?> 
      <li><?php echo $section->Parent->getTitle(); ?> <span class="divider">&rsaquo;</span></li>
       <?php else: ?>
      <li><a href="<?php echo $section->Parent->retriveUrl(); ?>"><?php echo $section->Parent->getTitle(); ?></a> <span class="divider">&rsaquo;</span></li>
       <?php endif; ?> 
     <?php endif;?>
    <li class="active"><?php echo $section->getTitle(); ?></li>
   <?php endif;?>
   
   <?php if (isset($asset)):?>
    <li class="active"><?php echo $asset->getTitle() ?></li>
   <?php endif;?>
</ul>