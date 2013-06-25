<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia-home.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid"> 
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
          GA_googleFillSlot("portal-cocorico-familia");

        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
      <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
     <!-- row-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'emfamilia', 'site'=>$site)) ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?>
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
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" alt="" class="span12"/></a>
              <a href="<?php echo $d->retriveUrl() ?> teste" class="texto" ><h3><?php echo $d->getTitle() ?></h3></a>
            </div>
            <?php endforeach; ?>  
           
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
              </div>
      <!-- /carrossel-->
   <?php endif; ?> 
    <?php endif; ?>
   
  <?php $related_image = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
  <?php //$related_video = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
  <?php if(count($related_image) > 0): ?> 
      <?php if(isset($displays['destaque-1'])):?> 
        <?php if(count($displays['destaque-1']) > 0): ?>   
          <a title="<?php echo $displays['destaque-1'][0]->getTitle() ?>" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>" class="destaques span6">
             <h2>Na TV</h2>
             <img alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" src="<?php echo $displays['destaque-1'][0]->Asset->retriveImageUrlByImageUsage('original') ?>">
             <p class="bold"><?php echo $displays['destaque-1'][0]->getTitle() ?></p>
             <!--p><?php echo $displays['destaque-1'][0]->getDescription() ?></p-->
          </a>
        <?php endif; ?>
     <?php endif; ?>
    
    <?php else: ?>
       <?php if(isset($displays['destaque-1'])):?>
        <?php if(count($displays['destaque-1']) > 0): ?>   
          <a title="NA TV" href="<?php echo $site->retriveUrl() ?>/natv" class="destaques span6 natv">
            <h2>Na TV</h2>
            <img alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" src="<?php echo $displays['destaque-1'][0]->Asset->retriveImageUrlByImageUsage('original') ?>">
            <p class="bold"><?php $tam=30; $str=$displays['destaque-1'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
            <!--p><?php echo $displays['destaque-2'][0]->getDescription() ?></p-->
          </a>
        <?php endif; ?>
     <?php endif; ?>
      
     <?php endif; ?>
     
     <?php if(isset($displays['destaque-2'])):?>
        <?php if(count($displays['destaque-2']) > 0): ?>   
          <a title="NA WEB" href="<?php echo $site->retriveUrl() ?>/naweb" class="destaques span6 web">
            <h2>Na Web</h2>
            <img alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" src="<?php echo $displays['destaque-2'][0]->Asset->retriveImageUrlByImageUsage('original') ?>">
            <p class="bold"><?php $tam=30; $str=$displays['destaque-2'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
            <!--p><?php echo $displays['destaque-2'][0]->getDescription() ?></p-->
          </a>
        <?php endif; ?>
     <?php endif; ?>
      
    </div>
    <!-- /coluna da esquerda -->
    <!-- coluna da direita -->
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
       
       $blocks = Doctrine_Query::create()
          ->select('b.*')
          ->from('Block b, Section s')
          ->where('b.section_id = s.id')
          ->andWhere('s.slug = ?', "agenda")
          ->andWhere('b.slug = ?', "acontece") 
          ->andWhere('s.site_id = ?', 1149)
          ->execute();
        
        //echo count($blocks)."<br>";
        
        if(count($blocks) > 0){
          $displays_acontece['acontece'] = $blocks[0]->retriveDisplays();
        }
       
        if(isset($displays_acontece['acontece'])): 
          if(count($displays_acontece['acontece']) > 0): 
            include_partial_from_folder('sites/cocorico', 'global/display-1-destaque', array('displays' => $displays_acontece['acontece']));
          endif;
        endif;
        ?>    <!-- destaque -->
      <!-- fale conosco cr-->
      <!--div class="cr">
        <a href="http://www2.tvcultura.com.br/faleconosco/" title="Fale Conosco" target="_blank">Fale conosco</a>
      </div-->
      <!-- /fale conosco cr-->
    </div>
    <!-- /coluna da direita-->
  </div>
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
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