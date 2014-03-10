<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(12, 28, 27, 26, 29, 25))
    ->orderBy('rand()')
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
  //carrossel
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
      <div class="colunaMaior exceptionCM">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/jogos">Jogos</a><span>&gt;&gt;</span><a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-jogos-interna">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="/jogos" class="enunciado">Jogos</a>
            </div>
            <div class="personagem-escolhido">
              <div class="logo-destaque">
                <span></span>
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
              <div align="center" class="jogo">
                <?php echo html_entity_decode($asset->AssetContent->getContent()) ?>
              </div>
              <p><?php echo $asset->getDescription()?></p>
            </div>
            <hr />
            <?php /*  
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="#">Enviar para um amigo</a>
              <span class="caudaBarra"></span>
            </div>
            <span class="picote"></span>
            */ ?>
          </div>
          <hr />
          <div class="saibaMais">
            <span class="alcaA"></span>
            <span class="alcaB"></span>
            <h2><span class="mais">+</span>Jogos</h2>
            <div class="carrossel jcarousel-container jcarousel-container-horizontal" style="display: block;">
              <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;" disabled="false"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;" disabled="false"></div><div class="jcarousel-clip jcarousel-clip-horizontal">
                <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 1980px; left: 0px;">
                  <?php foreach($assets as $a): ?>
                  <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1">
                    <a href="<?php echo $a->retriveUrl()?>" class="aImg">
                      <img alt="<?php echo $a->getTitle()?>" src="<?php echo $a->retriveImageUrlByImageUsage("image-3-b") ?>">
                    </a>
                    <a href="<?php echo $a->retriveUrl()?>" class="aTxt">
                      <span class="nomeRlacionado"><?php echo $a->getTitle()?></span>
                      <?php /* <span class="nomeItem"><?php echo $a->getDescription()?></span> */ ?>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>


