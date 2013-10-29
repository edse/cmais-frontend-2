<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>
<!-- /HEADER -->


<h1><?php echo $section->getTitle() ?></h1>

<?php
  $sectionCampanha = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"campanhas");
  $allCampaigns = $sectionCampanha->subsections(); 
?>        
<?php if(isset($allCampaigns)): ?>
  <?php if(count($allCampaigns) > 0): ?>
<ul>
    <?php foreach($allCampaigns as $c): ?>
      <?php
        $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($c->getId(), "enviados");
        if ($block) $displays["enviados"] = $block->retriveDisplays(); // Pega os destaques do bloco "parceiros"
      ?>
      <?php if(isset($displays["enviados"])): ?>
        <?php if(count($displays["enviados"]) > 0): ?>
  <li><a href="/<?php echo $site->getSlug() ?>/campanhas/<?php echo $c->getSlug(); ?>" title="<?php echo $c->getTitle(); ?>"><?php echo $c->getTitle(); ?></a></li>
        <?php endif; ?>
      <?php endif; ?>
    <?php endforeach; ?>
</ul>
  <?php endif; ?>
<?php endif; ?>

<!--destaque-principal-->
<div>
<?php if(isset($displays['destaque-principal'])): ?>
  <?php if(count($displays['destaque-principal']) > 0): ?>
    
  <!--descricao-->    
  <div>
  <?php echo $displays['destaque-principal'][0]->getDescription() ?>
  </div>
  <!--/descricao-->
      
  <!--video ou imagem-->
  <div>
  <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
  <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
  <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
  <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />
  <?php endif; ?>
  </div>
  <!--/video ou imagem-->
      
  <?php endif; ?>
<?php endif; ?>
</div>
<!--/destaque-principal-->
  
<!--destaques-->
<div>
<?php if(isset($pager)): ?>
  <?php if(count($pager) > 0): ?>
    <?php foreach($pager->getResults() as $k=>$d): ?>
    <?php
      $assetPersonagens = array();
      $personagensSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
      foreach($d->getSections() as $a) {
        if($a->getParentSectionId() == $personagensSection->getId()) {
          $assetPersonagens[] = $a->getSlug();
        }
      }
      foreach($d->getSections() as $a) {
        if(in_array($a->getSlug(),array("videos","jogos","atividades"))) {
          $assetSection = $a;
          break;
        }
      }
    ?>
    <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?>"> 
      <a href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
        <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>" />
        <i class="sprite-icons-new sprite-icone_<?php echo $assetSection->getSlug() ?>"></i>
        <div>
          <img src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
          <?php echo $d->getTitle() ?>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
  <?php endif; ?>
<?php endif; ?>
</div>
<!--/destaques-->



