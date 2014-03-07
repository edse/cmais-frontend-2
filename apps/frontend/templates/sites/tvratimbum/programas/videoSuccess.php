<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(13))
    ->orderBy('a.id desc')
    ->execute();
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2014.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
  })
  
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/videos">Vídeos</a><span>&gt;&gt;</span><a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-videos-interna">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="/videos" class="enunciado">Vídeos</a>
            </div>
            <div class="personagem-escolhido">
              <div class="logo-destaque">
                <?php if ($asset->Site->Program->getImageThumb()): ?>
                <a href="<?php echo $asset->Site->retriveUrl() ?>" title="<?php echo $asset->getTitle()?>">
                	<img alt="<?php echo $asset->getTitle()?>" src="http://midia.cmais.com.br/programs/<?php echo $asset->Site->Program->getImageThumb() ?>" />
                </a>
                <?php else: ?>
                <a href="javascript:history.back()" title="<?php echo $asset->getTitle()?>">
                	<img alt="<?php echo $asset->getTitle()?>" src="http://midia.cmais.com.br/programs/<?php echo $asset->Site->getImageThumb() ?>" />
                </a>
                <?php endif; ?>
              </div>
              <p><?php echo $asset->getTitle()?></p>
            </div>
            <div class="info">
              <div id="video">
                <iframe title="<?php echo $asset->getTitle() ?>" width="640" height="384" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId(); ?>?wmode=transparent&rel=0#t=0m0s" frameborder="0" allowfullscreen></iframe>
              </div>
              <h4><?php echo $asset->getTitle() ?></h4>
              <p><?php echo $asset->getDescription() ?></p>
            </div>
            <?php /*
            <hr />  
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="#">Enviar para um amigo</a>
              <span class="caudaBarra"></span>
            </div>
            */ ?>
            <span class="picote"></span>
          </div>
        </div>
      </div>
      <div class="coluna">
        <div class="galeriaVideos">
          <div class="enunciado">
            <h2><span class="mais">+</span>Vídeos</h2>
          </div>
          <span class="alcaA"></span>
          <span class="alcaB"></span>
          <div class="listaGaleria">
			<div class="wrappperlistaGaleria">
	            <ul>
	              <?php foreach($assets as $a): ?>
	              <li>
	                <a class="aImg" href="<?php echo $a->retriveUrl()?>">
	                  <img src="<?php echo $a->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $a->getTitle()?>" />
	                </a>
	                <a class="aTxt" href="<?php echo $a->retriveUrl()?>">
	                  <span class="nomeRlacionado"><?php echo $a->getTitle()?></span>
	                </a>
	              </li>
	              <?php endforeach; ?>
	            </ul>
			</div>
          </div>
          <?php /*
          <div class="paginacaoPeq">
            <ul>
              <li><a href="" class="anterior">anterior</a></li>
              <li><span class="nPaginas">3 de 10</span></li>
              <li><a href="" class="proximo">próximo</a></li>
            </ul>
            <span class="picote"></span>
          </div>
          */ ?>
        </div>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>


