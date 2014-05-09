          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna grid3">
            <?php foreach($siteSections as $s): ?>
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
                <li class="m-<?php echo $s->getSlug() ?>">
                <?php if($section->getSlug()): ?>
                	<?php if($s->getSlug() == $section->getSlug()): ?>
                	<a class="selected" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a>
                	<?php else: ?>
                	<a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a>
                	<?php endif; ?>
                	<?php if($s->getSlug() == 'chat-ao-vivo'): ?>
									<div class="chat-ao-vivo">AO VIVO</div>
									<?php endif; ?>          	
                <?php else: ?>
                	<a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a>
                <?php endif; ?>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          
          <div class="castelo18">

           <!--a href="https://twitter.com/#!/search/realtime/castelo18anos" target="_blank"><img class="twitter" src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-menu-twitter.png" alt="Twitter"></a-->
           <!--a href="http://statigr.am/viewer.php#/tag/castelo18anos/" target="_blank"><img class="instangram" src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-menu-instagram.png" alt="Instangram"></a-->
            <!-- curtir -->
          <div class="redes">
            <div class="curtir">
              <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
            </div>
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
          </div>
          <!-- /curtir -->
         </div>