<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna campanhas categorias");
  
</script>

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
            <ul class="dropdown-menu categorias">
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
        <?php if(isset($displays['dicas'])): ?>
          <?php if(count($displays['dicas']) > 0): ?> 
            <div class="span4 dica-pai">
              
              <!--link artigo dica-->
              <a href="#" title="">
                <h2 class="tit-dicas">
                  <i class="sprite-aspa-esquerda"></i>
                  <?php echo $displays['dicas'][0]->getTitle(); ?>
                </h2>
                <p class="ellipsis">
                  <?php echo html_entity_decode($displays['dicas'][0]->Asset->AssetContent->render()) ?>
                </p>
                <i class="sprite-aspa-direita"></i>
              </a>
              <!--link artigo dica-->
              
              <!--botao baixa dica-->
              <?php $download = $displays['dicas'][0]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
              <?php if(count($download) > 0): ?>
                <?php if($download[0]->AssetType->getSlug() == "file"): ?>
                  <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</a>
                <?php endif; ?>
              <?php endif; ?>
              <!--botao baixa dica-->
              
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--/box-dica-->
        <?php
          // Pega o bloco "parceiros" da seção "para os pais"
          $forParents = Doctrine::getTable('Section')->findOneById(2399);
          $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($forParents->getId(), "parceiros");
          if ($block) {
            $_displays["parceiros"] = $block->retriveDisplays(); // Pega os destaques do bloco "parceiros"
          }    
        ?>
        <!--box artigo-->
        <?php if(count($displays['artigos']) > 0): ?>
          <?php $preview = $displays['artigos'][0]->Asset->retriveRelatedAssetsByRelationType("Preview") ?>
          <div class="span4 artigo">
            <a href="<?php echo $site->getSlug() ?>/<?php echo $forParents->getSlug() ?>/<?php echo $displays['artigos'][0]->Asset->getSlug() ?>" title="<?php echo $displays['artigos'][0]->getTitle() ?>">
              <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt"<?php echo $displays['artigos'][0]->getTitle() ?>"/>
              <h2 class="tit-artigo"><?php echo $displays['artigos'][0]->getTitle() ?></h2> 
              <p><?php echo $displays['artigos'][0]->getDescription() ?></p>
            </a>
          </div>
        <?php else: // senão existir artigo, tenta pegar um segundo destaque do bloco "dicas" pra preencher o espaço ?>
          
          <!--box-dica-->
          <?php if(isset($displays['dicas'][1])): ?>
              <div class="span4 dica-pai">
                
                <!--link artigo dica-->
                <a href="#" title="">
                  <h2 class="tit-dicas">
                    <i class="sprite-aspa-esquerda"></i>
                    <?php echo $displays['dicas'][1]->getTitle(); ?>
                  </h2>
                  <p class="ellipsis">
                    <?php echo html_entity_decode($displays['dicas'][1]->Asset->AssetContent->render()) ?>
                  </p>
                  <i class="sprite-aspa-direita"></i>
                </a>
                <!--link artigo dica-->
                
                <!--botao baixa dica-->
                <?php $download = $displays['dicas'][1]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
                <?php if(count($download) > 0): ?>
                  <?php if($download[0]->AssetType->getSlug() == "file"): ?>
                    <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</a>
                  <?php endif; ?>
                <?php endif; ?>
                <!--botao baixa dica-->
                
              </div>
          <?php endif; ?>
          <!--/box-dica-->
          
        <?php endif; ?>
        <!--/box artigo-->
        
        <!--box-parceiros-->
        
        <?php if(isset($_displays['parceiros']) > 0): ?>
          <?php if(count($_displays['parceiros']) > 0): ?>
            <div class="span4">
              <p>Conheça nossos parceiros:</p>
              <a href="<?php echo $_displays['parceiros'][0]->retriveUrl() ?>" title="<?php echo $_displays['parceiros'][0]->getTitle() ?>">
                <img src="<?php echo $_displays['parceiros'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $_displays['parceiros'][0]->getTitle() ?>" />
              </a>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--/box-parceiros-->
      <?php else: // senão ela se torna uma categoria comum e pega somente a descrição da seção ?>

        <!--destaque-principal-->
        <?php echo $section->getDescription() ?>
        <!--/destaque-principal-->
       
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
          <?php $pager2 = count($pager)/9; ?>
          <?php $parent = $section->Parent->getSlug() ?>
          <?php
      /*
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
          <li class="span4 element <?php echo $a->getSlug(); ?> "> 
            <a href="/<?php echo $site->getSlug() ?>/<?php echo $a->getSlug(); ?>/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
              <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
              <?php if($a->getSlug() == "videos"):?>
                 <div class="yt-menu">
                  <img src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
                </div>
              <?php else:?>
                <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
              <?php endif;?>
              <?php 
              if($a->getSlug() != "jogos" && $a->getSlug() != "videos" && $a->getSlug() != "atividades"):
                $AssetSection = "artigo-ve";
              else:
                $AssetSection = $a->getSlug();
              endif;
              ?>
              <i class="icones-sprite-interna icone-<?php echo $AssetSection; ?>-pequeno"></i>
              <div>
                <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
                <?php echo $d->getTitle() ?>
              </div>
            </a>
          </li>
          
          <?php endforeach; ?>
       * 
       */
      ?>
        <?php endif; ?>
      <?php endif; ?>
      <!--/assets-->
      
    </ul> 
    <!--/lista-->  
    
  </section>
  <!--/section-->
  
</div>
<!--/content--> 

<!--paginacao-->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/pagination', array('site' => $site, 'section' => $section,  'pager'=>$pager , 'pager2'=>$pager2, 'parent'=>$parent)) ?>
<!--/paginacao-->

