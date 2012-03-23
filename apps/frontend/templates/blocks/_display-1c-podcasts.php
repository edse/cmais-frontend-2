            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <div class="box-padrao grid1">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                    </div>
                  </div>
                  <div class="conteudo para-ouvir podcast">
                    <ul class="bg-branco">
                    <?php foreach($displays as $k => $d): ?>
                      <li>
                        <a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                        <p class="txt"><?php echo $d->getDescription() ?></p>
                      </li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                  <div class="detalhe-borda grid1"></div>
                </div>
              <?php endif; ?>
            <?php endif; ?>
