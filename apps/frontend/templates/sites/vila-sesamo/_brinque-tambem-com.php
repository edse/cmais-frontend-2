<?php
  /*
   * "BRINQUE TAMBÉM COM"
   * 
   * Verifica se o asset faz parte da campanha e pega somente assets da mesma. Senão, pega assets com tags relacionadas, concatenando com assets da mesma categoria e por último assets da mesma seção entre vídeos, atividades ou jogos.
   * 
   * OBS: Isso ainda está ruim, pois precisa aparecer em primeiro lugar assets que tem o maior número de tags relacionadas com o asset principal. Além disso, o ideal seria resolver tudo numa query só!
   * 
   */
  
  $see_also = false; // somente uma flag de controle. Se falso, nada aqui aparece no site. Se verdadeiro, foi porque atendeu alguma das condições abaixo...
  
  if($campaign) { // se o asset fizer parte de uma campanha, o "brinque também com" só terá assets da mesma...
    $see_also_by_campaign = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('a.site_id = ?', $site->getId())
      ->andWhere('sa.asset_id = a.id')
      ->andWhere('sa.section_id = ?', $campaign->getId())
      ->andWhereIn('sa.section_id', array(2387,2388,2389))
      ->andWhere('a.asset_type_id = ?', 1)
      ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
      ->andWhere('a.id != ?', $asset->getId())
      ->andWhere('a.is_active = ?', 1)
      ->orderby('sa.display_order')
      ->limit(80)
      ->execute();
      
    if(count($see_also_by_campaign) > 0) {
      $see_also = true;
    }
  }
  else { // senão, prioriza assets com a mesma tag, concatenando em seguida com assets da mesma categoria e por último com assets da mesma seção, juntando tudo isso em um só carrossel.
    $tags = array();
    if(count($asset->getTags())>0){
      foreach($asset->getTags() as $t)
        $tags[] = $t;
    }
    if(count($tags) > 0) {
      $see_also_by_tags = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa, tag t, tagging tg')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhereIn('sa.section_id', array(2387,2388,2389))
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.is_active = ?', 1)
        ->andWhere('tg.taggable_id = a.id')
        ->andWhere('tg.tag_id = t.id')
        ->andWhereIn('t.name', $tags)
        ->andWhere('a.id != ?', $asset->getId())
        ->andWhere('a.asset_type_id = ?', 1)
        ->limit(80)
        ->execute();
      if(count($see_also_by_tags) > 0) {
        $see_also = true;
      }
    }

    foreach($categories as $c) {
      $categorySlugs[] = $c->getSlug();
    }
    if(count($categories) > 0) {
      $see_also_by_categories = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhereIn('sa.section_id', $categorySlugs)
        ->andWhereIn('sa.section_id', array(2387,2388,2389))
        ->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.id != ?', $asset->getId())
        ->andWhere('a.is_active = ?', 1)
        ->orderby('sa.display_order')
        ->limit(80)
        ->execute();
      if(count($see_also_by_categories) > 0) {
        $see_also = true;
      }
    }
    
    $see_also_by_section = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('a.site_id = ?', $site->getId())
      ->andWhere('sa.asset_id = a.id')
      ->andWhere('sa.section_id = ?', $section->getId())
      ->andWhere('a.asset_type_id = ?', 1)
      ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
      ->andWhere('a.id != ?', $asset->getId())
      ->andWhere('a.is_active = ?', 1)
      ->orderby('sa.display_order')
      ->limit(80)
      ->execute();
    if(count($see_also_by_section) > 0) {
      $see_also = true;
    }
  }   
?>
  <?php if($see_also): ?>
  <section class="relacionados">
    <h2>Brinque também com:</h2>
    <div id="carrossel-interna">
      <div class="carrossel-i" id="carrossel-i"> 
        <div class="slider">
          <div class="slider-mask-wrap">
            <div class="slider-mask">
              <ul class="slider-target">
                <?php if($campaign): ?>
                  <?php if(count($see_also_by_campaign) > 0): ?>
                    <?php foreach($see_also_by_campaign as $k=>$d): ?>
                      <?php
                        $sections = $d->getSections();
                        foreach($sections as $s) {
                          if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                            $assetSection = $s;
                            break;
                          }
                        }
                      ?>
                <!--li class="video"-->
                <li class="<?php echo $assetSection; ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php else: ?>
                  <?php if(isset($see_also_by_tags)): ?>
                    <?php if(count($see_also_by_tags) > 0): ?>
                      <?php foreach($see_also_by_tags as $k=>$d): ?>
                        <?php
                          $sections = $d->getSections();
                          foreach($sections as $s) {
                            if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                              $assetSection = $s;
                              break;
                            }
                          }
                          $assetID[] = $d->getId();
                        ?>
                <!--li class="video"-->
                <li class="<?php echo $assetSection ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php if(isset($see_also_by_categories)): ?>
                    <?php if(count($see_also_by_categories) > 0): ?>
                      <?php foreach($see_also_by_categories as $k=>$d): ?>
                        <?php if(!in_array($d->getId(), $assetID)): ?>
                          <?php
                            $sections = $d->getSections();
                            foreach($sections as $s) {
                              if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                                $assetSection = $s;
                                break;
                              }
                            }
                            $assetID[] = $d->getId();
                          ?>
                <!--li class="video"-->
                <li class="<?php echo $assetSection ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  
                  
                  <?php if(isset($see_also_by_section)): ?>
                    <?php if(count($see_also_by_section) > 0): ?>
                      <?php foreach($see_also_by_section as $k=>$d): ?>
                        <?php if(!in_array($d->getId(), $assetID)): ?> 
                          <?php $assetID[] = $d->getId(); ?>
                <!--li class="video"-->
                <li class="<?php echo $section->getTitle() ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  
                <?php endif; ?>
              </ul>
            </div>
          </div>
              
          <div class="slider-nav">
            <div class="arrow-left arrow personagem">
              <span title="Back" class="sprite-seta-esquerda personagens" style="display:block;"></span>
            </div>
            <div class="arrow-right arrow personagem">
              <span title="Next" class="sprite-seta-direita personagens" style="display:block;"></span>
            </div>
          </div>
          
        </div>
      </div>
    </div>    
    <span class="divisa tipo2"></span>
  </section>
  <?php endif; ?>