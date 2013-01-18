<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
} 
?>
<link href="/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
       <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('site'=>$site)) ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico">Em família</a> <span class="divider">&rsaquo;</span></li>
     <li>Agenda</li>
     <li class="active"></li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">agenda</h2>
  
  
  
  
  <?php if(count($pager) > 0): ?>
  <!--row lista-->
  <div id="agenda" class="row-fluid conteudo ">
    <div class="span8">
      <!-- lista -->
      <ul class="lista">
        <!-- item -->
        <?php foreach($pager->getResults() as $d): ?>
        <li class="item-lista">
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <h3><?php echo $d->getTitle() ?></h3>
            <span><?php echo $d->AssetContent->getHeadline() ?></span>
          </a>
        </li>
        <?php endforeach; ?>
          <!-- pontilhado -->
          <li><hr></li>
          <!-- /pontilhado -->
        <!-- /item -->
      </ul> 
      <!-- lista -->
      <?php endif; ?>
      
      
      
      
      
      <!-- paginacao -->
      <div class="pagination pagination-centered">
        <ul>
          <li class="anterior"><a href="#" title="Anterior"></a></li>
          <li class="active"><a href="#" title="1">1</a></li>
          <li><a href="#" title="1">2</a></li>
          <li><a href="#" title="1">3</a></li>
          <li><a href="#" title="1">...</a></li>
          <li><a href="#" title="1">18</a></li>
          <li class="proximo" title="Próximo"><a href="#"></a></li>
        </ul>
      </div>
      <!-- paginacao -->
    </div>
    <div class="span4 acontece">
      <!-- topo acontece -->
      <div class="topo">
          <div class="bac-blue">
            <h3>
              <i class="ico-naweb ico-acontece"></i>
              Acontece
              <i class="ico-seta-titulo seta-acontece"></i>
           </h3>
         </div>
       </div>
       <!-- /topo acontece -->
        <?php include_partial_from_folder('sites/cocorico', 'global/display-1-destaque', array('displays' => $displays['acontece'])) ?>
       <!-- banner -->
       <div class="">
         <!-- portal-cocorico-300x250 -->
         <script type='text/javascript'>
           GA_googleFillSlot("portal-cocorico-300x250");
         </script>
       </div>
       <!-- banner -->
    </div>
  </div>
  
  <!--/row lista-->
  <!--row-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /row-->
</div>
<!-- /container-->
