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
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'site'=>$site)) ?>

<!-- section miolo -->
<section class="miolo">
  
  <!--container-->
  <div class="container">
  
    <?php // include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
    
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <li><a href="<?php echo $site->retriveUrl()?>"><?php echo $site->getTitle() ?></a> <span class="divider">»</span></li>
        <li>Programas </li>
      </ul>
    </div>
    <!--/breadcrumb-->

    <div class="row-fluid subSection">
      <div class="destaque-cultura subsection">
        <div class="programa subsection">
          <span class="interna"><?php echo $section->getTitle(); ?></span>
          <i class="borda-titulo subsection"></i>
        </div>
      </div>

    
    <!--clounaprincipal-->
    <div class="row-fluid">
      
      <!--lista Programas-->
      <div class="lista-programas span8" style="*margin-left:0;">
        
        <?php if(isset($displays["programas"])): ?>
          <?php if(count($displays["programas"]) > 0): ?>
            <?php foreach($displays["programas"] as $d): ?>
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <p><?php echo $d->getTitle() ?></p>
        </a>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>        

        <?php if(isset($displays["arquivo"])): ?>
          <?php if(count($displays["arquivo"]) > 0): ?>
        <span class="titulo-arquivo">
          arquivo
        </span>
            <?php foreach($displays["arquivo"] as $d): ?>
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <p><?php echo $d->getTitle() ?></p>
        </a>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>        
          
      </div>
      <!--listaProgramas>
        
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
    
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 
