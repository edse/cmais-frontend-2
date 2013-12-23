          
          <ul class="menu-interna grid3">
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
            <?php foreach($siteSections as $s): ?>
              <?php if($s->getSlug() == "programasNAO"): ?>
                <?php 
                $programs = Doctrine_Query::create()
                  ->select('p.*')
                  ->from('Program p, ChannelProgram cp, Site s')
                  ->where('p.id = cp.program_id AND s.id = p.site_id')
                  ->andWhere('cp.channel_id = ?', (int)6)
                  ->andWhere('p.is_in_menu = 1')
                  ->orderBy('p.title')
                  ->execute();
                ?>
                <li class="m-<?php echo $s->getSlug() ?> span <?php if($s->getSlug() == $section->getSlug()) echo "active" ?>"><a href="http://culturafm.cmais.com.br/<?php echo $s->getSlug()?>" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none; width: auto;">
                    <ul style="display:block;">
                    <?php foreach($programs as $p): ?>
                      <li><a href="http://culturafm.cmais.com.br/<?php echo $p->getSlug()?>"><?php echo $p->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <?php $subsections = $s->subsections(); ?>
                <?php if(count($subsections) > 0): ?>
                  <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                    <div class="submenu-interna toggle-menu" style="display:none; width: auto;">
                      <ul style="display:block;">
                      <?php foreach($subsections as $s): ?>
                        <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                      <?php endforeach; ?>
                      </ul>
                    </div>
                  </li>
                <?php else: ?>
                  <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
                <?php endif; ?>
                  
              <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>
             <li class="m-search">
                <!--search-->
                <form id="search" role="search" class="fixed-font clearfix" action="/culturafm/buscar" method="get">
                  <input type="text" name="busca" id="search_field" title="Campo de busca" value="BUSCA" required="">
                  <input type="submit" id="search_submit" value="ok">
                  <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                </form>
                <!--/search-->
              </li>
          </ul>
          <!-- /menu interna -->
          
