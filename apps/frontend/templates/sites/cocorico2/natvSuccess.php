<link href="/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="<?php echo $site->retriveUrl()?>" title="cocorico2"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
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
  <!-- menu-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'natv', 'site'=>$site)) ?>
  <!-- /menu-->
  
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/emfamilia">Em família</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Na TV</li>
  </ul>
  <!-- /breadcrumb-->
    
  <h2 class="tit-pagina">na tv</h2>
  <!--row-->
  <div class="row-fluid conteudo ">
    <div class="span8"><?php echo html_entity_decode(str_replace(array("<p>", "</p>"), array("", ""), $displays['descricao'][0]->Asset->AssetContent->render())) ?></div>
    <div class="logos span4">
      <a class="cultura" href="http://tvcultura.cmais.com.br/grade" title="TV Cultura"><img src="/portal/images/capaPrograma/cocorico/logo-cultura-grd.png" alt="TV Cultura" /><span></span></a>
      <a href="http://tvratimbum.cmais.com.br/grade" title="TV Rá Tim Bum"><img src="/portal/images/capaPrograma/cocorico/logo-rtb-grd.png" alt="TV Rá Tim Bum"/><span></span></a>
    </div>
  </div>
  <!--/row-->
  <!--row--> 
  
   <?php if(isset($displays['destaque'])):?>
        <?php if(count($displays['destaque']) > 0): ?> 
        	
       <div class="row-fluid natv">	
   <?php foreach($displays['destaque'] as $k=>$d):?>
   	
   	<?php
   	$horarios = $d-> html_entity_decode($d->Asset->AssetContent->getHeadline()) ?>;
	$horario = explode (";", $horarios);
	?>
   	   	
    <ul>
      <li>
        <div class="span8">
          <img class="span6" src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" />
          <bold><?php echo $d->getTitle() ?></bold>
          <p><?php echo $d->getHtml() ?></p>
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
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->