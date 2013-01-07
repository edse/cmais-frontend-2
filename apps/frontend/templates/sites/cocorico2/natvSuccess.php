<link href="/portal/css/tvcultura/sites/cocorico2/familia.css" rel="stylesheet">


<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico2" title="cocorico2"><img src="/portal/images/capaPrograma/cocorico2/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico2 -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico2");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
       <fb:like href="http://www3.tvcultura.com.br/cocorico2/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  
  <?php include_partial_from_folder('sites/cocorico2', 'global/menu-em-familia') ?>
    
  <!-- /row-->
  
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico2">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li>Na TV </li>
     <li class="active"></li>
  </ul>
  <!-- /breadcrumb-->
    
  <h2 class="tit-pagina">na tv</h2>
  <!--row-->
  <?php if(isset($displays['descricao'])):?>
    <?php if(count($displays['descricao']) > 0): ?> 
    
  <?php foreach($displays['descricao'] as $k=>$d):?>   
   <div class="row-fluid conteudo ">
    <p class="span8"><?php echo $d->getDescription() ?></p>
  
  <?php endforeach; ?>
   
   <?php endif; ?>
    <?php endif; ?>
    
    <div class="logos span4">
      <a class="cultura" href="http://tvcultura.cmais.com.br/grade" title="TV Cultura"><img src="/portal/images/capaPrograma/cocorico2/logo-cultura-grd.png" alt="TV Cultura" /><span></span></a>
      <a href="http://tvratimbum.cmais.com.br/grade" title="TV Rá Tim Bum"><img src="/portal/images/capaPrograma/cocorico2/logo-rtb-grd.png" alt="TV Rá Tim Bum"/><span></span></a>
    </div>
  </div>
  <!--/row-->
  <!--row-->
  
   <?php if(isset($displays['destaque'])):?>
        <?php if(count($displays['destaque']) > 0): ?> 
        	
       <div class="row-fluid natv">	
   <?php foreach($displays['destaque'] as $k=>$d):?>
   	
   	<?php
   	$horarios = $d->getHeadline();
	$horario = explode (";", $horarios);
	?>
   	   	
    <ul>
      <li>
        <div class="span8">
          <img class="span6" src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" />
          <bold><?php echo $d->getTitle() ?></bold>
          <p><?php echo $d->getDescription() ?></p>
        </div>
        <div class="hora span2">
        <a href="#" title=""><?php echo $horario[0] ?><br><?php echo $horario[1] ?></a>
          <span class=""></span>
          <a href="#" title=""><?php echo $horario[2] ?><br><?php echo $horario[3] ?></a>
        </div>
        <div class="hora span2">
          <a href="#" title=""><?php echo $horario[4] ?><br><?php echo $horario[5] ?></a>
          <span class=""></span>
          <a href="#" title=""><?php echo $horario[6] ?><br><?php echo $horario[7] ?></a>
        </div>
        
      </li>
       
    </ul>
    <?php endforeach; ?>
  </div>  
   <?php endif; ?>
    <?php endif; ?>
  <!--row-->
  <div class="row-fluid  border-top"></div>
	<!--row-->
		<?php include_partial_from_folder('sites/cocorico2', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
    <!-- /row-->
</div>
<!-- /container-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>