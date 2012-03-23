<?php echo ('<?xml version="1.0" encoding="utf-8"?>'); ?>
<object id="<?php echo $object['id'] ?>">
  <?php foreach ($object as $key => $value): ?>
    <<?php echo $key ?>><?php echo $value ?></<?php echo $key ?>>
  <?php endforeach ?>
  <?php if(isset($object2) && $object2['id'] > 0): ?>
  <asset_<?php echo $object->AssetType->getSlug()?> id="<?php echo $object2['id'] ?>">
    <?php foreach ($object2 as $key => $value): ?>
      <<?php echo $key ?>><?php echo $value ?></<?php echo $key ?>>
    <?php endforeach ?>
  </asset_<?php echo $object->AssetType->getSlug()?>>
  <?php endif; ?>
</object>
