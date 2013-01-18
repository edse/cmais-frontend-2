<link href="/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/familia-home.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid"> 
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
          GA_googleFillSlot("portal-cocorico");

        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
      <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
     <!-- row-->
  <?php include_partial_from_folder('sites/cocorico2', 'global/menu-em-familia') ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
    <li><a href="/cocorico">Cocoricó</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Em Família</li>
  </ul>
  <!-- /breadcrumb-->
  
    <!--row-->
  <div class="row-fluid conteudo emfamilia">
    <!-- coluna da esquerda-->
    <div class="span8">
  <!-- carrossel-->
    <?php if(isset($displays['destaque-principal'])): ?>
      <?php if(count($displays['destaque-principal']) > 0): ?>     
      <div class="carrossel-familia">
       
        <h2><i class="ico-presente"></i>Encontre o presente ideal</h2>
        <i class="ico-seta-titulo-grd"></i>
        <div id="myCarousel" class="carousel slide span12">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <?php foreach($displays['destaque-principal'] as $k=>$d): ?> 
            <div class="<?php if($k==0): ?>active <?php endif; ?>item ">
              <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" alt="" class="span12"/></a>
             </div>
             <?php endforeach; ?>  
           
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <a href="<?php echo $d->getHeadline() ?>" class="texto" > <h3><?php echo $d->getTitle() ?></h3>  <?php echo $d->getDescription() ?> </a>
      </div>
      <!-- /carrossel-->
   <?php endif; ?> 
    <?php endif; ?>
  
      <?php if(isset($displays['destaque-1'])):?>
        <?php if(count($displays['destaque-1']) > 0): ?>   
          <a title="<?php echo $displays['destaque-1'][0]->getTitle() ?>" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>" class="destaques span6"> <h2><?php echo $displays['destaque-1'][0]->getTitle() ?></h2><img alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" src="<?php echo $displays['destaque-1'][0]->Asset->retriveImageUrlByImageUsage('original') ?>"><p class="bold"><?php echo $displays['destaque-1'][0]->getTitle() ?></p><p><?php echo $displays['destaque-1'][0]->getDescription() ?></p></a>
        <?php endif; ?>
     <?php endif; ?>
     
     <?php if(isset($displays['destaque-2'])):?>
        <?php if(count($displays['destaque-2']) > 0): ?>   
          <a title="<?php echo $displays['destaque-2'][0]->getTitle() ?>" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>" class="destaques span6 web"> <h2><?php echo $displays['destaque-2'][0]->getTitle() ?></h2><img alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" src="<?php echo $displays['destaque-2'][0]->Asset->retriveImageUrlByImageUsage('original') ?>"><p class="bold"><?php echo $displays['destaque-2'][0]->getTitle() ?></p><p><?php echo $displays['destaque-2'][0]->getDescription() ?></p></a>
        <?php endif; ?>
     <?php endif; ?>
      
    </div>
    <!-- /coluna da esquerda-->
    <!-- coluna da direita-->
    <div class="span4 acontece">
      <div class="topo">
          <div class="bac-blue">
            <h3>
              <i class="ico-naweb ico-acontece"></i>
              Acontece
              <i class="ico-seta-titulo seta-acontece"></i>
           </h3>
         </div>
       </div>
       <?php
        
        $displays = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, Section s')
          ->where('a.id = sa.asset_id')
          ->andWhere('s.slug = "agenda"')
          ->andWhere('a.site_id = 1149')
          ->andWhere('a.asset_type_id = 1')
          ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
          ->groupBy('sa.asset_id')
          ->orderBy('a.id desc')
          ->limit(6)
          ->execute();
        echo count($displays)."<br>";
        echo count($displays[0])."<br>";
        if(count($displays) > 0){
          $displays['agenda'] = $displays[0]->retriveDisplays();
        }
        
        ?>
        <!-- destaque -->
        
  <?php /*
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
        <div class="<?php if($k==0) echo "active";?> item bloco" name="<?php echo $k?>">
          <?php if(($imgs)&&(count($imgs)>0)):?>
  
          <a href="<?php echo $d->retriveUrl()?>">
            <img src="<?php echo $imgs[0]->retriveImageUrlByImageUsage('original') ?>">
          </a>
  
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
          <a id="btn-nav<?php echo $k?>" class="btn-nav <?php if($k==0) echo "active";?>" href="javascript:;" name="<?php echo $k?>"></a>
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
     var width = quantidade * 18;
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
       var pos = $(".active.item.bloco").attr('name')
       $('.btn-nav').removeClass('active');
       $('#btn-nav'+pos).addClass('active');
     });
     </script>
   </div>
   <!-- /destaque -->
   
    <?php endif; ?>
  <?php endif; ?>
   * 
   */
   ?>
        <!-- destaque -->
      <!-- fale conosco cr-->
      <div class="cr">
        <a href="http://www2.tvcultura.com.br/faleconosco/" title="Fale Conosco" target="_blank">Fale conosco</a>
      </div>
      <!-- /fale conosco cr-->
    </div>
    <!-- /coluna da direita-->
  </div>
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
<div id="fb-root"></div>
<script>
  ( function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if(d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

</script>