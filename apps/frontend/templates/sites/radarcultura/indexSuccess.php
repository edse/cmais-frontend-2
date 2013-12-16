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
    
    <script>
      $(function(){
        $('.redes-content a').attr('target','_blank');
      });
      
    </script>
    <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?> 
     
    <!--container-->
    <div class="container">
        
        <!--topo menu/alert/logo-->
        <div class="row-fluid">
          <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
        </div>
        <div class="row-fluid">  
          <?php //include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          <?php include_partial_from_folder('blocks', 'global/menu_reduzido_abrace', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
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
                          <h3><?php echo $d->getLabel() ?></h3>
                          <h4><?php echo $d->getTitle() ?></h4>
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
              <div class="page-header na-rede">
                <h3>Músicas em Destaque</h3>
                <small>Indicações dos usuários </small>
              </div>
              <div class="row-fluid redes">
                <?php foreach($displays['musicas'] as $k=>$d): ?>
                <div class="span4">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right" target="_blank"></i>
                  </a>
                  <div class="">
                    <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                  </div>
                  <img src="<?php echo $d->AssetContent->getHeadline() ?>" width="50px" height="50px" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                  <p class="redes-content"><?php echo html_entity_decode($d->AssetContent->render()) ?></p> 
                  <?php if($d->AssetContent->getHeadlineLong()!=""): ?> 
                  <a href="<?php echo $d->AssetContent->getHeadlineLong() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> veja mais</a>
                  <?php if($k < 2):?>
                    <div class="linha-lateral"></div>
                  <?php endif;?>
                  <?php endif; ?>
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
          
          <div class="row-fluid na-rede">
            <div class="span8">
              <div class="page-header na-rede">
                <h3>Playlists do Radar</h3>
                <small>Indicações dos usuários</small>
              </div>
              <div class="row-fluid redes">
                <?php foreach($displays['playlists'] as $k=>$d): ?>
                <div class="span6">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>" >
                    <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                  </a>
                  <div class="">
                    <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                  </div>
                  <img src="<?php echo $d->AssetContent->getHeadline() ?>" width="50px" height="50px" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                  <p class="redes-content"><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                  <?php if($d->AssetContent->getHeadlineLong()!=""): ?>
                  <a href="<?php echo $d->AssetContent->getHeadlineLong() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> Participe dessa playlist</a>
                  <?php endif; ?>
                  <div class="linha-lateral"></div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
           <?php endif; ?>
        <?php endif; ?>
        

        <?php if(isset($displays['na-rede'])):?>
          <?php if(count($displays['na-rede']) > 0): ?>
          <?php $d = $displays['na-rede'][0]; ?>
          <div class="span4">
              <div class="page-header na-rede">
                <h3>Na rede</h3>
                <small>Comentários dos usuários</small>
              </div>
              <div class="row-fluid redes ">
                <div class="span12">
                  <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class=" icone-rede <?php echo strtolower($d->getDescription())?> pull-right"></i>
                  </a>
                  <div class="">
                    <h5><?php echo $d->getTitle() ?> <small><br/><?php echo distance_of_time_in_words(strtotime($d->AssetContent->getHeadlineShort()), NULL, TRUE)?></small></h5>
                  </div>
                  <img src="<?php echo $d->AssetContent->getHeadline() ?>" alt="<?php echo $d->getTitle() ?>" class="avatar pull-left">
                  <p class="redes-content"><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
                  <?php if($d->AssetContent->getHeadlineLong()!=""): ?>
                  <a href="<?php echo $d->AssetContent->getHeadlineLong() ?>" title="<?php echo $d->getTitle() ?>" class="indique btn btn-mini btn-inverse"><i class="icon-share-alt icon-white"></i> ver detalhes</a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--/redes playlists/narede-->
        
        <!--rodape-->
        <div class="row-fluid redes">
  
          <div class="span4 thumbnail como-partipar">
          <?php if(isset($displays['como-participar'])):?>
            <?php if(count($displays['como-participar']) > 0): ?>       
            <div class="page-header">
              <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
            </div>
            <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
            <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" title="<?php echo $displays['como-participar'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> como participar</a></p>
            <?php endif; ?>
          <?php endif; ?>
            
          <?php if(isset($displays['sobre-o-programa'])):?>
            <?php if(count($displays['sobre-o-programa']) > 0): ?>
            <div class="page-header">
              <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
            </div>
            <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
            <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre-o-programa'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> sobre o programa</a></p>
            <?php endif; ?>
          <?php endif; ?>
          </div>

          <div class="span4" style="*margin:0 0 0 20px;">
            <fb:like-box href="https://www.facebook.com/programaradarcultura" width="319" height="675" show_faces="true" border_color="#DDDDDD" stream="true" header="true"></fb:like-box>
          </div>

          <div class="span4" style="margin:0 0 0 40px\9;">
            <g:plus width="319" href="https://plus.google.com/105450700645861288327" rel="publisher"></g:plus>
            <script type='text/javascript'>
              GA_googleFillSlot("home-geral300x250");
            </script>
          </div>
        </div>
        
        <!--rodape-->
        <div class="row-fluid redes">
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
 