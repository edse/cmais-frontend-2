<programs>
<?php foreach ($sites as $site){
  $assets = Doctrine::getTable('Asset')->findBySiteIdAndAssetTypeId($site->getId(), 4);
  if(count($assets)>0){
  ?>
 <program>
  <title><![CDATA[<?php echo $site->getTitle();?>]]></title>
  <description><![CDATA[<?php echo ($site->getDescription() == "" ? $site->getTitle() : $site->getDescription())?>]]></description>
  <podcasts>http://app.cmais.com.br/ajax/podcasts?slug=<?php echo $site->getSlug()?></podcasts>
  <site>http://culturafm.cmais.com.br</site>
 </program>
  <?php
    }
  }
?>
</programs>