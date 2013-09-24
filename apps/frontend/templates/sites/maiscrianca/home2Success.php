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
  <div class="header">
    <h1 class="logo span12"><a href="<?php echo $site->retriveUrl() ?>" title="+Criança"><img class="row-fluid span12" src="http://cmais.com.br/portal/images/capaPrograma/maiscrianca2/logo.jpg" alt="+criança" /></a></h1>
  </div>
  <div class="container">
    
    <?php if(isset($displays['destaque-principal-1']) || isset($displays['destaque-principal-2'])): ?>
    <div class="row-fluid" id="menu">
      <div class="span12">
        <ul id="myTab" class="nav nav-tabs">
          <?php if(isset($displays['destaque-principal-1'])): ?>
            <?php if(count($displays['destaque-principal-1']) > 0): ?>
          <li class="joguinhos active"><a href="#home" data-toggle="tab"><p><?php echo $displays['destaque-principal-1'][0]->Block->getTitle() ?></p><span class="ativo"></span></a></li>
            <?php endif; ?>
          <?php endif; ?>
          <?php if(isset($displays['destaque-principal-2'])): ?>
            <?php if(count($displays['destaque-principal-2']) > 0): ?>
          <li class="atividades"><a href="#profile" data-toggle="tab"><span></span><p><?php echo $displays['destaque-principal-2'][0]->Block->getTitle() ?></p><span class="ativo"></span></a></li>
            <?php endif; ?>
          <?php endif; ?>
        </ul>
        <div id="myTabContent" class="tab-content">
          <?php if(isset($displays['destaque-principal-1'])): ?>
            <?php if(count($displays['destaque-principal-1']) > 0): ?>
          <div class="tab-pane fade active in" id="home">
            <ul class="lista">
              <?php foreach($displays['destaque-principal-1'] as $k=>$d): ?>
              <li class="span3">
                <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                  <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
                  <?php endif; ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
            <?php endif; ?>
          <?php endif; ?>
          
          <?php if(isset($displays['destaque-principal-2'])): ?>
            <?php if(count($displays['destaque-principal-2']) > 0): ?>
          <div class="tab-pane fade" id="profile">
            <ul class="lista">
              <?php foreach($displays['destaque-principal-2'] as $k=>$d): ?>
              <li class="span3">
                <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                  <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
                  <?php endif; ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="pontilhado row-fluid span12"></div>
      </div>
    </div>
    <?php endif; ?>
    
    
    <?php include_partial_from_folder('sites/maiscrianca', 'global/naweb') ?>
    
    <?php include_partial_from_folder('sites/maiscrianca', 'global/natv') ?>
    
    
    
    <div class="row-fluid destaques rodape">
      <div class="row-fluid span12">
        <?php include_partial_from_folder('sites/maiscrianca', 'global/vocesabia') ?>
        
        <?php include_partial_from_folder('sites/maiscrianca', 'global/paraospais') ?>
        
        <?php include_partial_from_folder('sites/maiscrianca', 'global/publicidade') ?>
      </div>
    </div>
  </div>
