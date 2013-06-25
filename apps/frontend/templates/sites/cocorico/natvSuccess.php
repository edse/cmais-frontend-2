<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="<?php echo $site->retriveUrl() ?>" title="<?php echo $site->getTitle() ?>"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico2 -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico-familia");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
       <fb:like href="<?php echo $site->retriveUrl() ?>" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- menu-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'natv', 'site'=>$site)) ?>
  <!-- /menu-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
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
	    $horario = explode("|", $d->getHeadline());
	  ?>
   	<?php /*   	
    <ul>
      <li>
        <div class="span8">
          <img class="span6" src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" />
          <bold><?php echo $d->getTitle() ?></bold>
          <p><?php echo $d->getHtml() ?></p>
        </div>
        <div class="hora span2">
        <a href="#" title=""><?php if(isset($horario[0])): echo $horario[0]; endif; ?><br><?php if(isset($horario[1])): echo $horario[1]; endif; ?></a>
          <span class=""></span>
          <a href="#" title=""><?php if(isset($horario[2])): echo $horario[2]; endif; ?><br><?php if(isset($horario[3])): echo $horario[3]; endif; ?></a>
        </div>
        <div class="hora span2">
          <a href="#" title=""><?php if(isset($horario[4])): echo $horario[4]; endif; ?><br><?php if(isset($horario[5])): echo $horario[5]; endif; ?></a>
          <span class=""></span>
          <a href="#" title=""><?php if(isset($horario[6])): echo $horario[6]; endif; ?><br><?php if(isset($horario[7])): echo $horario[7]; endif; ?></a>
        </div>
        
      </li>
       
    </ul>
     */
    ?>
    <ul>
      <li>
        <div class="span8">
          <img class="span6" src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" />
          <bold><?php echo $d->getTitle() ?></bold>
          <p><?php echo $d->getHtml() ?></p>
        </div>
        <p class="hora span2">
          <?php if(isset($horario[0])): echo html_entity_decode($horario[0]); endif; ?>
        </p>
        <p class="hora span2">
          <?php if(isset($horario[1])): echo html_entity_decode($horario[1]); endif; ?>
        </p>
      </li>
    </ul>
    
    <?php endforeach; ?>
  </div>  
   <?php endif; ?>
    <?php endif; ?>
  <!--row-->
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->