          <div id="menu-rodape" class="grid3">
            <ul class="abas-menu abas">
              <li class="ativo minha-cultura"><a href="#minha-cultura" title="minha cultura">minha cultura</a><span class="decoracao"></span></li>
              <li class="programas"><a href="#programas" title="Programas">programas</a><span class="decoracao"></span></li>
              <li class="recentes"><a href="#recentes" title="+ Recentes">+ Recentes</a><span class="decoracao"></span></li>
            </ul>
            <div class="abas-conteudo conteudo-rodape grid3">
              <div id="minha-cultura" class="filho blocos" style="display:block;">
                <div class="carrossel">

                  <?php if(isset($cultura)): ?>
                  <ul class="minha-cultura">
                    <?php foreach($cultura as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>

                </div>
              </div>
              <!-- / BLOCOS -->
              
              <!-- BLOCOS -->
              <div id="programas" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  
                  <?php if(isset($programas)): ?>
                  <ul class="programas">
                    <?php foreach($programas as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                  
                </div>
              </div>
              <!-- / BLOCOS -->
              
              <!-- BLOCOS -->
              <div id="recentes" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($recentes)): ?>
                  <ul class="recentes">
                    <?php foreach($recentes as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>

                </div>
              </div>
              <!-- / BLOCOS -->
              
              <!-- PAGINACAO -->
              <div class="paginacao grid3">
                <!-- <p class="txt-12">P&aacute;gina 1 de 255</p> -->
              </div>
              <!-- PAGINACAO -->
              
            </div>
            
          </div>