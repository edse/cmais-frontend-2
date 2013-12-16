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

     
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'asset' => $asset)) ?>
     <!-- asset -->
     <div class="row-fluid" style="margin:0 0 0 0;">
      <!--col esquerda -->
      <div class="span8" style="margin:0 0 0 0;">
        <div class="content">
          <h1><?php echo $asset->getTitle() ?></h1>
          <small><?php echo $asset->getDescription() ?></small>
        </div>
        <?php include_partial_from_folder('sites/radarcultura', 'global/signature', array('uri'=>$uri,'asset'=>$asset)) ?>
        <div>
          <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
          <?php include_partial_from_folder('blocks', 'global/visite-cmais',array('uri'=>$uri)) ?>
         <!-- comentario facebook -->
         <div class="container face">
            <fb:comments href="<?php echo $uri?>" numposts="3" width="610" publish_feed="true"></fb:comments>
            <hr />
          </div>
          <!-- /comentario facebook -->
        </div>
      </div>
      <!--/col esquerda-->    
      <!--col direita--> 
       <div class="direita content span4">
  
        <div class="banner-radio">
          <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-300x250");
          </script>
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

              <div class="thumbnail">
                <div class="caption">
                  <div class="page-header">
                    <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                  </div>
                  <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                  <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
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
              <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                    </div>
                    <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                    <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
            <?php endif; ?>
           <?php endif; ?>
            </div>            
        </div>
  
        <div class="container pull-left">
          <div class="banner-radio horizontal">
           <script type='text/javascript'>
             GA_googleFillSlot("cmais-assets-728x90");
           </script>
          </div>
        </div>  

            
          </div>

     <!-- asset -->
 </div>