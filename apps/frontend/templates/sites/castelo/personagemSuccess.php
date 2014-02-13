<?php use_helper('I18N', 'Date') ?>
<div class="base">
<div class="headerF"></div>
<div class="mioloF">
<?php
$asset = Doctrine::getTable('Asset')->findOneById(61672);
 ?>
  <!-- NOTICIA INTERNA -->
  <div class="box-interna grid2">
    <h3><?php echo $asset->getTitle() ?></h3>
    <p><?php echo $asset->getDescription() ?></p>
    <div class="assinatura grid2">
      <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
      <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
      <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
    </div>
    
    <div class="texto">
      <?php echo html_entity_decode($asset->AssetContent->render()) ?>
    </div>
    
    <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
    <?php if(count($relacionados) > 0): ?>
      <!-- SAIBA MAIS -->
      <div class="box-padrao grid2" style="margin-bottom: 20px;">
        <div id="saibamais">                                                            
        <h4>saiba +</h4>                                                            
        <ul class="conteudo">
          <?php foreach($relacionados as $k=>$d): ?>
            <li style="width: auto;">
              <a class="titulos" href="<?php echo $d->retriveUrl()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
            </li>
          <?php endforeach; ?>
        </ul>
       </div>
      </div>
      <!-- SAIBA MAIS -->
    <?php endif; ?>

    <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>

  </div>
  <!-- /NOTICIA INTERNA -->

</div>
<div class="footerF"></div>
</div>