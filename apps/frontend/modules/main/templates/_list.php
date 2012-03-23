<?php use_helper('Text') ?>
<?php foreach ($assets as $asset): ?>
  <entry>
    <title><?php echo $asset->getTitle() ?> (<?php echo $asset->Site->getTitle() ?>)</title>
    <link href="<?php echo $asset->retriveUrl() ?>" />
    <id><?php echo sha1($asset->getId()) ?></id>
    <updated><?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', $asset->getDateTimeObject('updated_at')->format('U')) ?></updated>
    <summary type="xhtml">
     <div xmlns="http://www.w3.org/1999/xhtml">
       <?php $imgs = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
       <?php if(count($imgs) > 0): ?>
        <div>
          <a href="<?php echo $asset->retriveUrl() ?>">
            <img src="<?php echo $imgs[0]->retriveImageUrlByImageUsage('image-4-b') ?>" alt="<?php echo $asset->getTitle() ?>" />
          </a>
        </div>
       <?php elseif($asset->AssetType->getSlug() == "video"): ?>
        <div>
          <a href="<?php echo $asset->retriveUrl() ?>">
            <img title="<?php echo $asset->getTitle() ?>" alt="<?php echo $asset->getTitle() ?>" src="http://img.youtube.com/vi/<?php echo $asset->AssetVideo->getYoutubeId() ?>/0.jpg" />
          </a>
        </div>
       <?php elseif($asset->AssetType->getSlug() == "audio"): ?>
        <div>
          <a href="<?php echo $asset->retriveUrl() ?>">
            <?php echo $asset->getTitle() ?>
          </a>
        </div>
       <?php elseif($asset->AssetType->getSlug() == "image"): ?>
        <div>
          <a href="<?php echo $asset->retriveUrl() ?>">
            <img title="<?php echo $asset->getTitle() ?>" alt="<?php echo $asset->getTitle() ?>" src="<?php echo $asset->retriveImageUrlByImageUsage('image-4-b') ?>" />
          </a>
        </div>
       <?php endif; ?>
 
       <div>
         <?php echo simple_format_text($asset->getDescription()) ?>
       </div>

     </div>
    </summary>
    <author>
      <name>cmais+ O portal de conteúdo da Cultura</name>
    </author>
  </entry>
<?php endforeach ?>
