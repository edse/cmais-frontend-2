<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(15))
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
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/galleria/galleria-1.2.4.min.js" type="text/javascript"></script>
<link href="http://cmais.com.br/portal/tvratimbum/js/galleria/galleria.classic.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
  //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
  })

  //galeria
  $(function(){
    Galleria.loadTheme('http://cmais.com.br/portal/tvratimbum/js/galleria/galleria.classic.min.js');
    $('#galleria').galleria();
  })

</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/atividades">Atividades</a><span>&gt;&gt;</span><a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-atividades-interna">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="<?php $site->retriveUrl()?>" class="enunciado"><?php $asset->Site->getTitle()?></a>
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
              <div class="imagem-atividade">
                <img alt="<?php echo $asset->getTitle()?>" src="<?php echo $asset->retriveImageUrlByImageUsage("image-6") ?>"><!-- imagem ou v�deo -->
                <span class="picote"></span>
              </div>
              <hr>
              <div class="box">
                <p><span>Passo a passo</span></p>
              </div>
              <div class="galeriaBox">
                <div id="galleria">
                  <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php if(count($related)>0): ?>
                    <?php foreach($related as $d): ?>
                    <a href="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" title="<?php echo $d->getTitle() ?>" alt="<?php echo $d->getDescription() ?>" />
                    </a>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <hr />
            <span class="picote"></span>
            <?php /* 
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="#">Enviar para um amigo</a>
              <span class="caudaBarra"></span>
            </div>
            <span class="picote"></span>
            */ ?>
          </div>
        </div>
      </div>
      <div class="coluna">
        <div class="galeriaVideos galeriaAtividadesInterna">
          <div class="enunciado">
            <h2><span class="mais">+</span>Atividades</h2>
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



