<!-- Le styles -->
<link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"  >
<link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="/portal/js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="/portal/js/bootstrap/tab.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/maiscrianca2.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite)) ?>

<div class="bg"></div>

<?php include_partial_from_folder('sites/maiscrianca', 'global/header', array('site'=>$site)) ?>

<div class="container">
  <div class="row-fluid destaques">
    <div class="span12">
      <a href="javascript:history.back()" class="span3 voltar">voltar</a>
      <div class="span4 h2 acento"><h2>Você sabia?</h2><span></span></div>
      
      <div class="row-fluid span12 box-conteudo">
        <div class="row-fluid span8">
          <h3><?php echo $asset->getTitle()?></h3>
          <?php echo html_entity_decode($asset->AssetContent->render()) ?>
          <div class="pontilhado row-fluid span12"></div>
        </div>
        
        <?php include_partial_from_folder('sites/maiscrianca', 'global/publicidade') ?>
        
      </div>
    </div>
  </div>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/naweb') ?>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/natv') ?>
  
</div>