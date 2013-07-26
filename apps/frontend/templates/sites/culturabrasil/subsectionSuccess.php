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
  
    <?php // include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
    
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <div class="borda-pontilhada"></div> 
      <ul class="breadcrumb">
        <?php if($section->Site->getSlug() == "culturabrasil"): ?>
        <li><a href="<?php echo url_for('homepage')?>"><?php echo $site->getTitle() ?></a> <span class="divider">»</span></li>
        <li><?php echo $section->getTitle(); ?> </li>
        <?php else: ?>
        <li><a href="<?php echo url_for('homepage')?>programas">Programas</a> <span class="divider">»</span></li>
        <li><?php echo $site->getTitle(); ?> </li>
        <?php endif; ?>         
      </ul>
    </div>
    <!--/breadcrumb-->

    <div class="row-fluid subSection">
      <div class="destaque-cultura subsection">
        <div class="programa subsection">
          <span class="interna">
            <?php
              if($section->Site->getSlug() == "culturabrasil")
                echo $section->getTitle();
              else
                echo $site->getTitle();
            ?>
          </span>
          <i class="borda-titulo subsection"></i>
        </div>
      </div>

    
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
                <h6><?php if ($d->AssetContent->getHeadlineShort()): ?><?php echo $d->AssetContent->getHeadlineShort(); ?><?php endif; ?>&nbsp;</h6>
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
        
        <?php
          $sobreSection = Doctrine::getTable('section')->findOneBySiteIdAndSlug($site->id, "sobre");
          $sobreSectionAssets = $sobreSection->getAssets();
          if(count($sobreSectionAssets) > 0)
            $sobre = $sobreSectionAssets[0];
        ?>

        <?php if(isset($sobre)):?>
        <div class="row-fluid">  
          <div class="span12 thumbnail direita">
            <div class="page-header"> 
              <h4><?php echo $sobreSection->getTitle() ?></h4>
            </div>
            <p><?php echo $sobre->getDescription() ?></p>
            <p><a href="<?php echo $sobre->retriveUrl() ?>" title="<?php echo $dsobre->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
          </div>
        </div>
        <?php endif; ?>
      
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
    
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 
