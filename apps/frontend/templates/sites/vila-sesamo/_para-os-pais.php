  <?php
    $forParents = Doctrine::getTable('Section')->findOneById(2399);
    
    foreach($categories as $c) {
      if($c->getIsHomepage() == 1) { // A seção filha de "categorias" precisa estar com a opção "is Homepage" marcada para ser considerada especial, tais como "Hábitos Saudáveis" e "Incluir Brincando".
        $specialCategory = $c; 
      }
    }
    
    if(isset($specialCategory)) {
      $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($specialCategory->getId(), "dicas"); // Pega o bloco "dicas" da seção filha
      if ($block) $displays["dicas"] = $block->retriveDisplays(); // Pega os destaques do bloco "dicas"
      // falta pegar o artigo nessa condição
    }
    else {
      $sectionDicas = Doctrine::getTable('Section')->findOneBySiteIdAndlug($site->getId(),"dicas");
      $tags = array();
      if(count($asset->getTags())>0){
        foreach($asset->getTags() as $t)
          $tags[] = $t;
      }
      if(count($tags) > 0) {
        $dica = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, tag t, tagging tg')
          ->where('a.site_id = ?', $site->getId())
          ->andWhere('sa.asset_id = a.id')
          ->andWhereIn('sa.section_id', $sectionDicas->getId())
          ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('tg.taggable_id = a.id')
          ->andWhere('tg.tag_id = t.id')
          ->andWhereIn('t.name', $tags)
          ->andWhere('a.asset_type_id = ?', 1)
          ->fetchOne();
      }
      // falta pegar o artigo nessa condição também
    }
    
  ?>
  <?php if($forParents): ?>
  <section class="pais">
    <span class="divisa"></span>
    <h2><?php echo $forParents->getTitle() ?> <i class="sprite-seta-down"></i></h2>
    <div class="content span12 row-fluid">
      
      <div class="redes">
        <p>Compartilhe esta brincadeira:</p>
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
      </div>
      
      <?php if(isset($specialCategory)): ?>
        
        <?php if($specialCategory->getSlug() == "incluir-brincando"): ?>
          
          <?php if(count($displays['dicas']) > 0): ?>
            <?php foreach($displays['dicas'] as $d): ?>
      <div class="span4 dica">
        <i class="sprite-aspa-esquerda"></i>
        <h2><a href="#"><?php echo $d->getTitle(); ?></a></h2>
        <p><?php echo $d->getDescription(); ?></p>
        <i class="sprite-aspa-direita"></i>
              <?php $related = $d->Asset->retriveRelatedAssetsByRelationType("Download") ?>
              <?php if(count($related) > 0): ?>
                <?php if($related[0]->AssetType->getSlug() == "file"): ?>
        <a href="http://midia.cmais.com.br/assets/file/original/<?php echo $related[0]->AssetFile->getFile() ?>" title="Baixar">baixar</button>
                <?php endif; ?>
              <?php endif; ?>
      </div>
            <?php endforeach; ?>
          <?php endif; ?>
        
        <?php else: ?>
          <?php if(count($displays['dicas']) > 0): ?>
      <div class="span4 dica">
        <i class="sprite-aspa-esquerda"></i>
        <h2><a href="#"><?php echo $displays['dicas'][0]->getTitle(); ?></a></h2>
        <p><?php echo $displays['dicas'][0]->getDescription(); ?></p>
        <i class="sprite-aspa-direita"></i>
            <?php $download = $displays['dicas'][0]->Asset->retriveRelatedAssetsByRelationType("Download") ?>
            <?php if(count($download) > 0): ?>
              <?php if($download[0]->AssetType->getSlug() == "file"): ?>
        <a href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar">baixar</button>
              <?php endif; ?>
            <?php endif; ?>
      </div>
      
            <?php if(isset($artigo)): ?>
              <?php $preview = $artigo->Asset->retriveRelatedAssetsByRelationType("Preview") ?>
      <div class="span4 box-select">
        <a href="<?php echo $site->getSlug() ?>/<?php echo $forParents->getSlug() ?>/<?php echo $artigo->getSlug() ?>" title="<?php echo $artigo->getTitle() ?>"> <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $artigo->getTitle() ?>" /> </a>
        <h2><a><?php echo $artigo->getTitle() ?></a></h2>
        <p><?php echo $artigo->getDescription() ?></p>
      </div>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>
        
      <?php else: ?>

      <div class="span4 dica">
        <i class="sprite-aspa-esquerda"></i>
        <h2><a href="#"><?php echo $dica->getTitle(); ?></a></h2>
        <p><?php echo $dica->getDescription(); ?></p>
        <i class="sprite-aspa-direita"></i>
          <?php $download = $dica->Asset->retriveRelatedAssetsByRelationType("Download") ?>
          <?php if(count($download) > 0): ?>
            <?php if($download[0]->AssetType->getSlug() == "file"): ?>
        <a href="http://midia.cmais.com.br/assets/file/original/<?php echo $download[0]->AssetFile->getFile() ?>" title="Baixar">baixar</button>
            <?php endif; ?>
          <?php endif; ?>
      </div>
      
          <?php if(isset($artigo)): ?>
            <?php $preview = $artigo->Asset->retriveRelatedAssetsByRelationType("Preview") ?>
      <div class="span4 box-select">
        <a href="<?php echo $site->getSlug() ?>/<?php echo $forParents->getSlug() ?>/<?php echo $artigo->getSlug() ?>" title="<?php echo $artigo->getTitle() ?>"> <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $artigo->getTitle() ?>" /> </a>
        <h2><a><?php echo $artigo->getTitle() ?></a></h2>
        <p><?php echo $artigo->getDescription() ?></p>
      </div>
      <?php endif; ?>
      
      <div class="span4">
        <?php if(isset($displays['parceiros'])): ?>
          <?php if(count($displays['parceiros']) > 0): ?>
        <p>Conheça nossos parceiros:</p>
        <a class="publicidade" href="<?php echo $displays['parceiros'][0]->retriveUrl() ?>" title="<?php echo $displays['parceiros'][0]->getTitle() ?>">
          <img src="<?php echo $displays['parceiros'][0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $displays['parceiros'][0]->getTitle() ?>" />
        </a>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(isset($categories)): ?>
          <?php if(count($categories) > 0): ?>
        <p>Você também pode escolher o jogo de acordo com as preferências da criança:</p>
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret sprite-seta-down-amarela"></span> </a>
          <ul class="dropdown-menu">
            <?php foreach($categories as $c): ?>
            <li><a href="<?php echo $c->retriveUrl() ?>" title="<?php echo $c->getTitle() ?>"><?php echo $c->getTitle() ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
          <?php endif; ?>
        <?php endif; ?>        
      </div>
      <h2 class="fechar-toogle ativo"><i class="sprite-seta-up"></i></h2>
    </div>
    
    <span class="linha"></span>
  </section>
    <?php endif; ?>
  <?php endif; ?>