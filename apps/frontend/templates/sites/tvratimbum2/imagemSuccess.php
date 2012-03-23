<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(14))
    ->orderBy('a.id desc')
    ->execute();

  if(!isset($displays["voce-sabia"])){
    $block = Doctrine::getTable('Block')->findOneById(587);
    if($block)
      $vocesabia = $block->retriveDisplays();
  }
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/galleria/galleria-1.2.4.min.js" type="text/javascript"></script>
<link href="/portal/tvratimbum/js/galleria/galleria.classic.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
  });

  //galleria
  $(function(){
    Galleria.loadTheme('/portal/tvratimbum/js/galleria/galleria.classic.min.js');
    $('#galleria').galleria();
  });
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top') ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/imagens">Imagens</a><span>&gt;&gt;</span><a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-imagens-interna">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="/imagens" class="enunciado">Imagens</a>
            </div>
            <div class="personagem-escolhido">
              <div class="logo-destaque">
                <span></span>
                <a href=""><img alt="<?php echo $asset->getTitle()?>" src="<?php echo $asset->retriveImageUrlByImageUsage("image-1-b") ?>" /></a>
              </div>
              <p><?php echo $asset->getTitle()?></p>
            </div>
            <div class="info">
              <div class="galeriaBox">
                <div id="galleria">
                  <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php if(count($related)>0): ?>
                    <?php foreach($related as $d): ?>
                    <a href="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $d->getTitle() ?>" />
                    </a>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
              <hr />
              <span class="picote"></span>
              <h4><?php echo $asset->getTitle()?></h4>
              <p><?php echo $asset->getDescription()?></p>
              <?php if($asset->AssetImageGallery->getHeadline() != ""):?>
                <div class="infoLink">
                  <span></span>
                  <a href="#"><?php echo $asset->AssetImageGallery->getHeadline()?></a>
                </div>
              <?php endif;?>
              <?php if($asset->AssetImageGallery->getText() != ""):?>
                <p><?php echo $asset->AssetImageGallery->getText()?></p>
              <?php endif;?>
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
        <div class="galeriaVideos galeriaImagensIterna">
          <div class="enunciado">
            <h2><span class="mais">+</span>Galerias</h2>
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
        <hr />
        <?php if(isset($vocesabia)) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $vocesabia)) ?>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>


<script type='text/javascript'>
var _sf_async_config={};
/** CONFIGURATION START **/
_sf_async_config.uid = 30538;
_sf_async_config.domain = 'cmais.com.br';
_sf_async_config.sections = '<?php echo $site->getTitle()?> - <?php $asset->getTitle()?>';  //CHANGE THIS
_sf_async_config.authors = 'cmais+';    //CHANGE THIS
/** CONFIGURATION END **/
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (('https:' == document.location.protocol) ? 'https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/' : 'http://static.chartbeat.com/') +
       'js/chartbeat.js');
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();
</script>
