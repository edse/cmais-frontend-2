<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/qss-site.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<style type="text/css">
  #esquerda h3 { text-align:left; color:#fff; }
</style>

<style type="text/css">
  #esquerda .titulos { display: none; }
</style>
<?php use_helper('I18N', 'Date')?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))  ?>
</div>
<div class="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0): ?>
      <h2>
        <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;"> <?php if($program->getImageThumb() != ""):?>
          <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" /> <?php else:?>
          <h3 class="tit-pagina grid1"><?php echo $program->getTitle()?></h3> 
          <?php endif;?>
        </a>
      </h2>
      <?php endif;?>

      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif;?>

      <?php if(isset($program) && $program->id > 0): ?>
      <!-- horario -->
      <div id="horario">
        <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
      </div>
      <!-- /horario -->
      <?php endif;?>
    </div>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle() ?></a>
      </div>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <h3><?php echo $section->getTitle() ?></h3>
          
          <?php if($displays["yt-live"]): ?>
            <?php if(count($displays["yt-live"]) > 0): ?>
              <?php if($displays["yt-live"][0]->Asset->AssetType->getSlug() == "video"): ?>
                
          <iframe width="640" height="364" src="http://www.youtube.com/embed/<?php if($displays["yt-live"][0]) echo $displays["yt-live"][0]->Asset->AssetVideo->getYoutubeId() ?>" frameborder="0" allowfullscreen></iframe>
          
          <h4><?php if($displays["yt-live"][0]) echo $displays["yt-live"][0]->getTitle() ?></h4>
          <p><?php if($displays["yt-live"][0]) echo $displays["yt-live"][0]->getDescription() ?></p>
          
              <?php endif; ?>
            <?php endif; ?>
          <?php endif; ?>
 
          <!-- barra compartilhar -->
          <div class="box-compartilhar grid2">
            <a href="javascript:;" class="comentar" style="display:block"><span></span>Comentários</a>
            <div class="btn-compartilhar" style="width: auto;">
              <p class="compartilhar">Compartilhar</p>
              <div class="face" style="display:block; width: 380px;">
                <div style="display:block; float: left; margin-right: 40px;">
                  <g:plusone size="medium" count="false"></g:plusone>
                </div>
                <div style="display:block; float: left; margin-right: 0px;">
                  <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
                </div>
                <div style="display:block; float: left; text-align: left;">
                  <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
                </div>
              </div>
            </div>
          </div>
          <!-- /barra compartilhar -->
          <h3>Comentários</h3>
          <!-- comentario facebook -->
          <div class="comentario-fb grid2" style="display:block">
            <fb:comments href="<?php echo $uri ?>" numposts="3" width="610" publish_feed="true"></fb:comments>
            <hr />
          </div>
          <!-- /comentario facebook -->
          <style type="text/css">
            #esquerda .box-compartilhar .comentar {
              text-indent: -9999px;
            }
            #esquerda .box-compartilhar .comentar span {
              display: none;
            }
            #esquerda .btn-compartilhar {
              float: left;
            }
          </style>
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        
        <div id="direita" class="grid1">
          
          <a class="twitter-timeline" href="https://twitter.com/search?q=%23QSS" data-widget-id="334007660250800128">Tweets about "#QSS"</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


          <?php if(isset($displays['chat'])):?> 
          <?php if(count($displays['chat']) > 0): ?>
          <h3><?php echo $displays['chat'][0]->Block->getTitle() ?></h3>
          <div class="box">
            <?php echo html_entity_decode($displays['chat'][0]->getHtml()); ?>
          </div>
          <?php endif; ?>
          <?php endif; ?>
          <p></p>
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1" style="margin-top:20px;">
            <!-- programas-homepage-300x250 -->
            <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-300x250");

            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->
        </div>
      
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
      <?php if (isset($displays["rodape-interno"])): ?>
      <!--APOIO-->
      <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
      <!--/APOIO-->
      <?php endif;?>
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
