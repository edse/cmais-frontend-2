
  <section class="pais">
    <span class="divisa"></span>
    <h2 class="tit-box">Cuidadores <i class="icones-setas icone-cuidadores-abrir"></i></h2>
    <div class="content span12 row-fluid">
      
      <div class="redes">
        <p>Compartilhe esta brincadeira:</p>
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
      </div>
      <!--box-pais -->
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
      <!--/box-pais-->
      
      <div class="fechar-toogle ativo">
        <i class="icones-setas icone-cuidadores-fechar"></i>
      </div>
    </div>
    
    
    <span class="linha"></span>
  </section>
  <?php
    /*
     * PARA OS PAIS
     * A prioridade é pegar o "Asset relacionado", Senão...
     * Se o asset chamado pertencer a uma categoria especial (seção filha de "categorias" e marcada como "is homepage") as dicas e artigos serão destaques dos blocos "dicas" e "artigos", respectivamente, da seção dessa categoria.
     * Senão busca assets com semelhança de tags
     
    if(isset($asset))
      $dicaRelacionada = $asset->retriveRelatedAssetsByRelationType("Asset Relacionado");
    
    $forParents = Doctrine::getTable('Section')->findOneById(2399);
    if(isset($categories)) {
      foreach($categories as $c) {
        if($c->getIsHomepage() == 1) { // A seção filha de "categorias" precisa estar com a opção "is Homepage" marcada para ser considerada especial, tais como "Hábitos Saudáveis" e "Incluir Brincando".
          $specialCategory = $c; 
        }
      }
    }
    
    if(isset($specialCategory)) { // se ela for especial, traz as dicas e artigos por meio de blocos que estão nas categorias (seções filha de "categorias")
      $bs = $specialCategory->Blocks;
      $displays = array();
      if(count($bs) > 0){
        foreach($bs as $b){
          $displays[$b->getSlug()] = $b->retriveDisplays();
        }
      }
    }
    else { // senão traz pela semelhança de tags com o asset em questão
      $sectionDicas = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"dicas");
      if(isset($asset)) {
        if(count($asset->getTags())>0){
          foreach($asset->getTags() as $t)
            $tags[] = $t;
        }
      }
      if(isset($tags)) {
        if(count($tags) > 0) {
          $dica = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa, tag t, tagging tg')
            ->where('a.site_id = ?', $site->getId())
            ->andWhere('sa.asset_id = a.id')
            ->andWhere('sa.section_id = ?', $sectionDicas->getId())
            ->andWhere('a.is_active = ?', 1)
            ->andWhere('tg.taggable_id = a.id')
            ->andWhere('tg.tag_id = t.id')
            ->andWhereIn('t.name', $tags)
            ->andWhere('a.asset_type_id = ?', 1)
            ->limit(2)
            ->execute();
            
          $artigo = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa, tag t, tagging tg')
            ->where('a.site_id = ?', $site->getId())
            ->andWhere('sa.asset_id = a.id')
            ->andWhere('sa.section_id = ?', $forParents->getId())
            ->andWhere('a.is_active = ?', 1)
            ->andWhere('tg.taggable_id = a.id')
            ->andWhere('tg.tag_id = t.id')
            ->andWhereIn('t.name', $tags)
            ->andWhere('a.asset_type_id = ?', 1)
            ->fetchOne();
        }
      }
      else {
        $dica = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('a.site_id = ?', $site->getId())
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('sa.section_id = ?', $sectionDicas->getId())
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('a.asset_type_id = ?', 1)
          ->limit(2)
          ->execute();
          
        $artigo = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('a.site_id = ?', $site->getId())
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('sa.section_id = ?', $forParents->getId())
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('a.asset_type_id = ?', 1)
          ->fetchOne();
      }
    }
    
  ?>
  <?php if($forParents): ?>
  <section class="pais">
    <span class="divisa"></span>
    <h2><?php echo $forParents->getTitle() ?> <i class="icones-setas icone-cuidadores-abrir"></i></h2>
    <div class="content span12 row-fluid">
      
      <div class="redes">
        <p>Compartilhe esta brincadeira:</p>
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
      </div>
      
      <?php if(isset($specialCategory)): ?>
        
        <?php if(isset($dicaRelacionada)): ?>
          <?php if(count($dicaRelacionada) > 0): ?>
            <div class="span4 dica">
              <i class="sprite-aspa-esquerda"></i>
              <h2><a href="#"><?php echo $dicaRelacionada[0]->getTitle(); ?></a></h2>
              <p><?php echo html_entity_decode($dicaRelacionada[0]->AssetContent->render()) ?></p>
              <i class="sprite-aspa-direita"></i>
              <?php $download = $dicaRelacionada[0]->retriveRelatedAssetsByRelationType("Download") ?>
              <?php if(count($download) > 0): ?>
                <?php if($download[0]->AssetType->getSlug() == "file"): ?>
                  <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
                 <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php else: ?>
          <?php if(isset($displays['dicas']) > 0): ?>
            <?php if(count($displays['dicas']) > 0): ?>
              <div class="span4 dica">
                <i class="sprite-aspa-esquerda"></i>
                <h2><a href="#"><?php echo $displays['dicas'][0]->getTitle(); ?></a></h2>
                <p><?php echo html_entity_decode($displays['dicas'][0]->Asset->AssetContent->render()) ?></p>
                <i class="sprite-aspa-direita"></i>
                <?php $download = $displays['dicas'][0]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
                <?php if(count($download) > 0): ?>
                  <?php if($download[0]->AssetType->getSlug() == "file"): ?>
                    <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(isset($displays['artigos']) > 0): ?>
          <?php if(count($displays['artigos']) > 0): ?>
            <?php $preview = $displays['artigos'][0]->Asset->retriveRelatedAssetsByRelationType("Preview") ?>
              <div class="span4 box-select">
                <a href="<?php echo $site->getSlug() ?>/<?php echo $forParents->getSlug() ?>/<?php echo $displays['artigos'][0]->getSlug() ?>" title="<?php echo $displays['artigos'][0]->getTitle() ?>"> <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['artigos'][0]->getTitle() ?>" /> </a>
                <h2><a><?php echo $displays['artigos'][0]->getTitle() ?></a></h2>
                <p><?php echo $displays['artigos'][0]->getDescription() ?></p>
              </div>
          <?php endif; ?>
        <?php else: // senão existir artigo, tenta pegar um segundo destaque do bloco "dicas" pra preencher o espaço ?>
          <?php if(isset($displays['dicas'][1])): ?>
            <div class="span4 dica">
              <i class="sprite-aspa-esquerda"></i>
              <h2><a href="#"><?php echo $displays['dicas'][1]->getTitle(); ?></a></h2>
              <p><?php echo html_entity_decode($displays['dicas'][1]->Asset->AssetContent->render()) ?></p>
              <i class="sprite-aspa-direita"></i>
              <?php $download = $displays['dicas'][1]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
              <?php if(count($download) > 0): ?>
                <?php if($download[0]->AssetType->getSlug() == "file"): ?>
                  <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        
      <?php else: ?>
        
        <?php if(isset($dicaRelacionada)): ?>
          <?php if(count($dicaRelacionada) > 0): ?>
            <div class="span4 dica">
              <i class="sprite-aspa-esquerda"></i>
              <h2><a href="#"><?php echo $dica[0]->getTitle(); ?></a></h2>
              <p><?php echo html_entity_decode($dicaRelacionada[0]->AssetContent->render()) ?></p>
              <i class="sprite-aspa-direita"></i>
                <?php $download = $dica[0]->retriveRelatedAssetsByRelationType("Download") ?>
                <?php if(count($download) > 0): ?>
                  <?php if($download[0]->AssetType->getSlug() == "file"): ?>
              <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
                  <?php endif; ?>
                <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php else: ?>
          <?php if(isset($dica[0])): ?>
            <div class="span4 dica">
              <i class="sprite-aspa-esquerda"></i>
              <h2><a href="#"><?php echo $dica[0]->getTitle(); ?></a></h2>
              <p><?php echo html_entity_decode($dica[0]->AssetContent->render()) ?></p>
              <i class="sprite-aspa-direita"></i>
              <?php $download = $dica[0]->retriveRelatedAssetsByRelationType("Download") ?>
              <?php if(count($download) > 0): ?>
                <?php if($download[0]->AssetType->getSlug() == "file"): ?>
                  <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>      
      
        <?php if($artigo): ?>
          <?php $preview = $artigo->retriveRelatedAssetsByRelationType("Preview") ?>
      <div class="span4 box-select">
        <a href="<?php echo $site->getSlug() ?>/<?php echo $forParents->getSlug() ?>/<?php echo $artigo->getSlug() ?>" title="<?php echo $artigo->getTitle() ?>"> <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $artigo->getTitle() ?>" /> </a>
        <h2><a><?php echo $artigo->getTitle() ?></a></h2>
        <p><?php echo $artigo->getDescription() ?></p>
      </div>
        <?php else: ?>
          <?php if(isset($dica[1])): ?>
        <div class="span4 dica">
          <i class="sprite-aspa-esquerda"></i>
          <h2><a href="#"><?php echo $dica[1]->getTitle(); ?></a></h2>
          <p><?php echo html_entity_decode($dica[1]->AssetContent->render()) ?></p>
          <i class="sprite-aspa-direita"></i>
            <?php $download = $dica[1]->retriveRelatedAssetsByRelationType("Download") ?>
            <?php if(count($download) > 0): ?>
              <?php if($download[0]->AssetType->getSlug() == "file"): ?>
          <a class="btn" href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar" target="_blank">baixar</button>
              <?php endif; ?>
            <?php endif; ?>
        </div>
          <?php endif; ?>
        <?php endif; ?>
        
      <?php endif; ?>
      
      <div class="span4">
        <?php
          $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($forParents->getId(), "parceiros"); // Pega o bloco "parceiros" da seção "para os pais"
          if ($block)
            $displays["parceiros"] = $block->retriveDisplays(); // Pega os destaques do bloco "parceiros"    
        ?>
        <?php if(isset($displays['parceiros'])): ?>
          <?php if(count($displays['parceiros']) > 0): ?>
        <p>Conheça nossos parceiros:</p>
        <a class="publicidade" href="<?php echo $displays['parceiros'][0]->retriveUrl() ?>" title="<?php echo $displays['parceiros'][0]->getTitle() ?>">
          <img src="<?php echo $displays['parceiros'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['parceiros'][0]->getTitle() ?>" />
        </a>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php
          $sectionCategorias = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"categorias");
          $allCategories = $sectionCategorias->subsections(); // pega todas as categorias para o usuário poder navegar por elas
        ?>        
        <?php if(isset($allCategories)): ?>
          <?php if(count($allCategories) > 0): ?>
        <p>Você também pode escolher o jogo de acordo com as preferências da criança:</p>
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
      </div>
      <div class="fechar-toogle ativo">
        <i class="icones-setas icone-cuidadores-fechar"></i>
      </div>
    </div>
    
    
    <span class="linha"></span>
  </section>
  <?php endif; ?>
     * 
     */ ?>