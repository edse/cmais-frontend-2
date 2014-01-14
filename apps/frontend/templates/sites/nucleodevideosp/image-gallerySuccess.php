<link type="text/css" href="http://cmais.com.br/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/orbit/jquery.orbit-1.2.3.min.js"></script>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaVideosInterna.css" type="text/css" />
<script type="text/javascript">
//carrossel
$(function(){
  $('.carrossel').jcarousel({
      wrap: "both"
  });

  //hover states on the static widgets
  $('#dialog_link, ul#icons li').hover(
    function() { $(this).addClass('ui-state-hover'); }, 
    function() { $(this).removeClass('ui-state-hover'); }
  );
  
});

$(window).load(function() {
  $('#featured').orbit({
    'bullets' : true,   
    'bulletThumbs': true
  });
});
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- curtir -->
          <div class="redes">
            <div class="curtir">
              <div style="display:block; float: left; margin-right:10px;">
              <g:plusone size="medium" count="false"></g:plusone>
              </div>
              <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
            </div>
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>	         
          </div>
          <!-- /curtir -->
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
            <!-- horario -->
            <div id="horario">
              <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
            </div>
            <!-- /horario -->
          <?php endif; ?>
        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
		  <!-- curtir -->           
	      <div class="redes" style="width:auto; margin:0;">	           	           	           
	        <ul>
	          <li><a class="fb" href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?>http://facebook.com/tvcultura<?php endif; ?>" title="Facebook">Facebook</a></li>
	          <li><a class="twt" href="<?php if($site->getTwitterUrl()): ?><?php echo $site->getTwitterUrl() ?><?php else: ?>http://twitter.com/tvcultura<?php endif; ?>" title="Twitter">Twitter</a></li>
	          <li><a class="ytb" href="http://youtube.com/<?php if($site->getYoutubeChannel()): ?><?php echo $site->getYoutubeChannel() ?><?php else: ?>cultura<?php endif; ?>" title="YouTube">YouTube</a></li>
	          <li><a class="orkut" href="http://www.orkut.com.br/Main#Profile?uid=4382339673666352959" title="Orkut">Orkut</a></li>
	          <li><a class="rss" href="/<?php echo $site->getSlug() ?>/feed" title="RSS">RSS</a></li>
	        </ul>
	      </div>	         
	      <!-- /curtir -->	
          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/fotos" title="Fotos">Fotos</a>
              <span>&gt;</span>
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

          

        </div>
        <!-- /box-topo -->
        <?php endif; ?>
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            <h3 class="tit-pagina grid3"><?php echo $asset->getTitle()?></h3>
            <div id="esquerda" class="grid2">
              
              <div class="box-interna grid2" style="margin-bottom:0px;">
                
                <a href="#" class="txt-16"><?php echo $asset->getDescription() ?></a>
                <p><?php echo $asset->AssetImageGallery->getText()?></p>
                <!-- 
                <div class="assinatura grid2">
                  <p class="sup">Cristina Hallogallo <span>Nome da categoria</span></p>
                  <p class="inf">10/11/2010 09h30 - Atualizado em 10/11/2010 11h29</p>
                  <div class="acessibilidade">
                    <a href="#" class="zoom">+A</a>
                    <a href="#" class="zoom">-A</a>
                  </div>
                </div>
                -->
              </div>

              <!-- GALERIA DE FOTOS -->
              <div class="container galeriaNew" style="float: left; margin-bottom: 10px; width: 640px;">
                <div id="featured">
                <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if(count($related)>0): ?>
                  <?php foreach($related as $d): ?>
                  <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" data-thumb="<?php echo $d->retriveImageUrlByImageUsage('image-1') ?>" data-caption="#html<?php echo $d->getSlug() ?>" />
                  <?php endforeach; ?>
                <?php endif; ?>
                </div>

                <!-- THUMBNAILS -->
              <?php if(count($related)>0): ?>
                <?php foreach($related as $d): ?>
                <?php $related_content = $d->retriveRelatedAssetsByAssetTypeId(1); ?>
                <span class="orbit-caption" id="html<?php echo $d->getSlug() ?>">
                  <span class="espaco">
                    <?php echo $d->getDescription() ?><?php if($d->AssetImage->getHeadline()!="") echo "<br>".$d->AssetImage->getHeadline() ?><?php if($d->AssetImage->getAuthor()!="") echo "<br>Foto: ".$d->AssetImage->getAuthor() ?>
                    <?php if(count($related_content)>0): ?>
                    <br /><a href="<?php echo $related_content[0]->retriveUrl()?>" target="_blank">Saiba mais</a>
                    <?php endif; ?>
                  </span>
                </span>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
              <!-- /GALERIA DE FOTOS -->
              
              <!-- barra compartilhar -->
              <div class="box-compartilhar grid2">
                <a href="javascript:;" class="comentar" style="display:none"><span></span>Coment&aacute;rios</a>
                <div class="btn-compartilhar" style="width: auto;">
                  <p class="compartilhar">Compartilhar</p>
                  <div class="face">
                    <div style="display:block; float: left;">
                      <g:plusone size="medium" count="false"></g:plusone>
                    </div>
                    <!-- Google Orkut Share Element -->
					<div id="orkut_share"></div><script src="http://www.google.com/jsapi" type="text/javascript"></script><script type="text/javascript">google.load('orkut.share', '1');google.setOnLoadCallback(function(){new google.orkut.share.Button({style:'regular'}).draw('orkut_share');}, true);</script>
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
              <!-- comentario facebook -->
              <div class="comentario-fb grid2" style="display:block">
                <fb:comments href="<?php echo $uri ?>" numposts="3" width="610" publish_feed="true"></fb:comments>
                <hr />
              </div>
              <!-- /comentario facebook -->

            </div>
            
            <div id="direita" class="grid1 direitaMais">
              
              <?php $people = $asset->retriveRelatedAssetsByAssetTypeId(20); ?>
              <?php if(count($people)>0): ?>
                <?php $author = $people[0]; ?>
                <!-- BOX PADRAO INFORMACOES -->
                <div class="box-padrao grid1 informacao">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>informa&ccedil;&otilde;es do artista</h4>
                    </div>
                  </div>
                  <div class="conteudo">
                    <p class="titulos"><?php echo $author->AssetPerson->getName() ?></p>
                    <p class="txt-12 bold"><?php echo $author->AssetPerson->getHeadline() ?></p>
                    <!-- <p class="txt-12 bold">Nasceu em: <span>30/10/1980, S&atilde;o Paulo.</span></p> -->
                    <p class="txt-16 bold">Biografia</p>
                    <p class="txt"><?php echo $author->AssetPerson->getBio() ?></p>  
                  </div>
                </div>
                <!-- BOX PADRAO INFORMACOES -->
              <?php endif; ?>

               <!-- BOX PUBLICIDADE -->
              <div style="width: 300px; height: 50px; overflow: hidden" class="box-publicidade grid1">
                  <a target="_blank" href="http://www.educacao.sp.gov.br" name="Veja nossos v&iacute;deos no portal da Secretaria de Educa&ccedil;&atilde;o" title="Veja nossos v&iacute;deos no portal da Secretaria de Educa&ccedil;&atilde;o">
                  	<img src="http://cmais.com.br/portal/images/capaPrograma/nucleodevideosp/banner-educacao.gif" alt="Veja nossos v&iacute;deos no portal da Secretaria de Educa&ccedil;&atilde;o">
                  </a>
              </div>                                                
              <!-- / BOX PUBLICIDADE -->

              <?php if(isset($displays["destaque-noticias"])): ?>
              <!-- BOX PADRAO Noticia -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>Not&iacute;cias + recentes</h4>
                    <!-- <a href="#" class="rss" title="rss"></a> -->
                  </div>
                </div>
                <?php include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias"])) ?>
              </div>
              <!-- /BOX PADRAO Noticia -->
              <?php endif; ?>

            </div>

          </div>
          <!-- CAPA -->

          <!-- MENU-RODAPE -->
          <?php if(isset($displays["galerias-recentes"])) include_partial_from_folder('blocks','global/display-3c-last-galleries', array('displays' => $displays["galerias-recentes"])) ?>
          <!-- /MENU-RODAPE -->

        
          
          </div>
          <!-- /CONTEUDO PAGINA -->
        
        </div>
        <!-- /MIOLO -->
      
      </div>
      <!-- / CAPA SITE -->
