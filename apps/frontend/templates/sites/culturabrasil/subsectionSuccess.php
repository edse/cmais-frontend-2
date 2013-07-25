<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
}  
?>

<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

<!-- section miolo -->
<section class="miolo">
  
  <!--container-->
  <div class="container">
  
    <?php include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
   
    <!--nome programa-->
    <div class="row-fluid subSection">
      <div class="destaque-cultura">
      <div class="programa subsection">
        <span><?php echo $section->getTitle(); ?></span><i class="borda-titulo subsection"></i>
      </div>
    </div>
    <!--nome programa-->
    
    <!--clounaprincipal-->
    <div class="row-fluid">
      
      <!--lista assets-->
      <div class="lista-assets span8">
        <?php if(count($pager) > 0): ?>
          <?php foreach($pager->getResults() as $d): ?>
            <a href="<?php echo $uri . '/' . $d->getSlug(); ?>" title=" <?php echo $d->getTitle(); ?>">
                <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if ($related[0]->getThumbnail2()): ?>
                <div class="row-fluid titulo">
                  
                </div>
                <?php endif;?>
            <div class="row-fluid" style="margin-left:10px">
              <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
              <?php if ($related[0]->getThumbnail2()): ?>
              <div class="span3" style="margin-left:0px">
                <?php if ($d->AssetContent->getHeadlineShort()): ?><h6><?php echo $d->AssetContent->getHeadlineShort(); ?></h6><?php endif; ?>
                <img src="<?php echo $related[0]->getThumbnail2() ?>" alt=" <?php echo $d->getTitle(); ?>" class="thumb">
              </div>
              <?php endif; ?>
              <div class="span9">
                <h2><?php echo $d->getTitle(); ?></h2>
                <p>
                  <?php echo $d->getDescription(); ?>
                </p>  
              </div>
            </div>    
           </a>
            
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
      <!--listaAssets>
        
      <!--coluna direita-->
      <div class="lista-assets redes span4">
        <div class="row-fluid">      
          <div class="span12 direita">
            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("home-geral300x250");
              </script>
            </div>
          </div>
        </div>
      </div>
      <!--/coluna-direita-->
      
    </div>
    <!--/coluna principal-->
    
    <!--paginador-->
    <?php include_partial_from_folder('sites/culturabrasil', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
    <!--paginador-->
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 
