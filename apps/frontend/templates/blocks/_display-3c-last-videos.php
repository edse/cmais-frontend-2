      <?php if(isset($displays)): ?>
        <?php if(count($displays) > 0): ?>                
          <div id="menu-rodape" class="grid3">
            <ul class="abas-menu abas">
              <li class="neutro">
                <p><?php if(isset($title)): ?><?php echo $title ?><?php else: ?>&uacute;ltimos v&iacute;deos<?php endif; ?></p>
              </li>
            </ul>

            <div class="abas-conteudo conteudo-rodape grid3">
              <div class="filho blocos" style="display:block;">
                <div class="carrossel" id="carrossel4">
                  <ul class="jornalismo">
                    <?php foreach($displays as $k => $d): ?>
                      <?php if($d->Asset->AssetVideo->getYoutubeId() != ""): ?> 
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg">
                          <img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span>
                        </a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><?php echo $d->getTitle() ?></a>
                      </div>
                    </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
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
        <?php endif; ?>
      <?php endif; ?>