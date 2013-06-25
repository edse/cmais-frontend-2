<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
} 
?>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
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
  <!-- row-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'nocinema', 'site'=>$site)) ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">No Cinema</h2>
  
  <!--row lista-->
  <div id="agenda" class="row-fluid conteudo ">
  <?php if(count($pager) > 0): ?> 
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
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
        <?php endforeach; ?>
        <!-- /item -->
      </ul> 
      <!-- lista -->
        
      <?php if($pager->haveToPaginate()): ?>
      <!-- PAGINACAO -->
      <div class="pagination pagination-centered">
        <ul>
          <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
          <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
          <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
            <?php else: ?>
          <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
          <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
        </ul>
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
      <!--// PAGINACAO -->
      <?php endif; ?>

    </div>
  <?php endif; ?>

    <div class="span4 acontece">
      <!-- topo acontece -->
      <div class="topo">
          <div class="bac-blue">
            <h3>
              <i class="ico-naweb ico-cinema"></i>
              Acontece
              <i class="ico-seta-titulo seta-acontece"></i>
           </h3>
         </div>
       </div>
       <!-- /topo acontece -->
       <?php
       
       $blocks = Doctrine_Query::create()
          ->select('b.*')
          ->from('Block b, Section s')
          ->where('b.section_id = s.id')
          ->andWhere('s.slug = ?', "agenda")
          ->andWhere('b.slug = ?', 'acontece') 
          ->andWhere('s.site_id = ?', $site->id)
          ->execute();
        
        //echo count($blocks)."<br>";
        
        if(count($blocks) > 0){
          $displays_acontece['acontece'] = $blocks[0]->retriveDisplays();
        }
       
        if(isset($displays_acontece['acontece'])): 
          if(count($displays_acontece['acontece']) > 0): 
            include_partial_from_folder('sites/cocorico', 'global/display-1-destaque', array('displays' => $displays_acontece['acontece']));
          endif;
        endif;
        ?>
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
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /row-->
</div>
<!-- /container-->
