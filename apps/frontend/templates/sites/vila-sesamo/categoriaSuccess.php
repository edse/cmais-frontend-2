<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>
<!-- /HEADER -->


<h1><?php echo $section->getTitle() ?></h1>

<?php
  $sectionCategorias = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"categorias");
  $allCategories = $sectionCategorias->subsections(); // pega todas as categorias para o usuário poder navegar por elas
?>        
<?php if(isset($allCategories)): ?>
  <?php if(count($allCategories) > 0): ?>
    <ul>
    <?php foreach($allCategories as $c): ?>
      <li><a href="/<?php echo $site->getSlug() ?>/categorias/<?php echo $c->getSlug(); ?>" title="<?php echo $c->getTitle(); ?>"><?php echo $c->getTitle(); ?></a></li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
<?php endif; ?>

<?php if($section->getIsHomepage() == 1): // A seção filha de "categorias" precisa estar com a opção "is Homepage" marcada para ser considerada especial, tais como "Hábitos Saudáveis" e "Incluir Brincando". ?>

<!--destaque-principal-->
<div>
  <?php if(isset($displays['destaque-principal'])): ?>
    <?php if(count($displays['destaque-principal']) > 0): ?>
      
      <!-- selo -->
      <?php if(isset($displays['selo'])): ?>
        <?php if(count($displays['selo']) > 0): ?>
          <?php if($displays["selo"][0]->retriveImageUrlByImageUsage("original")): ?>
            <img src="<?php echo $displays["selo"][0]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $displays["selo"][0]->getTitle() ?>" />
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
      <!--/selo-->
      
      <!--descricao-->    
      <?php echo $displays['destaque-principal'][0]->getDescription() ?>
      <!--/descricao-->
      
      <!--video ou imagem-->
      <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
      <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
      <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
      <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />
      <?php endif; ?>
      <!--/video ou imagem-->
    <?php endif; ?>
  <?php endif; ?>
  
</div>
<!--/destaque-principal-->
  
<!--destaques-secundarios-->
<div>
  <?php if(isset($displays['dicas'])): ?>
    <?php if(count($displays['dicas']) > 0): ?>
      <!--dica 1-->
      <h2><?php echo $displays['dicas'][0]->getTitle(); ?></h2>
      <p><?php echo $displays['dicas'][0]->getDescription(); ?></p>
      <?php $download = $displays['dicas'][0]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
      <?php if(count($download) > 0): ?>
        <?php if($download[0]->AssetType->getSlug() == "file"): ?>
          <a href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
        <?php endif; ?>
      <?php endif; ?>
      <!--/dica 1-->
    <?php endif; ?>
  <?php endif; ?> 
     
  <?php if(count($displays['artigos']) > 0): ?>
    <!--artigo-->
    <?php $preview = $displays['artigos'][0]->Asset->retriveRelatedAssetsByRelationType("Preview") ?>
    <a href="<?php echo $site->getSlug() ?>/<?php echo $forParents->getSlug() ?>/<?php echo $displays['artigos'][0]->getSlug() ?>" title="<?php echo $displays['artigos'][0]->getTitle() ?>">
      <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['artigos'][0]->getTitle() ?>" />
    </a>
    <h2><a><?php echo $displays['artigos'][0]->getTitle() ?></a></h2>
    <p><?php echo $displays['artigos'][0]->getDescription() ?></p>
    <!--/artigo-->
    
  <?php else: // senão existir artigo, tenta pegar um segundo destaque do bloco "dicas" pra preencher o espaço ?>
  
    <?php if(isset($displays['dicas'][1])): ?>2
      <!--dica 2-->
      <h2><a href="#"><?php echo $displays['dicas'][1]->getTitle(); ?></a></h2>
      <p><?php echo $displays['dicas'][1]->getDescription(); ?></p>
      <?php $download = $displays['dicas'][1]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
      <?php if(count($download) > 0): ?>
        <?php if($download[0]->AssetType->getSlug() == "file"): ?>
          <a href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
        <?php endif; ?>
      <?php endif; ?>
      <!--/dica 2-->
    <?php endif; ?>
    
  <?php endif; ?>
  
  <?php
    // Pega o bloco "parceiros" da seção "para os pais"
    $forParents = Doctrine::getTable('Section')->findOneById(2399);
    $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($forParents->getId(), "parceiros");
    if ($block) {
      $_displays["parceiros"] = $block->retriveDisplays(); // Pega os destaques do bloco "parceiros"
    }    
  ?>

  <?php if(isset($displays['parceiros']) > 0): ?>
    <?php if(count($displays['parceiros']) > 0): ?>
      <p>Conheça nossos parceiros:</p>
      <a class="publicidade" href="<?php echo $displays['parceiros'][0]->retriveUrl() ?>" title="<?php echo $displays['parceiros'][0]->getTitle() ?>">
        <img src="<?php echo $displays['parceiros'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['parceiros'][0]->getTitle() ?>" />
      </a>
    <?php endif; ?>
  <?php endif; ?>
</div>
<!--/destaque-secundarios-->

<?php else: // senão ela se torna uma categoria comum e pega somente a descrição da seção ?>

<!--destaque-principal-->
<div>
  <?php echo $section->getDescription() ?>
</div>
<!--/destaque-principal-->

<?php endif; ?>

<!--assets-->
<div>
<?php if(isset($pager)): ?>
  <?php if(count($pager) > 0): ?>
    <?php foreach($pager->getResults() as $k=>$d): ?>
    <?php
      $assetPersonagens = array();
      $personagensSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
      foreach($d->getSections() as $a) {
        if($a->getParentSectionId() == $personagensSection->getId()) {
          $assetPersonagens[] = $a->getSlug();
        }
      }
      foreach($d->getSections() as $a) {
        if(in_array($a->getSlug(),array("videos","jogos","atividades"))) {
          $assetSection = $a;
          break;
        }
      }
    ?>
    <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?>"> 
      <a href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
        <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>" />
        <i class="sprite-icons-new sprite-icone_<?php echo $assetSection->getSlug() ?>"></i>
        <div>
          <img src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
          <?php echo $d->getTitle() ?>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
  <?php endif; ?>
<?php endif; ?>
</div>
<!--/assets-->



