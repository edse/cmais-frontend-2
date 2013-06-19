          <?php if(count($siteSections) > 0): ?>
          <div class="menu-vitrine">
            <ul>
              <?php foreach($siteSections as $s): ?>
              <li><a href="/<?php echo $s->getSlug() ?>" title="<?php echo $s->getTitle() ?>" class="ativo">Versão Ipad</a><span></span></li>
              <?php endforeach; ?>
              <li><a href="javascript:;" title="Sobre a Revista" class="btn-sobre">Sobre a Revista<i class="icon-chevron-down icon-white"></i></a>
                <p class="sobre" style="display:none"><?php $site->getDescription() ?></p>
              </li>
            </ul>
          </div>
          <?php endif; ?>
