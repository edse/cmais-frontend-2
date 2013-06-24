 <?php 
  $blocks = Doctrine_Query::create()
    ->select('b.*')
    ->from('Block b, Section s')
    ->where('b.section_id = s.id')
    ->andWhere('s.slug = ?', "multicultura-enquete")//mudar para home quando for no ar
    ->andWhere('b.slug = ?', 'video') 
    ->andWhere('s.site_id = ?', $site->id)
    ->execute();
  ?>


	
