<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
      <!--topo menu/alert/logo-->
      <div class="row-fluid">
        <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
      </div>
      <div class="row-fluid">  
        <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
      </div>
        <!--topo menu/alert/logo-->
      <!--breadcrumbs-->
       <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'displays' => $displays, 'section'=>$section)) ?>
      <!--breadcrumbs-->
      
      <div id="row-fluid">
        <div class="page-header">
          <h1><?php echo $artist?> <small>lista completa de músicas</small>
            
          <div class="contagem2 pull-right">
          <?php if(isset($letter)):?>
            <?php if($pager->count() > 1):?>
              <h3><?php echo $pager->count()?><small> Músicas começando com "<?php echo strtoupper($letter)?>"</small></h3>
            <?php elseif($pager->count() == 1):?>
              <h3>1<small> Música começando com a letra "<?php echo strtoupper($letter)?>"</small></h3>
            <?php else:?>
              <h3>Nenhuma<small> Música começando com a letra "<?php echo strtoupper($letter)?>"</small></h3>
            <?php endif; ?>
          <?php else:?>
            <?php if($pager->count() > 1):?>
              <h3><?php echo $pager->count()?><small> Músicas</small></h3>
            <?php elseif($pager->count() == 1):?>
              <h3>1<small> Música</small></h3>
            <?php else:?>
              <h3>Nenhuma<small> Música</small></h3>
            <?php endif; ?>
          <?php endif; ?>
          </div>
               
        </div>
      </div>
    </div>
    <!--/container-->
    
    <!--form paginacao-->
    <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
      <input type="hidden" name="letter" id="letter" value="<?php if(isset($letter)) echo $letter;?>" />
    </form>
    <script>
      function goToPage(i){
        $("#page").val(i);
        //$("#letter").val("");
        $("#page_form").submit();
      }
      function goToLetter(i){
        $("#letter").val(i);
        $("#page").val("");
        $("#page_form").submit();
      }
    </script>
    <!--/form paginacao-->  