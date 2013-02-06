<?php 
$assets = $pager->getResults();
?>
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
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
  <ul class="breadcrumb">
    <li><a href="<?php echo $site->retriveUrl();?>/tvcocorico">Tv Corórico</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Enquetes Anteriores</li>
  </ul>
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
          $results[$k][] = @array("answer"=>$a->getTitle(), "votes"=>number_format(100*$votes[$a->getId()]/$total, 2)."%");
        }
      ?>
      <?php
      /*
      //puxando bloco home
       $displays_home = array();
       $blocks = Doctrine_Query::create()
         ->select('b.*')
         ->from('Block b, Section s') 
         ->where('b.section_id = s.id')
         ->andWhere('s.slug = ?', "home")//mudar para home quando for no ar
         ->andWhere('b.slug = ?', 'enquete') 
         ->andWhere('s.site_id = ?', $site->id)
         ->execute();
      
        if(count($blocks) > 0):
          $displays_home['enquete'] = $blocks[0]->retriveDisplays();
        endif;
        
        foreach($displays_home['enquete'] as $k=>$d):
          
          $filename = "/var/frontend/web/uploads/assets/question/".$displays_home["enquete"][$k]->Asset->AssetQuestion->id.".txt";
          $lines = file($filename);
          $total = count($lines);
          for($i=$total;$i>=0;$i--){
            $vote = trim(@end(explode("\t", $lines[$i])));
            if(intVal($vote)>0){
              @$votes[$vote] += 1;
            }
          }
          foreach($displays_home["enquete"][$k]->Asset->AssetQuestion->Answers as $a){
            $results[$k][] = @array("answer"=>$a->Asset->getTitle(), "votes"=>number_format(100*$votes[$a->getId()]/$total, 2)."%");
          }
       * */
      ?>
      
          <!-- item -->
          <li class="item-lista">
            <i class="ico-confirma"></i>
            <h4><?php echo $d[$k]->getHeadline();?></h4>
            <h3><?php echo $d[$k]->AssetQuestion->getQuestion();?></h3>
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
  <!-- paginacao 
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="#" title="Anterior"></a ></li>
      <li class="active"><a href="#" title="1">1</a></li>
      <li><a href="#" title="1">2</a></li>
      <li><a href="#" title="1">3</a></li>
      <li><a href="#" title="1">...</a></li>
      <li><a href="#" title="1">18</a></li>
      <li class="proximo" title="Próximo"><a href="#"></a></li>
    </ul>
  </div>
  <!-- /paginacao -->
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
