<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
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
          
          <!-- logo --->
          <ul class="span2 pull-right">
            <li class="">
              <img src="/radar2012/images/Logo-Radar.jpg" alt="Radar Cultura"/>
            </li>
            <li class="">
              <a href="javascript: window.open('http://172.20.17.129/radar2012/player.html?start=am','controle','width=450,height=150,left=50,top=50,scrollbars=no'); return false;" class="btn btn-inverse btn-mini"><i class="icon-music icon-white"></i> Rádio Cultura Brasil  </a>
            </li>
          </ul>  
          <!-- logo --->
          
          <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
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
                        <img src="<?php echo $d->retriveImageUrlByImageUsage('image-10-b') ?>" alt="<?php echo $d->getTitle() ?>" />
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
        <?php if(isset($displays['musicas'])):?>
          <?php if(count($displays['musicas']) > 0): ?>
          <div class="row-fluid">
            <div class="span12">
              <div class="page-header">
                <h3>Músicas <small> indicações dos usuários</small></h3>
              </div>
              <div class="row-fluid redes">
                <?php foreach($displays['musicas'] as $k=>$d): ?>
                <div class="span4 thumbnail">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                  </a>
                  <div class="page-header">
                    <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                  </div>
                  <img src="<?php echo $d->AssetContent->getHeadline() ?>" width="50px" height="50px"  alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                  <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> indique essa música</a>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--redes musica-->
        <!--redes playlists/narede-->
        <?php if(isset($displays['playlists'])):?>
          <?php if(count($displays['playlists']) > 0): ?>
          
          <div class="row-fluid">
            <div class="span8">
              <div class="page-header">
                <h3>Playlists <small>indicações dos usuários</small></h3>
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
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> indique essa música</a>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
           <?php endif; ?>
        <?php endif; ?>
        

        <?php if(isset($displays['na-rede'])):?>
          <?php if(count($displays['na-rede']) > 0): ?>
          <div class="span4">
              <div class="page-header">
                <h3>Na rede<small>comentários dos usuários</small></h3>
              </div>
              <div class="row-fluid redes ">
                <div class="span12 thumbnail">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                  </a>
                  <div class="page-header">
                    <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                  </div>
                  <img src="<?php echo $d->AssetContent->getHeadline() ?>" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                  <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> indique essa música</a>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--/redes playlists/narede-->
        
        <!--rodape-->
        <div class="row-fluid">
          <div class="span12">
            <div class="page-header"></div>
              <div class="row-fluid redes">
              <?php if(isset($displays['como-participar'])):?>
                <?php if(count($displays['como-participar']) > 0): ?>       
                  <div class="span4 thumbnail">
                    <div class="page-header">
                      <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                    </div>
                    <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                    <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" title="<?php echo $displays['como-participar'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
              <?php if(isset($displays['sobre-o-programa'])):?>
                <?php if(count($displays['sobre-o-programa']) > 0): ?>
                <div class="span4 thumbnail">
                  <div class="page-header">
                    <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                  </div>
                  <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                  <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre-o-programa'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                </div>
                <?php endif; ?>
              <?php endif; ?>
              <div class="span4">
                <div class="banner-radio">
                  <script type='text/javascript'>
                    GA_googleFillSlot("home-geral300x250");
                  </script>
                </div>
              </div>
            </div>
          </div>
          <!--/rodape-->
        
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
        <!--rodape-->
      </div>
      <!--container-->  