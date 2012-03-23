<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(1060))
    ->orderBy('a.id desc')
    ->execute();
  
  if($assets){
    $sites = array();
    foreach($assets as $a){
      if(!in_array($a->Site, $sites))
        $sites[] = $a->Site;
    }
  }

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
<script type="text/javascript">
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
  })
  
  function setSection(i){
    $('#section_id').val(i);
    $('#filter').submit();
  }
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/baixar">Baixar</a><span>&gt;&gt;</span><a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-baixar-papel">
          <div class="wrapper baixar cartao">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="/baixar" class="enunciado">Baixar</a>
            </div>
            <div class="personagem-escolhido">
				<div class="logo-destaque">
                	<span></span>
                	<a href=""><img alt="<?php echo $asset->getTitle()?>" src="<?php echo $asset->retriveImageUrlByImageUsage("image-1-b") ?>" /></a>
                </div>
              <p><?php echo $asset->getTitle()?></p>
            </div>
            <div class="info">
              <div align="center" class="imagem-download">
                <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
                <?php if(count($preview) > 0): ?>
                  <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $preview[0]->getTitle() ?>" />
                <?php endif; ?>
                <span class="picote"></span>
              </div>
            </div>
            <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
            <?php if(count($download) > 0): ?>
            <div class="btn-barra">
              <?php foreach($download as $k=>$d): ?>
                <?php if($k==0):?>
                  <span class="pontaBarra"></span>
                  <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>">1280 x 1024</a>
                  <span class="caudaBarra"></span>
                <?php elseif($k==1):?>
                  <span class="pontaBarra"></span>
                  <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank">1024 x 768</a>
                  <span class="caudaBarra"></span>
                <?php elseif($k==2):?>
                  <span class="pontaBarra"></span>
                  <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank">800 x 600</a>
                  <span class="caudaBarra"></span>
                <?php elseif($k==3):?>
                  <span class="pontaBarra"></span>
                  <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank">Celular</a>
                  <span class="caudaBarra"></span>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
            </div>
            <span class="picote"></span>
          </div>
        </div>
      </div>
      <div class="coluna">
        <div class="galeriaVideos galeriaGenericaBaixar">
          <div class="enunciado">
            <h2><span class="mais">+</span>Papéis de parede</h2>
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
