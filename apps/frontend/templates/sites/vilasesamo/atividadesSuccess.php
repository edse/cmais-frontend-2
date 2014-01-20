<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<?php  $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>" ?>
<script>
  $("body").addClass("interna atividades");
</script>
<?php echo $noscript; ?>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--Explicação acessibilidade-->
<h1 id="explain" class="ac-explicacao" >
  <?php echo $section->getDescription(); ?>
</h1>

<!--content-->
<div id="content">
<!--section-->
<section class="filtro row-fluid">
  <!--span12-->
  <div class="span12" role="main">
    
    <!--h3><i class="sprite-icon-colorir-med"></i>Atividades</h3-->
    <h1>
      <i class="icones-sprite-interna icone-atividades-grande"></i>
      Atividades
   </h1>
    
    <?php if(isset($displays['destaque-1']) || isset($displays['destaque-2'])): ?>
      <?php if(count($displays['destaque-1']) > 0 || count($displays['destaque-2']) > 0): ?>
    <!--destaque-filtro-->
    <div class="span10 destaque-filtro">
      <!--/destaques-->
      <div class="aba1">
        <?php if(isset($displays['destaque-1'])): ?>
          <?php if(count($displays['destaque-1']) > 0): ?>
            <?php $related_preview = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByRelationType("Preview"); ?>
            <?php if($related_preview):?>
              <?php
                if(count($related_preview)>0 && $related_preview[0]->AssetImage->getHeadline() != ""):
                  $decricaoImagem = $related_preview[0]->AssetImage->getHeadline(); 
                else:
                  $decricaoImagem = "Desculpe, a imagem esta sem descrição mas esta atividade é bem legal, brinque com ela e chame a sua família ou amiguinhos!";  
                endif; 
              ?>
            <?php endif; ?>
            <h2>
              <div class="span6 clipes">
                <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $displays['destaque-1'][0]->Asset->getSlug() ?>" title="" aria-label="Novidade destaque Atividade - Título: <?php echo $displays['destaque-1'][0]->getTitle().". Descrição: ".$displays['destaque-1'][0]->Asset->getDescription(). ". Descrição do thumbnail:". $decricaoImagem; ?>" >
                  <span class="sprite-selo">Novidade!</span>
                  <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="" />
                  <p><?php echo $displays['destaque-1'][0]->getTitle() ?></p>
                </a> 
              </div>
            </h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($displays['destaque-2'])): ?>
          <?php if(count($displays['destaque-2']) > 0): ?>
            <?php $related_preview = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType("Preview"); ?>
            <?php if($related_preview):?>
              <?php
                if(count($related_preview)>0):
                  $decricaoImagem = $related_preview[0]->AssetImage->getHeadline(); 
                else:
                  $decricaoImagem = "Desculpe, a imagem esta sem descrição.";  
                endif; 
              ?>
            <?php endif; ?>
            <h2>
              <div class="span6 clipes semmargem">
                <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $displays['destaque-2'][0]->Asset->getSlug() ?>" title="" aria-label="Novidade destaque Atividade - Título:<?php echo $displays['destaque-2'][0]->getTitle().". Descrição: ".$displays['destaque-2'][0]->Asset->getDescription(). ". Descrição do thumbnail:". $decricaoImagem; ?>" >
                  <span class="sprite-selo">Novidade!</span>
                  <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="" />
                  <p><?php echo $displays['destaque-2'][0]->getTitle() ?></p>
                </a> 
              </div>
            </h2>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--/destaques-->
    </div>
    <!--destaque-filtro-->
      <?php endif; ?>
    <?php endif; ?>
    
    <!--menu filtro persoagem-->
    <?php $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"personagens"); ?>
    <?php $personagens = $particularSection->subsections()?>
    
       
    <?php include_partial_from_folder('sites/vilasesamo', 'global/menu-personagens', array('site'=>$site ,'section' => $section,'personagens' => $personagens)) ?>
    <!--/menu filtro persoagem-->
        
  </div>
  <!--/span12-->
</section>
<!--/section-->


<?php if(isset($pager)): ?>
  <?php if(count($pager) > 0): ?>
  <?php $pager2 = count($pager)/9; ?>
    <?php $parent = $section->Parent->getSlug(); ?>
 
<span class="divisa"></span>

<!--/section-->
<section class="todos-itens ">
  <!--lista-->
  <ul id="container" class="row-fluid">
    <?php /*
    <?php foreach($pager->getResults() as $k=>$d): ?>
    <?php
      $assetPersonagens = array();
      $personagensSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
      $assetSections = $d->getSections();
      foreach($assetSections as $a) {
        if($a->getParentSectionId() == $personagensSection->getId()) {
          $assetPersonagens[] = $a->getSlug();
        }
      }
    ?>
    <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?> atividades"> 
      <a href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
        <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
        <i class="icones-sprite-interna icone-atividades-pequeno"></i>
        <div>
          <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
          <?php echo $d->getTitle() ?>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
     */
     ?>
  </ul> 
  <!--lista-->  
</section>
<!--/section-->
  <?php endif; ?>
<?php endif; ?>

</div>
<!--/content-->
  



<!--paginacao-->
<?php include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,'pager'=>$pager , 'pager2'=>$pager2, 'parent' => $parent)) ?>
<!--/paginacao-->

<!--scripts-->

