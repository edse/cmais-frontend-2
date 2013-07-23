<?php use_helper('I18N', 'Date') ?>
<!--topo cmais-->
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!--topo cmais-->

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cultura-brasil.css" rel="stylesheet" type="text/css" />

<!--fonte-->
<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--fonte-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>
 
<!--section topo--> 
<section class="topo">
  <!--container topo--> 
  <div class="container row-fluid">
    <!--logo-->
    <div class="logo">
      logo
    </div>
    <!--/logo--> 
    
    <!--menu cultura brasil-->
    <?php if(count($siteSections) > 0): ?>        
    <ul class="nav menu-principal nav-pills">
      <?php foreach($siteSections as $k=>$s): ?>
        <?php $subsections = $s->subsections(); ?>
        <?php if(count($subsections) > 0): ?>
          <!-- botao --->
          <li class="dropdown <?php if($section->getParentSectionId() == $s->id): ?>active<?php endif; ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" title="<?php echo $s->getTitle()?>">
              <?php echo $s->getTitle()?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <?php foreach($subsections as $s): ?>
              <li class="">
                <a class="dropdown" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- botao --->
            <?php else: ?>  
          <!-- botao --->
          <li class="<?php if($section->id == $s->id): ?>active<?php endif; ?>">
            <a href="<?php if($s->getSlug() == "home"): ?>/<?php else: ?><?php echo $s->retriveUrl()?><?php endif; ?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
          </li>
          <!-- /botao --->
        <?php endif; ?>
      
      <?php endforeach; ?>          
   </ul>
   <?php endif; ?>
   <!--/menu cultura brasil-->
   
   <!-- ouca a radio -->
   <a id="ouca" class="ouca" href="javascript:;">
     <img src="/portal/images/capaPrograma/radarcultura/ouca-a-radio.png" alt="Ouça a rádio Cultura Brasil"/>
   </a>
    <!-- ouca a radio -->
    
  </div>
 <!--/container topo-->
  
</section>
<!--/section topo-->

<!--section miolo--> 
<section class="miolo">

  <div class="container row-fluid">
    miolo
  </div>
  
</section>
<!--section miolo-->

<!--section rodape--> 
<section class="rodape">

  <div class="container row-fluid">
    rodape
  </div>
  
</section>
<!--section rodape-->  

<!--rodape cmais-->

<!--rodape cmais-->