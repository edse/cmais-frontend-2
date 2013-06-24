 <?php 
  $blocks = Doctrine_Query::create()
    ->select('b.*')
    ->from('Block b, Section s')
    ->where('b.section_id = s.id')
    ->andWhere('s.slug = ?', "enquete-multicultura")//mudar para home quando for no ar
    ->andWhere('b.slug = ?', 'video') 
    ->andWhere('s.site_id = ?', $site->id)
    ->execute();
  ?>


	<iframe allowfullscreen="" frameborder="0" height="390" src="http://www.youtube.com/embed/<?php echo $blocks[0]->Asset->getTitle(); ?>?wmode=transparent&amp;rel=0#t=0m0s" title="Enquete Multicultura" width="640"></iframe>
            
