       <?php
    $displays = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "agenda"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 1')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->groupBy('sa.asset_id')
      ->orderBy('a.id desc')
      ->limit(6)
      ->execute();
  ?>

<?php if(isset($displays)): ?>
  <?php if(count($displays) >= 1): ?>

<!-- destaque -->
 <div class="destaque">
   <!-- carrossel -->
   <div id="blocoCarrossel" class="carousel slide">
    <!-- Carousel items -->
    <div class="carousel-inner">
      
    <?php foreach($displays as $k=>$d): ?>
      <?php $imgs = $d->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
      <!-- item -->
      <div class="active item" name="<?php echo $k?>">
        <?php if(($imgs)&&(count($imgs)>0)):?>
        <a href="<?php echo $d->retriveUrl()?>"><imgs src="<?php echo $imgs[0]->retriveImageUrlByImageUsage('original') ?>"></a>
        <?php endif; ?>
        <a class="texto" href="<?php echo $d->retriveUrl()?>">
          <h3><?php echo $d->getTitle()?></h3>
          <p><?php echo $d->getDescription()?></p>
       </a>
      </div>
      <!-- /item -->
    <?php endforeach; ?>       
    </div>
    <!-- /Carousel items -->
    <!-- base botoes troca -->
    <div class="base-btns">
      <!-- bloco botoes troca -->
      <div class="bloco-nav">
      <?php foreach($displays as $k=>$d): ?>
        <a id="btn-nav<?php echo $k?>" class="btn-nav" href="javascript:;" name="<?php echo $k?>"></a>
      <?php endforeach; ?>
      </div>
      <!-- /bloco botoes troca -->
    </div>
    <!-- /base botoes troca -->
  </div>
  <!-- /carrossel -->
  <script>
   //conta quantas "<a>" tem e define o tamanho para centralizar
   var quantidade = 0;
   $(".bloco-nav a").each(function(index){
     quantidade ++;
   })
   var width = (quantidade * 18)-3;
   $('.bloco-nav').css('width', width+'px');
   
   //carrossel
   $('#blocoCarrossel').carousel({
     interval: 8000
   })  
   $('.btn-nav').click(function(){
     $('#blocoCarrossel').carousel(parseInt($(this).attr('name')));
     $('.btn-nav').removeClass('active');
     $(this).addClass('active');
   });
   $('#blocoCarrossel').on('slid',function(){
     var pos = $(".active.item").attr('name')
     $('.btn-nav').removeClass('active');
     $('#btn-nav'+pos).addClass('active');
   });
   </script>
 </div>
 <!-- /destaque -->
 
  <?php endif; ?>
<?php endif; ?>
