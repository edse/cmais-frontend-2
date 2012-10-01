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
        <!--centro-->        
        <div class="row-fluid">
           <!-- colunavesquerda -->
           <div class="span8" style="margin: 0 0 0 0;">
              <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'asset' => $asset)) ?>
                    
              <div class="page-header">
                <h1><?php echo $asset->getTitle() ?> <small></small></h1>
              </div>

              <p><small><?php echo $asset->getTitle() ?></small></p>
              <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
             <!-- comentario facebook -->
             <div class="face">
                <fb:comments href="http://cmais.com.br" numposts="3" width="610" publish_feed="true"></fb:comments>
                <hr />
              </div>
              <!-- /comentario facebook -->
              <!--redes pitacos-->
              <?php if(isset($displays['playlists'])):?>
                <?php if(count($displays['playlists']) > 0): ?>
                
                    <div class="page-header">
                      <h3>Pitacos<small></small></h3>
                    </div>
                    <div class="row-fluid redes">
                      <?php foreach($displays['playlists'] as $k=>$d): ?>
                      <div class="span6 thumbnail">
                        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                          <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                        </a>
                        <div class="page-header">
                          <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                        </div>
                        <img src="<?php echo $d->AssetContent->getHeadline() ?>" width="50px" height="50px" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                        <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                        <?php if($d->AssetContent->getHeadlineLong()!=""): ?>
                        <a href="<?php echo $d->AssetContent->getHeadlineLong() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> sugira sua música</a>
                        <?php endif; ?>
                      </div>
                      <?php endforeach; ?>

                 <?php endif; ?>
              <?php endif; ?>
              <!--/redes pitacos-->
           </div>
          <!--coluna esquerda-->
          <!--coluna direita-->
          <div class="span4 direita">
            <!--sobre o programa-->
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
                  <div class="page-header">
                    <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                  </div>
                  <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                  <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre-o-programa'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                </div>
                <?php endif; ?>
              <?php endif; ?>
              <!--/sobre o programa-->
              <!--como participar-->
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
                    <div class="page-header">
                      <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                    </div>
                    <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                    <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" title="<?php echo $displays['como-participar'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
              <!--/como participar-->
              <!--banner-->
              <div class="banner-radio">
                <script type='text/javascript'>
                  GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!--/banner-->
           </div>
           <!--/coluna direita-->
        </div>
        <!--centro-->            

  
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
      <!--container-->