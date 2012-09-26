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

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
        <!--topo menu/alert/logo-->
        <div class="row-fluid">
          <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
        </div>
        <div class="row-fluid">  
          <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
        </div>
        <!--topo menu/alert/logo-->
        
		 <?php if($section->getParentSectionId()): ?>
		 <?php $parentSection = Doctrine::getTable('section')->findOneById($section->getParentSectionId()); ?>
		 <?php endif; ?>
		 <?php if(isset($parentSection)): ?>
      <!--breadcrumb-->
      <div class="row-fluid">
         <ul class="breadcrumb">
           <li><a href="<?php echo url_for('homepage') . $site->getSlug() ?>"><?php echo $site->getTitle() ?></a> <span class="divider">/</span></li>
           <li><a href="#"><?php echo $parentSection->getTitle(); ?></a> <span class="divider">/</span></li>
           <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a></li>
         </ul>
      </div>
      <!--breadcrumb-->
		 <?php endif; ?>
		 
      <!--nome programa-->
      <div class="page-header">
        <h1><?php echo $section->getTitle(); ?> <small></small>
      </div>
      <!--nome programa-->
      <!--clounaprincipal-->
      <div class="row-fluid">
        <!--lista assets-->
        <div class="lista-assets span8">
          <?php if(count($pager) > 0): ?>
            <?php foreach($pager->getResults() as $d): ?>
              <div class="row-fluid">
                <div class="centro span12">
                  <a href="<?php echo $d->retriveUrl(); ?>" title=" <?php echo $d->getTitle(); ?>">
                  <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php if ($related[0]->getThumbnail2()): ?>
                    <div class="span2">
                      <?php if ($d->AssetContent->getHeadlineShort()): ?><h6><?php echo $d->AssetContent->getHeadlineShort(); ?></h6><?php endif; ?>
                      <img src="<?php echo $related[0]->getThumbnail2() ?>" alt=" <?php echo $d->getTitle(); ?>" class="thumb">
                    </div>
                  <?php endif; ?>
                  <div class="span10">
                  <h4>
                    <?php echo $d->getTitle(); ?>
                  </h4> 
                  <p>
                    <?php echo $d->getDescription(); ?>
                  </p> 
                  </div>
                </a>
              </div>
            </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <!--listaAssets>
        <!--coluna direita-->
        <div class="lista-assets redes span4">
          <div class="span12">
            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
              </script>
            </div>
          </div>
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
      <?php if(isset($pager)): ?>
        <?php if($pager->haveToPaginate()): ?>
        <div class="row">
          <div class="pagination pagination-centered">
            <ul>
              <li class="disabled"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior">«</a></li>
              <?php foreach ($pager->getLinks() as $page): ?>
              <li <?php if ($page == $pager->getPage()): ?>class="active"<?php endif; ?>><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
              <?php endforeach; ?>
              <li><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" title="Próximo">»</a></li>
            </ul>
          </div>
        </div>
        <form id="page_form" action="" method="post">
          <input type="hidden" name="return_url" value="<?php echo $url?>" />
          <input type="hidden" name="page" id="page" value="" />
        </form>
        <script>
        function goToPage(i){
          $("#page").val(i);
          $("#page_form").submit();
        }
        </script>
        <?php endif; ?>
      <?php endif; ?>
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
