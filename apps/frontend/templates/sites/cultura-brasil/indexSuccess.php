<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
    <!-- Le styles--> 
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/cultura-brasil.css" rel="stylesheet" type="text/css" />
    
    <!--fonte-->
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--fonte-->
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="/portal/js/bootstrap/bootstrap.js"></script>
     
     
    <!--container-->
    <div class="container">
        
        <!--topo menu/alert/logo-->
        <div class="row-fluid">  
          <!--logo-->
          <div class="row-fluid logo">
            <div class="span4">
              <a href="http://radarcultura.cmais.com.br/" title="Radar Cultura">
                <img src="/portal/images/capaPrograma/radarcultura/logo-radar-novo.png" alt="Radar Cultura" />
              </a>
            </div>
          </div>  
          </div>  
          <!--logo-->
          <!-- menu --->
          <div class="row-fluid menu-principal">
            <?php if(count($siteSections) > 0): ?>        
            <ul class="nav menu-principal nav-pills">
              <?php foreach($siteSections as $k=>$s): ?>
                <?php $subsections = $s->subsections(); ?>
                <?php if(count($subsections) > 0): ?>
              <!-- botao --->
              <li class="dropdown <?php if($section->getParentSectionId() == $s->id): ?>active<?php endif; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" title="<?php echo $s->getTitle()?>">
                  <?php echo $s->getTitle()?>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <?php foreach($subsections as $s): ?>
                  <li class="">
                    <a class="dropdown" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <!-- botao --->
                <?php else: ?>  
              <!-- botao --->
              <li class="<?php if($section->id == $s->id): ?>active<?php endif; ?>">
                <a href="<?php if($s->getSlug() == "home"): ?>/<?php else: ?><?php echo $s->retriveUrl()?><?php endif; ?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
              </li>
              <!-- /botao --->
                <?php endif; ?>
              
              <?php endforeach; ?>          
           </ul>
           <?php endif; ?>
                                          
           <a id="ouca" class="ouca" href="javascript:;">
             <img src="/portal/images/capaPrograma/radarcultura/ouca-a-radio.png" alt="Ouça a rádio Cultura Brasil"/>
           </a>
           
         </div>
         <!-- menu --->
         
        </div>
        <!--topo menu/alert/logo-->
      
        <!--carrossel-->
        <div class="row-fluid">
          <?php if(isset($displays['destaque-principal'])): ?>
            <?php if(count($displays['destaque-principal']) > 0): ?>
              <!-- box-carrossel -->
              <div id="carrossel-radar" class="carousel slide">
                <div class="carousel-inner">
                  <?php foreach($displays['destaque-principal'] as $k=>$d): ?>          
                    <!-- item -->
                    <div class="<?php if($k==1): ?>active<?php endif; ?> item">
                      <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        <?php /*<img src="<?php echo $d->retriveImageUrlByImageUsage('image-10-b') ?>" alt="<?php echo $d->getTitle() ?>" /> */ ?>
                        <img src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" />
                        <div class="carousel-caption">
                          <h4><?php echo $d->getTitle() ?></h4>
                          <h3><?php echo $d->getLabel() ?></h3>
                          <p><?php echo $d->getDescription() ?></p>
                        </div>
                      </a>
                    </div>
                    <!-- /item -->
                  <?php endforeach; ?>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#carrossel-radar" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#carrossel-radar" data-slide="next">&rsaquo;</a>
              </div>
              <!-- /box-carrossel -->
            <?php endif; ?>
          <?php endif; ?>    
        </div>
        <!--/carrossel-->
        <!--redes musica-->
        
      </div>
      <!--container-->      
 