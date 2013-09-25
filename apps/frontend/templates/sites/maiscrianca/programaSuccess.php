<!-- Le styles -->
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"  >
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/tab.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/maiscrianca2.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg"></div>

<?php include_partial_from_folder('sites/maiscrianca', 'global/header', array('site'=>$site)) ?>

<div class="container">
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/natv') ?>
  
  <div class="row-fluid destaques box-natv">
    <div class="span12">
      <div class="row-fluid span12 box-conteudo">
        <div class="row-fluid span8 ">
          <h3><?php echo $site->getTitle() ?></h3>
          <?php if(isset($character)): ?>
          <h4><?php echo $character->getTitle() ?></h4>
          <img class="span12" src="<?php echo $character->retriveImageUrlByImageUsage("image-6-b") ?>" alt="<?php echo $character->getTitle() ?>" />
          <p><?php echo $character->AssetPerson->getBio() ?></p>
          <?php else: ?>
          <?php
            $asset = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa')
              ->where('sa.section_id = ?', $section->id)
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('a.asset_type_id = ?', 1)
              ->orderBy('a.id desc')
              ->limit(1)
              ->fetchOne();
          ?>
          <?php if($asset) echo $asset->AssetContent->render(); ?>
          <?php endif; ?>
          <div class="pontilhado row-fluid span12"></div>
        </div>
        
      <?php include_partial_from_folder('sites/maiscrianca', 'global/publicidade') ?>
      
      </div>
    </div>
  </div>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/naweb') ?>
  
</div>