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

 
<!--section miolo--> 
<section class="miolo">
  <!-- container miolo -->
  <div class="container row-fluid">
    <?php if(isset($displays['destaque-principal'])): ?>
      <?php if(count($displays['destaque-principal']) > 0): ?>
        <!-- box-carrossel -->
        <div id="carrossel-radar" class="carousel slide">
          <div class="carousel-inner">
            <?php foreach($displays['destaque-principal'] as $k=>$d): ?>          
              <!-- item -->
              <div class="<?php if($k==0): ?>active<?php endif; ?> item">
                <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <img src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" />
                  <div class="carousel-caption">
                    <h3><?php echo $d->getLabel() ?></h3>
                    <h4><?php echo $d->getTitle() ?></h4>
                    <p><?php echo html_entity_decode($d->getDescription()) ?></p>
                  </div>
                </a>
              </div>
              <!-- /item -->
            <?php endforeach; ?>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#carrossel-radar" data-slide="prev"></a>
          <a class="carousel-control right" href="#carrossel-radar" data-slide="next"></a>
        </div>
        <!-- /box-carrossel -->
      <?php endif; ?>
    <?php endif; ?>
    
    <!--colunas-->
    <div class="row-fluid">
      
      <!--coluna esquerda -->
      <div class="span4" style="margin-left: 0;">
        
        <?php if(isset($displays["destaque-1"])) include_partial_from_folder('sites/culturabrasil', 'global/display', array('displays' => $displays["destaque-1"])) ?>
        
        <?php if(isset($displays["destaque-2"])) include_partial_from_folder('sites/culturabrasil', 'global/display', array('displays' => $displays["destaque-2"])) ?>
        
        <?php if(isset($displays["destaque-3"])) include_partial_from_folder('sites/culturabrasil', 'global/display', array('displays' => $displays["destaque-3"])) ?>
        
      </div>  
      <!--/coluna esquerda -->
      
      <!--coluna do meio -->
      <div class="span4">
        
        <?php if(isset($displays["playlists"])): ?>
          <?php if(count($displays["playlists"]) > 0): ?>
        <!--destaque playlist -->
        <div class="destaque-playlist">
          <h1>PLAYLISTS</h1>
            <?php foreach($displays["playlists"] as $k=>$d): ?>
          <!--item-->
          <div class="item">
            <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              <?php if($k == 0): ?>
                <?php if($d->retriveImageUrlByImageUsage("culturabrasil-thumb2")): ?>
              <img src="<?php echo $d->retriveImageUrlByImageUsage("culturabrasil-thumb2") ?>" alt="<?php echo $d->getTitle() ?>">
                <?php endif; ?>
              <?php endif; ?>
              <h2><?php echo $d->getTitle() ?></h2>
              <p><?php echo $d->getDescription() ?></p>
            </a>
          </div>
          <!--item--> 
            <?php endforeach; ?>
        </div>
        <a href="/playlists" title="mais playlists">
          <span class="mais">+ Playlists</span>
        </a>
        <div class="borda-pontilhada"></div> 
        
        <!--destaque playlist -->
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(isset($displays["frases"])): ?>
          <?php if(count($displays["frases"]) > 0): ?>
        <!--destaque frases -->
        <div class="destaque-cultura frase">
          <div class="programa">
            <span>FRASES</span><i class="borda-titulo"></i>
          </div>
          <h2><i class="aspas">"&nbsp;</i><?php echo $displays["frases"][0]->getTitle() ?><i class="aspas">&nbsp;"</i></h2>
          <p><?php echo $displays["frases"][0]->getDescription() ?></p>
        </div>
        <div class="borda-pontilhada"></div>
        <!--a href="#" title="mais frases"> 
          <span class="mais">+ Frases</span>
        </a-->   
        <!--destaque frases -->
          <?php endif; ?>
        <?php endif; ?>

        <?php if(isset($displays["widget"])): ?>
          <?php if(count($displays["widget"]) > 0): ?>
        <!--destaque widgets -->
        <div class="destaque-cultura">
          <div class="programa">
            <span>WIDGET</span><i class="borda-titulo"></i>
          </div>
          <p>Copie o código abaixo para incorporar o Controle Remoto ao seu blog ou site</p> 
          <textarea rows="3"><?php echo $displays["widget"][0]->getHtml() ?></textarea>
        </div>  
        <!--destaque widgets -->
          <?php endif; ?>
        <?php endif; ?>
        
      </div>
      <!--/coluna do meio -->
      
      <!--coluna direita -->
      <div class="span4">
        <?php
          $date = date("Y/m/d");
          $schedules = Doctrine_Query::create()
            ->select('s.*')
            ->from('Schedule s')
            ->where('s.channel_id = ?', 5)
            ->andWhere('s.date_start >= ? AND s.date_start <= ?', array($date . ' 00:00:00', $date . ' 23:59:59'))
            ->orderBy('s.date_start asc')
            ->limit(20)
            ->execute();
        ?>
        <?php if(isset($schedules)): ?>
          <?php if(count($schedules) > 0): ?>
        <!-- destaque agenda -->
        <div class="destaque-cultura agenda" style="height:418px; overflow-y: auto">
          <div class="programa">
            <span>AGENDA</span><i class="borda-titulo"></i>
          </div>
          <h2><?php echo format_date(date("Y-m-d"), "D") ?></h2>
          <?php foreach($schedules as $k=>$d): ?>
          <!-- item -->
          <div class="item">
            <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              <h3><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></h3>
              <p><?php echo $d->Program->getTitle() ?> | <?php echo $d->getTitle() ?></p>
            </a>
          </div>
          <!-- /item -->
          <?php endforeach; ?>          
        </div>
        <a href="/programacao" title="agenda completa"> 
          <span class="mais">Agenda Completa</span>
        </a> 
        <div class="borda-pontilhada"></div>
        
        <!-- /destaque agenda -->
          <?php endif; ?>
        <?php endif; ?>
        
        <!--banner -->
        <div class="banner-culturabrasil">
          <script type='text/javascript'>
            GA_googleFillSlot("home-geral300x250");
          </script>
        </div>
        <!-- banner -->  
        
      </div>
      <!--/coluna direita -->
    </div>
    <!--/colunas-->
  </div>
  <!-- /container miolo -->
</section>
<!--/section miolo-->

<!--section rodape--> 
<section class="rodape">

  <div class="container row-fluid">
    
    <!-- faceebook -->
    <div class="span4" style="margin-left: 0;">
      <span>Redes Sociais</span><i class="borda-titulo clara"></i>
      <div class="box-facebook">
        <fb:like-box href="https://www.facebook.com/culturabrasil" width="310" height="260" show_faces="true" border_color="#DDDDDD" background_color="#FFFFFF" stream="false" header="true"></fb:like-box>
      </div>
    </div>  
    <!-- / facebook -->
    
    <!-- googleplus -->
    <div class="span4 ">
      <div class="google">
        <!-- Place this tag where you want the widget to render. -->
        <div class="g-page" data-width="310" data-href="https://plus.google.com/105992922006548285318" data-showtagline="false" data-showcoverphoto="false" data-rel="publisher"></div>
        
        <!-- Place this tag after the last widget tag. -->
        <script type="text/javascript">
          window.___gcfg = {lang: 'pt-BR'}; 
        
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
      </div>
    </div> 
    <!-- /googleplus -->
    <!-- twiter -->
    <div class="span4 twitter">
      <a class="twitter-timeline" href="https://twitter.com/culturabrasil2" data-widget-id="370274710744862720">Tweets by @culturabrasil2</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div> 
    <!-- /twiter -->
    
    
    
  </div>
  
</section>
<!--section rodape-->  
<script>
$(document).ready(function(){
  $('#carrossel-radar').mouseenter(function(){
    $('.carousel-control').fadeIn("fast");
  });
  $('#carrossel-radar').mouseleave(function(){
    $('.carousel-control').fadeOut("fast");
  });
  $('#carrossel-radar').jcarousel({
  	 wrap: 'circular'
  })
});
</script>  
