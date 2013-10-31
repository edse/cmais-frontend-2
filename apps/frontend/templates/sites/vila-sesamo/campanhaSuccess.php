<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("na-tv");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container conteudo-->
    <div class="b-verde borda-arredonda">
      <h1>
        <span class="icones-sprite-interna icone-na-tv-grande"></span>
        <?php echo $section->getTitle() ?>
      </h1>
      
    </div>
    <!--/container conteudo-->
    
  </section>
  <!--/section -->
  
</div>
<!--/content-->      
<?php 
/**
 * programado
 
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

<!-- visualizador do destaque -->
<div id="viewer">
  
</div>
<!--/visualizador do destaque -->

<!--destaques-->
<div>
<?php if(isset($displays["enviados"])): ?>
  <?php if(count($displays["enviados"]) > 0): ?>
    <?php foreach($displays["enviados"] as $k=>$d): ?>
  <div>
    <a href="javascript: viewer('<?php echo $d->retriveImageUrlByImageUsage("image-14") ?>','<?php echo $d->getTitle() ?>')" title="<?php echo $d->getTitle() ?>">
      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>"/>
      <!--input type="hidden" id="image_<?php echo $k ?>" name="image_<?php echo $k ?>" value="<?php echo $d->retriveImageUrlByImageUsage("image-14") ?>" /-->
      <p><?php echo $d->getTitle() ?></p>
    </a>
  </div>
    <?php endforeach; ?>
  <?php endif; ?>
<?php endif; ?>
</div>
<!--/destaques-->

<script>
  function viewer(url,alt) {
    $("#viewer").html("<img src='"+url+"' alt='"+alt+"' />");
  }
</script>

*/?>

