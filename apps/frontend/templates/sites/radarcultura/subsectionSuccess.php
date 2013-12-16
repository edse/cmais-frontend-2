<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
}  
?>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
    <!-- Le styles--> 
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
        <!--topo menu/alert/logo-->
        
        <div class="row-fluid">  
          <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          
        </div>
        <!--topo menu/alert/logo-->
        
     <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
     
      <!--nome programa-->
      <div class="row-fluid subSection">
        <h1><?php echo $section->getTitle(); ?><small></small>
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
                    <h2><?php echo $d->getTitle(); ?></h2>
                  </div>
                  <?php endif;?>
              <div class="row-fluid">
                <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if ($related[0]->getThumbnail2()): ?>
                <div class="span2">
                  <img src="<?php echo $related[0]->getThumbnail2() ?>" alt=" <?php echo $d->getTitle(); ?>" class="thumb">
                </div>
                <?php endif; ?>
                <div class="span10">
                 <?php if ($d->AssetContent->getHeadlineShort()): ?><h6><?php echo $d->AssetContent->getHeadlineShort(); ?></h6><?php endif; ?>
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
            $displays = array();
            $block_sobre = Doctrine_Query::create()
              ->select('b.*')
              ->from('Block b, Section s')
              ->where('b.section_id = s.id')
              ->andWhere('s.slug = ?', 'home')
              ->andWhere('b.slug = ?', 'sobre-o-programa')
              ->andWhere('s.site_id = ?', $site->id)
              ->execute();
          
            if(count($block_sobre) > 0){
              $displays["sobre-o-programa"] = $block_sobre[0]->retriveDisplays();
            }
          ?>
  
          <?php if(isset($displays['sobre-o-programa'])):?>
            <?php if(count($displays['sobre-o-programa']) > 0): ?>
            <div class="row-fluid">  
              <div class="span12 thumbnail direita">
                <div class="page-header"> 
                  <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                </div>
                <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre-o-programa'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
              </div>
            </div>
            <?php endif; ?>
          <?php endif; ?>
                
          <?php
            $displays = array();
            $block_comoparticipar = Doctrine_Query::create()
              ->select('b.*')
              ->from('Block b, Section s')
              ->where('b.section_id = s.id')
              ->andWhere('s.slug = ?', 'home')
              ->andWhere('b.slug = ?', 'como-participar')
              ->andWhere('s.site_id = ?', $site->id)
              ->execute();
          
            if(count($block_comoparticipar) > 0){
              $displays["como-participar"] = $block_comoparticipar[0]->retriveDisplays();
            }
          ?>
          <?php if(isset($displays['como-participar'])):?>
            <?php if(count($displays['como-participar']) > 0): ?> 
              <div class="row-fluid">      
                <div class="span12 direita thumbnail">
                  <div class="page-header">
                    <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                  </div>
                  <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                  <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" title="<?php echo $displays['como-participar'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                </div>
              </div>
            <?php endif; ?>
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
      <?php include_partial_from_folder('sites/radarcultura', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
      <!--paginador-->
      <!--banner horizontal-->    
      <div class="container">
        <div class="banner-radio horizontal">
          <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
          </script>
        </div>
      </div>
      <!--banner horizontal-->
    </div>
    <!--/container-->  
