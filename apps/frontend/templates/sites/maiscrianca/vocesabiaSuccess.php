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

<div class="container ">
  <div class="row-fluid destaques vcsabia">
    <div class="span12">
      <a href="javascript:history.back()" class="span3 voltar">voltar</a>
      <div class="span4 h2 acento"><h2><?php echo $section->getTitle() ?></h2><span></span></div>
      <ul class="row-fluid span12">
        <?php if(count($pager) > 0): ?>
          <?php $i = 1 ?>
          <?php foreach($pager->getResults() as $d): ?>
        <li class="span4<?php if($i%3 == 0): ?> last<?php endif; ?>">
          <a href="<?php echo $d->retriveUrl() ?>" title="">
            <?php if($d->retriveImageUrlByImageUsage("image-3-b") != ""): ?>
            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?>
            <?php endif; ?>
          </a>
        </li>
            <?php $i++; ?>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
      <?php if(isset($pager)): ?>
        <?php if($pager->haveToPaginate()): ?>
      <div class="row-fluid span12">
        <div class="span12 pagination">
          <ul>
            <li class="disabled anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a></li>
            <?php foreach ($pager->getLinks() as $page): ?>
              <?php if ($page == $pager->getPage()): ?>
            <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
              <?php else: ?>
            <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
            <li class="disabled proxima"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Próxima</a></li>
          </ul>
        </div>
      </div>
      <form id="page_form" action="" method="post">
        <input type="hidden" name="return_url" value="<?php echo $url?>" />
        <input type="hidden" name="page" id="page" value="" />
      </form>
      <script>
        function goToPage(i){
          $("#page").val(i);
          $("#page_form").submit();
        }
      </script>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/naweb') ?>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/natv') ?>
  
</div>