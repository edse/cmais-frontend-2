<?php
$assets = $pager->getResults();
?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });

</script>
<!-- container-->
<div class="container tudo tvcocorico">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
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
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2><?php echo $section->getTitle(); ?></h2>
  </div>
  <!-- titulo da pagina -->
  
  <!--row lista-enquetes-->
  <div id="lista-enquetes" class="row-fluid conteudo destaques">
    <!-- lista -->
    <ul class="lista">
      <?php
      foreach($assets as $k=>$d):
        $filename = "/var/frontend/web/uploads/assets/question/".$d->AssetQuestion->id.".txt";
        $lines = file($filename);
        $total = count($lines);
        for($i=$total;$i>=0;$i--){
          $vote = trim(@end(explode("\t", $lines[$i])));
          if(intVal($vote)>0){
            @$votes[$vote] += 1;
          }
        }
        foreach($d->AssetQuestion->Answers as $a){
          $results[$k][] = @array("answer"=>$a->Asset->AssetAnswer->getAnswer() , "votes"=>number_format(100*$votes[$a->getId()]/$total, 2)."%");
        }
      ?>

      
          <!-- item -->
          <li class="item-lista">
            <i class="ico-confirma"></i>
            <h4><?php echo $d->getDescription();?> </h4>
            <h3><?php echo $d->AssetQuestion->getQuestion();?></h3>
            <?php /* <div class="resultado verde">00% - <?php echo $respostas[0]->Asset->AssetAnswer->getAnswer()?></div> */ ?>
            <?php 
            $valorr0 = intval(floatval($results[$k][0]["votes"]));
            $valorr1 = intval(floatval($results[$k][1]["votes"]));
            ?>
            <div class="resultado <?php if($valorr0 > $valorr1) echo "verde"; ?>"><?php echo $valorr0."%"; ?> - <?php echo $results[$k][0]["answer"]?></div>
            <i class="ico-versus-enquete"></i>
            <?php /* <div class="resultado"><?php echo $respostas[1]->Asset->AssetAnswer->getAnswer()?> - 00% </div> */ ?>
            <div class="resultado <?php if($valorr0 < $valorr1) echo "verde"; ?>"><?php echo $valorr1."%"; ?> - <?php echo $results[$k][1]["answer"]?></div>
          </li>
            <!-- pontilhado -->
            <li><hr></li>
            <!-- /pontilhado -->
          <!-- /item -->
       <?php
          endforeach;
       ?>
    </ul>
    <!-- /lista -->
  </div>
  <!-- /row lista-enquetes-->
   <?php if($pager->haveToPaginate()): ?>
    <!-- PAGINACAO -->
    <div class="pagination pagination-centered">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
        <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
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
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
