<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
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
  <div class="row-fluid conteudo">
    <!--embedagram-->
    <script type="text/javascript" src="/portal/js/embedagram/jquery-embedagram.pack.js"></script> 
    <script type="text/javascript">
    $(document).ready(function() {
      $('#slideTvCocorico').embedagram({
        instagram_id: 290753701,
        link_type:'web',
        thumb_width:140
      });
    });
    </script>
    <style>
    #slideTvCocorico li{width: 140px;float: left;margin: 0 4px 4px 0;} 
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