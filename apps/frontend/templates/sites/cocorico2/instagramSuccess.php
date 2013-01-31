<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!--FANCYBOX-->
<script type="text/javascript" src="/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<!--/FANCYBOX-->

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <!--topo coco-->
    <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
    <!--/topo coco-->
  
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
<ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">TV Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/bastidores">bastidores</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $section->getTitle()?></li>
  </ul>
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina instagram">
    <h2><i class="ico-instagram"></i>Instagram <span>@TVCOCORICÓ</span></h2>
  </div>
  <!-- titulo da pagina -->
  
  <!--row-->
  <div class="row-fluid">
    <!--embedagram-->
    <script type="text/javascript" src="/portal/js/embedagram/jquery-embedagram.pack.js"></script> 
    <script type="text/javascript">
    $(document).ready(function() {
      $('#slideTvCocorico').embedagram({
        instagram_id: 290753701,
        link_type:'web',
        thumb_width:300
      });
    });
    </script>
    <style>
    #slideTvCocorico { margin:0; }
    #slideTvCocorico li {width: 300px; float: left; margin: 0 0 2% 2%;} 
    </style>
    <ul id="slideTvCocorico"></ul>
  <!--/embedagram-->
  </div>
  <!-- /row-->
 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->