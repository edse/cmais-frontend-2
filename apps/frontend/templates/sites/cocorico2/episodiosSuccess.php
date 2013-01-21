<?php
$assets = Doctrine_Query::create()
->select('a.*')
->from('Asset a, AssetVideo av')
->where('a.id = av.asset_id')
->andWhere('a.site_id = ?', 1017)
->andWhere('a.asset_type_id = 6')
->andWhere("av.youtube_id != ''")
->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
->orderBy('a.id desc')
->limit(12)
->fetchOne();
?>
<?php 
 $assets = $pager->getResults($assets);
 echo count($assets). "teste";
?>
