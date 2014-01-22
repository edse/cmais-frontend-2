<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<?php  $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>" ?>
<script>
  $("body").addClass("interna videos");
</script>
<?php echo $noscript; ?>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->



<!--content-->
<div id="content">
  <!--Explicação acessibilidade-->
<h1 tabindex="0" class="ac-explicacao">
  <?php echo $section->getDescription(); ?>
</h1>
<!--section-->
<section class="filtro row-fluid">
  <!--span12-->
  <div class="span12" role="main">
    
    <h1><i class="icones-sprite-interna icone-videos-grande"></i>Vídeos</h1>
    
    <?php if(isset($displays['destaque-1']) || isset($displays['destaque-2'])): ?>
      <?php if(count($displays['destaque-1']) > 0 || count($displays['destaque-2']) > 0): ?>
        <?php
          if($displays['destaque-1'][0]->Asset->AssetVideo->getHeadline() != ""):
            $decricaoImagem = $displays['destaque-1'][0]->Asset->AssetVideo->getHeadline(); 
          else:
            $decricaoImagem = "Desculpe, a imagem esta sem descrição mas o Vídeo é bem legal, assista-o e divirta-se!";  
          endif; 
        ?>
        <!--destaque-filtro-->
        <div class="span10 destaque-filtro">
          <!--/destaques-->
          <div class="aba1">
            <?php if(isset($displays['destaque-1'])): ?>
              <?php if(count($displays['destaque-1']) > 0): ?>
            <h2 aria-describedby="Novidade">
              <div class="span6 clipes">
                <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/videos/<?php echo $displays['destaque-1'][0]->Asset->getSlug() ?>" aria-label="Novidade destaque Vídeo - Título: <?php echo $displays['destaque-1'][0]->getTitle().". Descrição: ".$displays['destaque-1'][0]->Asset->getDescription(). ". Descrição do thumbnail:". $decricaoImagem; ?>">
                  <span class="sprite-selo">Novidade!</span>
                  <div class="yt-destaque">
                    <img src="http://img.youtube.com/vi/<?php echo $displays['destaque-1'][0]->Asset->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" />
                  </div>
                  <p><?php echo $displays['destaque-1'][0]->getTitle() ?></p> 
                </a> 
              </div>
            </h2>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              if($displays['destaque-2'][0]->Asset->AssetVideo->getHeadline() != ""):
                $decricaoImagem = $displays['destaque-2'][0]->Asset->AssetVideo->getHeadline(); 
              else:
                $decricaoImagem = "Desculpe, a imagem esta sem descrição mas o Vídeo é bem legal, assista-o e divirta-se!";  
              endif; 
            ?>
            <?php if(isset($displays['destaque-2'])): ?>
              <?php if(count($displays['destaque-2']) > 0): ?>
            <h2 aria-describedby="Novidade">
              <div class="span6 clipes  semmargem">
                <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/videos/<?php echo $displays['destaque-2'][0]->Asset->getSlug() ?>" aria-label="Novidade destaque Vídeo - Título: <?php echo $displays['destaque-2'][0]->getTitle().". Descrição: ".$displays['destaque-2'][0]->Asset->getDescription(). ". Descrição do thumbnail:". $decricaoImagem; ?>">
                  <span class="sprite-selo">Novidade!</span>
                  <div class="yt-destaque">
                    <img src="http://img.youtube.com/vi/<?php echo $displays['destaque-2'][0]->Asset->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" />
                  </div>
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
<span class="divisa"></span>

<!--/section-->
<section class="todos-itens ">
  <!--lista-->
  <ul role="contentinfo" id="container" class="row-fluid">
    <?php
    /* 
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
    <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?> videos"> 
      <a href="/<?php echo $site->getSlug() ?>/videos/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
        <div class="yt-menu">
          <img src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
        </div>
        <i class="icones-sprite-interna icone-videos-pequeno "></i>
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
<?php include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,'pager'=>$pager , 'pager2'=>$pager2)) ?>
<!--/paginacao-->



