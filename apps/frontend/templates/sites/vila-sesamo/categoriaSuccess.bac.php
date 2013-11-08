<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />



<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid pais">
    
    <!--container conteudo-->
    <div class="b-amarelo borda-arredonda">
      <h1>
        <?php echo $section->getTitle() ?>
        
        <!--selecione a categoria-->
         <?php
          $sectionCategorias = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"categorias");
          $allCategories = $sectionCategorias->subsections(); // pega todas as categorias para o usuário poder navegar por elas
        ?>        
        <?php if(isset($allCategories)): ?>
          <?php if(count($allCategories) > 0): ?>
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret icones-setas icone-cat-abrir"></span> </a>
            <ul class="dropdown-menu">
              <?php foreach($allCategories as $c): ?>
              <li><a href="<?php echo $c->retriveUrl() ?>" title="<?php echo $c->getTitle() ?>"><?php echo $c->getTitle() ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--/selecione a categoria-->
        
      </h1>
      <?php if($section->getIsHomepage() == 1): // A seção filha de "categorias" precisa estar com a opção "is Homepage" marcada para ser considerada especial, tais como "Hábitos Saudáveis" e "Incluir Brincando". ?>
  
      <!--destaque-principal-->
      <?php if(isset($displays['destaque-principal'])): ?>
        <?php if(count($displays['destaque-principal']) > 0): ?> 
        <div class="container-campanhas">
          <!-- selo -->
          <?php if(isset($displays['selo'])): ?>
            <?php if(count($displays['selo']) > 0): ?>
              <?php if($displays["selo"][1]->retriveImageUrlByImageUsage("original")): ?>
                <img src="<?php echo $displays["selo"][1]->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $displays["selo"][1]->getTitle() ?>" />
              <?php endif; ?>
            <?php endif; ?>
          <?php endif; ?>
          <!--/selo-->
          
          
            <!--video ou imagem-->
            <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
            <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
            <img class="img-destaque" src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />
            <?php endif; ?>
            <!--/video ou imagem-->
          <p>  
            <!--descricao-->    
            <?php echo $displays['destaque-principal'][0]->getDescription() ?>
            <!--/descricao-->
          </p>
          
        </div>
        <?php endif; ?>
      <?php endif; ?>
      <!--/destaque-principal--->
      <div class="divisa"></div>
      <div class="row-fluid span12 box-pais">
        
        
        <!--box-dica--> 
        <div class="span4 dica-pai">
          
          <!--link artigo dica-->
          <a href="#" title="">
            <h2 class="tit-dicas">
              <i class="sprite-aspa-esquerda"></i>
              Titulo dica
            </h2>
            <p class="ellipsis">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellen tesque sodales cursus elit, acos uscipit eros consectetur nec.  Aenean at metus.
            </p>
            <i class="sprite-aspa-direita"></i>
          </a>
          <!--link artigo dica-->
          
          <!--botao baixa artigo-->
          <a class="btn" href="#" title="Baixar" target="_blank">baixar</a>
          <!--botao baixa artigo-->
          
        </div>
        <!--/box-dica-->
        
        <!--box artigo-->
        <div class="span4 artigo">
          <a href="#" title="teste">
            <img src="http://midia.cmais.com.br/assets/image/image-13/3c7040115466dcdd0a368bb53e0740f55647df82.jpg" alt""/>
            <h2 class="tit-artigo">Nome da Artigo Nome da Artigo</h2> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in commodo posuere Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in commodo posuere</p>
          </a>
        </div>
        <!--/box artigo-->
        
        <!--box-parceiros-->  
        <div class="span4 parceiros">
          <h2>Conheça nossos parceiros:</h2>
          <a href="#">
            <img src="/portal/images/capaPrograma/vilasesamo2/destaque.png" alt""/>
          </a>
        </div>  
        <!--/box-parceiros-->
      </div>  
       
    <?php endif; ?>  
    </div>
    <!--/container conteudo-->
    
  </section>
  <!--/section -->
  
  <div class="divisa top"></div>
  
  <!--/section-->
  <section class="todos-itens ">
    <!--lista-->
    <ul role="contentinfo" id="container" class="row-fluid">
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
          <li class="span4 element <?php echo $a->getSlug(); ?>"> 
            <a href="#" title="">
              <img src="" alt=""/>
              <i class="icones-sprite-interna icone-<?php echo $a->getSlug(); ?>-pequeno"></i>
              <div><img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/><?php echo $d->getTitle() ?></div>
            </a>
          </li>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>
      <!--/assets-->

    </ul> 
    <!--/lista-->  
    
  </section>
  <!--/section-->
  
</div>
<!--/content--> 

<input type="hidden" id="filter-choice" value="">

<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="icones-sprite-interna icone-carregar-lr-grande"></i></a>
</nav>

<script>
  $("body").addClass("interna campanhas");
  $('.ellipsis').dotdotdot();
</script>
<?php 
/*

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
      <p><?php echo html_entity_decode($displays['dicas'][0]->Asset->AssetContent->render()) ?></p>
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
      <p><?php echo html_entity_decode($displays['dicas'][1]->Asset->AssetContent->render()) ?></p>
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

  <?php if(isset($_displays['parceiros']) > 0): ?>
    <?php if(count($_displays['parceiros']) > 0): ?>
      <p>Conheça nossos parceiros:</p>
      <a class="publicidade" href="<?php echo $_displays['parceiros'][0]->retriveUrl() ?>" title="<?php echo $_displays['parceiros'][0]->getTitle() ?>">
        <img src="<?php echo $_displays['parceiros'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $_displays['parceiros'][0]->getTitle() ?>" />
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
* 
 */
?>


