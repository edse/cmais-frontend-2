<?php
  /*
   * "BRINQUE TAMBÉM COM"
   * 
   * Verifica se o asset faz parte da campanha e pega somente assets da mesma. Senão, pega assets com tags relacionadas, concatenando com assets da mesma categoria e por último assets da mesma seção entre vídeos, atividades ou jogos.
   * 
   * OBS: Isso ainda está ruim, pois precisa aparecer em primeiro lugar assets que tem o maior número de tags relacionadas com o asset principal. Além disso, o ideal seria resolver tudo numa query só!
   * 
   */
  
  $see_also = false; // somente uma flag de controle. Se falso, nada aqui aparece no site. Se verdadeiro, foi porque atendeu alguma das condições abaixo...
  
  if(isset($campaign)) { // se o asset fizer parte de uma campanha, o "brinque também com" só terá assets da mesma...
    $see_also_by_campaign = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('a.site_id = ?', $site->getId())
      ->andWhere('sa.asset_id = a.id')
      ->andWhere('sa.section_id = ?', $campaign->getId())
      //->andWhere('sa.section_id = "2387" OR sa.section_id = "2388" OR sa.section_id = "2389"')
      ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
      ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
      ->andWhere('a.id != ?', $asset->getId())
      ->andWhere('a.is_active = ?', 1)
      ->orderby('sa.display_order')
      ->limit(80)
      ->execute();
      
    if(count($see_also_by_campaign) > 0) {
      $see_also = true;
      
    }
  }
  else { // senão, prioriza assets com a mesma tag, concatenando em seguida com assets da mesma categoria e por último com assets da mesma seção, juntando tudo isso em um só carrossel.
    $assetID = array();
    $tags = array();
    if(count($asset->getTags())>0){
      foreach($asset->getTags() as $t) {
        $tags[] = $t;
      }
    }
    if(count($tags) > 0) {
      $see_also_by_tags = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa, tag t, tagging tg')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhereIn('sa.section_id', array(2387,2388,2389))
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.is_active = ?', 1)
        ->andWhere('tg.taggable_id = a.id')
        ->andWhere('tg.tag_id = t.id')
        ->andWhereIn('t.name', $tags)
        ->andWhere('a.id != ?', $asset->getId())
        ->andWhere('a.asset_type_id = ?', 1)
        ->limit(80)
        ->execute();
      if(count($see_also_by_tags) > 0) {
        $see_also = true;
      }
    }

    foreach($categories as $c) {
      $categorySlugs[] = $c->getSlug();
    }
    if(count($categories) > 0) {
      $see_also_by_categories = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhereIn('sa.section_id', $categorySlugs)
        //->andWhereIn('sa.section_id', array(2387,2388,2389))
        ->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.id != ?', $asset->getId())
        ->andWhere('a.is_active = ?', 1)
        ->orderby('sa.display_order')
        ->limit(80)
        ->execute();
      if(count($see_also_by_categories) > 0) {
        $see_also = true;
      }
    }
    
    $see_also_by_section = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('a.site_id = ?', $site->getId())
      ->andWhere('sa.asset_id = a.id')
      ->andWhere('sa.section_id = ?', $section->getId())
      ->andWhere('a.asset_type_id = ?', 1)
      ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
      ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
      ->andWhere('a.id != ?', $asset->getId())
      ->andWhere('a.is_active = ?', 1)
      ->orderby('sa.display_order')
      ->limit(80)
      ->execute();
    if(count($see_also_by_section) > 0) {
      $see_also = true;
    }
  }   
?>
  <?php if(isset($campaign)): ?>sim<?php endif; ?>
  
<script>
//carrossel interna
$('#carrossel-i').responsiveCarousel({
  arrowLeft: '.arrow-left span.interna',
  arrowRight: '.arrow-right span.interna',
  target:'#carrossel-i .slider-target',
  unitElement:'#carrossel-i .slider-target > li',
  mask:'#carrossel-i .slider-mask',
  easing:'linear',
  dragEvents:true,
  step:-4
});

if(navigator.appName!='Microsoft Internet Explorer')
{
  //carrossel personagens redraw pra tablet e celular home
  window.addEventListener('load', function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  });
  window.addEventListener("orientationchange", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  window.addEventListener("resize", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  //carrossel personagens redraw pra tablet e celular home
}
</script>
