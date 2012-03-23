            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
                <!-- BOX PADRAO Previsao -->
                <div class="box-padrao grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>previs&atilde;o do tempo</h4>
                    </div>
                  </div>
                  <?php if($displays[0]->getHtml()): ?>
                  <div class="tempo">
                    <?php echo html_entity_decode($displays[0]->getHtml()) ?>
                    <?php /*
                    <iframe class="marg" src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=418,530,499,553,558&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0"></iframe>
                    <iframe src="http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=271,56,107,60,61&SKIN=laranja" scrolling="no" frameborder="0" width="150" height="170" marginheight="0" marginwidth="0"></iframe>
                    */ ?>
                  </div>
                  <?php endif; ?>
                </div>
                <!-- BOX PADRAO Previsao -->
              <?php endif; ?>
            <?php endif; ?>
