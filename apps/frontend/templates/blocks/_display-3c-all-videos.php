          <!-- MENU-RODAPE -->
          <div class="grid3" id="menu-rodape">
            <ul class="abas-menu abas">
              <li class="neutro" style="width: auto;"><p>todos os vídeos</p></li>
              <li class="recentes ativo" style="width: auto;"><a title="+ Recentes" href="#recentes">+ Recentes</a><span class="decoracao"></span></li>
              <li class="vistos" style="width: auto;"><a title="Vistos" href="#vistos">+ vistos</a><span class="decoracao"></span></li>
              <li class="a-z" style="width: auto;"><a title="de A a Z" href="#a-z">Vídeos de A - Z</a><span class="decoracao"></span></li>
            </ul>
            <div class="abas-conteudo conteudo-rodape grid3" id="galeria-videos">

              <!-- BLOCOS -->
              <div style="display: block;" class="filho blocos" id="recentes">
                <div class="carrossel">
                  <?php if(isset($recentes)): ?>
                    <?php foreach($recentes as $d): ?>
                      <div class="conteudo-lista">
                        <a class="bg" href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->Site->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" style="width: 200px" /><span></span></a>
                        <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>

              <div style="display:none;" class="filho blocos" id="vistos">
                <div class="carrossel">
                  <?php if(isset($populares)): ?>
                    <?php foreach($populares as $d): ?>
                      <div class="conteudo-lista">
                        <a class="bg" href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->Site->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" style="width: 200px" /><span></span></a>
                        <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>

              <div style="display:none;" class="filho blocos" id="a-z">
                <div class="carrossel">
                  <?php if(isset($az)): ?>
                    <?php foreach($az as $d): ?>
                      <div class="conteudo-lista">
                        <a class="bg" href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->Site->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" style="width: 200px" /><span></span></a>
                        <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                      </div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS -->
              
              <!-- PAGINACAO -->
              <div class="paginacao grid3">
                <p class="txt-12"></p>
              </div>
              <!-- PAGINACAO -->
            </div>
          </div>
          <!-- /MENU-RODAPE -->
