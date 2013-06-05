            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
            <!-- BOX PADRAO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                </div>
              </div>
              <div class="bg-cinza">
                 <?php echo html_entity_decode($displays[0]->getHtml()) ?>
              </div>
            </div>
            <!-- BOX PADRAO -->
              <?php endif; ?>
            <?php endif; ?>